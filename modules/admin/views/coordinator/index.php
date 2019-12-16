<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\CoordinatorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Coordinators';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coordinator-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Coordinator', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'unversity',
            'country',
            'address',
            'activity_type',
            //'project_id',
            //'logo',
            //'eu_contribution',
            //'web_site',
            //'org_contact',
            //'type',
            //'country_flag',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
