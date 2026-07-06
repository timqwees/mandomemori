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
      $baColors = ['#e9cfb6','#ffffff','#fef7ef','#eeeced','#ede7d7','#dab109','#f0f0f0','#911b1c','#3e718c','#94c2f6','#f2b27d','#473424','#e8e8e8'];
      $baFiles = glob(__DIR__ . '/../../../public/assets/images/mandomemori/beforeafter*');
      sort($baFiles);
      foreach ($baFiles as $i => $file):
        $name = basename($file);
        $color = $baColors[$i % count($baColors)];
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