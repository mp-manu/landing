<?php
/**
 * Created by PhpStorm.
 * User: IT_User-144
 * Date: 17.12.2019
 * Time: 10:14
 */

namespace app\components;


use app\models\Coordinator;
use yii\base\Widget;

class Partners extends Widget
{

   public $data;

   public function init()
   {
      parent::init();
      $this->data = Coordinator::find()
          ->where(['status' => 1])
          ->where(['type' => 'Participant'])
          ->andWhere(['!=', 'type', 'Coordinator'])
          ->orderBy('rand()')
          ->asArray()
          ->all();
   }

   public function run()
   {
      return $this->render('partners', [
          'data' => $this->data
      ]);
   }

}