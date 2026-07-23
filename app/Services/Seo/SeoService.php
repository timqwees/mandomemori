<?php

namespace App\Services\Seo;

class SeoService
{
    private $meta = [];

    public function __construct()
    {
        $this->meta = [
            'title' => 'MANDO MEMORI — химчистка премиальной обуви в Москве | Loro Piana, Hermès, Berluti',
            'description' => 'Премиальная мастерская по химчистке и реставрации обуви в Москве. Loro Piana, Hermès, Berluti, John Lobb. Ручная работа от 1 490 ₽. ' . \Setting\Route\Function\Functions::deliveryNote() . '. Гарантия качества.',
            'keywords' => 'химчистка премиальной обуви Москва, чистка дорогой обуви, химчистка Loro Piana, реставрация премиальной обуви, уход за обувью люкс, MANDO MEMORI',
            'h1' => 'Химчистка премиальной обуви в Москве — MANDO MEMORI'
        ];
    }

    public function renderHead($meta = [])
    {
        $mergedMeta = array_merge($this->meta, $meta);
        
        $html = '<title>' . htmlspecialchars($mergedMeta['title']) . '</title>' . "\n";
        $html .= '<meta name="description" content="' . htmlspecialchars($mergedMeta['description']) . '">' . "\n";
        $html .= '<meta name="keywords" content="' . htmlspecialchars($mergedMeta['keywords']) . '">' . "\n";
        
        return $html;
    }

    public function jsonLdWebSite()
    {
    $s = SeoMeta::siteUrl();
    $data = [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        '@id' => $s . '/#website',
        'name' => 'MANDO MEMORI',
        'alternateName' => 'mmclean.ru',
        'url' => $s,
        'description' => 'Премиальная химчистка и реставрация обуви и сумок в Москве. Loro Piana, Hermès, Berluti, John Lobb.',
        'inLanguage' => 'ru-RU',
        'potentialAction' => [
            '@type' => 'SearchAction',
            'target' => [
                '@type' => 'EntryPoint',
                'urlTemplate' => $s . '/blog?search={search_term_string}',
            ],
            'query-input' => 'required name=search_term_string',
        ],
    ];
        return '<script type="application/ld+json">' . json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }

    public function jsonLdOrganization()
    {
    $s = SeoMeta::siteUrl();
    $data = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        '@id' => $s . '/#organization',
        'name' => 'MANDO MEMORI',
        'url' => $s,
        'logo' => [
            '@type' => 'ImageObject',
            'url' => $s . '/public/assets/images/favicon_full_black.svg',
            'width' => 90,
            'height' => 52,
        ],
        'description' => 'Премиальная мастерская по химчистке и реставрации обуви в Москве с 2015 года.',
        'foundingDate' => '2015',
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => '+7 (916) 182-92-72',
            'contactType' => 'customer service',
            'availableLanguage' => 'Russian',
        ],
        'sameAs' => [
            'https://t.me/mandomemori_bot',
        ],
    ];
        return '<script type="application/ld+json">' . json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }

    public function jsonLdServices()
    {
    $s = SeoMeta::siteUrl();
        $data = [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'serviceType' => 'Химчистка и реставрация премиальной обуви',
            'name' => 'Химчистка и реставрация премиальной обуви',
            'description' => 'Ручная химчистка и реставрация премиальной обуви и сумок в Москве. Loro Piana, Hermès, Berluti, John Lobb. Стоимость от 1 490 ₽.',
            'provider' => [
                '@type' => 'Organization',
                '@id' => $s . '/#organization',
                'name' => 'MANDO MEMORI',
            ],
            'areaServed' => [
                '@type' => 'City',
                'name' => 'Москва',
            ],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Каталог услуг MANDO MEMORI',
                'itemListElement' => [
                    ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Химчистка премиальной обуви', 'description' => 'Ручная чистка от 5 990 ₽ за пару']],
                    ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Реставрация обуви Loro Piana', 'description' => 'Восстановление от 6 490 ₽ за пару']],
                    ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Замена подошвы Loro Piana', 'description' => 'Замена от 18 990 ₽ за пару']],
                    ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Отбеливание подошвы', 'description' => 'Отбеливание от 10 990 ₽ за пару']],
                    ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Реставрация сумок', 'description' => 'Реставрация от 7 990 ₽ за изделие']],
                ],
            ],
        ];
        return '<script type="application/ld+json">' . json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }

    public function jsonLdFaq()
    {
        $data = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => 'Сколько стоит химчистка премиальной обуви?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Стоимость химчистки премиальной обуви — от 5 990 ₽ за пару. Цена зависит от материала, бренда и сложности работ. Бесплатная консультация и оценка после осмотра.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'С какими брендами вы работаете?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Специализируемся на премиальном сегменте: Loro Piana, Hermès, Berluti, John Lobb, Gucci, Prada, Louis Vuitton, Balenciaga, Christian Louboutin, Manolo Blahnik, Jimmy Choo.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Как работает курьерская служба?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Курьер забирает обувь и возвращает после работы. ' . \Setting\Route\Function\Functions::deliveryNote() . '. Доступно по Москве и МО.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Даёте ли вы гарантию на работу?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Да, предоставляем гарантию на все виды работ. Если результат не устроит — исправим бесплатно в рамках гарантийного срока.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Сколько времени занимает химчистка обуви?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Стандартный срок — 1–6 дней в зависимости от загруженности и сложности. Экспресс-чистка возможна за 24 часа. Точный срок называем после оценки.'
                    ]
                ],
            ]
        ];
        return '<script type="application/ld+json">' . json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }
}
