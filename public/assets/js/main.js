/* ==========================================================================
   MOON ELDERLY CARE CENTER — interactions & animations
   ========================================================================== */
(function () {
  'use strict';

  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var hasTouch = window.matchMedia('(hover: none)').matches;

  /* ------------------------------------------------------------------------
     1. Navbar scrolled state + topbar collapse
  ------------------------------------------------------------------------ */
  function onScroll() {
    var y = window.scrollY || window.pageYOffset;
    var navbar = document.querySelector('.site-navbar');
    var topbar = document.querySelector('.site-topbar');
    var backTop = document.querySelector('.back-top');

    if (navbar) navbar.classList.toggle('scrolled', y > 40);
    if (topbar) {
      var hidden = y > 120;
      topbar.style.transform = hidden ? 'translateY(-100%)' : '';
      document.body.classList.toggle('topbar-hidden', hidden);
    }
    if (backTop) backTop.classList.toggle('show', y > 600);
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* ------------------------------------------------------------------------
     2. Reveal-on-scroll
  ------------------------------------------------------------------------ */
  var revealEls = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && !reduceMotion) {
    var revealObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          var el = entry.target;
          var delay = el.getAttribute('data-delay') || 0;
          el.style.transitionDelay = delay + 'ms';
          el.classList.add('visible');
          revealObserver.unobserve(el);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    revealEls.forEach(function (el) { revealObserver.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('visible'); });
  }

  /* ------------------------------------------------------------------------
     3. Animated counters
  ------------------------------------------------------------------------ */
  function animateCount(el) {
    var targetAttr = el.getAttribute('data-target') || el.getAttribute('data-count') || '0';
    var target = parseFloat(targetAttr) || 0;
    var suffix = el.getAttribute('data-suffix') || '';
    var decimals = (targetAttr.split('.')[1] || '').length;
    var duration = 2000;
    var start = null;

    function step(ts) {
      if (!start) start = ts;
      var progress = Math.min((ts - start) / duration, 1);
      var eased = 1 - Math.pow(1 - progress, 3); // ease-out cubic
      var val = target * eased;
      el.textContent = (decimals ? val.toFixed(decimals) : Math.round(val).toLocaleString()) + suffix;
      if (progress < 1) requestAnimationFrame(step);
      else el.textContent = (decimals ? target.toFixed(decimals) : target.toLocaleString()) + suffix;
    }
    requestAnimationFrame(step);
  }

  var countEls = document.querySelectorAll('[data-count]');
  if ('IntersectionObserver' in window) {
    var countObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          animateCount(entry.target);
          countObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    countEls.forEach(function (el) { countObserver.observe(el); });
  } else {
    countEls.forEach(function (el) {
      el.textContent = el.getAttribute('data-suffix')
        ? el.getAttribute('data-target') + el.getAttribute('data-suffix')
        : el.getAttribute('data-target');
    });
  }

  /* ------------------------------------------------------------------------
     4. Starfield
  ------------------------------------------------------------------------ */
  var hero = document.querySelector('[data-stars]');
  if (hero && !reduceMotion) {
    var count = 70;
    var frag = document.createDocumentFragment();
    for (var i = 0; i < count; i++) {
      var s = document.createElement('span');
      s.className = 'star';
      var size = Math.random() * 2.4 + 1;
      s.style.width = size + 'px';
      s.style.height = size + 'px';
      s.style.left = Math.random() * 100 + '%';
      s.style.top = Math.random() * 100 + '%';
      s.style.setProperty('--d', (Math.random() * 4 + 2).toFixed(1) + 's');
      s.style.setProperty('--dl', (Math.random() * 5).toFixed(1) + 's');
      s.style.opacity = (Math.random() * 0.6 + 0.2).toFixed(2);
      frag.appendChild(s);
    }
    hero.appendChild(frag);
  }

  /* ------------------------------------------------------------------------
     5. Hero parallax (pointer)
  ------------------------------------------------------------------------ */
  var parallax = document.querySelector('.hero[data-parallax]');
  if (parallax && !reduceMotion && !hasTouch) {
    var layers = parallax.querySelectorAll('[data-depth]');
    window.addEventListener('pointermove', function (e) {
      var cx = (e.clientX / window.innerWidth - 0.5);
      var cy = (e.clientY / window.innerHeight - 0.5);
      layers.forEach(function (layer) {
        var depth = parseFloat(layer.getAttribute('data-depth')) || 0.3;
        layer.style.translate = (cx * depth * 46) + 'px ' + (cy * depth * 30) + 'px';
      });
    }, { passive: true });
  }

  /* ------------------------------------------------------------------------
     6. 3D tilt cards
  ------------------------------------------------------------------------ */
  if (!reduceMotion && !hasTouch) {
    document.querySelectorAll('[data-tilt]').forEach(function (card) {
      card.addEventListener('pointermove', function (e) {
        var r = card.getBoundingClientRect();
        var px = (e.clientX - r.left) / r.width - 0.5;
        var py = (e.clientY - r.top) / r.height - 0.5;
        card.style.transform =
          'translateY(-8px) perspective(900px) rotateY(' + (px * 8) + 'deg) rotateX(' + (-py * 8) + 'deg)';
      });
      card.addEventListener('pointerleave', function () {
        card.style.transform = '';
      });
    });
  }

  /* ------------------------------------------------------------------------
     7. Appointment form
  ------------------------------------------------------------------------ */
  var appointForm = document.getElementById('appointmentForm');
  if (appointForm) {
    appointForm.addEventListener('submit', function (e) {
      e.preventDefault();
      if (!appointForm.checkValidity()) {
        appointForm.classList.add('was-validated');
        return;
      }
      appointForm.classList.add('d-none');
      var success = document.getElementById('appointmentSuccess');
      if (success) success.classList.remove('d-none');
      // Respect the original form's action if present; otherwise local success only
      var action = appointForm.getAttribute('action');
      if (action) {
        var fd = new FormData(appointForm);
        fetch(action, { method: 'POST', body: fd, mode: 'no-cors' }).catch(function () {});
      }
    });

    var resetBtn = document.getElementById('resetAppointment');
    if (resetBtn) {
      resetBtn.addEventListener('click', function () {
        appointForm.classList.remove('d-none');
        appointForm.classList.remove('was-validated');
        var success = document.getElementById('appointmentSuccess');
        if (success) success.classList.add('d-none');
      });
    }
  }

  /* ------------------------------------------------------------------------
     8. Newsletter form
  ------------------------------------------------------------------------ */
  var newsForm = document.getElementById('newsletterForm');
  if (newsForm) {
    newsForm.addEventListener('submit', function (e) {
      e.preventDefault();
      var input = newsForm.querySelector('input[type="email"]');
      if (input && input.checkValidity()) {
        newsForm.innerHTML =
          '<div class="text-gold" style="font-size:.92rem"><i class="bi bi-check-circle me-2"></i>Thanks — you are on the list! We\'ll be in touch soon.</div>';
      } else {
        input.reportValidity();
      }
    });
  }

  /* ------------------------------------------------------------------------
     9. Video modal — stop playback on close
  ------------------------------------------------------------------------ */
  var videoModal = document.getElementById('videoModal');
  if (videoModal) {
    videoModal.addEventListener('hidden.bs.modal', function () {
      var frame = videoModal.querySelector('iframe');
      if (frame) frame.src = frame.src;
    });
  }

  /* ------------------------------------------------------------------------
     10. Back to top
  ------------------------------------------------------------------------ */
  var backTop = document.getElementById('backTop');
  if (backTop) {
    backTop.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: reduceMotion ? 'auto' : 'smooth' });
    });
  }

  /* ------------------------------------------------------------------------
     11. Year in footer
  ------------------------------------------------------------------------ */
  var yearEl = document.getElementById('year');
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  /* ------------------------------------------------------------------------
     12. Gallery lightbox
   ------------------------------------------------------------------------ */
  var galleryGrid = document.querySelector('.gallery-grid');
  var lightbox = document.getElementById('galleryLightbox');
  if (galleryGrid && lightbox && window.bootstrap) {
    var gItems = Array.prototype.slice.call(galleryGrid.querySelectorAll('.gallery-item'));
    var lbImage = document.getElementById('lbImage');
    var lbCaption = document.getElementById('lbCaption');
    var lbCounter = document.getElementById('lbCounter');
    var lbModal = new bootstrap.Modal(lightbox);
    var gIndex = 0;

    function lbShow(i) {
      gIndex = (i + gItems.length) % gItems.length;
      var item = gItems[gIndex];
      lbImage.src = item.getAttribute('data-full') || item.href;
      lbImage.alt = item.getAttribute('data-caption') || '';
      if (lbCaption) lbCaption.textContent = item.getAttribute('data-caption') || '';
      if (lbCounter) lbCounter.textContent = (gIndex + 1) + ' / ' + gItems.length;
    }

    gItems.forEach(function (item, i) {
      item.addEventListener('click', function (e) {
        e.preventDefault();
        lbShow(i);
        lbModal.show();
      });
    });

    var lbPrev = lightbox.querySelector('.lb-prev');
    var lbNext = lightbox.querySelector('.lb-next');
    if (lbPrev) lbPrev.addEventListener('click', function () { lbShow(gIndex - 1); });
    if (lbNext) lbNext.addEventListener('click', function () { lbShow(gIndex + 1); });

    document.addEventListener('keydown', function (e) {
      if (!lightbox.classList.contains('show')) return;
      if (e.key === 'ArrowLeft') lbShow(gIndex - 1);
      if (e.key === 'ArrowRight') lbShow(gIndex + 1);
    });

    // Touch swipe
    var touchX = null;
    lightbox.addEventListener('touchstart', function (e) {
      touchX = e.changedTouches[0].clientX;
    }, { passive: true });
    lightbox.addEventListener('touchend', function (e) {
      if (touchX === null) return;
      var dx = e.changedTouches[0].clientX - touchX;
      if (Math.abs(dx) > 40) lbShow(gIndex + (dx < 0 ? 1 : -1));
      touchX = null;
    }, { passive: true });
  }
})();
