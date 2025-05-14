<?php
get_header();
?>

<?php
// メインビューをテンプレート化。
// 表示内容はtenplate-parts/mainview.phpにて設定
get_template_part('template-parts/mainview');
?>

<div class="u-bg-orange-gray">
  <?php
  // パンくずリスト
  get_template_part('template-parts/breadcrumb');
  ?>

  <article class="l-base p-abt-intro">
    <section class="p-abt-intro__sec">
      <h3 class="c-h2 p-abt-intro__h1">安全で有効な治療を届けるために</h3>
      <p>私たちはこれまで、認知処理療法の科学的な検証を慎重に進めてまいりました。これまでの取り組みをもとに、今後は、トラウマティックな体験にあわれ、心的外傷後ストレス症や関連症状で苦しまれている方々に、認知処理療法を少しでも知っていただき、活用していただけたらと願っております。</p>
      <a href="./thought" class="c-btn p-abt-intro__btn">私たちの想い　<i class="fas fa-angle-right"></i></a>
    </section>

    <section class="c-white-box-s p-abt-intro__box">
      <h3 class="c-h3 p-abt-intro__h2">運営元</h3>
      <p><a href="https://cbt.ncnp.go.jp/" target="_blank" class="u-orange-marker">国立研究開発法人国立精神・神経医療研究センター認知行動療法センター <i class="fa-regular fa-window-restore"></i></a>では、設立された2011年より認知行動療法の臨床研究・人材育成・社会実装につとめて参りました。<br>
        研究開発部では、認知処理療法（Cognitive Processing Therapy；CPT）の基礎・臨床研究に励んでおります。</p>
    </section>

    <section class="c-white-box-s p-abt-intro__box">
      <h3 class="c-h3 p-abt-intro__h2">Funding</h3>
      <p>このサイトは、第55回（2024年度）　三菱財団社会福祉事業・研究助成「エビデンスに基づくトラウマケア及び心的外傷後ストレス症治療の全国実装」を受けて作成されました。<br>
        これまで私たちが行ってきたCPT研究は、日本学術振興会科学研究費助成事業等に支えられて参りました。<br>
        ここに記して、御礼を申し上げます。</p>
      <ul class="p-abt-intro__list">
        <li>日本学術振興会科学研究費補助金　基盤研究（B）「心的外傷後ストレス障害に対する認知処理療法の効果検証と治療メカニズムの解明（研究代表者：堀越勝、研究課題番号：24330204）」</li>
        <li>日本学術振興会科学研究費補助金　基盤研究（A）「心的外傷後ストレス障害に対する認知処理療法の有効性及び臨床展開（研究代表者：堀越勝、研究課題番号：15H01979）」</li>
        <li>日本学術振興会科学研究費補助金　基盤研究（B）「トラウマ関連障害への認知処理療法の均てん化のための包括研究（研究代表者：堀越勝、研究課題番号：19H01767）」</li>
        <li>日本学術振興会科学研究費補助金　基盤研究（B）「トラウマ関連障害への認知処理療法の有効性及び作用機序の検証と適用拡大（研究代表者：堀越勝、研究課題番号：22H01097）」</li>
        <li>日本学術振興会科学研究費補助金 基盤研究（C）「青少年の心的外傷後ストレス関連障害への認知処理療法の効果検証と導入プログラム開発（研究代表者：片柳章子、課題番号：22K03191）」</li>
        <li>独立行政法人日本医療研究開発機構　障害者対策総合研究開発事業「新たな認知行動療法プログラムの開発と普及に関する研究（研究分担者：伊藤正哉、課題番号：16769055）」</li>
        <li>日本学術振興会科学研究費補助金　若手研究「アルコール使用障害が併発した心的外傷後ストレス障害に対する認知処理療法の適用（研究分担者：髙岸百合子、課題番号：19K14424）」</li>
      </ul>
    </section>
    <section class="c-white-box-s p-abt-intro__box">
      <h3 class="c-h3 p-abt-intro__h2">サイト制作者</h3>
      <ul class="p-abt-intro__list">
        <li>企画、監修：伊藤正哉</li>
        <li>ディレクション、文：高岸百合子</li>
        <li>ウェブデザイン：森彬</li>
        <li>イラスト：野崎ひろこ</li>
      </ul>
      <p>上記に加え、PTSDの治療に関する説明は、各治療のKOLの先生方に監修いただきました。<br>ご協力いただいた先生方に御礼申し上げます。</p>
    </section>

  </article>

</div>

<!-- <article class="l-base p-abt-howto">

  <section class="p-abt-howto__sec">
    <h3 class="c-h2 p-abt-howto__h1">サイトの使い方</h3>
    <p class="p-abt-howto__txt">このサイトを訪れていただき、ありがとうございます。<br>
      ご覧になっているあなたは、どのようなこと知りたくて、訪れてくださったのでしょうか。<br>
      本当は、お一人おひとりにとって必要な情報をお手渡しできれば良いのですが、現実的な制約から、それが叶いません。<br>
      すこしでも情報を探す助けになればと、それぞれの立場の方に届けたい内容をまとめてみました。<br>
      この入り口を、知識という力を得る足がかりに使っていただけると幸いです。</p>
  </section>

  <ul class="p-abt-howto__list">
    <li>
      <img src="<?php echo THEME_DIR_URI; ?>about/about-common-01.webp" alt="">
      <a href="./experienced-person" class="c-btn -circle-right">トラウマを<br>経験した方へ</a>
      <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
    </li>
    <li>
      <img src="<?php echo THEME_DIR_URI; ?>about/about-common-02.webp" alt="">
      <a href="./family-friends" class="c-btn -circle-right">トラウマを経験した方の<br>ご家族やご友人へ</a>
      <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
    </li>
    <li>
      <img src="<?php echo THEME_DIR_URI; ?>about/about-common-03.webp" alt="">
      <a href="/supporter" class="c-btn -circle-right">トラウマ経験者の<br>支援を行う方へ</a>
      <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
    </li>
  </ul>

</article> -->

<?php get_footer(); ?>