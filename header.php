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
                    $arg = [
                        'theme_location' => 'main-menu'
                    ];
                    wp_nav_menu( $arg );
                ?>
            </nav>

        </header>

        <div class="site-content" id="content">