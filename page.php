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
          <span class="h2__num">現在の見積もり内容</span>
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
          <p class="onlinereserver__read">※輸入車の車検には対応しておりません。<br class="sp">予めご了承ください。<br>※不正に改造された車両の車検はお断りいたします。
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


  <!-- eyecatch -->

  <!----------- 自動返信メールが届かないお客様へここまで -------------->

  <!----------- 料金案内ページここから -------------->
<?php elseif (is_page('price')) : ?>
  <section class="maintit">
    <div class="inner-w">
      <h1 class="maintit__txt">料金案内</h1>
    </div>
  </section>
  <!-- eyecatch -->

  <section class="course">
    <div class="inner-m">
      <h2 class="course__tit">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/guide_ttl_sp.png" />
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/guide_ttl.png" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/2x/guide_ttl.png" alt="" />
        </picture>
      </h2>
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
  </section>
  <!-- course -->

  <section class="compare">
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
  </section>
  <!-- compare -->

  <section class="price">
    <div class="inner-m">
      <div class="btn btn--orange btn--b quick__btn">
        <a href="#premium"><span>プレミアム車検の料金はこちら</span></a>
      </div>

      <div class="quick" id="quick">
        <h4 class="quick__ttl">クイック車検の料金表</h4>
        <div class="quick__box quick__box__item01">
          <table class="quick__table">
            <tbody>
              <tr class="thumb">
                <th rowspan="2">車種</th>
                <th>
                  <div>軽自動車</div>
                  <div>　</div>
                  <div><em><span class="fs_BarlowCondensed">37,290</span>円</em><strong>(税込)〜</strong></div>
                </th>
                <th>
                  <div>小型乗用車</div>
                  <div>（車両重量1,000kg以下）</div>
                  <div><em><span class="fs_BarlowCondensed">47,200</span>円</em><strong>(税込)〜</strong></div>
                </th>
                <th>
                  <div>中型乗用車</div>
                  <div>（車両重量1,001〜1,500kg）</div>
                  <div><em><span class="fs_BarlowCondensed">55,400</span>円</em><strong>(税込)〜</strong></div>
                </th>
                <th>
                  <div>大型乗用車</div>
                  <div>（車両重量1,501〜2,000kg以下）</div>
                  <div><em><span class="fs_BarlowCondensed">63,600</span>円</em><strong>(税込)〜</strong></div>
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
                  全車種一律 <em class="fs_BarlowCondensed">15,900<span>円</span></em>
                </td>
              </tr>
              <tr class="representation">
                <th>代行手数料</th>
                <td colspan="4">
                  全車種一律 <em class="fs_BarlowCondensed">0<span>円</span></em>
                </td>
              </tr>
              <tr class="representation">
                <th>保安確認検査料</th>
                <td colspan="4">
                  全車種一律 <em class="fs_BarlowCondensed">2,200<span>円</span></em>
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
                <td><span class="fs_BarlowCondensed">17,540</span>円</td>
                <td colspan="3"><span class="fs_BarlowCondensed">17,650</span>円</td>
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
                <td><em class="fs_BarlowCondensed">37,290</em><span>円</span>(税込)〜</td>
                <td><em class="fs_BarlowCondensed">47,200</em><span>円</span>(税込)〜</td>
                <td><em class="fs_BarlowCondensed">55,400</em><span>円</span>(税込)〜</td>
                <td><em class="fs_BarlowCondensed">63,600</em><span>円</span>(税込)〜</td>
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
        <h4 class="premium__ttl">プレミアム車検の料金表</h4>
        <div class="premium__box premium__box__item01">
          <table class="premium__table">
            <tbody>
              <tr class="thumb">
                <th rowspan="2">車種</th>
                <th>
                  <div>軽自動車</div>
                  <div>　</div>
                  <div><em><span class="fs_BarlowCondensed">38,490</span>円</em><strong>(税込)〜</strong></div>
                </th>
                <th>
                  <div>小型乗用車</div>
                  <div>（車両重量1,000kg以下）</div>
                  <div><em><span class="fs_BarlowCondensed">48,400</span>円</em><strong>(税込)〜</strong></div>
                </th>
                <th>
                  <div>中型乗用車</div>
                  <div>（車両重量1,001〜1,500kg）</div>
                  <div><em><span class="fs_BarlowCondensed">56,600</span>円</em><strong>(税込)〜</strong></div>
                </th>
                <th>
                  <div>大型乗用車</div>
                  <div>（車両重量1,501〜2,000kg以下）</div>
                  <div><em><span class="fs_BarlowCondensed">64,800</span>円</em><strong>(税込)〜</strong></div>
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
                  全車種一律 <em class="fs_BarlowCondensed">25,900<span>円</span></em>
                </td>
              </tr>
              <tr class="representation">
                <th>代行手数料</th>
                <td colspan="4">
                  全車種一律 <em class="fs_BarlowCondensed">0<span>円</span></em>
                </td>
              </tr>
              <tr class="representation">
                <th>保安確認検査料</th>
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
                <td><span class="fs_BarlowCondensed">17,540</span>円</td>
                <td colspan="3"><span class="fs_BarlowCondensed">17,650</span>円</td>
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
                <td><em class="fs_BarlowCondensed">38,490</em><span>円</span>(税込)〜</td>
                <td><em class="fs_BarlowCondensed">48,400</em><span>円</span>(税込)〜</td>
                <td><em class="fs_BarlowCondensed">56,600</em><span>円</span>(税込)〜</td>
                <td><em class="fs_BarlowCondensed">64,800</em><span>円</span>(税込)〜</td>
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
  </section>

  <!----------- 料金案内ページここまで -------------->

  <!----------- おすすめ整備メニューページここから -------------->
<?php elseif (is_page('maintenance')) : ?>
  <section class="maintit">
    <div class="inner-w">
      <h1 class="maintit__txt">おすすめ整備メニュー</h1>
    </div>
  </section>

  <section class="maintenance__wrap">
    <div class="inner-m">
      <h2 class="maintenance__ttl">
        <img src="<?php echo do_shortcode('[template]'); ?>/images/2x/maintenance_ttl.png" alt="＼ メンテナンスもお任せ ／おすすめ整備メニュー">
      </h2>

      <p class="maintenance__txt">ガリレオ車検の整備メニューは、おクルマを快適にお使いいただけるように<br class="pc">故障や事故につながる各種パーツを素早く点検・交換します。
      </p>

      <ul class="maintenance__lnav">
        <li><a href="#sec01">エンジンオイル<br>交換</a></li>
        <li><a href="#sec02">タイヤ<br>交換</a></li>
        <li><a href="#sec03">ブレーキパッド<br>交換</a></li>
        <li><a href="#sec04">バッテリー<br>交換</a></li>
        <li><a href="#sec05">ブレーキオイル<br>交換</a></li>
        <li><a href="#sec06">ATF<br>交換</a></li>
      </ul>

      <div class="maintenance__sec maintenance__sec01" id="sec01">
        <h3>エンジンオイル交換</h3>
        <div class="maintenance__sec__inner">

          <div class="maintenance__guideline">
            <img src="<?php echo do_shortcode('[tp]'); ?>/images/2x/maintenance_sec01_img01.png" alt="">
            <div>
              <p>エンジンオイルが古くなると次第に劣化し、潤滑・冷却・密封作用などの働きができなくなり、出力低下・オーバーヒート・異常摩耗などのトラブルを招き、最終的にエンジンの破損や焼損などを起こします。</p>
              <dl>
                <dt>交換の目安</dt>
                <dd>6ヶ月または、3〜5千km</dd>
              </dl>
            </div>
          </div>

          <div class="maintenance__point maintenance__point01">
            <div>
              <h4>エンジンオイルの役割</h4>
              <ol>
                <li><span>❶</span> 金属磨耗を減らし、エンジンをスムーズに動かす。</li>
                <li><span>❷</span> ピストンの隙間を密封し、パワーを維持。</li>
                <li><span>❸</span> エンジンの冷却。</li>
                <li><span>❹</span> シリンダー内の煤や堆積物（デポジット）を洗い、エンジンをキレイに。</li>
                <li><span>❺</span> エンジン内の水分や酸から錆や腐食を防ぐ。</li>
              </ol>
            </div>
            <img src="<?php echo do_shortcode('[tp]'); ?>/images/2x/maintenance_sec01_img02.png" alt="">

          </div>

          <div class="maintenance__exchange maintenance__exchange01">
            <div>
              <p>エンジンをベストな状態に保つためには、<br>
                <span>3,000km〜5,000kmの<br class="pc">走行を目安にオイル交換<br class="pc">するのが理想です。</span>
              </p>
            </div>
            <img src="<?php echo do_shortcode('[tp]'); ?>/images/2x/maintenance_sec01_img03.png" alt="">
          </div>

          <p class="maintenance__lead"><span>当店のオイル交換システムは、<br>お車の最適量のみの販売で<br class="sp">余りオイルがでません！</span></p>

          <div class="maintenance__price">
            <div>
              <h4>エンジンオイル料金<span>（税込）</span></h4>
              <p><span>●</span>オイル交換工賃：550円　<span>●</span>エレメント交換工賃：330円</p>
            </div>
            <table class="maintenance__price__table maintenance__price__table01">
              <tbody>
                <tr class="bg-pink">
                  <th>ガソリン車</th>
                  <th>軽自動車</th>
                  <th>〜1500<br class="sp">cc</th>
                  <th>〜2000<br class="sp">cc</th>
                  <th>2001<br class="sp">cc以上</th>
                </tr>
                <tr>
                  <td>クリーンコース<br>
                    <em>SM OW-20<br class="sp"> (部分合成油)</em>
                  </td>
                  <td><span class="fs_BarlowCondensed">4,080</span>円</td>
                  <td><span class="fs_BarlowCondensed">4,760</span>円</td>
                  <td><span class="fs_BarlowCondensed">5,440</span>円</td>
                  <td><span class="fs_BarlowCondensed">6,120</span>円</td>
                </tr>
                <tr>
                  <td>あんしんコース<br>
                    <em>SN/CF4 5W-30<br class="sp"> (鉱物油)</em>
                  </td>
                  <td><span class="fs_BarlowCondensed">3,960</span>円</td>
                  <td><span class="fs_BarlowCondensed">4,620</span>円</td>
                  <td><span class="fs_BarlowCondensed">5,280</span>円</td>
                  <td><span class="fs_BarlowCondensed">5,940</span>円</td>
                </tr>
              </tbody>
            </table>
            <table class="maintenance__price__table maintenance__price__table01">
              <tbody>
                <tr class="bg-green">
                  <th>ディーゼル車</th>
                  <th>〜2000<br class="sp">cc</th>
                  <th>〜2500<br class="sp">cc</th>
                  <th>〜3000<br class="sp">cc</th>
                  <th>3001<br class="sp">cc以上</th>
                </tr>
                <tr>
                  <td>専用(DPF)パック<br><em>DL-1 5W-30<br class="sp"> (鉱物油)</em>
                  </td>
                  <td><span class="fs_BarlowCondensed">5,500</span>円</td>
                  <td><span class="fs_BarlowCondensed">6,600</span>円</td>
                  <td><span class="fs_BarlowCondensed">7,700</span>円</td>
                  <td><span class="fs_BarlowCondensed">8,880</span>円</td>
                </tr>
              </tbody>
            </table>
            <p class="maintenance__note">※お好みのコースと排気量をお選びください。※一部の輸入車についてお断りする場合がございます。<br>
              ※不正改造車の作業はいたしません。※オイル交換作業工賃が別途必要です。
            </p>
          </div>

        </div>
      </div>
      <div class="maintenance__sec maintenance__sec02" id="sec02">
        <h3>タイヤ交換</h3>
        <div class="maintenance__sec__inner">

          <div class="maintenance__guideline">
            <img src="<?php echo do_shortcode('[tp]'); ?>/images/2x/maintenance_sec02_img01.png" alt="">
            <div>
              <p>タイヤは、交換を怠ると大きな事故につながる重要な部品のひとつです。安全ドライブの為に一度、プロのチェックをお薦めします。</p>
              <dl>
                <dt>交換の目安</dt>
                <dd>4年または、残量2ミリ以下</dd>
              </dl>
            </div>
          </div>

          <div class="maintenance__point maintenance__point02">
            <div>
              <h4>タイヤ交換の合図</h4>
              <p>タイヤの溝の深さが半分ぐらいになると、急にタイヤの性能が落ちだします。<br class="pc">残り溝が1.6ミリ以下になると「スリップサイン」が現れます。<br class="pc">このまま装着し続けた状態で走行させると「整備不良」とみなされて「道路交通法の違反」となりますので、法的にタイヤの交換が義務付けてられています。<br class="pc">また、溝の深さにかかわらず、時間とともに劣化していきます。安全面を考えると3〜4年あたりで交換をお薦めします。</p>
            </div>
            <picture>
              <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/maintenance_sec02_img02.png" />
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/maintenance_sec02_img02_sp.png" />
              <img src="<?php echo get_template_directory_uri(); ?>/images/2x/maintenance_sec02_img02_sp.png" alt="" />
            </picture>
          </div>

          <p class="maintenance__lead"><span>長期間交換していない方、<br class="sp">スリップサインが近い方、<br>早めに交換してください！</span></p>

          <div class="maintenance__price">
            <div>
              <h4>タイヤ交換料金<span>（税込）</span></h4>
            </div>
            <table class="maintenance__price__table02">
              <tbody>
                <tr class="bg-gray">
                  <th>作業工賃</th>
                  <th>廃タイヤ処分料</th>
                  <th>エアーバルブ価格</th>
                </tr>
                <tr>
                  <td><span class="fs_BarlowCondensed">1,100</span><span>円/本〜
                    </span></td>
                  <td><span class="fs_BarlowCondensed">550</span><span>円/本〜</span></td>
                  <td><span class="fs_BarlowCondensed">275</span><span>円/本〜</span></td>
                </tr>
              </tbody>
            </table>
            <p class="maintenance__note">※タイヤは、ご自身でご用意ください。※新規で購入される場合は別途費用がかかります。</p>
          </div>
        </div>
      </div>
      <div class="maintenance__sec maintenance__sec03" id="sec03">
        <h3>ブレーキパッド交換</h3>
        <div class="maintenance__sec__inner">

          <div class="maintenance__guideline">
            <img src="<?php echo do_shortcode('[tp]'); ?>/images/2x/maintenance_sec03_img01.png" alt="">
            <div>
              <p>ブレーキパッドは、ブレーキディスクをはさみこみ、タイヤの回転を止める重要な部品です。<br>
                車の使われ方（走行距離や使用回数等）によって摩耗の差が出ますので、定期的な点検をお薦めします。</p>
              <dl>
                <dt>交換の目安</dt>
                <dd>残りが、3ミリ以下</dd>
              </dl>
            </div>
          </div>

          <div class="maintenance__point maintenance__point03">
            <div>
              <h4>ブレーキパッド交換の合図</h4>
              <p>リザーバータンクの液量が減るとウォーニングランプが点灯します。ウォーニングランプが点灯したらブレーキパッドの摩耗または、ブレーキフルード漏れの可能性があります。</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/2x/maintenance_sec03_img02.png" alt="" />
          </div>

          <p class="maintenance__lead"><span>ブレーキパッドが減っていたり、<br class="sp">ブレーキ時に<br class="pc">シューシュー<br class="sp">音がしたら交換です！</span></p>

          <div class="maintenance__price">
            <div>
              <h4>ブレーキパッド交換料金<span>（税込）</span></h4>
            </div>
            <table class="maintenance__price__table02">
              <tbody>
                <tr class="bg-gray">
                  <th>ブレーキパッド ＋ 作業工賃</th>
                </tr>
                <tr>
                  <td><span class="fs_BarlowCondensed">11,000</span><span>円/2輪〜</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="maintenance__sec maintenance__sec04" id="sec04">
        <h3>バッテリー交換</h3>
        <div class="maintenance__sec__inner">

          <div class="maintenance__guideline">
            <img src="<?php echo do_shortcode('[tp]'); ?>/images/2x/maintenance_sec04_img01.png" alt="">
            <div>
              <p>「バッテリー上がり」は突然やってきます。出先での突然の始動不能！これではせっかくのドライブが台無しです。<br>
                トラブルになる前に早めのバッテリー交換をお薦めします。</p>
              <dl>
                <dt>交換の目安</dt>
                <dd>2〜3年</dd>
              </dl>
            </div>
          </div>

          <div class="maintenance__point maintenance__point04">
            <h4>気をつけよう！<br class="sp">バッテリー寿命を短くする行為</h4>
            <div>
              <ol>
                <li><span>●</span> 1日に何度もセルモーターを使用している。</li>
                <li><span>●</span> 夜間しか車を使用しない。</li>
                <li><span>●</span> 常時、エアコンを使用している。(放電過多)</li>
                <li><span>●</span> 常時、渋滞路を走行している。(渋滞通勤等)</li>
                <li><span>●</span> 一度に走行する距離が少ない。(充電不足)</li>
                <li><span>●</span> たまにしか車を使用しない。(充電不足)</li>
              </ol>
            </div>
            <img src="<?php echo do_shortcode('[tp]'); ?>/images/2x/maintenance_sec04_img02.png" alt="">
          </div>

          <p class="maintenance__lead"><span>長期間交換していない方、<br class="sp">上記に当てはまる方、<br>早めに交換してください！</span></p>

          <div class="maintenance__price">
            <div>
              <h4>バッテリー交換料金<span>（税込）</span></h4>
            </div>

            <table class="maintenance__price__table02">
              <tbody>
                <tr class="bg-gray">
                  <th>バッテリー本体 ＋ 作業工賃（軽自動車の場合）</th>
                </tr>
                <tr>
                  <td><span class="fs_BarlowCondensed">8,000</span><span>円〜</span></td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
      </div>
      <div class="maintenance__sec maintenance__sec05" id="sec05">
        <h3>ブレーキオイル交換</h3>
        <div class="maintenance__sec__inner">

          <div class="maintenance__guideline">
            <img src="<?php echo do_shortcode('[tp]'); ?>/images/2x/maintenance_sec05_img01.png" alt="">
            <div>
              <p>ブレーキオイル（フルード）は、時速60km近くで走る1トン前後も重量がある車を、安全確実に停止させる為にとても重要な役割を持つオイルです。劣化するとペーパーロック（オイルの沸騰現象）やブレーキの固着、片効き、ブレーキ系統の漏れ等の原因になります。</p>
              <dl>
                <dt>交換の目安</dt>
                <dd>2年または、車検毎</dd>
              </dl>
            </div>
          </div>

          <div class="maintenance__point maintenance__point05">
            <div>
              <h4>ブレーキの仕組み</h4>
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo do_shortcode('[tp]'); ?>/images/2x/maintenance_sec05_img02.png">
                <img src="<?php echo do_shortcode('[tp]'); ?>/images/2x/maintenance_sec05_img02_sp.png" alt="">
              </picture>

            </div>
          </div>

          <p class="maintenance__lead"><span>ブレーキオイルが<br class="sp">
              茶色く濁っていたり減ったら<br>
              早めに交換してください！</span></p>

          <div class="maintenance__price">
            <div>
              <h4>ブレーキオイル交換料金<span>（税込）</span></h4>
            </div>

            <table class="maintenance__price__table02">
              <tbody>
                <tr class="bg-gray">
                  <th>ブレーキオイル ＋ 作業工賃</th>
                </tr>
                <tr>
                  <td><span class="fs_BarlowCondensed">5,500</span><span>円〜</span></td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
      </div>
      <div class="maintenance__sec maintenance__sec06" id="sec06">
        <h3>ATF交換</h3>
        <div class="maintenance__sec__inner">

          <div class="maintenance__guideline">
            <img src="<?php echo do_shortcode('[tp]'); ?>/images/2x/maintenance_sec06_img01.png" alt="">
            <div>
              <p>AFT（オートマチックトランスミッションフルード）は、1万〜2万km走行すると鉄粉等で真っ黒になり、オートマチック性能も半減してしまいます。定期的な交換をすることで、パワーが復活し快適なドライブができます。</p>
              <dl>
                <dt>交換の目安</dt>
                <dd>2年または、2〜3万km毎</dd>
              </dl>
            </div>
          </div>

          <div class="maintenance__point maintenance__point06">
            <div>
              <h4>ATF交換の合図</h4>
              <ul>
                <li><span>●</span> 変速時のショックが大きくなった。</li>
                <li><span>●</span> 発進・加速時にもたつきを感じる。</li>
                <li><span>●</span> 燃費が悪くなった。</li>
                <li><span>●</span> AT（オートマチックトランスミッション）からノイズがでる。</li>
                </ol>
            </div>
          </div>

          <div class="maintenance__exchange maintenance__exchange06">
            <div>
              <h5>ATFの点検方法</h5>
              <ol>
                <li><span>❶</span> 平な所で10分ほど暖機運転。</li>
                <li><span>❷</span> チェンジレバーをＰ→Ｄ→Ｐへ一度移動。<br>（注意：ブレーキを踏んでください）</li>
                <li><span>❸</span> アイドリング状態でレベルゲージを抜く。</li>
                <li><span>❹</span> 紙・ウエス等でキレイに拭き取り、もう一度レベルゲージを差し込む。</li>
                <li><span>❺</span> 再度抜き取り、オイルの量・色を確認する。</li>
              </ol>
            </div>
            <img src="<?php echo do_shortcode('[tp]'); ?>/images/2x/maintenance_sec06_img02.png" alt="">
          </div>

          <p class="maintenance__lead"><span>上記の症状が出る前に<br>
              定期的な交換を<br class="sp">
              オススメします！</span></p>
          <div class="maintenance__price">
            <div>
              <h4>ATF交換料金<span>（税込）</span></h4>
            </div>

            <table class="maintenance__price__table02">
              <tbody>
                <tr class="bg-gray">
                  <th>ATF ＋ 作業工賃（軽自動車の場合）</th>
                </tr>
                <tr>
                  <td><span class="fs_BarlowCondensed">5,500</span><span>円〜</span>
                  </td>
                </tr>
              </tbody>
            </table>

          </div>

        </div>
      </div>

    </div>
  </section>


  <!-- eyecatch -->
  <!----------- おすすめ整備メニューページここまで -------------->




  <!----------- ガリレオ車検が選ばれる6つの理由ページここから -------------->
<?php elseif (is_page('reason')) : ?>
  <section class="maintit">
    <div class="inner-w">
      <h1 class="maintit__txt">ガリレオ車検が選ばれる6つの理由</h1>
    </div>
  </section>

  <section class="reason01">
    <div class="reason__wrap">
      <h2 class="reason01__ttl">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec01_ttl.png" />
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec01_ttl_sp.png" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec01_ttl_sp.png" alt="1 Webオンライン予約がお得!" />
        </picture>
      </h2>
      <div class="reason__inner">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec01_img01.png" />
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec01_img01_sp.png" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec01_img01_sp.png" alt="ガリレオ車検割引 最大13,350円引" class="reason01__img01" />
        </picture>
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec01_img02.png" />
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec01_img02_sp.png" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec01_img02_sp.png" alt="ガリレオ車検割引" class="reason01__img02" />
        </picture>
        <p class="reason01__att">※各割引の適用条件はスタッフまでお問い合わせください。</p>
        <div class="btn btn--red2 btn--r reserve__btn reason01__btn">
          <a href="<?php echo home_url('/online/'); ?>"><span>今すぐオンライン予約！</span></a>
        </div>
      </div>
    </div>
  </section>
  <section class="reason02">
    <div class="reason__wrap">
      <h2 class="reason02__ttl">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec02_ttl.png" />
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec02_ttl_sp.png" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec02_ttl_sp.png" alt="安心・納得の立会い車検!" />
        </picture>
      </h2>
      <div class="reason__inner">
        <p class="reason02__txt">整備士がお車を見ながら、状態を分かりやすく丁寧に説明。交換部品などもお客様と相談しながら、目の前で作業します。</p>
        <div class="reason02__iframe__outer">
          <div class="iframe__outline reason02__iframe">
            <iframe src="https://www.youtube.com/embed/tM9QYgnKroE?si=qMwDD4HCvdOsgK7k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <!-- <video src="<?php echo get_template_directory_uri(); ?>/movie/galileo_tachiai1004a.mp4" controls poster="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec02_img01.png"></video> -->
          </div>
        </div>
        <div class="btn btn--red2 btn--r reserve__btn reason02__btn">
          <a href="<?php echo home_url('/flow/'); ?>"><span>車検の流れはこちら</span></a>
        </div>
      </div>
    </div>
  </section>

  <section class="reason03">
    <div class="reason__wrap">
      <h2 class="reason03__ttl">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec03_ttl.png" />
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec03_ttl_sp.png" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec03_ttl_sp.png" alt="次回の車検予約がお得!" />
        </picture>
      </h2>
      <div class="reason__inner">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec03_img01.png" />
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec03_img01_sp.png" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec03_img01_sp.png" alt="プレミアム車検コース限定 次回の車検をご予約でエンジンオイル交換 0円 永久無料" class="reason03__img01" />
        </picture>
        <ul class="reason03__att">
          <li>※プレミアム車検コースをご予約いただいた方限定</li>
          <li>※エンジンオイル交換より6ヶ月または走行距離5,000kmでの交換となります。</li>
          <li>※ディーゼル車は半額。</li>
        </ul>
        <div class="btn btn--red2 btn--r reserve__btn reason03__btn">
          <a href="<?php echo home_url('/'); ?>#campaign"><span>初めての方もお得な<br>キャンペーンはこちら</span></a>
        </div>
      </div>

    </div>
  </section>

  <section class="reason04">
    <div class="reason__wrap">
      <h2 class="reason04__ttl">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec04_ttl.png" />
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec04_ttl_sp.png" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec04_ttl_sp.png" alt="6ヶ月後の安心点検が無料!" />
        </picture>
      </h2>
      <div class="reason__inner">
        <p class="reason04__txt01">もっと安心・快適にマイカーをご利用いただくために<br class="pc">ガリレオ車検にて車検や法定12ヶ月点検を受けていただいたマイカーは点検後6ヶ月の安心点検が無料。</p>
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec04_img01.png" />
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec04_img01_sp.png" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec04_img01_sp.png" alt="車検のお客様 6ヶ月 安心点検が無料 法定12ヶ月点検のお客様 18ヶ月安心点検が無料" class="reason04__img01" />
        </picture>
        <p class="reason04__txt02">
          <span>ガリレオ車検</span>で<span>車検</span>と<span>法定12ヶ月点検</span>を<br class="sp">受けていただくと、<br>6ヶ月に1度<span>プロの整備士</span>が<br class="sp">あなたの愛車を点検します。
        </p>
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec04_img02.png" />
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec04_img02_sp.png" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec04_img02_sp.png" alt="自動車の点検スケジュール" class="reason04__img02" />
        </picture>
        <p class="reason04__txt02">安全走行を維持するために、<br>信頼の専門知識と技術力、<br class="sp">国の認証を受けたガリレオ車検に<br><span>「車検」</span>も<span>「法定12ヶ月点検」</span>も<br class="sp">お任せください。
        </p>
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec04_img03.png" />
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec04_img03_sp.png" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec04_img03_sp.png" alt="法定12ヶ月点検は全車一律9,350円" class="reason04__img03" />
        </picture>
        <div class="btn btn--red2 btn--r reserve__btn reason04__btn">
          <a href="<?php echo home_url('/online/'); ?>"><span>今すぐオンライン予約！</span></a>
        </div>
      </div>

    </div>
  </section>

  <section class="reason05">
    <div class="reason__wrap">
      <h2 class="reason05__ttl">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec05_ttl.png" />
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec05_ttl_sp.png" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec05_ttl_sp.png" alt="安心の整備保証付き!" />
        </picture>
      </h2>
      <div class="reason__inner">
        <p class="reason05__txt01">車検が完了した日から6ヶ月または、走行距離10,000kmまで保証します。</p>
        <p class="reason05__att">※整備保証の対象範囲はお問い合わせください。</p>
      </div>
    </div>
  </section>

  <section class="reason06">
    <div class="reason__wrap">
      <h2 class="reason06__ttl">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec06_ttl.png" />
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec06_ttl_sp.png" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/2x/reason_sec06_ttl_sp.png" alt="代車・車検代行手数料が0円!" />
        </picture>
      </h2>
      <div class="reason__inner">
        <p class="reason06__txt01">車検中の代車費用、車検代行手数料が無料になります。</p>
      </div>
    </div>
  </section>
  <!----------- ガリレオ車検が選ばれる6つの理由ページここまで -------------->

  <!----------- その他ページここから -------------->
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