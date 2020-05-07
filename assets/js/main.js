$(document).ready(function()
{
  var mainSwiper = new Swiper('.main-swiper', {
    speed: 1000,
    direction: 'vertical',
    simulateTouch: false,
    keyboardControl: true,
    slidesPerView: 1,
    paginationClickable: true,
    spaceBetween: 0,
    mousewheelControl: true,
    onSlideChangeStart: function() {
      $('.nav-btn').removeClass('active');
      $('li[nav-index='+mainSwiper.activeIndex+']').addClass('active');
    }
  });
  $('.nav-btn').on('click', function() {
    mainSwiper.slideTo($(this).index() + 1);
    $('.nav-btn').removeClass('active');
    $('li[nav-index='+$(this).attr('nav-index')+']').addClass('active');
    $(this).addClass('active');
  });
  $('.favicon').on('click', function(e) {
    e.preventDefault();
    mainSwiper.slideTo(0);
  });
  $('.main-switcher').on('click', function() {
    mainSwiper.slideTo($(this).attr('data-index'));
  });
  var aboutSwiper = new Swiper('.about-us-swiper', {
    speed: 1000,
    pagination: '.about-us-pagination',
    direction: 'horizontal',
    simulateTouch: false,
    keyboardControl: true,
    slidesPerView: 1,
    paginationClickable: true,
    spaceBetween: 0,
    nextButton: '.about-after',
    prevButton: '.about-before',
  });
  $('.about-us-switcher').on('click', function() {
    aboutSwiper.slideTo($(this).attr('data-index'));
  });
  var stepsSwiper = new Swiper('.steps-swiper', {
    speed: 1000,
    direction: 'horizontal',
    simulateTouch: false,
    keyboardControl: true,
    slidesPerView: 1,
    paginationClickable: true,
    spaceBetween: 0,
  });
  $('.steps-switcher').on('click', function() {
    stepsSwiper.slideTo($(this).attr('data-index'));
  });
  var newstepsSwiper = new Swiper('.newsteps-swiper', {
    speed: 1000,
    direction: 'horizontal',
    simulateTouch: false,
    keyboardControl: true,
    slidesPerView: 1,
    paginationClickable: true,
    spaceBetween: 0,
  });
  $('.newsteps-switcher').on('click', function() {
    newstepsSwiper.slideTo($(this).attr('data-index'));
  });
  $(".dynamic-msg").typed({
    strings: [
  		'Muito mais que<br> uma <span class="bolder">agência</span>.'
  	],
  	backDelay: 2000,
  	typeSpeed: 0,
  	showCursor: false,
  	onStringTyped: function() {},
  });
});
