<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$slug = $args[1] ?? '';
$articlesPath = __DIR__ . '/../data/articles.json';
$articlesJson = json_decode(file_get_contents($articlesPath), true) ?: [];
$article = null;
foreach ($articlesJson as $a) {
  if ($a['url'] === $slug) { $article = $a; break; }
}

if (!$article) {
  http_response_code(404);
  $pageTitle = 'Статья не найдена — MANDO MEMORI';
  $pageDesc = 'Запрашиваемая статья не найдена.';
  require __DIR__ . '/../../../partials/header.php';
  echo '<main class="main" style="padding:80px 0;text-align:center;background:#fff;color:#000;min-height:50vh"><h1>404 — Статья не найдена</h1><p style="color:#666;margin-top:12px"><a href="/blog" style="color:#D4562A">Вернуться в блог</a></p></main>';
  require __DIR__ . '/../../../partials/footer.php';
  exit;
}

$siteURL = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? 'mandomemori.ru');
$articleUrl = $siteURL . '/blog/' . $article['url'];
$articleImage = $siteURL . $article['image'];

$siteINFO = ['canonical' => '/blog/' . $article['url'], 'priority' => '0.7', 'changefreq' => 'monthly', 'index' => 'articles'];
$pageTitle = $article['title'] . ' — MANDO MEMORI';
$pageDesc = $article['meta_description'];
$pageKeywords = $article['tags'];
$robots = 'index, follow';
$canonical = '/blog/' . $article['url'];
$ogImage = $article['image'];
require __DIR__ . '/../../../partials/header.php';

$tops = array_filter($articlesJson, fn($a) => (int)$a['id'] !== (int)$id);
$tops = array_slice(array_values($tops), 0, 5);
?>
<main class="main article-page">
  <section class="article-hero">
    <div class="container">
      <nav class="article-breadcrumbs">
        <a href="/">Главная</a> <span class="article-bc-sep">→</span>
        <a href="/blog">Блог</a> <span class="article-bc-sep">→</span>
        <span><?= htmlspecialchars($article['category']) ?></span>
      </nav>
      <div class="article-meta-top">
        <span class="article-cat"><?= htmlspecialchars($article['category']) ?></span>
        <span class="article-date"><time datetime="<?= date('c', strtotime($article['created_at'])) ?>"><?= date('d.m.Y', strtotime($article['created_at'])) ?></time></span>
      </div>
      <h1 class="article-title" itemprop="headline"><?= htmlspecialchars($article['title']) ?></h1>
      <p class="article-desc" itemprop="description"><?= htmlspecialchars($article['meta_description']) ?></p>
      <div class="article-author-row">
        <div class="article-author-avatar">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="#D4562A"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
        </div>
        <span class="article-author-name"><?= htmlspecialchars($article['author']) ?></span>
      </div>
    </div>
  </section>

  <section class="article-body-wrap">
    <div class="container">
      <div class="article-layout">
        <div class="article-main">
          <div class="article-img" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
            <img src="<?= htmlspecialchars($article['image']) ?>" alt="<?= htmlspecialchars($article['title']) ?>" itemprop="contentUrl">
          </div>

          <article class="article-body" itemscope itemtype="https://schema.org/Article">
            <meta itemprop="inLanguage" content="ru-RU">
            <meta itemprop="datePublished" content="<?= date('c', strtotime($article['created_at'])) ?>">
            <meta itemprop="dateModified" content="<?= date('c', strtotime($article['updated_at'])) ?>">
            <meta itemprop="author" content="MANDO MEMORI">
            <link itemprop="mainEntityOfPage" href="<?= $articleUrl ?>">

            <?php
            $contentFile = __DIR__ . '/content/' . $article['id'] . '.php';
            file_exists($contentFile) ? include $contentFile : include __DIR__ . '/content/_default.php';
            ?>
          </article>

          <div class="article-tags">
            <?php foreach (explode(',', $article['tags']) as $tag): ?>
            <span class="article-tag"><?= htmlspecialchars(trim($tag)) ?></span>
            <?php endforeach; ?>
          </div>

          <div class="article-cta">
            <h3 class="article-cta-title">Нужна профессиональная чистка обуви?</h3>
            <p class="article-cta-desc">Доверьте свою обувь экспертам MANDO MEMORI — бесплатная доставка курьером по Москве</p>
            <div class="article-cta-btns">
              <a href="/order" class="article-cta-btn">Заказать чистку</a>
              <a href="/products" class="article-cta-btn article-cta-btn--outline">Посмотреть услуги</a>
            </div>
          </div>
        </div>

        <aside class="article-sidebar">
          <div class="article-sidebar-card">
            <div class="article-sidebar-header">Читайте также</div>
            <div class="article-sidebar-body">
              <?php foreach ($tops as $item): ?>
              <a class="article-popular-item" href="/blog/<?= $item['url'] ?>">
                <span class="article-popular-num"><?= htmlspecialchars($item['title']) ?></span>
                <span class="article-popular-date"><?= date('d.m.Y', strtotime($item['created_at'])) ?></span>
              </a>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="article-sidebar-card article-sidebar-card--cta">
            <div class="article-sidebar-body" style="text-align:center;padding:24px 18px">
              <h4 style="margin:0 0 8px;font-size:16px;color:#000;font-family:var(--font-heading)">Бесплатный курьер</h4>
              <p style="margin:0 0 16px;font-size:13px;color:#666;line-height:1.5">Заберём обувь и привезём обратно после чистки</p>
              <a href="/order" style="display:inline-flex;align-items:center;justify-content:center;height:38px;padding:0 20px;border-radius:6px;background:var(--accent,#D4562A);color:#fff;font-size:13px;font-weight:600;text-decoration:none">Вызвать курьера</a>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </section>
</main>

<style>
.article-page { --blog-bg: #fff; --blog-card: #fff; --blog-border: #e5e5e5; --blog-text: #1a1a1a; --blog-muted: #6b6b6b; --accent: #D4562A; --blog-hover: #f9f9f9; }
.article-page { background: var(--blog-bg); color: var(--blog-text); min-height: 100vh; }

.article-hero { padding: clamp(2rem,4vw,3rem) 0; border-bottom: 1px solid var(--blog-border); }
.article-breadcrumbs { display: flex; align-items: center; gap: 8px; font-size: 13px; color: var(--blog-muted); margin-bottom: 16px; flex-wrap: wrap; }
.article-breadcrumbs a { color: #888; text-decoration: none; transition: color .15s; }
.article-breadcrumbs a:hover { color: var(--accent); }
.article-bc-sep { color: #ccc; }
.article-meta-top { display: flex; align-items: center; gap: 12px; margin-bottom: 14px; flex-wrap: wrap; }
.article-cat { display: inline-block; padding: 3px 10px; border-radius: 4px; background: var(--accent); color: #fff; font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing:0.03em; }
.article-date { font-size: 13px; color: var(--blog-muted); }
.article-title { font-family: var(--font-heading); font-size: clamp(1.6rem,3.5vw,2.4rem); font-weight: 700; letter-spacing:-0.02em; line-height:1.15; margin:0; max-width: 800px; color: #000; }
.article-desc { color: var(--blog-muted); margin-top: 12px; font-size: clamp(0.9rem,1.05vw,1rem); line-height:1.55; max-width: 700px; }
.article-author-row { display: flex; align-items: center; gap: 10px; margin-top: 18px; }
.article-author-avatar { width: 32px; height: 32px; border-radius: 50%; background: rgba(212,86,42,0.12); display: flex; align-items: center; justify-content: center; }
.article-author-name { font-size: 13px; font-weight: 500; color: #666; }

.article-body-wrap { padding: clamp(1.5rem,3vw,2.5rem) 0 clamp(3rem,5vw,5rem); }
.article-layout { display: grid; grid-template-columns: 1fr 280px; gap: clamp(1.5rem,2.5vw,2.5rem); align-items: start; }
@media (max-width: 900px) { .article-layout { grid-template-columns: 1fr; } }

.article-img { border-radius: 10px; overflow: hidden; margin-bottom: 28px; background: #eaeaea; box-shadow: 0 1px 4px rgba(0,0,0,0.04); }
.article-img img { width: 100%; height: auto; display: block; aspect-ratio: 16/9; object-fit: cover; }

.article-body { font-size: 16px; line-height: 1.75; color: #333; }
.article-body h2 { font-family: var(--font-heading); font-size: 22px; font-weight: 700; margin: 40px 0 16px; color: #000; letter-spacing:-0.01em; }
.article-body h3 { font-size: 18px; font-weight: 600; margin: 32px 0 12px; color: #000; }
.article-body p { margin: 0 0 18px; }
.article-body ul, .article-body ol { margin: 0 0 18px; padding-left: 20px; }
.article-body li { margin-bottom: 6px; }
.article-body strong { color: #000; }
.article-body a { color: var(--accent); text-decoration: underline; text-underline-offset:2px; }

.article-body [data-type="start"] { font-size: 17px; line-height: 1.8; color: #555; }
.article-body [data-type="list"] { background: #f7f7f7; border: 1px solid var(--blog-border); border-radius: 10px; padding: 20px 24px; margin-bottom: 24px; }
.article-body [data-type="list"] h3 { margin-top: 0; }
.article-body [data-type="list"] ol { margin: 0; padding-left: 20px; }
.article-body [data-type="list"] li { margin-bottom: 8px; }
.article-body [data-type="list"] a { color: var(--accent); text-decoration: none; }
.article-body [data-type="list"] a:hover { text-decoration: underline; }
.article-body [data-type="box"] { border-radius: 10px; padding: 20px 24px; margin-bottom: 20px; }
.article-body [data-type="box"][data-color="gray"] { background: #f7f7f7; border: 1px solid var(--blog-border); }
.article-body [data-type="box"][data-color="dark"] { background: #1a1a1a; border: 1px solid #333; }
.article-body [data-type="box"][data-color="dark"] h4 { color: #fff; }
.article-body [data-type="box"][data-color="dark"] p { color: rgba(255,255,255,0.75); }
.article-body [data-type="box"][data-color="blue"] { background: rgba(212,86,42,0.06); border: 1px solid rgba(212,86,42,0.2); }
.article-body [data-type="box"][data-color="green"] { background: rgba(34,197,94,0.06); border: 1px solid rgba(34,197,94,0.2); }
.article-body [data-type="box"][data-color="red"] { background: rgba(239,68,68,0.06); border: 1px solid rgba(239,68,68,0.2); }
.article-body [data-type="box"] h4 { margin: 0 0 8px; font-size: 15px; font-weight: 600; color: #000; }
.article-body [data-type="box"] p { margin: 0; font-size: 14px; color: #555; }
.article-body [data-type="box"] p + p { margin-top: 8px; }
.article-body [data-type="compare"] { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-bottom: 24px; }
@media (max-width: 600px) { .article-body [data-type="compare"] { grid-template-columns: 1fr; } }
.article-body [data-type="compare"] article { border-radius: 10px; padding: 18px 20px; }
.article-body [data-type="compare"] article[data-variant="good"] { background: rgba(34,197,94,0.06); border: 1px solid rgba(34,197,94,0.2); }
.article-body [data-type="compare"] article[data-variant="bad"] { background: rgba(239,68,68,0.06); border: 1px solid rgba(239,68,68,0.2); }
.article-body [data-type="compare"] h4 { font-size: 14px; font-weight: 600; margin: 0 0 8px; }
.article-body [data-type="compare"] article[data-variant="good"] h4 { color: #16a34a; }
.article-body [data-type="compare"] article[data-variant="bad"] h4 { color: #dc2626; }
.article-body [data-type="compare"] ul { margin: 0; padding-left: 16px; font-size: 14px; color: #555; }
.article-body [data-type="compare"] li { margin-bottom: 4px; }
.article-body [data-type="image"] { margin-bottom: 24px; }
.article-body [data-type="image"] img { width: 100%; height: auto; border-radius: 10px; display: block; aspect-ratio: 16/9; object-fit: cover; background: #eaeaea; box-shadow: 0 1px 4px rgba(0,0,0,0.04); }

.article-tags { display: flex; flex-wrap: wrap; gap: 6px; margin-top: 32px; padding-top: 24px; border-top: 1px solid var(--blog-border); }
.article-tag { display: inline-block; padding: 4px 10px; border-radius: 4px; background: #f0f0f0; color: #666; font-size: 12px; }

.article-cta { margin-top: 40px; border-radius: 12px; background: #f7f7f7; border: 1px solid var(--blog-border); padding: 36px; text-align: center; }
.article-cta-title { font-family: var(--font-heading); font-size: 20px; font-weight: 700; margin: 0 0 8px; color: #000; }
.article-cta-desc { font-size: 14px; color: var(--blog-muted); margin: 0 0 20px; max-width: 480px; margin-left: auto; margin-right: auto; }
.article-cta-btns { display: flex; gap: 12px; justify-content: center; flex-wrap: wrap; }
.article-cta-btn { display: inline-flex; align-items: center; height: 40px; padding: 0 24px; border-radius: 6px; font-size: 14px; font-weight: 600; color: #fff; background: var(--accent); text-decoration: none; transition: background .2s; }
.article-cta-btn:hover { background: #e05a2a; }
.article-cta-btn--outline { background: transparent; border: 1px solid #d0d0d0; color: #333; }
.article-cta-btn--outline:hover { background: #f0f0f0; }

.article-sidebar-card { border-radius: 12px; background: #f7f7f7; border: 1px solid var(--blog-border); overflow: hidden; }
.article-sidebar-card + .article-sidebar-card { margin-top: 12px; }
.article-sidebar-header { padding: 14px 18px; border-bottom: 1px solid var(--blog-border); font-size: 15px; font-weight: 700; color: #000; }
.article-sidebar-body { padding: 8px 18px; }
.article-popular-item { display: flex; flex-direction: column; gap: 2px; padding: 10px 0; border-bottom: 1px solid #eaeaea; text-decoration: none; }
.article-popular-item:last-child { border-bottom: none; }
.article-popular-num { font-size: 13px; font-weight: 600; color: #000; line-height: 17px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
.article-popular-date { font-size: 11px; color: #999; }
</style>

<?php require __DIR__ . '/../../../partials/footer.php'; ?>
