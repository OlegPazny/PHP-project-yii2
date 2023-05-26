<?php use yii\helpers\Url;?>
<?php use yii\helpers\Html;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <section class="info-section">
        <h1>Аккаунт</h1>
        <div class="info-container">
            <div>
                <h2>Имя: <?php echo(\Yii::$app->user->identity->username)?></h2>
                <h2>Email: <?php echo(\Yii::$app->user->identity->email)?></h2>
                <h2>Номер телефона: <?php echo(\Yii::$app->user->identity->number)?></h2>
            </div>
            <div>
                <?= Html::a('Create', ['createpost/index'],['class'=>'btn btn-primary'])?>
            </div>
        </div>
    </section>
    <section class="saved-section">
        <h1>Избранное</h1>
    </section>
    <section class="saved-section">
        <h1>Мои автомобили</h1>
        <?php
            foreach ($userPosts as $userPost)
            {
        ?>
            <a href="<?php echo("/frontend/web/index.php?r=carpost%2Findex&id=".$userPost->id)?>">
                <div class="post">
                    <figure>
                        <img src="<?= $userPost->Photo ?>">
                    </figure>
                    <div class="post-info">
                        <div class="post-txt">
                            <h4><?= $userPost->brands->Brand ?> <?= $userPost->models->Model ?></h4>
                            <h6>
                                <?= $userPost->Price ?>
                            </h6>
                            <h6>
                                <?= $userPost->Year ?> г., <?= $userPost->gearboxes->Gearbox ?>,
                                <?= $userPost->engines->Engine ?>, <?= $userPost->bodies->Body ?>,
                                <?= $userPost->Run ?> км
                            </h6>
                        </div>
                    </div>
                </div>
            </a>
        <?php
            }
        ?>
    </section>
</body>
</html>