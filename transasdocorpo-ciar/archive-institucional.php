<?php get_header(); ?>

<section class="area-textos fix">
	<div class="container">

			<div class="col-conteudo">
			

						<article class="post-">
							<header>
								<h2><span><?php printf( __( '%s', 'ciar-transasdocorpo' ), get_post_type( get_the_ID() ) ); ?></span></h2>
								<h1><a href="<?php the_permalink(); ?>"><?php echo get_post_field('post_title', '355'); ?></a></h1>
							</header>
							
							<?php echo wpautop(get_post_field('post_content', '355')); ?>
							<?php /*$post = get_post('355'); echo wpautop( $post->post_content );*/ ?>
	
						</article>

			</div>


			<div class="col-aside">
				<div class="box">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<label><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></label>
					<?php endwhile; endif; ?>	
				</div>
			</div>
				

	</div>
</section>
<?php get_footer(); ?>