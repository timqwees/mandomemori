<?php

namespace App\Services\Seo;

class SeoService
{
    private $meta = [];

    public function __construct()
    {
        $this->meta = [
            'title' => 'MANDO MEMORI — химчистка обуви в Москве, чистка кроссовок, отбеливание подошвы',
            'description' => 'Профессиональная химчистка обуви в Москве. Чистка кроссовок, замши, нубука, отбеливание подошвы, покраска. Бесплатная доставка. Более 1 млн пар очищено.',
            'keywords' => 'химчистка обуви Москва, чистка кроссовок, отбеливание подошвы, химчистка замши, реставрация обуви, MANDO MEMORI',
            'h1' => 'Химчистка обуви в Москве — MANDO MEMORI'
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
        'name' => 'MandoMemori',
        'url' => $s,
        'description' => 'Химчистка обуви и сумок в Москве'
    ];
        return '<script type="application/ld+json">' . json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }

    public function jsonLdOrganization()
    {
    $s = SeoMeta::siteUrl();
    $data = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'MandoMemori',
        'url' => $s,
        'logo' => $s . '/public/assets/images/favicon_full_black.svg',
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => '+7 (915) 252-75-75',
                'contactType' => 'customer service'
            ]
        ];
        return '<script type="application/ld+json">' . json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }

    public function jsonLdServices()
    {
        $data = [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => 'Химчистка обуви и сумок',
            'description' => 'Профессиональная химчистка и реставрация обуви, сумок, курток и одежды',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'MandoMemori'
            ]
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
                    'name' => 'Сколько времени занимает химчистка?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Обычно химчистка занимает 1-3 дня в зависимости от сложности работы.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Как работает курьерская служба?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Курьер забирает вещи в течение 30 минут после заказа и возвращает их после чистки.'
                    ]
                ]
            ]
        ];
        return '<script type="application/ld+json">' . json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }
}
