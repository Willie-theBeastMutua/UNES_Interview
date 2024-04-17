<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $userId
 * @property string $fName
 * @property string $lName
 * @property string $company
 * @property string $DOB
 * @property string $email
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fName', 'lName', 'company', 'DOB', 'email'], 'required'],
            [['DOB'], 'safe'],
            [['fName', 'lName', 'company', 'email'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'userId' => 'User ID',
            'fName' => 'Fisst Name',
            'lName' => 'Last Name',
            'company' => 'Company',
            'DOB' => 'Date of Birth',
            'email' => 'Email',
        ];
    }
}
