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
<header class="hero">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                <a href="<?php echo esc_url( home_url() ) ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <h2 class="subtitle">
                <?php bloginfo('description'); ?>
            </h2>
        </div>
    </div>
</header>
<div class="section">
    <div class="container">
        <div class="columns">
            <main class="column">
