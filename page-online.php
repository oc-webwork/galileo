<?php
/*
Template Name: オンライン予約
*/
get_header();
?>
<!-- MVを表示 -->
<?php get_template_part('template-parts/subview'); ?>


<section class="p-online__outline">
	<div class="p-online">
		<div class="sec">
			<div class="inner-m">

				<div class="termsprivacy">
					<h2 class="termsprivacy__tit">利用規約および個人情報の取扱いについて</h2>
					<p class="termsprivacy__txt">本システムのご利用にあたりましては、<br class="u-sp">必ず利用規約および個人情報の取扱いをご覧ください。<br>
						［ <a href="<?php echo home_url('/terms'); ?>">利用規約</a> ] ［ <a href="https://www.net-keina.co.jp/privacy/" target="_blank">個人情報の取扱い</a> ] に同意する<br>
						※なお、本システムでご予約いただきました場合は、<br class="u-sp">上記に同意いただけたものとします。</p>
				</div>


				<div class="stepbar">
					<div class="list current">
						<p class="list__tit">
							<span>店舗を<br class="u-sp">選ぶ</span>
						</p>
					</div>
					<div class="list">
						<p class="list__tit">
							<span>日にちを<br class="u-sp">選ぶ</span>
						</p>
					</div>

					<div class="list">
						<p class="list__tit">
							<span>時間を<br class="u-sp">選ぶ</span>
						</p>
					</div>
					<div class="list">
						<p class="list__tit">
							<span>お客様<br class="u-sp">情報入力</span>
						</p>
					</div>
					<div class="list">
						<p class="list__tit">
							<span>予約<br class="u-sp">完了</span>
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
		</div>

	</div>
</section>
<?php get_footer(); ?>