<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/contacts', 'priority' => '0.7', 'changefreq' => 'monthly', 'index' => 'main'];

$pageTitle = 'Контакты — MANDO MEMORI, химчистка обуви в Москве с бесплатной доставкой';
$pageDesc = 'Контакты MANDO MEMORI в Москве. Телефон +7 495 198-04-95, Telegram. Химчистка обуви с бесплатной доставкой курьером.';
$pageKeywords = 'контакты MANDO MEMORI, химчистка обуви Москва, курьерская доставка';
$canonical = $_SERVER['REQUEST_URI'] ?? '/contacts';
require __DIR__ . '/../../partials/header.php';
?>


<main class="main">
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

  <section class="contacts-hero">
    <div class="container">
      <h1 class="contacts-title">Контакты</h1>
      <p class="contacts-subtitle">Мы всегда на связи — выбирайте удобный способ</p>
    </div>
  </section>

    <section class="contacts-duo">
      <div class="container">
        <div class="contacts-duo-grid">
          <div class="contacts-duo-card contacts-duo-photo">
            <img src="/public/assets/images/mandomemori/1772183654955-9859.jpg" alt="MANDO MEMORI — мастерская" loading="lazy">
          </div>

          <div class="contacts-duo-card contacts-duo-info">
            <h2 class="contacts-duo-heading">Наши контакты</h2>
            <p class="contacts-duo-text">Химчистка обуви в Москве. Напишите в Telegram или позвоните — ответим в ближайшее время</p>

            <div class="contacts-duo-btns">
                <a href="https://t.me/mandomemori" target="_blank" class="contact-btn contact-btn-tg">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.665 3.717l-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z"/></svg>
                  Telegram, @mandomemori
                </a>
                <a href="tel:+74951980495" class="contact-btn contact-btn-phone">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                  +7 495 198-04-95
                </a>
            </div>

            <div class="contacts-duo-links">
                <div class="contacts-duo-link">
                  <span>Отзывы</span>
                  <a href="mailto:feedback@mandomemori.ru">feedback@mandomemori.ru</a>
                </div>
                <div class="contacts-duo-link">
                  <span>Сотрудничество</span>
                  <a href="mailto:hello@mandomemori.ru">hello@mandomemori.ru</a>
                </div>
                <div class="contacts-duo-link">
                  <span>Telegram канал</span>
                  <a href="https://t.me/mandomemori" target="_blank">@mandomemori</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>

  <?php require __DIR__ . '/../../partials/footer.php'; ?>