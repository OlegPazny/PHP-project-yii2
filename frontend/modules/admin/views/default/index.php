<?php 
use yii\helpers\Html;
$this -> title=Yii::t('app','ADMINISTRATION PANEL');
$this -> params['breadcrumbs'][]=$this->title;
?>
<div class="admin-default-index">
    <h1><?= Html::encode($this->title)?></h1>
    <?php
     if (Yii::$app->user->identity->role=='admin') {
        
        ?>
        <p>
        <?= Html::a(Yii::t('app', 'Post'), ['post/index'], ['class' =>
        'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Brands'), ['brands/index'],
        ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Models'), ['models/index'],
        ['class' => 'btn btn-primary']) ?>
        </p>
        <?php 
 }else{
     echo "<p>Доступ запрещен</p>";
 }?>
 </div>