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
      <?php
      $baItems = [
        ['file' => 'beforeafter1.jpg',  'bg' => '#ffffff'],
        ['file' => 'beforeafter2.png',  'bg' => '#f2b27d'],
        ['file' => 'beforeafter3.png',  'bg' => '#f2f1f1'],
        ['file' => 'beforeafter4.png',  'bg' => '#473424'],
        ['file' => 'beforeafter5.png',  'bg' => '#3e718c'],
        ['file' => 'beforeafter6.png',  'bg' => '#dab109'],
        ['file' => 'beforeafter7.png',  'bg' => '#ffffff'],
        ['file' => 'beforeafter8.png',  'bg' => '#940c15'],
        ['file' => 'beforeafter9.png',  'bg' => '#1c2334'],
        ['file' => 'beforeafter10.jpg', 'bg' => '#e8ceb5'],
        ['file' => 'beforeafter11.webp','bg' => '#e57572'],//here
        ['file' => 'beforeafter12.jpg', 'bg' => '#f2b27d'],
        ['file' => 'beforeafter13.jpg', 'bg' => '#473424'],
        ['file' => 'beforeafter14.jpg', 'bg' => '#d4c5a9'],
        ['file' => 'beforeafter15.jpg', 'bg' => '#c9d9d2'],
        ['file' => 'beforeafter16.jpg', 'bg' => '#e6d5c3'],
        ['file' => 'beforeafter17.jpg', 'bg' => '#f5e6d3'],
        ['file' => 'beforeafter18.jpg', 'bg' => '#d9d0c7'],
        ['file' => 'beforeafter19.png', 'bg' => '#e8ddd4'],
        ['file' => 'beforeafter20.png', 'bg' => '#cfd8d0'],
        ['file' => 'beforeafter21.jpg', 'bg' => '#e0d3c0'],
        ['file' => 'beforeafter22.jpg', 'bg' => '#f0ebe0'],
        ['file' => 'beforeafter23.jpg', 'bg' => '#d5c4b3'],
        ['file' => 'beforeafter24.jpg', 'bg' => '#c4b7a6'],
        ['file' => 'beforeafter25.jpg', 'bg' => '#e8ddd4'],
        ['file' => 'beforeafter26.jpg', 'bg' => '#d4c5b5'],
        ['file' => 'beforeafter27.jpg', 'bg' => '#f5ede3'],
        ['file' => 'beforeafter28.jpg', 'bg' => '#e0d5c8'],
        ['file' => 'beforeafter29.jpg', 'bg' => '#cdc0b0'],
      ];
      foreach ($baItems as $i => $item):
        $name = $item['file'];
        $color = $item['bg'];
      ?>
      <div class="ba-stack-item" style="--i: <?= $i ?>;">
        <div class="ba-stack-card">
          <div class="ba-stack-inner" style="background:<?= $color ?>">
            <div class="ba-stack-img">
              <img src="/public/assets/images/mandomemori/<?= $name ?>" alt="До и после химчистки | MANDO MEMORI Москва" loading="lazy">
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
  </section>
</main>

<script src="/public/assets/js/solefresh/before-after.js" defer></script>

  <?php require __DIR__ . '/../../partials/footer.php'; ?>