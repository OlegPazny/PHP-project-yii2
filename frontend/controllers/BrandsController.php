<?php
    namespace frontend\controllers;
    use frontend\controllers;
    use frontend\models\Brands;
    use yii\web\Controller; 
    
    class BrandsController extends Controller{
    
        public function actionIndex(){
            $brands = Brands::find()->all();
            return $this->render('index',['brands'=>$brands]);
        }
    }
?>