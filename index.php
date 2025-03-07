<?php
require_once __DIR__ . '/src/helpers.php';

$user = currentUser();
$login = null;
if (isset($user['id']) or !empty($user['id'])) {
  $login = '<li class="menu__item"><a class="menu__link" href="/profile.php">Личный кабинет</a></li>';
} else {
  $login = '<li class="menu__item"><a class="menu__link" href="/login.php">Войти</a></li>';
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="theme-color" content="#FAFAFA">
  <title>Премиум химчистка обуви и сумок в Москве — профессиональный клининг и восстановление обуви</title>
  <meta name="keywords" content="">
  <meta name="description" content="Ремонт и реставрация обуви и сумок из любых материалов.">
  <meta name="robots" content="">
  <meta property="og:title"
    content="Премиум химчистка обуви и сумок в Москве — профессиональный клининг и восстановление обуви">
  <meta property="og:description" content="Ремонт и реставрация обуви и сумок из любых материалов.">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <!--[if IE]> <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script> <![endif]-->
  <link href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/css/intlTelInput.css" rel="stylesheet"
    type="text/css">
  <link href="css/libs.min.css" rel="stylesheet" type="text/css">
  <!-- <link href="css/header.css" rel="stylesheet" type="text/css"> -->
  <link href="css/style.min.css" rel="stylesheet" type="text/css">
  <link href="css/another.css@tyu.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="favicon.ico" type="image/png">

  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-K7PKHZPX');</script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <title>MandoMemori. Официальный сайт сервиса</title>
  <meta name="description"
    content="Мы не просто реставрируем и чистим, мы возвращаем вас в то время, и даем те эмоции, которые вы испытывали при покупке навой обуви, сумки или другого любимого элемента гардероба.">
  <meta name="h1" content="MandoMemori - Официальный сайт сервиса по чистке ваших изделий.">
  <meta name="keywords"
    content="ммклин москва, mmclean москва, mmclean чистка обуви, mmclean реставрация обуви, чистка обуви mmclean, реставрация mmclean, mmclean чистка сумок, mmclean услуги премиум, реставрация обуви mmclean, чистка сумок mmclean, чистка обуви Loro Piana москва, отбеливание подошвы Loro Piana, замена подошвы Loro Piana, профессиональная чистка Loro Piana, восстановление Loro Piana обуви, уход за обувью Loro Piana, чистка подошвы Loro Piana, химчистка обуви Loro Piana, реставрация обуви Loro Piana, защита обуви Loro Piana, чистка сумок Hermes москва, реставрация сумок Hermes, профессиональная чистка Hermes, удаление пятен с сумок Hermes, химчистка сумок Hermes, восстановление цвета сумок Hermes, реставрация кожи сумок Hermes, защита сумок Hermes, восстановление Hermes сумок, уход за сумками Hermes, чистка обуви Louis Vuitton, реставрация обуви Kiton, чистка обуви Valentino, реставрация Dior обуви, чистка сумок Brioni, реставрация обуви Stefano Ricci, чистка сумок Brunello Cucinelli, реставрация сумок Tom Ford, восстановление обуви Kiton, уход за сумками Valentino, отбеливание подошвы Loro Piana, чистка белой подошвы обуви, чистка подошвы Loro Piana, чистка белой подошвы кроссовок, отбеливание кроссовок, восстановление подошвы обуви, как отбелить подошву обуви, уход за белой подошвой, профессиональная чистка подошвы, чистка подошвы Dior обуви, чистка кожаной обуви премиум, восстановление кожаной обуви, реставрация кожи обуви, удаление пятен с кожи обуви, чистка кожаных сумок, уход за кожей премиум обуви, восстановление кожаных сумок, защита кожаных сумок, восстановление цвета кожи, защита кожи от воды, профилактика обуви Loro Piana, дорогая профилактика обуви, профессиональная профилактика обуви, установка профилактики, защита подошвы обуви, антискользящая профилактика, профилактика подошвы обуви, смена профилактики обуви, как защитить обувь от износа, защита обуви от воды и грязи, удаление пятен с замши, восстановление цвета замши, уход за замшевой обувью, как почистить белую обувь, как убрать пятна с кожи, удаление соли с обуви, как убрать запах из обуви, как убрать царапины с обуви, как ухаживать за обувью Loro Piana, чистка обуви после дождя, чистка обуви премиум цена, сколько стоит реставрация обуви, цена на чистку Loro Piana, стоимость чистки Hermes, цена на реставрацию сумок, стоимость чистки сумок Dior, реставрация обуви цена, цена чистки сумок Louis Vuitton, сколько стоит отбеливание подошвы, цена на чистку и уход за обувью, luxury shoe cleaning Moscow, Hermes bag restoration Moscow, Loro Piana shoe restoration Moscow, leather shoe care Moscow, premium bag cleaning Moscow, white sole whitening Moscow, high-end shoe repair Moscow, suede cleaning Moscow, luxury bag repair Moscow, Louis Vuitton bag restoration">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="title" content="MMclean - мы очистим и провидём профилактику вашей обуви">
  <meta name="application-name" content="MMClean&nbsp;Сервис">

  <!-- OG -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="MMClean&nbsp;Сервис">
  <meta property="og:title" content="MandoMemori. Официальный сайт сервиса.">
  <meta property="og:url" content="https://mandomemori.ru/">
  <meta property="og:image" content="favicon.ico">
  <meta property="og:description"
    content="Мы не просто реставрируем и чистим, мы возвращаем вас в то время, и даем те эмоции, которые вы испытывали при покупке навой обуви, сумки или другого любимого элемента гардероба.">
  <meta name="googlebot" content="all">
  <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="MMClean&nbsp;Сервис">
  <meta name="robots" content="all">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="application-name" content="MandoMemori">
  <meta name="yandex-verification" content="bde5f57185bddaa8" />
  <meta name="format-detection" content="telephone=89152527575">
  <link href="https://www.mandomemori.ru/" rel="alternate" hreflang="ru-ru">
  <link rel="apple-touch-icon" sizes="180x180" href="/images/logo/logo.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/images/logo/logo.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/images/logo/logo.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#3a3330">
  <meta name="msapplication-TileColor" content="#ef6f2e">
  <meta name="theme-color" content="#3a3330">
  <meta name="msapplication-navbutton-color" content="#3a3330">
  <meta name="apple-mobile-web-app-status-bar-style" content="#3a3330">
  <script>
    (function (w) {
      w.is_webview = false;
      const pageConfig = w.PAGE_CONFIG = w.PAGE_CONFIG || {};
      pageConfig.isProduction = true;
      pageConfig.isPurchaseUpsaleEnabled = false;
      pageConfig.isExperimentalFeaturesEnabled = true;
      pageConfig.isNewSearch = true;
      pageConfig.isMobileApp = false;
      pageConfig.isMobileAppIOS = false;
      pageConfig.isOneRetailApp = false;
      pageConfig.mobileAppVersion = null;
      pageConfig.gtmContainerId = "GTM-WKX8ZL";
      pageConfig.locale = "ru";
      pageConfig.menu = {};
      pageConfig.menu.profile = { "menu": { "groups": [{ "title": "\u0414\u043e\u043c", "elements": [{ "title": "\u0414\u043e\u043c", "description": null, "url": "\/profile\/home\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }, { "title": "\u0420\u0435\u0446\u0435\u043f\u0442\u044b \u0431\u043b\u044e\u0434", "description": null, "url": "\/recipes\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }] }, { "title": "\u0421\u0435\u0440\u0432\u0438\u0441", "elements": [{ "title": "\u0421\u0435\u0440\u0432\u0438\u0441\u043d\u044b\u0435 \u0446\u0435\u043d\u0442\u0440\u044b", "description": null, "url": "\/support\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }, { "title": "\u0421\u043b\u0443\u0436\u0431\u0430 \u0437\u0430\u0431\u043e\u0442\u044b", "description": null, "url": "\/support\/hotline\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }, { "title": "\u0417\u0430\u043f\u0447\u0430\u0441\u0442\u0438", "description": null, "url": "\/support\/parts\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }, { "title": "\u0418\u043d\u0441\u0442\u0440\u0443\u043a\u0446\u0438\u0438", "description": null, "url": "\/support\/instructions\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }, { "title": "\u0421\u0435\u0440\u0442\u0438\u0444\u0438\u043a\u0430\u0442\u044b \u0441\u043e\u043e\u0442\u0432\u0435\u0442\u0441\u0442\u0432\u0438\u044f", "description": null, "url": "\/support\/certificates\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }] }, { "title": "\u0418\u043d\u0444\u043e\u0440\u043c\u0430\u0446\u0438\u044f", "elements": [{ "title": "\u0411\u0443\u0442\u0438\u043a\u0438", "description": null, "url": "\/support\/pickup\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }, { "title": "\u041e\u0444\u0438\u0446\u0438\u0430\u043b\u044c\u043d\u044b\u0435 \u0434\u0438\u043b\u0435\u0440\u044b", "description": null, "url": "\/support\/dealers\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }, { "title": "\u041e \u043a\u043e\u043c\u043f\u0430\u043d\u0438\u0438", "description": null, "url": "\/about\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }, { "title": "\u041a\u0430\u0440\u044c\u0435\u0440\u0430 \u0432 BORK", "description": null, "url": "\/about\/career\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }, { "title": "\u041a\u043e\u043d\u0442\u0430\u043a\u0442\u044b", "description": null, "url": "\/support\/contacts\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }] }] } };
      pageConfig.isCatalogV2Enabled = true;
      pageConfig.currentCity = { "name": "\u041c\u043e\u0441\u043a\u0432\u0430", "prefix": "\u0433", "latitude": "55.755814", "longitude": "37.617635" };
    })(window);
  </script>
  <script data-n-head="ssr">
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
      userCountry: "RU",
      userCity: "Москва",
      pageType: "product",
      userID: "",
      breadCrumbs: "MandoMemori / Лучшие услуги прямо под рукой",
      categoryId: "8604",
      categoryName: "Чистка",
      experiment_id: "w01;w03;w08;w05",
      variant_id: "w01_1;w03_0;w08_0;w05_2"
    });
  </script>

  <!-- metrika yandex -->
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
      m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
      m[i].l = 1 * new Date();
      for (var j = 0; j < document.scripts.length; j++) { if (document.scripts[j].src === r) { return; } }
      k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(95036655, "init", {
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true,
      webvisor: true
    });
  </script>
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/95036655" style="position:absolute; left:-9999px;" alt="" /></div>
  </noscript>
  <!-- /Yandex.Metrika counter -->


  <meta data-n-head="ssr" charset="utf-8">
  <meta data-n-head="ssr" name="viewport" content="width=device-width, initial-scale=1">
  <meta data-n-head="ssr" name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <meta data-n-head="ssr" name="google-site-verification" content="VXEoKSTw5NC5h4JqxJuqH8y_9oM941-MSdzcTGhKHHk">
  <link data-n-head="ssr" rel="icon" type="image/png" href="/images/logo/logo.png">

  <meta data-n-head="ssr" charset="utf-8">
  <meta data-n-head="ssr" name="viewport" content="width=device-width, initial-scale=1">
  <meta data-n-head="ssr" name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <meta data-n-head="ssr" name="google-site-verification" content="VXEoKSTw5NC5h4JqxJuqH8y_9oM941-MSdzcTGhKHHk">
  <link data-n-head="ssr" rel="icon" type="image/png" href="/images/logo/logo.png">
  <!-- End Google Tag Manager -->
</head>

<body>
  <!-- Top.Mail.Ru counter -->
  <script type="text/javascript">
    var _tmr = window._tmr || (window._tmr = []);
    _tmr.push({ id: "3386414", type: "pageView", start: (new Date()).getTime() });
    (function (d, w, id) {
      if (d.getElementById(id)) return;
      var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
      ts.src = "https://top-fwz1.mail.ru/js/code.js";
      var f = function () { var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s); };
      if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
    })(document, window, "tmr-code");
  </script>
  <noscript>
    <div><img src="https://top-fwz1.mail.ru/counter?id=3386414;js=na" style="position:absolute;left:-9999px;"
        alt="Top.Mail.Ru" /></div>
  </noscript>
  <!-- /Top.Mail.Ru counter -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K7PKHZPX" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div class="header__out" id="header">
    <div class="container">
      <!--  ШАПКА  -->
      <header class="header" data-aos="fade-down">
        <div class="header__toggle">
          <button class="toggle js-aside-toggle" type="button"><i></i><i></i></button>
        </div>
        <div class="header__logo">
          <div class="logo"><a href="index.html"><img class="mobile-hidden" src="img/logo.png" alt="mandomemori"><img
                class="desktop-hidden" src="img/logo_small.svg" alt="mandomemori" width="158" height="74"></a></div>
        </div>
        <div class="header__nav">
          <ul class="menu">
            <li class="menu__item"><a class="menu__link js-scroll-to" href="/index.php">Главная</a></li>
            <li class="menu__item"><a class="menu__link js-scroll-to" href="tel:79152527575">Горячяя линия</a>
            </li>
            <?php echo $login; ?>
            <li class="menu__item"><a class="menu__link" href="/index.php#dop">Услуги</a></li>
            <li class="menu__item"><a class="menu__link js-scroll-to" href="https://wa.me/79152527575">FAQ</a></li>
          </ul>
        </div>
        <div class="header__btns">
          <a class="header__whatsapp" href="https://wa.me/79152527575" target="_blank" rel="noopener noreferrer"
            onclick='var _tmr = window._tmr || (window._tmr = []); _tmr.push({id: "3386414", type: "Whatsapp", start: (new Date()).getTime()});return true;'><img
              src="img/icons/btn-1-7.png" alt="whatsapp"></a>
          <div><a class="header__phone" href="tel:79152527575"
              style="color:transparent;position: absolute;top: 0;pointer-events: none;">79152527575</a>
            <a class="header__phone" href="tel:+79152527575">+ 7 (915) 252-75-75</a>
          </div>
        </div>
      </header>
      <!--  ШАПКА  -->
    </div>
  </div>

  <div class="main">
    <!--  Первый экран  -->
    <section class="top js-mouse-move" id="top">
      <div class="container">
        <div class="top__wrap">
          <h1 hidden>Химичистка обуви, сумок, курток, шуб в Москве</h1>
          <span class="top__title text-gradient-h" data-aos="fade-right" data-aos-delay="200"><span
              style="color:#212121;-webkit-text-fill-color:#212121">Химчистка</span> обуви сумок курток и
            одежды <span style="color:#212121;-webkit-text-fill-color:#212121">в&nbsp;Москве</span></span>
          <p class="top__subtitle" data-aos="fade-right" data-aos-delay="400">Благодаря нам, ваши любимые вещи будут
            радовать вас ещё долгие годы</p>
          <div class="top__btns" data-aos="fade-right" data-aos-delay="600">
            <a class="btn1 btn1_icon-1 top__btn" href="https://wa.me/79152527575" target="https://wa.me/79152527575nk"
              onclick='var _tmr = window._tmr || (window._tmr = []); _tmr.push({id: "3386414", type: "addToCart", start: (new Date()).getTime()});return true;'><span
                class="btn1__txt">Рассчитать стоимость</span><span class="btn1__icon btn1__icon-1"></span><span
                class="btn1__icon btn1__icon-2"></span></a>
            <span class="top__btns-txt">Менеджер свяжется <br>с вами в течение <strong>20 минут</strong></span>
          </div>
          <figure class="top__pics">
            <div class="top__img" data-aos="fade-left">
              <picture>
                <!-- <source media="(max-width:1250px)" srcset="img/top/pic-2@0.5x.webp" type="image/webp"> -->
                <!-- <source media="(max-width:1250px)" srcset="img/top/pic-2@0.5x.png">
                  <source srcset="img/top/pic-2.webp" type="image/webp"> -->
                <img class="js-mouse-move-target" src="img/more/16.png" alt="Премиум химчистка обуви и сумок в Москве"
                  width="1048" height="783">
              </picture>
              <svg style="filter: sepia(1)" class="top__img-svg" width="845" height="326" viewBox="0 0 845 326"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <line class="x x1" x1="155.383" y1="319.107" x2="538.819" y2="205.892"
                  stroke="url(#paint0_linear_17_8516)" stroke-width="10" stroke-linecap="round" />
                <line class="x x2" x1="338.751" y1="288.296" x2="586.833" y2="218.49"
                  stroke="url(#paint2_linear_17_8516)" stroke-width="5" stroke-linecap="round" />
                <line class="x x3" x1="553.897" y1="200.872" x2="821.701" y2="129.114"
                  stroke="url(#paint2_linear_17_8516)" stroke-width="5" stroke-linecap="round" />
                <line class="x x4" x1="50.0218" y1="281.045" x2="428.045" y2="166.978"
                  stroke="url(#paint3_linear_17_8516)" stroke-width="24" stroke-linecap="round" />
                <line class="x x5" x1="20.0354" y1="257.698" x2="383.698" y2="147.965"
                  stroke="url(#paint4_linear_17_8516)" stroke-width="39" stroke-linecap="round" />
                <line class="x x6" x1="712.19" y1="83.076" x2="833.076" y2="44.8099"
                  stroke="url(#paint5_linear_17_8516)" stroke-width="19" stroke-linecap="round" />
              </svg>
            </div>
            <div class="top__pics-bg"></div><span class="top__pics-label">mandomemori</span>
            <!-- <div class="top__pics-box" data-aos="fade-right" data-aos-delay="600">
                <p>дарим <strong>скидку в 1000 рублей</strong> на все услуги</p>
              </div>
              <div class="top__pics-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="224" height="37" viewBox="0 0 224 37" fill="none"><path d="M2.25568 29.6158C0.937581 30.0269 0.202296 31.4287 0.613374 32.7468C1.02445 34.0649 2.42622 34.8001 3.74432 34.3891L2.25568 29.6158ZM69.3377 11.3136L70.082 13.7002L69.3377 11.3136ZM182.316 24.9145L181.666 22.5004L182.316 24.9145ZM223.166 15.75C223.855 14.5535 223.444 13.025 222.248 12.336L202.749 1.10792C201.553 0.418912 200.024 0.830321 199.335 2.02683C198.646 3.22334 199.058 4.75185 200.254 5.44086L217.586 15.4213L207.605 32.7531C206.916 33.9496 207.328 35.4781 208.524 36.1671C209.721 36.8561 211.249 36.4447 211.938 35.2482L223.166 15.75ZM132.377 18.3457L131.125 20.5096L132.377 18.3457ZM3.74432 34.3891L70.082 13.7002L68.5934 8.92694L2.25568 29.6158L3.74432 34.3891ZM182.966 27.3286L221.65 16.9165L220.35 12.0884L181.666 22.5004L182.966 27.3286ZM131.125 20.5096C146.811 29.5849 165.466 32.0387 182.966 27.3286L181.666 22.5004C165.451 26.865 148.164 24.5912 133.629 16.1818L131.125 20.5096ZM70.082 13.7002C90.4869 7.3365 112.624 9.80593 131.125 20.5096L133.629 16.1818C113.918 4.77797 90.3328 2.14702 68.5934 8.92694L70.082 13.7002Z" fill="url(#paint0_linear_405_719)"/></svg></div> -->
          </figure>
          <div hidden>
            <div id="tooltip-top-1">
              <p>При Express-химчистке стоимость услуг возрастает на <strong>30%</strong>. В среднем Express-химчистка
                занимает 1 день, за исключением вывода соли и реагентов</p>
            </div>
          </div>
          <div class="top__advants">
            <div class="slider swiper" id="slider-top-advants">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="top__advants-slide" data-num="01" data-aos="fade-up" data-aos-delay="800"><i><img
                        src="img/top/icon-1.svg" alt=""></i>
                    <div><strong>Реставрация и
                        <br>чистка</strong> Любых изделий вашего гардероба </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="top__advants-slide" data-num="02" data-aos="fade-up" data-aos-delay="900"><i><img
                        src="img/top/icon-2.svg" alt=""></i>
                    <div><strong>Лучшие мастера
                      </strong> (Опыт от 3000 реставраций)</div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="top__advants-slide" data-num="03" data-aos="fade-up" data-aos-delay="1000"><i><img
                        src="img/top/icon-3.png" alt=""></i>
                    <div><strong>99% результат после <br>чистки и ухода</strong> Эффект нового гардероба, после наших
                      работ
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><a class="top__scroll js-scroll-to" href="index.html#s-order-2">
            <div>scroll <br>down</div><img src="img/svg/scroll.svg" alt="">
          </a>
        </div>
      </div>
    </section>
    <!--  /Первый экран  -->

    <div class="block-1">
      <div class="container">
        <div class="block-1__wrap">
          <div class="block-1__pic">
            <img src="img/block-1/bg-1.png" alt="" class="block-1__bg" width="289" height="201">
            <img src="img/demo/1.PNG" style='bottom: 25% !important' alt="" class=" block-1__img" width="253"
              height="221">
          </div>
          <div class="block-1__txt">Курьер заберет вещи <span class="d-ib text-gradient-v">в течение 30 минут</span>
          </div>
          <div class="block-1__btns">
            <a class="btn1 btn1_icon-1 top__btn " href="tel:79152527575"
              onclick='var _tmr = window._tmr || (window._tmr = []); _tmr.push({id: "3386414", type: "addToCart", start: (new Date()).getTime()});return true;'><span
                class="btn1__txt">Вызвать курьера</span><span class="btn1__icon btn1__icon-9"></span></a>
          </div>
        </div>
      </div>
    </div>

    <!--  ORDER 2  -->
    <section class="section section_order-2 js-mouse-move" id="s-order-2">
      <div class="container">
        <div class="order order-2">
          <div class="order__desc">
            <h2 class="section__title" data-aos="fade-right" data-aos-delay="100"><strong>Оставьте
                контакты
                и</strong>
              прикрепите фото вещи</h2>
            <div class="order__subtitle" data-aos="fade-right" data-aos-delay="200">Первый освободившийся специалист
              свяжется с вами в ближайшее время</div>
            <form class="form order__form" action="/_nuxt/php/items.php" method="post" autocomplete="off"
              enctype="multipart/form-data">
              <div class="row form__row">
                <div class="col form__col">
                  <label class="form__label">Введите имя</label>
                  <input class="form__input-2" type="text" name="username">
                </div>
                <div class="col form__col">
                  <label class="form__label form__label_req">Введите номер телефона</label>
                  <input class="form__input-2" type="tel" name="userphone" title="89012345678"
                    pattern="^[0-9\s\(\)\+\-]{1,22}$" required>
                </div>
                <div class="col form__col-2">
                  <div class="form__box-mess">
                    <label class="form__label">Где с вами связаться?</label>
                    <div class="messengers js-messengers">
                      <input type="hidden" name="type-message">
                      <input type="hidden" name="type-form" value="one">
                      <div class=" messengers__item"><span
                          class="messengers__btn js-messengers-btn active phone_selector" role="button" tabindex="0"
                          title="Телефон">
                          <span>Телефон</span></span>
                      </div>
                      <div class="messengers__item"><span class="messengers__btn js-messengers-btn whatsapp_selector"
                          role="button" tabindex="0" title="Whatsapp">
                          <span>Whatsapp</span></span></div>
                      <div class="messengers__item"><span class="messengers__btn js-messengers-btn telegram_selector"
                          role="button" tabindex="0" title="Telegram">
                          <span>Telegram</span></span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form__upload">
                <div class="upload js-upload">
                  <label class="upload__label">
                    <input type="file" name="uploadfiles" accept="image/png,image/jpeg,image/jpg">
                    <span class="upload__wrap">
                      <i><img style="filter: sepia(1)" src="img/svg/clip.svg" alt="clip" width="33" height="33"></i>
                      <span class="js-upload-txt">Прикрепите фото вещи</span>
                    </span>
                  </label>
                  <span class="upload__atten js-upload-atten"></span>
                  <span class="upload__sub">Можете отправить заявку и <strong class="d-ib">без фото</strong></span>
                </div>
              </div>
              <div class="form__footer">
                <button class="btn1 btn1_icon-1 form__submit" type="submit">
                  <div>
                    <span class="btn1__txt">Получить рекомендации</span>
                    <span class="btn1__txt">по&nbsp;восстановлению</span>
                  </div>
                  <span class="btn1__icon btn1__icon-1"></span>
                  <span class="btn1__icon btn1__icon-4"></span>
                </button>
                <div class="form__box-agree form__box-agree_v2">
                  <label class="form__agree form__agree_v2">
                    <input type="checkbox" name="agree" value="Согласен с Политикой конфиденциальности" checked><span
                      class="form__agree-check"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill="#FF9800" class="check"
                          d="M6.81818 10.1194L3.95455 7.29851L3 8.23881L6.81818 12L15 3.9403L14.0455 3L6.81818 10.1194Z" />
                        <path fill="#FF9800" evenodd" clip-rule="evenodd"
                          d="M12 0H1.5H0V1.5V14.5V16H1.5H14.5H16V14.5V7H14.5V14.5H1.5V1.5H12V0Z" />
                      </svg></span><span><span class="form__agree-txt">Согласен с Политикой
                        конфиденциальности</span></span>
                  </label>
                </div>
              </div>
            </form>
          </div>
          <div class="order__pic" data-aos="fade" data-aos-delay="200">
            <picture>
              <!-- <source media="(max-width:1250px)" srcset="img/order/pic-2@0.5x.webp" type="image/webp"> -->
              <!-- <source srcset="img/order/pic-2.webp" type="image/webp"> -->
              <!-- <source media="(max-width:1250px)" data-srcset="img/order/pic-2@0.5x.png"> -->
              <img class="js-mouse-move-target lazy order__img" data-src="img/iphone.png" alt="" width="959"
                height="1032">
            </picture>
            <svg class="svg" width="807" height="571" viewBox="0 0 807 571" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <line style="filter: sepia(1)" x1="674.19" y1="418.075" x2="795.076" y2="379.809"
                stroke="url(#paint0_linear_608_65)" stroke-width="19" stroke-linecap="round" />
              <path style="filter: sepia(1)"
                d="M690.765 520.208C687.954 523.195 683.548 524.791 677.429 524.843C671.309 524.896 663.654 523.396 654.621 520.389C636.563 514.378 613.333 502.46 586.496 485.574C532.845 451.815 465.044 398.368 395.834 333.23C326.624 268.093 269.17 203.653 232.223 152.144C213.743 126.38 200.44 103.914 193.346 86.2534C189.798 77.4187 187.838 69.8687 187.519 63.7567C187.201 57.6461 188.527 53.1508 191.338 50.1644C194.149 47.178 198.555 45.5816 204.674 45.5293C210.794 45.477 218.449 46.9766 227.482 49.9835C245.54 55.9943 268.77 67.9124 295.607 84.7987C349.258 118.558 417.059 172.004 486.269 237.142C555.479 302.28 612.933 366.72 649.88 418.229C668.36 443.993 681.663 466.459 688.757 484.119C692.305 492.954 694.265 500.504 694.584 506.616C694.902 512.727 693.576 517.222 690.765 520.208Z"
                stroke="url(#paint1_linear_608_65)" stroke-width="3" />
              <line style="filter: sepia(1)" x1="343.749" y1="523.025" x2="591.83" y2="453.219"
                stroke="url(#paint2_linear_608_65)" stroke-width="5" stroke-linecap="round" />
              <line style="filter: sepia(1)" x1="135.379" y1="557.836" x2="518.815" y2="444.621"
                stroke="url(#paint3_linear_608_65)" stroke-width="10" stroke-linecap="round" />
              <line style="filter: sepia(1)" x1="12.0218" y1="541.254" x2="639.29" y2="351.978"
                stroke="url(#paint4_linear_608_65)" stroke-width="24" stroke-linecap="round" />
            </svg>
            <span class="order__pic-bg"></span>
            <span class="top__pics-label">mandomemori</span>
          </div>
        </div>
      </div>
    </section>
    <!--  /ORDER 2  -->

    <!--  ADVANTS  -->
    <section class="section section_advants lazy" id="s-advants">
      <div class="container">
        <div class="section__head">
          <h2 class="section__title" data-aos="fade-right" data-aos-delay="0">Не оставим шансов <strong>остаться вашему
              гардеробу</strong>
            нейхоженным</h2><span class="section__subtitle" data-aos="fade-right" data-aos-delay="200">Работаем паром
            под высоким давлением или с помощью сухой <br class="mobile-hidden">и
            влажной чистки — все без повреждения защитного слоя</span>
          <div class="box" data-aos="fade" data-aos-delay="0">
            <div class="box-wrap" data-aos="fade-right" data-aos-delay="200">
              <p>Все наши мастера <br><strong>с опытом <br>работы от 6 лет</strong></p>
            </div><svg xmlns="http://www.w3.org/2000/svg" width="224" height="37" viewBox="0 0 224 37" fill="none">
              <path style="filter: sepia(1)"
                d="M2.25568 29.6158C0.937581 30.0269 0.202296 31.4287 0.613374 32.7468C1.02445 34.0649 2.42622 34.8001 3.74432 34.3891L2.25568 29.6158ZM69.3377 11.3136L70.082 13.7002L69.3377 11.3136ZM182.316 24.9145L181.666 22.5004L182.316 24.9145ZM223.166 15.75C223.855 14.5535 223.444 13.025 222.248 12.336L202.749 1.10792C201.553 0.418912 200.024 0.830321 199.335 2.02683C198.646 3.22334 199.058 4.75185 200.254 5.44086L217.586 15.4213L207.605 32.7531C206.916 33.9496 207.328 35.4781 208.524 36.1671C209.721 36.8561 211.249 36.4447 211.938 35.2482L223.166 15.75ZM132.377 18.3457L131.125 20.5096L132.377 18.3457ZM3.74432 34.3891L70.082 13.7002L68.5934 8.92694L2.25568 29.6158L3.74432 34.3891ZM182.966 27.3286L221.65 16.9165L220.35 12.0884L181.666 22.5004L182.966 27.3286ZM131.125 20.5096C146.811 29.5849 165.466 32.0387 182.966 27.3286L181.666 22.5004C165.451 26.865 148.164 24.5912 133.629 16.1818L131.125 20.5096ZM70.082 13.7002C90.4869 7.3365 112.624 9.80593 131.125 20.5096L133.629 16.1818C113.918 4.77797 90.3328 2.14702 68.5934 8.92694L70.082 13.7002Z"
                fill="url(#paint0_linear_405_719)" />
            </svg></svg>
          </div>
        </div>
        <div class="advants" data-aos="fade-up" data-aos-delay="200">
          <div class="advants__desc"><span class="advants__title">Восстанавливаем любой элемент вашего гардероба</span>
            <ul class="advants__list">
              <li data-aos="fade-up" data-aos-delay="200"><i><img src="img/advants/icon-1.svg"
                    alt="химчистка обуви"></i>
                <div>Реставрация любой сложности
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="0"><i><img src="img/advants/icon-2.svg" alt="химчистка обуви"></i>
                <div>Восстановление цвета любого материала
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200"><i><img src="img/advants/icon-3.svg"
                    alt="химчистка обуви"></i>
                <div>Установка задников, профилактики, набоек
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="0"><i><img src="img/advants/icon-4.svg" alt="химчистка обуви"></i>
                <div>Удаление следов реагентов
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200"><i><img src="img/advants/icon-5.svg"
                    alt="химчистка обуви"></i>
                <div>Отбеливание и замена подошвы
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="0"><i><img src="img/advants/icon-6.svg" alt="химчистка обуви"></i>
                <div>Ремонт царапин, потертостей, трещин</div>
              </li>
            </ul>
          </div>
          <div class="advants__pic"><img style="margin-top: 15%" data-src="img/demo/2.PNG" alt="химчистка обуви"
              alt="Чистим и реставрируем обувь масс-маркета, бренд и люкс" data-aos="fade-left" data-aos-delay="800"
              width="552" height="662" class="lazy"></div>
        </div>


        <div class="dop" id="dop"><span class="section__title-2" data-aos="fade-right" data-aos-delay="0">Наши
            услуги:</span>
          <div class="dop__slider swiper js-slider">
            <div class="swiper-wrapper" style="flex-wrap: wrap;">
              <div class="swiper-slids">
                <div class="dop__slide" data-aos="fade-up" data-aos-delay="200">
                  <div class="dop__pic"><img src="images/services/ (4).PNG" alt="Чистка"></div>
                  <div class="dop__desc"><span class="dop__title">Чистка</span>
                    <div class="dop__box"><span><strong>5,990</strong> ₽</span> / <span>5 дней</span></div><a
                      class="link dop__link " href="https://wa.me/79152527575?text=Узнать%20подробнее:%20Чистка">Узнать
                      подробнее</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slids">
                <div class="dop__slide" data-aos="fade-up" data-aos-delay="400">
                  <div class="dop__pic"><img src="images/services/ (2).PNG" alt="Профилактика"></div>
                  <div class="dop__desc"><span class="dop__title">Профилактика</span>
                    <div class="dop__box"><span><strong>3,490</strong> ₽</span> / <span>5 дней</span></div><a
                      class="link dop__link "
                      href="https://wa.me/79152527575?text=Узнать%20подробнее:%20Профилактика">Узнать подробнее</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slids">
                <div class="dop__slide" data-aos="fade-up" data-aos-delay="600">
                  <div class="dop__pic"><img src="images/services/ (1).PNG" alt="Чистка и заменаLoro Piano"></div>
                  <div class="dop__desc"><span class="dop__title">Чистка и замена подошвы Loro Piano</span>
                    <div class="dop__box"><span><strong>23,990</strong> ₽</span> / <span>5 дней</span></div><a
                      class="link dop__link "
                      href="https://wa.me/79152527575?text=Узнать%20подробнее:%20Чистка%20из%20замена%20Loro%20Piano">Узнать
                      подробнее</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slids">
                <div class="dop__slide" data-aos="fade-up" data-aos-delay="800">
                  <div class="dop__pic"><img src="images/services/ (3).PNG" alt="Реставрация"></div>
                  <div class="dop__desc"><span class="dop__title">Реставрация</span>
                    <div class="dop__box"><span><strong>6,490</strong> ₽</span> / <span>5 дней</span></div><a
                      class="link dop__link "
                      href="https://wa.me/79152527575?text=Узнать%20подробнее:%20Реставрация">Узнать
                      подробнее</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slids">
                <div class="dop__slide" data-aos="fade-up" data-aos-delay="800">
                  <div class="dop__pic"><img src="images/services/ (8).PNG" alt="Чистка Loro Piano"></div>
                  <div class="dop__desc"><span class="dop__title">Чистка Loro Piano</span>
                    <div class="dop__box"><span><strong>6,490</strong> ₽</span> / <span>5 дней</span></div><a
                      class="link dop__link "
                      href="https://wa.me/79152527575?text=Узнать%20подробнее:%20Чистка%20Loro%20Piano">Узнать
                      подробнее</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slids">
                <div class="dop__slide" data-aos="fade-up" data-aos-delay="800">
                  <div class="dop__pic"><img src="images/services/ (5).PNG" alt="Чистка и отбеливание Loro Piano"></div>
                  <div class="dop__desc"><span class="dop__title">Чистка и отбеливание Loro Piano</span>
                    <div class="dop__box"><span><strong>10,990</strong> ₽</span> / <span>5 дней</span></div><a
                      class="link dop__link "
                      href="https://wa.me/79152527575?text=Узнать%20подробнее:%20Чистка%20и%20отбеливание%20Loro%20Piano">Узнать
                      подробнее</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slids">
                <div class="dop__slide" data-aos="fade-up" data-aos-delay="800">
                  <div class="dop__pic"><img src="images/services/(12).PNG" alt="Замена подошвы Loro Piano"></div>
                  <div class="dop__desc"><span class="dop__title">Замена подошвы Loro Piano</span>
                    <div class="dop__box"><span><strong>18,990</strong> ₽</span> / <span>5 дней</span></div><a
                      class="link dop__link "
                      href="https://wa.me/79152527575?text=Узнать%20подробнее:%20Замена%20подошвы%20Loro%20Piano">Узнать
                      подробнее</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slids">
                <div class="dop__slide" data-aos="fade-up" data-aos-delay="800">
                  <div class="dop__pic"><img src="images/services/ (9).PNG" alt="Набойки-Мужские (Резина)"></div>
                  <div class="dop__desc"><span class="dop__title">Набойки-Мужские (Резина)</span>
                    <div class="dop__box"><span><strong>1,990</strong> ₽</span> / <span>5 дней</span></div><a
                      class="link dop__link "
                      href="https://wa.me/79152527575?text=Узнать%20подробнее:%20Набойки-Мужские%20(Резина)">Узнать
                      подробнее</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slids">
                <div class="dop__slide" data-aos="fade-up" data-aos-delay="800">
                  <div class="dop__pic"><img src="images/services/ (9).PNG" alt="Набойки-Мужские (Комбинированные)">
                  </div>
                  <div class="dop__desc"><span class="dop__title">Набойки-Мужские (Комбинированные)</span>
                    <div class="dop__box"><span><strong>2,990</strong> ₽</span> / <span>5 дней</span></div><a
                      class="link dop__link "
                      href="https://wa.me/79152527575?text=Узнать%20подробнее:%20Набойки-Мужские%20(Комбинированные)">Узнать
                      подробнее</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slids">
                <div class="dop__slide" data-aos="fade-up" data-aos-delay="800">
                  <div class="dop__pic"><img src="images/services/ (10).PNG" alt="Набойки-Женские (Шпильки)"></div>
                  <div class="dop__desc"><span class="dop__title">Набойки-Женские (Шпильки)</span>
                    <div class="dop__box"><span><strong>1,490</strong> ₽</span> / <span>5 дней</span></div><a
                      class="link dop__link "
                      href="https://wa.me/79152527575?text=Узнать%20подробнее:%20Набойки-Женские:%20(Шпильки)">Узнать
                      подробнее</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slids">
                <div class="dop__slide" data-aos="fade-up" data-aos-delay="800">
                  <div class="dop__pic"><img src="images/services/ (11).PNG" alt="Задники"></div>
                  <div class="dop__desc"><span class="dop__title">Задники</span>
                    <div class="dop__box"><span><strong>От 3,490</strong> ₽</span> / <span>5 дней</span></div><a
                      class="link dop__link " href="https://wa.me/79152527575?text=Узнать%20подробнее:%20Задники">Узнать
                      подробнее</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slids">
                <div class="dop__slide" data-aos="fade-up" data-aos-delay="800">
                  <div class="dop__pic"><img src="images/services/ (6).PNG" alt="Реставрация сумок"></div>
                  <div class="dop__desc"><span class="dop__title">Реставрация сумок</span>
                    <div class="dop__box"><span><strong>От 7,990</strong> ₽</span> / <span>5 дней</span></div><a
                      class="link dop__link "
                      href="https://wa.me/79152527575?text=Узнать%20подробнее:%20Реставрация сумок">Узнать
                      подробнее</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slids">
                <div class="dop__slide" data-aos="fade-up" data-aos-delay="800">
                  <div class="dop__pic"><img src="images/services/ (7).PNG" alt="Ручная роспись сумок"></div>
                  <div class="dop__desc"><span class="dop__title">Ручная роспись сумок</span>
                    <div class="dop__box"><span><strong>От 49,900</strong> ₽</span> / <span>5 дней</span></div><a
                      class="link dop__link "
                      href="https://wa.me/79152527575?text=Узнать%20подробнее:%20Ручная%20роспись%20сумок">Узнать
                      подробнее</a>
                  </div>
                </div>
              </div>
              <!-- end -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  /ADVANTS  -->
    <!--  /QUIZ  -->
    <section class="section section_demo lazy" id="s-demo" data-aos="fade">
      <div class="container">
        <div class="section__head">
          <h2 class="section__title" data-aos="fade-right" data-aos-delay="0">Восстановили более <strong>40000
              изделий</strong> -
            посмотрите, как происходит уход</h2><span class="section__subtitle" data-aos="fade-right"
            data-aos-delay="200">Индивидуальный мастер, инструмент <br class="mobile-hidden">и подход под каждую
            ситуацию</span>
          <div class="box box_big-3" data-aos="fade" data-aos-delay="0">
            <div class="box-wrap" data-aos="fade-right" data-aos-delay="200">
              <p>Менеджер отправит вам <br>фото готовой пары обуви <br>перед отправкой, чтобы вы
                <br><strong>подтвердили
                  результат</strong>
              </p>
            </div><svg xmlns="http://www.w3.org/2000/svg" width="224" height="37" viewBox="0 0 224 37" fill="none">
              <path style="filter: sepia(1)"
                d="M2.25568 29.6158C0.937581 30.0269 0.202296 31.4287 0.613374 32.7468C1.02445 34.0649 2.42622 34.8001 3.74432 34.3891L2.25568 29.6158ZM69.3377 11.3136L70.082 13.7002L69.3377 11.3136ZM182.316 24.9145L181.666 22.5004L182.316 24.9145ZM223.166 15.75C223.855 14.5535 223.444 13.025 222.248 12.336L202.749 1.10792C201.553 0.418912 200.024 0.830321 199.335 2.02683C198.646 3.22334 199.058 4.75185 200.254 5.44086L217.586 15.4213L207.605 32.7531C206.916 33.9496 207.328 35.4781 208.524 36.1671C209.721 36.8561 211.249 36.4447 211.938 35.2482L223.166 15.75ZM132.377 18.3457L131.125 20.5096L132.377 18.3457ZM3.74432 34.3891L70.082 13.7002L68.5934 8.92694L2.25568 29.6158L3.74432 34.3891ZM182.966 27.3286L221.65 16.9165L220.35 12.0884L181.666 22.5004L182.966 27.3286ZM131.125 20.5096C146.811 29.5849 165.466 32.0387 182.966 27.3286L181.666 22.5004C165.451 26.865 148.164 24.5912 133.629 16.1818L131.125 20.5096ZM70.082 13.7002C90.4869 7.3365 112.624 9.80593 131.125 20.5096L133.629 16.1818C113.918 4.77797 90.3328 2.14702 68.5934 8.92694L70.082 13.7002Z"
                fill="url(#paint0_linear_405_719)" />
            </svg></svg>
          </div>
        </div>
        <div class="demo" id="demo">
          <div class="demo__pics" data-aos="fade-up" data-aos-delay="0">
            <div class="demo__before-after js-demo-before-after">
              <picture>
                <source srcset="/img/before-after/10-5.png" type="image/webp">
                <img src="/img/before-after/10-5.png" alt="ремонт обуви" width="844" height="634">
              </picture>
            </div>
          </div>
          <div class="demo__desc">
            <div class="demo__faq js-demo-faq">
              <div class="demo__item" data-aos="fade-up" data-aos-delay="200">
                <div class="demo__head" role="button" tabindex="0">
                  <div class="demo__title">Предварительная подготовка</div><svg width="672" height="90"
                    viewBox="0 0 672 90" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M0 22C0 9.84974 9.84974 0 22 0H333.705H500.557H583.983H618.542C623.192 0 627.722 1.47301 631.482 4.20761L662.151 26.5119C674.05 35.1656 674.266 52.8349 662.581 61.776L631.614 85.4718C627.776 88.4086 623.077 90 618.245 90H583.983H500.557H333.705H22C9.84971 90 0 80.1503 0 68V22Z" />
                  </svg>
                </div>
                <div class="demo__txt">Производится с использованием специализированного оборудования и профессиональных
                  импортных средств.</div>
              </div>
              <div class="demo__item" data-aos="fade-up" data-aos-delay="200">
                <div class="demo__head" role="button" tabindex="0">
                  <div class="demo__title">Зона ремонта</div><svg width="672" height="90" viewBox="0 0 672 90"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M0 22C0 9.84974 9.84974 0 22 0H333.705H500.557H583.983H618.542C623.192 0 627.722 1.47301 631.482 4.20761L662.151 26.5119C674.05 35.1656 674.266 52.8349 662.581 61.776L631.614 85.4718C627.776 88.4086 623.077 90 618.245 90H583.983H500.557H333.705H22C9.84971 90 0 80.1503 0 68V22Z" />
                  </svg>
                </div>
                <div class="demo__txt">Мы предлагаем услуги по ремонту набойок, профилактике для защиты обуви,
                  укорочению и перетяжке каблуков, а также установке фликов. <a class=""
                    href="https://wa.me/79152527575">Сколько
                    стоит ремонт?</a></div>
              </div>
              <div class="demo__item" data-aos="fade-up" data-aos-delay="200">
                <div class="demo__head" role="button" tabindex="0">
                  <div class="demo__title">Мастерская реставрации</div><svg width="672" height="90" viewBox="0 0 672 90"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M0 22C0 9.84974 9.84974 0 22 0H333.705H500.557H583.983H618.542C623.192 0 627.722 1.47301 631.482 4.20761L662.151 26.5119C674.05 35.1656 674.266 52.8349 662.581 61.776L631.614 85.4718C627.776 88.4086 623.077 90 618.245 90H583.983H500.557H333.705H22C9.84971 90 0 80.1503 0 68V22Z" />
                  </svg>
                </div>
                <div class="demo__txt">Мы предлагаем услуги по полной перекраске изделий, устранению царапин, перекраске
                  замши и подошвы, а также подклейке подошвы. <a class="" href="https://wa.me/79152527575">Сколько стоит
                    реставрация?</a></div>
              </div>
              <div class="demo__item" data-aos="fade-up" data-aos-delay="200">
                <div class="demo__head" role="button" tabindex="0">
                  <div class="demo__title">Финишная зона отделки</div><svg width="672" height="90" viewBox="0 0 672 90"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M0 22C0 9.84974 9.84974 0 22 0H333.705H500.557H583.983H618.542C623.192 0 627.722 1.47301 631.482 4.20761L662.151 26.5119C674.05 35.1656 674.266 52.8349 662.581 61.776L631.614 85.4718C627.776 88.4086 623.077 90 618.245 90H583.983H500.557H333.705H22C9.84971 90 0 80.1503 0 68V22Z" />
                  </svg>
                </div>
                <div class="demo__txt">После чистки изделия подвергаются тепловой обработке на гладильных столах и в
                  сушильном шкафу, что помогает вернуть им первоначальную форму и безупречный внешний вид. Мы используем
                  профессиональное оборудование, которое обеспечивает результаты, недоступные в домашних условиях.</div>
              </div>
            </div>
            <div class="demo__btns btns-box" data-aos="fade-up" data-aos-delay="200">
              <div class="btns-box-1"><a class="btn1 btn1_icon-1 demo__btn " href="https://wa.me/791525257575"><span
                    class="btn1__txt">Получить консультацию</span><span class="btn1__icon btn1__icon-4"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="demo__bg-1"></div>
    </section>
    <!--  QUIZ  -->
    <section class="section section_quiz lazy" id="s-quiz" data-aos="fade">
      <div class="container">
        <div class="quiz" id="quiz">
          <div class="section__head">
            <h2 class="section__title" data-aos="fade-right" data-aos-delay="0">Узнайте <strong>точную
                стоимость</strong> химчистки, ремонта или реставрации</h2>
            <div class="box box_quiz" data-aos="fade" data-aos-delay="0">
              <div class="box-wrap" data-aos="fade-right" data-aos-delay="200">
                <p>Ответьте на 3 вопроса: <br>персональный менеджер <br>вышлет расчет и гайд по <br>уходу за <strong
                    style="display:inline-block">3 минуты</strong></p>
              </div><svg xmlns="http://www.w3.org/2000/svg" width="224" height="37" viewBox="0 0 224 37" fill="none">
                <path style="filter: sepia(1)"
                  d="M2.25568 29.6158C0.937581 30.0269 0.202296 31.4287 0.613374 32.7468C1.02445 34.0649 2.42622 34.8001 3.74432 34.3891L2.25568 29.6158ZM69.3377 11.3136L70.082 13.7002L69.3377 11.3136ZM182.316 24.9145L181.666 22.5004L182.316 24.9145ZM223.166 15.75C223.855 14.5535 223.444 13.025 222.248 12.336L202.749 1.10792C201.553 0.418912 200.024 0.830321 199.335 2.02683C198.646 3.22334 199.058 4.75185 200.254 5.44086L217.586 15.4213L207.605 32.7531C206.916 33.9496 207.328 35.4781 208.524 36.1671C209.721 36.8561 211.249 36.4447 211.938 35.2482L223.166 15.75ZM132.377 18.3457L131.125 20.5096L132.377 18.3457ZM3.74432 34.3891L70.082 13.7002L68.5934 8.92694L2.25568 29.6158L3.74432 34.3891ZM182.966 27.3286L221.65 16.9165L220.35 12.0884L181.666 22.5004L182.966 27.3286ZM131.125 20.5096C146.811 29.5849 165.466 32.0387 182.966 27.3286L181.666 22.5004C165.451 26.865 148.164 24.5912 133.629 16.1818L131.125 20.5096ZM70.082 13.7002C90.4869 7.3365 112.624 9.80593 131.125 20.5096L133.629 16.1818C113.918 4.77797 90.3328 2.14702 68.5934 8.92694L70.082 13.7002Z"
                  fill="url(#paint0_linear_405_719)" />
              </svg></svg>
            </div>
          </div>
          <div class="quiz__scale" data-aos="fade" data-aos-delay="200">
            <div class="quiz__scale-wrap"><i class="js-quiz-scale"></i></div><span
              class="quiz__scale-steps js-steps"><strong>Шаг 1</strong> из 3</span>
            <div class="quiz__scale-progress js-progress">0%</div>
          </div>
          <div class="quiz__slider">
            <form class="form quiz__form" action="/_nuxt/php/items.php" method="post" enctype="multipart/form-data">
              <div class="swiper js-slider">
                <div class="swiper-wrapper">
                  <!--  STEP 1  -->
                  <div class="swiper-slide quiz__step-1">
                    <div class="quiz__row">
                      <figure class="quiz__pic">
                        <div class="quiz__img quiz__img-1">
                          <picture>
                            <!-- <source srcset="img/quiz/pic-1.webp" type="image/webp"> -->
                            <img style="mix-blend-mode: darken;width: 100%" data-src="img/complex/1-2.png"
                              alt="чистка обуви" data-aos="fade-left" data-aos-delay="400" data-aos-offset="200"
                              width="674" height="345" class="lazy">
                          </picture>
                        </div>
                      </figure>
                      <fieldset class="quiz__desc quiz__desc-1" data-aos="fade-right" data-aos-delay="200"><span
                          class="quiz__header">Какую вещь нужно восстановить?</span>
                        <input type="hidden" name="quiz[1][quest]" value="Какую вещь нужно восстановить?">
                        <div class="quiz__vvv">
                          <div class="row quiz__row-1">
                            <div class="col quiz__col-1">
                              <label class="quiz__item">
                                <input class="quiz__radio" type="checkbox" name="checkbox_one_1" value="Обувь"><span
                                  class="quiz__radio-wrap"><svg class="checker" xmlns="http://www.w3.org/2000/svg"
                                    width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <rect x="0.5" y="0.5" width="31" height="31" rx="7.5" stroke="#53A2FF" />
                                    <g class="ok">
                                      <rect x="4" y="4" width="24" height="24" rx="5" fill="#53A2FF" fill='rgb(255, 183,
                                        83)' />
                                      <path
                                        d="M14.4545 18.7019L11.688 15.8469C11.3737 15.5226 10.8535 15.5226 10.5393 15.8469C10.2387 16.157 10.2387 16.6498 10.5393 16.9599L13.6712 20.192C14.0995 20.634 14.8089 20.6334 15.2364 20.1905L22.4628 12.7057C22.7623 12.3954 22.7619 11.9035 22.4618 11.5938C22.1472 11.2691 21.6261 11.2697 21.3122 11.5951L14.4545 18.7019Z"
                                        fill="white" />
                                    </g>
                                  </svg><span class="quiz__radio-txt">Обувь</span>
                              </label>
                            </div>
                            <div class="col quiz__col-1">
                              <label class="quiz__item">
                                <input class="quiz__radio" type="checkbox" name="checkbox_one_2" value="Сумки"><span
                                  class="quiz__radio-wrap"><svg class="checker" xmlns="http://www.w3.org/2000/svg"
                                    width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <rect x="0.5" y="0.5" width="31" height="31" rx="7.5" stroke="#53A2FF" />
                                    <g class="ok">
                                      <rect x="4" y="4" width="24" height="24" rx="5" fill="#53A2FF" />
                                      <path
                                        d="M14.4545 18.7019L11.688 15.8469C11.3737 15.5226 10.8535 15.5226 10.5393 15.8469C10.2387 16.157 10.2387 16.6498 10.5393 16.9599L13.6712 20.192C14.0995 20.634 14.8089 20.6334 15.2364 20.1905L22.4628 12.7057C22.7623 12.3954 22.7619 11.9035 22.4618 11.5938C22.1472 11.2691 21.6261 11.2697 21.3122 11.5951L14.4545 18.7019Z"
                                        fill="white" />
                                    </g>
                                  </svg><span class="quiz__radio-txt">Сумки</span></span>
                              </label>
                            </div>
                            <div class="col quiz__col-1">
                              <label class="quiz__item">
                                <input class="quiz__radio" type="checkbox" name="checkbox_one_3" value="Одежда"><span
                                  class="quiz__radio-wrap"><svg class="checker" xmlns="http://www.w3.org/2000/svg"
                                    width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <rect x="0.5" y="0.5" width="31" height="31" rx="7.5" stroke="#53A2FF" />
                                    <g class="ok">
                                      <rect x="4" y="4" width="24" height="24" rx="5" fill="#53A2FF" />
                                      <path
                                        d="M14.4545 18.7019L11.688 15.8469C11.3737 15.5226 10.8535 15.5226 10.5393 15.8469C10.2387 16.157 10.2387 16.6498 10.5393 16.9599L13.6712 20.192C14.0995 20.634 14.8089 20.6334 15.2364 20.1905L22.4628 12.7057C22.7623 12.3954 22.7619 11.9035 22.4618 11.5938C22.1472 11.2691 21.6261 11.2697 21.3122 11.5951L14.4545 18.7019Z"
                                        fill="white" />
                                    </g>
                                  </svg><span class="quiz__radio-txt">Одежда</span></span>
                              </label>
                            </div>
                            <div class="col quiz__col-1">
                              <label class="quiz__item">
                                <input class="quiz__radio" type="checkbox" name="checkbox_one_4"
                                  value="Рюкзаки, клатчи, портмоне и другое"><span class="quiz__radio-wrap"><svg
                                    class="checker" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 32 32" fill="none">
                                    <rect x="0.5" y="0.5" width="31" height="31" rx="7.5" stroke="#53A2FF" />
                                    <g class="ok">
                                      <rect x="4" y="4" width="24" height="24" rx="5" fill="#53A2FF" />
                                      <path
                                        d="M14.4545 18.7019L11.688 15.8469C11.3737 15.5226 10.8535 15.5226 10.5393 15.8469C10.2387 16.157 10.2387 16.6498 10.5393 16.9599L13.6712 20.192C14.0995 20.634 14.8089 20.6334 15.2364 20.1905L22.4628 12.7057C22.7623 12.3954 22.7619 11.9035 22.4618 11.5938C22.1472 11.2691 21.6261 11.2697 21.3122 11.5951L14.4545 18.7019Z"
                                        fill="white" />
                                    </g>
                                  </svg><span class="quiz__radio-txt">Рюкзаки, клатчи, портмоне и другое</span></span>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="quiz__footer">
                          <div class="quiz__footer-1">
                            <button class="btn1 btn1_icon-1 quiz__next js-next" type="button" disabled onclick=' var _tmr=window._tmr || (window._tmr=[]); _tmr.push({id: "3386414" ,
                                        type: "addToCart" , start: (new Date()).getTime()});return true;'><span
                                class="btn1__txt">Выбрать услуги</span><span
                                class="btn1__icon btn1__icon-1"></span><span
                                class="btn1__icon btn1__icon-4"></span></button>
                          </div>
                          <div class="quiz__footer-3">
                            <div class="quiz__box"><i><img src="img/quiz/icon-0.svg" alt=""></i>
                              <div>При оформлении заказа <strong>водоотталкивающая пропитка в подарок</strong></div>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                  <!--  /STEP 1  -->
                  <!--  STEP 2  -->
                  <div class="swiper-slide">
                    <div class="quiz__row">
                      <figure class="quiz__pic">
                        <div class="quiz__img quiz__img-2">
                          <picture>
                            <!-- <source srcset="img/quiz/pic-2.webp" type="image/webp"> -->
                            <img data-src="/img/icons/btn-1-3.png" alt="покраска обуви" width="629" height="404"
                              class="lazy">
                          </picture>
                        </div>
                      </figure>
                      <fieldset class="quiz__desc quiz__desc-2"><span class="quiz__header">Выбрать услуги</span>
                        <input type="hidden" name="quiz[2][quest]" value="Выбрать услуги">
                        <div class="quiz__vvv">
                          <div class="row quiz__row-1">
                            <div class="col quiz__col-1">
                              <label class="quiz__item">
                                <input class="quiz__radio" type="checkbox" name="checkbox_two_1" value="Чистка"><span
                                  class="quiz__radio-wrap">
                                  <svg class="checker" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 32 32" fill="none">
                                    <rect x="0.5" y="0.5" width="31" height="31" rx="7.5" stroke="#53A2FF" />
                                    <g class="ok">
                                      <rect x="4" y="4" width="24" height="24" rx="5" fill="#53A2FF" />
                                      <path
                                        d="M14.4545 18.7019L11.688 15.8469C11.3737 15.5226 10.8535 15.5226 10.5393 15.8469C10.2387 16.157 10.2387 16.6498 10.5393 16.9599L13.6712 20.192C14.0995 20.634 14.8089 20.6334 15.2364 20.1905L22.4628 12.7057C22.7623 12.3954 22.7619 11.9035 22.4618 11.5938C22.1472 11.2691 21.6261 11.2697 21.3122 11.5951L14.4545 18.7019Z"
                                        fill="white" />
                                    </g>
                                  </svg>
                                  <span class="quiz__radio-txt">Чистка</span></span>
                              </label>
                            </div>
                            <div class="col quiz__col-1">
                              <label class="quiz__item">
                                <input class="quiz__radio" type="checkbox" name="checkbox_two_2"
                                  value="Реставрация"><span class="quiz__radio-wrap">
                                  <svg class="checker" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 32 32" fill="none">
                                    <rect x="0.5" y="0.5" width="31" height="31" rx="7.5" stroke="#53A2FF" />
                                    <g class="ok">
                                      <rect x="4" y="4" width="24" height="24" rx="5" fill="#53A2FF" />
                                      <path
                                        d="M14.4545 18.7019L11.688 15.8469C11.3737 15.5226 10.8535 15.5226 10.5393 15.8469C10.2387 16.157 10.2387 16.6498 10.5393 16.9599L13.6712 20.192C14.0995 20.634 14.8089 20.6334 15.2364 20.1905L22.4628 12.7057C22.7623 12.3954 22.7619 11.9035 22.4618 11.5938C22.1472 11.2691 21.6261 11.2697 21.3122 11.5951L14.4545 18.7019Z"
                                        fill="white" />
                                    </g>
                                  </svg>
                                  <span class="quiz__radio-txt">Реставрация</span></span>
                              </label>
                            </div>
                            <div class="col quiz__col-1">
                              <label class="quiz__item">
                                <input class="quiz__radio" type="checkbox" name="checkbox_two_3" value="Ремонт"><span
                                  class="quiz__radio-wrap">
                                  <svg class="checker" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 32 32" fill="none">
                                    <rect x="0.5" y="0.5" width="31" height="31" rx="7.5" stroke="#53A2FF" />
                                    <g class="ok">
                                      <rect x="4" y="4" width="24" height="24" rx="5" fill="#53A2FF" />
                                      <path
                                        d="M14.4545 18.7019L11.688 15.8469C11.3737 15.5226 10.8535 15.5226 10.5393 15.8469C10.2387 16.157 10.2387 16.6498 10.5393 16.9599L13.6712 20.192C14.0995 20.634 14.8089 20.6334 15.2364 20.1905L22.4628 12.7057C22.7623 12.3954 22.7619 11.9035 22.4618 11.5938C22.1472 11.2691 21.6261 11.2697 21.3122 11.5951L14.4545 18.7019Z"
                                        fill="white" />
                                    </g>
                                  </svg>
                                  <span class="quiz__radio-txt">Ремонт</span></span>
                              </label>
                            </div>
                            <div class="col quiz__col-1">
                              <label class="quiz__item">
                                <input class="quiz__radio" type="checkbox" name="checkbox_two_4" value="Другое"><span
                                  class="quiz__radio-wrap">
                                  <svg class="checker" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 32 32" fill="none">
                                    <rect x="0.5" y="0.5" width="31" height="31" rx="7.5" stroke="#53A2FF" />
                                    <g class="ok">
                                      <rect x="4" y="4" width="24" height="24" rx="5" fill="#53A2FF" />
                                      <path
                                        d="M14.4545 18.7019L11.688 15.8469C11.3737 15.5226 10.8535 15.5226 10.5393 15.8469C10.2387 16.157 10.2387 16.6498 10.5393 16.9599L13.6712 20.192C14.0995 20.634 14.8089 20.6334 15.2364 20.1905L22.4628 12.7057C22.7623 12.3954 22.7619 11.9035 22.4618 11.5938C22.1472 11.2691 21.6261 11.2697 21.3122 11.5951L14.4545 18.7019Z"
                                        fill="white" />
                                    </g>
                                  </svg>
                                  <span class="quiz__radio-txt">Другое</span></span>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="quiz__footer">
                          <div class="quiz__footer-1">
                            <button class="btn1 btn1_icon-1 _fff quiz__next js-next" type="button" disabled
                              onclick='var _tmr = window._tmr || (window._tmr = []); _tmr.push({id: "3386414", type: "addToCart", start: (new Date()).getTime()});return true;'><span
                                class="btn1__txt">Получить расчет стоимости и гайд</span><span
                                class="btn1__icon btn1__icon-1"></span><span
                                class="btn1__icon btn1__icon-4"></span></button>
                          </div>
                          <div class="quiz__footer-2"><span class="quiz__back js-back" role="button" tabindex="0">
                              <svg width="23" height="19" role="img">
                                <use xlink:href="img/svg/back.svg#q"></use>
                              </svg><span>Назад</span></span></div>
                          <div class="quiz__footer-3">
                            <div class="quiz__box"><i><img src="img/quiz/icon-0.svg" alt=""></i>
                              <div>При оформлении заказа <strong>водоотталкивающая пропитка в подарок</strong></div>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                  <!--  /STEP 2  -->
                  <!--  STEP 5  -->
                  <div class="swiper-slide">
                    <div class="quiz__row">
                      <figure class="quiz__pic">
                        <div class="quiz__img quiz__img-5">
                          <picture>
                            <!-- <source srcset="img/quiz/pic-4.webp" type="image/webp"> -->
                            <img data-src="/img/block-1/pic-1.png" alt="ремонт обуви" width="725" height="383"
                              class="lazy">
                          </picture>
                        </div>
                      </figure>
                      <fieldset class="quiz__desc quiz__desc-1">
                        <div class="row quiz__row-5">
                          <div class="col quiz__col-5-1">
                            <div class="quiz__block quiz__block-1">
                              <span class="quiz__header quiz__header-2">Оставьте контакты и прикрепите фото вещи —
                                персональный менеджер свяжется с вами в течение 3 минут и даст рекомендации по
                                восстановлению вашего изделия</span>
                              <div class="row quiz__row-3">
                                <div class="col quiz__col-5-3">
                                  <div class="quiz__item">
                                    <label class="form__label">Введите имя</label>
                                    <div class="form__box-input">
                                      <input class="form__input-2" type="text" name="username" required>
                                    </div>
                                  </div>
                                </div>
                                <div class="col quiz__col-5-3">
                                  <div class="quiz__item">
                                    <label class="form__label form__label_req">Введите номер телефона</label>
                                    <div class="form__box-input">
                                      <input class="form__input-2" type="tel" name="userphone"
                                        placeholder="+ 7 (____) ___-__-__*" title="89012345678"
                                        pattern="^[0-9\s\(\)\+\-]{1,22}$" required>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="quiz__block">
                              <div class="form__box-mess">
                                <label class="form__label">Где с вами связаться?</label>
                                <div class="messengers js-messengers">
                                  <input class="js-messengers-input" type="hidden" name="messengers" value="Телефон">
                                  <input type="hidden" name="type-form" value="two">
                                  <div class="messengers__item"><span class="messengers__btn js-messengers-btn active"
                                      role="button" tabindex="0" title="Телефон">
                                      <span>Телефон</span></span></div>
                                  <div class="messengers__item"><span class="messengers__btn js-messengers-btn"
                                      role="button" tabindex="0" title="Whatsapp">
                                      <span>Whatsapp</span></span></div>
                                  <div class="messengers__item"><span class="messengers__btn js-messengers-btn"
                                      role="button" tabindex="0" title="Telegram">
                                      <span>Telegram</span></span></div>
                                </div>
                              </div>
                              <div class="form__upload">
                                <div class="upload js-upload">
                                  <label class="upload__label">
                                    <input type="file" name="uploadfiles" accept="image/png,image/jpeg,image/jpg">
                                    <span class="upload__wrap">
                                      <i><img src="img/svg/clip.svg" alt="clip" width="33" height="33"></i>
                                      <span class="js-upload-txt">Прикрепите фото вещи</span>
                                    </span>
                                  </label>
                                  <span class="upload__atten js-upload-atten"></span>
                                  <span class="upload__sub">Можете отправить заявку и <strong class="d-ib">без
                                      фото</strong></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="quiz__footer quiz__footer_5">
                            <div class="quiz__footer-1">
                              <input type="hidden" name="page" value="Общая">
                              <button class="btn1 btn1_icon-1 quiz__next form__submit" type="submit"><span><span
                                    class="btn1__txt">Получить рекомендации </span><span
                                    class="btn1__txt">по&nbsp;восстановлению</span></span><span
                                  class="btn1__icon btn1__icon-1"></span><span
                                  class="btn1__icon btn1__icon-4"></span></button>
                            </div>
                            <div class="quiz__footer-4">
                              <div class="form__box-agree">
                                <label class="form__agree">
                                  <input type="checkbox" name="agree" value="Согласен с Политикой конфиденциальности"
                                    checked><span class="form__agree-check"><svg width="16" height="16"
                                      viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path class="check"
                                        d="M6.81818 10.1194L3.95455 7.29851L3 8.23881L6.81818 12L15 3.9403L14.0455 3L6.81818 10.1194Z"
                                        fill="#94BEFD" />
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 0H1.5H0V1.5V14.5V16H1.5H14.5H16V14.5V7H14.5V14.5H1.5V1.5H12V0Z"
                                        fill="#94BEFD" />
                                    </svg></span><span class="form__agree-txt">Согласен с Политикой
                                    конфиденциальности</span>
                                </label>
                              </div>
                            </div>
                            <div class="quiz__footer-2"><span class="quiz__back js-back" role="button" tabindex="0">
                                <svg width="23" height="19" role="img">
                                  <use xlink:href="img/svg/back.svg#q"></use>
                                </svg><span>Назад</span></span></div>
                            <div class="quiz__footer-3">
                              <div class="quiz__box"><i><img src="img/quiz/icon-0.svg" alt=""></i>
                                <div>При оформлении заказа <strong>водоотталкивающая пропитка в подарок</strong></div>
                              </div>
                            </div>
                          </div>
                      </fieldset>
                    </div>
                  </div>
                  <!--  /STEP 5  -->
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="quiz__bg-1"></div>
    </section>
    <!-- КОМПЛЕКСЫ -->
    <section class="section section_complex lazy" id="s-complex">
      <div class="container">
        <div class="section__head">
          <h2 class="section__title" data-aos="fade-right" data-aos-delay="0">Благодаря нам, ваши любимые вещи будут
            радовать <strong>вас ещё долгие годы</strong></h2><span class="section__subtitle" data-aos="fade-right"
            data-aos-delay="200">Выберите подходящий <strong>комплекс химчистки</strong>:
            мастера
            знают, как сохранить <br class="mobile-hidden">качество тканей, и подбирают в каждом комплексе
            индивидуальные решения</span>
          <div class="box" data-aos="fade" data-aos-delay="0">
            <div class="box-wrap" data-aos="fade-right" data-aos-delay="200">
              <p>После химчистки <br>вы получаете <br><strong>подробную <br>инструкцию <br>по уходу</strong></p>
            </div><svg xmlns="http://www.w3.org/2000/svg" width="224" height="37" viewBox="0 0 224 37" fill="none">
              <path style="filter: sepia(1)"
                d="M2.25568 29.6158C0.937581 30.0269 0.202296 31.4287 0.613374 32.7468C1.02445 34.0649 2.42622 34.8001 3.74432 34.3891L2.25568 29.6158ZM69.3377 11.3136L70.082 13.7002L69.3377 11.3136ZM182.316 24.9145L181.666 22.5004L182.316 24.9145ZM223.166 15.75C223.855 14.5535 223.444 13.025 222.248 12.336L202.749 1.10792C201.553 0.418912 200.024 0.830321 199.335 2.02683C198.646 3.22334 199.058 4.75185 200.254 5.44086L217.586 15.4213L207.605 32.7531C206.916 33.9496 207.328 35.4781 208.524 36.1671C209.721 36.8561 211.249 36.4447 211.938 35.2482L223.166 15.75ZM132.377 18.3457L131.125 20.5096L132.377 18.3457ZM3.74432 34.3891L70.082 13.7002L68.5934 8.92694L2.25568 29.6158L3.74432 34.3891ZM182.966 27.3286L221.65 16.9165L220.35 12.0884L181.666 22.5004L182.966 27.3286ZM131.125 20.5096C146.811 29.5849 165.466 32.0387 182.966 27.3286L181.666 22.5004C165.451 26.865 148.164 24.5912 133.629 16.1818L131.125 20.5096ZM70.082 13.7002C90.4869 7.3365 112.624 9.80593 131.125 20.5096L133.629 16.1818C113.918 4.77797 90.3328 2.14702 68.5934 8.92694L70.082 13.7002Z"
                fill="url(#paint0_linear_405_719)" />
            </svg></svg>
          </div>
        </div>

        <div class="complex swiper" id="complex">
          <div class="swiper-wrapper" style="flex-wrap: nowrap;">
            <div class="swiper-slide">
              <div class="complex__slide">
                <div class="complex__head">
                  <span class="complex__title">обувь из</span>
                  <span class="complex__sub">кожи/замши/нубука</span>
                  <span class="complex__label">ПОПУЛЯРНО</span>
                </div>
                <div class="complex__pic">
                  <img src="img/demo/1.jpg" alt="" width="304" height="248">
                </div>
                <div class="complex__body">
                  <span class="complex__header">5 500 <mark>₽</mark> <br>Комплекс №2 <small>+ легкая
                      реставрация</small></span>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="complex__slide">
                <div class="complex__head">
                  <span class="complex__title">Сумки</span>
                  <span class="complex__sub">чистка, ремонт и <br>реставрация сумок</span>
                </div>
                <div class="complex__pic">
                  <img src="img/demo/5.PNG" alt="" width="304" height="248">
                </div>
                <div class="complex__body">
                  <span class="complex__header">от 5 000 <mark>₽</mark> <br>Сумки</span>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="complex__slide">
                <div class="complex__head">
                  <span class="complex__title">Шубы</span>
                  <span class="complex__sub">за 1-3 дня</span>
                </div>
                <div class="complex__pic">
                  <img src="images/services/1.png" alt="" width="304" height="248">
                </div>
                <div class="complex__body">
                  <span class="complex__header">Чистка от загрязнений</span>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="complex__slide">
                <div class="complex__head">
                  <span class="complex__title">обувь из</span>
                  <span class="complex__sub">синтетики/текстиля/сетки </span>
                </div>
                <div class="complex__pic">
                  <img src="img/complex/1-1.png" alt="" width="304" height="248">
                </div>
                <div class="complex__body">
                  <span class="complex__header">4 490 <mark>₽</mark> <br>Комплекс №1 <small>+ легкая
                      реставрация</small></span>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="complex__slide">
                <div class="complex__head">
                  <span class="complex__title">обувь</span>
                  <span class="complex__sub">UGG, сезонной обуви, высоких сапог, ботинок и т.д.</span>
                </div>
                <div class="complex__pic">
                  <img src="img/complex/1-3.png" alt="" width="304" height="248">
                </div>
                <div class="complex__body">
                  <span class="complex__header">6 990 <mark>₽</mark> <br>Комплекс №3 <small>+ легкая
                      реставрация</small></span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-scrollbar"></div>
        </div>
      </div>
    </section>
    <!-- /КОМПЛЕКСЫ -->
    <!--  /FAQ  -->
  </div>
  <!--  Подвал  -->
  <footer class="footer lazy" id="footer" data-aos="fade">
    <div class="container">
      <div class="row footer__row">
        <div class="col footer__col-1" data-aos="fade-up" data-aos-delay="0"><span class="footer__header">Контакты
            MMCLEAN
          </span>
          <div class="footer__txt footer__txt-1"><strong>Телефон: </strong>+ 7 (915) 252-75-75</div>
          <div class="footer__address"><i><img src="img/svg/pin.svg" alt="adress" width="32" height="44"></i>
            <div><span>Адреса в Москве:</span></div>
          </div>
          <div class="footer__address-link">
            <a href="https://yandex.by/maps/213/moscow/?from=tabbar&ll=37.589789%2C55.805274&mode=poi&poi%5Bpoint%5D=37.589805%2C55.805422&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D205392192890&source=serp_navig&utm_source=share&z=20"
              target="_blank" rel="noopener noreferrer">улица Петровка, 15/13 с5, Москва, Москва, Россия,
              107031</a><br>
          </div>
        </div>
        <div class="col footer__col-2" data-aos="fade-up" data-aos-delay="200"><span class="footer__header">Напишите
            нам</span>
          <ul class="socials footer__socials">
            <li><a class="_wh"
                href="https://wa.clck.bar/79152527575?text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%D0%A5%D0%BE%D1%82%D0%B5%D0%BB(%D0%B0)%20%D0%B1%D1%8B%20%D0%BF%D0%BE%D1%87%D0%B8%D1%81%D1%82%D0%B8%D1%82%D1%8C%20%D1%81%D0%B2%D0%BE%D1%8E%20%D0%BE%D0%B1%D1%83%D0%B2%D1%8C"
                target="_blank" rel="noopener noreferrer"
                onclick='var _tmr = window._tmr || (window._tmr = []); _tmr.push({id: "3386414", type: "Whatsapp", start: (new Date()).getTime()});return true;'>
                <span>Whatsapp</span></a>
            </li>
            <li><a class="_email" href="mailto:mandomemori@list.ru" target="_blank" rel="noopener noreferrer">
                <span>Email</span></a></li>
          </ul>
        </div>
        <div class="col footer__col-3" data-aos="fade-up" data-aos-delay="400"><span class="footer__header">Оформить
            заказ</span>
          <ul class="socials footer__socials">
            <li>
              <div class="footer__call"><a class="" href="https://wa.me/89152527575" data-title="Вызвать курьера"
                  onclick='var _tmr = window._tmr || (window._tmr = []); _tmr.push({id: "3386414", type: "addToCart", start: (new Date()).getTime()});return true;'>Вызвать
                  курьера</a><small>Выезжаем за вашей обувью <span class="d-ib">в течение 2 часов</span></small></div>
            </li>
          </ul>
        </div>
      </div>
      <div class="row footer__row-1" data-aos="fade" data-aos-delay="200" data-aos-offset="0">
        <div class="footer__col-6 col">
          <div class="footer__txt"><strong>Режим работы:</strong> <br>Пн - Вс <span class="d-ib">с 10.00 до
              20.00</span>
          </div>
        </div>
        <div class="footer__col-5 col"><a class="footer__design" href="http://9n.by" target="_blank"
            rel="noopener noreferrer">Сделано людьми в
            <svg width="19" height="31" role="img">
              <use xlink:href="img/svg/9n.svg#q"></use>
            </svg></a></div>
      </div>
    </div>
    <div class="footer__bg1"></div>
  </footer>
  <!--  /Подвал  -->
  <div class="aside" id="aside">
    <button class="aside__close js-aside-toggle" type="button">
      <svg width="13" height="13" role="img">
        <use xlink:href="img/svg/close.svg#q"></use>
      </svg>
    </button>
    <div class="aside__wrap custom-scrollbar"><span class="aside__title">Меню</span>
      <div class="aside__menu">
        <ul class="aside__nav">
          <li><a class="js-scroll-to" href="/index.php">Главная</a></li>
          <li><a class="js-scroll-to" href="tel:79152527575">Горячяя линия</a></li>
          <?php echo $login; ?>
          <li class=""><a class="" href="/index.php#dop">Услуги</a></li>
          <li><a class="js-scroll-to" href="https://wa.me/79152527575">FAQ</a></li>
        </ul>
      </div>
      <div class="aside__footer">
        <div class="header__btns"><a class="header__whatsapp"
            href="https://wa.clck.bar/79152527575?text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%D0%A5%D0%BE%D1%82%D0%B5%D0%BB(%D0%B0)%20%D0%B1%D1%8B%20%D0%BF%D0%BE%D1%87%D0%B8%D1%81%D1%82%D0%B8%D1%82%D1%8C%20%D1%81%D0%B2%D0%BE%D1%8E%20%D0%BE%D0%B1%D1%83%D0%B2%D1%8C"
            target="_blank" rel="noopener noreferrer"
            onclick='var _tmr = window._tmr || (window._tmr = []); _tmr.push({id: "3386414", type: "Whatsapp", start: (new Date()).getTime()});return true;'><img
              src="img/icons/btn-1-7.png" alt="whatsapp"></a><a class="header__phone" href="tel:+79152527575">+ 7
            (915)
            252-75-75</a></div>
      </div>
    </div>
  </div>
  <div class="aside__overlay js-aside-toggle"></div>
  <div class="widget" id="widget">
    <div class="widget__item">
      <a href="tel:79152527575" class="widget__btn">
        <img style="filter: sepia(1)" src="img/widget-1.svg" alt="call" width="75" height="75">
      </a>
      <span style="filter: invert(1);" class="widget__hover">Попросить совет <span class="text-gradient-h" style="background: linear-gradient(90deg, #248aff 0.90%, rgb(23 66 217) 55.74%, rgb(22 8 255) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;">мастера</span>
        <span class=" widget__close js-widget-close" tabindex="0" role="button"><svg xmlns="http://www.w3.org/2000/svg"
            width="10" height="10" viewBox="0 0 10 10" fill="none">
            <rect width="12.9045" height="1.1061" rx="0.518589"
              transform="matrix(0.700404 -0.713746 0.700404 0.713746 0 9.21051)" fill="#9FC8FF" />
            <rect width="12.8743" height="1.1061" rx="0.518589"
              transform="matrix(0.700404 0.713746 -0.700404 0.713746 0.98291 0.00720215)" fill="#9FC8FF" />
          </svg></span></span>
    </div>
  </div>
  <div class="aside" id="aside">
    <button class="aside__close js-aside-toggle" type="button">
      <svg width="13" height="13" role="img">
        <use xlink:href="img/svg/close.svg#q"></use>
      </svg>
    </button>
    <div class="aside__wrap custom-scrollbar"><span class="aside__title">Меню</span>
      <div class="aside__menu">
        <ul class="aside__nav">
          <li><a class="js-scroll-to" href="index.html#top">Главная</a></li>
          <li><a class="js-scroll-to" href="index.html#s-order-2">Горячяя линия</a></li>
          <li><a class="js-scroll-to" href="index.html#s-quiz">Войти</a></li>
          <li class=""><a class="" href="shoes/index.html">Услуги</a></li>
          <li><a class="js-scroll-to" href="https://wa.me/79152527575">FAQ</a></li>
        </ul>
      </div>
      <div class="aside__footer">
        <div class="header__btns"><a class="header__whatsapp"
            href="https://wa.clck.bar/79152527575?text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%D0%A5%D0%BE%D1%82%D0%B5%D0%BB(%D0%B0)%20%D0%B1%D1%8B%20%D0%BF%D0%BE%D1%87%D0%B8%D1%81%D1%82%D0%B8%D1%82%D1%8C%20%D1%81%D0%B2%D0%BE%D1%8E%20%D0%BE%D0%B1%D1%83%D0%B2%D1%8C"
            target="_blank" rel="noopener noreferrer"
            onclick='var _tmr = window._tmr || (window._tmr = []); _tmr.push({id: "3386414", type: "Whatsapp", start: (new Date()).getTime()});return true;'><img
              src="img/icons/btn-1-7.png" alt="whatsapp"></a><a class="header__phone" href="tel:+79152527575">+ 7
            (915)
            252-75-75</a></div>
      </div>
    </div>
  </div>
  <div class="aside__overlay js-aside-toggle"></div>
  <div class="widget" id="widget">
    <div class="widget__item">
      <a href="index.html#modal-call" class="widget__btn js-modal-open">
        <img src="img/widget-1.svg" alt="call" width="75" height="75">
      </a>
      <span class="widget__hover">Попросить совет <span class="text-gradient-h">технолога</span>
        <span class="widget__close js-widget-close" tabindex="0" role="button"><svg xmlns="http://www.w3.org/2000/svg"
            width="10" height="10" viewBox="0 0 10 10" fill="none">
            <rect width="12.9045" height="1.1061" rx="0.518589"
              transform="matrix(0.700404 -0.713746 0.700404 0.713746 0 9.21051)" fill="#9FC8FF" />
            <rect width="12.8743" height="1.1061" rx="0.518589"
              transform="matrix(0.700404 0.713746 -0.700404 0.713746 0.98291 0.00720215)" fill="#9FC8FF" />
          </svg></span></span>
    </div>
    <div class="widget__item">
      <a href="index.html#s-quiz" class="widget__btn js-scroll-to">
        <img src="img/widget-2.svg" alt="call" width="75" height="75">
      </a>
      <span class="widget__hover">Узнать, сколько <span class="text-gradient-h">стоит</span>
        <span class="widget__close js-widget-close" tabindex="0" role="button"><svg xmlns="http://www.w3.org/2000/svg"
            width="10" height="10" viewBox="0 0 10 10" fill="none">
            <rect width="12.9045" height="1.1061" rx="0.518589"
              transform="matrix(0.700404 -0.713746 0.700404 0.713746 0 9.21051)" fill="#9FC8FF" />
            <rect width="12.8743" height="1.1061" rx="0.518589"
              transform="matrix(0.700404 0.713746 -0.700404 0.713746 0.98291 0.00720215)" fill="#9FC8FF" />
          </svg></span></span>
    </div>
  </div>
  <script src="js/libs.min.js"></script>
  <script src="js/intlTelInput.min.js"></script>
  <script src="js/custom.js@hhh"></script>


  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
      m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
      m[i].l = 1 * new Date();
      for (var j = 0; j < document.scripts.length; j++) { if (document.scripts[j].src === r) { return; } }
      k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(94647039, "init", {
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true,
      webvisor: true
    });
  </script>
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/94647039" style="position:absolute; left:-9999px;" alt="" /></div>
  </noscript>
  <!-- /Yandex.Metrika counter -->
  <script>for (let i = 1; i <= 10000; i++) {
      const element = document.querySelector(`.txtblock-${i}`);
      if (element) {
        element.style.display = 'none !important';
      }
      element.style.display = 'none !important';
    }</script>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-265553794-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-265553794-1');

    const phone_selector = document.querySelector('.phone_selector');
    const whatsapp_selector = document.querySelector('.whatsapp_selector');
    const telegram_selector = document.querySelector('.telegram_selector');
    const type_message = document.querySelector('input[name="type-message"]');
    type_message.value = 'Телефон';
    phone_selector.addEventListener('click', () => {
      type_message.value = 'Телефон';
    });
    whatsapp_selector.addEventListener('click', () => {
      type_message.value = 'Whatsapp';
    });
    telegram_selector.addEventListener('click', () => {
      type_message.value = 'Telegram';
    });
  </script>
</body>

</html>