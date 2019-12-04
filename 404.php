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
    <h1 class="title">お探しのページが見つかりませんでした。</h1>
    <p>申し訳ありません、お探しのページが見つかりませんでした。</p>
</main>
<?php get_footer();