<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">

        <?php the_title('<h1>', '</h1>') ?>

    </header>

    <div class="entry-content">
        <?php the_content(); ?>
        <?php edit_post_link( 'Edit this', '<p>', '</p>') ?>

        <p>
            <a href="<?php get_delete_post_link( $post->ID, '', false); ?>">
                <?php esc_html_e( 'Delete This', 'wphierarchy' ); ?>
            </a>
        </p>

        <?php echo get_admin_url(); ?>
        
    </div>
</article>