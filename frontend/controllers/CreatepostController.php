<?php

namespace frontend\controllers;
    use frontend\controllers;
    use app\models\Createpost;
    use app\models\Post;
    use app\models\Brands;
    use app\models\Models;
    use app\models\Bodies;
    use app\models\Colors;
    use app\models\Engines;
    use app\models\Gearboxes;
    use yii\web\Controller;

    use Yii;

class CreatepostController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $post=new Post();
        $formData=Yii::$app->request->post();
        if($post->load($formData)){
            if($post->save()){
                Yii::$app->getSession()->setFlash('message', 'Успешно');
                return $this->redirect(['index']);
            }
            else{
                Yii::$app->getSession()->setFlash('message', 'Неуспешно');
            }
        }
        return $this->render('index',['post'=>$post]);
    }
    public function actionCreate(){
        // $model=new AreaModel();

        // $model_state=StateModel::find()->orderBy('nameRu ASC')->all();
        // foreach($model_)
    }
    public function actionUpdate(){

    }

}
