<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */
/**
 * Loads the child theme textdomain.
 */
function promos_blog_load_language() {
    load_child_theme_textdomain( 'promos-blog' );
}
add_action( 'after_setup_theme', 'promos_blog_load_language' );

/**
 * Enqueue Style for child theme.
 */
add_action( 'wp_enqueue_scripts', 'promos_blog_enqueue_scripts');
function promos_blog_enqueue_scripts() {

    $parent_style = 'promos-style-child';
    $promos_blog_version = wp_get_theme(get_template())->get( 'Version' );

    wp_enqueue_style('promos-body', '//fonts.googleapis.com/css2?family=Karla:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600;1,800&display=swap', array(), null);
    wp_enqueue_style('promos-heading', '//fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap', array(), null);
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', array(), '' );
    wp_enqueue_style('promos-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'promos-blog-style', get_stylesheet_directory_uri() . '/style.css', array(), $promos_blog_version );;
}

/**
 * Promos Blog Theme Customizer Deafult setting
 *
 * @package Promos
 */

if ( !function_exists('promos_default_theme_options_values') ) :

    function promos_default_theme_options_values() {

        $default_theme_options = array(

            /*Logo Options*/
            'promos_logo_width_option' => '700',

            /*Top Header*/
            'promos_enable_top_header_social'=> 0,

            /*Header Image*/
            'promos_enable_header_image_overlay'=> 0,
            'promos_slider_overlay_color'=> '#000000',
            'promos_slider_overlay_transparent'=> '0.1',
            'promos_header_image_height'=> '100',

            /*Header Options*/
            'promos_enable_search'  => 0,

            /*Menu Options*/
            'promos_mobile_menu_text'  => esc_html__('Menu','promos-blog'),
            'promos_mobile_menu_option'=> 'menu-text',

            /*Colors Options*/
            'promos_primary_color'  => '#8db392',

            /*Slider Options*/
            'promos_enable_slider'      => 0,
            'promos-select-category'    => 0,
    
            /*Boxes Section */
            'promos_enable_promo'       => 0,
            'promos-promo-select-category'=> 0,
            
            /*Blog Page*/
            'promos-sidebar-blog-page' => 'right-sidebar',
            'promos-blog-image-layout' => 'full-image',
            'promos-content-show-from' => 'excerpt',
            'promos-excerpt-length'    => 25,
            'promos-pagination-options'=> 'numeric',
            'promos-read-more-text'    => esc_html__('Read More','promos-blog'),
            'promos-blog-exclude-category'=> '',
            'promos-show-hide-share'   => 0,
            'promos-show-hide-category'=> 1,
            'promos-show-hide-date'=> 1,
            'promos-show-hide-author'=> 1,
            'promos-blog-image-crop-full'=> 'original-image',

            /*Single Page */
            'promos-single-page-featured-image' => 1,
            'promos-single-page-related-posts'  => 1,
            'promos-single-page-related-posts-title' => esc_html__('You may like','promos-blog'),
            'promos-sidebar-single-page'=> 'single-right-sidebar',
            'promos-single-social-share' => 0,
            'promos-single-page-tags-option'=>0,

            /*Sticky Sidebar*/
            'promos-enable-sticky-sidebar' => 0,

            /*Footer Section*/
            'promos-footer-copyright'  => esc_html__('&#169; All Rights Reserved 2021','promos-blog'),

            /*Breadcrumb Options*/
            'promos-extra-breadcrumb' => 1,
            'promos-breadcrumb-selection-option'=> 'theme-breadcrumb',

        );
return apply_filters( 'promos_default_theme_options_values', $default_theme_options );
}
endif;