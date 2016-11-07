<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h1>
				<?php 
					$post_type = get_post_type_object( get_post_type($post) ); 
					echo 'Publicado na área: ';
					echo $post_type->label ; 
				?>
				<?php the_excerpt(); ?>
			</article>

<?php endwhile; ?>
<?php paginacao(); ?>
<?php else : ?>
<?php endif; ?>	


<?php get_footer(); ?>