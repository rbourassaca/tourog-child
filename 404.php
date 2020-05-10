<?php
get_header('');
$not_found_placeholder = get_template_directory_uri() . '/images/404.svg';
?>

<main class="tourog-page 404">
    <section class="content-section error-404 not-found">
            <div class="container light">
                <img src="<?php echo esc_url( $not_found_placeholder ); ?>" alt="<?php the_title_attribute(); ?>" />
                <p><?php esc_html_e( 'C\'est embarassant... la page n\'existe pas...',  'tourog' ); ?></p>
            </div>
    </section>
</main>
<?php

get_footer();
