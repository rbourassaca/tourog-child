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
    'post_type'  => array('audio', 'video', 'web'),
    'meta_query' => array(
        array(
            'key'   => 'client',
            'value' => get_the_ID(),
            'compare'   => 'LIKE',
        )
    )
);
$postsClient = get_posts($args);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php 
            foreach($postsClient as $post){
        ?>
            <div class="post single blog-post">
                <div class="post-content row">
                    <?php if(has_post_thumbnail()) { ?>
                    <div class="col-md-3 archive_thumb">
                        <?php the_post_thumbnail() ?>
                    </div>
                    <?php } else {?>
                    <div class="col-md-3 archive_thumb">
                        <img src="<?php echo $default_thumb ?>" alt="Thumbnail">
                    </div>
                    <?php } ?>
                    <div class="col-md-9">
                        <h3 class="post-title"><a href="<?php echo get_post_permalink() ?>"><?php echo $post->post_title ?></a>
                        </h3>
                        <?php if(wp_get_post_terms( $post->ID, get_post_taxonomies( $post->ID ))){ ?>
                        <ul class="post-categories">
                            <?php 
                                // Show all category for post
                                $i = 1; 
                                foreach((wp_get_post_terms( $post->ID, get_post_taxonomies( $post->ID ))) as $category) { 
                                    if ($i == 1){
                                        echo ''; 
                                    }else {
                                        echo ' ';
                                    }
                                    echo '<li><a href="'.get_term_link($category->slug, $category->taxonomy).'"> '.$category->name . ' '.'</a></li>'; 
                                    $i++;
                                }
                            ?>
                        </ul>
                        <?php  } ?>
                        <p class="post-intro"><?php if(getExcerpt(get_field("description"))){?>
                            <?php echo getExcerpt(get_field("description"));
                        } ?>
                        </p>
                    </div>
                </div>
                <!-- end post-content -->
            </div>
            <!-- end post -->
            <?php } ?>
            <!-- end post -->
        </div>

    </div>
</div>

<?php 

if(get_field('description', $postID) || get_field('photos', $postID)){
?>
    <section class="intro">
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
    </section>
<?php } ?>

<?php require_once(__DIR__.'/../components/contact.php'); ?>