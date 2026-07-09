<?php
use App\Config\Session;
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/cart', 'priority' => '0.2', 'changefreq' => 'never', 'index' => 'main'];
$robots = 'noindex, nofollow';

$pageTitle = $pageTitle ?? 'Корзина — MANDO MEMORI, химчистка обуви в Москве';
$pageDesc = $pageDesc ?? 'Ваша корзина в MANDO MEMORI — чистка обуви в Москве.';
$pageKeywords = $pageKeywords ?? 'корзина MANDO MEMORI, чистка обуви Москва';
$canonical = $_SERVER['REQUEST_URI'] ?? '/cart';

$data = Session::init();
$cartItems = $data['sf_cart'] ?? [];
$savedPhone = $data['sf_phone'] ?? '';
$savedComment = $data['sf_comment'] ?? '';

$allSvcs = Functions::getServices();
$products = [];
foreach ($allSvcs as $id => $s) {
  $products[$id] = [
    'title' => $s['title'],
    'price' => $s['price'],
    'image_url' => '/public/assets/images/' . $s['img'],
    'bg_color' => $s['bg'],
  ];
}

$resolvedItems = [];
$totalCount = 0;
$totalSum = 0;
foreach ($cartItems as $item) {
  $pid = (int)($item['product_id'] ?? 0);
  $qty = (int)($item['qty'] ?? 0);
  if ($pid < 1 || $qty < 1 || !isset($products[$pid])) continue;
  $p = $products[$pid];
  $p['product_id'] = $pid;
  $p['qty'] = $qty;
  $p['item_total'] = $p['price'] * $qty;
  $resolvedItems[] = $p;
  $totalCount += $qty;
  $totalSum += $p['item_total'];
}

if (empty($resolvedItems)) {
  Session::init(['sf_order_num', 'sf_comment', 'sf_phone', 'sf_order_snapshot'], null);
  $orderNum = '';
} else {
  $orderNum = 'MM-' . date('ymd') . '-' . strtoupper(substr(md5(uniqid()), 0, 6));
  Session::init('sf_order_num', $orderNum);
}

require __DIR__ . '/../../partials/header.php';
?>

<main class="main">
  <section class="cart-section">
    <div class="container">
      <h1 class="cart-title">Корзина</h1>

      <?php if (empty($resolvedItems)): ?>
        <div class="cart-empty">
          <div class="cart-empty-icon">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/>
              <path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/>
            </svg>
          </div>
          <p class="cart-empty-text">В корзине пока ничего нет</p>
          <a href="/products" class="btn btn-primary">Посмотреть услуги</a>
        </div>
      <?php else: ?>
        <div class="cart-layout">
          <div class="cart-items">
            <?php foreach ($resolvedItems as $item): ?>
            <div class="cart-item" id="cart-item-<?= $item['product_id'] ?>">
              <div class="cart-item-img">
                <div class="cart-item-img-wrap" style="background:<?= $item['bg_color'] ?>">
                  <img src="<?= $item['image_url'] ?>" alt="<?= $item['title'] ?>" loading="lazy">
                </div>
              </div>
              <div class="cart-item-body">
                <div class="cart-item-top">
                  <div class="cart-item-info">
                    <div class="cart-item-title"><?= $item['title'] ?></div>
                    <div class="cart-item-price-unit"><?= number_format($item['price'], 0, '', ' ') ?> ₽ / пара</div>
                  </div>
                  <span class="cart-item-total" id="item-total-<?= $item['product_id'] ?>"><?= number_format($item['item_total'], 0, '', ' ') ?> ₽</span>
                </div>
                <div class="cart-item-qty">
                  <button type="button" class="cart-qty-btn" data-product-id="<?= $item['product_id'] ?>" data-action="decrease">−</button>
                  <span class="cart-item-qty-num" id="qty-display-<?= $item['product_id'] ?>"><?= $item['qty'] ?></span>
                  <button type="button" class="cart-qty-btn" data-product-id="<?= $item['product_id'] ?>" data-action="increase">+</button>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <div class="cart-summary">
            <div class="cart-summary-inner">
              <div class="cart-summary-title">Ваш заказ <span class="cart-summary-order">№ <?= $orderNum ?></span></div>
              <div class="cart-summary-row">
                <span>Количество пар</span>
                <span id="cart-subtotal"><?= $totalCount ?> шт.</span>
              </div>
              <div class="cart-summary-row cart-summary-row--total">
                <span>Итого</span>
                <span id="cart-total"><?= number_format($totalSum, 0, '', ' ') ?> ₽</span>
              </div>
              <div class="cart-phone">
                <label for="cart-phone-input" class="cart-phone-label">Номер телефона</label>
                <input type="tel" id="cart-phone-input" class="cart-phone-input" placeholder="+7 (999) 999-99-99" value="<?= htmlspecialchars($savedPhone) ?>">
              </div>
              <div class="cart-comment">
                <label class="cart-phone-label" style="font-size: 1rem;font-weight: 600">Комментарий к заказу</label>
                <style>
                  .cart-comment .ql-editor {
                    border: 1px solid #c6c6c6;
                    border-top: none;
                  } 
                  .ql-toolbar.ql-snow {
                    border: 1px solid #c6c6c6 !important;
                  }
                  .cart-comment .ql-editor {
                    background-color: #fdfbf9;
                  }
                </style>
                <div id="cart-comment-editor"></div>
              </div>
              <a href="/order" class="btn btn-primary cart-checkout-btn" id="checkout-btn">Получить чек</a>
              <a href="/products" class="cart-continue-link">Продолжить выбор</a>
            </div>
          </div>
        </div>
      <?php endif; ?>

    </div>
  </section>

  <section class="cart-flow">
    <div class="container">
      <h2 class="cart-flow-title">Как проходит заказ</h2>
      <div class="cart-flow-grid">

        <div class="cart-flow-step">
          <div class="cart-flow-step-num">1</div>
          <div class="cart-flow-step-icon">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/>
              <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
            </svg>
          </div>
          <h3 class="cart-flow-step-title">Вы собираете заказ</h3>
          <p class="cart-flow-step-desc">Добавляете услуги, указываете количество пар и оставляете комментарий к заказу</p>
        </div>

        <div class="cart-flow-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14m-6-6 6 6-6 6"/>
          </svg>
        </div>

        <div class="cart-flow-step">
          <div class="cart-flow-step-num">2</div>
          <div class="cart-flow-step-icon">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
              <polyline points="14 2 14 8 20 8"/>
              <line x1="16" y1="13" x2="8" y2="13"/>
              <line x1="16" y1="17" x2="8" y2="17"/>
              <polyline points="10 9 9 9 8 9"/>
            </svg>
          </div>
          <h3 class="cart-flow-step-title">Получаете чек</h3>
          <p class="cart-flow-step-desc">Система формирует PDF-чек с номером заказа — после вызова курьера PDF придёт вам на почту, сейчас вы просто скачиваете копию</p>
        </div>

        <div class="cart-flow-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14m-6-6 6 6-6 6"/>
          </svg>
        </div>

        <div class="cart-flow-step">
          <div class="cart-flow-step-num">3</div>
          <div class="cart-flow-step-icon">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
              <circle cx="12" cy="10" r="3"/>
            </svg>
          </div>
          <h3 class="cart-flow-step-title">Передаёте обувь</h3>
          <p class="cart-flow-step-desc">Вызываете курьера — у него уже есть чек с данными вашего заказа, остаётся только отдать обувь</p>
        </div>

        <div class="cart-flow-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14m-6-6 6 6-6 6"/>
          </svg>
        </div>

        <div class="cart-flow-step">
          <div class="cart-flow-step-num">4</div>
          <div class="cart-flow-step-icon">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
              <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
          </div>
          <h3 class="cart-flow-step-title">Организация выполняет работу</h3>
          <p class="cart-flow-step-desc">Мастер приступает к чистке по вашему заказу — оплата только после выполнения работы, по факту</p>
        </div>

      </div>
    </div>
  </section>

</main>

<link rel="stylesheet" href="/public/assets/vendor/quill/quill.snow.css">
<script src="/public/assets/vendor/quill/quill.js"></script>

<script>
function getCsrf() {
  var m = document.querySelector('meta[name="csrf-token"]');
  return m ? m.content : '';
}

document.addEventListener('DOMContentLoaded', function () {
  var quill = new Quill('#cart-comment-editor', {
    theme: 'snow',
    placeholder: 'Пожелания, особенности обуви, дефекты — опишите заранее, чтобы мастер учёл все детали'
  });

  <?php if ($savedComment !== ''): ?>
  quill.clipboard.dangerouslyPasteHTML(<?= json_encode($savedComment) ?>);
  <?php endif; ?>

  var _commentTimer = null;
  function saveCartComment() {
    var html = quill.root.innerHTML;
    if (html === '<p><br></p>') html = '';
    var phone = document.getElementById('cart-phone-input').value.replace(/\D/g, '');
    return fetch('/cart/comment', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json', 'X-CSRF-Token': getCsrf() },
      body: JSON.stringify({ comment: html, phone: phone })
    });
  }
  quill.on('text-change', function () {
    clearTimeout(_commentTimer);
    _commentTimer = setTimeout(saveCartComment, 800);
  });

  // Phone mask
  var phoneInput = document.getElementById('cart-phone-input');
  if (phoneInput) {
    phoneInput.addEventListener('input', function () {
      var digits = this.value.replace(/\D/g, '').slice(0, 11);
      var formatted = '';
      if (digits.length > 0) {
        formatted = '+7';
        if (digits.length > 1) formatted += ' (' + digits.slice(1, 4);
        if (digits.length > 4) formatted += ') ' + digits.slice(4, 7);
        if (digits.length > 7) formatted += '-' + digits.slice(7, 9);
        if (digits.length > 9) formatted += '-' + digits.slice(9, 11);
      }
      this.value = formatted;
    });
  }

  // Checkout
  var checkoutBtn = document.getElementById('checkout-btn');
  if (checkoutBtn) {
    checkoutBtn.addEventListener('click', function (e) {
      e.preventDefault();
      var btn = this;
      var html = quill.root.innerHTML;
      var hasText = html !== '<p><br></p>';
      btn.textContent = 'Формируем чек…';
      btn.disabled = true;
      var phone = document.getElementById('cart-phone-input').value.replace(/\D/g, '');
      var p = Promise.resolve();
      if (hasText || phone) {
        p = fetch('/cart/comment', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ comment: html, phone: phone })
        });
      }
      p.then(function () {
        return fetch('/checkout');
      }).then(function (r) {
        if (!r.ok) throw new Error('Пустая корзина');
        return r.blob();
      }).then(function (blob) {
        var url = URL.createObjectURL(blob);
        var a = document.createElement('a');
        a.href = url;
        a.download = 'check-mandomemori-' + Date.now() + '.pdf';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
        window.location.href = '/order';
      }).catch(function () {
        btn.textContent = 'Получить чек';
        btn.disabled = false;
        window.location.href = '/order';
      });
    });
  }
});
</script>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
