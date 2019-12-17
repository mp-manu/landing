<?php

use app\models\EventCategories;
use app\modules\admin\models\ModelStatus;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Events */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-form">
    <?php if (!$model->isNewRecord): ?>
        <?php if(!empty($model->photo)): ?>
            <div class="col-md-12 text-center">
                <img src="<?= \Yii::getAlias('@upload') . '/events/' . $model->photo ?>"
                     width="300">
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(EventCategories::getItems(), 'id', 'name')) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label>Date start - Date end</label>
            <div class="input-group input-daterange" data-provide="datepicker">
                <input type="text" class="form-control" name="start" value="<?= $model->date_from ?>">
                <div class="input-group-addon"> To </div>
                <input type="text" class="form-control" name="end" value="<?= $model->date_to ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'status')->dropDownList(ModelStatus::listData()) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'description')->widget(\dosamigos\tinymce\TinyMce::className(), [
                'options' => ['rows' => 15],
                'language' => 'en-US',
                'clientOptions' => [
                    'plugins' => [
                        "advlist autolink lists link charmap print preview anchor",
                        "searchreplace visualblocks code fullscreen",
                        "insertdatetime media image table contextmenu paste"
                    ],
                    'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                ]
            ]); ?>
        </div>
    </div>
    <div class="col-md-6">
       <?= $form->field($model, 'photo')->fileInput(['maxlength' => true]) ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
