<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Coordinator */

$this->title = $model->unversity;
$this->params['breadcrumbs'][] = ['label' => 'Coordinators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="coordinator-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <div class="card">
        <div class="card-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'unversity',
                    'country',
                    'address',
                    'activity_type',
                    'project_id',
                    'logo',
                    'eu_contribution',
                    'web_site',
                    'org_contact',
                    'type',
                    'country_flag',
                ],
            ]) ?>
        </div>
    </div>
</div>
