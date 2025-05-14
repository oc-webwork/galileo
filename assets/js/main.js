/*jslint node: true */
'use strict';
jQuery(function ($) {
  //現在のページURLのハッシュ部分を取得
  const hash = location.hash;
  //ハッシュ部分がある場合の条件分岐
  if (hash) {
    if ($(hash).length > 0) {
      //ページ遷移後のスクロール位置指定
      $('html, body').stop().scrollTop(0);
      $(window).on('load', function () {
        //リンク先を取得
        const target = $(hash);
        //リンク先までの距離を取得
        const scrollPosition = target.offset().top - $('header').innerHeight();
        $('html, body').animate({
          scrollTop: scrollPosition
        }, 500, 'swing');
        return false;
      });
    }
  }
  //ページ内移動
  $('a[href^="#"]').not('a.js-modal-button-target').click(function () {
    var href = $(this).attr('href'),
      target = $(href === "#" || href === "" ? 'html' : href);
    $('body,html').animate({
      scrollTop: target.offset().top - $('header').innerHeight()
    }, 500, 'swing');
    return false;
  });
});

/* ドロワー
------------------------------------- */
var header = jQuery('.p-header');
var headerpBtn = jQuery('.p-header__btn');
var drawer = jQuery('.p-header__btm');
var drawer__bg = jQuery('.p-drawer__bg');
////三本線ボタン
headerpBtn.click(function () {
  //ヘッダーの背景の表示切り替え
  jQuery(this).parents().find(header).toggleClass('active');

  //ナビゲーションを表示/非表示
  jQuery(this).parents().find(drawer).toggleClass('show');

  //ボタンの表示切り替え
  jQuery(this).toggleClass('active');

  //背景色を表示/非表示
  jQuery(this).parents().find(drawer__bg).toggleClass('show');


});


/* コンバージョン（SP版）
------------------------------------- */
if (window.matchMedia('screen and (max-width:1025px)').matches) {
  $(document).ready(function () {
    var viewheight = $('body').height();
    var $conversion = $(".p-conversion");
    var $footer = $("footer");
    var $footerOutline = $(".p-footer__outline");
    var isScrolling = false;

    // 初期状態の設定
    $conversion.css({
      "position": "absolute",
      "bottom": "644.219px",
      "display": "none"
    });

    if (viewheight > 1000) {
      // スクロールイベントの最適化
      $(window).on("scroll", function () {
        if (!isScrolling) {
          window.requestAnimationFrame(function () {
            handleScroll();
            isScrolling = false;
          });
          isScrolling = true;
        }
      });

      function handleScroll() {
        var scrollTop = $(window).scrollTop();
        var windowHeight = $(window).height();
        var documentHeight = $(document).height();
        var footerOffset = $footer.offset().top;
        var conversionHeight = $conversion.outerHeight();
        var conversionOffset = $conversion.offset().top;
        var footerOutlineOffset = $footerOutline.offset().top;

        // フッターのアウトラインが画面内に入ったかどうかの判定
        var isFooterOutlineInView = scrollTop + windowHeight >= footerOutlineOffset;

        // フッターとの重なり判定
        var isOverFooter = scrollTop + windowHeight + conversionHeight > footerOffset;
        // コンバージョン要素の設置位置判定
        var isAtConversionPosition = scrollTop + windowHeight >= conversionOffset;

        if (isFooterOutlineInView) {
          $conversion.css({
            "position": "inherit",
            "display": "flex"
          });
        } else if (scrollTop > 100 && !isOverFooter && isAtConversionPosition) {
          $conversion.css({
            "position": "fixed",
            "bottom": "0",
            "display": "flex"
          });
        } else if (isOverFooter) {
          $conversion.css({
            "position": "absolute",
            "bottom": (documentHeight - footerOffset) + "px",
            "display": "none"
          });
        } else {
          $conversion.css({
            "position": "absolute",
            "bottom": "0",
            "display": "none"
          });
        }
      }
    } else {
      $conversion.css({
        "position": "absolute",
        "bottom": "0",
        "display": "flex"
      });
    }
  });
}