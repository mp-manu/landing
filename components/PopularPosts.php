<?php
/**
 * Created by PhpStorm.
 * User: IT_User-144
 * Date: 17.12.2019
 * Time: 10:13
 */

namespace app\components;


use app\models\Posts;
use yii\base\Widget;

class PopularPosts extends Widget
{
   public $data;

   public function init()
   {
      parent::init();
      $this->data = Posts::find()->where(['status' => 1])->orderBy('rand()')->asArray()->all();
   }

   public function run()
   {
      return $this->render('popular-posts', [
          'data' => $this->data
      ]);
   }
}