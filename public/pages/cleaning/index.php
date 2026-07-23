<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();
$siteINFO = ['canonical' => '/cleaning', 'priority' => '0.9', 'changefreq' => 'weekly', 'index' => 'main'];
$pageTitle = 'Химчистка премиальной обуви в Москве — от 5 990 ₽ | Loro Piana, Hermès | MANDO MEMORI';
$pageDesc = 'Профессиональная ручная химчистка премиальной обуви в Москве. Loro Piana, Berluti, John Lobb, Hermès. Кожа крокодила, замша, нубук. Премиум-мастерская. От 5 990 ₽ за пару.';
$pageKeywords = 'химчистка премиальной обуви Москва, чистка дорогой обуви, химчистка Loro Piana, химчистка итальянской обуви, уход за обувью люкс, химчистка брендовой обуви';
$canonical = $_SERVER['REQUEST_URI'] ?? '/cleaning';
require __DIR__ . '/../partials/header.php';
?>
<main class="main">
  <section class="contacts-hero">
    <div class="container">
      <h1 class="contacts-title">Химчистка премиальной обуви в Москве</h1>
      <p class="contacts-subtitle">Ручной уход за обувью люкс-сегмента — Loro Piana, Hermès, Berluti, John Lobb</p>
    </div>
  </section>

  <section class="svc-content-section">
    <div class="container">
      <div class="svc-content-text">
        <p>Химчистка премиальной обуви в Москве — услуга для тех, кто ценит безупречный вид и долговечность дорогой обуви. В мастерской MANDO MEMORI мы работаем с деликатными материалами: кожа экзотических пород, замша высокого помола, нубук, лак, комбинированные поверхности.</p>

        <h2>Ручная химчистка премиальной обуви — что входит в услугу</h2>
        <p>Каждая пара проходит полный цикл обработки: удаление загрязнений с верха и подошвы, очистка внутренней поверхности, дезинфекция, устранение запахов и водоотталкивающая пропитка. После работы обувь выглядит как новая: исчезают потёртости, возвращается насыщенный цвет.</p>
        <p>В отличие от домашней стирки, которая разрушает клеевые швы и деформирует материалы, ручная химчистка в MANDO MEMORI полностью безопасна для обуви люкс-сегмента — Loro Piana, Hermès, Berluti, John Lobb.</p>

        <h2>Уход за обувью Loro Piana, Hermès, Berluti</h2>
        <p>Наше ключевое направление — химчистка и реставрация обуви премиум-брендов. Loro Piana, Hermès, Berluti, John Lobb, Gucci, Prada, Louis Vuitton, Bottega Veneta — для каждого бренда подбираем индивидуальную технологию с учётом материала и конструкции.</p>
        <p>Деликатные материалы требуют профессиональных составов Saphir, Tarrago, Collonil и опыта мастера. Мы не используем агрессивную химию и не рискуем дорогой обувью.</p>

        <h2>Химчистка премиальной обуви с доставкой по Москве</h2>
        <p>Курьер заберёт обувь домой или в офис и вернёт в идеальном состоянии. <?= htmlspecialchars(Functions::deliveryNote()) ?>. Также возможна срочная обработка за 1 день.</p>

        <h2>Цены на химчистку премиальной обуви</h2>
        <p>Стоимость — от 5 990 ₽ за пару. Цена зависит от материала, сложности загрязнений и дополнительных работ (отбеливание подошвы, реставрация цвета). Точную стоимость называем после осмотра и согласовываем до начала работ.</p>
        <p>Мы работаем с обувью от 30 000 ₽ и выше. Это не массовый сегмент — мы делаем качественно, с гарантией и профессиональными материалами.</p>
      </div>
    </div>
  </section>

  <section class="svc-cta-section">
    <div class="container">
      <h2>Закажите химчистку премиальной обуви</h2>
      <p>Оставьте заявку — мы свяжемся с вами, согласуем удобное время и заберём обувь</p>
      <a href="/order" class="svc-cta-btn">Заказать химчистку</a>
    </div>
  </section>

  <section class="svc-faq-section" itemscope itemtype="https://schema.org/FAQPage">
    <div class="container">
      <h2 class="svc-section-title">Часто задаваемые вопросы о химчистке обуви</h2>
      <div class="svc-faq-list">
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Сколько стоит химчистка премиальной обуви?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Стоимость химчистки премиальной обуви в MANDO MEMORI — от 5 990 ₽ за пару. Итоговая цена зависит от материала, бренда и объёма работ. Точную стоимость называем после бесплатной консультации.</p>
          </div>
        </div>
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Сколько времени занимает химчистка?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Стандартная химчистка премиальной обуви занимает 1–6 дней. Срочная обработка возможна за 1 день. Срок зависит от материала и сложности работ.</p>
          </div>
        </div>
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">С какими брендами вы работаете?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Специализируемся на премиальном сегменте: Loro Piana, Hermès, Berluti, John Lobb, Gucci, Prada, Louis Vuitton, Bottega Veneta, Balenciaga, Christian Louboutin и другие люкс-бренды.</p>
          </div>
        </div>
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Чем профессиональная химчистка обуви отличается от домашней?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Профессиональная химчистка обуви использует специальные составы и оборудование, которые не повреждают материалы. Домашняя стирка в машинке разрушает клей, деформирует обувь и портит внешний вид. После профессиональной химчистки обувь восстанавливает форму, цвет и свежесть без повреждений.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
