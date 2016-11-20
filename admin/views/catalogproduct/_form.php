<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CatalogProduct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="catalog-product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'catalog_id')->textInput() ?>

    <?= $form->field($model, 'product_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
