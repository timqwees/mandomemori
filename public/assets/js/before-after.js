document.addEventListener('DOMContentLoaded', function() {
  var items = document.querySelectorAll('.ba-stack-item');
  if (!items.length) return;

  var headerH = 52;
  var gap_top = window.innerWidth <= 768 ? 10 : 30;
  var stickyTop = headerH + gap_top;
  var ticking = false;

  var cards = [];
  items.forEach(function(item, i) {
    item.style.position = 'sticky';
    item.style.top = stickyTop + 'px';
    item.style.zIndex = i + 1;
    cards.push(item.querySelector('.ba-stack-card'));
  });

  function onScroll() {
    if (ticking) return;
    ticking = true;

    requestAnimationFrame(function() {
      var tops = [];
      var cardH = [];
      for (var i = 0; i < items.length; i++) {
        tops[i] = items[i].getBoundingClientRect().top;
        cardH[i] = cards[i] ? cards[i].offsetHeight : 0;
      }

      for (var i = 0; i < items.length - 1; i++) {
        var card = cards[i];
        if (!card) continue;

        var gap = tops[i + 1] - tops[i];
        var range = cardH[i];
        if (range <= 0) range = 1;
        var progress = 1 - gap / range;
        if (progress < 0) progress = 0;
        if (progress > 1) progress = 1;

        if (progress > 0.01) {
          var ease = progress * progress;
          var slide = ease * 300;
          var scale = 1 - ease * 0.22;
          card.style.transform = 'translateX(-' + slide + 'px) scale3d(' + scale + ',' + scale + ',1)';
          card.style.opacity = 1 - ease;
        } else {
          card.style.transform = '';
          card.style.opacity = '';
        }
      }

      ticking = false;
    });
  }

  var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.1 });

  items.forEach(function(item) { observer.observe(item); });

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
});
