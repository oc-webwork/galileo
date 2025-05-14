<?php
get_header();
?>

<?php
// サブビューをテンプレート化。
// 表示内容はtenplate-parts/subview.phpにて設定
get_template_part('template-parts/subview');
?>

<div class="u-bg-orange-gray">
  <?php
  // パンくずリスト
  get_template_part('template-parts/breadcrumb');
  ?>

  <div class="l-base">
    <div class="p-single-news">

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="p-single-news__contents">
            <h1><?php the_title(); ?></h1>
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php endif; ?>
            <?php if (get_field('column-list-thumb')): ?>
              <img src="<?php the_field('column-list-thumb'); ?>" alt="" class="">
            <?php endif; ?>
            <?php the_content(); ?>
          </div>
          <div class="p-tab-box__btn-box">
            <a href="<?php echo is_singular("column") ? '../' : '../news'; ?>" class="c-btn">一覧を見る　<i class="fas fa-angle-right"></i></a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>