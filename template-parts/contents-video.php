<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="p-cont-video">
      <article class="p-cont-video__inner">

        <h2 class="p-cont-video__ttl">
          <?php
          if (get_field('about-cpt-video-ttl')):
            the_field('about-cpt-video-ttl');
          endif;
          ?>
        </h2>

        <?php if (get_field('about-cpt-video-movie')): ?>
          <div class="p-cont-video__frame">
            <iframe
              src="https://www.youtube.com/embed/<?php the_field('about-cpt-video-movie'); ?>?rel=0&cc_load_policy=1&hl=ja"
              frameborder="0"
              allow="autoplay; encrypted-media"
              allowfullscreen>
            </iframe>
          </div>
        <?php endif; ?>
        <p class="p-cont-video__att">自動翻訳の日本語を設定するには、動画の設定アイコンをクリックし、<br class="u-sp">字幕から「自動翻訳」で日本語を選択してください。</p>
        <div class="p-cont-video__txt">
          <p>
            <?php
            if (get_field('about-cpt-video-txt')):
              the_field('about-cpt-video-txt');
            endif;
            ?>
          </p>
        </div>

        <?php
        $terms = get_the_terms($post->ID, 'documents-cat');
        if ($terms) :
          foreach ($terms as $term) :
        ?>
            <section class="p-cont-video__cat-box">
              <h3 class="p-cont-video__h2"><?php echo $term->name; ?></h3>
              <div>
                <?php echo term_description($term->term_id, 'documents-cat'); ?>
              </div>
            </section>
        <?php
          endforeach;
        endif;
        ?>

      </article>
      <div class="p-tab-box__btn-box">
        <a class="c-btn" href="<?php echo home_url() . '/treatment/familiarize/'; ?>">一覧を見る　<i class="fas fa-angle-right"></i></a>
      </div>
      <section class="p-cont-video__cat-box">
        <h3 class="p-cont-video__h2">ビデオ｜CPT Whiteboard Video Library</h3>
        <div>
          <p><a href="https://cptforptsd.com/" target="_blank" class="u-orange-marker">CPTのオフィシャルサイト <i class="fa-regular fa-window-restore"></i></a>で紹介されている教材です。<br>CPTへのとり組みを助ける心理教育の内容を、動画で紹介しています。<br>本サイトでは、運営元の許諾を得て、日本の視聴者が字幕付きで動画を見られるようにしています。</p>
        </div>
      </section>
    </div>
  <?php endwhile; ?>
<?php endif; ?>