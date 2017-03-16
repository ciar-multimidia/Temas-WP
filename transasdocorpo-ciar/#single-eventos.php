<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h1>
				<?php the_content('saiba mais...'); ?>
				Evento em <?php $timestamp = get_field('data_e_hora_evento');
      echo date_i18n("d/m/Y", $timestamp); ?> às <?php $timestamp = get_field('data_e_hora_evento');
      echo date_i18n("H:i", $timestamp); ?>
			</article>

<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>	


<?php get_footer(); ?>