<?php
/**
 * Created by PhpStorm.
 * User: huijiewei
 * Date: 2018/6/21
 * Time: 11:45
 */

namespace app\modules\admin\api\controllers;

use app\modules\admin\api\Controller;
use app\modules\admin\api\controllers\auth\LoginAction;
use app\modules\admin\api\controllers\auth\LogoutAction;
use app\modules\admin\api\controllers\auth\UserAction;

class AuthController extends Controller
{
    public function actions()
    {
        return [
            'login' => LoginAction::class,
            'logout' => LogoutAction::class,
            'user' => UserAction::class,
        ];
    }
}