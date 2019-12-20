<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 19.12.2019
 * Time: 1:23
 */

namespace app\controllers;


use app\models\News;
use yii\data\Pagination;
use yii\helpers\Html;
use yii\web\Controller;

class NewsController extends Controller
{
    public function actionList()
    {
        $this->layout = 'main-pages';
        $query = News::find()
            ->select(['n.*'])
            ->from('news n')
            ->where(['n.status' => 1])->orderBy('n.id DESC');
        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => 5,
            'forcePageParam' => false,
            'pageSizeParam' => false
        ]);
        $news = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('list', ['news' => $news, 'pages' => $pages]);
    }

    public function actionRead($id)
    {
        $this->layout = 'main-pages';
        $id = Html::encode($id);
        $news = News::find()->where(['status' => 1, 'id' => $id])->asArray()->one();
        return $this->render('read', ['news' => $news]);
    }


}