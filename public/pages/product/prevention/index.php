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
$siteINFO = ['canonical' => '/product/' . $slug, 'priority' => '0.7', 'changefreq' => 'weekly', 'index' => 'products'];
$pageTitle = $svc['seo_title'] ?? "$title в Москве — премиум-мастерская MANDO MEMORI";
$ogImage = '/public/assets/images/' . $svc['img'];
$pageDesc = $svc['seo_desc'] ?? $svc['desc'];
$pageKeywords = $svc['seo_keywords'] ?? "$title в Москве, MANDO MEMORI, премиальная мастерская";
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
  <section class="svc-hero" itemscope itemtype="https://schema.org/Product">
    <meta itemprop="brand" content="MANDO MEMORI">
    <span itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating"><meta itemprop="ratingValue" content="4.9"><meta itemprop="bestRating" content="5"><meta itemprop="ratingCount" content="1500"></span>
    <span itemprop="review" itemscope itemtype="https://schema.org/Review"><span itemprop="author" itemscope itemtype="https://schema.org/Person"><meta itemprop="name" content="Анна"></span><meta itemprop="datePublished" content="2026-06-15"><span itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating"><meta itemprop="ratingValue" content="5"><meta itemprop="bestRating" content="5"></span><meta itemprop="description" content="Отличный сервис! Обувь как новая, очень довольна результатом."></span>
    <div class="svc-hero-bg" style="background-image:url('/public/assets/images/<?= $svc['img'] ?>')"></div>
    <meta itemprop="image" content="/public/assets/images/<?= $svc['img'] ?>">
    <div class="svc-hero-overlay"></div>
    <div class="container svc-hero-content">
      <h1 class="svc-hero-title" itemprop="name"><?= $title ?></h1>
      <p class="svc-hero-desc" itemprop="description"><?= $svc['desc'] ?></p>
      <div class="svc-hero-actions">
        <span class="svc-hero-price" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><meta itemprop="priceCurrency" content="RUB"><span itemprop="price"><?= $priceRaw ?></span> ₽ <small><?= $svc['unit'] ?? 'за пару' ?></small><meta itemprop="availability" content="https://schema.org/InStock"><span itemprop="hasMerchantReturnPolicy" itemscope itemtype="https://schema.org/MerchantReturnPolicy"><meta itemprop="applicableCountry" content="RU"><meta itemprop="returnPolicyCategory" content="https://schema.org/MerchantReturnFiniteReturnWindow"><meta itemprop="merchantReturnDays" content="14"><meta itemprop="returnMethod" content="https://schema.org/ReturnByMail"><meta itemprop="returnFees" content="https://schema.org/FreeReturn"></span><span itemprop="shippingDetails" itemscope itemtype="https://schema.org/OfferShippingDetails"><span itemprop="shippingDestination" itemscope itemtype="https://schema.org/DefinedRegion"><meta itemprop="addressCountry" content="RU"></span><span itemprop="shippingRate" itemscope itemtype="https://schema.org/MonetaryAmount"><meta itemprop="value" content="0"><meta itemprop="currency" content="RUB"></span><span itemprop="deliveryTime" itemscope itemtype="https://schema.org/ShippingDeliveryTime"><span itemprop="handlingTime" itemscope itemtype="https://schema.org/QuantitativeValue"><meta itemprop="minValue" content="0"><meta itemprop="maxValue" content="1"><meta itemprop="unitCode" content="DAY"></span><span itemprop="transitTime" itemscope itemtype="https://schema.org/QuantitativeValue"><meta itemprop="minValue" content="1"><meta itemprop="maxValue" content="2"><meta itemprop="unitCode" content="DAY"></span></span><meta itemprop="shippingOrigin" content="RU"></span></span>
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
            <span class="svc-order-unit"><?= $svc['unit'] ?? 'за пару' ?></span>
          </div>
          <label class="svc-order-qty-label">Количество пар</label>
          <div class="svc-order-qty">
            <button type="button" class="product-qty-btn" data-id="<?= $id ?>" data-action="dec">−</button>
            <input type="number" class="product-qty-input" id="qty-<?= $id ?>" value="1" min="1" max="10">
            <button type="button" class="product-qty-btn" data-id="<?= $id ?>" data-action="inc">+</button>
          </div>
          <button type="button" class="svc-order-cart-btn product-add-to-cart" data-id="<?= $id ?>">Добавить в корзину</button>
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
      <h2 class="svc-section-title">Профилактика подошвы обуви в Москве</h2>
      <div class="svc-content-text">
        <p>Мастерская MANDO MEMORI предлагает установку профилактики на подошву обуви в Москве. Профилактика — это специальная накладка на подошву, которая защищает её от преждевременного износа, скольжения и повреждений. Установка профилактики продлевает срок службы обуви в 2-3 раза.</p>
        <p>Мы предлагаем два типа профилактики: фактурная (с рифлением для лучшего сцепления) и гелевая (мягкая, амортизирующая). Выбор зависит от типа обуви и предпочтений клиента. Особенно актуальна профилактика для премиум-обуви Loro Piana, Gucci, Prada — сохраняет дорогую подошву в идеальном состоянии.</p>
        <p>Установка занимает 1-2 дня. После нанесения профилактика практически незаметна и не влияет на внешний вид обуви.</p>
      </div>
    </div>
  </section>
  <section class="svc-faq-section" itemscope itemtype="https://schema.org/FAQPage">
    <div class="container">
      <h2 class="svc-section-title">Часто задаваемые вопросы о профилактике подошвы</h2>
      <div class="svc-faq-list">
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Сколько стоит профилактика подошвы?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Стоимость профилактики подошвы — от 3 490 ₽. Цена включает материал и установку. Фактурная и гелевая профилактика стоят одинаково.</p>
          </div>
        </div>
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Какую профилактику выбрать — фактурную или гелевую?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Фактурная профилактика лучше подходит для зимней и демисезонной обуви — обеспечивает отличное сцепление. Гелевая профилактика мягче, подходит для летней обуви и даёт дополнительную амортизацию при ходьбе.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="svc-cta-section">
    <div class="container">
      <h2>Готовы доверить обувь профессионалам?</h2>
      <p>Оставьте заявку, и мы свяжемся с вами в ближайшее время</p>
      <a href="/order" class="svc-cta-btn">Передать обувь</a>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../../../partials/footer.php'; ?>
