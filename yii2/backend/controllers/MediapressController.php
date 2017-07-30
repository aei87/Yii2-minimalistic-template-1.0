<?php

namespace backend\controllers;

use Yii;

use yii\web\Controller;
use yii\web\NotFoundHttpException;

class MediapressController extends Controller
{
    public function actionCreateGallery()
    {    
        return $this->render('index', []);       
    }
}
