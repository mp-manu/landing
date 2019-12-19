<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 19.12.2019
 * Time: 1:23
 */

namespace app\controllers;


use app\models\Events;
use yii\helpers\Html;
use yii\web\Controller;

class EventsController extends Controller
{

    public function actionList(){

        $list = Events::find()->where(['status' => 1])->asArray()->one();

        $this->render('list', ['list' => $list]);
    }

    public function actionRead($id){
        $id = Html::encode($id);

        $event = Events::find()->where(['status' => 1, 'id' => $id])->asArray()->all();

        return $this->render('read', ['event' => $event]);
    }
}