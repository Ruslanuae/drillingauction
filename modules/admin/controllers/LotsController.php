<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Lots;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\modules\admin\models\AuctionDate;
use app\modules\admin\models\AuctionsLots;

/**
 * LotsController implements the CRUD actions for Lots model.
 */
class LotsController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Lots models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Lots::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Lots model.
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
     * Creates a new Lots model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Lots();
        if ($model->load(Yii::$app->request->post()) && $model->save())
        {
            $date_s = $model->date_sale;
            $aucDates = AuctionDate::find()->asArray()->all();
            foreach ($aucDates as $aucDate)
            {
                if($aucDate['id'] == $date_s)
                {
                    $lot_items = new AuctionsLots();
                    $lot_items->auc_id = $aucDate['id'];
                    $lot_items->lot_id = $model->id;
                    $lot_items->save();
                    $model->date_sale = $aucDate['auc_date'];
                    $model->save();
                }
            }
            Yii::$app->session->setFlash('success', "Лот {$model->manufactured} добавлен");
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save())
        {
            $date_s = $model->date_sale;
            $aucDates = AuctionDate::find()->asArray()->all();
            foreach ($aucDates as $aucDate)
            {
                if($aucDate['id'] == $date_s)
                {
                    $lot_items = AuctionsLots::findOne(['lot_id' => $model->id]);
                    $lot_items->auc_id = $aucDate['id'];
                    $lot_items->save();
                    $model->date_sale = $aucDate['auc_date'];
                    $model->save();
                }
            }
            //Если картинка одна
            $model->image = UploadedFile::getInstance($model, "image");
            if($model->image)
            {$model->upload();/*Метод описан в моделе*/}
            //Решение ошибки, когда загружается одно фото
            unset($model->image);
            //Если галерея
            $model->gallery = UploadedFile::getInstances($model, "gallery");
            $model->uploadGallery();
            Yii::$app->session->setFlash('success', "Лот {$model->manufactured} обновлен");
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', ['model' => $model]);
    }

    /**
     * Deletes an existing Lots model.
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
     * Finds the Lots model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Lots the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Lots::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
