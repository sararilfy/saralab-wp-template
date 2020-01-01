<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php if ( !is_user_logged_in() ) : ?>
	<?php endif; ?>
	<meta charset="<?php esc_attr( bloginfo( 'charset' ) ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="navbar is-spaced">
    <div class="navbar-menu">
        <h1 class="navbar-item">
            <a class="title" href="<?php echo esc_url( home_url() ) ?>">
                <?php esc_html( bloginfo('name') ); ?>
            </a>
        </h1>
        <p class="navbar-item"><?php esc_html( bloginfo('description') ); ?></p>
    </div>
    <nav class="navbar-end">
        <?php
        /**
         * Displays a navigation menu
         *
         * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
         * @since 1.0.0
         */
        if ( has_nav_menu( 'header-category-nav' ) ) {
            $global_menu = array(
                'menu'            => 'header-category-nav',
                'menu_class'      => 'navbar-menu is-multiline header-category-nav-menu',
                'theme_location'  => 'header-category-nav',
                'container_class' => 'navbar-item'
            );
            wp_nav_menu( $global_menu );
        } ?>
    </nav>
</header>
<div class="section">
    <div class="container">
        <div class="columns">
            <main class="column is-three-quarters">
