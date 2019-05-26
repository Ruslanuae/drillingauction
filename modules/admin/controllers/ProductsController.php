<?php

namespace app\modules\admin\controllers;

use app\models\Categories;
use Yii;
use app\modules\admin\models\Products;
use yii\data\ActiveDataProvider;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\Contacts;
use app\models\Image;
use app\models\User;
use app\models\Product;
use yii\helpers\Url;
use app\modules\admin\models\FilterCategory;
use app\modules\admin\models\FilterLot;
use app\modules\admin\models\AuctionDate;
use app\modules\admin\models\AuctionsLots;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Products models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Products::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSend()
    {
//        $dataProvider = new ActiveDataProvider([
//            'query' => Products::find()->where(['>','date_posted',date('Y-m-d H:i:s', (time()-60*60*24))]),
//        ]);
        $products = Products::find()->where(['>', 'date_posted', date('Y-m-d H:i:s', (time() - 60 * 60 * 24))])->all();
        //$users = User::find()->all;
        $domains = Yii::$app->params['domains'];
        $users = User::find()->where(['subscribe' => 1])->asArray()->all();
        $images = Image::find()->asArray()->all();
        $contacts = Contacts::find()->asArray()->one();
        if ($products != null) {
            foreach ($users as $user) {
                //Для пользователя
                Yii::$app->mailer->compose('new_product', ['products' => $products, 'domains' => $domains, 'contacts' => $contacts, 'images' => $images, 'user' => $user])
                    ->setFrom([Yii::$app->params['adminEmail'] => 'STIGL F.Z.E.'])
                    ->setTo($user['email'])
                    //->setTo('alexandr.shvets96@gmail.com')
                    ->setSubject('New Products on STIGL F.Z.E. from last day')
                    //Пометить как массовую рассылку
                    ->setHeader('Precedence', 'bulk')
                    //Пометить фильтром
                    ->setHeader('List-id', 'STIGL')
                    //Стандартный метод отписки
                    ->setHeader('List-Unsubscribe', Url::to([$domains . '/page/unsubscribe/?mail=' . $user['email']], true))
                    ->send();
            }
            Yii::$app->getSession()->setFlash('success', 'Mails send to Users');
        } else
            Yii::$app->getSession()->setFlash('error', 'Mails don`t send to Users');
        $this->redirect('/admin/products/');
    }

    /**
     * Displays a single Products model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Products();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $filter = new FilterLot();
            $filter->product_id = $model->id;
            $filter->category_id = 1;
            $filter->value = $model->seller;
            $filter->save();

            $filter = new FilterLot();
            $filter->product_id = $model->id;
            $filter->category_id = 2;
            $filter->value = $model->location;
            $filter->save();

            $filter = new FilterLot();
            $filter->product_id = $model->id;
            $filter->category_id = 3;
            $cat = Categories::find()->where(['id' => $model->category])->asArray()->one();
            $filter->value = $cat['name'];
            $filter->save();

            $date_s = $model->date_sale;
            $aucDates = AuctionDate::find()->asArray()->all();
            foreach ($aucDates as $aucDate) {
                if ($aucDate['id'] == $date_s) {
                    $lot_items = new AuctionsLots();
                    $lot_items->auc_id = $aucDate['id'];
                    $lot_items->lot_id = $model->id;
                    $lot_items->save();
                    $model->date_sale = $aucDate['auc_date'];
                    $model->save();
                }
            }

            //Если картинка одна
            $model->image = UploadedFile::getInstance($model, "image");
            if ($model->image) {
                $model->upload();/*Метод описан в моделе*/
            }
            //Решение ошибки, когда загружается одно фото
            unset($model->image);
            //Если галерея
            $model->gallery = UploadedFile::getInstances($model, "gallery");
            $model->uploadGallery();
            //Флеш сообщение
            Yii::$app->session->setFlash('success', "Товар {$model->manufacturer} добавлен");
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Products model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $filter = FilterLot::find()->where(['AND', ['product_id' => $model->id], ['category_id' => 1]])->one();
            $filter->value = $model['seller'];
            $filter->save();

            $filter = FilterLot::find()->where(['AND', ['product_id' => $model->id], ['category_id' => 2]])->one();
            $filter->value = $model->location;
            $filter->save();

            $filter = FilterLot::find()->where(['AND', ['product_id' => $model->id], ['category_id' => 3]])->one();
            $cat = Categories::find()->where(['id' => $model->category])->asArray()->one();
            $filter->value = $cat['name'];
            $filter->save();
            //Если картинка одна
            $model->image = UploadedFile::getInstance($model, "image");
            if ($model->image) {
                $model->upload();/*Метод описан в моделе*/
            }
            //Решение ошибки, когда загружается одно фото
            unset($model->image);
            //Если галерея
            $model->gallery = UploadedFile::getInstances($model, "gallery");
            $model->uploadGallery();
            $date_s = $model->date_sale;
            $aucDates = AuctionDate::find()->asArray()->all();
            foreach ($aucDates as $aucDate) {
                if ($aucDate['id'] == $date_s) {

                    $lot_items = AuctionsLots::findOne(['lot_id' => $model->id]);
                    $lot_items->auc_id = $aucDate['id'];
                    $lot_items->save();
                    $model->date_sale = $aucDate['auc_date'];
                    $model->save();
                }
            }
            Yii::$app->session->setFlash('success', "Товар {$model->manufacturer} обновлен");
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('update', ['model' => $model,]);
    }

    /**
     * Deletes an existing Products model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Products::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
