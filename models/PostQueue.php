<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post_queue".
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property string $created_at
 */
class PostQueue extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post_queue';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'title', 'body', 'created_at'], 'required'],
            [['id'], 'integer'],
            [['body'], 'string'],
            [['created_at'], 'safe'],
            [['title'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'body' => 'Body',
            'created_at' => 'Created At',
        ];
    }
}
