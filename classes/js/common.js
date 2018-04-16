$(document).ready(function() {
	// Анимация при пролистывании (Plugin: animated.css)
	new WOW().init();
	// Скроллинг к блокам по нажатию
	$(".hl-menu ul li a, .mh-button a").mPageScroll2id();
	
	//Стрелка "Вверх"
	$("#back-top").hide();
    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 200) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });

        $('#back-top a').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

        $(".arrow").find("span").hide().end().hover(function() {
            $(this).find("span").stop(true, true).fadeIn();
        }, function() {
            $(this).find("span").stop(true, true).fadeOut();
        });

    });
});

$(window).load(function() {
	// Preloader
	$(".loader_inner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");

	$(".top_text h1").animated("fadeInDown", "fadeOutUp");
	$(".top_text p").animated("fadeInUp", "fadeOutDown");

}); 


