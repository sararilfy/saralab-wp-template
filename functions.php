<?php
/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Saralab Theme 1.0
 */
function saralab_widgets() {
    register_sidebar( array(
        'name'          => 'ウィジェットエリア（サイド）',
        'id'            => 'main-sidebar',
        'description'   => 'サイドナビにウィジェットが配置できるエリア',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget__title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => 'ウィジェットエリア（下）',
        'id'            => 'bottom-sidebar',
        'description'   => 'コンテンツ下部にウィジェットが配置できるエリア',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget__title">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'saralab_widgets' );


/*
 * Enable support for Post Thumbnails on posts and pages.
 *
 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
 */
add_theme_support( 'post-thumbnails' );