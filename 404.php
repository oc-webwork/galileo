<?php
get_header();
remove_filter('the_content', 'wpautop');
?>

<div class="l-base p-404">

  <p class="u-tac">お探しのページが見つかりませんでした。<br>申し訳ございませんが、<a href="<?php echo home_url('/'); ?>" class="u-orange">こちらのリンク</a>からトップページにお戻りください。</p>

</div>

<?php get_footer(); ?>