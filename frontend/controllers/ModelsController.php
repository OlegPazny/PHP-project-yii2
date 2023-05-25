<?php
namespace app\controllers;
// namespace frontend\controllers;

class ModelsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
