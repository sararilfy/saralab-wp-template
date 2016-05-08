		</div>

		<?php if ( is_active_sidebar( 'bottom-sidebar' ) ) : ?>
			<aside>
				<ul class="bottom-widget-outer">
					<?php dynamic_sidebar( 'bottom-sidebar' ); ?>
				</ul>
			</aside>
		<?php endif; ?>

		<footer class="footer">
			<small class="footer__copyright">&copy;<?php bloginfo( 'name' ); ?></small>
		</footer>

		<?php wp_footer(); ?>

	</body>
</html>