<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();
$siteINFO = ['canonical' => '/sneaker-cleaning', 'priority' => '0.7', 'changefreq' => 'weekly', 'index' => 'main'];
$pageTitle = 'Химчистка люкс-кроссовок в Москве — Balenciaga, Dior, Off-White | от 5 990 ₽ | MANDO MEMORI';
$pageDesc = 'Профессиональная ручная чистка люкс-кроссовок в Москве. Balenciaga, Dior, Off-White, Golden Goose. Премиум-мастерская. Сохранение материалов. От 5 990 ₽ за пару.';
$pageKeywords = 'химчистка люкс кроссовок Москва, чистка Balenciaga, чистка Dior кроссовки, уход за премиальными кроссовками, химчистка дорогих кроссовок';
$canonical = $_SERVER['REQUEST_URI'] ?? '/sneaker-cleaning';
require __DIR__ . '/../partials/header.php';
?>
<main class="main">
  <section class="contacts-hero">
    <div class="container">
      <h1 class="contacts-title">Химчистка люкс-кроссовок в Москве</h1>
      <p class="contacts-subtitle">Ручная чистка премиальных кроссовок — Balenciaga, Dior, Off-White, Golden Goose</p>
    </div>
  </section>

  <section class="svc-content-section">
    <div class="container">
      <div class="svc-content-text">
        <p>Химчистка люкс-кроссовок в Москве — услуга для владельцев обуви премиум-сегмента. Дизайнерские кроссовки стоят от 30 000 ₽ и требуют профессионального ухода: деликатных составов, ручной работы и понимания материалов. MANDO MEMORI специализируется именно на этом сегменте.</p>

        <h2>Чистка Balenciaga, Dior, Off-White, Golden Goose</h2>
        <p>Мы работаем с люкс-кроссовками: Balenciaga Triple S и Track, Dior B23 и B27, Off-White, Golden Goose, Common Projects, Alexander McQueen, Gucci, Prada, Louis Vuitton. Для каждого бренда и материала — индивидуальная технология чистки без повреждения конструкции и отделки.</p>
        <p>Знаем особенности премиальных материалов: кожа высокого помола, замша, комбинированные вставки, декоративные элементы. После чистки кроссовки выглядят как новые — без разводов, деформаций и потери цвета.</p>

        <h2>Уход за замшей и комбинированными материалами</h2>
        <p>Замша и нубук на люкс-кроссовках — деликатные материалы. Чистка выполняется специальными шампунями и щётками, которые бережно удаляют загрязнения, не повреждая ворс. После обработки восстанавливаем цвет и структуру материала.</p>

        <h2>Отбеливание подошвы и комплексный уход</h2>
        <p>Отбеливание подошвы — популярная дополнительная услуга для белых и светлых люкс-кроссовок. Удаляем желтизну, возвращаем подошве первоначальный вид. Стоимость отбеливания — от 10 990 ₽.</p>

        <h2>Химчистка с бесплатным курьером</h2>
        <p>Курьер заберёт кроссовки домой или в офис и вернёт в идеальном состоянии. Услуга доступна по всей Москве. Стоимость химчистки люкс-кроссовок — от 5 990 ₽ за пару.</p>
        <p>Мы работаем с обувью от 30 000 ₽. Массовый сегмент — не наш профиль: качество, сохранение материалов и гарантия результата важнее скорости и низкой цены.</p>
      </div>
    </div>
  </section>

  <section class="svc-cta-section">
    <div class="container">
      <h2>Закажите чистку люкс-кроссовок</h2>
      <p>Оставьте заявку — согласуем детали и заберём обувь курьером</p>
      <a href="/order" class="svc-cta-btn">Передать обувь</a>
    </div>
  </section>

  <section class="svc-faq-section" itemscope itemtype="https://schema.org/FAQPage">
    <div class="container">
      <h2 class="svc-section-title">Часто задаваемые вопросы о чистке люкс-кроссовок</h2>
      <div class="svc-faq-list">
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Сколько стоит химчистка люкс-кроссовок?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Стоимость — от 5 990 ₽ за пару. Цена зависит от бренда, материала и сложности загрязнений. Точную стоимость называем после осмотра.</p>
          </div>
        </div>
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Какие бренды кроссовок вы принимаете?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Balenciaga, Dior, Off-White, Golden Goose, Common Projects, Alexander McQueen, Gucci, Prada, Louis Vuitton и другие люкс-бренды. Минимальная стоимость обуви — от 30 000 ₽.</p>
          </div>
        </div>
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Вы отбеливаете подошву?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Да, отбеливание подошвы — дополнительная услуга. Удаляем желтизну и возвращаем белоснежный вид. Стоимость — от 10 990 ₽.</p>
          </div>
        </div>
        <div class="svc-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 itemprop="name">Можно ли постирать кроссовки в машинке?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">Категорически не рекомендуем — особенно для люкс-кроссовок. Стирка разрушает клеевые швы, деформирует обувь и портит дорогие материалы. Профессиональная ручная чистка безопаснее и эффективнее.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
