<?php
$brand = [
  'name' => 'DEVYA CEYLON',
  'subtitle' => 'Ayurveda Centre',
  'phone' => '071 905 9250',
  'phone_href' => '+94719059250',
  'whatsapp' => '94719059250',
];

$navItems = [
  ['label' => 'Home', 'href' => 'index.php#home', 'icon' => 'fa-solid fa-house-chimney'],
  ['label' => 'About Us', 'href' => 'about-us.php', 'icon' => 'fa-solid fa-seedling'],
  ['label' => 'Doctors', 'href' => 'index.php#doctors', 'icon' => 'fa-solid fa-user-doctor'],
  ['label' => 'Our Treatments', 'href' => 'index.php#our-treatments', 'icon' => 'fa-solid fa-spa'],
  ['label' => 'Packages', 'href' => 'index.php#packages', 'icon' => 'fa-solid fa-hand-holding-heart'],
  ['label' => 'Accommodation', 'href' => 'index.php#accommodation', 'icon' => 'fa-solid fa-bed'],
  ['label' => 'Other Locations', 'href' => 'index.php#other-locations', 'icon' => 'fa-solid fa-location-dot'],
  ['label' => 'Contact Us', 'href' => 'index.php#contact-us', 'icon' => 'fa-solid fa-phone-volume'],
];

$aboutHero = [
  'eyebrow' => 'Our Story',
  'title' => 'Ayurveda wisdom, cared for and carried forward.',
  'text' => 'DEVYA CEYLON was founded to bring authentic, consultant-led Ayurveda to every patient who wants a calmer, more balanced life.',
  'image' => 'https://images.pexels.com/photos/6621336/pexels-photo-6621336.jpeg?auto=compress&cs=tinysrgb&w=1600',
  'alt' => 'Ayurveda herbs and calm wellness setting',
];

$aboutStats = [
  ['icon' => 'fa-solid fa-user-doctor', 'value' => '05+', 'label' => 'Consultant Physicians'],
  ['icon' => 'fa-solid fa-users', 'value' => '3,500+', 'label' => 'Patients Guided'],
  ['icon' => 'fa-solid fa-calendar-days', 'value' => '12+', 'label' => 'Years of Service'],
  ['icon' => 'fa-solid fa-earth-asia', 'value' => '04', 'label' => 'Centres in Sri Lanka'],
];

$aboutStory = [
  'label' => 'How We Began',
  'title' => 'A family tradition grown into a trusted Ayurveda centre.',
  'paragraphs' => [
    'DEVYA CEYLON started as a small family practice rooted in generations of Sri Lankan Ayurveda knowledge. What began as home consultations grew into a dedicated centre built around one simple idea: healing should feel calm, honest and personal.',
    'Today, our physicians combine traditional diagnosis methods with a modern, patient-friendly experience — from the first online appointment request to follow-up care after treatment ends.',
  ],
  'image' => 'https://images.pexels.com/photos/3820373/pexels-photo-3820373.jpeg?auto=compress&cs=tinysrgb&w=1200',
  'alt' => 'Traditional Ayurveda herbs and preparation',
];

$missionVision = [
  [
    'icon' => 'fa-solid fa-bullseye',
    'title' => 'Our Mission',
    'text' => 'To make authentic, consultation-led Ayurveda accessible, safe and easy to trust for every patient who walks through our doors.',
  ],
  [
    'icon' => 'fa-solid fa-eye',
    'title' => 'Our Vision',
    'text' => 'To be Sri Lanka\'s most trusted Ayurveda care network, known for genuine healing and a warm, modern patient experience.',
  ],
];

$coreValues = [
  ['icon' => 'fa-solid fa-leaf', 'title' => 'Authenticity', 'text' => 'Every treatment follows traditional Ayurveda principles guided by qualified physicians.'],
  ['icon' => 'fa-solid fa-hand-holding-heart', 'title' => 'Compassion', 'text' => 'We treat every patient with patience, respect and genuine care for their wellbeing.'],
  ['icon' => 'fa-solid fa-shield-heart', 'title' => 'Safety First', 'text' => 'Consultation-led plans ensure every therapy is suitable and safe for the individual.'],
  ['icon' => 'fa-solid fa-people-group', 'title' => 'Community', 'text' => 'We build long-term relationships with patients through honest, ongoing wellness support.'],
];

$whyChoose = [
  'Consultant-led treatment plans, never one-size-fits-all',
  'Experienced physicians with decades of combined practice',
  'Calm, hygienic treatment rooms and comfortable stay options',
  'Transparent pricing with clear package inclusions',
  'Easy online appointment requests with fast confirmation',
  'Multi-language support for local and international patients',
];

$teamPreview = [
  ['name' => 'Dr. K. Wijesuriya', 'role' => 'Senior Ayurveda Physician', 'image' => 'https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&cs=tinysrgb&w=500', 'alt' => 'Senior Ayurveda physician portrait'],
  ['name' => 'Dr. N. Perera', 'role' => 'Ayurveda Consultant', 'image' => 'https://images.pexels.com/photos/5327585/pexels-photo-5327585.jpeg?auto=compress&cs=tinysrgb&w=500', 'alt' => 'Ayurveda consultant portrait'],
  ['name' => 'Dr. S. Fernando', 'role' => 'Panchakarma Specialist', 'image' => 'https://images.pexels.com/photos/5215012/pexels-photo-5215012.jpeg?auto=compress&cs=tinysrgb&w=500', 'alt' => 'Panchakarma specialist portrait'],
];

$footerCareLinks = [
  ['label' => 'Treatments', 'href' => 'index.php#our-treatments', 'icon' => 'fa-solid fa-spa'],
  ['label' => 'Customer Packages', 'href' => 'index.php#packages', 'icon' => 'fa-solid fa-hand-holding-heart'],
  ['label' => 'Doctors', 'href' => 'index.php#doctors', 'icon' => 'fa-solid fa-user-doctor'],
  ['label' => 'Accommodation', 'href' => 'index.php#accommodation', 'icon' => 'fa-solid fa-bed'],
];

$footerContactItems = [
  ['icon' => 'fa-solid fa-phone-volume','label' => 'Call Us','value' => $brand['phone'],'href' => 'tel:' . $brand['phone_href']],
  ['icon' => 'fa-brands fa-whatsapp','label' => 'WhatsApp','value' => 'Message for booking','href' => 'https://wa.me/' . $brand['whatsapp']],
  ['icon' => 'fa-solid fa-calendar-check','label' => 'Appointments','value' => 'Online request support','href' => 'index.php#contact-us'],
];

function e($value) {
  return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?>
<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us | <?= e($brand['name']); ?></title>
<meta name="description" content="Learn about DEVYA CEYLON Ayurveda Centre — our story, mission, values and consultant physicians.">
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
    <a class="flex shrink-0 items-center gap-3" href="index.php#home" aria-label="<?= e($brand['name']); ?> home">
      <span class="devya-logo-mark" aria-hidden="true"><i class="fa-solid fa-leaf devya-logo-symbol"></i></span>
      <span class="leading-none">
        <span class="block whitespace-nowrap font-[Cormorant_Garamond] text-2xl font-bold tracking-wide text-[var(--devya-forest)]"><?= e($brand['name']); ?></span>
        <span class="mt-1 block whitespace-nowrap text-[0.62rem] font-extrabold uppercase tracking-[.32em] text-[var(--devya-leaf)]"><?= e($brand['subtitle']); ?></span>
      </span>
    </a>
    <nav id="desktop-nav" class="hidden flex-1 items-center justify-center lg:flex" aria-label="Primary navigation">
      <ul id="desktop-menu" class="flex items-center justify-center gap-4 xl:gap-6">
        <?php foreach ($navItems as $item): ?>
          <li><a class="nav-link inline-flex items-center gap-1.5 whitespace-nowrap text-[0.64rem] font-extrabold uppercase tracking-[.14em] text-[var(--devya-muted)] transition hover:text-[var(--devya-saffron)] <?= $item['label'] === 'About Us' ? 'is-active' : ''; ?>" href="<?= e($item['href']); ?>"><i class="<?= e($item['icon']); ?>" aria-hidden="true"></i><?= e($item['label']); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </nav>
    <div class="hidden shrink-0 items-center gap-2 2xl:flex">
      <a class="rounded-full border border-[color:var(--devya-line-strong)] px-4 py-2.5 text-xs font-extrabold uppercase tracking-[.14em] text-[var(--devya-forest)] transition hover:border-[var(--devya-gold)] hover:bg-[var(--devya-cream)]" href="tel:<?= e($brand['phone_href']); ?>"><i class="fa-solid fa-phone mr-2" aria-hidden="true"></i>Call</a>
      <a class="rounded-full bg-[var(--devya-gold)] px-5 py-2.5 text-xs font-extrabold uppercase tracking-[.14em] text-[var(--devya-forest)] shadow-[0_14px_32px_rgba(255,192,48,.28)] transition hover:bg-[var(--devya-saffron)] hover:text-white" href="index.php#contact-us"><i class="fa-solid fa-calendar-check mr-2" aria-hidden="true"></i>Book Now</a>
    </div>
    <button id="menuToggle" class="grid h-11 w-11 place-items-center rounded-full border border-[color:var(--devya-line-strong)] bg-white text-[var(--devya-forest)] shadow-sm lg:hidden" type="button" aria-label="Open menu" aria-controls="mobileMenu" aria-expanded="false">
      <span class="menu-lines" aria-hidden="true"><span></span><span></span><span></span></span>
    </button>
  </div>
  <div id="mobileMenu" class="mobile-panel lg:hidden">
    <nav class="mx-auto grid max-w-lg gap-1 px-4 pb-5 pt-2" aria-label="Mobile navigation">
      <?php foreach ($navItems as $item): ?>
        <a class="mobile-nav-link <?= $item['label'] === 'About Us' ? 'is-active' : ''; ?>" href="<?= e($item['href']); ?>" data-menu-link><i class="<?= e($item['icon']); ?>" aria-hidden="true"></i><?= e($item['label']); ?></a>
      <?php endforeach; ?>
      <div class="mt-3 grid grid-cols-2 gap-2">
        <a class="mobile-action secondary" href="tel:<?= e($brand['phone_href']); ?>" data-menu-link><i class="fa-solid fa-phone" aria-hidden="true"></i>Call</a>
        <a class="mobile-action primary" href="index.php#contact-us" data-menu-link><i class="fa-solid fa-calendar-check" aria-hidden="true"></i>Book Now</a>
      </div>
    </nav>
  </div>
</header>

<main class="min-h-screen bg-[linear-gradient(180deg,#ffffff_0%,#fffaf0_54%,#ffffff_100%)] pt-24">

  <section class="about-hero-section relative overflow-hidden px-4 py-14 sm:px-6 lg:px-8 lg:py-20">
    <div class="mx-auto grid max-w-7xl items-center gap-10 lg:grid-cols-[1fr_.9fr]">
      <div>
        <p class="inline-flex items-center rounded-full border border-[color:var(--devya-line-strong)] bg-white/80 px-4 py-2 text-xs font-extrabold uppercase tracking-[.22em] text-[var(--devya-saffron)] shadow-sm"><i class="fa-solid fa-seedling mr-2" aria-hidden="true"></i><?= e($aboutHero['eyebrow']); ?></p>
        <h1 class="mt-6 max-w-2xl font-[Cormorant_Garamond] text-4xl font-bold leading-[.98] tracking-tight text-[var(--devya-forest)] sm:text-5xl lg:text-6xl"><?= e($aboutHero['title']); ?></h1>
        <p class="mt-6 max-w-xl text-base leading-8 text-[color:var(--devya-muted)] sm:text-lg"><?= e($aboutHero['text']); ?></p>
        <div class="mt-8 flex flex-col gap-3 sm:flex-row">
          <a class="inline-flex items-center justify-center rounded-full bg-[var(--devya-gold)] px-6 py-4 text-sm font-extrabold uppercase tracking-[.16em] text-[var(--devya-forest)] shadow-[0_18px_38px_rgba(255,192,48,.30)] transition hover:-translate-y-0.5 hover:bg-[var(--devya-saffron)] hover:text-white" href="index.php#contact-us"><i class="fa-solid fa-calendar-check mr-2" aria-hidden="true"></i>Book Consultation</a>
          <a class="inline-flex items-center justify-center rounded-full border border-[color:var(--devya-line-strong)] bg-white/80 px-6 py-4 text-sm font-extrabold uppercase tracking-[.16em] text-[var(--devya-forest)] transition hover:-translate-y-0.5 hover:border-[var(--devya-gold)] hover:bg-[var(--devya-cream)]" href="index.php#our-treatments"><i class="fa-solid fa-spa mr-2" aria-hidden="true"></i>View Treatments</a>
        </div>
      </div>
      <div class="about-hero-media">
        <img src="<?= e($aboutHero['image']); ?>" alt="<?= e($aboutHero['alt']); ?>" loading="eager" fetchpriority="high">
      </div>
    </div>
  </section>

  <section class="about-stats-section px-4 py-10 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-7xl">
      <div class="about-stats-grid">
        <?php foreach ($aboutStats as $stat): ?>
          <div class="about-stat-card">
            <i class="<?= e($stat['icon']); ?>" aria-hidden="true"></i>
            <strong><?= e($stat['value']); ?></strong>
            <span><?= e($stat['label']); ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="about-story-section px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
    <div class="mx-auto grid max-w-7xl items-center gap-10 lg:grid-cols-[.95fr_1.05fr]">
      <div class="about-story-media">
        <img src="<?= e($aboutStory['image']); ?>" alt="<?= e($aboutStory['alt']); ?>" loading="lazy">
      </div>
      <div>
        <p class="text-xs font-extrabold uppercase tracking-[.24em] text-[var(--devya-saffron)]"><?= e($aboutStory['label']); ?></p>
        <h2 class="mt-4 max-w-2xl font-[Cormorant_Garamond] text-3xl font-bold leading-[1.02] text-[var(--devya-forest)] sm:text-4xl lg:text-5xl"><?= e($aboutStory['title']); ?></h2>
        <?php foreach ($aboutStory['paragraphs'] as $paragraph): ?>
          <p class="mt-5 max-w-2xl text-base leading-8 text-[var(--devya-muted)]"><?= e($paragraph); ?></p>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="mission-vision-section px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
    <div class="mx-auto max-w-7xl">
      <div class="mission-vision-grid">
        <?php foreach ($missionVision as $item): ?>
          <article class="mission-vision-card">
            <span class="mission-vision-icon" aria-hidden="true"><i class="<?= e($item['icon']); ?>"></i></span>
            <h3><?= e($item['title']); ?></h3>
            <p><?= e($item['text']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="values-section px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
    <div class="mx-auto max-w-7xl">
      <div class="text-center max-w-3xl mx-auto">
        <p class="text-xs font-extrabold uppercase tracking-[.24em] text-[var(--devya-saffron)]">What Guides Us</p>
        <h2 class="mt-4 font-[Cormorant_Garamond] text-3xl font-bold leading-[1.02] text-[var(--devya-forest)] sm:text-4xl lg:text-5xl">Our core values in every treatment room.</h2>
      </div>
      <div class="values-grid mt-10">
        <?php foreach ($coreValues as $value): ?>
          <article class="value-card">
            <span class="value-icon" aria-hidden="true"><i class="<?= e($value['icon']); ?>"></i></span>
            <h3><?= e($value['title']); ?></h3>
            <p><?= e($value['text']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="why-choose-section px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
    <div class="mx-auto max-w-7xl grid gap-10 lg:grid-cols-[.9fr_1.1fr] lg:items-center">
      <div>
        <p class="text-xs font-extrabold uppercase tracking-[.24em] text-[var(--devya-saffron)]">Why Choose Us</p>
        <h2 class="mt-4 max-w-xl font-[Cormorant_Garamond] text-3xl font-bold leading-[1.02] text-[var(--devya-forest)] sm:text-4xl lg:text-5xl">Reasons patients trust DEVYA CEYLON.</h2>
        <p class="mt-5 max-w-xl text-base leading-8 text-[var(--devya-muted)]">From first consultation to full recovery, our approach keeps care personal, safe and easy to follow.</p>
      </div>
      <ul class="why-choose-list">
        <?php foreach ($whyChoose as $reason): ?>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i><span><?= e($reason); ?></span></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <section class="team-preview-section px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
    <div class="mx-auto max-w-7xl">
      <div class="text-center max-w-3xl mx-auto">
        <p class="text-xs font-extrabold uppercase tracking-[.24em] text-[var(--devya-saffron)]">Meet the Team</p>
        <h2 class="mt-4 font-[Cormorant_Garamond] text-3xl font-bold leading-[1.02] text-[var(--devya-forest)] sm:text-4xl lg:text-5xl">Experienced physicians leading your care.</h2>
      </div>
      <div class="team-preview-grid mt-10">
        <?php foreach ($teamPreview as $member): ?>
          <article class="team-preview-card">
            <img src="<?= e($member['image']); ?>" alt="<?= e($member['alt']); ?>" loading="lazy">
            <h3><?= e($member['name']); ?></h3>
            <span><?= e($member['role']); ?></span>
          </article>
        <?php endforeach; ?>
      </div>
      <div class="text-center mt-8">
        <a class="team-preview-cta" href="index.php#doctors"><i class="fa-solid fa-user-doctor mr-2" aria-hidden="true"></i>View All Doctors</a>
      </div>
    </div>
  </section>

  <section class="about-cta-section px-4 py-14 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-7xl about-cta-panel">
      <div>
        <span>Ready to begin?</span>
        <strong>Start your Ayurveda wellness journey with a simple consultation request.</strong>
      </div>
      <div class="flex flex-col gap-3 sm:flex-row">
        <a class="about-cta-primary" href="index.php#contact-us"><i class="fa-solid fa-calendar-check mr-2" aria-hidden="true"></i>Book Appointment</a>
        <a class="about-cta-secondary" href="https://wa.me/<?= e($brand['whatsapp']); ?>"><i class="fa-brands fa-whatsapp mr-2" aria-hidden="true"></i>WhatsApp Us</a>
      </div>
    </div>
  </section>

</main>

<footer id="contact-us" class="site-footer scroll-mt-28 px-4 pt-16 sm:px-6 lg:px-8 lg:pt-20">
  <div class="mx-auto max-w-7xl">
    <div class="footer-top">
      <div class="footer-brand-panel">
        <a class="footer-brand" href="index.php#home" aria-label="<?= e($brand['name']); ?> home">
          <span class="devya-logo-mark" aria-hidden="true"><i class="fa-solid fa-leaf devya-logo-symbol"></i></span>
          <span><strong><?= e($brand['name']); ?></strong><small><?= e($brand['subtitle']); ?></small></span>
        </a>
        <p>A calm Ayurveda digital experience for consultations, treatments, packages and customer guidance in one easy flow.</p>
        <div class="footer-actions">
          <a href="tel:<?= e($brand['phone_href']); ?>"><i class="fa-solid fa-phone" aria-hidden="true"></i>Call Now</a>
          <a href="https://wa.me/<?= e($brand['whatsapp']); ?>"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i>WhatsApp</a>
        </div>
      </div>
      <div class="footer-link-panel">
        <div class="footer-column">
          <h2>Explore</h2>
          <nav aria-label="Footer navigation">
            <?php foreach ($navItems as $item): ?>
              <a href="<?= e($item['href']); ?>"><i class="<?= e($item['icon']); ?>" aria-hidden="true"></i><?= e($item['label']); ?></a>
            <?php endforeach; ?>
          </nav>
        </div>
        <div class="footer-column">
          <h2>Care</h2>
          <nav aria-label="Footer care links">
            <?php foreach ($footerCareLinks as $item): ?>
              <a href="<?= e($item['href']); ?>"><i class="<?= e($item['icon']); ?>" aria-hidden="true"></i><?= e($item['label']); ?></a>
            <?php endforeach; ?>
          </nav>
        </div>
        <div class="footer-column footer-contact-column">
          <h2>Contact</h2>
          <?php foreach ($footerContactItems as $item): ?>
            <a class="footer-contact-card" href="<?= e($item['href']); ?>"><span><i class="<?= e($item['icon']); ?>" aria-hidden="true"></i><?= e($item['label']); ?></span><strong><?= e($item['value']); ?></strong></a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; <?= date('Y'); ?> <?= e($brand['name']); ?>. All rights reserved.</span>
      <span>Harmony of body, mind &amp; spirit.</span>
    </div>
  </div>
</footer>

<script src="assets/js/site.js"></script>
</body>
</html>
