<?php
function tw_enqueue_assets() {
    $use_cdn = get_theme_mod('tw_bootstrap_source', 'cdn') === 'cdn';

    if ($use_cdn) {
        // Bootstrap CSS as async via JS injection (to avoid render-blocking)
        add_action('wp_footer', function () {
            echo "<script>
                let l = document.createElement('link');
                l.rel = 'stylesheet';
                l.href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css';
                l.media = 'all';
                document.head.appendChild(l);
            </script>";
        });
        wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', [], null, true);
    } else {
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', [], null, true);
    }

    wp_enqueue_style('tw-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'tw_enqueue_assets');
require_once get_template_directory() . '/inc/shortcodes.php';
require_once get_template_directory() . '/inc/shortcode-generator.php';