<?php get_header(); ?>

<article>
	<h1>listagem de artigo de acordo com data de evento</h1>
</article>

<?php 
$page = get_query_var('paged');
$page = (!empty($page) ? $page : 1);
$args = array(
	'post_type'			=> 'eventos',
	'order'				=> 'DESC',
	// 'posts_per_page'    => 6,
	'orderby'			=> 'meta_value_num',
	'meta_key'			=> 'data_e_hora_evento',
	'meta_type'			=> 'DATETIME',
	'paged'				=> $page
	); 
query_posts( $args ); ?>

<?php while ( have_posts() ) : the_post(); ?>
			<article>
				<h1><a href="<?php the_permalink(); ?>"><?php the_field('data_e_hora_evento'); ?> - <?php the_title(); ?></a></h1>
				<?php the_excerpt(); ?>
			</article>		
<?php endwhile; paginacao(); ?>


<?php get_footer(); ?>