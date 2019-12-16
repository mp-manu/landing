<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 15.12.2019
 * Time: 11:59
 */

namespace app\components;
use app\modules\admin\models\Slider;
use yii\base\Widget;

class Banner extends Widget
{
    public $data;

    public function init()
    {
        parent::init();

        $this->data = Slider::find()->where(['access' => 1])->asArray()->all();
    }

    public function run()
    {
        return $this->render('banner', [
            'data' => $this->data
        ]);
    }

}