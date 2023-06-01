<?php
    namespace app\models;
    use yii\db\ActiveRecord;
    use frontend\models\Post;

    class Like extends ActiveRecord{
        public function getPost(){
            return $this->hasOne(Post::class,['id'=>'post_id']);
        }
    }
?>