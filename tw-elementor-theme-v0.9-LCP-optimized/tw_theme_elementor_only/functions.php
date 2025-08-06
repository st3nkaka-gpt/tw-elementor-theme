
<?php
require_once get_template_directory() . '/inc/theme-setup.php';
require_once get_template_directory() . '/inc/shortcodes.php';

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('tw-style', get_stylesheet_uri());
});
