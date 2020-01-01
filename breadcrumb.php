<?php
/**
 * Display breadcrumb
 * From Markup (JSON-LD) structured in schema.org Plugin
 *
 * @since 1.0.0
 */
if ( shortcode_exists( 'wp-structuring-markup-breadcrumb' ) && !is_home() ) {
    echo '<nav class="breadcrumb has-succeeds-separator">' . do_shortcode( '[wp-structuring-markup-breadcrumb]' ) . '</nav>';
}
