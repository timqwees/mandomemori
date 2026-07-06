<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/before-after', 'priority' => '0.8', 'changefreq' => 'weekly', 'index' => 'main'];

$pageTitle = 'До и После — MANDO MEMORI, химчистка обуви в Москве';
$pageDesc = 'Фотографии до и после химчистки обуви в MANDO MEMORI. Реальные результаты нашей работы.';
$pageKeywords = 'до и после химчистка обуви, результаты MANDO MEMORI';
$canonical = $_SERVER['REQUEST_URI'] ?? '/before-after';
require __DIR__ . '/../../partials/header.php';
?>


<main class="main ba-page">
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

  <section class="ba-hero">
    <div class="container">
      <h1 class="ba-hero-title">До / После</h1>
      <p class="ba-hero-subtitle">Наглядные примеры преображения обуви</p>
    </div>
  </section>

  <section class="ba-stack">
      <div class="ba-stack-item" style="--i: 0;">
        <div class="ba-stack-card">
          <div class="ba-stack-inner" style="background:#e9cfb6">
            <div class="ba-stack-img">
              <img src="/public/assets/images/mandomemori/beforeafter1.jpg" alt="Чистка Loro Piana — до и после | MANDO MEMORI Москва" loading="lazy">
            </div>
          </div>
        </div>
      </div>
      <div class="ba-stack-item" style="--i: 1;">
        <div class="ba-stack-card">
          <div class="ba-stack-inner" style="background:#ffffff">
            <div class="ba-stack-img">
              <img src="/public/assets/images/mandomemori/beforeafter2.png" alt="Чистка Timberland — до и после | MANDO MEMORI Москва" loading="lazy">
            </div>
          </div>
        </div>
      </div>
      <!--<div class="ba-stack-item" style="--i: 2;">
        <div class="ba-stack-card">
          <div class="ba-stack-inner" style="background:#e8e8e8">
            <div class="ba-stack-img">
              <img src="/public/assets/images/mandomemori/beforeafter10.jpg" alt="Чистка Bottega Veneta — до и после | MANDO MEMORI Москва" loading="lazy">
            </div>
          </div>
        </div>
      </div>-->
      <div class="ba-stack-item" style="--i: 3;">
        <div class="ba-stack-card">
          <div class="ba-stack-inner" style="background:#fef7ef">
            <div class="ba-stack-img">
              <img src="/public/assets/images/mandomemori/beforeafter3.png" alt="Чистка 2Mood — до и после | MANDO MEMORI Москва" loading="lazy">
            </div>
          </div>
        </div>
      </div>
      <!--<div class="ba-stack-item" style="--i: 4;">
        <div class="ba-stack-card">
          <div class="ba-stack-inner" style="background:#94c2f6">
            <div class="ba-stack-img">
              <img src="/public/assets/images/mandomemori/beforeafter11.webp" alt="Чистка Giuseppe Zanotti — до и после | MANDO MEMORI Москва" loading="lazy">
            </div>
          </div>
        </div>
      </div>-->
      <div class="ba-stack-item" style="--i: 5;">
        <div class="ba-stack-card">
          <div class="ba-stack-inner" style="background:#eeeced">
            <div class="ba-stack-img">
              <img src="/public/assets/images/mandomemori/beforeafter4.png" alt="Чистка Saint Laurent — до и после | MANDO MEMORI Москва" loading="lazy">
            </div>
          </div>
        </div>
      </div>
      <!--<div class="ba-stack-item" style="--i: 6;">
        <div class="ba-stack-card">
          <div class="ba-stack-inner" style="background:#f2b27d">
            <div class="ba-stack-img">
              <img src="/public/assets/images/mandomemori/beforeafter12.jpg" alt="Чистка Balenciaga — до и после | MANDO MEMORI Москва" loading="lazy">
            </div>
          </div>
        </div>
      </div>-->
      <!--<div class="ba-stack-item" style="--i: 7;">
        <div class="ba-stack-card">
          <div class="ba-stack-inner" style="background:#473424">
            <div class="ba-stack-img">
              <img src="/public/assets/images/mandomemori/beforeafter13.jpg" alt="Чистка Alexander McQueen — до и после | MANDO MEMORI Москва" loading="lazy">
            </div>
          </div>
        </div>
      </div>-->
      <div class="ba-stack-item" style="--i: 8;">
        <div class="ba-stack-card">
          <div class="ba-stack-inner" style="background:#ede7d7">
            <div class="ba-stack-img">
              <img src="/public/assets/images/mandomemori/beforeafter5.png" alt="Чистка Premiata — до и после | MANDO MEMORI Москва" loading="lazy">
            </div>
          </div>
        </div>
      </div>
      <div class="ba-stack-item" style="--i: 9;">
        <div class="ba-stack-card">
          <div class="ba-stack-inner" style="background:#dab109">
            <div class="ba-stack-img">
              <img src="/public/assets/images/mandomemori/beforeafter6.png" alt="Чистка Valentino — до и после | MANDO MEMORI Москва" loading="lazy">
            </div>
          </div>
        </div>
      </div>
      <div class="ba-stack-item" style="--i: 10;">
        <div class="ba-stack-card">
          <div class="ba-stack-inner" style="background:#f0f0f0">
            <div class="ba-stack-img">
              <img src="/public/assets/images/mandomemori/beforeafter7.png" alt="Чистка Raf Simons — до и после | MANDO MEMORI Москва" loading="lazy">
            </div>
          </div>
        </div>
      </div>
      <div class="ba-stack-item" style="--i: 11;">
        <div class="ba-stack-card">
          <div class="ba-stack-inner" style="background:#911b1c">
            <div class="ba-stack-img">
              <img src="/public/assets/images/mandomemori/beforeafter8.png" alt="Чистка Maison Margiela — до и после | MANDO MEMORI Москва" loading="lazy">
            </div>
          </div>
        </div>
      </div>
      <div class="ba-stack-item" style="--i: 12;">
        <div class="ba-stack-card">
          <div class="ba-stack-inner" style="background:#3e718c">
            <div class="ba-stack-img">
              <img src="/public/assets/images/mandomemori/beforeafter9.png" alt="Чистка Givenchy — до и после | MANDO MEMORI Москва" loading="lazy">
            </div>
          </div>
        </div>
      </div>
  </section>
</main>

<script src="/public/assets/js/solefresh/before-after.js" defer></script>

  <?php require __DIR__ . '/../../partials/footer.php'; ?>