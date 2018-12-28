<?php

namespace api\controllers;

use Yii;
use yii\rest\ActiveController;

class ArticleController extends ActiveController
{

    public $modelClass = 'common\models\Article';
}
