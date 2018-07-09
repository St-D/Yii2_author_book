<?php
/**
 * Created by PhpStorm.
 * User: Stanislav
 * Date: 09.07.2018
 * Time: 21:33
 */

//namespace app\controllers\api\v1;
namespace app\controllers;

use yii\rest\ActiveController;


class ApiController extends ActiveController
{
    public $modelClass = 'app\models\Book';

    protected function verbs() // add POST to update (task 4c)
    {
        return [
            'index' => ['GET', 'HEAD'],
            'view' => ['GET', 'HEAD'],
            'create' => ['POST'],
            'update' => ['PUT', 'PATCH', 'POST'],
            'delete' => ['DELETE'],
        ];
    }
}