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
$pageTitle = "🔥 Отбеливание подошвы Loro Piana в Москве от 10 990 ₽ — ХИТ | MANDO MEMORI";
$ogImage = '/public/assets/images/' . $svc['img'];
$pageDesc = "ХИТ ПРОДАЖ: отбеливание пожелтевшей подошвы Loro Piana в Москве от 10 990 ₽. Убираем желтизну, возвращаем белоснежный вид за 3-7 дней. Оценка по фото за 5 минут. " . \Setting\Route\Function\Functions::deliveryNote() . ".";
$pageKeywords = "отбеливание подошвы Loro Piana Москва, отбеливание подошвы кроссовок Москва, пожелтела подошва что делать, отбеливание подошвы цена, MANDO MEMORI";
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
      <span class="svc-hero-badge svc-hero-badge--hit">🔥 ХИТ ПРОДАЖ · убираем желтизну</span>
      <h1 class="svc-hero-title" itemprop="name">Отбеливание подошвы Loro Piana в Москве — хит №2</h1>
      <p class="svc-hero-desc" itemprop="description"><?= $svc['desc'] ?></p>
      <div class="svc-hero-actions">
        <span class="svc-hero-price" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><meta itemprop="priceCurrency" content="RUB"><meta itemprop="url" content="https://mmclean.ru/product/whitening"><span itemprop="price"><?= $priceRaw ?></span> ₽ <small>за пару</small><meta itemprop="availability" content="https://schema.org/InStock"><span itemprop="hasMerchantReturnPolicy" itemscope itemtype="https://schema.org/MerchantReturnPolicy"><meta itemprop="applicableCountry" content="RU"><meta itemprop="returnPolicyCategory" content="https://schema.org/MerchantReturnFiniteReturnWindow"><meta itemprop="merchantReturnDays" content="14"><meta itemprop="returnMethod" content="https://schema.org/ReturnByMail"><meta itemprop="returnFees" content="https://schema.org/FreeReturn"></span><span itemprop="shippingDetails" itemscope itemtype="https://schema.org/OfferShippingDetails"><span itemprop="shippingDestination" itemscope itemtype="https://schema.org/DefinedRegion"><meta itemprop="addressCountry" content="RU"></span><span itemprop="shippingRate" itemscope itemtype="https://schema.org/MonetaryAmount"><meta itemprop="value" content="0"><meta itemprop="currency" content="RUB"></span><span itemprop="deliveryTime" itemscope itemtype="https://schema.org/ShippingDeliveryTime"><span itemprop="handlingTime" itemscope itemtype="https://schema.org/QuantitativeValue"><meta itemprop="minValue" content="0"><meta itemprop="maxValue" content="1"><meta itemprop="unitCode" content="DAY"></span><span itemprop="transitTime" itemscope itemtype="https://schema.org/QuantitativeValue"><meta itemprop="minValue" content="1"><meta itemprop="maxValue" content="2"><meta itemprop="unitCode" content="DAY"></span></span><meta itemprop="shippingOrigin" content="RU"></span></span>
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
      <h2 class="svc-section-title">Отбеливание подошвы кроссовок в Москве</h2>
      <div class="svc-content-text">
        <p>Мастерская MANDO MEMORI предлагает профессиональное отбеливание подошвы обуви в Москве. Со временем подошва кроссовок желтеет из-за окисления резины, ультрафиолета и воздействия реагентов. Наши мастера используют специальные составы, которые безопасно удаляют желтизну и возвращают подошве белоснежный вид.</p>
        <p>Особое внимание мы уделяем обуви Loro Piana — бренда, который славится своими уникальными материалами и технологиями. Отбеливание подошвы Loro Piana требует деликатного подхода: мы используем только оригинальные восстановительные составы, рекомендованные производителем.</p>
        <p>Процесс отбеливания включает очистку подошвы, нанесение отбеливающего состава, выдерживание и фиксацию результата защитным покрытием. Результат сохраняется надолго при правильном уходе.</p>
        <p>Отбеливание подошвы кроссовок также доступно для Nike, Adidas, New Balance, Asics и других брендов.</p>
      </div>
    </div>
  </section>
  <section class="svc-faq-section" itemscope itemtype="https://schema.org/FAQPage">
    <div class="container">
      <h2 class="svc-section-title">Часто задаваемые вопросы об отбеливании подошвы</h2>
      <div class="svc-faq-list">
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Сколько стоит отбеливание подошвы кроссовок?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Стоимость отбеливания подошвы — от 10 990 ₽. Цена зависит от степени пожелтения, материала подошвы и бренда обуви. Для Loro Piana используется специальная технология, включённая в стоимость.</p>
          </div>
        </div>
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Почему желтеет подошва кроссовок?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Подошва желтеет из-за окисления резины при контакте с воздухом и ультрафиолетом, а также из-за воздействия дорожных реагентов и неправильного хранения. Это естественный процесс, который легко обратим с помощью профессионального отбеливания.</p>
          </div>
        </div>
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Как надолго хватает отбеливания подошвы?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">При правильном уходе результат отбеливания сохраняется от 3 до 6 месяцев. Рекомендуем использовать водоотталкивающую пропитку и избегать агрессивных моющих средств.</p>
          </div>
        </div>
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Какие кроссовки можно отбелить?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Мы отбеливаем подошву любых кроссовок: Nike, Adidas, New Balance, Asics, Yeezy, Balenciaga и других. Метод отбеливания подбирается индивидуально под тип резины подошвы.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="svc-cta-section">
    <div class="container">
      <h2>🔥 Пожелтела подошва Loro Piana? Вернём белизну!</h2>
      <p>Пришлите фото подошвы в Telegram — оценим степень желтизны и назовём цену за 5 минут. Или позвоните — проконсультируем сразу.</p>
      <div class="svc-cta-row">
        <a href="/order" class="svc-cta-btn">Передать обувь</a>
        <a href="tel:+79161829272" class="svc-cta-phone">Позвонить</a>
        <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=svc_cta_<?= $slug ?>" target="_blank" rel="noopener" class="svc-cta-tg" data-tg="svc_cta_<?= $slug ?>">Написать в Telegram</a>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../../../partials/footer.php'; ?>
