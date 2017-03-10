<div class="area-noticias">
	<?php $args = array( 'post_parent' => $parent, 'post_type' => array('noticias', 'eventos'), 'posts_per_page' => 3); $my_query = new  WP_Query( $args ); while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header>
				<div class="tag">
					<?php printf( __( '%s', 'ciar-transasdocorpo' ), get_post_type( get_the_ID() ) ); ?>
				</div>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<time><?php echo get_the_date(); ?></time>
			</header>

			<article><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?></a></article>

			<footer><a href="<?php the_permalink(); ?>" class="more-link">Leia mais</a></footer>
		</div>

	<?php endwhile; wp_reset_query(); ?>

	<a href="<?php bloginfo('url') ?>/noticias" class="btn-block"><span>Ver mais notícias e eventos</span></a>
</div>