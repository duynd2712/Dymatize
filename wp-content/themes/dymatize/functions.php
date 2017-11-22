<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
       wp_register_script('uikit', get_bloginfo('template_directory').'/js/uikit.js');
       wp_enqueue_script('uikit');
       wp_register_script('sticky', get_bloginfo('template_directory').'/js/components/sticky.min.js');
       wp_enqueue_script('sticky');
       wp_register_script('slideshow', get_bloginfo('template_directory').'/js/components/slideshow.min.js');
       wp_enqueue_script('slideshow');
       wp_register_script('slideshow-fx', get_bloginfo('template_directory').'/js/components/slideshow-fx.js');
       wp_enqueue_script('slideshow-fx');
       wp_register_script('mainJS', get_bloginfo('template_directory').'/js/main.js');
       wp_enqueue_script('mainJS');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    //Create menu support for theme
    if (function_exists('register_nav_menus')) {
        register_nav_menus (
            array(
                'main_nav'=>'Main Navigation Menu'
            )
        );
    }

    if(function_exists('add_theme_support')){
        add_theme_support('post-thumbnails');
    }

    add_theme_support('post-thumbnails');
    

  // Pagination page

  function devvn_corenavi_ajax($custom_query = null, $paged = 1) {
    global $wp_query, $wp_rewrite;
    if($custom_query) $main_query = $custom_query;
    else $main_query = $wp_query;
    $big = 999999999;
    $total = isset($main_query->max_num_pages)?$main_query->max_num_pages:'';
    if($total > 1) echo '<div class="paginate_links">';
    echo paginate_links( array(
        'base'        => trailingslashit( home_url() ) . "product/{$wp_rewrite->pagination_base}/%#%/",
        'format'   => '?paged=%#%',
        'current'  => max( 1, $paged ),
        'total'    => $total,
        'mid_size' => '2',
        'prev_text'    => __('Anterior','devvn'),
        'next_text'    => __('Siguiente','devvn'),
    ) );
    if($total > 1) echo '</div>';
  }


  /*-----Ajax load post----*/
  add_action( 'wp_ajax_ajax_load_post', 'ajax_load_post_func' );
  add_action( 'wp_ajax_nopriv_ajax_load_post', 'ajax_load_post_func' );
  function ajax_load_post_func() {
      $paged = isset($_POST['ajax_paged'])?intval($_POST['ajax_paged']):'';
      if($paged <= 0 || !$paged || !is_numeric($paged)) wp_send_json_error('Paged?');
      $news = new WP_Query(array(
          'post_type'         =>  'all_product',
          'posts_per_page'    =>  2,
          'paged'             =>  $paged
      ));
      if($news->have_posts()): ?>
        <div class="uk-flex uk-flex-wrap">
          <?php while( $news->have_posts() ) : $news->the_post(); ?>
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
            <?php endwhile; wp_reset_query();?>
        </div>
        <div class="paging">
          <?php devvn_corenavi_ajax($news,$paged);?>
        </div>
      <?php $content = ob_get_clean();?>
      <?php else:?>
          <?php wp_send_json_error('No post?');?>
      <?php endif; //End news
      wp_send_json_success($content);
      die();
  }

  add_action( 'wp_enqueue_scripts', 'devvn_enqueue_UseAjaxInWp' );

  function devvn_enqueue_UseAjaxInWp(){
      wp_enqueue_script( 'devvn-ajaxload', esc_url( trailingslashit( get_template_directory_uri() ) . '/js/ajax-loadpost.js' ), array( 'jquery' ), '1.0', true );
      $php_array = array(
          'admin_ajax'      => admin_url( 'admin-ajax.php'),
          'load_post_nonce'   =>  wp_create_nonce('ajax_load_post_nonce'),
      );
      wp_localize_script( 'devvn-ajaxload', 'devvn_array', $php_array );
  }
?>