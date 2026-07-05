document.addEventListener('DOMContentLoaded', function() {
  var track = document.getElementById('portfolio-slider');
  if (!track) return;

  var slides = track.querySelectorAll('.portfolio-slide');
  if (slides.length < 2) return;

  var pos = 0;
  var speed = 0.5; // px per frame
  var dragging = false;
  var startX = 0;
  var dragStartPos = 0;
  var velocity = 0;
  var lastX = 0;
  var lastTime = 0;
  var raf = null;
  var totalWidth = 0;
  var halfWidth = 0;

  function measure() {
    // Reset transform to get accurate scrollWidth
    track.style.transform = 'translate3d(0, 0, 0)';
    totalWidth = track.scrollWidth;
    halfWidth = totalWidth / 2;
    render();
  }
  measure();

  // Infinite loop: when we scroll past half, jump back
  function wrapPos() {
    if (halfWidth <= 0) return;
    while (pos >= halfWidth) pos -= halfWidth;
    while (pos < 0) pos += halfWidth;
  }

  function render() {
    track.style.transform = 'translate3d(' + (-pos) + 'px, 0, 0)';
  }

  // Autoplay + momentum loop
  function tick() {
    if (!dragging) {
      if (Math.abs(velocity) > 0.5) {
        pos += velocity;
        velocity *= 0.95;
      } else {
        velocity = 0;
        pos += speed;
      }
    }
    wrapPos();
    render();
    raf = requestAnimationFrame(tick);
  }
  raf = requestAnimationFrame(tick);

  // Mouse drag
  track.addEventListener('mousedown', function(e) {
    dragging = true;
    track.classList.add('dragging');
    startX = e.clientX;
    dragStartPos = pos;
    lastX = e.clientX;
    lastTime = Date.now();
    velocity = 0;
    e.preventDefault();
  });

  window.addEventListener('mousemove', function(e) {
    if (!dragging) return;
    var now = Date.now();
    var dx = e.clientX - lastX;
    var dt = now - lastTime;
    if (dt > 0) velocity = -dx * (16 / dt);
    lastX = e.clientX;
    lastTime = now;
    pos = dragStartPos - (e.clientX - startX);
    wrapPos();
  });

  window.addEventListener('mouseup', function() {
    if (!dragging) return;
    dragging = false;
    track.classList.remove('dragging');
  });

  // Touch drag
  track.addEventListener('touchstart', function(e) {
    if (e.touches.length !== 1) return;
    dragging = true;
    startX = e.touches[0].clientX;
    dragStartPos = pos;
    lastX = e.touches[0].clientX;
    lastTime = Date.now();
    velocity = 0;
  }, { passive: true });

  track.addEventListener('touchmove', function(e) {
    if (!dragging || e.touches.length !== 1) return;
    var now = Date.now();
    var tx = e.touches[0].clientX;
    var dx = tx - lastX;
    var dt = now - lastTime;
    if (dt > 0) velocity = -dx * (16 / dt);
    lastX = tx;
    lastTime = now;
    pos = dragStartPos - (tx - startX);
    wrapPos();
  }, { passive: true });

  track.addEventListener('touchend', function() {
    dragging = false;
  }, { passive: true });

  // Pause autoplay when not visible
  var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      speed = entry.isIntersecting ? 0.5 : 0;
    });
  }, { threshold: 0.1 });
  observer.observe(track.parentElement);

  // Re-measure on resize
  var resizeTimer;
  window.addEventListener('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(measure, 200);
  });
});
