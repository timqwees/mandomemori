<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteUrl = $_SERVER['REQUEST_URI'] ?? '/';
$canonical = $siteUrl;

$articlesJson = json_decode(file_get_contents(__DIR__ . '/../data/articles.json'), true) ?: [];
$currentArticle = null;

// Извлекаем slug из URL (/blog/{slug})
$slug = trim(parse_url($siteUrl, PHP_URL_PATH), '/');
$slug = basename($slug); // получаем последний сегмент после разделителя

foreach ($articlesJson as $article) {
    if ($article['url'] === $slug) {
        $currentArticle = $article;
        break;
    }
}

if (!$currentArticle) {
    http_response_code(404);
    echo '404 — статья не найдена';
    exit;
}

$articleId = $currentArticle['id'];
$contentFile = __DIR__ . '/content/' . $articleId . '.php';
$pageTitle = $currentArticle['title'];
$pageDesc = $currentArticle['meta_description'];
$pageKeywords = $currentArticle['tags'];
$ogImage = $currentArticle['image'];

$relatedArticles = array_filter($articlesJson, fn($a) => $a['id'] !== $articleId);
shuffle($relatedArticles);
$relatedArticles = array_slice($relatedArticles, 0, 5);
$categories = array_values(array_unique(array_column($articlesJson, 'category')));

$jsonLd = [
    '@context' => 'https://schema.org',
    '@type' => 'BlogPosting',
    '@id' => $siteUrl . '/blog/' . $currentArticle['url'] . '/#blogpost',
    'headline' => $currentArticle['title'],
    'description' => $currentArticle['meta_description'],
    'author' => [
        '@type' => 'Person',
        'name' => $currentArticle['author'] ?? 'MANDO MEMORI',
        'url' => $siteUrl,
    ],
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'MANDO MEMORI',
        'logo' => [
            '@type' => 'ImageObject',
            'url' => $siteUrl . '/public/assets/images/favicon_full_black.svg',
        ],
        'url' => $siteUrl,
    ],
    'datePublished' => date('c', strtotime($currentArticle['created_at'])),
    'dateModified' => date('c', strtotime($currentArticle['updated_at'] ?? $currentArticle['created_at'])),
    'image' => $ogImage,
    'url' => $siteUrl . '/blog/' . $currentArticle['url'],
    'mainEntityOfPage' => [
        '@type' => 'WebPage',
        '@id' => $siteUrl . '/blog/' . $currentArticle['url'] . '/#webpage',
    ],
    'breadcrumbList' => [
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Главная',
                'item' => $siteUrl . '/',
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Блог',
                'item' => $siteUrl . '/blog',
            ],
            [
                '@type' => 'ListItem',
                'position' => 3,
                'name' => $currentArticle['title'],
                'item' => $siteUrl . '/blog/' . $currentArticle['url'],
            ],
        ],
    ],
    'faq' => [
        [
            'question' => 'Как чистить ' . $currentArticle['title'],
            'answer' => 'Для чистки ' . strtolower($currentArticle['title']) . ' используйте щадящие средства: микрофибру, специализированные очистители и кондиционеры для кожи. Избегайте агрессивных растворителей, воды, сушки на батарее и полиэтиленовых пакетов.',
        ],
        [
            'question' => 'Можно ли вручную чистить ' . strtolower($currentArticle['title']) . ' дома?',
            'answer' => 'Да, но только с использованием специальных щадящих составов. Для глубокого очищения и удаления въевших загрязнений рекомендуется профессиональная чистка в MANDO MEMORI с применением пароочистителей и УФ-стерилизации.',
        ],
    ],
];

$next = null;
$prev = null;

foreach ($articlesJson as $article) {
    if ($article['id'] === $currentArticle['id']) continue;
    if (!$prev) $prev = $article;
    $next = $article;
}

if ($prev) {
    $prevSlug = $prev['url'];
} else {
    $prevSlug = '';
}

if ($next) {
    $nextSlug = $next['url'];
} else {
    $nextSlug = '';
}

// TL;DR блок
$tlDrText = mb_substr($currentArticle['content'], 0, 200);

// HTML контент
$pageContent = '';

if ($contentFile && file_exists($contentFile)) {
    include $contentFile;
} else {
    echo '<section><h2>Контент статьи недоступен</h2></section>';
}

require __DIR__ . '/../../../partials/header.php';

// TL;DR блок
if ($tlDrText) {
    echo '<section class="tldr-block"><div class="container"><h3>TL;DR — краткое содержание</h3><p>' . htmlspecialchars($tlDrText) . '...</p><p><a href="#full-content">Читать полностью →</a></p></div></section>';
}

// Хлебные крошки
echo '<nav class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList" aria-label="Навигация">
  <div class="container">
    <ol itemscope itemtype="https://schema.org/BreadcrumbList">
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/" itemprop="item"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/blog" itemprop="item"><span itemprop="name">Статьи</span></a>
        <meta itemprop="position" content="2">
      </li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span itemprop="name">' . htmlspecialchars($currentArticle['title']) . '</span>
        <meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>';

// Главная статья
if ($currentArticle) {
    echo '<main class="blog-article-page"><div class="container"><article itemscope itemtype="https://schema.org/Article"><meta itemprop="datePublished" content="' . date('c', strtotime($currentArticle['created_at'])) . '">
    <meta itemprop="dateModified" content="' . date('c', strtotime($currentArticle['updated_at'] ?? $currentArticle['created_at'])) . '">
    <meta itemprop="author" content="' . ($currentArticle['author'] ?? 'MANDO MEMORI') . '">
    <h1 itemprop="headline">' . htmlspecialchars($currentArticle['title']) . '</h1>
    <div class="meta-line">
        <time datetime="' . date('c', strtotime($currentArticle['created_at'])) . '">Опубликовано: ' . date('d.m.Y', strtotime($currentArticle['created_at'])) . '</time>
        <span class="category">Категория: ' . htmlspecialchars($currentArticle['category']) . '</span>
    </div>
    <div class="article-content">
        ' . $pageContent . '
    </div>
    <footer class="article-footer">
        <nav class="article-nav">
            ' . ($prevSlug ? '<a href="/blog/' . $prevSlug . '" rel="prev" class="nav-prev">← Предыдущая: ' . htmlspecialchars($prev['title']) . '</a>' : '') . '
            ' . ($nextSlug ? '<a href="/blog/' . $nextSlug . '" rel="next" class="nav-next">Следующая: ' . htmlspecialchars($next['title']) . ' →</a>' : '') . '
        </nav>
        <div class="tags">' . str_replace(', ', ', ', $currentArticle['tags']) . '</div>
    </footer>
    <script type="application/ld+json">' . json_encode($jsonLd, JSON_UNESCAPED_UNICODE) . '</script>
</article></div></main>';
}

// Блок автора
if ($currentArticle) {
    echo '<section class="author-block"><div class="container"><div class="author-info"><div class="author-avatar"><img src="/public/assets/images/favicon_full_black.svg" alt="' . htmlspecialchars($currentArticle['author'] ?? 'MANDO MEMORI') . '" width="80" height="80"></div><div class="author-details"><h3 itemprop="author" itemscope itemtype="https://schema.org/Person"><a href="/" rel="author" itemprop="url"><span itemprop="name">' . htmlspecialchars($currentArticle['author'] ?? 'MANDO MEMORI') . '</span></a></h3><p itemprop="description">MANDO MEMORI — мастерская по химчистке и реставрации обуви в Москве с 2015 года.</p></div></div></div></section>';
}

// Схожие статьи
if (!empty($relatedArticles)) {
    echo '<section class="related-articles"><div class="container"><h2>Схожие статьи</h2><div class="related-grid">';
    foreach ($relatedArticles as $article) {
        echo '<article class="related-card"><a href="/blog/' . $article['url'] . '" rel="bookmark" itemprop="url"><div class="related-img"><img src="' . $article['image'] . '" alt="' . htmlspecialchars($article['title']) . '" loading="lazy" width="300" height="200"></div><div class="related-body"><h3 itemprop="headline">' . htmlspecialchars($article['title']) . '</h3><time itemprop="datePublished" datetime="' . date('c', strtotime($article['created_at'])) . '">' . date('d.m.Y', strtotime($article['created_at'])) . '</time></div></a></article>';
    }
    echo '</div></div></section>';
}

// Стили для страницы статьи
echo '<style>
.blog-article-page { --blog-bg: #fff; --blog-text: #1a1a1a; --blog-muted: #6b6b6b; --accent: #D4562A; --blog-border: #e5e5e5; }
.blog-article-page { background: var(--blog-bg); color: var(--blog-text); }
.blog-article-page main { padding: clamp(2rem,4vw,3rem) 0 clamp(3rem,5vw,5rem); }
.blog-article-page article { max-width: 800px; margin: 0 auto; }
.blog-article-page h1 { font-family: var(--font-heading); font-size: clamp(1.8rem,4vw,2.8rem); font-weight: 700; letter-spacing:-0.02em; line-height:1.15; margin: 0 0 16px; color: #000; }
.meta-line { display: flex; flex-wrap: wrap; gap: 16px; margin-bottom: 24px; font-size: 14px; color: var(--blog-muted); padding-bottom: 16px; border-bottom: 1px solid var(--blog-border); }
.meta-line .category { background: rgba(212,86,42,.1); color: var(--accent); padding: 2px 10px; border-radius: 980px; font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing:0.03em; }
.article-content { font-size: 16px; line-height: 1.75; color: var(--blog-text); }
.article-content p { margin: 0 0 1.5em; }
.article-content h2, .article-content h3 { font-family: var(--font-heading); font-weight: 700; color: #000; margin: 2em 0 0.75em; line-height: 1.3; }
.article-content h2 { font-size: clamp(1.3rem,2.5vw,1.6rem); }
.article-content h3 { font-size: clamp(1.1rem,2vw,1.3rem); }
.article-content img { max-width: 100%; height: auto; border-radius: 10px; margin: 1.5em 0; }
.article-content ul, .article-content ol { margin: 1.5em 0; padding-left: 1.5em; }
.article-content li { margin: 0.5em 0; }
.article-content a { color: var(--accent); text-decoration: underline; text-underline-offset: 2px; }
.article-content a:hover { color: #e05a2a; }
.article-content blockquote { border-left: 3px solid var(--accent); padding-left: 1.5em; margin: 1.5em 0; font-style: italic; color: var(--blog-muted); }
.article-footer { margin-top: 40px; padding-top: 24px; border-top: 1px solid var(--blog-border); }
.article-nav { display: flex; justify-content: space-between; gap: 20px; margin-bottom: 24px; flex-wrap: wrap; }
.nav-prev, .nav-next { display: inline-flex; align-items: center; gap: 8px; padding: 12px 16px; background: #f7f7f7; border-radius: 8px; color: var(--blog-text); text-decoration: none; font-size: 14px; font-weight: 500; transition: all .2s; }
.nav-prev:hover, .nav-next:hover { background: #eaeaea; color: var(--accent); }
.tags { display: flex; flex-wrap: wrap; gap: 8px; }
.tags a { display: inline-block; padding: 4px 12px; background: #f7f7f7; border-radius: 980px; font-size: 12px; color: var(--blog-muted); text-decoration: none; transition: all .2s; }
.tags a:hover { background: var(--accent); color: #fff; }
.tldr-block { background: #fafafa; border: 1px solid var(--blog-border); border-radius: 12px; padding: clamp(1.5rem,3vw,2rem); margin-bottom: clamp(1.5rem,3vw,2rem); }
.tldr-block h3 { font-family: var(--font-heading); font-size: 1.1rem; font-weight: 700; margin: 0 0 12px; color: #000; }
.tldr-block p { margin: 0 0 12px; color: var(--blog-muted); line-height: 1.6; }
.tldr-block a { display: inline-flex; align-items: center; gap: 6px; font-weight: 600; color: var(--accent); text-decoration: none; }
.tldr-block a:hover { text-decoration: underline; }
.breadcrumbs { margin-bottom: 24px; }
.breadcrumbs ol { display: flex; flex-wrap: wrap; gap: 8px; list-style: none; padding: 0; margin: 0; font-size: 14px; color: var(--blog-muted); }
.breadcrumbs a { color: var(--blog-muted); text-decoration: none; transition: color .2s; }
.breadcrumbs a:hover { color: var(--accent); }
.breadcrumbs span[itemprop="name"] { color: var(--blog-text); }
.author-block { background: #fafafa; border: 1px solid var(--blog-border); border-radius: 12px; margin: clamp(2rem,4vw,3rem) 0; }
.author-block .container { max-width: 800px; }
.author-info { display: flex; gap: 20px; padding: clamp(1.5rem,3vw,2rem); align-items: flex-start; }
.author-avatar img { border-radius: 50%; background: var(--accent); }
.author-details h3 { font-family: var(--font-heading); font-size: 1.2rem; font-weight: 700; margin: 0 0 8px; color: #000; }
.author-details p { margin: 0; color: var(--blog-muted); line-height: 1.6; }
.related-articles { margin-top: clamp(2rem,4vw,3rem); }
.related-articles h2 { font-family: var(--font-heading); font-size: clamp(1.3rem,2.5vw,1.6rem); font-weight: 700; margin: 0 0 20px; color: #000; }
.related-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px; }
.related-card { border-radius: 10px; overflow: hidden; border: 1px solid var(--blog-border); background: #fff; transition: transform .2s, box-shadow .2s; }
.related-card:hover { transform: translateY(-4px); box-shadow: 0 12px 40px rgba(0,0,0,.08); }
.related-card a { text-decoration: none; color: inherit; display: block; }
.related-img { aspect-ratio: 3/2; background-size: cover; background-position: center; background-color: #eaeaea; }
.related-body { padding: 16px; }
.related-body h3 { font-size: 15px; font-weight: 600; line-height: 1.4; color: #000; margin: 0 0 8px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
.related-body time { font-size: 12px; color: var(--blog-muted); }
@media (max-width: 767px) {
  .author-info { flex-direction: column; align-items: center; text-align: center; }
  .author-avatar { margin-bottom: 12px; }
  .related-grid { grid-template-columns: 1fr; }
  .article-nav { flex-direction: column; }
}
@keyframes fadeIn { from { opacity:0; transform:translateY(6px); } to { opacity:1; transform:translateY(0); } }
.blog-article-page article { animation: fadeIn .4s ease forwards; }
</style>';

require __DIR__ . '/../../../partials/footer.php';
