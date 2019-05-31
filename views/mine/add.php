

<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<h1>Add new Post</h1>

<?php $form = ActiveForm::begin(['options' => ['id' => 'Addpost', 'enctype' => 'multipart/form-data']]) ?>
<?= $form->field($model, 'name')?>

<?= $form->field($model, 'text')->textarea(['rows' => 5])?>

<?= Html::submitButton('Save', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end() ?>