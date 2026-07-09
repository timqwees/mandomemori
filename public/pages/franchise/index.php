<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/franchise', 'priority' => '0.6', 'changefreq' => 'monthly', 'index' => 'main'];

$pageTitle = 'Франшиза — MANDO MEMORI, химчистка обуви';
$pageDesc = 'Франшиза MANDO MEMORI — откройте собственную химчистку обуви по проверенной модели. Обучение, оборудование, поддержка.';
$pageKeywords = 'франшиза химчистки обуви, MANDO MEMORI франшиза';
$canonical = $_SERVER['REQUEST_URI'] ?? '/franchise';
require __DIR__ . '/../../partials/header.php';
?>

<main class="main franchise-page">

  <section class="fr-intro" style="background-color:#1d1d1f;background-image:url('/public/assets/images/mandomemori/фон чистки2.jpg');color:#ffffff">
    <div class="container fr-intro-content">
      <p class="fr-intro-label" style="font-size:13px;text-transform:uppercase;letter-spacing:2px;opacity:0.6;margin-bottom:12px">Франшиза</p>
      <h1 class="fr-intro-title">Откройте химчистку обуви<br>по франшизе MANDO MEMORI</h1>
      <p class="fr-intro-desc">11 лет на рынке, 1 100 000+ пар обуви, 26 городов в 8 странах.<br>Готовый бизнес под ключ с обучением и сопровождением.</p>
    </div>
  </section>

  <section class="fr-section" style="padding:80px 0">
    <div class="container">
      <h2 class="fr-section-title">Почему MANDO MEMORI</h2>
      <div class="fr-desc-usp-grid">
        <div class="fr-desc-usp-item" style="background:#f5f5f7;border-radius:16px;padding:40px 32px">
          <h4 style="color:#C8A46F">11 лет</h4>
          <p style="color:#333">С 2015 года задаём стандарты профессиональной чистки обуви. Отработанная технология, которая приносит результат.</p>
        </div>
        <div class="fr-desc-usp-item" style="background:#f5f5f7;border-radius:16px;padding:40px 32px">
          <h4 style="color:#C8A46F">1 100 000+ пар</h4>
          <p style="color:#333">Обуви прошло через руки наших мастеров. Мы знаем об уходе за обувью всё.</p>
        </div>
        <div class="fr-desc-usp-item" style="background:#f5f5f7;border-radius:16px;padding:40px 32px">
          <h4 style="color:#C8A46F">Премиальные бренды</h4>
          <p style="color:#333">Работаем с Loro Piana, Gucci, Prada, Hermès и другими люксовыми марками. Доверие клиентов высокого уровня.</p>
        </div>
        <div class="fr-desc-usp-item" style="background:#f5f5f7;border-radius:16px;padding:40px 32px">
          <h4 style="color:#C8A46F">26 городов</h4>
          <p style="color:#333">Точки в России, Казахстане, ОАЭ, Узбекистане, Кувейте и других странах. Международный опыт и узнаваемость.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="fr-section" style="background:#1d1d1f;color:#fff;padding:80px 0">
    <div class="container">
      <h2 class="fr-section-title" style="color:#fff">Что вы получаете</h2>
      <p style="text-align:center;color:rgba(255,255,255,0.6);margin-bottom:48px">Всё необходимое для запуска и стабильной работы</p>
      <div class="fr-usp-list">
        <div class="fr-usp-row" style="border-bottom:1px solid rgba(255,255,255,0.08)">
          <span class="fr-usp-num" style="color:#C8A46F">01</span>
          <div class="fr-usp-body">
            <h3 class="fr-usp-row-title" style="color:#fff">Оборудование и материалы</h3>
            <p class="fr-usp-row-desc" style="color:rgba(255,255,255,0.6)">Полный комплект профессионального оборудования и химии для чистки и реставрации обуви.</p>
          </div>
        </div>
        <div class="fr-usp-row" style="border-bottom:1px solid rgba(255,255,255,0.08)">
          <span class="fr-usp-num" style="color:#C8A46F">02</span>
          <div class="fr-usp-body">
            <h3 class="fr-usp-row-title" style="color:#fff">Обучение и технология</h3>
            <p class="fr-usp-row-desc" style="color:rgba(255,255,255,0.6)">Очное обучение в Москве, пошаговые инструкции, доступ к технологии чистки и реставрации.</p>
          </div>
        </div>
        <div class="fr-usp-row" style="border-bottom:1px solid rgba(255,255,255,0.08)">
          <span class="fr-usp-num" style="color:#C8A46F">03</span>
          <div class="fr-usp-body">
            <h3 class="fr-usp-row-title" style="color:#fff">Сайт и маркетинг</h3>
            <p class="fr-usp-row-desc" style="color:rgba(255,255,255,0.6)">Готовый сайт с вашим брендом, настройка рекламы, шаблоны для соцсетей и печатных материалов.</p>
          </div>
        </div>
        <div class="fr-usp-row" style="border-bottom:1px solid rgba(255,255,255,0.08)">
          <span class="fr-usp-num" style="color:#C8A46F">04</span>
          <div class="fr-usp-body">
            <h3 class="fr-usp-row-title" style="color:#fff">Дизайн и планировка</h3>
            <p class="fr-usp-row-desc" style="color:rgba(255,255,255,0.6)">Готовый дизайн-проект приёмного пункта и планировка производственного цеха.</p>
          </div>
        </div>
        <div class="fr-usp-row">
          <span class="fr-usp-num" style="color:#C8A46F">05</span>
          <div class="fr-usp-body">
            <h3 class="fr-usp-row-title" style="color:#fff">Постоянная поддержка</h3>
            <p class="fr-usp-row-desc" style="color:rgba(255,255,255,0.6)">Сопровождение на всех этапах: от запуска до текущей работы, чат с основателями, обновление технологий.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="fr-section fr-form-section" style="padding:80px 0">
    <div class="container">
      <h2 class="fr-section-title">Оставьте заявку</h2>
      <p style="text-align:center;color:rgba(255,255,255,0.6);margin-bottom:40px">Мы свяжемся с вами в ближайшее время</p>

      <form id="fr-form" class="fr-apply-form" style="max-width:560px;margin:0 auto">
        <div class="fr-form-grid">
          <div class="form-group" style="grid-column:span 2">
            <input type="text" name="name" required placeholder="Ваше имя">
          </div>
          <div class="form-group">
            <input type="text" name="city" required placeholder="Ваш город">
          </div>
          <div class="form-group">
            <input type="tel" name="phone" id="fr-phone" required placeholder="+7 (___) ___-__-__">
          </div>
          <div class="form-group" style="grid-column:span 2">
            <input type="email" name="email" required placeholder="Ваш Email">
          </div>
        </div>
        <div style="text-align:center;margin-top:20px">
          <label style="display:flex;align-items:center;justify-content:center;gap:8px;cursor:pointer;margin-bottom:16px;font-size:13px;color:rgba(255,255,255,0.7)">
            <input type="checkbox" name="consent" required style="width:16px;height:16px;accent-color:#C8A46F">
            <span>Я даю согласие на <a href="/privacy-policy" target="_blank" style="color:#C8A46F">обработку персональных данных</a></span>
          </label>
          <button type="submit" class="btn-franchise-submit">Отправить заявку</button>
        </div>
        <div id="fr-form-success" style="display:none;text-align:center;color:#4CAF50;padding:24px;font-size:18px;font-weight:600">Спасибо! Мы свяжемся с вами в ближайшее время.</div>
      </form>
    </div>
  </section>

</main>

<script src="/public/assets/js/mandomemori/phone-mask.js" defer></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  var phoneInput = document.getElementById('fr-phone');
  if (phoneInput && typeof initPhoneMask === 'function') initPhoneMask(phoneInput);

  var form = document.getElementById('fr-form');
  var success = document.getElementById('fr-form-success');
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    var btn = form.querySelector('.btn-franchise-submit');
    btn.disabled = true;
    btn.textContent = 'Отправка...';

    var data = new URLSearchParams();
    data.append('name', form.querySelector('[name="name"]').value);
    data.append('city', form.querySelector('[name="city"]').value);
    data.append('phone', form.querySelector('[name="phone"]').value);
    data.append('email', form.querySelector('[name="email"]').value);

    fetch('/franchise/apply', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: data
    }).then(function(r) {
      if (!r.ok) throw new Error('Error');
      return r.json();
    }).then(function() {
      form.style.display = 'none';
      success.style.display = '';
      if (typeof gtag === 'function') { gtag('event', 'submit_franchise_lead'); }
      if (typeof ym === 'function') { ym('reachGoal', 'franchise_lead'); }
    }).catch(function() {
      btn.disabled = false;
      btn.textContent = 'Отправить заявку';
      alert('Ошибка отправки. Попробуйте позже.');
    });
  });
});
</script>

  <?php require __DIR__ . '/../../partials/footer.php'; ?>
