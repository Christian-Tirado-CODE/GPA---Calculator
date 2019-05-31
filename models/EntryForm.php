<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class EntryForm extends ActiveRecord
{


const STATUS_INACTIVE = 0;
const STATUS_ACTIVE = 1;


/**
     * @return string the name of the table associated with this ActiveRecord class.
     */



    public $name;
    public $email;


   public $course1;
   public $course2;
   public $course3;
   public $course4;
   public $course5;

   public $gradesCourse1;
   public $gradesCourse2;
   public $gradesCourse3;
   public $gradesCourse4;
   public $gradesCourse5;

   public $creditsCourse1;
   public $creditsCourse2;
   public $creditsCourse3;
   public $creditsCourse4;
   public $creditsCourse5;
   public $TotalCredits;

   public $gpa;



   public static function tableName()
    {
        return 'course_info';
    }
    public function rules()
    {
        return [
            [['name', 'email', 'course1', 'gradesCourse1','creditsCourse1',
            'course2', 'gradesCourse2','creditsCourse2',
            'course3', 'gradesCourse3','creditsCourse3',
            'course4', 'gradesCourse4','creditsCourse4',
            'course5', 'gradesCourse5','creditsCourse5',], 'required'],
            ['email', 'email'], 
            

        ];
    }
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'email' => 'E-mail',
            'course1' => 'course 1',
            'course2' => 'course 2',
            'course3' => 'course 3',
            'course4' => 'course 4',
            'course5' => 'course 5',
            'gradesCourse1' => 'grade',
            'gradesCourse2' => 'grade',
            'gradesCourse3' => 'grade',
            'gradesCourse4' => 'grade',
            'gradesCourse5' => 'grade',
            'creditsCourse1' => 'credits',
            'creditsCourse2' => 'credits',
            'creditsCourse3' => 'credits',
            'creditsCourse4' => 'credits',
            'creditsCourse5' => 'credits',
        ];
    }

    public function calcGPA($gradesCourse1){
        switch($gradesCourse1){
            case 'A':
                     $this->$gradesCourse1 = '4.0';
                     break;
            case 'B':
                     $this->$gradesCourse1 = '3.0';
                     break;
                     
            case 'C':
                     $this->$gradesCourse1 = '2.0';
                     break;
                     
            case 'D':
                     $this->$gradesCourse1 = '1.0';
                     break;
                    
            case 'F':
                     $this->$gradesCourse1 = '0.0';
                     break;
                     
        }  
         echo $this->$gradesCourse1;
    } 
   
}