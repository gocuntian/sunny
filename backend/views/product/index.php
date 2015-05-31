<?php
// VIEW - views/product/index.php
use kartik\tree\TreeViewInput;
use backend\models\Product;
use kartik\tree\TreeView;
use yii\helpers\Html;

echo TreeView::widget([
    // single query fetch to render the tree
    // use the Product model you have in the previous step
    'query' => Product::find()->addOrderBy('root, lft'),
    'headingOptions' => ['label' => 'Categories'],
    'fontAwesome' => false,     // optional
    'isAdmin' => true,         // optional (toggle to enable admin mode)
    'displayValue' => 1,        // initial display value
    'softDelete' => false,       // defaults to true
    'cacheSettings' => [
        'enableCache' => true   // defaults to true
    ],

]);
?>

