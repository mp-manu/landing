<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string|null $city
 * @property string|null $country
 * @property string|null $university
 * @property string $address
 * @property string $tel
 * @property string $email
 * @property string|null $fax
 * @property string|null $facebook
 * @property string|null $twitter
 * @property string|null $linkedIn
 * @property string|null $vimeo
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 * @property int|null $updated_by
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['address', 'tel', 'email'], 'required'],
            [['status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['city', 'country', 'university', 'address', 'tel', 'email'], 'string', 'max' => 1000],
            [['fax', 'facebook', 'twitter', 'linkedIn', 'vimeo'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city' => 'City',
            'country' => 'Country',
            'university' => 'University',
            'address' => 'Address',
            'tel' => 'Tel',
            'email' => 'Email',
            'fax' => 'Fax',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'linkedIn' => 'LinkedIn',
            'vimeo' => 'Vimeo',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
