document.addEventListener('DOMContentLoaded', function() {
  var items = document.querySelectorAll('.hstack-item');
  if (!items.length) return;

  var isMobile = window.innerWidth <= 768;

  // On mobile: swipe slider with dots
  if (isMobile) {
    items.forEach(function(item) {
      item.classList.add('visible');
    });

    var track = document.querySelector('.hstack-track');
    var dots = document.querySelectorAll('.hstack-dot');
    if (!track || !dots.length) return;

    // Update active dot on scroll
    function updateDots() {
      var scrollLeft = track.scrollLeft;
      var trackWidth = track.scrollWidth - track.clientWidth;
      if (trackWidth <= 0) return;
      var ratio = scrollLeft / trackWidth;
      var idx = Math.round(ratio * (items.length - 1));
      if (idx < 0) idx = 0;
      if (idx >= items.length) idx = items.length - 1;
      dots.forEach(function(dot, i) {
        dot.classList.toggle('active', i === idx);
      });
    }

    var scrollTicking = false;
    track.addEventListener('scroll', function() {
      if (!scrollTicking) {
        scrollTicking = true;
        requestAnimationFrame(function() {
          updateDots();
          scrollTicking = false;
        });
      }
    }, { passive: true });

    // Click dot to scroll to card
    dots.forEach(function(dot) {
      dot.addEventListener('click', function() {
        var idx = parseInt(this.getAttribute('data-index'), 10);
        var target = items[idx];
        if (target) {
          var left = target.offsetLeft - (track.clientWidth - target.offsetWidth) / 2;
          track.scrollTo({ left: left, behavior: 'smooth' });
        }
      });
    });

    return;
  }

  var headerH = 52;
  var gap_top = 30;
  var stickyTop = headerH + gap_top;
  var ticking = false;

  // Cache card references once
  var cards = [];
  items.forEach(function(item, i) {
    item.style.position = 'sticky';
    item.style.top = stickyTop + 'px';
    item.style.zIndex = i + 1;
    cards.push(item.querySelector('.hstack-card'));
  });

  function onScroll() {
    if (ticking) return;
    ticking = true;

    requestAnimationFrame(function() {
      // Batch READ: read all positions first (no interleaved writes)
      var tops = [];
      var cardH = [];
      for (var i = 0; i < items.length; i++) {
        tops[i] = items[i].getBoundingClientRect().top;
        cardH[i] = cards[i] ? cards[i].offsetHeight : 0;
      }

      // Batch WRITE: apply all styles after reads
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
          var scale = 1 - ease * 0.22;
          var opacity = 1 - ease;

          card.style.transform = 'scale3d(' + scale + ',' + scale + ',1)';
          card.style.opacity = opacity;
        } else {
          card.style.transform = '';
          card.style.opacity = '';
        }
      }

      ticking = false;
    });
  }

  // Entrance animation
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
