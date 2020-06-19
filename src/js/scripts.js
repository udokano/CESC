// JavaScript Document


//ハンバーガー トップ
$(function () {
  $("#js-menu-trigger").on("click", function () {
    $(this).toggleClass("is-menu-open");
    $("#js-menu").toggleClass("is-menu-show");
  });

});

//下層
$(function () {
  $("#js-drawer").on("click", function () {
    $(this).toggleClass("js-open");
    $("#js-nav").toggleClass("is-menu-open");
  });

});

//トップハンバーガースマホ時のみアンカーメニュークリックしたら、メニュー閉じる
var windowWidth = $(window).width();
var windowSm = 768;
if (windowWidth <= windowSm) {

  $(".p-nav-links__link").on("click", function () {
    $("#js-menu-trigger").removeClass("is-menu-open");
    $("#js-menu").removeClass("is-menu-show");
  });

} else {

}


//モーダルメニュー

$(function () {
  $('.js-modal-open').each(function () {
    $(this).on('click', function () {
      var target = $(this).data('target');
      var modal = document.getElementById(target);
      $(modal).addClass("is-modal-open");
      return false;
    });
  });
  $('.js-modal-close').on('click', function () {
    $('.js-modal').removeClass("is-modal-open");
    return false;
  });
});


if (navigator.userAgent.indexOf('iPhone') > 0) {
  let body = document.getElementById('link-insta');
  body.classList.add('iPhone');
}



//TOP_MENU_link
$('.js-link').on('click', function (e) {
  e.stopPropagation();
  e.preventDefault();

  location.href = $(this).attr('data-url');
})


//TOP PAGE MENU ANCHOR HOVER

$(".js-anchor.anchor-menu01 span").mouseover(
  function () {
    if (!$(this).hasClass("is-select")) {
      $(".js-anchor.anchor-menu01 span").not(this).removeClass("is-select");
      $(this).addClass("is-select");
    }
  }
);

$(".js-anchor.anchor-menu02 span").mouseover(
  function () {
    if (!$(this).hasClass("is-select")) {
      $(".js-anchor.anchor-menu02 span").not(this).removeClass("is-select");
      $(this).addClass("is-select");
    }
  }
);

$(".js-anchor.anchor-menu03 span").mouseover(
  function () {
    if (!$(this).hasClass("is-select")) {
      $(".js-anchor.anchor-menu03 span").not(this).removeClass("is-select");
      $(this).addClass("is-select");
    }
  }
);
$(".js-anchor.anchor-menu04 span").mouseover(
  function () {
    if (!$(this).hasClass("is-select")) {
      $(".js-anchor.anchor-menu04 span").not(this).removeClass("is-select");
      $(this).addClass("is-select");
    }
  }
);

$(".js-anchor.anchor-menu05 span").mouseover(
  function () {
    if (!$(this).hasClass("is-select")) {
      $(".js-anchor.anchor-menu05 span").not(this).removeClass("is-select");
      $(this).addClass("is-select");
    }
  }
);

//TOP__PAGE__slide

/* $(function () {
  $("#js-slide").slick({
    slidesToScroll: 1,
    centerMode: false,
    arrows: true,

    slidesToShow: 3,
    prevArrow: '<div class="arrow prev"></div>',
    nextArrow: '<div class="arrow next"></div>',
    responsive: [
      {
        //モバイル時のスライド
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          autoplay: false
        }
      }
    ]
  });
});
 */

//スムーススクロール
/* var urlHash = location.hash
if (urlHash) {
  $('body,html').stop().scrollTop(0);
  $(window).on('load', function () {
    var target = $(urlHash);
    var position = target.offset().top;
    $('body,html').stop().animate({ scrollTop: position }, 500);

  });
} */
var headerHight = 0; //ヘッダの高さ
$('a[href^=#]').click(function () {
  var href = $(this).attr("href");
  var target = $(href == "#" || href == "" ? 'html' : href);
  var position = target.offset().top - headerHight; //ヘッダの高さ分位置をずらす
  $("html, body").animate({ scrollTop: position }, 550, "swing");
  return false;
});


//HEADER NAV URL部分一致

$(function () {
  $('.header__nav ul li a').each(function () {
    //現在ページのURLの末尾を取得
    var activeUrl = location.pathname.split("/")[2]; // 2階層目
    //テスト出力
    console.log(activeUrl);
    //valu(カテゴリースラッグ)取得
    var href = $(this).attr('href');
    //テスト出力
    //console.log(href);
    if (href == activeUrl) {
      $(this).addClass("is-active");
    }
  });
});
//SP
$(function () {
  $('.nav-link li a').each(function () {

    var activeUrl = location.pathname.split("/")[2]; // 2階層目
    //テスト出力
    //console.log(activeUrl);
    //valu(カテゴリースラッグ)取得
    var href = $(this).attr('href');
    //テスト出力
    //console.log(href);
    if (href == activeUrl) {
      $(this).addClass("is-active");
    }
  });
});


//Q&A ページ高さ揃える
$(window).on("load resize", function () {
  if ($(this).width() >= 768) {
    setTimeout(function () {
      var maxH = 0;
      $(".main-flex").find(".section-inner").each(function () {
        if ($(this).height() > maxH) maxH = $(this).height();
      });
      $(".main-flex").find(".section-inner").height(maxH);
    }, 200);
  }
});



//PRICE PAGE SP アコーディアン
$(function () {
  $(".toggle-btn").on("click", function () {
    $(this).next().slideToggle();
    $(this).toggleClass("js-open");
  });

});
