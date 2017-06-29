<?php

use yii\db\Migration;

class m170628_082348_create extends Migration
{



    public function up()
    {
        $this->createTable('categories', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'parent_id' => $this->integer(),
        ]);

        $this->createIndex(
            'idx-categories-parent_id',
            'categories',
            'parent_id'
        );

        $this->addForeignKey(
            'fk-categories-parent_id',
            'categories',
            'parent_id',
            'categories',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey(
            'fk-categories-parent_id',
            'categories'
        );


        $this->dropIndex(
            'idx-categories-parent_id',
            'categories'
        );
        $this->dropTable('categories');
    }

}
