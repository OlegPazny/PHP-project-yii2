<?php
/** @var yii\web\View $this */
use yii\helpers\Url;
echo "<div class='brands-container'>";
    foreach ($brands as $brand){

        echo 
            '<div class="brand-card" id='.$brand->id.'> 
                <a href="'.Url::to(['search/index', 'id_brand' => $brand->id]).'"><img src='.$brand->Label.'></a>
                <p>'.$brand->Brand.'</p>
            </div>';
    };
    echo "</div>";
?>