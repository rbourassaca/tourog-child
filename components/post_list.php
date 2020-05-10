<div class="container">
    <div class="vc_row">
        <div class="col-lg-12 light">
            <?php 
                while (have_posts()): the_post(); 
            ?>
            <div class="post single blog-post">
                <div class="post-content row">
                    <div class="col-md-4 archive_thumb">
                        <?php if ( has_post_thumbnail() ) { 
                                the_post_thumbnail() ?>
                        <?php } else { ?>
                            <img src="<?php echo $default_thumb ?>" alt="Thumbnail">
                        <?php } ?>
                    </div>
                    <div class="col-md-8">
                        <h2><a class="post-title" href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
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