<?php

namespace App\Services\Seo;

class SeoMeta
{
  public static function head(array $p = []): string
  {
    $siteUrl = $p['siteUrl'] ?? self::siteUrl();
    $title   = $p['title'] ?? 'MANDO MEMORI — химчистка премиальной обуви в Москве | Loro Piana, Hermès, Berluti';
    $desc    = $p['desc'] ?? 'Премиальная мастерская по химчистке и реставрации обуви в Москве. Loro Piana, Hermès, Berluti, John Lobb. Ручная работа от 1 490 ₽. ' . \Setting\Route\Function\Functions::deliveryNote() . '. Гарантия качества.';
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
      '@id' => $siteUrl . '/#localbusiness',
      'name' => 'MANDO MEMORI',
      'description' => 'Премиальная мастерская по химчистке и реставрации обуви и сумок в Москве. Специализация: Loro Piana, Hermès, Berluti, John Lobb. Ручная работа, стоимость от 1 490 ₽.',
      'image' => [
        $siteUrl . '/public/assets/images/mandomemori/мастер чистка.jpg',
        $siteUrl . '/public/assets/images/mandomemori/чистка со спреем.jpg',
      ],
      'logo' => $siteUrl . '/public/assets/images/favicon_full_black.svg',
      'url' => $siteUrl,
      'telephone' => '+7 (916) 182-92-72',
      'email' => 'info@mmclean.ru',
      'address' => [
        '@type' => 'PostalAddress',
        'addressLocality' => 'Москва',
        'addressRegion' => 'Москва',
        'addressCountry' => 'RU',
      ],
      'geo' => [
        '@type' => 'GeoCoordinates',
        'latitude' => 55.765833,
        'longitude' => 37.618889,
      ],
      'aggregateRating' => [
        '@type' => 'AggregateRating',
        'ratingValue' => '4.9',
        'bestRating' => '5',
        'worstRating' => '1',
        'ratingCount' => '1500',
        'reviewCount' => '1500',
      ],
      'priceRange' => '1490₽ – 49900₽',
      'openingHoursSpecification' => [
        [
          '@type' => 'OpeningHoursSpecification',
          'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
          'opens' => '10:00',
          'closes' => '22:00',
        ],
        [
          '@type' => 'OpeningHoursSpecification',
          'dayOfWeek' => 'Sunday',
          'opens' => '11:00',
          'closes' => '22:00',
        ],
      ],
      'knowsAbout' => [
        'Химчистка премиальной обуви',
        'Реставрация обуви Loro Piana',
        'Замена подошвы Loro Piana',
        'Отбеливание подошвы',
        'Ремонт сумок Hermès',
        'Реставрация сумок',
        'Набойки на обувь',
      ],
      'areaServed' => [
        '@type' => 'City',
        'name' => 'Москва',
      ],
      'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name' => 'Услуги премиальной мастерской MANDO MEMORI',
        'itemListElement' => [
          [
            '@type' => 'Offer',
            'itemOffered' => [
              '@type' => 'Service',
              'name' => 'Химчистка премиальной обуви',
            ],
          ],
          [
            '@type' => 'Offer',
            'itemOffered' => [
              '@type' => 'Service',
              'name' => 'Реставрация обуви Loro Piana',
            ],
          ],
          [
            '@type' => 'Offer',
            'itemOffered' => [
              '@type' => 'Service',
              'name' => 'Замена подошвы Loro Piana',
            ],
          ],
        ],
      ],
      'sameAs' => [
        'https://t.me/mandomemori_bot',
      ],
    ];

    $graph = [$business];
    if ($extra) $graph[] = $extra;

    return '<script type="application/ld+json">' . json_encode($graph, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "</script>\n";
  }
}
