<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\TeamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Team', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<div class="card">
    <div class="card-body">
       <?= GridView::widget([
           'dataProvider' => $dataProvider,
           'filterModel' => $searchModel,
           'columns' => [
               ['class' => 'yii\grid\SerialColumn'],

//               'id',
               'university',
               'person',
               'responsibility',
               [
                   'class' => 'kartik\grid\EditableColumn',
                   'attribute' => 'status',
                   'editableOptions' => [
                       'formOptions' => ['action' => ['/admin/editable/change-team-status']],
                       'inputType' => \kartik\editable\Editable::INPUT_DROPDOWN_LIST,
                       'data' => [1 => 'Active', 0 => 'Inactive'],
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
              //'created_at',
              //'created_by',
              //'updated_at',
              //'updated_by',
              //'project_id',

               ['class' => 'yii\grid\ActionColumn'],
           ],
       ]); ?>
    </div>
</div>
</div>
