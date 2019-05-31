<?php
use yii\helpers\Html;
use kartik\spinner\Spinner;

?>



 <!--Spinner::widget([
    'preset' => Spinner::LARGE,
    'color' => 'white',
    'align' => 'center'
])-->

    <div class="panel panel-default">
        

        <div class="row">

        <div class="col-lg-5"><div class="panel-heading">Your info has been sent to the database.</div>
    </div>
        </div>
        
       <div class="panel-body">
            <div class="row">
                
                <div class="col-lg-2 center">
                      
                           <div class="pull-left name-email"><label>Name:</label> <?= Html::encode($model->name) ?> </div>
                           <div class="pull-right name-email"><label>Email</label>: <?= Html::encode($model->email) ?></div>
                       </div>
            </div>
        
                 
                
                <div class="row">
                    
           
                <div class="col-lg-2">
                    
                        <label><p>Class 1:</p></label>
                       <p> <label>Course Name:</label> <?= Html::encode($model->course1) ?></p>
                        <p><label>Course Grade:</label> <?= Html::encode($model->gradesCourse1) ?></p>
                        <p><label> Credits:</label> <?= Html::encode($model->creditsCourse1) ?></p>
                </div>
                <div div class="col-lg-2">
                    
                         <label>Class 2:</label>
                        <p><label>Course Name:</label> <?= Html::encode($model->course2) ?></p>
                         <p><label>Course Grade:</label> <?= Html::encode($model->gradesCourse2) ?></p>
                         <p><label> Credits:</label> <?= Html::encode($model->creditsCourse2) ?></p>
                </div>
                <div class="col-lg-2">
                    
                        <label>Class 3:</label>
                        <p><label>Course Name:</label> <?= Html::encode($model->course3) ?></p>
                       <p><label>Course Grade:</label> <?= Html::encode($model->gradesCourse3) ?></p>
                        <p><label> Credits:</label> <?= Html::encode($model->creditsCourse3) ?></p>
                </div>
                <div class="col-lg-2">
                    
                       <label>Class 4:</label>
                       <p><label>Course Name:</label> <?= Html::encode($model->course4) ?></p>
                       <p><label>Course Grade:</label> <?= Html::encode($model->gradesCourse4) ?></p>
                         <p><label> Credits:</label> <?= Html::encode($model->creditsCourse4) ?></p>
                </div>
                <div class="col-lg-2">
                    
                         <label>Class 5:</label>
                        <p><label>Course Name:</label> <?= Html::encode($model->course5) ?></p>
                        <p><label>Course Grade:</label> <?= Html::encode($model->gradesCourse5) ?></p>
                        <p><label> Credits:</label> <?= Html::encode($model->creditsCourse5) ?></p>
                </div>

            </div>

            
        
          
        <div class="row">
    
            <div class="col-lg-5">
                
                    <div class="alert alert-success">
                
                        Form submission was successful.
                
                    </div>
            </div>
        </div>
        

     
        