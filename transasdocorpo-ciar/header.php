<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title('&#9666; ', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<?php get_template_part('inc/head'); ?>
</head>
<body <?php body_class(); ?>>


<main>

<header class="topo-site">
	<div class="imagem-fundo" style="background-image: url('<?php bloginfo('template_url'); ?>/img/topo.jpg')"></div>
	<div class="mascara"></div>

	<div class="container area-topo">

		<div class="menu-busca">
			<nav>
				<span>Menu</span>
				<?php wp_nav_menu(array('container' => '', 'echo' => true, 'fallback_cb' => 'wp_page_menu', 'items_wrap' => '<ul>%3$s</ul>', 'depth' => 0)); ?>	
			</nav>
			<?php get_search_form(); ?>
		</div>

		<div class="marca amarela">
			<?php get_template_part('img/marca'); ?>
			<h1 class="hidden"><?php bloginfo('name'); ?></h1>
			<h2>Ações educativas em gênero, <br> saúde e sexualidade</h2>
		</div>
	</div>
</header>



