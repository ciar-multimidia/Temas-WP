jQuery(document).ready(function() {
	jQuery(".galeria-imagem a, .fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none',
		helpers	: {
			title	: {
				type: 'inside'
			}
		}
	}); 

	var galerias = jQuery('.galeria');

	galerias.each(function(index, el) {
		var itensGal = jQuery(el).find('.galeria-item');
		var linhasGal = jQuery(el).find('.linha');

		var nColunas = parseInt(jQuery(el).attr('data-colunas') );

		if (linhasGal.eq(linhasGal.length-1).contents().length == 0) {
			linhasGal.eq(linhasGal.length-1).remove();
			linhasGal = jQuery(el).find('.linha');
		}

		if (linhasGal.length > 1) {

			if (nColunas > 2 && itensGal.length % nColunas == 1) {
				var ultimaLinha = linhasGal.eq(linhasGal.length-1);
				var penultimaLinha = linhasGal.eq(linhasGal.length-2);
				var itemMovido = penultimaLinha.find('.galeria-item').eq(penultimaLinha.find('.galeria-item').length-1);
				ultimaLinha.prepend(itemMovido);
				// linhasGal = jQuery(el).find('.linha');
			}

			linhasGal.each(function(index2, el2) {
				if (jQuery(el2).find('.galeria-item').length < nColunas){
					jQuery(el2).addClass('grid-'+jQuery(el2).find('.galeria-item').length);
				}
			});
		}
	}); 
});