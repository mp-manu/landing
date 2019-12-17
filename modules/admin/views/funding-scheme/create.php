<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FundingScheme */

$this->title = 'Create Funding Scheme';
$this->params['breadcrumbs'][] = ['label' => 'Funding Schemes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="funding-scheme-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= ModelStatus::getNotify() ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
