<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Post $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_User')->textInput() ?>

    <?= $form->field($model, 'ID_Brand')->textInput() ?>

    <?= $form->field($model, 'ID_Model')->textInput() ?>

    <?= $form->field($model, 'ID_Engine')->textInput() ?>

    <?= $form->field($model, 'ID_Body')->textInput() ?>

    <?= $form->field($model, 'ID_Gearbox')->textInput() ?>

    <?= $form->field($model, 'ID_Color')->textInput() ?>

    <?= $form->field($model, 'Photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'City')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Year')->textInput() ?>

    <?= $form->field($model, 'Price')->textInput() ?>

    <?= $form->field($model, 'Run')->textInput() ?>

    <?= $form->field($model, 'Date')->textInput() ?>

    <?= $form->field($model, 'Description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
