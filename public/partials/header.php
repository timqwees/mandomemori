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
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Unbounded:wght@400;500;600;700&family=Inter:wght@400;500;600&display=optional" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Unbounded:wght@400;500;600;700&family=Inter:wght@400;500;600&display=optional"></noscript>
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
  <link rel="preconnect" href="https://unpkg.com" crossorigin>
  <link rel="preload" href="/public/assets/css/mandomemori.min.css" as="style" fetchpriority="high">
  <link rel="stylesheet" href="/public/assets/css/mandomemori.min.css" media="print" onload="this.media='all'">
  <link rel="icon" href="/public/assets/images/favicon.svg" sizes="48x48" type="image/svg+xml">
  <link rel="icon" href="/public/favicon.ico" sizes="any">
  <link rel="apple-touch-icon" href="/public/assets/images/favicon.svg">
  <meta name="csrf-token" content="3bd5a1ea01eec4cc5fac232d54cfe19be1beb147477f69e057180030166a8e04">
  <meta http-equiv="X-Content-Type-Options" content="nosniff">
  <meta http-equiv="Referrer-Policy" content="strict-origin-when-cross-origin">
  <meta http-equiv="Permissions-Policy" content="geolocation=(), microphone=(), camera=()">
  <link rel="manifest" href="/manifest.json">
  <link rel="alternate" type="application/rss+xml" title="MANDO MEMORI — Блог" href="/rss.xml">
  <link rel="alternate" type="application/atom+xml" title="MANDO MEMORI — Блог (Atom)" href="/atom.xml">

  <?php
  $gscId = $_ENV["GSC_ID"] ?? "";
  $ga4Id = $_ENV["GA4_ID"] ?? "";
  $ymId = $_ENV["YM_ID"] ?? "";
  $ywebId = $_ENV["YWEB_ID"] ?? "";
  ?>
  <meta name="geo.region" content="RU-MOW">
  <meta name="geo.placename" content="Москва">
  <meta name="geo.position" content="55.765833;37.618889">
  <meta name="ICBM" content="55.765833, 37.618889">
    
  <!-- SEO METRIKS -->
  <?php if ($gscId): ?><meta name="google-site-verification" content="<?= htmlspecialchars($gscId) ?>"><?php endif; ?>
  <?php if ($ywebId): ?><meta name="yandex-verification" content="<?= htmlspecialchars($ywebId) ?>" /><?php endif; ?>
  <?php if ($ga4Id): ?><script async src="https://www.googletagmanager.com/gtag/js?id=<?= htmlspecialchars($ga4Id) ?>"></script><script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','<?= htmlspecialchars($ga4Id) ?>');</script><?php endif; ?>
  <?php if ($ymId): ?><script>(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};m[i].l=1*new Date();for(var j=0;j<document.scripts.length;j++){if(document.scripts[j].src===r)return;}k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})(window,document,'script','https://mc.yandex.ru/metrika/tag.js','ym');ym(<?= htmlspecialchars($ymId) ?>,'init',{clickmap:true,trackLinks:true,accurateTrackBounce:true,webvisor:true});</script><noscript><div><img src="https://mc.yandex.ru/watch/<?= htmlspecialchars($ymId) ?>" style="position:absolute;left:-9999px" alt=""></div></noscript><?php endif; ?>
</head>
<body itemscope itemtype="https://schema.org/LocalBusiness">

  <header class="header" style="padding-block: 10px">
    <div class="container">
      <a href="/" class="logo" itemprop="url">
        <img src="/public/assets/images/favicon_full_black.svg" alt="MANDO MEMORI — химчистка обуви Москва" class="logo-img" itemprop="image" width="90" height="52">
      </a>
      <div class="header-right">
        <nav class="nav" id="main-nav" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <a href="/products" class="nav-link" itemprop="url"><span itemprop="name">Услуги</span></a>
          <a href="/about" class="nav-link" itemprop="url"><span itemprop="name">О нас</span></a>
          <a href="/before-after" class="nav-link" itemprop="url"><span itemprop="name">До/После</span></a>
          <a href="/order" class="nav-link" style="align-items: center;" itemprop="url">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/><line x1="8" y1="16" x2="8" y2="3"/></svg>
            <span itemprop="name">Передать обувь</span>
          </a>
          <a href="/blog" class="nav-link" style="align-items:center" itemprop="url">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/><line x1="8" y1="7" x2="16" y2="7"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
            <span itemprop="name">Статьи</span>
          </a>
          <a href="/contacts" class="nav-link" itemprop="url"><span itemprop="name">Контакты</span></a>
          <div class="city-selector city-selector-mobile">
            <span class="city-selector-btn">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 1C5.24 1 3 3.24 3 6c0 3.75 5 9 5 9s5-5.25 5-9c0-2.76-2.24-5-5-5zm0 6.5a1.5 1.5 0 110-3 1.5 1.5 0 010 3z" fill="currentColor"/></svg>
              Москва
            </span>
          </div>
        </nav>
          <!--mobile buttons-->
          <div class="flex items-center gap-3 hide-desktop">
            <a href="tel:+79161829272" class="menu_btn menu_btn--icon" aria-label="Позвонить">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            </a>
            <a href="https://t.me/mandomemori_bot" target="_blank" rel="noopener" class="menu_btn menu_btn--icon" aria-label="Telegram">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            </a>
            <button class="burger" id="burger-btn" aria-label="Меню">
              <svg class="burger-icon burger-icon--open" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
              <svg class="burger-icon burger-icon--close" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            </button>
          </div>
          <!--desktop actions-->
          <div class="header-actions hide-mobile">
            <a href="tel:+79161829272" class="menu_btn" itemprop="telephone">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
              +7 (916) 182-92-72
            </a>
            <a href="https://t.me/mandomemori_bot" target="_blank" rel="noopener" class="menu_btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
              Telegram
            </a>
            <div class="city-selector city-selector-desktop">
              <span class="city-selector-btn">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 1C5.24 1 3 3.24 3 6c0 3.75 5 9 5 9s5-5.25 5-9c0-2.76-2.24-5-5-5zm0 6.5a1.5 1.5 0 110-3 1.5 1.5 0 010 3z" fill="currentColor"/></svg>
                Москва
              </span>
            </div>
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

      </div>
    </div>
  </header>
