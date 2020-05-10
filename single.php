<?php
/**
 * The Template for displaying all single posts
 */

$page_title = do_shortcode('[acf field="nom"]');
$page_subtitle = do_shortcode('[acf_vc_integrator get_field_data_from="" field_group="7" field_from_7="field_5e1b5c961496b" show_label="No" align="left" gallery_columns="" gm_show_placecard="default" gm_map_type_control="default" gm_fullscreen_control="default" gm_street_view_control="default" gm_zoom_control="default" gm_scale="default" hidden_field_name="Client"]');
$tourog_redux_demo = get_option('redux_demo');
$header_bg;

if(do_shortcode('[acf field="nom"]') === ""){
    $page_title = get_the_title();
}

if(has_post_thumbnail() === false){
    include_once('components/header_banner_bg.php');
} else {
    $header_bg = get_the_post_thumbnail_url();
}

get_header(''); 
?>

<?php include_once('components/header_banner.php') ?>

<main class="tourog-page">
    <?php include_once('components/breadcrumb_area.php') ?>

    <?php
        switch(get_post_type(get_the_ID())){
            case 'audio':
                require_once('custom-posts/audio.php');
                break;
            case 'video':
                require_once('custom-posts/video.php');
                break;
            case 'web':
                require_once('custom-posts/web.php');
                break;
            case 'client':
                require_once('custom-posts/client.php');
                break;
        }
    ?>
</main>

<?php
    get_footer();
?>