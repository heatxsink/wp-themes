<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				
				<div class="column2-1">
					<a href="<?php the_permalink() ?>" target="_blank">
						<?php
							$custom_field_keys = get_post_custom_keys();
							
							foreach ($custom_field_keys as $key => $value)
							{
								$image_key = trim($value);
								
								if ( '_' == $image_key{0} )
								{
									continue;
								}
								
								$single = true;
								$image_url = get_post_meta($post->ID, $image_key, $single);
								$img_tag = sprintf("<img width=\"600\" src=\"%s\" alt=\"%s\" class=\"post-<?php the_ID(); ?>\" />", $image_url, $image_key);
								
								echo $img_tag;
							}
						?>
					</a>
				</div><!-- column2-1 -->
				
				<div class="column2-2">
					<span class="blogtitle">
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					</span>
					<span class="bloglink">
						<small><?php the_category(', '); ?></small>
					</span>
					<br />
					<span class="content">
						<span class="bloglink">
							<p><?php the_content(); ?></p>
						</span>
					</span>
					<span class="bloglink">
							<p class="postmetadata"><?php the_time('F jS, Y') ?> | <?php the_tags('Tags: ', ', ', '&nbsp;| '); ?> <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
					</span>
				</div><!-- column2-2 -->
			</div><!-- post-<?php the_ID(); ?> -->
			
			<div class="clear"><!-- because floated layouts are a biatch --></div>
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
