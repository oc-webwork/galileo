<?php get_header(); ?>


    <section class="sec inner-n">

      <div class="box">
        <div class="box__txt">
          <p>お探しのページは<br>見つかりませんでした</p>
          <p>このページは一時的にアクセスができない状況にあるか、<br>URLが変更・削除された可能性がございます。</p>
        </div>
        <div class="box__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/1x/notfound_img01.png" alt="">
        </div>
      </div>

      <div class="btn--back">
        <a href="<?php echo home_url('/'); ?>">トップページへ</a>
      </div>
    </section>
    
    <?php get_footer(); ?>