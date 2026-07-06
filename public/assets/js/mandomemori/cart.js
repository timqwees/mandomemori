(function () {
  'use strict';

  // ── CSRF ──────────────────────────────────────────────────────
  function getCsrf() {
    var m = document.querySelector('meta[name="csrf-token"]');
    return m ? m.content : '';
  }

  function getCartCount() {
    return window.__cartCount || 0;
  }

  // ── Badge update ──────────────────────────────────────────────
  function updateCartBadge(count) {
    var badge = document.getElementById('cart-badge-count');
    var btn = document.getElementById('cart-icon-btn');
    if (!badge) return;
    badge.textContent = count;
    if (count > 0) {
      badge.style.display = '';
      if (btn) btn.classList.remove('cart-icon-btn--hidden');
      if (typeof gsap !== 'undefined') {
        gsap.fromTo(badge, { scale: 1.6 }, { scale: 1, duration: 0.35, ease: 'back.out(2)' });
      }
    } else {
      badge.style.display = 'none';
      if (btn) btn.classList.add('cart-icon-btn--hidden');
    }
  }

  // ── API calls ─────────────────────────────────────────────────
  async function cartRequest(url, body) {
    try {
      var r = await fetch(url, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-Token': getCsrf()
        },
        body: JSON.stringify(body)
      });
      return await r.json();
    } catch (e) {
      return { ok: false, error: 'Ошибка сети' };
    }
  }

  async function addToCart(productId, qty) {
    var data = await cartRequest('/cart/add', { product_id: productId, qty: qty || 1 });
    if (data.ok) {
      updateCartBadge(data.count);
      animateAddSuccess(productId);
      if (data.added) showCartToast(data.added);
    } else {
      showCartError(data.error || 'Не удалось добавить товар');
    }
    return data;
  }

  var _toastTimer = null;
  function showCartToast(product) {
    var toast = document.getElementById('cart-toast');
    var nameEl = document.getElementById('cart-toast-name');
    var imgEl = document.getElementById('cart-toast-img');
    if (!toast) return;
    if (nameEl) nameEl.textContent = product.title || '';
    if (imgEl) {
      imgEl.style.background = product.bg_color || '#f5f5f7';
      imgEl.innerHTML = product.image_url
        ? '<img src="' + product.image_url + '" alt="' + (product.title || '') + '" loading="lazy">'
        : '';
    }
    toast.style.display = 'flex';
    requestAnimationFrame(function() {
      requestAnimationFrame(function() { toast.classList.add('cart-toast--visible'); });
    });
    clearTimeout(_toastTimer);
    _toastTimer = setTimeout(function() {
      toast.classList.remove('cart-toast--visible');
      setTimeout(function() { toast.style.display = 'none'; }, 350);
    }, 3000);
  }

  async function updateQty(productId, qty) {
    var data = await cartRequest('/cart/update', { product_id: productId, qty: qty });
    if (data.ok) {
      updateCartBadge(data.count);
      window.location.reload();
    }
    return data;
  }

  async function removeFromCart(productId) {
    var data = await cartRequest('/cart/remove', { product_id: productId });
    if (data.ok) {
      updateCartBadge(data.count);
      window.location.reload();
    }
    return data;
  }

  // ── Animations ────────────────────────────────────────────────

  function animateAddSuccess(productId) {
    var btn = document.querySelector('.product-add-to-cart[data-id="' + productId + '"]');
    if (!btn) return;
    var orig = btn.textContent;
    btn.textContent = 'Добавлено ✓';
    btn.disabled = true;
    if (typeof gsap !== 'undefined') {
      gsap.fromTo(btn, { scale: 0.95 }, { scale: 1, duration: 0.2, ease: 'power2.out' });
    }
    setTimeout(function () {
      btn.textContent = orig;
      btn.disabled = false;
    }, 1500);
  }

  function showCartError(msg) {
    // Simple toast — reuse existing UI patterns (no new lib)
    var toast = document.createElement('div');
    toast.className = 'cart-toast cart-toast--error';
    toast.textContent = msg;
    document.body.appendChild(toast);
    if (typeof gsap !== 'undefined') {
      gsap.fromTo(toast, { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: 0.25 });
      gsap.to(toast, { opacity: 0, delay: 2.5, duration: 0.25, onComplete: function () { toast.remove(); } });
    } else {
      setTimeout(function () { toast.remove(); }, 3000);
    }
  }

  // ── Product page: qty buttons ─────────────────────────────────

  function initQtyButtons() {
    document.querySelectorAll('.product-qty-btn').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var action = btn.dataset.action;
        var id = btn.dataset.id;
        if (!id) return; // handled inline on cart page
        var input = document.getElementById('qty-' + id);
        if (!input) return;
        var val = parseInt(input.value) || 1;
        var max = parseInt(input.max) || 10;
        if (action === 'inc') input.value = Math.min(val + 1, max);
        if (action === 'dec') input.value = Math.max(val - 1, 1);
      });
    });
  }

  function initAddToCartButtons() {
    document.querySelectorAll('.product-add-to-cart').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var id = parseInt(btn.dataset.id);
        var input = document.getElementById('qty-' + id);
        var qty = input ? Math.max(1, parseInt(input.value) || 1) : 1;
        addToCart(id, qty);
      });
    });
  }

  // ── Cart page: delegated qty buttons ─────────────────────────
  document.addEventListener('click', function (e) {
    var btn = e.target.closest('.cart-qty-btn');
    if (!btn) return;
    var productId = parseInt(btn.dataset.productId, 10);
    var action = btn.dataset.action;
    var qtyEl = document.getElementById('qty-display-' + productId);
    if (!qtyEl) return;
    var current = parseInt(qtyEl.textContent, 10) || 1;
    var newQty = action === 'increase' ? current + 1 : current - 1;
    if (newQty < 1) {
      removeFromCart(productId);
    } else {
      updateQty(productId, newQty);
    }
  });

  // ── Init ──────────────────────────────────────────────────────

  document.addEventListener('DOMContentLoaded', function () {
    updateCartBadge(getCartCount());
    initQtyButtons();
    initAddToCartButtons();
  });

  window.sfCart = { addToCart: addToCart, updateQty: updateQty, removeFromCart: removeFromCart };
})();
