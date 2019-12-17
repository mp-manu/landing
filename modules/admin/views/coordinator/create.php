<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Coordinator */

$this->title = 'Add Coordinators, Participants and Partners';
$this->params['breadcrumbs'][] = ['label' => 'Coordinators', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['#']];

?>
<div class="coordinator-create">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->

    <?= ModelStatus::getNotify() ?>
    <div class="card">
        <div class="card-body">
           <?= $this->render('_form', [
               'model' => $model,
           ]) ?>
        </div>
    </div>
</div>
