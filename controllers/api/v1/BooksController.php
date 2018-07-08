<?php
/**
 * Created by PhpStorm.
 * User: Stanislav
 * Date: 08.07.2018
 * Time: 0:50
 */

namespace app\controllers\api\v1;

use app\models\Book;
use app\models\Author;
use yii\rest\ActiveController;

class BooksController extends ActiveController
{
    public $modelClass = 'app\models\Book';

    public function actionById($id)
    {
        return Book::findOne($id);
    }

    public function actionList()
    {
//        $books = Book::find()->orderBy('year_of_writing')->all();
//        $books = Book::find()->asArray()->with()->where('author_id=1')->all();
//        $books = Book::find()->asArray()->with('author')->all(); // ничего не поменяло


//        $quer = "SELECT * FROM book JOIN author ON book.author_id = author.id ";
//        $books = Book::findBySql($quer)->all();

//          $books = Book::findOne(3)->author;

          $books = Book::find()->asArray()->with('author')->all(); // пусть так будет

        return $books;
    }
}