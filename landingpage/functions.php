<?php 
//Stage 1 : Here we set up battlefield/ add support
add_theme_support('title-tag');

//Stage 2 : Here we include our friends/files
include(get_template_directory() . '/inc/frontend/spartans-script.php');
include(get_template_directory() . '/inc/spartans-init.php');
include(get_template_directory() . '/inc/spartans-cpt.php');

//Stage 3 : Here we hook up with powrful elders/gurus
add_action('wp_enqueue_scripts','spartans_styles'); //for styles , scripts and fonts
add_action('after_setup_theme','spartans_setup_init'); // for menus
add_action('enqueue_block_editor_assets','spartans_block_editor_google_fonts'); // google fonts
add_action('widgets_init','spartans_theme_widgets_init'); // for sidebar
add_action('init','spartans_vision_cpt');   // for Custom POsts Typess
add_action('init','spartans_skill_taxonomy');  //for taxonomies
add_action('init','spartans_skill_tags');  //for tags
add_action('init','spartan_courses_cpt');  //for Courses custom posts type


//Stage 4 : Here we take advantage of shortcodes/tips/snippts

// Register Custom Navigation Walker for function.php
// require_once(get_template_directory() .'/spartans-templates/menus/wp_bootstrap_navwalker.php');

//Custom CSS Class for menu -> <li> BOOSTRAP
    // function add_additional_class_on_li($classes, $item, $args) {
    //     if($args->add_li_class) {
    //         $classes[] = $args->add_li_class;
    //     }
    //     return $classes;
    // }
    // add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

//Custom CSS Class for -> <a> BOOTSTRAP
    // function add_link_atts($atts) {
    //     $atts['class'] = "nav-link";
    //     return $atts;
    //   }
    //   add_filter( 'nav_menu_link_attributes', 'add_link_atts');
    
 /**
 * SVG icon class.
 */
require get_template_directory() . '/inc/svg-icon-class.php';
    /**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-function.php';
    /**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

  /**
 * Theme Customizer.
 */
require get_template_directory() . '/inc/customizer.php';

