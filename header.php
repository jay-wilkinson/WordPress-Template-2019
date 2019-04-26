<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="https://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="planetjay.com - the personal website of Jay Wilkinson" />
<meta name="keywords" content="planetjay.com, planetjay, Jay, Wilkinson" />
<meta http-equiv="x-dns-prefetch-control" content="off">
<base href="https://www.planetjay.com/" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php $wpdb->query("UPDATE wp_counter SET hitnumber = (hitnumber+1) WHERE 1"); ?>
<?php wp_head(); ?>
</head>
<body>
<div id="page">
<div id="header">
	<div id="headerimg">
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
	</div>
</div>
<div id="menubar">
<a href="/">Home</a><a href="/about/">About</a><a href="/articles/">Articles</a><a href="https://planetjay.com/feed">News Feed</a>
</div>
<hr />
