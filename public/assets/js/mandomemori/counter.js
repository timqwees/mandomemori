document.addEventListener('DOMContentLoaded', function() {
  var el = document.querySelector('.counter-number');
  if (!el) return;

  var target = parseInt(el.getAttribute('data-target'), 10);
  if (isNaN(target) || target <= 0) return;

  var started = false;
  var duration = 2000; // ms

  function animateCounter() {
    if (started) return;
    started = true;

    var startTime = null;

    function step(timestamp) {
      if (!startTime) startTime = timestamp;
      var progress = Math.min((timestamp - startTime) / duration, 1);
      // ease-out cubic
      var ease = 1 - Math.pow(1 - progress, 3);
      var current = Math.floor(ease * target);
      el.textContent = current.toLocaleString('ru-RU');

      if (progress < 1) {
        requestAnimationFrame(step);
      } else {
        el.textContent = target.toLocaleString('ru-RU');
      }
    }

    requestAnimationFrame(step);
  }

  var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        animateCounter();
        observer.disconnect();
      }
    });
  }, { threshold: 0.3 });

  observer.observe(el);
});
