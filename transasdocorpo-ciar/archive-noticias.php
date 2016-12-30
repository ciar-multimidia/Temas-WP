<?php get_header(); ?>

<article>
<h1>Notícias</h1>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			
				<h3>- <a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h3>

			

<?php endwhile; ?>
<?php paginacao(); ?>
<?php else : ?>
<?php endif; ?>	

<br><br> <hr> <br><br>

<h1>Eventos</h1>

<?php $args = array( 'post_parent' => $parent,  'post_type' => 'eventos',  'order' => 'DESC', 'posts_per_page' => 10, 'orderby' => 'meta_value_num', 'meta_key' => 'data_e_hora_evento', 'meta_type' => 'DATETIME' ); $my_query = new  WP_Query( $args ); while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

				<h3>- <a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h3>
	    
	<?php endwhile; wp_reset_query(); ?>
	<br>
	(<a href="<?php bloginfo('url'); ?>/eventos">Ver todos os eventos</a>) <br>

</article>

<?php get_footer(); ?>