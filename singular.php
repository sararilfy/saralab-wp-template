<?php get_header(); ?>
<main>
	<?php
	/**
	 * Display breadcrumb
	 * From Markup (JSON-LD) structured in schema.org Plugin
	 *
	 * @since 1.0.0
	 */
	if ( shortcode_exists( 'wp-structuring-markup-breadcrumb' ) ) {
		echo '<nav class="breadcrumb">' . do_shortcode( '[wp-structuring-markup-breadcrumb]' ) . '</nav>';
	} ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<article class="global-content-container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1 class="title"><?php the_title(); ?></h1>
				<div class="date"><time datetime="<?php echo get_the_time( 'Y-m-d' ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time></div>
				<?php the_category();
				the_tags( '<ul class="list-article-tag"><li>', '</li><li> ', '</li></ul>' );
				if ( has_post_thumbnail() ) { ?>
					<figure class="eyecatch">
						<?php esc_html( the_post_thumbnail( 'large' ) ); ?>
					</figure>
				<?php } ?>
				<div class="article-wrap">
					<?php the_content();
					wp_link_pages(); ?>
				</div>
				<?php endwhile; endif; ?>
		<!-- ./global-content-container --></article>
	</div>
</main>
<?php get_footer();