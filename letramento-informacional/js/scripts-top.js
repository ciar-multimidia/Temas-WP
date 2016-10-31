
$(document).ready(function(){
	// slider sobre o curso
	$('.sobre-o-curso').bxSlider({
	    slideWidth: 5000,
	    autoStart: false,
	    startSlide: 0,
	    pager: false,
	    minSlides: 1,
	    maxSlides: 1,
	    slideMargin: 10,
	    infiniteLoop: false,
	    hideControlOnEnd: true,
	    nextText: '',
	    prevText: '',
	});

	// menu hover
    // atribuindo valores
    $('nav ul li').eq(0).addClass("nav-home");
    $('nav ul li').eq(1).addClass("nav-noticias");
    $('nav ul li').eq(2).addClass("nav-curso");
    $('nav ul li').eq(3).addClass("nav-contato");
    $('nav ul li').eq(4).addClass("nav-equipe");
    $('nav ul li').eq(5).addClass("nav-acesso-curso");


	$(".nav-home, .nav-noticias, .nav-curso, .nav-contato, .nav-equipe, .nav-acesso-curso").click(function(){  
	    $('nav ul li').removeClass('active');
	    $(this).addClass('active');
	});

});