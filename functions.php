<?php
//viewport切り替え用設定
//iphoneまたはipodで閲覧されているかどうかを判定
function is_iphone()
{
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if(
    strpos($ua, 'iPhone')!== false||
    strpos($ua, 'iPod')!== false
    )
    {
    return true;
    }
    else
    {
    return false;
    }
}
//androidスマートフォンで閲覧されているかどうかを判定する関数
//「mobile」文字列の有無を見ることで、タブレット端末をfalse判定
function is_android()
{
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if(
    strpos($ua, 'Android')!== false&&strpos($ua, 'Mobile')!== false
    )
    {
    return true;
    }
    else
    {
    return false;
    }
}
//Mozillaが開発するスマートフォン用OS「Firefox OS」の判定関数
function is_firefox_os()
{
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if(
    strpos($ua, 'Android')=== false&&strpos($ua, 'Firefox')!== false&&strpos($ua, 'Mobile')!== false
    )
    {
    return true;
    }
    else
    {
    return false;
    }
}
//Windows Phoneで閲覧されているかどうかを判定する関数
//「mobile」文字列の有無を確認することで、タブレット端末をfalse判定
function is_windows_phone()
{
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if(
    strpos($ua, 'Windows')!== false&&strpos($ua, 'Phone')!== false
    )
    {
    return true;
    }
    else
    {
    return false;
    }
}
//BlackBerryで閲覧されているかどうかを判定する関数
function is_blackberry()
{
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if(
    strpos($ua, 'BlackBerry')!== false
    )
    {
    return true;
    }
    else
    {
    return false;
    }
}
//ガラケーで閲覧されているかどうか判定する関数
function is_ktai()
{
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if(
    strpos($ua, 'DoCoMo')!== false||
    strpos($ua, 'KDDI')!== false||
    strpos($ua, 'UP.Browser')!== false||
    strpos($ua, 'MOT-')!== false||
    strpos($ua, 'J-PHONE')!== false||
    strpos($ua, 'WILLCOM')!== false||
    strpos($ua, 'Vodafone')!== false||
    strpos($ua, 'SoftBank')!== false
    )
    {
    return true;
    }
    else
    {
    return false;
    }
}
/*****
is_ktai()、is_iphone()、is_android()、
is_firefox_os()、is_windows_phone()、
is_blackberry()のどれかがTRUEを返すと
is_mymobile()はTRUEを返します。
つまりガラケー･スマホでの閲覧時にはTRUE、
PC・タブレットでの閲覧時にはFALSEを返します。
******/
function is_mymobile()
{
    if(
    is_ktai()||
    is_iphone()||
    is_android()||
    is_firefox_os()||
    is_windows_phone()||
    is_blackberry()
    )
    {
    return true;
    }
    else
    {
    return false;
    }
}
//iPadを判別
function is_ipad() {
    $is_ipad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
    if ($is_ipad) {
        return true;
    } else {
        return false;
    }
}
//テキストウィジェットにてショートコード
add_filter('widget_text', 'do_shortcode');
// ウィジェット
register_sidebars(2, array('name' => 'sidebar-%d'));//親カテゴリーを除外
function exclude_widget_categories( $args){
    $exclude = '1';          // 除外するカテゴリーのIDをカンマ区切りで指定
    $args['exclude'] = $exclude;
    return $args;
}
add_filter( 'widget_categories_args', 'exclude_widget_categories');
/*  Category Widget show hide_empty  */
add_filter( 'widget_categories_args', 'my_category_widget' );
function my_category_widget( $cat_args ) {
 $cat_args['hide_empty'] = 0;
 return $cat_args;
}
//スマホ条件分岐セッティング
function is_mobile() {
  $useragents = array(
    'iPhone',          // iPhone
    'iPod',            // iPod touch
    'Android',         // 1.5+ Android
    'dream',           // Pre 1.5 Android
    'CUPCAKE',         // 1.5+ Android
    'blackberry9500',  // Storm
    'blackberry9530',  // Storm
    'blackberry9520',  // Storm v2
    'blackberry9550',  // Storm v2
    'blackberry9800',  // Torch
    'webOS',           // Palm Pre Experimental
    'incognito',       // Other iPhone browser
    'webmate'          // Other iPhone browser
  );
  $pattern = '/'.implode('|', $useragents).'/i';
  return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
//条件分岐用
function is_not_mobile() {
    return !is_mobile();
}
//アイキャッチ設定
add_theme_support('post-thumbnails');
set_post_thumbnail_size(400, 400, false);
add_filter( 'post_thumbnail_html', 'custom_attribute' );
function custom_attribute( $html ){
 // width height を削除する
 $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
 return $html;
}
// ヘッダーにある不要なタグを削除する
remove_action('wp_head', 'wp_generator');

// カスタム投稿タイプ
add_action( 'init', 'create_post_type' );
function create_post_type() {
    
 // Information
 register_post_type( 'information_menu', /* post-type */
  array(
   'labels' => array(
   'name' => __( 'おトク情報' ),
   'singular_name' => __( 'おトク情報' ),
   'has_archive' => true
  ),
  'public' => true,
  'menu_position' =>6,
  'supports' => array('title','editor','thumbnail','custom-fields','revisions')
     )
 );
  
  // 店舗
 register_post_type( 'shop_menu', /* post-type */
  array(
   'labels' => array(
   'name' => __( '店舗' ),
   'singular_name' => __( '店舗' ),
   'has_archive' => false
  ),
  'public' => true,
  'menu_position' =>7,
  'supports' => array('title','editor','thumbnail','custom-fields','revisions')
     )
 );
// Space
/*
 register_post_type( 'space_menu',
  array(
   'labels' => array(
   'name' => __( 'Space' ),
   'singular_name' => __( 'Space' ),
   'has_archive' => false
  ),
  'public' => true,
  'menu_position' =>8,
  'supports' => array('title','editor','thumbnail','custom-fields','revisions')
     )
 );
*/
 flush_rewrite_rules( false );
}
add_action('init', 'create_category_taxonomy');
function create_category_taxonomy(){
    // スペース　カテゴリ
    $spaceArgs = array(
        'label' => 'カテゴリ', // タクソノミー名
        'public' => true, // 公開するかどうか
        'hierarchical' => true // 階層を持たせるかどうか
    );
    register_taxonomy( 'cat_space', 'space_menu', $spaceArgs);
}
function my_manage_posts_columns_space_menu_category($columns) {
  $columns['cat_space'] = "カテゴリー";
  return $columns;
}
function my_add_column_space_menu_category($column_name, $post_id) {
  if( $column_name == 'cat_space' ) {
    $tax = wp_get_object_terms($post_id, 'cat_space');
    $stitle = $tax[0]->name;
  }
 
  if ( isset($stitle) && $stitle ) {
    echo esc_attr($stitle);
  }
}
function my_add_post_taxonomy_restrict_filter() {
  global $post_type;
  if ( 'space_menu' == $post_type ) {
?>
    <select name="cat_space">
      <option value="">カテゴリー指定なし</option>
<?php
      $terms = get_terms('cat_space');
      foreach ($terms as $term) { ?>
        <option value="<?php echo $term->slug; ?>" <?php if ( $_GET['cat_space'] == $term->slug ) { print 'selected'; } ?>><?php echo $term->name; ?></option>
<?php
      }
?>
    </select>
<?php
  }
}
add_filter( 'manage_edit-space_menu_columns', 'my_manage_posts_columns_space_menu_category' );
add_action( 'manage_space_menu_posts_custom_column', 'my_add_column_space_menu_category', 10, 2 );
add_action( 'restrict_manage_posts', 'my_add_post_taxonomy_restrict_filter' );
//メニュー順調整
add_filter( 'custom_menu_order', '__return_true' );
add_filter( 'menu_order'       , 'pm_menu_order' );

function pm_menu_order( $menu_order ) {
    $menu = array();

    foreach ( $menu_order as $key => $val ) {
        if ( 0 === strpos( $val, 'edit.php' ) )
            break;

        $menu[] = $val;
        unset( $menu_order[$key] );
    }

    foreach ( $menu_order as $key => $val ) {
        if ( 0 === strpos( $val, 'edit.php' ) ) {
            $menu[] = $val;
            unset( $menu_order[$key] );
        }
    }

    return array_merge( $menu, $menu_order );
}
//コンタクトフォーム7メール確認設置
add_filter( 'wpcf7_validate_email', 'wpcf7_text_validation_filter_extend', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_text_validation_filter_extend', 11, 2 );
function wpcf7_text_validation_filter_extend( $result, $tag ) {
    $type = $tag['type'];
    $name = $tag['name'];
    $_POST[$name] = trim( strtr( (string) $_POST[$name], "\n", " " ) );
    if ( 'email' == $type || 'email*' == $type ) {
        if (preg_match('/(.*)_confirm$/', $name, $matches)){
            $target_name = $matches[1];
            if ($_POST[$name] != $_POST[$target_name]) {
                if (method_exists($result, 'invalidate')) {
                    $result->invalidate( $tag,"確認用のメールアドレスが一致していません");
                } else {
                    $result['valid'] = false;
                    $result['reason'] = array( $name => '確認用のメールアドレスが一致していません' );
                }
            }
        }
    }
    return $result;
}
//コンタクトフォーム関連
add_filter( 'wpcf7_support_html5_fallback', '__return_true' );

 //日付が連続で表示
function my_the_post() {
    global $previousday;
    $previousday = '';
}
add_action( 'the_post', 'my_the_post' );
//奇数の記事を指定
/*
function is_odd_post(){
 global $wp_query;
 return ((($wp_query->current_post+1) % 2) === 1);
}
*/
//最初の記事を指定
function is_first_post(){
 global $wp_query;
 return ($wp_query->current_post === 0);
}
//タグを消させない
add_filter('tiny_mce_before_init', 'tinymce_init');
function tinymce_init( $init ) {
 $init['verify_html'] = false;
 return $init;
}
//iframeを消させない
function _my_tinymce($initArray) {
     //選択できるブロック要素を変更
     $initArray['theme_advanced_blockformats'] = 'p,h2,h3,h4,h5,dt,dd,div,pre';
  $initArray[ 'extended_valid_elements' ] .= "iframe[id|class|title|style|align|frameborder|height|longdesc|marginheight|marginwidth|name|scrolling|src|width]";
     return $initArray;
}
//ページネーション
//ショートコード
function my_home_url() {
    return home_url('/');
}
add_shortcode('home', 'my_home_url');
function my_template_url() {
    return get_template_directory_uri();
}
add_shortcode('template', 'my_template_url');
//画像のURLを取得
function first_catch_image() {
 global $post, $posts;
 $first_img = '';
 ob_start();ob_end_clean();
 preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matche_img);
 $first_img = $matche_img[1][0];
 return $first_img;
}
//現在のURL取得
function print_current_uri() {
  $protocol = is_ssl() ? 'https' : 'http';
  $uri = $protocol . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
  echo $uri;
}
// ショートコードを使ってテーマ内の画像URLを簡単に指定する
add_shortcode( 'tp', 'shortcode_tp' );
function shortcode_tp( $atts, $content = '' ) {
	return get_template_directory_uri().$content;
}

add_filter( 'wpcf7_mail_tag_replaced', 'my_mail_tag_replaced', 10, 2 );
function my_mail_tag_replaced( $replaced, $submitted ) {
  if ( is_array( $submitted ) )
    $replaced = join( "\n", $submitted );
  return $replaced;
}
?>
<?php
add_action( 'wp_footer', 'wpcf7_mailsent_location1' );
function wpcf7_mailsent_location1() {
?>
	<script type="text/javascript">
		document.addEventListener('wpcf7mailsent',function(event) {
			if ('415' == event.detail.contactFormId) {
				location.replace("<?php echo home_url('/');?>formthank/");
			}
		},false);
	</script>
<?php } ?>
<?php
add_action( 'wp_footer', 'wpcf7_mailsent_location2' );
function wpcf7_mailsent_location2() {
?>
	<script type="text/javascript">
		document.addEventListener('wpcf7mailsent',function(event) {
			if( '240' == event.detail.contactFormId) {
				location.replace("<?php echo home_url('/');?>questionnairethank/");
			}
		},false);
	</script>
<?php } ?>