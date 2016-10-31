<?php get_header(); ?>

<article>
	<ul>
		<li><a href="<?php bloginfo('url') ?>/producoes">producoes</a></li>
		<li><a href="<?php bloginfo('url') ?>/pesquisas">pesquisas</a></li>
		<li><a href="<?php bloginfo('url') ?>/publicacoes">publicacoes</a></li>
		<li><a href="<?php bloginfo('url') ?>/informativos">informativos</a></li>
		<li><a href="<?php bloginfo('url') ?>/filmes">filmes</a></li>
	</ul>
</article>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h1>
				<?php the_content('saiba mais...'); ?>
			</article>

<?php endwhile; ?>
<?php paginacao(); ?>
<?php else : ?>
<?php endif; ?>	


<?php get_footer(); ?>