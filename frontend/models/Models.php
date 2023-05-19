<?php
    namespace frontend\models;
    use yii\db\ActiveRecord;

    class Models extends ActiveRecord{
        public function getPosts(){
            return $this->hasMany(Posts::class, ['id_model'=>'id']);
        }
    }
?>