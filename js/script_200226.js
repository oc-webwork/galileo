/* ドロワーメニュー
------------------------------------- */
$(function() {
  $('.menubtn').on('click', function() {
    console.log(2);

    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $('.menu').slideUp();
    } else {
      $(this).addClass('active');
      $('.menu').slideDown();
    }
  });
});

/* ドロワーメニュー 画面内遷移
------------------------------------- */
$(function() {
  $('header .menu ul li a[href^="#"]').on('click', function() {

    $('.menubtn').removeClass('active');
    $('.menu').slideUp();
  });
});


/* スクーズスクロール
------------------------------------- */
$(function() {
  // $('a[href^="#"]').on('click', function() {
  $('a[href^="#"]').on('click', function() {

      var scval;
      console.log(1);
      if ($('header').hasClass('is-animation')) {
        scval = 100;
      } else {
        scval = 200;
      }
      var speed = 400;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top - scval;
      $('body,html').animate({
        scrollTop: position
      }, speed, 'swing');
      return false;
  });
});




/* 料金案内タブ
------------------------------------- */
$(function() {
  //初期表示時はエコを表示させる
  // $('.sec03 .tags li:first-child button').prop('disabled', true);
  // $('.sec03 .tags li:first-child button').addClass('active');
  // $('.sec03 .price>div:first-child').addClass('active');

  $('.sec03 .tags li button').click(function() {

    //filtering
    var className = $(this).attr('class');
    var pricetable = ".sec03 .price div";

    //tag
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $(this).prop('disabled', false);

    } else {

      $('.sec03 .tags li button').prop('disabled', false);
      $('.sec03 .tags li button').removeClass('active');
      $(this).prop('disabled', true);
      $(this).addClass('active');
    }

    $(pricetable).removeClass('active');
    $(pricetable).removeClass('hide');

    //料金表
    $(pricetable).each(function(i) {
      if ($(pricetable).hasClass(className)) {
        $(pricetable + '.' + className).addClass('active');
        $(pricetable + '.' + className).removeClass('hide');
      } else if ($(pricetable).not(className)) {
        $(pricetable + '.' + className).addClass('hide');
        $(pricetable + '.' + className).removeClass('active');
      }
    });


  });
});


/* ナビゲーション形式変更
------------------------------------- */
//ナビゲーションリサイズ
$(function() {
  var $win = $(window),
    $header = $('header'),
    animationClass = 'is-animation';
  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if (value > 30) {
      $header.addClass(animationClass);
    } else {
      $header.removeClass(animationClass);
    }
  });
});


/* コンバージョン（SP版）
------------------------------------- */

if (window.matchMedia('screen and (max-width:991px)').matches) {

  $(document).ready(function() {
    $(".conversion").hide();

    $(window).on("scroll", function() {
      if ($(this).scrollTop() > 100) {
        $(".conversion").fadeIn("fast");
      } else {
        $(".conversion").fadeOut("fast");
      }
      scrollHeight = $(document).height(); //ドキュメントの高さ
      scrollPosition = $(window).height() + $(window).scrollTop(); //現在地
      footHeight = $("footer").innerHeight(); //footerの高さ（＝止めたい位置）
      if (scrollHeight - scrollPosition <= footHeight) { //ドキュメントの高さと現在地の差がfooterの高さ以下になったら
        $(".conversion").css({
          "position": "inherit", //pisitionをabsolute（親：wrapperからの絶対値）に変更
          "bottom": 0 //下からfooterの高さ + 20px上げた位置に配置
        });
      } else { //それ以外の場合は
        $(".conversion").css({
          "position": "fixed", //固定表示
          "bottom": "0" //下から20px上げた位置に
        });
      }
    });

  });
}
