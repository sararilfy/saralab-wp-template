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
    <article class="global-contents-container">
            <?php
            if ( is_search() ) { ?>
                <h1 class="title-blog-archive">「<?php echo get_search_query(); ?>」の検索結果</h1>
            <?php
            } else {
            esc_html( the_archive_title( '<h1 class="title">', '</h1>' ) );
            }
            echo category_description();
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article>
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) {
                            esc_html( the_post_thumbnail( 'thumb' ) );
                        } else {
                            echo '<img src="' . get_template_directory_uri() . '/images/common/no-image.png" alt="No image">';
                        } ?>
                    </a>
                    <time datetime="<?php echo esc_attr( get_the_time( 'Y-m-d' ) ); ?>" class="list-article-date"><?php esc_html( the_time( get_option( 'date_format' ) ) ); ?></time>
                    <h3 class="blog-article-list-title">
                        <a href="<?php the_permalink(); ?>"><?php esc_html( the_title() ); ?></a>
                    </h3>
                    <p><?php the_excerpt(); ?></p>
                    <div class="icon-list-article-cate"><?php esc_html( the_category() ); ?></div>
                    <?php the_tags( '<ul class="list-article-tag"><li>', '</li><li> ', '</li></ul>' ); ?>
                </article>
            <?php endwhile;
                get_template_part( 'pagination', 'pagination' );
            else:
                if ( is_search() ) {
                    echo '<p>申し訳ありません、記事が見つかりませんでした。</p>';
                }
            endif; ?>
            <!-- ./global-blog-container --></article>
    </main>
<?php get_footer();