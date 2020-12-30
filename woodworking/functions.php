<?php 
//creating funciton for adding css and js file 
add_theme_support('post-thumbnails');
set_post_thumbnail_size(100, 100);
function woodWorking_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    // wp_enqueue_style( 'slider', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js');
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/jquery.js');
   
}
  add_action( 'wp_enqueue_scripts', 'woodWorking_scripts' );

//   creating funciton for nav menus
function woodWorking_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   }
   add_action( 'init', 'woodWorking_my_menus' );

// applying sidebar 

function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
      array(
          'id'            => 'footer-1',
          'name'          => __( 'Footer #1' ),
          'description'   => __( 'A short description of the sidebar.' ),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h3 class="widget-title">',
          'after_title'   => '</h3>',
      )
  );
  register_sidebar(
    array(
        'id'            => 'footer-2',
        'name'          => __( 'Footer #2' ),
        'description'   => __( 'A short description of the sidebar.' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    )
);
register_sidebar(
  array(
      'id'            => 'footer-3',
      'name'          => __( 'Footer #3' ),
      'description'   => __( 'A short description of the sidebar.' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
  )
);
    // for use the widgest inside the foter

    /* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'my_register_sidebars' );



// code for set the excerpt length
function wpdocs_custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// including cusom post type 
require get_template_directory().'/inc/portfolio.php';
?>