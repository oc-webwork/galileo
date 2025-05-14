<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="p-cont-others">
      <article class="p-cont-others__inner">

        <h2 class="p-cont-others__ttl">
          <?php
          if (get_field('about-cpt-booklet-ttl')):
            the_field('about-cpt-booklet-ttl');
          elseif (get_field('about-cpt-books-ttl')):
            the_field('about-cpt-books-ttl');
          elseif (get_field('about-cpt-workbook-ttl')):
            the_field('about-cpt-workbook-ttl');
          endif;
          ?>
        </h2>

        <?php
        $img_url = THEME_DIR_URI . 'common/no-image.webp';
        if (get_field('about-cpt-list-thumb')) {
          $img_url = get_field('about-cpt-list-thumb');
        }
        ?>
        <img src="<?php echo $img_url; ?>" alt="<?php the_title(); ?>" class="p-cont-others__img">

        <div class="p-cont-others__txt">
          <p>
            <?php
            if (get_field('about-cpt-booklet-txt')):
              the_field('about-cpt-booklet-txt');
            elseif (get_field('about-cpt-books-txt')):
              the_field('about-cpt-books-txt');
            elseif (get_field('about-cpt-workbook-txt')):
              the_field('about-cpt-workbook-txt');
            endif;
            ?>
          </p>
        </div>

        <div class="p-cont-others__btn">
          <?php
          if (get_field('about-cpt-booklet-pdf')):
          ?>
            <a href="<?php the_field('about-cpt-booklet-pdf'); ?>" target="_blank" class="c-btn -brown-rev">小冊子ダウンロード　<i class="fa-regular fa-file-pdf"></i></a>
          <?php
          elseif (get_field('about-cpt-books-link')):
          ?>
            <a href="<?php the_field('about-cpt-books-link'); ?>" target="_blank" class="c-btn -brown-rev">出版社サイトへ　<i class="fa-regular fa-window-restore"></i></a>
          <?php
          elseif (get_field('about-cpt-workbook-pdf')):
          ?>
            <a href="<?php the_field('about-cpt-workbook-pdf'); ?>" target="_blank" class="c-btn -brown-rev">ワークシートダウンロード　<i class="fa-regular fa-file-pdf"></i></a>
          <?php endif; ?>
        </div>

      </article>
      <div class="p-tab-box__btn-box">
        <a class="c-btn" href="<?php echo home_url() . '/treatment/familiarize/'; ?>">一覧を見る　<i class="fas fa-angle-right"></i></a>
      </div>
    </div>

  <?php endwhile; ?>
<?php endif; ?>