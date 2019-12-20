<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 19.12.2019
 * Time: 1:23
 */

namespace app\controllers;


use app\models\Events;
use yii\data\Pagination;
use yii\helpers\Html;
use yii\web\Controller;

class EventsController extends Controller
{
    public function actionList()
    {
        $this->layout = 'main-pages';
        $query = Events::find()
            ->select(['e.*'])
            ->from('events e')
            ->where(['e.status' => 1])->orderBy('e.id DESC');
        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => 8,
            'forcePageParam' => false,
            'pageSizeParam' => false
        ]);
        $events = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('list', ['pages' => $pages, 'events' => $events]);
    }

    public function actionRead($id)
    {
        $this->layout = 'main-without-sidebar';
        $id = Html::encode($id);

        $events = Events::find()->where(['status' => 1, 'id' => $id])->asArray()->one();
        return $this->render('read', ['event' => $events]);
    }
}