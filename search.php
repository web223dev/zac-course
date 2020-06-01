<?php get_header('splash'); ?>

<div id="primary" class="content-area">
    <h1><?php esc_html_e('Search Result:', 'wphierarchy') ?> "<?php echo get_search_query(); ?>"</h1>
    <p><?php echo get_search_link('Hello WP') ?></p>
    <p><?php echo 'Query:"' . get_search_query() . '"' ?></p>
    <main id="main" class="site-main" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post() ?>
            <?php get_template_part('template-parts/content', 'search') ?>
            <?php endwhile; else : ?>
            <?php get_template_part('template-parts/content', 'none') ?>
        <?php endif; ?>
        <p>Template: search.php</p>
    </main>
</div>

<?php get_sidebar('page'); ?>
<?php get_footer(); ?>