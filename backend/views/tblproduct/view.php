<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TblProduct */

$this->title = $model->name;
/*$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tbl Products'), 'url' => ['index']];*/
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
       <!-- --><?/*= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) */?>

        <?= Html::a(Yii::t('app', 'publish'), ['publish', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'close'), ['close', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
//            'root',
//            'lft',
//            'rgt',
//            'lvl',
            'name',
//            'icon',
//            'icon_type',
//            'active',
//            'selected',
//            'disabled',
//            'readonly',
//            'visible',
//            'collapsed',
//            'movable_u',
//            'movable_d',
//            'movable_l',
//            'movable_r',
//            'removable',
//            'removable_all',
            'key_word',
            ['label'=>'发布状态','value'=>isset($model->status)&&$model->status==0?'发布':'关闭','class'=>'special-font-color'],
//            'thumbsup',
//            'thumbsdown',
//            'content:ntext',
//            'created_at',
//            'updated_at',
//            'created_by',
//            'updated_by',
        ],
    ]) ?>

    <?= $model->content?>

</div>
