<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_zh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_zh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'price_zh')->textInput() ?>

    <?= $form->field($model, 'stock')->textInput() ?>
    <?php if($model->isNewRecord) { ?>
    <?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
    <?php } ?>
    <?php if(!$model->isNewRecord) { ?>

    <?= $form->field($model, 'imageFile1')->fileInput() ?>
    <?php
    echo '<img src="'."/admin".$model->image1.'" height="100" width="100">';
    ?>
    <?= $form->field($model, 'imageFile2')->fileInput() ?>
    <?php
    echo '<img src="'."/admin".$model->image2.'" height="100" width="100">';
    ?>    
    <?= $form->field($model, 'imageFile3')->fileInput() ?>
    <?php
    echo '<img src="'."/admin".$model->image3.'" height="100" width="100">';
    ?>       
    <?= $form->field($model, 'imageFile4')->fileInput() ?>
    <?php
    echo '<img src="'."/admin".$model->image4.'" height="100" width="100">';
    ?>       
    <?= $form->field($model, 'imageFile5')->fileInput() ?>
    <?php
    echo '<img src="'."/admin".$model->image5.'" height="100" width="100">';
    ?>   
    <?php } ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
