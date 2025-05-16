<?php
/*
Template Name: 車検費用シミュレーター
*/
get_header();
?>
<!-- MVを表示 -->
<?php get_template_part('template-parts/subview'); ?>

<section class="p-simulator__outline">
	<div class="p-simulator ">

		<div class="inner-m">

			<div class="ttl">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/simulator/simulator_img01.webp" alt="カンタン4ステップ車検費用シミュレーター">
			</div>
			<h2 class="ttl__txt">車両タイプ・車検コース・割引メニュー・車検オプションを選ぶだけで、<br class="u-pc">車検概算費用シミュレーションができます！</h2>
			<div class="inner">
				<div id="app1">

					<div class="box">

						<h3 class="h2"><span class="h2__num">STEP1</span>お客様の車両対応を選択してください。</h3>

						<div class="model">

							<input type="radio" v-model="carmodel" id="model01" v-bind:value="1" v-on:click="modelBtnActive()">
							<label class="model__item" for="model01">
								<span class="model__txt1 model__txt1--ex">軽自動車</span>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/simulator/simulator_img02.webp" alt="軽自動車">
								<span class="model__txt3">ハスラー・N-BOX・<br>ワゴンR・タント etc.</span>
							</label>

							<input type="radio" v-model="carmodel" id="model02" v-bind:value="2" v-on:click="modelBtnActive()">
							<label class="model__item" for="model02">
								<span class="model__txt1">小型乗用車</span>
								<span class="model__txt2">（車両重量1,000kg以下）</span>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/simulator/simulator_img03.webp" alt="小型乗用車">
								<span class="model__txt3">パッソ・アクア・<br>ヴィッツ・マーチ etc.</span>
							</label>

							<input type="radio" v-model="carmodel" id="model03" v-bind:value="3" v-on:click="modelBtnActive()">
							<label class="model__item" for="model03">
								<span class="model__txt1">中型乗用車</span>
								<span class="model__txt2">（車両重量1,001〜<br class="u-sp">1,500kg）</span>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/simulator/simulator_img04.webp" alt="中型乗用車">
								<span class="model__txt3">ノート・ウィッシュ・<br>ラクティス・レガシィ etc.</span>
							</label>

							<input type="radio" v-model="carmodel" id="model04" v-bind:value="4" v-on:click="modelBtnActive()">
							<label class="model__item" for="model04">
								<span class="model__txt1">大型乗用車</span>
								<span class="model__txt2">（車両重量1,501〜<br class="u-sp">2,000kg以下）</span>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/simulator/simulator_img05.webp" alt="大型乗用車">
								<span class="model__txt3">ノア・クラウン・オデッセイ・<br>エスティマ etc.</span>
							</label>
						</div>
					</div>

					<div class="box">

						<h3 class="h2"><span class="h2__num">STEP2</span>ご希望の車検コースを選択してください。</h3>

						<div class="course">

							<input type="radio" v-model="couseplan" id="quick" v-bind:value="1" :disabled="planBtnDisabled" v-on:click="quickBtnActive()">
							<label for="quick" class="course__item">
								<span class="course__txt1">＼ 価格重視 ／</span>
								<span class="course__txt2">エコノミー</span>
								<span class="course__txt3">車検コース</span>
							</label>

							<input type="radio" v-model="couseplan" id="premium" v-bind:value="2" :disabled="planBtnDisabled" v-on:click="premiumBtnActive()">
							<label class="course__item course__item--standard" for="premium">
								<span class="course__txt1">＼ 一番人気 ／</span>
								<span class="course__txt2">スタンダード</span>
								<span class="course__txt3">車検コース</span>
							</label>

							<input type="radio" v-model="couseplan" id="plusone" v-bind:value="3" :disabled="planBtnDisabled" v-on:click="plusoneBtnActive()">
							<label class="course__item course__item--plusone" for="plusone">
								<span class="course__txt1">＼ より安心・安全 ／</span>
								<span class="course__txt2">プラスワン</span>
								<span class="course__txt3">車検コース</span>
							</label>

						</div>

					</div>

					<div class="box">

						<h3 class="h2"><span class="h2__num">STEP3</span>お客様が対象の割引メニューを選択してください。</h3>

						<div class="discount" v-show="showQuick">

							<h4 class="discount__h1">「ガリレオ車検」割引メニュー</h4>

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
								<span class="option__h1">オプション<br class="u-pc">なし</span>
							</label>
							<!-- オプション：なし END -->

							<!-- オプション：よく選ばれるオプションセット START -->
							<input type="radio" v-model="option" id="nomal" v-bind:value="1" :disabled="optionBtnDisabled">
							<label class="option__item" for="nomal">
								<span class="option__h1">よく選ばれる<br class="u-pc">オプションセット</span>
								<span class="option__txt1">お客様がよく選ばれる<br class="u-pc">基本的なオプションセットです。</span>
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
								<span class="option__h1">スペシャル<br class="u-pc">オプションセット</span>
								<span class="option__txt1">ガリレオ車検厳選の<br class="u-pc">スペシャルオプションセットです。</span>
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
				<a href="<?php echo home_url('/online'); ?>" class="btn-more">今すぐオンライン予約！</a>
			</div>

		</div>

	</div>
</section>

<?php get_footer(); ?>