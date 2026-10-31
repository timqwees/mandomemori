<?php
$files = glob("public/pages/product/*/index.php");
$old = '<button type="button" class="svc-order-cart-btn product-add-to-cart" data-id="<?= $id ?>">Добавить в корзину</button>';
$new = '<a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=svc_<?= $slug ?>_hero" target="_blank" rel="external nofollow noopener noreferrer" class="svc-order-tg svc-order-tg--primary" data-tg="svc_<?= $slug ?>_hero" title="Заказать в Telegram">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M20.665 3.717l-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z"/></svg>
              В Telegram — 5 мин
            </a>';

foreach ($files as $f) {
    $c = file_get_contents($f);
    if (strpos($c, $old) !== false) {
        $c = str_replace($old, $new, $c);
        file_put_contents($f, $c);
        echo "Fixed: $f\n";
    } else {
        echo "Not found in: $f\n";
    }
}