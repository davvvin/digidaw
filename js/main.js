// ===================== STICKY NAV =====================
(function () {
  const nav = document.querySelector('.header-nav');
  const sentinel = document.querySelector('.header-top');
  const spacer = document.querySelector('.sticky-spacer');
  if (!nav || !sentinel) return;

  const observer = new IntersectionObserver(([e]) => {
    const sticky = !e.isIntersecting;
    nav.classList.toggle('is-sticky', sticky);
    if (spacer) spacer.style.display = sticky ? 'block' : 'none';
  }, { threshold: 0 });
  observer.observe(sentinel);
})();

// ===================== MOBILE MENU =====================
(function () {
  const hamburger = document.querySelector('.nav-hamburger');
  const mobileMenu = document.querySelector('.mobile-menu');
  if (!hamburger || !mobileMenu) return;
  hamburger.addEventListener('click', () => {
    mobileMenu.classList.toggle('open');
  });
})();

// ===================== FAQ ACCORDION =====================
document.querySelectorAll('.faq-q').forEach(q => {
  q.addEventListener('click', () => {
    const item = q.closest('.faq-item');
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach(i => i.classList.remove('open'));
    if (!isOpen) item.classList.add('open');
  });
});

// ===================== ACTIVE NAV LINK =====================
(function () {
  const page = location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.nav-links a, .mobile-menu a').forEach(a => {
    if (a.getAttribute('href') === page) a.classList.add('active');
  });
})();

// ===================== SCROLL ANIMATIONS =====================
const animateOnScroll = () => {
  document.querySelectorAll('[data-animate]').forEach(el => {
    const rect = el.getBoundingClientRect();
    if (rect.top < window.innerHeight - 60) {
      el.classList.add('visible');
    }
  });
};
document.querySelectorAll('.product-card, .step-card, .testi-card, .blog-card').forEach(el => {
  el.setAttribute('data-animate', '');
});
const style = document.createElement('style');
style.textContent = `
  [data-animate] { opacity: 0; transform: translateY(24px); transition: opacity 0.5s ease, transform 0.5s ease; }
  [data-animate].visible { opacity: 1; transform: translateY(0); }
`;
document.head.appendChild(style);
window.addEventListener('scroll', animateOnScroll, { passive: true });
window.addEventListener('load', animateOnScroll);
