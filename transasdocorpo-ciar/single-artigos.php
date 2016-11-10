<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h1>
				<?php the_content(); ?>

				<hr>
				<?php if ( get_field('artigo_autor') ) { ?>- Por <?php the_field('artigo_autor'); ?><br><?php } ?>
				<?php if ( get_field('artigo_publicacao') ) { ?>- Publicado em <?php the_field('artigo_publicacao'); ?><br><?php } ?>
				<?php if ( get_field('artigo_anexo') ) { ?>- <a href="<?php the_field('artigo_anexo'); ?>">Anexo</a><?php } ?>
			</article>

<?php endwhile; ?>
<?php paginacao(); ?>
<?php else : ?>
<?php endif; ?>	


<?php get_footer(); ?>