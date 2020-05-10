<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php $nav_menu_type = ( tourog_get_option( 'nav_menu_type' ) ) ? tourog_get_option( 'nav_menu_type' ) : 'horizontal'; 
	
	$retina_logo = ( tourog_get_option( 'retina_logo' ) ) ? tourog_get_option( 'retina_logo' ) : '';
	$nav_menu_type = ( tourog_get_option( 'nav_menu_type' ) ) ? tourog_get_option( 'nav_menu_type' ) : 'hamburger';
	$social_media = tourog_get_option( 'social_media' );
	$enable_social_icons = ( tourog_get_field( 'disable_social_icons' ) ) ? false : true;
	$enable_soundbar = ( tourog_get_field( 'disable_soundbar' ) ) ? false : true;
	$enable_soundbar_option = tourog_get_option( 'enable_soundbar' );
	$logo = ( tourog_get_option( 'logo' ) ) ? tourog_get_option( 'logo' ) : get_template_directory_uri() . '/images/logo@2x.png';
	
	?>
<?php
if ( tourog_get_option( 'enable_cursor_effect' ) ):
  ?>
<div class="cursor js-cursor"></div>
<?php
endif;
?>
<?php
if ( tourog_get_option( 'enable_preloader' ) ):
	$pre_loader_icon = ( tourog_get_option( 'pre_loader_icon' ) ) ? tourog_get_option( 'pre_loader_icon' ) : get_template_directory_uri() . '/images/preloader.gif';
	$preloader_text = ( tourog_get_option( 'pre-loader_text' ) !== '' ) ? tourog_get_option( 'pre-loader_text' ) : '';
	
	
	
?>
<div class="preloader">
  <div class="layer"></div>
  <!-- end layer -->
  <div class="inner">
    <figure> <img src="<?php echo esc_url( $pre_loader_icon ); ?>" alt="<?php bloginfo( 'name' ); ?>"> </figure>
    <span><?php echo esc_html( $preloader_text ); ?></span> </div>
  <!-- end inner --> 
</div>
<!-- end preloader -->


<div class="page-transition">
	<div class="layer"></div>
	</div>
<!-- end page-transition -->
<?php endif; ?>
	
<?php if( is_active_sidebar( 'allcases' ) ) { ?>
<div class="all-cases">
  <div class="layer"> </div>
  <!-- end layer -->
  <div class="inner">
    <?php dynamic_sidebar( 'allcases' ); ?>
  </div>
  <!-- end inner --> 
</div>
<!-- end all-cases -->

<?php } ?>
<?php if( 'hamburger' === $nav_menu_type ) : ?>
<nav class="site-navigation">
  <div class="layer"></div>
  <!-- end layer -->
  <div class="inner">
    <?php
    if ( has_nav_menu( 'header' ) ) {
      wp_nav_menu( array(
        'theme_location' => 'header',
        'menu_class' => 'menu-container',
        'walker' => new WP_Tourog_Navwalker(),
      ) );
    }
    ?>
  </div>
  <!-- end inner --> 
</nav>
<!-- end site-navigation -->

<?php endif; ?>
<aside class="left-side">
  
  <!-- end logo -->
  
  <?php if( 'hamburger' === $nav_menu_type ) : ?>
  <?php
  if ( has_nav_menu( 'header' ) ) {
    ?>
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
  
  <?php
  } else {}
  ?>
  <?php endif; ?>
  <?php
  if ( $enable_social_icons ):
    $social_media = tourog_get_option( 'social_media' );
  if ( $social_media ):
    ?>
  <div class="social-links">
    <ul>
      <?php foreach ( $social_media as $social ) { ?>
      <li> <a href="<?php echo esc_url( $social['url'] ); ?>" title="<?php echo esc_attr( $social['title'] ); ?>" target="_blank" rel="noreferrer" data-text="<?php echo esc_html( $social['title'] ); ?>"> <i class="<?php echo esc_attr( $social['title'] ); ?>"></i> </a> </li>
      <?php } ?>
    </ul>
  </div>
  <!-- end social-links -->
  <?php endif; ?>
  <?php endif; ?>
  <?php if( $enable_soundbar_option && $enable_soundbar ) : ?>
  <div class="equalizer"> <span></span> <span></span> <span></span> <span></span> </div>
  <!-- end equalizer -->
  
  <?php endif; ?>
</aside>
<nav class="navbar">
  <?php if( 'horizontal' === $nav_menu_type ) : ?>
    <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $logo ); ?>"
                 <?php if( $retina_logo != '' ) : ?>
                    srcset="<?php echo esc_url( $retina_logo ); ?>"
                 <?php endif; ?>
                 alt="<?php bloginfo( 'name' ); ?>"></a></div>
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
  
	<nav class="site-navigation">
  <div class="layer"></div>
  <!-- end layer -->
  <div class="inner">
  <?php
  if ( has_nav_menu( 'header' ) ) {
    wp_nav_menu( array(
      'theme_location' => 'header',
      'menu_class' => 'menu-horizontal',
      'walker' => new WP_tourog_Navwalker(),
    ) );
  }
  ?>

  </div>
  <!-- end inner --> 
</nav>
<!-- end site-navigation -->
  <?php endif; ?>
  <?php tourog_get_wpml_langs(); ?>
	
	<?php if( is_active_sidebar( 'allcases' ) ) { ?>
  <?php $allcases_label = ( tourog_get_option( 'allcases_label' ) ) ? tourog_get_option( 'allcases_label' ) : 'ALL CASES'; ?>
  <div class="all-cases-link"> <span><?php echo esc_html( $allcases_label ); ?></span> <b>+</b> </div>
	<?php } ?>
</nav>
