<?php get_header(); ?>

<div class="main-contents">
	<article class="contents-article">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1 class="contents-article__title"><?php the_title(); ?></h1>

			<div class="contents-article__side-data">
				<time class="contents-article__date" datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ) ?>"><?php esc_html( the_date() ); ?></time>

				<div class="contents-article__category"><?php the_category(); ?></div>

				<?php the_tags( '<ul class="contents-article__tag"><li>', '</li><li>', '</li></ul>' ); ?>
			</div>

			<div class="contents-article__main">
				<figure class="contents-article__img"><?php the_post_thumbnail(); ?></figure>
				<?php the_content(); ?>
			</div>

		<?php endwhile; endif; ?>
	</article>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>