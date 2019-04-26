<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
?>
<?php remove_action('wp_head', 'wp_generator'); ?>
<?php remove_action( 'get_avatar', 'wp_user_avatars_filter_get_avatar' ); ?>
