<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use app\models\Categories;
$this->title = 'STIGL - Catalog Lease';
?>
<div class="col-md-3 col-sm-5 col-12 left_banner_menu">

    <h3>List of Lease: </h3>
        <a href="<?=Url::toRoute(['page/all-catalog-lease']);?>">All products</br></a>
    <?php foreach ($categoriesLease as $categoryLease):?>
            <a href="<?=Url::toRoute(['page/list-lease', 'id' =>$categoryLease['id']]);?>"><?php echo $categoryLease['name'];?></br></a>
    <?php endforeach;?>
</div>
<div class="col-md-9 col-sm-12 col-12 catalog">
    <div class="row content">
        <?php foreach ($categoriesLease as $categoryLease):
            $id_n = $categoryLease['id'];
            $query_n = Categories::findOne($id_n);
            $mainImgCategory = $query_n -> getImage();?>
            <div class="col-md-6 col-sm-4 col-12 catalog_category">
                <a href="<?=Url::toRoute(['page/list-lease', 'id' =>$categoryLease['id']]);?>"><?= Html::img($mainImgCategory->getUrl(), ['alt' => $categoryLease->name]) ?></a>
                <a href="<?=Url::toRoute(['page/list-lease', 'id' =>$categoryLease['id']]);?>"><?php echo $categoryLease['name'];?></a>
            </div>
        <?php endforeach;?>
    </div>
</div>