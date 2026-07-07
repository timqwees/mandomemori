<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/product/repel', 'priority' => '0.7', 'changefreq' => 'weekly', 'index' => 'products'];

$pageTitle = 'MANDO MEMORI - Водоотталкивающая пропитка обуви';
$pageDesc = 'Водоотталкивающая пропитка обуви в Москве — защита от влаги, грязи и реагентов от 1 990 ₽.';
$pageKeywords = 'Водоотталкивающая пропитка, MANDO MEMORI, химчистка обуви, защита обуви Москва';
$currentSlug = 'repel';
$canonical = $_SERVER['REQUEST_URI'] ?? '/product/repel';
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
        <span itemprop="name">Водоотталкивающая пропитка</span>
        <meta itemprop="position" content="3">
      </li>
    </ol>
  </nav>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "Водоотталкивающая пропитка обуви",
    "description": "Водоотталкивающая пропитка обуви в Москве — защита от влаги, грязи и реагентов от 1 990 ₽.",
    "image": "<?= \App\Services\Seo\SeoMeta::siteUrl() ?>/public/assets/images/mandomemori/спрей.jpg",
    "category": "Защита от влаги",
    "offers": {
      "@type": "Offer",
      "price": "1990",
      "priceCurrency": "RUB",
      "availability": "https://schema.org/InStock"
    }
  }
  </script>

  <!-- ═══ HERO ═══ -->
  <section class="svc-hero">
    <div class="svc-hero-bg" style="background-image:url('/public/assets/images/mandomemori/спрей.jpg')"></div>
    <div class="svc-hero-overlay"></div>
    <div class="container svc-hero-content">
      <div class="svc-hero-badge">Защита от влаги</div>
      <h1 class="svc-hero-title">Водоотталкивающая пропитка</h1>
      <p class="svc-hero-desc">Водоотталкивающая пропитка обуви в Москве — защита от влаги, грязи и реагентов от 1 990 ₽.</p>
      <div class="svc-hero-actions">
        <span class="svc-hero-price">1 990 ₽ <small>за пару</small></span>
        <a href="#svc-order" class="svc-hero-btn">Заказать услугу</a>
      </div>
    </div>
  </section>

  <!-- ═══ ORDER SECTION ═══ -->
  <section class="svc-order" id="svc-order">
    <div class="container">
      <div class="svc-order-card">
        <div class="svc-order-img">
          <img src="/public/assets/images/mandomemori/спрей.jpg" alt="Водоотталкивающая пропитка | MANDO MEMORI" loading="lazy">
        </div>
        <div class="svc-order-body">
          <h2 class="svc-order-name">Водоотталкивающая пропитка</h2>
          <p class="svc-order-meta">Защита от влаги · 1 пара</p>
          <div class="svc-order-price-row">
            <span class="svc-order-price">1 990 ₽</span>
            <span class="svc-order-unit">за пару</span>
          </div>
          <label class="svc-order-qty-label">Количество пар</label>
          <div class="svc-order-qty">
            <button type="button" class="product-qty-btn" data-id="2" data-action="dec">−</button>
            <input type="number" class="product-qty-input" id="qty-2" value="1" min="1" max="10">
            <button type="button" class="product-qty-btn" data-id="2" data-action="inc">+</button>
          </div>
          <button type="button" class="svc-order-cart-btn product-add-to-cart" data-id="2">Добавить в корзину</button>
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
          <p>Водоотталкивающая пропитка от MANDO MEMORI — это профессиональная защита вашей обуви от влаги, снега, соли и реагентов. Мы наносим специальный состав, который создаёт невидимый барьер на поверхности материала, эффективно отталкивая воду и грязь.</p><p>Пропитка не меняет цвет и структуру материала, сохраняя его дышащие свойства. Особенно рекомендуется для зимней и демисезонной обуви, которая подвергается агрессивному воздействию внешней среды.</p>
          <div class="svc-tags"><span class="svc-tag">Гладкая кожа</span>
<span class="svc-tag">Замша</span>
<span class="svc-tag">Нубук</span>
<span class="svc-tag">Текстиль</span>
</div>
        </div>
        <div class="svc-about-usps">
                      <div class="svc-usp-card">
              <div class="svc-usp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M23 12a11.05 11.05 0 00-22 0zm-5 7a3 3 0 01-6 0v-7"/></svg></div>
              <h4>Надёжная защита</h4>
              <p>Защищает от влаги, снега, соли и реагентов</p>
            </div>            <div class="svc-usp-card">
              <div class="svc-usp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></div>
              <h4>Невидимый барьер</h4>
              <p>Не меняет цвет и структуру материала</p>
            </div>            <div class="svc-usp-card">
              <div class="svc-usp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
              <h4>Долгий эффект</h4>
              <p>Защитные свойства сохраняются до 3 месяцев</p>
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
                <h4>Осмотр</h4>
                <p>Диагностика материала и степени загрязнения</p>
              </div>
            </div>            <div class="svc-step">
              <span class="svc-step-num">02</span>
              <div class="svc-step-body">
                <h4>Обработка</h4>
                <p>Профессиональная обработка выбранным способом</p>
              </div>
            </div>            <div class="svc-step">
              <span class="svc-step-num">03</span>
              <div class="svc-step-body">
                <h4>Контроль</h4>
                <p>Проверка качества и финишная отделка</p>
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
              <span>Как долго действует пропитка?</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="svc-faq-a"><p>Водоотталкивающие свойства сохраняются до 3 месяцев при регулярной носке. Рекомендуем обновлять пропитку каждый сезон.</p></div>
          </div>          <div class="svc-faq-item">
            <button class="svc-faq-q" onclick="this.parentElement.classList.toggle('open')">
              <span>Можно ли нанести пропитку на мокрую обувь?</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="svc-faq-a"><p>Нет, пропитка наносится только на чистую сухую обувь. Мы сначала выполняем чистку, затем наносим защитный состав.</p></div>
          </div>
      </div>
    </div>
  </section>

  <!-- ═══ RELATED SERVICES ═══ -->
  <section class="svc-related">
    <div class="container">
      <h2 class="svc-section-title">Другие услуги</h2>
      <div class="svc-rel-grid">
                  <a href="/product/basic" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/mandomemori/чистка.jpg" alt="Базовая химчистка" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Базовая химчистка</h4>
              <span class="svc-rel-price">от 3 490 ₽</span>
            </div>
          </a>          <a href="/product/foam" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/mandomemori/пена.webp" alt="Экспресс-чистка" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Экспресс-чистка</h4>
              <span class="svc-rel-price">от 1 990 ₽</span>
            </div>
          </a>          <a href="/product/wax" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/mandomemori/спрей2.jpg" alt="Защитная пропитка и вощение" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Защитная пропитка и вощение</h4>
              <span class="svc-rel-price">от 1 990 ₽</span>
            </div>
          </a>          <a href="/product/oil" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/mandomemori/средство.jpg" alt="Питание и кондиционирование кожи" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Питание и кондиционирование кожи</h4>
              <span class="svc-rel-price">от 1 990 ₽</span>
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