<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<label class="hidden" for="s"><?php _e('Search for:'); ?></label>
	<div>
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
		<div align="right"><input type="submit" id="searchsubmit" value="GO" /></div>
	</div>
</form>