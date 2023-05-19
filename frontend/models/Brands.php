<?php
    namespace frontend\models;
    use yii\db\ActiveRecord;

    class Brands extends ActiveRecord{
        public function getPosts(){
            return $this->hasMany(Posts::class, ['id_brand'=>'id']);
        }
    }
?>