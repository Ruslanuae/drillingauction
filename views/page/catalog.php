<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use app\models\Categories;
$this->title = 'STIGL - Каталог';
?>
<div class="col-md-3 left_banner_menu">
    <h3>List of categories: </h3>
            <a href="<?=Url::toRoute(['page/all-catalog']);?>">All products</br></a>
    <?php foreach ($categories as $category):?>
            <a href="<?=Url::toRoute(['page/listproducts', 'id' =>$category['id']]);?>"><?php echo $category['name'];?></br></a>
    <?php endforeach;?>
</div>
<div class="col-md-9 col-sm-12 col-12 catalog">
    <div class="row content">
        <?php foreach ($categories as $category):
            $id_n = $category['id'];
            $query_n = Categories::findOne($id_n);
            $mainImgCategory = $query_n -> getImage();?>
            <div class="col-md-6 col-sm-4 col-12 catalog_category">
                <a href="<?=Url::toRoute(['page/listproducts', 'id' =>$category['id']]);?>"><?= Html::img($mainImgCategory->getUrl(), ['alt' => $category->name]) ?></a>
                <a href="<?=Url::toRoute(['page/listproducts', 'id' =>$category['id']]);?>"><?php echo $category['name'];?></a>
            </div>
        <?php endforeach;?>
    </div>
</div>