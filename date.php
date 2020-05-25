<?php get_header('splash'); ?>
<div id="primary" class="content-area">

<h1><?php the_archive_title(); ?></h1>
<main id="main" class="site-main" role="main">

    <?php if (have_posts()) : while (have_posts()) : the_post() ?>

        <?php get_template_part('template-parts/content-posts', get_post_format()) ?>

        <?php endwhile; else : ?>

        <?php get_template_part('template-parts/content', 'none') ?>

    <?php endif; ?>

    <?php echo paginate_links(); ?>

    <p>Template: date.php</p>
</main>
</div> 

<?php get_sidebar(); ?>
<?php get_footer(); ?>