<?php

function photosGallery($photos, $width){
    $HTML = '';
    foreach($photos as $photo){
        $HTML .= '<a class="col-lg-'.(12/$width).'" href="'.$photo["url"].'">';
        $HTML .= '<img src="'.$photo["sizes"]["medium"].'" alt="'.$photo["alt"].'">';
        $HTML .= '</a>';
    }
    echo $HTML;
}

?>

<script>
    // Init images
    $(document).ready(function() {
        $('.customGallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            closeOnContentClick: true,
            gallery:{
                enabled:true
            }
        });
    });
</script>
