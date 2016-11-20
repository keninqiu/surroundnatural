<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'name_zh',
            'description',
            'description_zh',
            'keyword',
            'price',
            'price_zh',
            'stock',
            [
                'attribute'=>'Image1',
                'value'=> "/admin".$model->image1,
                'format' => ['image',['width'=>'100','height'=>'100']],
            ],
            [
                'attribute'=>'Image2',
                'value'=> "/admin".$model->image2,
                'format' => ['image',['width'=>'100','height'=>'100']],
            ],
            [
                'attribute'=>'Image3',
                'value'=> "/admin".$model->image3,
                'format' => ['image',['width'=>'100','height'=>'100']],
            ],
            [
                'attribute'=>'Image4',
                'value'=> "/admin".$model->image4,
                'format' => ['image',['width'=>'100','height'=>'100']],
            ],  
            [
                'attribute'=>'Image5',
                'value'=> "/admin".$model->image5,
                'format' => ['image',['width'=>'100','height'=>'100']],
            ],                      
        ],
    ]) ?>

</div>
