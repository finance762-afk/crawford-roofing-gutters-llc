<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ───────────────────────────────────────────────
$pageTitle       = 'Roofing Contractor & Gutter Services in Fremont, NE | ' . $siteName;
$pageDescription = 'Crawford Roofing & Gutters provides roof repair, replacement, and gutter services in Fremont, NE. Licensed Nebraska contractor with ' . $yearsInBusiness . '+ years experience. Free estimates for Fremont homeowners.';
$canonicalUrl    = $siteUrl . '/areas/fremont/';
$currentPage     = 'areas';
$heroImagePreload = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134048805-bkz97m-dff36b_381e49a0e2c841a4a0db9e9691fb2386_mv2.jpg';
$cssVersion      = '3';

// ── Image Library ────────────────────────────────────────────
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/';
$heroImg = $imgBase . '1779134048805-bkz97m-dff36b_381e49a0e2c841a4a0db9e9691fb2386_mv2.jpg';
$secondaryImg = $imgBase . '1779134049337-o7oznv-dff36b_a35b2df95a814ec49799d0169f3a87da_mv2.jpg';
$tertiaryImg = $imgBase . '1779134049612-5tesv4-dff36b_dd0309b57b904f9696a5470bfb110093_mv2.jpg';

// ── Schema ───────────────────────────────────────────────────
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',          'url' => $siteUrl . '/'],
    ['name' => 'Service Areas', 'url' => $siteUrl . '/areas/'],
    ['name' => 'Fremont',       'url' => $siteUrl . '/areas/fremont/'],
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
        'name' => 'Fremont',
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
   Fremont, NE — Individual Area Page
   Premium Tier — Crawford Roofing & Gutters LLC
   Prefix: .fm-
   ═══════════════════════════════════════════════════════════════ */

/* ── 1. HERO: LAYERED WITH GRADIENT + NOISE ─────────────────── */
.fm-hero {
  position: relative;
  min-height: 72vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroImg; ?>');
  background-size: cover;
  background-position: center 40%;
  background-repeat: no-repeat;
  overflow: hidden;
  padding: var(--space-16) 0 var(--space-12);
}
.fm-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    150deg,
    rgba(var(--color-primary-rgb), 0.93) 0%,
    rgba(var(--color-primary-rgb), 0.78) 50%,
    rgba(var(--color-secondary-rgb), 0.65) 100%
  );
  z-index: 1;
}
.fm-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  opacity: 0.12;
  z-index: 1;
  pointer-events: none;
}
.fm-hero .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.fm-hero .hero-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
}
.fm-hero .hero-breadcrumb a {
  color: rgba(255, 255, 255, 0.6);
  transition: color var(--transition-fast);
}
.fm-hero .hero-breadcrumb a:hover {
  color: rgba(255, 255, 255, 0.9);
}
.fm-hero .hero-breadcrumb .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.35);
  font-size: var(--font-size-xs);
}
.fm-hero .hero-breadcrumb .breadcrumb-current {
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(1.8);
  font-weight: 600;
}
.fm-hero .eyebrow-label {
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
.fm-hero .eyebrow-label .eyebrow-dot {
  width: 5px;
  height: 5px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.fm-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 3.75rem);
  line-height: 1.08;
  margin-bottom: var(--space-6);
  text-wrap: balance;
  max-width: 26ch;
}
.fm-hero h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.7);
}
.fm-hero .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 640px;
  margin-bottom: var(--space-8);
}
.fm-hero .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-10);
}
.fm-hero .hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  align-items: center;
}
.fm-hero .hero-trust-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.75);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.fm-hero .hero-trust-item i,
.fm-hero .hero-trust-item svg {
  width: 16px;
  height: 16px;
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(2);
}

/* ── SECTION DIVIDERS ────────────────────────────────────────── */
.fm-divider-angle {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.fm-divider-angle--top { top: -1px; }
.fm-divider-angle--bottom { bottom: -1px; }
.fm-divider-angle svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 55px;
}
.fm-divider-wave {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.fm-divider-wave--top { top: -1px; }
.fm-divider-wave--bottom { bottom: -1px; }
.fm-divider-wave svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 70px;
}

/* ── 2. ANSWER BLOCK + SIDEBAR CONTEXT ───────────────────────── */
.fm-answer-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.fm-answer-section .fm-floating-blob {
  position: absolute;
  width: 380px;
  height: 380px;
  border-radius: 55% 45% 48% 52% / 42% 58% 42% 58%;
  background: rgba(var(--color-primary-rgb), 0.03);
  pointer-events: none;
  z-index: 0;
  bottom: -120px;
  left: -160px;
  animation: fm-blob-drift 20s ease-in-out infinite;
}
@keyframes fm-blob-drift {
  0%, 100% { transform: translate(0, 0) rotate(0deg); }
  25% { transform: translate(20px, -15px) rotate(5deg); }
  50% { transform: translate(-10px, 25px) rotate(-3deg); }
  75% { transform: translate(15px, 10px) rotate(2deg); }
}
.fm-answer-layout {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1fr 1.5fr;
  gap: var(--space-12);
  align-items: start;
}
.fm-answer-layout .answer-block {
  background: rgba(var(--color-primary-rgb), 0.03);
  border-left: 4px solid rgba(var(--color-accent-rgb), 0.35);
  padding: var(--space-6);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin-bottom: var(--space-6);
}
.fm-answer-layout .answer-block h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  color: var(--color-primary);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.fm-answer-layout .answer-block p {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-text);
  margin: 0;
}
.fm-area-snapshot {
  position: sticky;
  top: calc(var(--space-20) + 70px);
  background: var(--color-card-tint-2);
  border-radius: var(--radius-lg);
  padding: var(--space-8);
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.fm-area-snapshot h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin: 0;
  text-wrap: balance;
}
.fm-snapshot-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  font-size: var(--font-size-sm);
  color: var(--color-text);
  line-height: 1.6;
}
.fm-snapshot-item i,
.fm-snapshot-item svg {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: 2px;
}

/* ── 3. LOCAL CONTENT — REVERSE SPLIT ────────────────────────── */
.fm-local-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0 var(--space-20);
  overflow: hidden;
}
.fm-local-split {
  display: grid;
  grid-template-columns: 1.2fr 1fr;
  gap: var(--space-10);
  align-items: center;
}
.fm-local-image {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  order: 2;
}
.fm-local-image img {
  width: 100%;
  height: auto;
  display: block;
  aspect-ratio: 4 / 3;
  object-fit: cover;
}
.fm-local-image::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(90deg, var(--color-accent), rgba(var(--color-accent-rgb), 0.2));
  z-index: 1;
}
.fm-local-content h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.75rem, 3vw, 2.5rem);
  color: var(--color-primary);
  margin-bottom: var(--space-6);
  text-wrap: balance;
}
.fm-local-content .prose p {
  margin-bottom: var(--space-4);
}

/* ── 4. SIGNATURE SECTION: FREMONT FLOOD RESILIENCE GUIDE ────── */
/* Unique to Fremont — Platte River water management expertise */
.fm-flood-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.fm-flood-header {
  text-align: center;
  margin-bottom: var(--space-10);
}
.fm-flood-timeline {
  display: grid;
  grid-template-columns: 1fr 60px 1fr;
  gap: 0;
  max-width: 900px;
  margin: 0 auto;
}
.fm-flood-timeline__line {
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
}
.fm-flood-timeline__line::before {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  width: 3px;
  background: linear-gradient(to bottom, var(--color-accent), rgba(var(--color-accent-rgb), 0.15));
  border-radius: var(--radius-full);
}
.fm-flood-step {
  padding: var(--space-6) 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-2);
}
.fm-flood-step--left {
  text-align: right;
  padding-right: var(--space-6);
}
.fm-flood-step--right {
  text-align: left;
  padding-left: var(--space-6);
}
.fm-flood-step__dot {
  width: 16px;
  height: 16px;
  border-radius: var(--radius-full);
  background: var(--color-accent);
  border: 3px solid var(--color-bg);
  box-shadow: 0 0 0 2px rgba(var(--color-accent-rgb), 0.3);
  z-index: 1;
  margin: var(--space-8) 0;
  flex-shrink: 0;
}
.fm-flood-step h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0;
  text-wrap: balance;
}
.fm-flood-step p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  margin: 0;
}
/* Mobile timeline fallback */
.fm-flood-cards-mobile {
  display: none;
}
.fm-flood-card {
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.fm-flood-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.fm-flood-card__num {
  width: 40px;
  height: 40px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  color: var(--color-accent);
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: var(--font-size-sm);
}
.fm-flood-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0 0 var(--space-1);
  text-wrap: balance;
}
.fm-flood-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  margin: 0;
}

/* ── 5. SERVICES AVAILABLE ───────────────────────────────────── */
.fm-services-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0 var(--space-20);
  overflow: hidden;
}
.fm-services-list {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  margin-top: var(--space-10);
}
.fm-service-tile {
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  text-align: center;
}
.fm-service-tile:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.fm-service-tile__icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto;
  color: var(--color-accent);
}
.fm-service-tile__icon i,
.fm-service-tile__icon svg {
  width: 22px;
  height: 22px;
}
.fm-service-tile h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0;
  line-height: 1.3;
}
.fm-service-tile p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.55;
  margin: 0;
}
.fm-service-tile a {
  color: var(--color-accent);
  font-size: var(--font-size-sm);
  font-weight: 600;
  transition: color var(--transition-fast);
  margin-top: auto;
}
.fm-service-tile a:hover {
  color: var(--color-primary);
}

/* ── 6. WHY CRAWFORD FOR FREMONT ─────────────────────────────── */
.fm-why-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.fm-why-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-6);
  margin-top: var(--space-10);
}
.fm-why-card {
  border-radius: var(--radius-lg);
  padding: var(--space-8);
  display: flex;
  gap: var(--space-5);
  align-items: flex-start;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  position: relative;
  overflow: hidden;
}
.fm-why-card::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 3px;
  background: var(--color-accent);
  transition: width var(--transition-base);
}
.fm-why-card:hover::after {
  width: 100%;
}
.fm-why-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.fm-why-card__icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  color: var(--color-accent);
}
.fm-why-card__icon i,
.fm-why-card__icon svg {
  width: 22px;
  height: 22px;
}
.fm-why-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0 0 var(--space-2);
  text-wrap: balance;
}
.fm-why-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  margin: 0;
}

/* ── 7. CTA BANNER ───────────────────────────────────────────── */
.fm-cta-section {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  overflow: hidden;
  text-align: center;
}
.fm-cta-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(var(--color-accent-rgb), 0.12) 0%, transparent 60%);
  pointer-events: none;
}
.fm-cta-section::after {
  content: '';
  position: absolute;
  bottom: -70px;
  right: -70px;
  width: 220px;
  height: 220px;
  border-radius: var(--radius-full);
  border: 3px solid rgba(255, 255, 255, 0.04);
  pointer-events: none;
}
.fm-cta-section .container {
  position: relative;
  z-index: 1;
}
.fm-cta-section h2 {
  color: var(--color-white);
  font-size: clamp(1.75rem, 3.5vw, 2.75rem);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.fm-cta-section p {
  color: rgba(255, 255, 255, 0.85);
  font-size: var(--font-size-lg);
  max-width: 52ch;
  margin: 0 auto var(--space-8);
  line-height: 1.7;
}
.fm-cta-section .cta-buttons {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── RESPONSIVE ──────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .fm-answer-layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .fm-area-snapshot {
    position: static;
    order: -1;
  }
  .fm-local-split {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .fm-local-image {
    order: 0;
  }
  .fm-flood-timeline {
    display: none;
  }
  .fm-flood-cards-mobile {
    display: flex;
    flex-direction: column;
    gap: var(--space-4);
  }
  .fm-services-list {
    grid-template-columns: repeat(2, 1fr);
  }
  .fm-why-grid {
    grid-template-columns: 1fr;
  }
}
@media (max-width: 600px) {
  .fm-hero {
    min-height: 60vh;
    padding: var(--space-12) 0 var(--space-8);
  }
  .fm-services-list {
    grid-template-columns: 1fr;
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══ HERO ═══════════════════════════════════════════════════ -->
<section class="fm-hero" style="background-image:url('<?php echo $heroImg; ?>');">
  <div class="container">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <a href="/areas/">Service Areas</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <span class="breadcrumb-current">Fremont</span>
    </nav>

    <div class="eyebrow-label">
      <span class="eyebrow-dot" aria-hidden="true"></span>
      Fremont, NE
    </div>

    <h1>Roofing Contractor &amp; Gutter Services in <span class="accent-word">Fremont, NE</span></h1>

    <p class="hero-answer">
      Searching for roofing near me in Fremont? <?php echo htmlspecialchars($siteName); ?> is a licensed Nebraska
      roofing contractor based in Omaha, extending full-service roof repair, replacement, and gutter work to
      Fremont's 27,000 residents. Located about 35 miles northwest of our home office, Fremont is the largest
      community we serve outside the immediate Omaha metro — and we bring the same <?php echo $yearsInBusiness; ?>+ years
      of expertise to every Dodge County project.
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
      <span class="hero-trust-item"><i data-lucide="map-pin" aria-hidden="true"></i> Serving Fremont &amp; Dodge County</span>
      <span class="hero-trust-item"><i data-lucide="clock" aria-hidden="true"></i> <?php echo $yearsInBusiness; ?>+ Years Experience</span>
      <span class="hero-trust-item"><i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured</span>
    </div>
  </div>
</section>

<!-- ═══ ANSWER BLOCK + LOCAL CONTEXT ═════════════════════════ -->
<section class="fm-answer-section">
  <div class="fm-divider-angle fm-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-primary)" points="1200,0 0,55 1200,55"></polygon>
    </svg>
  </div>
  <div class="fm-floating-blob" aria-hidden="true"></div>

  <div class="container">
    <div class="fm-answer-layout">
      <aside class="fm-area-snapshot reveal-left">
        <h3>Fremont Quick Facts</h3>
        <div class="fm-snapshot-item">
          <i data-lucide="map-pin" aria-hidden="true"></i>
          <span>Dodge County seat — ~35 miles NW of Omaha</span>
        </div>
        <div class="fm-snapshot-item">
          <i data-lucide="users" aria-hidden="true"></i>
          <span>Population ~27,000 — largest city Crawford serves outside the metro</span>
        </div>
        <div class="fm-snapshot-item">
          <i data-lucide="graduation-cap" aria-hidden="true"></i>
          <span>Home to Midland University campus</span>
        </div>
        <div class="fm-snapshot-item">
          <i data-lucide="droplets" aria-hidden="true"></i>
          <span>Platte River floodplain — recurring water management challenges</span>
        </div>
        <div class="fm-snapshot-item">
          <i data-lucide="landmark" aria-hidden="true"></i>
          <span>Historic downtown along Main Street with century-old structures</span>
        </div>
        <div class="fm-snapshot-item">
          <i data-lucide="trending-up" aria-hidden="true"></i>
          <span>Growing Omaha commuter community with new south-side development</span>
        </div>
      </aside>

      <div class="fm-answer-content">
        <div class="section-title" style="text-align:left;">
          <span class="eyebrow-label reveal-up">Fremont Roofing</span>
          <h2 class="reveal-up">What Roofing &amp; Gutter Services Are Available in <span class="text-accent">Fremont?</span></h2>
        </div>

        <div class="answer-block reveal-up">
          <h3>How Much Does a Roof Replacement Cost in Fremont, NE?</h3>
          <p>
            A full roof replacement in Fremont ranges from $8,000 to $25,000+ depending on home size,
            material selection, and structural condition. Fremont's proximity to the Platte River means many
            roofs have experienced water-related stress beyond normal wear. Crawford provides detailed written
            estimates after an in-person inspection — never a rough guess over the phone.
          </p>
        </div>

        <div class="prose reveal-up reveal-delay-1">
          <p>
            Fremont is the Dodge County seat and a city with deep roots — its historic downtown along Main
            Street features structures dating back over a century. Many residential neighborhoods near Keene
            Memorial Library and Hormel Park contain homes built in the early 1900s through the 1960s, with
            roofing systems that have been replaced multiple times. Crawford's experience with older framing,
            irregular decking, and mixed-material layovers makes us a strong fit for Fremont's aging housing stock.
          </p>
          <p>
            The Platte River runs directly through Fremont's backyard. The city's flooding history — including
            significant events in 2010, 2011, and the devastating 2019 flood — has left many Fremont homes
            with lasting moisture damage in attic spaces, fascia boards, and soffit systems. Even homes that
            avoided direct flooding often show accelerated roof deterioration from sustained high humidity
            and standing water near foundations. Crawford addresses the full drainage chain: roof, gutters,
            and downspout extensions.
          </p>
          <p>
            Fremont is also growing as an Omaha commuter community. Newer construction on the south and west
            sides of Fremont features contemporary roofing materials and modern gutter systems. These homes
            benefit from Crawford's new-construction experience — we install GAF, Owens Corning, and
            CertainTeed systems on both retrofit and new-build projects across the Omaha metro.
          </p>
          <p>
            The Midland University campus area represents another distinct roofing profile in Fremont.
            Multi-unit student housing, older faculty residences, and campus-adjacent rental properties all
            have accelerated maintenance cycles. Crawford works with property managers and landlords throughout
            Fremont to keep rental properties code-compliant and tenant-safe.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ LOCAL CONTENT — SPLIT ════════════════════════════════ -->
<section class="fm-local-section">
  <div class="fm-divider-wave fm-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70 C250,25 550,65 850,20 C1000,8 1120,38 1200,28 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="fm-local-split">
      <div class="fm-local-content reveal-left">
        <h2>Fremont's Aging Homes Deserve <span class="text-accent">Expert Attention</span></h2>
        <div class="prose">
          <p>
            Downtown Fremont and the neighborhoods surrounding Hormel Park contain some of the oldest residential
            structures Crawford services. Victorian-era homes, Craftsman bungalows, and mid-century ranches each
            require different approaches to roof repair and gutter replacement. We don't apply a one-size approach —
            each Fremont inspection accounts for the home's age, construction style, and previous repair history.
          </p>
          <p>
            Beyond the historic core, Fremont's steady growth along Highway 77 and the Dodge County corridor
            has created a blend of 1980s subdivisions and recent infill development. Crawford's team adapts
            seamlessly between these eras — replacing 30-year-old three-tab shingles on ranch homes and installing
            architectural-grade systems on Fremont's newest builds.
          </p>
        </div>
      </div>
      <div class="fm-local-image reveal-right reveal-delay-1">
        <img src="<?php echo $secondaryImg; ?>"
             alt="Completed roof replacement on a Fremont, NE home near downtown"
             width="600" height="450" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ═══ SIGNATURE: FREMONT FLOOD RESILIENCE GUIDE ═══════════ -->
<section class="fm-flood-section">
  <div class="fm-divider-angle fm-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-bg-alt)" points="0,0 1200,55 0,55"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="fm-flood-header">
      <div class="section-title">
        <span class="eyebrow-label reveal-up">Water Management</span>
        <h2 class="reveal-up">Protecting Fremont Homes from <span class="text-accent">Water Damage</span></h2>
        <p class="prose-centered reveal-up reveal-delay-1">
          Fremont's Platte River proximity demands a proactive approach to roof and gutter maintenance.
          Here's Crawford's four-step process for Fremont properties.
        </p>
      </div>
    </div>

    <!-- Desktop timeline -->
    <div class="fm-flood-timeline reveal-up reveal-delay-2">
      <div class="fm-flood-step fm-flood-step--left">
        <h3>Full Drainage Assessment</h3>
        <p>We inspect roof slope, gutter capacity, downspout placement, and grading to identify where water collects or redirects toward your Fremont home's foundation.</p>
      </div>
      <div class="fm-flood-timeline__line">
        <div class="fm-flood-step__dot"></div>
        <div class="fm-flood-step__dot"></div>
        <div class="fm-flood-step__dot"></div>
        <div class="fm-flood-step__dot"></div>
      </div>
      <div class="fm-flood-step fm-flood-step--right" style="padding-top:var(--space-12);">
        <h3>Moisture Barrier Upgrade</h3>
        <p>Fremont's humidity demands enhanced ice-and-water shield on eaves, valleys, and penetrations — areas where standard underlayment fails in river-adjacent climates.</p>
      </div>

      <div class="fm-flood-step fm-flood-step--left" style="margin-top:calc(-1 * var(--space-6));">
        <h3>Oversized Gutter Systems</h3>
        <p>Standard 5-inch gutters often can't handle Fremont's intense spring downpours. We recommend 6-inch seamless gutters with 3x4 downspouts for high-volume water management.</p>
      </div>
      <div class="fm-flood-timeline__line"></div>
      <div class="fm-flood-step fm-flood-step--right" style="padding-top:var(--space-12);">
        <h3>Annual Maintenance Plan</h3>
        <p>Fremont properties benefit from twice-yearly gutter cleaning and annual roof inspections. We schedule these before spring rains and after fall leaf drop to prevent blockages.</p>
      </div>
    </div>

    <!-- Mobile card fallback -->
    <div class="fm-flood-cards-mobile">
      <div class="fm-flood-card card-tint-1 reveal-up reveal-delay-1">
        <div class="fm-flood-card__num">01</div>
        <div>
          <h3>Full Drainage Assessment</h3>
          <p>We inspect roof slope, gutter capacity, downspout placement, and grading to identify where water collects or redirects toward your Fremont home's foundation.</p>
        </div>
      </div>
      <div class="fm-flood-card card-tint-2 reveal-up reveal-delay-2">
        <div class="fm-flood-card__num">02</div>
        <div>
          <h3>Moisture Barrier Upgrade</h3>
          <p>Fremont's humidity demands enhanced ice-and-water shield on eaves, valleys, and penetrations — areas where standard underlayment fails in river-adjacent climates.</p>
        </div>
      </div>
      <div class="fm-flood-card card-tint-3 reveal-up reveal-delay-3">
        <div class="fm-flood-card__num">03</div>
        <div>
          <h3>Oversized Gutter Systems</h3>
          <p>Standard 5-inch gutters often can't handle Fremont's intense spring downpours. We recommend 6-inch seamless gutters with 3x4 downspouts for high-volume water management.</p>
        </div>
      </div>
      <div class="fm-flood-card card-tint-1 reveal-up reveal-delay-4">
        <div class="fm-flood-card__num">04</div>
        <div>
          <h3>Annual Maintenance Plan</h3>
          <p>Fremont properties benefit from twice-yearly gutter cleaning and annual roof inspections. We schedule these before spring rains and after fall leaf drop to prevent blockages.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SERVICES AVAILABLE IN FREMONT ════════════════════════ -->
<section class="fm-services-section">
  <div class="fm-divider-wave fm-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70 C350,18 650,58 950,22 C1080,10 1160,38 1200,30 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label reveal-up">What We Do</span>
      <h2 class="reveal-up">Roofing &amp; Gutter Services Available in <span class="text-accent">Fremont</span></h2>
      <p class="prose-centered reveal-up reveal-delay-1">
        Crawford dispatches the same experienced crews to Fremont that handle our Omaha metro projects. Every
        service below is fully available to Fremont residential and commercial clients.
      </p>
    </div>

    <div class="fm-services-list">
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
      $delays = ['reveal-delay-1', 'reveal-delay-2', 'reveal-delay-3'];
      foreach ($services as $i => $service):
          $icon = $serviceIcons[$service['slug']] ?? 'check-circle';
          $tint = $tints[$i % 3];
          $delay = $delays[$i % 3];
      ?>
      <div class="fm-service-tile <?php echo $tint; ?> reveal-up <?php echo $delay; ?>">
        <div class="fm-service-tile__icon"><i data-lucide="<?php echo $icon; ?>" aria-hidden="true"></i></div>
        <h3><?php echo htmlspecialchars($service['name']); ?></h3>
        <p>Serving Fremont homes and businesses across Dodge County.</p>
        <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/">Learn more &rarr;</a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ WHY CRAWFORD FOR FREMONT ════════════════════════════ -->
<section class="fm-why-section">
  <div class="fm-divider-angle fm-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-bg-alt)" points="1200,0 0,55 1200,55"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label reveal-up">Why Crawford</span>
      <h2 class="reveal-up">Why Fremont Residents Choose <span class="text-accent">Crawford Roofing</span></h2>
    </div>

    <div class="fm-why-grid">
      <div class="fm-why-card card-tint-1 reveal-up reveal-delay-1">
        <div class="fm-why-card__icon"><i data-lucide="truck" aria-hidden="true"></i></div>
        <div>
          <h3>Direct Service to Fremont</h3>
          <p>Our crews travel the Highway 275 corridor regularly. Fremont projects are scheduled alongside other Dodge County work for efficient, reliable timing.</p>
        </div>
      </div>
      <div class="fm-why-card card-tint-2 reveal-up reveal-delay-2">
        <div class="fm-why-card__icon"><i data-lucide="droplets" aria-hidden="true"></i></div>
        <div>
          <h3>Flood-Damage Restoration</h3>
          <p>After the 2019 Platte River flooding, Crawford repaired dozens of roofs across the region. We understand how water infiltration affects attic framing and decking long after floodwaters recede.</p>
        </div>
      </div>
      <div class="fm-why-card card-tint-3 reveal-up reveal-delay-3">
        <div class="fm-why-card__icon"><i data-lucide="landmark" aria-hidden="true"></i></div>
        <div>
          <h3>Historic Home Sensitivity</h3>
          <p>Fremont's downtown historic district requires material matching and careful decking work. We source period-appropriate profiles and colors that maintain the character of older Fremont homes.</p>
        </div>
      </div>
      <div class="fm-why-card card-tint-1 reveal-up reveal-delay-4">
        <div class="fm-why-card__icon"><i data-lucide="shield-check" aria-hidden="true"></i></div>
        <div>
          <h3><?php echo $yearsInBusiness; ?>+ Years, One Family</h3>
          <p>Crawford is a second-generation roofing operation. Your Fremont project is backed by decades of accumulated knowledge and a reputation that extends across the entire Omaha metro area.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CTA BANNER ═══════════════════════════════════════════ -->
<section class="fm-cta-section">
  <div class="container">
    <h2 class="reveal-up">Need a Roofer in Fremont?</h2>
    <p class="reveal-up reveal-delay-1">
      Crawford Roofing &amp; Gutters provides free on-site estimates throughout Fremont and Dodge County.
      Whether it's a quick gutter cleaning or a full roof replacement, we bring <?php echo $yearsInBusiness; ?>+
      years of Omaha-metro experience to your Fremont doorstep.
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
