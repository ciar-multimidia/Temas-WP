<?php get_header(); ?>

<?php  if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article>
				<h1>(<?php the_field('evento_data'); ?>) <a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h1>
				<?php the_excerpt(); ?>

				<p><?php the_field('evento_data'); ?>, à(s) <?php the_field('evento_hora'); ?>h</p>
			</article>

			<hr>

<?php endwhile; ?>
<?php paginacao(); ?>
<?php else : ?>
<?php endif; ?>


<?php get_footer(); ?>