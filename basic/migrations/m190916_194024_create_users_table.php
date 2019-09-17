<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m190916_194024_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'firstname' => $this->string(),
            'lastname' => $this->string(),
            'phone' => $this->string(),
            'address' => $this->string(),
            'comment' => $this->text(),
            'feedbackDataId' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
