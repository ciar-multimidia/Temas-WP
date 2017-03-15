
<footer class="rodape">
	<div class="mascara"></div>
	<div class="container area-rodape">
		<div class="grafismo"><?php get_template_part('img/grafismo'); ?></div>
		<div class="navegacao">
			<?php wp_nav_menu(array('container' => '', 'echo' => true, 'fallback_cb' => 'wp_page_menu', 'items_wrap' => '<ul>%3$s</ul>', 'depth' => 0)); ?>	
		</div>
		<div class="marca">
			<?php get_template_part('img/marca'); ?>
		</div>

		<div class="copyright">
			<div>2017 &copy; Grupo Transas do Corpo - Todos os direitos reservados</div>
			<div><a href="http://www.ciar.ufg.br">Design & Desenvolvimento: Ciar UFG</a></div>
		</div>
	</div>
</footer>

</main>

<?php wp_footer(); ?>
</body>
</html>