<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DEVYA CEYLON | Ayurveda Centre</title>
  <meta name="description" content="DEVYA CEYLON Ayurveda Centre — consultant-led Ayurveda treatments, doctors, packages and accommodation.">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="assets/css/site.css">
</head>

<body class="bg-[var(--devya-white)] font-[Manrope] text-[var(--devya-ink)] antialiased">
  <header id="siteHeader" class="fixed inset-x-0 top-0 z-50 border-b border-[color:var(--devya-line)] bg-white/88 backdrop-blur-xl transition-all duration-300">
    <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-3 sm:px-6 lg:px-8">
      <a class="flex shrink-0 items-center gap-3" href="#home" aria-label="DEVYA CEYLON home">
        <span class="devya-logo-mark" aria-hidden="true">
          <img src="logo.png" alt="DEVYA CEYLON logo" class="h-full w-full object-contain" loading="eager">
        </span>
        <span class="leading-none">
          <span class="block whitespace-nowrap font-[Cormorant_Garamond] text-2xl font-bold tracking-wide text-[var(--devya-forest)]">DEVYA CEYLON</span>
          <span class="mt-1 block whitespace-nowrap text-[0.62rem] font-extrabold uppercase tracking-[.32em] text-[var(--devya-leaf)]">Ayurveda Centre</span>
        </span>
      </a>
      <nav id="desktop-nav" class="hidden flex-1 items-center justify-center lg:flex" aria-label="Primary navigation">
        <ul id="desktop-menu" class="flex items-center justify-center gap-4 xl:gap-6">
          <li><a class="nav-link inline-flex items-center gap-1.5 whitespace-nowrap text-[0.64rem] font-extrabold uppercase tracking-[.14em] text-[var(--devya-muted)] transition hover:text-[var(--devya-saffron)]" href="#home"><i class="fa-solid fa-house-chimney" aria-hidden="true"></i>Home</a></li>
          <li><a class="nav-link inline-flex items-center gap-1.5 whitespace-nowrap text-[0.64rem] font-extrabold uppercase tracking-[.14em] text-[var(--devya-muted)] transition hover:text-[var(--devya-saffron)]" href="#about-us"><i class="fa-solid fa-seedling" aria-hidden="true"></i>About Us</a></li>
          <li><a class="nav-link inline-flex items-center gap-1.5 whitespace-nowrap text-[0.64rem] font-extrabold uppercase tracking-[.14em] text-[var(--devya-muted)] transition hover:text-[var(--devya-saffron)]" href="#doctors"><i class="fa-solid fa-user-doctor" aria-hidden="true"></i>Doctors</a></li>
          <li><a class="nav-link inline-flex items-center gap-1.5 whitespace-nowrap text-[0.64rem] font-extrabold uppercase tracking-[.14em] text-[var(--devya-muted)] transition hover:text-[var(--devya-saffron)]" href="#our-treatments"><i class="fa-solid fa-spa" aria-hidden="true"></i>Our Treatments</a></li>
          <li><a class="nav-link inline-flex items-center gap-1.5 whitespace-nowrap text-[0.64rem] font-extrabold uppercase tracking-[.14em] text-[var(--devya-muted)] transition hover:text-[var(--devya-saffron)]" href="#packages"><i class="fa-solid fa-hand-holding-heart" aria-hidden="true"></i>Packages</a></li>
          <li><a class="nav-link inline-flex items-center gap-1.5 whitespace-nowrap text-[0.64rem] font-extrabold uppercase tracking-[.14em] text-[var(--devya-muted)] transition hover:text-[var(--devya-saffron)]" href="#accommodation"><i class="fa-solid fa-bed" aria-hidden="true"></i>Accommodation</a></li>
          <li><a class="nav-link inline-flex items-center gap-1.5 whitespace-nowrap text-[0.64rem] font-extrabold uppercase tracking-[.14em] text-[var(--devya-muted)] transition hover:text-[var(--devya-saffron)]" href="#other-locations"><i class="fa-solid fa-location-dot" aria-hidden="true"></i>Other Locations</a></li>
          <li><a class="nav-link inline-flex items-center gap-1.5 whitespace-nowrap text-[0.64rem] font-extrabold uppercase tracking-[.14em] text-[var(--devya-muted)] transition hover:text-[var(--devya-saffron)]" href="#contact-us"><i class="fa-solid fa-phone-volume" aria-hidden="true"></i>Contact Us</a></li>
        </ul>
      </nav>
      <div class="hidden shrink-0 items-center gap-2 2xl:flex">
        <a class="rounded-full border border-[color:var(--devya-line-strong)] px-4 py-2.5 text-xs font-extrabold uppercase tracking-[.14em] text-[var(--devya-forest)] transition hover:border-[var(--devya-gold)] hover:bg-[var(--devya-cream)]" href="tel:+94719059250"><i class="fa-solid fa-phone mr-2" aria-hidden="true"></i>Call</a>
        <a class="rounded-full bg-[var(--devya-gold)] px-5 py-2.5 text-xs font-extrabold uppercase tracking-[.14em] text-[var(--devya-forest)] shadow-[0_14px_32px_rgba(255,192,48,.28)] transition hover:bg-[var(--devya-saffron)] hover:text-white" href="#contact-us"><i class="fa-solid fa-calendar-check mr-2" aria-hidden="true"></i>Book Now</a>
      </div>
      <button id="menuToggle" class="grid h-11 w-11 place-items-center rounded-full border border-[color:var(--devya-line-strong)] bg-white text-[var(--devya-forest)] shadow-sm lg:hidden" type="button" aria-label="Open menu" aria-controls="mobileMenu" aria-expanded="false">
        <span class="menu-lines" aria-hidden="true"><span></span><span></span><span></span></span>
      </button>
    </div>
    <div id="mobileMenu" class="mobile-panel lg:hidden">
      <nav class="mx-auto grid max-w-lg gap-1 px-4 pb-5 pt-2" aria-label="Mobile navigation">
        <a class="mobile-nav-link" href="#home" data-menu-link><i class="fa-solid fa-house-chimney" aria-hidden="true"></i>Home</a>
        <a class="mobile-nav-link" href="#about-us" data-menu-link><i class="fa-solid fa-seedling" aria-hidden="true"></i>About Us</a>
        <a class="mobile-nav-link" href="#doctors" data-menu-link><i class="fa-solid fa-user-doctor" aria-hidden="true"></i>Doctors</a>
        <a class="mobile-nav-link" href="#our-treatments" data-menu-link><i class="fa-solid fa-spa" aria-hidden="true"></i>Our Treatments</a>
        <a class="mobile-nav-link" href="#packages" data-menu-link><i class="fa-solid fa-hand-holding-heart" aria-hidden="true"></i>Packages</a>
        <a class="mobile-nav-link" href="#accommodation" data-menu-link><i class="fa-solid fa-bed" aria-hidden="true"></i>Accommodation</a>
        <a class="mobile-nav-link" href="#other-locations" data-menu-link><i class="fa-solid fa-location-dot" aria-hidden="true"></i>Other Locations</a>
        <a class="mobile-nav-link" href="#contact-us" data-menu-link><i class="fa-solid fa-phone-volume" aria-hidden="true"></i>Contact Us</a>
        <div class="mt-3 grid grid-cols-2 gap-2">
          <a class="mobile-action secondary" href="tel:+94719059250" data-menu-link><i class="fa-solid fa-phone" aria-hidden="true"></i>Call</a>
          <a class="mobile-action primary" href="#contact-us" data-menu-link><i class="fa-solid fa-calendar-check" aria-hidden="true"></i>Book Now</a>
        </div>
      </nav>
    </div>
  </header>

  <main id="home" class="min-h-screen bg-[linear-gradient(180deg,#ffffff_0%,#fffaf0_54%,#ffffff_100%)] pt-24">
    <section class="hero-section relative overflow-hidden px-4 py-12 sm:px-6 lg:px-8 lg:py-18">
      <div class="mx-auto grid max-w-7xl items-center gap-10 lg:min-h-[calc(100vh-6rem)] lg:grid-cols-[1.02fr_.98fr]">
        <div class="hero-copy max-w-3xl">
          <p class="inline-flex items-center rounded-full border border-[color:var(--devya-line-strong)] bg-white/80 px-4 py-2 text-xs font-extrabold uppercase tracking-[.22em] text-[var(--devya-saffron)] shadow-sm"><i class="fa-solid fa-spa mr-2" aria-hidden="true"></i><span data-hero-eyebrow>Harmony of Body, Mind &amp; Spirit</span></p>
          <h1 class="mt-6 font-[Cormorant_Garamond] text-5xl font-bold leading-[.92] tracking-tight text-[var(--devya-forest)] sm:text-6xl lg:text-7xl" data-hero-title>Ayurveda care for a calmer everyday rhythm.</h1>
          <p class="mt-6 max-w-2xl text-base leading-8 text-[color:var(--devya-muted)] sm:text-lg" data-hero-text>DEVYA CEYLON brings consultant-led Ayurveda, wellness therapies and easy patient channeling into one calm digital experience.</p>
          <div class="mt-8 flex flex-col gap-3 sm:flex-row">
            <a class="inline-flex items-center justify-center rounded-full bg-[var(--devya-gold)] px-6 py-4 text-sm font-extrabold uppercase tracking-[.16em] text-[var(--devya-forest)] shadow-[0_18px_38px_rgba(255,192,48,.30)] transition hover:-translate-y-0.5 hover:bg-[var(--devya-saffron)] hover:text-white" href="#contact-us"><i class="fa-solid fa-calendar-check mr-2" aria-hidden="true"></i>Book Appointment</a>
            <a class="inline-flex items-center justify-center rounded-full border border-[color:var(--devya-line-strong)] bg-white/80 px-6 py-4 text-sm font-extrabold uppercase tracking-[.16em] text-[var(--devya-forest)] transition hover:-translate-y-0.5 hover:border-[var(--devya-gold)] hover:bg-[var(--devya-cream)]" href="#our-treatments"><i class="fa-solid fa-leaf mr-2" aria-hidden="true"></i>View Treatments</a>
          </div>
          <div class="mt-10 grid max-w-2xl grid-cols-3 gap-3">
            <div class="hero-stat rounded-2xl border border-[color:var(--devya-line)] bg-white/76 p-4 shadow-sm backdrop-blur">
              <i class="fa-regular fa-clock hero-stat-icon" aria-hidden="true"></i>
              <strong class="block font-[Cormorant_Garamond] text-3xl font-bold leading-none text-[var(--devya-forest)]">24/7</strong>
              <span class="mt-2 block text-[0.64rem] font-extrabold uppercase tracking-[.16em] text-[var(--devya-muted)]">Online Requests</span>
            </div>
            <div class="hero-stat rounded-2xl border border-[color:var(--devya-line)] bg-white/76 p-4 shadow-sm backdrop-blur">
              <i class="fa-solid fa-language hero-stat-icon" aria-hidden="true"></i>
              <strong class="block font-[Cormorant_Garamond] text-3xl font-bold leading-none text-[var(--devya-forest)]">03</strong>
              <span class="mt-2 block text-[0.64rem] font-extrabold uppercase tracking-[.16em] text-[var(--devya-muted)]">Languages</span>
            </div>
            <div class="hero-stat rounded-2xl border border-[color:var(--devya-line)] bg-white/76 p-4 shadow-sm backdrop-blur">
              <i class="fa-solid fa-comments hero-stat-icon" aria-hidden="true"></i>
              <strong class="block font-[Cormorant_Garamond] text-3xl font-bold leading-none text-[var(--devya-forest)]">SMS</strong>
              <span class="mt-2 block text-[0.64rem] font-extrabold uppercase tracking-[.16em] text-[var(--devya-muted)]">Confirmations</span>
            </div>
          </div>
        </div>
        <div class="hero-visual relative">
          <div class="hero-image-shell" aria-label="Ayurveda care image carousel">
            <img class="hero-slide is-active" src="https://images.pexels.com/photos/3757952/pexels-photo-3757952.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1800" alt="Ayurveda massage therapy" loading="eager" fetchpriority="high" data-hero-slide="0">
            <img class="hero-slide " src="https://images.pexels.com/photos/3757942/pexels-photo-3757942.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1800" alt="Calm wellness treatment room" loading="lazy" data-hero-slide="1">
            <img class="hero-slide " src="https://images.pexels.com/photos/6621338/pexels-photo-6621338.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1800" alt="Ayurveda herbal oil and spa care" loading="lazy" data-hero-slide="2">
          </div>
          <div class="hero-floating-card">
            <span class="block text-[0.62rem] font-extrabold uppercase tracking-[.2em] text-[var(--devya-flame)]"><i class="fa-solid fa-calendar-day mr-2" aria-hidden="true"></i>Today</span>
            <strong class="mt-2 block font-[Cormorant_Garamond] text-3xl font-bold leading-none text-[var(--devya-forest)]">Consultation slots open</strong>
            <span class="mt-3 block text-sm leading-6 text-[var(--devya-muted)]">Send a request and receive staff confirmation.</span>
          </div>
          <div class="hero-carousel-controls" aria-label="Hero carousel controls">
            <button class="hero-arrow" type="button" aria-label="Previous hero slide" data-hero-prev><i class="fa-solid fa-chevron-left" aria-hidden="true"></i></button>
            <div class="hero-dots">
              <button class="hero-dot is-active" type="button" aria-label="Show hero slide 1" data-hero-dot="0"></button>
              <button class="hero-dot " type="button" aria-label="Show hero slide 2" data-hero-dot="1"></button>
              <button class="hero-dot " type="button" aria-label="Show hero slide 3" data-hero-dot="2"></button>
            </div>
            <button class="hero-arrow" type="button" aria-label="Next hero slide" data-hero-next><i class="fa-solid fa-chevron-right" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
    </section>

    <script type="application/json" id="heroSlidesData">
      [{
        "eyebrow": "Harmony of Body, Mind & Spirit",
        "title": "Ayurveda care for a calmer everyday rhythm.",
        "text": "DEVYA CEYLON brings consultant-led Ayurveda, wellness therapies and easy patient channeling into one calm digital experience."
      }, {
        "eyebrow": "Traditional Healing, Modern Comfort",
        "title": "Begin your wellness journey with trusted care.",
        "text": "Choose consultations, therapies and treatment packages through a refined patient-friendly experience."
      }, {
        "eyebrow": "Natural Balance & Gentle Guidance",
        "title": "Personalized therapies for body and mind.",
        "text": "A warm Ayurveda care flow designed for appointments, follow-ups and patient confidence."
      }]
    </script>

    <section id="about-us" class="welcome-section scroll-mt-28 px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
      <div class="mx-auto grid max-w-7xl items-center gap-10 lg:grid-cols-[.95fr_1.05fr]">
        <div class="welcome-media">
          <div class="welcome-image-card"><img src="https://images.pexels.com/photos/3757952/pexels-photo-3757952.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1400" alt="Ayurveda treatment prepared in a calm wellness room" loading="lazy"></div>
          <div class="welcome-note">
            <span class="welcome-note-mark" aria-hidden="true"><i class="fa-solid fa-spa"></i></span>
            <div><strong>Harmony care promise</strong><span>Body, mind and spirit focused Ayurveda care.</span></div>
          </div>
        </div>
        <div>
          <p class="text-xs font-extrabold uppercase tracking-[.24em] text-[var(--devya-saffron)]">Welcome to DEVYA CEYLON</p>
          <h2 class="mt-4 max-w-3xl font-[Cormorant_Garamond] text-4xl font-bold leading-[.98] text-[var(--devya-forest)] sm:text-5xl lg:text-6xl">A light, caring Ayurveda experience designed around your wellness journey.</h2>
          <p class="mt-6 max-w-2xl text-base leading-8 text-[var(--devya-muted)] sm:text-lg">We combine traditional Ayurveda wisdom with a calm, modern patient flow. From the first appointment request to treatment guidance, DEVYA CEYLON keeps the experience warm, clear and easy to trust.</p>
          <div class="mt-8 grid gap-4 sm:grid-cols-3">
            <article class="welcome-feature-card">
              <span class="welcome-feature-icon" aria-hidden="true"><i class="fa-solid fa-leaf"></i></span>
              <h3>Authentic Ayurveda</h3>
              <p>Rooted in Sri Lankan Ayurveda traditions with careful consultation-led guidance.</p>
            </article>
            <article class="welcome-feature-card">
              <span class="welcome-feature-icon" aria-hidden="true"><i class="fa-solid fa-hand-holding-heart"></i></span>
              <h3>Patient Comfort</h3>
              <p>A calm care journey from first inquiry to treatment follow-up and recovery support.</p>
            </article>
            <article class="welcome-feature-card">
              <span class="welcome-feature-icon" aria-hidden="true"><i class="fa-solid fa-calendar-check"></i></span>
              <h3>Easy Channeling</h3>
              <p>Quick appointment requests, staff confirmation and clear treatment information.</p>
            </article>
          </div>
          <div class="welcome-flow mt-8">
            <div class="welcome-flow-item"><span>01</span>
              <p>Consultation and body balance review</p>
            </div>
            <div class="welcome-flow-item"><span>02</span>
              <p>Personalized therapy recommendation</p>
            </div>
            <div class="welcome-flow-item"><span>03</span>
              <p>Follow-up support for lasting wellness</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="doctors" class="doctors-section scroll-mt-28 px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="text-center max-w-3xl mx-auto">
          <p class="text-xs font-extrabold uppercase tracking-[.24em] text-[var(--devya-saffron)]">Our Doctors</p>
          <h2 class="mt-4 font-[Cormorant_Garamond] text-4xl font-bold leading-[.98] text-[var(--devya-forest)] sm:text-5xl lg:text-6xl">Consultant Ayurveda physicians guiding every treatment.</h2>
          <p class="mt-6 text-base leading-8 text-[var(--devya-muted)] sm:text-lg">Every therapy and package begins with a consultation from an experienced Ayurveda physician, ensuring the care plan fits your condition.</p>
        </div>
        <div class="doctor-grid mt-10">
          <article class="doctor-card">
            <div class="doctor-image"><img src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=600" alt="Senior Ayurveda physician portrait" loading="lazy"></div>
            <div class="doctor-card-body">
              <h3>Dr. K. Wijesuriya</h3>
              <span class="doctor-role">Senior Ayurveda Physician</span>
              <span class="doctor-exp"><i class="fa-regular fa-clock" aria-hidden="true"></i>18+ years experience</span>
              <p>Panchakarma, chronic pain, detox programs</p>
              <a class="doctor-action" href="#contact-us"><i class="fa-solid fa-calendar-check mr-2" aria-hidden="true"></i>Book Consultation</a>
            </div>
          </article>
          <article class="doctor-card">
            <div class="doctor-image"><img src="https://images.pexels.com/photos/5327585/pexels-photo-5327585.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=600" alt="Ayurveda consultant portrait" loading="lazy"></div>
            <div class="doctor-card-body">
              <h3>Dr. N. Perera</h3>
              <span class="doctor-role">Ayurveda Consultant</span>
              <span class="doctor-exp"><i class="fa-regular fa-clock" aria-hidden="true"></i>12 years experience</span>
              <p>Stress, sleep disorders, women&#x27;s wellness</p>
              <a class="doctor-action" href="#contact-us"><i class="fa-solid fa-calendar-check mr-2" aria-hidden="true"></i>Book Consultation</a>
            </div>
          </article>
          <article class="doctor-card">
            <div class="doctor-image"><img src="https://images.pexels.com/photos/5215012/pexels-photo-5215012.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=600" alt="Panchakarma specialist portrait" loading="lazy"></div>
            <div class="doctor-card-body">
              <h3>Dr. S. Fernando</h3>
              <span class="doctor-role">Panchakarma Specialist</span>
              <span class="doctor-exp"><i class="fa-regular fa-clock" aria-hidden="true"></i>10 years experience</span>
              <p>Detox therapy, joint and muscle care</p>
              <a class="doctor-action" href="#contact-us"><i class="fa-solid fa-calendar-check mr-2" aria-hidden="true"></i>Book Consultation</a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section id="our-treatments" class="treatments-section scroll-mt-28 px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="grid gap-8 lg:grid-cols-[.9fr_1.1fr] lg:items-end">
          <div>
            <p class="text-xs font-extrabold uppercase tracking-[.24em] text-[var(--devya-saffron)]">Our Treatments</p>
            <h2 class="mt-4 max-w-3xl font-[Cormorant_Garamond] text-4xl font-bold leading-[.98] text-[var(--devya-forest)] sm:text-5xl lg:text-6xl">Traditional Ayurveda treatments shaped for real customer needs.</h2>
          </div>
          <div>
            <p class="max-w-2xl text-base leading-8 text-[var(--devya-muted)] sm:text-lg">Explore the main treatment paths before booking. Every treatment can be adjusted after doctor consultation, so the final care plan feels safe, practical and personal.</p>
            <div class="treatment-tabs mt-5" aria-label="Treatment filters">
              <button class="treatment-tab is-active" type="button" aria-pressed="true" data-treatment-filter="all"><i class="fa-solid fa-seedling" aria-hidden="true"></i>All</button>
              <button class="treatment-tab " type="button" aria-pressed="false" data-treatment-filter="therapy"><i class="fa-solid fa-spa" aria-hidden="true"></i>Therapy</button>
              <button class="treatment-tab " type="button" aria-pressed="false" data-treatment-filter="detox"><i class="fa-solid fa-mortar-pestle" aria-hidden="true"></i>Detox</button>
              <button class="treatment-tab " type="button" aria-pressed="false" data-treatment-filter="relief"><i class="fa-solid fa-hand-holding-medical" aria-hidden="true"></i>Relief</button>
              <button class="treatment-tab " type="button" aria-pressed="false" data-treatment-filter="beauty"><i class="fa-solid fa-wand-magic-sparkles" aria-hidden="true"></i>Beauty</button>
            </div>
          </div>
        </div>
        <div class="treatment-grid mt-10">
          <article class="treatment-card" data-treatment-card="therapy">
            <div class="treatment-image">
              <img src="https://images.pexels.com/photos/3757952/pexels-photo-3757952.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=900" alt="Ayurveda oil massage therapy" loading="lazy">
              <span><i class="fa-solid fa-spa" aria-hidden="true"></i>Body Therapy</span>
            </div>
            <div class="treatment-card-body">
              <h3>Abhyanga</h3>
              <p>Warm herbal oil body therapy to support relaxation, circulation and daily body comfort.</p>
              <div class="treatment-meta">
                <span><i class="fa-regular fa-clock" aria-hidden="true"></i>60 - 90 min</span>
                <span><i class="fa-solid fa-heart-pulse" aria-hidden="true"></i>Fatigue, stiffness, stress</span>
              </div>
            </div>
          </article>
          <article class="treatment-card" data-treatment-card="therapy">
            <div class="treatment-image">
              <img src="https://images.pexels.com/photos/3757942/pexels-photo-3757942.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=900" alt="Calm Ayurveda therapy room" loading="lazy">
              <span><i class="fa-solid fa-water" aria-hidden="true"></i>Mind Calm</span>
            </div>
            <div class="treatment-card-body">
              <h3>Shirodhara</h3>
              <p>A calming stream of warm herbal oil focused on mental rest, sleep support and nervous balance.</p>
              <div class="treatment-meta">
                <span><i class="fa-regular fa-clock" aria-hidden="true"></i>45 - 60 min</span>
                <span><i class="fa-solid fa-heart-pulse" aria-hidden="true"></i>Sleep, anxiety, burnout</span>
              </div>
            </div>
          </article>
          <article class="treatment-card" data-treatment-card="detox">
            <div class="treatment-image">
              <img src="https://images.pexels.com/photos/6621338/pexels-photo-6621338.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=900" alt="Herbal Ayurveda oil and spa setup" loading="lazy">
              <span><i class="fa-solid fa-mortar-pestle" aria-hidden="true"></i>Deep Cleanse</span>
            </div>
            <div class="treatment-card-body">
              <h3>Panchakarma</h3>
              <p>Consultation-led cleansing care designed to rebalance the body with safe Ayurveda guidance.</p>
              <div class="treatment-meta">
                <span><i class="fa-regular fa-clock" aria-hidden="true"></i>3 - 14 days</span>
                <span><i class="fa-solid fa-heart-pulse" aria-hidden="true"></i>Detox, digestion, renewal</span>
              </div>
            </div>
          </article>
          <article class="treatment-card" data-treatment-card="relief">
            <div class="treatment-image">
              <img src="https://images.pexels.com/photos/3757952/pexels-photo-3757952.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=900" alt="Ayurveda body therapy for pain relief" loading="lazy">
              <span><i class="fa-solid fa-hand-holding-medical" aria-hidden="true"></i>Pain Care</span>
            </div>
            <div class="treatment-card-body">
              <h3>Kati Basti</h3>
              <p>Localized warm oil therapy for lower back comfort, muscle relaxation and movement support.</p>
              <div class="treatment-meta">
                <span><i class="fa-regular fa-clock" aria-hidden="true"></i>30 - 45 min</span>
                <span><i class="fa-solid fa-heart-pulse" aria-hidden="true"></i>Back pain, tension</span>
              </div>
            </div>
          </article>
          <article class="treatment-card" data-treatment-card="detox">
            <div class="treatment-image">
              <img src="https://images.pexels.com/photos/6621338/pexels-photo-6621338.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=900" alt="Ayurveda herbs and oil for steam therapy" loading="lazy">
              <span><i class="fa-solid fa-leaf" aria-hidden="true"></i>Herbal Steam</span>
            </div>
            <div class="treatment-card-body">
              <h3>Swedana</h3>
              <p>Gentle herbal steam support after oil therapy to encourage lightness and natural cleansing.</p>
              <div class="treatment-meta">
                <span><i class="fa-regular fa-clock" aria-hidden="true"></i>20 - 30 min</span>
                <span><i class="fa-solid fa-heart-pulse" aria-hidden="true"></i>Toxins, heaviness</span>
              </div>
            </div>
          </article>
          <article class="treatment-card" data-treatment-card="beauty">
            <div class="treatment-image">
              <img src="https://images.pexels.com/photos/3757942/pexels-photo-3757942.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=900" alt="Ayurveda wellness room for skin and hair care" loading="lazy">
              <span><i class="fa-solid fa-wand-magic-sparkles" aria-hidden="true"></i>Glow Care</span>
            </div>
            <div class="treatment-card-body">
              <h3>Skin &amp; Hair Ritual</h3>
              <p>Herbal beauty care for natural glow, scalp comfort and a refreshed wellness look.</p>
              <div class="treatment-meta">
                <span><i class="fa-regular fa-clock" aria-hidden="true"></i>45 - 75 min</span>
                <span><i class="fa-solid fa-heart-pulse" aria-hidden="true"></i>Skin glow, hair care</span>
              </div>
            </div>
          </article>
        </div>
        <div class="treatment-guidance mt-8">
          <div><span>Not sure what to choose?</span><strong>Start with consultation. Our team can guide the treatment path after understanding your condition.</strong></div>
          <a href="#contact-us"><i class="fa-solid fa-calendar-check mr-2" aria-hidden="true"></i>Book Consultation</a>
        </div>
      </div>
    </section>

    <section id="packages" class="packages-section scroll-mt-28 px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="grid gap-8 lg:grid-cols-[.9fr_1.1fr] lg:items-end">
          <div>
            <p class="text-xs font-extrabold uppercase tracking-[.24em] text-[var(--devya-saffron)]">Customer Packages</p>
            <h2 class="mt-4 max-w-3xl font-[Cormorant_Garamond] text-4xl font-bold leading-[.98] text-[var(--devya-forest)] sm:text-5xl lg:text-6xl">Choose a wellness package that fits your time, body and comfort.</h2>
          </div>
          <div>
            <p class="max-w-2xl text-base leading-8 text-[var(--devya-muted)] sm:text-lg">These packages are designed as customer-friendly starting points. The final care plan can be adjusted after consultation, so each visitor receives the right Ayurveda guidance instead of a one-size-fits-all routine.</p>
            <div class="package-highlights mt-5">
              <span><i class="fa-solid fa-user-doctor" aria-hidden="true"></i>Doctor-guided plans</span>
              <span><i class="fa-solid fa-calendar-days" aria-hidden="true"></i>Flexible duration</span>
              <span><i class="fa-solid fa-headset" aria-hidden="true"></i>Easy booking support</span>
            </div>
          </div>
        </div>
        <div class="package-grid mt-10">
          <article class="package-card ">
            <div class="package-card-top">
              <span class="package-badge"><i class="fa-solid fa-seedling" aria-hidden="true"></i>Starter Care</span>
              <span class="package-duration"><i class="fa-regular fa-calendar" aria-hidden="true"></i>1 Day</span>
            </div>
            <h3>Essential Wellness</h3>
            <p>A simple entry package for first-time visitors who need a calm consultation and clear care direction.</p>
            <ul class="package-list" aria-label="Essential Wellness includes">
              <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i>Ayurveda doctor consultation</li>
              <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i>Body balance review</li>
              <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i>Personal treatment guidance</li>
            </ul>
            <a class="package-action" href="#contact-us"><i class="fa-solid fa-calendar-check mr-2" aria-hidden="true"></i>Request Starter Plan</a>
          </article>
          <article class="package-card is-featured">
            <div class="package-card-top">
              <span class="package-badge"><i class="fa-solid fa-spa" aria-hidden="true"></i>Most Selected</span>
              <span class="package-duration"><i class="fa-regular fa-calendar" aria-hidden="true"></i>3 Days</span>
            </div>
            <h3>Stress Relief &amp; Relax</h3>
            <p>A soothing short-stay package focused on stress relief, sleep support and everyday body comfort.</p>
            <ul class="package-list" aria-label="Stress Relief &amp; Relax includes">
              <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i>Head and body therapy</li>
              <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i>Herbal steam recommendation</li>
              <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i>Relaxation care schedule</li>
            </ul>
            <a class="package-action" href="#contact-us"><i class="fa-solid fa-calendar-check mr-2" aria-hidden="true"></i>Book Relax Package</a>
          </article>
          <article class="package-card ">
            <div class="package-card-top">
              <span class="package-badge"><i class="fa-solid fa-mortar-pestle" aria-hidden="true"></i>Deep Balance</span>
              <span class="package-duration"><i class="fa-regular fa-calendar" aria-hidden="true"></i>7 Days</span>
            </div>
            <h3>Detox &amp; Rebalance</h3>
            <p>A guided wellness package for customers who want gentle cleansing and a more balanced routine.</p>
            <ul class="package-list" aria-label="Detox &amp; Rebalance includes">
              <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i>Consultation-led detox plan</li>
              <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i>Daily therapy guidance</li>
              <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i>Follow-up wellness advice</li>
            </ul>
            <a class="package-action" href="#contact-us"><i class="fa-solid fa-calendar-check mr-2" aria-hidden="true"></i>Plan Detox Care</a>
          </article>
          <article class="package-card ">
            <div class="package-card-top">
              <span class="package-badge"><i class="fa-solid fa-hand-holding-heart" aria-hidden="true"></i>Premium Retreat</span>
              <span class="package-duration"><i class="fa-regular fa-calendar" aria-hidden="true"></i>14 Days</span>
            </div>
            <h3>Rejuvenation Journey</h3>
            <p>A complete wellness journey for long-stay customers seeking deeper rest, guidance and renewal.</p>
            <ul class="package-list" aria-label="Rejuvenation Journey includes">
              <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i>Personalized therapy schedule</li>
              <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i>Diet and lifestyle guidance</li>
              <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i>Progress review support</li>
            </ul>
            <a class="package-action" href="#contact-us"><i class="fa-solid fa-calendar-check mr-2" aria-hidden="true"></i>Start Rejuvenation</a>
          </article>
        </div>
        <div class="package-consult mt-8">
          <div><span>Need a custom customer package?</span><strong>Tell us your health goal and available days. We will guide the next step.</strong></div>
          <a href="#contact-us"><i class="fa-solid fa-headset mr-2" aria-hidden="true"></i>Ask for Guidance</a>
        </div>
      </div>
    </section>

    <section id="accommodation" class="accommodation-section scroll-mt-28 px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="text-center max-w-3xl mx-auto">
          <p class="text-xs font-extrabold uppercase tracking-[.24em] text-[var(--devya-saffron)]">Accommodation</p>
          <h2 class="mt-4 font-[Cormorant_Garamond] text-4xl font-bold leading-[.98] text-[var(--devya-forest)] sm:text-5xl lg:text-6xl">Comfortable stays for longer wellness journeys.</h2>
          <p class="mt-6 text-base leading-8 text-[var(--devya-muted)] sm:text-lg">For multi-day and multi-week packages, we offer calm, restful stays on-site so recovery continues beyond the treatment room.</p>
        </div>
        <div class="room-grid mt-10">
          <article class="room-card">
            <div class="room-image"><img src="https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=900" alt="Garden view guest room" loading="lazy"><span><i class="fa-solid fa-bed" aria-hidden="true"></i></span></div>
            <div class="room-card-body">
              <h3>Garden View Room</h3>
              <p>A quiet single room facing the herbal garden, suited for short consultation stays.</p>
              <ul class="room-features">
                <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i>Ensuite bathroom</li>
                <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i>Garden view</li>
                <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i>Daily housekeeping</li>
              </ul>
            </div>
          </article>
          <article class="room-card">
            <div class="room-image"><img src="https://images.pexels.com/photos/271643/pexels-photo-271643.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=900" alt="Wellness suite interior" loading="lazy"><span><i class="fa-solid fa-hotel" aria-hidden="true"></i></span></div>
            <div class="room-card-body">
              <h3>Wellness Suite</h3>
              <p>A spacious suite for longer treatment programs with a private relaxation corner.</p>
              <ul class="room-features">
                <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i>Private balcony</li>
                <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i>Relaxation seating</li>
                <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i>In-room therapy option</li>
              </ul>
            </div>
          </article>
          <article class="room-card">
            <div class="room-image"><img src="https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=900" alt="Family retreat villa" loading="lazy"><span><i class="fa-solid fa-house" aria-hidden="true"></i></span></div>
            <div class="room-card-body">
              <h3>Family Retreat Villa</h3>
              <p>A private villa option for families or groups joining longer rejuvenation packages.</p>
              <ul class="room-features">
                <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i>Multiple bedrooms</li>
                <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i>Shared living space</li>
                <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i>Dedicated care coordinator</li>
              </ul>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section id="other-locations" class="locations-section scroll-mt-28 px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="text-center max-w-3xl mx-auto">
          <p class="text-xs font-extrabold uppercase tracking-[.24em] text-[var(--devya-saffron)]">Other Locations</p>
          <h2 class="mt-4 font-[Cormorant_Garamond] text-4xl font-bold leading-[.98] text-[var(--devya-forest)] sm:text-5xl lg:text-6xl">DEVYA CEYLON care, closer to you.</h2>
        </div>
        <div class="location-grid mt-10">
          <article class="location-card">
            <span class="location-icon" aria-hidden="true"><i class="fa-solid fa-location-dot"></i></span>
            <h3>Kandy</h3>
            <p>Hill Country Wellness Branch, Kandy</p>
            <a href="tel:0812200000"><i class="fa-solid fa-phone mr-2" aria-hidden="true"></i>081 220 0000</a>
          </article>
          <article class="location-card">
            <span class="location-icon" aria-hidden="true"><i class="fa-solid fa-location-dot"></i></span>
            <h3>Galle</h3>
            <p>Southern Coast Ayurveda Branch, Galle</p>
            <a href="tel:0912200000"><i class="fa-solid fa-phone mr-2" aria-hidden="true"></i>091 220 0000</a>
          </article>
          <article class="location-card">
            <span class="location-icon" aria-hidden="true"><i class="fa-solid fa-location-dot"></i></span>
            <h3>Negombo</h3>
            <p>Coastal Retreat Branch, Negombo</p>
            <a href="tel:0312200000"><i class="fa-solid fa-phone mr-2" aria-hidden="true"></i>031 220 0000</a>
          </article>
        </div>
      </div>
    </section>
  </main>

  <footer id="contact-us" class="site-footer scroll-mt-28 px-4 pt-16 sm:px-6 lg:px-8 lg:pt-20">
    <div class="mx-auto max-w-7xl">
      <div class="footer-top">
        <div class="footer-brand-panel">
            <a class="flex shrink-0 items-center gap-3" href="#home" aria-label="DEVYA CEYLON home">
        <span class="devya-logo-mark" aria-hidden="true">
          <img src="logo.png" alt="DEVYA CEYLON logo" class="h-full w-full object-contain" loading="eager">
        </span>
        <span class="leading-none">
          <span class="block whitespace-nowrap font-[Cormorant_Garamond] text-2xl font-bold tracking-wide text-[var(--devya-forest)]">DEVYA CEYLON</span>
          <span class="mt-1 block whitespace-nowrap text-[0.62rem] font-extrabold uppercase tracking-[.32em] text-[var(--devya-leaf)]">Ayurveda Centre</span>
        </span>
      </a>
          <p>A calm Ayurveda digital experience for consultations, treatments, packages and customer guidance in one easy flow.</p>
          <div class="footer-actions">
            <a href="tel:+94719059250"><i class="fa-solid fa-phone" aria-hidden="true"></i>Call Now</a>
            <a href="https://wa.me/94719059250"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i>WhatsApp</a>
          </div>
        </div>
        <div class="footer-link-panel">
          <div class="footer-column">
            <h2>Explore</h2>
            <nav aria-label="Footer navigation">
              <a href="#home"><i class="fa-solid fa-house-chimney" aria-hidden="true"></i>Home</a>
              <a href="#about-us"><i class="fa-solid fa-seedling" aria-hidden="true"></i>About Us</a>
              <a href="#doctors"><i class="fa-solid fa-user-doctor" aria-hidden="true"></i>Doctors</a>
              <a href="#our-treatments"><i class="fa-solid fa-spa" aria-hidden="true"></i>Our Treatments</a>
              <a href="#packages"><i class="fa-solid fa-hand-holding-heart" aria-hidden="true"></i>Packages</a>
              <a href="#accommodation"><i class="fa-solid fa-bed" aria-hidden="true"></i>Accommodation</a>
              <a href="#other-locations"><i class="fa-solid fa-location-dot" aria-hidden="true"></i>Other Locations</a>
              <a href="#contact-us"><i class="fa-solid fa-phone-volume" aria-hidden="true"></i>Contact Us</a>
            </nav>
          </div>
          <div class="footer-column">
            <h2>Care</h2>
            <nav aria-label="Footer care links">
              <a href="#our-treatments"><i class="fa-solid fa-spa" aria-hidden="true"></i>Treatments</a>
              <a href="#packages"><i class="fa-solid fa-hand-holding-heart" aria-hidden="true"></i>Customer Packages</a>
              <a href="#doctors"><i class="fa-solid fa-user-doctor" aria-hidden="true"></i>Doctors</a>
              <a href="#accommodation"><i class="fa-solid fa-bed" aria-hidden="true"></i>Accommodation</a>
            </nav>
          </div>
          <div class="footer-column footer-contact-column">
            <h2>Contact</h2>
            <a class="footer-contact-card" href="tel:+94719059250"><span><i class="fa-solid fa-phone-volume" aria-hidden="true"></i>Call Us</span><strong>071 905 9250</strong></a>
            <a class="footer-contact-card" href="https://wa.me/94719059250"><span><i class="fa-brands fa-whatsapp" aria-hidden="true"></i>WhatsApp</span><strong>Message for booking</strong></a>
            <a class="footer-contact-card" href="#contact-us"><span><i class="fa-solid fa-calendar-check" aria-hidden="true"></i>Appointments</span><strong>Online request support</strong></a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <span>&copy; 2026 DEVYA CEYLON. All rights reserved.</span>
        <span>Harmony of body, mind &amp; spirit.</span>
      </div>
    </div>
  </footer>

  <script src="assets/js/site.js"></script>
</body>

</html>