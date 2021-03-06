<?php
$gallerie_photos_largeur = 4;
require_once(__DIR__."/../components/photos_gallery.php");
?>



<div class="container">
    <div class="vc_row">
        <div class="row">
            <div class="col-lg-12">
                <?php
                    $field = 'liens_vers_video';
                    $HTML = '';
                    foreach(get_field('liens_vers_video') as $oembed){
                        $HTML .= '<div class="embed-container">';
                        $HTML .= $oembed['oembed'];
                        $HTML .= '</div>';
                    }
                    echo $HTML;
                ?>
            </div>
                <div class="col-lg-12">
                <table class="table light">
                    <tbody>
                        <tr>
                            <th scope="row">Crédits</th>
                            <td><?php the_field('credits') ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Logiciel(s) utilisé</th>
                            <td><?php the_field('logiciels_utilise') ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php 
if(get_field('description') || get_field('photos')){
?>

<div class="container">
    <?php if(get_field('description')){ ?>
    <div class="vc_row">
        <div class="row light">
            <div class="col-lg-5">
                    <h3 class="section-title">Description</h3>
            </div>
            <div class="col-lg-7">
                <p><?php the_field('description') ?></p>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php if(get_field('photos')){ ?>
    <div class="vc_row">
        <div class="row customGallery">
            <?php
            $field = 'photos';
            if(get_field($field)){
                photosGallery(get_field($field), $gallerie_photos_largeur);
            }
            ?>
        </div>
    </div>
    <?php } ?>
</div>

<?php } ?>