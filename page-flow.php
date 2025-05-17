<?php
/*
Template Name: 車検の流れ
*/
get_header();
?>
<!-- MVを表示 -->
<?php get_template_part('template-parts/subview'); ?>

<div class="p-flow">

	<section class="sec01" id="sec01">
		<div class="inner-m">
			<h2 class="tit">
				<picture>
					<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_ttl_sp.webp" />
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_ttl.webp" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_ttl.webp" alt="" />
				</picture>
			</h2>
			<p class="read">
				コンシェルジュがお車の状態を<br class="u-sp">分かりやすく丁寧にご説明！
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
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_step_icon01.webp" alt="" />
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
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_item01_img.webp" alt="" />
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
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_step_icon02.webp" alt="" />
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
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_item02_img.webp" alt="" />
							</div>
						</div>
					</div>
					<div class="list__lower">
						<div class="list__lower__img">
							<picture>
								<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_item02b_img_sp.webp" />
								<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_item02b_img.webp" />
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_item02b_img.webp" alt="" />
							</picture>
						</div>
					</div>
				</li>

				<li class="list__item list__item03">
					<div class="list__icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_step_icon03.webp" alt="" />
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
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_item03_img.webp" alt="" />
							</div>
						</div>
					</div>
				</li>

				<li class="list__item list__item04">
					<div class="list__icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_step_icon04.webp" alt="" />
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
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_item04_img.webp" alt="" />
							</div>
						</div>
					</div>
				</li>

				<li class="list__item list__item05">
					<div class="list__icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_step_icon05.webp" alt="" />
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
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_item05_img.webp" alt="" />
							</div>
						</div>
					</div>
				</li>

				<li class="list__item list__item06">
					<div class="list__icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_step_icon06.webp" alt="" />
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
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_item06_img.webp" alt="" />
							</div>
						</div>
					</div>
					<div class="list__lower">
						<div class="list__lower__img">
							<picture>
								<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_item06b_img_sp.webp" />
								<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_item06b_img.webp" />
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow_item06b_img.webp" alt="" />
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

</div>
<!-- p-flow -->

<?php get_footer(); ?>