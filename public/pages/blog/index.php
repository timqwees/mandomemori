<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/blog', 'priority' => '0.8', 'changefreq' => 'weekly', 'index' => 'articles'];
$pageTitle = 'Блог об уходе за обувью — MANDO MEMORI, советы экспертов 2026';
$pageDesc = 'Полезные статьи об уходе за обувью: чистка кроссовок, отбеливание подошвы, реставрация, тренды 2026. Советы профессионалов MANDO MEMORI с 10-летним опытом.';
$pageKeywords = 'блог об уходе за обувью, советы по чистке обуви, уход за кроссовками, блог MANDO MEMORI';
$robots = 'index, follow';
$canonical = $_SERVER['REQUEST_URI'] ?? '/blog';
require __DIR__ . '/../../partials/header.php';

$articlesJson = json_decode(file_get_contents(__DIR__ . '/data/articles.json'), true) ?: [];
usort($articlesJson, fn($a, $b) => strtotime($b['created_at']) - strtotime($a['created_at']));

$perPage = 5;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;
$maxPages = ceil(count($articlesJson) / $perPage);
if ($page > $maxPages) $page = $maxPages;
$offset = ($page - 1) * $perPage;
$articles = array_slice($articlesJson, $offset, $perPage);

$seenCats = [];
$categories = [];
foreach ($articlesJson as $item) {
  if (!empty($item['category']) && !in_array($item['category'], $seenCats)) {
    $seenCats[] = $item['category'];
    $categories[] = $item['category'];
  }
}

$tops = array_slice($articlesJson, 0, 5);
$featured = $articlesJson[0] ?? null;
$allArticles = $articlesJson;
$listArticles = $articlesJson;
if ($featured) {
  $listArticles = array_slice($articlesJson, 1);
  $maxPages = max(1, ceil(count($listArticles) / $perPage));
  if ($page > $maxPages) $page = $maxPages;
  $offset = ($page - 1) * $perPage;
  $articles = array_slice($listArticles, $offset, $perPage);
}
?>
<main class="main blog-page">
  <section class="blog-hero">
    <div class="container">
      <h1 class="blog-hero-title">Блог / статьи</h1>
      <p class="blog-hero-desc">Полезные советы по уходу за обувью: инструкции, тренды, лайфхаки от профессионалов MANDO MEMORI</p>
    </div>
  </section>

  <?php if ($featured && $page <= 1): ?>
  <section class="blog-featured">
    <div class="container">
      <a href="/blog/<?= $featured['url'] ?>" class="blog-featured-card" itemscope itemtype="https://schema.org/Article">
        <meta itemprop="inLanguage" content="ru-RU">
        <div class="blog-featured-img" style="background-image:url('<?= htmlspecialchars($featured['image']) ?>')" itemprop="image" itemscope itemtype="https://schema.org/ImageObject"></div>
        <div class="blog-featured-body">
          <span class="blog-featured-badge">Рекомендуем</span>
          <span class="blog-featured-cat"><?= htmlspecialchars($featured['category']) ?></span>
          <h2 class="blog-featured-title" itemprop="headline"><?= htmlspecialchars($featured['title']) ?></h2>
          <p class="blog-featured-text" itemprop="description"><?= htmlspecialchars(mb_substr($featured['content'], 0, 200)) ?>...</p>
          <span class="blog-featured-btn">Читать статью →</span>
        </div>
      </a>
    </div>
  </section>
  <?php endif; ?>

  <section class="blog-content">
    <div class="container">
      <div class="blog-layout">
        <div class="blog-main">
          <div class="blog-filters">
            <button class="blog-filter active" data-filter="all">Все статьи</button>
            <?php foreach ($categories as $cat): ?>
            <button class="blog-filter" data-filter="<?= htmlspecialchars($cat) ?>"><?= htmlspecialchars($cat) ?></button>
            <?php endforeach; ?>
          </div>

          <div class="blog-cards">
            <?php if (empty($articles)): ?>
            <div class="blog-card">
              <div class="blog-card-body" style="padding:40px;text-align:center">
                <p style="color:#999">Пока нет статей. Вернитесь позже!</p>
              </div>
            </div>
            <?php else: ?>
            <?php foreach ($articles as $article): ?>
            <article class="blog-card" data-category="<?= htmlspecialchars($article['category']) ?>" itemscope itemtype="https://schema.org/Article">
              <meta itemprop="inLanguage" content="ru-RU">
              <div class="blog-card-grid">
                <div class="blog-card-img-wrap">
                  <div class="blog-card-bg" style="background-image:url('<?= htmlspecialchars($article['image']) ?>')" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                    <meta itemprop="url" content="<?= $siteUrl ?? 'https://mandomemori.ru' . htmlspecialchars($article['image']) ?>">
                  </div>
                  <?php if (!empty($article['category'])): ?>
                  <span class="blog-card-cat"><?= htmlspecialchars($article['category']) ?></span>
                  <?php endif; ?>
                </div>
                <div class="blog-card-body">
                  <h2 class="blog-card-title" itemprop="headline"><?= htmlspecialchars($article['title']) ?></h2>
                  <p class="blog-card-text" itemprop="description"><?= htmlspecialchars(mb_substr($article['content'], 0, 150)) ?>...</p>
                  <div class="blog-card-meta">
                    <span class="blog-card-date"><time itemprop="datePublished" datetime="<?= date('c', strtotime($article['created_at'])) ?>"><?= date('d.m.Y', strtotime($article['created_at'])) ?></time></span>
                    <a href="/blog/<?= $article['url'] ?>" class="blog-card-btn" itemprop="url">Читать статью →</a>
                  </div>
                </div>
              </div>
            </article>
            <?php endforeach; ?>
            <?php endif; ?>
          </div>

          <?php if ($maxPages > 1): ?>
          <div class="blog-pagination">
            <?php if ($page > 1): ?>
            <a href="?page=<?= $page - 1 ?>" class="blog-pag-btn">← Назад</a>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $maxPages; $i++): ?>
            <?php if ($i === $page): ?>
            <span class="blog-pag-btn active"><?= $i ?></span>
            <?php else: ?>
            <a href="?page=<?= $i ?>" class="blog-pag-btn"><?= $i ?></a>
            <?php endif; ?>
            <?php endfor; ?>
            <?php if ($page < $maxPages): ?>
            <a href="?page=<?= $page + 1 ?>" class="blog-pag-btn">Вперед →</a>
            <?php endif; ?>
          </div>
          <?php endif; ?>
        </div>

        <aside class="blog-sidebar">
          <div class="blog-sidebar-card">
            <div class="blog-sidebar-header">Популярные статьи</div>
            <div class="blog-sidebar-body">
              <?php foreach ($tops as $i => $item): ?>
              <a class="blog-popular-item" href="/blog/<?= $item['url'] ?>">
                <div class="blog-popular-img" style="background-image:url('<?= htmlspecialchars($item['image']) ?>')"></div>
                <div class="blog-popular-body">
                  <div class="blog-popular-title"><?= htmlspecialchars($item['title']) ?></div>
                  <div class="blog-popular-date"><?= date('d.m.Y', strtotime($item['created_at'])) ?></div>
                </div>
              </a>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="blog-sidebar-card">
            <div class="blog-sidebar-header">Наши услуги</div>
            <div class="blog-sidebar-body">
              <div class="blog-service-item">
                <div class="blog-service-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20 7l-8 9-4-4"/></svg>
                </div>
                <div>
                  <div class="blog-service-title">Чистка обуви</div>
                  <div class="blog-service-desc">Комплексная чистка любых типов обуви</div>
                </div>
              </div>
              <div class="blog-service-item">
                <div class="blog-service-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                </div>
                <div>
                  <div class="blog-service-title">Отбеливание подошвы</div>
                  <div class="blog-service-desc">Возвращаем белизну без разводов</div>
                </div>
              </div>
              <div class="blog-service-item">
                <div class="blog-service-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><polygon points="12 2 15 9 22 9 16 14 18 22 12 18 6 22 8 14 2 9 9 9"/></svg>
                </div>
                <div>
                  <div class="blog-service-title">Реставрация</div>
                  <div class="blog-service-desc">Восстановление цвета и формы</div>
                </div>
              </div>
              <a href="/products" class="blog-service-all">Все услуги →</a>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </section>
</main>

<style>
.blog-page { --blog-bg: #fff; --blog-card: #fff; --blog-border: #e5e5e5; --blog-text: #1a1a1a; --blog-muted: #6b6b6b; --accent: #D4562A; --blog-hover: #f9f9f9; }
.blog-page { background: var(--blog-bg); color: var(--blog-text); min-height: 100vh; }
.blog-hero { padding: clamp(2rem,4vw,3.5rem) 0; border-bottom: 1px solid var(--blog-border); }
.blog-hero-title { font-family: var(--font-heading); font-size: clamp(1.8rem,4vw,2.8rem); font-weight: 700; letter-spacing:-0.02em; line-height:1.1; margin:0; color: #000; }
.blog-hero-desc { color: var(--blog-muted); margin-top: 10px; font-size: clamp(0.9rem,1.1vw,1rem); max-width: 600px; line-height:1.55; }
.blog-content { padding: clamp(1.5rem,3vw,2.5rem) 0 clamp(3rem,5vw,5rem); }
.blog-layout { display: grid; grid-template-columns: 1fr 320px; gap: clamp(1.5rem,2.5vw,2.5rem); align-items: start; }
@media (max-width: 900px) { .blog-layout { grid-template-columns: 1fr; } }
.blog-filters { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 28px; }
.blog-filter { height: 36px; padding: 0 16px; border-radius: 8px; font-size: 13px; font-weight: 500; cursor: pointer; background: #f0f0f0; color: var(--blog-muted); border: none; transition: all .15s; }
.blog-filter:hover { background: #e5e5e5; color: var(--blog-text); }
.blog-filter.active { background: var(--accent); color: #fff; }
.blog-cards { display: flex; flex-direction: column; gap: 16px; }
.blog-card { border-radius: 12px; background: var(--blog-card); border: 1px solid var(--blog-border); overflow: hidden; transition: box-shadow .2s, border-color .2s; }
.blog-card:hover { box-shadow: 0 4px 24px rgba(0,0,0,0.06); border-color: #d0d0d0; }
.blog-card-grid { display: grid; grid-template-columns: 240px 1fr; min-height: 160px; }
@media (max-width: 767px) { .blog-card-grid { grid-template-columns: 1fr; } .blog-card-img-wrap { min-height: 220px; } }
.blog-card-img-wrap { position: relative; overflow: hidden; min-height: 160px; background: #eaeaea; }
.blog-card-bg { position: absolute; inset: 0; background-size: cover; background-position: center; transition: transform .3s; }
.blog-card:hover .blog-card-bg { transform: scale(1.04); }
.blog-card-cat { position: absolute; top: 10px; left: 10px; padding: 3px 10px; border-radius: 4px; background: var(--accent); color: #fff; font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing:0.03em; }
.blog-card-body { padding: 20px 22px 16px; display: flex; flex-direction: column; }
.blog-card-title { font-size: 17px; line-height: 23px; font-weight: 700; color: #000; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
.blog-card-text { margin-top: 8px; font-size: 14px; line-height: 20px; color: var(--blog-muted); flex: 1; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }
.blog-card-meta { margin-top: 14px; display: flex; align-items: center; gap: 12px; font-size: 13px; color: #999; }
.blog-card-btn { margin-left: auto; display: inline-flex; align-items: center; gap: 4px; height: 32px; padding: 0 16px; border-radius: 6px; color: #fff; font-size: 12px; font-weight: 600; background: var(--accent); text-decoration: none; transition: background .2s; }
.blog-card-btn:hover { background: #e05a2a; }
.blog-featured { padding-bottom: 0; }
.blog-featured-card { display: grid; grid-template-columns: 1fr 1fr; border-radius: 12px; background: #fafafa; border: 2px solid var(--accent); overflow: hidden; text-decoration: none; transition: box-shadow .2s; min-height: 300px; }
.blog-featured-card:hover { box-shadow: 0 6px 30px rgba(212,86,42,0.12); }
@media (max-width: 767px) { .blog-featured-card { grid-template-columns: 1fr; } }
.blog-featured-img { min-height: 280px; background-size: cover; background-position: center; }
.blog-featured-body { padding: 32px; display: flex; flex-direction: column; justify-content: center; }
.blog-featured-badge { display: inline-flex; align-self: flex-start; padding: 4px 12px; border-radius: 4px; background: var(--accent); color: #fff; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing:0.05em; margin-bottom: 12px; }
.blog-featured-cat { font-size: 12px; color: var(--blog-muted); text-transform: uppercase; letter-spacing:0.03em; font-weight: 600; margin-bottom: 8px; }
.blog-featured-title { font-family: var(--font-heading); font-size: clamp(1.2rem,2.5vw,1.6rem); font-weight: 700; line-height: 1.2; color: #000; margin: 0 0 10px; }
.blog-featured-text { font-size: 14px; line-height: 1.55; color: var(--blog-muted); margin: 0 0 18px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }
.blog-featured-btn { display: inline-flex; align-items: center; gap: 4px; height: 36px; padding: 0 18px; border-radius: 6px; font-size: 13px; font-weight: 600; color: #fff; background: var(--accent); align-self: flex-start; transition: background .2s; }
.blog-featured-card:hover .blog-featured-btn { background: #e05a2a; }
.blog-pagination { display: flex; justify-content: center; align-items: center; gap: 6px; margin-top: 32px; flex-wrap: wrap; }
.blog-pag-btn { display: inline-flex; align-items: center; justify-content: center; height: 38px; min-width: 38px; padding: 0 14px; border-radius: 8px; font-size: 13px; font-weight: 500; color: var(--blog-muted); background: #f0f0f0; border: none; text-decoration: none; transition: background .15s; cursor: pointer; }
.blog-pag-btn:hover { background: #e5e5e5; color: var(--blog-text); }
.blog-pag-btn.active { background: var(--accent); color: #fff; }
.blog-sidebar-card { border-radius: 12px; background: #f7f7f7; border: 1px solid var(--blog-border); overflow: hidden; }
.blog-sidebar-header { padding: 14px 18px; border-bottom: 1px solid var(--blog-border); font-size: 15px; font-weight: 700; color: #000; }
.blog-sidebar-body { padding: 8px 18px; }
.blog-popular-item { display: flex; gap: 10px; padding: 10px 0; border-bottom: 1px solid #eaeaea; text-decoration: none; align-items: center; }
.blog-popular-item:last-child { border-bottom: none; }
.blog-popular-img { width: 44px; height: 44px; min-width: 44px; border-radius: 6px; background-size: cover; background-position: center; background-color: #eaeaea; }
.blog-popular-body { flex: 1; min-width: 0; }
.blog-popular-title { font-size: 13px; font-weight: 600; color: #000; line-height: 17px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
.blog-popular-date { font-size: 11px; color: #999; margin-top: 3px; }
.blog-service-item { display: flex; gap: 10px; padding: 10px 0; border-bottom: 1px solid #eaeaea; align-items: flex-start; }
.blog-service-item:last-child { border-bottom: none; }
.blog-service-icon { width: 32px; height: 32px; min-width: 32px; border-radius: 8px; background: rgba(212,86,42,0.12); color: var(--accent); display: flex; align-items: center; justify-content: center; }
.blog-service-title { font-size: 13px; font-weight: 600; color: #000; }
.blog-service-desc { font-size: 12px; color: var(--blog-muted); margin-top: 1px; }
.blog-service-all { display: block; margin-top: 12px; font-size: 13px; font-weight: 600; color: var(--accent); text-decoration: none; padding-bottom: 8px; }
.blog-service-all:hover { text-decoration: underline; }
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.blog-filter').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var filter = this.dataset.filter;
      document.querySelectorAll('.blog-filter').forEach(function (b) { b.classList.remove('active'); });
      this.classList.add('active');
      document.querySelectorAll('.blog-card').forEach(function (card) {
        card.style.display = filter === 'all' || card.dataset.category === filter ? '' : 'none';
      });
    });
  });
});
</script>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
