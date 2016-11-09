<?php $options = get_option( 'add_opcoes_layout' ); ?> 

<footer id="contato">
	<div class="container flexbox">
		<div class="logo">
			<?php get_template_part('img/svg_marca'); ?>
		</div>
		<div class="info-contatos">
			<h3>Contato</h3>
			<?php if ($options['tel_contato']) { ?>
				<p class="telefone"><?php echo $options['tel_contato'] ?></p>
			<?php } ?>

			<?php if ($options['email_contato']) { ?>
				<p class="email"><?php echo $options['email_contato'] ?></p>
			<?php } ?>
		</div>
		<div class="realizacao">
			<h3>Realização</h3>
			<div class="flexbox">
				<a href="http://fav.ufg.br/" target="blank"> <?php get_template_part('img/svg-fav'); ?></a>
				<a href="http://www.ciar.ufg.br/" target="blank"> <?php get_template_part('img/svg-ciar-ufg'); ?></a>
			</div>
			
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>