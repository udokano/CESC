<?php
/*
Template Name: 確認用
*/
?>




<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/src/img/fovicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/src/img/fovicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/src/img/foviconfavicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/src/img/fovicon/site.webmanifest">
<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/src/img/fovicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<title>
<?php the_title(); ?>
</title>
<!-- Global site tag (gtag.js) - Google Ads: 824377490 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-824377490"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-824377490');
</script>
<script>
  (function(d) {
    var config = {
      kitId: 'lcy4fdg',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/css/style.css?<?php echo filemtime( get_stylesheet_directory() . '/src/css/style.css'); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<?php wp_head();?>

</head>


<body <?php body_class(); ?>>
<div class="l-wrapper">

<header class="l-top-header p-top-header">
  <div class="l-top-header-inner">
    <div class="p-top-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/src/img/common/c_top_logo.png" alt="眼瞼下垂クリニック">
          <button class="p-top-menu-switch c-btn-trigger u-sp-display" id="js-top-menu-switch">
            <div class="p-top-menu-switch__inner-wrap">
                  <div class="c-btn-trigger__inner p-top-menu-switch__inner">
                      <span></span>
                      <span></span>
                      <span></span>
                </div>
                <!-- ./p-top-menu-switch__inner -->
            </div>
            <!-- ./p-top-menu-switch__inner-wrap -->
          </button>
    </div>
    <!-- ./p-top-logo -->
    <div class="p-fv-cach">
      <!--  <p class="p-fv-cach__text">当院の眼瞼下垂治療</p>
                        <div class="p-fv-prices u-flex u-align-cent">
                                <p class="p-fv-prices__left">保険<br>適用</p>
                                 <p class="p-fv-prices__center u-f-ryu u-vertical__ttl--common">両目
                                     <span class="p-fv-prices__center__sub u-mairyo">※</span>
                                 </p>

                                  <p class="p-fv-prices__right u-f-ryu">
                                      43,200<span class="p-fv-prices__right__yen">円</span>
                                  </p>
                                  <p class="p-fv-prices__note_sp u-sp-display">
                                      <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/fv_note_sp.png" alt="※切る手術(保険適応： 3割負担)の場合 ※上限負担金額は各保健資格内容により変動あり※初診料、再診料、術後の薬代などは別途費用となります。">
                                  </p>
                        </div> -->
      <div class="p-fv-price-img"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/fv_price.png?20210405" alt="当院の眼瞼下垂治療、保険適用の場合、両目43,200円">
        <p class="p-fv-prices__note_sp u-sp-display"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/fv_note_sp.png" alt="※切る手術(保険適応： 3割負担)の場合 ※上限負担金額は各保健資格内容により変動あり※初診料、再診料、術後の薬代などは別途費用となります。"> </p>
      </div>
      <!-- ./p-fv-prices -->
      <p class="p-fv-cach__note u-mairyo">※切る手術(保険適応： 3 割負担)の場合 ※上限負担金額は各保健資格内容により変動あり<br>
        ※初診料、再診料、術後の薬代などは別途費用となります。</p>
    </div>
    <!-- ./p-fv-cach -->

    <div class="p-fv-right u-flex">
      <div class="p-fv-catch-copy u-vertical__ttl u-f-ryu-toggle">
        <p class="p-fv-catch-copy__strong"> <em class="u-pc-only"><img src="<?php echo get_template_directory_uri(); ?>/src/img/top/fv_catch.pc.png?145555" alt="新宿駅から徒歩1分"></em> <em class="u-sp-only">新宿駅<span class="p-fv-catch-copy__text_small">から</span>徒歩1分</em> </p>
        <h1 class="p-fv-catch-copy__desc">当院は眼瞼下垂専門のクリニックです。<br>
          眼瞼下垂の治療を<span class="c-red">「美容的観点」</span>からも<br>
          診察・施術を行っています。</h1>
      </div>
      <!-- ./p-fv-catch-copy -->

      <div class="p-top-nav">
        <ul class="p-top-conversion">
          <li class="p-top-conversion__item">
          <a href="<?php echo home_url( '/' ); ?>reserve/kanto.html" class="c-btn-cal p-top-btn p-top-btn--cal" target="_blank">カウンセリング予約</a>
          </li>
          <li class="p-top-conversion__item">
           <a href="<?php echo home_url( '/' ); ?>contact/contact.html" class="c-btn-mail p-top-btn p-top-btn--mail" target="_blank">お問合わせ</a>
          </li>
        </ul>
        <div class="p-sp-tel u-sp-display">
            <a href="<?php echo home_url( '/' ); ?>tel/ptosis.html" class="p-sp-tel__link" target="_blank">
            <p class="p-sp-tel__sub u-tc u-f-ryu">お電話でのお問い合わせ</p>
                <p class="p-tel-text__left__number p-sp-tel__num u-f-ryu u-tc">0120-972-561</p>
                <p class=" p-sp-tel__time u-tc">10:00～19:00</p>
                <p class="c-btn-tel p-top-btn--tel">電話する</p>
            </a>
         </div>
         <!-- ./p-sp-tel -->
        <nav class="p-nav-text" id="js-menu">
          <ul class="p-nav-links">
            <li class="p-nav-links__item"> <a href="#link-about" class="p-nav-links__link">眼瞼下垂とは </a> </li>
              <li class="p-nav-links__item"> <a href="#link-flow" class="p-nav-links__link">施術の流れ・費用 </a> </li>
            <li class="p-nav-links__item"> <a href="#link-doctor" class="p-nav-links__link">医師紹介 </a> </li>
           <li class="p-nav-links__item"> <a href="#link-cal" class="p-nav-links__link">スケジュール </a> </li>
            <li class="p-nav-links__item"> <a href="#link-access" class="p-nav-links__link">アクセス</a> </li>
            <li class="p-nav-links__item"> <a href="#link-faq" class="p-nav-links__link">よくあるご質問 </a> </li>
            <li class="p-nav-links__item"> <a href="https://souki-kai.or.jp/pdf/under18.pdf" class="p-nav-links__link" target="_blank">未成年同意書</a> </li>
          </ul>
        </nav>
        <a href="https://www.instagram.com/dr_goyasui/" class="p-insta u-pc-displey" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/nav_insta_btn.png" alt="インスタグラム"> </a>
        <div class="p-top-tel u-pc-displey">
          <p class="p-top-tel__ballon">お気軽にご相談ください</p>
          <a href="<?php echo home_url( '/' ); ?>tel/ptosis.html" class="p-tel-text u-flex-center" target="_blank"> <span class="p-tel-text__right u-f-din">tel</span>
          <div class="p-tel-text__left u-f-ryu">
            <p class="p-tel-text__left__number">0120-972-561</p>
          </div>
          </a>
          <p class="p-top-tel__sub u-tc u-f-ryu">10:00～19:00</p>
        </div>
        <!-- ./p-top-tel -->
      </div>
      <!-- ./p-top-nav -->
    </div>
    <!-- ./p-fv-right-->
  </div>
  <!-- ./l-top-header-inner -->
</header>

<!-- SP ONLY menu-swich -->

<div class="c-hamburger" id="js-menu-trigger">
  <div class="c-hamburger__inner"> <span class="c-hamburger__line"></span> <span class="c-hamburger__line"></span> <span class="c-hamburger__line"></span> </div>
</div>
</header>

<!-- SP ONLY menu-swich -->

<div class="c-hamburger" id="js-menu-trigger">
  <div class="c-hamburger__inner"> <span class="c-hamburger__line"></span> <span class="c-hamburger__line"></span> <span class="c-hamburger__line"></span> </div>
</div>





<section class="l-section p-insta-area" id="link-insta">
  <div class="l-inner">
    <h2 class="c-ttl-border c-ttl-border--gray c-ttl-border--insta"> <span class="c-ttl-border__text c-ttl-border__text--insta">Instagram</span> </h2>
    <div class="p-insta-list">
      <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-9ce28709-62e8-490a-a3a5-0f3c5ffba585"></div>
      <div class="p-insta-btn-area">
        <p class="p-insta-btn-area__note">※副作用・リスク：腫れ、赤み、内出血</p>
        <a href="https://www.instagram.com/dr_goyasui/?hl=ja" class="p-btn-insta" target="_blank">続きを見る</a> </div>
    </div>
  </div>
</section>
<section class="l-section p-top-about" id="link-about">
  <div class="l-inner">
    <h2 class="c-ttl-border c-ttl-border--gray "> <span class="c-ttl-border__text">眼瞼下垂とは？</span> </h2>
    <ul class="p-list-center">
      <li class="p-list-center__item"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/about_thumb01.png" alt="眼瞼下垂"> </li>
      <li class="p-list-center__item"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/about_thumb02.png" alt="正常"> </li>
    </ul>
    <p class="p-center-desc u-sp-mb0">眼瞼下垂（がんけんかすい）とは、<br class="u-sp-only">
      まぶた（瞼）が開きにくくなる病気です。<br>先天的な原因や眼の病気、加齢、<br class="u-sp-only">過剰なまぶたへの刺激などで、まぶたを<br>持ち上げる筋肉（眼瞼挙筋）の機能が弱くなったり、<br class="u-sp-only">緩むことで眼瞼下垂が起こります。<br>眼瞼下垂は手術によって治療することができますので、<br class="u-sp-only">お悩みの方は一度ご相談ください。</p>
  </div>
</section>
<section class="l-section p-top-trouble">
  <div class="l-inner">
    <h2 class="p-trouble-ttl"><span class="p-trouble-ttl__text">あてはまったら眼瞼下垂かも？</span></h2>
    <ul class="c-circle-list p-trouble-list">
      <li class="c-circle-list__item  p-trouble-list__item">
        <div class="c-circle-list__img  p-trouble-list__img"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/trouble_thumb01.png" alt="左右の目の大きさが違う"> </div>
        <p class="c-circle-list__caption  p-trouble-list__caption">左右の目の<br class="u-sp-only">大きさが違う</p>
      </li>
      <li class="c-circle-list__item  p-trouble-list__item">
        <div class="c-circle-list__img  p-trouble-list__img"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/trouble_thumb02.png" alt="額のシワが目立つようになった"> </div>
        <p class="c-circle-list__caption  p-trouble-list__caption">額のシワが<br class="u-sp-only">目立つようになった</p>
      </li>
      <li class="c-circle-list__item  p-trouble-list__item">
        <div class="c-circle-list__img  p-trouble-list__img"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/trouble_thumb03.png" alt="慢性的な頭痛やおでこの疲労を感じる"> </div>
        <p class="c-circle-list__caption  p-trouble-list__caption">慢性的な頭痛や<br>おでこの疲労を感じる</p>
      </li>
      <li class="c-circle-list__item  p-trouble-list__item">
        <div class="c-circle-list__img  p-trouble-list__img"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/trouble_thumb04.png" alt="まぶたが下がって重たく感じる"> </div>
        <p class="c-circle-list__caption  p-trouble-list__caption">まぶたが下がって<br class="u-sp-only">重たく感じる</p>
      </li>
      <li class="c-circle-list__item  p-trouble-list__item">
        <div class="c-circle-list__img  p-trouble-list__img"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/trouble_thumb05.png" alt="額のシワが目立つようになった"> </div>
        <p class="c-circle-list__caption  p-trouble-list__caption">肩こりがひどい</p>
      </li>
      <li class="c-circle-list__item  p-trouble-list__item">
        <div class="c-circle-list__img  p-trouble-list__img"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/trouble_thumb06.png" alt="慢性的な頭痛やおでこの疲労を感じる"> </div>
        <p class="c-circle-list__caption  p-trouble-list__caption">以前より目が<br class="u-sp-only">小さくなった気がする</p>
      </li>
      <li class="c-circle-list__item  p-trouble-list__item">
        <div class="c-circle-list__img  p-trouble-list__img"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/trouble_thumb07.png" alt="まぶたが下がって重たく感じる"> </div>
        <p class="c-circle-list__caption  p-trouble-list__caption">眉毛と目の間隔が<br>広くなったように感じる</p>
      </li>
      <li class="c-red p-trouble-list__note">上記のような症状でお悩みの方は<br class="u-sp-only">眼瞼下垂の可能性があります。<br>まずはお気軽にカウンセリングに<br class="u-sp-only">お越しください。</li>
    </ul>
    <dl class="c-col-desc-box p-ope-col-box">
      <dt class="c-col-desc-box__ttl c-col-desc-box__ttl--bg_blue p-ope-col-box__ttl"> <span class="c-square-text p-ope-sub c-square-text--bd_color_white">保険適用の場合</span><span class="u-vt">挙筋前転術について</span> </dt>
      <dd class="c-col-desc-box__desc p-ope-col-box__desc">
        <div class="c-row02-box p-ope-row02-box">
          <div class="c-row02-box__right p-ope-row02-box__thumb"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/ope_Illust01.png?060825566" alt="挙筋前転術について"> </div>
          <!-- ./p-ope-row02-box__thumb -->
          <p class="c-row02-box__left p-ope-row02-box__desc"> 後天性（加齢性眼瞼下垂、腱膜性眼瞼下垂）の場合であれば、手術で症状を改善させることが可能です。<br>当院では、切開による『挙筋前転術』という手術法を用いて、力を入れることなく正常に瞼を開けられる状態にすることを、保険適用範囲のゴールとしております。 </p>
        </div>
        <!-- ./p-ope-row02-box -->
      </dd>
    </dl>
    <dl class="c-col-desc-box p-ope-col-box" id="link-flow">
      <dt class="c-col-desc-box__ttl c-col-desc-box__ttl--bg_blue p-ope-col-box__ttl"> 施術の手順 </dt>
      <dd class="c-col-desc-box__desc p-ope-col-box__desc">
        <ol class="c-thumb-under-text-list p-ope-flow">
          <li class="c-thumb-under-text-list__item p-ope-flow__item">
            <div class="c-thumb-under-text-list__thumb p-ope-flow__thumb"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/ope_flow_thumb01.jpg?145555" alt="症状やお顔のバランスを考慮して、切開線をデザインします。"> </div>
            <!-- ./p-ope-flow__thumb -->
            <div class="c-row02-box p-ope-flow-desc"> <span class="c-circle-text c-circle-text--bg_light_pink p-ope-flow-desc__left">1</span>
              <p class="p-ope-flow-desc__right">症状やお顔のバランスを考慮してデザインし、局所麻酔後に皮膚を切開します。</p>
            </div>
            <!-- ./p-ope-flow-desc -->
          </li>
          <li class="c-thumb-under-text-list__item p-ope-flow__item">
            <div class="c-thumb-under-text-list__thumb p-ope-flow__thumb"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/ope_flow_thumb02.jpg?145555" alt="眼窩隔膜を切開し、挙筋腱膜を同定します。"> </div>
            <!-- ./p-ope-flow__thumb -->
            <div class="c-row02-box p-ope-flow-desc"> <span class="c-circle-text c-circle-text--bg_light_pink p-ope-flow-desc__left">2</span>
              <p class="p-ope-flow-desc__right">眼窩隔膜を切開し、挙筋腱膜を同定します。</p>
            </div>
            <!-- ./p-ope-flow-desc -->
          </li>
          <li class="c-thumb-under-text-list__item p-ope-flow__item">
            <div class="c-thumb-under-text-list__thumb p-ope-flow__thumb"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/ope_flow_thumb03.jpg?145555" alt="挙筋腱膜をミュラー筋から剥離し、必要な幅をスライドさせ、瞼板に固定します。"> </div>
            <!-- ./p-ope-flow__thumb -->
            <div class="c-row02-box p-ope-flow-desc"> <span class="c-circle-text c-circle-text--bg_light_pink p-ope-flow-desc__left">3</span>
              <p class="p-ope-flow-desc__right">挙筋腱膜をミュラー筋から剥離し、必要な幅をスライドさせ、瞼板に固定します。</p>
            </div>
            <!-- ./p-ope-flow-desc -->
          </li>
          <li class="c-thumb-under-text-list__item p-ope-flow__item">
            <div class="c-thumb-under-text-list__thumb p-ope-flow__thumb"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/ope_flow_thumb04.jpg?145555" alt="左右のバランスを調整した後、瞼板固定を追加します。"> </div>
            <!-- ./p-ope-flow__thumb -->
            <div class="c-row02-box p-ope-flow-desc"> <span class="c-circle-text c-circle-text--bg_light_pink p-ope-flow-desc__left">4</span>
              <p class="p-ope-flow-desc__right">左右のバランスを調整した後、瞼板固定を追加します。</p>
            </div>
            <!-- ./p-ope-flow-desc -->
          </li>
          <li class="c-thumb-under-text-list__item p-ope-flow__item u-mb0">
            <div class="c-thumb-under-text-list__thumb p-ope-flow__thumb"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/ope_flow_thumb05.jpg?145555" alt="二重のラインが薄れないよう、皮膚を切開ラインで固定します。"> </div>
            <!-- ./p-ope-flow__thumb -->
            <div class="c-row02-box p-ope-flow-desc"> <span class="c-circle-text c-circle-text--bg_light_pink p-ope-flow-desc__left">5</span>
              <p class="p-ope-flow-desc__right">二重のラインが薄れないよう、皮膚を切開ラインで固定します。</p>
            </div>
            <!-- ./p-ope-flow-desc -->
          </li>
          <li class="c-thumb-under-text-list__item p-ope-flow__item u-mb0">
            <div class="c-thumb-under-text-list__thumb p-ope-flow__thumb"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/ope_flow_thumb06.jpg?145555" alt="最後に皮膚表面を縫合し、手術終了となります。"> </div>
            <!-- ./p-ope-flow__thumb -->
            <div class="c-row02-box p-ope-flow-desc"> <span class="c-circle-text c-circle-text--bg_light_pink p-ope-flow-desc__left">6</span>
              <p class="p-ope-flow-desc__right">最後に皮膚表面を縫合し、手術終了となります。</p>
            </div>
            <!-- ./p-ope-flow-desc -->
          </li>
        </ol>
      </dd>
    </dl>
    <dl class="c-col-desc-box p-ope-col-box u-mb-1line">
      <dt class="c-col-desc-box__ttl c-col-desc-box__ttl--bg_blue p-ope-col-box__ttl"> 保険適用による眼瞼下垂の手術費用 </dt>
      <dd class="c-col-desc-box__desc p-ope-col-box__desc">
        <table class="p-price-table">
           <tr class="p-price-table__row">
            <th class="p-price-table__th">両側の場合</th>
            <td class="p-price-table__td">43,200円</td>
          </tr>
          <tr class="p-price-table__row">
            <th class="p-price-table__th">片側の場合</th>
            <td class="p-price-table__td">21,600円</td>
          </tr>
          <tr class="p-price-table__row">
            <th class="p-price-table__th">75歳以上の場合(両側)</th>
            <td class="p-price-table__td">14,400円</td>
          </tr>
        </table>
        <p class="u-tc p-table-note u-mairyo">※上限負担金額は各保健資格内容により変動あり<span class="u-pc-only">　　</span><br class="u-sp-only">
          ※初診料、再診料、術後の薬代などは別途費用となります。</p>
      </dd>
</dl>

 <dl class="c-col-desc-box p-ope-col-box">
      <dt class="c-col-desc-box__ttl c-col-desc-box__ttl--bg_blue p-ope-col-box__ttl"> その他の施術（税込） </dt>
      <dd class="c-col-desc-box__desc p-ope-col-box__desc">
        <table class="p-price-table">
           <tr class="p-price-table__row">
            <th class="p-price-table__th">二重埋没法2点</th>
            <td class="p-price-table__td">99,000円</td>
          </tr>
          <tr class="p-price-table__row">
            <th class="p-price-table__th">二重埋没法3点</th>
            <td class="p-price-table__td">148,500円</td>
          </tr>
          <tr class="p-price-table__row">
            <th class="p-price-table__th">切開法</th>
            <td class="p-price-table__td">330,000円</td>
          </tr>
           <tr class="p-price-table__row">
            <th class="p-price-table__th">目頭切開</th>
            <td class="p-price-table__td">330,000円</td>
          </tr>
           <tr class="p-price-table__row">
            <th class="p-price-table__th">目尻切開</th>
            <td class="p-price-table__td">330,000円</td>
          </tr>
           <tr class="p-price-table__row">
            <th class="p-price-table__th">グラマラスライン形成</th>
            <td class="p-price-table__td">385,000円</td>
          </tr>
           <tr class="p-price-table__row">
            <th class="p-price-table__th">眼まぶた下垂(MT法)</th>
            <td class="p-price-table__td">330,000円</td>
          </tr>
           <tr class="p-price-table__row">
            <th class="p-price-table__th">眉下切開</th>
            <td class="p-price-table__td">385,000円</td>
          </tr>
          <tr class="p-price-table__row">
            <th class="p-price-table__th">上まぶたたるみ取り</th>
            <td class="p-price-table__td">330,000円</td>
          </tr>
          <tr class="p-price-table__row">
            <th class="p-price-table__th">下まぶたたるみ取り</th>
            <td class="p-price-table__td">330,000円</td>
          </tr>
          <tr class="p-price-table__row">
            <th class="p-price-table__th">上まぶた脱脂術</th>
            <td class="p-price-table__td">330,000円</td>
          </tr>
        </table>
       <!--  <p class="u-tc p-table-note u-mairyo">※上限負担金額は各保健資格内容により変動あり<span class="u-pc-only">　　</span><br class="u-sp-only">
          ※初診料、再診料、術後の薬代などは別途費用となります。</p> -->
      </dd>
    </dl>


  </div>
</section>
<div class="p-sp-only-actions u-sp-display">
  <ul class="p-top-conversion u-mb0">
    <li class="p-top-conversion__item"> <a href="<?php echo home_url( '/' ); ?>reserve/kanto.html" class="c-btn-cal p-top-btn p-top-btn--cal" target="_blank">カウンセリング予約</a> </li>
    <li class="p-top-conversion__item"> <a href="<?php echo home_url( '/' ); ?>contact/contact.html" class="c-btn-mail p-top-btn p-top-btn--mail" target="_blank">お問合わせ</a> </li>
  </ul>
   <a href="<?php echo home_url( '/' ); ?>tel/ptosis.html" class="p-sp-tel__link p-sp-tel__link--pt02 u-tc" target="_blank">
            <p class="p-sp-tel__sub u-tc u-f-ryu">お電話でのお問い合わせ</p>
                <p class="p-tel-text__left__number p-sp-tel__num u-f-ryu u-tc">0120-972-561</p>
                <p class=" p-sp-tel__time u-tc">10:00～19:00</p>
                <p class="c-btn-tel p-top-btn--tel">電話する</p>
  </a>
</div>
<!-- ./p-sp-only-actions -->

<section class="l-section p-doctor" id="link-doctor">
  <div class="l-doctor-inner">
    <h2 class="c-ttl-border c-ttl-border--blue "> <span class="c-ttl-border__text">院長自らが施術を行います</span> </h2>
    <div class="p-doctor-top-contents">
      <div class="p-doctor-info">
        <div class="p-doctor-name u-f-ryu">
          <p class="p-doctor-name__text">安居 剛</p>
          <p class="p-doctor-name__title">創輝会 理事  北日本統括医師<br>
            美容デザイナー®</p>
        </div>
        <!-- ./p-doctor-name -->
        <div class="p-doctor-info__thumb"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/doctor_img.jpg" alt="安居 剛"> </div>
        <!-- ./p-doctor-thumb -->

      </div>
      <!-- ./p-doctor-info -->

      <p class="p-doctor-catch u-vertical__ttl c-gold02 u-f-ryu-toggle"> 形成外科専門医であり<span class="u-min">、</span>美容外科でもキャリアを<br>
        <span class="u-pc-only">　</span>持つ院長自らがカウンセリングから施術<span class="u-min">、</span><br>
        <span class="u-pc-only">　　</span>アフターフォローまで担当しております<span class="u-min">。</span> </p>
      <div class="p-doctor-license">
        <dl class="p-license-list">
          <dt class="p-license-list__ttl">■所属学会</dt>
          <dd class="p-license-list__text">日本形成外科学会</dd>
          <dd class="p-license-list__text">日本美容外科学会（JSAPS）</dd>
          <dd class="p-license-list__text">日本頭蓋顎顔面外科学会</dd>
          <dd class="p-license-list__text">日本レーザー医学会</dd>
        </dl>
        <dl class="p-license-list">
          <dt class="p-license-list__ttl">■資格</dt>
          <dd class="p-license-list__text">医学博士</dd>
          <dd class="p-license-list__text">形成外科専門医</dd>
        </dl>
      </div>
      <!-- ./p-doctor-license -->

      <div class="p-doctor-awards">
        <div class="p-doctor-awards__row p-doctor-awards__row--right">
          <div class="p-doctor-awards__right-img js-modal-open" data-target="js-modal-awards01">
          <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/awards01.jpg" alt="">
          </div>
          <p class="p-doctor-awards__caption u-f-ryu">< 認定証 ></p>
        </div>
        <div class="p-doctor-awards__row p-doctor-awards__row--left">
          <div class="p-doctor-awards__left-img js-modal-open" data-target="js-modal-awards02">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/awards02.jpg" alt="">
          </div>
          <div class="p-doctor-awards__left-img js-modal-open" data-target="js-modal-awards03">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/awards03.jpg" alt="">
          </div>
            <p class="p-doctor-awards__caption u-f-ryu">< 学位記 ></p>
        </div>
      </div>
    </div>
    <!-- ./p-doctor-top-contents -->


     <!-- modal  content01 -->
    <div class="c-modal js-modal " id="js-modal-awards01">
      <div class="c-modal__bg js-modal-close"></div>
      <div class="c-modal__inner">
        <div class="c-modal__thumb"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/awards01_large.jpg" alt="モーダル写真01"> </div>
        <!-- ./c-modal__thumb -->
        <p class="c-modal__btn js-modal-close">閉じる</p>
      </div>
      <!-- ./c-modal__inner -->
    </div>
    <!-- ./c-modal -->

     <!-- modal  content02 -->
    <div class="c-modal js-modal " id="js-modal-awards02">
      <div class="c-modal__bg js-modal-close"></div>
      <div class="c-modal__inner">
        <div class="c-modal__thumb"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/awards02_large.jpg" alt="モーダル写真01"> </div>
        <!-- ./c-modal__thumb -->
        <p class="c-modal__btn js-modal-close">閉じる</p>
      </div>
      <!-- ./c-modal__inner -->
    </div>
    <!-- ./c-modal -->

     <!-- modal  content03 -->
    <div class="c-modal js-modal " id="js-modal-awards03">
      <div class="c-modal__bg js-modal-close"></div>
      <div class="c-modal__inner">
        <div class="c-modal__thumb"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/awards03_large.jpg" alt="モーダル写真01"> </div>
        <!-- ./c-modal__thumb -->
        <p class="c-modal__btn js-modal-close">閉じる</p>
      </div>
      <!-- ./c-modal__inner -->
    </div>
    <!-- ./c-modal -->

    <div class="p-doctor-desc-outer">
      <div class="p-doctor-desc">
        <div class="p-doctor-desc__bg"></div>
        <div class="p-doctor-desc__inner">
          <div class="p-doctor-desc__deep_inner">
            <div class="p-doctor-desc__text-wrap">
                   <p class="p-doctor-desc__text">　地元北海道で十数年にわたり，眼瞼下垂，タトゥー除去，乳房再建，顔面外傷，熱傷，皮膚悪性腫瘍，先天性アザの治療などあらゆる疾患の治療に従事してきた，形成外科専門医。顔面神経麻痺の治療に関する研究で，医学博士号を取得。基礎となる知識，経験を身につけ，満を持して美容外科医として，この創輝会で新たなステージをスタートさせた。 </p>

            <p class="p-doctor-desc__text u-mb0 fw600">　2018年10月より，仙台院で眼瞼下垂の保険診療が開始された。美容的側面も配慮しながらの治療成績が評価され，その後札幌院，池袋院でも眼瞼下垂治療を開始。スタートから1年半で350症例以上の実績を積む。この度，より多様性のあるニーズにも応えられるよう，新宿に眼瞼下垂治療の専門クリニックをオープンさせた。</p>
            </div>

          </div>
          <!-- ./p-doctor-desc__deep_inner -->
        </div>
        <!-- ./p-doctor-desc__inner -->
      </div>
      <!-- ./p-doctor-desc -->
    </div>
    <!-- ./p-doctor-desc-outer -->

    <div class="l-inner">
      <div class="c-row02-box p-doctor-career">
        <ul class="p-doctor-career-list">
          <li class="p-doctor-career-list__item"> <span class="p-doctor-career-list__year">2005年</span> <span class="p-doctor-career-list__text">札幌医科大学卒業。その後初期臨床研修を経て</span> </li>
          <li class="p-doctor-career-list__item"> <span class="p-doctor-career-list__year">2007年</span> <span class="p-doctor-career-list__text">北海道大学医学部形成外科入局、道内の関連病院で研鑽を積む</span> </li>
          <li class="p-doctor-career-list__item"> <span class="p-doctor-career-list__year">2012年</span> <span class="p-doctor-career-list__text">北海道大学大学院医学研究科博士課程入学</span> </li>
          <li class="p-doctor-career-list__item"> <span class="p-doctor-career-list__year">2013年</span> <span class="p-doctor-career-list__text">日本形成外科学会専門医取得</span> </li>
          <li class="p-doctor-career-list__item"> <span class="p-doctor-career-list__year">2016年</span> <span class="p-doctor-career-list__text">同大学院卒業、学位取得</span> </li>
          <li class="p-doctor-career-list__item"> <span class="p-doctor-career-list__year">2016年</span> <span class="p-doctor-career-list__text">札幌斗南病院で形成外科医長として食道再建、乳房再建、眼瞼下垂、レーザー治療（シミ消し、タトゥー除去など）を含めた美容医療の部門を担当する。</span> </li>
          <li class="p-doctor-career-list__item"> <span class="p-doctor-career-list__year">2018年</span> <span class="p-doctor-career-list__text">4月 医療法人社団 創輝会 入職</span> </li>
          <li class="p-doctor-career-list__item"> <span class="p-doctor-career-list__year">2019年</span> <span class="p-doctor-career-list__text">3月 YAG BEAUTY CLINIC 札幌院院長就任</span> </li>
          <li class="p-doctor-career-list__item"> <span class="p-doctor-career-list__year">2020年</span> <span class="p-doctor-career-list__text">6月 眼瞼下垂クリニック 新宿院長就任</span> </li>
        </ul>
      </div>
      <!-- ./p-doctor-career -->

      <div class="p-doctor-cal" id="link-cal"> <?php echo do_shortcode('[xo_event_calendar months="2" holidays="ope,sapporo,sendai,ike" navigation="false"]'); ?> </div>

      <p class="u-tc" style="margin-top: 1.2rem;">※<a href="https://souki-kai.or.jp/ptosis_ikebukuro/" class="c-blue" target="_blank">池袋院</a>・<a href="https://souki-kai.or.jp/ptosis/" class="c-blue" target="_blank">仙台院</a>・<a href="https://souki-kai.or.jp/ptosis_sapporo/" class="c-blue" target="_blank">札幌院</a>、など他のクリニックにも出勤しています。</p>
      <!-- ./p-doctor-cal -->
    </div>
    <!-- ./l-inner -->
  </div>
  <!-- ./doctor-inner   -->
</section>
<div class="p-clinic-desc u-bg-cover">
  <div class="l-inner p-clinic-desc__inner">
    <div class="u-sp-only"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/pr_thumb_sp.jpg" alt="サムネイル"> </div>
    <div class="p-clinic-desc__text_area u-f-ryu">
      <p class="p-clinic-desc__text"> 当院は眼瞼下垂の治療を「美容の観点」も取り入れて行っており、お顔のトータルなバランスを見ながら施術を行い、違和感のない自然な仕上がりになるよう心掛けております。<br>また、「美容」と申しますと女性のイメージも強いですが、眼瞼下垂にお困りであれば性別や年齢問わずご相談いただけます。 </p>
      <p class="p-clinic-desc__text u-mb0"> ご自身で判断が難しい場合なども含め、まずはお気軽にカウンセリングにお越しくださいませ。<br>スタッフ一同、心よりご来院をお待ちしております。 </p>
    </div>
  </div>
</div>
<div class="p-sp-only-actions u-sp-display">
  <ul class="p-top-conversion u-mb0">
    <li class="p-top-conversion__item"> <a href="<?php echo home_url( '/' ); ?>reserve/kanto.html" class="c-btn-cal p-top-btn p-top-btn--cal" target="_blank">カウンセリング予約</a> </li>
    <li class="p-top-conversion__item"> <a href="<?php echo home_url( '/' ); ?>contact/contact.html" class="c-btn-mail p-top-btn p-top-btn--mail" target="_blank">お問合わせ</a> </li>
  </ul>
  <a href="<?php echo home_url( '/' ); ?>tel/ptosis.html" class="p-sp-tel__link p-sp-tel__link--pt02 u-tc" target="_blank">
            <p class="p-sp-tel__sub u-tc u-f-ryu">お電話でのお問い合わせ</p>
                <p class="p-tel-text__left__number p-sp-tel__num u-f-ryu u-tc">0120-972-561</p>
                <p class=" p-sp-tel__time u-tc">10:00～19:00</p>
                <p class="c-btn-tel p-top-btn--tel">電話する</p>
  </a>
</div>
<!-- ./p-sp-only-actions -->

<section class="l-section p-access" id="link-access">
  <div class="l-inner p-access__inner">
    <h2 class="c-ttl-border c-ttl-border--blue "> <span class="c-ttl-border__text">アクセス方法</span> </h2>
    <div class="c-row02-box p-access-row">
      <div class="p-access-row__map">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.4053648396757!2d139.701385315259!3d35.6916410801919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc8db04f287841741!2z55y855685LiL5Z6C44Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1593395672648!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="p-access-row__info">
        <p class="p-access-row__address">〒160-0022　東京都新宿区新宿3-17-3 アカネビル 8F <br>
          TEL:0120-972-561 </p>
        <div class="p-access-row__train">
          <h3 class="p-access-row__train_ttl">公共機関</h3>
          <p class="p-access-row__train_kind">JR新宿駅東口 徒歩3分、東京メトロ丸ノ内線 新宿駅 徒歩2分、<br class="u-pc-only">東京メトロ丸ノ内線・副都心線・都営新宿線 新宿三丁目駅 徒歩1分、<br class="u-pc-only">小田急線・京王線 新宿駅 徒歩4分</p>
          <p class="p-access-row__sub_desc">新宿三丁目の名所、伊勢丹さんのお隣、ビックロさんの新宿通り<br class="u-pc-only">を挟んで正面のビル8階にございます<br class="u-pc-only">新宿三丁目駅から87m</p>
        </div>
      </div>
    </div>
    <ul class="p-access-thumbs">
      <li class="p-access-thumbs__item js-modal-open" data-target="js-modal-01">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/access_thumb01.jpg" alt="アクセスサムネイル画像">
        <i class="p-access-thumbs__icon"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/access_thumb_icon01.png" alt="アイコン"> </i>
      </li>
      <li class="p-access-thumbs__item js-modal-open"   data-target="js-modal-02">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/access_thumb02.jpg" alt="アクセスサムネイル画像">
        <i class="p-access-thumbs__icon"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/access_thumb_icon01.png" alt="アイコン">
      </i>
    </li>
      <li class="p-access-thumbs__item js-modal-open" data-target="js-modal-03"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/access_thumb03.jpg?0614" alt="アクセスサムネイル画像">
      <i class="p-access-thumbs__icon"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/access_thumb_icon02.png" alt="アイコン"> </i>
    </li>
      <li class="p-access-thumbs__item js-modal-open" data-target="js-modal-04">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/access_thumb04.jpg?0610" alt="アクセスサムネイル画像">
        <i class="p-access-thumbs__icon"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/access_thumb_icon02.png" alt="アイコン"> </i>
      </li>
    </ul>
    <!-- modal  content01 -->
    <div class="c-modal js-modal" id="js-modal-01">
      <div class="c-modal__bg js-modal-close"></div>
      <div class="c-modal__inner">
        <div class="c-modal__thumb"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/modal_thumb01.jpg" alt="モーダル写真01"> </div>
        <!-- ./c-modal__thumb -->
        <p class="c-modal__btn js-modal-close">閉じる</p>
      </div>
      <!-- ./c-modal__inner -->
    </div>
    <!-- ./c-modal -->
    <!-- modal  content02 -->
    <div class="c-modal js-modal" id="js-modal-02">
      <div class="c-modal__bg js-modal-close"></div>
      <div class="c-modal__inner">
        <div class="c-modal__thumb"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/top/modal_thumb02.jpg" alt="モーダル写真02"> </div>
        <!-- ./c-modal__thumb -->
        <p class="c-modal__btn js-modal-close">閉じる</p>
      </div>
      <!-- ./c-modal__inner -->
    </div>
    <!-- ./c-modal -->
    <!-- modal  content03 -->
    <div class="c-modal js-modal" id="js-modal-03">
      <div class="c-modal__bg js-modal-close"></div>
      <div class="c-modal__inner c-modal__inner--movie">
        <div class="c-modal__thumb c-modal__thumb--movie">
          <iframe src="https://www.youtube.com/embed/q_Pb86XAkIo"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <!-- ./c-modal__thumb -->
        <p class="c-modal__btn js-modal-close">閉じる</p>
      </div>
      <!-- ./c-modal__inner -->
    </div>
    <!-- ./c-modal -->
    <!-- modal  content04 -->
    <div class="c-modal js-modal" id="js-modal-04">
      <div class="c-modal__bg js-modal-close"></div>
      <div class="c-modal__inner c-modal__inner--movie">
        <div class="c-modal__thumb c-modal__thumb--movie">
          <iframe src="https://www.youtube.com/embed/HsiASUogumU"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <!-- ./c-modal__thumb -->
        <p class="c-modal__btn js-modal-close">閉じる</p>
      </div>
      <!-- ./c-modal__inner -->
    </div>
    <!-- ./c-modal -->
  </div>
  <!-- ./l-inner -->
</section>

<section class="l-section p-faq-top" id="link-faq">


            <div class="l-inner">

<h2 class="c-ttl-border c-ttl-border--blue "> <span class="c-ttl-border__text">よくある質問</span> </h2>



 <div class="p-faq-archive-container u-flex-sb u-flex-wrap">
                    <?php
$args = array(
'post_type' => 'faq',
'posts_per_page' => -1,
'orderby' => 'date',
'order' => 'DESC',
);
$the_query = new WP_Query( $args );
while ( $the_query->have_posts() ) : $the_query->the_post();
?>

<!--ここにループの中の記述 --> <article class="p-faq-list">
                    <a href="<?php the_permalink(); ?>" class="p-faq-list__link">
                       <!--  <img src="<?php echo get_template_directory_uri(); ?>/src/img/qa/qa_thumb01.jpg" alt="" class="p-faq-list__thumb"> -->
                <?php
                    if( has_post_thumbnail()){
                    the_post_thumbnail('medium', array('class' => 'p-faq-list__thumb'));
                    }
                ?>
                        <p class="p-faq-list__number">Question.<?php echo get_post_number( $post->post_type ); ?></p>
                        <div class="p-faq-list__text_box">
                            <p class="p-faq-list__tit"><?php the_title(); ?></p>
                            <p class="c-btn-faq p-btn-faq">Answer</p>
                        </div>
                    </a>
                </article>

<?php endwhile; wp_reset_postdata(); ?>

</div>




            </div>

</section>
<?php get_footer(); ?>
