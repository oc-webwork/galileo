<?php
// 参考サイト：https://qiita.com/noqua/items/df69ea126b4818bcd72d
?>

<ul class="p-manga-pagination">
  <?php
  $pagination = 3;  // 1ページに表示するページ送りの最大数

  $post_id = get_the_ID();  // 現在の投稿IDを取得

  // 投稿記事のカテゴリ内で新着から何番目かを確認
  $the_query = new WP_Query(
    array(
      'post_type' => 'documents',
      'post_status' => 'publish',
      'posts_per_page' => -1, // 全件表示
      'order' => 'ASC',
      'meta_query' => array(
        'relation' => 'AND',
        array(
          'key' => 'about-cpt-cat', //カスタムフィールドキー
          'value' => 'manga', //絞り込みたいカスタムフィールドの値を入れる
          'compare' => 'LIKE'
        ),
      ),
    )
  );
  $posts_ids = array();

  if ($the_query->have_posts()) :
    while ($the_query->have_posts()) : $the_query->the_post();
      $posts_ids[] += $post->ID;
    endwhile;
  endif;

  $post_current = array_search($post_id, $posts_ids); // 現在の記事番号（順番）を取得
  $post_last = count($posts_ids); // 同じカテゴリー内の記事数
  $post_last_group = $post_last - $pagination; // 最後尾のページ送りグループ
  $post_last_switch = $post_last - ($pagination - 1); // 最後の5つに切り替えるする記事番号

  // 最大値が1〜4まで前後のリンク数が異なる
  switch ($pagination) {
    case 1:
      $post_prev = $post_current;
      $post_next = $post_current + 1;
      break;

    case 2:
      $post_prev = $post_current;
      $post_next = $post_current + 2;
      break;

    case 3:
      $post_prev = $post_current - 1;
      $post_next = $post_current + 2;
      break;

    case 4:
      $post_prev = $post_current - 1;
      $post_next = $post_current + 3;
      break;

    default:
      $post_prev = $post_current - 2;
      $post_next = $post_current + 3;
      break;
  }

  wp_reset_postdata();

  // 「次へ（新しい記事へ）」リンクの設定
  if ($post_last >= $pagination && $post_current > ($pagination - 2)) {
    if ($pagination != $post_last) {
      echo '<li class="next"><a href="' . get_permalink($posts_ids[0]) . '"><i class="fas fa-angle-left"></i></a></li>';
      echo '<li><span class="dot">...</span></li>';
    }
  }

  $is_first = false;
  $is_last = false;

  // 記事数が最大数以上ある場合
  // 例）最大数が5個で、記事が5個以上ある場合
  if ($post_last >= $pagination) {
    if ($post_current < ($pagination - 1)) {
      $is_first = true;

      for ($i = 0; $i < $pagination; $i++) {
        if ($i == $post_current) {
          // 現在のページ
          echo '<li class="active"><span>' . ($i + 1) . '</span></li>';
        } else {
          // その他のページ
          echo '<li><a href="' . get_permalink($posts_ids[$i]) . '">' . ($i + 1) . '</a></li>';
        }
      }
    } else if ($post_current >= $post_last_switch) {
      $is_last = true;

      for ($i = $post_last_group; $i < $post_last; $i++) {
        if ($i == $post_current) {
          // 現在のページ
          echo '<li class="active"><span>' . ($i + 1) . '</span></li>';
        } else {
          // その他のページ
          echo '<li><a href="' . get_permalink($posts_ids[$i]) . '">' . ($i + 1) . '</a></li>';
        }
      }
    } else {
      for ($i = $post_prev; $i < $post_next; $i++) {
        if ($i == $post_current) {
          // 現在のページ
          echo '<li class="active"><span>' . ($i + 1) . '</span></li>';
        } else {
          // その他のページ
          echo '<li><a href="' . get_permalink($posts_ids[$i]) . '">' . ($i + 1) . '</a></li>';
        }
      }
    }
  } // ここまで / 記事数が最大数以上ある場合

  // 記事数が最大数未満の場合
  else {
    for ($i = 0; $i < $post_last; $i++) {
      if ($i == $post_current) {
        // 現在のページ
        echo '<li class="active"><span>' . ($i + 1) . '</span></li>';
      } else {
        // その他のページ
        echo '<li><a href="' . get_permalink($posts_ids[$i]) . '">' . ($i + 1) . '</a></li>';
      }
    }
  } // ここまで / 記事数が最大数未満の場合

  // 「前へ（古い記事へ）」リンクの設定
  if ($post_last >= $pagination && $is_last == false && $post_next <= $post_last && $pagination != $post_last) {
    if ($pagination == 2 && $post_current != ($post_last - 2)) {
      echo '<li><span class="dot">...</span></li>';
      echo '<li class="prev"><a href="' . get_permalink(end($posts_ids)) . '"><i class="fas fa-angle-left"></a></i></li>';
    } else if ($pagination != 2) {
      echo '<li><span class="dot">...</span></li>';
      echo '<li class="prev"><a href="' . get_permalink(end($posts_ids)) . '"><i class="fas fa-angle-right"></i></a></li>';
    }
  }
  ?>
</ul>