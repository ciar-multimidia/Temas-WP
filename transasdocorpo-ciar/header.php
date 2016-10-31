<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title('&#9666; ', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<?php get_template_part('inc/head'); ?>
</head>
<body>


<section class="container">

<header class="topo">
	<nav>
		<?php wp_nav_menu ( array( 'theme_location' => 'menu-topo', 'menu' => 'menu-topo', 'container' => '', 'container_class' => '', 'container_id' => '', 'menu_class' => '', 'menu_id' => '', 'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '<span>', 'link_after' => '</span>', 'items_wrap' => '<ul>%3$s</ul>', 'depth' => 0, 'walker' => '' )); ?>
	</nav>
</header>

