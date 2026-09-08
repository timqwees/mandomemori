<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();
$slug = basename(__DIR__);
$all = Functions::getServices();
$svc = current(array_filter($all, fn($s) => $s['slug'] === $slug));
$sid = $svc ? array_search($svc, $all, true) : null;
if (!$svc) { http_response_code(404); echo '404'; return; }
$title = $svc['title'];
$price = $svc['price_formatted'];
$priceRaw = $svc['price'];
$id = $sid;
$siteINFO = ['canonical' => '/product/' . $slug, 'priority' => '1.0', 'changefreq' => 'daily', 'index' => 'products'];
$pageTitle = "Замена подошвы Loro Piana в Москве от 18 990 ₽ — ремонт обуви | MANDO MEMORI";
$ogImage = '/public/assets/images/' . $svc['img'];
$pageDesc = "Замена подошвы Loro Piana, Hermès, Berluti, John Lobb, Gucci в Москве от 18 990 ₽. Оригинальные материалы, заводское качество, гарантия. Бесплатная оценка по фото за 5 минут. " . \Setting\Route\Function\Functions::deliveryNote() . ".";
$pageKeywords = "замена подошвы Loro Piana Москва, замена подошвы обуви, ремонт подошвы обуви, замена подошвы Hermès, замена подошвы Berluti, MANDO MEMORI";
$currentSlug = $slug;
$canonical = $_SERVER['REQUEST_URI'] ?? '/product/' . $slug;
require __DIR__ . '/../../../partials/header.php';
?>
<main class="main svc-page">
  <div class="container">
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
        <a itemprop="item" href="<?= $canonical ?>"><span itemprop="name"><?= $title ?></span></a>
        <meta itemprop="position" content="3">
      </li>
    </ol>
  </nav>
  </div>
  <section class="svc-hero" itemscope itemtype="https://schema.org/Service">
    <span itemprop="brand" itemscope itemtype="https://schema.org/Brand"><meta itemprop="name" content="MANDO MEMORI"></span>
    <span itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating"><meta itemprop="ratingValue" content="4.9"><meta itemprop="bestRating" content="5"><meta itemprop="worstRating" content="1"><meta itemprop="ratingCount" content="1500"></span>
    <span itemprop="review" itemscope itemtype="https://schema.org/Review"><span itemprop="author" itemscope itemtype="https://schema.org/Person"><meta itemprop="name" content="Анна"></span><meta itemprop="datePublished" content="2026-06-15"><span itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating"><meta itemprop="ratingValue" content="5"><meta itemprop="bestRating" content="5"></span><meta itemprop="reviewBody" content="Отличный сервис! Обувь как новая, очень довольна результатом."></span>
    <div class="svc-hero-bg" style="background-image:url('/public/assets/images/<?= $svc['img'] ?>')"></div>
    <meta itemprop="image" content="https://mmclean.ru/public/assets/images/<?= $svc['img'] ?>">
    <div class="svc-hero-overlay"></div>
    <div class="container svc-hero-content">
      <span class="svc-hero-badge svc-hero-badge--hit">🔥 ХИТ ПРОДАЖ · высокий спрос</span>
      <h1 class="svc-hero-title" itemprop="name">Замена подошвы Loro Piana в Москве — хит №1</h1>
      <p class="svc-hero-desc" itemprop="description"><?= $svc['desc'] ?></p>
      <div class="svc-hero-actions">
        <span class="svc-hero-price" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><meta itemprop="priceCurrency" content="RUB"><meta itemprop="url" content="https://mmclean.ru/product/replacement"><span itemprop="price"><?= $priceRaw ?></span> ₽ <small>за пару</small><meta itemprop="availability" content="https://schema.org/InStock"><span itemprop="hasMerchantReturnPolicy" itemscope itemtype="https://schema.org/MerchantReturnPolicy"><meta itemprop="applicableCountry" content="RU"><meta itemprop="returnPolicyCategory" content="https://schema.org/MerchantReturnFiniteReturnWindow"><meta itemprop="merchantReturnDays" content="14"><meta itemprop="returnMethod" content="https://schema.org/ReturnByMail"><meta itemprop="returnFees" content="https://schema.org/FreeReturn"></span><span itemprop="shippingDetails" itemscope itemtype="https://schema.org/OfferShippingDetails"><span itemprop="shippingDestination" itemscope itemtype="https://schema.org/DefinedRegion"><meta itemprop="addressCountry" content="RU"></span><span itemprop="shippingRate" itemscope itemtype="https://schema.org/MonetaryAmount"><meta itemprop="value" content="0"><meta itemprop="currency" content="RUB"></span><span itemprop="deliveryTime" itemscope itemtype="https://schema.org/ShippingDeliveryTime"><span itemprop="handlingTime" itemscope itemtype="https://schema.org/QuantitativeValue"><meta itemprop="minValue" content="0"><meta itemprop="maxValue" content="1"><meta itemprop="unitCode" content="DAY"></span><span itemprop="transitTime" itemscope itemtype="https://schema.org/QuantitativeValue"><meta itemprop="minValue" content="1"><meta itemprop="maxValue" content="2"><meta itemprop="unitCode" content="DAY"></span></span><meta itemprop="shippingOrigin" content="RU"></span></span>
        <a href="#svc-order" class="svc-hero-btn">Заказать услугу</a>
      </div>
    </div>
  </section>
  <section class="svc-order" id="svc-order">
    <div class="container">
      <div class="svc-order-card">
        <div class="svc-order-img">
          <img src="/public/assets/images/<?= $svc['img'] ?>" alt="<?= $title ?> | MANDO MEMORI" loading="lazy">
        </div>
        <div class="svc-order-body">
          <h2 class="svc-order-name"><?= $title ?></h2>
          <div class="svc-order-price-row">
            <span class="svc-order-price"><?= $price ?> ₽</span>
            <span class="svc-order-unit">за пару</span>
          </div>
          <label class="svc-order-qty-label">Количество пар</label>
          <div class="svc-order-qty">
            <button type="button" class="product-qty-btn" data-id="<?= $id ?>" data-action="dec">−</button>
            <input type="number" class="product-qty-input" id="qty-<?= $id ?>" value="1" min="1" max="10">
            <button type="button" class="product-qty-btn" data-id="<?= $id ?>" data-action="inc">+</button>
          </div>
          <button type="button" class="svc-order-cart-btn product-add-to-cart" data-id="<?= $id ?>">Добавить в корзину</button>
          <div class="svc-order-contacts">
            <a href="tel:+79161829272" class="svc-order-phone">Позвонить: +7 (916) 182-92-72</a>
            <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=svc_<?= $slug ?>" target="_blank" rel="noopener" class="svc-order-tg" data-tg="svc_<?= $slug ?>">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M20.665 3.717l-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z"/></svg>
              Пришлите фото — назовём цену за 5 мин
            </a>
          </div>
          <a href="/order" class="svc-order-link">Заказать услугу →</a>
        </div>
      </div>
    </div>
  </section>
  <section class="svc-brands-section">
    <div class="container">
      <h2 class="svc-section-title">С какими брендами работаем</h2>
      <div class="svc-tags">
        <span class="svc-tag">Loro Piana</span>
        <span class="svc-tag">Gucci</span>
        <span class="svc-tag">Prada</span>
        <span class="svc-tag">Louis Vuitton</span>
        <span class="svc-tag">Hermès</span>
        <span class="svc-tag">Balenciaga</span>
        <span class="svc-tag">Saint Laurent</span>
        <span class="svc-tag">Bottega Veneta</span>
        <span class="svc-tag">Valentino</span>
        <span class="svc-tag">Christian Louboutin</span>
        <span class="svc-tag">Manolo Blahnik</span>
        <span class="svc-tag">Jimmy Choo</span>
        <span class="svc-tag">и любые другие</span>
      </div>
    </div>
  </section>
  <section class="svc-content-section">
    <div class="container">
      <h2 class="svc-section-title">Замена подошвы обуви в Москве</h2>
      <div class="svc-content-text">
        <p>Мастерская MANDO MEMORI предлагает профессиональную замену подошвы на обуви в Москве. Со временем подошва стирается, теряет амортизацию и внешний вид. Наши мастера подбирают новую подошву, максимально близкую к оригинальной, и устанавливают её на профессиональном оборудовании.</p>
        <p>Особое внимание уделяем обуви Loro Piana — бренда с уникальными технологиями производства подошв. Замена подошвы Loro Piana требует специальных знаний и оригинальных расходных материалов. Мы гарантируем полное соответствие заводскому качеству.</p>
        <p>Также заменяем подошву на обуви Gucci, Prada, Hermès, Santoni, Edward Green и других премиум-брендов. Используем только проверенные материалы, обеспечивающие долговечность результата.</p>
        <p>Замена подошвы обуви продлевает срок службы любимой пары на годы. Обращайтесь — восстановим вашу обувь с гарантией.</p>
      </div>
    </div>
  </section>
  <section class="svc-faq-section" itemscope itemtype="https://schema.org/FAQPage">
    <div class="container">
      <h2 class="svc-section-title">Часто задаваемые вопросы о замене подошвы</h2>
      <div class="svc-faq-list">
        <details class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Сколько стоит замена подошвы?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Стоимость замены подошвы — от 18 990 ₽. Цена зависит от модели обуви, сложности работы и типа новой подошвы. Для Loro Piana используем оригинальные материалы, включённые в стоимость.</p>
          </div>
        </details>
        <details class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Как понять, что пора менять подошву?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Основные признаки: подошва стёрлась до гладкого состояния, появились трещины, ухудшилось сцепление с поверхностью, обувь стала скользить, потеряна амортизация. При появлении любого из этих признаков рекомендуется замена.</p>
          </div>
        </details>
        <details class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Сколько времени занимает замена подошвы?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Замена подошвы занимает 3-7 дней в зависимости от сложности и загрузки мастерской. Срочные заказы выполняем за 2-3 дня.</p>
          </div>
        </details>
      </div>
    </div>
  </section>
  <section class="svc-cta-section">
    <div class="container">
      <h2>🔥 Замена подошвы Loro Piana — хит! Не ждите очереди</h2>
      <p>Пришлите фото подошвы в Telegram — назовём точную цену за 5 минут. Или позвоните — проконсультируем сразу.</p>
      <div class="svc-cta-row">
        <a href="/order" class="svc-cta-btn">Передать обувь</a>
        <a href="tel:+79161829272" class="svc-cta-phone">Позвонить</a>
        <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=svc_cta_<?= $slug ?>" target="_blank" rel="noopener" class="svc-cta-tg" data-tg="svc_cta_<?= $slug ?>">Пришлите фото в Telegram</a>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../../../partials/footer.php'; ?>
