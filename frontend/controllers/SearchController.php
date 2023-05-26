<?php
    namespace frontend\controllers;
    use frontend\controllers;
    use app\models\Post;
    use frontend\models\Search;
    use frontend\models\Brands;
    use frontend\models\Models;
    use frontend\models\Bodies;
    use frontend\models\Colors;
    use frontend\models\Engines;
    use frontend\models\Gearboxes;
    use yii\web\Controller;
    use yii\helpers\Url;
    use Yii;
    class SearchController extends Controller{
    
        public function actionIndex(){
            $id_brand=Yii::$app->request->getQueryParams('id_brand');
            $posts = Post::find()
            ->joinWith('models')
            ->joinWith('brands')
            ->joinWith('engines')
            ->joinWith('bodies')
            ->joinWith('gearboxes')
            ->joinWith('colors')
            ->joinWith('users')
            ->where(['post.id_brand'=>$id_brand])
            ->all();

            return $this->render('index',['posts'=>$posts]);
        }
    }