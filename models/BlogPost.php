<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog_post".
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $content
 * @property int|null $is_public
 * @property string $created_at
 * @property string $updated_at
 */
class BlogPost extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog_post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'title', 'content', 'created_at', 'updated_at'], 'required'],
            [['user_id', 'is_public'], 'integer'],
            [['content'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'content' => 'Content',
            'is_public' => 'Is Public',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
