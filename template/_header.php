<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        
        <meta name="google" value="notranslate"> <!--  this avoids problems with hash change and the google chrome translate bar -->
        
        <title><?php
            global $page, $paged;
            wp_title( '|', true, 'right' );
            bloginfo( 'name' );
            $site_description = get_bloginfo( 'description', 'display' );
            ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        
        <style type="text/css">
            <?php include( mapasdevista_get_template('template/style.css', null, false) ); ?>
        </style>
        
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
                
        <div id="map">
        
        </div>

        <div id="posts-loader">
            <span id="posts-loader-loaded">0</span>/<span id="posts-loader-total">0</span> <span><?php _e('items loaded', 'mapasdevista'); ?></span>
        </div>
        
        <?php wp_nav_menu( array( 'container_class' => 'map-menu-side', 'theme_location' => 'mapasdevista_side', 'fallback_cb' => false ) ); ?>
        
        
        
        <div id="toggle-results">
            <?php mapasdevista_image("show-results.png", array("id" => "hide-results", "alt" => "Esconder Resultados")); ?>
        </div>
