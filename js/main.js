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

// ===================== TYPEWRITER EFFECT =====================
(function () {
  const textElement = document.querySelector('.typewriter-text');
  if (!textElement) return;

  const sequences = [
    "Keluar Kukusan Langsung ke Mejamu",
    "Dibuat Segar Setiap Pagi",
    "Rasa yang Selalu Bikin Rindu",
    "Resep Tradisional Otentik"
  ];

  let sequenceIndex = 0;
  let charIndex = 0;
  let isDeleting = false;
  
  const typingSpeed = 60;
  const deleteSpeed = 30;
  const pauseBeforeDelete = 2000;
  const pauseBeforeType = 400;

  function type() {
    const currentText = sequences[sequenceIndex];
    
    if (isDeleting) {
      textElement.textContent = currentText.substring(0, charIndex - 1);
      charIndex--;
    } else {
      textElement.textContent = currentText.substring(0, charIndex + 1);
      charIndex++;
    }

    let typeSpeed = isDeleting ? deleteSpeed : typingSpeed;

    // Natural human typing variance
    if (!isDeleting) {
      const random = Math.random();
      if (random < 0.1) typeSpeed *= 2; 
      else if (random > 0.9) typeSpeed *= 0.5;
    }

    if (!isDeleting && charIndex === currentText.length) {
      // Word is completely typed
      typeSpeed = pauseBeforeDelete;
      isDeleting = true;
    } else if (isDeleting && charIndex === 0) {
      // Word is completely deleted
      isDeleting = false;
      sequenceIndex = (sequenceIndex + 1) % sequences.length;
      typeSpeed = pauseBeforeType;
    }

    setTimeout(type, typeSpeed);
  }

  // Start the effect
  setTimeout(type, 800);
})();

// ===================== PARTICLE BUTTON =====================
document.querySelectorAll('.btn, .product-btn, .wa-float, .footer-bottom a').forEach(btn => {
  btn.addEventListener('click', function(e) {
    const rect = this.getBoundingClientRect();
    const centerX = rect.left + rect.width / 2;
    const centerY = rect.top + rect.height / 2;

    // Create 6 particles
    for (let i = 0; i < 6; i++) {
      const particle = document.createElement('div');
      particle.className = 'btn-particle';
      
      // Alternate background colors (primary red and secondary gold) for variety
      particle.style.backgroundColor = (i % 2 === 0) ? 'var(--primary)' : 'var(--secondary)';
      document.body.appendChild(particle);

      // Start position
      particle.style.left = `${centerX}px`;
      particle.style.top = `${centerY}px`;

      // Calculate end position (logic adapted from React component)
      const dirX = (i % 2 === 0 ? 1 : -1);
      const distX = dirX * (Math.random() * 50 + 20);
      const distY = -(Math.random() * 50 + 20); // Particles fly upwards

      // Animate with native Web Animations API
      const animation = particle.animate([
        { transform: 'translate(0px, 0px) scale(0)' },
        { transform: `translate(${distX * 0.5}px, ${distY * 0.5}px) scale(1)`, offset: 0.5 },
        { transform: `translate(${distX}px, ${distY}px) scale(0)` }
      ], {
        duration: 600,
        delay: i * 50, // Slight stagger
        easing: 'ease-out',
        fill: 'forwards'
      });

      // Cleanup DOM node after animation
      animation.onfinish = () => {
        particle.remove();
      };
    }
  });
});

// ===================== SHOP 3D CAROUSEL =====================
(function() {
  const carousel = document.getElementById('shopCarousel');
  if (!carousel) return;

  const items = Array.from(document.querySelectorAll('.carousel-item'));
  const btnPrev = document.getElementById('btnPrev');
  const btnNext = document.getElementById('btnNext');
  const titleEl = document.getElementById('carouselTitle');
  const descEl = document.getElementById('carouselDesc');
  const linkEl = document.getElementById('carouselLink');

  const IMAGES_DATA = [
    { bg: '#F4845F', title: 'HAR GOW (HAKAU)', desc: 'Kulit tepung beras yang lembut diisi udang segar utuh — hidangan Dimsum klasik. Dibuat segar setiap pagi untuk menjamin tekstur dan rasa terbaik.' },
    { bg: '#6BBF7A', title: 'SIU MAI (SIOMAY)', desc: 'Dimsum kukus terbuka berisi daging berbumbu dengan udang utuh di atasnya. Cita rasa gurih yang sempurna dalam setiap gigitan.' },
    { bg: '#F2A65A', title: 'CHAR SIU BAO', desc: 'Roti panggang lembut berisi daging ayam BBQ manis gurih, berwarna keemasan di atasnya. Favorit anak-anak sepanjang masa.' },
    { bg: '#85A6E8', title: 'LO MAI GAI', desc: 'Nasi ketan harum dengan ayam dan jamur, dikukus dalam daun teratai. Mengenyangkan dengan porsi yang pas untuk mengawali hari.' }
  ];

  let activeIndex = 0;
  let isAnimating = false;

  function updateCarousel() {
    carousel.style.backgroundColor = IMAGES_DATA[activeIndex].bg;
    titleEl.textContent = IMAGES_DATA[activeIndex].title;
    descEl.textContent = IMAGES_DATA[activeIndex].desc;
    
    // Update WhatsApp link based on active item
    const itemName = encodeURIComponent(IMAGES_DATA[activeIndex].title);
    linkEl.href = `https://wa.me/6281234567890?text=Halo%20DimAS,%20saya%20mau%20pesan%20${itemName}`;

    items.forEach((item) => {
      const index = parseInt(item.getAttribute('data-index'));
      
      if (index === activeIndex) {
        item.setAttribute('data-role', 'center');
      } else if (index === (activeIndex + 3) % 4) {
        item.setAttribute('data-role', 'left');
      } else if (index === (activeIndex + 1) % 4) {
        item.setAttribute('data-role', 'right');
      } else if (index === (activeIndex + 2) % 4) {
        item.setAttribute('data-role', 'back');
      }
    });
  }

  function navigate(direction) {
    if (isAnimating) return;
    isAnimating = true;

    if (direction === 'next') {
      activeIndex = (activeIndex + 1) % 4;
    } else {
      activeIndex = (activeIndex + 3) % 4;
    }

    updateCarousel();

    setTimeout(() => {
      isAnimating = false;
    }, 650);
  }

  btnPrev.addEventListener('click', () => navigate('prev'));
  btnNext.addEventListener('click', () => navigate('next'));

  // Initialize
  updateCarousel();
})();
