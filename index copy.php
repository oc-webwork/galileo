<?php get_header(); ?>

<section class="eyecatch">
    <div class="inner-m">
        <h1 class="eyecatch__ttl">
            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/eyecatch__ttl.png" alt="" />
        </h1>
        <div class="eyecatch__box">
            <div class="eyecatch__btn">
                <a href="#guide"><img src="<?php echo get_template_directory_uri(); ?>/images/2x/eyecatch__btn01.png" alt="" /></a>
            </div>
            <div class="eyecatch__btn">
                <a href="<?php echo home_url('/simulator/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/2x/eyecatch__btn02.png" alt="" /></a>
            </div>
        </div>
    </div>
</section>
<!-- eyecatch -->

<section class="point" id="point">
    <h2 class="point__ttl">
        ガリレオ車検 <em><span>3</span>つのポイント</em>
    </h2>
    <div class="inner-m">
        <div class="point__box">
            <div class="point__btn">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/point_btn01_sp.png" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/point_btn01.png" />
                    <img src="<?php echo get_template_directory_uri(); ?>/images/2x/point_btn01.png" alt="" />
                </picture>
            </div>
            <div class="point__btn">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/point_btn02_sp.png" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/point_btn02.png" />
                    <img src="<?php echo get_template_directory_uri(); ?>/images/2x/point_btn02.png" alt="" />
                </picture>
            </div>
            <div class="point__btn">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/point_btn03_sp.png" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/point_btn03.png" />
                    <img src="<?php echo get_template_directory_uri(); ?>/images/2x/point_btn03.png" alt="" />
                </picture>
            </div>
        </div>

    </div>
</section>
<!-- point -->


<section class="notice" id="notice">
    <picture class="notice__img">
        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/notice__img01_sp.png" />
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/notice__img01.png" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/2x/notice__img01.png" alt="価格改定のお知らせ" />
    </picture>
</section>
<!-- notice -->

<section class="select" id="select">
    <div class="inner-m">
        <h2 class="select__ttl">
            <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/select_ttl_sp.png" />
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/select_ttl.png" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/select_ttl.png" alt="ガリレオ車検が選ばれる4つのポイント!" />
            </picture>
        </h2>

        <ol class="select__list">
            <li class="select__item">
                <h3 class="select__sttl">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/2x/select_list_img01.png" alt="ポイント1" />
                </h3>
            </li>

            <li class="select__item">
                <h3 class="select__sttl">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/2x/select_list_img02.png" alt="ポイント2" />
                </h3>
            </li>

            <li class="select__item">
                <h3 class="select__sttl">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/2x/select_list_img03.png" alt="ポイント3" />
                </h3>
            </li>

            <li class="select__item">
                <h3 class="select__sttl">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/2x/select_list_img04.png" alt="ポイント4" />
                </h3>
            </li>
        </ol>
    </div>
</section>
<!-- select -->

<section class="sale" id="sale">
    <div class="inner-m">
        <h2 class="sale__ttl">
            <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/sale_ttl_sp.png" />
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/sale_ttl.png" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/sale_ttl.png" alt="" />
            </picture>
        </h2>
        <p class="sale__img">
            <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/sale_img01_sp.png" />
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/sale_img01.png" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/sale_img01.png" alt="" />
            </picture>
        </p>
        <p class="sale__img">
            <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/sale_img02_sp.png" />
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/sale_img02.png" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/sale_img02.png" alt="" />
            </picture>
        </p>
        <p class="sale__att">
            ※各割引の適用条件はスタッフまでお問い合わせください。
        </p>
        <div class="btn btn--red2 btn--r sale__btn">
            <a href="<?php echo home_url('/online/'); ?>"><span>今すぐオンライン予約！</span></a>
        </div>


    </div>
</section>
<!-- sale -->
<section class="campaign" id="campaign">
    <div class="inner-m">
        <h2 class="campaign__ttl">
            <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_ttl_sp.png" />
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_ttl.png" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_ttl.png" alt="お得なキャンペーン!" />
            </picture>
        </h2>
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
                        <div class="campaign__box__item01__card__img02">
                            <picture>
                                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_box02_img_2304.png" />
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_box02_img_2304.png" /><img src="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item04_box02_img_2304.png" alt="期間限定 2023年4月30日（日）まで" />
                            </picture>
                        </div>
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

        <div class="campaign__box campaign__box__item03">
            <div class="campaign__box__item03__inner">
                <h3 class="campaign__box__ttl campaign__box__item03__ttl">
                    <picture>
                        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item03_ttl_sp.png" />
                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item03_ttl.png" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item03_ttl.png" alt="" />
                    </picture>
                </h3>
                <div class="campaign__box__item03__img">
                    <picture>
                        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item03_img01_sp.png" />
                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item03_img01.png" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/2x/campaign_item03_img01.png" alt="次回予約キャンペーン" />
                    </picture>
                </div>
            </div>
        </div>
        <!-- campaign__box__item03 -->
    </div>
</section>
<!-- campaign -->
<section class="guide" id="guide">
    <h2 class="guide__ttl">料金のご案内</h2>

    <div class="course">
        <div class="inner-m">
            <h3 class="course__tit">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/guide_ttl_sp.png" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/guide_ttl.png" />
                    <img src="<?php echo get_template_directory_uri(); ?>/images/2x/guide_ttl.png" alt="" />
                </picture>
            </h3>
            <div class="course__box">
                <div class="course__btn">
                    <a href="#quick"><img src="<?php echo get_template_directory_uri(); ?>/images/2x/course_btn01.png" alt="" /></a>
                </div>
                <div class="course__btn">
                    <a href="#premium"><img src="<?php echo get_template_directory_uri(); ?>/images/2x/course_btn02.png" alt="" /></a>
                </div>
            </div>
        </div>
        <!-- inner-m -->
    </div>
    <!-- course -->

    <div class="compare">
        <div class="inner-m">
            <div class="compare__table">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/course_menutable_sp.png" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/course_menutable.png" />
                    <img src="<?php echo get_template_directory_uri(); ?>/images/2x/course_menutable.png" alt="メニュー内容比較表" />
                </picture>
            </div>

        </div>
        <!-- inner-m -->
    </div>
    <!-- compare -->

    <div class="price">
        <div class="inner-m">
            <div class="btn btn--orange btn--b quick__btn">
                <a href="#premium"><span>プレミアム車検の料金はこちら</span></a>
            </div>



            <div class="quick" id="quick">
                <h4 class="quick__ttl">クイック車検の料金表<br><span>※2023年1月1日以降の料金となります。</span></h4>
                <div class="quick__box quick__box__item01">
                    <table class="quick__table">
                        <tbody>
                            <tr class="thumb">
                                <th rowspan="2">車種</th>
                                <th>
                                    <div>軽自動車</div>
                                    <div>　</div>
                                    <div><em><span class="fs_BarlowCondensed">37,480</span>円</em><strong>(税込)〜</strong></div>
                                </th>
                                <th>
                                    <div>小型乗用車</div>
                                    <div>（車両重量1,000kg以下）</div>
                                    <div><em><span class="fs_BarlowCondensed">47,560</span>円</em><strong>(税込)〜</strong></div>
                                </th>
                                <th>
                                    <div>中型乗用車</div>
                                    <div>（車両重量1,001〜1,500kg）</div>
                                    <div><em><span class="fs_BarlowCondensed">55,760</span>円</em><strong>(税込)〜</strong></div>
                                </th>
                                <th>
                                    <div>大型乗用車</div>
                                    <div>（車両重量1,501〜2,000kg以下）</div>
                                    <div><em><span class="fs_BarlowCondensed">63,960</span>円</em><strong>(税込)〜</strong></div>
                                </th>
                            </tr>
                            <tr class="thumb">
                                <td>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/1x/top_sec03_img01.png" alt="軽自動車" />
                                    <p class="thumb__txt">ハスラー・N-BOX・<br>ワゴンR・タント etc.</p>
                                </td>
                                <td>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/1x/top_sec03_img02.png" alt="小型車（1.0tまで）" />
                                    <p class="thumb__txt">パッソ・アクア・<br>ヴィッツ・マーチ etc.</p>
                                </td>
                                <td>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/1x/top_sec03_img03.png" alt="中型車（1.5tまで）" />
                                    <p class="thumb__txt">ノート・ウィッシュ・<br>ラクティス・レガシィ etc.</p>
                                </td>
                                <td>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/1x/top_sec03_img04.png" alt="大型車（2.0tまで）" />
                                    <p class="thumb__txt">ノア・クラウン・オデッセイ・<br>エスティマ etc.</p>
                                </td>
                            </tr>
                            <tr class="basic">
                                <th>車検基本費用</th>
                                <td colspan="4">
                                    全車種一律 <em class="fs_BarlowCondensed">13,900<span>円</span></em>
                                </td>
                            </tr>
                            <tr class="representation">
                                <th>代行手数料</th>
                                <td colspan="4">
                                    全車種一律 <em class="fs_BarlowCondensed">0<span>円</span></em>
                                </td>
                            </tr>
                            <tr class="rental">
                                <th>最大割引</th>
                                <td colspan="4">
                                    全車種一律 <strong>最大</strong><em class="fs_BarlowCondensed">4,550<span>円引</span></em>
                                </td>
                            </tr>
                            <tr class="insurance">
                                <th>自賠責保険</th>
                                <td><span class="fs_BarlowCondensed">19,730</span>円</td>
                                <td colspan="3"><span class="fs_BarlowCondensed">20,010</span>円</td>
                            </tr>
                            <tr class="tax">
                                <th>重量税（基本）</th>
                                <td><span class="fs_BarlowCondensed">6,600</span>円</td>
                                <td><span class="fs_BarlowCondensed">16,400</span>円</td>
                                <td><span class="fs_BarlowCondensed">24,600</span>円</td>
                                <td><span class="fs_BarlowCondensed">32,800</span>円</td>
                            </tr>
                            <tr class="commission">
                                <th>技術情報管理<br>手数料</th>
                                <td colspan="4"><span class="fs_BarlowCondensed">400</span>円
                                    <p class="quick__box__item02__txt">※技術情報管理手数料に関しては<a href="https://wwwtb.mlit.go.jp/kinki/content/000234495.pdf" target="_blank">コチラ</a> <i class="far fa-window-restore"></i></p>
                                </td>
                            </tr>
                            <tr class="stamp">
                                <th>印紙代</th>
                                <td colspan="4"><span class="fs_BarlowCondensed">1,400</span>円</td>
                            </tr>
                            <tr class="total">
                                <th>割引後価格</th>
                                <td><em class="fs_BarlowCondensed">37,480</em><span>円</span>(税込)〜</td>
                                <td><em class="fs_BarlowCondensed">47,560</em><span>円</span>(税込)〜</td>
                                <td><em class="fs_BarlowCondensed">55,760</em><span>円</span>(税込)〜</td>
                                <td><em class="fs_BarlowCondensed">63,960</em><span>円</span>(税込)〜</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="wrap">
                        <div class="uniform">
                            <div class="uniform__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/guide_quick_img01_sp.png" alt="" />
                            </div>
                            <div class="uniform__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/guide_quick_img02_sp.png" alt="" />
                                <p class="quick__box__item02__txt">※技術情報管理手数料に関しては<a href="https://wwwtb.mlit.go.jp/kinki/content/000234495.pdf" target="_blank">コチラ</a> <i class="far fa-window-restore"></i></p>
                            </div>
                            <div class="uniform__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/guide_quick_img03_sp.png" alt="" />
                                <p class="quick__box__item02__txt">※技術情報管理手数料に関しては<a href="https://wwwtb.mlit.go.jp/kinki/content/000234495.pdf" target="_blank">コチラ</a> <i class="far fa-window-restore"></i></p>
                            </div>
                            <div class="uniform__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/guide_quick_img04_sp.png" alt="" />
                                <p class="quick__box__item02__txt">※技術情報管理手数料に関しては<a href="https://wwwtb.mlit.go.jp/kinki/content/000234495.pdf" target="_blank">コチラ</a> <i class="far fa-window-restore"></i></p>
                            </div>
                            <div class="uniform__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/guide_quick_img05_sp.png" alt="" />
                                <p class="quick__box__item02__txt">※技術情報管理手数料に関しては<a href="https://wwwtb.mlit.go.jp/kinki/content/000234495.pdf" target="_blank">コチラ</a> <i class="far fa-window-restore"></i></p>
                            </div>
                        </div>
                        <!-- uniform -->


                    </div>
                    <!-- wrap -->
                </div>
                <!-- quick__box -->

                <div class="quick__box quick__box__item02">
                    <p class="quick__box__item02__img">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/course_pricetable_img01_sp.png" />
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/course_pricetable_img01.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/course_pricetable_img01.png" alt="" />
                        </picture>
                    </p>
                    <p class="quick__box__item02__txt">
                        ※ハイブリッド車の車検費用はお問合せください。</p>
                </div>
                <!-- quick__box -->

                <div class="quick__box quick__box__item03">
                    <p class="quick__box__item03__ttl">
                        クイック車検の<br class="sp">お得な割引メニュー
                    </p>
                    <p class="quick__box__item03__img">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/course_pricetable_qimg01_sp.png" />
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/course_pricetable_qimg01.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/course_pricetable_qimg01.png" alt="" />
                        </picture>
                    </p>
                    <p class="quick__box__item03__txt">下記の中から当てはまる項目の<br class="sp">合計金額を割引いたします。</p>
                    <p class="quick__box__item03__flow">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/course_pricetable_qimg02_sp.png" />
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/course_pricetable_qimg02.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/course_pricetable_qimg02.png" alt="" />
                        </picture>
                    </p>
                    <p class="quick__box__item03__att">※各種割引の適用条件はスタッフまでお問い合わせください。</p>
                </div>
                <!-- quick__box -->
            </div>
            <!-- quick -->

            <div class="btn btn--green btn--r price__btn">
                <a href="<?php echo home_url('/simulator/'); ?>"><span>車検費用シミュレーターはこちら</span></a>
            </div>

            <div class="premium" id="premium">
                <h4 class="premium__ttl">プレミアム車検の料金表<br><span>※2023年1月1日以降の料金となります。</span></h4>
                <div class="premium__box premium__box__item01">
                    <table class="premium__table">
                        <tbody>
                            <tr class="thumb">
                                <th rowspan="2">車種</th>
                                <th>
                                    <div>軽自動車</div>
                                    <div>　</div>
                                    <div><em><span class="fs_BarlowCondensed">38,680</span>円</em><strong>(税込)〜</strong></div>
                                </th>
                                <th>
                                    <div>小型乗用車</div>
                                    <div>（車両重量1,000kg以下）</div>
                                    <div><em><span class="fs_BarlowCondensed">48,760</span>円</em><strong>(税込)〜</strong></div>
                                </th>
                                <th>
                                    <div>中型乗用車</div>
                                    <div>（車両重量1,001〜1,500kg）</div>
                                    <div><em><span class="fs_BarlowCondensed">56,960</span>円</em><strong>(税込)〜</strong></div>
                                </th>
                                <th>
                                    <div>大型乗用車</div>
                                    <div>（車両重量1,501〜2,000kg以下）</div>
                                    <div><em><span class="fs_BarlowCondensed">65,160</span>円</em><strong>(税込)〜</strong></div>
                                </th>
                            </tr>
                            <tr class="thumb">
                                <td>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/1x/top_sec03_img01.png" alt="軽自動車" />
                                    <p class="thumb__txt">ハスラー・N-BOX・<br>ワゴンR・タント etc.</p>
                                </td>
                                <td>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/1x/top_sec03_img02.png" alt="小型車（1.0tまで）" />
                                    <p class="thumb__txt">パッソ・アクア・<br>ヴィッツ・マーチ etc.</p>
                                </td>
                                <td>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/1x/top_sec03_img03.png" alt="中型車（1.5tまで）" />
                                    <p class="thumb__txt">ノート・ウィッシュ・<br>ラクティス・レガシィ etc.</p>
                                </td>
                                <td>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/1x/top_sec03_img04.png" alt="大型車（2.0tまで）" />
                                    <p class="thumb__txt">ノア・クラウン・オデッセイ・<br>エスティマ etc.</p>
                                </td>
                            </tr>
                            <tr class="basic">
                                <th>車検基本費用</th>
                                <td colspan="4">
                                    全車種一律 <em class="fs_BarlowCondensed">23,900<span>円</span></em>
                                </td>
                            </tr>
                            <tr class="representation">
                                <th>代行手数料</th>
                                <td colspan="4">
                                    全車種一律 <em class="fs_BarlowCondensed">0<span>円</span></em>
                                </td>
                            </tr>
                            <tr class="rental">
                                <th>最大割引</th>
                                <td colspan="4">
                                    全車種一律 <strong>最大</strong><em class="fs_BarlowCondensed">13,350<span>円引</span></em>
                                </td>
                            </tr>
                            <tr class="insurance">
                                <th>自賠責保険</th>
                                <td><span class="fs_BarlowCondensed">19,730</span>円</td>
                                <td colspan="3"><span class="fs_BarlowCondensed">20,010</span>円</td>
                            </tr>
                            <tr class="tax">
                                <th>重量税（基本）</th>
                                <td><span class="fs_BarlowCondensed">6,600</span>円</td>
                                <td><span class="fs_BarlowCondensed">16,400</span>円</td>
                                <td><span class="fs_BarlowCondensed">24,600</span>円</td>
                                <td><span class="fs_BarlowCondensed">32,800</span>円</td>
                            </tr>
                            <tr class="commission">
                                <th>技術情報管理<br>手数料</th>
                                <td colspan="4"><span class="fs_BarlowCondensed">400</span>円
                                    <p class="quick__box__item02__txt">※技術情報管理手数料に関しては<a href="https://wwwtb.mlit.go.jp/kinki/content/000234495.pdf" target="_blank">コチラ</a> <i class="far fa-window-restore"></i></p>
                                </td>
                            </tr>
                            <tr class="stamp">
                                <th>印紙代</th>
                                <td colspan="4"><span class="fs_BarlowCondensed">1,400</span>円</td>
                            </tr>
                            <tr class="total">
                                <th>割引後価格</th>
                                <td><em class="fs_BarlowCondensed">38,680</em><span>円</span>(税込)〜</td>
                                <td><em class="fs_BarlowCondensed">48,760</em><span>円</span>(税込)〜</td>
                                <td><em class="fs_BarlowCondensed">56,960</em><span>円</span>(税込)〜</td>
                                <td><em class="fs_BarlowCondensed">65,160</em><span>円</span>(税込)〜</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="wrap">
                        <div class="uniform">
                            <div class="uniform__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/guide_premium_img01_sp.png" alt="" />
                            </div>
                            <div class="uniform__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/guide_premium_img02_sp.png" alt="" />
                                <p class="quick__box__item02__txt">※技術情報管理手数料に関しては<a href="https://wwwtb.mlit.go.jp/kinki/content/000234495.pdf" target="_blank">コチラ</a> <i class="far fa-window-restore"></i></p>
                            </div>
                            <div class="uniform__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/guide_premium_img03_sp.png" alt="" />
                                <p class="quick__box__item02__txt">※技術情報管理手数料に関しては<a href="https://wwwtb.mlit.go.jp/kinki/content/000234495.pdf" target="_blank">コチラ</a> <i class="far fa-window-restore"></i></p>
                            </div>
                            <div class="uniform__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/guide_premium_img04_sp.png" alt="" />
                                <p class="quick__box__item02__txt">※技術情報管理手数料に関しては<a href="https://wwwtb.mlit.go.jp/kinki/content/000234495.pdf" target="_blank">コチラ</a> <i class="far fa-window-restore"></i></p>
                            </div>
                            <div class="uniform__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/guide_premium_img05_sp.png" alt="" />
                                <p class="quick__box__item02__txt">※技術情報管理手数料に関しては<a href="https://wwwtb.mlit.go.jp/kinki/content/000234495.pdf" target="_blank">コチラ</a> <i class="far fa-window-restore"></i></p>
                            </div>
                        </div>
                        <!-- uniform -->

                    </div>
                    <!-- wrap -->
                </div>
                <!-- premium__box -->

                <div class="premium__box premium__box__item02">
                    <p class="premium__box__item02__img">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/course_pricetable_img01_sp.png" />
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/course_pricetable_img01.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/course_pricetable_img01.png" alt="" />
                        </picture>
                    </p>
                    <p class="premium__box__item02__txt">
                        ※ハイブリッド車の車検費用はお問合せください。</p>
                </div>
                <!-- premium__box -->

                <div class="premium__box premium__box__item03">
                    <p class="premium__box__item03__ttl">
                        プレミアム車検の<br class="sp">お得な割引メニュー
                    </p>
                    <p class="premium__box__item03__img">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/course_pricetable_pimg01_sp.png" />
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/course_pricetable_pimg01.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/course_pricetable_pimg01.png" alt="" />
                        </picture>
                    </p>
                    <p class="premium__box__item03__txt">下記の中から当てはまる項目の<br class="sp">合計金額を割引いたします。</p>
                    <p class="premium__box__item03__flow">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/course_pricetable_pimg02_sp.png" />
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/course_pricetable_pimg02.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/course_pricetable_pimg02.png" alt="" />
                        </picture>
                    </p>
                    <p class="premium__box__item03__att">※各種割引の適用条件はスタッフまでお問い合わせください。</p>
                </div>
                <!-- premium__box -->



                <div class="premium__box premium__box__item04">
                    <p class="premium__box__item04__ttl">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/course_limited_ttl_sp.png" />
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/course_limited_ttl.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/course_limited_ttl.png" alt="" />
                        </picture>
                    </p>

                    <div class="prezent">
                        <div class="prezent__item">
                            <p class="prezent__ttl">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/course_limited_sttl01_sp.png">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/course_limited_sttl01.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/2x/course_limited_sttl01.png" alt="次回車検予約で">
                                </picture>
                            </p>
                            <p class="prezent__img">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/course_limited_img03_sp.png">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/course_limited_img03.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/2x/course_limited_img03.png" alt="エンジンオイル交換ず〜っと無料!">
                                </picture>
                            </p>
                            <p class="prezent__txt">プレミアム車検コースの予約をし続けると<br>オイル交換が永年無料になります。</p>
                            <ul class="prezent__att">
                                <li class="prezent__att__item">※弊社にて車検終了時に次回のプレミアム車検をご予約いただいた方は、次回の車検までのエンジンオイル交換が無料となります。</li>
                                <li class="prezent__att__item">※エンジンオイルの交換は6ヶ月または走行距離5,000kmでの交換となります。</li>
                                <li class="prezent__att__item">※ディーゼル車は半額。</li>
                            </ul>
                        </div>

                    </div>



                </div>
                <!-- premium__box -->


            </div>
            <!-- premium -->
            <p class="premium__att">●価格は点検により整備必要の無い場合の価格です。※点検の結果、調整整備な場合別途料金が必要になります。●車検部品交換が必要な場合は後日の整備になる場合があります。●上記自賠責保険は24ヵ月の場合です。●輸入車はお受けできない場合があります。●初年度登録より、13年または18年経過している車輌、エコカーは重量税が異なります。●上記価格は一例です。年式、グレードにより価格が変る場合があります。●12ヶ月法定点検法定点検料費用は、9,350円になります。●車両の重量につきましては、車検証をご参考にしてください。</p>

            <div class="btn btn--blue2 btn--t premium__btn">
                <a href="#quick"><span>クイック車検の料金はこちら</span></a>
            </div>
        </div>
        <!-- inner-m -->
    </div>
    <!-- price -->
    <section class="reserve" id="reserve">
        <div class="inner-m">
            <h2 class="reserve__ttl">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/top_reserve_ttl_sp.png">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/top_reserve_ttl.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/2x/top_reserve_ttl.png" alt="もっと安心・快適にマイカーをご利用いただくために 6ヶ月後の安心点検が無料!">
                </picture>
            </h2>
            <p class="reserve__txt"><span>ガリレオ車検</span>にて<br><span>車検</span>や<span>法定12ヶ月点検</span>を受けていただいた<br class="sp">マイカーは<br>点検後6ヶ月の<span>安心点検</span>が<span>無料</span></p>

            <div class="reserve__box">
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/top_reserve_img01.png" alt="車検のお客様 6ヶ月安心点検が無料">
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/top_reserve_img02.png" alt="法定12ヶ月点検のお客様 18ヶ月安心点検が無料">
            </div>
            <p class="reserve__txt"><span>ガリレオ車検</span>で<span>車検</span>と<span>法定12ヶ月点検</span>を<br class="sp">受けていただくと、<br>6ヶ月に1度<span>プロの整備士</span>が<br class="sp">あなたの愛車を点検します。</p>

            <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/top_reserve_img03_sp.png">
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/top_reserve_img03.png">
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/top_reserve_img03.png" alt="自動車の点検スケジュール">
            </picture>

            <p class="reserve__txt">安全走行を維持するために、<br>信頼の専門知識と技術力、<br class="sp">国の認証を受けたガリレオ車検に<br><span>「車検」</span>も<span>「法定12ヶ月点検」</span>も<br class="sp">お任せください。</p>

            <div class="reserve__img">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/top_reserve_img04_sp.png">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/top_reserve_img04.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/2x/top_reserve_img04.png" alt="法定12ヶ月点検は全車一律9,350円（所要時間は30分〜60分）">
                </picture>
            </div>
            <div class="btn btn--red2 btn--r reserve__btn">
                <a href="<?php echo home_url('/online/'); ?>"><span>今すぐオンライン予約！</span></a>
            </div>
        </div>
    </section>
    <!-- reserve -->

</section>
<!-- guide -->
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

    <div class="corona">
        <p class="corona__tit">当店の新型コロナウイルスに<br class="sp">関する対応</p>
        <div class="box">
            <ol class="list">
                <li class="list__item">
                    ①お客様が使われるテーブル椅子は次亜塩素酸での消毒をさせて頂きます。又来店時消毒液を店内入り口に設置させて頂きます。
                </li>
                <li class="list__item">
                    ②感染予防に為、スタッフ体調管理に細心の注意を払うと共に常に手指の消毒、常時マスク着用で応対に当たらせて頂きます。
                </li>
                <li class="list__item">
                    ③お客様のお車引渡時に車内を消毒させて頂きます。
                </li>
            </ol>
        </div>
    </div>

</div>

<?php get_footer(); ?>