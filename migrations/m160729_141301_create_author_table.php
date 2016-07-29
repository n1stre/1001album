<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `author`.
 */
class m160729_141301_create_author_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('author', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL UNIQUE',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('author');
    }
}
