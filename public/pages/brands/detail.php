<?php
use Setting\Route\Function\Functions;
// $brandSlug задаёт контроллер (onBrandDetail). Fallback — для прямых инклудов.
$slug = strtolower(trim($brandSlug ?? ($slug ?? '')));
$all = require __DIR__ . '/data.php';
if (!isset($all[$slug])) { http_response_code(404); echo '404 — бренд не найден'; return; }
$b = $all[$slug];
$delivery = Functions::deliveryNote();

$siteINFO = ['canonical' => '/brands/' . $slug, 'priority' => '0.8', 'changefreq' => 'weekly', 'index' => 'brands'];
$pageTitle = $b['title'];
$pageDesc = $b['desc'];
$pageKeywords = $b['keywords'];
$canonical = '/brands/' . $slug;

// FAQ JSON-LD entity for GEO/AI Search
$faqLd = ['@type' => 'FAQPage', '@id' => '/brands/' . $slug . '#faq', 'mainEntity' => []];
foreach ($b['faq'] as $f) {
  $faqLd['mainEntity'][] = ['@type' => 'Question', 'name' => $f['q'], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']]];
}
$jsonLd = $faqLd;
require __DIR__ . '/../../partials/header.php';
$brandsAll = $all;
?>
<main class="main svc-page svc-brand">
  <div class="container">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <ol itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span></a><meta itemprop="position" content="1"></li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="/brands"><span itemprop="name">Бренды</span></a><meta itemprop="position" content="2"></li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="/brands/<?= $slug ?>"><span itemprop="name"><?= htmlspecialchars($b['name']) ?></span></a><meta itemprop="position" content="3"></li>
      </ol>
    </nav>
  </div>

  <section class="svc-hero" itemscope itemtype="https://schema.org/Service">
    <span itemprop="brand" itemscope itemtype="https://schema.org/Brand"><meta itemprop="name" content="<?= htmlspecialchars($b['name']) ?>"></span>
    <span itemprop="provider" itemscope itemtype="https://schema.org/LocalBusiness"><meta itemprop="name" content="MANDO MEMORI"></span>
    <span itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating"><meta itemprop="ratingValue" content="4.9"><meta itemprop="bestRating" content="5"><meta itemprop="ratingCount" content="1500"></span>
    <span itemprop="areaServed" itemscope itemtype="https://schema.org/City"><meta itemprop="name" content="Москва"></span>
    <div class="svc-hero-bg" style="background-image:url('/public/assets/images/mandomemori/hero-poster.jpg')"></div>
    <div class="svc-hero-overlay"></div>
    <div class="container svc-hero-content">
      <span class="svc-hero-badge">✨ <?= htmlspecialchars($b['name']) ?> · Москва · Премиум</span>
      <h1 class="svc-hero-title" itemprop="name"><?= htmlspecialchars($b['h1']) ?></h1>
      <p class="svc-hero-desc" itemprop="description"><?= htmlspecialchars($b['intro']) ?></p>
      <div class="svc-hero-actions">
        <span class="svc-hero-price" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><meta itemprop="priceCurrency" content="RUB"><meta itemprop="price" content="5990"><meta itemprop="availability" content="https://schema.org/InStock">от <?= htmlspecialchars($b['price_from']) ?> ₽ <small>за пару</small></span>
        <a href="/order" class="svc-hero-btn svc-hero-btn--pulse">Вызвать курьера</a>
        <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=brand_<?= $slug ?>_hero" target="_blank" rel="noopener" class="svc-hero-tg" data-tg="brand_<?= $slug ?>_hero">Пришлите фото <?= htmlspecialchars($b['name']) ?> — 5 мин</a>
      </div>
      <p class="svc-hero-trust">★ 4.9 · <?= htmlspecialchars($b['duration']) ?> · оплата после работы · <?= htmlspecialchars($delivery) ?></p>
    </div>
  </section>

  <section class="svc-content-section">
    <div class="container">
      <div class="svc-content-text">
        <h2><?= htmlspecialchars($b['name']) ?>: модели, материалы, проблемы</h2>
        <p><?= htmlspecialchars($b['subtitle']) ?>.</p>
        <div class="svc-tags" style="margin:12px 0 20px">
          <?php foreach ($b['models'] as $m): ?><span class="svc-tag"><?= htmlspecialchars($m) ?></span><?php endforeach; ?>
        </div>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:14px;margin:0 0 8px" class="brand-cols">
          <div style="background:#f7f7f7;border:1px solid #e5e5e5;border-radius:12px;padding:20px">
            <h3 style="margin:0 0 10px;font-size:1rem">Материалы</h3>
            <ul style="margin:0;padding-left:20px;line-height:1.7;color:#444;font-size:.92rem"><?php foreach ($b['materials'] as $m): ?><li><?= htmlspecialchars($m) ?></li><?php endforeach; ?></ul>
          </div>
          <div style="background:#f7f7f7;border:1px solid #e5e5e5;border-radius:12px;padding:20px">
            <h3 style="margin:0 0 10px;font-size:1rem">Что исправляем</h3>
            <ul style="margin:0;padding-left:20px;line-height:1.7;color:#444;font-size:.92rem"><?php foreach ($b['problems'] as $m): ?><li><?= htmlspecialchars($m) ?></li><?php endforeach; ?></ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="svc-steps-visual" itemscope itemtype="https://schema.org/HowTo">
    <meta itemprop="name" content="Как мы чистим <?= htmlspecialchars($b['name']) ?> — MANDO MEMORI">
    <div class="container">
      <h2 class="svc-section-title">Как мы чистим <?= htmlspecialchars($b['name']) ?></h2>
      <p class="svc-section-sub">Экспертиза, а не «стирка». Каждый этап — под конкретный материал и модель.</p>
      <div class="svc-steps-visual__grid">
        <div class="svc-step-v" itemprop="step" itemscope itemtype="https://schema.org/HowToStep"><span class="svc-step-v__num">01</span><h3 itemprop="name">Диагностика</h3><p itemprop="text">Определяем материал, тип загрязнения и состояние пары <?= htmlspecialchars($b['name']) ?> — по фото за 5 минут, бесплатно.</p></div>
        <div class="svc-step-v" itemprop="step" itemscope itemtype="https://schema.org/HowToStep"><span class="svc-step-v__num">02</span><h3 itemprop="name">Подготовка</h3><p itemprop="text">Снимаем шнурки, стельки, защищаем декор и фурнитуру, отдельно готовим элементы.</p></div>
        <div class="svc-step-v" itemprop="step" itemscope itemtype="https://schema.org/HowToStep"><span class="svc-step-v__num">03</span><h3 itemprop="name">Очистка</h3><p itemprop="text">Подбираем состав и метод под материал: Saphir / Tarrago / Collonil, без машинной стирки.</p></div>
        <div class="svc-step-v" itemprop="step" itemscope itemtype="https://schema.org/HowToStep"><span class="svc-step-v__num">04</span><h3 itemprop="name">Сушка</h3><p itemprop="text">Контролируем температуру, чтобы не деформировать обувь. Сохраняем форму колодкой.</p></div>
        <div class="svc-step-v" itemprop="step" itemscope itemtype="https://schema.org/HowToStep"><span class="svc-step-v__num">05</span><h3 itemprop="name">Восстановление</h3><p itemprop="text">При необходимости — подошва, цвет, потёртости, форма, пропитка.</p></div>
        <div class="svc-step-v" itemprop="step" itemscope itemtype="https://schema.org/HowToStep"><span class="svc-step-v__num">06</span><h3 itemprop="name">Контроль</h3><p itemprop="text">Проверяем пару по чек-листу перед выдачей. Оплата — только после работы.</p></div>
      </div>
      <div class="svc-steps-visual__cta">
        <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=brand_<?= $slug ?>_steps" target="_blank" rel="noopener" class="svc-order-tg" data-tg="brand_<?= $slug ?>_steps">Прислать фото — оценка 5 мин</a>
        <a href="tel:+79161829272" class="svc-order-phone">+7 (916) 182-92-72</a>
      </div>
    </div>
  </section>

  <section class="svc-content-section">
    <div class="container">
      <h2 class="svc-section-title">Услуги и цены для <?= htmlspecialchars($b['name']) ?></h2>
      <div class="svc-tags">
        <a class="svc-tag" href="/product/cleaning">Химчистка — от 5 990 ₽</a>
        <a class="svc-tag" href="/product/restoration">Реставрация — от 6 490 ₽</a>
        <a class="svc-tag" href="/product/whitening">Отбеливание подошвы — от 10 990 ₽</a>
        <a class="svc-tag" href="/product/replacement">Замена подошвы — от 18 990 ₽</a>
        <a class="svc-tag" href="/product/bag-restoration">Сумки — от 7 990 ₽</a>
        <a class="svc-tag" href="/product/prevention">Профилактика — от 3 490 ₽</a>
      </div>
      <?php if (!empty($b['blog'])): ?>
      <h2 class="svc-section-title" style="margin-top:32px">Гайды по <?= htmlspecialchars($b['name']) ?> — блог</h2>
      <div class="svc-tags">
        <?php foreach ($b['blog'] as $art): ?><a class="svc-tag" href="/blog/<?= htmlspecialchars($art) ?>"><?= htmlspecialchars($art) ?> →</a><?php endforeach; ?>
      </div>
      <?php endif; ?>
      <h2 class="svc-section-title" style="margin-top:32px">Другие бренды</h2>
      <div class="svc-tags">
        <?php foreach ($brandsAll as $s2 => $b2): if ($s2 === $slug) continue; ?><a class="svc-tag" href="/brands/<?= $s2 ?>"><?= htmlspecialchars($b2['name']) ?></a><?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="svc-faq-section" itemscope itemtype="https://schema.org/FAQPage">
    <div class="container">
      <h2 class="svc-section-title">Частые вопросы про <?= htmlspecialchars($b['name']) ?></h2>
      <div class="svc-faq-list">
        <?php foreach ($b['faq'] as $f): ?>
        <details class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <summary style="list-style:none;cursor:pointer"><h3 itemprop="name" style="display:inline"><?= htmlspecialchars($f['q']) ?></h3></summary>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text"><?= htmlspecialchars($f['a']) ?></p></div>
        </details>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="svc-cta-section">
    <div class="container">
      <h2><?= htmlspecialchars($b['h1']) ?> — отдайте пару экспертам</h2>
      <p>Пришлите фото в Telegram — оценим за 5 минут. Или вызовите курьера. Оплата после работы.</p>
      <div class="svc-cta-row">
        <a href="/order" class="svc-cta-btn">Вызвать курьера</a>
        <a href="tel:+79161829272" class="svc-cta-phone">Позвонить</a>
        <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=brand_<?= $slug ?>_cta" target="_blank" rel="noopener" class="svc-cta-tg" data-tg="brand_<?= $slug ?>_cta">Пришлите фото в Telegram</a>
      </div>
    </div>
  </section>
</main>
<style>
@media(max-width:860px){.brand-cols{grid-template-columns:1fr !important}}
.svc-faq-item summary::-webkit-details-marker{display:none}
.svc-faq-item summary h3{margin:0;padding:18px 20px;font-size:.95rem;display:flex;align-items:center;justify-content:space-between;gap:12px;user-select:none}
.svc-faq-item summary h3::after{content:'▸';color:#999;transition:transform .3s}
.svc-faq-item[open] summary h3::after{transform:rotate(90deg);color:#D4562A}
.svc-faq-item p{margin:0;padding:0 20px 18px;font-size:.9rem;line-height:1.7;color:var(--text-secondary)}
</style>
<?php require __DIR__ . '/../../partials/footer.php'; ?>
