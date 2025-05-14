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

  <div class="l-base p-column-arch">
    <article class="p-tab-box">
      <?php
      // スマホでのカテゴリ表示 START
      ?>
      <div class="u-sp">
        <?php
        // 各カテゴリの横幅の設定：
        // 文字数に関わらず全て同じ長さ→-fixed-width
        // 文字列に合わせた長さ→-fixed-padding
        // 「トラウマとは(about-trauma)」のように1列に全て収めたい場合→js-fit（JS側で幅を設定してもらう）
        ?>
        <ul class="p-tab-box__tab-list -fixed-width">
          <li class="active" data-target="all">ALL</li>
          <?php
          // カスタムフィールドの選択肢を取得
          $cat_list_field = get_field_object('column-cat');
          $cat_list = $cat_list_field['choices'];
          // 1列に3個表示させるため、表示用の配列を用意
          $rest_cat_list = $cat_list;

          $counter = 0; // ループ回数カウンター
          foreach ($cat_list as $key => $value) :
          ?>
            <li data-target="<?php echo $key; ?>"><?php echo $value; ?></li>
          <?php
            $counter++;
            array_shift($rest_cat_list); // 出力した先頭の要素を削除
            if ($counter == 2) {
              break; //  2つめまで出力したら終了
            }
          endforeach
          ?>
        </ul>

        <?php
        // スマホ：カテゴリが3つ以上の場合、1列に3個ずつ表示
        if ($rest_cat_list):
          $cat_list =  $rest_cat_list;
          $counter = 0; // ループ回数カウンター
          foreach ($cat_list as $key => $value) : ?>
            <?php if ($counter % 3 == 0): ?>
              <ul class="p-tab-box__tab-list -fixed-width">
              <?php endif; ?>
              <li data-target="<?php echo $key; ?>"><?php echo $value; ?></li>
              <?php if ($counter % 3 == 2): ?>
              </ul>
            <?php endif; ?>
        <?php
            $counter++;
          endforeach;
        endif; ?>
      </div>
      <?php
      // スマホでのカテゴリ表示 END
      ?>
      <?php
      // PCでのカテゴリ表示 START
      ?>
      <div class="u-pc">
        <?php
        // 各カテゴリの横幅の設定：
        // 文字数に関わらず全て同じ長さ→-fixed-width
        // 文字列に合わせた長さ→-fixed-padding
        // 「トラウマとは(about-trauma)」のように1列に全て収めたい場合→js-fit（JS側で幅を設定してもらう）
        ?>
        <ul class="p-tab-box__tab-list -fixed-width">
          <li class="active" data-target="all">ALL</li>
          <?php
          // カスタムフィールドの選択肢を取得
          foreach ($cat_list_field['choices'] as $key => $value) :
          ?>
            <li data-target="<?php echo $key; ?>"><?php echo $value; ?></li>
          <?php endforeach ?>
        </ul>
      </div>
      <?php
      // PCでのカテゴリ表示 END
      ?>

      <div class="p-tab-box__wrapper">

        <div class="p-tab-box__item active" data-targetTag="all">
          <section class="p-tab-box__inner">

            <ul class="p-doc-list -column">
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                  <?php
                  // 表示切り替え用に、属するカテゴリをCSSに追加
                  $target = get_field('column-cat');
                  $add_class = $target['value'];
                  ?>
                  <li class="<?php echo $add_class; ?>"><a href="<?php the_permalink(); ?>">
                      <?php
                      $img_url = THEME_DIR_URI . 'common/no-image.webp';
                      if (get_field('column-list-thumb')) {
                        $img_url = get_field('column-list-thumb');
                      }
                      ?>
                      <img src="<?php echo $img_url; ?>" alt="">
                      <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                      <p><?php the_field('column-list-txt'); ?></p>
                    </a></li>
                <?php endwhile; ?>
              <?php endif; ?>
            </ul>

          </section>
        </div>

      </div>

    </article>
  </div>
</div>
<?php get_footer(); ?>