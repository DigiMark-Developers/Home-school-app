<?php
/**
 * homeschoolapp's functions and definitions
 *
 * @package homeschoolapp
 * @since homeschoolapp 1.0
 */
 
/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
 
if ( ! function_exists( 'homeschoolapp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function homeschoolapp_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'homeschoolapp' ),
        'secondary' => __('Secondary Menu', 'homeschoolapp' )
    ) );
    function homeschoolapp_widgets_init() {

    register_sidebar( array(
        'name'          => __( 'Footer Logo Content', 'homeschoolapp' ),
        'id'            => 'indonesia',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'homeschoolapp' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
   
}
add_action( 'widgets_init', 'homeschoolapp_widgets_init' );
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    //add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
add_filter( 'show_admin_bar', '__return_false' );

    }
endif; // homeschoolapp_setup
add_action( 'after_setup_theme', 'homeschoolapp_setup' );
add_action( 'get_wp_ajax_portfolio', 'get_newss' );
add_action( 'get_wp_ajax_nopriv_portfolio', 'get_newss' );
?>
