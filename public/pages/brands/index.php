<?php
use Setting\Route\Function\Functions;
$siteINFO = ['canonical' => '/brands', 'priority' => '0.9', 'changefreq' => 'weekly', 'index' => 'brands'];
$pageTitle = 'Бренды — химчистка и реставрация премиальной обуви в Москве | MANDO MEMORI';
$pageDesc = 'Химчистка и реставрация премиальной обуви в Москве по брендам: Balenciaga, Loro Piana, Hermès, Gucci, Prada, Louis Vuitton, Chanel, Dior, Berluti, Christian Louboutin. От 5 990 ₽. Оценка по фото за 5 минут.';
$pageKeywords = 'химчистка брендовой обуви москва, чистка balenciaga, реставрация loro piana, реставрация hermes, чистка gucci, бренды премиальной обуви';
$canonical = '/brands';
require __DIR__ . '/../../partials/header.php';
$brands = require __DIR__ . '/data.php';
?>
<main class="main">
  <div class="container">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <ol itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span></a><meta itemprop="position" content="1"></li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="/brands"><span itemprop="name">Бренды</span></a><meta itemprop="position" content="2"></li>
      </ol>
    </nav>
  </div>
  <section class="contacts-hero">
    <div class="container">
      <h1 class="contacts-title">Химчистка и реставрация премиальной обуви по брендам — Москва</h1>
      <p class="contacts-subtitle">Выберите бренд — внутри: модели, материалы, проблемы, цены, сроки и FAQ. Каждый бренд — отдельная экспертиза MANDO MEMORI, а не «ещё одна химчистка».</p>
    </div>
  </section>
  <section class="services-grid" itemscope itemtype="https://schema.org/ItemList">
    <div class="container">
      <div class="product-cards">
        <?php $pos = 0; foreach ($brands as $slug => $b): $pos++; ?>
        <article class="product-card dark-bg" style="background:#1C1512" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <meta itemprop="position" content="<?= $pos ?>">
          <div itemprop="item" itemscope itemtype="https://schema.org/Service">
            <meta itemprop="name" content="Химчистка <?= htmlspecialchars($b['name']) ?> в Москве">
            <meta itemprop="provider" content="MANDO MEMORI">
            <div class="product-card-text">
              <h2 class="product-card-title" itemprop="name"><?= htmlspecialchars($b['name']) ?></h2>
              <p class="product-card-desc">от <?= htmlspecialchars($b['price_from']) ?> ₽ · <?= htmlspecialchars($b['duration']) ?></p>
              <p style="color:rgba(255,255,255,.7);font-size:.85rem;line-height:1.6;margin:8px 0 0"><?= htmlspecialchars($b['subtitle']) ?></p>
            </div>
            <div class="product-card-action">
              <a href="/brands/<?= $slug ?>" class="product-card-btn product-card-btn-detail" itemprop="url" title="<?= htmlspecialchars($b['name']) ?> — подробнее">Открыть →</a>
              <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=brands_<?= $slug ?>" target="_blank" rel="external nofollow noopener noreferrer" class="product-card-btn product-card-btn-tg" data-tg="brands_<?= $slug ?>" title="Оценить <?= htmlspecialchars($b['name']) ?> по фото в Telegram">Оценить по фото</a>
            </div>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
      <p style="text-align:center;color:#777;font-size:.85rem;margin-top:20px">Не нашли бренд? Мы работаем с любым премиумом — <a href="https://t.me/maksim1144" target="_blank" rel="external nofollow noopener noreferrer" style="color:#D4562A;font-weight:700" title="Прислать фото в Telegram для оценки">пришлите фото в Telegram →</a></p>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../../partials/footer.php'; ?>
