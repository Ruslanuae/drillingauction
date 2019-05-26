<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\ImportMail;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;

/**
 * ImportMailController implements the CRUD actions for ImportMail model.
 */
class ImportMailController extends Controller
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
     * Lists all ImportMail models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new ImportMail();
        if ($model->load(Yii::$app->request->post()))
        {
            $model->import_file = UploadedFile::getInstance($model, 'import_file');
            if ($model->import_file)
            {
                $time = time();
                $model->import_file->saveAs($time . '.' . $model->import_file->extension);
                $model->import_file = $time . '.' . $model->import_file->extension;
                $handle = fopen($model->import_file, "r");
                while (($fileop = fgetcsv($handle, 1000, ",")) !== false) {
                    $email = $fileop[0];
                    $sql = "INSERT INTO import_mail (email) VALUES ('$email')";
                    $query = Yii::$app->db->createCommand($sql)->execute();
                }
                if ($query) {
                    Yii::$app->getSession()->setFlash('success', 'Import file successfully!!!');
                }
                else
                {
                    Yii::$app->getSession()->setFlash('error', 'Error to import file!!!');
                }
            }
            $model->save();
            return $this->redirect(['/admin/import-mail', 'id' => $model->id]);
        }
        else
        {
            $dataProvider = new ActiveDataProvider([
                'query' => ImportMail::find(),
            ]);
            $model = new ImportMail();
            return $this->render('index', [
                'dataProvider' => $dataProvider, 'model' => $model
            ]);
        }
    }

    /**
     * Displays a single ImportMail model.
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
     * Creates a new ImportMail model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ImportMail();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ImportMail model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ImportMail model.
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
     * Finds the ImportMail model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ImportMail the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ImportMail::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

