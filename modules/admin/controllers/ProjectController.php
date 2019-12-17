<?php

namespace app\modules\admin\controllers;

use app\models\CallForProposal;
use app\models\FundingScheme;
use app\models\Programme;
use app\models\Topic;
use app\modules\admin\models\ModelStatus;
use Yii;
use app\models\Project;
use app\modules\admin\models\ProjectSearch;
use yii\helpers\Html;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProjectController implements the CRUD actions for Project model.
 */
class ProjectController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Project models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProjectSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Project model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Project model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Project();
        $programmeModel = new Programme();
        $topicModel = new Topic();
        $proposalModel = new CallForProposal();
        $shemaModel = new FundingScheme();

        if($model->load(Yii::$app->request->post())) {
            $start_date = $_POST['start'];
            $end_date =  $_POST['end'];
            $s = explode('/', $start_date);
            $e = explode('/', $end_date);
            $start_date = $s[2].'-'.$s[0].'-'.$s[1];
            $end_date = $e[2].'-'.$e[0].'-'.$e[1];
            $model->start_date = $start_date;
            $model->end_date = $end_date;
            ModelStatus::setTimeStampCreate($model);
            if($model->save()){
                $this->setActiveTab('programm');
            }
            return $this->redirect(['update', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'programmeModel' => $programmeModel,
            'topicModel' => $topicModel,
            'proposalModel' => $proposalModel,
            'shemaModel' => $shemaModel,
        ]);
    }

    /**
     * Updates an existing Project model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $id = Html::encode($id);
        $model = $this->findModel($id);
        $programmeModel = new Programme();
        $topicModel = new Topic();
        $proposalModel = new CallForProposal();
        $shemaModel = new FundingScheme();

        $programms = Programme::find()->where(['project_id' => $id, 'status' => 1])->asArray()->all();
        $topics = Topic::find()->where(['project_id' => $id, 'status' => 1])->asArray()->all();
        $proposals = CallForProposal::find()->where(['project_id' => $id, 'status' => 1])->asArray()->all();
        $schemas = FundingScheme::find()->where(['project_id' => $id, 'status' => 1])->asArray()->all();

        if($model->load(Yii::$app->request->post())) {
            $start_date = $_POST['start'];
            $end_date =  $_POST['end'];
            $s = explode('/', $start_date);
            $e = explode('/', $end_date);
            $start_date = $s[2].'-'.$s[0].'-'.$s[1];
            $end_date = $e[2].'-'.$e[0].'-'.$e[1];
            $model->start_date = $start_date;
            $model->end_date = $end_date;
            ModelStatus::setTimeStampCreate($model);
            $model->save();
            $this->setActiveTab('programm');

            return $this->redirect(['update', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'programmeModel' => $programmeModel,
            'topicModel' => $topicModel,
            'proposalModel' => $proposalModel,
            'shemaModel' => $shemaModel,
            'projectId' => $id,
            'programms' => $programms,
            'topics' => $topics,
            'proposals' => $proposals,
            'schemas' => $schemas
        ]);
    }

    public function actionAddProgramme(){
        $programmeModel = new Programme();
        if($programmeModel->load(\Yii::$app->request->post())){
            $project_id = $programmeModel->project_id;
            ModelStatus::setTimeStampCreate($programmeModel);
            if($programmeModel->save()){
                ModelStatus::setNotifySuccesSaved();
                $this->setActiveTab('topic');
                return $this->redirect(['update', 'id' => $project_id]);
            }
        }
    }

    public function actionAddTopic(){
        $topicModel = new Topic();
        if($topicModel->load(\Yii::$app->request->post())){
            $project_id = $topicModel->project_id;
            ModelStatus::setTimeStampCreate($topicModel);
            if($topicModel->save()){
                ModelStatus::setNotifySuccesSaved();
                $this->setActiveTab('proposal');
                return $this->redirect(['update', 'id' => $project_id]);
            }
        }
    }

    public function actionAddProposal(){
        $proposalModel = new CallForProposal();
        if($proposalModel->load(\Yii::$app->request->post())){
            $project_id = $proposalModel->project_id;
            ModelStatus::setTimeStampCreate($proposalModel);
            if($proposalModel->save()){
                ModelStatus::setNotifySuccesSaved();
                $this->setActiveTab('schema');
                return $this->redirect(['update', 'id' => $project_id]);
            }
        }
    }

    public function actionAddSchema(){
        $shemaModel = new FundingScheme();
        if($shemaModel->load(\Yii::$app->request->post())){
            $project_id = $shemaModel->project_id;
            ModelStatus::setTimeStampCreate($shemaModel);
            if($shemaModel->save()){
                ModelStatus::setNotifySuccesSaved();
                return $this->redirect(['update', 'id' => $project_id]);
            }
        }
    }
    /**
     * Deletes an existing Project model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Project model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Project the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Project::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function setActiveTab($tab_name){
        Yii::$app->session->remove('tab_status');

        return \Yii::$app->session->set('tab_status', $tab_name);
    }
}
