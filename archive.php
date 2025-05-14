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
    <ul class="p-news-col__list -archive">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <li><a href="<?php the_permalink(); ?>">
              <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
              <p><?php the_title(); ?></p>
            </a></li>
        <?php endwhile; ?>
      <?php endif; ?>
    </ul>

    <div class="p-wp-pagination">
      <?php
      $args = array(
        'mid_size' => 1,
        'prev_text' => '<i class="fas fa-angle-left"></i>',
        'next_text' => '<i class="fas fa-angle-right"></i>',
        'screen_reader_text' => ' ',
      );
      the_posts_pagination($args);
      ?>
    </div>

  </div>
</div>
<?php get_footer(); ?>