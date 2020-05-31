        </div> <!-- #content -->
        <footer id="colophon" class="site-footer" role="contentinfo">
            <?php
                $args = [
                    // Location pickable in Customizer
                    'theme_location'  =>  'footer-menu',
                    // Main wrapper around the ul of posts
                    'container'       =>  'nav',
                    'container_id'    =>  'footer-menu',
                    // Add text before link text (outside a tag)
                    'before'          =>  '<',
                    'after'           =>  '>',
                    // Add text to link text (inside a tag)
                    'depth'           =>  1,
                    // Callback function if menu is not available
                    'fallback_cb'     =>  false ,
                ];
                wp_nav_menu($args);
            ?>

            <a href="<?php echo esc_url(__('https://wordpress.org', 'wphierarchy')); ?>">
                <?php printf(esc_html__('Proudly powered by %s', 'wphierarchy'), 'WordPress'); ?>
            </a>

        </footer>
        </div> <!-- #page -->
        <?php wp_footer(); ?>
        </body>

        </html>