document.addEventListener('DOMContentLoaded', () => {
  // ------------------------------------------------------------------------
  // 1. Dark / Light Mode Toggle
  // ------------------------------------------------------------------------
  const themeToggle = document.getElementById('themeToggle');
  const body = document.body;

  // Retrieve saved preference
  const savedTheme = localStorage.getItem('theme');
  if (savedTheme === 'light') {
    body.classList.add('light-mode');
    if (themeToggle) {
      themeToggle.innerHTML = '<i class="fa-solid fa-sun"></i>';
      themeToggle.setAttribute('aria-label', 'Switch to dark mode');
    }
  } else {
    if (themeToggle) {
      themeToggle.innerHTML = '<i class="fa-solid fa-moon"></i>';
      themeToggle.setAttribute('aria-label', 'Switch to light mode');
    }
  }

  if (themeToggle) {
    themeToggle.addEventListener('click', () => {
      body.classList.toggle('light-mode');
      const isLight = body.classList.contains('light-mode');

      if (isLight) {
        localStorage.setItem('theme', 'light');
        themeToggle.innerHTML = '<i class="fa-solid fa-sun"></i>';
        themeToggle.setAttribute('aria-label', 'Switch to dark mode');
      } else {
        localStorage.setItem('theme', 'dark');
        themeToggle.innerHTML = '<i class="fa-solid fa-moon"></i>';
        themeToggle.setAttribute('aria-label', 'Switch to light mode');
      }
    });
  }

  // ------------------------------------------------------------------------
  // 2. Dynamic Role Cycling (Smooth Typewriter)
  // ------------------------------------------------------------------------
  const roleElement = document.querySelector('.dynamic-role');
  if (roleElement) {
    const roles = [
      'Software Engineering Student',
      'Fullstack Web Developer',
      'UI/UX Design Enthusiast',
      'PHP & Laravel Explorer'
    ];

    let roleIndex = 0;
    let charIndex = 0;
    let isDeleting = false;

    const typeSpeed = 70;
    const deleteSpeed = 35;
    const pauseTime = 1800;

    function typeEffect() {
      const currentRole = roles[roleIndex];

      if (!isDeleting) {
        roleElement.textContent = currentRole.substring(0, charIndex + 1);
        charIndex++;

        if (charIndex === currentRole.length) {
          isDeleting = true;
          setTimeout(typeEffect, pauseTime);
          return;
        }
      } else {
        roleElement.textContent = currentRole.substring(0, charIndex - 1);
        charIndex--;

        if (charIndex === 0) {
          isDeleting = false;
          roleIndex = (roleIndex + 1) % roles.length;
          setTimeout(typeEffect, 300);
          return;
        }
      }

      setTimeout(typeEffect, isDeleting ? deleteSpeed : typeSpeed);
    }

    typeEffect();
  }

  // ------------------------------------------------------------------------
  // 3. Scroll To Top Button (defined before scroll handler)
  // ------------------------------------------------------------------------
  const scrollTopBtn = document.getElementById('scrollTopBtn');
  if (scrollTopBtn) {
    scrollTopBtn.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  // ------------------------------------------------------------------------
  // 4. Navbar Scroll Effect & Scrollspy
  // ------------------------------------------------------------------------
  const navbar = document.querySelector('.custom-navbar');
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.nav-link-custom');

  function handleScroll() {
    const scrollY = window.pageYOffset;

    // Navbar background blur enhancement
    if (navbar) {
      if (scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    }

    // Scrollspy for active nav links
    sections.forEach(section => {
      const sectionHeight = section.offsetHeight;
      const sectionTop = section.offsetTop - 120;
      const sectionId = section.getAttribute('id');

      if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
        navLinks.forEach(link => {
          if (link.getAttribute('href') === `#${sectionId}`) {
            link.classList.add('active');
          } else {
            link.classList.remove('active');
          }
        });
      }
    });

    // Scroll-to-top visibility
    if (scrollTopBtn) {
      if (scrollY > 400) {
        scrollTopBtn.classList.add('visible');
      } else {
        scrollTopBtn.classList.remove('visible');
      }
    }
  }

  window.addEventListener('scroll', handleScroll, { passive: true });

  // Close mobile navbar on click of link
  const navbarCollapse = document.getElementById('navbarMenu');
  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      if (navbarCollapse && navbarCollapse.classList.contains('show')) {
        const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
        if (bsCollapse) {
          bsCollapse.hide();
        }
      }
    });
  });
  if (scrollTopBtn) {
    scrollTopBtn.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  // ------------------------------------------------------------------------
  // 5. Reveal Animations via IntersectionObserver
  // ------------------------------------------------------------------------
  const revealElements = document.querySelectorAll('.reveal-fade-up');
  if ('IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.12,
      rootMargin: '0px 0px -40px 0px'
    });

    revealElements.forEach(el => revealObserver.observe(el));
  } else {
    // Fallback for older browsers
    revealElements.forEach(el => el.classList.add('active'));
  }

  // ------------------------------------------------------------------------
  // 6. Contact Form Submission Status (CSP-Compliant, no inline script)
  // ------------------------------------------------------------------------
  const urlParams = new URLSearchParams(window.location.search);
  const statusParam = urlParams.get('status');

  if (statusParam && typeof Swal !== 'undefined') {
    if (statusParam === 'success') {
      Swal.fire({
        icon: 'success',
        title: 'Pesan Berhasil Dikirim',
        text: 'Terima kasih telah menghubungi saya. Saya akan merespon sesegera mungkin.',
        confirmButtonText: 'OK',
        confirmButtonColor: '#3b82f6'
      });
    } else if (statusParam === 'error') {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Pesan gagal dikirim. Silakan coba kembali atau hubungi via email langsung.',
        confirmButtonText: 'OK',
        confirmButtonColor: '#ef4444'
      });
    }

    // Clean URL query string without reloading page to prevent re-triggering alert
    const cleanUrl = window.location.protocol + '//' + window.location.host + window.location.pathname;
    window.history.replaceState({ path: cleanUrl }, '', cleanUrl);
  }

  // ------------------------------------------------------------------------
  // 7. Interactive 3D Perspective Tilt on Profile Frame
  // ------------------------------------------------------------------------
  const profileContainer = document.querySelector('.profile-showcase');
  const profileFrame = document.querySelector('.profile-frame');

  if (profileContainer && profileFrame) {
    profileContainer.addEventListener('mousemove', (e) => {
      const rect = profileContainer.getBoundingClientRect();
      const x = e.clientX - rect.left - rect.width / 2;
      const y = e.clientY - rect.top - rect.height / 2;

      const rotateX = (-y / (rect.height / 2)) * 10;
      const rotateY = (x / (rect.width / 2)) * 10;

      profileFrame.style.transform = `perspective(1000px) rotateX(${rotateX.toFixed(2)}deg) rotateY(${rotateY.toFixed(2)}deg) scale3d(1.02, 1.02, 1.02)`;
    });

    profileContainer.addEventListener('mouseleave', () => {
      profileFrame.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
    });
  }

  // ------------------------------------------------------------------------
  // 8. Dynamic Mouse Spotlight Effect on Cards
  // ------------------------------------------------------------------------
  const spotlightCards = document.querySelectorAll('.bento-card, .project-card-modern, .cert-card-modern');
  spotlightCards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      card.style.setProperty('--mouse-x', `${x}px`);
      card.style.setProperty('--mouse-y', `${y}px`);
    });
  });
});
