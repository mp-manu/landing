<?php

use app\modules\admin\models\ModelStatus;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Project */

$this->title = 'Update Project: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';


$status[Yii::$app->session->get('tab_status')] = 'active show';
?>
<div class="project-update">
<?= ModelStatus::getNotify() ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <!--                <h3 class="card-title">Create Project</h3>-->
                    <nav>
                        <div class="nav nav-pills" id="nav-tab3" role="tablist">
                            <a class="nav-item nav-link" role="tab"
                               id="nav-home-tab3" data-toggle="tab"
                               href="#nav-home3" aria-controls="nav-home3" aria-selected="false">
                                <i class="fa fa-info mr-2"></i>Project information</a>
                            <a class="nav-item nav-link <?= substr($status['programm'], 0, 6) ?>" role="tab" id="nav-profile-tab3"
                               data-toggle="tab" href="#nav-programm"
                               aria-controls="nav-programm" aria-selected="true">
                                <i class="fa fa-pen mr-2"></i>Programme(s)</a>
                            <a class="nav-item nav-link <?= substr($status['topic'], 0, 6) ?>" role="tab" id="nav-contact-tab3"
                               data-toggle="tab" href="#nav-topic3"
                               aria-controls="nav-topic3" aria-selected="false">
                                <i class="fa fa-file mr2"></i>Topic(s)</a>
                            <a class="nav-item nav-link <?= substr($status['proposal'], 0, 6) ?>" role="tab" id="nav-contact-tab3"
                               data-toggle="tab" href="#nav-proposal"
                               aria-controls="nav-contact3" aria-selected="false">
                                <i class="fa fa-phone mr-2"></i>Call for proposal</a>
                            <a class="nav-item nav-link <?= substr($status['schema'], 0, 6) ?>" role="tab" id="nav-contact-tab3"
                               data-toggle="tab" href="#nav-schema"
                               aria-controls="nav-contact3" aria-selected="false">
                                <i class="fa fa-map-marker mr-2"></i>Schema</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent3">
                        <div class="tab-pane fade <?= $status['project'] ?>" id="nav-home3" role="tabpanel" aria-labelledby="nav-home-tab3">
                            <?= $this->render('_form', [
                                'model' => $model,
                            ]) ?>
                        </div>
                        <div class="tab-pane fade <?= $status['programm'] ?>" id="nav-programm" role="tabpanel" aria-labelledby="nav-profile-tab3">
                            <?= $this->render('/programme/_form', [
                                'model' => $programmeModel,
                                'projectId' => $projectId,
                                'programms' => $programms,
                            ]) ?>
                        </div>
                        <div class="tab-pane fade <?= $status['topic'] ?>" id="nav-topic3" role="tabpanel" aria-labelledby="nav-contact-tab3">
                            <?= $this->render('/topic/_form', [
                                'model' => $topicModel,
                                'projectId' => $projectId,
                                'topics' => $topics,
                            ]) ?>
                        </div>
                        <div class="tab-pane fade <?= $status['proposal'] ?>" id="nav-proposal" role="tabpanel" aria-labelledby="nav-contact-tab3">
                            <?= $this->render('/call-for-proposal/_form', [
                                'model' => $proposalModel,
                                'projectId' => $projectId,
                                'proposals' => $proposals,
                            ]) ?>
                        </div>
                        <div class="tab-pane fade <?= $status['schema'] ?>" id="nav-schema" role="tabpanel" aria-labelledby="nav-contact-tab3">
                            <?= $this->render('/funding-scheme/_form', [
                                'model' => $shemaModel,
                                'projectId' => $projectId,
                                'schemas' => $schemas
                            ]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
