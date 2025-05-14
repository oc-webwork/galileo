<div class="p-cont-video">
  <article class="p-cont-video__inner">

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

        <h2 class="p-cont-video__ttl"><?php the_title(); ?></h2>

        <?php
        $img_pc_url = THEME_DIR_URI . 'common/no-image.webp';
        $img_sp_url = THEME_DIR_URI . 'common/no-image.webp';
        if (get_field('about-cpt-manga-img-pc')) {
          $img_pc_url = get_field('about-cpt-manga-img-pc');
        }
        if (get_field('about-cpt-manga-img-sp')) {
          $img_sp_url = get_field('about-cpt-manga-img-sp');
        }
        ?>
        <picture>
          <source media="(min-width: 834px)" srcset="<?php echo $img_pc_url; ?>">
          <img src="<?php echo $img_sp_url; ?>" alt="<?php the_title(); ?>">
        </picture>

      <?php endwhile; ?>
    <?php endif; ?>

    <?php
    // ページネーションの呼び出し
    get_template_part('template-parts/manga-pagination');
    ?>

    <div class="p-tab-box__btn-box">
      <a class="c-btn" href="<?php echo home_url() . '/treatment/familiarize/'; ?>">一覧を見る　<i class="fas fa-angle-right"></i></a>
    </div>

    <section class="p-cont-video__cat-box -manga">
      <h3 class="p-cont-video__h2">マンガ｜ 認知処理療法応援マンガ</h3>
      <div>
        <p>CPTについて興味があり、概要を知りたい方向けのマンガです。CPTのセッションでよく取り上げられているテーマが描かれています。<br>（監修：久留米大学　大江美佐里先生）</p>
        <p><a href="https://neuropsy-kurume.jp/production" target="_blank" class="u-orange-marker">応援マンガダウンロード：久留米大学 心理教育テキスト <i class="fa-regular fa-window-restore"></i></a></p>
      </div>
    </section>

  </article>
</div>