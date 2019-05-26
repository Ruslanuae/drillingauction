<?php

namespace app\controllers;

use app\models\ImportMail;
use app\models\Signup;
use app\models\VictoryUser;
use app\modules\admin\models\RateHistory;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use app\models\SortForm;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Categories;
use app\models\CategoriesDrilling;
use app\models\Countries;
use app\modules\admin\models\Products;
use app\models\ProductsDrilling;
use app\models\AccountActivation;
use app\models\User;
use app\models\Image;
use app\models\FilterLot;
use app\models\FilterCategory;
use app\models\Lots;
use app\models\AuctionDate;
use app\models\AuctionsLots;
use app\models\UserDeposit;
use app\models\UserDepositHistory;
use app\models\News;
use app\models\Contacts;
use app\models\AuctionLotCondition;
use app\models\AuctionProductCondition;
use yii\data\Pagination;
use app\models\Search;
use yii\helpers\Html;
use yii\data\Query;
use app\controllers\Sort;
use app\models\SendEmailForm;
use app\models\ResetPasswordForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;

//Контроллер для страниц сайта
class PageController extends Controller
{
    /*
     *
     * ****************************************** ТОВАРЫ ***************************************************************
     *
     * */
    //Список всех товаров All Products
    public function actionAllCatalog()
    {
        $categories = Categories::find()->asArray()->all();
        $valueOrder = Yii::$app->request->get('order');
        $valueSort = Yii::$app->request->get('sort');
        $order_p = Yii::$app->params['order_p'];
        if ($valueOrder && $valueSort) {
            $products = PageController::filter($valueSort, $valueOrder);
        } elseif ($valueOrder && !$valueSort) {
            $products = Products::find()->orderBy($order_p[$valueOrder][1])->asArray()->all();
        } elseif (!$valueOrder && $valueSort) {
            $products = PageController::filter($valueSort, $valueOrder);
        } else {
            $products = Products::find()->asArray()->all();
        }

        //$pages = new Pagination(['totalCount' => $product -> count(), 'pageSize' => 24, 'forcePageParam' => false, 'pageSizeParam' => false]);
        //$products_array =  $product->offset($pages->offset)->limit($pages->limit)->all();
        $count_products = count($products);
        $chara_cat = FilterCategory::find()->where(['parent_id' => '0'])->orderBy('position')->orderBy('name ASC')->asArray()->all();
        $subchara_cat = FilterCategory::find()->where(['>', 'parent_id', '0'])->orderBy('name ASC')->asArray()->all();
        if ($valueSort) {
            $sort = explode(' ', $valueSort);
            $sortstr = implode("+", $sort);
        }
        //Проверка на сетка или список
//        if(isset($_GET['view']) && $_GET['view']==1) $view=1;
//        else $view=0;
        //return $this->render('all-catalog', compact('products_array', 'count_products', 'pages', 'valueOrder', 'order_p', 'categories'));
        return $this->render('all-catalog', compact('products', 'count_products', 'pages', 'valueOrder', 'order_p', 'categories', 'chara_cat', 'subchara_cat', 'sort', 'sortstr'));
    }

    //Список товаров выбранных по категориям
    public function actionListproducts($id)
    {

        //Проверка на Get и на целое число INT
        //$this->layout = 'default';
        if (isset($_GET['id']) && $_GET['id'] != "" && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
            $categoriesAll = Categories::find()->asArray()->all();
            //Выводим из БД категории
            $id = Yii::$app->request->get('id');
            $categories = Categories::findOne($id);
            if (count($categories) > 0) {
                $id = Yii::$app->request->get('id');
                $valueOrder = Yii::$app->request->get('order');
                $order_p = Yii::$app->params['order_p'];
                if ($valueOrder) {
                    $query = Products::find()->where(['category' => $id])->orderBy($order_p[$valueOrder][1]);
                } else {
                    $query = Products::find()->where(['category' => $id]);
                }
                //Для постстраничной навигации
                $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 12, 'forcePageParam' => false, 'pageSizeParam' => false]);
                $products_array = $query->offset($pages->offset)->limit($pages->limit)->all();
                //Колличество товаров отображаемое на странице "В наличии: ...."
                $count_products = $query->count();
                //Проверка на сетка или список
                if (isset($_GET['view']) && $_GET['view'] == 1) $view = 1;
                else $view = 0;
                //Обработчик для формы сортировки
                $model = new SortForm();
                if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                    $query = Products::find()->orderBy('id')->all();
                    return $this->render('listproducts', compact('categories', 'products_array', 'count_products', 'view', 'model', 'pages', 'query', 'categoriesAll'));
                }
                return $this->render('listproducts', compact('categories', 'products_array', 'count_products', 'view', 'model', 'pages', 'order_p', 'valueOrder', 'id', 'categoriesAll'));
            }
        }
        return $this->redirect(['page/all-catalog']);
    }
    //Страница списка категорий
//    public function actionCatalog()
//    {
//        $categories = Categories::find()->asArray()->all();
//        return $this->render('catalog', compact('categories'));
//    }

    //Страница выранного товара
    public function actionProduct($id)
    {
        //Проверка на Get и на целое число INT
        if (isset($_GET['id']) && $_GET['id'] != "" && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
            $id = Yii::$app->request->get('id');
            $product = Products::findOne($id);
            $product->views += 1;
            $product->save();
            return $this->render('product', compact('product'));
        }
        return $this->redirect(['page/all-catalog']);
    }

    public function actionSaleRent()
    {
        $categoriesDrilling = CategoriesDrilling::find()
        ->where('id IN (4,5)')
        ->asArray()
        ->all();
        
        return $this->render('sale-rent', compact('categoriesDrilling'));
    }
    
    public function actionCatalogDrilling()
    {
        $categoriesDrilling = CategoriesDrilling::find()
        ->where('id IN (1,2)')
        ->asArray()
        ->all();
        //var_dump($categoriesDrilling);die();
        
        return $this->render('catalog-drilling', compact('categoriesDrilling'));
    }

    /*
     *
     * ****************************************** END: ТОВАРЫ **********************************************************
     *
     * */


    /*
     *
     * ************************************** УСЛУГИ ПО БУРЕНИЮ НЕФТИ **************************************************
     *
     *
    */


    //Страница выбранной услуги
    public function actionListDrilling($id)
    {
        //Проверка на Get и на целое число INT
        //$this->layout = 'default';
        if (isset($_GET['id']) && $_GET['id'] != "" && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
            //Выводим из БД категории
            $id = Yii::$app->request->get('id');
            $categoriesDrilling = CategoriesDrilling::findOne($id);
            if (count($categoriesDrilling) > 0) {
                $id = Yii::$app->request->get('id');
                $valueOrder = Yii::$app->request->get('order');
                $order_p = Yii::$app->params['order_p'];
                if ($valueOrder) {
                    $drilling_array = ProductsDrilling::find()->where(['category' => $id])->orderBy($order_p[$valueOrder][1]);
                } else {
                    $drilling_array = ProductsDrilling::find()->where(['category' => $id]);
                }
                //Колличество товаров отображаемое на странице "В наличии: ...."
                $count_drilling = count($drilling_array);
                $dr = Yii::$app->request->get('dr');
                if (isset($dr)) {
                    BidController::goDoor();
                }
                return $this->render('list-drilling', compact('categoriesDrilling', 'drilling_array', 'count_drilling', 'order_p', 'order', 'id'));
            }
        }

        return $this->redirect(['page/catalog-drilling']);
    }

    /*
        *
        * ********************************** END: УСЛУГИ ПО БУРЕНИЮ НЕФТИ **********************************************
        *
        *
    */
    /*
     *
     * ********************************************** АРЕНДА ***********************************************************
     *
     *
    */


    //Страница всех выбранных товаров в аренде (All Products)
    public function actionAllCatalogLease()
    {
        $categories = Categories::find()->asArray()->all();
        $valueOrder = Yii::$app->request->get('order');
        $valueSort = Yii::$app->request->get('sort');
        $order_p = Yii::$app->params['order_p'];
        if ($valueOrder && $valueSort) {
            $products_array = PageController::filter($valueSort, $valueOrder);
        } elseif ($valueOrder && !$valueSort) {
            $products_array = Products::find()->orderBy($order_p[$valueOrder][1])->asArray()->all();
        } elseif (!$valueOrder && $valueSort) {
            $products_array = PageController::filter($valueSort, $valueOrder);
        } else {
            $products_array = Products::find()->asArray()->all();
        }

        //$pages = new Pagination(['totalCount' => $product -> count(), 'pageSize' => 24, 'forcePageParam' => qfalse, 'pageSizeParam' => false]);
        //$products_array =  $product->offset($pages->offset)->limit($pages->limit)->all();
        $count_products = count($products_array);
        $chara_cat = FilterCategory::find()->where(['parent_id' => '0'])->orderBy('position')->asArray()->all();
        $subchara_cat = FilterCategory::find()->where(['>', 'parent_id', '0'])->asArray()->all();
        if ($valueSort) {
            $sort = explode(' ', $valueSort);
            $sortstr = implode("+", $sort);
        }
        //return $this->render('all-catalog', compact('products_array', 'count_products', 'pages', 'valueOrder', 'order_p', 'categories'));
        return $this->render('all-catalog-lease', compact('products_array', 'count_products', 'pages', 'valueOrder', 'order_p', 'categories', 'chara_cat', 'subchara_cat', 'sort', 'sortstr'));
    }

    //Список товаров в аренде выбранных по категориям
    public function actionListLease($id)
    {
        //Проверка на Get и на целое число INT
        //$this->layout = 'default';
        if (isset($_GET['id']) && $_GET['id'] != "" && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
            //Выводим из БД категории
            $id = Yii::$app->request->get('id');
            $categoriesLease = Categories::findOne($id);
            if (count($categoriesLease) > 0) {
                $categoriesAll = Categories::find()->asArray()->all();
                $id = Yii::$app->request->get('id');
                $valueOrder = Yii::$app->request->get('order');
                $order_p = Yii::$app->params['order_p'];
                if ($valueOrder) {
                    $query = Products::find()->where(['category' => $id])->orderBy($order_p[$valueOrder][1]);
                } else {
                    $query = Products::find()->where(['category' => $id]);
                }
                //Для постстраничной навигации
                $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 12, 'forcePageParam' => false, 'pageSizeParam' => false]);
                $lease_array = $query->offset($pages->offset)->limit($pages->limit)->all();
                //Колличество товаров отображаемое на странице "В наличии: ...."
                $count_lease = $query->count();
                //Проверка на сетка или список
//                if(isset($_GET['view']) && $_GET['view']==1) $view=1;
//                else $view=0;
                //Обработчик для формы сортировки
                $model = new SortForm();
                if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                    $query = Products::find()->orderBy('id')->all();
                    return $this->render('list-lease', compact('categoriesLease', 'lease_array', 'count_lease', 'categoriesAll', 'model', 'pages', 'query'));
                }
                return $this->render('list-lease', compact('categoriesLease', 'lease_array', 'count_lease', 'categoriesAll', 'model', 'pages', 'order_p', 'valueOrder', 'id'));
            }
        }
        return $this->redirect(['page/all-catalog-lease']);
    }
    //Страница списка категорий аренды
//    public function actionCatalogLease()
//    {
//        $categoriesLease = Categories::find()->asArray()->all();
//        return $this->render('catalog-lease', compact('categoriesLease'));
//    }
    //Страница выбранного товара аренды
    public function actionProductLease($id)
    {
        //Проверка на Get и на целое число INT
        if (isset($_GET['id']) && $_GET['id'] != "" && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
            $id = Yii::$app->request->get('id');
            $productLease = Products::findOne($id);
            $productLease->views += 1;
            $productLease->save();
            return $this->render('product-lease', compact('productLease'));
        }
        return $this->redirect(['page/all-catalog-lease']);
    }


    /*
     *
     * ****************************************** END: АРЕНДА **********************************************************
     *
     *
    */
    public function actionSort()
    {
    }

    //Для страницы новости
    public function actionListnews()
    {
        $query = News::find()->asArray();
        $ImageNew = News::find()->asArray()->one();
        //Для постстраничной навигации
        $count_news = $query->count();
        $pages = new Pagination(['totalCount' => $count_news, 'pageSize' => 12, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $news_array = $query->offset($pages->offset)->limit($pages->limit)->all();
        //Колличество товаров отображаемое на странице "В наличии: ...."
        return $this->render('listnews', compact('news_array', 'count_news', 'pages', 'ImageNew'));
    }

    public function actionNew($id)
    {
        if (isset($_GET['id']) && $_GET['id'] != "" && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
            $id = Yii::$app->request->get('id');
            $new = News::findOne($id);
            return $this->render('new', compact('new'));
        } else {
            $query = News::find()->asArray();
            $ImageNew = News::find()->asArray()->one();
            //Для постстраничной навигации
            $count_news = $query->count();
            $pages = new Pagination(['totalCount' => $count_news, 'pageSize' => 12, 'forcePageParam' => false, 'pageSizeParam' => false]);
            $news_array = $query->offset($pages->offset)->limit($pages->limit)->all();
            return $this->render('page/listnews', compact('news_array', 'count_news', 'pages', 'ImageNew'));
        }
    }

    //Для страницы Аукцион
    public function actionAuctionCatalog()
    {
        $categories = Categories::find()->asArray()->all();
        $valueOrder = Yii::$app->request->get('order');
        $valueSort = Yii::$app->request->get('sort');
        $order_p = Yii::$app->params['order_p'];
        if ($valueOrder && $valueSort) {
            $lots_array = PageController::filter($valueSort, $valueOrder);
        } elseif ($valueOrder && !$valueSort) {
            $lots_array = Products::find()->orderBy($order_p[$valueOrder][1])->asArray()->all();
        } elseif (!$valueOrder && $valueSort) {
            $lots_array = PageController::filter($valueSort, $valueOrder);
        } else {
            $lots_array = Products::find()->asArray()->all();
        }

        //$pages = new Pagination(['totalCount' => $product -> count(), 'pageSize' => 24, 'forcePageParam' => false, 'pageSizeParam' => false]);
        //$products_array =  $product->offset($pages->offset)->limit($pages->limit)->all();
        $count_lots = count($lots_array);
        $chara_cat = FilterCategory::find()->where(['parent_id' => '0'])->orderBy('name ASC')->asArray()->all();
        $subchara_cat = FilterCategory::find()->where(['>', 'parent_id', '0'])->orderBy('name ASC')->asArray()->all();
        if ($valueSort) {
            $sort = explode(' ', $valueSort);
            $sortstr = implode("+", $sort);
        }

        return $this->render('auction-catalog', compact('lots_array', 'count_lots','valueOrder',
            'order_p', 'categories', 'chara_cat', 'subchara_cat', 'sort', 'sortstr'));

////////////////////////////////////////////////////////////////////////////////////////////////////////
    }

    public function actionListLots()
    {
        if (isset($_GET['id']) && $_GET['id'] != "" && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
            //Выводим из БД категории
            $id = Yii::$app->request->get('id');
            $lots_categories = Categories::findOne($id);
            $lots_categories_all = Categories::find()->asArray()->all();
            //$categories = Categories::find()->where(['id' => $_GET['id']])->asArray()->one();
            if (count($lots_categories) > 0) {
                //query -> products_array

                //$products_array = Products::find()->where(['category' => $_GET['id']])->asArray()->all();
                $id = Yii::$app->request->get('id');
                $query = Products::find()->where(['category' => $id]);
                //Для постстраничной навигации
                $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 12, 'forcePageParam' => false, 'pageSizeParam' => false]);
                $lots_array = $query->offset($pages->offset)->limit($pages->limit)->all();
                //Колличество товаров отображаемое на странице "В наличии: ...."
                $count_lots = $query->count();
                //$count_products = count($query);
                return $this->render('list-lots', compact('lots_categories_all', 'count_lots', 'lots_array', 'pages', 'lots_categories'));
            }
        } else {
            $lots_categories = Categories::find()->asArray()->all();
            $lots = Products::find()->asArray();
            $count_lots = $lots->count();
            $pages = new Pagination(['totalCount' => $count_lots, 'pageSize' => 12, 'forcePageParam' => false, 'pageSizeParam' => false]);
            $lots_array = $lots->offset($pages->offset)->limit($pages->limit)->all();
            //$this->layout = 'default';
            return $this->render('auction-catalog', compact('lots_categories', 'lots_array', 'count_lots', 'pages'));
        }
    }

    public function actionLot()
    {
        if (isset($_GET['id']) && $_GET['id'] != "" && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
            $id = Yii::$app->request->get('id');
//            $products_array = Products::find()->where(['id' => $_GET['id']])->asArray()->all();
            $prod_cond = AuctionProductCondition::find()->all();
            $lot_cond = AuctionLotCondition::find()->all();
            $lot = Products::findOne($id);
            $lot->views += 1;
            $lot->save();
            //$count_products = count($products_array);
            $auction = AuctionsLots::findOne(['lot_id' => $id]);
            $date = AuctionDate::findOne(['id' => $auction['auc_id']]);
            if (date('m/d/Y H:i', time()) >= date('m/d/Y H:i', (strtotime($date['auc_date']) - 60 * 60))) {
                $realtime = true;
                return $this->render('lot', compact('lot', 'lot_cond', 'prod_cond', 'date', 'realtime'));
            } else {
                $realtime = false;
                return $this->render('lot', compact('lot', 'lot_cond', 'prod_cond', 'date', 'realtime'));
            }
            //}
        } else {
            $lots_categories = Categories::find()->asArray()->all();
            $lots = Products::find()->asArray()->all();
            return $this->render('auction-catalog', compact('lots_categories', 'lots'));
        }
    }

    public function actionMain()
    {
        $this->layout = 'none';
        return $this->render('main');
    }

    public function actionAuctionRealTime()
    {
        $this->layout = 'none';
        if (isset($_GET['id']) && $_GET['id'] != "" && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
            //Принимаем ID
            $auc_id = Yii::$app->request->get('id');
            //Таблица списка всех лотов и аукционов по ID
            $tmp = array();
            $rows = (new \yii\db\Query())->select(['lot_id'])->from('auctions_lots')->where(['auc_id' => $auc_id])->all();
            foreach ($rows as $row) {
                array_push($tmp, $row['lot_id']);
            }
            $this->view->registerCssFile('/css/auction_real_time.css');
            $lots = Products::find()->where(['AND', ['id' => $tmp], ['lot_condition' => '1']])->asArray()->all();
            $prod_cond = AuctionProductCondition::find()->all();
            $lot_cond = AuctionLotCondition::find()->all();
            $count_lots = count($lots);
            $coming_soon = true;
            $auctionData = AuctionDate::find()->where(['id' => $auc_id])->asArray()->one();
            //debug('TimeZone '.date_default_timezone_get());
            //debug('Current Time '.date('m/d/Y H:i', time()));
            //debug(date('m/d/Y H:i',(strtotime($auctionData['auc_date'])-60*60)));
            if (date('m/d/Y H:i', time()) < date('m/d/Y H:i', (strtotime($auctionData['auc_date']))) && date('m/d/Y H:i', time()) >= date('m/d/Y H:i', (strtotime($auctionData['auc_date']) - 60 * 60))) {
                return $this->render('auction-real-time', compact('coming_soon', 'lots', 'prod_cond', 'lot_cond', 'count_lots', 'rows', 'auc_id', 'auctionData'));
            } else if (date('m/d/Y H:i', time()) >= date('m/d/Y H:i', strtotime($auctionData['auc_date']))) {

                return $this->render('auction-real-time', compact('lots', 'prod_cond', 'lot_cond', 'count_lots', 'rows', 'auc_id', 'auctionData'));
            } else {

                return $this->render('list-current-result', compact('lots', 'prod_cond', 'lot_cond', 'count_lots', 'rows', 'auc_id', 'auctionData'));
            }

            // return $this->render('auction-real-time', compact('lots', 'prod_cond', 'lot_cond', 'count_lots', 'rows', 'auc_id', 'images'));


            // debug($lots);

        }
        $date_lots = AuctionDate::find()->asArray()->all();
        return $this->render('auction-lists', compact('date_lots'));
    }

    public function actionFrameAuctionRealTime()
    {
        //$this->layout = 'frame';
        if (isset($_GET['id']) && $_GET['id'] != "" && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {

            //Принимаем ID
            $auc_id = $_GET['id'];

            //Таблица списка всех лотов и аукционов по ID
            $tmp = array();
            $rows = (new \yii\db\Query())->select(['lot_id'])->from('auctions_lots')->where(['auc_id' => $auc_id])->all();
            foreach ($rows as $row) {
                array_push($tmp, $row['lot_id']);
            }
            $this->view->registerCssFile('/css/auction_real_time.css');
            $lots = Products::find()->where(['AND', ['id' => $tmp], ['lot_condition' => '1']])->asArray()->all();
            $images = array();
            foreach ($lots as $lot) {
                array_push($images, Image::find()->where(['AND', ['itemID' => $lot['id']], ['modelName' => 'Lots']])->asArray()->all());
            }
            //debug($images);
            $prod_cond = AuctionProductCondition::find()->all();
            $lot_cond = AuctionLotCondition::find()->all();
            $count_lots = count($lots);

            // debug($lots);
            return $this->render('frame-auction-real-time', compact('lots', 'prod_cond', 'lot_cond', 'count_lots', 'rows', 'auc_id', 'images'));
        }
        $date_lots = AuctionDate::find()->asArray()->all();
        return $this->render('auction-lists', compact('date_lots'));
    }

    public function actionAuctionLists()
    {
        $date_lots = AuctionDate::find()->asArray()->all();
        //debug($date_lots);
        //Проверка на сетка или список
        //$this->layout = 'default';
        return $this->render('auction-lists', compact('date_lots'));

    }

    public function actionAuction()
    {
        if (isset($_GET['id']) && $_GET['id'] != "" && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
            //Выводим из БД категории
            $id = Yii::$app->request->get('id');
            $categories = Categories::findOne($id);
            //$categories = Categories::find()->where(['id' => $_GET['id']])->asArray()->one();
            if (count($categories) > 0) {
//                $sort = new Sort([
//                    'attributes' => [
//                        'age',
//                        'name' => [
//                            'asc' => ['first_name' => SORT_ASC, 'last_name' => SORT_ASC],
//                            'desc' => ['first_name' => SORT_DESC, 'last_name' => SORT_DESC],
//                            'default' => SORT_DESC,
//                            'label' => 'Name',
//                        ],
//                    ],
//                ]);
//                $models = Article::find()
//                    ->where(['status' => 1])
//                    ->orderBy($sort->orders)
//                    ->all();


                //query -> products_array

                //$products_array = Products::find()->where(['category' => $_GET['id']])->asArray()->all();
                $id = Yii::$app->request->get('id');
                $query = Products::find()->where(['category' => $id]);
                //Для постстраничной навигации
                $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 12, 'forcePageParam' => false, 'pageSizeParam' => false]);
                $products_array = $query->offset($pages->offset)->limit($pages->limit)->all();
                //Колличество товаров отображаемое на странице "В наличии: ...."
                $count_products = count($products_array);
                //$count_products = count($query);

                //Проверка на сетка или список
                if (isset($_GET['view']) && $_GET['view'] == 1) $view = 1;
                else $view = 0;
                //Для навигации (не используется)
                if (isset($_GET['navigator']) && $_GET['navigator'] == 1) $navigator = 1;
                else $navigator = 2;

                $model = new SortForm();
                //Обработчик для формы сортировки
                if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                    //debug($model);
                    $query = Products::find()->orderBy('id')->all();
                    /*echo "<pre>";
                    print_r($model);
                    echo"</pre>";*/
                    return $this->render('auction', compact('categories', 'products_array', 'count_products', 'view', 'model', 'pages', 'model', 'query'));
                }


                return $this->render('auction', compact('categories', 'products_array', 'count_products', 'view', 'model', 'pages', 'model'));
            }
        }

        return $this->redirect(['page/auction']);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    //Для страницы Контакты
    public function actionContacts()
    {
        $contacts = Contacts::find()->asArray()->All();
        return $this->render('contacts', compact('contacts'));
    }

    //Для страницы Регистрация
    public function actionSignup()
    {
        $countries = Countries::find()->asArray()->all();
        $emailActivation = Yii::$app->params['emailActivation'];
        $model = $emailActivation ? new Signup(['scenario' => 'emailActivation']) : new Signup();
        if ($model->load(Yii::$app->request->post()) && $model->validate()):
            if ($user = $model->Signup()):
                if ($user->status === User::STATUS_ACTIVE):
                    if (Yii::$app->getUser()->login($user)):
                        return $this->goHome();
                    endif;
                else:
                    if ($model->sendActivationEmail($user)):
                        Yii::$app->session->setFlash('success', 'A message with activation sent to <strong>' . Html::encode($user->email) .
                                                     '</strong> (If you did not receive the email, then check the spam folder).');
                    else:
                        Yii::$app->session->setFlash('error', 'Error. Email not sent.');
                        Yii::error('Error sending email.');
                    endif;
                    return $this->refresh();
                endif;
            else:
                Yii::$app->session->setFlash('error', 'There was an error registering.');
                Yii::error('Registration error');
                return $this->refresh();
            endif;
        endif;
        return $this->render('signup', ['model' => $model, 'countries' => $countries]);
    }

    public function actionActivateAccount($key)
    {
        try {
            $user = new AccountActivation($key);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        //debug($user);
        if ($user->activateAccount()):
            Yii::$app->session->setFlash('success', 'Account activation was successful. <strong>' . Html::encode($user->username) . '</strong> ,now you can log in to the site.');
        else:
            Yii::$app->session->setFlash('error', 'Activation error.');
            Yii::error('Activation error.');
        endif;
        return $this->redirect(Url::to(['/page/login']));
    }

    //Для страницы Логин
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['cabinet']);
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    //Кабинет пользователя
    public function actionCabinet()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['login']);
        }

        $users_array = User::find()->where(['id' => Yii::$app->user->id])->asArray()->one();
        $user_deposit = UserDeposit::find()->where(['user_id' => Yii::$app->user->id])->asArray()->one();
        $country = Countries::findOne($users_array['country']);
        $deposit = $user_deposit['deposit'];

        return $this->render('cabinet', compact('users_array', 'deposit', 'country'));
    }

    //Для страницы Поиска
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
        //        $q = Yii::$app->request->get('search');

//            $lots_categories = Categories::find()->asArray()->all();
//            $lots = Products::find()->where(['or', ['like', 'id', $q], ['like', 'manufactured', $q], ['like' ,'model', $q], ['like', 'location', $q]])->asArray();
//            $count_lots = $lots -> count();
//            $pages = new Pagination(['totalCount' => $count_lots, 'pageSize' => 12, 'forcePageParam' => false, 'pageSizeParam' => false]);
//            $lots_array =  $lots->offset($pages->offset)->limit($pages->limit)->all();
//            return $this->render('auction-catalog', compact('lots_categories', 'lots_array', 'count_lots', 'pages', 'q'));

        $q = Yii::$app->request->get('search');
        //$query = Products::find()->where(['like', 'name' => $_GET['q']]);
        $query = Products::find()->where(['or', ['like', 'id', $q], ['like', 'manufacturer', $q], ['like', 'model', $q], ['like', 'location', $q]])->asArray();
        $count_prod = count($query);
        $pages = new Pagination(['totalCount' => $count_prod, 'pageSize' => 12, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products_array = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search', compact('products_array', 'pages', 'q'));
    }

    //Для страницы Обратная связь
    public function actionFeedback()
    {
        //$this->layout = 'default';
        return $this->render('feedback');
    }

    //Для страницы Доставка
    public function actionDelivery()
    {
        //$this->layout = 'default';
        return $this->render('delivery');
    }

    //Для страницы TENDER
    public function actionTender()
    {
       return $this->redirect('/tender/index');
    }

    //Для страницы О комппании
    public function actionAboutCompany()
    {
        //$this->layout = 'default';
        return $this->render('about-company');
    }

    //Для страницы Оплата
    public function actionPayment()
    {
        //$this->layout = 'default';
        return $this->render('payment');
    }

    //Для страницы Список желаний
    public function actionListorder()
    {
        //$this->layout = 'default';
        return $this->render('listorder');
    }

    public function actionUpdateLotCondition()
    {
        $domains = Yii::$app->params['domains'];
        $id_lot = Yii::$app->request->post('id');
        //$id_lot = 2;
        $sql = Products::find()->where(['id' => $id_lot])->one();
        $sql->lot_condition = 2;
        $sql->save();

        $rate_max_sale = RateHistory::find()->where(['and', ['num_lot' => $id_lot], ['bid_type' => 'sale']])->orderBy('bid_buyer desc')->one();
        //debug($rate_max_sale);
        if (isset($rate_max_sale)) {
            $max_sale = new VictoryUser();
            $max_sale->num_lot = $id_lot;
            $max_sale->buyer = $rate_max_sale->buyer;
            $max_sale->bid_buyer = $rate_max_sale->bid_buyer;
            $max_sale->bid_type = $rate_max_sale->bid_type;
            $max_sale->save();
            $user = User::findOne($max_sale->buyer);
            $product = Products::findOne($max_sale->num_lot);

            if ($max_sale->save()) {
                //Для пользователя
                Yii::$app->mailer->compose('auction', ['max_rent' => $max_sale, 'product' => $product, 'user' => $user])
                    ->setFrom([Yii::$app->params['adminEmail'] => 'STIGL F.Z.E.'])
                    ->setTo($user->email)
                    ->setSubject('You WIN to Sale on STIGL F.Z.E.')
                    //Пометить как массовую рассылку
                    ->setHeader('Precedence', 'bulk')
                    //Пометить фильтром
                    ->setHeader('List-id', 'STIGL')
                    //Стандартный метод отписки
                    ->setHeader('List-Unsubscribe', Url::to([$domains . '/page/unsubscribe?mail=' . $user['email']], true))
                    ->send();

                //Для Админа
                Yii::$app->mailer->compose('auction_admin', ['max_rent' => $max_sale, 'product' => $product, 'user' => $user])
                    ->setFrom([Yii::$app->params['adminEmail'] => 'STIGL F.Z.E.'])
                    ->setTo(Yii::$app->params['adminEmail'])
                    ->setSubject('User WIN to Sale on STIGL F.Z.E.')
                    //Пометить как массовую рассылку
                    ->setHeader('Precedence', 'bulk')
                    //Пометить фильтром
                    ->setHeader('List-id', 'STIGL')
                    //Стандартный метод отписки
                    ->setHeader('List-Unsubscribe', Url::to([$domains . '/page/unsubscribe?mail=' . $user['email']], true))
                    ->send();
            }
        } else {
            $max_sale = new VictoryUser();
            $max_sale->num_lot = $id_lot;
            $max_sale->buyer = null;
            $max_sale->bid_buyer = null;
            $max_sale->bid_type = "sale";
            $max_sale->save();
        }

        $rate_max_rent = RateHistory::find()->where(['and', ['num_lot' => $id_lot], ['bid_type' => 'rent']])->orderBy('bid_buyer desc')->one();
        if (isset($rate_max_rent)) {
            $max_rent = new VictoryUser();
            $max_rent->num_lot = $id_lot;
            $max_rent->buyer = $rate_max_rent->buyer;
            $max_rent->bid_buyer = $rate_max_rent->bid_buyer;
            $max_rent->bid_type = $rate_max_rent->bid_type;
            $max_rent->save();

            $user = User::findOne($max_rent->buyer);
            $product = Products::findOne($max_rent->num_lot);
            if ($max_rent->save()) {
                //Для пользователя
                Yii::$app->mailer->compose('auction', ['max_rent' => $max_rent, 'product' => $product, 'user' => $user])
                    ->setFrom([Yii::$app->params['adminEmail'] => 'STIGL F.Z.E.'])
                    ->setTo($user->email)
                    ->setSubject('You WIN to Rent on STIGL F.Z.E.')
                    //Пометить как массовую рассылку
                    ->setHeader('Precedence', 'bulk')
                    //Пометить фильтром
                    ->setHeader('List-id', 'STIGL')
                    //Стандартный метод отписки
                    ->setHeader('List-Unsubscribe', Url::to([$domains . '/page/unsubscribe?mail=' . $user['email']], true))
                    ->send();

                //Для Админа
                Yii::$app->mailer->compose('auction_admin', ['max_rent' => $max_rent, 'product' => $product, 'user' => $user])
                    ->setFrom([Yii::$app->params['adminEmail'] => 'STIGL F.Z.E.'])
                    ->setTo(Yii::$app->params['adminEmail'])
                    ->setSubject('User WIN to Rent  on STIGL F.Z.E.')
                    //Пометить как массовую рассылку
                    ->setHeader('Precedence', 'bulk')
                    //Пометить фильтром
                    ->setHeader('List-id', 'STIGL')
                    //Стандартный метод отписки
                    ->setHeader('List-Unsubscribe', Url::to([$domains . '/page/unsubscribe?mail=' . $user['email']], true))
                    ->send();
            }
        } else {
            $max_rent = new VictoryUser();
            $max_rent->num_lot = $id_lot;
            $max_rent->buyer = null;
            $max_rent->bid_buyer = null;
            $max_rent->bid_type = "rent";
            $max_rent->save();
        }
    }

    public function actionPhpInfo()
    {
        phpinfo();
        return $this->render('php-info');
    }

    public function actionSendEmail()
    {
        $model = new SendEmailForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                if ($model->sendEmail()):
                    Yii::$app->getSession()->setFlash('warning', 'Check your E-mail.');
                    //return $this->goHome();
                    return $this->redirect(['/page/login']);
                else:
                    Yii::$app->getSession()->setFlash('error', 'You can not reset your password.');
                endif;
            }
        }

        return $this->render('sendEmail', [
            'model' => $model,
        ]);
    }

    public function actionUnsubscribe()
    {
        $getUnsubscribe = Yii::$app->request->get('mail');
        $sql = User::find()->where(['email' => $getUnsubscribe])->one();
        $sql->subscribe = 0;
        if ($sql->save()) {
            $success = true;
            return $this->render('unsubscribe', ['success']);
        } else {
            $success = false;
            return $this->render('unsubscribe', ['success']);
        }

    }

    public function actionUnsubscribeBase()
    {
        $getUnsubscribe = Yii::$app->request->get('mail');
        $sql = ImportMail::find()->where(['email' => $getUnsubscribe])->one();
        $sql->subscribe = 0;
        if ($sql->save()) {
            $success = true;
            return $this->render('unsubscribe-base', ['success']);
        } else {
            $success = false;
            return $this->render('unsubscribe-base', ['success']);
        }

    }

    public function actionResetPassword($key)
    {
        try {
            $model = new ResetPasswordForm($key);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate() && $model->resetPassword()) {
                Yii::$app->getSession()->setFlash('warning', 'Your password has been changed');
                return $this->redirect(['/page/login']);
            }
        }
        return $this->render('resetPassword', [
            'model' => $model
        ]);
    }

    public function filter($valueSort, $valueOrder)
    {
        $cat = [];
        $goods = [];
        foreach (explode(' ', $valueSort) as $item) {
            $char_category = FilterCategory::find()->where(['alias' => $item])->asArray()->one();
            if (!in_array($char_category['parent_id'], $cat)) {
                array_push($cat, $char_category['parent_id']);
                array_push($goods, $char_category['parent_id']);
            }
        }
        //Добавляем к каждой родительским категориям дочерние, делаем двух мерный массив
        for ($i = 0; $i < count($cat); $i++) {
            $subcat = array();
            foreach (explode(' ', $valueSort) as $item) {
                $char_category = FilterCategory::find()->where(['AND', ['alias' => $item], ['parent_id' => $cat[$i]]])->asArray()->one();
                if (isset($char_category))
                    array_push($subcat, $char_category);
            }
            $cat[$i] = $subcat;
        }
        for ($i = 0; $i < count($cat); $i++)
            for ($j = 0; $j < count($cat[$i]); $j++) {
                if ($cat[$i][$j]['intString'] == 1) {
                    $ggg = FilterLot::find()->where(['value' => $cat[$i][$j]['name']])->asArray()->all();
                } else {
                    $number = explode('-', $cat[$i][$j]['number']);
                    if ($number[0] == 0) {
                        $ggg = FilterLot::find()->where(['value', '<=', $number[1]])->asArray()->all();
                    } else {
                        $ggg = FilterLot::find()->where(['AND', ['value', '>=', $number[0]], ['value', '<', $number[1]]])->asArray()->all();
                    }
                }
                $cat[$i][$j] = $ggg;
            }
        for ($i = 0; $i < count($cat); $i++) {
            $goods[$i] = array();
            for ($j = 0; $j < count($cat[$i]); $j++) {
                foreach ($cat[$i][$j] as $item) {

                    $good = Products::find()->where(['id' => $item['product_id']])->asArray()->all();
                    //debug($item['product_id']);
                    array_push($goods[$i], $good);
                }
            }
        }

        $g = array();
        if (count($goods) == 1)
            for ($i = 0; $i < count($goods[0]); $i++)
                array_push($g, $goods[0][$i][0]);
        else {
            for ($i = 1; $i < count($goods); $i++) {
                if ($i == 1)
                    for ($j = 0; $j < count($goods[0]); $j++)
                        for ($k = 0; $k < count($goods[$i]); $k++)
                            if ($goods[0][$j][0]['id'] == $goods[$i][$k][0]['id'])
                                array_push($g, $goods[0][$j][0]);
                            else
                                for ($j = 0; $j < count($g); $j++) {
                                    $t = false;
                                    for ($k = 0; $k < count($goods[$i]); $k++)
                                        if ($g[$j]['id'] == $goods[$i][$k][0]['id'])
                                            $t = true;
                                    if ($t)
                                        unset($g[$j]);
                                }
            }
        }
        if ($valueOrder) {

            usort($g, function ($a, $b) use ($valueOrder) {
                $order_p = Yii::$app->params['order_p'][$valueOrder][3];
                return strcasecmp($a[$order_p], $b[$order_p]);


            });
            if (Yii::$app->params['order_p'][$valueOrder][2] == "ASC") {
                return $g;
            } else {
                return array_reverse($g);
            }

        } else
            return $g;

    }
}
