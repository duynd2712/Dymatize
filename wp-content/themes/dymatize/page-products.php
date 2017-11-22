 <?php
/*
	Template Name: Products Page
*/
    get_header();
?>
 <div class="head_Inside">
            <div class="banner">
                <div class="uk-container uk-container-center">
                    <div class="uk-grid">
                        <div class="uk-width-1-2 uk-vertical-align">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/infobanner.png" alt="" class="uk-vertical-align-bottom infoBanner">
                        </div>
                        <div class="uk-width-1-2 uk-vertical-align">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/imgBaner.png" alt="" class="proBanner uk-vertical-align-bottom">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
<div class="content">
            <div id="destacados">
                <div class="uk-flex">
                    <div class="asombrsos">
                        <div class="uk-flex uk-flex-middle redBg">
                            <div>
                                <span>PRODUCTOS</span>
                            </div>
                        </div>
                    </div>
                    <div class="productIndex">
                        <div class="select">
                            <div class="select_box">
                                <span></span>
                                <select class="drop_sl">
                                    <option value="">Ordenar productos...</option>
                                    <option value="">Product 1</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="productosList">
                <?php
                    $args = array('showposts' =>2, 'post_type'=>'all_product','paged' => get_query_var('paged'));
                    $the_query = new WP_Query($args);
                ?>
                <?php if( $the_query->have_posts() ) : ?> 

                <div class="uk-flex uk-flex-wrap">
                        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="uk-width-large-1-5 uk-width-medium-1-3 uk-width-small-1-2">
                            <a href="<?php the_permalink(); ?>">
                                <div class="item uk-text-center">
                                    <?php
                                        if(has_post_thumbnail()){
                                            the_post_thumbnail(); 
                                        }
                                    ?>
                                    <p class="name"><?php echo  get_the_title(); ?></p>
                                    <?php the_excerpt() ?>
                                </div>
                            </a>
                        </div>
                        <?php endwhile; ?>
                </div>
                <div class="paging">
                    <?php devvn_corenavi_ajax($the_query);?>
                </div>


            <?php
                wp_reset_postdata();
            ?> 

            <?php endif; ?>
            </div>
        </div>
<?php echo do_shortcode('[contact-form-7 id="78" title="Form  lien he" html_class="uk-form uk-form-stacked"]'); ?>

<?php
    get_footer();
?>

