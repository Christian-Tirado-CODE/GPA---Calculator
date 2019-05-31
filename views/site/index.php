<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\spinner\Spinner;
use yii\helpers\Url;

$this->title = 'UPRA GPA-CALCULATOR ';
?>
<div class="site-index back-img">

    <div class="jumbotron">
    <?= Html::img('../assets/img/upra-logo.jpg');?>

    
    
    <h1>Welcome!</h1>



        <p class="lead">Feel free to use our university's gpa calculator.</p>

        <p><a class="btn btn-lg" href= <?= Url::to(['site/entry']);?>>Find out your GPA!</a></p>
    </div>
</div>
