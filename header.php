<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
		<title>
			<?php get_bloginfo('name'); ?>
		</title>
	</head>
	<body>
		<header>
			<span class="logo"><a href="<?php network_site_url('/'); ?>"><?php $str = get_bloginfo('name'); $str = strtolower($str); echo $str; ?></a></span>
			<p>&quot;<?php get_bloginfo('description'); ?>&quot;</p>
		</header>
		