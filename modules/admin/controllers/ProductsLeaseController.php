<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\ProductsLease;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProductsLeaseController implements the CRUD actions for ProductsLease model.
 */
class ProductsLeaseController extends Controller
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
     * Lists all ProductsLease models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => ProductsLease::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProductsLease model.
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
     * Creates a new ProductsLease model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProductsLease();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //Если картинка одна
            $model->image = UploadedFile::getInstance($model, "image");
            if($model->image)
            {$model->upload();/*Метод описан в моделе*/}
            //Решение ошибки, когда загружается одно фото
            unset($model->image);
            //Если галерея
            $model->gallery = UploadedFile::getInstances($model, "gallery");
            $model->uploadGallery();
            //Флеш сообщение
            Yii::$app->session->setFlash('success', "Товар аренды {$model->manufacturer} добавлен");
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ProductsLease model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //Если картинка одна
            $model->image = UploadedFile::getInstance($model, "image");
            if($model->image)
            {$model->upload();/*Метод описан в моделе*/}
            //Решение ошибки, когда загружается одно фото
            unset($model->image);
            //Если галерея
            $model->gallery = UploadedFile::getInstances($model, "gallery");
            $model->uploadGallery();
            Yii::$app->session->setFlash('success', "Товар аренды {$model->manufacturer} обновлен");
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('update', ['model' => $model,]);
    }

    /**
     * Deletes an existing ProductsLease model.
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
     * Finds the ProductsLease model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ProductsLease the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ProductsLease::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
