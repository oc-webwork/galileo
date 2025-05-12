<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
  <link rel="icon" href="<?php echo do_shortcode('[tp]'); ?>/favicon.png" sizes="32x32">
  <link rel="icon" href="<?php echo do_shortcode('[tp]'); ?>/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?php echo do_shortcode('[tp]'); ?>/apple-touch-icon.png">
  <meta name="msapplication-TileImage" content="<?php echo do_shortcode('[tp]'); ?>/favicon.png">
  <meta name="thumbnail" content="<?php echo do_shortcode('[tp]'); ?>/favicon.png" />
  <!-- jQuery読み込み -->
  <!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">

  <!-- WEBフォント -->
  <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
  <!-- IE11でpicture要素を使用させるためのスクリプト -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/picturefill.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-B-FcOhPo1CwUiIc6c_5HxuUtnE6hQ2Y"></script>


  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600&display=swap" rel="stylesheet">


  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-T29HZS9');
  </script>
  <!-- End Google Tag Manager -->
<!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NPF766XN');</script>
  <!-- End Google Tag Manager -->
  <?php
  if (is_page('booking-thanks')) : ?>
    <!-- コンバージョン測定タグ -->
    <script async>
      ytag({
        "type": "yss_conversion",
        "config": {
          "yahoo_conversion_id": "1001112755",
          "yahoo_conversion_label": "5uGGCKvv4_cBEPqB9L8C",
          "yahoo_conversion_value": "10000"
        }
      });
    </script>
    <!-- /コンバージョン測定タグ -->
  <?php endif; ?>

  <?php
  if (is_page('formthank') || is_page('booking-thanks') || is_page('questionnairethank')) : ?>
    <!-- Event snippet for 申し込みオンライン conversion page -->
    <script>
      gtag('event', 'conversion', {
        'send_to': 'AW-670616555/C3HiCLfmn8sBEOuX478C'
      });
    </script>
  <?php endif; ?>

  <?php wp_head(); ?>
</head>

<?php
$url = $_SERVER["REQUEST_URI"];
$topurl = "";
$abouturl = "";

if (is_home()) {
  $body_id = 'top';
  $body_class = 'top';
} elseif (is_404()) {
  $body_id = 'notfound';
  $body_class = 'notfound';
} elseif (is_page('about')) {
  $body_id = 'about';
  $body_class = 'about';
} elseif (is_page('form') || is_page('form2') || is_page('formthank') || is_page('questionnairethank')) {
  $body_id = 'contact';
  $body_class = 'contact';
} elseif (is_page('information')) {
  $body_id = 'information';
  $body_class = 'information';
} elseif (is_page('simulator')) {
  $body_id = 'simulator';
  $body_class = 'simulator';
} elseif (is_page('store')) {
  $body_id = 'store';
  $body_class = 'store';
} elseif (is_page('flow')) {
  $body_id = 'flow';
  $body_class = 'flow';
} elseif (is_page('lp')) {
  $body_id = 'lp';
  $body_class = 'lp';
} elseif ((false !== strpos($url, 'online')) || (is_page('booking-form')) || (is_page('booking-thanks'))) {
  $body_id = 'online';
  $body_class = 'online';
} elseif (is_page('mail-setup')) {
  $body_id = 'mail-setup';
  $body_class = 'mail-setup';
} elseif (is_page('terms')) {
  $body_id = 'terms';
  $body_class = 'terms';
} elseif (is_page('price')) {
  $body_id = 'price';
  $body_class = 'price';
} elseif (is_page('maintenance')) {
  $body_id = 'maintenance';
  $body_class = 'maintenance';
} elseif (is_page('reason')) {
  $body_id = 'reason';
  $body_class = 'reason';
} elseif (is_single()) {
  $body_id = 'single';
  $body_class = 'single';
} else {
  $body_id = '';
  $body_class = '';
}

if (!(is_home())) {
  $topurl = home_url('/');
} else {
}

if (!(is_page("about"))) {
  $abouturl = home_url('/about/');
} else {
}

?>

<body id="<?php echo $body_id; ?>" class="<?php echo $body_class; ?>">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T29HZS9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPF766XN"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- アクセス解析研究所 -->
  <script src="//accaii.com/galileosyaken/script.js" async></script><noscript><img src="//accaii.com/galileosyaken/script?guid=on"></noscript>
  <!-- End アクセス解析研究所 -->
  <header class="p-header">
    <div class="inner-w p-header__top">
      <?php if (is_front_page()) : ?>
        <h1 class="p-header__logo">
        <?php else : ?>
          <a href="<?php echo home_url('/'); ?>" class="p-header__logo">
          <?php endif; ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/1x/logo.png" alt="デジタル車検 ガリレオ">
          <?php if (is_front_page()) : ?>
        </h1>
      <?php else : ?>
        </a>
      <?php endif; ?>

      <p class="p-header__txt">車検なら、<br class="sp">
        年間10,000台の信頼と実績。<br>
        初めてでも安心・簡単、<br class="sp">
        デジタル車検「ガリレオ」。</p>

      <div class="p-header__btn">
        <span></span> <span></span> <span></span>
        <p>メニュー</p>
      </div>
      <ul class="p-header__conversion">
        <li>
          <a href="<?php echo home_url('/online/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/conversion_icon01.svg" alt="">
          </a>
        </li>
        <li>
          <a href="<?php echo home_url('/simulator/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/conversion_icon02.svg" alt="">
          </a>
        </li>
        <li>
          <a href="<?php echo home_url('/form/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/conversion_icon03.svg" alt="">
          </a>
        </li>
      </ul>

    </div>
    <div class="inner-w p-header__btm">
      <div class="inner-w">
        <?php wp_nav_menu(
          array(
            'menu'  => 'global_navigation', //メニュー管理画面で登録したメニュー名
            'container' => '',
            'container_id' => '',
            'container_class' => '',
            'menu_id' => '',
            'menu_class' => 'p-header__nav'
          )
        ); ?>
      </div>
    </div>

  </header>

  <main>
    <div class="p-drawer__bg"></div>