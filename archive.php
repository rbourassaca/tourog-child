<?php
//Editable
$header_opacity = 0.6;
$default_thumb = '/wp-content/uploads/2020/01/Logo.png';
//---

$page_title = get_the_archive_title();
$page_taxonomie = '';
$tourog_redux_demo = get_option('redux_demo');
$header_bg = '';

include_once('components/header_banner_bg.php');

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

get_header(); 

?>

<?php include_once('components/header_banner.php') ?>


<section class="blog blog-index">
    <?php include_once('components/breadcrumb_area.php') ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php 
                    while (have_posts()): the_post(); 
                            ?>
                <div class="post single blog-post">
                    <div class="post-content row">
                        <?php if ( has_post_thumbnail() ) { ?>
                            <div class="col-md-3 archive_thumb">
                                <?php the_post_thumbnail() ?>
                            </div>
                        <?php } else { ?>
                            <div class="col-md-3 archive_thumb">
                                <img src="<?php echo $default_thumb ?>" alt="Thumbnail">
                            </div>
                        <?php } ?>
                        <div class="col-md-9">
                            <h3 class="post-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                            <?php if(wp_get_post_terms( get_post()->ID, $page_taxonomie)){ ?>
                            <ul class="post-categories">
                                <?php 
                                    // Affichage des catégories
                                    $i = 1; foreach((wp_get_post_terms( get_post()->ID, $page_taxonomie)) as $category) { 
                                    if ($i == 1){echo ''; }else {echo ' ';}
                                        echo '<li><a href="'.get_term_link($category->slug, $page_taxonomie).'"> '.$category->name . ' '.'</a></li>'; 
                                        
                                        $i++;
                                    } ?>
                            </ul>
                            <?php  } ?>
                            <p class="post-intro"><?php if(getExcerpt(get_field("description"))){?>
                                <?php echo getExcerpt(get_field("description")); 
                                }
                        ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php tourog_pagination();?>
            </div>
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>