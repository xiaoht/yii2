<?php

namespace api\modules\v1\controllers;

use Yii;
use backend\models\User;
use Firebase\JWT\JWT;
use api\modules\v1\external\IcbcConstants;
use api\modules\v1\external\IcbcSignature;
use api\modules\v1\external\WebUtils;
use api\modules\v1\external\IcbcEncrypt;
use api\modules\v1\external\DefaultIcbcClient;
use api\modules\v1\external\UiIcbcClient;
use api\modules\v1\external\IcbcConfig;


class SiteController extends BaseController
{

    public function actionIndex()
    {
        echo 'Hello World2!';
    }
}
