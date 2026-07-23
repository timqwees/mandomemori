<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();
$siteINFO = ['canonical' => '/repair', 'priority' => '0.9', 'changefreq' => 'weekly', 'index' => 'main'];
$pageTitle = 'Ремонт и реставрация премиальной обуви в Москве — от 1 490 ₽ | MANDO MEMORI';
$pageDesc = 'Профессиональный ремонт премиальной обуви в Москве: замена подошвы Loro Piana, набоек, задников. Berluti, John Lobb, Hermès, Louboutin. Премиум-мастерская, гарантия.';
$pageKeywords = 'ремонт премиальной обуви Москва, реставрация дорогой обуви, замена подошвы Loro Piana, замена набоек премиальная обувь, ремонт обуви люкс';
$canonical = $_SERVER['REQUEST_URI'] ?? '/repair';
require __DIR__ . '/../partials/header.php';
?>
<main class="main">
  <section class="contacts-hero">
    <div class="container">
      <h1 class="contacts-title">Ремонт премиальной обуви в Москве</h1>
      <p class="contacts-subtitle">Замена подошвы, набоек, задников — Berluti, John Lobb, Loro Piana, Louboutin</p>
    </div>
  </section>

  <section class="svc-content-section">
    <div class="container">
      <div class="svc-content-text">
        <p>Ремонт обуви в Москве — одна из ключевых услуг мастерской MANDO MEMORI. Мы выполняем ремонт любой сложности: от замены набоек до полной реставрации обуви. Работаем с любыми брендами — от повседневных до премиум-класса: Loro Piana, Gucci, Prada, Louis Vuitton, Hermès, Balenciaga.</p>

        <h2>Цены на ремонт обуви в Москве</h2>
        <p>Стоимость ремонта обуви зависит от вида работ. Мы предлагаем прозрачные цены без скрытых платежей: замена набоек от 1 490 ₽, замена задников от 3 490 ₽, замена подошвы от 18 990 ₽. Точную цену называем после осмотра обуви — консультация бесплатная.</p>
        <p>Ремонт премиальной обуви в Москве — наша специализация. Качественная реставрация продлевает срок службы дорогой обуви на годы и сохраняет её первоначальный вид.</p>

        <h2>Замена набоек в Москве</h2>
        <p>Набойки — самая востребованная услуга ремонта обуви. Мы устанавливаем резиновые, комбинированные набойки и набойки на шпильки. Замена набоек продлевает срок службы каблука и предотвращает деформацию обуви. Рекомендуем менять набойки каждые 3-6 месяцев при активной носке.</p>

        <h2>Замена подошвы обуви в Москве</h2>
        <p>Со временем подошва стирается, теряет амортизацию и внешний вид. Замена подошвы — сложная процедура, требующая профессионального оборудования и материалов. В MANDO MEMORI мы подбираем подошву, максимально близкую к оригинальной, и устанавливаем её с гарантией качества.</p>
        <p>Особое внимание уделяем премиум-брендам: замена подошвы Loro Piana, Gucci, Prada выполняется с использованием оригинальных или максимально приближенных материалов.</p>

        <h2>Замена задников обуви</h2>
        <p>Задники — внутренние элементы в пяточной части обуви, которые фиксируют пятку. Со временем они изнашиваются, деформируются или размокают, что приводит к дискомфорту при ходьбе. Замена задников восстанавливает форму обуви и комфорт при носке.</p>

        <h2>Другие услуги ремонта обуви</h2>
        <p>Помимо замены набоек, подошвы и задников, наша мастерская выполняет: ремонт молний на обуви, замену стелек, ремонт ремешков, укрепление подошвы, замену супинаторов. Любой ремонт обуви в Москве — от простого до сложного — мы делаем качественно и с гарантией.</p>

        <h2>Ремонт брендовой обуви в Москве</h2>
        <p>Премиум-обувь требует особого подхода. Ремонт обуви Gucci, Prada, Loro Piana, Hermès, Balenciaga мы выполняем с использованием оригинальных расходных материалов и профессионального оборудования. Наши мастера знают особенности конструкции каждого бренда и гарантируют безупречный результат.</p>
      </div>
    </div>
  </section>

  <section class="svc-cta-section">
    <div class="container">
      <h2>Нужен ремонт обуви? Обращайтесь!</h2>
      <p>Приносите обувь в нашу мастерскую на Арбате или вызывайте курьера</p>
      <a href="/order" class="svc-cta-btn">Заказать ремонт</a>
    </div>
  </section>

  <section class="svc-faq-section" itemscope itemtype="https://schema.org/FAQPage">
    <div class="container">
      <h2 class="svc-section-title">Часто задаваемые вопросы о ремонте обуви</h2>
      <div class="svc-faq-list">
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Сколько стоит ремонт обуви в Москве?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Цены на ремонт обуви в Москве зависят от вида работ: замена набоек от 1 490 ₽, замена задников от 3 490 ₽, замена подошвы от 18 990 ₽. Точная стоимость после бесплатного осмотра.</p>
          </div>
        </div>
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Сколько времени занимает ремонт обуви?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Стандартный ремонт обуви занимает от 1 до 7 дней. Замена набоек — 1 день, замена задников — 2-4 дня, замена подошвы — 3-7 дней. Срочный ремонт возможен по договорённости.</p>
          </div>
        </div>
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Вы ремонтируете только премиум-обувь?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Нет, мы принимаем обувь любых брендов и ценовых сегментов. Качественный ремонт одинаково важен и для повседневной обуви, и для премиум-класса. К каждой паре — индивидуальный подход.</p>
          </div>
        </div>
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Даёте ли вы гарантию на ремонт обуви?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Да, мы даём гарантию на все виды ремонтных работ. Срок гарантии зависит от типа ремонта и обсуждается индивидуально. Мы уверены в качестве своей работы.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
