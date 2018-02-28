jQuery(document).ready(function() {
  // подмена картинок в типе техники
  jQuery('.type__item').hover(
    function() {
      var hoverImg = jQuery(this).find('.type__img').attr('data-hover-img');
      jQuery(this).find('.type__img').attr('src', '/img/' + hoverImg + '.png');
    },
    function() {
      var unhoverImg = jQuery(this).find('.type__img').attr('data-unhover-img');
      jQuery(this).find('.type__img').attr('src', '/img/' + unhoverImg + '.png');
    });
  // подмена картинок в типе услуг
  jQuery('.service-card').hover(
    function() {
      var hoverImg = jQuery(this).find('.service-card__img').attr('data-hover-img');
      jQuery(this).find('.service-card__img').attr('data-hover-img');
      jQuery(this).find('.service-card__img').attr('src', '/img/' + hoverImg + '.png');
    },
    function() {
      var unhoverImg = jQuery(this).find('.service-card__img').attr('data-unhover-img');
      jQuery(this).find('.service-card__img').attr('data-unhover-img');
      jQuery(this).find('.service-card__img').attr('src', '/img/' + unhoverImg + '.png');
    });

  jQuery('.page-header__burger-wrapper').on('click', function() {
    jQuery(this).find('.page-header__burger').toggleClass('page-header__burger--active');
    jQuery('.main-menu').slideToggle(300);
    jQuery('.submenu').fadeOut(300);
    jQuery('.main-menu__marker').removeClass('main-menu__marker--active');
  });

  jQuery('.main-menu__marker').on('click', function() {
    jQuery(this).siblings('.submenu').slideToggle(300);
    jQuery(this).toggleClass('main-menu__marker--active');
  });

  jQuery(function() {
    jQuery("a[href*='#*']").bind('click', function() {
      var _href = jQuery(this).attr("href");
      jQuery("html, body").animate({
        scrollTop: jQuery(_href).offset().top + "px"
      }, 800);
      return false;
    });
  });


	jQuery(function($){
		$("#phone").mask("+7 (999) 999-9999");
	});

  function menuHideShow() {
    var windowsWidth = jQuery(window).width();
    if (windowsWidth > 768) {
      jQuery('.main-menu').fadeIn(300);
      jQuery('.page-header__burger').removeClass('page-header__burger--active');
    }
  };

  jQuery(document).ready(menuHideShow);
  jQuery(document).scroll(menuHideShow);
  jQuery(window).resize(menuHideShow);

  jQuery('.contacts__link').on('click', function(e) {
    e.preventDefault();
    var activeLink = jQuery(this).hasClass('contacts__link--active');
    if (activeLink == true) {
      var mapScroll = jQuery('#map_wrapper').offset().top - 50;
      jQuery("html, body").animate({
        scrollTop: mapScroll + "px"
      }, 800);
      return false;
    } else {
      var mapLink = jQuery(this).attr('href');
      jQuery('.contacts__link').removeClass('contacts__link--active');
      jQuery(this).addClass('contacts__link--active');
      jQuery('#map_wrapper').attr('src', mapLink);
      var mapScroll = jQuery('#map_wrapper').offset().top - 50;
      jQuery("html, body").animate({
        scrollTop: mapScroll + "px"
      }, 800);
      return false;
    }
  });

  jQuery('.catalog-filter__sticker').on('click', function() {
    var filter_position = parseInt(jQuery('.catalog-filter').css('left'));
    if (filter_position != 0) {
      jQuery('.catalog-filter').animate({
        left: "0px"
      }, 500);
    } else {
      jQuery('.catalog-filter').animate({
        left: "-220px"
      }, 500);
    }
  });

  jQuery('.gallery__nav').on('click', function() {
    var navImageSrc = jQuery(this).attr('src');
    jQuery('.gallery__big').attr('src', navImageSrc);
  });

  jQuery('.pagination').on('click', function() {
    jQuery("html, body").animate({
      scrollTop: "0px"
    }, 1000);
  });


  jQuery('.btn_popup').on('click',function(){
    jQuery('.feedback-form').fadeIn(300);
    jQuery('.feedback-form__bgr-mask').fadeIn(300);
  });
  jQuery('.feedback-form__bgr-mask').on('click',function(){
    jQuery('.feedback-form').fadeOut(300);
    jQuery('.feedback-form__bgr-mask').fadeOut(300);
  });


});
