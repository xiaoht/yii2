<?php

namespace api\modules\v1\controllers;

use yii\web\Controller;

class BaseController extends Controller
{
    public $enableCsrfValidation = false;
}
