<?php
/**
 * IndexNow URL Submission Script
 * Usage: php indexnow.php [--key=KEY] [--host=HOST] [--urls=file.txt]
 */

require_once __DIR__ . '/vendor/autoload.php';

$host = 'mandomemori.ru';
$keyFile = __DIR__ . '/indexnow_key.txt';
$key = file_exists($keyFile) ? trim(file_get_contents($keyFile)) : null;

$shortopts = "k:h:u:";
$longopts = ["key:", "host:", "urls:", "generate-key"];
$options = getopt($shortopts, $longopts);

if (isset($options['generate-key'])) {
    $key = bin2hex(random_bytes(16));
    file_put_contents($keyFile, $key);
    echo "Generated key: $key\n";
    echo "Add to .env: INDEXNOW_KEY=$key\n";
    echo "Host: $host\n";
    echo "Key file: $keyFile\n";
    exit(0);
}

if (isset($options['key'])) $key = $options['key'];
if (isset($options['host'])) $host = $options['host'];

if (!$key) {
    echo "Error: No key. Run with --generate-key first\n";
    exit(1);
}

// Collect URLs
$urls = [];

// From sitemap
$sitemapUrl = "https://$host/sitemap.xml";
$xml = @simplexml_load_file($sitemapUrl);
if ($xml) {
    foreach ($xml->sitemap as $sitemap) {
        $childXml = @simplexml_load_file((string)$sitemap->loc);
        if ($childXml) {
            foreach ($childXml->url as $url) {
                $urls[] = (string)$url->loc;
            }
        }
    }
}

// From articles
$articlesPath = __DIR__ . '/public/pages/blog/data/articles.json';
if (file_exists($articlesPath)) {
    $articles = json_decode(file_get_contents($articlesPath), true) ?? [];
    foreach ($articles as $a) {
        $urls[] = "https://$host/blog/" . $a['url'];
    }
}

// Deduplicate
$urls = array_unique($urls);

// Filter only https://$host URLs
$urls = array_filter($urls, fn($u) => str_starts_with($u, "https://$host"));

echo "Submitting " . count($urls) . " URLs to IndexNow...\n";

// IndexNow API endpoints
$endpoints = [
    'https://api.indexnow.org/indexnow',
    'https://www.bing.com/indexnow',
    'https://yandex.com/indexnow',
];

$payload = [
    'host' => $host,
    'key' => $key,
    'keyLocation' => "https://$host/indexnow_key.txt",
    'urlList' => array_values($urls),
];

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => $endpoints[0],
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($payload),
    CURLOPT_HTTPHEADER => ['Content-Type: application/json; charset=utf-8'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
]);

foreach ($endpoints as $endpoint) {
    curl_setopt($ch, CURLOPT_URL, $endpoint);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    echo "[$endpoint] HTTP $httpCode: $response\n";
}

curl_close($ch);