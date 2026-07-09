document.addEventListener('DOMContentLoaded', () => {
  const selfView = document.getElementById('self-view');
  const mapView = document.getElementById('locations-map');
  const courierView = document.getElementById('courier-form');
  const toggleBtns = document.querySelectorAll('.view-toggle-btn');
  let mapInitialized = false;

  // Initialize map on load if visible
  if (mapView && selfView && selfView.style.display !== 'none') {
    setTimeout(function() { if (!mapInitialized) initMap(); }, 100);
  }

  // View toggle
  toggleBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      toggleBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const view = btn.dataset.view;
      if (selfView) selfView.style.display = view === 'self' ? '' : 'none';
      if (courierView) courierView.style.display = view === 'courier' ? '' : 'none';
      if (view === 'self' && !mapInitialized && mapView) initMap();
    });
  });

  // ── Phone mask ────────────────────────────────────────────────
  const phoneInput = document.getElementById('cf-phone');
  if (phoneInput && typeof initPhoneMask === 'function') {
    initPhoneMask(phoneInput);
  }

  // ── DaData address autocomplete ───────────────────────────────
  const addressInput = document.getElementById('cf-address');
  const suggestionsBox = document.getElementById('cf-address-suggestions');
  const dadataToken = window.__dadataToken || '';
  const cityName = window.__cityName || '';

  if (addressInput && suggestionsBox && dadataToken) {
    let debounceTimer = null;
    let activeSuggestionIndex = -1;
    let currentSuggestions = [];

    addressInput.addEventListener('input', () => {
      clearTimeout(debounceTimer);
      const query = addressInput.value.trim();
      if (query.length < 3) {
        closeSuggestions();
        return;
      }
      debounceTimer = setTimeout(() => fetchSuggestions(query), 300);
    });

    addressInput.addEventListener('keydown', (e) => {
      if (!currentSuggestions.length) return;
      if (e.key === 'ArrowDown') {
        e.preventDefault();
        activeSuggestionIndex = Math.min(activeSuggestionIndex + 1, currentSuggestions.length - 1);
        highlightSuggestion();
      } else if (e.key === 'ArrowUp') {
        e.preventDefault();
        activeSuggestionIndex = Math.max(activeSuggestionIndex - 1, 0);
        highlightSuggestion();
      } else if (e.key === 'Enter' && activeSuggestionIndex >= 0) {
        e.preventDefault();
        selectSuggestion(currentSuggestions[activeSuggestionIndex]);
      } else if (e.key === 'Escape') {
        closeSuggestions();
      }
    });

    document.addEventListener('click', (e) => {
      if (!e.target.closest('.form-field--address')) closeSuggestions();
    });

    async function fetchSuggestions(query) {
      try {
        const body = { query: query, count: 7 };
        // Filter suggestions by current city
        if (cityName) {
          body.locations = [{ city: cityName }];
        }

        const resp = await fetch('https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/address', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'Authorization': 'Token ' + dadataToken
          },
          body: JSON.stringify(body)
        });

        if (!resp.ok) return;
        const data = await resp.json();
        currentSuggestions = data.suggestions || [];
        activeSuggestionIndex = -1;
        renderSuggestions();
      } catch (_) {
        closeSuggestions();
      }
    }

    function renderSuggestions() {
      if (!currentSuggestions.length) {
        closeSuggestions();
        return;
      }

      suggestionsBox.innerHTML = currentSuggestions.map((s, i) => {
        // Show address without city prefix when city is filtered
        const display = cityName && s.data && s.data.city === cityName
          ? s.value.replace(new RegExp('^г\\s+' + escapeRegex(cityName) + ',\\s*'), '')
          : s.value;
        return '<div class="dadata-suggestion" data-index="' + i + '">' + escapeHtml(display) + '</div>';
      }).join('');

      suggestionsBox.style.display = 'block';

      suggestionsBox.querySelectorAll('.dadata-suggestion').forEach(el => {
        el.addEventListener('mousedown', (e) => {
          e.preventDefault();
          selectSuggestion(currentSuggestions[parseInt(el.dataset.index)]);
        });
      });
    }

    function highlightSuggestion() {
      suggestionsBox.querySelectorAll('.dadata-suggestion').forEach((el, i) => {
        el.classList.toggle('active', i === activeSuggestionIndex);
      });
    }

    function selectSuggestion(suggestion) {
      addressInput.value = suggestion.value;
      closeSuggestions();
    }

    function closeSuggestions() {
      suggestionsBox.style.display = 'none';
      suggestionsBox.innerHTML = '';
      currentSuggestions = [];
      activeSuggestionIndex = -1;
    }

    function escapeHtml(str) {
      var div = document.createElement('div');
      div.appendChild(document.createTextNode(str));
      return div.innerHTML;
    }

    function escapeRegex(str) {
      return str.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
    }
  }

  // Courier form submit
  const courierForm = document.getElementById('courier-request-form');
  if (courierForm) {
    courierForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      const formData = new FormData(courierForm);
      const csrfToken = formData.get('_csrf') || '';
      const data = Object.fromEntries(formData);
      data.page_url = window.location.href;
      delete data._csrf;
      const submitBtn = courierForm.querySelector('button[type="submit"]');
      if (submitBtn) { submitBtn.disabled = true; submitBtn.textContent = 'Отправка...'; }
      try {
        await fetch('/courier/request', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json', 'x-csrf-token': csrfToken },
          body: JSON.stringify(data)
        });
      } catch (_) {}
      courierForm.innerHTML = '<div class="courier-form-success"><svg width="48" height="48" viewBox="0 0 48 48" fill="none"><circle cx="24" cy="24" r="24" fill="var(--accent)" opacity="0.1"/><path d="M16 24l6 6L32 18" stroke="var(--accent)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg><h3>Заявка отправлена</h3><p>Мы свяжемся с вами в ближайшее время</p></div>';
      if (typeof gtag === 'function') { gtag('event', 'submit_courier_request'); }
      if (typeof ym === 'function') { ym('reachGoal', 'courier_request'); }
    });
  }

  // Pin colors by location type
  const typeColors = {
    pickup: '#0071e3',
    postamat: '#cc7f08',
    lamoda: '#1da34a'
  };

  const typeLabels = {
    pickup: 'Приёмный пункт',
    postamat: 'Постамат',
    lamoda: 'ЛамодаСпорт'
  };

  function initMap() {
    mapInitialized = true;
    const ymapEl = document.getElementById('ymap');
    if (!ymapEl) return;

    // Check if ymaps is available (API might be blocked without valid key)
    if (typeof ymaps === 'undefined') {
      ymapEl.innerHTML =
        '<div style="display:flex;align-items:center;justify-content:center;height:100%;color:#86868b;font-size:0.9rem;text-align:center;padding:24px">' +
        'Для отображения карты необходим API-ключ Яндекс.Карт.<br>Укажите его в параметре apikey.' +
        '</div>';
      return;
    }

    ymaps.ready(() => {
      const locations = window.__locations || [];
      if (!locations.length) return;

      const map = new ymaps.Map('ymap', {
        center: [locations[0].lat, locations[0].lng],
        zoom: 11,
        controls: ['zoomControl', 'geolocationControl']
      });

      locations.forEach(loc => {
        const color = typeColors[loc.type] || '#1d1d1f';
        const placemark = new ymaps.Placemark(
          [loc.lat, loc.lng],
          {
            balloonContentHeader: loc.name,
            balloonContentBody:
              '<div style="font-size:13px;line-height:1.5">' +
              '<b>' + (typeLabels[loc.type] || loc.type) + '</b><br>' +
              loc.address + '<br>' +
              (loc.metro ? 'м. ' + loc.metro + '<br>' : '') +
              (loc.hours ? loc.hours + '<br>' : '') +
              (loc.yandex_maps_url ? '<a href="' + loc.yandex_maps_url + '" target="_blank" rel="noopener" style="color:#0066ff">Проложить маршрут</a>' : '') +
              '</div>',
            hintContent: loc.name
          },
          {
            preset: 'islands#dotIcon',
            iconColor: color
          }
        );
        map.geoObjects.add(placemark);
      });

      // Fit bounds to show all markers
      if (locations.length > 1) {
        map.setBounds(map.geoObjects.getBounds(), { checkZoomRange: true, zoomMargin: 40 });
      }
    });
  }

  // Inline map for single location
  const inlineMapEl = document.getElementById('ymap-inline');
  if (inlineMapEl) {
    if (typeof ymaps === 'undefined') {
      inlineMapEl.innerHTML =
        '<div style="display:flex;align-items:center;justify-content:center;height:100%;color:#86868b;font-size:0.9rem;text-align:center;padding:24px">' +
        'Для отображения карты необходим API-ключ Яндекс.Карт.' +
        '</div>';
    } else {
      ymaps.ready(() => {
        const locations = window.__locations || [];
        if (!locations.length) return;
        const loc = locations[0];
        const map = new ymaps.Map('ymap-inline', {
          center: [loc.lat, loc.lng],
          zoom: 15,
          controls: ['zoomControl']
        });
        const color = typeColors[loc.type] || '#1d1d1f';
        const placemark = new ymaps.Placemark([loc.lat, loc.lng], {
          hintContent: loc.name
        }, {
          preset: 'islands#dotIcon',
          iconColor: color
        });
        map.geoObjects.add(placemark);
      });
    }
  }
});
