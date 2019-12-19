<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 19.12.2019
 * Time: 1:23
 */

namespace app\controllers;


use app\models\News;
use yii\helpers\Html;
use yii\web\Controller;

class NewsController extends Controller
{
    public function actionList(){
        $news = News::find()->where(['status' => 1])->asArray()->all();
        $this->render('list', ['list' => $news]);
    }

    public function actionRead($id){
        $id = Html::encode($id);
        $news = News::find()->where(['status' => 1, 'id' => $id])->asArray()->one();
        $this->render('list', ['news' => $news]);
    }

}