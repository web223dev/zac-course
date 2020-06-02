<p class="byline">
    <?php //esc_html_e( 'Categories: ', 'wphierarchy') ?>
    <!-- <?php //the_shortlink( 'Shortlink' ); ?> - <?php //echo wp_get_shortlink(); ?> -->
    <!-- <?php esc_html_e( '| Author:' ); ?> <?php the_author_posts_link(); ?> | -->
    From: <?php the_author(); ?> (<?php the_author_posts(); ?>) |
    <?php the_author_link(); ?> |
    <?php the_author_posts_link(); ?> |
    Date: <?php the_time('F j, Y |') ?>
    <?php the_category(', '); ?>
    <?php the_tags( '| Tags: ', ', ', ' |' ) ?>
</p>