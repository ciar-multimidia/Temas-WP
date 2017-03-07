<div class="busca">
	<form method="get" action="<?php bloginfo('url') ?>">
		<input itemprop="query-input" type="search" name="s" id="s" placeholder="O que voc&ecirc; procura?" value="<?php echo wp_specialchars($s, 1); ?>" required>
		<input type="submit" id="searchsubmit" class="hidden" value="Buscar">
	</form>
</div>