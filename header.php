<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page">

        <a href="#content" class="skip-link screen-reader-text">
            <?php esc_html_e('Skip to content', 'wphierarchy') ?>
        </a>

        <header id="masthead" class="site-header" role="banner">

            <div class="site-brading">
                <div class="site-title">
                    <p>
                        <a href="<?php esc_url( home_url('/')); ?>" rel="home">
                            <?php bloginfo('name'); ?>
                        </a>
                    </p>
                </div>
                <div class="site-description">
                    <p>
                        <?php bloginfo('description'); ?>
                    </p>
                </div>
            </div>

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php
                     $args = [
                        // Location pickable in Customizer
                        'theme_location'  =>  'main-menu',
                        // Assigns a default menu to location
                        'menu'            =>  'Main Menu',
                        // Main wrapper around the ul of posts
                        'container'       =>  'div',
                        'container_class' =>  'container-class',
                        'container_id'    =>  'container-id',
                        // Wrapper for menu items - defaults to ul
                        'items_wrap'      =>  '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'menu_class'      =>  'items-wrap-class',
                        'menu_id'         =>  'items-wrap-id',
                        // Add text before link text (outside a tag)
                        'before'          =>  '<',
                        'after'           =>  '>',
                        // Add text to link text (inside a tag)
                        'link_before'     =>  '{',
                        'link_after'      =>  '}',
                        // Depth of child nav items to show
                        'depth'           =>  0,
                        // Callback function if menu is not available
                        'fallback_cb'     =>  'wp_page_menu',
                      ];
                      wp_nav_menu( $args );
                ?>
            </nav>

        </header>

        <div class="site-content" id="content">