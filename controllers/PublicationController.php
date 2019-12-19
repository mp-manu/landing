<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 19.12.2019
 * Time: 1:22
 */

namespace app\controllers;


use yii\web\Controller;

class PublicationController extends Controller
{
    public function actionList(){
        $this->layout = 'main-pages';
        $list = Publication::find()->where(['status' => 1])->asArray()->all();

        return $this->render('list', ['list' => $list]);
    }

    public function actionRead($id){
        $id = Html::encode($id);
        $this->layout = 'main-pages';
        $publication = Publication::find()->where(['status' => 1, 'id' => $id])->asArray()->one();

        return $this->render('read', ['publication' => $publication]);
    }

}