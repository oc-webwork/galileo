<?php
/*
Template Name: 固定ページテンプレート
*/
?>

<?php get_header();

$url = $_SERVER["REQUEST_URI"];
?>


<!----------- 車検費用シミュレーター -------------->

<?php if (is_page('simulator')) : ?>
  <section class="maintit">
    <div class="inner-w">
      <h1 class="maintit__txt">車検費用シミュレーター</h1>
    </div>
  </section>
  <!-- eyecatch -->

  <section class="outer">
    <div class="inner-m">

      <div class="ttl">
        <img src="<?php echo get_template_directory_uri(); ?>/images/2x/h2_pc.png" alt="カンタン4ステップ車検費用シミュレーター">
      </div>
      <h2 class="ttl__txt">車両タイプ・車検コース・割引メニュー・車検オプションを選ぶだけで、<br class="pc">車検概算費用シミュレーションができます！</h2>

      <div class="inner">
        <div id="app1">

          <div class="box">

            <h3 class="h2"><span class="h2__num">STEP1</span>お客様の車両対応を選択してください。</h3>

            <div class="model">

              <input type="radio" v-model="carmodel" id="model01" v-bind:value="1" v-on:click="modelBtnActive()">
              <label class="model__item" for="model01">
                <span class="model__txt1 model__txt1--ex">軽自動車</span>
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/model01.png" alt="軽自動車">
                <span class="model__txt3">ハスラー・N-BOX・<br>ワゴンR・タント etc.</span>
              </label>

              <input type="radio" v-model="carmodel" id="model02" v-bind:value="2" v-on:click="modelBtnActive()">
              <label class="model__item" for="model02">
                <span class="model__txt1">小型乗用車</span>
                <span class="model__txt2">（車両重量1,000kg以下）</span>
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/model02.png" alt="小型乗用車">
                <span class="model__txt3">パッソ・アクア・<br>ヴィッツ・マーチ etc.</span>
              </label>

              <input type="radio" v-model="carmodel" id="model03" v-bind:value="3" v-on:click="modelBtnActive()">
              <label class="model__item" for="model03">
                <span class="model__txt1">中型乗用車</span>
                <span class="model__txt2">（車両重量1,001〜1,500kg）</span>
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/model03.png" alt="中型乗用車">
                <span class="model__txt3">ノート・ウィッシュ・<br>ラクティス・レガシィ etc.</span>
              </label>

              <input type="radio" v-model="carmodel" id="model04" v-bind:value="4" v-on:click="modelBtnActive()">
              <label class="model__item" for="model04">
                <span class="model__txt1">大型乗用車</span>
                <span class="model__txt2">（車両重量1,501〜2,000kg以下）</span>
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/model04.png" alt="大型乗用車">
                <span class="model__txt3">ノア・クラウン・オデッセイ・<br>エスティマ etc.</span>
              </label>

            </div>

          </div>

          <div class="box">

            <h3 class="h2"><span class="h2__num">STEP2</span>ご希望の車検コースを選択してください。</h3>

            <div class="course">

              <input type="radio" v-model="couseplan" id="quick" v-bind:value="1" :disabled="planBtnDisabled" v-on:click="quickBtnActive()">
              <label for="quick" class="course__item">
                <span class="course__txt1">価格重視の</span>
                <span class="course__txt2">「クイック車検」</span>
              </label>

              <input type="radio" v-model="couseplan" id="premium" v-bind:value="2" :disabled="planBtnDisabled" v-on:click="premiumBtnActive()">
              <label class="course__item course__item--ex" for="premium">
                <span class="course__txt1">より安心・安全な</span>
                <span class="course__txt2">「プレミアム車検」</span>
              </label>

            </div>

          </div>

          <div class="box">

            <h3 class="h2"><span class="h2__num">STEP3</span>お客様が対象の割引メニューを選択してください。</h3>

            <div class="discount" v-show="showQuick">

              <h4 class="discount__h1">「クイック車検」割引メニュー</h4>

              <div class="discount__box">

                <template v-for="n in 4">

                  <input type="checkbox" v-model="quickDiscount" v-bind:id="discountList[n-1].name" v-bind:value="discountList[n-1].value" :disabled="quickBtnDisabled" :key="discountList[n-1].name">
                  <label class="discount__item discount__item--check" v-bind:for="discountList[n-1].name">
                    <span class="discount__h2">{{ discountList[n-1].name }}</span>
                    <span class="discount__txt1">{{ discountList[n-1].text }}</span>
                  </label>

                </template>

              </div>

            </div>

            <div class="discount discount--ex" v-show="showPremium">

              <h4 class="discount__h1">「プレミアム車検」割引メニュー</h4>

              <div class="discount__box">
                <!--  プレミアム車検 割引一覧 （複数選択）  -->
                <template v-for="item in discountList">

                  <input type="checkbox" v-model="premiumDiscountMulti" v-bind:id="item.id" v-bind:value="item.value">
                  <label class="discount__item discount__item--check discount__item--ex" v-bind:for="item.id">
                    <span class="discount__h2 discount__h2--ex">{{ item.name }}</span>
                    <span class="discount__txt1">{{ item.text }}</span>
                  </label>

                </template>

                <!--  プレミアム車検 割引一覧 （単一選択）  -->
                <template v-for="item in discountSingleList">

                  <input type="radio" v-model="premiumDiscountSingle" v-bind:id="item.name" v-bind:value="item.value">
                  <label class="discount__item discount__item--radio discount__item--ex" v-bind:for="item.name">
                    <span class="discount__h2 discount__h2--ex">{{ item.name }}</span>
                    <span class="discount__txt1">{{ item.text }}</span>
                  </label>

                </template>

              </div>

            </div>

          </div>

          <div class="box2">

            <h3 class="h2"><span class="h2__num">STEP4</span>ご希望の車検オプションを選択してください。</h3>

            <div class="option">

              <!-- オプション：なし START -->
              <input type="radio" v-model="option" id="none" v-bind:value="0" :disabled="optionBtnDisabled">
              <label class="option__item option__item--none" for="none">
                <span class="option__h1">オプション<br class="pc">なし</span>
              </label>
              <!-- オプション：なし END -->

              <!-- オプション：よく選ばれるオプションセット START -->
              <input type="radio" v-model="option" id="nomal" v-bind:value="1" :disabled="optionBtnDisabled">
              <label class="option__item" for="nomal">
                <span class="option__h1">よく選ばれる<br class="pc">オプションセット</span>
                <span class="option__txt1">お客様がよく選ばれる<br class="pc">基本的なオプションセットです。</span>
                <span class="option__txtbox">
                  <span class="option__txtbox2">
                    <span>●ブレーキフルード</span>
                    <span>●冷却水リカバリー</span>
                  </span>
                  <span class="option__txtbox2 option__txtbox2--short">
                    <span>●ワイパーゴム左右交換</span>
                  </span>
                </span>
                <span class="option__txt3 option__txt3--ex">セット合計<span class="option__num">{{ normalOptionTotal.toLocaleString() }}</span><span class="option__red">円(税込)</span></span>
              </label>

              <!-- SP版：アコーディオン -->
              <div class="option__btn-outer">
                <button v-on:click="toggleAccordion()" v-bind:class='{active:isActive}' class="option__btn">よく選ばれるオプションセットの詳細はコチラ<i class="fas fa-plus-square"></i></button>
                <transition name="slide" @before-enter="beforeEnter" @enter="enter" @before-leave="beforeLeave" @leave="leave">
                  <nomal-accordion v-show="isOpened" v-on:from-child="toggleAccordion">
                    <template v-slot:other v-if="!showLargeModelOnly">5,500</template>
                    <template v-slot:large v-if="showLargeModelOnly">7,700</template>
                    <template v-slot:other2 v-if="!showLargeModelOnly">11,640</template>
                    <template v-slot:large2 v-if="showLargeModelOnly">13,840</template>
                  </nomal-accordion>
                </transition>
              </div>
              <!-- オプション：よく選ばれるオプションセット END -->

              <!-- オプション：スペシャルオプションセット START -->
              <input type="radio" v-model="option" id="special" v-bind:value="2" :disabled="optionBtnDisabled">
              <label class="option__item" for="special">
                <span class="option__h1">スペシャル<br class="pc">オプションセット</span>
                <span class="option__txt1">ガリレオ車検厳選の<br class="pc">スペシャルオプションセットです。</span>
                <span class="option__txtbox">
                  <span class="option__txtbox2">
                    <span>●ブレーキフルード</span>
                    <span>●冷却水リカバリー</span>
                    <span>●エアーエレメント交換</span>
                    <span>●CPU診断</span>
                    <span>●ヘッドライトコーティング</span>
                  </span>
                  <span class="option__txtbox2 option__txtbox2--wide">
                    <span>●ワイパーゴム左右交換</span>
                    <span>●エアコンフィルター交換</span>
                    <span>●オートマチックフルード</span>
                    <span>●エンジン内部洗浄</span>
                  </span>
                </span>
                <span class="option__txt3">セット合計<span class="option__num">{{ specialOptionTotal.toLocaleString() }}</span><span class="option__red">円(税込)</span></span>
              </label>
              <!-- SP版：アコーディオン -->
              <div class="option__btn-outer">
                <button v-on:click="toggleAccordion02()" v-bind:class='{active:isActive02}' class="option__btn">スペシャルオプションセットの詳細はコチラ<i class="fas fa-plus-square"></i></button>
                <transition name="slide" @before-enter="beforeEnter" @enter="enter" @before-leave="beforeLeave" @leave="leave">
                  <special-accordion v-show="isOpened02" v-on:from-child="toggleAccordion02">
                    <template v-slot:light v-if="showLightModelOnly">6,600</template>
                    <template v-slot:other v-if="!showLightModelOnly">7,700</template>
                    <template v-slot:light2 v-if="showLightModelOnly">32,540</template>
                    <template v-slot:other2 v-if="!showLightModelOnly">33,640</template>
                  </special-accordion>
                </transition>
              </div>
              <!-- オプション：スペシャルオプションセット END -->

            </div>

          </div>

        </div>

        <div class="linkbox">

          <!-- ダミー -->
          <div class="linkbox__item"></div>

          <!-- PC版：モーダル -->
          <div id="app2" class="linkbox__item">

            <button v-on:click="openModal" class="linkbox__btn">よく選ばれるオプションセットの<br>詳細はコチラ<i class="fas fa-play-circle"></i></button>

            <transition name="fade">
              <nomal-modal v-show="showContents" v-on:from-child="closeModal">
                <template v-slot:other v-if="!showLargeModelOnly">5,500</template>
                <template v-slot:large v-if="showLargeModelOnly">7,700</template>
                <template v-slot:other2 v-if="!showLargeModelOnly">11,640</template>
                <template v-slot:large2 v-if="showLargeModelOnly">13,840</template>
              </nomal-modal>
            </transition>

          </div>

          <!-- PC版：モーダル -->
          <div id="app3" class="linkbox__item">

            <button v-on:click="openModal" class="linkbox__btn">スペシャルオプションセットの<br>詳細はコチラ<i class="fas fa-play-circle"></i></button>

            <transition name="fade">
              <special-modal v-show="showContents" v-on:from-child="closeModal">
                <template v-slot:light v-if="showLightModelOnly">6,600</template>
                <template v-slot:other v-if="!showLightModelOnly">7,700</template>
                <template v-slot:light2 v-if="showLightModelOnly">32,540</template>
                <template v-slot:other2 v-if="!showLightModelOnly">33,640</template>
              </special-modal>
            </transition>

          </div>

        </div>

      </div>

      <div class="inner inner--btm">

        <h3 class="h2 h2--ex">
          <span class="h2__num">現在の見積もり内容</span><span class="h2__att">※表記の車検料金は2023年1月1日以降の料金となります。</span>
        </h3>

        <div id="app4">

          <div class="total">

            <div class="total__item">
              <p class="total__ttl">車種</p>
              <div class="total__price">
                <p class="total__model">{{ model().toLocaleString() }}</p>
              </div>
            </div>

            <div class="total__item">
              <p class="total__ttl">車検料金(税込)</p>
              <div class="total__price">
                <p class="total__num"><span>{{ shaken().toLocaleString() }}</span>円</p>
              </div>
            </div>

            <div class="total__item">
              <p class="total__ttl">オプション(税込)</p>
              <div class="total__price">
                <p class="total__num"><span>{{ optiontotal().toLocaleString() }}</span>円</p>
              </div>
            </div>

            <div class="total__item">
              <p class="total__ttl">割引メニュー合計</p>
              <div class="total__price">
                <p class="total__num"><span>{{ discounttotal().toLocaleString() }}</span>円</p>
              </div>
            </div>

            <div class="total__item">
              <p class="total__ttl">見積もり合計(税込/割引含)</p>
              <div class="total__price total__price--ex">
                <p class="total__num2"><span>{{ total().toLocaleString() }}</span>円</p>
              </div>
            </div>

          </div>

          <p class="total__note"><span>※</span>車検費用シミュレーターでの表示金額は概算となります。</p>
          <p class="total__note"><span>※</span>車種や年式、車両の状態により表示金額と異なる場合がございますので、予めご了承ください。</p>
          <p class="total__note"><span>※</span>車両重量により金額が異なります。車両重量は車検証をご確認ください。</p>
          <p class="total__note"><span>※</span>料金表にない車両に関しては、別途お見積させていただきますので、お気軽にお問い合わせください。</p>
          <p class="total__note"><span>※</span>車検の実施時期により、法定費用が変動する場合があります。</p>
          <p class="total__note"><span>※</span>新車から13年及び18年経過車及びエコカー減税対象車は重量税が異なります。</p>

        </div>

      </div>

      <div class="btn-more__outer">
        <a href="<?php echo home_url('/online/'); ?>" class="btn-more">今すぐオンライン予約！</a>
      </div>

    </div>

  </section>


  <!----------- 車検の流れ -------------->


<?php elseif (is_page('flow')) : ?>
  <section class="maintit">
    <div class="inner-w">
      <h1 class="maintit__txt">車検の流れ</h1>
    </div>
  </section>
  <!-- eyecatch -->
  <section class="sec01" id="sec01">
    <div class="inner-m">
      <h2 class="tit">
        <picture>
          <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/flow_ttl_sp.png" />
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/flow_ttl.png" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/2x/flow_ttl.png" alt="" />
        </picture>
      </h2>
      <p class="read">
        コンシェルジュがお車の状態を<br class="sp" />分かりやすく丁寧にご説明！
      </p>
    </div>
  </section>
  <!-- sec01 -->

  <section class="step" id="step">
    <div class="inner-m">
      <h2 class="step__tit">ガリレオ車検の流れ</h2>
      <ol class="list">
        <li class="list__item list__item01">
          <div class="list__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/flow_step_icon01.png" alt="" />
          </div>
          <div class="list__upper">
            <div class="list__box">
              <div class="list__txtbox">
                <h3 class="list__ttl">車検をご予約</h3>
                <p class="list__txt">
                  完全予約制のためWeb、電話、店頭にて車検ご予約をお願いします。
                </p>
              </div>

              <div class="list__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/flow_item01_img.png" alt="" />
              </div>
            </div>
          </div>
          <div class="list__lower">
            <div class="btn btn--red2 btn--r list__btn">
              <a href="<?php echo home_url('/online/'); ?>"><span>オンライン予約はコチラから</span></a>
            </div>
          </div>
        </li>
        <li class="list__item list__item02">
          <div class="list__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/flow_step_icon02.png" alt="" />
          </div>
          <div class="list__upper">
            <div class="list__box">
              <div class="list__txtbox">
                <h3 class="list__ttl">
                  車検当日　<span>お車を入庫・受付</span>
                </h3>
                <p class="list__txt">
                  ご予約された店舗に、お車を入庫してください。
                </p>
              </div>

              <div class="list__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/flow_item02_img.png" alt="" />
              </div>
            </div>
          </div>
          <div class="list__lower">
            <div class="list__lower__img">
              <picture>
                <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/flow_item02b_img_sp.png" />
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/flow_item02b_img.png" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/flow_item02b_img.png" alt="" />
              </picture>
            </div>
          </div>
        </li>

        <li class="list__item list__item03">
          <div class="list__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/flow_step_icon03.png" alt="" />
          </div>
          <div class="list__upper">
            <div class="list__box">
              <div class="list__txtbox">
                <h3 class="list__ttl">検査員チェック</h3>
                <p class="list__txt">
                  お車の細部まで検査員が厳しくチェックし、お見積を作成いたします。
                </p>
              </div>

              <div class="list__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/flow_item03_img.png" alt="" />
              </div>
            </div>
          </div>
        </li>

        <li class="list__item list__item04">
          <div class="list__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/flow_step_icon04.png" alt="" />
          </div>
          <div class="list__upper">
            <div class="list__box">
              <div class="list__txtbox">
                <h3 class="list__ttl">立会い説明</h3>
                <p class="list__txt">
                  コンシェルジュがお客様に最適なご提案をいたします。
                </p>
              </div>

              <div class="list__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/flow_item04_img.png" alt="" />
              </div>
            </div>
          </div>
        </li>

        <li class="list__item list__item05">
          <div class="list__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/flow_step_icon05.png" alt="" />
          </div>
          <div class="list__upper">
            <div class="list__box">
              <div class="list__txtbox">
                <h3 class="list__ttl">法定点検・整備</h3>
                <p class="list__txt">
                  プレミアム車検は、56項目点検＋44項目点検の100項目の点検を、クイック車検は、56項目点検をさせて頂きます。
                </p>
              </div>

              <div class="list__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/flow_item05_img.png" alt="" />
              </div>
            </div>
          </div>
        </li>

        <li class="list__item list__item06">
          <div class="list__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/flow_step_icon06.png" alt="" />
          </div>
          <div class="list__upper">
            <div class="list__box">
              <div class="list__txtbox">
                <h3 class="list__ttl">車検終了</h3>
                <p class="list__txt">
                  車検終了後に適合標章を発行。点検・整備の結果を整備士からご説明いたします。
                </p>
              </div>

              <div class="list__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/flow_item06_img.png" alt="" />
              </div>
            </div>
          </div>
          <div class="list__lower">
            <div class="list__lower__img">
              <picture>
                <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/flow_item06b_img_sp.png" />
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/flow_item06b_img.png" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/2x/flow_item06b_img.png" alt="" />
              </picture>
            </div>
          </div>
        </li>
      </ol>
    </div>
  </section>
  <!-- step -->

  <section class="belongings" id="belongings">
    <div class="inner-m">
      <div class="belongings__box">
        <p class="belongings__ttl">車検当日にご用意いただくもの</p>
        <ul class="list">
          <li class="list__item">・自動車検査証（車検証）</li>
          <li class="list__item">
            ・自動車損害賠償（自賠責）<br />保険証明書
          </li>
          <li class="list__item">・自動車税納税証明書</li>
          <li class="list__item">・任意保険証券</li>
          <li class="list__item">・印鑑（認印）</li>
          <li class="list__item">・車検費用</li>
          <li class="list__item">・車輌</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- belongings -->

  <section class="interest" id="interest">
    <div class="inner-m">
      <div class="interest__box">
        <div class="btn btn--red2 btn--r interest__btn">
          <a href="<?php echo home_url('/online/'); ?>"><span>今すぐオンライン予約！</span></a>
        </div>

        <div class="btn btn--blue2 btn--r interest__btn">
          <a href="<?php echo home_url('/store/'); ?>"><span>店舗情報はこちらから</span></a>
        </div>

        <div class="btn btn--yellow2 btn--r interest__btn">
          <a href="<?php echo home_url('/form/'); ?>#sec02"><span>ガリレオQ&Aはコチラ</span></a>
        </div>
      </div>
    </div>
  </section>
  <!-- belongings -->



  <!----------- 店舗情報 -------------->

<?php elseif (is_page('store')) : ?>

  <section class="maintit">
    <div class="inner-w">
      <h1 class="maintit__txt">店舗情報</h1>
    </div>
  </section>
  <!-- eyecatch -->
  <section class="sec01" id="sec01">
    <div class="inner-m">
      <p class="read">
        奈良(奈良市・橿原市)、愛知(津島市)で<br class="sp">お待ちしています。
      </p>

      <?php query_posts('post_type=shop_menu&showposts=-1'); ?>
      <?php if (have_posts()) : while (have_posts()) : the_post();

          // 店舗情報
          $shop_name      = esc_attr($post->post_name);
          $shop_add      = get_field('shop_add');
          $shop_time      = get_field('shop_time');
          $shop_tel      = get_field('shop_tel');
          $shop_fax      = get_field('shop_fax');
          $shop_mail      = get_field('shop_mail');
          $shop_map      = get_field('shop_map');
          $shop_mapblank      = get_field('shop_mapblank');
          $shop_thumb      = get_field('shop_thumb');
      ?>

          <div class="shop">
            <h2 class="shop__tit"><?php the_title(); ?></h3>
              <div class="shop__box">
                <div class="shop__table">
                  <table>
                    <tbody>
                      <tr>
                        <th>住所</th>
                        <td><?php echo $shop_add; ?></td>
                      </tr>
                      <tr>
                        <th>営業時間</th>
                        <td><?php echo $shop_time; ?></td>
                      </tr>
                      <tr>
                        <th>TEL</th>
                        <td><a href="tel:<?php echo $shop_tel; ?>" target="_blank"><?php echo $shop_tel; ?></a></td>
                      </tr>
                      <tr>
                        <th>FAX</th>
                        <td><?php echo $shop_fax; ?></td>
                      </tr>
                      <tr>
                        <th>mail</th>
                        <td><?php echo $shop_mail; ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="shop__thumb">

                  <img src="<?php echo $shop_thumb; ?>" alt="<?php the_title(); ?>" />
                </div>
              </div>
              <p class="shop__att">※輸入車の車検には対応しておりません。予めご了承ください。※不正に改造された車両の車検はお断りいたします。</p>

              <div class="map">
                <?php echo $shop_map; ?>
              </div>

              <div class="btn btn--red2 shop__btn">
                <a href="<?php echo home_url('/') . "online-" . $shop_name; ?>"><span>オンライン予約はコチラから</span></a>
              </div>

          </div>
          <!-- shop -->


      <?php endwhile;
      endif; ?>
      <?php query_posts($query_string); ?>


    </div>
    <!-- inner-m -->
  </section>
  <!-- sec01 -->


  <!----------- オンライン予約ここから -------------->

<?php elseif (is_page('online')) : ?>



  <section class="maintit">
    <div class="inner-w">
      <h1 class="maintit__txt">オンライン予約</h1>
    </div>
  </section>
  <!-- eyecatch -->

  <section class="sec">
    <div class="inner-m">

      <div class="termsprivacy">
        <h2 class="termsprivacy__tit">利用規約および個人情報の取扱いについて</h2>
        <p class="termsprivacy__txt">本システムのご利用にあたりましては、<br class="sp">必ず利用規約および個人情報の取扱いをご覧ください。<br>
          ［ <a href="<?php echo home_url('/terms/'); ?>">利用規約</a> ] ［ <a href="https://www.net-keina.co.jp/privacy/" target="_blank">個人情報の取扱い</a> ] に同意する<br>
          ※なお、本システムでご予約いただきました場合は、<br class="sp">上記に同意いただけたものとします。</p>
      </div>


      <div class="stepbar">
        <div class="list current">
          <p class="list__tit">
            <span>店舗を<br class="sp">選ぶ</span>
          </p>
        </div>
        <div class="list">
          <p class="list__tit">
            <span>日にちを<br class="sp">選ぶ</span>
          </p>
        </div>

        <div class="list">
          <p class="list__tit">
            <span>時間を<br class="sp">選ぶ</span>
          </p>
        </div>
        <div class="list">
          <p class="list__tit">
            <span>お客様<br class="sp">情報入力</span>
          </p>
        </div>
        <div class="list">
          <p class="list__tit">
            <span>予約<br class="sp">完了</span>
          </p>
        </div>
      </div>
      <!--stepbar -->


      <div class="onlinereserver">
        <h2 class="onlinereserver__tit">

          <!-- 店舗を選ぶ -->
          <?php if (is_page('online')) : ?>
            ご予約する店舗を選択してください。
            <!-- /店舗を選ぶ -->
          <?php endif; ?>


        </h2>
        <p class="onlinereserver__read">※輸入車の車検には対応しておりません。予めご了承ください。<br>※不正に改造された車両の車検はお断りいたします。</p>
      </div>
      <!-- onlinereserver -->



      <!-- 店舗を選ぶ -->
      <?php if (is_page('online')) : ?>
        <div class="shop">

          <?php query_posts('post_type=shop_menu&showposts=-1'); ?>
          <?php if (have_posts()) : while (have_posts()) : the_post();

              // 店舗情報
              $shop_name      = esc_attr($post->post_name);
              $shop_add      = get_field('shop_add');
              $shop_time      = get_field('shop_time');
              $shop_tel      = get_field('shop_tel');
              $shop_fax      = get_field('shop_fax');
              $shop_mail      = get_field('shop_mail');
              $shop_map      = get_field('shop_map');
              $shop_mapblank      = get_field('shop_mapblank');
              $shop_thumb      = get_field('shop_thumb');

          ?>
              <?php if ($shop_name != "kashi") : ?>
                <div class="box">
                  <div class="thumb">
                    <div class="thumb__img"><img src="<?php echo $shop_thumb; ?>" alt="<?php the_title(); ?>"></div>
                  </div>
                  <div class="infomation">
                    <h3 class="infomation__tit"><?php the_title(); ?><div class="btn btn--blue"><a href="<?php echo $shop_mapblank; ?>" target="_blnak"><span>MAP</span></a></div>
                    </h3>
                    <p class="infomation__txt"><?php echo $shop_add; ?></p>
                    <p class="infomation__txt">営業時間：<?php echo $shop_time; ?></p>
                    <p class="infomation__txt">TEL：<a href="tel:<?php echo $shop_tel; ?>" target="_blank"><?php echo $shop_tel; ?></a>　FAX：<?php echo $shop_fax; ?></p>
                    <p class="infomation__txt">mail：<?php echo $shop_mail; ?></p>
                  </div>


                  <div class="reserve">
                    <div class="btn btn--red"><a href="<?php echo home_url('/') . "online-" . $shop_name; ?>"><span>予約する</span></a></div>
                  </div>


                </div>
                <!-- box -->
              <?php endif; ?>

          <?php endwhile;
          endif; ?>
          <?php query_posts($query_string); ?>

        </div>
        <!-- shop -->
      <?php endif; ?>
      <!-- /店舗を選ぶ -->


    </div>
  </section>
  <!-- sec01 -->
  <!----------- オンライン予約ここまで -------------->


  <!----------- お問い合わせここから -------------->

<?php elseif (is_page('form') || is_page('form2')) : ?>


  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>


    <?php endwhile;
  else : ?>
  <?php endif; ?>



  <!----------- お問い合わせここまで -------------->


  <!----------- おトク情報ここから -------------->

<?php elseif (is_page('information')) : ?>

  <section class="maintit">
    <div class="inner-w">
      <h1 class="maintit__txt">おトク情報</h1>
    </div>
  </section>
  <!-- eyecatch -->

  <section class="sec" id="#sec01">
    <div class="inner-m">
      <p class="read">ガリレオ車検のお得情報を掲載しています。<br>バナーをクリックしてご確認ください。</p>


      <div class="list">



        <?php query_posts('post_type=information_menu&showposts=-1'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post();
            $pdfurl = wp_get_attachment_url(get_post_thumbnail_id());
        ?>

            <div class="list__item">
              <a target="_blank" href="<?php echo $pdfurl; ?>">
                <?php the_post_thumbnail('', array('alt' => get_the_title()));  ?>
              </a>
            </div>

        <?php endwhile;
        endif; ?>
        <?php query_posts($query_string); ?>


      </div>
      <!-- list -->
  </section>
  <!-- sec01 -->



  <!----------- おトク情報ここまで -------------->


  <!----------- オンライン予約ここから -------------->


<?php elseif ((false !== strpos($url, 'online-')) || (is_page('booking-form')) || (is_page('booking-thanks'))) : ?>

  <section class="maintit">
    <div class="inner-w">
      <h1 class="maintit__txt">オンライン予約</h1>
    </div>
  </section>


  <section class="sec">
    <div class="inner-m">


      <?php if (!is_page("booking-thanks")) : ?>
        <div class="termsprivacy">
          <h2 class="termsprivacy__tit">利用規約および個人情報の取扱いについて</h2>
          <p class="termsprivacy__txt">本システムのご利用にあたりましては、<br class="sp">必ず利用規約および個人情報の取扱いをご覧ください。<br>
            ［ <a href="<?php echo home_url('/terms/'); ?>">利用規約</a> ] ［ <a href="https://www.net-keina.co.jp/privacy/" target="_blank">個人情報の取扱い</a> ] に同意する<br>
            ※なお、本システムでご予約いただきました場合は、<br class="sp">上記に同意いただけたものとします。</p>
        </div>
      <?php endif; ?>


      <div class="stepbar">
        <div class="list">
          <p class="list__tit">
            <span>店舗を<br class="sp">選ぶ</span>
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
            <span>日にちを<br class="sp">選ぶ</span>
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
            <span>時間を<br class="sp">選ぶ</span>
          </p>
        </div>
        <div class="list
	<?php if (is_page('booking-form')) : ?>
				current
	<?php endif; ?>
	">
          <p class="list__tit">
            <span>お客様<br class="sp">情報入力</span>
          </p>
        </div>
        <div class="list
	  <?php if (is_page("booking-thanks")) : ?>
		current
<?php endif; ?>">
          <p class="list__tit">
            <span>予約<br class="sp">完了</span>
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

          <p class="onlinereserver__read">※輸入車の車検には対応しておりません。<br class="sp">予めご了承ください。
            <br>※不正に改造された車両の車検はお断りいたします。
          </p>
         <?php if (false !== strpos($url, 'utm')) : ?>
            <div class="onlinereserver__setting">
              <p class="onlinereserver__setting__txt">弊社からのメールが受信できるようになっているか、<br class="sp">受信設定をご確認の上お進みください。<br>
                詳しくは、<a href="/mail-setup/">自動返信メールが届かないお客様へ</a>を<br class="sp">ご確認ください。<br>メールアドレス指定受信をされている場合は、<br class="sp">下記のメールアドレスを<br>あらかじめ受信指定に追加設定をお願いします。</p>
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
            なお仮予約のため、ご予約は確定して<br class="sp">おりませんのでご注意ください。<br>
            確認のメールをお送りしましたので、<br class="sp">予約内容を必ずご確認ください。</p>
          <dl class="unsent">
            <dt>メールが届かないというお客様は<br class="sp">下記をご確認ください。</dt>
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

      <?php if (!(is_page("booking-thanks"))) : ?>

        <div class="btn--back"><a href="javascript:history.back();"><span>
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

            </span></a></div>

      <?php endif; ?>



      <?php wp_reset_query(); ?>
    </div>
  </section>

  <!-- sec01 -->
  <!----------- オンライン予約ここまで -------------->


  <!----------- 問い合わせ完了ページここから -------------->
<?php elseif (is_page('formthank') || is_page('questionnairethank')) : ?>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile;
  else : ?>
  <?php endif; ?>
  <!----------- 問い合わせ完了ここまで -------------->
  
    <!----------- 自動返信メールが届かないお客様へ -------------->
  
  <?php elseif (is_page('mail-setup')) : ?>
  
    <section class="maintit">
      <div class="inner-w">
        <h1 class="maintit__txt">自動返信メールが届かないお客様へ</h1>
      </div>
    </section>
    <section class="sec01">
      <div class="inner-m">
        <h2 class="sec01__ttl01">自動返信メールが届かないお客様へ</h2>
        <p class="sec01__txt01">Web予約、お問合せフォームにご入力、送信いただきますと、弊社にメールが届いた旨を知らせる自動返信メールを、お客様がご入力いただきましたメールアドレス宛てに送らせていただいております。お問い合わせから1時間経っても自動返信メールが届かない場合、以下の原因が考えられますので、ご確認ください。</p>
  
        <div class="sec01__box">
          <h3 class="sec01__ttl02">メールアドレスの記入間違い</h3>
          <p class="sec01__txt02">メールアドレスをご記入の際は、間違いが無いか再度ご確認ください。<br>メール送信後にアドレスの間違いにお気づきになった場合は、お電話かメールにてお問い合わせください。</p>
        </div>
  
        <div class="sec01__box">
          <h3 class="sec01__ttl02">フリーメールのフィルタリング機能により迷惑メールとして処理されている</h3>
          <p class="sec01__txt02">フリーメール（YahooメールやHotmailなど）をご利用の場合、迷惑メールフィルタリング機能により、返信メールを迷惑メール（スパムメール）として扱われている場合があります。フリーメールの「迷惑メールフォルダ」や「削除フォルダ」等をご確認ください。<br>
            <span class="cl-red">※フリーメールの種類や設定によっては、振り分けられたメールが数日後に自動削除される場合がございます。</span>
          </p>
        </div>
  
        <div class="sec01__box">
          <h3 class="sec01__ttl02">セキュリティソフトによって、迷惑メールとして処理されている</h3>
          <p class="sec01__txt02">セキュリティソフトをご使用の場合、返信メールを迷惑メールと判断して、「スパムフォルダ」に振り分けられている場合がありますのでご確認ください。<br>また、ソフトウェアの種類や設定によっては受信拒否や削除されている場合があります。<br>お使いのソフトウェアの設定をご確認ください。</p>
        </div>
  
        <div class="sec01__box">
          <h3 class="sec01__ttl02">ご使用のメールサーバーの容量が一杯になっている</h3>
          <p class="sec01__txt02">メールサーバーの容量が一杯になると、メールの受信ができなくなります。
            ご確認のうえ、メールサーバーの容量を確保してください。<br>
            <span class="cl-red">※詳しい方法は、メールアドレスを取得されたプロバイダやフリーメール提供元などにお問い合わせください。</span>
          </p>
        </div>
  
        <div class="sec01__box">
          <h3 class="sec01__ttl02">携帯電話のアドレスをご記入の方</h3>
          <p class="sec01__txt02">ドメイン指定受信をされている場合は、弊社からのメールが受信できるように「@galileo-syaken.com」「@gmail.com」をあらかじめ受信指定に追加設定をお願いします。</p>
          <p class="sec01__txt02">メールアドレス指定受信をされている場合は、弊社からのメールが受信できるように下記の各メールアドレスをあらかじめ受信指定に追加設定をお願いします。</p>
          <p class="sec01__txt02">●オンライン予約の場合<br>
            【オンライン予約：メールアドレス】galileo.syaken2020@gmail.com</p>
          <p class="sec01__txt02">●お問い合わせの場合<br>
            【奈良店：メールアドレス】nara@galileo-syaken.com<br>
            【津島本店：メールアドレス】tsushima@galileo-syaken.com<br>
            【橿原店：メールアドレス】kashihara@galileo-syaken.com</p>
        </div>
      </div>
    </section>
  
    <!----------- 自動返信メールが届かないお客様へここまで -------------->
  
    <!----------- その他ページここから -------------->
<?php else : ?>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile;
  else : ?>
  <?php endif; ?>


<?php endif; ?>
<!----------- その他ページここまで -------------->


<?php get_footer(); ?>