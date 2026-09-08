<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/', 'priority' => '1.0', 'changefreq' => 'daily', 'index' => 'main'];

$pageTitle = $pageTitle ?? 'Замена и отбеливание подошвы Loro Piana в Москве — ХИТ | Реставрация сумок | MANDO MEMORI';
$delivery = \Setting\Route\Function\Functions::deliveryNote();
$pageDesc = $pageDesc ?? 'ХИТ ПРОДАЖ: замена подошвы Loro Piana от 18 990 ₽, отбеливание подошвы Loro Piana от 10 990 ₽, реставрация сумок Hermès/Chanel от 7 990 ₽, реставрация обуви от 6 490 ₽. Премиальная мастерская в Москве. ' . $delivery . '. Оценка по фото за 5 минут.';
$pageKeywords = $pageKeywords ?? 'замена подошвы Loro Piana Москва, отбеливание подошвы Loro Piana, отбеливание подошвы кроссовок Москва, реставрация сумок Москва, реставрация сумок Hermès Chanel, реставрация обуви Loro Piana, химчистка Loro Piana, MANDO MEMORI';
$canonical = $_SERVER['REQUEST_URI'] ?? '/';
echo '<link rel="preload" as="image" href="/public/assets/images/mandomemori/hero-poster.jpg" fetchpriority="high">';
require __DIR__ . '/../../partials/header.php';
?>

<main class="main">
  <div class="premium-notice">
    <span class="premium-notice__badge">ТОЛЬКО ПРЕМИУМ</span>
    <span class="premium-notice__text">Работаем только с дорогой премиальной обувью и аксессуарами — Loro Piana, Hermès, Berluti, John Lobb, Gucci, Louis Vuitton и др. <span class="premium-notice__sub">Обычную обувь и кроссовки из масс-маркета не принимаем</span></span>
    <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=premium_notice" target="_blank" rel="noopener" class="premium-notice__cta" data-tg="premium_notice">Уточнить →</a>
  </div>
  <section class="scroll-hero" id="scroll-hero">
    <div class="scroll-hero__sticky">
      <video class="scroll-hero__video" id="scroll-hero-video" src="/public/assets/images/mandomemori/heroBG.mp4" data-src-desktop="/public/assets/images/mandomemori/heroBG.mp4" data-src-mobile="/public/assets/images/mandomemori/heroBG.mp4" muted playsinline webkit-playsinline preload="metadata" poster="/public/assets/images/mandomemori/hero-poster.jpg">
        <track kind="captions" src="/public/assets/video/hero-captions.vtt" srclang="ru" label="Русский" default>
      </video>
      <div class="scroll-hero__overlay"></div>
      <div class="scroll-hero__loader" id="scroll-hero-loader">
        <div class="scroll-hero__spinner"></div>
      </div>
      <div class="scroll-hero__content">
        <p class="hero-eyebrow">Loro Piana · Hermès · Berluti · John Lobb · Gucci · Louis Vuitton · Только люкс</p>
        <h1 class="scroll-hero__heading">
          <span class="scroll-hero__word" id="scroll-hero-word">Loro Piana</span>
          <span class="scroll-hero__rest">останется как новая</span>
        </h1>
        <p class="hero-sub">Премиальная мастерская. Ручная работа. Масс-маркет не обслуживаем.</p>
        <div class="hero-cta-group">
          <a class="btn-accent hero-cta" href="/order">Вызвать курьера</a>
          <a class="btn-tg hero-cta-tg" href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=hero" target="_blank" rel="noopener" data-tg="hero">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20.665 3.717l-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z"/></svg>
            Оценить люкс по фото — 5 мин
          </a>
        </div>
        <p class="hero-cta-hint">Ответим за 5 минут · Бесплатно · Только премиум-сегмент</p>
      </div>
    </div>
  </section>

  <section class="counter-section" style="background: linear-gradient(135deg, #D4562A 0%, #E87A3E 100%); color: #ffffff; min-height: 40vh;">
    <div class="counter-inner">
      <span class="counter-number" data-target="1105603">0</span>
      <p class="counter-caption">ОЧИЩЕНО ПАР ОБУВИ</p>
    </div>
  </section>

  <div class="trust-bar" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
    <meta itemprop="ratingValue" content="4.9">
    <meta itemprop="bestRating" content="5">
    <meta itemprop="worstRating" content="1">
    <meta itemprop="ratingCount" content="1500">
    <div class="trust-item">
      <div class="trust-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
      </div>
      <div class="trust-text">
        <span class="trust-value">10 000+</span>
        <span class="trust-label">Довольных клиентов</span>
      </div>
    </div>
    <div class="trust-item">
      <div class="trust-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
      </div>
      <div class="trust-text">
        <span class="trust-value">9 лет</span>
        <span class="trust-label">На рынке</span>
      </div>
    </div>
    <div class="trust-item">
      <div class="trust-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2l3 6 6 .5-4.5 4.5L18 20l-6-3-6 3 1.5-7L3 8.5 9 8z"/></svg>
      </div>
      <div class="trust-text">
        <span class="trust-value">4.9 ★</span>
        <span class="trust-label">Средняя оценка</span>
      </div>
    </div>
    <div class="trust-item">
      <div class="trust-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20 7l-8 9-4-4"/></svg>
      </div>
      <div class="trust-text">
        <span class="trust-value">100%</span>
        <span class="trust-label">Гарантия качества</span>
      </div>
    </div>
  </div>

  <section class="about-steps" itemscope itemtype="https://schema.org/HowTo">
    <meta itemprop="name" content="Как мы работаем — MANDO MEMORI">
    <div class="about-steps__content">
      <h2 class="about-steps__heading">Как мы работаем</h2>
      <div class="about-steps__list">
        <div class="about-step" itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
          <span class="about-step__num" itemprop="position">1</span>
          <div class="about-step__body">
            <h3 class="about-step__title" itemprop="name">Собираете заказ</h3>
            <p class="about-step__desc" itemprop="text">Выбираете услуги, указываете количество пар — добавляете в корзину на сайте.</p>
          </div>
        </div>
        <div class="about-step" itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
          <span class="about-step__num" itemprop="position">2</span>
          <div class="about-step__body">
            <h3 class="about-step__title" itemprop="name">Получаете чек</h3>
            <p class="about-step__desc" itemprop="text">Система формирует PDF-чек с деталями заказа — после вызова курьера он придёт вам на почту.</p>
          </div>
        </div>
        <div class="about-step" itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
          <span class="about-step__num" itemprop="position">3</span>
          <div class="about-step__body">
            <h3 class="about-step__title" itemprop="name">Передаёте обувь</h3>
            <p class="about-step__desc" itemprop="text">Вызываете курьера — у него уже есть данные заказа, остаётся только отдать обувь. <?= htmlspecialchars($delivery) ?>.</p>
          </div>
        </div>
        <div class="about-step" itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
          <span class="about-step__num" itemprop="position">4</span>
          <div class="about-step__body">
            <h3 class="about-step__title" itemprop="name">Мы выполняем работу</h3>
            <p class="about-step__desc" itemprop="text">Мастер приступает к чистке по вашему заказу — оплата только после выполнения работы, по факту.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="home-products-section" itemscope itemtype="https://schema.org/ItemList">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">🔥 Хиты продаж — <span style="color:#D4562A">замена и отбеливание Loro Piana</span>, реставрация сумок</h2>
        <p class="section-subtitle">Максимальный спрос: замена подошвы Loro Piana, отбеливание подошвы Loro Piana, реставрация сумок Hermès/Chanel/LV и реставрация обуви. Для премиальной обуви и аксессуаров. Масс-маркет (Zara, H&M, Kari и т.п.) не обслуживаем.</p>
        <div class="premium-inline">
          <span class="premium-inline__dot">◆</span>
          <span>Принимаем только премиум — кожа крокодила, кашемир, замша и нубук люкс-брендов</span>
          <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=qualifier_inline" target="_blank" rel="noopener" data-tg="qualifier_inline">Проверить пару →</a>
        </div>
        <div class="premium-brands-strip">Loro Piana · Brioni · Kiton · Berluti · John Lobb · Hermès · Gucci · Prada · Louis Vuitton · Chanel · Dior · Bottega Veneta · Saint Laurent</div>
      </div>
    </div>
    <div class="cards-slider" id="products-slider">
      <div class="cards">
        <?php
        $allServices = Functions::getServices();
        // Хиты первыми
        uasort($allServices, fn($a, $b) => (!empty($b['is_hit']) <=> !empty($a['is_hit'])) ?: (($a['hit_order'] ?? 99) <=> ($b['hit_order'] ?? 99)));
        $position = 0;
        foreach ($allServices as $id => $p):
        $position++; ?>
        <article class="product-card<?= $p['dark'] ? ' dark-bg' : '' ?><?= !empty($p['is_hit']) ? ' product-card--hit' : '' ?>" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" style="background:<?= $p['bg'] ?>">
          <?php if (!empty($p['badge'])): ?><span class="product-card__hit-badge"><?= htmlspecialchars($p['badge']) ?></span><?php endif; ?>
          <meta itemprop="position" content="<?= $position ?>">
          <div itemprop="item" itemscope itemtype="https://schema.org/Service">
            <span itemprop="brand" itemscope itemtype="https://schema.org/Brand"><meta itemprop="name" content="MANDO MEMORI"></span>
            <meta itemprop="description" content="<?= htmlspecialchars($p['desc']) ?>">
            <span itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating"><meta itemprop="ratingValue" content="4.9"><meta itemprop="bestRating" content="5"><meta itemprop="worstRating" content="1"><meta itemprop="ratingCount" content="1500"></span>
            <span itemprop="review" itemscope itemtype="https://schema.org/Review"><span itemprop="author" itemscope itemtype="https://schema.org/Person"><meta itemprop="name" content="Анна"></span><meta itemprop="datePublished" content="2026-06-15"><span itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating"><meta itemprop="ratingValue" content="5"><meta itemprop="bestRating" content="5"></span><meta itemprop="reviewBody" content="Отличный сервис! Обувь как новая, очень довольна результатом."></span>
          <div class="product-card-text">
            <h2 class="product-card-title" itemprop="name"><?= $p['title'] ?></h2>
            <p class="product-card-desc" itemprop="offers" itemscope itemtype="https://schema.org/Offer">от <meta itemprop="price" content="<?= $p['price'] ?>"><span><?= $p['price_formatted'] ?></span> <meta itemprop="priceCurrency" content="RUB"> <?= $p['unit'] ?? 'за пару' ?><meta itemprop="availability" content="https://schema.org/InStock"><span itemprop="hasMerchantReturnPolicy" itemscope itemtype="https://schema.org/MerchantReturnPolicy"><meta itemprop="applicableCountry" content="RU"><meta itemprop="returnPolicyCategory" content="https://schema.org/MerchantReturnFiniteReturnWindow"><meta itemprop="merchantReturnDays" content="14"><meta itemprop="returnMethod" content="https://schema.org/ReturnByMail"><meta itemprop="returnFees" content="https://schema.org/FreeReturn"></span><span itemprop="shippingDetails" itemscope itemtype="https://schema.org/OfferShippingDetails"><span itemprop="shippingDestination" itemscope itemtype="https://schema.org/DefinedRegion"><meta itemprop="addressCountry" content="RU"></span><span itemprop="shippingRate" itemscope itemtype="https://schema.org/MonetaryAmount"><meta itemprop="value" content="0"><meta itemprop="currency" content="RUB"></span><span itemprop="deliveryTime" itemscope itemtype="https://schema.org/ShippingDeliveryTime"><span itemprop="handlingTime" itemscope itemtype="https://schema.org/QuantitativeValue"><meta itemprop="minValue" content="0"><meta itemprop="maxValue" content="1"><meta itemprop="unitCode" content="DAY"></span><span itemprop="transitTime" itemscope itemtype="https://schema.org/QuantitativeValue"><meta itemprop="minValue" content="1"><meta itemprop="maxValue" content="2"><meta itemprop="unitCode" content="DAY"></span></span><meta itemprop="shippingOrigin" content="RU"></span></p>
          </div>
          <div class="product-card-image">
            <img src="/public/assets/images/<?= $p['img'] ?>" alt="<?= $p['title'] ?>" itemprop="image" loading="lazy" width="487" height="324">
          </div>
          <div class="product-card-action">
            <a href="/product/<?= $p['slug'] ?>" itemprop="url" class="product-card-btn product-card-btn-detail">Подробнее</a>
            <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=card_<?= $p['slug'] ?>" target="_blank" rel="noopener" class="product-card-btn product-card-btn-tg" data-tg="card_<?= $p['slug'] ?>">Заказать через Телеграм</a>
          </div>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="portfolio-slider-section">
    <div class="portfolio-slider-header">
      <h2 class="portfolio-slider-title">Наши работы</h2>
    </div>
    <div class="portfolio-slider-track" id="portfolio-slider">
      <?php
      $portfolio = [
        'beforeafter1.png','beforeafter2.png','beforeafter3.png','beforeafter4.png',
        'beforeafter5.jpg','beforeafter6.jpg','beforeafter7.jpg','beforeafter8.jpg',
        'beforeafter9.png','beforeafter10.png','beforeafter11.png','beforeafter12.png',
        'beforeafter13.png','beforeafter14.png','beforeafter15.png',
      ];
      // Original + first 4 appended for seamless loop
      foreach (array_merge($portfolio, array_slice($portfolio, 0, 4)) as $img): ?>
      <div class="portfolio-slide">
        <img src="/public/assets/images/mandomemori/<?= $img ?>" alt="MANDO MEMORI — до и после химчистки" loading="lazy" draggable="false" width="595" height="595">
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <div class="container">
    <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=trust_compact" target="_blank" rel="noopener" class="tg-compact" data-tg="trust_compact">
      <span class="tg-compact__icon">✦</span>
      <span class="tg-compact__text">Пришлите фото люкса в Telegram — назовём цену за 5 минут, бесплатно</span>
      <span class="tg-compact__btn">Написать</span>
    </a>
  </div>

  <section class="home-faq-section" itemscope itemtype="https://schema.org/FAQPage">
    <div class="home-faq-header">
      <h2 class="home-faq-title">Часто задаваемые вопросы о химчистке обуви</h2>
      <p class="home-faq-subtitle">Только для премиальной обуви и аксессуаров — масс-маркет не обслуживаем</p>
    </div>
    <div class="home-faq-grid">
      <div class="home-faq-card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="home-faq-question" itemprop="name">Сколько стоит химчистка обуви в Москве?</h3>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
          <div class="home-faq-answer" itemprop="text">Стоимость химчистки обуви в нашей мастерской — <strong>от 5 990 ₽ за пару</strong>. Цена зависит от материала, сложности загрязнений и состояния обуви. <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=faq_price" target="_blank" rel="noopener" data-tg="faq_price" style="color:#229ED9;font-weight:600;text-decoration:underline">Пришлите фото в Telegram — оценим стоимость работы бесплатно за 5 минут →</a></div>
        </div>
      </div>
      <div class="home-faq-card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="home-faq-question" itemprop="name">Сколько времени занимает химчистка обуви?</h3>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
          <div class="home-faq-answer" itemprop="text">Ручная химчистка премиальной обуви занимает <strong>от 1 до 6 дней</strong> в зависимости от материала и сложности. Срочная обработка возможна за 1 день.</div>
        </div>
      </div>
      <div class="home-faq-card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="home-faq-question" itemprop="name">Вы забираете обувь на химчистку с доставкой?</h3>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
          <div class="home-faq-answer" itemprop="text">Да, предлагаем химчистку обуви с доставкой по Москве. Наш курьер приедет к вам, заберёт обувь и вернёт её чистой. <strong><?= htmlspecialchars($delivery) ?></strong>.</div>
        </div>
      </div>
      <div class="home-faq-card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="home-faq-question" itemprop="name">Какие бренды обуви вы принимаете на химчистку?</h3>
        <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
          <div class="home-faq-answer" itemprop="text">Специализируемся на премиальном сегменте: <strong>Loro Piana, Hermès, Berluti, John Lobb, Gucci, Prada, Louis Vuitton, Balenciaga, Christian Louboutin</strong>. Каждая пара получает индивидуальный подход с учётом материала и конструкции. Масс-маркет не обслуживаем.</div>
        </div>
      </div>
    </div>
  </section>

  <section class="tg-inline-cta">
    <div class="container">
      <div class="tg-inline-cta__card tg-inline-cta__card--premium">
        <div class="tg-inline-cta__text">
          <h3>Ваша пара — премиум? Проверим за 5 минут</h3>
          <p>Пришлите фото + бренд в Telegram. Если это премиум/люкс — назовём цену. Если масс-маркет — честно откажем и сэкономим ваше время.</p>
        </div>
        <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=inline_mid" target="_blank" rel="noopener" class="tg-inline-cta__btn" data-tg="inline_mid">Проверить в Telegram</a>
      </div>
    </div>
  </section>

  <section class="hstack-section">
    <div class="hstack-track">
      <?php
      $hcards = [
        ['img' => 'чистка со спреем.jpg', 'title1' => 'Деликатная сушка', 'desc1' => 'Сушим обувь при низких температурах с сохранением формы и свойств материалов.', 'title2' => 'Финальный контроль', 'desc2' => 'Проверяем каждую пару перед выдачей: чистота, цвет, состояние — всё соответствует стандарту.'],
        ['img' => 'мастер чистка.jpg', 'title1' => 'Бережная чистка', 'desc1' => 'Индивидуальный подбор составов и технологии обработки для каждого типа материала.', 'title2' => 'Уход за кожей и замшей', 'desc2' => 'Натуральные материалы проходят щадящую очистку с питанием и восстановлением структуры.'],
        ['img' => 'средства.jpg', 'title1' => 'Удаление загрязнений', 'desc1' => 'Эффективно справляемся с застарелыми пятнами, следами реагентов и стойкими разводами.', 'title2' => 'Формовка и силуэт', 'desc2' => 'Возвращаем обуви аккуратную форму, расправляем заломы и складки.'],
        ['img' => 'обувь.jpg', 'title1' => 'Обновление подошвы', 'desc1' => 'Восстанавливаем белизну и цвет подошвы с помощью профессиональных составов.', 'title2' => 'Реставрация покрытия', 'desc2' => 'Маскируем потёртости, царапины и обновляем цвет кожаных поверхностей.'],
        ];
      foreach ($hcards as $hc): ?>
      <div class="hstack-item" style="--card-bg: #1C1512; --card-text: #fff;">
        <div class="hstack-card">
          <div class="hstack-inner">
            <div class="hstack-img">
              <img src="/public/assets/images/mandomemori/<?= $hc['img'] ?>" alt="" loading="lazy" width="520" height="350">
            </div>
            <div class="hstack-text">
              <div class="hstack-utp">
                <h2 class="hstack-title"><?= $hc['title1'] ?></h2>
                <div class="hstack-desc"><?= $hc['desc1'] ?></div>
              </div>
              <div class="hstack-utp hstack-utp--next">
                <h2 class="hstack-title"><?= $hc['title2'] ?></h2>
                <div class="hstack-desc"><?= $hc['desc2'] ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="hstack-dots">
      <button class="hstack-dot active" data-index="0" aria-label="Слайд 1: Доверенная химчистка"></button>
      <button class="hstack-dot" data-index="1" aria-label="Слайд 2: Профессиональное оборудование"></button>
      <button class="hstack-dot" data-index="2" aria-label="Слайд 3: Эко-составы"></button>
      <button class="hstack-dot" data-index="3" aria-label="Слайд 4: Доставка и удобство"></button>
    </div>
  </section>

</main>

<div class="modal-overlay" id="modal-overlay">
  <div class="modal" id="modal">
    <button class="modal-close" id="modal-close">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
    </button>
    <div class="modal-content" id="modal-content"></div>
  </div>
</div>

<script>
  window.__services = [];
  window.__serviceGroups = [];
</script>

<script src="/public/assets/js/mandomemori/scroll-hero.js" defer></script>
<script src="/public/assets/js/mandomemori/counter.js" defer></script>
<script src="/public/assets/js/mandomemori/home-cards.js" defer></script>
<script src="/public/assets/js/mandomemori/cards-slider.js" defer></script>
<script src="/public/assets/js/mandomemori/portfolio-slider.js" defer></script>

<div class="bottom-cta" id="bottom-cta" aria-hidden="true">
  <a class="bottom-cta__btn bottom-cta__btn--phone" href="tel:+79161829272">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
    Позвонить
  </a>
  <a class="bottom-cta__btn bottom-cta__btn--tg" href="https://t.me/maksim1144" target="_blank" rel="noopener">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20.665 3.717l-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z"/></svg>
    Пришлите фото
  </a>
</div>

<script>
(function () {
  var bar = document.getElementById('bottom-cta');
  if (!bar) return;

  function syncCookie() {
    var cookie = document.getElementById('cookie-banner');
    var visible = cookie && cookie.style.display !== 'none' && getComputedStyle(cookie).display !== 'none';
    bar.style.bottom = visible ? (cookie.offsetHeight + 12) + 'px' : '0px';
  }

  var shown = false;
  function onScroll() {
    if (window.scrollY > 500) {
      if (!shown) { bar.classList.add('bottom-cta--visible'); bar.setAttribute('aria-hidden', 'false'); shown = true; }
    } else if (shown) {
      bar.classList.remove('bottom-cta--visible'); bar.setAttribute('aria-hidden', 'true'); shown = false;
    }
    syncCookie();
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  window.addEventListener('resize', syncCookie);
  var accept = document.getElementById('cookie-accept');
  if (accept) accept.addEventListener('click', function () { setTimeout(syncCookie, 320); });
  syncCookie();
  onScroll();
})();
</script>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
