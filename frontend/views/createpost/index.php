<?php
use yii\helpers\html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Brands;
use app\models\Models;
use app\models\Engines;
use app\models\Bodies;
use app\models\Gearboxes;
use app\models\Colors;
    $form=ActiveForm::begin();?>
    <div class="row" style="display:none">
        <div class="form-group">
            <div class="col-lg-6">
            <?= $form->field($post, 'ID_User')->textInput(['value'=>Yii::$app->user->identity->id])->label(false) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'ID_Brand')->dropDownList(ArrayHelper::map(Brands::find()->select(['Brand','id'])->all(), 'id', 'Brand'),['class' => 'form-control inline-block'])->label("Марка"); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'ID_Model')->dropDownList(ArrayHelper::map(Models::find()->select(['Model','id'])->all(), 'id', 'Model'),['class' => 'form-control inline-block'])->label("Модель"); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'ID_Engine')->dropDownList(ArrayHelper::map(Engines::find()->select(['Engine','id'])->all(), 'id', 'Engine'),['class' => 'form-control inline-block'])->label("Двигатель"); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'ID_Body')->dropDownList(ArrayHelper::map(Bodies::find()->select(['Body','id'])->all(), 'id', 'Body'),['class' => 'form-control inline-block'])->label("Кузов"); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
            <?= $form->field($post, 'ID_Gearbox')->dropDownList(ArrayHelper::map(Gearboxes::find()->select(['Gearbox','id'])->all(), 'id', 'Gearbox'),['class' => 'form-control inline-block'])->label("Коробка"); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
            <?= $form->field($post, 'ID_Color')->dropDownList(ArrayHelper::map(Colors::find()->select(['Color','id'])->all(), 'id', 'Color'),['class' => 'form-control inline-block'])->label("Цвет"); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'Photo')->label("Фото");?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'City')->label("Город");?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'Year')->label("Год");?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'Price')->label("Цена");?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'Run')->label("Пробег");?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'Description')->label("Описание");?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <div class="col-lg-3"style="margin-bottom:10px; margin-top:10px;">
                    <?= Html::submitButton('Добавить', ['class'=>'btn btn-primary']);?>
                </div>
                <div class="col-lg-2">
                    <a href=<?php echo Url::to(['users/index']);?> class="btn btn-primary">Назад</a>
                </div>
            </div>
        </div>
    </div>
    <?php ActiveForm::end()?>