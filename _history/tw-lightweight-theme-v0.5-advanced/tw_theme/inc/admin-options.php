<?php
add_action('customize_register', function($wp_customize) {
  $wp_customize->add_section('tw_theme_options', array('title' => 'Temainställningar'));
  $wp_customize->add_setting('tw_bootstrap_source', ['default' => 'cdn']);
  $wp_customize->add_control('tw_bootstrap_source', [
    'label' => 'Laddning av Bootstrap',
    'section' => 'tw_theme_options',
    'settings' => 'tw_bootstrap_source',
    'type' => 'radio',
    'choices' => ['cdn' => 'CDN', 'local' => 'Lokal kopia']
  ]);
});