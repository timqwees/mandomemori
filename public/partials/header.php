<?php
$currentSlug = $currentSlug ?? '';
$canonical = $canonical ?? ($_SERVER['REQUEST_URI'] ?? '/');

$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'mandomemori.ru';
$siteUrl = "$scheme://$host";

?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <?= \App\Services\Seo\SeoMeta::head([
    'title' => $pageTitle ?? null,
    'desc' => $pageDesc ?? null,
    'keywords' => $pageKeywords ?? null,
    'canonical' => $canonical,
    'siteUrl' => $siteUrl,
    'image' => $ogImage ?? null,
    'robots' => $robots ?? null,
  ]) ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
  <link rel="preconnect" href="https://unpkg.com" crossorigin>
  <link rel="preload" href="/public/assets/css/mandomemori.min.css" as="style" fetchpriority="high">
  <link rel="stylesheet" href="/public/assets/css/mandomemori.min.css" media="print" onload="this.media='all'">
  <link rel="icon" href="/public/assets/images/favicon.svg" sizes="48x48" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/public/assets/images/favicon.svg">
  <meta name="csrf-token" content="3bd5a1ea01eec4cc5fac232d54cfe19be1beb147477f69e057180030166a8e04">
  <link rel="manifest" href="/manifest.json">
</head>
<body>

  <header class="header" style="padding-block: 10px">
    <div class="container">
      <a href="/" class="logo">
        <img src="/public/assets/images/favicon_full_black.svg" alt="MANDO MEMORI — химчистка обуви Москва" class="logo-img">
      </a>
      <nav class="nav" id="main-nav">
        <a href="/products" class="nav-link">Услуги</a>
        <a href="/about" class="nav-link">О нас</a>
        <a href="/before-after" class="nav-link">До/После</a>
        <a href="/order" class="nav-link">Передать обувь</a>
        <a href="/contacts" class="nav-link">Контакты</a>
        <div class="city-selector city-selector-mobile">
          <span class="city-selector-btn">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 1C5.24 1 3 3.24 3 6c0 3.75 5 9 5 9s5-5.25 5-9c0-2.76-2.24-5-5-5zm0 6.5a1.5 1.5 0 110-3 1.5 1.5 0 010 3z" fill="currentColor"/></svg>
            Москва
          </span>
        </div>
      </nav>
      <div class="header-right">
          <div class="city-selector city-selector-desktop">
            <span class="city-selector-btn">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 1C5.24 1 3 3.24 3 6c0 3.75 5 9 5 9s5-5.25 5-9c0-2.76-2.24-5-5-5zm0 6.5a1.5 1.5 0 110-3 1.5 1.5 0 010 3z" fill="currentColor"/></svg>
              Москва
            </span>
          </div>
        <a href="/cart" class="cart-icon-btn cart-icon-btn--hidden" aria-label="Корзина" id="cart-icon-btn">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/>
            <line x1="3" y1="6" x2="21" y2="6"/>
            <path d="M16 10a4 4 0 0 1-8 0"/>
          </svg>
          <span class="cart-badge" id="cart-badge-count" style="display:none">0</span>
        </a>
        <script>window.__cartCount = <?= array_sum(array_column((\App\Config\Session::init())['sf_cart'] ?? [], 'qty')) ?>;</script>
        <button class="burger" id="burger-btn" aria-label="Меню">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </header>
