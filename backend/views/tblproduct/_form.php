<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model backend\models\TblProduct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-product-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?//= $form->field($model, 'root')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'lft')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'rgt')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'lvl')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'icon_type')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'active')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'selected')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'disabled')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'readonly')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'visible')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'collapsed')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'movable_u')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'movable_d')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'movable_l')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'movable_r')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'removable')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'removable_all')->textInput() ?>

    <?= $form->field($model, 'key_word')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'status')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'thumbsup')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'thumbsdown')->textInput() ?>

    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full',
    ]) ?>

<!--    --><?//= $form->field($model, 'created_at')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'updated_at')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'created_by')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
