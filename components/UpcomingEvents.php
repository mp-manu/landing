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
use yii\base\Widget;

class UpcomingEvents extends Widget
{
    public $data;

    public function init()
    {
        parent::init();

        $this->data = Events::find()
            ->where(['status' => 1])
            ->orderBy('rand()')
            ->asArray()->all();
    }

    public function run()
    {
        return $this->render('events', [
            'data' => $this->data
        ]);
    }

}