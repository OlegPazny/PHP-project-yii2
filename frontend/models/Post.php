<?php
    namespace frontend\models;
    use yii\db\ActiveRecord;
    use frontend\models\Brands;
    use frontend\models\Models;

    class Post extends ActiveRecord{
        public function getBrands(){
            return $this->hasOne(Brands::class, ['id'=>'id_brand']);
        }
        public function getModels(){
            return $this->hasOne(Models::class, ['id'=>'ID_Model']);
        }
    }
?>