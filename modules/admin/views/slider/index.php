<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;
use kartik\grid\GridView;
use kartik\editable\Editable;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\SliderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Slider';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="slider-index">
<p>
    <?= Html::a('Add new Slide', ['create'], ['class' => 'btn btn-success']) ?>
</p>
<?php
$columns = [
    ['class' => 'yii\grid\SerialColumn', 'header' => '№'],
    'title',
    [
        'attribute' => 'description',
        'format' => 'html',
        'value' => function ($dataProvider) {
           return wordwrap($dataProvider->description, 40, '<br>');
        }
    ],
    [
        'attribute' => 'img_url',
        'format' => 'html',
        'value' => function($dataProvider){
            return '<a href="'.Yii::getAlias('@upload').'/slider/'.$dataProvider->img_url.'"><img src="'.Yii::getAlias('@upload').'/slider/'.$dataProvider->img_url.'" width="200"></a>';
        }
    ],

    [
        'class' => 'kartik\grid\EditableColumn',
        'attribute' => 'access',
        'format' => 'html',
        'editableOptions' => [
            'formOptions' => ['action' => ['/admin/editable/change-slide-status']],
            'inputType' => Editable::INPUT_DROPDOWN_LIST,
            'data' => [1 => 'Active', 0 => 'Inactive'],
            'options' => ['class' => 'form-control', 'prompt' => "Choose Status"],
            'displayValueConfig' => [
                '0' => '<span class="glyphicon glyphicon-remove-sign" style="font-size:25px;color:#C9302C"></span>',
                '1' => '<span class="glyphicon glyphicon-ok-sign" style="font-size:25px;color:#449D44"></span>',
            ],
        ],
        'hAlign' => 'center',
        'vAlign' => 'middle',
        'filter' => array(1 => 'Active', 0 => 'Inactive'),
        'pageSummary' => true
    ],
    [
        'class' => 'kartik\grid\EditableColumn',
        'attribute' => 'order',
        'format' => 'html',
        'editableOptions' => [
            'formOptions' => ['action' => ['/admin/editable/change-slide-order']],
            'inputType' => Editable::INPUT_DROPDOWN_LIST,
            'data' => ArrayHelper::map($slideOrders, 'order', 'order'),
            'options' => ['class' => 'form-control', 'prompt' => "Выберите порядок"],
        ],
        'hAlign' => 'center',
        'vAlign' => 'middle',
        'filter' => false,
        'pageSummary' => true
    ],
    ['class' => 'yii\grid\ActionColumn'],
]
?>

<div class="card">
    <div class="card-header">
        <?= $this->title ?>
    </div>
    <div class="card-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => $columns,

        ]); ?>
    </div>
</div>
</div>