<?php

namespace app\models;

use yii\base\BaseObject;
use app\models\PostQueue;

class AddToPostQueue extends BaseObject implements \yii\queue\JobInterface
{
    public $title;
    public $body;

    public function execute($queue){
        $faker = \Faker\Factory::create();

        $post = new PostQueue();
        for($i = 1; $i <= 50; $i++){
            $post->setIsNewRecord(true);
            $post->id = null;
            $post->title = $faker->words(random_int(10,20), true);
            $post->body = $faker->paragraph(random_int(5, 20));
            $post->save();
        }
    }
}