<?php
    namespace frontend\models;
    use yii\db\ActiveRecord;
    use app\models\Brands;
    use app\models\Models;
    use app\models\Colors;
    use app\models\Bodies;
    use app\models\Engines;
    use app\models\Gearboxes;
    use app\models\Users;

    class Carpost extends ActiveRecord{
        public function getBrands(){
            return $this->hasOne(Brands::class, ['id'=>'ID_Brand']);
        }
        public function getModels(){
            return $this->hasOne(Models::class, ['id'=>'ID_Model']);
        }
        public function getColors(){
            return $this->hasOne(Colors::class, ['id'=>'ID_Color']);
        }
        public function getBodies(){
            return $this->hasOne(Bodies::class, ['id'=>'ID_Body']);
        }
        public function getEngines(){
            return $this->hasOne(Engines::class, ['id'=>'ID_Engine']);
        }
        public function getGearboxes(){
            return $this->hasOne(Gearboxes::class, ['id'=>'ID_Gearbox']);
        }
        public function getUsers(){
            return $this->hasOne(Users::class, ['id'=>'ID_User']);
        }
    }
?>