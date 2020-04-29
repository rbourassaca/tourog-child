<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php $tourog_redux_demo = get_option('redux_demo'); ?>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
        ?>
    <link rel="shortcut icon" href="<?php if(isset($tourog_redux_demo['favicon']['url'])){?><?php echo esc_url($tourog_redux_demo['favicon']['url']); ?><?php }?>">
    <?php }?>

    <!-- Magnific-popup -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/ressources/magnific-popup/magnific-popup.css' ?>">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() . '/ressources/magnific-popup/magnific-popup.js' ?>"></script>
    <!-- /// -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="preloader">
  <div class="layer"></div>
  <!-- end layer -->
  <div class="inner">
    <figure> <img src="<?php echo get_template_directory_uri();?>/images/preloader.gif" alt="<?php echo esc_attr__( 'Loader', 'tourog' )?>"> </figure>
    <span><?php if(isset($tourog_redux_demo['text_loader'])){?>
        <?php echo esc_attr($tourog_redux_demo['text_loader']);?>
        <?php }else{?>
        <?php echo esc_html__( 'Site Loading', 'tourog' );
        }
        ?></span> </div>
  <!-- end inner --> 
</div>
<!-- end preloader -->
<div class="page-transition">
  <div class="layer"></div>
  <!-- end layer --> 
</div>
<!-- end page-transition -->
<nav class="site-navigation">
  <div class="layer"></div>
  <!-- end layer -->
  <div class="inner">
    <?php 
      wp_nav_menu( 
      array( 
            'theme_location' => 'primary',
            'container' => '',
            'menu_class' => '', 
            'menu_id' => '',
            'menu'            => '',
            'container_class' => '',
            'container_id'    => '',
            'echo'            => true,
             'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
             'walker'            => new tourog_wp_bootstrap_navwalker(),
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul data-splitting id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,        
        )
     ); ?>
  </div>
  <!-- end inner --> 
</nav>
<!-- end site-navigation -->
<div class="social-media">
  <div class="layer"> </div>
  <!-- end layer -->
  <div class="inner">
    <h5><?php if(isset($tourog_redux_demo['header_share'])){?>
        <?php echo wp_specialchars_decode(esc_attr($tourog_redux_demo['header_share']));?>
        <?php }else{?>
        <?php echo esc_html__( 'Social Share', 'tourog' );
        }
        ?> </h5>
    <ul>
      <?php if(isset($tourog_redux_demo['header_facebook']) && $tourog_redux_demo['header_facebook'] != ''){?>
      <li><a href="<?php echo esc_url($tourog_redux_demo['header_facebook']); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
      <?php } ?>
      <?php if(isset($tourog_redux_demo['header_twitter']) && $tourog_redux_demo['header_twitter'] != ''){?>
      <li><a href="<?php echo esc_url($tourog_redux_demo['header_twitter']); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
      <?php } ?>
      <?php if(isset($tourog_redux_demo['header_linkedin']) && $tourog_redux_demo['header_linkedin'] != ''){?>
      <li><a href="<?php echo esc_url($tourog_redux_demo['header_linkedin']); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
      <?php } ?>
      <?php if(isset($tourog_redux_demo['header_google']) && $tourog_redux_demo['header_google'] != ''){?>
      <li><a href="<?php echo esc_url($tourog_redux_demo['header_google']); ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
      <?php } ?>
      <?php if(isset($tourog_redux_demo['header_youtube']) && $tourog_redux_demo['header_youtube'] != ''){?>
      <li><a href="<?php echo esc_url($tourog_redux_demo['header_youtube']); ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
      <?php } ?>
      <?php if(isset($tourog_redux_demo['header_instagram']) && $tourog_redux_demo['header_instagram'] != ''){?>
      <li><a href="<?php echo esc_url($tourog_redux_demo['header_instagram']); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
      <?php } ?>
      <!-- CUSTOM LINKS -->
      <li><a href="https://github.com/rbourassaca" target="_blank"><i class="fab fa-github"></i></a></li>
    </ul>
  </div>
</div>
<!-- end social-media -->
<div class="all-cases">
  <div class="layer"> </div>
  <!-- end layer -->
  <div class="inner">
    <?php if ( is_active_sidebar( 'aside-widget' ) ) : ?>
      <?php dynamic_sidebar( 'aside-widget' ); ?>
      <?php endif; ?>
  </div>
  <!-- end inner --> 
</div>
<!-- end all-cases -->
<main>
  <aside class="left-side">
    <?php if(isset($tourog_redux_demo['logo']['url']) && $tourog_redux_demo['logo']['url'] != ''){?>
    <div class="logo"> <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($tourog_redux_demo['logo']['url']); ?>" alt="<?php echo esc_attr__( 'Logo', 'tourog' )?>"></a> </div>
    <?php }else{ ?>
    <div class="logo"> <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="<?php echo esc_attr__( 'Logo', 'tourog' )?>"></a> </div>
    <?php } ?>
    <!-- end logo -->
    <div class="hamburger" id="hamburger">
      <div class="hamburger__line hamburger__line--01">
        <div class="hamburger__line-in hamburger__line-in--01"></div>
      </div>
      <div class="hamburger__line hamburger__line--02">
        <div class="hamburger__line-in hamburger__line-in--02"></div>
      </div>
      <div class="hamburger__line hamburger__line--03">
        <div class="hamburger__line-in hamburger__line-in--03"></div>
      </div>
      <div class="hamburger__line hamburger__line--cross01">
        <div class="hamburger__line-in hamburger__line-in--cross01"></div>
      </div>
      <div class="hamburger__line hamburger__line--cross02">
        <div class="hamburger__line-in hamburger__line-in--cross02"></div>
      </div>
    </div>
    <!-- end hamburger -->
    <?php if(isset($tourog_redux_demo['header_follow']) && $tourog_redux_demo['header_follow'] != ''){?>
    <div class="follow-us"> <?php echo wp_specialchars_decode(esc_attr($tourog_redux_demo['header_follow']));?> </div>
    <?php } ?>
    <!-- end follow-us -->
    <?php if(isset($tourog_redux_demo['audio_background']) && $tourog_redux_demo['audio_background']!= ''){?>
    <div class="equalizer"> <span></span> <span></span> <span></span> <span></span> </div>
    <!-- end equalizer --> 
    <?php } ?>
  </aside>
  <!-- end left-side -->
  <?php if(isset($tourog_redux_demo['header_btn']) && $tourog_redux_demo['header_btn'] != ''){ ?>
  <div class="all-cases-link"> <span><?php echo wp_specialchars_decode(esc_attr($tourog_redux_demo['header_btn']));?></span> <b>+</b> </div>
  <?php } ?>