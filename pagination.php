<?php
/**
 * Page Navigation
 *
 * @since 1.0.0
 */

the_posts_pagination( array(
    'before_page_number' => '',
    'next_text'          => '次へ',
    'prev_text'          => '前へ',
    'show_all'           => __return_true(),
    'screen_reader_text' => 'ページ送り'
) );