<?php
/** @var yii\web\View $this */
$data_usd=file_get_contents(USD);//апишка usd
$data_eur=file_get_contents(EUR);//апишка eur
$courses_usd=json_decode($data_usd, true);
$courses_eur=json_decode($data_eur, true);
?>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    ion-icon.like{
    fill: black;
    stroke: none;
}
ion-icon{
    font-size: 50px;
    fill: transparent;
    stroke: black;
    stroke-width: 30px;
    transition: scale 0.2s;
    width: 35px;

}

ion-icon:hover {
    scale: 1.1;
    transition: scale 0.2s;
    cursor: pointer;
}
</style>
<body>
    <section class="carpost">
        <div class="carpost-container">
            <div class="carpost-head">
                <h1><?php foreach($posts as $post){echo($post->brands->Brand);}?> <?php foreach($posts as $post){echo($post->models->Model);}?>, <?php foreach($posts as $post){echo($post->Year);}?> года в г. <?php foreach($posts as $post){echo($post->City);}?></h1>
                <div class="carpost-post-btns">
                    <img src="">
                    <div class="large-font text-end top-20">
                        <ion-icon name="heart">
                            <div class="red-bg"></div>
                        </ion-icon>
                    </div>
                    
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
                        <div>
                            <h2><?php foreach($posts as $post){echo($post->Price);}?> р.</h2>
                            <p class="convertion"><?php foreach($posts as $post){echo(round(($post->Price)/$courses_usd["Cur_OfficialRate"]));}?>$</p>
                            <p class="convertion"><?php foreach($posts as $post){echo(round(($post->Price)/$courses_eur["Cur_OfficialRate"]));}?>€</p>
                        </div>
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
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
    let icon = document.querySelector('ion-icon');
    function documentLoaded(){
        $.ajax({
            url: '?r=carpost/getlikestate',
            type: 'post',
            data: {post_id: <?= $post->id ?> },
            success: function (data) {
                if(data.state =='like'){
                    icon.classList.add('like');
                }
                else{
                    icon.classList.remove('like');
                }
            }
        });
    }
    documentLoaded();
    icon.onclick = function(){
        $.ajax({
            url: '?r=carpost/changelikestate',
            type: 'post',
            data: {post_id: <?= $post->id ?> },
            success: function (data) {
                if(data.state =='like' && data.status != false){
                    icon.classList.add('like');
                }
                else{
                    icon.classList.remove('like');
                }
                if (data.status == false) {
                    window.location.href = 'http://localhost/yii/frontend/web/index.php?r=site%2Flogin'
                }
            }
        });
    }
</script>
</html>
