jQuery(document).ready(function() {
	var contIntro = jQuery('div#intro'),
		contGrafismo = contIntro.find('div.grafismointro'),
		grafismos = contGrafismo.find('div.posrel > img'),
		logo_intro = jQuery('div#logointro'),
		logosvg = logo_intro.children('svg'),
		sublogointro = logo_intro.children('h3'),
		letrasLogointro = logosvg.children('svg path'),
		formaLogointro = logosvg.children('svg polygon'),
		contEquipe = jQuery('div#equipe'),
		wrapEquipe = contEquipe.find('div.cont-equipes'),
		divsEquipe = wrapEquipe.children('div'),
		widthCont = contIntro.width(),
		heightCont = contIntro.height(),
		equipeMargemPerspec = 30,
		// margemPerspec = 25,
		intervaloGrafismos = 30,
		intervaloSomado = 0,
		// tempoLogo = intervaloGrafismos*grafismos.length+1500,
		intervaloLetrasLogo = 20,
		intervaloLetrasSomado = 0;
		// tempoTrianguloLogo = tempoLogo + (intervaloLetrasLogo*letrasLogointro.length);


	// atualizando os valores de width e height do container dos grafismos
	jQuery(window).on('resize', function(event) {
		widthCont = contGrafismo.width();
		heightCont = contGrafismo.height();
	});
	
	// animacao grafismos
	grafismos.each(function(index, el) {
		intervaloSomado += intervaloGrafismos;
		setTimeout(function(){
			jQuery(el).addClass('visivel');	
		}, intervaloSomado);

		// console.log(jQuery(el).attr('data-z-inicio'), jQuery(el).attr('data-z-final'),  Math.abs( jQuery(el).attr('data-z-final') - jQuery(el).attr('data-z-inicio') ));
				
	});

// logo aparece
	sublogointro.addClass('visivel');
	formaLogointro.addClass('visivel');
	letrasLogointro.each(function(index, el) {
		intervaloLetrasSomado += intervaloLetrasLogo;
		setTimeout(function(){
			jQuery(el).addClass('visivel');
		}, intervaloLetrasSomado);
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

		console.log(qtdeX, qtdeY);
		divsEquipe.each(function(index, el) {
			wrapEquipe.css('perspective-origin', qtdeX+'% '+qtdeY+'%');
		});
	});


});