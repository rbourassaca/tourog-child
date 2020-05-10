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


<main class="tourog-page">
    <?php include_once('components/breadcrumb_area.php') ?>
    <?php include_once('components/post_list.php') ?>
</main>


<?php get_footer(); ?>