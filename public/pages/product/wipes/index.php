<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/product/wipes', 'priority' => '0.7', 'changefreq' => 'weekly', 'index' => 'products'];

$pageTitle = 'MANDO MEMORI - Отбеливание подошвы обуви';
$pageDesc = 'Отбеливание подошвы обуви в Москве — вернём белизну пожелтевшей подошве от 1 490 ₽.';
$pageKeywords = 'Отбеливание подошвы, MANDO MEMORI, химчистка обуви, чистка подошвы Москва';
$currentSlug = 'wipes';
$canonical = $_SERVER['REQUEST_URI'] ?? '/product/wipes';
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
        <span itemprop="name">Отбеливание подошвы</span>
        <meta itemprop="position" content="3">
      </li>
    </ol>
  </nav>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "Отбеливание подошвы",
    "description": "Отбеливание подошвы обуви в Москве — вернём белизну пожелтевшей подошве от 1 490 ₽.",
    "image": "<?= \App\Services\Seo\SeoMeta::siteUrl() ?>/public/assets/images/mandomemori/отбеливание.jpg",
    "category": "Очистка подошвы",
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
    <div class="svc-hero-bg" style="background-image:url('/public/assets/images/mandomemori/отбеливание.jpg')"></div>
    <div class="svc-hero-overlay"></div>
    <div class="container svc-hero-content">
      <div class="svc-hero-badge">Очистка подошвы</div>
      <h1 class="svc-hero-title">Отбеливание подошвы</h1>
      <p class="svc-hero-desc">Отбеливание подошвы обуви в Москве — вернём белизну пожелтевшей подошве от 1 490 ₽.</p>
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
          <img src="/public/assets/images/mandomemori/отбеливание.jpg" alt="Отбеливание подошвы | MANDO MEMORI" loading="lazy">
        </div>
        <div class="svc-order-body">
          <h2 class="svc-order-name">Отбеливание подошвы</h2>
          <p class="svc-order-meta">Очистка подошвы · 1 пара</p>
          <div class="svc-order-price-row">
            <span class="svc-order-price">1 490 ₽</span>
            <span class="svc-order-unit">за пару</span>
          </div>
          <label class="svc-order-qty-label">Количество пар</label>
          <div class="svc-order-qty">
            <button type="button" class="product-qty-btn" data-id="8" data-action="dec">−</button>
            <input type="number" class="product-qty-input" id="qty-8" value="1" min="1" max="10">
            <button type="button" class="product-qty-btn" data-id="8" data-action="inc">+</button>
          </div>
          <button type="button" class="svc-order-cart-btn product-add-to-cart" data-id="8">Добавить в корзину</button>
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
          <p>Со временем подошва обуви желтеет и теряет первоначальный вид. MANDO MEMORI предлагает профессиональное отбеливание подошвы, которое возвращает ей белизну и свежий вид.</p><p>Мы используем специальные отбеливающие составы, безопасные для материалов обуви. Процедура включает очистку, отбеливание и финишную обработку для долговременного результата.</p>
          <div class="svc-tags"><span class="svc-tag">Кроссовки</span>
<span class="svc-tag">Кеды</span>
<span class="svc-tag">Подошва</span>
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
              <span>Какой подошве можно вернуть белизну?</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="svc-faq-a"><p>Мы отбеливаем подошву из белой резины, EVA и других светлых материалов. Эффект зависит от степени загрязнения и типа подошвы.</p></div>
          </div>          <div class="svc-faq-item">
            <button class="svc-faq-q" onclick="this.parentElement.classList.toggle('open')">
              <span>Сколько держится эффект отбеливания?</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="svc-faq-a"><p>При аккуратной носке эффект сохраняется 1-2 месяца. Рекомендуем обновлять отбеливание по мере загрязнения подошвы.</p></div>
          </div>
      </div>
    </div>
  </section>

  <!-- ═══ RELATED SERVICES ═══ -->
  <section class="svc-related">
    <div class="container">
      <h2 class="svc-section-title">Другие услуги</h2>
      <div class="svc-rel-grid">
                  <a href="/product/sole-fresh" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/mandomemori/чистка.jpg" alt="Базовая химчистка" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Базовая химчистка</h4>
              <span class="svc-rel-price">от 3 490 ₽</span>
            </div>
          </a>          <a href="/product/brushes" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/mandomemori/чистка2.jpg" alt="Чистка спортивной обуви" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Чистка спортивной обуви</h4>
              <span class="svc-rel-price">от 2 990 ₽</span>
            </div>
          </a>          <a href="/product/foam" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/mandomemori/пена.webp" alt="Экспресс-чистка" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Экспресс-чистка</h4>
              <span class="svc-rel-price">от 1 990 ₽</span>
            </div>
          </a>          <a href="/product/fresh" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/mandomemori/салфетки.jpg" alt="Дезодорация и свежесть" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Дезодорация и свежесть</h4>
              <span class="svc-rel-price">от 990 ₽</span>
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