<?php
/** @var yii\web\View $this */
use yii\helpers\Url;
    echo "<div class='post-container'>";
    foreach ($posts as $post){
        echo 
            '<a href="'.Url::to(['carpost/index', 'id' => $post->id]).'">
            <div class="post">
                <figure>
                    <img src="'.$post->Photo.'">
                </figure>
                <div class="post-info">
                    <div class="post-txt">
                        <h4>'.$post->brands->Brand.' '.$post->models->Model.'</h4>
                        <h6>'.$post->Price.' р.</h6>
                        <h6>'.$post->Year.' г., '.$post->gearboxes->Gearbox.', '.$post->engines->Engine.', '.$post->bodies->Body.', '.$post->Run.' км</h6>
                    </div>
                </div>
            </div>
        </a>';
    };
    echo "</div>";
?>