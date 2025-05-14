<div class="l-wide">
  <div class="p-breadcrumb">

    <?php
    // パンくずリスト表示

    if (is_singular('documents')):
      // 各教材の詳細画面は構成がことなるため、手動で作成
    ?>

      <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="CPTへ移動する" href="<?php echo home_url(); ?>" class="home"><span property="name">HOME</span></a>
        <meta property="position" content="1">
      </span><i class="fas fa-angle-right"></i><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="治療を知るへ移動する" href="<?php echo home_url() . '/treatment'; ?>" class="archive post-documents-archive"><span property="name">治療を知る</span></a>
        <meta property="position" content="2">
      </span><i class="fas fa-angle-right"></i><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="CPTに親しむへ移動する" href="<?php echo home_url() . '/treatment/familiarize'; ?>" class="archive post-documents-archive"><span property="name">CPTに親しむ</span></a>
        <meta property="position" content="3">
      </span><i class="fas fa-angle-right"></i><span property="itemListElement" typeof="ListItem"><span property="name" class="post post-documents current-item"><?php the_title(); ?></span>
        <meta property="url" content="<?php the_permalink(); ?>">
        <meta property="position" content="4">
      </span>

    <?php
    elseif (is_archive()):
    ?>

      <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="CPTへ移動する" href="<?php echo home_url(); ?>" class="home"><span property="name">HOME</span></a>
        <meta property="position" content="1">
        <i class="fas fa-angle-right"></i><span property="itemListElement" typeof="ListItem"><span property="name" class="post post-documents current-item"><?php echo is_post_type_archive("column") ?  'コラム' : 'お知らせ'; ?></span>
          <meta property="url" content="<?php echo home_url(); ?><?php echo is_post_type_archive("column") ? '/column' : '/news'; ?>">
          <meta property="position" content="2">
        </span>

      <?php
    else:
      if (function_exists('bcn_display')) {
        bcn_display();
      }
    endif;
      ?>

  </div>
</div>