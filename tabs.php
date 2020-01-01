<time datetime="<?php echo esc_attr( get_the_time( 'Y-m-d' ) ); ?>" class="global-date"><?php esc_html( the_time( get_option( 'date_format' ) ) ); ?></time>
<?php
$categories = get_the_category();
$output = '';
if ( $categories ) {
    echo '<ul class="tags global-categories">';
    foreach( $categories as $category ) {
        $output .= '<li class="tag is-primary"><a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->cat_name ) . '</a></li>';
    }
    echo trim( $output );
    echo '</ul>';
}
the_tags( '<ul class="tags global-tags"><li class="tag">', '</li><li class="tag"> ', '</li></ul>' );