<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\modules\admin\models\Post $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="post-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ID_User') ?>

    <?= $form->field($model, 'ID_Brand') ?>

    <?= $form->field($model, 'ID_Model') ?>

    <?= $form->field($model, 'ID_Engine') ?>

    <?php // echo $form->field($model, 'ID_Body') ?>

    <?php // echo $form->field($model, 'ID_Gearbox') ?>

    <?php // echo $form->field($model, 'ID_Color') ?>

    <?php // echo $form->field($model, 'Photo') ?>

    <?php // echo $form->field($model, 'City') ?>

    <?php // echo $form->field($model, 'Year') ?>

    <?php // echo $form->field($model, 'Price') ?>

    <?php // echo $form->field($model, 'Run') ?>

    <?php // echo $form->field($model, 'Date') ?>

    <?php // echo $form->field($model, 'Description') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
