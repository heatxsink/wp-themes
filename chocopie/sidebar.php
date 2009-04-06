	<div id="sidebar">

		<!--div class="about">
			This is the new about section where you can briefly discuss who you are and what you're writing about.
		</div-->
		
		<ul>
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			

			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?> <li>

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <?php the_time('F, Y'); ?>.</p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the year <?php the_time('Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p>

			<?php } ?>

			</li> <?php }?>			

			<?php wp_list_pages('title_li=<h2></h2>'); ?>

			<ul><a href="mailto:hello@crysinue.com">inspire me</a></ul>			

			<ul><span class="title">--</span></ul>

			<?php wp_list_categories('title_li=<h2></h2>'); ?>

			<ul><span class="title">--</span></ul>

			<ul><?php wp_get_archives('title_li=<h2></h2>&type=monthly'); ?></ul>

			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<ul><span class="title">--</span></ul>
				<?php wp_list_bookmarks('title_li=<h2></h2>&categorize=0'); ?>
			<?php } ?>
			<li>
				<ul>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
				</ul>
			</li>
			<li>
				<ul>
				<a class="syndicate" href="<?php bloginfo('rss2_url'); ?>" >RSS</a>
				</ul>
			</li>
			<?php endif; ?>
		</ul>
	</div>

