<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\SendingMessages;
use app\models\Contacts;
use app\models\ImportMail;
use app\models\User;
use app\models\Products;
use yii\helpers\Url;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SendingMessagesController implements the CRUD actions for SendingMessages model.
 */
class SendingMessagesController extends Controller
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
     * Lists all SendingMessages models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => SendingMessages::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SendingMessages model.
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
     * Creates a new SendingMessages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SendingMessages();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
    public function actionSendReg()
    {
        $domains = Yii::$app->params['domains'];
        $users = User::find()->where(['subscribe'=>1])->asArray()->all();
        $send_mes = SendingMessages::find()->asArray()->one();
        $contacts = Contacts::find()->asArray()->one();
        if($send_mes!=null)
        {
            foreach ($users as $user)
            {
                //Для пользователя
                Yii::$app->mailer->compose('send_reg', ['domains'=>$domains, 'contacts'=>$contacts, 'send_mes'=>$send_mes, 'user'=>$user])
                    ->setFrom([Yii::$app->params['adminEmail'] => 'STIGL F.Z.E.'])
                    ->setTo($user['email'])
                    ->setSubject($send_mes['heading'])
                    //Пометить как массовую рассылку
                    ->setHeader('Precedence', 'bulk')
                    //Пометить фильтром
                    ->setHeader('List-id', 'STIGL')
                    //Стандартный метод отписки
                    ->setHeader('List-Unsubscribe', Url::to([$domains.'/page/unsubscribe?mail='.$user['email']], true))
                    ->send();
            }
            Yii::$app->getSession()->setFlash('success', 'Mails send to Users');
        }
        else
            Yii::$app->getSession()->setFlash('error', 'Mails don`t send to Users');
        $this->redirect('/admin/sending-messages/');
    }

    public function actionSendBase()
    {
        $domains = Yii::$app->params['domains'];
        $users = ImportMail::find()->where(['subscribe'=>1])->asArray()->all();
        $send_mes = SendingMessages::find()->asArray()->one();
        $contacts = Contacts::find()->asArray()->one();
        if($send_mes!=null)
        {
            foreach ($users as $user)
            {
                //Для пользователя
                Yii::$app->mailer->compose('send_base', ['domains'=>$domains, 'contacts'=>$contacts, 'send_mes'=>$send_mes, 'user'=>$user])
                    ->setFrom([Yii::$app->params['adminEmail'] => 'STIGL F.Z.E.'])
                    ->setTo($user['email'])
                    ->setSubject($send_mes['heading'])
                    //Пометить как массовую рассылку
                    ->setHeader('Precedence', 'bulk')
                    //Пометить фильтром
                    ->setHeader('List-id', 'STIGL')
                    //Стандартный метод отписки
                    ->setHeader('List-Unsubscribe', Url::to([$domains.'/page/unsubscribe-base?mail='.$user['email']], true))
                    ->send();
            }
            Yii::$app->getSession()->setFlash('success', 'Mails send to Users');
        }
        else
            Yii::$app->getSession()->setFlash('error', 'Mails don`t send to Users');
        $this->redirect('/admin/sending-messages/');
    }
    
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
     * Deletes an existing SendingMessages model.
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
     * Finds the SendingMessages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SendingMessages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SendingMessages::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
