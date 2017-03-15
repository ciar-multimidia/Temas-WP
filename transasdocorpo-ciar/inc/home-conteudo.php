<div class="area-conteudo">
	<h3 class="block">Nosso conteúdo</h3>
	<?php $args = array( 'post_parent' => $parent, 'post_type' => array('publicacoes', 'informativos', 'artigos', 'biblioteca', 'acoes', 'pesquisas', 'ocupa-madalena'), 'posts_per_page' => 3, 'orderby' => 'rand'); $my_query = new  WP_Query( $args ); while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header>
				<div class="tag">
					<?php printf( __( '%s', 'ciar-transasdocorpo' ), get_post_type( get_the_ID() ) ); ?>
				</div>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<time><?php echo get_the_date(); ?></time>
			</header>

			<article>
				<?php if ( get_field('publicacao_resumo') ): ?>
					<?php echo wp_trim_words(get_field('publicacao_resumo'), 18, '...' ); ?>
				<?php else: ?>
					<?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?>
				<?php endif; ?>

			</article>

			<footer><a href="<?php the_permalink(); ?>" class="more-link">saiba mais</a></footer>
		</div>

	<?php endwhile; wp_reset_query(); ?>
</div>