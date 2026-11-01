#!/bin/bash
# IndexNow submission script for mmclean.ru
# Usage: ./tools/indexnow.sh

set -euo pipefail

HOST="mmclean.ru"
KEY="mando-memori-indexnow-key-8ba9c5794d8eddf9214075650000d41b"

# Ensure key file exists
KEY_FILE="public/${KEY}.txt"
if [[ ! -f "$KEY_FILE" ]]; then
    echo "Creating key file: $KEY_FILE"
    echo "$KEY" > "$KEY_FILE"
fi

echo "=== IndexNow Submission for $HOST ==="
echo "Key: $KEY"
echo "Key file: https://$HOST/$KEY.txt"
echo ""

# Collect all URLs
URLS=()

# Main pages
URLS+=(
  "https://$HOST/"
  "https://$HOST/brands"
  "https://$HOST/products"
  "https://$HOST/about"
  "https://$HOST/before-after"
  "https://$HOST/blog"
  "https://$HOST/contacts"
  "https://$HOST/order"
  "https://$HOST/franchise"
  "https://$HOST/requisites"
  "https://$HOST/privacy-policy"
  "https://$HOST/author/mando-memori"
)

# Brand pages
for brand in balenciaga loro-piana hermes gucci prada louis-vuitton chanel dior berluti louboutin; do
  URLS+=("https://$HOST/brands/$brand")
done

# Product/service pages
for product in cleaning whitening restoration replacement bag-restoration prevention heel-taps-rubber heel-taps-stiletto heel-taps-combined heel-counters leather-painting; do
  URLS+=("https://$HOST/product/$product")
done

# Blog category pages
for cat in "уход за материалами" "отбеливание" "реставрация" "ремонт" "тренды" "уход за брендами" "сезонный уход" "лайфхаки"; do
  URLS+=("https://$HOST/blog?category=$(python3 -c "import urllib.parse; print(urllib.parse.quote('$cat'))")")
done

# Blog pagination (first 5 pages for all and each category)
for page in 1 2 3 4 5; do
  URLS+=("https://$HOST/blog?page=$page")
  for cat in "уход за материалами" "отбеливание" "реставрация" "ремонт" "тренды" "уход за брендами" "сезонный уход" "лайфхаки"; do
    URLS+=("https://$HOST/blog?category=$(python3 -c "import urllib.parse; print(urllib.parse.quote('$cat'))")&page=$page")
  done
done

# Blog article pages (from articles.json)
if [[ -f "public/pages/blog/data/articles.json" ]]; then
  echo "Loading blog articles..."
  articles=$(python3 -c "
import json
with open('public/pages/blog/data/articles.json') as f:
    data = json.load(f)
for a in data:
    print(a['url'])
")
  for article in $articles; do
    URLS+=("https://$HOST/blog/$article")
  done
  article_count=$(echo "$articles" | wc -l | tr -d ' ')
  echo "Loaded $article_count articles"
fi

# Technical files
URLS+=(
  "https://$HOST/sitemap.xml"
  "https://$HOST/robots.txt"
  "https://$HOST/llms.txt"
  "https://$HOST/llms-full.txt"
)

# Deduplicate
URLS=($(printf '%s\n' "${URLS[@]}" | sort -u))

echo "Total unique URLs: ${#URLS[@]}"
echo ""

# Build JSON payload using Python (handles JSON encoding properly)
PAYLOAD=$(python3 -c "
import json, sys
host = sys.argv[1]
key = sys.argv[2]
urls = sys.argv[3:]
payload = {
    'host': host,
    'key': key,
    'keyLocation': f'https://{host}/{key}.txt',
    'urlList': urls
}
print(json.dumps(payload, ensure_ascii=False))
" "$HOST" "$KEY" "${URLS[@]}")

# Submit to IndexNow endpoints
ENDPOINTS=(
  "https://www.bing.com/indexnow"
  "https://yandex.com/indexnow"
)

for endpoint in "${ENDPOINTS[@]}"; do
  echo -n "Submitting to $endpoint ... "
  code=$(curl -s -X POST "$endpoint" \
    -H "Content-Type: application/json; charset=utf-8" \
    -d "$PAYLOAD" \
    -o /dev/null \
    -w "%{http_code}" \
    --max-time 60)
  echo "HTTP $code"
  if [[ "$code" != "200" ]]; then
    echo "  Warning: Non-200 response"
  fi
done

echo ""
echo "=== Done ==="
echo "Key file must be accessible at: https://$HOST/$KEY.txt"
echo "Run after deploying to production."