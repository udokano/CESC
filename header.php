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
<?php if ( is_home() || is_front_page() ) : ?>
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
<?php else: ?>
<header class="l-header p-header">
  <div class="l-header-container u-flex-sb u-align-cent">
    <div class="p-logo"> <a href="<?php echo home_url( '/' ); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/common/c_site_logo.svg" alt="眼瞼下垂クリニック"> </a> </div>
    <!-- ./p-logo -->



    <nav class="p-header-nav" id="js-nav">
      <ul class="p-header-nav__list u-flex u-a-otf">
        <li class="p-header-nav__item"> <a href="<?php echo home_url( '/' ); ?>#link-about" class="p-header-nav__link">眼瞼下垂とは</a> </li>
          <li class="p-header-nav__item"> <a href="<?php echo home_url( '/' ); ?>#link-flow" class="p-header-nav__link">施術の流れ・費用</a> </li>
        <li class="p-header-nav__item"> <a href="<?php echo home_url( '/' ); ?>#link-doctor" class="p-header-nav__link">医師紹介</a> </li>
        <li class="p-header-nav__item"> <a href="<?php echo home_url( '/' ); ?>#link-cal" class=p-header-nav__link">スケジュール </a> </li>

        <li class="p-header-nav__item"> <a href="<?php echo home_url( '/' ); ?>#link-access" class="p-header-nav__link">アクセス</a> </li>

        <li class="p-header-nav__item"> <a href="<?php echo home_url( '/' ); ?>#link-faq" class="p-header-nav__link">よくあるご質問</a> </li>   <li class="p-header-nav__item"> <a href="<?php echo home_url( '/' ); ?>contact/contact.html" class="p-header-nav__link" target="_blank">お問合せ</a> </li>
        <li class="p-header-nav__item"> <a href="https://souki-kai.or.jp/pdf/under18.pdf" class="p-header-nav__link" target="_blank">未成年同意書</a> </li>
      </ul>
    </nav>
    <!-- ./p-header-nav -->
    <div class="p-header-btns"> <a href="<?php echo home_url( '/' ); ?>reserve/kanto.html" class="c-btn-cal p-btn-cal-pages" target="_blank"> <span class="u-pc-only">カウンセリング予約</span> <span class="u-sp-only">WEB予約</span> </a>
      <button class="c-btn-trigger" id="js-drawer">
      <div class="c-btn-trigger__inner"> <span></span> <span></span> <span></span> </div>
      </button>
    </div>
  </div>
  <!-- ./l-header-container -->

</header>
<?php endif; ?>
