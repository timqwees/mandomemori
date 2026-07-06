<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/', 'priority' => '1.0', 'changefreq' => 'daily', 'index' => 'main'];

$pageTitle = $pageTitle ?? 'MANDO MEMORI — химчистка обуви в Москве, чистка кроссовок и премиальный уход';
$pageDesc = $pageDesc ?? 'MANDO MEMORI — профессиональная химчистка обуви в Москве. Чистка кроссовок, замши, нубука, кожи. Отбеливание подошвы, покраска, реставрация. Бесплатная доставка.';
$pageKeywords = $pageKeywords ?? 'химчистка обуви Москва, чистка кроссовок, отбеливание подошвы, химчистка замши, реставрация обуви, MANDO MEMORI';
$canonical = $_SERVER['REQUEST_URI'] ?? '/';
require __DIR__ . '/../../partials/header.php';
?>

<main class="main">
  <section class="scroll-hero" id="scroll-hero">
    <div class="scroll-hero__sticky">
      <video class="scroll-hero__video" id="scroll-hero-video" src="/public/assets/images/mandomemori/heroBG.mp4" data-src-desktop="/public/assets/images/mandomemori/heroBG.mp4" data-src-mobile="/public/assets/images/mandomemori/heroBG.mp4" muted playsinline webkit-playsinline preload="none"></video>
      <div class="scroll-hero__overlay"></div>
      <div class="scroll-hero__loader" id="scroll-hero-loader">
        <div class="scroll-hero__spinner"></div>
      </div>
      <div class="scroll-hero__content">
        <h1 class="scroll-hero__heading">
          <span class="scroll-hero__word" id="scroll-hero-word">Кроссовки</span>
          <span class="scroll-hero__rest">достойны безупречной чистки</span>
        </h1>
      </div>
    </div>
  </section>

  <section class="counter-section" style="background: linear-gradient(135deg, #D4562A 0%, #E87A3E 100%); color: #ffffff; min-height: 40vh;">
    <div class="counter-inner">
      <span class="counter-number" data-target="1105603">0</span>
      <p class="counter-caption">ОЧИЩЕНО ПАР ОБУВИ</p>
    </div>
  </section>

  <div class="trust-bar">
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

  <section class="about-steps">
    <div class="about-steps__content">
      <h2 class="about-steps__heading">Как мы работаем</h2>
      <div class="about-steps__list">
        <div class="about-step">
          <span class="about-step__num">01</span>
          <div class="about-step__body">
            <h3 class="about-step__title">Собираете заказ</h3>
            <p class="about-step__desc">Выбираете услуги, указываете количество пар — добавляете в корзину на сайте.</p>
          </div>
        </div>
        <div class="about-step">
          <span class="about-step__num">02</span>
          <div class="about-step__body">
            <h3 class="about-step__title">Получаете чек</h3>
            <p class="about-step__desc">Система формирует PDF-чек с деталями заказа — после вызова курьера он придёт вам на почту.</p>
          </div>
        </div>
        <div class="about-step">
          <span class="about-step__num">03</span>
          <div class="about-step__body">
            <h3 class="about-step__title">Передаёте обувь</h3>
            <p class="about-step__desc">Вызываете бесплатного курьера — у него уже есть данные заказа, остаётся только отдать обувь.</p>
          </div>
        </div>
        <div class="about-step">
          <span class="about-step__num">04</span>
          <div class="about-step__body">
            <h3 class="about-step__title">Мы выполняем работу</h3>
            <p class="about-step__desc">Мастер приступает к чистке по вашему заказу — оплата только после выполнения работы, по факту.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="home-products-section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Все услуги</h2>
      </div>
    </div>
    <div class="cards-slider" id="products-slider">
      <div class="cards">
        <?php
        $allServices = Functions::getServices();
        foreach ($allServices as $id => $p): ?>
        <article class="product-card<?= $p['dark'] ? ' dark-bg' : '' ?>" style="background:<?= $p['bg'] ?>">
          <div class="product-card-text">
            <h2 class="product-card-title"><?= $p['title'] ?></h2>
            <p class="product-card-desc">от <?= $p['price'] ?> ₽ за пару</p>
          </div>
          <div class="product-card-image">
            <img src="/public/assets/images/mandomemori/<?= $p['img'] ?>" alt="<?= $p['title'] ?>" loading="lazy">
          </div>
          <div class="product-card-action">
            <a href="/product/<?= $p['slug'] ?>" class="product-card-btn product-card-btn-detail">Подробнее</a>
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
        'beforeafter16.png','beforeafter17.png','beforeafter18.png',
      ];
      // Original + first 4 appended for seamless loop
      foreach (array_merge($portfolio, array_slice($portfolio, 0, 4)) as $img): ?>
      <div class="portfolio-slide">
        <img src="/public/assets/images/mandomemori/<?= $img ?>" alt="MANDO MEMORI — до и после химчистки" loading="lazy" draggable="false">
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="home-faq-section">
    <div class="home-faq-header">
      <h2 class="home-faq-title">Часто задаваемые вопросы</h2>
      <p class="home-faq-subtitle">Всё, что важно знать о нашем сервисе</p>
    </div>
    <div class="home-faq-grid">
      <div class="home-faq-card">
        <h3 class="home-faq-question">Сколько стоит химчистка обуви?</h3>
        <div class="home-faq-answer">Цена зависит от типа обуви и сложности загрязнения. Базовая химчистка — от 3 490 ₽, премиум-чистка — от 5 990 ₽. Пришлите фото в Telegram — оценим бесплатно.</div>
      </div>
      <div class="home-faq-card">
        <h3 class="home-faq-question">Как отбелить пожелтевшую подошву?</h3>
        <div class="home-faq-answer">Мы используем профессиональные составы для отбеливания подошвы. Результат — белоснежная подошва без разводов. Услуга доступна отдельно от 1 490 ₽.</div>
      </div>
      <div class="home-faq-card">
        <h3 class="home-faq-question">Вы принимаете обувь после зимы с реагентами?</h3>
        <div class="home-faq-answer">Да, наши мастера выводят солевые разводы и следы реагентов. В стоимость чистки входит обработка подошвы и выведение пятен любой сложности.</div>
      </div>
      <div class="home-faq-card">
        <h3 class="home-faq-question">Чистите ли вы замшу и нубук?</h3>
        <div class="home-faq-answer">Да, мы специализируемся на деликатной чистке замши и нубука с восстановлением ворса, цвета и нанесением водоотталкивающей пропитки. Цена — от 4 490 ₽.</div>
      </div>
      <div class="home-faq-card">
        <h3 class="home-faq-question">Какие бренды вы принимаете?</h3>
        <div class="home-faq-answer">Мы работаем с любой обувью: от повседневной до премиальных брендов — Loro Piana, Gucci, Prada, Balenciaga, Louis Vuitton, Hermès и других. Особый подход к люксовым материалам.</div>
      </div>
      <div class="home-faq-card">
        <h3 class="home-faq-question">Делаете ли вы покраску и реставрацию?</h3>
        <div class="home-faq-answer">Да, восстанавливаем цвет, маскируем потёртости, царапины и сдиры. Полная покраска обуви — от 3 990 ₽, реставрация отдельных участков — от 1 990 ₽.</div>
      </div>
      <div class="home-faq-card">
        <h3 class="home-faq-question">Сколько дней занимает чистка?</h3>
        <div class="home-faq-answer">Стандартный срок — 1–6 дней в зависимости от загруженности и сложности. Экспресс-чистка возможна за 24 часа. Точный срок называем после оценки.</div>
      </div>
      <div class="home-faq-card">
        <h3 class="home-faq-question">Есть ли доставка и курьер?</h3>
        <div class="home-faq-answer">Да, курьер бесплатно заберёт обувь и привезёт обратно после чистки. Это удобно и быстро — вы никуда не едете.</div>
      </div>
    </div>
  </section>

  <section class="hstack-section">
    <div class="hstack-track">
      <?php
      $hcards = [
        ['img' => 'мастер чистка.jpg', 'title1' => 'Бережная чистка', 'desc1' => 'Индивидуальный подбор составов и технологии обработки для каждого типа материала.', 'title2' => 'Уход за кожей и замшей', 'desc2' => 'Натуральные материалы проходят щадящую очистку с питанием и восстановлением структуры.'],
        ['img' => 'средства.jpg', 'title1' => 'Удаление загрязнений', 'desc1' => 'Эффективно справляемся с застарелыми пятнами, следами реагентов и стойкими разводами.', 'title2' => 'Формовка и силуэт', 'desc2' => 'Возвращаем обуви аккуратную форму, расправляем заломы и складки.'],
        ['img' => 'обувь.jpg', 'title1' => 'Обновление подошвы', 'desc1' => 'Восстанавливаем белизну и цвет подошвы с помощью профессиональных составов.', 'title2' => 'Реставрация покрытия', 'desc2' => 'Маскируем потёртости, царапины и обновляем цвет кожаных поверхностей.'],
        ['img' => 'чистка со спреем.jpg', 'title1' => 'Деликатная сушка', 'desc1' => 'Сушим обувь при низких температурах с сохранением формы и свойств материалов.', 'title2' => 'Финальный контроль', 'desc2' => 'Проверяем каждую пару перед выдачей: чистота, цвет, состояние — всё соответствует стандарту.'],
      ];
      foreach ($hcards as $hc): ?>
      <div class="hstack-item" style="--card-bg: #1C1512; --card-text: #fff;">
        <div class="hstack-card">
          <div class="hstack-inner">
            <div class="hstack-img">
              <img src="/public/assets/images/mandomemori/<?= $hc['img'] ?>" alt="" loading="lazy">
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
      <button class="hstack-dot active" data-index="0"></button>
      <button class="hstack-dot" data-index="1"></button>
      <button class="hstack-dot" data-index="2"></button>
      <button class="hstack-dot" data-index="3"></button>
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

<script src="/public/assets/js/solefresh/scroll-hero.js" defer></script>
<script src="/public/assets/js/solefresh/counter.js" defer></script>
<script src="/public/assets/js/solefresh/home-cards.js" defer></script>
<script src="/public/assets/js/solefresh/cards-slider.js" defer></script>
<script src="/public/assets/js/solefresh/portfolio-slider.js" defer></script>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
