<?php /*
Template Name: landing page
*/ ?>
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
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WT69J9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php endif; ?>
    <main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	    the_content();
	    endwhile; endif; ?>
    </main>
<?php wp_footer(); ?>
</body>
</html>