<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
    $form=ActiveForm::begin();?>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'ID_User');?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'ID_Brand');?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'ID_Model');?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'ID_Engine');?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'ID_Body');?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'ID_Gearbox');?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'ID_Color');?>
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
                <?php $items=['one'=>'one', 'two'=>'two', 'three'=>'three']?>
                <?= $form->field($post, 'Description')->dropDownList($items, ['prompt'=>'Select']);?>
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
                    <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary">GoBack</a>
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