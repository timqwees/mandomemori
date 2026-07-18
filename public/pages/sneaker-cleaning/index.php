<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();
$siteINFO = ['canonical' => '/sneaker-cleaning', 'priority' => '0.9', 'changefreq' => 'weekly', 'index' => 'main'];
$pageTitle = 'Химчистка кроссовок в Москве — цены, Nike, Adidas, New Balance | MANDO MEMORI';
$pageDesc = 'Профессиональная химчистка кроссовок в Москве. Nike, Adidas, New Balance, Yeezy, Balenciaga. Чистка белых кроссовок, замши, сетки. С доставкой. Гарантия.';
$pageKeywords = 'химчистка кроссовок Москва, чистка кроссовок, химчистка Nike, химчистка Adidas, чистка белых кроссовок';
$canonical = $_SERVER['REQUEST_URI'] ?? '/sneaker-cleaning';
require __DIR__ . '/../partials/header.php';
?>
<main class="main">
  <section class="contacts-hero">
    <div class="container">
      <h1 class="contacts-title">Химчистка кроссовок в Москве</h1>
      <p class="contacts-subtitle">Профессиональная чистка для любых кроссовок — от повседневных до лимитированных</p>
    </div>
  </section>

  <section class="svc-content-section">
    <div class="container">
      <div class="svc-content-text">
        <p>Химчистка кроссовок в Москве — одна из самых востребованных услуг MANDO MEMORI. Кроссовки требуют особого ухода: они подвергаются ежедневным нагрузкам, впитывают грязь, пот, запахи. Профессиональная химчистка кроссовок возвращает им свежесть, белизну и аккуратный внешний вид без повреждения материалов.</p>

        <h2>Чистка кроссовок Nike, Adidas, New Balance и других брендов</h2>
        <p>Мы чистим кроссовки всех популярных брендов: Nike, Adidas, New Balance, Asics, Puma, Reebok, Hoka, On Running, Jordan, Yeezy, Balenciaga, Gucci, Prada, Common Projects, Golden Goose, Alexander McQueen. Для каждого бренда и материала — индивидуальная технология чистки.</p>
        <p>Химчистка кроссовок Nike, Adidas и New Balance — наша специализация. Мы знаем особенности материалов этих брендов: сетка Primeknit (Adidas), Flyknit (Nike), замша, кожа, синтетика. После чистки кроссовки выглядят как новые, без разводов и повреждений.</p>

        <h2>Чистка белых кроссовок</h2>
        <p>Белые кроссовки — самые капризные в уходе. Чистка белых кроссовок требует профессиональных средств, которые удаляют загрязнения, не оставляя жёлтых разводов. В MANDO MEMORI мы используем специальные отбеливающие составы для белой кожи, замши и сетки. После чистки белые кроссовки снова сияют.</p>

        <h2>Чистка замшевых кроссовок</h2>
        <p>Замша — деликатный материал, который легко повредить при неправильной чистке. Чистка замшевых кроссовок в нашей мастерской выполняется с использованием специальных шампуней и щёток, которые бережно удаляют загрязнения, не повреждая ворс. После чистки восстанавливаем цвет и структуру замши.</p>

        <h2>Химчистка кроссовок с доставкой</h2>
        <p>Химчистка кроссовок с доставкой по Москве — удобный формат для тех, кто ценит своё время. Курьер приедет к вам, заберёт кроссовки и вернёт их чистыми. Особенно популярна эта услуга для чистки белых кроссовок и кроссовок премиум-брендов.</p>

        <h2>Цены на химчистку кроссовок в Москве</h2>
        <p>Стоимость химчистки кроссовок — от 5 990 ₽ за пару. Цена зависит от материала, сложности загрязнений и дополнительных услуг (отбеливание подошвы, удаление запаха, покраска). Химчистка кроссовок премиум-брендов может стоить дороже из-за использования специальных средств.</p>
        <p>Мы не предлагаем химчистку кроссовок недорого — мы предлагаем качественную чистку, которая продлевает срок службы вашей обуви. Результат говорит сам за себя.</p>
      </div>
    </div>
  </section>

  <section class="svc-cta-section">
    <div class="container">
      <h2>Закажите химчистку кроссовок прямо сейчас</h2>
      <p>Оставьте заявку, и мы свяжемся с вами для согласования</p>
      <a href="/order" class="svc-cta-btn">Заказать чистку кроссовок</a>
    </div>
  </section>

  <section class="svc-faq-section" itemscope itemtype="https://schema.org/FAQPage">
    <div class="container">
      <h2 class="svc-section-title">Часто задаваемые вопросы о химчистке кроссовок</h2>
      <div class="svc-faq-list">
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Сколько стоит химчистка кроссовок в Москве?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Стоимость химчистки кроссовок — от 5 990 ₽ за пару. Цена зависит от материала, степени загрязнения и необходимости дополнительных услуг. Точную стоимость называем после осмотра.</p>
          </div>
        </div>
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Чистите ли вы кроссовки из замши и нубука?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Да, мы профессионально чистим кроссовки из замши и нубука. Используем специальные средства для деликатных материалов, которые не повреждают ворс и не меняют цвет.</p>
          </div>
        </div>
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Вы отбеливаете подошву кроссовок?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Да, отбеливание подошвы — популярная дополнительная услуга при химчистке кроссовок. Мы удаляем желтизну и возвращаем подошве белоснежный вид. Стоимость отбеливания подошвы — от 10 990 ₽.</p>
          </div>
        </div>
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Можно ли постирать кроссовки в стиральной машине?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Категорически не рекомендуем. Стирка в машинке разрушает клеевые швы, деформирует кроссовки, портит материалы. Профессиональная химчистка кроссовок безопасна и эффективна — результат намного лучше, а обувь не страдает.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
