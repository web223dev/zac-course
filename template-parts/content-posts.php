<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>
        
        <h2>
            <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">   
                <?php the_title(); ?>
            </a>
        </h2>

        <?php get_template_part('template-parts/content', 'byline') ?>
    </header>

    <div class="entry-content">
        <?php //the_content('Read More...'); ?>
        <?php the_excerpt(); ?>
    </div>
</article>