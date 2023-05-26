<?php
    namespace app\models;
    use yii\db\ActiveRecord;
    use frontend\models\Carpost;

    class Like extends ActiveRecord{
        public function getPost(){
            return $this->hasOne(Carpost::className(),['id'=>'post_id']);
        }
    }
?>