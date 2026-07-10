<?php
use App\Config\Session;
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/order', 'priority' => '0.7', 'changefreq' => 'monthly', 'index' => 'orders'];

$orderNum = Session::init('sf_order_num') ?? '';

$pageTitle = $pageTitle ?? 'Передать обувь в чистку MANDO MEMORI в Москве — вызов курьера';
$pageDesc = $pageDesc ?? 'Просто назовите номер чека курьеру — никаких объяснений, всё уже в системе MANDO MEMORI.';
$pageKeywords = $pageKeywords ?? 'передать обувь в чистку Москва, вызов курьера чистка обуви';
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
    <p class="ord-hero__desc">Заказ создан. Вызовите курьера ниже — PDF-чек с деталями придёт на вашу почту после вызова. Ничего распечатывать не нужно.</p>
    <?php
    $gadsId = $_ENV['GADS_ID'] ?? '';
    $gadsLabel = $_ENV['GADS_LABEL'] ?? '';
    if ($gadsId && $gadsLabel):
    ?>
    <script>gtag('event','conversion',{'send_to':'<?= $gadsId ?>/<?= $gadsLabel ?>'});</script>
    <?php endif; ?>
    <?php if ($_ENV['YM_ID'] ?? ''): ?>
    <script>if(typeof ym==='function') ym('reachGoal','order_created');</script>
    <?php endif; ?>

    <div class="ord-steps" itemscope itemtype="https://schema.org/HowTo">
      <div class="ord-step" itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
        <span class="ord-step__num" itemprop="position">Шаг 1</span>
        <h3 class="ord-step__title" itemprop="name">Выберите способ передачи</h3>
        <p class="ord-step__desc" itemprop="text">Вызовите курьера — он сам заберёт обувь и привезёт обратно</p>
      </div>
      <div class="ord-step" itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
        <span class="ord-step__num" itemprop="position">Шаг 2</span>
        <h3 class="ord-step__title" itemprop="name">Назовите номер заказа</h3>
        <p class="ord-step__desc" itemprop="text">Сотрудник или курьер найдёт заказ в системе по номеру — никаких лишних вопросов</p>
      </div>
      <div class="ord-step" itemprop="step" itemscope itemtype="https://schema.org/HowToStep">
        <span class="ord-step__num" itemprop="position">Шаг 3</span>
        <h3 class="ord-step__title" itemprop="name">Отдайте обувь</h3>
        <p class="ord-step__desc" itemprop="text">Курьер заберёт её сразу — мастер приступает к работе</p>
      </div>
    </div>

    <div class="ord-scroll">
      <div class="ord-scroll__mouse"></div>
      <div class="ord-scroll__chevron"></div>
    </div>
    <?php else: ?>
    <h1 class="ord-hero__title">Передать обувь</h1>
    <p class="ord-hero__desc">Бесплатно вызовем курьера — он заберёт и привезёт обувь обратно</p>
    <?php endif; ?>
  </section>

  <section class="ord-about">
    <div class="ord-about__grid">
      <p class="ord-about__tagline">Химчистка обуви с 2015 года</p>
      <p class="ord-about__desc">MANDO MEMORI — профессиональная химчистка обуви в Москве. Чистим кроссовки, замшу, нубук, кожу. Отбеливание подошвы, покраска, реставрация. Бесплатная доставка курьером. Более 1 000 000 пар очищено.</p>
    </div>
  </section>

  <section class="ord-handover">
    <div class="ord-handover-inner">
    <div class="courier-form-wrapper" id="courier-form">
      <div class="courier-form-card">
        <h2 class="courier-form-title" style="color: black;">Вызов курьера</h2>
        <p class="courier-form-subtitle"><?= $orderNum ? 'PDF-чек с деталями заказа придёт вам на почту' : 'Оставьте контакты — курьер приедет за обувью' ?></p>
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
          <div class="form-field" style="margin-top:20px">
            <label for="cf-email">Email (на него придёт PDF-чек)</label>
            <input type="email" id="cf-email" name="email" placeholder="example@mail.ru">
          </div>
          <?php endif; ?>
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

  <section class="ord-cta" itemscope itemtype="https://schema.org/ContactPoint">
    <div class="ord-cta__inner">
      <h2 class="ord-cta__title">Остались вопросы?</h2>
      <p class="ord-cta__desc">Напишите в Telegram или позвоните — ответим оперативно</p>
      <div class="ord-cta__btns">
        <a href="https://t.me/mandomemori_bot" target="_blank" class="ord-cta__btn ord-cta__btn--tg" itemprop="contactType" content="Telegram">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20.665 3.717l-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z"/></svg>
          Telegram, mandomemori_bot
        </a>
        <a href="tel:+74951980495" class="ord-cta__btn ord-cta__btn--phone" itemprop="telephone">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
          +7 (915) 252-75-75
        </a>
      </div>
      <p class="ord-cta__hint">Если что-то пошло не так — просто напишите, и мы поможем</p>
    </div>
  </section>

</main>
  <script src="/public/assets/js/mandomemori/phone-mask.js" defer></script>
  <script src="/public/assets/js/mandomemori/contacts.js" defer></script>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
