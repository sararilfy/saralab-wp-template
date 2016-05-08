
<?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
	<aside class="side-widget-outer">
		<ul>
			<?php dynamic_sidebar( 'main-sidebar' ); ?>
		</ul>
	</aside>
<?php endif; ?>