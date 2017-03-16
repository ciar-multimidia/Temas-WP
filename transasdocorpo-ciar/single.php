<?php get_header(); ?>

<section class="area-textos fix">
	<div class="container">
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="col-conteudo">

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header>
								<h2><span><?php printf( __( '%s', 'ciar-transasdocorpo' ), get_post_type( get_the_ID() ) ); ?></span> Publicado em <?php the_date(); ?></h2>
								<h1><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h1>
							</header>
							
							<?php if ( is_singular('artigos') ) : ?>
								<?php the_content(); ?>
							<?php elseif ( is_singular('publicacoes') ) : ?>
								<?php if ( get_field('publicacao_resumo') ) { echo '<p>'; the_field('publicacao_resumo'); echo '</p>'; } ?>	
							<?php endif; ?>	
						</article>

			<?php endwhile; ?>
			</div>


			<div class="col-aside">
				<?php get_sidebar(); ?>
			</div>
			<?php endif; ?>	
	</div>
</section>
<?php get_footer(); ?>