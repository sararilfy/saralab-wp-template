<?php get_header(); ?>
    <?php get_template_part( 'breadcrumb', 'breadcrumb' ); ?>
    <article>
            <?php
            if ( is_search() ) { ?>
                <h1 class="title-blog-archive">「<?php echo get_search_query(); ?>」の検索結果</h1>
            <?php
            } else {
            esc_html( the_archive_title( '<h1 class="title">', '</h1>' ) );
            }
            echo category_description();
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="content">
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) {
                            esc_html( the_post_thumbnail( 'thumb' ) );
                        } ?>
                    </a>
                    <h2>
                        <a href="<?php the_permalink(); ?>"><?php esc_html( the_title() ); ?></a>
                    </h2>
                    <time datetime="<?php echo esc_attr( get_the_time( 'Y-m-d' ) ); ?>" class="list-article-date"><?php esc_html( the_time( get_option( 'date_format' ) ) ); ?></time>
                    <p><?php the_excerpt(); ?></p>
                    <div class="tags"><?php esc_html( the_category() ); ?></div>
                    <?php the_tags( '<ul class="tags"><li class="tag">', '</li><li class="tag"> ', '</li></ul>' ); ?>
                </article>
            <?php endwhile;
                get_template_part( 'pagination', 'pagination' );
            else:
                if ( is_search() ) {
                    echo '<p>申し訳ありません、記事が見つかりませんでした。</p>';
                }
            endif; ?>
    </article>
<?php get_footer();