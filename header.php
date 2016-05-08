<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<?php wp_head(); ?>
	</head>
	<body>
		<header class="header">
			<a href="<?php echo esc_html( home_url() ); ?>" class="header__title" ><?php esc_html( bloginfo( 'name' ) ); ?></a>
			<p class="header__description"><?php esc_html( bloginfo( 'description' ) ); ?></p>
		</header>

		<div class="container">