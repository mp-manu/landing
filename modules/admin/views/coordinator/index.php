<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\CoordinatorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Coordinators, Participants and Partners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coordinator-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add Coordinator', ['create'], ['class' => 'btn btn-success']) ?>
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
               'unversity',
               'country',
               'address',
               'activity_type',
              //'project_id',
              //'logo',
              //'eu_contribution',
              'web_site:url',
//              'org_contact',
              'type',
               [
                   'class' => 'kartik\grid\EditableColumn',
                   'attribute' => 'status',
                   'editableOptions' => [
                       'formOptions' => ['action' => ['/admin/editable/change-coordinator-status']],
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
              //'country_flag',
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
