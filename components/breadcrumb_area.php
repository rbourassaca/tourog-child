<div class="container light">
    <?php if ( is_active_sidebar( 'breadcrumb_area' ) ) : ?>
        <div class="row">
            <div class="col-xl-12">
                <?php dynamic_sidebar( 'breadcrumb_area' ); ?>
            </div>
        </div>
    <?php endif; ?>
</div>