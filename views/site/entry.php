<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
  <div class="mt-5 hidden">
    <div class="form-header">Info:</div>
  <div class="p-2">
      
        <?php $form = ActiveForm::begin(); ?>
        
            <?= $form->field($model, 'name', ['labelOptions'=>['style'=>'color: #c2c0bf']]) ?>
        
            <?= $form->field($model, 'email', ['labelOptions'=>['style'=>'color: #c2c0bf']]) ?>
        
            <div class="col-md-4">
                <?= $form->field($model, 'course1', ['labelOptions'=>['style'=>'color: #c2c0bf']])?>
        </div> 
        
         <div class="col-md-4">
                    <?= $form->field($model, 'gradesCourse1', ['labelOptions'=>['style'=>'color: #c2c0bf']])->dropdownList([
                            'A' => 'A', 
                            'B' => 'B',
                            'C' => 'C',
                            'D' => 'D',
                            'F' => 'F'
                        ],
                        ['prompt'=>'Select Grades']
                    );?>
         </div>
              
        <div class="col-md-4">
                   <?= $form->field($model, 'creditsCourse1', ['labelOptions'=>['style'=>'color: #c2c0bf']])?>
        </div>  
        
             
        
        <div class="col-md-4">
                <?= $form->field($model, 'course2', ['labelOptions'=>['style'=>'color: #c2c0bf']])?>
        </div> 
        
         <div class="col-md-4">
                    <?= $form->field($model, 'gradesCourse2', ['labelOptions'=>['style'=>'color: #c2c0bf']])->dropdownList([
                            'A' => 'A', 
                            'B' => 'B',
                            'C' => 'C',
                            'D' => 'D',
                            'F' => 'F'
                        ],
                        ['prompt'=>'Select Grades']
                    );?>
         </div>
              
        <div class="col-md-4">
                   <?= $form->field($model, 'creditsCourse2', ['labelOptions'=>['style'=>'color: #c2c0bf']])?>
        </div>  
        
        
        <div class="col-md-4">
                <?= $form->field($model, 'course3', ['labelOptions'=>['style'=>'color: #c2c0bf']])?>
        </div> 
        
         <div class="col-md-4">
                    <?= $form->field($model, 'gradesCourse3', ['labelOptions'=>['style'=>'color: #c2c0bf']])->dropdownList([
                           'A' => 'A', 
                           'B' => 'B',
                           'C' => 'C',
                           'D' => 'D',
                           'F' => 'F'
                        ],
                        ['prompt'=>'Select Grades']
                    );?>
         </div>
              
        <div class="col-md-4">
                   <?= $form->field($model, 'creditsCourse3', ['labelOptions'=>['style'=>'color: #c2c0bf']])?>
        </div>  
        
        
        <div class="col-md-4">
                <?= $form->field($model, 'course4', ['labelOptions'=>['style'=>'color: #c2c0bf']])?>
        </div> 
        
         <div class="col-md-4">
                    <?= $form->field($model, 'gradesCourse4', ['labelOptions'=>['style'=>'color: #c2c0bf']])->dropdownList([
                            'A' => 'A', 
                            'B' => 'B',
                            'C' => 'C',
                            'D' => 'D',
                            'F' => 'F'
                        ],
                        ['prompt'=>'Select Grades']
                    );?>
         </div>
              
        <div class="col-md-4">
                   <?= $form->field($model, 'creditsCourse4', ['labelOptions'=>['style'=>'color: #c2c0bf']])?>
        </div>  
        
         
        <div class="col-md-4">
                <?= $form->field($model, 'course5', ['labelOptions'=>['style'=>'color: #c2c0bf']])?>
        </div> 
        
         <div class="col-md-4">
                    <?= $form->field($model, 'gradesCourse5', ['labelOptions'=>['style'=>'color: #c2c0bf']])->dropdownList([
                            'A' => 'A', 
                            'B' => 'B',
                            'C' => 'C',
                            'D' => 'D',
                            'F' => 'F'
                        ],
                        ['prompt'=>'Select Grades']
                    );?>
         </div>
              
        <div class="col-md-4">
                   <?= $form->field($model, 'creditsCourse5', ['labelOptions'=>['style'=>'color: #c2c0bf']])?>
        </div>  
        
        
        
        
        
         
        
        
        
        
            <div class="btn-center">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-lg btn-form']) ?>
            </div>
        
        <?php ActiveForm::end(); ?>
  </div>
</div>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script>
  $(document).ready(function () {
    $('div.hidden').fadeIn(1000).removeClass('hidden');
});
  </script>