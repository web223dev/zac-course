<?php get_header('splash'); ?>

<div id="primary" class="content-area">

    <h1><?php single_post_title('Post: ') ?></h1>

    <main id="main" class="site-main" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post() ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <span class="dashicons dashicons-format-<?php echo get_post_format($post->ID); ?>"></span>
                        <?php the_title('<h1>', '</h1>') ?>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                    <?php if( !is_user_logged_in() ): ?>
                        <?php wp_register(); ?>
                    <?php endif; ?>

                </article>
            <?php endwhile; else : ?>
            <?php get_template_part('template-parts/content', 'none') ?>
        <?php endif; ?>
        <p>Template: memberpress.php</p>
    </main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>