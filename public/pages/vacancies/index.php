<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/vacancies', 'priority' => '0.5', 'changefreq' => 'monthly', 'index' => 'main'];

$pageTitle = 'Вакансии — MANDO MEMORI, химчистка обуви в Москве';
$pageDesc = 'Вакансии MANDO MEMORI. Работа в химчистке обуви в Москве.';
$pageKeywords = 'вакансии MANDO MEMORI, работа химчистка обуви';
$canonical = $_SERVER['REQUEST_URI'] ?? '/vacancies';
require __DIR__ . '/../../partials/header.php';
?>


<main class="vacancies-page">

  <section class="vacancies-hero" style="background-color: #f5f5f7; color: #ffffff; min-height: 70vh">
      <div class="vacancies-hero-bg has-mobile" style="background-image: url('/public/assets/images/mandomemori/1771699312935-3355.jpg')" data-mobile-bg="/public/assets/images/mandomemori/1771699312935-3355.jpg"></div>
      <div class="vacancies-hero-overlay" style="background:rgba(0,0,0,0.77)"></div>
    <div class="container vacancies-hero-content">
      <h1 class="vacancies-title">Вакансии</h1>
        <div class="vacancies-subtitle" data-blur-content><p>Мы активно растём и ищем талантливых людей в команду. Если вам близка одна из позиций — отправляйте резюме на <a href="mailto:hr@mandomemori.ru" rel="noopener noreferrer" target="_blank">hr@mandomemori.ru</a></p><p><br></p><p>Пожалуйста, приложите резюме с опытом работы, контактный телефон, желаемую должность и фото.</p><p><br></p><p>Обычно рассматриваем заявки до 3 рабочих дней — обязательно ответим на почту или позвоним для собеседования.</p></div>
    </div>
  </section>

  <section class="vacancies-list-section">
    <div class="container">
      <h2 class="vacancies-section-title">Открытые позиции</h2>
      <div class="vacancies-grid">
          <div class="vacancy-card">
            <h3 class="vacancy-position">Мастер по чистке обуви</h3>

            <div class="vacancy-specs">
              <div class="vacancy-spec-row">
                <span class="vacancy-spec-label">Зарплата</span>
                <span class="vacancy-spec-value">80 000 — 110 000 руб.</span>
              </div>
              <div class="vacancy-spec-row">
                <span class="vacancy-spec-label">График</span>
                <span class="vacancy-spec-value">5/2 c 10:00 до 19:00</span>
              </div>
              <div class="vacancy-spec-row">
                <span class="vacancy-spec-label">Адрес</span>
                <span class="vacancy-spec-value">м. Бауманская</span>
              </div>
              <div class="vacancy-spec-row vacancy-spec-row--block">
                <span class="vacancy-spec-label">Обязанности</span>
                <span class="vacancy-spec-value">Ручная чистка обуви клиентов
Подготовка к обработке на оборудовании
Опыт не обязателен — всему научим</span>
              </div>
            </div>
          </div>
          <div class="vacancy-card">
            <h3 class="vacancy-position">SMM-менеджер</h3>

            <div class="vacancy-specs">
              <div class="vacancy-spec-row">
                <span class="vacancy-spec-label">Зарплата</span>
                <span class="vacancy-spec-value">По договоренности</span>
              </div>
              <div class="vacancy-spec-row">
                <span class="vacancy-spec-label">График</span>
                <span class="vacancy-spec-value">Свободный</span>
              </div>
              <div class="vacancy-spec-row">
                <span class="vacancy-spec-label">Адрес</span>
                <span class="vacancy-spec-value">Удаленная работа</span>
              </div>
              <div class="vacancy-spec-row vacancy-spec-row--block">
                <span class="vacancy-spec-label">Обязанности</span>
                <span class="vacancy-spec-value">Ведение социальных сетей, создание контента</span>
              </div>
            </div>
          </div>
      </div>

      <div class="vacancies-apply-wrapper">
        <a href="mailto:hr@mandomemori.ru?subject=Резюме: вакансия (Москва)" class="vacancy-apply-btn vacancy-apply-btn--white">
          Отправить резюме
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M3 8h10m-4-4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      </div>
    </div>
  </section>

</main>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
<script src="https://unpkg.com/split-type@0.3.4/umd/index.min.js"></script>
<script>
(function() {
  gsap.registerPlugin(ScrollTrigger);
  document.querySelectorAll('[data-blur-content]').forEach(function(el) {
    var targets = el.querySelectorAll('p, h2, h3, h4, li, span');
    if (targets.length === 0) targets = [el];
    targets.forEach(function(target) {
      var split = new SplitType(target, { types: 'words' });
      gsap.fromTo(split.words, {
        opacity: 0,
        filter: 'blur(8px)',
        willChange: 'filter, transform'
      }, {
        ease: 'sine',
        opacity: 1,
        filter: 'blur(0px)',
        stagger: 0.02,
        scrollTrigger: {
          trigger: target,
          start: 'top bottom',
          end: 'bottom center',
          scrub: true
        }
      });
    });
  });
})();
</script>

  <?php require __DIR__ . '/../../partials/footer.php'; ?>