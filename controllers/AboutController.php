<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 17.12.2019
 * Time: 21:08
 */

namespace app\controllers;


use app\models\CallForProposal;
use app\models\Coordinator;
use app\models\FundingScheme;
use app\models\Programme;
use app\models\Project;
use app\models\Team;
use app\models\Topic;
use yii\helpers\Html;
use yii\web\Controller;

class AboutController extends Controller
{
    public $layout = 'main-without-sidebar';
    public function actionNewMarkets(){

        $project = Project::find()->where(['status' => 1])->asArray()->one();

        if(!empty($project)){
            $coordinators = Coordinator::find()->where(['project_id' => $project['id'], 'status' => 1])->asArray()->all();
            $proposals = CallForProposal::find()->where(['id' => $project['id'], 'status' => 1])->asArray()->all();
            $fund = FundingScheme::find()->where(['project_id' => $project['id'], 'status' => 1])->asArray()->all();
            $programm = Programme::find()->where(['project_id' => $project['id'], 'status' => 1])->asArray()->all();
            $topic = Topic::find()->where(['project_id' => $project['id'], 'status' => 1])->asArray()->all();
            $partners_and_partipipants = array();
            foreach ($coordinators as $coordinator){
                $partners_and_partipipants[$coordinator['type']][] = $coordinator;
            }
        }

        return $this->render('new-markets', [
            'coordinators' => $coordinators,
            'proposals' => $proposals,
            'fund' => $fund,
            'programm' => $programm,
            'topic' => $topic,
            'project' => $project,
            'partners_and_partipipants' => $partners_and_partipipants
        ]);
    }


    public function actionTeam(){

        $team = Team::find()->where(['status' => 1])->asArray()->all();


        return $this->render('team', [
            'teams' => $team
        ]);
    }

    public function actionPerson($id){
       $this->layout = 'main-pages';
       $id = Html::encode($id);
       $data = Team::find()->where(['id' => $id, 'status' => 1])->asArray()->one();
       return $this->render('person', [
           'data' => $data
       ]);
    }

}