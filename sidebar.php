<?php
if (!is_active_sidebar('main-sidebar')) {
    return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">

    <?php wp_loginout(get_permalink()); ?>

    <?php if (!is_user_logged_in()) : ?>

        <?php
        $args = [
            'label_username' => 'Enter your username',
            'label_password' => 'Enter your password'
        ];
        wp_login_form($args);
        ?>

    <?php endif; ?>

    <?php
    $args = [
        'type' => 'yearly',
        'limit' => 3,
        'show_post_count' => true,
        'order' => 'DESC'
    ];
    wp_get_archives($args)
    ?>

    <p><?php get_calendar(); ?></p>

    <h3><?php _e('List Authors', 'wptags'); ?></h3>
    <?php wp_list_authors(); ?>


    <h3><?php _e('Dropdown Authors', 'wptags'); ?></h3>
    <form action="<?php bloginfo('url'); ?>" method="get">
        <?php wp_dropdown_users(['name' => 'author']); ?>
        <input type="submit" name="submit" value="View" />
    </form>

    <?php dynamic_sidebar('main-sidebar'); ?>

</aside>