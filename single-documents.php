<?php
get_header();
?>

<?php
// メインビューをテンプレート化。
// 表示内容はtenplate-parts/mainview.phpにて設定
get_template_part('template-parts/mainview');
?>

<div class="u-bg-orange-gray">
  <?php
  // パンくずリスト
  get_template_part('template-parts/breadcrumb');
  ?>
  <div class="l-base">

    <?php

    // カスタムフィールドに登録したカテゴリごとに表示内容を変更
    $cat = get_field('about-cpt-cat');
    switch ($cat['value']) {
      case 'manga':
        get_template_part('template-parts/contents-manga');
        break;
      case 'video':
        get_template_part('template-parts/contents-video');
        break;
      default:
        get_template_part('template-parts/contents-others');
    }

    ?>

  </div>

</div>

<?php get_footer(); ?>