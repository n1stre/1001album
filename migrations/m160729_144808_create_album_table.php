<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `album`.
 */
class m160729_144808_create_album_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('album', [
            'id' => Schema::TYPE_PK,
            'author_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'name' => Schema::TYPE_STRING . ' NOT NULL UNIQUE',
            'year' => Schema::TYPE_INTEGER . ' NOT NULL',
            'label' => Schema::TYPE_STRING . ' NOT NULL',
            'producer' => Schema::TYPE_STRING . ' NOT NULL',
            'art_direction' => Schema::TYPE_STRING . ' NOT NULL',
            'nationality' => Schema::TYPE_STRING . ' NOT NULL',
            'running_time' => Schema::TYPE_TIME . ' NOT NULL',
            'description' => Schema::TYPE_TEXT,
            'image' => Schema::TYPE_STRING,

        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('album');
    }
}
