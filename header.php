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
<div class="global-container">
