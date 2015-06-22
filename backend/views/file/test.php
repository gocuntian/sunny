<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\File */
/* @var $form ActiveForm */
?>
<div class="file-test">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'created_at') ?>
        <?= $form->field($model, 'updated_at') ?>
        <?= $form->field($model, 'created_by') ?>
        <?= $form->field($model, 'updated_by') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'url') ?>
        <?= $form->field($model, 'path') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- file-test -->
