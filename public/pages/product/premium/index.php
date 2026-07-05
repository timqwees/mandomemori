<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/product/premium', 'priority' => '0.7', 'changefreq' => 'weekly', 'index' => 'products'];

$pageTitle = 'MANDO MEMORI - Премиум-чистка обуви';
$pageDesc = 'Премиум-чистка обуви в Москве — глубокий уход за брендовой обувью Loro Piana, Gucci, Prada от 5 990 ₽.';
$pageKeywords = 'Премиум-чистка, MANDO MEMORI, химчистка обуви, люксовая чистка обуви Москва';
$currentSlug = 'premium';
$canonical = $_SERVER['REQUEST_URI'] ?? '/product/premium';
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
        <span itemprop="name">Премиум-чистка</span>
        <meta itemprop="position" content="3">
      </li>
    </ol>
  </nav>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "Премиум-чистка",
    "description": "Премиум-чистка обуви в Москве — глубокий уход за брендовой обувью Loro Piana, Gucci, Prada от 5 990 ₽.",
    "image": "<?= \App\Services\Seo\SeoMeta::siteUrl() ?>/public/assets/images/solefresh/1771579097991-627.jpg",
    "category": "Люксовая чистка",
    "offers": {
      "@type": "Offer",
      "price": "5990",
      "priceCurrency": "RUB",
      "availability": "https://schema.org/InStock"
    }
  }
  </script>

  <!-- ═══ HERO ═══ -->
  <section class="svc-hero">
    <div class="svc-hero-bg" style="background-image:url('/public/assets/images/solefresh/1771579097991-627.jpg')"></div>
    <div class="svc-hero-overlay"></div>
    <div class="container svc-hero-content">
      <div class="svc-hero-badge">Люксовая чистка</div>
      <h1 class="svc-hero-title">Премиум-чистка</h1>
      <p class="svc-hero-desc">Премиум-чистка обуви в Москве — глубокий уход за брендовой обувью Loro Piana, Gucci, Prada от 5 990 ₽.</p>
      <div class="svc-hero-actions">
        <span class="svc-hero-price">5 990 ₽ <small>за пару</small></span>
        <a href="#svc-order" class="svc-hero-btn">Заказать услугу</a>
      </div>
    </div>
  </section>

  <!-- ═══ ORDER SECTION ═══ -->
  <section class="svc-order" id="svc-order">
    <div class="container">
      <div class="svc-order-card">
        <div class="svc-order-img">
          <img src="/public/assets/images/solefresh/1771579097991-627.jpg" alt="Премиум-чистка | MANDO MEMORI" loading="lazy">
        </div>
        <div class="svc-order-body">
          <h2 class="svc-order-name">Премиум-чистка</h2>
          <p class="svc-order-meta">Люксовая чистка · 1 пара</p>
          <div class="svc-order-price-row">
            <span class="svc-order-price">5 990 ₽</span>
            <span class="svc-order-unit">за пару</span>
          </div>
          <label class="svc-order-qty-label">Количество пар</label>
          <div class="svc-order-qty">
            <button type="button" class="product-qty-btn" data-id="13" data-action="dec">−</button>
            <input type="number" class="product-qty-input" id="qty-13" value="1" min="1" max="10">
            <button type="button" class="product-qty-btn" data-id="13" data-action="inc">+</button>
          </div>
          <button type="button" class="svc-order-cart-btn product-add-to-cart" data-id="13">Добавить в корзину</button>
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
          <p>Премиум-чистка от MANDO MEMORI — это высший уровень ухода за вашей обувью. Услуга разработана специально для обуви люксовых брендов: Loro Piana, Gucci, Prada, Louis Vuitton и других.</p><p>Мы используем только премиальные средства и ручную работу. Каждая пара проходит многоэтапную обработку: чистка, питание, тонирование, защита и финишная полировка с контролем качества на каждом этапе.</p>
          <div class="svc-tags"><span class="svc-tag">Loro Piana</span>
<span class="svc-tag">Gucci</span>
<span class="svc-tag">Prada</span>
</div>
        </div>
        <div class="svc-about-usps">
                      <div class="svc-usp-card">
              <div class="svc-usp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
              <h4>Профессиональный подход</h4>
              <p>Только сертифицированные средства и материалы</p>
            </div>            <div class="svc-usp-card">
              <div class="svc-usp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg></div>
              <h4>Бережная обработка</h4>
              <p>Каждая пара обрабатывается вручную</p>
            </div>            <div class="svc-usp-card">
              <div class="svc-usp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
              <h4>Быстрый результат</h4>
              <p>Стандартный срок выполнения — 1-2 дня</p>
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
                <h4>Диагностика</h4>
                <p>Тщательный осмотр и определение типа материала</p>
              </div>
            </div>            <div class="svc-step">
              <span class="svc-step-num">02</span>
              <div class="svc-step-body">
                <h4>Чистка</h4>
                <p>Многоэтапная ручная чистка премиальными средствами</p>
              </div>
            </div>            <div class="svc-step">
              <span class="svc-step-num">03</span>
              <div class="svc-step-body">
                <h4>Восстановление</h4>
                <p>Питание, тонирование, защита, финишная полировка</p>
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
              <span>Чем премиум-чистка отличается от базовой?</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="svc-faq-a"><p>Премиум-чистка включает многоэтапную обработку с использованием эксклюзивных средств, ручную работу и обязательный контроль качества на каждом этапе.</p></div>
          </div>          <div class="svc-faq-item">
            <button class="svc-faq-q" onclick="this.parentElement.classList.toggle('open')">
              <span>Какие бренды вы принимаете?</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="svc-faq-a"><p>Мы работаем с любыми люксовыми брендами: Loro Piana, Gucci, Prada, Louis Vuitton, Hermès и другими.</p></div>
          </div>
      </div>
    </div>
  </section>

  <!-- ═══ RELATED SERVICES ═══ -->
  <section class="svc-related">
    <div class="container">
      <h2 class="svc-section-title">Другие услуги</h2>
      <div class="svc-rel-grid">
                  <a href="/product/soft" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/solefresh/1771578995760-1226.png" alt="Чистка замши и нубука" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Чистка замши и нубука</h4>
              <span class="svc-rel-price">от 4 490 ₽</span>
            </div>
          </a>          <a href="/product/paint" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/solefresh/1771334585255-3781.jpg" alt="Покраска и реставрация цвета" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Покраска и реставрация цвета</h4>
              <span class="svc-rel-price">от 3 990 ₽</span>
            </div>
          </a>          <a href="/product/standard" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/solefresh/1771334763273-3808.jpg" alt="Полный комплекс ухода" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Полный комплекс ухода</h4>
              <span class="svc-rel-price">от 8 990 ₽</span>
            </div>
          </a>          <a href="/product/wax" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/solefresh/1771334464237-4257.png" alt="Защитная пропитка и вощение" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Защитная пропитка и вощение</h4>
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