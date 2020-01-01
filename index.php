<?php get_header(); ?>
    <?php get_template_part( 'breadcrumb', 'breadcrumb' ); ?>
    <article>
            <?php if ( is_search() ) {
                echo '<h1 class="title">「' . get_search_query() . '」の検索結果</h1>';
            } else if ( !is_home() ) {
                esc_html( the_archive_title( '<h1 class="title">', '</h1>' ) );
                if ( is_category() ) {
                    echo category_description();
                }
            }
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="content">
                    <h2 class="title">
                        <a href="<?php the_permalink(); ?>"><?php esc_html( the_title() ); ?></a>
                    </h2>
                    <?php if ( has_post_thumbnail() ) { ?>
                        <figure><a href="<?php the_permalink(); ?>"><?php
                            esc_html( the_post_thumbnail( 'large' ) ); ?>
                        </a></figure>
                    <?php }
                        get_template_part( 'tabs', 'tabs' );
                        the_excerpt(); ?>
                </article>
            <?php endwhile;
                /**
                 * Page Navigation
                 *
                 * @since 1.0.0
                 */
                the_posts_pagination(array(
                    'before_page_number' => '',
                    'next_text' => '次へ',
                    'prev_text' => '前へ',
                    'show_all' => __return_true(),
                    'screen_reader_text' => 'ページ送り'
                ));
            else:
                if ( is_search() ) {
                    echo '<p>申し訳ありません、記事が見つかりませんでした。</p>';
                }
            endif; ?>
    </article>
<?php get_footer();