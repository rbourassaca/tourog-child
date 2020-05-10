<header class="page-header" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(<?php echo $header_bg ?>); background-size: cover; background-position: center">
    <div class="inner">
        <div class="container">
            <h1 class="header-title"><?php echo $page_title ?></h1>
            <?php if(!is_post_type_archive()){ ?>
                <?php if(get_post_type(get_the_ID()) != 'client'){ ?>
                <h2 class="headerLink"><?php echo $page_subtitle ?></h2>
                <?php } else {?>
                <ul>
                    <?php if(get_field('site_web')){ ?>
                        <?php foreach(get_field('site_web') as $link){ ?>
                        <li><a href="<?php echo $link['url'] ?>" target="_blank"><i class="fas fa-external-link-alt"></i> Site web</a> </li>
                        <?php } ?>
                    <?php } ?>
                    <?php 
                        if(get_field('reseaux_sociaux')){
                            foreach(get_field('reseaux_sociaux') as $link){ 
                                echo '<li><a href="'. $link['url'] .'" target="_blank"><i class="fab '.$link['font_awesome_class'].'"></i> '.$link['nom'].'</a></li>';
                            } 
                        }
                    ?>
                </ul>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
    <div class="downInfo text-center">
        <i class="fas fa-arrow-down"></i>
    </div>
</header>