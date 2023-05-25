<?php
/** @var yii\web\View $this */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <section class="carpost">
        <div class="carpost-container">
            <div class="carpost-head">
                <h1><?php foreach($posts as $post){echo($post->brands->Brand);}?> <?php foreach($posts as $post){echo($post->models->Model);}?>, <?php foreach($posts as $post){echo($post->Year);}?> года в г. <?php foreach($posts as $post){echo($post->City);}?></h1>
                <div class="carpost-post-btns">
                    <img src="">
                    <?php echo("Кнопка сохранить");?>
                </div>
            </div>
            <div class="carpost-data">
                <h6>Добавлено <?php foreach($posts as $post){echo($post->Date);}?></h6>
                <h6>№<?php foreach($posts as $post){echo($post->id);}?></h6>
            </div>
            <div class="carpost-info-block">
                <figure class="carpost-figure">
                    <img class="carpost-img" src="<?php foreach($posts as $post){echo($post->Photo);}?>">
                </figure>
                <div class="carpost-info">
                    <div class="carpost-data">
                        <h2><?php foreach($posts as $post){echo($post->Price);}?>$</h2>
                        <h3><?php foreach($posts as $post){echo($post->Year);}?> г., КПП <?php foreach($posts as $post){echo($post->gearboxes->Gearbox);}?>, <?php foreach($posts as $post){echo($post->engines->Engine);}?>,<br/><?php foreach($posts as $post){echo($post->bodies->Body);}?>, <?php foreach($posts as $post){echo($post->Run);}?> км</h3>
                        <h3><?php foreach($posts as $post){echo($post->colors->Color);}?></h3>
                    </div>
                </div>
            </div>
            <div class="carpost-description">
                <h1>Описание</h1>
                <h3><?php foreach($posts as $post){echo($post->Description);}?></h3>
            </div>
        </div>
    </section>
</body>
</html>