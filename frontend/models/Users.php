<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "USERS".
 *
 * @property int $id
 * @property string $login
 * @property string $password
 * @property string $number
 * @property string $name
 * @property string $email
 * @property int $isAdmin
 * @property string|null $liked
 *
 * @property POST[] $pOSTs
 */
class USERS extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'USERS';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login', 'password', 'number', 'name', 'email'], 'required'],
            [['isAdmin'], 'integer'],
            [['login', 'password', 'number', 'name', 'email', 'liked'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Password',
            'number' => 'Number',
            'name' => 'Name',
            'email' => 'Email',
            'isAdmin' => 'Is Admin',
            'liked' => 'Liked',
        ];
    }

    /**
     * Gets query for [[POSTs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPOSTs()
    {
        return $this->hasMany(POST::class, ['ID_User' => 'id']);
    }
}
