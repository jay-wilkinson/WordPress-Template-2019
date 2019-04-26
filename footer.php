
<hr />
<div id="footer">
	<p>
		<?php bloginfo('name'); ?> is self-hosted and powered by <a href="https://wordpress.org" target="_blank" rel="nofollow">WordPress</a><br />
		<?php echo $wpdb->num_queries; ?> queries. <?php timer_stop(1); ?> seconds.
		Over <?php
			$pjcount = $wpdb->get_row("SELECT hitnumber FROM wp_counter WHERE 1");
			echo $pjcount->hitnumber;
		?> pages served.
	</p>
</div>
</div>
		<?php wp_footer(); ?>
</div>
</body>
</html>
