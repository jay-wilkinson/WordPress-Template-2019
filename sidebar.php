	<div id="sidebar">
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

			<li><h2><?php _e('Favorite Sites'); ?></h2>
				<ul>
					<li><a href="https://dealnews.com" target=_blank rel="nofollow">DealNews</a></li>
					<li><a href="https://freshome.com" target=_blank rel="nofollow">freshome</a></li>
					<li><a href="https://hackaday.com/blog" target=_blank rel="nofollow">Hack a Day</a></li>
					<li><a href="https://news.ycombinator.com/newest" target=_blank rel="nofollow">Y Combinator Hacker News</a></li>
					<li><a href="https://notcot.org" target="_blank" rel="nofollow">NOTCOT.org</a></li>
					<li><a href="https://slashdot.org" target=_blank rel="nofollow">Slashdot</a></li>
					<li><a href="https://theregister.co.uk" target=_blank rel="nofollow">The Register</a></li>
					<li><a href="https://xkcd.com" target=_blank>xkcd</a></li>
				</ul>
			</li>

			<?php wp_list_pages('title_li=<h2 class="side">Pages</h2>' ); ?>

			<?php wp_list_categories('show_count=1&title_li=<h2 class="side">Categories</h2>'); ?>

			<li>
			  <h2 class="side">Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<li><h2 class="side">Search</h2>
				</li>
				<li><?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</li>

			<li><h2 class="side"><?php _e('Calendar'); ?></h2></li>
				<li><?php get_calendar(); ?> </li>

			<?php endif; ?>
		</ul>
