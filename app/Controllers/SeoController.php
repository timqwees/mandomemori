<?php

namespace App\Controllers;

class SeoController
{
  private function site(): string
  {
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'mandomemori.ru';
    return "$scheme://$host";
  }

  // ── Парсинг $siteINFO из файла без выполнения ────────────────
  private function extractSiteINFO(string $file): array
  {
    $content = @file_get_contents($file);
    if ($content === false || $content === '') return [];

    if (preg_match('/\$siteINFO\s*=\s*\[(.*?)\]\s*;/s', $content, $m)) {
      $inner = $m[1];
      $info = [];
      preg_match_all("/'([^']+)'\s*=>\s*'([^']*)'|\"([^\"]+)\"\s*=>\s*\"([^\"]*)\"/", $inner, $pairs, PREG_SET_ORDER);
      foreach ($pairs as $pair) {
        $key = $pair[1] !== '' ? $pair[1] : $pair[3];
        $val = $pair[2] !== '' ? $pair[2] : $pair[4];
        $info[$key] = $val;
      }
      return $info;
    }
    return [];
  }

  // ── Сбор всех страниц с их $siteINFO ─────────────────────────
  private function extractAllPages(): array
  {
    static $pages = null;
    if ($pages !== null) return $pages;

    $pages = [];
    $base = __DIR__ . '/../../public/pages';

    $dirs = glob($base . '/*', GLOB_ONLYDIR);
    foreach ($dirs as $dir) {
      $name = basename($dir);
      if ($name === 'product' || $name === 'main') continue;

      $indexFile = $dir . '/index.php';
      if (!file_exists($indexFile)) continue;

      $info = $this->extractSiteINFO($indexFile);
      if (empty($info['canonical'])) continue;
      $info['__file'] = $indexFile;
      $pages[] = $info;
    }

    $homeFile = $base . '/main/index.php';
    if (file_exists($homeFile)) {
      $info = $this->extractSiteINFO($homeFile);
      if (!empty($info['canonical'])) {
        $info['__file'] = $homeFile;
        $pages[] = $info;
      }
    }

    $productDirs = glob($base . '/product/*', GLOB_ONLYDIR);
    foreach ($productDirs as $dir) {
      $indexFile = $dir . '/index.php';
      if (!file_exists($indexFile)) continue;

      $slug = basename($dir);
      $info = $this->extractSiteINFO($indexFile);
      $info['canonical'] = '/product/' . $slug;
      if (empty($info['priority'])) $info['priority'] = '0.7';
      if (empty($info['changefreq'])) $info['changefreq'] = 'weekly';
      if (empty($info['index'])) $info['index'] = 'products';
      $info['__file'] = $indexFile;
      $pages[] = $info;
    }

    return $pages;
  }

  // ── Sitemap-index (главный индекс) ───────────────────────────
  public function onSitemap(): void
  {
    header('Content-Type: application/xml; charset=utf-8');

    $indexes = [];
    foreach ($this->extractAllPages() as $p) {
      $idx = $p['index'] ?? 'main';
      $indexes[$idx] = true;
    }

    echo '<?xml version="1.0" encoding="UTF-8"?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    foreach (array_keys($indexes) as $idx) {
      $name = "sitemap-$idx";
      echo "  <sitemap>\n"
        . "    <loc>" . $this->site() . "/$name.xml</loc>\n"
        . "    <lastmod>" . date('Y-m-d') . "</lastmod>\n"
        . "  </sitemap>\n";
    }
    echo '</sitemapindex>';
  }

  // ── Дочерний sitemap ─────────────────────────────────────────
  public function onSitemapChild(string $name): void
  {
    header('Content-Type: application/xml; charset=utf-8');

    $filtered = [];
    foreach ($this->extractAllPages() as $p) {
      $idx = $p['index'] ?? 'main';
      if ($idx === $name) {
        $filtered[] = $p;
      }
    }

    if (empty($filtered)) {
      http_response_code(404);
      echo '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"/>';
      return;
    }

    echo '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xhtml="http://www.w3.org/1999/xhtml">' . "\n";
    foreach ($filtered as $p) {
      $lastmod = $p['lastmod'] ?? date('Y-m-d', filemtime($p['__file']));
      $priority = $p['priority'] ?? '0.5';
      $changefreq = $p['changefreq'] ?? 'monthly';
      echo "  <url>\n"
        . "    <loc>" . $this->site() . $p['canonical'] . "</loc>\n"
        . "    <lastmod>$lastmod</lastmod>\n"
        . "    <changefreq>$changefreq</changefreq>\n"
        . "    <priority>$priority</priority>\n"
        . "  </url>\n";
    }
    echo '</urlset>';
  }

  // ── robots.txt ──────────────────────────────────────────────
  public function onRobots(): void
  {
    $s = $this->site();
    header('Content-Type: text/plain');
    echo implode("\n", [
      'User-agent: *',
      'Allow: /',
      'Disallow: /cart',
      'Disallow: /checkout',
      'Disallow: /send/*',
      'Disallow: /*?*',
      "Sitemap: " . $s . "/sitemap.xml",
      "Host: " . $s,
      '',
    ]);
  }

  // ── LLMs ────────────────────────────────────────────────────
  public function onLlms(): void
  {
    $s = $this->site();
    header('Content-Type: text/plain; charset=utf-8');
    echo "# MANDO MEMORI — химчистка обуви в Москве\n"
      . "> Профессиональная химчистка и уход за обувью.\n"
      . "> Сайт: $s\n"
      . "> Telegram: @mandomemori\n"
      . "> Телефон: +7 (915) 252-75-75\n\n"
      . "## Услуги\n";

    $pages = $this->extractAllPages();
    $services = \Setting\Route\Function\Functions::getServices();
    foreach ($pages as $p) {
      $route = $p['canonical'];
      if (str_starts_with($route, '/product/')) {
        $slug = substr($route, 9);
        $svc = current(array_filter($services, fn($s) => $s['slug'] === $slug));
        $label = $svc ? $svc['title'] . ' — ' . $svc['price_formatted'] . '₽' : $slug;
        echo "- $label\n";
      }
    }

    echo "\n## Страницы\n";
    foreach ($pages as $p) {
      echo "- " . $s . $p['canonical'] . "\n";
    }
  }

  public function onLlmsFull(): void
  {
    $s = $this->site();
    header('Content-Type: text/plain; charset=utf-8');
    echo "# MANDO MEMORI — Полная информация\n\n"
      . "## О компании\n"
      . "MANDO MEMORI — профессиональная химчистка обуви в Москве. "
      . "9 лет на рынке, более 10 000 довольных клиентов, средняя оценка 4.9★. "
      . "Бесплатная доставка курьером по Москве и МО.\n\n"
      . "## Контакты\n"
      . "- Телефон: +7 (915) 252-75-75\n"
      . "- Telegram: @mandomemori\n"
      . "- Email: MandoMemori@list.ru\n"
      . "- Адрес: Москва, Петровка 15/13 стр.5, -1 этаж\n\n"
      . "## Все услуги и цены\n";

    $pages = $this->extractAllPages();
    $services = \Setting\Route\Function\Functions::getServices();
    foreach ($pages as $p) {
      $route = $p['canonical'];
      if (str_starts_with($route, '/product/')) {
        $slug = substr($route, 9);
        $svc = current(array_filter($services, fn($s) => $s['slug'] === $slug));
        $label = $svc ? $svc['title'] . ' — ' . $svc['price_formatted'] . '₽' : $slug;
        echo "- $label — " . $s . "$route\n";
      }
    }

    echo "\n## Адрес\n"
      . "- Москва, Петровка 15/13 стр.5\n";
  }

  // ── Feeds ───────────────────────────────────────────────────
  public function onRss(): void
  {
    header('Content-Type: application/rss+xml; charset=utf-8');
    echo '<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
  <channel>
    <title>MANDO MEMORI — химчистка обуви</title>
    <link>' . $this->site() . '</link>
    <description>Профессиональная химчистка и уход за обувью в Москве</description>
    <language>ru</language>
    <atom:link href="' . $this->site() . '/rss.xml" rel="self" type="application/rss+xml"/>
  </channel>
</rss>';
  }

  public function onFeed(): void { $this->onRss(); }
  public function onAtom(): void
  {
    header('Content-Type: application/atom+xml; charset=utf-8');
    echo '<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom">
  <title>MANDO MEMORI — химчистка обуви</title>
  <link href="' . $this->site() . '/atom.xml" rel="self"/>
  <link href="' . $this->site() . '"/>
  <id>' . $this->site() . '/atom.xml</id>
  <updated>' . date('Y-m-d\TH:i:s\Z') . '</updated>
</feed>';
  }

  // ── PWA Manifest ────────────────────────────────────────────
  public function onManifest(): void
  {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode([
      'name' => 'MANDO MEMORI — химчистка обуви',
      'short_name' => 'MANDO MEMORI',
      'description' => 'Профессиональная химчистка обуви в Москве',
      'start_url' => '/',
      'display' => 'standalone',
      'background_color' => '#FDFBF9',
      'theme_color' => '#1C1512',
      'icons' => [
        ['src' => '/public/assets/images/favicon.svg', 'sizes' => '48x48', 'type' => 'image/svg+xml'],
        ['src' => '/public/assets/images/favicon.svg', 'sizes' => '192x192', 'type' => 'image/svg+xml'],
        ['src' => '/public/assets/images/favicon.svg', 'sizes' => '512x512', 'type' => 'image/svg+xml'],
      ],
    ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
  }

  public function onWebmanifest(): void { $this->onManifest(); }

  // ── Other ───────────────────────────────────────────────────
  public function onOpensearch(): void
  {
    header('Content-Type: application/xml; charset=utf-8');
    echo '<?xml version="1.0" encoding="UTF-8"?>
<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/">
  <ShortName>MANDO MEMORI</ShortName>
  <Description>Поиск по услугам химчистки обуви</Description>
  <Url type="text/html" template="' . $this->site() . '/?q={searchTerms}"/>
</OpenSearchDescription>';
  }

  public function onHumans(): void
  {
    header('Content-Type: text/plain; charset=utf-8');
    echo implode("\n", [
      '# humans.txt — MANDO MEMORI',
      '',
      '## TEAM',
      'Разработка: TimQwees',
      'Дизайн: MANDO MEMORI',
      '',
      '## TECHNOLOGY',
      'PHP, JavaScript, CSS',
      '',
      '## THANKS',
      'Наши клиенты и партнёры ♥',
      '',
    ]);
  }

  public function onSecurity(): void
  {
    $s = $this->site();
    header('Content-Type: text/plain; charset=utf-8');
    echo implode("\n", [
      '# security.txt — MANDO MEMORI',
      'Contact: mailto:MandoMemori@list.ru',
      'Preferred-Languages: ru, en',
      "Policy: " . $s . "/privacy-policy",
      '',
    ]);
  }

  public function onBrowserconfig(): void
  {
    header('Content-Type: application/xml; charset=utf-8');
    echo '<?xml version="1.0" encoding="utf-8"?>
<browserconfig>
  <msapplication>
    <tile>
      <square150x150logo src="/public/assets/images/favicon.svg"/>
      <TileColor>#1C1512</TileColor>
    </tile>
  </msapplication>
</browserconfig>';
  }
}
