<?php

use app\modules\admin\models\ModelStatus;
use dosamigos\tinymce\TinyMce;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CallForProposal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="call-for-proposal-form">
    <?php if (!empty($proposals)): ?>
        <div class="row">
            <div class="col-md-12">
                <div class="accordion" id="accordionExample1">
                    <div class="card bg-gradient10">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <a class=" collapsed" data-toggle="collapse" data-target="#collapseOne"
                                   aria-expanded="false" aria-controls="collapseTwo">
                                    Show Call for proposals List
                                </a>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                             data-parent="#accordionExample1">
                            <div class="card-body">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <?php foreach ($proposals as $item): ?>
                                                <tbody>
                                                <tr>
                                                    <td><?= $item['name'] ?></td>
                                                    <td><?= $item['description'] ?></td>
                                                    <td><?= $item['status'] ?></td>
                                                </tr>
                                                </tbody>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <?php endif; ?>
    <?php $form = ActiveForm::begin(['action' => '/admin/project/add-proposal']); ?>
    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
           <?= $form->field($model, 'description')->textarea(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'status')->dropDownList(ModelStatus::listData()) ?>
        </div>
        <?php if(!empty($projectId)): ?>
        <div class="col-md-12">
            <?= $form->field($model, 'project_id')->hiddenInput(['value' => $projectId])->label(false) ?>
        </div>
        <?php else: ?>
            <div class="col-md-12">
                <?= $form->field($model, 'project_id')->dropDownList(ArrayHelper::map(\app\models\Project::getItems(), 'id', 'title')) ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
