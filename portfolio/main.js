/* =============================================
   Ntsako Maluleke – Portfolio JS
   ============================================= */

// --- Mobile nav toggle ---
document.addEventListener('DOMContentLoaded', function () {
  const toggle = document.querySelector('.nav-toggle');
  const navList = document.querySelector('nav ul');

  if (toggle && navList) {
    toggle.addEventListener('click', function () {
      navList.classList.toggle('open');
      const isOpen = navList.classList.contains('open');
      toggle.setAttribute('aria-expanded', isOpen);
    });

    // Close menu when a link is clicked
    navList.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        navList.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  // --- Scroll-based fade-in animation ---
  const fadeEls = document.querySelectorAll('.fade-in');

  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });

    fadeEls.forEach(function (el) { observer.observe(el); });
  } else {
    // Fallback for older browsers
    fadeEls.forEach(function (el) { el.classList.add('visible'); });
  }

  // --- Mark active nav link ---
  const currentPage = window.location.pathname.split('/').pop() || 'index.php';
  document.querySelectorAll('nav ul li a').forEach(function (link) {
    const href = link.getAttribute('href').split('/').pop();
    if (href === currentPage) {
      link.classList.add('active');
    }
  });
});
