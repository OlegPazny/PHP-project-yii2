<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Models $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="models-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_Brand')->textInput() ?>

    <?= $form->field($model, 'Model')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
