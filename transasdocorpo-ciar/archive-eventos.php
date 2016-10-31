<?php get_header(); ?>

<?php  if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h1>
				<?php the_excerpt(); ?>

				<?php the_field('data_e_hora_de_evento'); ?> <br>


			</article>

			<hr>

<?php endwhile; ?>
<?php paginacao(); ?>
<?php else : ?>
<?php endif; ?>


<?php get_footer(); ?>