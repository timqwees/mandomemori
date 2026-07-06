(function () {
  var hero = document.getElementById('scroll-hero');
  if (!hero) return;

  var video = document.getElementById('scroll-hero-video');
  var wordEl = document.getElementById('scroll-hero-word');
  var loader = document.getElementById('scroll-hero-loader');

  var words = [
    'Кроссовки',
    'Кеды',
    'Ботинки',
    'Сапоги',
    'Лоферы',
    'Мокасины',
    'Туфли',
    'Сандалии',
    'Слипоны',
    'Угги',
    'Эспадрильи'
  ];

  var currentWordIndex = 0;

  /* Content is visible immediately — hide loader right away */
  if (loader) loader.classList.add('hidden');

  /* ── Video: lazy load + boomerang playback ── */
  if (video) {
    var srcDesktop = video.getAttribute('data-src-desktop');
    var srcMobile = video.getAttribute('data-src-mobile');
    if (srcDesktop && srcMobile && srcMobile !== srcDesktop && window.innerWidth <= 768) {
      video.src = srcMobile;
    }

    /* Start hidden, fade in when ready */
    video.style.opacity = '0';
    video.style.transition = 'opacity 0.6s ease';

    /* Trigger download (preload="none" means we must call .load()) */
    video.load();

    var playForward = true;
    var boomerangRAF = null;

    function boomerangLoop() {
      if (!video.duration) {
        boomerangRAF = requestAnimationFrame(boomerangLoop);
        return;
      }

      if (playForward) {
        if (video.paused) {
          video.playbackRate = 1;
          video.play().catch(function () {});
        }
      } else {
        /* Reverse: manually step backward */
        video.pause();
        video.currentTime = Math.max(0, video.currentTime - 0.033);
        if (video.currentTime <= 0.05) {
          playForward = true;
        }
      }

      boomerangRAF = requestAnimationFrame(boomerangLoop);
    }

    video.addEventListener('ended', function () {
      playForward = false;
    });

    var readyFired = false;
    var onVideoReady = function () {
      if (readyFired) return;
      readyFired = true;
      video.currentTime = 0;
      playForward = true;
      video.play().catch(function () {});
      video.style.opacity = '1';
      boomerangLoop();
    };

    if (video.readyState >= 4) {
      onVideoReady();
    } else {
      video.addEventListener('canplaythrough', onVideoReady, { once: true });
    }

    /* Fallback: start after 4s even if not fully buffered */
    setTimeout(function () {
      if (!readyFired) onVideoReady();
    }, 4000);
  }

  /* ── Word rotation on timer ──────────────────────────── */
  if (wordEl) {
    setInterval(function () {
      currentWordIndex = (currentWordIndex + 1) % words.length;
      wordEl.classList.add('changing');
      var newIndex = currentWordIndex;
      setTimeout(function () {
        wordEl.textContent = words[newIndex];
        wordEl.classList.remove('changing');
      }, 150);
    }, 2500);
  }
})();
