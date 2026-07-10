<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/about', 'priority' => '0.8', 'changefreq' => 'monthly', 'index' => 'main'];

$pageTitle = 'О нас — MANDO MEMORI, химчистка обуви в Москве, более 1 000 000 пар очищено';
$pageDesc = 'MANDO MEMORI — профессиональная химчистка обуви в Москве с 2015 года. Более 1 млн пар обуви очищено. Чистка кроссовок, отбеливание подошвы, премиум-уход.';
$pageKeywords = 'MANDO MEMORI о нас, химчистка обуви Москва, чистка кроссовок, отбеливание подошвы, реставрация обуви';
$canonical = $_SERVER['REQUEST_URI'] ?? '/about';
require __DIR__ . '/../../partials/header.php';
?>
<style>
html, body { background: #121212; margin: 0; }
.anp {
  --anp-bg: #121212;
  --anp-fg: #ffffff;
  --anp-muted: rgba(255,255,255,0.6);
  --anp-hairline: rgba(255,255,255,0.1);
  --anp-max: 1440px;
  --anp-pad-x: clamp(1.25rem, 5vw, 5.5rem);
  --anp-pad-y: clamp(5rem, 11vw, 9rem);
  background: var(--anp-bg);
  color: var(--anp-fg);
  font-family: var(--font);
  min-height: 100vh;
  overflow-x: hidden;
  -webkit-font-smoothing: antialiased;
}
.anp *, .anp *::before, .anp *::after { box-sizing: border-box; }

/* ───── HERO ───── */
.anp-hero {
  position: relative;
  height: 90vh;
  height: 90dvh;
  padding: 48px 3vw 0;
  display: grid;
  grid-template-rows: auto 1fr;
  gap: clamp(0.75rem, 1.5vw, 1.5rem);
  background: var(--anp-bg);
  isolation: isolate;
  overflow: hidden;
  box-sizing: border-box;
}
.anp-hero__top {
  position: relative;
  border-radius: clamp(10px, 1.4vw, 18px);
  overflow: hidden;
  background-color: var(--anp-bg);
}
.anp-hero__cutout {
  display: block;
  width: 100%;
  height: auto;
  position: relative;
  z-index: 1;
}
.anp-hero__cutout text {
  font-family: var(--font-heading), sans-serif;
  font-weight: 800;
  font-size: 16px;
  letter-spacing: 0;
}
.anp-hero__card {
  position: relative;
  border-radius: clamp(14px, 2vw, 24px);
  overflow: hidden;
  background-color: var(--anp-bg);
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  display: flex;
  flex-direction: column;
}
.anp-hero__card-overlay {
  position: absolute; inset: 0;
  pointer-events: none;
}
.anp-hero__spacer { flex: 1 1 auto; }
.anp-hero__bottom {
  position: relative;
  z-index: 2;
  padding: clamp(1.25rem, 2.5vw, 2rem);
  display: grid;
  grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
  gap: 1.5rem;
  align-items: end;
}
.anp-hero__desc {
  margin: 0;
  justify-self: end;
  text-align: right;
  max-width: 60ch;
  font-size: clamp(0.85rem, 1vw, 0.95rem);
  line-height: 1.55;
  color: rgba(255,255,255,0.9);
}
.anp-hero__tagline {
  margin: 0;
  justify-self: start;
  text-align: left;
  font-family: var(--font-heading);
  font-size: clamp(1.4rem, 2.6vw, 2.25rem);
  font-weight: 500;
  letter-spacing: -0.02em;
  line-height: 1.15;
  max-width: 14ch;
  color: #fff;
}

/* ───── SECTION (generic) ───── */
.anp-section {
  position: relative;
  padding: var(--anp-pad-y) var(--anp-pad-x);
  border-top: 1px solid var(--anp-hairline);
  background: var(--anp-bg);
}
.anp-hero + .anp-section,
.anp-hero + .anp-partners,
.anp-hero + .anp-cards { border-top: none; }
.anp-section__overlay {
  position: absolute;
  inset: 0;
  pointer-events: none;
}
.anp-section__grid {
  position: relative;
  z-index: 1;
  max-width: var(--anp-max);
  margin: 0 auto;
  display: grid;
  grid-template-columns: minmax(0, 5fr) minmax(0, 7fr);
  gap: clamp(1.5rem, 4vw, 4.5rem);
  align-items: start;
}
.anp-section__title {
  font-family: var(--font-heading);
  font-size: clamp(1.65rem, 2.75vw, 2.4rem);
  font-weight: 600;
  letter-spacing: -0.02em;
  line-height: 1.1;
  margin: 0;
}
.anp-section__content {
  font-size: clamp(0.98rem, 1.15vw, 1.125rem);
  line-height: 1.65;
  color: rgba(255,255,255,0.88);
}
.anp-section__content--accent {
  color: var(--accent);
  font-weight: 500;
}

#s-about,
#s-experience,
#s-technology,
#s-quality {
  background: #fff;
  position: relative;
  overflow: hidden;
}
#s-about::before,
#s-experience::before,
#s-technology::before,
#s-quality::before {
  position: absolute;
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: clamp(8rem, 14vw, 16rem);
  line-height: 1;
  color: rgba(212,86,42,0.04);
  pointer-events: none;
  z-index: 0;
}
#s-about::before { content: '01'; top: -1rem; right: clamp(1rem, 4vw, 3rem); }
#s-experience::before { content: '02'; top: -1rem; right: clamp(1rem, 4vw, 3rem); }
#s-technology::before { content: '03'; top: -1rem; right: clamp(1rem, 4vw, 3rem); }
#s-quality::before { content: '04'; top: -1rem; right: clamp(1rem, 4vw, 3rem); }
#s-about .anp-section__grid,
#s-experience .anp-section__grid,
#s-technology .anp-section__grid,
#s-quality .anp-section__grid {
  position: relative;
  z-index: 1;
  grid-template-columns: 1fr 1.3fr;
  gap: clamp(2rem, 5vw, 5rem);
  align-items: start;
}
#s-about .anp-section__title,
#s-experience .anp-section__title,
#s-technology .anp-section__title,
#s-quality .anp-section__title {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3vw, 2.6rem);
  font-weight: 600;
  letter-spacing: -0.03em;
  line-height: 1.05;
  margin: 0;
  color: #000;
  position: relative;
  padding-top: 0.5rem;
}
#s-about .anp-section__title::before,
#s-experience .anp-section__title::before,
#s-technology .anp-section__title::before,
#s-quality .anp-section__title::before {
  content: '';
  display: block;
  width: 40px;
  height: 3px;
  background: var(--accent);
  margin-bottom: 1.5rem;
}
#s-about .anp-section__content,
#s-experience .anp-section__content,
#s-technology .anp-section__content,
#s-quality .anp-section__content {
  font-size: clamp(1rem, 1.15vw, 1.125rem);
  line-height: 1.7;
  color: #000;
  margin: 0;
}
#s-about .anp-section__content a,
#s-experience .anp-section__content a,
#s-technology .anp-section__content a,
#s-quality .anp-section__content a {
  color: var(--accent);
  text-decoration: none;
  border-bottom: 1px solid rgba(212,86,42,0.3);
  transition: border-color 0.2s ease;
}
#s-about .anp-section__content a:hover,
#s-experience .anp-section__content a:hover,
#s-technology .anp-section__content a:hover,
#s-quality .anp-section__content a:hover {
  border-bottom-color: var(--accent);
}


.anp-section__content p { margin: 0 0 1em; }
.anp-section__content p:last-child { margin-bottom: 0; }
.anp-section__content a {
  color: inherit;
  text-decoration: underline;
  text-underline-offset: 3px;
}

.anp-section__media {
  position: relative;
  z-index: 1;
  max-width: var(--anp-max);
  margin: clamp(2.5rem, 5vw, 4.5rem) auto 0;
  border-radius: 2px;
  overflow: hidden;
}
.anp-section--media-top .anp-section__media {
  margin: 0 auto clamp(2.5rem, 5vw, 4.5rem);
}
.anp-img {
  display: block;
  width: 100%;
  height: auto;
  object-fit: cover;
}

/* Side layout (image_position: left / right) */
.anp-section--side .anp-section__grid {
  grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
  align-items: center;
  gap: clamp(1.5rem, 5vw, 5.5rem);
}
.anp-section--side .anp-section__text {
  display: flex;
  flex-direction: column;
  gap: clamp(1rem, 1.8vw, 1.5rem);
}
.anp-section--side-left .anp-section__text  { order: 2; }
.anp-section--side-left .anp-section__media-inline { order: 1; }
.anp-section__media-inline {
  border-radius: 2px;
  overflow: hidden;
}
.anp-section__media-inline img { width: 100%; height: auto; display: block; }

/* Slider (multiple images) */
.anp-slider {
  display: grid;
  grid-auto-flow: column;
  grid-auto-columns: clamp(260px, 42vw, 520px);
  gap: clamp(0.75rem, 1.2vw, 1.25rem);
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  -webkit-overflow-scrolling: touch;
  scrollbar-width: none;
}
.anp-slider::-webkit-scrollbar { display: none; }
.anp-slider__item {
  scroll-snap-align: start;
  overflow: hidden;
  border-radius: 2px;
}
.anp-slider__item img {
  width: 100%;
  height: 100%;
  display: block;
  aspect-ratio: 4 / 3;
  object-fit: cover;
}

/* ───── NUMBERS ───── */
.anp-numbers {
  position: relative;
  padding: var(--anp-pad-y) var(--anp-pad-x);
  background: var(--anp-bg);
}
.anp-numbers__grid {
  max-width: var(--anp-max);
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(4, minmax(0, 1fr));
  gap: 0;
  border: 1px solid rgba(255,255,255,0.08);
}
.anp-number {
  padding: clamp(2.25rem, 3.5vw, 3rem) clamp(1.5rem, 2vw, 2rem);
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 0.75rem;
  border-right: 1px solid rgba(255,255,255,0.06);
}
.anp-number:last-child { border-right: none; }
.anp-number__value {
  font-family: var(--font-heading);
  font-size: clamp(2.5rem, 4.5vw, 4rem);
  font-weight: 700;
  letter-spacing: -0.03em;
  line-height: 1;
  background: linear-gradient(135deg, #fff 0%, var(--accent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.anp-number__label {
  font-size: clamp(0.82rem, 0.9vw, 0.92rem);
  color: #000;
  background: #fff;
  padding: 4px 14px;
  border-radius: 4px;
  display: inline-block;
  text-transform: uppercase;
  letter-spacing: 0.06em;
}

/* ───── CARDS ───── */
.anp-cards {
  position: relative;
  padding: var(--anp-pad-y) var(--anp-pad-x);
  background: #fff;
}
.anp-cards__grid {
  max-width: var(--anp-max);
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: clamp(1.5rem, 2.5vw, 2.5rem);
}
.anp-card {
  background: #f9f9f9;
  border: 1px solid rgba(0,0,0,0.06);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}
.anp-card:hover {
  border-color: rgba(0,0,0,0.12);
  box-shadow: 0 4px 20px rgba(0,0,0,0.06);
}
.anp-card__media {
  aspect-ratio: 16 / 10;
  overflow: hidden;
  position: relative;
}
.anp-card__media::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(0deg, rgba(0,0,0,0.15) 0%, transparent 45%);
  pointer-events: none;
}
.anp-card__media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.5s ease;
}
.anp-card:hover .anp-card__media img {
  transform: scale(1.05);
}
.anp-card__body {
  padding: clamp(1.5rem, 2.5vw, 2.25rem);
  display: flex;
  flex-direction: column;
  gap: 1rem;
  flex: 1;
}
.anp-card__title {
  font-family: var(--font-heading);
  font-size: clamp(1.25rem, 1.8vw, 1.6rem);
  font-weight: 600;
  letter-spacing: -0.01em;
  line-height: 1.15;
  margin: 0;
  color: #000;
}
.anp-card__content {
  font-size: clamp(0.92rem, 1vw, 1rem);
  line-height: 1.65;
  color: rgba(0,0,0,0.72);
}
.anp-card__content p { margin: 0 0 0.75em; }
.anp-card__content p:last-child { margin-bottom: 0; }

/* ───── CTA ───── */
.anp-cta {
  position: relative;
  padding: var(--anp-pad-y) var(--anp-pad-x);
  background: #1C1512;
}
.anp-cta__inner {
  max-width: var(--anp-max);
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: clamp(1.25rem, 2vw, 1.75rem);
  padding: clamp(3rem, 5vw, 4.5rem) clamp(2rem, 4vw, 4rem);
}
.anp-cta__title {
  font-family: var(--font-heading);
  font-size: clamp(2rem, 3.5vw, 3rem);
  font-weight: 600;
  letter-spacing: -0.02em;
  line-height: 1.1;
  margin: 0;
  max-width: 20ch;
  color: #fff;
}
.anp-cta__desc {
  font-size: clamp(1.05rem, 1.15vw, 1.125rem);
  color: rgba(255,255,255,0.7);
  margin: 0;
  max-width: 48ch;
}
.anp-cta__btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 1rem 3rem;
  background: var(--accent);
  color: #fff;
  font-family: var(--font);
  font-size: 1rem;
  font-weight: 600;
  border: 1px solid rgba(255,255,255,0.15);
  border-radius: 2px;
  text-decoration: none;
  cursor: pointer;
  transition: background 0.3s ease, box-shadow 0.3s ease;
}
.anp-cta__btn:hover {
  background: rgba(212,86,42,0.85);
  box-shadow: 0 8px 32px rgba(212,86,42,0.3);
}

/* ───── PARTNERS ───── */
.anp-partners {
  position: relative;
  padding: var(--anp-pad-y) var(--anp-pad-x);
  background: #fff;
}
.anp-partners__head {
  max-width: var(--anp-max);
  margin: 0 auto clamp(2.5rem, 4vw, 3.5rem);
}
.anp-partners__title {
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 2.8vw, 2.4rem);
  font-weight: 600;
  letter-spacing: -0.02em;
  line-height: 1.1;
  margin: 0;
  color: #000;
}
.anp-partners__grid {
  max-width: var(--anp-max);
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 1px;
  background: rgba(0,0,0,0.08);
  border: 1px solid rgba(0,0,0,0.08);
}
.anp-partner {
  background: #fff;
  padding: clamp(2rem, 3vw, 2.75rem) clamp(1.5rem, 2.5vw, 2.25rem);
  display: flex;
  flex-direction: column;
  gap: 1rem;
  min-height: 180px;
  transition: background 0.3s ease;
}
.anp-partner:hover {
  background: rgba(0,0,0,0.02);
}
.anp-partner__logo {
  height: 80px;
  display: flex;
  align-items: center;
}
.anp-partner__logo img {
  max-height: 100%;
  max-width: 200px;
  object-fit: contain;
  display: block;
  opacity: 1;
}
.anp-partner__name {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 600;
  letter-spacing: -0.01em;
  margin: 0;
  color: #000;
}
.anp-partner__desc {
  font-size: 0.9rem;
  line-height: 1.55;
  color: rgba(0,0,0,0.6);
  margin: 0;
}

/* ───── RESPONSIVE ───── */
@media (max-width: 860px) {
  .anp-section__grid,
  .anp-section--side .anp-section__grid {
    grid-template-columns: 1fr;
    gap: 1.5rem;
  }
  .anp-section--side-left .anp-section__text,
  .anp-section--side-left .anp-section__media-inline { order: initial; }
  .anp-numbers__grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
  .anp-number:nth-child(2) { border-right: none; }
  .anp-partners__grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}
@media (max-width: 720px) {
  .anp-cards__grid { grid-template-columns: 1fr; }
  .anp-numbers__grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
  .anp-partners__grid {
    grid-template-columns: 1fr;
  }
}
@media (max-width: 768px) {
  .anp-hero__bottom { grid-template-columns: 1fr; gap: 1rem; }
  .anp-hero__desc { justify-self: start; text-align: left; max-width: 100%; }
}
</style>

<main class="main anp">

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

  <section class="anp-hero" itemscope itemtype="https://schema.org/Organization">
    <meta itemprop="name" content="MANDO MEMORI">
    <div class="anp-hero__top">
      <svg class="anp-hero__cutout" viewBox="0 0 100 30" preserveAspectRatio="xMidYMid meet" role="img" aria-label="MANDO MEMORI">
        <defs>
          <mask id="anp-hero-cut" maskUnits="userSpaceOnUse" x="-1" y="-1" width="102" height="32">
            <rect x="-1" y="-1" width="102" height="32" fill="white"/>
            <text x="50" y="14" text-anchor="middle" fill="black">
              <tspan x="50" dy="0">MANDO</tspan>
              <tspan x="50" dy="13">MEMORI</tspan>
            </text>
          </mask>
        </defs>
          <image href="/public/assets/images/mandomemori/bg.gif" x="0" y="0" width="100" height="30" preserveAspectRatio="xMidYMid slice"/>
        <rect x="-1" y="-1" width="102" height="32" fill="#121212" mask="url(#anp-hero-cut)"/>
      </svg>
    </div>

    <div class="anp-hero__card" style="background-image:url('/public/assets/images/mandomemori/bg.gif')">
      <div class="anp-hero__card-overlay" style="background:rgba(0, 0, 0, 0.52)"></div>
      <div class="anp-hero__spacer"></div>
      <div class="anp-hero__bottom">
          <h1 class="anp-hero__tagline">Химчистка обуви с 2015 года</h1>
          <p class="anp-hero__desc" itemprop="description">MANDO MEMORI — профессиональный сервис химчистки обуви в Москве. Чистим кроссовки, ботинки, туфли, замшу, нубук и премиальные бренды. Отбеливание подошвы, покраска, реставрация — полный цикл ухода.</p>
      </div>
    </div>
  </section>

        <section class="anp-section" id="s-about">
            <div class="anp-section__grid">
                <h2 class="anp-section__title" data-blur-title>О нас</h2>
                <div class="anp-section__content" data-blur-content><p>MANDO MEMORI — профессиональная химчистка обуви в Москве. Мы принимаем обувь любого типа: кроссовки, ботинки, лоферы, кеды, зимние сапоги, угги. Работаем со всеми материалами — гладкая и лакированная кожа, текстиль, замша, нубук, комбинированные поверхности.</p><p>Наши услуги включают: химчистка кроссовок, отбеливание подошвы, покраска и реставрация цвета, чистка замши и нубука, водоотталкивающая пропитка, премиум-уход за брендовой обувью (Loro Piana, Gucci, Prada).</p></div>
            </div>
        </section>

        <section class="anp-section" id="s-experience">
            <div class="anp-section__grid">
                <h2 class="anp-section__title" data-blur-title>Опыт и стандарты</h2>
                <div class="anp-section__content" data-blur-content><p>MANDO MEMORI начал работу в 2015 году и быстро нашёл отклик у ценителей качественного ухода за обувью. За более чем 10 лет мы сформировали чёткие стандарты: единая система контроля, профессиональная команда, технологичная инфраструктура.</p><p>Более 1 100 000 пар обуви прошли через наши руки — кроссовки, туфли, сапоги, брендовая обувь. Каждый день мы совершенствуем процессы химчистки, отбеливания подошвы и реставрации, чтобы результат оставался стабильно высоким.</p></div>
            </div>
        </section>

        <section class="anp-section" id="s-technology">
            <div class="anp-section__grid">
                <h2 class="anp-section__title" data-blur-title>Технология</h2>
                <div class="anp-section__content" data-blur-content><p>В работе применяем профессиональную химию и специализированное оборудование для химчистки обуви. Ручной труд используем там, где требуется особая аккуратность — при отбеливании подошвы, покраске и реставрации цвета.</p><p>Каждый заказ начинается с диагностики: оцениваем тип материала, степень загрязнения и износ. Это позволяет подобрать безопасную методику чистки кроссовок, замши, нубука или премиальной обуви и добиться наилучшего результата.</p></div>
            </div>
        </section>

        <section class="anp-section" id="s-quality">
            <div class="anp-section__grid">
                <h2 class="anp-section__title" data-blur-title>Качество</h2>
                <div class="anp-section__content" data-blur-content><p>Качество химчистки обуви для нас — это процесс, а не случайность. Мы фиксируем исходное состояние каждой пары при приёме и проводим финальную проверку перед выдачей. Результат: безупречно чистая обувь, отбеленная подошва, восстановленный цвет.</p><p>Если особенности материала или износ не позволяют достичь идеала — мы честно говорим об этом на старте, чтобы избежать неоправданных ожиданий. Нам важно, чтобы вы остались довольны качеством чистки.</p></div>
            </div>
        </section>

        <section class="anp-numbers" id="s-numbers" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
          <meta itemprop="ratingValue" content="4.9">
          <meta itemprop="bestRating" content="5">
          <meta itemprop="ratingCount" content="1100000">
          <div class="anp-numbers__grid">
            <div class="anp-number">
              <span class="anp-number__value">1 100 000+</span>
              <span class="anp-number__label">Пар обуви очищено</span>
            </div>
            <div class="anp-number">
              <span class="anp-number__value">10+</span>
              <span class="anp-number__label">Лет опыта</span>
            </div>
            <div class="anp-number">
              <span class="anp-number__value">12</span>
              <span class="anp-number__label">Пунктов приёма</span>
            </div>
            <div class="anp-number">
              <span class="anp-number__value">4.9 ★</span>
              <span class="anp-number__label">Средняя оценка</span>
            </div>
          </div>
        </section>

        <section class="anp-cards">
          <div class="anp-cards__grid">
              <article class="anp-card" id="s-kurer">
                  <div class="anp-card__media"><img src="/public/assets/images/mandomemori/curier.png" alt="Курьерская доставка MANDO MEMORI" loading="lazy"></div>
                <div class="anp-card__body">
                  <h2 class="anp-card__title" data-blur-title>Курьер</h2>
                  <div class="anp-card__content" data-blur-content><p>Бесплатно забираем обувь курьером и привозим обратно после чистки. Курьер приезжает в удобное время — вы называете номер заказа, и он забирает обувь для передачи мастерам.</p></div>
                </div>
              </article>
          </div>
        </section>

      <section class="anp-cta" id="s-cta">
        <div class="anp-cta__inner">
          <h2 class="anp-cta__title" data-blur-title>Готовы попробовать?</h2>
          <p class="anp-cta__desc" data-blur-content>Оставьте онлайн-заявку и получите скидку 15% на первый заказ</p>
          <a href="/order" class="anp-cta__btn">Оставить заявку</a>
        </div>
      </section>

      <section class="anp-partners" id="s-partners">
        <div class="anp-partners__head">
          <h2 class="anp-partners__title" data-blur-title>Партнёры</h2>
        </div>
        <div class="anp-partners__grid">
            <div class="anp-partner">
                <div class="anp-partner__logo">
                  <img src="/public/assets/images/mandomemori/бренд1.png" alt="Логотип Lamoda Sport" loading="lazy">
                </div>
              <h3 class="anp-partner__name">Lamoda Sport</h3>
              <p class="anp-partner__desc">Специальные условия обслуживания для клиентов сети</p>
            </div>
            <div class="anp-partner">
                <div class="anp-partner__logo">
                  <img src="/public/assets/images/mandomemori/бренд2.png" alt="Логотип HOVERS" loading="lazy">
                </div>
              <h3 class="anp-partner__name">HOVERS</h3>
              <p class="anp-partner__desc">Специальные условия обслуживания для обуви ручной работы</p>
            </div>
            <div class="anp-partner">
                <div class="anp-partner__logo">
                  <img src="/public/assets/images/mandomemori/бренд3.png" alt="Логотип Time Up" loading="lazy">
                </div>
              <h3 class="anp-partner__name">Time Up</h3>
              <p class="anp-partner__desc">Профессиональный уход за гоночной экипировкой команды</p>
            </div>
        </div>
      </section>

</main>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
<script src="https://unpkg.com/split-type@0.3.4/umd/index.min.js"></script>
<script>
(function() {
  if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined' || typeof SplitType === 'undefined') return;
  gsap.registerPlugin(ScrollTrigger);

  var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (reduce) return;

  // Hero corners — single intro fade
  var heroParts = document.querySelectorAll('.anp-hero__desc, .anp-hero__tagline');
  if (heroParts.length) {
    gsap.fromTo(heroParts, {
      opacity: 0, y: 20, filter: 'blur(10px)'
    }, {
      opacity: 1,
      y: 0, filter: 'blur(0px)',
      duration: 1.0, ease: 'power3.out', stagger: 0.12, delay: 0.15
    });
  }

  // Section titles — char-by-char blur reveal on scroll
  document.querySelectorAll('.anp [data-blur-title]').forEach(function(el) {
    if (el.closest('.anp-hero')) return;
    var split = new SplitType(el, { types: 'words, chars' });
    gsap.fromTo(split.chars, {
      filter: 'blur(10px) brightness(0%)', willChange: 'filter'
    }, {
      ease: 'none',
      filter: 'blur(0px) brightness(100%)',
      stagger: 0.03,
      scrollTrigger: { trigger: el, start: 'top bottom', end: 'bottom center', scrub: true }
    });
  });

  // Section content — word-by-word blur reveal on scroll
  document.querySelectorAll('.anp [data-blur-content]').forEach(function(el) {
    if (el.closest('.anp-hero')) return;
    var targets = el.querySelectorAll('p, h2, h3, h4, li, span');
    if (targets.length === 0) targets = [el];
    targets.forEach(function(target) {
      var split = new SplitType(target, { types: 'words' });
      gsap.fromTo(split.words, {
        opacity: 0, filter: 'blur(8px)', willChange: 'filter, transform'
      }, {
        ease: 'sine',
        opacity: 1, filter: 'blur(0px)',
        stagger: 0.02,
        scrollTrigger: { trigger: target, start: 'top bottom', end: 'bottom center', scrub: true }
      });
    });
  });
})();
</script>

  <?php require __DIR__ . '/../../partials/footer.php'; ?>