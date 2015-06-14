<?php
/**
 * Created by PhpStorm.
 * User: zhuwj
 * Date: 6/7/15
 * Time: 6:07 PM
 */
namespace frontend\util;

class PrintTitle
{
    public function sayHello()
    {
        echo 'hello from util';
    }

    public static $count = 0;

    function pri($menus,$current_id,$parent_id)
    {

//        print_r($menus);

        foreach ($menus as $va) {

            if ($va['lvl'] == 0 || $parent_id == $va['id']) {
                echo '<li class="active" >';
            } else if($current_id == $va['id']){
                echo '<li class="" style="background-color: #f0f0f0">';
            }else {
                echo '<li class="">';
            }
            if (!isset($va["children"])){
                echo '<a href="index.php?r=course/view%2F&id='.$va['id'].'">';
            }else{
                echo '<a href="#">';
            }



            echo '</i> ' . $va["name"];
            if (isset($va["children"])) {
                echo '<span class="fa arrow"></span>';
            }
            echo '</a>';
            if (isset($va["children"]) && $va["children"]) {

//                echo $va['id'].'++'.$parent_id;
                if ($va['lvl'] == 0) {
                    echo '<ul class="nav nav-second-level">';
                } else {
                        echo '<ul class="nav nav-third-level" >';
                }
                $this->pri($va["children"],$current_id,$parent_id);
                echo '</ul>';
            }
            echo "</li>";
        }

    }


    public function echoTitles($tree)
    {

        foreach ($tree as $leaf) {
            echo '<li>';
            echo '<a href="#"><i class=""></i> ' . $leaf['name'] . '<span class="fa arrow"></span></a>';
//            echo '<li>' .$leaf['name'];
            if (!empty($leaf['children'])) {
                echo '<ul class="nav nav-second-level">';
                $this->echoTitles($leaf['children']);
                echo '</ul>';
            }
//            echo '</li>';
            echo '</li>';
        }

    }

    public function echoSubs($value)
    {
//        foreach ($value['children'] as $valSub) {
//            echo '<li>'.\yii\helpers\Html::a($valSub['name'], '?r=course%2Fview&id='.$valSub['id'], ['class' => '']).'</li>';
//            if (isset($value['children'])){
//                $this->echoSubs($value['children']);
//            }
//        }
    }
}