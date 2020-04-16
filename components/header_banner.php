<header class="page-header"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(<?php echo $header_bg ?>); background-size: cover; background-position: center">
    <div class="inner">
        <div class="container">
            <h1><?php echo $page_title ?></h1>
            <?php if(!is_post_type_archive()){ ?>
            <?php if($pageCustomType != 'client'){ ?>
            <h2 class="headerLink"><?php echo $page_subtitle ?></h2>
            <?php } else {?>
            <div class="headerLink icon">
                <?php foreach(get_field('site_web') as $link){ ?>
                <a href="<?php echo $link['url'] ?>" target="_blank"><i class="fas fa-external-link-alt"></i> Site
                    web</a>
                <?php } ?>
                <?php foreach(get_field('reseaux_sociaux') as $link){  ?>
                <?php 
                            switch($link['nom']){
                                case 'Facebook':
                                    echo '<a href="'. $link['url'] .'" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a>';
                                    break;
                                case 'Instagram':
                                    echo '<a href="'. $link['url'] .'" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>';
                                    break;
                                case 'Youtube':
                                    echo '<a href="'. $link['url'] .'" target="_blank"><i class="fab fa-youtube"></i> Youtube</a>';
                                    break;
                                case 'Viméo':
                                    echo '<a href="'. $link['url'] .'" target="_blank"><i class="fab fa-vimeo-v"></i> Viméo</a>';
                                    break;
                                case 'LinkedIn':
                                    echo '<a href="'. $link['url'] .'" target="_blank"><i class="fab fa-linkedin-in"></i> LinkedIn</a>';
                                    break;
                            }
                        ?>
                <?php } ?>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
    </div>
    <div class="downInfo text-center">
        <i class="fas fa-arrow-down"></i>
    </div>
</header>