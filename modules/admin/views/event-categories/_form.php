<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EventCategories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-categories-form">

   <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-12">
           <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        </div>
        <div class="col-md-12">
           <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
           <?= $form->field($model, 'status')->dropDownList(\app\modules\admin\models\ModelStatus::listData()) ?>
        </div>
    </div>

    <div class="form-group">
       <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

   <?php ActiveForm::end(); ?>

</div>
