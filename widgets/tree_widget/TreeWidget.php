<?php

namespace app\widgets\tree_widget;


use app\helpers\CategoriesArrayHelper;
use yii\bootstrap\Html;
use yii\bootstrap\Widget;
use yii\helpers\Url;

class TreeWidget extends Widget
{
    public $categories;

    protected $_categoriesArr;



    public function run()
    {
        $this->_categoriesArr = CategoriesArrayHelper::formCategoriesArray($this->categories);

        $this->printTree(0);

    }

    protected function printTree($parent_id)
    {

        if (isset($this->_categoriesArr[$parent_id])) {
            foreach ($this->_categoriesArr[$parent_id] as $value) {

                echo "<li><a href=".Url::to(['view', 'id'=> $value['id']]).">".$value['title']."</a>";
                echo "<ul>";
                $this->printTree($value['id']);
                echo "</ul>";
                echo  "</li>";

            }
        }


    }



}