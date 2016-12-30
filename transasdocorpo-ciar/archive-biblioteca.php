<?php get_header(); ?>

<article>
<h1>Biblioteca</h1>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			
				<h3>- <a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h3>

			

<?php endwhile; ?>
<?php // paginacao(); ?>
<?php else : ?>
<?php endif; ?>	

<br><br> <hr> <br><br>

<h1>Artigos</h1>

<?php $args = array( 'post_parent' => $parent, 'post_type' => 'artigos', 'posts_per_page' => 10, 'sort_column'=> 'menu_order' ); $my_query = new  WP_Query( $args ); while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

				<h3>- <a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h3>
	    
	<?php endwhile; wp_reset_query(); ?>
	<br>
	(<a href="<?php bloginfo('url'); ?>/artigos">Ver todos os artigos</a>) <br>


<br><br> <hr> <br><br>

<h1>Publicações</h1>

<?php $args = array( 'post_parent' => $parent, 'post_type' => 'publicacoes', 'posts_per_page' => 10, 'sort_column'=> 'menu_order' ); $my_query = new  WP_Query( $args ); while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

				<h3>- <a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h3>
	    
	<?php endwhile; wp_reset_query(); ?>
	<br>
	(<a href="<?php bloginfo('url'); ?>/publicacoes">Ver todas as publicações</a>) <br>	


<br><br> <hr> <br><br>

<h1>Informativos</h1>

<?php $args = array( 'post_parent' => $parent, 'post_type' => 'informativos', 'posts_per_page' => 2, 'sort_column'=> 'menu_order' ); $my_query = new  WP_Query( $args ); while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

				<h3>- <a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h3>
	    
	<?php  endwhile;  wp_reset_query(); ?>
	<br>
	(<a href="<?php bloginfo('url'); ?>/informativos">Ver todos os informativos</a>) <br>		
</article>

<?php get_footer(); ?>