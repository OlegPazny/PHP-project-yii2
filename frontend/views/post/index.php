<?php
    // foreach($brands as $brand){
    //     echo $brand->Label;
    //     echo $brand->Brand;
    // }

    echo "<div class='last-post-container'>";
    foreach ($posts as $post){

        echo 
            '<a>
            <div class="post">
                <figure>
                    <img src="'.$post->Photo.'">
                </figure>
                <div class="post-info">
                    <div class="post-txt">
                        <h4>'.$post->ID_Brand.' '.$post->Model.'</h4>
                        <h6>'.$post->Price.'$</h6>
                        <h6>'.$post->Year.' г., '.$post->ID_Gearbox.', '.$post->ID_Engine.', '.$post->ID_Body.', '.$post->Run.' км</h6>
                    </div>
                </div>
            </div>
        </a>';

    };
    echo "</div>";
?>