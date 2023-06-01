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

    public function actionChangelikestate()
    {
        if (Yii::$app->request->isAjax) {
            $status=null;
            $data = Yii::$app->request->post();
            $post_id = $data['post_id'];
            $user_id = Yii::$app->user->identity->id;
            if($user_id == null) {
                $status = false;
            }

            $like = Like::findOne(['post_id' => $post_id, 'user_id' => $user_id]);
            $class_name = 'like';

            if ($like) {
                $class_name = 'no_like';
                $like->delete();
            } else {
                $class_name = 'like';
                $new_like = new Like();
                $new_like->post_id = $post_id;
                $new_like->user_id = $user_id;
                $new_like->save();
            }
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return [
                'state' => $class_name,
                'status' => $status

            ];
        }
    }

    public function actionGetlikestate()
    {
        if (Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();
            $post_id = $data['post_id'];
            $user_id = Yii::$app->user->identity->id;

            $like = Like::findOne(['post_id' => $post_id, 'user_id' => $user_id]);

            if ($like) {
                $state = 'like';
            } else {
                $state = 'no_like';
            }
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return [
                'state' => $state
            ];
        }
    }

    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

}
