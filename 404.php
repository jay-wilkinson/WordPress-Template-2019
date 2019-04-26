<?php get_header(); ?>

	 <div id=“wrapper”>


	<div id="content" class="narrowcolumn">

		<h2 class="pagetitle">Error 404 - Not Found</h2><br /><br />
		
		<div class="error">&nbsp;</div>
		<p>You have tried to access something that doesn't exist.  It may have been moved or you may have been directed here in error.</p>
		<p>You can try to search again, or return to the front page.</p>
			
			<h3>Search</h3>
	
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
				
	</div>

<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>