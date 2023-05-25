<?php
/** @var yii\web\View $this */
echo "<div class='brands-container'>";
    foreach ($brands as $brand){

        echo 
            '<div class="brand-card" id='.$brand->id.'> 
                <a href=search_results.php?id='.$brand->id.'><img src='.$brand->Label.'></a>
                <p>'.$brand->Brand.'</p>
            </div>';
    };
    echo "</div>";
?>