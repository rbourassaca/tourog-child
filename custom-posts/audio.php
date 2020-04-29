<?php
$gallerie_photos_largeur = 4;
require_once(__DIR__."/../components/photos_gallery.php");
?>


<section class="text-content-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-center">
                <?php
                    $field = 'liens_projet';
                    $HTML = '';
                    foreach(get_field('liens_projet') as $oembed){
                        $HTML .= '<div class="embed-container">';
                        $HTML .= $oembed['oembed'];
                        $HTML .= '</div>';
                    }
                    echo $HTML;
                ?>
            </div>
            <div class="col-lg-4">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th scope="row">Type</th>
                        <td><?php the_field('type') ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Rôle(s) dans le projet</th>
                        <td><?php the_field('role_dans_le_projet') ?></td>
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
                if(get_field($field)){
                    photosGallery(get_field($field), $gallerie_photos_largeur);
                }
                ?>
            </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>

<?php require_once(__DIR__.'/../components/contact.php'); ?>