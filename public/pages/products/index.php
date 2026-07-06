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

  <section class="services-grid">
    <div class="container">
      <div class="product-cards">
        <?php
        $allSvcs = [
          ['slug' => 'sole-fresh', 'img' => '1771325109170-5912.jpg', 'title' => 'Базовая химчистка', 'price' => '3 490', 'bg' => '#1C1512', 'dark' => true],
          ['slug' => 'repel', 'img' => '1771675668922-443.jpg', 'title' => 'Водоотталкивающая пропитка', 'price' => '1 990', 'bg' => '#1C1512', 'dark' => true],
          ['slug' => 'foam', 'img' => '1771014250625-3789.webp', 'title' => 'Экспресс-чистка', 'price' => '1 990', 'bg' => '#1C1512', 'dark' => true],
          ['slug' => 'oil', 'img' => '1771326480456-1968.jpg', 'title' => 'Питание и кондиционирование кожи', 'price' => '1 990', 'bg' => '#1C1512', 'dark' => true],
          ['slug' => 'resize', 'img' => '1771327434678-8059.jpg', 'title' => 'Растяжка обуви', 'price' => '1 490', 'bg' => '#1C1512', 'dark' => true],
          ['slug' => 'trees', 'img' => '1771329486969-2642.jpg', 'title' => 'Восстановление формы обуви', 'price' => '1 490', 'bg' => '#1C1512', 'dark' => true],
          ['slug' => 'brushes', 'img' => '1771329597854-9744.jpg', 'title' => 'Чистка спортивной обуви', 'price' => '2 990', 'bg' => '#1C1512', 'dark' => true],
          ['slug' => 'wipes', 'img' => '1771329753698-5386.jpg', 'title' => 'Отбеливание подошвы', 'price' => '1 490', 'bg' => '#1C1512', 'dark' => true],
          ['slug' => 'towel', 'img' => '1771329961198-4780.jpg', 'title' => 'Глубокая чистка микрофиброй', 'price' => '2 490', 'bg' => '#1C1512', 'dark' => true],
          ['slug' => 'wax', 'img' => '1771334464237-4257.png', 'title' => 'Защитная пропитка и вощение', 'price' => '1 990', 'bg' => '#1C1512', 'dark' => true],
          ['slug' => 'fresh', 'img' => '1771334546823-1997.jpg', 'title' => 'Дезодорация и свежесть', 'price' => '990', 'bg' => '#1C1512', 'dark' => true],
          ['slug' => 'paint', 'img' => '1771334585255-3781.jpg', 'title' => 'Покраска и реставрация цвета', 'price' => '3 990', 'bg' => '#1C1512', 'dark' => true],
          ['slug' => 'premium', 'img' => '1771579097991-627.jpg', 'title' => 'Премиум-чистка', 'price' => '5 990', 'bg' => '#1C1512', 'dark' => true],
          ['slug' => 'soft', 'img' => '1771578995760-1226.png', 'title' => 'Чистка замши и нубука', 'price' => '4 490', 'bg' => '#1C1512', 'dark' => true],
          ['slug' => 'standard', 'img' => '1771334763273-3808.jpg', 'title' => 'Полный комплекс ухода', 'price' => '8 990', 'bg' => '#1C1512', 'dark' => true],
          ['slug' => 'travel', 'img' => '1771334893250-1313.jpg', 'title' => 'Химчистка экипировки', 'price' => '4 990', 'bg' => '#1C1512', 'dark' => true],
        ];
        foreach ($allSvcs as $svc):
        ?>
        <article class="product-card<?= $svc['dark'] ? ' dark-bg' : '' ?>" style="background:<?= $svc['bg'] ?>">
          <div class="product-card-text">
            <h2 class="product-card-title"><?= $svc['title'] ?></h2>
            <p class="product-card-desc">от <?= $svc['price'] ?> ₽ за пару</p>
          </div>
          <div class="product-card-image">
            <img src="/public/assets/images/mandomemori/<?= $svc['img'] ?>" alt="<?= $svc['title'] ?>" loading="lazy">
          </div>
          <div class="product-card-action">
            <a href="/product/<?= $svc['slug'] ?>" class="product-card-btn product-card-btn-detail">Подробнее</a>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>

  <?php require __DIR__ . '/../../partials/footer.php'; ?>