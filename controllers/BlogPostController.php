<?php

namespace app\controllers;

class BlogPostController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
