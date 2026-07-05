<?php
use App\Config\Session;
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/order', 'priority' => '0.7', 'changefreq' => 'monthly', 'index' => 'orders'];

$orderNum = Session::init('sf_order_num') ?? '';

$pageTitle = $pageTitle ?? 'Передать обувь в чистку MANDO MEMORI в Москве — курьер или пункт приёма';
$pageDesc = $pageDesc ?? 'Просто назовите номер чека курьеру или сотруднику пункта приёма — никаких объяснений, всё уже в системе MANDO MEMORI.';
$pageKeywords = $pageKeywords ?? 'передать обувь в чистку Москва, вызов курьера чистка обуви, пункт приёма обуви Москва';
$canonical = $_SERVER['REQUEST_URI'] ?? '/order';
require __DIR__ . '/../../partials/header.php';
?>
<script>
window.__dadataToken = '<?= addslashes($_ENV['DADATA_API_KEY'] ?? '') ?>';
window.__cityName = 'Москва';
</script>
<style>
html, body { background: #121212; margin: 0; }

.ord {
  --ord-bg: #121212;
  --ord-fg: #ffffff;
  --ord-muted: rgba(255,255,255,0.55);
  --ord-hairline: rgba(255,255,255,0.08);
  --ord-card-bg: rgba(255,255,255,0.04);
  --ord-max: 1280px;
  --ord-pad-x: clamp(1.25rem, 5vw, 3rem);
  --ord-pad-y: clamp(3.5rem, 7vw, 5.5rem);
  background: var(--ord-bg);
  color: var(--ord-fg);
  font-family: var(--font);
  min-height: 100vh;
  overflow-x: hidden;
  -webkit-font-smoothing: antialiased;
}
.ord *, .ord *::before, .ord *::after { box-sizing: border-box; }

/* ── Hero ───────────────────────────────────────────── */
.ord-hero {
  padding: clamp(2rem, 4vw, 3.5rem) var(--ord-pad-x) clamp(2.5rem, 5vw, 4rem);
  text-align: center;
  border-bottom: 1px solid var(--ord-hairline);
  position: relative;
  overflow: hidden;
}
.ord-hero::before {
  content: '';
  position: absolute;
  top: -40%;
  left: 50%;
  translate: -50% 0;
  width: 80vw;
  height: 80vw;
  max-width: 900px;
  max-height: 900px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(212,86,42,0.06) 0%, transparent 70%);
  pointer-events: none;
}

.ord-badge {
  display: inline-flex;
  flex-direction: column;
  align-items: center;
  gap: 6px;
  position: relative;
  z-index: 1;
}
.ord-badge__inner {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.1);
  border-radius: 16px;
  padding: 10px 28px 10px 24px;
  backdrop-filter: blur(8px);
}
.ord-badge__icon {
  width: 36px;
  height: 36px;
  border-radius: 10px;
  background: var(--accent, #D4562A);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}
.ord-badge__icon svg { width: 18px; height: 18px; color: #fff; }
.ord-badge__label {
  font-size: 0.72rem;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  color: var(--ord-muted);
  margin: 0;
}
.ord-badge__num {
  font-family: var(--font-heading);
  font-size: 1.15rem;
  font-weight: 700;
  letter-spacing: 1px;
  color: #fff;
  background: linear-gradient(135deg, #fff 0%, var(--accent, #D4562A) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  display: inline-flex;
  align-items: center;
  gap: 6px;
}


.ord-hero__title {
  font-family: var(--font-heading);
  font-size: clamp(2rem, 5vw, 3.2rem);
  font-weight: 700;
  letter-spacing: -0.03em;
  line-height: 1.08;
  margin: 28px auto 14px;
  max-width: 16ch;
  position: relative;
  z-index: 1;
}
.ord-hero__desc {
  font-size: clamp(0.95rem, 1.1vw, 1.05rem);
  color: var(--ord-muted);
  line-height: 1.6;
  max-width: 520px;
  margin: 0 auto clamp(2rem, 3.5vw, 3rem);
  position: relative;
  z-index: 1;
}
.ord-hero__desc strong { color: #fff; font-weight: 500; }

/* ── Bouncing scroll indicator ──────────────────────── */
.ord-scroll {
  position: absolute;
  bottom: clamp(1rem, 2.5vw, 2rem);
  left: 50%;
  translate: -50% 0;
  z-index: 2;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 4px;
  color: rgba(255,255,255,0.25);
  animation: ord-bounce 2s ease-in-out infinite;
  pointer-events: none;
}
.ord-scroll__mouse {
  width: 20px;
  height: 32px;
  border-radius: 10px;
  border: 2px solid currentColor;
  position: relative;
}
.ord-scroll__mouse::after {
  content: '';
  position: absolute;
  top: 6px;
  left: 50%;
  translate: -50% 0;
  width: 3px;
  height: 8px;
  border-radius: 2px;
  background: currentColor;
  animation: ord-scroll-dot 2s ease-in-out infinite;
}
.ord-scroll__chevron {
  width: 12px;
  height: 12px;
  border-right: 2px solid currentColor;
  border-bottom: 2px solid currentColor;
  transform: rotate(45deg);
  margin-top: -2px;
}

@keyframes ord-bounce {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(8px); }
}
@keyframes ord-scroll-dot {
  0%, 100% { opacity: 1; transform: translate(-50%, 0); }
  50% { opacity: 0.2; transform: translate(-50%, 8px); }
}

/* ── Steps ──────────────────────────────────────────── */
.ord-steps {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: clamp(0.75rem, 1.5vw, 1.25rem);
  max-width: 780px;
  margin: 0 auto;
  position: relative;
  z-index: 1;
}
.ord-step {
  background: var(--ord-card-bg);
  border: 1px solid var(--ord-hairline);
  border-radius: 16px;
  padding: clamp(1.25rem, 2vw, 1.75rem) clamp(1rem, 1.5vw, 1.5rem);
  text-align: left;
  display: flex;
  flex-direction: column;
  gap: 8px;
  transition: border-color 0.3s ease, background 0.3s ease;
}
.ord-step:hover {
  border-color: rgba(255,255,255,0.15);
  background: rgba(255,255,255,0.06);
}
.ord-step__num {
  font-family: var(--font-heading);
  font-size: 0.75rem;
  font-weight: 600;
  color: var(--accent, #D4562A);
  letter-spacing: 0.06em;
  text-transform: uppercase;
}
.ord-step__title {
  font-size: clamp(0.9rem, 1vw, 1rem);
  font-weight: 600;
  line-height: 1.3;
  color: #fff;
}
.ord-step__desc {
  font-size: 0.85rem;
  line-height: 1.55;
  color: var(--ord-muted);
  margin: 0;
}

/* ── About Block ────────────────────────────────────── */
.ord-about {
  padding: var(--ord-pad-y) var(--ord-pad-x);
  border-top: 1px solid var(--ord-hairline);
}
.ord-about__grid {
  max-width: var(--ord-max);
  margin: 0 auto;
  display: grid;
  grid-template-columns: minmax(0, 5fr) minmax(0, 7fr);
  gap: clamp(1.5rem, 4vw, 4.5rem);
  align-items: end;
}
.ord-about__tagline {
  font-family: var(--font-heading);
  font-size: clamp(1.4rem, 2.6vw, 2.25rem);
  font-weight: 500;
  letter-spacing: -0.02em;
  line-height: 1.15;
  margin: 0;
  max-width: 14ch;
  color: #fff;
}
.ord-about__desc {
  margin: 0;
  text-align: right;
  font-size: clamp(0.85rem, 1vw, 0.95rem);
  line-height: 1.6;
  color: rgba(255,255,255,0.75);
  max-width: 65ch;
  justify-self: end;
}

@media (max-width: 768px) {
  .ord-about__grid {
    grid-template-columns: 1fr;
    gap: 1rem;
  }
  .ord-about__tagline {
    max-width: 100%;
  }
  .ord-about__desc {
    text-align: left;
    justify-self: start;
  }
}

/* ── Handover Section ───────────────────────────────── */
.ord-handover {
  padding: var(--ord-pad-y) var(--ord-pad-x);
  background: #fff;
}
.ord-handover-inner {
  max-width: 1000px;
  margin: 0 auto;
}



/* ── CTA ────────────────────────────────────────────── */
.ord-cta {
  padding: var(--ord-pad-y) var(--ord-pad-x);
  background: #1C1512;
  position: relative;
  overflow: hidden;
}
.ord-cta::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, transparent 0%, rgba(212,86,42,0) 8%, var(--accent, #D4562A) 20%, var(--accent, #D4562A) 80%, rgba(212,86,42,0) 92%, transparent 100%);
}
.ord-cta__inner {
  max-width: 500px;
  margin: 0 auto;
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: clamp(1rem, 1.8vw, 1.5rem);
  position: relative;
  z-index: 1;
}
.ord-cta__title {
  font-family: var(--font-heading);
  font-size: clamp(1.4rem, 2.8vw, 2rem);
  font-weight: 600;
  letter-spacing: -0.02em;
  line-height: 1.12;
  color: #fff;
  margin: 0;
}
.ord-cta__desc {
  font-size: clamp(0.9rem, 1vw, 1rem);
  color: rgba(255,255,255,0.6);
  line-height: 1.55;
  margin: 0;
}
.ord-cta__btns {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
  justify-content: center;
  margin-top: 4px;
}
.ord-cta__btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 14px 28px;
  border-radius: 980px;
  font-size: 0.9rem;
  font-weight: 500;
  font-family: var(--font);
  text-decoration: none;
  transition: all 0.3s ease;
  border: 1px solid rgba(255,255,255,0.12);
}
.ord-cta__btn--tg {
  background: #0088cc;
  color: #fff;
  border-color: transparent;
}
.ord-cta__btn--tg:hover {
  background: #0077b5;
  transform: scale(1.03);
}
.ord-cta__btn--phone {
  background: rgba(255,255,255,0.06);
  color: #fff;
}
.ord-cta__btn--phone:hover {
  background: rgba(255,255,255,0.1);
  transform: scale(1.03);
}
.ord-cta__hint {
  font-size: 0.8rem;
  color: rgba(255,255,255,0.35);
  margin: 0;
}

/* ── Responsive ─────────────────────────────────────── */
@media (max-width: 768px) {
  .ord-steps {
    grid-template-columns: 1fr;
    max-width: 480px;
  }
  .ord-handover .courier-form-grid {
    grid-template-columns: 1fr;
  }
  .ord-handover .location-card-header {
    padding: 14px 18px;
  }
  .ord-handover .location-details {
    padding: 0 18px 14px;
    flex-direction: column;
    gap: 8px;
  }
  .ord-handover .courier-form-card {
    padding: 1.25rem;
  }
  .ord-badge__inner {
    padding: 8px 18px 8px 16px;
  }
}
</style>

<main class="main ord">

  <!-- <div class="trust-bar">
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
  </div> -->

  <section class="ord-hero">
    <?php if ($orderNum): ?>
    <div class="ord-badge">
      <div class="ord-badge__inner">
        <div>
          <p class="ord-badge__label">Номер заказа</p>
          <span class="ord-badge__num"><?= htmlspecialchars($orderNum) ?></span>
        </div>
      </div>
    </div>

    <h1 class="ord-hero__title">Всё готово</h1>
    <p class="ord-hero__desc">Чек уже сформирован — копия отправлена на <strong>order@mandomemori.ru</strong>. Ничего распечатывать не нужно. Просто назовите номер&nbsp;заказа:</p>

    <div class="ord-steps">
      <div class="ord-step">
        <span class="ord-step__num">Шаг 1</span>
        <h3 class="ord-step__title">Выберите способ передачи</h3>
        <p class="ord-step__desc">Принесите обувь в пункт приёма или вызовите курьера — как удобно вам</p>
      </div>
      <div class="ord-step">
        <span class="ord-step__num">Шаг 2</span>
        <h3 class="ord-step__title">Назовите номер заказа</h3>
        <p class="ord-step__desc">Сотрудник или курьер найдёт заказ в системе по номеру — никаких лишних вопросов</p>
      </div>
      <div class="ord-step">
        <span class="ord-step__num">Шаг 3</span>
        <h3 class="ord-step__title">Отдайте обувь</h3>
        <p class="ord-step__desc">Курьер заберёт её сразу, или вы оставляете в пункте — мастер приступает к работе</p>
      </div>
    </div>

    <div class="ord-scroll">
      <div class="ord-scroll__mouse"></div>
      <div class="ord-scroll__chevron"></div>
    </div>
    <?php else: ?>
    <h1 class="ord-hero__title">Передать обувь</h1>
    <p class="ord-hero__desc">Выберите удобный способ — принести в пункт приёма или вызвать курьера</p>
    <?php endif; ?>
  </section>

  <section class="ord-about">
    <div class="ord-about__grid">
      <p class="ord-about__tagline">Химчистка обуви с 2015 года</p>
      <p class="ord-about__desc">MANDO MEMORI — профессиональная химчистка обуви в Москве. Чистим кроссовки, замшу, нубук, кожу. Отбеливание подошвы, покраска, реставрация. Бесплатная доставка курьером и постаматы 24/7. Более 1 000 000 пар очищено.</p>
    </div>
  </section>

  <section class="ord-handover">
    <div class="ord-handover-inner">
    <div class="view-toggle">
      <button class="view-toggle-btn active" data-view="self">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 2C6.24 2 4 4.24 4 7c0 3.75 5 9 5 9s5-5.25 5-9c0-2.76-2.24-5-5-5zm0 7a2 2 0 110-4 2 2 0 010 4z" fill="currentColor"/></svg>
        Принести самому
      </button>
      <button class="view-toggle-btn" data-view="courier">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M16 3H1v13h15V3z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 8h4l3 3v5h-7V8z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><circle cx="5.5" cy="18.5" r="2.5" stroke="currentColor" stroke-width="1.5"/><circle cx="18.5" cy="18.5" r="2.5" stroke="currentColor" stroke-width="1.5"/></svg>
        <span class="label-desktop">Заказать курьера</span><span class="label-mobile">Курьер</span>
      </button>
    </div>

    <div id="self-view">
      <div class="locations-list" id="locations-list">
        <div class="location-card" data-index="0">
          <div class="location-card-header" onclick="this.parentElement.classList.toggle('open')">
            <div class="location-card-left">
              <div>
                <h3 class="location-name">Универмаг "Цветной"</h3>
                <p class="location-address">Москва, Цветной бульвар, 15с1, -1 этаж</p>
                <div class="location-type-mobile">
                  <span class="location-type-badge type-pickup">Приёмный пункт</span>
                </div>
              </div>
            </div>
            <div class="location-card-right">
              <span class="location-type-badge type-pickup">Приёмный пункт</span>
              <svg class="location-chevron" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M6 8l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <div class="location-card-body">
            <div class="location-details">
              <div class="location-detail">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M8 1v2m0 10v2m7-7h-2M3 8H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                <span>м. Цветной бульвар</span>
              </div>
              <div class="location-detail">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7" stroke="currentColor" stroke-width="1.5"/><path d="M8 4v4l3 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                <span>Пн-Сб 10:00-22:00, Вс 11:00-22:00</span>
              </div>
            </div>
            <div class="location-actions">
              <a class="location-route" href="https://yandex.ru/maps/-/CPeyaA8l" target="_blank" rel="noopener">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 13L13 3m0 0H5m8 0v8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Маршрут
              </a>
              <button type="button" class="location-schema-btn" onclick="openSchemaPopup('/public/assets/images/solefresh/1771017249756-8300.svg', 'Универмаг Цветной')">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="1" y="1" width="14" height="14" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M5 11l6-6m0 0v4m0-4H7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Схема проезда
              </button>
            </div>
          </div>
        </div>
        <div class="location-card" data-index="1">
          <div class="location-card-header" onclick="this.parentElement.classList.toggle('open')">
            <div class="location-card-left">
              <div>
                <h3 class="location-name">Тц "Авиапарк"</h3>
                <p class="location-address">Москва, Ходынский бульвар 4, 3 этаж</p>
                <div class="location-type-mobile">
                  <span class="location-type-badge type-pickup">Приёмный пункт</span>
                </div>
              </div>
            </div>
            <div class="location-card-right">
              <span class="location-type-badge type-pickup">Приёмный пункт</span>
              <svg class="location-chevron" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M6 8l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <div class="location-card-body">
            <div class="location-details">
              <div class="location-detail">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M8 1v2m0 10v2m7-7h-2M3 8H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                <span>м. ЦСКА</span>
              </div>
              <div class="location-detail">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7" stroke="currentColor" stroke-width="1.5"/><path d="M8 4v4l3 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                <span>Ежедневно: 10:00-22:00</span>
              </div>
            </div>
            <div class="location-actions">
              <a class="location-route" href="https://yandex.ru/maps/-/CHeIq61v" target="_blank" rel="noopener">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 13L13 3m0 0H5m8 0v8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Маршрут
              </a>
              <button type="button" class="location-schema-btn" onclick="openSchemaPopup('/public/assets/images/solefresh/1771051449560-4003.svg', 'Тц Авиапарк')">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="1" y="1" width="14" height="14" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M5 11l6-6m0 0v4m0-4H7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Схема проезда
              </button>
            </div>
          </div>
        </div>
        <div class="location-card" data-index="2">
          <div class="location-card-header" onclick="this.parentElement.classList.toggle('open')">
            <div class="location-card-left">
              <div>
                <h3 class="location-name">Тц "Океания"</h3>
                <p class="location-address">Москва, Кутузовский проспект, 57, -2 этаж</p>
                <div class="location-type-mobile">
                  <span class="location-type-badge type-postamat">Постамат<svg width="12" height="12" viewBox="0 0 16 16" fill="none" style="margin-left:2px"><path d="M6 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                </div>
              </div>
            </div>
            <div class="location-card-right">
              <span class="location-type-badge type-postamat">Постамат<svg width="12" height="12" viewBox="0 0 16 16" fill="none" style="margin-left:2px"><path d="M6 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <svg class="location-chevron" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M6 8l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <div class="location-card-body">
            <div class="location-details">
              <div class="location-detail">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M8 1v2m0 10v2m7-7h-2M3 8H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                <span>м. Славянский Бульвар</span>
              </div>
              <div class="location-detail">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7" stroke="currentColor" stroke-width="1.5"/><path d="M8 4v4l3 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                <span>Ежедневно: 10:00-22:00</span>
              </div>
            </div>
            <div class="location-actions">
              <a class="location-route" href="https://yandex.ru/maps/-/CPUmQGKu" target="_blank" rel="noopener">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 13L13 3m0 0H5m8 0v8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Маршрут
              </a>
              <button type="button" class="location-schema-btn" onclick="openSchemaPopup('/public/assets/images/solefresh/1771056881593-7958.svg', 'Тц Океания')">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="1" y="1" width="14" height="14" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M5 11l6-6m0 0v4m0-4H7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Схема проезда
              </button>
            </div>
          </div>
        </div>
        <div class="location-card" data-index="3">
          <div class="location-card-header" onclick="this.parentElement.classList.toggle('open')">
            <div class="location-card-left">
              <div>
                <h3 class="location-name">Тц "Ривьера"</h3>
                <p class="location-address">Москва, ул. Автозаводская, 18, -2 этаж</p>
                <div class="location-type-mobile">
                  <span class="location-type-badge type-postamat">Постамат<svg width="12" height="12" viewBox="0 0 16 16" fill="none" style="margin-left:2px"><path d="M6 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                </div>
              </div>
            </div>
            <div class="location-card-right">
              <span class="location-type-badge type-postamat">Постамат<svg width="12" height="12" viewBox="0 0 16 16" fill="none" style="margin-left:2px"><path d="M6 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <svg class="location-chevron" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M6 8l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <div class="location-card-body">
            <div class="location-details">
              <div class="location-detail">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M8 1v2m0 10v2m7-7h-2M3 8H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                <span>м. Автозаводская</span>
              </div>
              <div class="location-detail">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7" stroke="currentColor" stroke-width="1.5"/><path d="M8 4v4l3 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                <span>Пн-Пт 08:00-22:00, Сб-Вс 09:00-21:00</span>
              </div>
            </div>
            <div class="location-actions">
              <a class="location-route" href="https://yandex.ru/maps/-/CPUqMWjk" target="_blank" rel="noopener">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 13L13 3m0 0H5m8 0v8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Маршрут
              </a>
              <button type="button" class="location-schema-btn" onclick="openSchemaPopup('/public/assets/images/solefresh/1771056980093-6663.svg', 'Тц Ривьера')">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="1" y="1" width="14" height="14" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M5 11l6-6m0 0v4m0-4H7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Схема проезда
              </button>
            </div>
          </div>
        </div>
        <div class="location-card" data-index="4">
          <div class="location-card-header" onclick="this.parentElement.classList.toggle('open')">
            <div class="location-card-left">
              <div>
                <h3 class="location-name">Тц "Кунцево Плаза"</h3>
                <p class="location-address">Москва, ул. Ярцевская, 19, -3 этаж</p>
                <div class="location-type-mobile">
                  <span class="location-type-badge type-postamat">Постамат<svg width="12" height="12" viewBox="0 0 16 16" fill="none" style="margin-left:2px"><path d="M6 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                </div>
              </div>
            </div>
            <div class="location-card-right">
              <span class="location-type-badge type-postamat">Постамат<svg width="12" height="12" viewBox="0 0 16 16" fill="none" style="margin-left:2px"><path d="M6 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <svg class="location-chevron" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M6 8l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <div class="location-card-body">
            <div class="location-details">
              <div class="location-detail">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M8 1v2m0 10v2m7-7h-2M3 8H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                <span>м. Молодежная</span>
              </div>
              <div class="location-detail">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7" stroke="currentColor" stroke-width="1.5"/><path d="M8 4v4l3 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                <span>Ежедневно: 10:00-22:00</span>
              </div>
            </div>
            <div class="location-actions">
              <a class="location-route" href="https://yandex.ru/maps/-/CPUqjVPF" target="_blank" rel="noopener">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 13L13 3m0 0H5m8 0v8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Маршрут
              </a>
              <button type="button" class="location-schema-btn" onclick="openSchemaPopup('/public/assets/images/solefresh/1771060205881-3170.svg', 'Тц Кунцево Плаза')">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="1" y="1" width="14" height="14" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M5 11l6-6m0 0v4m0-4H7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Схема проезда
              </button>
            </div>
          </div>
        </div>
        <div class="location-card" data-index="5">
          <div class="location-card-header" onclick="this.parentElement.classList.toggle('open')">
            <div class="location-card-left">
              <div>
                <h3 class="location-name">ЖК "Савеловский Сити"</h3>
                <p class="location-address">Москва, ул. Новодмитровская 2, к5, 2 этаж, рядом с Мираторг</p>
                <div class="location-type-mobile">
                  <span class="location-type-badge type-postamat">Постамат<svg width="12" height="12" viewBox="0 0 16 16" fill="none" style="margin-left:2px"><path d="M6 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                </div>
              </div>
            </div>
            <div class="location-card-right">
              <span class="location-type-badge type-postamat">Постамат<svg width="12" height="12" viewBox="0 0 16 16" fill="none" style="margin-left:2px"><path d="M6 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <svg class="location-chevron" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M6 8l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <div class="location-card-body">
            <div class="location-details">
              <div class="location-detail">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M8 1v2m0 10v2m7-7h-2M3 8H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                <span>м. Дмитровская</span>
              </div>
              <div class="location-detail">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7" stroke="currentColor" stroke-width="1.5"/><path d="M8 4v4l3 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                <span>Ежедневно: 10:00-22:00</span>
              </div>
            </div>
            <div class="location-actions">
              <a class="location-route" href="https://yandex.ru/maps/-/CHekVB2P" target="_blank" rel="noopener">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 13L13 3m0 0H5m8 0v8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Маршрут
              </a>
              <button type="button" class="location-schema-btn" onclick="openSchemaPopup('/public/assets/images/solefresh/1771060496225-7914.svg', 'ЖК Савеловский Сити')">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="1" y="1" width="14" height="14" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M5 11l6-6m0 0v4m0-4H7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Схема проезда
              </button>
            </div>
          </div>
        </div>
        <div class="location-card" data-index="6">
          <div class="location-card-header" onclick="this.parentElement.classList.toggle('open')">
            <div class="location-card-left">
              <div>
                <h3 class="location-name">Бц "Вивальди Плаза"</h3>
                <p class="location-address">Москва, ул. Летниковская 2, 1 этаж</p>
                <div class="location-type-mobile">
                  <span class="location-type-badge type-postamat">Постамат<svg width="12" height="12" viewBox="0 0 16 16" fill="none" style="margin-left:2px"><path d="M6 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                </div>
              </div>
            </div>
            <div class="location-card-right">
              <span class="location-type-badge type-postamat">Постамат<svg width="12" height="12" viewBox="0 0 16 16" fill="none" style="margin-left:2px"><path d="M6 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <svg class="location-chevron" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M6 8l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <div class="location-card-body">
            <div class="location-details">
              <div class="location-detail">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M8 1v2m0 10v2m7-7h-2M3 8H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                <span>м. Павелецкая</span>
              </div>
              <div class="location-detail">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7" stroke="currentColor" stroke-width="1.5"/><path d="M8 4v4l3 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                <span>Ежедневно, круглосуточно</span>
              </div>
            </div>
            <div class="location-actions">
              <a class="location-route" href="https://yandex.ru/maps/-/CPUymO8g" target="_blank" rel="noopener">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 13L13 3m0 0H5m8 0v8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Маршрут
              </a>
              <button type="button" class="location-schema-btn" onclick="openSchemaPopup('/public/assets/images/solefresh/1773755522876-5961.svg', 'Бц Вивальди Плаза')">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="1" y="1" width="14" height="14" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M5 11l6-6m0 0v4m0-4H7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Схема проезда
              </button>
            </div>
          </div>
        </div>
        <div class="location-card" data-index="7">
          <div class="location-card-header" onclick="this.parentElement.classList.toggle('open')">
            <div class="location-card-left">
              <div>
                <h3 class="location-name">Тц "BOTANICA"</h3>
                <p class="location-address">Москва, ул. Вильгельма Пика, 11, -1 этаж, у банкоматов</p>
                <div class="location-type-mobile">
                  <span class="location-type-badge type-postamat">Постамат<svg width="12" height="12" viewBox="0 0 16 16" fill="none" style="margin-left:2px"><path d="M6 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                </div>
              </div>
            </div>
            <div class="location-card-right">
              <span class="location-type-badge type-postamat">Постамат<svg width="12" height="12" viewBox="0 0 16 16" fill="none" style="margin-left:2px"><path d="M6 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <svg class="location-chevron" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M6 8l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <div class="location-card-body">
            <div class="location-details">
              <div class="location-detail">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M8 1v2m0 10v2m7-7h-2M3 8H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                <span>м. Ботанический сад</span>
              </div>
              <div class="location-detail">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7" stroke="currentColor" stroke-width="1.5"/><path d="M8 4v4l3 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                <span>Ежедневно: 10:00-22:00</span>
              </div>
            </div>
            <div class="location-actions">
              <a class="location-route" href="https://yandex.com/maps/-/CPVCb6ng" target="_blank" rel="noopener">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 13L13 3m0 0H5m8 0v8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Маршрут
              </a>
            </div>
          </div>
        </div>
        <div class="location-card" data-index="8">
          <div class="location-card-header" onclick="this.parentElement.classList.toggle('open')">
            <div class="location-card-left">
              <div>
                <h3 class="location-name">Lamoda Sport "Красная Пресня"</h3>
                <p class="location-address">Москва, ул. Красная Пресня, 23, с1а</p>
                <div class="location-type-mobile">
                  <span class="location-type-badge type-lamoda">ЛамодаСпорт</span>
                </div>
              </div>
            </div>
            <div class="location-card-right">
              <span class="location-type-badge type-lamoda">ЛамодаСпорт</span>
              <svg class="location-chevron" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M6 8l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <div class="location-card-body">
            <div class="location-details">
              <div class="location-detail">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M8 1v2m0 10v2m7-7h-2M3 8H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                <span>м. Улица 1905 года</span>
              </div>
              <div class="location-detail">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7" stroke="currentColor" stroke-width="1.5"/><path d="M8 4v4l3 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                <span>Ежедневно: 10:00-22:00</span>
              </div>
            </div>
            <div class="location-actions">
              <a class="location-route" href="https://yandex.ru/maps/-/CPUBUBot" target="_blank" rel="noopener">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 13L13 3m0 0H5m8 0v8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Маршрут
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="schema-popup" id="schema-popup" onclick="if(event.target===this)closeSchemaPopup()">
        <button class="schema-popup-close" onclick="closeSchemaPopup()" aria-label="Закрыть">&times;</button>
        <div class="schema-popup-viewport" id="schema-viewport">
          <img id="schema-popup-img" src="" alt="">
        </div>
        <div class="schema-popup-controls">
          <button class="schema-zoom-btn" onclick="schemaZoom(-1)" aria-label="Уменьшить">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M6 10h8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          </button>
          <button class="schema-zoom-btn" onclick="schemaZoom(1)" aria-label="Увеличить">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M10 6v8M6 10h8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          </button>
        </div>
      </div>

      <div class="locations-map" id="locations-map">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A55d57723f46924ad6a0dfb0db650ec1a8193a57ecec20ecc8d6e2649eb8ba4c7&amp;source=constructor" width="100%" height="400" frameborder="0" style="border-radius:12px;display:block"></iframe>
      </div>
    </div>

    <div class="courier-form-wrapper" id="courier-form" style="display:none">
      <div class="courier-form-card">
        <h2 class="courier-form-title" style="color: black;">Вызов курьера</h2>
        <p class="courier-form-subtitle">Оставьте контакты — курьер приедет, вы называете номер заказа и отдаёте обувь</p>
        <form id="courier-request-form" class="courier-form">
          <input type="hidden" name="_csrf" value="3bd5a1ea01eec4cc5fac232d54cfe19be1beb147477f69e057180030166a8e04">
          <input type="hidden" name="city_slug" value="moscow">
          <?php if ($orderNum): ?><input type="hidden" name="order_num" value="<?= htmlspecialchars($orderNum) ?>"><?php endif; ?>
          <div class="courier-form-grid">
            <div class="form-field">
              <label for="cf-name">Имя *</label>
              <input type="text" id="cf-name" name="name" required placeholder="Иванов Иван">
            </div>
            <div class="form-field">
              <label for="cf-phone">Телефон *</label>
              <input type="tel" id="cf-phone" name="phone" required placeholder="+7">
            </div>
          </div>
          <div class="form-field form-field--address">
            <label for="cf-address">Адрес *</label>
            <input type="text" id="cf-address" name="address" required placeholder="Улица и номер дома" autocomplete="off">
            <div class="dadata-suggestions" id="cf-address-suggestions"></div>
          </div>
          <?php if ($orderNum): ?>
          <div class="courier-order-note">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
            <span>Заказ <strong><?= htmlspecialchars($orderNum) ?></strong> — курьер найдёт его в системе по номеру</span>
          </div>
          <?php endif; ?>
          <label class="courier-form-consent">
            <input type="checkbox" name="consent" required>
            <span>Я даю согласие на <a href="/privacy-policy" target="_blank">обработку персональных данных</a></span>
          </label>
          <button type="submit" class="courier-form-submit">Заказать курьера</button>
        </form>
      </div>
    </div>
  </section>

  <section class="ord-cta">
    <div class="ord-cta__inner">
      <h2 class="ord-cta__title">Остались вопросы?</h2>
      <p class="ord-cta__desc">Напишите в Telegram или позвоните — ответим оперативно</p>
      <div class="ord-cta__btns">
        <a href="https://t.me/mandomemori" target="_blank" class="ord-cta__btn ord-cta__btn--tg">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20.665 3.717l-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z"/></svg>
          Telegram, @mandomemori
        </a>
        <a href="tel:+74951980495" class="ord-cta__btn ord-cta__btn--phone">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
          +7 495 198-04-95
        </a>
      </div>
      <p class="ord-cta__hint">Если что-то пошло не так — просто напишите, и мы поможем</p>
    </div>
  </section>

</main>

<script>
  window.__locations = [{"id":1,"city_id":1,"name":"Универмаг \"Цветной\"","address":"Москва, Цветной бульвар, 15с1, -1 этаж","type":"pickup","metro":"Цветной бульвар","hours_weekday":"10:00–21:00","hours_weekend":"11:00–20:00","hours":"Пн-Сб 10:00-22:00, Вс 11:00-22:00","image_url":"/public/assets/images/solefresh/1771017249756-8300.svg","lat":55.77113,"lng":37.620005,"sort_order":1,"yandex_maps_url":"https://yandex.ru/maps/-/CPeyaA8l","review_google_url":"https://maps.app.goo.gl/EwZ1vZXYsyZUjget8","review_yandex_url":"https://yandex.ru/maps/org/sole_fresh/177399121233/reviews/?ll=37.620005%2C55.771130&z=14","review_2gis_url":"https://2gis.ru/moscow/firm/70000001020379336/tab/reviews","photos":[]},{"id":2,"city_id":1,"name":"Тц \"Авиапарк\"","address":"Москва, Ходынский бульвар 4, 3 этаж","type":"pickup","metro":"ЦСКА","hours_weekday":"10:00–21:00","hours_weekend":"11:00–19:00","hours":"Ежедневно: 10:00-22:00","image_url":"/public/assets/images/solefresh/1771051449560-4003.svg","lat":55.790705,"lng":37.530043,"sort_order":2,"yandex_maps_url":"https://yandex.ru/maps/-/CHeIq61v","review_google_url":"https://maps.app.goo.gl/9fbqJBjCp46sCVyp7","review_yandex_url":"https://yandex.ru/maps/org/sole_fresh/191339885526/reviews/?ll=37.530043%2C55.790705&mode=search&sctx=ZAAAAAgBEAAaKAoSCaEt51Jcz0JAEXR7SWO04ktAEhIJH6LRHcTOxj8R6DHKMy%2BHrT8iBgABAgMEBSgKOABAt54BSAFqAnJ1nQHNzMw9oAEAqAEAvQFL3ClNwgEG1uf75cgFggIbc29sZSBmcmVzaCDQsNCy0LjQsNC%2F0LDRgNC60YIKAgCSAgCaAgxkZXNrdG9wLW1hcHOqAtACNzg4ODU1MzAyMTIsNjAwMzA2Myw2MDAyNTA3LDIwODgxODM0NjkwNywyNTE4NzU2NDkyLDYwMDIwMDEsMTY0MTc3OTQ2ODIsNDM0NTg5MTQ0MTEsMjMwMTk4ODAzMDgsMjc1MTM4OTY4MSw2MDAyMzMzLDE0MjY4NjA5MDMxMiw1NjYwNjU4MTEyNiwxMjY4ODM0NjcxODYsMTE4NDM1NzQ5NDcsMjAwOTU5NzU0NDc5LDExMTU5MDUwMDY5NCwzNDExNDE4MDAyNCw2NDcxODYwMzIsMjAzMTQ1MTUwNDU1LDEwOTkyMjM5NDAsMTU5MjUxMDMxOSw2MDAzMDM4LDM4MzE1MTkxNTM2LDY5MTQ3MjMyMDE2LDQ5OTIyNDcwODQwLDEwNjI1NDAxMzgsODk5MDI4MTA0MjIsMzM2NjU2MTYxNCwxMDk5MjIzOTQw|1&sll=37.530043%2C55.790705&sspn=0.089092%2C0.028823&z=14","review_2gis_url":"https://2gis.ru/moscow/firm/70000001020408412/tab/reviews","photos":[]},{"id":3,"city_id":1,"name":"Тц \"Океания\"","address":"Москва, Кутузовский проспект, 57, -2 этаж","type":"postamat","metro":"Славянский Бульвар","hours_weekday":"10:00–21:00","hours_weekend":"11:00–19:00","hours":"Ежедневно: 10:00-22:00","image_url":"/public/assets/images/solefresh/1771056881593-7958.svg","lat":55.727586,"lng":37.454124,"sort_order":3,"yandex_maps_url":"https://yandex.ru/maps/-/CPUmQGKu","review_google_url":"https://maps.app.goo.gl/grQ5FUZAU8cEeGWA","review_yandex_url":"https://yandex.ru/maps/org/mando_memori_sole_fresh/107945559537/reviews/?ll=37.454124%2C55.727586&z=14","review_2gis_url":"https://2gis.ru/moscow/firm/70000001029249058/tab/reviews","photos":[]},{"id":4,"city_id":1,"name":"Тц \"Ривьера\"","address":"Москва, ул. Автозаводская, 18, -2 этаж","type":"postamat","metro":"Автозаводская","hours_weekday":"08:00–22:00","hours_weekend":"09:00–21:00","hours":"Пн-Пт 08:00-22:00, Сб-Вс 09:00-21:00","image_url":"/public/assets/images/solefresh/1771056980093-6663.svg","lat":55.708012,"lng":37.647028,"sort_order":4,"yandex_maps_url":"https://yandex.ru/maps/-/CPUqMWjk","review_google_url":"https://maps.app.goo.gl/V8bkAoKrbyC2QS3C6","review_yandex_url":"https://yandex.ru/maps/org/sole_fresh/98821063647/reviews/?ll=37.647028%2C55.708012&z=14","review_2gis_url":"https://2gis.ru/moscow/firm/70000001030543463/tab/reviews","photos":[]},{"id":5,"city_id":1,"name":"Тц \"Кунцево Плаза\"","address":"Москва, ул. Ярцевская, 19, -3 этаж","type":"postamat","metro":"Молодежная","hours_weekday":"10:00–21:00","hours_weekend":"11:00–19:00","hours":"Ежедневно: 10:00-22:00","image_url":"/public/assets/images/solefresh/1771060205881-3170.svg","lat":55.753057,"lng":37.392535,"sort_order":5,"yandex_maps_url":"https://yandex.ru/maps/-/CPUqjVPF","review_google_url":"https://maps.app.goo.gl/Bm2rVimYifFn3tMz5","review_yandex_url":"https://yandex.ru/maps/org/sole_fresh/148532347250/reviews/?ll=37.392535%2C55.753057&z=14","review_2gis_url":"https://2gis.ru/moscow/firm/70000001030135036/tab/reviews","photos":[]},{"id":6,"city_id":1,"name":"ЖК \"Савеловский Сити\"","address":"Москва, ул. Новодмитровская 2, к5, 2 этаж, рядом с Мираторг","type":"postamat","metro":"Дмитровская","hours_weekday":"10:00–21:00","hours_weekend":"11:00–19:00","hours":"Ежедневно: 10:00-22:00","image_url":"/public/assets/images/solefresh/1771060496225-7914.svg","lat":55.808193,"lng":37.581134,"sort_order":6,"yandex_maps_url":"https://yandex.ru/maps/-/CHekVB2P","review_google_url":"https://maps.app.goo.gl/BqGeZhmD5GAJ6RjU8","review_yandex_url":"https://yandex.ru/maps/org/sole_fresh/24330289061/reviews/?ll=37.581134%2C55.808193&mode=search&sctx=ZAAAAAgBEAAaKAoSDd0RTFzLz0JAEcV3NgW%2BLUpAEhIJgxKqgAC4xD8RXY3YQ1%2FfKz8iBgABAgMEBSgKOABAiIhQSAFqAnJ1nQHNzMw9oAEAqAEAvQXhJsLNAQIAkgIAmgIMZGVza3RvcC1tYXBzqgK%2FAjE4MTc0NDQ4NzYsMTY1MTA2MjMwMSw2MDAzMDYzLDYwMDMwMzgsNTc3NjQ5ODA1NiwxNjQxNzc5NDY4MiwxNjc1NjM3MjQ4LDE5NzQ1ODk1MDcsMTU0ODY4NDMyMjAsMTQ1NDAwOTE5ODMsMTI4NzQyMjk3NzcsMTIxNTI1MDk2NTksMTczMDI1NjkzODcsNDUxMDc1MjkwOCw2MDAyMDA1LDE1OTI1MTAzMTksMTE2MDYxMzg0MzUsNTU1NzA4MTQwNiwzMjc4NzU2NjE5MSwyMDA5NTk3NTQ0NzksMTA5OTIyMzk0MCwxOTQyMjE0MzQzOSwzNjAwNTkxNTcyLDE1MzE4NTUyNDE5LDE0OTUyNDA5ODYyLDIwODE2NzEyNDcyLDEzNDQ5OTkwMDc5LDEzODE2OTIxMjc4LDYwMDIzMzMsNTY5NjI3MTM4Myw2MDAyNTA3LDEzOTUwNjAyNDMsNDM3NjcyNDMxMgIBCg%3D%3D&sll=37.581134%2C55.808193&sspn=0.03583%2C0.010807&z=15","review_2gis_url":"https://2gis.ru/moscow/firm/70000001041888739/tab/reviews","photos":[]},{"id":7,"city_id":1,"name":"Бц \"Вивальди Плаза\"","address":"Москва, ул. Летниковская 2, 1 этаж","type":"postamat","metro":"Павелецкая","hours_weekday":"00:00–24:00","hours_weekend":"00:00–24:00","hours":"Ежедневно, круглосуточно","image_url":"/public/assets/images/solefresh/1773755522876-5961.svg","lat":55.73057,"lng":37.64340,"sort_order":7,"yandex_maps_url":"https://yandex.ru/maps/-/CPUymO8g","review_google_url":"https://maps.app.goo.gl/QwDm3NHmJGm8VcFfA","review_yandex_url":"https://yandex.ru/maps/org/sole_fresh/152988095930/reviews/?ll=37.643400%2C55.730570&z=15","review_2gis_url":"https://2gis.ru/moscow/firm/70000001083478270/tab/reviews","photos":[]},{"id":8,"city_id":1,"name":"Тц \"BOTANICA\"","address":"Москва, ул. Вильгельма Пика, 11, -1 этаж, у банкоматов","type":"postamat","metro":"Ботанический сад","hours_weekday":"10:00–21:00","hours_weekend":"11:00–19:00","hours":"Ежедневно: 10:00-22:00","image_url":"/public/assets/images/solefresh/1771056980093-6663.svg","lat":55.839362,"lng":37.63773,"sort_order":8,"yandex_maps_url":"https://yandex.com/maps/-/CPVCb6ng","review_google_url":"https://maps.app.goo.gl/NgP6GniDErvnbwSF9","review_yandex_url":"https://yandex.ru/maps/org/sole_fresh/214736183776/reviews/?ll=37.637730%2C55.839362&z=14","review_2gis_url":"","photos":[]},{"id":9,"city_id":1,"name":"Lamoda Sport \"Красная Пресня\"","address":"Москва, ул. Красная Пресня, 23, с1а","type":"lamoda","metro":"Улица 1905 года","hours_weekday":"10:00–21:00","hours_weekend":"11:00–19:00","hours":"Ежедневно: 10:00-22:00","image_url":"/public/assets/images/solefresh/1771051449560-4003.svg","lat":55.760296,"lng":37.555527,"sort_order":9,"yandex_maps_url":"https://yandex.ru/maps/-/CPUBUBot","review_google_url":"https://maps.app.goo.gl/8VxLxw7NEkCztQbP8","review_yandex_url":"https://yandex.ru/maps/org/sole_fresh/188712624145/reviews/?ll=37.555527%2C55.760296&mode=search&sctx=ZAAAAAgBEAAaKAoSCaHUHrrjzUJAEU8H1gQp4EtAEhIJ1d2gFnNf0D8RHmEvi1VfmT8iBgABAgMEBSgKOABAq4lP&sll=37.555527%2C55.760296&sspn=0.023284%2C0.008108&z=15","review_2gis_url":"","photos":[]}];

  var _schemaScale = 1;
  var _schemaMinScale = 0.5;
  var _schemaMaxScale = 4;
  var _schemaBaseWidth = 0;

  function openSchemaPopup(src, title) {
    _schemaScale = 1;
    var popup = document.getElementById('schema-popup');
    var img = document.getElementById('schema-popup-img');
    var vp = document.getElementById('schema-viewport');
    img.style.width = '';
    img.style.maxWidth = '95vw';
    img.style.transform = '';
    img.src = src;
    img.alt = 'Схема — ' + title;
    popup.classList.add('open');
    document.body.style.overflow = 'hidden';
    img.onload = function() {
      _schemaBaseWidth = img.offsetWidth;
    };
    if (img.complete && img.naturalWidth) {
      setTimeout(function() { _schemaBaseWidth = img.offsetWidth; }, 50);
    }
    vp.scrollTop = 0;
    vp.scrollLeft = 0;
  }

  function closeSchemaPopup() {
    document.getElementById('schema-popup').classList.remove('open');
    document.body.style.overflow = '';
  }

  function schemaApplyZoom() {
    var img = document.getElementById('schema-popup-img');
    var vp = document.getElementById('schema-viewport');
    if (!_schemaBaseWidth) _schemaBaseWidth = img.offsetWidth || img.naturalWidth;
    var newW = _schemaBaseWidth * _schemaScale;
    var cx = vp.scrollWidth > vp.clientWidth ? (vp.scrollLeft + vp.clientWidth / 2) / vp.scrollWidth : 0.5;
    var cy = vp.scrollHeight > vp.clientHeight ? (vp.scrollTop + vp.clientHeight / 2) / vp.scrollHeight : 0.5;
    img.style.maxWidth = 'none';
    img.style.width = newW + 'px';
    vp.scrollLeft = vp.scrollWidth * cx - vp.clientWidth / 2;
    vp.scrollTop = vp.scrollHeight * cy - vp.clientHeight / 2;
  }

  function schemaZoom(dir) {
    var step = 0.3;
    _schemaScale = Math.min(_schemaMaxScale, Math.max(_schemaMinScale, _schemaScale + dir * step));
    schemaApplyZoom();
  }

  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeSchemaPopup();
  });

  (function() {
    var vp = document.getElementById('schema-viewport');
    if (!vp) return;
    var startDist = 0;
    var startScale = 1;

    vp.addEventListener('touchstart', function(e) {
      if (e.touches.length === 2) {
        startDist = Math.hypot(
          e.touches[0].clientX - e.touches[1].clientX,
          e.touches[0].clientY - e.touches[1].clientY
        );
        startScale = _schemaScale;
      }
    }, { passive: true });

    vp.addEventListener('touchmove', function(e) {
      if (e.touches.length === 2) {
        var dist = Math.hypot(
          e.touches[0].clientX - e.touches[1].clientX,
          e.touches[0].clientY - e.touches[1].clientY
        );
        _schemaScale = Math.min(_schemaMaxScale, Math.max(_schemaMinScale, startScale * (dist / startDist)));
        schemaApplyZoom();
      }
    }, { passive: true });

    vp.addEventListener('wheel', function(e) {
      e.preventDefault();
      schemaZoom(e.deltaY < 0 ? 1 : -1);
    }, { passive: false });
  })();
</script>
<script src="/public/assets/js/solefresh/phone-mask.js" defer></script>
<script src="/public/assets/js/solefresh/contacts.js" defer></script>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
