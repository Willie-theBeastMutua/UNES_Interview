<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task_status".
 *
 * @property int $statusId
 * @property string $statusName
 *
 * @property Tasks[] $tasks
 */
class TaskStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task_status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['statusName'], 'required'],
            [['statusName'], 'string', 'max' => 100],
            [['statusName'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'statusId' => 'Status ID',
            'statusName' => 'Status Name',
        ];
    }

    /**
     * Gets query for [[Tasks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Tasks::class, ['statusId' => 'statusId']);
    }
}
