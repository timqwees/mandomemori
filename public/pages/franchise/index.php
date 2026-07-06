<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/franchise', 'priority' => '0.6', 'changefreq' => 'monthly', 'index' => 'main'];

$pageTitle = 'Франшиза — MANDO MEMORI, химчистка обуви';
$pageDesc = 'Франшиза MANDO MEMORI — откройте собственную химчистку обуви по нашей модели.';
$pageKeywords = 'франшиза химчистки обуви, MANDO MEMORI франшиза';
$canonical = $_SERVER['REQUEST_URI'] ?? '/franchise';
require __DIR__ . '/../../partials/header.php';
?>


<main class="main franchise-page">

  <section class="fr-intro" style="background-color:#1d1d1f;background-image:url('/public/assets/images/mandomemori/фон чистки2.jpg');color:#ffffff">
    <div class="container fr-intro-content">
        <h1 class="fr-intro-title">26 городов в 8 странах</h1>
        <p class="fr-intro-desc">Точки MANDO MEMORI работают по всему миру —
от Дубая до Южно-Сахалинска.</p>
        <div class="fr-geo-list">
            <div class="fr-geo-country">
              <h3 class="fr-geo-country-name">Россия</h3>
              <ul class="fr-geo-cities">
                  <li>Москва</li>
                  <li>Санкт-Петербург</li>
                  <li>Новосибирск</li>
                  <li>Екатеринбург</li>
                  <li>Казань</li>
                  <li>Челябинск</li>
                  <li>Ростов-на-Дону</li>
                  <li>Воронеж</li>
                  <li>Тюмень</li>
                  <li>Иркутск</li>
                  <li>Владивосток</li>
                  <li>Калининград</li>
                  <li>Сочи</li>
                  <li>Южно-Сахалинск</li>
              </ul>
            </div>
            <div class="fr-geo-country">
              <h3 class="fr-geo-country-name">Казахстан</h3>
              <ul class="fr-geo-cities">
                  <li>Алматы</li>
                  <li>Астана</li>
                  <li>Караганда</li>
                  <li>Атырау</li>
                  <li>Шымкент</li>
                  <li>Актау</li>
              </ul>
            </div>
            <div class="fr-geo-singles">
                <div class="fr-geo-single">
                  <span class="fr-geo-single-country">ОАЭ</span>
                  <span class="fr-geo-single-city">Дубай</span>
                </div>
                <div class="fr-geo-single">
                  <span class="fr-geo-single-country">Узбекистан</span>
                  <span class="fr-geo-single-city">Ташкент</span>
                </div>
                <div class="fr-geo-single">
                  <span class="fr-geo-single-country">Кувейт</span>
                  <span class="fr-geo-single-city">Эль-Кувейт</span>
                </div>
                <div class="fr-geo-single">
                  <span class="fr-geo-single-country">Киргизия</span>
                  <span class="fr-geo-single-city">Бишкек</span>
                </div>
                <div class="fr-geo-single">
                  <span class="fr-geo-single-country">Грузия</span>
                  <span class="fr-geo-single-city">Тбилиси</span>
                </div>
                <div class="fr-geo-single">
                  <span class="fr-geo-single-country">Кипр</span>
                  <span class="fr-geo-single-city">Лимассол</span>
                </div>
            </div>
        </div>
    </div>
  </section>

  <section class="fr-desc-section" style="min-height:80vh;background-color:#371a94;background-image:url('/public/assets/images/mandomemori/фон6.jpg');color:#ffffff">
    <div class="container fr-desc-content">
        <h2 class="fr-desc-title">Что такое MANDO MEMORI</h2>
        <div class="fr-desc-usp-grid">
            <div class="fr-desc-usp-item">
              <h4 class="fr-desc-usp-title">10 лет</h4>
                <p class="fr-desc-usp-text">С 2015 года мы задаём стандарты профессиональной чистки обуви в промышленных объёмах.</p>
            </div>
            <div class="fr-desc-usp-item">
              <h4 class="fr-desc-usp-title">1 105 603</h4>
                <p class="fr-desc-usp-text">Пар обуви прошли через руки наших мастеров. Опыт, которому можно доверять.</p>
            </div>
            <div class="fr-desc-usp-item">
              <h4 class="fr-desc-usp-title">Готовый комплект бизнеса</h4>
                <p class="fr-desc-usp-text">Предлагаем комплексное решение для старта: технология чистки и реставрации, оборудование, материалы, бизнес-инструкции и сопровождение на всех этапах запуска</p>
            </div>
        </div>
    </div>
  </section>

  <section class="fr-section fr-usp-section">
    <div class="container">
        <h2 class="fr-section-title">Что входит в комплект</h2>
        <p class="fr-usp-subtitle">На старте вы получаете всё необходимое для запуска</p>
      <div class="fr-usp-list">
          <div class="fr-usp-row">
            <span class="fr-usp-num">01</span>
            <div class="fr-usp-body">
              <h3 class="fr-usp-row-title">Оборудование</h3>
                <p class="fr-usp-row-desc">Полный комплект оборудования для чистки обуви</p>
            </div>
          </div>
          <div class="fr-usp-row">
            <span class="fr-usp-num">02</span>
            <div class="fr-usp-body">
              <h3 class="fr-usp-row-title">Химия</h3>
                <p class="fr-usp-row-desc">Профессиональная химия на первые 6 месяцев</p>
            </div>
          </div>
          <div class="fr-usp-row">
            <span class="fr-usp-num">03</span>
            <div class="fr-usp-body">
              <h3 class="fr-usp-row-title">Технология</h3>
                <p class="fr-usp-row-desc">Очное обучение и отработка навыков</p>
            </div>
          </div>
          <div class="fr-usp-row">
            <span class="fr-usp-num">04</span>
            <div class="fr-usp-body">
              <h3 class="fr-usp-row-title">Дизайн</h3>
                <p class="fr-usp-row-desc">Дизайн-проект приёмного пункта</p>
            </div>
          </div>
          <div class="fr-usp-row">
            <span class="fr-usp-num">05</span>
            <div class="fr-usp-body">
              <h3 class="fr-usp-row-title">Цех</h3>
                <p class="fr-usp-row-desc">Готовая планировка производственного цеха</p>
            </div>
          </div>
          <div class="fr-usp-row">
            <span class="fr-usp-num">06</span>
            <div class="fr-usp-body">
              <h3 class="fr-usp-row-title">Подключение</h3>
                <p class="fr-usp-row-desc">Настройка и интеграция всех систем</p>
            </div>
          </div>
          <div class="fr-usp-row">
            <span class="fr-usp-num">07</span>
            <div class="fr-usp-body">
              <h3 class="fr-usp-row-title">И все остальное</h3>
                <p class="fr-usp-row-desc">Документация, поддержка, сайт и соцсети</p>
            </div>
          </div>
      </div>
    </div>
  </section>

  <section class="fr-section fr-form-section">
    <div class="container">
      <h2 class="fr-section-title">Оставьте заявку</h2>

      <form method="POST" action="https://solefresh.ru/franchise/apply" class="fr-apply-form">
      <input type="hidden" name="_csrf" value="3bd5a1ea01eec4cc5fac232d54cfe19be1beb147477f69e057180030166a8e04">
        <div class="fr-form-grid">
          <div class="form-group">
            <input type="text" name="name" required placeholder="Ваше имя">
          </div>
          <div class="form-group">
            <input type="text" name="city" required placeholder="Ваш город">
          </div>
          <div class="form-group">
            <input type="email" name="email" required placeholder="Ваш Email">
          </div>
          <div class="form-group">
            <input type="tel" name="phone" id="fr-phone" required placeholder="+7 (___) ___-__-__">
          </div>
        </div>
        <div style="text-align:center;margin-top:20px">
          <button type="submit" class="btn-franchise-submit">Отправить</button>
        </div>
      </form>
    </div>
  </section>

</main>

<script src="/public/assets/js/solefresh/phone-mask.js" defer></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  var phoneInput = document.getElementById('fr-phone');
  if (phoneInput && typeof initPhoneMask === 'function') initPhoneMask(phoneInput);
});
</script>

  <?php require __DIR__ . '/../../partials/footer.php'; ?>