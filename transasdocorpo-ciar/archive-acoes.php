<?php get_header(); ?>

<article>
<h1>Ações</h1>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			
				<h3>- <a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h3>

			

<?php endwhile; ?>
<?php // paginacao(); ?>
<?php else : ?>
<?php endif; ?>	

<br><br> <hr> <br><br>

<h1>Produções</h1>

<?php $args = array( 'post_parent' => $parent, 'post_type' => 'producoes', 'posts_per_page' => 10, 'sort_column'=> 'menu_order' ); $my_query = new  WP_Query( $args ); while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

				<h3>- <a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h3>
	    
	<?php endwhile; wp_reset_query(); ?>
	<br>
	(<a href="<?php bloginfo('url'); ?>/producoes">Ver todas as produções</a>) <br>


<br><br> <hr> <br><br>

<h1>Pesquisas</h1>

<?php $args = array( 'post_parent' => $parent, 'post_type' => 'pesquisas', 'posts_per_page' => 10, 'sort_column'=> 'menu_order' ); $my_query = new  WP_Query( $args ); while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

				<h3>- <a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h3>
	    
	<?php endwhile; wp_reset_query(); ?>
	<br>
	(<a href="<?php bloginfo('url'); ?>/pesquisas">Ver todas as persquisas</a>) <br>	

</article>

<?php get_footer(); ?>