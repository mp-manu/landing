<?php

use app\modules\admin\models\ModelStatus;
use app\modules\admin\models\Slider;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Slider */
/* @var $form yii\widgets\ActiveForm */
$arr = ModelStatus::listData();
?>

<div class="slider-form" style="margin-top: 3%">
   <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="card">
        <div class="card-header">
            <header><?= $this->title ?></header>
        </div>
       <?php if (!$model->isNewRecord): ?>
          <?php if (!empty($model->img_url)): ?>
               <div class="col-md-12 text-center">
                   <img src="<?= \Yii::getAlias('@upload') . '/slider/' . $model->img_url ?>"
                        width="500" height="300">
               </div>
          <?php endif; ?>
       <?php endif; ?>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                       <?= $form->field($model, 'title')->textarea(['maxlength' => true]) ?>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                       <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                       <?php
                       echo $form->field($model, 'order')->dropDownList(ArrayHelper::map($sliders, 'id', function ($slider) {
                                  return 'After ' . $slider['order'] . ' - ' . $slider['title'];
                               }) + ['0' => 'First Slide', '-1' => 'Last Slide']
                       );
                       ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                       <?= $form->field($model, 'access')->dropDownList($arr) ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                       <?= $form->field($model, 'is_has_btn')->dropDownList($arr) ?>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                       <?= $form->field($model, 'btn_title')->textInput() ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                       <?= $form->field($model, 'btn_link')->textInput() ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                       <?= $form->field($model, 'img_url')->fileInput() ?>
                    </div>
                </div>

<!--                <div class="col-lg-6">-->
<!--                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">-->
<!--                       --><?//= $form->field($model, 'slide_cover')->fileInput() ?>
<!--                    </div>-->
<!--                </div>-->
            </div>
            <div class="form-group text-center m-2">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>

