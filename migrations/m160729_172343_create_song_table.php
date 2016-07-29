<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `song`.
 */
class m160729_172343_create_song_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('song', [
            'id' => Schema::TYPE_PK,
            'song_number' => Schema::TYPE_INTEGER,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'writing' => Schema::TYPE_STRING,
            'length' => Schema::TYPE_TIME,
            'author_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'album_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('song');
    }
}
