$(function () {
	/*
		https://www.jqueryscript.net/animation/Smooth-Mouse-Wheel-Scrolling-Plugin-With-jQuery-easeScroll.html
		===========================*/
	$("html").easeScroll({
		frameRate: 60,
		animationTime: 1000,
		stepSize: 90,
		pulseAlgorithm: 1,
		pulseScale: 8,
		pulseNormalize: 1,
		accelerationDelta: 20,
		accelerationMax: 1,
		keyboardSupport: true,
		arrowScroll: 50,
		touchpadSupport: true,
		fixedBackground: true
	});

	let changeFormBg = function () {
		$('#js-search-form input').on('focus', function () {
			$(this).parent('.search-form').addClass('active');
		});

		$('#js-search-form input').blur(function () {
			$('#js-search-form').removeClass('active');
		});
	};
	changeFormBg();

	let toggleLanguageMenu = function () {
		$('#js-language__title').on('click', function (e) {
			e.preventDefault();
			if (!$(this).hasClass('active')) {
				$(this).addClass('active')
				$('#js-language .list').show();
			} else {
				$('#js-language__title').removeClass('active');
				$('#js-language .list').hide();
			}
		});
	};
	toggleLanguageMenu();

	let sandwitch = function () {
		$('.sandwitch').on('click', function () {
			$('#js-main-menu').slideToggle();
			$(this).toggleClass('sandwitch--active');
		});
	};
	sandwitch();

	let showBlocksText = function () {
		$('.blocks .blocks__item').each(function () {
			let thisText = $(this).find('.blocks__text');
			let thisBlocksContent = $(this).find('.blocks__content');
			let thisTextHeight = thisText.innerHeight() + 16;

			thisBlocksContent.css({
				"bottom": "-" + thisTextHeight + 'px'
			});

		});

		$('.blocks .blocks__item').hover(function () {
			let thisText = $(this).find('.blocks__text');
			let thisBlocksContent = $(this).find('.blocks__content');
			$(this).find('.blocks__image_show').hide();
			$(this).find('.blocks__image_hover').show();
			thisBlocksContent.css({
				"bottom": 0
			});

		}, function () {
			let thisText = $(this).find('.blocks__text');
			let thisBlocksContent = $(this).find('.blocks__content');
			let thisTextHeight = thisText.innerHeight() + 16;
			$(this).find('.blocks__image_show').show();
			$(this).find('.blocks__image_hover').hide();

			thisBlocksContent.css({
				"bottom": "-" + thisTextHeight + 'px'
			});
		});
	};

	if ($(window).width() > 992) {
		showBlocksText();
	}

	let slider = function () {
		$('#js-slider').slick({
			arrows: false,
			dots: true,
			adaptiveHeight: true
		});

		$('.slider-wrap .slider-left svg').on('click', function (e) {
			$('#js-slider').slick('slickPrev');
		});

		$('.slider-wrap .slider-right').on('click', function (e) {
			$('#js-slider').slick('slickNext');
		});
	};
	slider();

	let tabs = function () {
		$('#js-tabs .tabs__title:first-child').show();
		$('#js-tabs .tabs__title').on('click', function () {
			let dataTitle = $(this).attr('data-tab');

			$('#js-tabs .tabs__title').removeClass('active');
			$(this).addClass('active');

			$('#js-tabs .tabs__item').hide();
			$('#js-tabs .tabs__content .tabs__item[data-tab="' + dataTitle + '"]').show();
		});
	};
	tabs();

	let menuAboutActiveItem = function () {
		let windowHref = window.location.href;
		$('.sidebar__list > li > a').each(function () {
			let link = $(this);
			let hrefLink = link.attr('href');

			if (windowHref === hrefLink) {
				link.addClass('active');
			}
		});

		$('.sidebar__list .sub-menu li a').each(function () {
			let link = $(this);
			let hrefLink = link.attr('href');

			if (windowHref === hrefLink) {
				link.closest('.sub-menu').prev().addClass('active');
				link.addClass('active');
			}
		});
	};
	menuAboutActiveItem();

	let showAboutSubMenu = function () {
		if ($('.sidebar__list li a.active').next().hasClass('sub-menu')) {
			$('.sidebar__list li a.active').next().show();
		}
	};
	showAboutSubMenu();

	let cookieLanguage = function(){
		let siteLang = $('html').attr('lang');

		if(siteLang === 'ru-RU'){
			$('.ctcc-more-info-link').text('Узнать больше');
			$('#catapultCookie').text('Принимаю');
			document.querySelector('.ctcc-inner span').childNodes[0].nodeValue = 'Этот сайт использует куки. Продолжая браузер, вы принимаете нашу Политику конфиденциальности.';
		}
		if(siteLang === 'ro-RO'){
			$('.ctcc-more-info-link').text('Află mai mult');
			document.querySelector('.ctcc-inner span').childNodes[0].nodeValue = 'Acest site web utilizează cookie-uri. Continuând navigarea, acceptați Politica noastră de confidențialitate.';
		}
	};
	cookieLanguage();

	let removePlaceholderSearch = function () {
		$('.search-live input[type="text"].search-live-field').attr('placeholder', '');
	}
	removePlaceholderSearch();

	let backLink = function(){
		$('.back-link').click(function(e){
			e.preventDefault();

			if(document.referrer.indexOf(window.location.hostname) != -1){
				parent.history.back();
				return false;
			}
		});
	};
	backLink();
});

