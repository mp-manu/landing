<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;
use app\assets\DatePickerAssets;
/* @var $this yii\web\View */
/* @var $model app\models\Project */

$this->title = 'Create Project';
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="project-create">
    <h1><?= Html::encode($this->title) ?></h1>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-body">
<!--                <h3 class="card-title">Create Project</h3>-->
                <?= ModelStatus::getNotify() ?>
                <nav>
                    <div class="nav nav-pills" id="nav-tab3" role="tablist">
                        <a class="nav-item nav-link active" role="tab"
                           id="nav-home-tab3" data-toggle="tab"
                           href="#nav-home3" aria-controls="nav-home3"
                           aria-selected="true">
                            <i class="fa fa-info mr-2"></i>Project information</a>
                        <a class="nav-item nav-link" role="tab" id="nav-profile-tab3"
                           data-toggle="tab" href="#nav-programm"
                           aria-controls="nav-programm" aria-selected="false">
                            <i class="fa fa-pen mr-2"></i>Programme(s)</a>
                        <a class="nav-item nav-link" role="tab" id="nav-contact-tab3"
                           data-toggle="tab" href="#nav-topic3"
                           aria-controls="nav-topic3" aria-selected="false">
                            <i class="fa fa-file mr-2"></i>Topic(s)</a>
                        <a class="nav-item nav-link" role="tab" id="nav-contact-tab3"
                           data-toggle="tab" href="#nav-proposal"
                           aria-controls="nav-contact3" aria-selected="false">
                            <i class="fa fa-phone mr-2"></i>Call for proposal</a>
                        <a class="nav-item nav-link" role="tab" id="nav-contact-tab3"
                           data-toggle="tab" href="#nav-schema"
                           aria-controls="nav-contact3" aria-selected="false">
                            <i class="fa fa-map-marker mr-2"></i>Schema</a>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent3">
                    <div class="tab-pane fade active show" id="nav-home3" role="tabpanel" aria-labelledby="nav-home-tab3">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                    <div class="tab-pane fade" id="nav-programm" role="tabpanel" aria-labelledby="nav-profile-tab3">
                        <?= $this->render('/programme/_form', [
                            'projectId' => $projectId,
                            'model' => $programmeModel,
                        ]) ?>
                    </div>
                    <div class="tab-pane fade" id="nav-topic3" role="tabpanel" aria-labelledby="nav-contact-tab3">
                        <?= $this->render('/topic/_form', [
                            'projectId' => $projectId,
                            'model' => $topicModel,
                        ]) ?>
                    </div>
                    <div class="tab-pane fade" id="nav-proposal" role="tabpanel" aria-labelledby="nav-contact-tab3">
                        <?= $this->render('/call-for-proposal/_form', [
                            'projectId' => $projectId,
                            'model' => $proposalModel,
                        ]) ?>
                    </div>
                    <div class="tab-pane fade" id="nav-schema" role="tabpanel" aria-labelledby="nav-contact-tab3">
                        <?= $this->render('/funding-scheme/_form', [
                            'projectId' => $projectId,
                            'model' => $shemaModel,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>