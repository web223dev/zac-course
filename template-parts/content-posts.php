<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if( has_post_thumbnail() ): ?>
            <?php
                // the_post_thumbnail();

                // // Thumbnail (150 x 150 hard cropped)
                // the_post_thumbnail( 'thumbnail' ); 
                // // Medium resolution (300 x 300 max height 300px)
                // the_post_thumbnail( 'medium' );        
                // // Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
                // the_post_thumbnail( 'medium_large' );  
                // // Large resolution (1024 x 1024 max height 1024px)
                // the_post_thumbnail( 'large' );         
                // // Full resolution (original size uploaded)
                // the_post_thumbnail( 'full' );        
                
                $attr = [
                    'class' => 'img featured',
                    'title' => get_the_title(),
                    'alt'   => get_the_title() . 'Alt'
                ];
                the_post_thumbnail('thumbnail', $attr);
            ?>
        <?php endif; ?>
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