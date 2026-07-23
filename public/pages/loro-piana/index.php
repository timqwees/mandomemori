<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();
$delivery = Functions::deliveryNote();

$siteINFO = ['canonical' => '/loro-piana', 'priority' => '1.0', 'changefreq' => 'weekly', 'index' => 'main'];
$pageTitle = 'Реставрация и химчистка обуви Loro Piana в Москве — от 5 990 ₽ | MANDO MEMORI';
$pageDesc = 'Профессиональная реставрация и химчистка обуви Loro Piana в Москве. Замена подошвы, отбеливание, восстановление замши и кожи крокодила. Премиум-мастерская. От 5 990 ₽.';
$pageKeywords = 'реставрация Loro Piana, химчистка Loro Piana Москва, замена подошвы Loro Piana, отбеливание подошвы Loro Piana, ремонт Loro Piana, уход за Loro Piana';
$canonical = $_SERVER['REQUEST_URI'] ?? '/loro-piana';
require __DIR__ . '/../../partials/header.php';
?>
<main class="main">
  <section class="contacts-hero">
    <div class="container">
      <h1 class="contacts-title">Реставрация и уход за обувью Loro Piana</h1>
      <p class="contacts-subtitle">Специализируемся на Loro Piana — реставрация, чистка, замена подошвы, отбеливание. Ручная работа, гарантия качества</p>
    </div>
  </section>

  <section class="svc-content-section">
    <div class="container">
      <div class="svc-content-text">
        <p>MANDO MEMORI — одна из немногих мастерских в Москве, которая специализируется на обуви Loro Piana. Мы не работаем с массовым сегментом: наша экспертиза — реставрация, химчистка и ремонт обуви стоимостью от 50 000 ₽ и выше.</p>

        <h2>Реставрация Loro Piana — наша ключевая услуга</h2>
        <p>Обувь Loro Piana требует особого подхода: деликатная замша, кожа крокодила, кашемир, уникальные подошвы Storm System®. Мы восстанавливаем царапины, потёртости, заломы, швы, молнии, фурнитуру и цвет — с сохранением оригинальной фактуры и формы.</p>
        <p>Стоимость реставрации Loro Piana — от 6 490 ₽. Сложные случаи (кожа экзотических пород, глубокие повреждения) оцениваем индивидуально после осмотра.</p>

        <h2>Замена подошвы Loro Piana</h2>
        <p>Замена подошвы на обуви Loro Piana — от 18 990 ₽. Работаем с оригинальными и совместимыми материалами, сохраняем силуэт и комфорт. Одна из немногих мастерских в Москве с опытом именно по Loro Piana.</p>

        <h2>Отбеливание подошвы Loro Piana</h2>
        <p>Белые подошвы Loro Piana со временем желтеют. Профессиональное отбеливание — от 10 990 ₽. Используем составы, безопасные для премиальных материалов.</p>

        <h2>Химчистка Loro Piana</h2>
        <p>Ручная химчистка — от 5 990 ₽. Комплексный уход: очистка снаружи и внутри, дезинфекция, водоотталкивающая пропитка, восстановление формы.</p>

        <h2>Доставка курьером</h2>
        <p><?= htmlspecialchars($delivery) ?>. Курьер заберёт обувь домой или в офис и вернёт после работы — вам не нужно никуда ехать.</p>

        <h2>Почему Loro Piana нельзя нести в обычную химчистку</h2>
        <p>Массовые химчистки используют агрессивную химию и стандартные технологии. Для Loro Piana это разрушительно: замша теряет ворс, кожа трескается, подошва деформируется. Мы работаем составами Saphir, Tarrago, Collonil и знаем особенности каждой линейки Loro Piana.</p>
      </div>
    </div>
  </section>

  <section class="svc-brands-section">
    <div class="container">
      <h2 class="svc-section-title">Услуги для Loro Piana</h2>
      <div class="svc-tags">
        <a href="/product/restoration" class="svc-tag">Реставрация — от 6 490 ₽</a>
        <a href="/product/replacement" class="svc-tag">Замена подошвы — от 18 990 ₽</a>
        <a href="/product/whitening" class="svc-tag">Отбеливание подошвы — от 10 990 ₽</a>
        <a href="/product/cleaning" class="svc-tag">Химчистка — от 5 990 ₽</a>
        <a href="/product/prevention" class="svc-tag">Профилактика — от 3 490 ₽</a>
      </div>
    </div>
  </section>

  <section class="svc-cta-section">
    <div class="container">
      <h2>Передайте Loro Piana профессионалам</h2>
      <p>Оставьте заявку — проведём осмотр и назовём точную стоимость до начала работ</p>
      <a href="/order" class="svc-cta-btn">Передать обувь</a>
    </div>
  </section>

  <section class="svc-faq-section" itemscope itemtype="https://schema.org/FAQPage">
    <div class="container">
      <h2 class="svc-section-title">Вопросы о реставрации Loro Piana</h2>
      <div class="svc-faq-list">
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Сколько стоит реставрация обуви Loro Piana?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Реставрация Loro Piana — от 6 490 ₽. Замена подошвы — от 18 990 ₽, отбеливание подошвы — от 10 990 ₽, химчистка — от 5 990 ₽. Точную стоимость называем после осмотра.</p>
          </div>
        </div>
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Есть ли доставка и курьер?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Да, курьер заберёт обувь и привезёт обратно после работы. <?= htmlspecialchars($delivery) ?>. Это удобно — вы никуда не едете.</p>
          </div>
        </div>
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Вы работаете только с Loro Piana?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Loro Piana — наша специализация, но мы также работаем с Hermès, Berluti, John Lobb, Gucci, Prada. Фокус на премиальном сегменте — обувь от 50 000 ₽.</p>
          </div>
        </div>
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Даёте ли гарантию на реставрацию?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Да, гарантия на все виды работ. Если результат не устроит — исправим бесплатно в рамках гарантийного срока.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../../partials/footer.php'; ?>
