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
$pageTitle = "🔥 Реставрация обуви Loro Piana в Москве от 6 490 ₽ — ХИТ | MANDO MEMORI";
$ogImage = '/public/assets/images/' . $svc['img'];
$pageDesc = "ХИТ ПРОДАЖ: реставрация обуви Loro Piana, Gucci, Hermès в Москве от 6 490 ₽. Царапины, потёртости, заломы, цвет, швы, фурнитура. Оценка по фото за 5 минут. " . \Setting\Route\Function\Functions::deliveryNote() . ".";
$pageKeywords = "реставрация обуви Москва, реставрация обуви Loro Piana, восстановление обуви премиум, ремонт дорогой обуви цена, MANDO MEMORI";
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
      <span class="svc-hero-badge svc-hero-badge--hit">🔥 ХИТ ПРОДАЖ · вернём вид бутика</span>
      <h1 class="svc-hero-title" itemprop="name">Реставрация обуви в Москве — хит №4</h1>
      <p class="svc-hero-desc" itemprop="description"><?= $svc['desc'] ?></p>
      <div class="svc-hero-actions">
        <span class="svc-hero-price" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><meta itemprop="priceCurrency" content="RUB"><meta itemprop="url" content="https://mmclean.ru/product/restoration"><span itemprop="price"><?= $priceRaw ?></span> ₽ <small>за пару</small><meta itemprop="availability" content="https://schema.org/InStock"><span itemprop="hasMerchantReturnPolicy" itemscope itemtype="https://schema.org/MerchantReturnPolicy"><meta itemprop="applicableCountry" content="RU"><meta itemprop="returnPolicyCategory" content="https://schema.org/MerchantReturnFiniteReturnWindow"><meta itemprop="merchantReturnDays" content="14"><meta itemprop="returnMethod" content="https://schema.org/ReturnByMail"><meta itemprop="returnFees" content="https://schema.org/FreeReturn"></span><span itemprop="shippingDetails" itemscope itemtype="https://schema.org/OfferShippingDetails"><span itemprop="shippingDestination" itemscope itemtype="https://schema.org/DefinedRegion"><meta itemprop="addressCountry" content="RU"></span><span itemprop="shippingRate" itemscope itemtype="https://schema.org/MonetaryAmount"><meta itemprop="value" content="0"><meta itemprop="currency" content="RUB"></span><span itemprop="deliveryTime" itemscope itemtype="https://schema.org/ShippingDeliveryTime"><span itemprop="handlingTime" itemscope itemtype="https://schema.org/QuantitativeValue"><meta itemprop="minValue" content="0"><meta itemprop="maxValue" content="1"><meta itemprop="unitCode" content="DAY"></span><span itemprop="transitTime" itemscope itemtype="https://schema.org/QuantitativeValue"><meta itemprop="minValue" content="1"><meta itemprop="maxValue" content="2"><meta itemprop="unitCode" content="DAY"></span></span><meta itemprop="shippingOrigin" content="RU"></span></span>
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
              Написать в Telegram — оценка за 5 мин
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
      <h2 class="svc-section-title">Реставрация обуви в Москве — вернём былой вид</h2>
      <div class="svc-content-text">
        <p>Мастерская MANDO MEMORI предлагает профессиональную реставрацию обуви в Москве. После активной носки на обуви появляются царапины, потёртости, заломы, повреждаются швы и фурнитура. Наши мастера восстанавливают любые дефекты, возвращая обуви эстетичный вид и продлевая срок её службы.</p>
        <p>Реставрация обуви включает устранение царапин и потёртостей, восстановление цвета и структуры кожи, ремонт швов и молний, замену фурнитуры. Мы работаем с кожаной, замшевой, лаковой и текстильной обувью любых брендов.</p>
        <p>Особое внимание уделяем премиум-сегменту: Loro Piana, Gucci, Prada, Hermès. Используем оригинальные красители и финишные покрытия, чтобы цвет и текстура максимально соответствовали заводским.</p>
        <p>Реставрация обуви в Москве от MANDO MEMORI — это не просто маскировка дефектов, а полное восстановление с гарантией качества.</p>
      </div>
    </div>
  </section>
  <section class="svc-faq-section" itemscope itemtype="https://schema.org/FAQPage">
    <div class="container">
      <h2 class="svc-section-title">Часто задаваемые вопросы о реставрации обуви</h2>
      <div class="svc-faq-list">
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Сколько стоит реставрация обуви?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Стоимость реставрации обуви — от 6 490 ₽. Цена зависит от объёма работ: сложности царапин, необходимости восстановления цвета, ремонта швов или замены фурнитуры. Точную стоимость определяем после осмотра.</p>
          </div>
        </div>
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Какие дефекты можно устранить реставрацией?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Реставрация устраняет царапины, потёртости, заломы, восстанавливает цвет, ремонтирует швы, молнии, фурнитуру. Также восстанавливаем форму обуви и удаляем поверхностные загрязнения.</p>
          </div>
        </div>
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Сколько времени занимает реставрация обуви?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Стандартная реставрация обуви занимает 3-7 дней. Сложные случаи (глубокая реставрация цвета, замена фурнитуры) могут требовать до 10 дней. Мы всегда сообщаем точные сроки после оценки.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="svc-cta-section">
    <div class="container">
      <h2>🔥 Царапины и потёртости? Реставрация — хит!</h2>
      <p>Пришлите фото обуви в Telegram — оценим повреждения и назовём цену за 5 минут. Или позвоните — проконсультируем сразу.</p>
      <div class="svc-cta-row">
        <a href="/order" class="svc-cta-btn">Передать обувь</a>
        <a href="tel:+79161829272" class="svc-cta-phone">Позвонить</a>
        <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=svc_cta_<?= $slug ?>" target="_blank" rel="noopener" class="svc-cta-tg" data-tg="svc_cta_<?= $slug ?>">Написать в Telegram</a>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../../../partials/footer.php'; ?>
