<form role="search" method="get" id="searchform" action="<?php home_url()?>">
	<input type="search" value="<?php esc_attr(apply_filters('the_search_query', get_search_query()))?>" name="s" id="s" /><input type="submit" class="button small" value="Okay">
</form>