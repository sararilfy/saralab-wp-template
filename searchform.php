<?php
/**
 * Create Theme Form
 *
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 * @since 1.0.0
 */ ?>
<form action="/" method="get">
	<input type="hidden" value="post" name="post_type" id="post_type">
	<table class="global-widget-search">
		<tr>
			<td><input type="search" name="s" id="global-widget-search" value="<?php the_search_query(); ?>" placeholder="検索するテキストを入力"></td>
			<td><input type="submit" value=""></td>
		</tr>
	</table>
</form>