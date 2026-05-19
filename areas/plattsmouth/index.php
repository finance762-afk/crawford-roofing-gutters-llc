<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ───────────────────────────────────────────────
$pageTitle       = 'Roof Repair & Gutter Services in Plattsmouth, NE | ' . $siteName;
$pageDescription = 'Crawford Roofing & Gutters offers roof repair, replacement, and gutter services in Plattsmouth, NE. Licensed Nebraska contractor serving Cass County for ' . $yearsInBusiness . '+ years. Free estimates available.';
$canonicalUrl    = $siteUrl . '/areas/plattsmouth/';
$currentPage     = 'areas';
$heroImagePreload = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134049337-o7oznv-dff36b_a35b2df95a814ec49799d0169f3a87da_mv2.jpg';
$cssVersion      = '3';

// ── Image Library ────────────────────────────────────────────
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/';
$heroImg = $imgBase . '1779134049337-o7oznv-dff36b_a35b2df95a814ec49799d0169f3a87da_mv2.jpg';
$secondaryImg = $imgBase . '1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg';
$tertiaryImg = $imgBase . '1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg';

// ── Schema ───────────────────────────────────────────────────
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',          'url' => $siteUrl . '/'],
    ['name' => 'Service Areas', 'url' => $siteUrl . '/areas/'],
    ['name' => 'Plattsmouth',   'url' => $siteUrl . '/areas/plattsmouth/'],
], $siteUrl);

$localBusinessSchema = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'RoofingContractor',
    'name' => $siteName,
    '@id' => $siteUrl . '/#organization',
    'url' => $siteUrl . '/',
    'telephone' => $phone,
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => $address['street'],
        'addressLocality' => $address['city'],
        'addressRegion' => $address['state'],
        'postalCode' => $address['zip'],
        'addressCountry' => 'US',
    ],
    'areaServed' => [
        '@type' => 'City',
        'name' => 'Plattsmouth',
        'addressRegion' => 'NE',
    ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<!-- Schema: BreadcrumbList -->
<script type="application/ld+json">
<?php echo $breadcrumbSchema; ?>
</script>

<!-- Schema: LocalBusiness with areaServed -->
<script type="application/ld+json">
<?php echo $localBusinessSchema; ?>
</script>

<style>
/* ═══════════════════════════════════════════════════════════════
   Plattsmouth, NE — Individual Area Page
   Premium Tier — Crawford Roofing & Gutters LLC
   Prefix: .pm-
   ═══════════════════════════════════════════════════════════════ */

/* ── 1. HERO: LAYERED WITH GRADIENT + NOISE ─────────────────── */
.pm-hero {
  position: relative;
  min-height: 72vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroImg; ?>');
  background-size: cover;
  background-position: center 35%;
  background-repeat: no-repeat;
  overflow: hidden;
  padding: var(--space-16) 0 var(--space-12);
}
.pm-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    145deg,
    rgba(var(--color-primary-rgb), 0.95) 0%,
    rgba(var(--color-primary-rgb), 0.82) 42%,
    rgba(var(--color-secondary-rgb), 0.72) 100%
  );
  z-index: 1;
}
.pm-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  opacity: 0.15;
  z-index: 1;
  pointer-events: none;
}
.pm-hero .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.pm-hero .hero-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
}
.pm-hero .hero-breadcrumb a {
  color: rgba(255, 255, 255, 0.6);
  transition: color var(--transition-fast);
}
.pm-hero .hero-breadcrumb a:hover {
  color: rgba(255, 255, 255, 0.9);
}
.pm-hero .hero-breadcrumb .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.35);
  font-size: var(--font-size-xs);
}
.pm-hero .hero-breadcrumb .breadcrumb-current {
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(1.8);
  font-weight: 600;
}
.pm-hero .eyebrow-label {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(var(--color-accent-rgb), 0.85);
  filter: brightness(2.2);
  font-family: var(--font-accent);
  font-size: var(--font-size-sm);
  font-weight: 500;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  margin-bottom: var(--space-4);
}
.pm-hero .eyebrow-label .eyebrow-dot {
  width: 5px;
  height: 5px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.pm-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 3.75rem);
  line-height: 1.08;
  margin-bottom: var(--space-6);
  text-wrap: balance;
  max-width: 24ch;
}
.pm-hero h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.7);
}
.pm-hero .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 640px;
  margin-bottom: var(--space-8);
}
.pm-hero .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-10);
}
.pm-hero .hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  align-items: center;
}
.pm-hero .hero-trust-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.75);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.pm-hero .hero-trust-item i,
.pm-hero .hero-trust-item svg {
  width: 16px;
  height: 16px;
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(2);
}

/* ── SECTION DIVIDERS ────────────────────────────────────────── */
.pm-divider-angle {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.pm-divider-angle--top { top: -1px; }
.pm-divider-angle--bottom { bottom: -1px; }
.pm-divider-angle svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 55px;
}
.pm-divider-wave {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.pm-divider-wave--top { top: -1px; }
.pm-divider-wave--bottom { bottom: -1px; }
.pm-divider-wave svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 70px;
}

/* ── 2. ANSWER BLOCK + CONTEXT ───────────────────────────────── */
.pm-answer-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.pm-answer-section .pm-floating-blob {
  position: absolute;
  width: 450px;
  height: 450px;
  border-radius: 48% 52% 40% 60% / 55% 38% 62% 45%;
  background: rgba(var(--color-secondary-rgb), 0.03);
  pointer-events: none;
  z-index: 0;
  top: -160px;
  left: -220px;
  animation: pm-blob-sway 22s ease-in-out infinite;
}
@keyframes pm-blob-sway {
  0%, 100% { transform: translate(0, 0) rotate(0deg); }
  30% { transform: translate(25px, 15px) rotate(-4deg); }
  60% { transform: translate(-12px, -20px) rotate(3deg); }
}
.pm-answer-grid {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1.4fr 1fr;
  gap: var(--space-12);
  align-items: start;
}
.pm-answer-grid .answer-block {
  background: rgba(var(--color-primary-rgb), 0.03);
  border-left: 4px solid rgba(var(--color-accent-rgb), 0.35);
  padding: var(--space-6);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin-bottom: var(--space-6);
}
.pm-answer-grid .answer-block h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  color: var(--color-primary);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.pm-answer-grid .answer-block p {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-text);
  margin: 0;
}
.pm-context-card {
  position: sticky;
  top: calc(var(--space-20) + 70px);
  border-radius: var(--radius-lg);
  overflow: hidden;
}
.pm-context-card__image {
  position: relative;
  aspect-ratio: 16 / 9;
  overflow: hidden;
}
.pm-context-card__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.pm-context-card__image::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 50%;
  background: linear-gradient(to top, rgba(var(--color-primary-rgb), 0.7), transparent);
  pointer-events: none;
}
.pm-context-card__body {
  background: var(--color-card-tint-3);
  padding: var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.pm-context-card__body h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin: 0;
  text-wrap: balance;
}
.pm-context-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  font-size: var(--font-size-sm);
  color: var(--color-text);
  line-height: 1.6;
}
.pm-context-item i,
.pm-context-item svg {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: 2px;
}

/* ── 3. LOCAL CONTENT — SPLIT ────────────────────────────────── */
.pm-local-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0 var(--space-20);
  overflow: hidden;
}
.pm-local-split {
  display: grid;
  grid-template-columns: 1fr 1.3fr;
  gap: var(--space-10);
  align-items: center;
}
.pm-local-image {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.pm-local-image img {
  width: 100%;
  height: auto;
  display: block;
  aspect-ratio: 4 / 3;
  object-fit: cover;
}
.pm-local-image .pm-image-badge {
  position: absolute;
  bottom: var(--space-4);
  left: var(--space-4);
  background: rgba(var(--color-primary-rgb), 0.9);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  padding: var(--space-2) var(--space-4);
  border-radius: var(--radius-sm);
  letter-spacing: 0.05em;
  text-transform: uppercase;
  z-index: 1;
}
.pm-local-content h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.75rem, 3vw, 2.5rem);
  color: var(--color-primary);
  margin-bottom: var(--space-6);
  text-wrap: balance;
}
.pm-local-content .prose p {
  margin-bottom: var(--space-4);
}

/* ── 4. SIGNATURE SECTION: HISTORIC HOME MATERIAL GUIDE ──────── */
/* Unique to Plattsmouth — Victorian/Early 1900s material matching */
.pm-historic-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.pm-historic-header {
  text-align: center;
  margin-bottom: var(--space-10);
}
.pm-historic-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-6);
}
.pm-historic-card {
  border-radius: var(--radius-lg);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.pm-historic-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.pm-historic-card__header {
  padding: var(--space-6);
  display: flex;
  align-items: center;
  gap: var(--space-4);
}
.pm-historic-card__icon {
  width: 52px;
  height: 52px;
  border-radius: var(--radius-lg);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  color: var(--color-accent);
}
.pm-historic-card__icon i,
.pm-historic-card__icon svg {
  width: 24px;
  height: 24px;
}
.pm-historic-card__header h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin: 0;
  text-wrap: balance;
  line-height: 1.3;
}
.pm-historic-card__body {
  padding: 0 var(--space-6) var(--space-6);
  flex: 1;
}
.pm-historic-card__body p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.65;
  margin: 0 0 var(--space-3);
}
.pm-historic-card__body p:last-child {
  margin-bottom: 0;
}
.pm-historic-card__era {
  display: inline-block;
  background: rgba(var(--color-accent-rgb), 0.08);
  color: var(--color-accent);
  font-size: var(--font-size-xs);
  font-weight: 600;
  padding: var(--space-1) var(--space-3);
  border-radius: var(--radius-sm);
  margin-bottom: var(--space-3);
  letter-spacing: 0.03em;
}

/* ── 5. SERVICES AVAILABLE ───────────────────────────────────── */
.pm-services-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0 var(--space-20);
  overflow: hidden;
}
.pm-services-flex {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
  margin-top: var(--space-10);
}
.pm-service-chip {
  border-radius: var(--radius-lg);
  padding: var(--space-5) var(--space-4);
  display: flex;
  align-items: center;
  gap: var(--space-3);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  text-decoration: none;
}
.pm-service-chip:hover {
  transform: translateY(-2px);
  box-shadow: var(--shadow-md);
}
.pm-service-chip__icon {
  width: 40px;
  height: 40px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  color: var(--color-accent);
}
.pm-service-chip__icon i,
.pm-service-chip__icon svg {
  width: 18px;
  height: 18px;
}
.pm-service-chip__label {
  display: flex;
  flex-direction: column;
  gap: 2px;
}
.pm-service-chip__label span:first-child {
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  color: var(--color-primary);
  font-weight: 600;
  line-height: 1.3;
}
.pm-service-chip__label span:last-child {
  font-size: var(--font-size-xs);
  color: var(--color-accent);
  font-weight: 500;
}

/* ── 6. WHY CRAWFORD FOR PLATTSMOUTH ─────────────────────────── */
.pm-why-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.pm-why-asym {
  display: grid;
  grid-template-columns: 1.1fr 2fr;
  gap: var(--space-10);
  align-items: center;
  margin-top: var(--space-10);
}
.pm-why-image {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.pm-why-image img {
  width: 100%;
  height: auto;
  display: block;
  aspect-ratio: 3 / 4;
  object-fit: cover;
}
.pm-why-checklist {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-5);
}
.pm-why-check {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
}
.pm-why-check__icon {
  width: 32px;
  height: 32px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  color: var(--color-accent);
}
.pm-why-check__icon i,
.pm-why-check__icon svg {
  width: 16px;
  height: 16px;
}
.pm-why-check h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  color: var(--color-primary);
  margin: 0 0 var(--space-1);
  text-wrap: balance;
}
.pm-why-check p {
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  line-height: 1.55;
  margin: 0;
}

/* ── 7. CTA BANNER ───────────────────────────────────────────── */
.pm-cta-section {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  overflow: hidden;
  text-align: center;
}
.pm-cta-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(155deg, rgba(var(--color-accent-rgb), 0.14) 0%, transparent 50%);
  pointer-events: none;
}
.pm-cta-section::after {
  content: '';
  position: absolute;
  top: -60px;
  right: -60px;
  width: 200px;
  height: 200px;
  border-radius: var(--radius-full);
  border: 3px solid rgba(255, 255, 255, 0.04);
  pointer-events: none;
}
.pm-cta-section .container {
  position: relative;
  z-index: 1;
}
.pm-cta-section h2 {
  color: var(--color-white);
  font-size: clamp(1.75rem, 3.5vw, 2.75rem);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.pm-cta-section p {
  color: rgba(255, 255, 255, 0.85);
  font-size: var(--font-size-lg);
  max-width: 52ch;
  margin: 0 auto var(--space-8);
  line-height: 1.7;
}
.pm-cta-section .cta-buttons {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── RESPONSIVE ──────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .pm-answer-grid {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .pm-context-card {
    position: static;
  }
  .pm-local-split {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .pm-historic-grid {
    grid-template-columns: 1fr;
  }
  .pm-services-flex {
    grid-template-columns: repeat(2, 1fr);
  }
  .pm-why-asym {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .pm-why-checklist {
    grid-template-columns: 1fr;
  }
}
@media (max-width: 600px) {
  .pm-hero {
    min-height: 60vh;
    padding: var(--space-12) 0 var(--space-8);
  }
  .pm-services-flex {
    grid-template-columns: 1fr;
  }
  .pm-why-image img {
    aspect-ratio: 4 / 3;
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══ HERO ═══════════════════════════════════════════════════ -->
<section class="pm-hero" style="background-image:url('<?php echo $heroImg; ?>');">
  <div class="container">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <a href="/areas/">Service Areas</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <span class="breadcrumb-current">Plattsmouth</span>
    </nav>

    <div class="eyebrow-label">
      <span class="eyebrow-dot" aria-hidden="true"></span>
      Plattsmouth, NE
    </div>

    <h1>Roof Repair &amp; Gutter Services in <span class="accent-word">Plattsmouth, NE</span></h1>

    <p class="hero-answer">
      Need roofing near me in Plattsmouth? <?php echo htmlspecialchars($siteName); ?> is a licensed Nebraska roofing
      contractor based in Omaha, providing full-service roof repair, replacement, and gutter work to Plattsmouth
      and Cass County. This historic river town sits just 20 miles south of our office, and our
      <?php echo $yearsInBusiness; ?>+ years of experience include specialized work on older homes that define
      Plattsmouth's character.
    </p>

    <div class="hero-ctas">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> <?php echo formatPhone($phone); ?>
      </a>
      <?php endif; ?>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="map-pin" aria-hidden="true"></i> 20 Mi from Plattsmouth</span>
      <span class="hero-trust-item"><i data-lucide="clock" aria-hidden="true"></i> <?php echo $yearsInBusiness; ?>+ Years Experience</span>
      <span class="hero-trust-item"><i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured</span>
    </div>
  </div>
</section>

<!-- ═══ ANSWER BLOCK + CONTEXT ═══════════════════════════════ -->
<section class="pm-answer-section">
  <div class="pm-divider-angle pm-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-primary)" points="0,0 1200,55 0,55"></polygon>
    </svg>
  </div>
  <div class="pm-floating-blob" aria-hidden="true"></div>

  <div class="container">
    <div class="pm-answer-grid">
      <div class="pm-answer-content">
        <div class="section-title" style="text-align:left;">
          <span class="eyebrow-label reveal-up">Plattsmouth Roofing</span>
          <h2 class="reveal-up">What Roofing Services Are Available in <span class="text-accent">Plattsmouth?</span></h2>
        </div>

        <div class="answer-block reveal-up">
          <h3>What Does Roof Repair Cost in Plattsmouth, NE?</h3>
          <p>
            Roof repair costs in Plattsmouth range from $400 for localized shingle replacement to $6,000+ for
            extensive storm damage or structural issues common in older homes. Plattsmouth's historic housing
            stock often requires custom material sourcing and careful decking evaluation. Crawford provides
            free written estimates after an on-site inspection — factoring in your home's age, roof
            condition, and any moisture-related concerns from river proximity.
          </p>
        </div>

        <div class="prose reveal-up reveal-delay-1">
          <p>
            Plattsmouth sits at the confluence of the Platte and Missouri Rivers — a dramatic setting that
            also creates persistent roofing challenges. The Cass County seat has a population of roughly
            6,500, and many of its homes predate the mid-20th century. Victorian-era houses, early 1900s
            Craftsman bungalows, and post-war ranches line the streets of the downtown historic district,
            each with unique roofing profiles that require specialized material matching.
          </p>
          <p>
            River proximity affects Plattsmouth roofs in ways that interior metro homes rarely experience.
            High humidity accelerates moss and algae growth on north-facing slopes. Morning fog from the
            river valleys keeps roof surfaces damp longer than homes in elevated neighborhoods. Crawford
            treats these conditions with zinc-strip installations, proper ventilation upgrades, and
            algae-resistant shingle selections specifically suited to Plattsmouth's microclimate.
          </p>
          <p>
            The Plattsmouth High School community and neighborhoods near Schilling Wildlife Management Area
            represent the town's residential core. These homes range from well-maintained properties with
            regular roof cycles to deferred-maintenance situations where multiple roof layers need removal
            before a proper replacement can begin. Crawford's crews are experienced with full tear-offs on
            Plattsmouth's older structures, including proper disposal of legacy materials.
          </p>
          <p>
            Plattsmouth also connects to the Omaha metro via Highway 75, making it an easy drive for our
            crews. We schedule Plattsmouth projects alongside nearby Bellevue and Papillion work to keep
            logistics efficient and response times short. Emergency tarping is available same-day for active
            roof leaks in Plattsmouth.
          </p>
        </div>
      </div>

      <aside class="pm-context-card reveal-right reveal-delay-2">
        <div class="pm-context-card__image">
          <img src="<?php echo $secondaryImg; ?>"
               alt="Aerial view of Plattsmouth, NE residential neighborhood along the Platte River"
               width="400" height="225" loading="lazy">
        </div>
        <div class="pm-context-card__body">
          <h3>Plattsmouth at a Glance</h3>
          <div class="pm-context-item">
            <i data-lucide="map-pin" aria-hidden="true"></i>
            <span>Cass County seat — ~20 miles south of Omaha via Hwy 75</span>
          </div>
          <div class="pm-context-item">
            <i data-lucide="droplets" aria-hidden="true"></i>
            <span>Confluence of Platte &amp; Missouri Rivers — high humidity microclimate</span>
          </div>
          <div class="pm-context-item">
            <i data-lucide="home" aria-hidden="true"></i>
            <span>Downtown historic district with Victorian &amp; early 1900s homes</span>
          </div>
          <div class="pm-context-item">
            <i data-lucide="users" aria-hidden="true"></i>
            <span>Population ~6,500 — tight-knit Cass County community</span>
          </div>
          <div class="pm-context-item">
            <i data-lucide="tree-pine" aria-hidden="true"></i>
            <span>Schilling Wildlife Management Area nearby</span>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>

<!-- ═══ LOCAL CONTENT — SPLIT ════════════════════════════════ -->
<section class="pm-local-section">
  <div class="pm-divider-wave pm-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70 C300,22 550,60 850,18 C1020,6 1130,35 1200,25 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="pm-local-split">
      <div class="pm-local-image reveal-left">
        <img src="<?php echo $tertiaryImg; ?>"
             alt="Crawford Roofing crew replacing gutters on a historic Plattsmouth home"
             width="600" height="450" loading="lazy">
        <span class="pm-image-badge">Cass County</span>
      </div>
      <div class="pm-local-content reveal-right reveal-delay-1">
        <h2>River Town Conditions Demand <span class="text-accent">River-Smart Roofing</span></h2>
        <div class="prose">
          <p>
            Plattsmouth homeowners face a unique combination of moisture, temperature swings, and biological
            growth that shortens roof lifespan compared to homes further from the rivers. The morning fog
            that rolls off the Missouri and Platte creates a damp microclimate that standard roofing
            installations don't fully account for. Crawford specifies enhanced ventilation, drip-edge
            extensions, and moisture-barrier upgrades as standard practice on Plattsmouth projects.
          </p>
          <p>
            Gutter performance is especially critical in Plattsmouth. Heavy spring rains combined with
            leaf debris from the mature tree canopy that shades many Plattsmouth streets means gutters
            clog faster and overflow more frequently here than in newer, less wooded subdivisions. We
            recommend gutter guards and oversized downspouts for Plattsmouth properties to manage the
            volume and prevent fascia rot.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SIGNATURE: HISTORIC HOME MATERIAL GUIDE ═════════════ -->
<section class="pm-historic-section">
  <div class="pm-divider-angle pm-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-bg-alt)" points="1200,0 0,55 1200,55"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="pm-historic-header">
      <div class="section-title">
        <span class="eyebrow-label reveal-up">Historic Expertise</span>
        <h2 class="reveal-up">Roofing Plattsmouth's <span class="text-accent">Oldest Homes</span></h2>
        <p class="prose-centered reveal-up reveal-delay-1">
          Plattsmouth's downtown historic district contains housing from four distinct eras — each with
          different roofing requirements. Crawford matches materials and methods to the home's period.
        </p>
      </div>
    </div>

    <div class="pm-historic-grid">
      <div class="pm-historic-card card-tint-1 reveal-up reveal-delay-1">
        <div class="pm-historic-card__header">
          <div class="pm-historic-card__icon"><i data-lucide="crown" aria-hidden="true"></i></div>
          <h3>Victorian &amp; Queen Anne Homes</h3>
        </div>
        <div class="pm-historic-card__body">
          <span class="pm-historic-card__era">1870s - 1900s</span>
          <p>
            Plattsmouth's oldest residences often feature steep-pitch roofs, decorative turrets, and complex
            hip-and-valley configurations. These homes require skilled flashing work at every intersection,
            custom-cut shingles for turret caps, and careful attention to ornamental trim that integrates
            with the roof edge.
          </p>
          <p>
            Crawford sources period-appropriate shingle profiles and works with Plattsmouth property owners
            to maintain historic character while meeting modern weather resistance standards.
          </p>
        </div>
      </div>

      <div class="pm-historic-card card-tint-2 reveal-up reveal-delay-2">
        <div class="pm-historic-card__header">
          <div class="pm-historic-card__icon"><i data-lucide="hammer" aria-hidden="true"></i></div>
          <h3>Craftsman &amp; Bungalow Styles</h3>
        </div>
        <div class="pm-historic-card__body">
          <span class="pm-historic-card__era">1910s - 1940s</span>
          <p>
            Low-slope rooflines with wide overhangs define Plattsmouth's Craftsman-era homes. These
            generous eaves protect siding but create challenges for gutter installation — standard hangers
            don't always align with the original fascia profile.
          </p>
          <p>
            Our crews fabricate custom gutter brackets and use hidden hanger systems that preserve the
            clean overhang lines these Plattsmouth bungalows are known for.
          </p>
        </div>
      </div>

      <div class="pm-historic-card card-tint-3 reveal-up reveal-delay-3">
        <div class="pm-historic-card__header">
          <div class="pm-historic-card__icon"><i data-lucide="home" aria-hidden="true"></i></div>
          <h3>Post-War Ranch Homes</h3>
        </div>
        <div class="pm-historic-card__body">
          <span class="pm-historic-card__era">1950s - 1970s</span>
          <p>
            Plattsmouth's mid-century ranches are the workhorses of the local housing stock. Simple roof
            geometry makes replacement straightforward, but decades of layered shingle applications often
            mean a full tear-off is necessary before new materials can go down.
          </p>
          <p>
            Crawford commonly finds 2-3 layers of old shingles on Plattsmouth ranches. We remove all layers
            down to decking, inspect for rot, and install a complete new system with proper ice barriers.
          </p>
        </div>
      </div>

      <div class="pm-historic-card card-tint-1 reveal-up reveal-delay-4">
        <div class="pm-historic-card__header">
          <div class="pm-historic-card__icon"><i data-lucide="building-2" aria-hidden="true"></i></div>
          <h3>Modern Infill Construction</h3>
        </div>
        <div class="pm-historic-card__body">
          <span class="pm-historic-card__era">2000s - Present</span>
          <p>
            Newer homes in Plattsmouth's outlying neighborhoods use contemporary architectural shingles
            and pre-engineered truss systems. These homes benefit from current building codes but still need
            the humidity-conscious approach Crawford applies to all Plattsmouth roofing work.
          </p>
          <p>
            We install GAF, Owens Corning, and CertainTeed systems with enhanced ventilation packages
            designed for Plattsmouth's river-valley climate.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SERVICES AVAILABLE IN PLATTSMOUTH ════════════════════ -->
<section class="pm-services-section">
  <div class="pm-divider-wave pm-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70 C280,20 580,55 880,22 C1050,12 1150,40 1200,32 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label reveal-up">What We Do</span>
      <h2 class="reveal-up">All 9 Services Available in <span class="text-accent">Plattsmouth</span></h2>
      <p class="prose-centered reveal-up reveal-delay-1">
        Every roofing and gutter service Crawford offers across the Omaha metro extends to Plattsmouth and
        Cass County. Click any service for detailed information.
      </p>
    </div>

    <div class="pm-services-flex">
      <?php
      $serviceIcons = [
          'gutter-addition' => 'plus-circle',
          'gutter-cleaning' => 'sparkles',
          'gutter-installation' => 'ruler',
          'gutter-repair' => 'wrench',
          'gutter-replacement' => 'refresh-cw',
          'roof-inspection' => 'scan-eye',
          'roof-repair' => 'hammer',
          'roof-replacement' => 'home',
          'new-roof-installation' => 'hard-hat',
      ];
      $tints = ['card-tint-1', 'card-tint-2', 'card-tint-3'];
      foreach ($services as $i => $service):
          $icon = $serviceIcons[$service['slug']] ?? 'check-circle';
          $tint = $tints[$i % 3];
          $delay = 'reveal-delay-' . (($i % 3) + 1);
      ?>
      <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/" class="pm-service-chip <?php echo $tint; ?> reveal-up <?php echo $delay; ?>">
        <div class="pm-service-chip__icon"><i data-lucide="<?php echo $icon; ?>" aria-hidden="true"></i></div>
        <div class="pm-service-chip__label">
          <span><?php echo htmlspecialchars($service['name']); ?></span>
          <span>View details &rarr;</span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ WHY CRAWFORD FOR PLATTSMOUTH ═════════════════════════ -->
<section class="pm-why-section">
  <div class="pm-divider-angle pm-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-bg-alt)" points="0,0 1200,55 0,55"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label reveal-up">Why Crawford</span>
      <h2 class="reveal-up">Why Plattsmouth Homeowners Trust <span class="text-accent">Crawford Roofing</span></h2>
    </div>

    <div class="pm-why-asym">
      <div class="pm-why-image reveal-left">
        <img src="<?php echo $secondaryImg; ?>"
             alt="Crawford Roofing truck parked at a Plattsmouth, NE residential roofing project"
             width="400" height="533" loading="lazy">
      </div>

      <div class="pm-why-checklist">
        <div class="pm-why-check reveal-up reveal-delay-1">
          <div class="pm-why-check__icon"><i data-lucide="map-pin" aria-hidden="true"></i></div>
          <div>
            <h3>20-Minute Response</h3>
            <p>Plattsmouth is a quick Highway 75 drive from our Omaha office. Emergency tarping and storm inspections are available same-day.</p>
          </div>
        </div>
        <div class="pm-why-check reveal-up reveal-delay-2">
          <div class="pm-why-check__icon"><i data-lucide="landmark" aria-hidden="true"></i></div>
          <div>
            <h3>Historic District Experience</h3>
            <p>We've worked on Victorian, Craftsman, and early-century homes across Plattsmouth's downtown — with proper material sourcing for each era.</p>
          </div>
        </div>
        <div class="pm-why-check reveal-up reveal-delay-3">
          <div class="pm-why-check__icon"><i data-lucide="droplets" aria-hidden="true"></i></div>
          <div>
            <h3>River Moisture Expertise</h3>
            <p>We address Plattsmouth's unique humidity and moss challenges with zinc strips, enhanced ventilation, and algae-resistant materials.</p>
          </div>
        </div>
        <div class="pm-why-check reveal-up reveal-delay-4">
          <div class="pm-why-check__icon"><i data-lucide="shield-check" aria-hidden="true"></i></div>
          <div>
            <h3>Licensed &amp; Insured</h3>
            <p>Full Nebraska licensure and comprehensive insurance coverage. Every Plattsmouth project is documented and warrantied.</p>
          </div>
        </div>
        <div class="pm-why-check reveal-up reveal-delay-1">
          <div class="pm-why-check__icon"><i data-lucide="clock" aria-hidden="true"></i></div>
          <div>
            <h3><?php echo $yearsInBusiness; ?>+ Years Serving the Region</h3>
            <p>Second-generation family operation. Crawford has protected roofs across the Omaha metro and Cass County since 1993.</p>
          </div>
        </div>
        <div class="pm-why-check reveal-up reveal-delay-2">
          <div class="pm-why-check__icon"><i data-lucide="file-text" aria-hidden="true"></i></div>
          <div>
            <h3>Free Written Estimates</h3>
            <p>On-site inspections with detailed written quotes — no high-pressure sales tactics, no hidden costs. Valid for Plattsmouth projects.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CTA BANNER ═══════════════════════════════════════════ -->
<section class="pm-cta-section">
  <div class="container">
    <h2 class="reveal-up">Need Roof Work in Plattsmouth?</h2>
    <p class="reveal-up reveal-delay-1">
      From historic home repairs to modern gutter installations, Crawford Roofing &amp; Gutters delivers
      free estimates and expert craftsmanship to Plattsmouth and Cass County. Reach out today.
    </p>
    <div class="cta-buttons reveal-up reveal-delay-2">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> Call <?php echo formatPhone($phone); ?>
      </a>
      <?php endif; ?>
    </div>
  </div>
</section>

<p style="text-align:center;font-size:var(--font-size-xs);color:var(--color-text-light);padding:var(--space-4) 0;">
  Last Updated: <?php echo date('F Y'); ?>
</p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
