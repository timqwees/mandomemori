<?php
/**
 * IndexNow URL submission for MANDO MEMORI
 * Run: php submit_indexnow.php
 */

$baseUrl = 'https://mmclean.ru';
$key = 'mando-memori-indexnow-key-' . bin2hex(random_bytes(16)); // 32-char hex key
$keyFile = __DIR__ . '/public/' . $key . '.txt';

// Create key file (required by IndexNow)
file_put_contents($keyFile, $key);
echo "Created key file: $key.txt\n";

// Collect all URLs
$urls = [];

// 1. Main pages
$mainPages = [
    '/',
    '/brands',
    '/products',
    '/about',
    '/before-after',
    '/blog',
    '/contacts',
    '/order',
    '/franchise',
    '/requisites',
    '/privacy-policy',
    '/author/mando-memori',
];
foreach ($mainPages as $page) {
    $urls[] = $baseUrl . $page;
}

// 2. Brand pages
$brands = [
    'balenciaga', 'loro-piana', 'hermes', 'gucci', 'prada',
    'louis-vuitton', 'chanel', 'dior', 'berluti', 'louboutin'
];
foreach ($brands as $brand) {
    $urls[] = $baseUrl . '/brands/' . $brand;
}

// 3. Product/service pages
$products = [
    'cleaning',
    'whitening',
    'restoration',
    'replacement',
    'bag-restoration',
    'prevention',
    'heel-taps-rubber',
    'heel-taps-stiletto',
    'heel-taps-combined',
    'heel-counters',
    'leather-painting',
];
foreach ($products as $product) {
    $urls[] = $baseUrl . '/product/' . $product;
}

// 4. Blog category pages
$categories = [
    'уход за материалами',
    'отбеливание',
    'реставрация',
    'ремонт',
    'тренды',
    'уход за брендами',
    'сезонный уход',
    'лайфхаки',
];
foreach ($categories as $cat) {
    $urls[] = $baseUrl . '/blog?category=' . urlencode($cat);
}

// 5. Blog pagination (first 5 pages for each category)
for ($page = 1; $page <= 5; $page++) {
    $urls[] = $baseUrl . '/blog?page=' . $page;
    foreach ($categories as $cat) {
        $urls[] = $baseUrl . '/blog?category=' . urlencode($cat) . '&page=' . $page;
    }
}

// 6. Blog article pages
$articles = json_decode(file_get_contents(__DIR__ . '/public/pages/blog/data/articles.json'), true);
foreach ($articles as $article) {
    $urls[] = $baseUrl . '/blog/' . $article['url'];
}

// 7. Sitemap and technical files
$urls[] = $baseUrl . '/sitemap.xml';
$urls[] = $baseUrl . '/robots.txt';
$urls[] = $baseUrl . '/llms.txt';
$urls[] = $baseUrl . '/llms-full.txt';

// Deduplicate
$urls = array_unique($urls);
echo "Total unique URLs: " . count($urls) . "\n";

// Save URLs to file for reference
file_put_contents(__DIR__ . '/indexnow_urls.txt', implode("\n", $urls));
echo "Saved URLs to indexnow_urls.txt\n";

// Submit to IndexNow (in batches of 10,000 max)
$batchSize = 10000;
$batches = array_chunk($urls, $batchSize);

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => 'https://api.indexnow.org/indexnow',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json; charset=utf-8',
    ],
    CURLOPT_TIMEOUT => 60,
]);

$success = 0;
$failed = 0;

foreach ($batches as $i => $batch) {
    $payload = json_encode([
        'host' => 'mmclean.ru',
        'key' => $key,
        'keyLocation' => $baseUrl . '/' . $key . '.txt',
        'urlList' => $batch,
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if ($httpCode === 200) {
        $success += count($batch);
        echo "Batch " . ($i + 1) . ": OK (" . count($batch) . " URLs)\n";
    } else {
        $failed += count($batch);
        echo "Batch " . ($i + 1) . ": FAILED (HTTP $httpCode) - $response\n";
    }

    // Small delay between batches
    if (count($batches) > 1) {
        usleep(200000);
    }
}

curl_close($ch);

echo "\n=== Summary ===\n";
echo "Success: $success URLs\n";
echo "Failed: $failed URLs\n";
echo "Key file: $baseUrl/" . $key . ".txt\n";
echo "IMPORTANT: Keep the key file accessible at: $baseUrl/" . $key . ".txt\n";