<?php get_header(); ?>



			<article>
				<h1>index</h1>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem et voluptate adipisci aspernatur provident consectetur, laboriosam, pariatur necessitatibus quod soluta voluptatum vero ea id culpa ut numquam, fugit ipsa incidunt modi illo earum architecto consequatur nesciunt aliquid! Incidunt voluptatem, corporis molestiae, delectus repudiandae id, laudantium dolor veniam debitis laboriosam omnis obcaecati magni in dolores saepe inventore facilis tempore minima voluptas accusantium quae fuga? Eius pariatur nobis corporis ratione nam laboriosam numquam saepe odit repellendus laborum quidem recusandae aliquam alias deserunt, ab, similique nulla hic, doloremque quaerat magni sapiente. Dolores earum incidunt expedita natus fuga, commodi praesentium minus asperiores consectetur eaque, qui molestiae voluptas sint nihil sequi similique doloremque quas dignissimos iusto laborum. Eum dolores distinctio quas minus in tenetur reprehenderit, repellat recusandae pariatur expedita, voluptatem, quos sed ab necessitatibus voluptate. Veniam possimus doloribus, labore porro reiciendis magnam suscipit autem excepturi aspernatur esse nam ipsa, laudantium voluptate cumque similique doloremque. Tempora ratione distinctio minus fuga velit officiis libero enim odio? Praesentium!


				<hr>

				
<?php 
$page = get_query_var('paged');
$page = (!empty($page) ? $page : 1);
$args = array(
	'post_type'			=> 'eventos',
	'order'				=> 'DESC',
	'posts_per_page'    => 6,
	'orderby'			=> 'meta_value_num',
	'meta_key'			=> 'data_e_hora_evento',
	'meta_type'			=> 'DATETIME',
	'paged'				=> $page
	); 
query_posts( $args ); ?>

<?php while ( have_posts() ) : the_post(); ?>
				<p><span><?php the_field('data_e_hora_evento'); ?></span> - <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>	
<?php endwhile; ?>

			</article>


<?php get_footer(); ?>