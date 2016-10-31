<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
<title><?php wp_title('| ', true, 'right'); ?><?php bloginfo('name'); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="geo.region" content="BR" />
<meta name="Author" content="CIAR UFG" />
<meta name="robots" content="index, follow" />

<!--chamadas-->
<?php wp_head(); ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- Internet Explorer HTML5 enabling script: -->
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<style type="text/css">.clear { zoom: 1; display: block; }</style>
	<![endif]-->
	
</head>

<body>