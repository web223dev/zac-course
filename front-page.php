<?php get_header('splash'); ?>
<?php
    // echo '<pre>';
    // print_r($wp_actions);
    // print_r($wp_filter['wp_enqueue_scripts']);
    // echo '</pre>';
    // R_Debug::list_hooks();
?>
<div id="secondary" class="content-area extended">
    <main id="main" class="site-main" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post() ?>
            <?php get_template_part('template-parts/content', 'page') ?>
            <?php endwhile; else : ?>
            <?php get_template_part('template-parts/content', 'none') ?>
        <?php endif; ?>
        <p>Template: front-page.php</p>
    </main>
</div>

<?php get_sidebar('front'); ?>
<?php get_footer(); ?>