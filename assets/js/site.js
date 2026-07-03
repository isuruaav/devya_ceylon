const body = document.body;
const header = document.getElementById("siteHeader");
const menuToggle = document.getElementById("menuToggle");
const mobileMenuLinks = document.querySelectorAll("[data-menu-link]");
const navLinks = document.querySelectorAll(".nav-link, .mobile-nav-link");

function setMenu(open) {
  if (!body.classList.contains("nav-open") && !open) return;
  body.classList.toggle("nav-open", open);
  menuToggle.setAttribute("aria-expanded", String(open));
  menuToggle.setAttribute("aria-label", open ? "Close menu" : "Open menu");
}

menuToggle?.addEventListener("click", () => {
  setMenu(!body.classList.contains("nav-open"));
});

mobileMenuLinks.forEach((link) => {
  link.addEventListener("click", () => setMenu(false));
});

document.addEventListener("keydown", (event) => {
  if (event.key === "Escape") setMenu(false);
});

function syncHeader() {
  header?.classList.toggle("header-scrolled", window.scrollY > 12);
}
window.addEventListener("scroll", syncHeader, { passive: true });
syncHeader();

window.addEventListener("resize", () => {
  if (window.innerWidth >= 1024) setMenu(false);
});

// Scrollspy using IntersectionObserver (fixes header-offset active nav tracking)
const spySections = document.querySelectorAll("main section[id], footer[id]");
function setActiveLink(hash) {
  navLinks.forEach((link) => {
    link.classList.toggle("is-active", link.getAttribute("href") === hash);
  });
}

if ("IntersectionObserver" in window && spySections.length) {
  const spyObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          setActiveLink("#" + entry.target.id);
        }
      });
    },
    { rootMargin: "-35% 0px -55% 0px", threshold: 0 }
  );
  spySections.forEach((section) => spyObserver.observe(section));
} else {
  function syncActiveLink() {
    setActiveLink(window.location.hash || "#home");
  }
  window.addEventListener("hashchange", syncActiveLink);
  syncActiveLink();
}

// Hero carousel
const heroDataEl = document.getElementById("heroSlidesData");
const heroSlides = Array.from(document.querySelectorAll("[data-hero-slide]"));
const heroDots = Array.from(document.querySelectorAll("[data-hero-dot]"));
const heroEyebrow = document.querySelector("[data-hero-eyebrow]");
const heroTitle = document.querySelector("[data-hero-title]");
const heroText = document.querySelector("[data-hero-text]");
const heroPrev = document.querySelector("[data-hero-prev]");
const heroNext = document.querySelector("[data-hero-next]");
let heroActiveIndex = 0;
let heroTimer;

const heroContent = heroDataEl ? JSON.parse(heroDataEl.textContent) : [];

function showHeroSlide(index) {
  if (!heroSlides.length) return;
  heroActiveIndex = (index + heroSlides.length) % heroSlides.length;

  heroSlides.forEach((slide, slideIndex) => {
    slide.classList.toggle("is-active", slideIndex === heroActiveIndex);
  });
  heroDots.forEach((dot, dotIndex) => {
    dot.classList.toggle("is-active", dotIndex === heroActiveIndex);
  });

  const current = heroContent[heroActiveIndex];
  if (current) {
    [heroEyebrow, heroTitle, heroText].forEach((el) => el?.classList.add("hero-fade"));
    window.setTimeout(() => {
      if (heroEyebrow) heroEyebrow.textContent = current.eyebrow;
      if (heroTitle) heroTitle.textContent = current.title;
      if (heroText) heroText.textContent = current.text;
      [heroEyebrow, heroTitle, heroText].forEach((el) => el?.classList.remove("hero-fade"));
    }, 180);
  }
}

function startHeroCarousel() {
  window.clearInterval(heroTimer);
  heroTimer = window.setInterval(() => {
    showHeroSlide(heroActiveIndex + 1);
  }, 6500);
}

heroPrev?.addEventListener("click", () => {
  showHeroSlide(heroActiveIndex - 1);
  startHeroCarousel();
});
heroNext?.addEventListener("click", () => {
  showHeroSlide(heroActiveIndex + 1);
  startHeroCarousel();
});
heroDots.forEach((dot) => {
  dot.addEventListener("click", () => {
    showHeroSlide(Number(dot.dataset.heroDot));
    startHeroCarousel();
  });
});
if (heroSlides.length > 1) startHeroCarousel();

// Treatment filters
const treatmentTabs = Array.from(document.querySelectorAll("[data-treatment-filter]"));
const treatmentCards = Array.from(document.querySelectorAll("[data-treatment-card]"));

function filterTreatments(filter) {
  treatmentTabs.forEach((tab) => {
    const isActive = tab.dataset.treatmentFilter === filter;
    tab.classList.toggle("is-active", isActive);
    tab.setAttribute("aria-pressed", String(isActive));
  });
  treatmentCards.forEach((card) => {
    const shouldShow = filter === "all" || card.dataset.treatmentCard === filter;
    card.classList.toggle("is-hidden", !shouldShow);
  });
}
treatmentTabs.forEach((tab) => {
  tab.addEventListener("click", () => filterTreatments(tab.dataset.treatmentFilter));
});

// Reveal-on-scroll animation for cards/sections
const revealTargets = document.querySelectorAll(
  ".treatment-card, .package-card, .doctor-card, .room-card, .location-card, .welcome-feature-card"
);
if ("IntersectionObserver" in window && revealTargets.length) {
  const revealObserver = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          obs.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12 }
  );
  revealTargets.forEach((el, i) => {
    el.classList.add("reveal-item");
    el.style.transitionDelay = (i % 3) * 80 + "ms";
    revealObserver.observe(el);
  });
}
