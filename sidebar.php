<div class="column is-one-quarter is-narrow-desktop is-narrow-tablet">
    <?php
    /**
     * Displays a widget area
     *
     * @link https://developer.wordpress.org/themes/functionality/sidebars/
     * @since 1.0.0
     */
    if ( is_active_sidebar( 'archive-sidebar' ) ) {
        dynamic_sidebar('archive-sidebar');
    } ?>
</div>