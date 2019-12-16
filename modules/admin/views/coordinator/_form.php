<?php

use app\models\Project;
use app\modules\admin\models\ModelStatus;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Coordinator */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coordinator-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
           <?= $form->field($model, 'unversity')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
           <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
           <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
           <?= $form->field($model, 'activity_type')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
           <?= $form->field($model, 'project_id')->dropDownList(ArrayHelper::map(Project::getItems(), 'id', 'title'), [
                   'prompt' => '---- Select project ----'
           ]) ?>
        </div>
        <div class="col-md-6">
           <?= $form->field($model, 'logo')->fileInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
           <?= $form->field($model, 'eu_contribution')->textInput() ?>
        </div>
        <div class="col-md-6">
           <?= $form->field($model, 'web_site')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
           <?= $form->field($model, 'org_contact')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
           <?= $form->field($model, 'type')->dropDownList([ 'Coordinator' => 'Coordinator', 'Participant' => 'Participant', 'Partner' => 'Partner', ], ['prompt' => '']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
           <?= $form->field($model, 'country_flag')->dropDownList(ModelStatus::$flags) ?>
        </div>
        <div class="col-md-6">
           <?= $form->field($model, 'status')->dropDownList(ModelStatus::listData()) ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
