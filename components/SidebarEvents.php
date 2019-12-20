<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 17.12.2019
 * Time: 19:45
 */

namespace app\components;


use app\models\Coordinator;
use app\models\Events;
use app\models\News;
use yii\base\Widget;

class SidebarEvents extends Widget
{
    public $data;
    public $comments;
    public function init()
    {
        parent::init();

        $this->data = Events::find()
            ->where(['status' => 1])
            ->orderBy('created_at', SORT_DESC)->limit(4)
            ->asArray()->all();
    }

    public function run()
    {
        return $this->render('sidebar/events', [
            'data' => $this->data,
            'comments' => $this->comments,
        ]);
    }

}