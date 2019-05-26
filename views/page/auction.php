<?php

/* @var $this yii\web\View */

$this->title = 'STIGL - Аукцион';
?>

<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\widgets\ActiveForm;

$this->title = 'STIGL - Список товаров';
?>
<!-- Фильтры - OFF-->
<div class="col-md-3 col-sm-5 col-12 filter" xmlns="http://www.w3.org/1999/html">
    <h3>Фильтры</h3>
    <form>
        <label>Цена</label>
        <div class="filter_price">
            <input type="text" value="0">
            -
            <input type="text" value="3000000">
        </div>
        <label>Мощность</label>
        <div class="filter_price">
            <input type="text" value="400">
            -
            <input type="text" value="3000">
        </div>
        <!--<label>Мощность</label>
        <div class="filter_check">
            <p><input type="checkbox"/>10</p>
            <p><input type="checkbox"/>20</p>
            <p><input type="checkbox"/>30</p>
        </div>-->

        <button type="submit">Подобрать</button>
    </form>
</div>

<div class="col-md-9 col-sm-12 col-12">
    <div class="short_description">

        <?php
        //$mainImgCategory = $categories->getImage();
        //$gallery = $product->getImages();
        //debug($mainImg);
        ?>
        <!--        --><? //= Html::img($mainImgCategory->getUrl(), ['alt' => $categories->name]) ?>
        <!--    <img src="/images/etc/--><?php //echo $categories['img'];?><!--">-->
        <div>
            <h2><?php //echo $categories['name'];?></h2>
            <p><?php //echo $categories['description'];?></p>
        </div>
    </div>
    <div class="row content">
        <div class="col-md-12 col-sm-12 col-12 header_list_prod">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-12">
                    <h1><?php //echo $categories['name'];?></h1>
                </div>
                <div class="col-md-4 col-sm-4 col-12 value_prod">
                    <p>В наличии: <?php //echo $count_products;?></p>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-12">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-12 sortirovka_and_number_prod">
                    <?php $form = ActiveForm::begin(); ?>

                    <p><strong>Сортировка по:</strong><?php echo $form->field($model, 'str')->dropDownList([
                            '0' => 'Цене, по возростанию',
                            '1' => 'Цене, по убыванию',
                            '2' => 'Название товара, от А до Я',
                            '3' => 'Название товара, от Я до А',],
                            $params =
                                [
                                    'prompt' => '--'
                                ]
                        ); ?></p>
                    <p>
                        <strong>Показать:</strong><?php echo $form->field($model, 'number')->dropDownList(['12' => '12', '24' => '24', '48' => '48'], $params =
                            [
                                'options' => ['12' => ['Selected' => true]],
                            ]
                        ); ?></p>

                    <?php
                    echo //Nav::widget(['items'=> [
                        //Html::beginForm(['/page/listproducts'], 'post'),
                    Html::submitButton('Go');
                    //Html::endForm(),]]);
                    ?>
                    <!--                --><?php //echo Html::submitButton('Go');?>
                    <?php $form = ActiveForm::end(); ?>
                </div>
                <div class="col-md-3 col-sm-3 hidden-xs view_list_prod">
                    <p><strong>Вид:</strong>
                        <?php
                        if ($view == 1)
                            $class2 = "active";
                        else
                            $class1 = "active";
                        ?>
                        <a href="<?= Url::toRoute(['page/listproducts', 'id' => $categories['id']]); ?>"
                           class="<?= $class1; ?>"><i class="glyphicon glyphicon-th"></i><span>Сетка</span></a>

                        <a href="<?= Url::toRoute(['page/listproducts', 'id' => $categories['id'], 'view' => '1']); ?>"
                           class="<?= $class2; ?>"><i class="glyphicon glyphicon-th-list"></i><span>Список</span></a>
                    </p>
                </div>
            </div>
        </div>
        <!--    $products_array-->
        <?php
        //$mainImg = $product_array->getImage();
        //$gallery = $product->getImages();
        //debug($mainImg);
        ?>

        <?php foreach ($products_array as $product_array): ?>
            <!--Проверка на список или сетка-->
            <!--Список-->
            <?php
            $mainImg = $product_array->getImage();
            ?>
            <?php if ($view == 1): ?>

                <div class="col-md-12 col-sm-12 col-12 view_list">
                    <div class="product">
                        <a href="<?= Url::toRoute(['page/product', 'id' => $product_array['id']]); ?>"
                           class="product_img">
                            <?php if ($product_array['price_old'] != "") : ?>
                                <span>- <?php echo 100 - intval($product_array['price'] * 100 / $product_array['price_old']); ?>%</span>
                            <?php endif; ?>
                            <?= Html::img($mainImg->getUrl(), ['alt' => $product_array->name]) ?>
                            <!--                    //<img src="/images/products/-->
                            <?php //echo $product_array['img'];?><!--">-->
                        </a>
                        <a href="<?= Url::toRoute(['page/product', 'id' => $product_array['id']]); ?>"
                           class="product_title"><?php echo $product_array['name']; ?></a>
                        <div class="product_price">
                            <span class="price"><?php echo $product_array['price']; ?>&nbsp; $</span>
                            <?php if ($product_array['price_old'] != "") : ?>
                                <span class="price_old"><?php echo $product_array['price_old']; ?>&nbsp; $</span>
                            <?php endif; ?>
                        </div>
                        <div class="desc_prod">
                            <table id="description_table" class="table table-striped table-bordered">

                                <tr>
                                    <td>Описание</td>
                                    <td><?php echo \yii\helpers\StringHelper::truncate($product_array['description'], 150, '...'); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="product_btn">
                            <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product_array['id']]) ?>"
                               data-id="<?= $product_array['id'] ?>" class="cart"><i
                                        class="glyphicon glyphicon-shopping-cart"></i></a>
                            <!--<a href="-->
                            <? //=Url::toRoute(['page/listorder', 'id' =>$product_array['id']]);?><!--" class="mylist">Список желаний</a>-->
                        </div>
                    </div>
                </div>
                <!--END: Список-->
                <!--Товары в сетке-->
            <?php else: ?>

                <div class="col-md-6 col-sm-4 col-12">
                    <div class="product">
                        <a href="<?= Url::toRoute(['page/product', 'id' => $product_array['id']]); ?>"
                           class="product_img">
                            <?php if ($product_array['price_old'] != "") : ?>
                                <span>- <?php echo 100 - intval($product_array['price'] * 100 / $product_array['price_old']); ?>%</span>
                            <?php endif; ?>
                            <?= Html::img($mainImg->getUrl(), ['alt' => $product_array->name]) ?>

                        </a>
                        <a href="<?= Url::toRoute(['page/product', 'id' => $product_array['id']]); ?>"
                           class="product_title"><?php echo $product_array['name']; ?></a>
                        <div class="product_price">
                            <span class="price"><?php echo $product_array['price']; ?>$</span>
                            <?php if ($product_array['price_old'] != "") : ?>
                                <span class="price_old"><?php echo $product_array['price_old']; ?>$</span>
                            <?php endif; ?>
                            <span class="product_btn"><a
                                        href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product_array['id']]) ?>"
                                        data-id="<?= $product_array['id'] ?>" class="cart"><i
                                            class="glyphicon glyphicon-shopping-cart"></i></a></span>
                        </div>
                        <!--                    <div class="product_btn">-->
                        <!--                        <a href="-->
                        <? //=Url::toRoute(['page/listorder', 'id' =>$product_array['id']]);?><!--" class="mylist">Список желаний</a>-->
                        <!--                    </div>-->
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>

    </div>
    <div class="clearfix"></div>
    <center>
        <?php
        echo \yii\widgets\LinkPager::widget(['pagination' => $pages,]);
        ?>
    </center>
</div>

<!--<center><p><h1>Attention! This service is under construction.</h1></p></center>-->
<!--<p>Здесь когда-то будет аукцион, но это уже совсем другая история</p>
<p><strong>Как это будет работать?</p></strong></p>
    <p><strong>Со стороны Администратора:</p></strong></p>
        <p>&nbsp; - Через пункт меню "Обратная связь" пользователь обращается в поддержку (к Администратору) с просьбой опубликовать лот/товар.</br>
        &nbsp;Служба поддержки (Администратор) рассматривает предложение пользователя и уже делает вывод, принимать или нет.</p>
        <p>&nbsp; - Администратор через Админ-панель будет опубликовывать лоты/товары, которые предоставляет ему пользователь</p>

<p><strong>Содержание списка лотов/товаров:</strong></p>
    <p>&nbsp; - Фото/Картинка - Название - Небольшое описание - Текущая ставка/Цена - Дата окончания</p>

<p><strong>Содержание страницы лота/товара:</strong></p>
    <p>&nbsp; - Фото/Картинка - Название - Полное описание - Текущая ставка/Цена - Таймер - Дата окончания - Кнопка сделать ставку</p>

<p><strong>Кто будет иметь возможность учавствовать в торгах?</strong></p>
    <p>&nbsp; - В торгах принимать участите будет только тот пользователь, который внес минимальный депозит на свой аккаунт.</br>
    &nbsp;После этого система автоматически даёт возможность участия в торгах.</p>

<p><strong>Что будет после окончания торгов?</strong></p>

    <p><strong>&nbsp;Если есть победитель и он отказывается забрать товар:</strong></p>
        <p>&nbsp;&nbsp; - Администратор связывается с хозяином лота/товара, информирует пользователя, что победитель отказался и лот будет переигран.</br></p>
        <p>&nbsp;&nbsp; - Со счета пользователя снимается штраф и рейтинг с 1 понижается до 0, если в следущй раз ситуация повторится, то его аккаунт будет забанен</p>

    <p><strong>&nbsp;Если есть победитель и он готов забрать товар:</strong></p>
        <p>&nbsp;&nbsp; - Администратор связывается с хозяином лота/товара, информирует пользователя, что победитель есть и за определенную сумму его товар забирают.</br></p>
        <p>&nbsp;&nbsp; - Если <strong>продавец не согласен</strong> и хочет переиграть, то платит штраф и Администратор снова запускает торги.</p>
        <p>&nbsp;&nbsp; - Если <strong>продавец согласен</strong>, то Администратор решает с продавцом и покупателем как получить товар/деньги. Пользователь (покупатель) повышается в рейтинге на 1 единицу (максимально 5)</p>

    <p><strong>&nbsp;Если покупателя не нашлось за определенный период времени:</strong></p>
        <p>&nbsp;&nbsp; - Администратор связывается с хозяином лота/товара, информирует пользователя, что победителя нет и уточняет запускать снова торги или нет.</br></p>

<p><strong>Если что-то хотите добавить или Вас не устраивает, то опишите просьбу или пожелание в пункте: "3.Аукцион" начиная с подпункта "3.1", так мне будет понятнее и проще для формирования дальнейших действий</strong></p>
<p><strong>Для Главной страницы пункт "1.Главная страница" начиная с подпункта "1.1", для страницы "Каталог" -> "2.Каталог" начиная с подпункта "2.1"</strong></p>
<p>Спасибо</p>-->