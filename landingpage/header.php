<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage rur Themes
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="generator" content="Mobirise v4.10.8, mobirise.com">
    <link rel="stylesheet" href="">
    <?php wp_head(); ?>
</head>
<style type="text/css">
             h1 { color: <?php echo get_theme_mod('header_color', '#000000'); ?> !important; }
         </style>
<body <?php  body_class(); ?>>
<div id="page" class="site">
        <!-- Header First Meaning ful  page -->
	<header id="masthead">
		<div class="container">
            <div>
                <h1 id="site-title-heading">testing</h1>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 ">
                <nav class="navbar navbar-expand-md navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php
                    wp_nav_menu([
                        'menu'            => 'primary',
                        'theme_location'  => 'primary',
                        'container'       => 'div',
                        'container_id'    => 'bs4navbar',
                        'container_class' => 'collapse navbar-collapse',
                        'menu_id'         => false,
                        'menu_class'      => 'navbar-nav mr-auto',
                        'depth'           => 2,
                        'fallback_cb'     => 'bs4navwalker::fallback',
                        'add_li_class'    => 'top-menu',
                        'walker'          => new bs4navwalker()
                    ]);
                    ?>
                </nav>
            </div>
            <nav class="navbar navbar-light  justify-content-between mt-1">
                <div class="col-md-6">
                <?php get_template_part( 'spartans-templates/site-branding/bloglogo','none'); ?>
                <?php get_template_part( 'spartans-templates/site-branding/blogname','none'); ?>
                </div>
               
                <form class="form-inline">
                     <button class="btn my-2 my-sm-0 mr-3 signup" type="submit">SIGNUP</button> 
                    <button class="btn my-2 my-sm-0 login" type="submit">LOGIN</button>
                </form>
            </nav>
            <!-- CUSTOM MENUS USING WALKER CLASS  -->
           
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 background-blue"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 headerdiv">
                <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                    <aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Header', 'landingpage' ); ?>">
                        <?php
                        if ( is_active_sidebar( 'sidebar-1' ) ) {
                            ?>
                                    <div class="widget-column footer-widget-1">
                                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                                    </div>
                                <?php
                                }
                                ?>
                    </aside><!-- .HEADER SIDEBAR 1 WIDGET  -->
                    <?php endif; ?>
                    </br/>
                    <div class="col-md-6 col-sm-6 btndivpadding">
                            <button class="appstore"><i class="fab fa-apple"></i> App Store</button>
                            <button class="playstore"><img height="20px" width="20px" src="https://img.icons8.com/color/48/000000/google-play.png"> Google Play</button>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-6 " >
                    <div class="d-flex justify-content-center">
                        <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                        <aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Header', 'landingpage' ); ?>">
                            <?php
                            if ( is_active_sidebar( 'sidebar-2' ) ) {
                                ?>
                                        <div class="widget-column footer-widget-1">
                                        <?php dynamic_sidebar( 'sidebar-2' ); ?>
                                        </div>
                                    <?php
                            }
                            ?>
                        </aside><!-- HEADER SIDEBAR 2 WIDGET -->
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
    
	<div id="content" class="site-content">
   