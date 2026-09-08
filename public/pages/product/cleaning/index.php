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
$pageTitle = "Чистка премиальной обуви в Москве от 5 990 ₽ — Loro Piana, Hermès, Berluti | MANDO MEMORI";
$ogImage = '/public/assets/images/' . $svc['img'];
$pageDesc = "Чистка премиальной обуви Loro Piana, Hermès, Berluti, John Lobb, Gucci, Louis Vuitton в Москве от 5 990 ₽. Ручная химистка, восстановление формы и цвета, пропитка. Бесплатная оценка по фото за 5 минут. " . \Setting\Route\Function\Functions::deliveryNote() . ".";
$pageKeywords = "чистка обуви Москва, химчистка обуви Москва, чистка Loro Piana, чистка Hermès, чистка Berluti, химчистка премиальной обуви, чистка кожаной обуви, чистка замши, MANDO MEMORI";
$currentSlug = $slug;
$canonical = $_SERVER['REQUEST_URI'] ?? '/product/' . $slug;
require __DIR__ . '/../../../partials/header.php';
?>
<main class="main svc-page svc-cleaning">
  <div id="svc-progress" aria-hidden="true"></div>
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
    <div class="svc-hero-bg" id="svc-hero-bg" style="background-image:url('/public/assets/images/<?= $svc['img'] ?>')"></div>
    <meta itemprop="image" content="https://mmclean.ru/public/assets/images/<?= $svc['img'] ?>">
    <div class="svc-hero-overlay"></div>
    <div class="container svc-hero-content">
      <span class="svc-hero-badge">✨ Премиум-чистка · Loro Piana / Hermès / Berluti</span>
      <h1 class="svc-hero-title" itemprop="name">Чистка премиальной обуви в Москве</h1>
      <p class="svc-hero-desc" itemprop="description"><?= $svc['desc'] ?></p>
      <div class="svc-hero-actions">
        <span class="svc-hero-price" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><meta itemprop="priceCurrency" content="RUB"><meta itemprop="url" content="https://mmclean.ru/product/cleaning"><span itemprop="price"><?= $priceRaw ?></span> ₽ <small>за пару</small><meta itemprop="availability" content="https://schema.org/InStock"><span itemprop="hasMerchantReturnPolicy" itemscope itemtype="https://schema.org/MerchantReturnPolicy"><meta itemprop="applicableCountry" content="RU"><meta itemprop="returnPolicyCategory" content="https://schema.org/MerchantReturnFiniteReturnWindow"><meta itemprop="merchantReturnDays" content="14"><meta itemprop="returnMethod" content="https://schema.org/ReturnByMail"><meta itemprop="returnFees" content="https://schema.org/FreeReturn"></span><span itemprop="shippingDetails" itemscope itemtype="https://schema.org/OfferShippingDetails"><span itemprop="shippingDestination" itemscope itemtype="https://schema.org/DefinedRegion"><meta itemprop="addressCountry" content="RU"></span><span itemprop="shippingRate" itemscope itemtype="https://schema.org/MonetaryAmount"><meta itemprop="value" content="0"><meta itemprop="currency" content="RUB"></span><span itemprop="deliveryTime" itemscope itemtype="https://schema.org/ShippingDeliveryTime"><span itemprop="handlingTime" itemscope itemtype="https://schema.org/QuantitativeValue"><meta itemprop="minValue" content="0"><meta itemprop="maxValue" content="1"><meta itemprop="unitCode" content="DAY"></span><span itemprop="transitTime" itemscope itemtype="https://schema.org/QuantitativeValue"><meta itemprop="minValue" content="1"><meta itemprop="maxValue" content="2"><meta itemprop="unitCode" content="DAY"></span></span><meta itemprop="shippingOrigin" content="RU"></span></span>
        <a href="#svc-order" class="svc-hero-btn svc-hero-btn--pulse">Заказать чистку</a>
        <a href="tel:+79161829272" class="svc-hero-call">Позвонить</a>
        <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=svc_cleaning_hero" target="_blank" rel="noopener" class="svc-hero-tg" data-tg="svc_cleaning_hero">Пришлите фото в Telegram</a>
      </div>
      <p class="svc-hero-trust">★ 4.9 · 10 000+ пар · ответ за 5 минут · оплата после работы</p>
    </div>
  </section>
  <!-- Лид-полоса: скролл-триггер -->
  <section class="svc-strip reveal">
    <div class="container svc-strip__inner">
      <div class="svc-strip__stat"><strong data-count="10000">0</strong><span>пар очищено</span></div>
      <div class="svc-strip__stat"><strong data-count="9">0</strong><span>лет мастерской</span></div>
      <div class="svc-strip__stat"><strong>4.9 ★</strong><span>средняя оценка</span></div>
      <div class="svc-strip__stat"><strong>5 мин</strong><span>оценка по фото</span></div>
      <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=svc_cleaning_strip" target="_blank" rel="noopener" class="svc-strip__btn" data-tg="svc_cleaning_strip">Прислать фото →</a>
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
              Заказать в Telegram
            </a>
          </div>
          <a href="/order" class="svc-order-link">Заказать услугу →</a>
        </div>
      </div>
    </div>
  </section>
  <section class="svc-content-section reveal">
    <div class="container">
      <h2 class="svc-section-title">Чистка премиальной обуви в Москве — как мы работаем</h2>
      <div class="svc-content-text">
        <p>Мастерская MANDO MEMORI предлагает профессиональную химчистку обуви в Москве. Мы работаем с любыми материалами: кожа, замша, нубук, текстиль, лак. Каждая пара проходит полный цикл очистки — от наружной чистки до внутренней дезинфекции и водоотталкивающей пропитки.</p>
        <p>Наши мастера используют профессиональные средства ведущих мировых брендов (Saphir, Tarrago, Collonil), которые бережно удаляют загрязнения, не повреждая материал. После химчистки обувь выглядит как новая: исчезают потёртости, возвращается насыщенный цвет, уходит неприятный запах.</p>
        <p>Мы особенно тщательно работаем с премиум-брендами: Loro Piana, Gucci, Prada, Louis Vuitton, Hermès. Деликатные материалы требуют особого подхода, и наши технологи знают, как не навредить дорогой обуви.</p>
        <p>Химчистка обуви с доставкой по Москве — мы приедем к вам, заберём обувь и вернём её чистой и свежей. Работаем по всей Москве.</p>
      </div>
    </div>
  </section>
  <section class="svc-steps-visual reveal" itemscope itemtype="https://schema.org/HowTo">
    <meta itemprop="name" content="Чистка премиальной обуви в Москве — этапы">
    <div class="container">
      <h2 class="svc-section-title">Чистка премиальной обуви — 4 шага к виду «как новая»</h2>
      <p class="svc-section-sub">Листайте вниз — каждый этап открывается по скроллу. На любом шаге можно прислать фото и получить цену за 5 минут.</p>
      <div class="svc-steps-visual__grid">
        <div class="svc-step-v reveal" itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
          <span class="svc-step-v__num">01</span>
          <h3 itemprop="name">Диагностика по фото</h3>
          <p itemprop="text">Присылаете фото в Telegram — технолог определяет материал, загрязнения и риски. Бесплатно, за 5 минут.</p>
        </div>
        <div class="svc-step-v reveal" itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
          <span class="svc-step-v__num">02</span>
          <h3 itemprop="name">Курьер забирает пару</h3>
          <p itemprop="text">Аккуратная упаковка, передача в мастерскую. <?= htmlspecialchars(\Setting\Route\Function\Functions::deliveryNote()) ?>.</p>
        </div>
        <div class="svc-step-v reveal" itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
          <span class="svc-step-v__num">03</span>
          <h3 itemprop="name">Ручная чистка</h3>
          <p itemprop="text">Составы Saphir / Tarrago / Collonil, восстановление формы, цвета, устранение запаха, пропитка.</p>
        </div>
        <div class="svc-step-v reveal" itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
          <span class="svc-step-v__num">04</span>
          <h3 itemprop="name">Контроль и возврат</h3>
          <p itemprop="text">Проверка по чек-листу, фото «после», возврат курьером. Оплата — только после выполнения работы.</p>
        </div>
      </div>
      <div class="svc-steps-visual__cta">
        <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=svc_cleaning_steps" target="_blank" rel="noopener" class="svc-order-tg" data-tg="svc_cleaning_steps">Прислать фото — оценка 5 мин</a>
        <a href="tel:+79161829272" class="svc-order-phone">+7 (916) 182-92-72</a>
      </div>
    </div>
  </section>
  <section class="svc-brands-section reveal">
    <div class="container">
      <h2 class="svc-section-title">Чистка премиальной обуви в Москве — с какими брендами работаем</h2>
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
  <section class="svc-seam reveal" id="seam" itemscope itemtype="https://schema.org/FAQPage">
    <div class="container">
      <div class="svc-seam__card">
        <span class="svc-seam__badge">⚠️ Частая проблема · не шейте сами</span>
        <h2 class="svc-section-title">Разошёлся шов на туфлях — что делать?</h2>
        <p class="svc-section-sub">Разошедшийся шов на премиальных туфлях (Loro Piana, Berluti, John Lobb, Gucci) — это не приговор, но домашний ремонт почти всегда делает хуже: кривая строчка, проколы кожи, клей, который потом приходится вычищать. Вот правильный порядок действий:</p>
        <div class="svc-seam__grid">
          <div class="svc-seam__col svc-seam__col--no">
            <h3>🚫 Чего НЕ делать</h3>
            <ul>
              <li>Не тяните за нитку — шов поползёт дальше</li>
              <li>Не клейте «Моментом» / суперклеем — сжигает кожу и строчку</li>
              <li>Не шейте домашней машинкой — рвёт отверстия и кожу</li>
              <li>Не носите «ещё пару дней» — деформация верха станет необратимой</li>
            </ul>
          </div>
          <div class="svc-seam__col svc-seam__col--yes">
            <h3>✅ Что сделать сейчас</h3>
            <ol>
              <li><strong>Снимите пару</strong> — каждый шаг расширяет разрыв.</li>
              <li><strong>Сфотографируйте шов</strong> крупно + общий вид туфель.</li>
              <li><strong>Пришлите фото нам</strong> в Telegram или <strong>позвоните</strong> — технолог скажет, перестрочка это или нужен усилитель шва, и назовёт цену за 5 минут.</li>
            </ol>
          </div>
        </div>
        <div class="svc-seam__fix">
          <h3>Как чиним мы</h3>
          <p>Аккуратно распарываем повреждённый участок, подбираем нить в тон и толщину оригинала, прошиваем на профессиональной машине по родным проколам, укрепляем шов изнутри, чистим и пропитываем пару. Туфли держат форму, строчка выглядит заводской. Срок — обычно 2–4 дня, часто вместе с чисткой.</p>
        </div>
        <div class="svc-seam__cta">
          <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=svc_cleaning_seam" target="_blank" rel="noopener" class="svc-order-tg" data-tg="svc_cleaning_seam">Прислать фото шва в Telegram</a>
          <a href="tel:+79161829272" class="svc-order-phone">Позвонить мастеру</a>
          <a href="/product/restoration" class="svc-seam__link">Нужна реставрация? Подробнее →</a>
        </div>
        <div class="svc-faq-list" style="margin-top:24px">
          <details class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 itemprop="name">Можно ли носить туфли, если шов только начал расходиться?</h3>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <p itemprop="text">Нет. Нагрузка расходится дальше по строчке и деформирует верх. Чем раньше остановитесь и покажете шов мастеру, тем дешевле и незаметнее будет перестрочка.</p>
            </div>
          </details>
          <details class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 itemprop="name">Сколько стоит зашить разошедшийся шов на туфлях?</h3>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <p itemprop="text">Зависит от длины разрыва, материала и доступа изнутри. Пришлите фото шва в Telegram — оценим за 5 минут. Часто делаем вместе с чисткой премиальной обуви от 5 990 ₽, перестрочка считается отдельно по факту.</p>
            </div>
          </details>
          <details class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 itemprop="name">Почему нельзя заклеить шов суперклеем?</h3>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <p itemprop="text">Суперклей прожигает кожу и нить, оставляет жёсткое пятно и разрушает проколы. После клея перестрочка по родным отверстиям уже невозможна — ремонт становится дороже и заметнее. Просто сфотографируйте и позвоните нам.</p>
            </div>
          </details>
        </div>
      </div>
    </div>
  </section>
  <section class="svc-faq-section reveal" itemscope itemtype="https://schema.org/FAQPage">
    <div class="container">
      <h2 class="svc-section-title">Часто задаваемые вопросы о химчистке обуви</h2>
      <div class="svc-faq-list">
        <details class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Сколько стоит химчистка обуви в Москве?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Стоимость химчистки обуви в нашей мастерской — от 5 990 ₽ за пару. Цена зависит от материала, сложности загрязнений и состояния обуви. Мы предлагаем бесплатную консультацию и оценку.</p>
          </div>
        </details>
        <details class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Сколько времени занимает химчистка обуви?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Обычно химчистка обуви занимает от 1 до 6 дней в зависимости от сложности. Для стандартной чистки кроссовок достаточно 2-3 дней. Также доступна срочная химчистка за 1 день.</p>
          </div>
        </details>
        <details class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Вы забираете обувь на химчистку с доставкой?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Да, мы предлагаем химчистку обуви с доставкой по Москве. Наш курьер приедет к вам, заберёт обувь и вернёт её чистой. Это удобно и бесплатно при заказе от 1 пары.</p>
          </div>
        </details>
        <details class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Какие бренды обуви вы принимаете на химчистку?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Мы работаем с любыми брендами — от масс-маркета до премиум-сегмента: Loro Piana, Gucci, Prada, Louis Vuitton, Hermès, Balenciaga, Nike, Adidas, New Balance и другими. Каждая пара получает индивидуальный подход.</p>
          </div>
        </details>
      </div>
    </div>
  </section>
  <section class="svc-cta-section">
    <div class="container">
      <h2>Чистка премиальной обуви в Москве — отдайте пару экспертам</h2>
      <p>Пришлите фото в Telegram — оценим за 5 минут. Или позвоните — проконсультируем сразу. Оплата после работы.</p>
      <div class="svc-cta-row">
        <a href="/order" class="svc-cta-btn">Передать обувь</a>
        <a href="tel:+79161829272" class="svc-cta-phone">Позвонить</a>
        <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=svc_cta_<?= $slug ?>" target="_blank" rel="noopener" class="svc-cta-tg" data-tg="svc_cta_<?= $slug ?>">Пришлите фото в Telegram</a>
      </div>
    </div>
  </section>
  <!-- Липкая лид-панель при скролле -->
  <div class="svc-sticky" id="svc-sticky" aria-hidden="true">
    <span class="svc-sticky__label">Чистка премиум · от 5 990 ₽</span>
    <a href="tel:+79161829272" class="svc-sticky__phone">Позвонить</a>
    <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=svc_cleaning_sticky" target="_blank" rel="noopener" class="svc-sticky__tg" data-tg="svc_cleaning_sticky">Telegram — 5 мин</a>
    <a href="#svc-order" class="svc-sticky__order">Заказать</a>
  </div>
</main>
<style>
#svc-progress{position:fixed;top:0;left:0;height:3px;width:0;background:linear-gradient(90deg,#ff5a1f,#D4562A);z-index:9999;transition:width .1s}
.svc-hero-call,.svc-hero-tg{display:inline-flex;align-items:center;padding:16px 28px;border-radius:8px;font-weight:700;font-size:.9rem;text-decoration:none;transition:transform .2s}
.svc-hero-call{background:#fff;color:#1C1512}
.svc-hero-tg{background:#229ED9;color:#fff}
.svc-hero-call:hover,.svc-hero-tg:hover{transform:translateY(-2px)}
.svc-hero-btn--pulse{animation:svcPulse 2s infinite}
@keyframes svcPulse{0%,100%{box-shadow:0 0 0 0 rgba(212,86,42,.5)}50%{box-shadow:0 0 0 12px rgba(212,86,42,0)}}
.svc-hero-trust{margin-top:14px;font-size:.85rem;color:rgba(255,255,255,.7)}
.svc-strip{background:#1C1512;border-top:2px solid #D4562A;border-bottom:2px solid #D4562A}
.svc-strip__inner{display:flex;align-items:center;gap:28px;padding:22px 24px;flex-wrap:wrap}
.svc-strip__stat{display:flex;flex-direction:column;color:#fff}
.svc-strip__stat strong{font-family:'Unbounded',sans-serif;font-size:1.4rem;color:#D4562A}
.svc-strip__stat span{font-size:.75rem;color:rgba(255,255,255,.6);text-transform:uppercase;letter-spacing:.05em}
.svc-strip__btn{margin-left:auto;background:#D4562A;color:#fff;font-weight:700;padding:12px 24px;border-radius:8px;text-decoration:none}
.svc-strip__btn:hover{background:#BB4A1E}
.svc-section-sub{color:var(--text-secondary);max-width:720px;margin:-1rem 0 2rem;line-height:1.6}
.svc-steps-visual{padding:80px 0;background:var(--bg-secondary)}
.svc-steps-visual__grid{display:grid;grid-template-columns:repeat(4,1fr);gap:14px}
.svc-step-v{background:#fff;border:1px solid var(--border);border-radius:12px;padding:24px 20px;position:relative;overflow:hidden;transition:transform .3s,box-shadow .3s}
.svc-step-v:hover{transform:translateY(-4px);box-shadow:var(--shadow)}
.svc-step-v__num{font-family:'Unbounded',sans-serif;font-weight:800;font-size:2rem;color:#D4562A;opacity:.35}
.svc-step-v h3{margin:8px 0;font-size:1rem}
.svc-step-v p{font-size:.87rem;color:var(--text-secondary);line-height:1.6;margin:0}
.svc-steps-visual__cta{display:flex;gap:12px;margin-top:24px;flex-wrap:wrap}
.svc-steps-visual__cta .svc-order-tg,.svc-steps-visual__cta .svc-order-phone{flex:1;min-width:220px}
.svc-seam{padding:20px 0 80px;background:var(--bg)}
.svc-seam__card{background:#fff;border:2px solid #D4562A;border-radius:16px;padding:clamp(24px,4vw,48px);box-shadow:0 20px 60px rgba(212,86,42,.12)}
.svc-seam__badge{display:inline-block;background:#fff3ec;border:1px solid #D4562A;color:#D4562A;font-weight:800;font-size:.78rem;padding:6px 16px;border-radius:100px;margin-bottom:14px}
.svc-seam__grid{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin:24px 0}
.svc-seam__col{border-radius:12px;padding:22px}
.svc-seam__col--no{background:#fef2f2;border:1px solid #fecaca}
.svc-seam__col--yes{background:#f0fdf4;border:1px solid #bbf7d0}
.svc-seam__col h3{margin:0 0 12px;font-size:1rem}
.svc-seam__col ul,.svc-seam__col ol{margin:0;padding-left:20px;font-size:.9rem;line-height:1.7;color:#444}
.svc-seam__fix{background:#1C1512;color:#fff;border-radius:12px;padding:22px;margin-bottom:20px}
.svc-seam__fix h3{margin:0 0 8px;color:#D4562A}
.svc-seam__fix p{margin:0;line-height:1.7;color:rgba(255,255,255,.8)}
.svc-seam__cta{display:flex;gap:12px;flex-wrap:wrap}
.svc-seam__cta .svc-order-tg,.svc-seam__cta .svc-order-phone{flex:1;min-width:220px}
.svc-seam__link{align-self:center;color:#D4562A;font-weight:700}
.svc-sticky{position:fixed;left:12px;right:12px;bottom:12px;z-index:900;display:flex;gap:8px;align-items:center;background:rgba(28,21,18,.96);backdrop-filter:blur(8px);border:1px solid rgba(212,86,42,.5);border-radius:14px;padding:10px 12px;transform:translateY(120%);transition:transform .35s;box-shadow:0 12px 40px rgba(0,0,0,.35)}
.svc-sticky--show{transform:translateY(0)}
.svc-sticky__label{color:#fff;font-size:.75rem;font-weight:700;margin-right:auto;white-space:nowrap}
.svc-sticky__phone,.svc-sticky__tg,.svc-sticky__order{padding:12px 16px;border-radius:10px;font-weight:700;font-size:.82rem;text-decoration:none;white-space:nowrap}
.svc-sticky__phone{background:#fff;color:#1C1512}
.svc-sticky__tg{background:#229ED9;color:#fff}
.svc-sticky__order{background:#D4562A;color:#fff}
.svc-faq-list{display:flex;flex-direction:column;gap:10px}
.svc-faq-item{background:#fff;border:1px solid var(--border);border-radius:12px;overflow:hidden;transition:box-shadow .3s}
.svc-faq-item:hover{box-shadow:var(--shadow)}
.svc-faq-item h3{margin:0;padding:18px 20px;font-size:.95rem;cursor:pointer;display:flex;align-items:center;justify-content:space-between;gap:12px;user-select:none;transition:color .2s}
.svc-faq-item h3::after{content:'▸';font-size:1.1rem;color:var(--text-secondary);transition:transform .3s ease;flex-shrink:0}
.svc-faq-item[open] h3::after{transform:rotate(90deg);color:#D4562A}
.svc-faq-item h3:hover{color:#D4562A}
.svc-faq-item p{margin:0;padding:0 20px 18px;font-size:.9rem;line-height:1.7;color:var(--text-secondary)}
@keyframes faqFadeIn{from{opacity:0;transform:translateY(-8px)}to{opacity:1;transform:translateY(0)}}
.svc-faq-item[open] p{animation:faqFadeIn .3s ease}
.reveal{opacity:0;transform:translateY(28px);transition:opacity .7s ease,transform .7s ease}
.reveal--visible{opacity:1;transform:none}
@media(max-width:860px){.svc-steps-visual__grid,.svc-seam__grid{grid-template-columns:1fr}.svc-sticky__label{display:none}}
</style>
<script>
(function(){
  var bg=document.getElementById('svc-hero-bg'),bar=document.getElementById('svc-progress'),sticky=document.getElementById('svc-sticky');
  function onScroll(){
    var y=window.scrollY,dh=document.documentElement.scrollHeight-window.innerHeight;
    if(bar) bar.style.width=(dh>0?(y/dh*100):0)+'%';
    if(bg&&y<window.innerHeight) bg.style.transform='translateY('+(y*0.25)+'px) scale(1.05)';
    if(sticky){var show=y>600;sticky.classList.toggle('svc-sticky--show',show);sticky.setAttribute('aria-hidden',show?'false':'true');}
  }
  window.addEventListener('scroll',onScroll,{passive:true});onScroll();
  var io=new IntersectionObserver(function(es){es.forEach(function(e){if(e.isIntersecting){e.target.classList.add('reveal--visible');io.unobserve(e.target);}})},{threshold:.12});
  document.querySelectorAll('.reveal').forEach(function(el){io.observe(el)});
  document.querySelectorAll('.svc-faq-item').forEach(function(item){
    var h=item.querySelector('h3');if(!h)return;
    h.addEventListener('click',function(){item.toggleAttribute('open');});
  });
  document.querySelectorAll('[data-count]').forEach(function(el){
    var done=false;
    new IntersectionObserver(function(es,o){if(es[0].isIntersecting&&!done){done=true;o.disconnect();
      var t=+el.dataset.count,st=performance.now();
      (function tick(n){var p=Math.min((n-st)/1400,1),v=Math.round(t*(1-Math.pow(1-p,3)));el.textContent=v.toLocaleString('ru-RU');if(p<1)requestAnimationFrame(tick)})(st);
    }},{threshold:.5}).observe(el);
  });
})();
</script>
<?php require __DIR__ . '/../../../partials/footer.php'; ?>
