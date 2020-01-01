<?php
/**
 * Create Theme Form
 *
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 * @since 1.0.0
 */ ?>
<form action="/" method="get">
	<input type="hidden" value="post" name="post_type" id="post_type">
    <div class="field has-addons">
        <div class="control">
            <input class="input" type="search" name="s" id="global-widget-search" value="<?php the_search_query(); ?>" placeholder="検索テキストを入力">
        </div>
        <div class="control">
            <input class="button is-info" type="submit" value="検索">
        </div>
    </div>
</form>