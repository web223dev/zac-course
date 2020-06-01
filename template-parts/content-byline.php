<p class="byline">
    <?php esc_html_e( 'Categories: ', 'wphierarchy') ?>
    <?php the_category(', ', 'multiple'); ?>
    <?php the_tags( '| Tags: ', ', ', ' |' ) ?>
    <?php esc_html_e( '| Author:' ); ?> <?php the_author_posts_link(); ?>
</p>