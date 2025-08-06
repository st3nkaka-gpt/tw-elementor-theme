<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#main">Hoppa till innehåll</a>
<header class="container py-3">
<nav><?php wp_nav_menu(); ?></nav>
</header>
<main id="main" class="container">