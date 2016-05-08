<?php get_header(); ?>

<div class="main-contents">
	<div class="contents-list-article">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="item-article">

				<a href="<?php the_permalink(); ?>" class="item-article__img"><?php the_post_thumbnail('large'); ?></a>

				<h1 class="item-article__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

				<time class="item-article__date" datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ) ?>"><?php esc_html( the_date() ); ?></time>

				<div class="item-article__category"><?php the_category(); ?></div>

				<div class="item-article__tag"><?php the_tags(); ?></div>

			</article>
		<?php endwhile; endif; ?>
	</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>