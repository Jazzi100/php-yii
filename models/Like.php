<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "like".
 *
 * @property int $id
 * @property int $user_id
 * @property int $blog_post_id
 * @property string $created_at
 */
class Like extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'like';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'blog_post_id', 'created_at'], 'required'],
            [['user_id', 'blog_post_id'], 'integer'],
            [['created_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'blog_post_id' => 'Blog Post ID',
            'created_at' => 'Created At',
        ];
    }
}
