<?php

use yii\db\Migration;

class m160729_184902_add_to_author_table_1950s extends Migration
{
    /*public function up()
    {

    }

    public function down()
    {
        echo "m160729_184902_add_to_artist_table_1950s cannot be reverted.\n";

        return false;
    }*/

    public function safeUp()
    {
        $data = [
            [1, 'Frank Sinatra'],
            [2, 'Elvis Presley'],
            [3, 'The Louvin Brothers'],
            [4, 'Louis Prima'],
            [5, 'Fats Domino'],
            [6, 'Duke Ellington'],
            [7, 'The Crickets'],
            [8, 'Count Basie'],
            [9, 'Thelonious Monk'],
            [10, 'Sabu'],
            [11, 'Miles Davis'],
            [12, 'Machito'],
            [13, 'Little Richard'],
            [14, 'Tito Puente And His Orchestra'],
            [15, 'Billie Holiday'],
            [16, 'Jack Elliott'],
            [17, 'Sarah Vaughan'],
            [18, 'Ella Fitzgerald'],
            [19, 'Ray Charles'],
            [20, 'Marty Robbins'],
            [21, 'The Dave Brubeck Quartet'],
        ];
        $this->batchInsert('author', ['id', 'name'], $data);
    }

    public function safeDown()
    {
        $this->delete('author',['between', 'id', 1, 21]);
    }
}
