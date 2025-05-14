<!DOCTYPE html>
<html lang="ja">

<head>
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
      j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-T29HZS9');
  </script>
  <!-- End Google Tag Manager -->

  <?php if (is_page('booking-thanks')) : ?>
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
  <?php endif; ?>

  <?php if (is_page('formthank') || is_page('booking-thanks') || is_page('questionnairethank')) : ?>
    <!-- Event snippet for 申し込みオンライン conversion page -->
    <script>
      gtag('event', 'conversion', {
        'send_to': 'AW-670616555/C3HiCLfmn8sBEOuX478C'
      });
    </script>
  <?php endif; ?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<?php
// ページIDとクラスの設定
$body_id = '';
$body_class = '';

if (is_home()) {
  $body_id = 'top';
  $body_class = 'top';
} elseif (is_404()) {
  $body_id = 'notfound';
  $body_class = 'notfound';
} elseif (is_page()) {
  $page_slug = get_post_field('post_name');
  $body_id = $page_slug;
  $body_class = $page_slug;
} elseif (is_single()) {
  $body_id = 'single';
  $body_class = 'single';
}

// オンラインページの特別処理
if (strpos($_SERVER["REQUEST_URI"], 'online') !== false || is_page('booking-form') || is_page('booking-thanks')) {
  $body_id = 'online';
  $body_class = 'online';
}
?>

<body id="<?php echo $body_id; ?>" class="<?php echo $body_class; ?>">
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T29HZS9" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- アクセス解析研究所 -->
  <script src="//accaii.com/galileosyaken/script.js" async></script>
  <noscript><img src="//accaii.com/galileosyaken/script?guid=on"></noscript>
  <!-- End アクセス解析研究所 -->

  <?php wp_body_open(); ?>
  <header class="p-header">
    <div class="p-header__top">
      <?php if (is_front_page()) : ?>
        <div class="p-header__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.webp" alt="<?php bloginfo('name'); ?>">
        </div>
      <?php else : ?>
        <a href="<?php echo home_url('/'); ?>" class="p-header__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.webp" alt="<?php bloginfo('name'); ?>">
        </a>
      <?php endif; ?>

      <p class="p-header__txt">車検なら、<br class="u-sp">年間10,000台の信頼と実績。<br>初めてでも安心・簡単、<br class="u-sp">デジタル車検「ガリレオ」。</p>

      <div class="p-header__btn">
        <span></span> <span></span> <span></span>
        <p>メニュー</p>
      </div>

      <ul class="p-header__conversion">
        <li><a href="<?php echo home_url('/online'); ?>">
            <img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/common/icon-calendar.webp" alt="">
            車検Web予約</a></li>
        <li><a href="<?php echo home_url('/simulator'); ?>">
            <img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/common/icon-simulator.webp" alt="">
            車検費用<br class="sp">シミュレーター</a></li>
        <li><a href="<?php echo home_url('/form'); ?>">
            <img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/common/icon-form.webp" alt="">
            お問い合わせ</a></li>
      </ul>
    </div>

    <div class="p-header__btm">
      <?php wp_nav_menu(array(
        'menu' => 'global_navigation',
        'container' => '',
        'container_id' => '',
        'container_class' => '',
        'menu_id' => '',
        'menu_class' => 'p-header__nav'
      )); ?>
    </div>
  </header>

  <main>
    <div class="p-drawer__bg"></div>