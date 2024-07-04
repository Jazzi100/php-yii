<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%blog_post}}`.
 */
class m240704_061252_create_blog_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('blog_post', array(
            'id' => 'pk',
            'user_id' => 'int NOT NULL',
            'title' => 'string NOT NULL',
            'content' => 'text NOT NULL',
            'is_public' => 'boolean DEFAULT 1',
            'created_at' => 'datetime NOT NULL',
            'updated_at' => 'datetime NOT NULL',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('blog_post');
    }
}
