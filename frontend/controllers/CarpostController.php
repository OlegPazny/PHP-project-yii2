<?php

namespace frontend\controllers;
use frontend\controllers;
use app\models\Post;
use app\models\Like;
use app\models\Carpost;
use yii\web\Controller;
use Yii;

class CarpostController extends \yii\web\Controller
{
    public function actionIndex()
    {
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

    public function actionGetlikestate(){
        if (Yii::$app->request->isAjax) {

            $data = Yii::$app->request->post();
            $article_id = $data['article_id'];
            $user_id = Yii::$app->user->identity->Id;

            $like = Like::findOne(['article_id' => $article_id, 'user_id' => $user_id]);

            if ($like) {
                $state = 'toggled-on';
            }
            else{
                $state = 'toggled-off';
            }

            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return[
                'state'=>$state
            ];
        }
    }

    public function actionTogglelike()
    {

        if (Yii::$app->request->isAjax) {

            $data = Yii::$app->request->post();
            $post_id= $data['post_id'];
            $user_id = Yii::$app->user->identity->Id;

            $like=Like::findOne(['post_id'=>$post_id,'user_id'=>$user_id]);
            $message='like on';
            $class_name='toggled-on';

            if($like){
                $message='there is like';
                $class_name='toggled-off';
                $like->delete();
            }
            else{
                $message='there is no like';
                $class_name='toggled-on';
                $new_like = new Like();
                $new_like->post_id = $post_id;
                $new_like->user_id = $user_id;
                $new_like->save();
            }
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return [
                'message' => $message,
                'state'=>$class_name,
                'code' => 100,
            ];
        }
    }

}
