<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/product/resize', 'priority' => '0.7', 'changefreq' => 'weekly', 'index' => 'products'];

$pageTitle = 'MANDO MEMORI - Растяжка обуви';
$pageDesc = 'Растяжка обуви в Москве — профессиональное расширение тесной обуви от 1 490 ₽.';
$pageKeywords = 'Растяжка обуви, MANDO MEMORI, химчистка обуви, растяжка тесной обуви Москва';
$currentSlug = 'resize';
$canonical = $_SERVER['REQUEST_URI'] ?? '/product/resize';
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
        <span itemprop="name">Растяжка обуви</span>
        <meta itemprop="position" content="3">
      </li>
    </ol>
  </nav>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "Растяжка обуви",
    "description": "Растяжка обуви в Москве — профессиональное расширение тесной обуви от 1 490 ₽.",
    "image": "<?= \App\Services\Seo\SeoMeta::siteUrl() ?>/public/assets/images/mandomemori/подклдаки.jpg",
    "category": "Комфортная посадка",
    "offers": {
      "@type": "Offer",
      "price": "1490",
      "priceCurrency": "RUB",
      "availability": "https://schema.org/InStock"
    }
  }
  </script>

  <!-- ═══ HERO ═══ -->
  <section class="svc-hero">
    <div class="svc-hero-bg" style="background-image:url('/public/assets/images/mandomemori/подклдаки.jpg')"></div>
    <div class="svc-hero-overlay"></div>
    <div class="container svc-hero-content">
      <div class="svc-hero-badge">Растяжка</div>
      <h1 class="svc-hero-title">Растяжка обуви</h1>
      <p class="svc-hero-desc">Растяжка обуви в Москве — профессиональное расширение тесной обуви от 1 490 ₽.</p>
      <div class="svc-hero-actions">
        <span class="svc-hero-price">1 490 ₽ <small>за пару</small></span>
        <a href="#svc-order" class="svc-hero-btn">Заказать услугу</a>
      </div>
    </div>
  </section>

  <!-- ═══ ORDER SECTION ═══ -->
  <section class="svc-order" id="svc-order">
    <div class="container">
      <div class="svc-order-card">
        <div class="svc-order-img">
          <img src="/public/assets/images/mandomemori/подклдаки.jpg" alt="Растяжка обуви | MANDO MEMORI" loading="lazy">
        </div>
        <div class="svc-order-body">
          <h2 class="svc-order-name">Растяжка обуви</h2>
          <p class="svc-order-meta">Комфортная посадка · 1 пара</p>
          <div class="svc-order-price-row">
            <span class="svc-order-price">1 490 ₽</span>
            <span class="svc-order-unit">за пару</span>
          </div>
          <label class="svc-order-qty-label">Количество пар</label>
          <div class="svc-order-qty">
            <button type="button" class="product-qty-btn" data-id="5" data-action="dec">−</button>
            <input type="number" class="product-qty-input" id="qty-5" value="1" min="1" max="10">
            <button type="button" class="product-qty-btn" data-id="5" data-action="inc">+</button>
          </div>
          <button type="button" class="svc-order-cart-btn product-add-to-cart" data-id="5">Добавить в корзину</button>
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
          <p>Растяжка обуви от MANDO MEMORI — это профессиональная услуга, которая поможет сделать новую или тесную обувь максимально комфортной. Мы используем специальные колодки и профессиональные средства, которые деликатно растягивают материал в нужных местах.</p><p>Растяжка может быть выполнена как по всей стопе, так и в отдельных зонах: пальцы, подъём, пятка. Результат сохраняется на весь срок службы обуви, обеспечивая идеальную посадку.</p>
          <div class="svc-tags"><span class="svc-tag">Гладкая кожа</span>
<span class="svc-tag">Замша</span>
<span class="svc-tag">Нубук</span>
</div>
        </div>
        <div class="svc-about-usps">
                      <div class="svc-usp-card">
              <div class="svc-usp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8 3H5a2 2 0 00-2 2v3m18 0V5a2 2 0 00-2-2h-3m0 18h3a2 2 0 002-2v-3M3 16v3a2 2 0 002 2h3"/></svg></div>
              <h4>Индивидуальный подход</h4>
              <p>Растяжка в нужных зонах: пальцы, подъём, пятка</p>
            </div>            <div class="svc-usp-card">
              <div class="svc-usp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg></div>
              <h4>Деликатная технология</h4>
              <p>Не повреждает материал, сохраняет форму</p>
            </div>            <div class="svc-usp-card">
              <div class="svc-usp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
              <h4>Длительный эффект</h4>
              <p>Результат сохраняется на весь срок службы</p>
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
              <span>На сколько можно растянуть обувь?</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="svc-faq-a"><p>В среднем растяжка возможна на 0.5-1 размер. Всё зависит от материала и конструкции обуви.</p></div>
          </div>          <div class="svc-faq-item">
            <button class="svc-faq-q" onclick="this.parentElement.classList.toggle('open')">
              <span>Какие материалы можно растягивать?</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="svc-faq-a"><p>Мы растягиваем обувь из гладкой кожи, замши, нубука и некоторых видов текстиля. Искусственные материалы растягиваются хуже.</p></div>
          </div>
      </div>
    </div>
  </section>

  <!-- ═══ RELATED SERVICES ═══ -->
  <section class="svc-related">
    <div class="container">
      <h2 class="svc-section-title">Другие услуги</h2>
      <div class="svc-rel-grid">
                  <a href="/product/trees" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/mandomemori/набор2.jpg" alt="Восстановление формы обуви" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Восстановление формы обуви</h4>
              <span class="svc-rel-price">от 1 490 ₽</span>
            </div>
          </a>          <a href="/product/basic" class="svc-rel-card">
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
          </a>          <a href="/product/repel" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/mandomemori/спрей.jpg" alt="Водоотталкивающая пропитка" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Водоотталкивающая пропитка</h4>
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