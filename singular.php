<?php get_header(); ?>
    <?php get_template_part( 'breadcrumb', 'breadcrumb' ); ?>
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
<?php get_footer();