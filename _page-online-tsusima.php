<?php
/*
Template Name: オンライン予約：ガリレオ車検　津島本店
*/
get_header();
?>
<!-- MVを表示 -->
<?php get_template_part('template-parts/subview'); ?>


<section class="p-online__outline"></section>

<div class="p-online">

	<div class="sec">
		<div class="inner-m">
			<div class="termsprivacy">
				<h2 class="termsprivacy__tit">利用規約および個人情報の取扱いについて</h2>
				<p class="termsprivacy__txt">本システムのご利用にあたりましては、<br class="sp">必ず利用規約および個人情報の取扱いをご覧ください。<br>
					［ <a href="<?php echo home_url('/terms/'); ?>">利用規約</a> ] ［ <a href="https://www.net-keina.co.jp/privacy/" target="_blank">個人情報の取扱い</a> ] に同意する<br>
					※なお、本システムでご予約いただきました場合は、<br class="sp">上記に同意いただけたものとします。</p>
			</div>

		</div>
	</div>

</div>
</section>
<?php get_footer(); ?>