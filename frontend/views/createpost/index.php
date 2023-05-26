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
                <?= $form->field($post, 'ID_Brand')->dropDownList(ArrayHelper::map(Brands::find()->select(['Brand','id'])->all(), 'id', 'Brand'),['class' => 'form-control inline-block']); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'ID_Model')->dropDownList(ArrayHelper::map(Models::find()->select(['Model','id'])->all(), 'id', 'Model'),['class' => 'form-control inline-block']); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'ID_Engine')->dropDownList(ArrayHelper::map(Engines::find()->select(['Engine','id'])->all(), 'id', 'Engine'),['class' => 'form-control inline-block']); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'ID_Body')->dropDownList(ArrayHelper::map(Bodies::find()->select(['Body','id'])->all(), 'id', 'Body'),['class' => 'form-control inline-block']); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
            <?= $form->field($post, 'ID_Gearbox')->dropDownList(ArrayHelper::map(Gearboxes::find()->select(['Gearbox','id'])->all(), 'id', 'Gearbox'),['class' => 'form-control inline-block']); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
            <?= $form->field($post, 'ID_Color')->dropDownList(ArrayHelper::map(Colors::find()->select(['Color','id'])->all(), 'id', 'Color'),['class' => 'form-control inline-block']); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'Photo');?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'City');?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'Year');?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'Price');?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'Run');?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'Description');?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <div class="col-lg-3">
                    <?= Html::submitButton('Create Post', ['class'=>'btn btn-primary']);?>
                </div>
                <div class="col-lg-2">
                    <a href=<?php echo Url::to(['users/index']);?> class="btn btn-primary">GoBack</a>
                </div>
            </div>
        </div>
    </div>
    <?php ActiveForm::end()?>






<!-- <form class="filters">
                <div class="filters-row">
                    <div class="filter-selection">
                        <h6>Марка</h6>
                        <select onchange="modal()" id="brand" name="brand">
                            <option disabled selected value>Выбрать</option>
                            
                        </select>
                    </div>
                    <div class="filter-selection">
                        <h6>Модель</h6>
                        <select id="model" name="model" class="custom-select">
                            <option disabled selected value>Выбрать</option>
                        </select> 
                    </div>
                    <div class="filter-selection">
                        <h6>Год</h6>
                        <input type="text" name="year" id="year">
                    </div>
                </div>
                <div class="filters-row">
                    <div class="filter-selection">
                        <h6>Цена</h6>
                        <input type="text" name="price" id="price">
                    </div>
                    <div class="filter-selection">
                        <h6>Кузов</h6>
                        <select name="body" id="body">
                            <option disabled selected value>Выбрать</option>
                            
                        </select>
                    </div>
                    <div class="filter-selection">
                        <h6>Цвет</h6>
                        <select name="color" id="color">
                            <option disabled selected value>Выбрать</option>
                            
                        </select>
                    </div>
                </div>
                <div class="filters-row">
                    <div class="filter-selection">
                        <h6>Дрыгатель</h6>
                        <select name="engine" id="engine">
                            <option disabled selected value>Выбрать</option>
                            
                        </select>
                    </div>
                    <div class="filter-selection">
                        <h6>КПП</h6>
                        <select name="gearbox" id="gearbox">
                            <option disabled selected value>Выбрать</option>
                            
                        </select>
                    </div>
                    <div class="filter-selection">
                        <h6>Пробег</h6>
                        <input type="text" name="run" id="run">
                    </div>
                </div>
                <div class="filters-row">
                <div class="filter-selection">
                    <h6>Город</h6>
                    <input type="text" name="city" id="city">
                </div >
                    <input class="photo-btn" type="file" name="img" accept=".jpg,.jpeg,.png" value="Добавить фото" id="photo"></input>
                    <button class="submit-btn" type="submit">Добавить объявление</button>
                </div>
                <textarea name="description" class="description" id="description"></textarea>
            </form> -->