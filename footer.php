<?php
if (!(is_home())) {
	$topurl;
	$topurl = home_url('/');
} else {
}

if (!(is_page("about"))) {
	$abouturl;
	$abouturl = home_url('/about/');
} else {
}

?>

<ul class="p-conversion">
	<li><a href="<?php echo home_url('/online'); ?>">
			<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/common/icon-calendar.webp" alt="">
			車検Web予約</a></li>
	<li><a href="<?php echo home_url('/simulator'); ?>">
			<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/common/icon-simulator.webp" alt="">
			車検費用<br class="sp">シミュレーター</a></li>
	<li><a href="<?php echo home_url('/form'); ?>">
			<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/common/icon-form.webp" alt="">
			お問い合わせ</a></li>
</ul>
</main>
<footer class="p-footer__outline">

	<div class="p-footer">
		<div class="p-footer__inner">
			<div class="p-footer__logo">
				<?php if (is_home()) : ?>
					<img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/common/logo.webp" alt="<?php bloginfo('name'); ?>">
				<?php else : ?>
					<a href="<?php echo home_url('/'); ?>"><img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/common/logo.webp" alt="<?php bloginfo('name'); ?>"></a>
				<?php endif; ?>
			</div>
			<?php wp_nav_menu(
				array(
					'menu'  => 'footer_navigation', //メニュー管理画面で登録したメニュー名
					'container' => '',
					'container_id' => '',
					'container_class' => '',
					'menu_id' => '',
					'menu_class' => 'p-footer__nav'
				)
			); ?>
			<div class="p-footer__banner">
				<a href="https://shimada-repair.com/" target="_blank"><img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/common/banner_img01.webp" alt="クルマの「キズ・ヘコミ」はWEBで無料カンタンお見積り!シマダ自動車整備"></a>
				<a href="https://car-suku.com/index.html" target="_blank"><img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/common/banner_img02.webp" alt="クルマのサブスク カースク"></a>
				<a href="https://www.ins-saison.co.jp/otona/ldp/transition_agent?cid=VXK906" target="_blank"><img src="<?php echo do_shortcode('[tpu]'); ?>/assets/images/common/banner_img03.webp" alt="おとなの自動車保険"></a>
			</div>
		</div>
	</div>
	<small class="p-footer__copy">© 2025 HONDA NET KINKI</small>
</footer>
</body>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<?php if (is_home()) : ?>

	<script>
		//ダイレクトリンク
		$(function() {
			var hash = location.hash;
			hash = (hash.match(/^#tab\d+$/) || [])[0];
			if ($(hash).length) {
				var tabname = hash.slice(1);
				$('.tags li button').removeClass('active');
				var tabno = $('ul.tags li#' + tabname).index() + 1;
				$('ul.tags li#' + tabname + ' button').addClass('active');
				$('ul.tags li#' + tabname + ' button').prop('disabled', true);
				$('.price>.pricewrap' + tabno).addClass('active');

				//top画面へ遷移した時の表示位置調整
				$(window).on('load', function() {
					var hash = location.hash;
					if (hash) {
						var target = $(hash).offset().top - 270;
						$('html,body').animate({
							scrollTop: target
						}, '1');
					}
				});

			} else {
				var tabname = "tab1";
				$('.sec03 .tags li#tab1 button').prop('disabled', true);
				$('.sec03 .tags li#tab1 button').addClass('active');
				$('.sec03 .price>div:first-child').addClass('active');

				//top画面へ遷移した時の表示位置調整
				$(window).on('load', function() {
					var hash = location.hash;
					if (hash) {
						var target = $(hash).offset().top - 100;
						$('html,body').animate({
							scrollTop: target
						}, '1');
					}
				});

			}
		});
	</script>

<?php elseif (is_page('simulator')) : ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/vue.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/simulator.js"></script>
	<script type="text/javascript">
		var userAgent = window.navigator.userAgent.toLowerCase();

		// キャッシュを無視してリロード
		function reloadCheck() {

			if (window.name != 'reloadFlag') {
				window.location.reload(true);
				window.name = 'reloadFlag';
			} else {
				window.name = '';
			}
		}

		window.addEventListener('load', function() {

			// IEのキャッシュ関連の表示不具合対策としてスーパーリロードする
			if (userAgent.indexOf('msie') != -1 ||
				userAgent.indexOf('trident') != -1) {
				reloadCheck()
			}
		});
	</script>

<?php else : ?>
<?php endif; ?>

<?php wp_footer(); ?>

</html>