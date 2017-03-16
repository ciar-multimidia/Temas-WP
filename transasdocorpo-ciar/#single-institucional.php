<?php get_header(); ?>

<?php if ( is_single('Contato') ) { ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					
					<?php if( get_field('contato_endereco') ): ?>
						<p>Endereço: <?php the_field('contato_endereco'); ?></p>
					<?php endif; ?>

					<?php if( get_field('contato_telefone') ): ?>
						<p>Telefone: <?php the_field('contato_telefone'); ?></p>
					<?php endif; ?>

					<?php if( get_field('contato_email') ): ?>
						<p>E-mail: <?php the_field('contato_email'); ?></p>
					<?php endif; ?>

					<?php if( get_field('contato_localizacao') ): ?>
						<p>Localização: <br> <iframe src="<?php the_field('contato_localizacao'); ?>" width="100%" height="500px" frameborder="0" style="border:0"></iframe></p>
					<?php endif; ?>

				</article>

	<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>	


<?php } else { ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h1>
					<?php the_content(); ?>

				</article>

	<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>	

<?php } ?>


<?php get_footer(); ?>