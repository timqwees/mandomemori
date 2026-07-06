<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/product/sole-fresh', 'priority' => '0.7', 'changefreq' => 'weekly', 'index' => 'products'];

$pageTitle = 'MANDO MEMORI - Базовая химчистка обуви';
$pageDesc = 'Базовая химчистка обуви в Москве — чистка кроссовок, кожи, замши, нубука от 3 490 ₽. Защитная пропитка.';
$pageKeywords = 'Базовая химчистка, MANDO MEMORI, химчистка обуви, чистка обуви Москва';
$currentSlug = 'sole-fresh';
$canonical = $_SERVER['REQUEST_URI'] ?? '/product/sole-fresh';
require __DIR__ . '/../../../partials/header.php';
?>
<main class="main svc-page">

  <nav class="breadcrumbs" aria-label="Breadcrumb">
    <ol itemscope itemtype="https://schema.org/BreadcrumbList">
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="/"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="/products"><span itemprop="name">Услуги</span></a>
        <meta itemprop="position" content="2">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span itemprop="name">Базовая химчистка</span>
        <meta itemprop="position" content="3">
      </li>
    </ol>
  </nav>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "Базовая химчистка",
    "description": "Базовая химчистка обуви в Москве — чистка кроссовок, кожи, замши, нубука от 3 490 ₽. Защитная пропитка.",
    "image": "<?= \App\Services\Seo\SeoMeta::siteUrl() ?>/public/assets/images/mandomemori/1771325109170-5912.jpg",
    "category": "Деликатная чистка",
    "offers": {
      "@type": "Offer",
      "price": "3490",
      "priceCurrency": "RUB",
      "availability": "https://schema.org/InStock"
    }
  }
  </script>

  <!-- ═══ HERO ═══ -->
  <section class="svc-hero">
    <div class="svc-hero-bg" style="background-image:url('/public/assets/images/mandomemori/1771325109170-5912.jpg')"></div>
    <div class="svc-hero-overlay"></div>
    <div class="container svc-hero-content">
      <div class="svc-hero-badge">Химчистка</div>
      <h1 class="svc-hero-title">Базовая химчистка</h1>
      <p class="svc-hero-desc">Базовая химчистка обуви в Москве — чистка кроссовок, кожи, замши, нубука от 3 490 ₽. Защитная пропитка.</p>
      <div class="svc-hero-actions">
        <span class="svc-hero-price">3 490 ₽ <small>за пару</small></span>
        <a href="#svc-order" class="svc-hero-btn">Заказать услугу</a>
      </div>
    </div>
  </section>

  <!-- ═══ ORDER SECTION ═══ -->
  <section class="svc-order" id="svc-order">
    <div class="container">
      <div class="svc-order-card">
        <div class="svc-order-img">
          <img src="/public/assets/images/mandomemori/1771325109170-5912.jpg" alt="Базовая химчистка | MANDO MEMORI" loading="lazy">
        </div>
        <div class="svc-order-body">
          <h2 class="svc-order-name">Базовая химчистка</h2>
          <p class="svc-order-meta">Химчистка · 1 пара</p>
          <div class="svc-order-price-row">
            <span class="svc-order-price">3 490 ₽</span>
            <span class="svc-order-unit">за пару</span>
          </div>
          <label class="svc-order-qty-label">Количество пар</label>
          <div class="svc-order-qty">
            <button type="button" class="product-qty-btn" data-id="1" data-action="dec">−</button>
            <input type="number" class="product-qty-input" id="qty-1" value="1" min="1" max="10">
            <button type="button" class="product-qty-btn" data-id="1" data-action="inc">+</button>
          </div>
          <button type="button" class="svc-order-cart-btn product-add-to-cart" data-id="1">Добавить в корзину</button>
          <a href="/order" class="svc-order-link">Заказать услугу →</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ ABOUT ═══ -->
  <section class="svc-about">
    <div class="container">
      <div class="svc-about-grid">
        <div class="svc-about-text">
          <h2 class="svc-section-title">Об услуге</h2>
          <p>Базовая химчистка от MANDO MEMORI — это профессиональная чистка повседневной обуви: кроссовок, кед, туфель, ботинок из гладкой кожи, замши, нубука и текстиля. Мы бережно удаляем уличную грязь, пыль и следы носки с помощью деликатных чистящих средств, безопасных для любых материалов.</p><p>В процедуру входит ручная чистка верха, обработка подошвы, удаление загрязнений из труднодоступных мест и финишная полировка. После чистки наносится защитная пропитка, которая продлевает свежесть и срок службы обуви.</p>
          <div class="svc-tags"><span class="svc-tag">Кроссовки</span>
<span class="svc-tag">Кожа</span>
<span class="svc-tag">Замша</span>
<span class="svc-tag">Текстиль</span>
</div>
        </div>
        <div class="svc-about-usps">
                      <div class="svc-usp-card">
              <div class="svc-usp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 12h3v8h6v-6h2v6h6v-8h3L12 2z"/></svg></div>
              <h4>Бережный уход</h4>
              <p>Профессиональные средства, безопасные для любых материалов</p>
            </div>            <div class="svc-usp-card">
              <div class="svc-usp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9.59 4.59A2 2 0 1111 8H2m10.59 11.41A2 2 0 1014 16H2m15.73-8.27A2.5 2.5 0 1119.5 12H2"/></svg></div>
              <h4>Без запаха</h4>
              <p>После чистки не остаётся химического запаха — только свежесть</p>
            </div>            <div class="svc-usp-card">
              <div class="svc-usp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
              <h4>Экономия времени</h4>
              <p>Не нужно покупать средства и тратить часы на чистку дома</p>
            </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ HOW IT WORKS ═══ -->
  <section class="svc-steps-section">
    <div class="container">
      <h2 class="svc-section-title">Как мы работаем</h2>
      <div class="svc-steps">
                    <div class="svc-step">
              <span class="svc-step-num">01</span>
              <div class="svc-step-body">
                <h4>Приёмка</h4>
                <p>Осматриваем обувь, определяем материал и степень загрязнения</p>
              </div>
            </div>            <div class="svc-step">
              <span class="svc-step-num">02</span>
              <div class="svc-step-body">
                <h4>Чистка</h4>
                <p>Деликатно очищаем поверхность от всех загрязнений</p>
              </div>
            </div>            <div class="svc-step">
              <span class="svc-step-num">03</span>
              <div class="svc-step-body">
                <h4>Защита</h4>
                <p>Наносим водоотталкивающую пропитку для долговременной защиты</p>
              </div>
            </div>
      </div>
    </div>
  </section>

  <!-- ═══ FAQ ═══ -->
  <section class="svc-faq-section">
    <div class="container">
      <h2 class="svc-section-title">Частые вопросы</h2>
      <div class="svc-faq-list">
                  <div class="svc-faq-item">
            <button class="svc-faq-q" onclick="this.parentElement.classList.toggle('open')">
              <span>Что входит в базовую химчистку?</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="svc-faq-a"><p>В базовую химчистку входит: ручная чистка верха обуви, обработка подошвы, удаление поверхностных загрязнений, полировка и нанесение защитной пропитки.</p></div>
          </div>          <div class="svc-faq-item">
            <button class="svc-faq-q" onclick="this.parentElement.classList.toggle('open')">
              <span>Какую обувь можно принести?</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="svc-faq-a"><p>Мы принимаем кроссовки, кеды, ботинки, туфли, лоферы из кожи, замши, нубука, текстиля и синтетики.</p></div>
          </div>          <div class="svc-faq-item">
            <button class="svc-faq-q" onclick="this.parentElement.classList.toggle('open')">
              <span>Сколько длится базовая химчистка?</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="svc-faq-a"><p>Стандартный срок — 1-2 рабочих дня. По запросу делаем срочную чистку за 24 часа.</p></div>
          </div>
      </div>
    </div>
  </section>

  <!-- ═══ RELATED SERVICES ═══ -->
  <section class="svc-related">
    <div class="container">
      <h2 class="svc-section-title">Другие услуги</h2>
      <div class="svc-rel-grid">
                  <a href="/product/repel" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/mandomemori/1771675668922-443.jpg" alt="Водоотталкивающая пропитка" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Водоотталкивающая пропитка</h4>
              <span class="svc-rel-price">от 1 990 ₽</span>
            </div>
          </a>          <a href="/product/foam" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/mandomemori/1771014250625-3789.webp" alt="Экспресс-чистка" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Экспресс-чистка</h4>
              <span class="svc-rel-price">от 1 990 ₽</span>
            </div>
          </a>          <a href="/product/oil" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/mandomemori/1771326480456-1968.jpg" alt="Питание и кондиционирование кожи" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Питание и кондиционирование кожи</h4>
              <span class="svc-rel-price">от 1 990 ₽</span>
            </div>
          </a>          <a href="/product/wipes" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/mandomemori/1771329753698-5386.jpg" alt="Отбеливание подошвы" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Отбеливание подошвы</h4>
              <span class="svc-rel-price">от 1 490 ₽</span>
            </div>
          </a>
      </div>
    </div>
  </section>

  <!-- ═══ BOTTOM CTA ═══ -->
  <section class="svc-cta-section">
    <div class="container">
      <h2>Готовы доверить обувь профессионалам?</h2>
      <p>Оставьте заявку, и мы свяжемся с вами в ближайшее время</p>
      <a href="/order" class="svc-cta-btn">Передать обувь</a>
    </div>
  </section>

</main>

<?php require __DIR__ . '/../../../partials/footer.php'; ?>