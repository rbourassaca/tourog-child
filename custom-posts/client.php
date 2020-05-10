<?php
$gallerie_photos_largeur = 4;
$default_thumb = '/wp-content/uploads/2020/01/Logo.png';

$page_taxonomie = 'categories_clients';
$postID = get_the_ID();

require_once(__DIR__."/../components/photos_gallery.php");

function getExcerpt($str, $startPos=0, $maxLength=200) {
	if(strlen($str) > $maxLength) {
		$excerpt   = substr($str, $startPos, $maxLength-3);
		$lastSpace = strrpos($excerpt, ' ');
		$excerpt   = substr($excerpt, 0, $lastSpace);
		$excerpt  .= '...';
	} else {
		$excerpt = $str;
	}
	
	return $excerpt;
}

$args = array(
    'posts_per_page'   => -1,
    'post_type'  => 'any',
    'meta_query' => array(
        array(
            'key'   => 'client',
            'value' => get_the_ID(),
            'compare'   => 'LIKE',
        )
    )
);
?>

<?php 
$wp_query = new WP_Query($args);
include_once(__DIR__.'/../components/post_list.php') 
?>

<?php 

if(get_field('description', $postID) || get_field('photos', $postID)){
?>

<div class="container">
    <?php if(get_field('description', $postID)){ ?>
    <div class="row">
        <div class="col-lg-5">
                <h3 class="section-title">Description:</h3>
        </div>
        <div class="col-lg-7">
            <p><?php the_field('description', $postID) ?></p>
        </div>
    </div>
    <?php } ?>
    <?php if(get_field('photos', $postID)){ ?>
    <div class="row customGallery">
        <?php
        $field = 'photos';
        if(get_field($field, $postID)){
            photosGallery(get_field($field), $gallerie_photos_largeur);
        }
        ?>
    </div>
    <?php } ?>
</div>

<?php } ?>
