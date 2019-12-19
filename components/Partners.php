<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 17.12.2019
 * Time: 19:14
 */

namespace app\components;


use app\models\Coordinator;
use yii\jui\Widget;

class Partners extends Widget
{
    public $data;

    public function init()
    {
        parent::init();

        $this->data = Coordinator::find()
            ->where(['status' => 1])
            ->asArray()->all();
    }

    public function run()
    {
        return $this->render('partners', [
            'data' => $this->data
        ]);
    }
}