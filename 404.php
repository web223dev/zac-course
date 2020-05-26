<?php get_header('splash'); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php get_template_part('template-parts/content', 'none') ?>
        <p>Template: page.php</p>
    </main>
</div>

<?php get_sidebar('page'); ?>
<?php get_footer(); ?>