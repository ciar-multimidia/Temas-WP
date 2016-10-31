        <div class="busca-categoria-noticias">
            <form class="form-search" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input name="s" type="text" placeholder="O que voc&ecirc; procura?" value="<?php echo wp_specialchars($s, 1); ?>">
                <button type="submit" id="searchsubmit" class="btn">Buscar</button>
            </form>
        </div>