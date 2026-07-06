document.addEventListener('DOMContentLoaded', function() {
  var track = document.getElementById('portfolio-slider');
  if (!track) return;

  var slides = track.querySelectorAll('.portfolio-slide');
  var origCount = 18;
  if (slides.length < 2 || slides.length <= origCount) return;

  var pos = 0;
  var speed = 1;
  var dragging = false;
  var startX = 0;
  var dragStartPos = 0;
  var velocity = 0;
  var lastX = 0;
  var lastTime = 0;
  var raf = null;
  var slideWidth = 0;
  var jumpWidth = 0;

  function measure() {
    track.style.transform = 'translate3d(0, 0, 0)';
    var total = track.scrollWidth;
    slideWidth = slides[0].offsetWidth + 12;
    jumpWidth = slideWidth * origCount;
    render();
  }
  measure();

  function render() {
    track.style.transform = 'translate3d(' + (-pos) + 'px, 0, 0)';
  }

  function tick() {
    if (!dragging) {
      if (Math.abs(velocity) > 0.5) {
        pos += velocity;
        velocity *= 0.92;
      } else {
        velocity = 0;
        pos += speed;
      }
      if (pos >= jumpWidth) pos -= jumpWidth;
      if (pos < 0) pos += jumpWidth;
    }
    render();
    raf = requestAnimationFrame(tick);
  }
  raf = requestAnimationFrame(tick);

  track.addEventListener('mousedown', function(e) {
    dragging = true;
    track.classList.add('dragging');
    startX = e.clientX;
    dragStartPos = pos;
    lastX = e.clientX;
    lastTime = Date.now();
    velocity = 0;
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
    if (pos >= jumpWidth) pos -= jumpWidth;
    if (pos < 0) pos += jumpWidth;
  });

  window.addEventListener('mouseup', function() {
    if (!dragging) return;
    dragging = false;
    track.classList.remove('dragging');
  });

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
    if (pos >= jumpWidth) pos -= jumpWidth;
    if (pos < 0) pos += jumpWidth;
  }, { passive: true });

  track.addEventListener('touchend', function() {
    dragging = false;
  }, { passive: true });

  var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      speed = entry.isIntersecting ? 1 : 0;
    });
  }, { threshold: 0.1 });
  observer.observe(track.parentElement);

  var resizeTimer;
  window.addEventListener('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(measure, 200);
  });
});