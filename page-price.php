<?php
/*
Template Name: 料金案内
*/
get_header();
?>
<!-- MVを表示 -->
<?php get_template_part('template-parts/subview'); ?>

<div class="p-mnav__outline">
	<section class="p-mnav">
		<div class="p-mnav__inner">
			<h2>ガリレオ車検は<br class="u-sp">選べる<span>3</span>コース</h2>
			<ul>
				<li>
					<a href="#economy">
						<picture>
							<source srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_mnav_img01-pc.webp" media="(min-width: 768px)">
							<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_mnav_img01.webp" alt="">
						</picture>
					</a>
				</li>
				<li>
					<a href="#standard">
						<picture>
							<source srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_mnav_img02-pc.webp" media="(min-width: 768px)">
							<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_mnav_img02.webp" alt="">
						</picture>
					</a>
				</li>
				<li>
					<a href="#plusone">
						<picture>
							<source srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_mnav_img03-pc.webp" media="(min-width: 768px)">
							<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_mnav_img03.webp" alt="">
						</picture>
					</a>
				</li>
			</ul>
		</div>
	</section>
</div>
<!-- course -->

<div class="p-simplifiedchart__outline">
	<section class="p-simplifiedchart">
		<div class="p-simplifiedchart__inner">
			<table class="p-simplifiedchart__table">
				<tbody>
					<tr>
						<th>実施項目<br class="u-sp">早見表</th>
						<th>
							<picture>
								<source media="(min-width: 768px)" srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_table_img01-pc.webp">
								<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_table_img01.webp" alt="青背景">
							</picture>
						</th>
						<th>
							<picture>
								<source media="(min-width: 768px)" srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_table_img02-pc.webp">
								<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_table_img02.webp" alt="オレンジ背景">
							</picture>
						</th>
						<th>
							<picture>
								<source media="(min-width: 768px)" srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_table_img03-pc.webp">
								<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_table_img03.webp" alt="赤背景">
							</picture>
						</th>
					</tr>
					<tr>
						<th>作業時間<br class="u-sp">（目安）
						</th>
						<td>60分</td>
						<td>90分
						</td>
						<td>1日預かり</td>
					</tr>
					<tr>
						<th>法定点検<br class="u-sp">（箇所）
						</th>
						<td>57箇所</td>
						<td>57箇所
						</td>
						<td>57箇所
						</td>
					</tr>
					<tr>
						<th>安心点検<br class="u-sp">（＋44項目）
						</th>
						<td>×</td>
						<td>×
						</td>
						<td>44箇所
						</td>
					</tr>
					<tr>
						<th>完成検査
						</th>
						<td>●</td>
						<td>●</td>
						<td>●</td>
					</tr>
					<tr>
						<th>診断結果<br class="u-sp">アドバイス
						</th>
						<td>●</td>
						<td>●</td>
						<td>●</td>
					</tr>
					<tr>
						<th>立会車検
						</th>
						<td>●
						</td>
						<td>●</td>
						<td>●</td>
					</tr>
					<tr>
						<th>調整
						</th>
						<td>×</td>
						<td>●</td>
						<td>●</td>
					</tr>
					<tr>
						<th>ベルト/ブレーキ<br class="u-sp">診断保証</th>
						<td>×</td>
						<td>●</td>
						<td>●</td>
					</tr>
					<tr>
						<th>整備保証</th>
						<td>×</td>
						<td>●</td>
						<td>●</td>
					</tr>
					<tr>
						<th>清掃/グリスUP</th>
						<td>×</td>
						<td>●</td>
						<td>●</td>
					</tr>
					<tr>
						<th>オイル交換無料<br class="u-sp">（車検時）</th>
						<td>×</td>
						<td>●</td>
						<td>●</td>
					</tr>
					<tr>
						<th>車検後<br class="u-sp">オイルチケット</th>
						<td>×</td>
						<td>5回半額</td>
						<td>5回無料</td>
					</tr>
					<tr>
						<th>下廻り錆止め</th>
						<td>料金別途</td>
						<td>料金別途</td>
						<td>料金別途</td>
					</tr>
				</tbody>
			</table>
			<p class="p-simplifiedchart__table-note">● … 実施　　× … 対象外</p>
		</div>
	</section>
</div>

<div class="p-lnav__outline">
	<section class="p-lnav">
		<div class="p-lnav__inner">
			<ul>
				<li>
					<a href="#economy">
						<picture>
							<source srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_lnav_img01-pc.webp" media="(min-width: 768px)">
							<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_lnav_img01.webp" alt="">
						</picture>
					</a>
				</li>
				<li>
					<a href="#standard">
						<picture>
							<source srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_lnav_img02-pc.webp" media="(min-width: 768px)">
							<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_lnav_img02.webp" alt="">
						</picture>
					</a>
				</li>
				<li>
					<a href="#plusone">
						<picture>
							<source srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_lnav_img03-pc.webp" media="(min-width: 768px)">
							<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_lnav_img03.webp" alt="">
						</picture>
					</a>
				</li>
			</ul>
		</div>
	</section>
</div>

<div class="p-course__outline -economy" id="economy">
	<section class="p-course -economy">
		<div class="p-course__inner">
			<h2 class="p-course__ttl -economy">エコノミー車検コース</h2>
			<p class="p-course__lead">車のメンテは自分でできる方向けのコース<br>整備のプロや次月に乗り換えが<br class="u-sp">決まっている等の方向け
			</p>

			<div class="p-course__box p-pricemenu -economy">
				<!-- スマホ版・タブレット版で表示 -->
				<div class="p-pricemenu__uniform">
					<h3 class="p-course__subttl -economy">エコノミー車検の料金表<span>（税込）</span></h3>
					<div>
						<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_economy_img01.webp" alt="">
						<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_economy_img02.webp" alt="">
						<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_economy_img03.webp" alt="">
						<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_economy_img04.webp" alt="">
						<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_economy_img05.webp" alt="">
					</div>
				</div>
				<!-- スマホ版・タブレット版で表示 -->

				<!-- PC版のみ表示 -->
				<div class="p-pricemenu__table">
					<h3 class="p-course__subttl -economy">エコノミー車検の料金表<span>（税込）</span></h3>
					<table>
						<tbody>
							<tr class="p-pricemenu__table__head -economy">
								<th rowspan="2">車種</th>
								<th>
									<div>軽自動車</div>
								</th>
								<th>
									<div>小型乗用車</div>
									<span>（車両重量1,000kg以下）</span>
								</th>
								<th>
									<div>中型乗用車</div>
									<span>（車両重量1,001〜1,500kg）</span>
								</th>
								<th>
									<div>大型乗用車</div>
									<span>（車両重量1,501〜2,000kg以下）</span>
								</th>
							</tr>
							<tr class="p-pricemenu__table__head">
								<td>
									<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_economy_img02-pc.webp" alt="軽自動車">
									<p>ハスラー・N-BOX・<br>ワゴンR・タント etc.</p>
								</td>
								<td>
									<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_economy_img03-pc.webp" alt="軽自動車">
									<p>パッソ・アクア・<br>ヴィッツ・マーチ etc.</p>
								</td>
								<td>
									<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_economy_img04-pc.webp" alt="軽自動車">
									<p>ノート・ウィッシュ・<br>ラクティス・レガシィ etc.</p>
								</td>
								<td>
									<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_economy_img05-pc.webp" alt="軽自動車">
									<p>ノア・クラウン・オデッセイ・<br>エスティマ etc.</p>
								</td>
							</tr>
							<tr class="basic">
								<th class="bg-pickup -economy">車検基本費用</th>
								<td colspan="4">
									<span class="fs-22">全車種一律 <em class="font-oswld fs-36">18,900</em> 円</span>
								</td>
							</tr>
							<tr class="basic">
								<th class="bg-pickup -economy">保安確認検査料</th>
								<td colspan="4">
									<span class="fs-22">別途</span>
								</td>
							</tr>

							<tr class="representation">
								<th class="bg-pickup -economy">代行手数料</th>
								<td colspan="4">
									<span class="fs-22">全車種一律 <em class="font-oswld fs-36">0</em>円</span>
								</td>
							</tr>
							<tr class="bg-pickup -economy">
								<th class="fs-19">車検費用合計</th>
								<td colspan="4">
									<span class="fs-22">全車種一律 <em class="font-oswld fs-36">18,900</em>円</span>
								</td>
							</tr>
							<tr class="insurance">
								<th>自賠責保険</th>
								<td><span class="fs-20"><em class="font-oswld fs-30">17,540</em>円</span></td>
								<td colspan="3"><span class="fs-20"><em class="font-oswld fs-30">17,650</em>円</span></td>
							</tr>
							<tr>
								<th>重量税</th>
								<td><span class="fs-20"><em class="font-oswld fs-30">6,600</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">16,400</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">24,600</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">32,800</em>円</span></td>
							</tr>
							<tr>
								<th>印紙代</th>
								<td colspan="4"><span class="fs-20"><em class="font-oswld fs-30">1,800</em>円</span></td>
							</tr>
							<tr class="bg-pickup -economy">
								<th class="fs-19">車検総額</th>
								<td><span class="fs-20"><em class="font-oswld fs-30">44,840</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">54,750</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">62,950</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">71,150</em>円</span></td>
							</tr>
							<tr class="rental">
								<th class="fs-22 cl-red">最大割引</th>
								<td colspan="4">
									<span class="cl-red">
										<span class="fs-22">全車種一律</span>
										<span class="fs-28">最大</span>
										<em class="font-oswld fs-36">6,000</em>
										<span class="fs-27">円引</span>
									</span>
								</td>
							</tr>
							<tr class="bg-pickup -economy cl-red">
								<th class="fs-22">割引後価格</th>
								<td><span class="fs-22"><em class="font-oswld fs-36">38,840</em>円</span></td>
								<td><span class="fs-22"><em class="font-oswld fs-36">46,750</em>円</span></td>
								<td><span class="fs-22"><em class="font-oswld fs-36">54,950</em>円</span></td>
								<td><span class="fs-22"><em class="font-oswld fs-36">63,150</em>円</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- PC版のみ表示 -->
			</div>

			<div class="p-course__box p-message">
				<p class="p-message__txt -economy">
					ハイブリッド車も<br class="u-sp">お任せください!
				</p>
				<p class="p-message__att">
					※ハイブリッド車の車検費用はお問合せください。</p>
			</div>

			<div class="p-course__box p-discount">
				<h3 class="p-course__subttl -economy">ガリレオ車検の<br class="u-sp">お得な割引メニュー</h3>
				<div>
					<picture class="p-discount__img01">
						<source srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_economy_img06-pc.webp" media="(min-width: 768px)">
						<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_economy_img06.webp" alt="">
					</picture>
					<p class="p-discount__txt">下記の中から当てはまる項目の合計金額を割引いたします。</p>
					<picture class="p-discount__img02">
						<source srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_economy_img07-pc.webp" media="(min-width: 768px)">
						<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_economy_img07.webp" alt="">
					</picture>
					<p class="p-discount__att">※各割引の適用条件はスタッフまでお問い合わせください。</p>
				</div>
			</div>

			<p class="p-course__note">●価格は点検により整備必要の無い場合の価格です。※点検の結果、調整整備な場合別途料金が必要になります。●車検部品交換が必要な場合は後日の整備になる場合があります。●上記自賠責保険は24ヵ月の場合です。●輸入車はお受けできない場合があります。●初年度登録より、13年または18年経過している車輌、エコカーは重量税が異なります。●上記価格は一例です。年式、グレードにより価格が変る場合があります。●12ヶ月法定点検法定点検料費用は、9,350円になります。●車両の重量につきましては、車検証をご参考にしてください。</p>

		</div>
	</section>
</div>

<div class="p-lnav__outline">
	<section class="p-lnav">
		<div class="p-lnav__inner">
			<ul>
				<li>
					<a href="#economy">
						<picture>
							<source srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_lnav_img01-pc.webp" media="(min-width: 768px)">
							<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_lnav_img01.webp" alt="">
						</picture>
					</a>
				</li>
				<li>
					<a href="#standard">
						<picture>
							<source srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_lnav_img02-pc.webp" media="(min-width: 768px)">
							<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_lnav_img02.webp" alt="">
						</picture>
					</a>
				</li>
				<li>
					<a href="#plusone">
						<picture>
							<source srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_lnav_img03-pc.webp" media="(min-width: 768px)">
							<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_lnav_img03.webp" alt="">
						</picture>
					</a>
				</li>
			</ul>
		</div>
	</section>
</div>

<div class="p-course__outline -standard" id="standard">
	<section class="p-course -standard">
		<div class="p-course__inner">
			<h2 class="p-course__ttl -standard">スタンダード車検コース</h2>
			<p class="p-course__lead">当店で最もおすすめするスタンダードなコース<br>
				ブレーキのメンテナンスもついて安心のプラン
			</p>

			<div class="p-course__box p-pricemenu -standard">
				<!-- スマホ版・タブレット版で表示 -->
				<div class="p-pricemenu__uniform">
					<h3 class="p-course__subttl -standard">スタンダード車検の料金表<span>（税込）</span></h3>
					<div>
						<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_standard_img01.webp" alt="">
						<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_standard_img02.webp" alt="">
						<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_standard_img03.webp" alt="">
						<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_standard_img04.webp" alt="">
						<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_standard_img05.webp" alt="">
					</div>
				</div>
				<!-- スマホ版・タブレット版で表示 -->

				<!-- PC版のみ表示 -->
				<div class="p-pricemenu__table">
					<h3 class="p-course__subttl -standard">スタンダード車検コースの料金表<span>（税込）</span></h3>
					<table>
						<tbody>
							<tr class="p-pricemenu__table__head -standard">
								<th rowspan="2">車種</th>
								<th>
									<div>軽自動車</div>
								</th>
								<th>
									<div>小型乗用車</div>
									<span>（車両重量1,000kg以下）</span>
								</th>
								<th>
									<div>中型乗用車</div>
									<span>（車両重量1,001〜1,500kg）</span>
								</th>
								<th>
									<div>大型乗用車</div>
									<span>（車両重量1,501〜2,000kg以下）</span>
								</th>
							</tr>
							<tr class="p-pricemenu__table__head">
								<td>
									<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_economy_img02-pc.webp" alt="軽自動車">
									<p>ハスラー・N-BOX・<br>ワゴンR・タント etc.</p>
								</td>
								<td>
									<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_economy_img03-pc.webp" alt="軽自動車">
									<p>パッソ・アクア・<br>ヴィッツ・マーチ etc.</p>
								</td>
								<td>
									<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_economy_img04-pc.webp" alt="軽自動車">
									<p>ノート・ウィッシュ・<br>ラクティス・レガシィ etc.</p>
								</td>
								<td>
									<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_economy_img05-pc.webp" alt="軽自動車">
									<p>ノア・クラウン・オデッセイ・<br>エスティマ etc.</p>
								</td>
							</tr>
							<tr class="basic">
								<th class="bg-pickup -standard">車検基本費用</th>
								<td colspan="4">
									<span class="fs-22">全車種一律 <em class="font-oswld fs-36">22,300</em> 円</span>
								</td>
							</tr>
							<tr class="basic">
								<th class="bg-pickup -standard">保安確認検査料</th>
								<td colspan="4">
									<span class="fs-22">全車種一律 <em class="font-oswld fs-36">6,600</em> 円</span>
								</td>
							</tr>

							<tr class="representation">
								<th class="bg-pickup -standard">代行手数料</th>
								<td colspan="4">
									<span class="fs-22">全車種一律 <em class="font-oswld fs-36">0</em>円</span>
								</td>
							</tr>
							<tr class="bg-pickup -standard">
								<th class="fs-19">車検費用合計</th>
								<td colspan="4">
									<span class="fs-22">全車種一律 <em class="font-oswld fs-36">28,900</em>円</span>
								</td>
							</tr>
							<tr class="insurance">
								<th>自賠責保険</th>
								<td><span class="fs-20"><em class="font-oswld fs-30">17,540</em>円</span></td>
								<td colspan="3"><span class="fs-20"><em class="font-oswld fs-30">17,650</em>円</span></td>
							</tr>
							<tr>
								<th>重量税</th>
								<td><span class="fs-20"><em class="font-oswld fs-30">6,600</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">16,400</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">24,600</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">32,800</em>円</span></td>
							</tr>
							<tr>
								<th>印紙代</th>
								<td colspan="4"><span class="fs-20"><em class="font-oswld fs-30">1,800</em>円</span></td>
							</tr>
							<tr>
								<th>諸費用合計</th>
								<td><span class="fs-20"><em class="font-oswld fs-30">25,940</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">35,850</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">44,050</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">52,250</em>円</span></td>
							</tr>
							<tr class="bg-pickup -standard">
								<th class="fs-19">車検総額</th>
								<td><span class="fs-20"><em class="font-oswld fs-30">54,840</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">64,750</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">72,950</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">81,150</em>円</span></td>
							</tr>
							<tr class="rental">
								<th class="fs-22 cl-red">最大割引</th>
								<td colspan="4">
									<span class="cl-red">
										<span class="fs-22">全車種一律</span>
										<span class="fs-28">最大</span>
										<em class="font-oswld fs-36">6,000</em>
										<span class="fs-27">円引</span>
									</span>
								</td>
							</tr>
							<tr class="bg-pickup -standard cl-red">
								<th class="fs-22">割引後価格</th>
								<td><span class="fs-22"><em class="font-oswld fs-36">48,840</em>円</span></td>
								<td><span class="fs-22"><em class="font-oswld fs-36">58,750</em>円</span></td>
								<td><span class="fs-22"><em class="font-oswld fs-36">66,950</em>円</span></td>
								<td><span class="fs-22"><em class="font-oswld fs-36">75,150</em>円</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- PC版のみ表示 -->
			</div>

			<div class="p-course__box p-message">
				<p class="p-message__txt -standard">
					ハイブリッド車も<br class="u-sp">お任せください!
				</p>
				<p class="p-message__att">
					※ハイブリッド車の車検費用はお問合せください。</p>
			</div>

			<div class="p-course__box p-discount">
				<h3 class="p-course__subttl -standard">ガリレオ車検の<br class="u-sp">お得な割引メニュー</h3>
				<div>
					<picture class="p-discount__img01">
						<source srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_standard_img06-pc.webp" media="(min-width: 768px)">
						<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_standard_img06.webp" alt="">
					</picture>
					<p class="p-discount__txt">下記の中から当てはまる項目の合計金額を割引いたします。</p>
					<picture class="p-discount__img02">
						<source srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_standard_img07-pc.webp" media="(min-width: 768px)">
						<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_standard_img07.webp" alt="">
					</picture>
					<p class="p-discount__att">※各割引の適用条件はスタッフまでお問い合わせください。</p>

					<div class="p-discount__box">
						<picture class="p-discount__img03">
							<source srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_standard_img08-pc.webp" media="(min-width: 768px)">
							<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_standard_img08.webp" alt="">
						</picture>
						<ul>
							<li>※プラスワン車検コースをご利用いただいた方限定</li>
							<li>※エンジンオイル交換より6ヶ月または走行距離5,000kmでの交換となり、エンジンオイル半額交換チケットでのご利用となります。</li>
							<li>※ディーゼル車は半額。</li>
						</ul>
					</div>

				</div>
			</div>

			<p class="p-course__note">●価格は点検により整備必要の無い場合の価格です。※点検の結果、調整整備な場合別途料金が必要になります。●車検部品交換が必要な場合は後日の整備になる場合があります。●上記自賠責保険は24ヵ月の場合です。●輸入車はお受けできない場合があります。●初年度登録より、13年または18年経過している車輌、エコカーは重量税が異なります。●上記価格は一例です。年式、グレードにより価格が変る場合があります。●12ヶ月法定点検法定点検料費用は、9,350円になります。●車両の重量につきましては、車検証をご参考にしてください。</p>
		</div>
	</section>
</div>

<div class="p-lnav__outline">
	<section class="p-lnav">
		<div class="p-lnav__inner">
			<ul>
				<li>
					<a href="#economy">
						<picture>
							<source srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_lnav_img01-pc.webp" media="(min-width: 768px)">
							<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_lnav_img01.webp" alt="">
						</picture>
					</a>
				</li>
				<li>
					<a href="#standard">
						<picture>
							<source srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_lnav_img02-pc.webp" media="(min-width: 768px)">
							<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_lnav_img02.webp" alt="">
						</picture>
					</a>
				</li>
				<li>
					<a href="#plusone">
						<picture>
							<source srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_lnav_img03-pc.webp" media="(min-width: 768px)">
							<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_lnav_img03.webp" alt="">
						</picture>
					</a>
				</li>
			</ul>
		</div>
	</section>
</div>

<div class="p-course__outline -plusone" id="plusone">
	<section class="p-course -plusone">
		<div class="p-course__inner">
			<h2 class="p-course__ttl -plusone">プラスワン車検コース</h2>
			<p class="p-course__lead">年間走行距離が多い方、<br class="u-sp">山間部などの走行が多い方<br>それでも車を大切に長く使用したい<br class="u-sp">という方向けのコース</p>
			<div class="p-course__box p-pricemenu -plusone">
				<!-- スマホ版・タブレット版で表示 -->
				<div class="p-pricemenu__uniform">
					<h3 class="p-course__subttl -plusone">プラスワン車検の料金表<span>（税込）</span></h3>
					<div>
						<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_plusone_img01.webp" alt="">
						<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_plusone_img02.webp" alt="">
						<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_plusone_img03.webp" alt="">
						<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_plusone_img04.webp" alt="">
						<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_plusone_img05.webp" alt="">
					</div>
				</div>
				<!-- スマホ版・タブレット版で表示 -->

				<!-- PC版のみ表示 -->
				<div class="p-pricemenu__table">
					<h3 class="p-course__subttl -plusone">プラスワン車検コースの料金表<span>（税込）</span></h3>
					<table>
						<tbody>
							<tr class="p-pricemenu__table__head -plusone">
								<th rowspan="2">車種</th>
								<th>
									<div>軽自動車</div>
								</th>
								<th>
									<div>小型乗用車</div>
									<span>（車両重量1,000kg以下）</span>
								</th>
								<th>
									<div>中型乗用車</div>
									<span>（車両重量1,001〜1,500kg）</span>
								</th>
								<th>
									<div>大型乗用車</div>
									<span>（車両重量1,501〜2,000kg以下）</span>
								</th>
							</tr>
							<tr class="p-pricemenu__table__head">
								<td>
									<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_economy_img02-pc.webp" alt="軽自動車">
									<p>ハスラー・N-BOX・<br>ワゴンR・タント etc.</p>
								</td>
								<td>
									<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_economy_img03-pc.webp" alt="軽自動車">
									<p>パッソ・アクア・<br>ヴィッツ・マーチ etc.</p>
								</td>
								<td>
									<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_economy_img04-pc.webp" alt="軽自動車">
									<p>ノート・ウィッシュ・<br>ラクティス・レガシィ etc.</p>
								</td>
								<td>
									<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_economy_img05-pc.webp" alt="軽自動車">
									<p>ノア・クラウン・オデッセイ・<br>エスティマ etc.</p>
								</td>
							</tr>
							<tr class="basic">
								<th class="bg-pickup -plusone">車検基本費用</th>
								<td colspan="4">
									<span class="fs-22">全車種一律 <em class="font-oswld fs-36">25,900</em> 円</span>
								</td>
							</tr>
							<tr class="basic">
								<th class="bg-pickup -plusone">保安確認検査料</th>
								<td colspan="4">
									<span class="fs-22">全車種一律 <em class="font-oswld fs-36">6,600</em> 円</span>
								</td>
							</tr>

							<tr class="representation">
								<th class="bg-pickup -plusone">代行手数料</th>
								<td colspan="4">
									<span class="fs-22">全車種一律 <em class="font-oswld fs-36">0</em>円</span>
								</td>
							</tr>
							<tr class="bg-pickup -plusone">
								<th class="fs-19">車検費用合計</th>
								<td colspan="4">
									<span class="fs-22">全車種一律 <em class="font-oswld fs-36">32,500</em>円</span>
								</td>
							</tr>
							<tr class="insurance">
								<th>自賠責保険</th>
								<td><span class="fs-20"><em class="font-oswld fs-30">17,540</em>円</span></td>
								<td colspan="3"><span class="fs-20"><em class="font-oswld fs-30">17,650</em>円</span></td>
							</tr>
							<tr>
								<th>重量税</th>
								<td><span class="fs-20"><em class="font-oswld fs-30">6,600</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">16,400</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">24,600</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">32,800</em>円</span></td>
							</tr>
							<tr>
								<th>印紙代</th>
								<td colspan="4"><span class="fs-20"><em class="font-oswld fs-30">1,800</em>円</span></td>
							</tr>
							<tr>
								<th>諸費用合計</th>
								<td><span class="fs-20"><em class="font-oswld fs-30">25,940</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">35,850</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">44,050</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">52,250</em>円</span></td>
							</tr>
							<tr class="bg-pickup -plusone">
								<th class="fs-19">車検総額</th>
								<td><span class="fs-20"><em class="font-oswld fs-30">58,440</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">68,350</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">76,550</em>円</span></td>
								<td><span class="fs-20"><em class="font-oswld fs-30">84,750</em>円</span></td>
							</tr>
							<tr class="rental">
								<th class="fs-22 cl-red">最大割引</th>
								<td colspan="4">
									<span class="cl-red">
										<span class="fs-22">全車種一律</span>
										<span class="fs-28">最大</span>
										<em class="font-oswld fs-36">6,000</em>
										<span class="fs-27">円引</span>
									</span>
								</td>
							</tr>
							<tr class="bg-pickup -plusone cl-red">
								<th class="fs-22">割引後価格</th>
								<td><span class="fs-22"><em class="font-oswld fs-36">52,440</em>円</span></td>
								<td><span class="fs-22"><em class="font-oswld fs-36">62,350</em>円</span></td>
								<td><span class="fs-22"><em class="font-oswld fs-36">70,550</em>円</span></td>
								<td><span class="fs-22"><em class="font-oswld fs-36">78,750</em>円</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- PC版のみ表示 -->
			</div>

			<div class="p-course__box p-message">
				<p class="p-message__txt -plusone">
					ハイブリッド車も<br class="u-sp">お任せください!
				</p>
				<p class="p-message__att">
					※ハイブリッド車の車検費用はお問合せください。</p>
			</div>

			<div class="p-course__box p-discount">
				<h3 class="p-course__subttl -plusone">ガリレオ車検の<br class="u-sp">お得な割引メニュー</h3>
				<div>
					<picture class="p-discount__img01">
						<source srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_plusone_img06-pc.webp" media="(min-width: 768px)">
						<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_plusone_img06.webp" alt="">
					</picture>
					<p class="p-discount__txt">下記の中から当てはまる項目の合計金額を割引いたします。</p>
					<picture class="p-discount__img02">
						<source srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_plusone_img07-pc.webp" media="(min-width: 768px)">
						<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_plusone_img07.webp" alt="">
					</picture>
					<p class="p-discount__att">※各割引の適用条件はスタッフまでお問い合わせください。</p>

					<div class="p-discount__box">
						<picture class="p-discount__img03">
							<source srcset="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_plusone_img08-pc.webp" media="(min-width: 768px)">
							<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/price/price_plusone_img08.webp" alt="">
						</picture>
						<ul>
							<li>※プラスワン車検コースをご利用いただいた方限定</li>
							<li>※エンジンオイル交換より6ヶ月または走行距離5,000kmでの交換となり、エンジンオイル無料交換チケットでのご利用となります。</li>
							<li>※ディーゼル車は半額。</li>
						</ul>
					</div>

				</div>
			</div>

			<p class="p-course__note">●価格は点検により整備必要の無い場合の価格です。※点検の結果、調整整備な場合別途料金が必要になります。●車検部品交換が必要な場合は後日の整備になる場合があります。●上記自賠責保険は24ヵ月の場合です。●輸入車はお受けできない場合があります。●初年度登録より、13年または18年経過している車輌、エコカーは重量税が異なります。●上記価格は一例です。年式、グレードにより価格が変る場合があります。●12ヶ月法定点検法定点検料費用は、9,350円になります。●車両の重量につきましては、車検証をご参考にしてください。</p>
		</div>
	</section>
</div>


<?php get_footer(); ?>