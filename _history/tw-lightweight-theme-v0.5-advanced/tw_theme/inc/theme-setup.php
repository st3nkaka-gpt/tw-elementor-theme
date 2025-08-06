<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('woocommerce');
add_action('after_setup_theme', function() {
  register_nav_menu('main-menu', 'Huvudmeny');
});
add_action('wp_enqueue_scripts', function() {
  $use_cdn = get_theme_mod('tw_bootstrap_source', 'cdn') === 'cdn';
  if ($use_cdn) {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', [], null, true);
  } else {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', [], null, true);
  }
});