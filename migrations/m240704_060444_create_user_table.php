<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m240704_060444_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => 'pk',
            'username' => 'string NOT NULL',
            'email' => 'string NOT NULL',
            'password' => 'string NOT NULL',
            'auth_key' => 'string NOT NULL',
            'verification_token' => 'string',
            'is_verified' => 'boolean DEFAULT 0',
            'created_at' => 'datetime NOT NULL',
            'updated_at' => 'datetime NOT NULL',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
