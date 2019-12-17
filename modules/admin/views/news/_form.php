<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
\app\assets\TextEditorAssets::register($this);
?>

<div class="news-form">
    <?php if (!$model->isNewRecord): ?>
        <?php if(!empty($model->photo)): ?>
            <div class="col-md-12 text-center">
                <img src="<?= \Yii::getAlias('@upload') . '/news/' . $model->photo ?>"
                     width="300">
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'photo')->fileInput() ?>
        </div>
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
    <div class="row">
        <div class="col-md-6">
            <label>Publish date</label>
            <div class="input-group date" data-provide="datepicker">
                <input type="text" class="form-control" name="publish_date" data-date-format="yyyy-mm-dd">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'status')->dropDownList(\app\modules\admin\models\ModelStatus::listData()) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
