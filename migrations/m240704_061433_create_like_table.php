<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%like}}`.
 */
class m240704_061433_create_like_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('like', array(
            'id' => 'pk',
            'user_id' => 'int NOT NULL',
            'blog_post_id' => 'int NOT NULL',
            'created_at' => 'datetime NOT NULL',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('like');
    }
}
