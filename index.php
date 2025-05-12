<?php get_header(); ?>

<section class="mv">
    <div class="mv__wrap">
        <h1>
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo do_shortcode('[tp]'); ?>/images/2x/top_mv_img.png">
                <img src="<?php echo do_shortcode('[tp]'); ?>/images/2x/top_mv_img_sp.png" alt="安い！早い！安心！ガリレオ車検">
            </picture>
        </h1>
    </div>
</section>
<!-- eyecatch -->

<section class="course">
    <div class="course__wrap">
        <h2 class="course__ttl">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/top_course_ttl01.png" />
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/top_course_ttl01_sp.png" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/top_course_ttl01_sp.png" alt="ガリレオ車検は選べる2コース" />
            </picture>
        </h2>
        <div>
            <a href="<?php echo home_url('/price/#quick'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/2x/top_course_img01.png" alt="クイック車検コース 39,490円〜" /></a>
            <a href="<?php echo home_url('/price/#premium'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/2x/top_course_img02.png" alt="プレミアム車検コース 38,490円〜" /></a>
            <a href="<?php echo home_url('/simulator/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/2x/top_course_img03.png" alt="あなたのクルマはいくら？ 簡単見積もり!車検費用シミュレーターはこちら" /></a>
        </div>
    </div>
    <div class="course__btnbox">
        <div>
            <div class="btn btn--red2 btn--r course__btn">
                <a href="<?php echo home_url('/online/'); ?>"><span>今すぐオンライン予約！</span></a>
            </div>

            <div class="btn btn--blue2 btn--r course__btn">
                <a href="<?php echo home_url('/maintenance/'); ?>"><span>車検以外のおすすめ<br>整備メニューはこちら</span></a>
            </div>
        </div>
    </div>
</section>
<!-- course -->


<section class="cause">
    <h2 class="top__ttl">
        ガリレオ車検が<br class="sp"><span>選ばれる<em>6</em>つの理由</span>
    </h2>
    <div class="cause__wrap">
        <h3 class="cause__ttl">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/top_cause_ttl.png" />
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/top_cause_ttl_sp.png" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/top_cause_ttl_sp.png" alt="目の前で見て! 聞いて! 納得!立会い車検" />
            </picture>
        </h3>
        <div class="cause__iframe__outer">
            <div class="cause__iframe">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/tM9QYgnKroE?si=0SvfmEWPS3rTgTFc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <!-- <video src="<?php echo get_template_directory_uri(); ?>/movie/galileo_tachiai1004a.mp4" controls poster="<?php echo get_template_directory_uri(); ?>/images/2x/top_cause_img01.png"></video> -->
            </div>
        </div>
        <picture>
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/top_cause_img02.png" />
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/top_cause_img02_sp.png" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/top_cause_img02_sp.png" class="cause__img01" alt="ガリレオ車検が選ばれる6つの理由" />
        </picture>
        <div class="btn btn--red2 btn--r cause__btn">
            <a href="<?php echo home_url('/reason/'); ?>"><span>ガリレオ車検が選ばれる<br>6つの理由を詳しく見る</span></a>
        </div>
        <picture>
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/top_cause_img03.png" />
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/top_cause_img03_sp.png" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/top_cause_img03_sp.png" class="cause__img02" alt="目の前で見て! 聞いて! 納得!立会い車検" />
        </picture>
    </div>
</section>
<!-- cause -->


<section class="menu">
    <h2 class="top__ttl">
        おすすめ整備メニュー
    </h2>
    <div class="menu__wrap">
        <h3 class="menu__ttl">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/top_menu_ttl.png" />
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/top_menu_ttl_sp.png" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/top_menu_ttl_sp.png" alt="車検以外のメンテナンスもお任せ!" />
            </picture>
        </h3>
        <p class="menu__txt">ガリレオ車検の整備メニューは、<br class="sp">
            おクルマを快適にお使いいただけるように<br>
            故障や事故につながる各種パーツを<br class="sp">
            素早く点検・交換します。
        </p>

        <div class="menu__box">
            <h4>おすすめ整備メニュー</h4>
            <ul>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/2x/top_menu_img01.png" alt="エンジンオイル交換" />
                    エンジンオイル交換
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/2x/top_menu_img02.png" alt="タイヤ交換" />
                    タイヤ交換
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/2x/top_menu_img03.png" alt="ブレーキパッド交換" />
                    ブレーキパッド交換
                </li>

                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/2x/top_menu_img05.png" alt="バッテリー交換" />
                    バッテリー交換
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/2x/top_menu_img04.png" alt="バッテリー交換" />
                    ブレーキオイル交換
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/2x/top_menu_img06.png" alt="ATF交換" />
                    ATF交換
                </li>
            </ul>
        </div>
        <div class="btn btn--red2 btn--r menu__btn">
            <a href="<?php echo home_url('/maintenance/'); ?>"><span>おすすめ整備メニューを<br>
                    詳しく見る</span></a>
        </div>
    </div>
</section>
<!-- menu -->




<section class="campaign" id="campaign">
    <h2 class="top__ttl">
        お得なキャンペーン
    </h2>
    <div class="campaign__wrap">

        <div class="campaign__box campaign__box__item01">
            <div class="campaign__box__item01__inner">

                <h3 class="campaign__box__ttl campaign__box__item01__ttl">
                    <picture>
                        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_ttl.png" />
                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_ttl.png" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_ttl.png" alt="はじめてがお得!" />
                    </picture>
                </h3>

                <div class="campaign__box__item01__sttl01">
                    <picture>
                        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_ttl01.png" />
                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_ttl01.png" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_ttl01.png" alt="ガリレオ車検を
はじめてご利用のお客様限定!" />
                    </picture>
                </div>
                <div class="campaign__box__item01__card">
                    <h4 class="campaign__box__item01__card__ttl">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_box01_ttl01.png" />
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_box01_ttl01.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_box01_ttl01.png" alt="エンジンオイル交換" />
                        </picture>
                    </h4>
                    <div class="campaign__box__item01__card__inner">
                        <div class="campaign__box__item01__card__img01">
                            <picture>
                                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_box01_img01_sp.png" />
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_box01_img01.png" />
                                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_box01_img01.png" alt="オイル代金・交換工賃無料" />
                            </picture>
                        </div>
                    </div>
                </div>

                <div class="campaign__box__item01__sttl02">
                    <picture>
                        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_ttl02.png" />
                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_ttl02.png" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_ttl02.png" alt="\ さらに /" />
                    </picture>
                </div>
                <div class="campaign__box__item01__card">
                    <h4 class="campaign__box__item01__card__ttl">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_box02_ttl01.png" />
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_box02_ttl01.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_box02_ttl01.png" alt="選べるグルメプレゼント" />
                        </picture>
                    </h4>
                    <div class="campaign__box__item01__card__inner">
                                               <div class="campaign__box__item01__card__img02"><img src="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_box02_img_2503.png" alt="期間限定 2025年3月31日（月）まで" /></div>
                        <p class="campaign__box__item01__card__rule">プレゼントご希望のお客様は、この部分を<br class="sp"><span>スクリーンショット</span>していただくか、<br><span>スマートフォンの画面</span>、または<span>プリントアウト</span>して<br class="sp">店舗スタッフにご提示をお願いします。</p>

                        <div class="campaign__box__item01__card__present">
                            <ul class="campaign__box__item01__card__list">
                                <li class="campaign__box__item01__card__item">
                                    <img src="https://galileo-syaken.com/wp/wp-content/themes/galileo/images/2x/campaign_item02_img01.png" alt="島根県仁多郡産コシヒカリ 2.8kg">
                                    <p class="campaign__box__item01__card__txt">
                                        島根県仁多郡産<br>コシヒカリ 2.8kg
                                    </p>
                                </li>
                                <li class="campaign__box__item01__card__item">
                                    <img src="https://galileo-syaken.com/wp/wp-content/themes/galileo/images/2x/campaign_item02_img02.png" alt="直火厨房荒挽ハンバーグ">
                                    <p class="campaign__box__item01__card__txt">直火厨房<br>荒挽ハンバーグ</p>
                                </li>
                                <li class="campaign__box__item01__card__item">
                                    <img src="https://galileo-syaken.com/wp/wp-content/themes/galileo/images/2x/campaign_item02_img03.png" alt="べこ政宗厚切り牛たん 塩味">
                                    <p class="campaign__box__item01__card__txt">べこ政宗<br>厚切り牛たん 塩味</p>
                                </li>
                                <li class="campaign__box__item01__card__item">
                                    <img src="https://galileo-syaken.com/wp/wp-content/themes/galileo/images/2x/campaign_item02_img04.png" alt="岡山県産「備前牛」すき焼き 260g">
                                    <p class="campaign__box__item01__card__txt">
                                        岡山県産「備前牛」<br>すき焼き 260g
                                    </p>
                                </li>
                                <li class="campaign__box__item01__card__item">
                                    <img src="https://galileo-syaken.com/wp/wp-content/themes/galileo/images/2x/campaign_item02_img05.png" alt="ハーゲンダッツフルーツティアラセット">
                                    <p class="campaign__box__item01__card__txt">
                                        ハーゲンダッツ&amp;<br>フルーツティアラセット
                                    </p>
                                </li>
                                <li class="campaign__box__item01__card__item">
                                    <img src="https://galileo-syaken.com/wp/wp-content/themes/galileo/images/2x/campaign_item02_img09.png" alt="銀の森ピザ人気3セット">
                                    <p class="campaign__box__item01__card__txt">
                                        銀の森<br>ピザ人気3セット
                                    </p>
                                </li>
                            </ul>
                            <p class="campaign__box__item01__card__present__txt">他にも多数ご用意しています</p>
                        </div>
                        <p class="campaign__box__item01__card__att">※はじめてお客様限定キャンペーンは、<br class="sp">お1人様1回限りとなります。<br>※写真はイメージです。</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- campaign__box__item01 -->
    </div>
</section>
<!-- campaign -->

<section class="interest" id="interest">
    <div class="inner-m">
        <div class="interest__box">
            <div class="btn btn--blue2 btn--r interest__btn">
                <a href="<?php echo home_url('/store/'); ?>"><span>店舗情報はこちらから</span></a>
            </div>

            <div class="btn btn--red2 btn--r interest__btn">
                <a href="<?php echo home_url('/flow/'); ?>"><span>車検の流れはこちら</span></a>
            </div>
        </div>
    </div>
</section>
<!-- other -->


<div class="inner-m point">


    <div class="contact contact__btm" style="margin-bottom: 0;">
        <p class="contact__ttl">
            <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/point_ttl02_sp.png" />
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/point_ttl02.png" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/point_ttl02.png" alt="自動車のことならなんでもお任せください!" />
            </picture>
        </p>
        <ul class="contact__list">
            <li class="contact__item">愛車の<br>キズやヘコミの修理</li>
            <li class="contact__item">愛車の<br>高価買取査定</li>
        </ul>
        <p class="contact__link"><a href="<?php echo home_url('/form/'); ?>">詳しくはお問い合わせください </a></p>
    </div>

</div>

<?php get_footer(); ?>