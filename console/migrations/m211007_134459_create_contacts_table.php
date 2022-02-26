<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contacts}}`.
 */
class m211007_134459_create_contacts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%contacts}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'email' => $this->string(255),
            'phone' => $this->string(255),
            'text' => $this->text(),
        ],$tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contacts}}');
    }
}
