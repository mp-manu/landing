<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Slider */

$this->title = 'Add New Slide';
$this->params['breadcrumbs'][] = ['label' => 'Slides', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="slider-create">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?= ModelStatus::getNotify() ?>
        </div>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
        'sliders' => $sliders,
    ]) ?>

</div>
