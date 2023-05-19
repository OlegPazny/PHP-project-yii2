<?php
    namespace frontend\controllers;
    use frontend\controllers;
    use frontend\models\Post;
    use frontend\models\Brands;
    use frontend\models\Models;
    use frontend\models\Bodies;
    use frontend\models\Colors;
    use frontend\models\Engines;
    use frontend\models\Gearboxes;
    use yii\web\Controller;

    use Yii;
    class PostController extends Controller{
    
        public function actionIndex(){
            $posts = Post::find()->all();
            $brands = Brands::find()->all();
            $models = Models::find()->all();
            $bodies = Bodies::find()->all();
            $colors = Colors::find()->all();
            $engines = Engines::find()->all();
            $gearboxes = Gearboxes::find()->all();
            
            // Yii::$app->response->format=\yii\web\Responce::FORMAT_HTML;
            $posts=Post::find()
            
            ->select('`post`.`id`, `Brand`, `Model`, `Engine`, `Body`, `Gearbox`, `Color`, `City`, `Year`, `Price`, `Run`, `Date`, `Photo`')
            ->join('join', 'brands', '`brands`.`id`=`post`.`id_brand`')
            ->join('join', 'models', '`models`.`id`=`post`.`id_model`')
            ->join('join', 'engines', '`engines`.`id`=`post`.`id_engine`')
            ->join('join', 'bodies', '`bodies`.`id`=`post`.`id_body`')
            ->join('join', 'gearboxes', '`gearboxes`.`id`=`post`.`id_gearbox`')
            ->join('join', 'colors', '`colors`.`id`=`post`.`id_color`')
            ->orderBy('Date DESC')
            ->all();
            return $this->render('index',['posts'=>$posts]);
        }
    }
?>
<!-- SELECT DISTINCT POST.id, `Brand`, `Model`, `Engine`, `Body`, `Gearbox`, `Color`, `City`, `Year`, `Price`, `Run`, `Date`, `Photo` FROM `POST` 
    INNER JOIN `BRANDS` ON `BRANDS`.`id`=`POST`.`ID_Brand` 
    INNER JOIN `MODELS` ON `MODELS`.`id` =`POST`.`ID_Model` 
    INNER JOIN `ENGINES` ON `ENGINES`.`id` =`POST`.`ID_Engine` 
    INNER JOIN `BODIES` ON `BODIES`.`id` =`POST`.`ID_Body` 
    INNER JOIN `GEARBOXES` ON `GEARBOXES`.`id` =`POST`.`ID_Gearbox` 
    INNER JOIN `COLORS` ON `COLORS`.`id` =`POST`.`ID_Color` ORDER BY `POST`.`Date` DESC; -->