<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * 
 *
 * 
 *
 */
class CalcGPA extends Model {
   // I need to get the class name, grade and credits.
   public $course;
   public $grades = [1 => 'A', 2 => 'B', 3 => 'C', 4 => 'D', 5 => 'F'];
   public $credits;
   public $gpa;

   public function rules()
   {
       return [
           // define validation rules here
       ];
   }
}