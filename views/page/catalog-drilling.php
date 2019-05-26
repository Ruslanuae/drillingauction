<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;
use app\models\CategoriesDrilling;

$this->title = 'STIGL - Oil Drilling';
?>

<div class="col-md-12 drilling">
    <div class="row content">
        <?php foreach ($categoriesDrilling as $categoryDrilling):
            $id_n = $categoryDrilling['id'];
            $query_n = CategoriesDrilling::findOne($id_n);
            $mainImgCategory = $query_n->getImage(); ?>
            <div class="col-md-6 col-sm-6 col-12 drilling_category">
                <a href="<?= Url::toRoute(['page/all-catalog']); ?>"><?= Html::img($mainImgCategory->getUrl(), ['alt' => $categoryDrilling['name']]) ?></a>

                <a href="<?= Url::toRoute(['page/all-catalog']); ?>"><?php echo $categoryDrilling['name']; ?></a>

            </div>
        <?php endforeach; ?>
    </div>
</div>