jQuery(document).ready(function() {
	var todoCorpo = jQuery('html, body'),
		contIntro = jQuery('div#intro'),
		contGrafismo = contIntro.find('div.grafismointro'),
		grafismos = contGrafismo.find('div.posrel > img'),
		logo_intro = jQuery('div#logointro'),
		contEquipe = jQuery('div#equipe'),
		wrapEquipe = contEquipe.find('div.cont-equipes'),
		divsEquipe = wrapEquipe.children('div'),
		widthCont = contIntro.width(),
		heightCont = contIntro.height(),
		equipeMargemPerspec = 30,
		equipeMargemRotate = 20,
		equipeMargemZ = 100,
		// margemPerspec = 25,
		intervaloGrafismos = 30,
		intervaloSomado = 0,
		contNoticias = jQuery('div#noticias'),
		conjNoticias = contNoticias.find('div.ultimasnoticias > div.noticia'),
		btMaisNoticias = contNoticias.find('.cont-maisnoticias > a.maisnoticias'),
		contModais = jQuery('#modais'),
		conjModais = contModais.find('.modais'),
		modaisDarken = contModais.find('.darken-overlay'),
		modaisBtFechar = contModais.find('.fechar-modal'),
		modaisNoticias = contModais.find('.modais.m-noticias'),
		modaisEquipe = contModais.find('.modais.m-equipe');


	// atualizando os valores de width e height do container dos grafismos
	jQuery(window).on('resize', function(event) {
		widthCont = contGrafismo.width();
		heightCont = contGrafismo.height();
	});
	

	contIntro.on('mousemove', function(event) {
		var qtdeMov = (event.pageX+event.pageY)/(widthCont+heightCont);

		
		grafismos.each(function(index, el) {
			var valoresMov = jQuery(el).attr('data-mov').split(' ');
			var multiplicadorFinal = qtdeMov-( parseInt(valoresMov[0])/100 );
			if (index % 2 == 0) {
				multiplicadorFinal = multiplicadorFinal*(-1);
			}
			var qtdeFinalZ = parseInt(valoresMov[1])*multiplicadorFinal;
			var qtdeFinalR = parseInt(valoresMov[2])*multiplicadorFinal;


			if (qtdeFinalZ > 0) {
				jQuery(el).css('z-index', '1');
			} else if (qtdeFinalZ < 0) {
				jQuery(el).css('z-index', '-1');

			}
			jQuery(el).css('transform', ('rotateZ(' + qtdeFinalR +'deg)'+' translateZ('+qtdeFinalZ+'px)' ) );
			

		});	
	});
	contEquipe.on('mousemove', function(event) {
		var xcursor = event.pageX;
		var ycursor = event.pageY - jQuery(this).offset().top;

		var qtdeX = 50+(equipeMargemPerspec*(Math.round( (xcursor/jQuery(this).width()*2-1)*100)/100) ) ;
		var qtdeY = 50+(equipeMargemPerspec*(Math.round( (ycursor/jQuery(this).height()*2-1)*100)/100) );

		// console.log(xcursor, ycursor);
		wrapEquipe.css('perspective-origin', qtdeX+'% '+qtdeY+'%');

		divsEquipe.each(function(index, el) {
			var xel = Math.round( jQuery(el).offset().left + (jQuery(el).width()/2) );
			var yel = Math.round( jQuery(el).offset().top + (jQuery(el).height()/2)  - contEquipe.offset().top );
			

			var qtde_transZ =equipeMargemZ - equipeMargemZ*( ( Math.sqrt( (xcursor-xel)*(xcursor-xel) + (ycursor-yel)*(ycursor-yel) ) ) / (Math.sqrt( contEquipe.width()*contEquipe.width() + contEquipe.height()*contEquipe.height() ) ) );
		

			jQuery(el).css('transform', 'translateZ('+qtde_transZ+'px)');
		});
	});

	btMaisNoticias.on('click', function(event) {
		jQuery(this).remove();
		var intervaloNoticias = 60,
			intNotSomado = 0;
		conjNoticias.each(function(index, el) {
			if (index > 2) {
				jQuery(el).addClass('db');
			}
			setTimeout(function(){
				jQuery(el).addClass('visivel');
			}, intNotSomado);

			intNotSomado += intervaloNoticias;
		});
	});

	function revelarModal(tipo, modal){
		todoCorpo.addClass('block-scroll');
		contModais.addClass('db');
		if (tipo == 'equipe') {			
			modaisEquipe.addClass('db');
			var iframe_yt = jQuery(modal).find('iframe.video_youtube');
			if (iframe_yt.length > 0) {
				if (iframe_yt.attr('src') == false) {
					var regexYt = /^.*(?:(?:youtu\.be\/|v\/|vi\/|u\/\w\/|embed\/)|(?:(?:watch)?\?v(?:i)?=|\&v(?:i)?=))([^#\&\?]*).*/; //http://stackoverflow.com/questions/3452546/javascript-regex-how-to-get-youtube-video-id-from-url/
					var linkYoutube = jQuery(modal).find('span.link_video_youtube').text();
					var linkMatch = linkYoutube.match(regexYt);
					var urlYoutubeEmbed = 'http://www.youtube.com/embed/';
					if (linkMatch && linkMatch[1].length == 11) {
						iframe_yt.attr('src', urlYoutubeEmbed+linkMatch[1]);
					} else {
						iframe_yt.remove();
						console.warn('A URL para o vídeo do youtube desse membro está incorreto.');

					}

				}
			}
		} else if(tipo == 'noticias'){
			modaisNoticias.addClass('db');
		}
		jQuery(modal).addClass('db');
		setTimeout(function(){
			modaisDarken.addClass('visivel');
			modaisBtFechar.addClass('visivel');
			jQuery(modal).addClass('visivel');
		},20);
	}

	function esconderModal(){
		todoCorpo.removeClass('block-scroll');
		modaisDarken.removeClass('visivel');
		modaisBtFechar.removeClass('visivel');	
		conjModais.children('div').removeClass('visivel');
		setTimeout(function(){
			conjModais.removeClass('db');
			contModais.removeClass('db');
			conjModais.children('div').removeClass('db');

		}, 250);
	}

	divsEquipe.on('click', function(event) {
		var modalRevelar = jQuery(this).attr('data-modal-alvo');
		revelarModal('equipe', modalRevelar);
	});

	conjNoticias.find('a.saibamais').on('click', function(event) {
		var modalRevelar = jQuery(this).parent().attr('data-modal-alvo');
		revelarModal('noticias', modalRevelar);
	});

	modaisBtFechar.on('click', function(event) {
		esconderModal();
		/* Act on the event */
	});

	modaisDarken.on('click', function(event) {
		esconderModal();
		/* Act on the event */
	});



});