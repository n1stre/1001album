<?php

use yii\db\Migration;

class m160728_181538_add_album_24_JB extends Migration
{
    public function safeUp()
    {
        $this->insert('album',[
            'id' => '24',
            'author_id' => '22',
            'name' => 'Joan Baez',
            'year' => '1960',
            'label' => 'Vanguard',
            'producer' => 'Maynard Solomon',
            'art_direction' => 'Jules Halfant',
            'nationality' => 'USA',
            'running_time' => '46:07',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dictum ornare quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed arcu enim, volutpat id commodo at, maximus quis risus. Pellentesque id dui nec justo faucibus porta sed quis magna. Nulla feugiat ullamcorper ultrices. Donec non felis ut lacus venenatis tristique. Curabitur lacinia dui eu arcu consectetur volutpat. Vestibulum mollis sollicitudin augue, in congue lectus accumsan at. Nulla facilisi. Integer risus justo, lobortis sed felis vitae, tristique bibendum ipsum. Curabitur et mollis nisl, ut ornare arcu. Pellentesque ac maximus metus. Praesent egestas enim non libero vestibulum, a faucibus nibh finibus. Proin odio lectus, egestas sed ultricies ac, mollis ac urna. Aliquam maximus ante quis purus tempus convallis.

Praesent eget nisi nec enim posuere fermentum vitae vitae nisl. Duis vel tristique lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam blandit magna nec mi dictum dictum. Donec magna orci, aliquam eu ultricies sit amet, ultricies vitae augue. Suspendisse vel turpis eu nibh pharetra pulvinar. Cras non fermentum augue, in porttitor dui.

Aliquam et nulla quis massa pretium euismod vel eget est. Nunc viverra metus vitae auctor venenatis. Sed maximus fermentum justo, quis porta ante efficitur id. Morbi scelerisque eros odio, cursus sagittis sapien vehicula eget. Nunc sed tristique lectus. Integer vel efficitur eros, eget facilisis augue. Maecenas aliquet tempor faucibus. Sed sed porttitor neque. Duis vel erat facilisis, accumsan massa sit amet, congue risus. Cras aliquam, nisi nec aliquam tempor, justo purus lacinia quam, consequat mattis justo ante vitae nunc. Sed semper ipsum eleifend venenatis commodo. In pulvinar lorem nec dapibus posuere.

Vivamus laoreet ex non tempor sagittis. Vivamus efficitur, orci sed pretium suscipit, quam erat tincidunt eros, non dignissim nisi tortor eu sapien. Nunc sagittis lacinia arcu, vitae iaculis urna efficitur sed. Vestibulum tristique, tellus nec tristique porta, sapien purus maximus eros, in dapibus tortor justo id dolor. Duis venenatis dui placerat massa lacinia pulvinar. Cras finibus ex dignissim, consectetur ex quis, condimentum nibh. Donec tincidunt, ipsum ac tristique condimentum, orci leo lobortis est, sed viverra libero risus et felis. ',
            'image' => '',
        ]);
    }

    public function safeDown()
    {
        $this->delete('album', 'id = 24');
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
