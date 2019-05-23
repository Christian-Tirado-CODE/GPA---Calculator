<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'grades')->dropdownList([
        1 => 'A', 
        2 => 'B',
        3 => 'C',
        4 => 'D',
        5 => 'F'
    ],
    ['prompt'=>'Select Grades']
);?>

    
<?php ActiveForm::end(); ?>
