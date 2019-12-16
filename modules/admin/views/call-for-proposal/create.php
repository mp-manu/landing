<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CallForProposal */

$this->title = 'Create Call For Proposal';
$this->params['breadcrumbs'][] = ['label' => 'Call For Proposals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="call-for-proposal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
