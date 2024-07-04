<?php

namespace app\controllers;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {   
        $user = new User();
        return $this->render('user/index',['user' => $user]);
    }

}
