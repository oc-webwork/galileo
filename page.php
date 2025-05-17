<?php
/*
Template Name: 固定ページテンプレート
*/
get_header();
$url = $_SERVER["REQUEST_URI"];
?>
<!-- MVを表示 -->
<?php get_template_part('template-parts/subview'); ?>

<section class="p-online__outline">
  <div class="p-online">

    <?php if ((false !== strpos($url, 'online-')) || (is_page('booking-form')) || (is_page('booking-thanks'))) : ?>


      <section class="sec">
        <div class="inner-m">


          <?php if (!is_page("booking-thanks")) : ?>
            <div class="termsprivacy">
              <h2 class="termsprivacy__tit">利用規約および個人情報の取扱いについて</h2>
              <p class="termsprivacy__txt">本システムのご利用にあたりましては、<br class="u-sp">必ず利用規約および個人情報の取扱いをご覧ください。<br>
                ［ <a href="<?php echo home_url('/terms/'); ?>">利用規約</a> ] ［ <a href="https://www.net-keina.co.jp/privacy/" target="_blank">個人情報の取扱い</a> ] に同意する<br>
                ※なお、本システムでご予約いただきました場合は、<br class="u-sp">上記に同意いただけたものとします。</p>
            </div>
          <?php endif; ?>


          <div class="stepbar">
            <div class="list">
              <p class="list__tit">
                <span>店舗を<br class="u-sp">選ぶ</span>
              </p>
            </div>


            <div class="list

<?php if (false !== strpos($url, 'online-')) : ?>
	<?php if (false !== strpos($url, 'ymd')) : ?>
	<?php else : ?>
		current
	<?php endif; ?>
<?php endif; ?>

	">
              <p class="list__tit">
                <span>日にちを<br class="u-sp">選ぶ</span>
              </p>
            </div>

            <div class="list
<?php if (false !== strpos($url, 'online-')) : ?>
	<?php if (false !== strpos($url, 'ymd')) : ?>
		current
	<?php else : ?>
	<?php endif; ?>
<?php endif; ?>
		  ">
              <p class="list__tit">
                <span>時間を<br class="u-sp">選ぶ</span>
              </p>
            </div>
            <div class="list
	<?php if (is_page('booking-form')) : ?>
				current
	<?php endif; ?>
	">
              <p class="list__tit">
                <span>お客様<br class="u-sp">情報入力</span>
              </p>
            </div>
            <div class="list
	  <?php if (is_page("booking-thanks")) : ?>
		current
<?php endif; ?>">
              <p class="list__tit">
                <span>予約<br class="u-sp">完了</span>
              </p>
            </div>
          </div>
          <!--stepbar -->


          <?php if (!is_page("booking-thanks")) : ?>
            <div class="onlinereserver">
              <h2 class="onlinereserver__tit">

                <?php if (false !== strpos($url, 'online-')) : ?>
                  <?php if (false !== strpos($url, 'ymd')) : ?>
                    時間<?php else : ?>日にち<?php endif; ?>を選択してください。
                  <?php elseif (is_page('booking-form')) : ?>
                    <?php if (false !== strpos($url, 'utm')) : ?>
                      お客様情報を入力<?php else : ?>お客様情報を確認<?php endif; ?>してください。
                    <?php endif; ?>
              </h2>
              <p class="onlinereserver__read">※輸入車の車検には対応しておりません。<br class="u-sp">予めご了承ください。<br>※不正に改造された車両の車検はお断りいたします。
              </p>

              <?php if (false !== strpos($url, 'utm')) : ?>
                <div class="onlinereserver__setting">
                  <p class="onlinereserver__setting__txt">弊社からのメールが受信できるようになっているか、<br class="u-sp">受信設定をご確認の上お進みください。<br>
                    詳しくは、<a href="/mail-setup/">自動返信メールが届かないお客様へ</a>を<br class="u-sp">ご確認ください。<br>メールアドレス指定受信をされている場合は、<br class="u-sp">下記のメールアドレスを<br>あらかじめ受信指定に追加設定をお願いします。</p>
                  <p class="onlinereserver__setting__txt">
                    【オンライン予約：メールアドレス】galileo.syaken2020@gmail.com
                  </p>
                </div>
              <?php endif; ?>

            </div>
            <!-- onlinereserver -->
          <?php endif; ?>

          <?php if (is_page("booking-thanks")) : ?>
            <div class="thanks">
              <h2 class="thanks__tit">仮予約申し込みの完了</h2>
              <p class="thanks__txt">仮予約の受付が完了しました。<br>
                なお仮予約のため、ご予約は確定して<br class="u-sp">おりませんのでご注意ください。<br>
                確認のメールをお送りしましたので、<br class="u-sp">予約内容を必ずご確認ください。</p>
              <dl class="unsent">
                <dt>メールが届かないというお客様は<br class="u-sp">下記をご確認ください。</dt>
                <dd>・迷惑メールフォルダに入っている</dd>
                <dd>・メール防止フィルターによってはじかれている（携帯電話のアドレスご利用の方）</dd>
                <dd>・メールアドレスの間違い</dd>
                <dd>・セキュリティソフト、ウイルス対策ソフト、迷惑メール振り分けサービスの設定</dd>
              </dl>


              <?php echo do_shortcode('[contact-form-7 id="240" title="アンケート"]'); ?>


              <div class="btn btn--red"><a href="<?php echo home_url('/'); ?>"><span>トップページへ</span></a></div>
            </div>
          <?php endif; ?>


          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile;
          else : ?>
          <?php endif; ?>

          <?php if (strpos($url, 'online-')) : ?>
            <p class="onlinereserver__read">×印の場合でも、ご予約可能な場合がございますので、お問い合わせください。</p>
          <?php endif; ?>

          <?php
          $link_store = '/online/';
          $link_hb = 'javascript:history.back();';

          if (!(is_page("booking-thanks"))) : ?>

            <div class="btn--back">
              <a href="
              <?php if (false !== strpos($url, 'online-')) : ?>
                <?php if (false !== strpos($url, 'ymd')) : ?>
                  <?php echo $link_hb; ?>
                <?php else : ?>
                  <?php echo $link_store; ?>
                <?php endif; ?>
              <?php elseif (is_page('booking-form')) : ?>
                <?php if (false !== strpos($url, 'utm')) : ?>
                  <?php echo $link_hb; ?>
                <?php else : ?>
                  <?php echo $link_hb; ?>
                <?php endif; ?>
              <?php endif; ?>
          ">
                <span>
                  <?php if (false !== strpos($url, 'online-')) : ?>
                    <?php if (false !== strpos($url, 'ymd')) : ?>
                      日にち<?php else : ?>店舗<?php endif; ?>を選ぶに戻る
                    <?php elseif (is_page('booking-form')) : ?>
                      <?php if (false !== strpos($url, 'utm')) : ?>
                        時間を選ぶに戻る
                      <?php else : ?>
                        入力画面に戻る
                      <?php endif; ?>
                    <?php endif; ?>
                </span>
              </a>
            </div>
          <?php endif; ?>



          <?php wp_reset_query(); ?>
        </div>
      </section>
  </div>
</section>
<!-- sec01 -->
<!----------- オンライン予約ここまで -------------->


<?php else : ?>

  <!----------- その他ページここから -------------->
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile;
      else : ?>
  <?php endif; ?>


<?php endif; ?>
<!----------- その他ページここまで -------------->


<?php get_footer(); ?>