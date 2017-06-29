<?php

use yii\db\Migration;

class m170628_092406_insert_data_to_categories_table extends Migration
{



    public function up()
    {
        $this->insert('categories',[
            'id' => 1,
            'title' => 'Категория 1', //1
            'parent_id' => null
        ]);

        $this->insert('categories',[
            'id' => 2,
            'title' => 'Категория 1.1',//2
            'parent_id' => 1
        ]);

        $this->insert('categories',[
            'id' => 3,
            'title' => 'Категория 1.1.1',//3
            'parent_id' => 2
        ]);

        $this->insert('categories',[
            'id' =>4,
            'title' => 'Категория 1.2',//4
            'parent_id' => 1
        ]);

        $this->insert('categories',[
            'id' =>5,
            'title' => 'Категория 1.2.1',//5
            'parent_id' => 4
        ]);

        $this->insert('categories',[
            'id' =>6,
            'title' => 'Категория 2',//6
            'parent_id' => null
        ]);


    }

    public function down()
    {
        $this->truncateTable('categories');
    }

}
