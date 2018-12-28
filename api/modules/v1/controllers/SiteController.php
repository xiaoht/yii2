<?php

namespace api\modules\v1\controllers;

use Yii;

class SiteController extends BaseController
{

    public function actionIndex()
    {
        echo 'Hello World2!';
    }

    public function actionHello()
    {
        echo 'Hello!';
    }
}
