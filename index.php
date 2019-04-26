<?php get_header(); ?>
	<div id="wrapper">
	<div id="content" class="narrowcolumn">
	<?php $post_number = 0; ?>
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="date"><span><?php the_time('M') ?></span> <?php the_time('d') ?></div>
				<div class="title"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
				<div class="cat">Category: <?php the_category(', ') ?></div>
				
				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> <?php edit_post_link('Edit', ' ', ' '); ?>  </p>
				<?php
				$post_number++;
				if (($post_number == 1) OR ($post_number == 4) OR ($post_number == 7)) {
					print ("<br /><br />\n");
				} else {
				}
				?>
			</div>

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
</div>
<?php get_footer(); ?>
