document.addEventListener('DOMContentLoaded', function () {
  var sliders = document.querySelectorAll('.cards-slider');
  if (!sliders.length) return;

  sliders.forEach(function (slider) { initSlider(slider); });

  function initSlider(slider) {
    var isDragging = false;
    var startX = 0;
    var scrollStart = 0;
    var lastX = 0;
    var lastTime = 0;
    var velocity = 0;
    var dragMoved = false;
    var DRAG_THRESHOLD = 5;
    var raf = null;

    /* ── Mouse drag ──────────────────────────────── */
    slider.addEventListener('mousedown', function (e) {
      /* Don't hijack pill/button/image clicks */
      if (e.target.closest('button') || e.target.closest('.card-image') || e.target.closest('a')) return;

      isDragging = true;
      dragMoved = false;
      startX = e.clientX;
      scrollStart = slider.scrollLeft;
      lastX = e.clientX;
      lastTime = Date.now();
      velocity = 0;

      slider.classList.add('dragging');
      if (raf) { cancelAnimationFrame(raf); raf = null; }
      e.preventDefault();
    });

    window.addEventListener('mousemove', function (e) {
      if (!isDragging) return;

      var dx = e.clientX - startX;
      if (Math.abs(dx) > DRAG_THRESHOLD) dragMoved = true;

      /* Track velocity */
      var now = Date.now();
      var dt = now - lastTime;
      if (dt > 0) {
        velocity = (lastX - e.clientX) * (16 / dt);
      }
      lastX = e.clientX;
      lastTime = now;

      slider.scrollLeft = scrollStart - dx;
    });

    window.addEventListener('mouseup', function () {
      if (!isDragging) return;
      isDragging = false;
      slider.classList.remove('dragging');

      /* Momentum coast – skip on mobile where snap handles it */
      if (Math.abs(velocity) > 1 && window.innerWidth > 600) {
        momentum();
      }
    });

    function momentum() {
      raf = requestAnimationFrame(function () {
        if (Math.abs(velocity) < 0.5) {
          velocity = 0;
          /* Re-enable snap after momentum ends */
          slider.style.scrollSnapType = '';
          return;
        }
        /* Disable snap during momentum */
        slider.style.scrollSnapType = 'none';
        slider.scrollLeft += velocity;
        velocity *= 0.94;
        momentum();
      });
    }

    /* ── Block click after drag ──────────────────── */
    slider.addEventListener('click', function (e) {
      if (dragMoved) {
        e.stopPropagation();
        e.preventDefault();
        dragMoved = false;
      }
    }, true);
  }
});
