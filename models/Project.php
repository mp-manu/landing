<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string|null $objective
 * @property string|null $start_date
 * @property string|null $end_date
 * @property int|null $grant_agreement_id
 * @property string|null $link
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 * @property int|null $updated_by
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['description', 'objective'], 'string'],
            [['start_date', 'end_date'], 'safe'],
            [['grant_agreement_id', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['title', 'link'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'objective' => 'Objective',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'grant_agreement_id' => 'Grant Agreement ID',
            'link' => 'Link',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

    public static function getItems(){
        $data = static::find()->where(['status' => 1])->asArray()->all();
        return $data;
    }
}
