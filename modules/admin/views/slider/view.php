<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Slider */

$this->title = 'Slide Details';
$this->params['breadcrumbs'][] = ['label' => 'Slides', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="slider-view">

<!--    <h3>--><?//= Html::encode($this->title) ?><!--</h3>-->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <?= ModelStatus::getNotify() ?>
        </div>
    </div>
    <p>
        <?= Html::a('Slider list', ['index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you realy want to delete this slide?',
                //'method' => 'post',
            ],
        ]) ?>
    </p>
    <div class="card-box">
        <div class="card-head">
            <header><?= $this->title ?></header>
        </div>
        <div class="card-body row">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description',
            'img_url:url',
            'is_has_btn',
            'btn_title',
            'btn_link',
            'order',
            'access',
        ],
    ]) ?>
        </div>
    </div>
</div>
