<?php

/**
 * License CreativeCommon
 * Created By Soliev Parviz and Muzafarov Manuchehr
 * @copyright Copyright (c) 2018-2019
 */


namespace app\models;

use Yii;
use yii\base\BootstrapInterface;

class GlobalData implements BootstrapInterface {

    private $db;

    public function __construct() {
        $this->db = Yii::$app->db;
    }


    public function bootstrap($app) {

        // Get data from database

        $sql_contact = $this->db->createCommand('SELECT c.university, c.country, c.city, 
            c.address, c.tel, c.email, c.fax, c.facebook, c.twitter, c.linkedIn, c.vimeo 
            FROM contacts c WHERE c.status = 1');
        $sql_contact = $sql_contact->queryAll();

        foreach ($sql_contact as $key => $val2) {
            Yii::$app->params['contact']['university'] = $val2['country'];
            Yii::$app->params['contact']['country'] = $val2['country'];
            Yii::$app->params['contact']['city'] = $val2['city'];
            Yii::$app->params['contact']['address'] = $val2['address'];
            Yii::$app->params['contact']['tel'] = $val2['tel'];
            Yii::$app->params['contact']['email'] = $val2['email'];
            Yii::$app->params['contact']['fax'] = $val2['fax'];
            Yii::$app->params['contact']['facebook'] = $val2['facebook'];
            Yii::$app->params['contact']['twitter'] = $val2['twitter'];
            Yii::$app->params['contact']['linkedIn'] = $val2['linkedIn'];
            Yii::$app->params['contact']['vimeo'] = $val2['vimeo'];
        }
    }
}