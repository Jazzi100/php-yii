<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $auth_key
 * @property string|null $verification_token
 * @property int|null $is_verified
 * @property string $created_at
 * @property string $updated_at
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password', 'auth_key', 'created_at', 'updated_at'], 'required'],
            [['is_verified'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['username', 'email', 'password', 'auth_key', 'verification_token'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'verification_token' => 'Verification Token',
            'is_verified' => 'Is Verified',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    public function signup(){
        if(!$this->validate()){
            return null;
        }
        $user = new User();
        $user->username = $this->username; 
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->gender = $this->gender;
        $user->generateAuthKey();
    }

}
