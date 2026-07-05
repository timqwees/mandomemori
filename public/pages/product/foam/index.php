<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/product/foam', 'priority' => '0.7', 'changefreq' => 'weekly', 'index' => 'products'];

$pageTitle = 'MANDO MEMORI - Экспресс-чистка обуви';
$pageDesc = 'Экспресс-чистка обуви в Москве — быстрая химчистка за 24 часа от 1 990 ₽.';
$pageKeywords = 'Экспресс-чистка, MANDO MEMORI, химчистка обуви, быстрая чистка Москва';
$currentSlug = 'foam';
$canonical = $_SERVER['REQUEST_URI'] ?? '/product/foam';
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
        <span itemprop="name">Экспресс-чистка</span>
        <meta itemprop="position" content="3">
      </li>
    </ol>
  </nav>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "Экспресс-чистка обуви",
    "description": "Экспресс-чистка обуви в Москве — быстрая химчистка за 24 часа от 1 990 ₽.",
    "image": "<?= \App\Services\Seo\SeoMeta::siteUrl() ?>/public/assets/images/solefresh/1771014250625-3789.webp",
    "category": "Быстрая чистка пеной",
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
    <div class="svc-hero-bg" style="background-image:url('/public/assets/images/solefresh/1771014250625-3789.webp')"></div>
    <div class="svc-hero-overlay"></div>
    <div class="container svc-hero-content">
      <div class="svc-hero-badge">Быстрая чистка пеной</div>
      <h1 class="svc-hero-title">Экспресс-чистка</h1>
      <p class="svc-hero-desc">Экспресс-чистка обуви в Москве — быстрая химчистка за 24 часа от 1 990 ₽.</p>
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
          <img src="/public/assets/images/solefresh/1771014250625-3789.webp" alt="Экспресс-чистка | MANDO MEMORI" loading="lazy">
        </div>
        <div class="svc-order-body">
          <h2 class="svc-order-name">Экспресс-чистка</h2>
          <p class="svc-order-meta">Быстрая чистка пеной · 1 пара</p>
          <div class="svc-order-price-row">
            <span class="svc-order-price">1 990 ₽</span>
            <span class="svc-order-unit">за пару</span>
          </div>
          <label class="svc-order-qty-label">Количество пар</label>
          <div class="svc-order-qty">
            <button type="button" class="product-qty-btn" data-id="3" data-action="dec">−</button>
            <input type="number" class="product-qty-input" id="qty-3" value="1" min="1" max="10">
            <button type="button" class="product-qty-btn" data-id="3" data-action="inc">+</button>
          </div>
          <button type="button" class="svc-order-cart-btn product-add-to-cart" data-id="3">Добавить в корзину</button>
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
          <p>Экспресс-чистка от MANDO MEMORI — это быстрый способ освежить обувь между основными чистками. Мы используем профессиональную пену, которая деликатно удаляет пыль, лёгкие загрязнения и следы носки, не требуя длительной обработки.</p><p>Идеальный вариант для регулярного ухода за обувью, которую вы носите ежедневно. Процедура занимает минимум времени, но даёт заметный результат свежести и чистоты.</p>
          <div class="svc-tags"><span class="svc-tag">Все типы материалов</span>
</div>
        </div>
        <div class="svc-about-usps">
                      <div class="svc-usp-card">
              <div class="svc-usp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
              <h4>Мгновенный результат</h4>
              <p>Освежение обуви за 15 минут без ожидания</p>
            </div>            <div class="svc-usp-card">
              <div class="svc-usp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2.69l5.66 5.66a8 8 0 11-11.31 0z"/></svg></div>
              <h4>Пенная технология</h4>
              <p>Деликатная пена проникает в структуру материала</p>
            </div>            <div class="svc-usp-card">
              <div class="svc-usp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg></div>
              <h4>Безопасно для обуви</h4>
              <p>Не повреждает цвет и структуру материалов</p>
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
              <span>Сколько времени занимает экспресс-чистка?</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="svc-faq-a"><p>Экспресс-чистка занимает от 15 до 30 минут. Вы можете подождать или забрать обувь позже.</p></div>
          </div>          <div class="svc-faq-item">
            <button class="svc-faq-q" onclick="this.parentElement.classList.toggle('open')">
              <span>Подходит ли для всех типов обуви?</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="svc-faq-a"><p>Да, экспресс-чистка подходит для всех типов материалов: кожа, замша, нубук, текстиль, синтетика. Это универсальная процедура.</p></div>
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
              <img src="/public/assets/images/solefresh/1771325109170-5912.jpg" alt="Базовая химчистка" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Базовая химчистка</h4>
              <span class="svc-rel-price">от 3 490 ₽</span>
            </div>
          </a>          <a href="/product/repel" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/solefresh/1771675668922-443.jpg" alt="Водоотталкивающая пропитка" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Водоотталкивающая пропитка</h4>
              <span class="svc-rel-price">от 1 990 ₽</span>
            </div>
          </a>          <a href="/product/brushes" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/solefresh/1771329597854-9744.jpg" alt="Чистка спортивной обуви" loading="lazy">
            </div>
            <div class="svc-rel-body">
              <h4>Чистка спортивной обуви</h4>
              <span class="svc-rel-price">от 2 990 ₽</span>
            </div>
          </a>          <a href="/product/fresh" class="svc-rel-card">
            <div class="svc-rel-img">
              <img src="/public/assets/images/solefresh/1771334546823-1997.jpg" alt="Дезодорация и свежесть" loading="lazy">
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