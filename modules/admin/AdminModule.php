<?php

namespace app\modules\admin;
use app\models\Events;
use app\models\News;
use app\models\Posts;
use app\models\User;
use app\models\UserMessages;
use app\widgets\AdminMenu;

/**
 * admin module definition class
 */
class AdminModule extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    public $layout = 'main';

    public $defaultRoute = 'main/login';


    /**
     * {@inheritdoc}
     */

    public function init()
    {
       parent::init();


       \Yii::$app->view->params['AdminMenu'] = AdminMenu::getMenu();
       \Yii::$app->errorHandler->errorAction = '/admin/main/error';
       \Yii::$app->user->loginUrl = '/admin/main/login';
       \Yii::$app->view->params['postCount'] = Posts::find()->where(['status' => 1])->count();
       \Yii::$app->view->params['messageCount'] = UserMessages::find()->count();
       \Yii::$app->view->params['newsCount'] = News::find()->where(['status' => 1])->count();
       \Yii::$app->view->params['eventsCount'] = Events::find()->where(['status' => 1])->count();
       \Yii::$app->view->params['avatar'] = User::find()->select(['avatar'])->where(['user_id' => \Yii::$app->user->id])->asArray()->one();
    }
}
