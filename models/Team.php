<?php

namespace app\models;

use MongoDB\Driver\Query;
use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string $university
 * @property string $person
 * @property string|null $responsibility
 * @property int|null $status
 * @property string|null $about
 * @property string|null $photo
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 * @property int|null $updated_by
 * @property int|null $project_id
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['university', 'person', 'project_id'], 'required'],
            [['id', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by', 'project_id'], 'integer'],
            [['university'], 'string', 'max' => 800],
            [['person'], 'string', 'max' => 500],
            [['responsibility'], 'string', 'max' => 255],
            [['about', 'photo'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'university' => 'University',
            'person' => 'Person',
            'responsibility' => 'Responsibility',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'project_id' => 'Project',
        ];
    }

    public static function getUnivers(){
       $arr = (new \yii\db\Query())->select('university')->distinct('university')
           ->from('team')
           ->where(['status' => 1])
           ->all();
       return $arr;
    }
}
