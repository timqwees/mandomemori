<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteUrl = $_SERVER['REQUEST_URI'] ?? '/';
$canonical = $siteUrl;

$articlesJson = json_decode(file_get_contents(__DIR__ . '/data/articles.json'), true) ?: [];
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
$contentFile = __DIR__ . '/article/content/' . $articleId . '.php';
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

require __DIR__ . '/../../partials/header.php';

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

require __DIR__ . '/../../partials/footer.php';
