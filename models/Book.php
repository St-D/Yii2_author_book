<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property int $author_id
 * @property string $title
 * @property string $year_of_writing
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['author_id', 'title'], 'required'],
            [['author_id'], 'integer'],
            [['year_of_writing'], 'safe'],
            [['title'], 'string', 'max' => 50],
            [['title'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author_id' => 'Author ID',
            'title' => 'Title',
            'year_of_writing' => 'Year Of Writing',
        ];
    }

    public function getAuthor()
    {
        return $this -> hasOne(Author::class, ['id' => 'author_id']);
    }

    public function fields()
    {
        return [
            'id',
            'title',
            'year_of_writing' => function ($model) {
                return Yii::$app->formatter->asDate($model->year_of_writing, 'yyyy');
            },
            'author_id' => function ($model) {
                return $model->author['author'];
            }
        ];
    }

}
