<?php
    namespace frontend\controllers;
    use frontend\controllers;
    use frontend\models\User;
    use app\models\Post;
    use yii\web\Controller; 

    use Yii;
    
    class UsersController extends Controller{
    
        // public function actionIndex(){
        //     $users = User::find()->all();
        //     return $this->render('index',['users'=>$users]);
        // }
        public function actionIndex()
        {
            return $this->render('index', [
                'user' => Yii::$app->user->identity,
                'userPosts'=>Yii::$app->user->identity->userPosts,
            ]);
            // return $this->render('index');
        }
    }
?>