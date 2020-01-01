<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php if ( !is_user_logged_in() ) : ?>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-WT69J9');</script>
        <!-- End Google Tag Manager -->
        <script data-ad-client="ca-pub-1528327588378459" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <?php endif; ?>
	<meta charset="<?php esc_attr( bloginfo( 'charset' ) ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( !is_user_logged_in() ) : ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WT69J9"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<?php endif; ?>
<header class="navbar is-spaced">
    <div class="navbar-brand">
        <h1 class="navbar-item">
            <a class="title" href="<?php echo esc_url( home_url() ) ?>">
                <?php esc_html( bloginfo('name') ); ?>
            </a>
        </h1>
        <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <p class="navbar-item"><?php esc_html( bloginfo('description') ); ?></p>
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
                'menu_class'      => 'navbar-menu header-category-nav-menu',
                'menu_id'         => 'navMenu',
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
