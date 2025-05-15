<?php
$ttl = ''; // 見出し
$img_url = THEME_DIR_URI; // 画像
// パーマリンクを取得
$page = get_post(get_the_ID());
$slug = $page->post_name;

if (is_post_type_archive("column") || is_singular("column")) {
  // $ttl = 'コラム';
  // $img_url .= 'column/column-topview.webp';
} else if (is_archive() || is_single()) {
  // $ttl = 'お知らせ';
  // $img_url .= 'news/news-topview.webp';
} elseif (is_page("reason")) {
  $ttl = 'ガリレオ車検が選ばれる6つの理由';
} elseif (is_page("about")) {
  $ttl = '会社案内';
} elseif (is_page("flow")) {
  $ttl = '車検の流れ';
} elseif (is_page("form")) {
  $ttl = 'お問い合わせ';
} elseif (is_page("mail-setup")) {
  $ttl = '自動返信メールが届かないお客様へ';
} elseif (is_page("maintenance")) {
  $ttl = 'おすすめ整備メニュー';
} elseif (is_page("online-kashihara")) {
  $ttl = 'ガリレオ車検　橿原店';
} elseif (is_page("online-nara")) {
  $ttl = 'オンライン予約 奈良店';
} elseif (is_page("online-tsusima")) {
  $ttl = 'ガリレオ車検　津島本店';
} elseif (is_page("online")) {
  $ttl = 'オンライン予約';
} elseif (is_page("price")) {
  $ttl = '料金案内';
} elseif (is_page("reason")) {
  $ttl = '選ばれる理由';
} elseif (is_page("simulator")) {
  $ttl = '車検費用シミュレーター';
} elseif (is_page("store")) {
  $ttl = '店舗情報';
} elseif (is_page("terms")) {
  $ttl = '利用規約';
}
?>

<section class="p-sv__outline">
  <div class="p-sv">
    <h1><?php echo $ttl; ?></h1>
  </div>
</section>