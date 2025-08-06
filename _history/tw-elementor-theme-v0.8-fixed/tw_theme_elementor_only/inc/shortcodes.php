
<?php
// [tw_grid cols="3" gap="3" class="extra"]Innehåll[/tw_grid]
function tw_grid_shortcode($atts, $content = null) {
    $atts = shortcode_atts([
        'cols' => '3',
        'gap' => '3',
        'class' => ''
    ], $atts);

    $cols = max(1, min(6, intval($atts['cols'])));
    $gap = 'gap-' . intval($atts['gap']);
    $extra = sanitize_html_class($atts['class']);

    return '<div class="tw-grid tw-grid-cols-' . $cols . ' ' . $gap . ' ' . $extra . '">' . do_shortcode($content) . '</div>';
}
add_shortcode('tw_grid', 'tw_grid_shortcode');
