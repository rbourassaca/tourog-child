<?php
$gallerie_photos_largeur = 4;
?>


<section class="text-content-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th scope="row">Lien vers le site</th>
                        <td><?php echo '<a href="'.get_field('lien_vers_le_site').'" target="_blank">'.get_field('lien_vers_le_site').'</a>' ?></td>
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
</section>

<?php 
if(get_field('description') || get_field('photos')){
?>
    <section class="intro">
        <div class="container">
            <?php if(get_field('description')){ ?>
            <div class="row">
                <div class="col-lg-5">
                        <h3 class="section-title">Description</h3>
                </div>
                <div class="col-lg-7">
                    <p><?php the_field('description') ?></p>
                </div>
            </div>
            <?php } ?>
            <?php if(get_field('photos')){ ?>
            <div class="row customGallery">
                <?php
                $field = 'photos';
                $HTML = '';
                if(get_field($field)){
                    $field = get_field($field);
                    foreach($field as $photo){
                        $HTML .= '<div class="col-lg-'.(12/$gallerie_photos_largeur).' customGalleryItem" style="background-image: url('.$photo["sizes"]["medium_large"].'); background-size: cover;"></div>';
                    }
                    echo $HTML;
                }
                ?>
            </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>

<?php require_once(__DIR__.'/../components/contact.php'); ?>