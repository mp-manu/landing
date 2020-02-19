<?php


namespace app\controllers;
use app\models\University;
use yii\web\Controller;

class UniversitiesController extends Controller
{
    public function actionList(){
        $this->layout = 'main-pages';
        $data = University::find()->where(['status' => 1])->asArray()->all();
        return $this->render('list', ['data' => $data]);
    }
}