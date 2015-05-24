<?php

use dosamigos\ckeditor\CKEditor;
use dosamigos\ckeditor\CKEditorAsset;
use dosamigos\ckeditor\CKEditorInline;
use dosamigos\ckeditor\CKEditorTrait;
use dosamigos\ckeditor\CKEditorWidgetAsset;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

?>
<?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

<?= $form->field($model, 'context')->widget(CKEditor::className(), [
    'options' => ['rows' => 6],
    'preset' => 'full',
]) ?>

<?php ActiveForm::end(); ?>