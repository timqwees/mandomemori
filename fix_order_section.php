<?php
$files = glob("public/pages/product/*/index.php");
$old = <<<'OLD'
<section class="svc-order" id="svc-order">
    <div class="container">
      <div class="svc-order-card">
        <div class="svc-order-img">
          <img src="/public/assets/images/<?= $svc['img'] ?>" alt="<?= $title ?> | MANDO MEMORI" loading="lazy">
        </div>
        <div class="svc-order-body">
          <h2 class="svc-order-name"><?= $title ?></h2>
          <div class="svc-order-price-row">
            <span class="svc-order-price"><?= $price ?> ₽</span>
            <span class="svc-order-unit">за пару</span>
          </div>
          <label class="svc-order-qty-label">Количество пар</label>
          <div class="svc-order-qty">
            <button type="button" class="product-qty-btn" data-id="<?= $id ?>" data-action="dec">−</button>
            <input type="number" class="product-qty-input" id="qty-<?= $id ?>" value="1" min="1" max="10">
            <button type="button" class="product-qty-btn" data-id="<?= $id ?>" data-action="inc">+</button>
          </div>
          <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=svc_<?= $slug ?>_hero" target="_blank" rel="external nofollow noopener noreferrer" class="svc-order-tg svc-order-tg--primary" data-tg="svc_<?= $slug ?>_hero" title="Заказать в Telegram">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M20.665 3.717l-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z"/></svg>
              В Telegram — 5 мин
            </a>
          <div class="svc-order-contacts">
            <a href="tel:+79161829272" class="svc-order-phone" title="Позвонить">Позвонить: +7 (916) 182-92-72</a>
            <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=svc_<?= $slug ?>" target="_blank" rel="external nofollow noopener noreferrer" class="svc-order-tg" data-tg="svc_<?= $slug ?>" title="Заказать в Telegram">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M20.665 3.717l-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z"/></svg>
              Заказать в Telegram
            </a>
          </div>
          <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=svc_<?= $slug ?>_order" target="_blank" rel="external nofollow noopener noreferrer" class="svc-order-tg" data-tg="svc_<?= $slug ?>_order" title="Заказать в Telegram">Заказать → Telegram</a>
        </div>
      </div>
    </div>
  </section>
OLD;

$new = <<<'NEW'
<section class="svc-order" id="svc-order">
    <div class="container">
      <div class="svc-order-card">
        <div class="svc-order-img">
          <img src="/public/assets/images/<?= $svc['img'] ?>" alt="<?= $title ?> | MANDO MEMORI" loading="lazy">
        </div>
        <div class="svc-order-body">
          <h2 class="svc-order-name"><?= $title ?></h2>
          <div class="svc-order-price-row">
            <span class="svc-order-price"><?= $price ?> ₽</span>
            <span class="svc-order-unit">за пару</span>
          </div>
          <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=svc_<?= $slug ?>_hero" target="_blank" rel="external nofollow noopener noreferrer" class="svc-order-tg svc-order-tg--primary" data-tg="svc_<?= $slug ?>_hero" title="Заказать в Telegram">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M20.665 3.717l-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z"/></svg>
              В Telegram — 5 мин
            </a>
          <div class="svc-order-contacts">
            <a href="tel:+79161829272" class="svc-order-phone" title="Позвонить">Позвонить: +7 (916) 182-92-72</a>
            <a href="https://t.me/maksim1144?utm_source=site&utm_medium=telegram&utm_campaign=svc_<?= $slug ?>" target="_blank" rel="external nofollow noopener noreferrer" class="svc-order-tg" data-tg="svc_<?= $slug ?>" title="Заказать в Telegram">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M20.665 3.717l-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z"/></svg>
              Заказать в Telegram
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
NEW;

foreach (glob("public/pages/product/*/index.php") as $f) {
    $c = file_get_contents($f);
    if (strpos($c, 'Количество пар') !== false) {
        $c = str_replace($old, $new, $c);
        file_put_contents($f, $c);
        echo "Fixed: $f\n";
    } else {
        echo "Already clean: $f\n";
    }
}