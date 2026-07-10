<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/products', 'priority' => '0.9', 'changefreq' => 'weekly', 'index' => 'main'];

$pageTitle = 'Услуги — MANDO MEMORI, химчистка обуви в Москве, чистка кроссовок и отбеливание подошвы';
$pageDesc = 'Полный каталог услуг MANDO MEMORI: химчистка обуви, чистка кроссовок, отбеливание подошвы, премиум-уход за брендовой обувью, покраска и реставрация.';
$pageKeywords = 'услуги MANDO MEMORI, химчистка обуви Москва, чистка кроссовок, отбеливание подошвы, реставрация обуви';
$canonical = $_SERVER['REQUEST_URI'] ?? '/products';
require __DIR__ . '/../../partials/header.php';
?><main class="main">
  <div class="trust-bar">
    <div class="trust-item">
      <div class="trust-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
      </div>
      <div class="trust-text">
        <span class="trust-value">10 000+</span>
        <span class="trust-label">Довольных клиентов</span>
      </div>
    </div>
    <div class="trust-item">
      <div class="trust-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
      </div>
      <div class="trust-text">
        <span class="trust-value">9 лет</span>
        <span class="trust-label">На рынке</span>
      </div>
    </div>
    <div class="trust-item">
      <div class="trust-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2l3 6 6 .5-4.5 4.5L18 20l-6-3-6 3 1.5-7L3 8.5 9 8z"/></svg>
      </div>
      <div class="trust-text">
        <span class="trust-value">4.9 ★</span>
        <span class="trust-label">Средняя оценка</span>
      </div>
    </div>
    <div class="trust-item">
      <div class="trust-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20 7l-8 9-4-4"/></svg>
      </div>
      <div class="trust-text">
        <span class="trust-value">100%</span>
        <span class="trust-label">Гарантия качества</span>
      </div>
    </div>
  </div>

  <section class="contacts-hero">
    <div class="container">
      <h1 class="contacts-title">Услуги</h1>
      <p class="contacts-subtitle">Профессиональный уход за вашей обувью</p>
    </div>
  </section>

  <section class="services-grid" itemscope itemtype="https://schema.org/ItemList">
    <div class="container">
      <div class="product-cards">
        <?php
        $allSvcs = Functions::getServices();
        $pos = 0;
        foreach ($allSvcs as $svc):
        $pos++;
        ?>
        <article class="product-card<?= $svc['dark'] ? ' dark-bg' : '' ?>" style="background:<?= $svc['bg'] ?>" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <meta itemprop="position" content="<?= $pos ?>">
          <div itemprop="item" itemscope itemtype="https://schema.org/Product">
          <div class="product-card-text">
            <h2 class="product-card-title" itemprop="name"><?= $svc['title'] ?></h2>
            <p class="product-card-desc" itemprop="offers" itemscope itemtype="https://schema.org/Offer">от <span itemprop="price" content="<?= $svc['price'] ?>"><?= $svc['price_formatted'] ?></span> <span itemprop="priceCurrency" content="RUB">₽</span> за пару</p>
          </div>
          <div class="product-card-image" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
            <img src="/public/assets/images/<?= $svc['img'] ?>" alt="<?= $svc['title'] ?>" loading="lazy" itemprop="contentUrl">
          </div>
          <div class="product-card-action">
            <a href="/product/<?= $svc['slug'] ?>" class="product-card-btn product-card-btn-detail" itemprop="url">Подробнее</a>
          </div>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>

  <?php require __DIR__ . '/../../partials/footer.php'; ?>