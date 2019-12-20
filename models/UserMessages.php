<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_messages".
 *
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property string|null $phone
 * @property string $message
 * @property int|null $status
 */
class UserMessages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_messages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'message'], 'required'],
            [['message'], 'string'],
            [['status'], 'integer'],
            [['name', 'email', 'phone'], 'string', 'max' => 500],
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
            'email' => 'Email',
            'phone' => 'Phone',
            'message' => 'Message',
            'status' => 'Status',
        ];
    }
}
