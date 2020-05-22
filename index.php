<?php get_header('splash'); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    
                    <h1>index.php</h1>

                </header>

                <div class="entry-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </article>

        </main>
    </div>

    <?php get_sidebar('splash'); ?>
<?php get_footer(); ?>