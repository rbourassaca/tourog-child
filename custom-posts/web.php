<?php
$gallerie_photos_largeur = 4;
require_once(__DIR__."/../components/photos_gallery.php");
?>


<div class="container">
    <div class="vc_row">
        <div class="row">
            <div class="col-lg-12">
            <table class="table light">
                <tbody>
                    <?php if(get_field('lien_vers_le_site')){ ?>
                        <tr>
                            <th scope="row">Lien vers le site</th>
                            <td><?php echo '<a href="'.get_field('lien_vers_le_site').'" target="_blank">'.get_field('lien_vers_le_site').'</a>' ?></td>
                        </tr>
                    <?php } ?>
                    <?php if(get_field('lien_vers_le_code')){ ?>
                        <tr>
                            <th scope="row">Lien vers le code</th>
                            <td><?php echo '<a href="'.get_field('lien_vers_le_code').'" target="_blank">'.get_field('lien_vers_le_code').'</a>' ?></td>
                        </tr>
                    <?php } ?>
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