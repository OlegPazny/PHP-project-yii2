<?php
// namespace app\controllers;
namespace frontend\controllers;
// use frontend\controllers;
//     use frontend\models\Brands;
use app\controllers;
use app\models\Brands;
    use yii\web\Controller; 
    

class BrandsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $brands = Brands::find()->all();
            return $this->render('index',['brands'=>$brands]);
    }

}
