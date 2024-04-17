<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tasks".
 *
 * @property int $taskId
 * @property string $taskName
 * @property int $priorityId
 * @property int $statusId
 * @property string|null $taskDate
 *
 * @property Priority $priority
 * @property TaskStatus $status
 */
class Tasks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['taskName', 'priorityId', 'statusId'], 'required'],
            [['priorityId', 'statusId'], 'integer'],
            [['taskDate'], 'safe'],
            [['taskName'], 'string', 'max' => 1000],
            [['priorityId'], 'exist', 'skipOnError' => true, 'targetClass' => Priority::class, 'targetAttribute' => ['priorityId' => 'priorityId']],
            [['statusId'], 'exist', 'skipOnError' => true, 'targetClass' => TaskStatus::class, 'targetAttribute' => ['statusId' => 'statusId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'taskId' => 'Task ID',
            'taskName' => 'Task Name',
            'priorityId' => 'Priority',
            'statusId' => 'Status',
            'taskDate' => 'Task Date',
        ];
    }

    /**
     * Gets query for [[Priority]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPriority()
    {
        return $this->hasOne(Priority::class, ['priorityId' => 'priorityId']);
    }

    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(TaskStatus::class, ['statusId' => 'statusId']);
    }
}
