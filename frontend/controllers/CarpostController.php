<?php
    namespace frontend\controllers;
    use frontend\controllers;
    use frontend\models\Post;
    use yii\web\Controller;
    use Yii;
    
    class CarpostController extends Controller{
    
        public function actionIndex(){
            $id=Yii::$app->request->getQueryParams('id');
            $posts = Post::find()
            ->joinWith('models')
            ->joinWith('brands')
            ->joinWith('engines')
            ->joinWith('bodies')
            ->joinWith('gearboxes')
            ->joinWith('colors')
            ->joinWith('users')
            ->where(['`post`.`id`'=>$id])
            ->all();

            return $this->render('index',['posts'=>$posts]);
        }
    }
?>