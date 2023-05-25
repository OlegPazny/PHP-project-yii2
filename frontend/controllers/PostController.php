<?php

namespace frontend\controllers;
    use frontend\controllers;
    use app\models\Post;
    use app\models\Brands;
    use app\models\Models;
    use app\models\Bodies;
    use app\models\Colors;
    use app\models\Engines;
    use app\models\Gearboxes;
    use yii\web\Controller;

    use Yii;

class PostController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $posts = Post::find()
            ->joinWith('models')
            ->joinWith('brands')
            ->joinWith('engines')
            ->joinWith('bodies')
            ->joinWith('gearboxes')
            ->joinWith('colors')
            ->joinWith('users')
            ->all();

            return $this->render('index',['posts'=>$posts]);
    }

}
