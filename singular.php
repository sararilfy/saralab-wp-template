<?php get_header(); ?>
    <?php get_template_part( 'breadcrumb', 'breadcrumb' ); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<article class="content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1 class="title"><?php the_title(); ?></h1>
                <?php if ( has_post_thumbnail() ) {
                    echo '<figure>';
                    esc_html( the_post_thumbnail( 'large' ) );
                    echo '</figure>';
                }
                get_template_part( 'tabs', 'tabs' );
                the_content();
                wp_link_pages();
            endwhile; endif; ?>
		<!-- ./global-content-container --></article>
	</div>
<?php get_footer();