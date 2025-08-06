
<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('woocommerce');
add_action('after_setup_theme', function() {
  register_nav_menu('main-menu', 'Huvudmeny');
});
