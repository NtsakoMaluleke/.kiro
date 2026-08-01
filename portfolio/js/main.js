/* =============================================
   Ntsako Maluleke – Portfolio JS
   ============================================= */

document.addEventListener('DOMContentLoaded', function () {

  // --- Footer year ---
  const yearEl = document.getElementById('year');
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  // --- Mobile nav toggle ---
  const toggle  = document.querySelector('.nav-toggle');
  const navList = document.querySelector('nav ul');

  if (toggle && navList) {
    toggle.addEventListener('click', function () {
      navList.classList.toggle('open');
      toggle.setAttribute('aria-expanded', navList.classList.contains('open'));
    });

    navList.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        navList.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  // --- Active nav link ---
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('nav ul li a').forEach(function (link) {
    if (link.getAttribute('href') === currentPage) {
      link.classList.add('active');
    }
  });

  // --- Scroll fade-in animation ---
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
    fadeEls.forEach(function (el) { el.classList.add('visible'); });
  }

});
