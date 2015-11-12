//トップスライド

$(function(){
  $('.slide_body').bxSlider({
    // nextSelector: '#slider-next',
    // prevSelector: '#slider-prev',
    // nextText: 'Onward →',
    // prevText: '← Go back',
    slideWidth: 1000,
    minSlides: 3,
    maxSlides: 3,
    moveSlides: 1,
    slideMargin: 0,
    // auto: true,
    // onSliderLoad:function(currentIndex){
    //   $('.slide').removeClass('active');
    //   $('.slide_body > div:nth-child(3n-1)').addClass('active');
    // },
    // onSlideBefore: function($slideElement, oldIndex, newIndex){
    //   var new_i = newIndex%3 - 1;
    //   var nth = (new_i < 0) ? '3n-1' : '3n'+new_i;
    //   $('.slide').removeClass('active');
    //   $('.slide_body > div:nth-child('+nth+')').addClass('active');
    // }
  });
});

$(function(){
  $('.bxslider').bxSlider({
    auto: true
  });
});

//ページトップ
$(function() {
    var topBtn = $('.pagetop');
    topBtn.hide();
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});

//SPハンバーガーメニュー
$(function() {
  $(".menu-trigger").click(function () {
    $(this).toggleClass("active");
    $(".menu_box").slideToggle();
  });
});

//SPメニュー
$(document).ready(function(){
  $(".attention_menu h2").click(function(){
  $(".attention_menu ul").slideToggle();
  });
  $(".search_sp h2").click(function(){
  $(".search_sp form").slideToggle();
  });
});
