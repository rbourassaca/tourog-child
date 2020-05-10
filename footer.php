<?php
$footer_bg_color = tourog_get_option( 'footer_bg_color' ) ? tourog_get_option( 'footer_bg_color' ) : '#222327';
$footer_bg_image = tourog_get_option( 'footer_bg_image' ) ? tourog_get_option( 'footer_bg_image' ) : '';
$footer_style = 'background-color: ' . $footer_bg_color;

$show_social_icons = tourog_get_option( 'footer_show_social_links' );
$show_social_title = ( tourog_get_option( 'footer_social_link_title' ) ) ? tourog_get_option( 'footer_social_link_title' ) : 'Connect with us';

$copyright = tourog_get_option( 'footer_copyright_text' );

if( !$copyright ) {
    $copyright = esc_html__( '&copy; 2020 Tourog | Creative Agency WordPress Theme',  'tourog' );
}

$footer_bg = ( $footer_bg_image != '' ) ? 'data-background="' . esc_url( $footer_bg_image ) . '"' : '';
?>
<footer
    class="footer spacing" <?php echo esc_attr( $footer_bg ); ?> style="<?php echo esc_attr( $footer_style ); ?> !important">
    <div class="container">
<div class="row">
	
	
        <?php if( tourog_get_option( 'footer_show_call_to_action' ) ) { ?>
	
	<div class="col-lg-10">
	<div class="call-to-action">
       
		<?php echo wp_kses_post( tourog_get_option( 'footer_cta_content' ) ); ?>

                <?php if( tourog_get_option( 'footer_cta_button_label' ) ) { ?>
		<div class="link-holder">
		<a href="<?php echo esc_attr( tourog_get_option( 'footer_cta_button_link' ) ); ?>" title="<?php echo esc_attr( tourog_get_option( 'footer_cta_button_label' ) ); ?>" class="link"><?php echo esc_html( tourog_get_option( 'footer_cta_button_label' ) ); ?></a>
			</div>
		<!-- end link-holder -->
		
          
	 <?php } ?>
	</div>
        <!-- end call-to-action --> 
		</div>
	<!-- end col-10 -->
	<?php } ?>
	
	
	
        

		
		
        <?php if( is_active_sidebar( 'footer-widget-1' ) || is_active_sidebar( 'footer-widget-2' ) || is_active_sidebar( 'footer-widget-3' ) || is_active_sidebar( 'footer-widget-4' ) ) { ?>
           
                    <?php if( is_active_sidebar( 'footer-widget-1' ) ) : ?>
                        <div class="col-lg-4">
                            <?php dynamic_sidebar( 'footer-widget-1' ); ?>
                        </div>
                    <?php endif; ?>
                    <?php if( is_active_sidebar( 'footer-widget-2' ) ) : ?>
                        <div class="col-lg-4 col-md-6">
                            <?php dynamic_sidebar( 'footer-widget-2' ); ?>
                        </div>
                    <?php endif; ?>
                    <?php if( is_active_sidebar( 'footer-widget-3' ) ) : ?>
                        <div class="col-lg-4 col-md-6">
                            <?php dynamic_sidebar( 'footer-widget-3' ); ?>
                        </div>
                    <?php endif; ?>
                    <?php if( is_active_sidebar( 'footer-widget-4' ) ) : ?>
                        <div class="col-12">
                            <?php dynamic_sidebar( 'footer-widget-4' ); ?>
                        </div>
                    <?php endif; ?>
              
        <?php } ?>

		
		
        <?php if( $copyright ) { ?>
	<div class="col-12">
            <div class="footer-bottom">
                <span><?php echo wp_kses_post( $copyright ); ?></span>
				 
				 <?php if( tourog_get_option( 'footer_site_credit' ) ) { ?>
                    <span class="creation"><?php echo wp_kses_post( tourog_get_option( 'footer_site_credit' ) ); ?></span>
                <?php } ?>
	
				

				
				
				
              
            </div>
		<!-- end footer-bottom -->
		</div>
	<!-- end col-12 -->
        <?php } ?>
	</div>
	<!-- end row -->
    </div>
    <!-- end container -->
</footer>
<?php wp_footer(); ?>
</body>
</html>