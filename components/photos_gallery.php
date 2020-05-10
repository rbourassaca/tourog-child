<?php

function photosGallery($photos, $width = 4){
    $HTML = '';
    foreach($photos as $photo){
        $HTML .= '<div class="col-lg-'.(12/$width).'">';
        $HTML .= do_shortcode( '[ts_image fancybox="yes" image="'.$photo['id'].'"]' );
        $HTML .= '</div>';
    }
    echo $HTML;
}

?>