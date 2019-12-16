<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="card">
        <div class="card-body">
    <p>
        <?= Html::a('Create Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'grant_agreement_id',
            'title',
//            'description:ntext',
//            'objective:ntext',
            'start_date',
            'end_date',
            'link:url',
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'status',

                'editableOptions' => array(
                    'formOptions' => array('action' => array('/admin/editable/change-project-status')),
                    'inputType' => \kartik\editable\Editable::INPUT_DROPDOWN_LIST,
                    'data' => array(1 => 'Active', 0 => 'Inactive'),
                    'displayValueConfig' => array(
                        '0' => '<span class="glyphicon glyphicon-remove-sign" style="font-size:25px;color:#C9302C"></span>',
                        '1' => '<span class="glyphicon glyphicon-ok-sign" style="font-size:25px;color:#449D44"></span>',
                    ),
                ),
                'hAlign' => 'center',
                'vAlign' => 'middle',
                'filter' => array(1 => 'Active', 0 => 'Inactive'),
                'pageSummary' => true
            ],
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

        </div>
    </div>
</div>
