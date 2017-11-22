<div class="head_Inside">
            <div class="uk-slidenav-position" data-uk-slideshow="{animation: 'swipe',autoplay: true, autoplayInterval: 5000}">
                <ul class="uk-slideshow">
                    <?php
                        global $post;
                        $args = array('numberposts'=>6, 'post_type'=>'slide', 'order'=>'ASC');
                        $custom_posts = get_posts($args);
                        foreach ($custom_posts as $post) : setup_postdata($post);
                    ?>
                            <li>
                                <?php the_post_thumbnail(); ?>
                            </li>
                    <?php
                        endforeach;
                        wp_reset_postdata();
                    ?>
                </ul>
                <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slideLeft.png" alt="">
                </a>
                <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slideRight.png" alt="">
                </a>
            </div>
        </div>
    </header>
</div>
<div id="destacados">
        <div class="uk-flex">
            <div class="asombrsos">
                <div class="uk-flex uk-flex-middle redBg">
                    <div>
                        <span>¿PRODUCTOS
                    ASOMBRSOS?</span>
                        <span>LOS ENCONTRASTE.</span>
                        <a href="<?php echo get_page_link(24); ?>">VER TODOS <img src="<?php echo bloginfo('template_directory') ?>/images/right.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="productIndex">
                <div class="uk-grid uk-flex-wrap">
                    <?php
                        $args_2 = array('numberposts'=>5, 'post_type'=>'all_product', 'order'=>'ASC');
                        $slide_post_2 = get_posts($args_2);
                        foreach ($slide_post_2 as $post): setup_postdata($post);
                    ?>
                    <div class="uk-width-large-1-5 uk-width-medium-1-3 uk-width-small-1-2 marBot">
                        <a href="<?php the_permalink() ?>">
                            <div class="item uk-text-center">
                                <?php 
                                if(has_post_thumbnail()){
                                    the_post_thumbnail(); 
                                }
                                ?>
                                <p class="name"><?php the_title() ?></p>
                                <?php the_excerpt() ?>
                            </div>
                        </a>
                    </div>
                    <?php
                        endforeach;
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div id="bannerSlide">
        <div class="uk-slidenav-position" data-uk-slideshow="{animation: 'swipe' , autoplay: true, autoplayInterval: 5000}">
            <ul class="uk-slideshow">
                <?php
                    $args_3 = array('numberposts'=>5, 'post_type'=>'slide_product', 'order'=>'ASC');
                    $slide_post_3 = get_posts($args_3);
                    foreach ($slide_post_3 as $post): setup_postdata($post);
                ?>
                    <li>
                        <?php 
                        if(has_post_thumbnail()){
                            the_post_thumbnail(); 
                        }
                        ?>
                    </li>
                <?php
                    endforeach;
                    wp_reset_postdata();
                ?>
            </ul>
            <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous">
                <img src="<?php echo bloginfo('template_directory') ?>/images/slideLeft.png" alt="">
            </a>
            <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next">
                <img src="<?php echo bloginfo('template_directory') ?>/images/slideRight.png" alt="">
            </a>
        </div>
    </div>
    <div id="porQue">
        <div class="uk-container uk-container-center uk-vertical-align">
            <div class="uk-vertical-align-middle uk-text-center">
                <h3><span>#</span> ¿PORQUÉELEGIRDYMATIZE?</h3>
                <p class="rendimiento">RENDIMIENTO COMPROBADO</p>
                <p class="detailTxt uk-container-center">
                    En Dymatize, nos enorgullecemos de poner nuestros productos científicamente probados a prueba con atletas de élite en instalaciones de entrenamiento de clase mundial. Dymatize es la marca de suplemento de nutrición deportiva de elección tanto para la Academia IMG y Performance Systems Smith chip. ¡Dos instalaciones de entrenamiento de clase mundial, donde los mejores atletas van a mejorar!
                </p>
                <p class="uk-text-center">
                    <img src="<?php echo bloginfo('template_directory') ?>/images/capa33.png" alt="">
                </p>
            </div>
        </div>
    </div>

    <section id="videos">
        <div class="uk-container uk-container-center uk-text-center">
            <h3 class="h3Index">
            VIDEOS DESTACADOS
        </h3>
            <p class="official">MOTÍVATE PARA ALCANZAR EL SIGUIENTE NIVEL</p>
        </div>
        <div class="listVideo">
            <div class="uk-flex uk-flex-wrap uk-text-center-small">
                <?php
                    global $post;
                    $args = array('numberposts'=>3, 'post_type'=>'video', 'order'=>'ASC');
                    $custom_posts = get_posts($args);
                    foreach($custom_posts as $post):setup_postdata($post);
                ?>
                    <div class="uk-width-large-1-3 uk-width-medium-1-3 uk-width-small-1-3  uk-card uk-card-default uk-card-body">
                        <div class="item video" data-video="<?php echo get_the_content(); ?>">
                            <div class="img-gallery">
                                <?php
                                    if(has_post_thumbnail()){
                                        the_post_thumbnail();
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                    endforeach;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

<?php echo do_shortcode('[contact-form-7 id="78" title="Form  lien he" html_class="uk-form uk-form-stacked"]'); ?>