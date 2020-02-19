<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "university".
 *
 * @property int $id
 * @property string $name
 * @property string|null $site
 * @property string|null $tel
 * @property string|null $email
 * @property string|null $address
 * @property string|null $about
 * @property string|null $logo
 * @property int|null $status
 */
class University extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'university';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['about'], 'string'],
            [['status'], 'integer'],
            [['name', 'address', 'logo'], 'string', 'max' => 255],
            [['site', 'tel', 'email'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'site' => 'Site',
            'tel' => 'Tel',
            'logo' => 'Logo',
            'email' => 'Email',
            'address' => 'Address',
            'about' => 'About',
            'status' => 'Status',
        ];
    }
}
