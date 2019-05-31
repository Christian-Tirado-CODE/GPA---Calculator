<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class AddPostForm extends ActiveRecord
{
    public static function tableName(){
        return 'post';
    }

    public function rules(){
        return [
            [ 'name', 'trim' ],
            [ 'text', 'trim' ],
        ];
    }
}