<?php

use yii\db\Migration;

class m160728_172726_add_author_37_SGAJG extends Migration
{
    public function safeUp()
    {
        $this->insert('author',[
            'id' => 37,
            'name' => 'Stan Getz And Joao Gilberto',
        ]);
    }

    public function safeDown()
    {
        $this->delete('author', 'id = 37');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
