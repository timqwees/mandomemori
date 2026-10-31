<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/author/mando-memori', 'priority' => '0.5', 'changefreq' => 'monthly', 'index' => 'authors'];
$pageTitle = 'MANDO MEMORI — эксперт по уходу за обувью и аксессуарами';
$pageDesc = 'MANDO MEMORI — премиальная мастерская по химчистке и реставрации обуви в Москве с 2015 года. Экспертиза материалов, профессиональная чистка, восстановление цвета и формы. Более 10 000 довольных клиентов.';
$pageKeywords = 'MANDO MEMORI эксперт, мастерская химчистка обуви Москва, реставрация обуви, замена подошвы, отбеливание подошвы';
$canonical = '/author/mando-memori';
require __DIR__ . '/../../../partials/header.php';
?>
<main class="main author-page">
  <div class="container">
    <nav class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList" aria-label="Навигация">
      <ol itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a itemprop="item" href="/"><span itemprop="name">Главная</span></a>
          <meta itemprop="position" content="1">
        </li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name">Эксперты</span>
          <meta itemprop="position" content="2">
        </li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name">MANDO MEMORI</span>
          <meta itemprop="position" content="3">
        </li>
      </ol>
    </nav>

    <section class="author-hero" itemscope itemtype="https://schema.org/Person">
      <meta itemprop="name" content="MANDO MEMORI">
      <meta itemprop="url" content="https://mmclean.ru/author/mando-memori">
      <meta itemprop="sameAs" content="https://t.me/maksim1144">
      <div class="author-avatar">
        <img src="/public/assets/images/favicon_full_black.svg" alt="MANDO MEMORI — логотип мастерской" itemprop="image" width="120" height="120">
      </div>
      <div class="author-info">
        <h1 class="author-name" itemprop="name">MANDO MEMORI</h1>
        <p class="author-title">Премиальная мастерская по химчистке и реставрации обуви</p>
        <div class="author-meta">
          <span itemprop="worksFor" itemscope itemtype="https://schema.org/Organization"><span itemprop="name">MANDO MEMORI</span></span>
          <span class="author-location" itemprop="location" itemscope itemtype="https://schema.org/Place"><span itemprop="name">Москва, Петровка 15/13 стр.5</span></span>
        </div>
        <div class="author-links">
          <a href="https://t.me/maksim1144" target="_blank" rel="external nofollow noopener noreferrer" itemprop="sameAs" class="author-link author-link--tg">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20.665 3.717l-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z"/></svg>
            Telegram: @maksim1144
          </a>
          <a href="tel:+79161829272" itemprop="telephone" class="author-link author-link--phone">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            +7 (916) 182-92-72
          </a>
          <a href="mailto:info@mmclean.ru" itemprop="email" class="author-link author-link--email">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            info@mmclean.ru
          </a>
        </div>
      </div>
    </section>

    <section class="author-bio">
      <h2>О мастерской MANDO MEMORI</h2>
      <div class="author-bio-content">
        <p>MANDO MEMORI — профессиональная мастерская по химчистке и реставрации обуви и сумок в Москве. Работаем с 2015 года, за это время очистили более 1 000 000 пар обуви.</p>
        <p>Наша специализация — премиальный сегмент: Loro Piana, Hermès, Berluti, Gucci, Prada, Louis Vuitton, Chanel, Dior, Balenciaga, Christian Louboutin и другие люксовые бренды. Мы не обслуживаем масс-маркет (Zara, H&M, Kari и аналоги).</p>
        <h3>Наши услуги</h3>
        <ul>
          <li>Химчистка обуви — от 5 990 ₽</li>
          <li>Отбеливание подошвы — от 10 990 ₽</li>
          <li>Реставрация обуви — от 6 490 ₽</li>
          <li>Замена подошвы Loro Piana — от 18 990 ₽</li>
          <li>Реставрация сумок — от 7 990 ₽</li>
          <li>Ручная роспись на коже — от 49 900 ₽</li>
        </ul>
        <h3>Почему доверяют нам</h3>
        <ul>
          <li>9 лет на рынке (с 2015 года)</li>
          <li>Более 10 000 довольных клиентов</li>
          <li>Средняя оценка 4.9★</li>
          <li>Профессиональные составы Saphir, Tarrago, Collonil</li>
          <li>Колодки под каждую пару для сохранения формы</li>
          <li>Оплата только после выполнения работы</li>
          <li>Бесплатная доставка курьером по Москве и МО</li>
          <li>Гарантия качества 100%</li>
        </ul>
      </div>
    </section>

    <section class="author-articles">
      <h2>Статьи эксперта</h2>
      <div class="author-articles-grid">
        <?php
        $articlesJson = json_decode(file_get_contents(__DIR__ . '/../../blog/data/articles.json'), true) ?: [];
        usort($articlesJson, fn($a, $b) => strtotime($b['created_at']) - strtotime($a['created_at']));
        $featured = array_slice($articlesJson, 0, 6);
        foreach ($featured as $article): ?>
        <article class="author-article-card" itemscope itemtype="https://schema.org/Article">
          <a href="/blog/<?= $article['url'] ?>" class="author-article-link" itemprop="url">
            <div class="author-article-img" style="background-image:url('<?= htmlspecialchars($article['image']) ?>')" itemprop="image"></div>
            <div class="author-article-body">
              <span class="author-article-cat"><?= htmlspecialchars($article['category']) ?></span>
              <h3 class="author-article-title" itemprop="headline"><?= htmlspecialchars($article['title']) ?></h3>
              <time class="author-article-date" itemprop="datePublished" datetime="<?= date('c', strtotime($article['created_at'])) ?>"><?= date('d.m.Y', strtotime($article['created_at'])) ?></time>
            </div>
          </a>
        </article>
        <?php endforeach; ?>
      </div>
      <a href="/blog" class="author-articles-more">Все статьи →</a>
    </section>

    <section class="author-cta">
      <h3>Нужен совет эксперта?</h3>
      <p>Пришлите фото проблемы в Telegram — оценим за 5 минут бесплатно. Или позвоните — проконсультируем сразу.</p>
      <div class="author-cta-btns">
        <a href="tel:+79161829272" class="author-cta-btn author-cta-btn--phone">Позвонить: +7 (916) 182-92-72</a>
        <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=author_page" target="_blank" rel="external nofollow noopener noreferrer" class="author-cta-btn author-cta-btn--tg">Telegram — 5 мин</a>
      </div>
    </section>
  </div>
</main>

<style>
.author-page { background: #fff; color: #1a1a1a; min-height: 100vh; }
.author-hero { display: flex; gap: 32px; padding: 60px 0; align-items: flex-start; flex-wrap: wrap; }
.author-avatar { flex-shrink: 0; }
.author-avatar img { border-radius: 50%; background: #f0f0f0; padding: 20px; }
.author-info { flex: 1; min-width: 280px; }
.author-name { font-family: var(--font-heading); font-size: clamp(1.8rem, 3vw, 2.4rem); font-weight: 700; margin: 0 0 8px; color: #000; }
.author-title { color: #666; font-size: 1.1rem; margin: 0 0 16px; }
.author-meta { display: flex; gap: 16px; flex-wrap: wrap; font-size: 0.9rem; color: #888; margin-bottom: 20px; }
.author-links { display: flex; gap: 12px; flex-wrap: wrap; }
.author-link { display: inline-flex; align-items: center; gap: 8px; padding: 10px 16px; border-radius: 8px; font-size: 0.9rem; font-weight: 600; text-decoration: none; transition: transform .2s, background .2s; }
.author-link:hover { transform: translateY(-2px); }
.author-link--tg { background: #229ED9; color: #fff; }
.author-link--phone { background: #1a1a1a; color: #fff; }
.author-link--email { background: #f0f0f0; color: #333; }
.author-bio { padding: 60px 0; border-top: 1px solid #e5e5e5; }
.author-bio h2 { font-family: var(--font-heading); font-size: 1.5rem; font-weight: 700; margin: 0 0 24px; color: #000; }
.author-bio-content { max-width: 800px; }
.author-bio-content p { line-height: 1.7; margin-bottom: 16px; }
.author-bio-content h3 { font-family: var(--font-heading); font-size: 1.1rem; margin: 24px 0 12px; color: #000; }
.author-bio-content ul { margin: 0 0 16px; padding-left: 20px; }
.author-bio-content li { margin-bottom: 8px; line-height: 1.6; }
.author-articles { padding: 60px 0; border-top: 1px solid #e5e5e5; }
.author-articles h2 { font-family: var(--font-heading); font-size: 1.5rem; font-weight: 700; margin: 0 0 24px; color: #000; }
.author-articles-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 16px; }
.author-article-card { border: 1px solid #e5e5e5; border-radius: 12px; overflow: hidden; transition: transform .2s, box-shadow .2s; }
.author-article-card:hover { transform: translateY(-4px); box-shadow: 0 12px 32px rgba(0,0,0,0.08); }
.author-article-link { display: block; text-decoration: none; color: inherit; }
.author-article-img { aspect-ratio: 16/9; background-size: cover; background-position: center; }
.author-article-body { padding: 16px; }
.author-article-cat { font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.05em; color: #D4562A; font-weight: 700; }
.author-article-title { font-family: var(--font-heading); font-size: 1.05rem; font-weight: 700; margin: 8px 0; color: #000; line-height: 1.3; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
.author-article-date { font-size: 0.85rem; color: #999; }
.author-articles-more { display: inline-block; margin-top: 24px; color: #D4562A; font-weight: 700; text-decoration: none; }
.author-articles-more:hover { text-decoration: underline; }
.author-cta { padding: 60px 0; text-align: center; background: #fafafa; border-top: 1px solid #e5e5e5; }
.author-cta h3 { font-family: var(--font-heading); font-size: 1.5rem; font-weight: 700; margin: 0 0 12px; color: #000; }
.author-cta p { color: #666; margin: 0 0 24px; }
.author-cta-btns { display: flex; gap: 12px; justify-content: center; flex-wrap: wrap; }
.author-cta-btn { display: inline-flex; align-items: center; gap: 8px; padding: 14px 28px; border-radius: 8px; font-size: 1rem; font-weight: 700; text-decoration: none; transition: transform .2s, background .2s; }
.author-cta-btn:hover { transform: translateY(-2px); }
.author-cta-btn--phone { background: #1a1a1a; color: #fff; }
.author-cta-btn--tg { background: #229ED9; color: #fff; }
@media (max-width: 768px) {
  .author-hero { flex-direction: column; align-items: center; text-align: center; }
  .author-meta { justify-content: center; }
  .author-links { justify-content: center; }
}
</style>

<?php require __DIR__ . '/../../../partials/footer.php'; ?>