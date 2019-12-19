<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 19.12.2019
 * Time: 1:22
 */

namespace app\controllers;
use app\models\Publication;
use yii\data\Pagination;
use yii\helpers\Html;

use yii\web\Controller;

class PublicationController extends Controller
{
    public function actionList(){
        $this->layout = 'main-pages';
       $query = Publication::find()
           ->select(['p.*'])
           ->from('publication p')
           ->where(['p.status' => 1])->orderBy('p.id DESC');
       $pages = new Pagination([
           'totalCount' => $query->count(),
           'pageSize' => 8,
           'forcePageParam' => false,
           'pageSizeParam' => false
       ]);

       $publications = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('list', ['pages' => $pages, 'publications' => $publications]);
    }

    public function actionRead($id){
        $id = Html::encode($id);
        $this->layout = 'main-pages';
        $publication = Publication::find()->where(['status' => 1, 'id' => $id])->asArray()->one();

        return $this->render('read', ['publication' => $publication]);
    }

}