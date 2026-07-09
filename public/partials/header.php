<?php
$currentSlug = $currentSlug ?? "";
$canonical = $canonical ?? ($_SERVER["REQUEST_URI"] ?? "/");

$scheme =
  !empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] !== "off" ? "https" : "http";
$host = $_SERVER["HTTP_HOST"] ?? "mandomemori.ru";
$siteUrl = "$scheme://$host";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <?= \App\Services\Seo\SeoMeta::head([
    "title" => $pageTitle ?? null,
    "desc" => $pageDesc ?? null,
    "keywords" => $pageKeywords ?? null,
    "canonical" => $canonical,
    "siteUrl" => $siteUrl,
    "image" => $ogImage ?? null,
    "robots" => $robots ?? null,
  ]) ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
  <link rel="preconnect" href="https://unpkg.com" crossorigin>
  <link rel="preload" href="/public/assets/css/mandomemori.min.css" as="style" fetchpriority="high">
  <link rel="stylesheet" href="/public/assets/css/mandomemori.min.css" media="print" onload="this.media='all'">
  <link rel="icon" href="/public/assets/images/favicon.svg" sizes="48x48" type="image/svg+xml">
  <link rel="icon" href="/favicon.ico" sizes="any">
  <link rel="apple-touch-icon" href="/public/assets/images/favicon.svg">
  <meta name="csrf-token" content="3bd5a1ea01eec4cc5fac232d54cfe19be1beb147477f69e057180030166a8e04">
  <link rel="manifest" href="/manifest.json">

  <?php
  $gscId = $_ENV["GSC_ID"] ?? "";
  $ywId = $_ENV["YW_ID"] ?? "";
  $ga4Id = $_ENV["GA4_ID"] ?? "";
  $ymId = $_ENV["YM_ID"] ?? "";
  ?>
  <?php if (
    $gscId
  ): ?><meta name="google-site-verification" content="<?= $gscId ?>"><?php endif; ?>
  <?php if (
    $ywId
  ): ?><meta name="yandex-verification" content="<?= $ywId ?>"><?php endif; ?>
  <meta name="geo.region" content="RU-MOW">
  <meta name="geo.placename" content="Москва">
  <meta name="geo.position" content="55.765833;37.618889">
  <meta name="ICBM" content="55.765833, 37.618889">

  <?php if ($ga4Id): ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?= $ga4Id ?>"></script>
  <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','<?= $ga4Id ?>');</script>
  <?php endif; ?>

  <?php if ($ymId): ?>
  <script>(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};m[i].l=1*new Date();for(var j=0;j<document.scripts.length;j++){if(document.scripts[j].src===r)return;}k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})(window,document,'script','https://mc.yandex.ru/metrika/tag.js','ym');ym(<?= $ymId ?>,'init',{clickmap:true,trackLinks:true,accurateTrackBounce:true,webvisor:true});</script>
  <noscript><div><img src="https://mc.yandex.ru/watch/<?= $ymId ?>" style="position:absolute;left:-9999px" alt=""></div></noscript>
  <?php endif; ?>
</head>
<body>

  <header class="header" style="padding-block: 10px">
    <div class="container">
      <a href="/" class="logo">
        <img src="/public/assets/images/favicon_full_black.svg" alt="MANDO MEMORI — химчистка обуви Москва" class="logo-img">
      </a>
      <div class="header-right">
        <nav class="nav" id="main-nav">
          <a href="/products" class="nav-link">Услуги</a>
          <a href="/about" class="nav-link">О нас</a>
          <a href="/before-after" class="nav-link">До/После</a>
          <a href="/order" class="nav-link">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/><path d="M9 14l2 2 4-4"/></svg>
            Передать обувь
          </a>
          <a href="/contacts" class="nav-link">Контакты</a>
          <div class="city-selector city-selector-mobile">
            <span class="city-selector-btn">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 1C5.24 1 3 3.24 3 6c0 3.75 5 9 5 9s5-5.25 5-9c0-2.76-2.24-5-5-5zm0 6.5a1.5 1.5 0 110-3 1.5 1.5 0 010 3z" fill="currentColor"/></svg>
              Москва
            </span>
          </div>
        </nav>
          <!--phone-->
          <a href="tel:+79152527575" class="menu_btn">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            +7 (915) 252-75-75
          </a>
          <!--messanger-->
          <a href="https://t.me/mandomemori_bot" target="_blank" rel="noopener" class="menu_btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            Telegram
          </a>
          <!--region-->
          <div class="city-selector city-selector-desktop">
            <span class="city-selector-btn">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 1C5.24 1 3 3.24 3 6c0 3.75 5 9 5 9s5-5.25 5-9c0-2.76-2.24-5-5-5zm0 6.5a1.5 1.5 0 110-3 1.5 1.5 0 010 3z" fill="currentColor"/></svg>
              Москва
            </span>
          </div>
          <!--card-->
          <a href="/cart" class="cart-icon-btn cart-icon-btn--hidden" aria-label="Корзина" id="cart-icon-btn">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/>
              <line x1="3" y1="6" x2="21" y2="6"/>
              <path d="M16 10a4 4 0 0 1-8 0"/>
            </svg>
            <span class="cart-badge" id="cart-badge-count" style="display:none">0</span>
          </a>
        <script>window.__cartCount = <?= array_sum(
          array_column(\App\Config\Session::init()["sf_cart"] ?? [], "qty"),
        ) ?>;</script>
        <button class="burger" id="burger-btn" aria-label="Меню">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </header>
