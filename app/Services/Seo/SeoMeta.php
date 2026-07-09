<?php

namespace App\Services\Seo;

class SeoMeta
{
  public static function head(array $p = []): string
  {
    $siteUrl = $p['siteUrl'] ?? self::siteUrl();
    $title   = $p['title'] ?? 'MANDO MEMORI — химчистка обуви в Москве, чистка кроссовок и отбеливание подошвы';
    $desc    = $p['desc'] ?? 'MANDO MEMORI — профессиональная химчистка обуви в Москве. Чистка кроссовок, замши, нубука, кожи. Отбеливание подошвы, покраска, реставрация. Бесплатная доставка.';
    $kw      = $p['keywords'] ?? '';
    $canon   = $p['canonical'] ?? '/';
    $img     = $p['image'] ?? '/public/assets/images/services/default.webp';
    $type    = $p['type'] ?? 'website';
    $locale  = $p['locale'] ?? 'ru_RU';
    $robots  = $p['robots'] ?? 'index, follow';
    $author  = $p['author'] ?? 'MANDO MEMORI';
    $hreflang = $p['hreflang'] ?? ($siteUrl . $canon);

    $h = '';

    $h .= '<title>' . htmlspecialchars($title) . "</title>\n";
    $h .= '<meta name="description" content="' . htmlspecialchars($desc) . "\">\n";
    if ($kw) $h .= '<meta name="keywords" content="' . htmlspecialchars($kw) . "\">\n";
    $h .= "<meta name=\"robots\" content=\"$robots\">\n";
    $h .= '<meta name="author" content="' . htmlspecialchars($author) . "\">\n";
    $h .= '<meta name="publisher" content="' . htmlspecialchars($author) . "\">\n";

    $h .= '<meta property="og:title" content="' . htmlspecialchars($title) . "\">\n";
    $h .= '<meta property="og:description" content="' . htmlspecialchars($desc) . "\">\n";
    $h .= '<meta property="og:image" content="' . $siteUrl . $img . "\">\n";
    $h .= "<meta property=\"og:type\" content=\"$type\">\n";
    $h .= '<meta property="og:url" content="' . $siteUrl . $canon . "\">\n";
    $h .= "<meta property=\"og:locale\" content=\"$locale\">\n";

    $h .= "<meta name=\"twitter:card\" content=\"summary_large_image\">\n";
    $h .= '<meta name="twitter:title" content="' . htmlspecialchars($title) . "\">\n";
    $h .= '<meta name="twitter:description" content="' . htmlspecialchars($desc) . "\">\n";

    $h .= '<link rel="canonical" href="' . $siteUrl . $canon . "\">\n";

    $h .= '<link rel="alternate" href="' . $hreflang . '" hreflang="ru-RU">' . "\n";
    $h .= '<link rel="alternate" href="' . $hreflang . '" hreflang="x-default">' . "\n";

    $extraLd = $p['jsonLd'] ?? null;
    $h .= self::jsonLd($siteUrl, $extraLd);

    return $h;
  }

  public static function siteUrl(): string
  {
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'mandomemori.ru';
    return "$scheme://$host";
  }

  private static function jsonLd(string $siteUrl, ?array $extra = null): string
  {
    $business = [
      '@context' => 'https://schema.org',
      '@type' => 'LocalBusiness',
      'name' => 'MANDO MEMORI',
      'description' => 'Профессиональная химчистка обуви в Москве. Чистка кроссовок, отбеливание подошвы, премиальный уход.',
      'image' => $siteUrl . '/public/assets/images/favicon_full_black.svg',
      'url' => $siteUrl,
      'telephone' => '+7 (915) 252-75-75',
      'email' => 'info@mmclean.ru',
      'address' => [
        '@type' => 'PostalAddress',
        'addressLocality' => 'Москва',
        'addressCountry' => 'RU',
      ],
      'aggregateRating' => [
        '@type' => 'AggregateRating',
        'ratingValue' => '4.9',
        'bestRating' => '5',
        'ratingCount' => '1500',
      ],
      'priceRange' => '990₽ – 8990₽',
      'openingHours' => 'Mo-Sa 10:00-22:00, Su 11:00-22:00',
    ];

    $graph = [$business];
    if ($extra) $graph[] = $extra;

    return '<script type="application/ld+json">' . json_encode($graph, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . "</script>\n";
  }
}
