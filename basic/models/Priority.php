<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "priority".
 *
 * @property int $priorityId
 * @property string $priorityName
 *
 * @property Tasks[] $tasks
 */
class Priority extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'priority';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['priorityName'], 'required'],
            [['priorityName'], 'string', 'max' => 45],
            [['priorityName'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'priorityId' => 'Priority ID',
            'priorityName' => 'Priority Name',
        ];
    }

    /**
     * Gets query for [[Tasks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Tasks::class, ['priorityId' => 'priorityId']);
    }
}
