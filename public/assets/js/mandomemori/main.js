function formatPrice(p) {
  if (p == null || p === '') return '0 ₽';
  var n = Number(p);
  if (!isNaN(n) && String(p).trim() === String(n)) return n.toLocaleString('ru-RU') + ' ₽';
  return String(p);
}

function formatDuration(d) {
  if (!d) return d;
  if (/дн|день|дня|недел|час|минут/i.test(d)) return d;
  var m = d.match(/(\d+)\s*$/);
  if (!m) return d;
  var n = parseInt(m[1], 10);
  var last2 = n % 100, last1 = n % 10;
  var word;
  if (last2 >= 11 && last2 <= 19) word = 'дней';
  else if (last1 === 1) word = 'день';
  else if (last1 >= 2 && last1 <= 4) word = 'дня';
  else word = 'дней';
  return d + ' ' + word;
}

// Mobile background switcher
(function() {
  var mq = window.matchMedia('(max-width: 768px)');
  var els = document.querySelectorAll('[data-mobile-bg]');
  if (!els.length) return;
  function switchBg(isMobile) {
    els.forEach(function(el) {
      var mobileSrc = el.getAttribute('data-mobile-bg');
      if (!el._desktopBg) el._desktopBg = el.style.backgroundImage;
      el.style.backgroundImage = (isMobile && mobileSrc) ? "url('" + mobileSrc + "')" : el._desktopBg;
    });
  }
  switchBg(mq.matches);
  mq.addEventListener('change', function(e) { switchBg(e.matches); });
})();

document.addEventListener('DOMContentLoaded', () => {
  const overlay = document.getElementById('modal-overlay');
  const modalContent = document.getElementById('modal-content');
  const modalClose = document.getElementById('modal-close');

  if (!overlay || !modalContent || !modalClose) return;

  // ── Card pill switcher (group cards) ─────────────────────
  document.querySelectorAll('.card-group').forEach(function(card) {
    var groupSlug = card.dataset.groupSlug;
    var group = (window.__serviceGroups || []).find(function(g) { return g.slug === groupSlug; });
    if (!group) return;

    card.querySelectorAll('.card-type-pill').forEach(function(pill) {
      pill.addEventListener('click', function(e) {
        e.stopPropagation();
        var idx = parseInt(pill.dataset.idx);
        var svc = group.services[idx];
        if (!svc) return;

        // Update active pill
        card.querySelectorAll('.card-type-pill').forEach(function(p) { p.classList.remove('active'); });
        pill.classList.add('active');

        // Update price and duration
        var priceEl = card.querySelector('.price-value');
        var durEl = card.querySelector('.card-duration span');
        if (priceEl) priceEl.textContent = formatPrice(svc.price);
        if (durEl) durEl.textContent = formatDuration(svc.duration);
      });
    });
  });

  // ── Regular service card clicks ──────────────────────────
  document.querySelectorAll('.card-btn').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.stopPropagation();
      if (btn.dataset.groupSlug) {
        openGroupModal(btn.dataset.groupSlug);
      } else if (btn.dataset.slug) {
        openModal(btn.dataset.slug);
      }
    });
  });

  document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('click', function(e) {
      if (e.target.closest('button')) return;
      if (card.dataset.groupSlug) {
        openGroupModal(card.dataset.groupSlug);
      } else if (card.dataset.slug) {
        openModal(card.dataset.slug);
      }
    });
  });

  // Ensure card image clicks also open popup
  document.querySelectorAll('.card-image').forEach(function(img) {
    img.addEventListener('click', function(e) {
      var card = img.closest('.card');
      if (!card) return;
      e.stopPropagation();
      if (card.dataset.groupSlug) {
        openGroupModal(card.dataset.groupSlug);
      } else if (card.dataset.slug) {
        openModal(card.dataset.slug);
      }
    });
  });

  function openModal(slug) {
    const service = window.__services.find(s => s.slug === slug);
    if (!service) return;
    modalContent.innerHTML = renderModalContent(service);
    bindOptionTabs();
    bindPortfolioArrows();
    overlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function openGroupModal(groupSlug, activeIdx) {
    var group = (window.__serviceGroups || []).find(function(g) { return g.slug === groupSlug; });
    if (!group || !group.services.length) return;
    var idx = activeIdx || 0;
    modalContent.innerHTML = renderGroupModalContent(group, idx);
    bindOptionTabs();
    bindPortfolioArrows();
    bindGroupTabs(group);
    overlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function bindOptionTabs() {
    modalContent.querySelectorAll('.options-tab-btn').forEach(function(btn) {
      btn.addEventListener('click', function() {
        var tabId = btn.dataset.tab;
        btn.closest('.options-tabs').querySelectorAll('.options-tab-btn').forEach(function(b) { b.classList.remove('active'); });
        btn.closest('.options-tabs').querySelectorAll('.options-tab-panel').forEach(function(p) { p.classList.remove('active'); });
        btn.classList.add('active');
        document.getElementById(tabId).classList.add('active');
      });
    });
  }

  function bindPortfolioArrows() {
    modalContent.querySelectorAll('.portfolio-arrow').forEach(function(btn) {
      btn.addEventListener('click', function() {
        var gallery = btn.closest('.portfolio-slider').querySelector('.portfolio-gallery');
        var item = gallery.querySelector('.portfolio-item');
        if (!item) return;
        var scrollAmount = item.offsetWidth + 16;
        var dir = btn.classList.contains('portfolio-arrow--left') ? -1 : 1;
        gallery.scrollBy({ left: dir * scrollAmount, behavior: 'smooth' });
      });
    });
  }

  function bindGroupTabs(group) {
    modalContent.querySelectorAll('.group-type-tab').forEach(function(tab) {
      tab.addEventListener('click', function() {
        var idx = parseInt(tab.dataset.idx);
        var svc = group.services[idx];
        if (!svc) return;

        // Switch active tab
        modalContent.querySelectorAll('.group-type-tab').forEach(function(t) { t.classList.remove('active'); });
        tab.classList.add('active');

        // Replace content panel
        var panel = modalContent.querySelector('.group-type-content');
        if (panel) {
          panel.innerHTML = renderServicePanel(svc);
          bindOptionTabs();
    bindPortfolioArrows();
        }
      });
    });
  }

  function closeModal() {
    overlay.classList.remove('active');
    document.body.style.overflow = '';
  }

  modalClose.addEventListener('click', closeModal);
  overlay.addEventListener('click', (e) => {
    if (e.target === overlay) closeModal();
  });
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeModal();
  });

  // ── Render helpers ───────────────────────────────────────

  function renderBrandsMarquee(brands) {
    if (!brands.length) return '';
    const items = brands.map(b =>
      `<div class="brand-item"><img src="${b.logo_url}" alt="${b.brand_name}"></div>`
    ).join('');
    return `
      <div class="modal-section">
        <h3 class="modal-section-title">Подходящие бренды</h3>
        <div class="brands-marquee">
          <div class="brands-track">${items}${items}${items}${items}</div>
        </div>
        <p class="brands-disclaimer">Вашего бренда нет в списке?<br>Это не проблема — подберём безопасную обработку под материалы и отделку и примем в работу.</p>
      </div>
    `;
  }

  function renderPortfolio(portfolio) {
    if (!portfolio || !portfolio.length) return '';
    return `
      <div class="modal-section">
        <h3 class="modal-section-title">Примеры работ</h3>
        <div class="portfolio-slider">
          <button class="portfolio-arrow portfolio-arrow--left" aria-label="Назад">&#8249;</button>
          <div class="portfolio-gallery">
            ${portfolio.map(item => `
              <div class="portfolio-item">
                <img src="${item.image_url}" alt="${item.title}" loading="lazy">
                <div class="portfolio-item-info">
                  <span class="portfolio-item-title">${item.title}</span>
                  <div class="portfolio-item-tags">
                    ${(item.tags || '').split(',').map(t => t.trim()).filter(Boolean).map(t => `<span class="portfolio-tag">${t}</span>`).join('')}
                  </div>
                </div>
              </div>
            `).join('')}
          </div>
          <button class="portfolio-arrow portfolio-arrow--right" aria-label="Вперёд">&#8250;</button>
        </div>
      </div>
    `;
  }

  function renderOptions(options) {
    var sorted = options.slice().sort(function(a, b) {
      var na = Number(a.price), nb = Number(b.price);
      var aNum = !isNaN(na) && String(a.price).trim() === String(na);
      var bNum = !isNaN(nb) && String(b.price).trim() === String(nb);
      if (aNum && bNum) return na - nb;
      if (aNum) return -1;
      if (bNum) return 1;
      return String(a.price).localeCompare(String(b.price));
    });
    var cats = [];
    var catSet = {};
    sorted.forEach(function(opt) {
      var key = opt.category_name || '';
      if (!catSet[key]) { catSet[key] = true; cats.push(key); }
    });
    var hasTabs = cats.length > 1 || (cats.length === 1 && cats[0] !== '');

    function renderList(items) {
      return '<div class="options-list">' + items.map(function(opt) {
        return '<div class="option-item"><div class="option-info"><span class="option-title">' + opt.title + '</span><span class="option-desc">' + (opt.description || '') + '</span></div><span class="option-price">+' + formatPrice(opt.price) + '</span></div>';
      }).join('') + '</div>';
    }

    if (!hasTabs) {
      return '<div class="modal-section"><h3 class="modal-section-title">Дополнительные опции</h3>' + renderList(sorted) + '</div>';
    }

    var tabBtns = cats.map(function(cat, i) {
      return '<button class="options-tab-btn' + (i === 0 ? ' active' : '') + '" data-tab="opt-tab-' + i + '">' + (cat || 'Другое') + '</button>';
    }).join('');

    var tabPanels = cats.map(function(cat, i) {
      var items = sorted.filter(function(o) { return (o.category_name || '') === cat; });
      return '<div class="options-tab-panel' + (i === 0 ? ' active' : '') + '" id="opt-tab-' + i + '">' + renderList(items) + '</div>';
    }).join('');

    return '<div class="modal-section"><h3 class="modal-section-title">Дополнительные опции</h3><div class="options-tabs"><div class="options-tabs-nav">' + tabBtns + '</div>' + tabPanels + '</div></div>';
  }

  // ── Service panel (used inside both regular and group modals) ──

  function renderServicePanel(service) {
    return `
        ${service.short_description ? `<p class="modal-short-description">${service.short_description}</p>` : ''}
        <p class="modal-description">${service.description}</p>

        <div class="modal-pricing">
          <div class="modal-price">
            <span class="label">Стоимость</span>
            <span class="value">${formatPrice(service.price)}</span>
          </div>
          <div class="modal-duration">
            <span class="label">Срок выполнения</span>
            <span class="value">${formatDuration(service.duration)}</span>
          </div>
          ${service.express_surcharge > 0 ? `
            <div class="modal-express">
              <span class="label">Экспресс</span>
              <span class="value">+${service.express_surcharge}% — ${formatDuration(service.express_duration)}</span>
            </div>
          ` : ''}
        </div>

        ${service.includes.length > 0 ? `
          <div class="modal-section">
            <h3 class="modal-section-title">Что включено</h3>
            <ul class="includes-list">
              ${service.includes.map(inc => `
                <li>
                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="9" cy="9" r="9" fill="#1d1d1f" opacity="0.1"/><path d="M5.5 9l2.5 2.5L12.5 6" stroke="#1d1d1f" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  ${inc.title}
                </li>
              `).join('')}
            </ul>
          </div>
        ` : ''}

        ${renderPortfolio(service.portfolio)}
        ${renderBrandsMarquee(service.brands)}
        ${service.options.length > 0 ? renderOptions(service.options) : ''}
    `;
  }

  // ── Regular service modal ────────────────────────────────

  function renderModalContent(service) {
    return `
      <div class="modal-sticky-header">
        <h2 class="modal-sticky-title">${service.title}</h2>
        <button class="modal-sticky-close" onclick="document.getElementById('modal-close').click()">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        </button>
      </div>

      <div class="modal-hero">
        <img src="${service.image_url}" alt="${service.title}">
      </div>

      <div class="modal-body">
        <h2 class="modal-title">${service.title}</h2>
        ${renderServicePanel(service)}
      </div>
    `;
  }

  // ── Group modal with type tabs ───────────────────────────

  function renderGroupModalContent(group, activeIdx) {
    var svc = group.services[activeIdx] || group.services[0];
    var tabs = group.services.map(function(s, i) {
      return '<button class="group-type-tab' + (i === activeIdx ? ' active' : '') + '" data-idx="' + i + '">' + s.title + '</button>';
    }).join('');

    return `
      <div class="modal-sticky-header">
        <h2 class="modal-sticky-title">${group.title}</h2>
        <button class="modal-sticky-close" onclick="document.getElementById('modal-close').click()">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        </button>
      </div>

      <div class="modal-hero">
        <img src="${group.image_url || svc.image_url}" alt="${group.title}">
      </div>

      <div class="modal-body">
        <h2 class="modal-title">${group.title}</h2>
        ${group.services.length > 1 ? '<div class="group-type-tabs">' + tabs + '</div>' : ''}
        <div class="group-type-content">
          ${renderServicePanel(svc)}
        </div>
      </div>
    `;
  }
});
