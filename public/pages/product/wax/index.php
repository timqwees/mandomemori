<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/product/wax', 'priority' => '0.7', 'changefreq' => 'weekly', 'index' => 'products'];

$pageTitle = 'MANDO MEMORI - Защитная пропитка и вощение';
$pageDesc = 'Защитная пропитка и вощение обуви в Москве — долговременная защита от влаги и грязи от 1 990 ₽.';
$pageKeywords = 'Защитная пропитка, вощение, MANDO MEMORI, химчистка обуви, защита обуви Москва';
$currentSlug = 'wax';
$canonical = $_SERVER['REQUEST_URI'] ?? '/product/wax';
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
        <span itemprop="name">Защитная пропитка и вощение</span>
        <meta itemprop="position" content="3">
      </li>
    </ol>
  </nav>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "Защитная пропитка и вощение",
    "description": "Защитная пропитка и вощение обуви в Москве — долговременная защита от влаги и грязи от 1 990 ₽.",
    "image": "<?= \App\Services\Seo\SeoMeta::siteUrl() ?>/public/assets/images/mandomemori/спрей2.jpg",
    "category": "Защита воском",
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
    <div class="svc-hero-bg" style="background-image:url('/public/assets/images/mandomemori/спрей2.jpg')"></div>
    <div class="svc-hero-overlay"></div>
    <div class="container svc-hero-content">
      <div class="svc-hero-badge">Защита воском</div>
      <h1 class="svc-hero-title">Защитная пропитка и вощение</h1>
      <p class="svc-hero-desc">Защитная пропитка и вощение обуви в Москве — долговременная защита от влаги и грязи от 1 990 ₽.</p>
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
          <img src="/public/assets/images/mandomemori/спрей2.jpg" alt="Защитная пропитка и вощение | MANDO MEMORI" loading="lazy">
        </div>
        <div class="svc-order-body">
          <h2 class="svc-order-name">Защитная пропитка и вощение</h2>
          <p class="svc-order-meta">Защита воском · 1 пара</p>
          <div class="svc-order-price-row">
            <span class="svc-order-price">1 990 ₽</span>
            <span class="svc-order-unit">за пару</span>
          </div>
          <label class="svc-order-qty-label">Количество пар</label>
          <div class="svc-order-qty">
            <button type="button" class="product-qty-btn" data-id="10" data-action="dec">−</button>
            <input type="number" class="product-qty-input" id="qty-10" value="1" min="1" max="10">
            <button type="button" class="product-qty-btn" data-id="10" data-action="inc">+</button>
          </div>
          <button type="button" class="svc-order-cart-btn product-add-to-cart" data-id="10">Добавить в корзину</button>
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
          <p>Защитная пропитка и вощение от MANDO MEMORI — это классический метод защиты и ухода за кожаной обувью. Натуральный воск создаёт прочный водоотталкивающий слой, питает кожу и придаёт обуви благородный блеск.</p><p>Восковая защита особенно рекомендуется для зимней и демисезонной обуви, которая подвергается воздействию влаги, снега и реагентов.</p>
          <div class="svc-tags"><span class="svc-tag">Гладкая кожа</span>
<span class="svc-tag">Замша</span>
<span class="svc-tag">Нубук</span>
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
              <span>Чем вощение отличается от пропитки?</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="svc-faq-a"><p>Воск создаёт более плотный защитный слой и придаёт блеск, а пропитка — невидимый барьер. Мы часто комбинируем оба метода для максимальной защиты.</p></div>
          </div>          <div class="svc-faq-item">
            <button class="svc-faq-q" onclick="this.parentElement.classList.toggle('open')">
              <span>Как часто нужно обновлять восковое покрытие?</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="svc-faq-a"><p>Рекомендуем обновлять восковое покрытие каждые 1-2 месяца в зависимости от интенсивности носки и погодных условий.</p></div>
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
              <img src="/public/assets/images/mandomemori/спрей.jpg" alt="Водоотталкивающая пропитка" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Водоотталкивающая пропитка</h4>
              <span class="svc-rel-price">от 1 990 ₽</span>
            </div>
          </a>          <a href="/product/basic" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/mandomemori/чистка.jpg" alt="Базовая химчистка" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Базовая химчистка</h4>
              <span class="svc-rel-price">от 3 490 ₽</span>
            </div>
          </a>          <a href="/product/oil" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/mandomemori/средство.jpg" alt="Питание и кондиционирование кожи" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Питание и кондиционирование кожи</h4>
              <span class="svc-rel-price">от 1 990 ₽</span>
            </div>
          </a>          <a href="/product/paint" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/mandomemori/починка.jpg" alt="Покраска и реставрация цвета" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Покраска и реставрация цвета</h4>
              <span class="svc-rel-price">от 3 990 ₽</span>
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