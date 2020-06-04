<?php  

// Add Theme Support

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails');
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5');
add_theme_support( 'automatic_feed_links');
add_theme_support( 'custom-background');
add_theme_support( 'custom-header');
add_theme_support( 'custom-logo');
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content');

// Load in our CSS
function wphierarchy_enqueue_styles(){
    wp_enqueue_style('font-css', 'https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round');
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', ['font-css'], time(), 'all');
    wp_enqueue_style('custom-css', get_stylesheet_directory_uri() . '/assets/css/custom.css', ['main-css'], time(), 'all');
}
add_action('wp_enqueue_scripts', 'wphierarchy_enqueue_styles');

// Load in our Javascript
function wphierarchy_enqueue_scripts(){
    // wp_enqueue_script( 'theme-js', get_stylessheet_directory_uri() . '/assets/js/theme.js', [], time(), true );
    wp_enqueue_script( 'jquery-theme-js', get_stylesheet_directory_uri() . '/assets/js/jquery.theme.js', ['jquery'], time(), true );

    if( is_singular() && comments_open() ){
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'wphierarchy_enqueue_scripts');

// Loop End Marketing 
function wphierarchy_end_marketing(){
    if( !in_the_loop() ) return;
    locate_template('template-parts/post-end-marketing.php', true);
}
add_action( 'loop_end', 'wphierarchy_end_marketing' );

// Register Menu Locations
register_nav_menus( [
    'main-menu' => esc_html__( 'Main Menu', 'wphierarchy'),
    'footer-menu' => esc_html__( 'Footer Menu', 'wphierarchy'),
]);

// Setup Widget Areas
function wphierarchy_widgets_init(){
    $main_args = [
        'name'          => esc_html__('Main Sidebar', 'wphierarchy'),
        'id'            => 'main-sidebar',
        'description'   => esc_html__('Add widgets for main sidebar here', 'wphierarchy'),
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'
    ];
    $page_args = [
        'name'          => esc_html__('Page Sidebar', 'wphierarchy'),
        'id'            => 'page-sidebar',
        'description'   => esc_html__('Add widgets for page sidebar here', 'wphierarchy'),
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'
    ];
    $frontpage_args = [
        'name'          => esc_html__('Front Page Sidebar', 'wphierarchy'),
        'id'            => 'front-sidebar',
        'description'   => esc_html__('Add widgets for front page sidebar here', 'wphierarchy'),
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'
    ];

    register_sidebar( $main_args );
    register_sidebar( $page_args );
    register_sidebar( $frontpage_args );
}

add_action( 'widgets_init', 'wphierarchy_widgets_init');

// Change [...] to Readmore in excerpt function
function wpdocs_excerpt_more( $more ) {
    return '<a href="'.get_the_permalink().'" rel="nofollow">' . esc_html__('  Read More...') . '</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// Display custom footer message
function wphooks_before_footer_message(){
    // echo '<p>My Custom footer text!</p>';
    locate_template('template-parts/before-footer.php', true);
}

add_action('wphooks_before_footer', 'wphooks_before_footer_message', 10);

// Template redirect for Members Page
function wphierarchy_members_logged_out_redirect(){
    if( is_page( 'members' ) && ! is_user_logged_in() ){
        wp_redirect( home_url( '/sign-up/'));
        die;
    }
    if( is_page('sign-up') && is_user_logged_in()){
        wp_redirect( home_url( '/members/'));
        die;
    }
}

add_action( 'template_redirect', 'wphierarchy_members_logged_out_redirect', 10);

// Add 'draft' in the title when save post by draft
function wphooks_add_draft_to_titles( $post_id, $post ) {

    // If post revision do not proceed
    if ( wp_is_post_revision( $post_id ) ) {
      return;
    }
  
  
    // Add or remove "DRAFT: " from title depending on status
    if( 'draft'   === $post->post_status &&
        'DRAFT: ' !== substr( $post->post_title, 0, 7 ) ) {
  
        // Add 'DRAFT: ' to the title
        $post->post_title = 'DRAFT: ' . $post->post_title;
  
    } elseif ( 'publish' === $post->post_status &&
               'DRAFT: ' === substr( $post->post_title, 0, 7 ) ) {
  
        // Remove 'DRAFT: ' from the title
        $post->post_title = substr( $post->post_title, 7 );
  
    }
  
  
    // If slug starts with 'draft-' remove it
    if( 'draft-' === substr( $post->post_name, 0, 6 ) ) {
  
        $post->post_name = substr( $post->post_name, 6 );
  
    }
  
    // Unhook wphooks_add_draft_to_titles so it doesn't loop infinitely
    remove_action('save_post', 'wphooks_add_draft_to_titles');
  
    // Update the post
    wp_update_post( $post );
  
    // Re-hook wphooks_add_draft_to_titles
    add_action('save_post', 'wphooks_add_draft_to_titles');
  
  
  }
  add_action( 'save_post', 'wphooks_add_draft_to_titles' );



?>
