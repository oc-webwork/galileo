<?php
$tag = ''; // タグ内のテキスト
$ttl = ''; // 見出し
$img_url_pc = THEME_DIR_URI; // 画像
$img_url_sp = THEME_DIR_URI; // 画像
$txt = ''; // テキスト
$is_parent_page = false; // 親ページか否か

if (is_page('about')) {
  $ttl = 'サイトについて';
  $img_url_pc .= 'about/about-topview-pc.webp';
  $img_url_sp .= 'about/about-topview-sp.webp';
  $txt = '「知識は、ちから。」<br>生きていれば、誰しも、傷つくことがあります。<br>傷ついたとき、どうしたらよいか。傷ついた心を抱えて、どう生きていこうか。<br>そんな問いを考える時、歩みをすすめる力になる情報を提供することが、<br class="u-pc">このサイトの志です。';
  $is_parent_page = true;
} else if (is_page('experienced-person')) {
  $tag = 'サイトについて';
  $ttl = 'トラウマを<br class="u-sp">経験した方へ';
  $img_url_pc .= 'about/about-topview-pc.webp';
  $img_url_sp .= 'about/about-topview-sp.webp';
  $txt = 'ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト';
} else if (is_page('family-friends')) {
  $tag = 'サイトについて';
  $ttl = 'トラウマを<br class="u-sp">経験した方の<br class="u-sp">ご家族やご友人へ';
  $img_url_pc .= 'about/about-topview-pc.webp';
  $img_url_sp .= 'about/about-topview-sp.webp';
  $txt = 'ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト';
} else if (is_page('supporter')) {
  $tag = 'サイトについて';
  $ttl = 'トラウマ経験者の<br class="u-sp">支援を行う方へ';
  $img_url_pc .= 'about/about-topview-pc.webp';
  $img_url_sp .= 'about/about-topview-sp.webp';
  $txt = 'ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト';
} else if (is_page('thought')) {
  $tag = 'サイトについて';
  $ttl = '想い';
  $img_url_pc .= 'about/about-topview2-pc.webp';
  $img_url_sp .= 'about/about-topview2-sp.webp';
  $txt = '私たちはこれまで、認知処理療法の科学的な検証を慎重に進めてまいりました。<br>これまでの取り組みをもとに、今後は、トラウマティックな体験にあわれ、心的外傷後ストレス症や関連症状で苦しまれている方々に、認知処理療法を少しでも知っていただき、活用していただけたらと願っております。';
} else if (is_page('learn')) {
  $ttl = 'トラウマについて学ぶ';
  $img_url_pc .= 'learn/learn-topview-pc.webp';
  $img_url_sp .= 'learn/learn-topview-sp.webp';
  $txt = '生きていれば、誰しも、傷つくことがあります。もし、自分の力では対処できないような大きな出来事を経験したら、動揺し、混乱します。そこから抜け出す鍵の一つは、知識をもって、何が起こったのかをできるだけ冷静な目で見ることです。<br>ここでは、トラウマとは何か、トラウマが生活にどのような影響を及ぼすのかを紹介します。';
  $is_parent_page = true;
} else if (is_page('about-trauma')) {
  $tag = 'トラウマについて学ぶ';
  $ttl = 'トラウマとは';
  $img_url_pc .= 'learn/learn-topview-pc.webp';
  $img_url_sp .= 'learn/learn-topview-sp.webp';
  $txt = '人生では、自分の力では対処できないような、とても大きな出来事を体験することがあります。<br>個人で対処できないほどの圧倒されるような体験によってもたらされる心の傷を「トラウマ」といいます。';
} else if (is_page('influence')) {
  $tag = 'トラウマについて学ぶ';
  $ttl = 'トラウマの影響';
  $img_url_pc .= 'about/about-topview-pc.webp';
  $img_url_sp .= 'about/about-topview-sp.webp';
  $txt = 'トラウマを経験すると、多くの人は、体の反応や、考えや気持ちの変化など、さまざまな心身の反応を経験します。これは正常なストレス反応で、「心が弱い人間だから」起こるのではありません。<br>そして、トラウマを経験した後の反応は、出来事から時間が経つに従って、次第に落ち着いてきます。';
} else if (is_page(array('about-ptsd', 'result'))) {
  $tag = 'トラウマについて学ぶ';
  $ttl = 'PTSDとは';
  $img_url_pc .= 'learn/learn-topview-pc.webp';
  $img_url_sp .= 'learn/learn-topview-sp.webp';
  $txt = 'トラウマを経験した後、長い期間反応が続く場合は、特別なケアが必要かもしれません。<br>症状が1か月以上続き、生活に支障をきたしている場合は、心的外傷後ストレス症（PTSD）を患っている可能性があります。';
} else if (is_page('treatment')) {
  $ttl = '治療を知る';
  $img_url_pc .= 'treatment/treatment-topview-pc.webp';
  $img_url_sp .= 'treatment/treatment-topview-sp.webp';
  $txt = 'けがをした時と同じように、心が傷ついた時にも、手当てが必要です。トラウマの経験によって傷ついたとしても、多くの人は数週間で回復に向かっていきます。もし、自然には癒えない痛みを抱えているなら、専門的な治療が役に立つかもしれません。 ';
  $is_parent_page = true;
} else if (is_page('treatment-ptsd')) {
  $tag = '治療を知る';
  $ttl = 'PTSDの治療';
  $img_url_pc .= 'treatment/treatment-topview-pc.webp';
  $img_url_sp .= 'treatment/treatment-topview-sp.webp';
  $txt = 'これまでの研究から、トラウマに焦点を当てた心理療法と薬物療法の両方が、PTSDの治療に有効であることが示されています。<br>治療によって、症状が治癒・軽快する可能性があり、PTSDが日常生活や人間関係に与えていた影響が軽減できる可能性があります。';
} else if (is_page('about-cpt')) {
  $tag = '治療を知る';
  $ttl = 'CPTとは';
  $img_url_pc .= 'treatment/treatment-topview-pc.webp';
  $img_url_sp .= 'treatment/treatment-topview-sp.webp';
  $txt = '認知処理療法（CPT）は、心的外傷後ストレス症（PTSD）や関連症状に対する認知行動療法（思考や感情に焦点を当てた治療）です。PTSDの症状やその他の問題からの回復を滞らせる可能性のある「考え」の傾向に気づき、対処する術を身につけます。';
} else if (is_page('steps')) {
  $tag = '治療を知る';
  $ttl = 'CPTの進め方';
  $img_url_pc .= 'treatment/treatment-topview-pc.webp';
  $img_url_sp .= 'treatment/treatment-topview-sp.webp';
  $txt = 'CPTは、全12回の各セッションの中で、どんなことに取り組むかが決まっている療法です。支援を求める人にとって、今、CPTに取り組むことが役立つかを判断したうえで、決まった手順に則り実施することで、PTSDや関連する症状の改善に効果を発揮します。';
} else if (is_page('familiarize') || is_singular('documents')) {
  $tag = '治療を知る';
  $ttl = 'CPTに親しむ';
  $img_url_pc .= 'treatment/treatment-topview-pc.webp';
  $img_url_sp .= 'treatment/treatment-topview-sp.webp';
  $txt = '当サイトをご覧になって、CPTを活用したい・より詳しく知りたいと思われた方は、下記の資料もご覧ください。自分自身でCPTを理解するほか、PTSDやトラウマにお悩みの方への支援の一助としてもご活用いただけると幸いです。';
} else if (is_page('voice')) {
  $tag = '治療を知る';
  $ttl = '治療を受けた人の声';
  $img_url_pc .= 'treatment/treatment-topview-pc.webp';
  $img_url_sp .= 'treatment/treatment-topview-sp.webp';
  $txt = '私たちCPTの研究チームでこれまでに実施した研究に参加された方々にご協力いただき、治療を受けた体験を綴っていただきました。CPTに関心を持たれた方、治療を受けてみようか迷っている方が、CPTにとり組む体験をイメージする一助としていただければ幸いです。';
} else if (is_page('resources')) {
  $ttl = '情報資源を得る';
  $img_url_pc .= 'resources/resources-topview-pc.webp';
  $img_url_sp .= 'resources/resources-topview-sp.webp';
  $txt = '心の傷に触れることや、回復に向けて一歩踏みだすことは、誰にとっても勇気が要ることです。<b class="u-em-orange-marker">不安なときには、まずは、情報を集めることが役立ちます。</b><br class="u-pc">ご参考まで、科学的な根拠を示す記事や、理論を詳述する書籍、さまざまな支援団体やその他の資源を示しました。納得するまで知り、あなたにとって必要なアクションへの準備を整える一助にしていただけたら幸いです。';
  $is_parent_page = true;
} else if (is_page('expert')) {
  $ttl = 'CPTを実践したい専門家へ';
  $img_url_pc .= 'expert/expert-topview-pc.webp';
  $img_url_sp .= 'expert/expert-topview-sp.webp';
  $txt = '私たちは、CPTを実践する仲間が増えていくことを願っています。<br>ここでは、メンタルヘルスをサポートする臨床家のみなさまへ向けて、<br>より専門的な情報をお伝えいたします。';
  $is_parent_page = true;
} else if (is_page('references')) {
  $tag = 'CPTを実践したい専門家へ';
  $ttl = 'CPTに係る資料';
  $img_url_pc .= 'expert/expert-topview-pc.webp';
  $img_url_sp .= 'expert/expert-topview-sp.webp';
  $txt = 'CPT は各回のセッションで扱う内容が予め決められている、マニュアルベースの心理療法です。一定の訓練を受けた臨床家が、マニュアルに則り実施することで、効果を発揮します。ここでは、CPTの実施に必要なマニュアルを紹介しています。無料公開のものから、出版社で扱っている最新版まで、ニーズに応じてお手にとっていただければ幸いです。';
} else if (is_page('movie')) {
  $tag = 'CPTを実践したい専門家へ';
  $ttl = '動画教材';
  $img_url_pc .= 'expert/expert-topview-pc.webp';
  $img_url_sp .= 'expert/expert-topview-sp.webp';
  $txt = '国立精神・神経医療研究センターで作成した解説動画を公開しています。講義の中では、模擬事例を用いたセッションのロールプレイの様子も紹介しています。<br>CPTの全体像と実施のイメージを掴むためにご活用いただけますと幸いです。';
} else if (is_page('assessment_tool')) {
  $tag = 'CPTを実践したい専門家へ';
  $ttl = 'アセスメントツール';
  $img_url_pc .= 'expert/expert-topview-pc.webp';
  $img_url_sp .= 'expert/expert-topview-sp.webp';
  $txt = 'PTSD症状を測るための自己記入式の尺度であるPCL-5を紹介しています。<br>ダウンロードできる質問票も提供していますので、PTSDのスクリーニングや、症状のモニタリングにご活用ください。';
} else if (is_page('contact')) {
  $tag = 'CPTを実践したい専門家へ';
  $ttl = 'お問い合わせ';
  $img_url_pc .= 'expert/expert-topview-pc.webp';
  $img_url_sp .= 'expert/expert-topview-sp.webp';
  $txt = '当サイトに掲載されている情報に関するお問い合わせは、お問い合わせフォームからお願いいたします。なお、トラウマやPTSDに係る相談・診療に関する内容は、原則として受付けておりません。お問い合わせいただいてもお答えしかねますので、予めご了承いただけますと幸いです。';
}

?>


<?php if (is_page('expert') || is_parent_slug() == 'expert') : ?>
  <div class="u-bg-ligh-brown">
  <?php endif ?>
  <div class=" l-base p-mv
    <?php if ($is_parent_page) {
      echo '-parent-page';
    } ?>
    <?php if (is_page('learn') || is_parent_slug() == 'learn') {
      echo ' -learn';
    } ?>
    <?php if (is_page('treatment') || is_parent_slug() == 'treatment' || is_singular('documents')) {
      echo ' -treatment';
    } ?>
    <?php if (is_page('resources')) {
      echo ' -resources';
    } ?> 
    <?php if (is_page('expert') || is_parent_slug() == 'expert') {
      echo ' -expert';
    } ?>
    ">
    <?php if ($tag): ?>
      <span class="p-mv__tag <?php if (is_page('expert') || is_parent_slug() == 'expert') {
                                echo ' -expert';
                              } ?>"><?php echo $tag; ?></span>
    <?php endif ?>
    <h1 class="p-mv__ttl 
  <?php if (!$tag) {
    echo '-large';
  } ?>"><?php echo $ttl; ?></h1>
    <picture class="p-mv__img">
      <source media="(min-width: 834px)" srcset="<?php echo $img_url_pc; ?>">
      <img src="<?php echo $img_url_sp; ?>" alt="<?php the_title(); ?>">
    </picture>
    <p class="p-mv__txt"><?php echo $txt; ?></p>
  </div>
  <?php if (is_page('expert') || is_parent_slug() == 'expert') : ?>
  </div>
<?php endif ?>