$(document).ready(function() {

	// Анимации блоков
	$(".top-text h1").animated("fadeInDown", "fadeOutUp");
	$(".top-text p, .section-header, .s-portfolio li1, #portfolio-wrapper1").animated("fadeInUp", "fadeOutDown");
	$(".aboutme, .work .resume-item").animated("fadeInUp", "fadeOutDown");
	$(".myphoto").animated("flipInY", "flipOutY");
	$(".persinfo, .study .resume-item").animated("fadeInUp", "fadeOutDown");

	// function heightDetect() {
	// 	$(".main-head").css("height", $(window).height());
	// };
	// heightDetect();
	// $(window).resize(function() {
	// 	heightDetect();
	// });
	$(".toggle-mnu, .top-mnu li a").click(function() {
		if ($(".top-mnu").is(":visible")) {
			$(".top-mnu").fadeOut(600);
			$(".sandwich").removeClass("active");
			$(".toggle-mnu").css("background-color", "#222");
			$(".top-mnu li a").addClass("slideOutDown");
			$(".top-mnu li a").removeClass("slideInUp");
			$(".top-text, section, footer").css({"-webkit-filter": "none", "-o-filter": "none", "filter": "none"});
		} else {
			$(".top-mnu").fadeIn(600);
			$(".top-mnu li a").addClass("slideInUp");
			$(".top-mnu li a").removeClass("slideOutDown");
			$(".sandwich").toggleClass("active");
			$(".toggle-mnu").css("background-color", "rgba(0, 0, 0, .0)");
			$(".top-text, section, footer").css({"-webkit-filter": "blur(8px)", "-o-filter": "blur(8px)", "filter": "blur(8px)"});
		};
	});

	// FabcyBox2 Модальное окно
	$(".fancybox-thumb").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		padding: 0,
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});

	// MagnificPopup модальное окно

	$(".popup").magnificPopup({
		type: "inline",
		gallery:{
			enabled:true
		}
	});
	$(".popup-content").magnificPopup({
		type: "inline"
	});
	// $(".port-item-cont").click(function() {
	// 	$(this).next().slideToggle();
	// });

	// ПОРТФОЛИО
	// Фильтр портфолио
	$("#portfolio-wrapper").mixItUp();
	// Вкладки портфолио
	$(".s-portfolio li").click(function() {
		$(".s-portfolio li").removeClass("active");
		$(this).addClass("active");
	});
	// Портфолио присвоение id объектам галереи
	$(".portfolio-item").each(function(i) {
		y = i + 1;
		$(this).find(".popup-content").attr("href", "#port-item-" + y);
		$(this).find(".port-descr").attr("id", "port-item-" + y);
		
	});
	$(".gallery-item").each(function() {
		$(this).find("a").attr("class", "fancybox-thumb");
	});
	

	// Слайдер Slick
	$('.slider').slick({
		infinite: true,
		autoplay: true,
		slidesToShow: 4,
		draggable: true,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 768,
			settings: {
				arrows: false,
				slidesToShow: 2
			}
		}
		]
	});

	// Валидация формы обратной связи
	$("input, select, textarea").jqBootstrapValidation();
	
	// Плавный скрол до блока
	$(".top-mnu ul a").mPageScroll2id();
});