<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ───────────────────────────────────────────────
$pageTitle       = 'Roof Repair & Gutter Services in Papillion, NE | ' . $siteName;
$pageDescription = 'Papillion, NE roofing contractor — Crawford Roofing & Gutters provides roof repair, replacement, gutter installation, and storm damage services. ' . $yearsInBusiness . '+ years. Free estimates for Papillion homes.';
$canonicalUrl    = $siteUrl . '/areas/papillion/';
$currentPage     = 'areas';
$cssVersion      = '3';

$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/';
$heroImg = $imgBase . '1779134049337-o7oznv-dff36b_a35b2df95a814ec49799d0169f3a87da_mv2.jpg';
$heroImagePreload = $heroImg;
$secondaryImg = $imgBase . '1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg';
$tertiaryImg  = $imgBase . '1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg';

// ── Schema ───────────────────────────────────────────────────
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',          'url' => $siteUrl . '/'],
    ['name' => 'Service Areas', 'url' => $siteUrl . '/areas/'],
    ['name' => 'Papillion',     'url' => $siteUrl . '/areas/papillion/'],
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
        'name' => 'Papillion',
        'addressRegion' => 'NE',
    ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<!-- Schema: BreadcrumbList -->
<script type="application/ld+json">
<?php echo $breadcrumbSchema; ?>
</script>

<!-- Schema: LocalBusiness -->
<script type="application/ld+json">
<?php echo $localBusinessSchema; ?>
</script>

<style>
/* ═══════════════════════════════════════════════════════════════
   Papillion Area Page — Page-Specific Styles
   Premium Tier — Unique prefix: .pp-
   Crawford Roofing & Gutters LLC
   ═══════════════════════════════════════════════════════════════ */

/* ── 1. HERO ─────────────────────────────────────────────────── */
.pp-hero {
  position: relative;
  min-height: 75vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroImg; ?>');
  background-size: cover;
  background-position: center 40%;
  background-repeat: no-repeat;
  overflow: hidden;
  padding: var(--space-16) 0 var(--space-12);
}
.pp-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    145deg,
    rgba(var(--color-primary-rgb), 0.95) 0%,
    rgba(var(--color-primary-rgb), 0.82) 40%,
    rgba(var(--color-secondary-rgb), 0.68) 100%
  );
  z-index: 1;
}
.pp-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  opacity: 0.11;
  z-index: 1;
  pointer-events: none;
}
.pp-hero .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.pp-hero .hero-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
}
.pp-hero .hero-breadcrumb a {
  color: rgba(255, 255, 255, 0.6);
  transition: color var(--transition-fast);
}
.pp-hero .hero-breadcrumb a:hover {
  color: rgba(255, 255, 255, 0.9);
}
.pp-hero .hero-breadcrumb .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.35);
  font-size: var(--font-size-xs);
}
.pp-hero .hero-breadcrumb .breadcrumb-current {
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(1.8);
  font-weight: 600;
}
.pp-hero .eyebrow-label {
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
.pp-hero .eyebrow-label .eyebrow-dot {
  width: 5px;
  height: 5px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.pp-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 3.75rem);
  line-height: 1.08;
  margin-bottom: var(--space-6);
  text-wrap: balance;
  max-width: 24ch;
}
.pp-hero h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.7);
}
.pp-hero .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 640px;
  margin-bottom: var(--space-8);
}
.pp-hero .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-10);
}
.pp-hero .hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  align-items: center;
}
.pp-hero .hero-trust-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.75);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.pp-hero .hero-trust-item i,
.pp-hero .hero-trust-item svg {
  width: 16px;
  height: 16px;
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(2);
}

/* ── Section Dividers ────────────────────────────────────────── */
.pp-divider-angle {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.pp-divider-angle--top { top: -1px; }
.pp-divider-angle--bottom { bottom: -1px; }
.pp-divider-angle svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 55px;
}
.pp-divider-wave {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.pp-divider-wave--top { top: -1px; }
.pp-divider-wave--bottom { bottom: -1px; }
.pp-divider-wave svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 70px;
}

/* ── 2. ANSWER BLOCK ─────────────────────────────────────────── */
.pp-answer-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.pp-answer-section .pp-floating-blob {
  position: absolute;
  width: 420px;
  height: 420px;
  border-radius: 48% 52% 55% 45% / 50% 44% 56% 50%;
  background: rgba(var(--color-accent-rgb), 0.03);
  pointer-events: none;
  z-index: 0;
  top: -130px;
  left: -180px;
  animation: pp-blob-float 22s ease-in-out infinite;
}
@keyframes pp-blob-float {
  0%, 100% { transform: translate(0, 0) rotate(0deg) scale(1); }
  33% { transform: translate(22px, 15px) rotate(-3deg) scale(1.03); }
  66% { transform: translate(-10px, -18px) rotate(5deg) scale(0.97); }
}
.pp-answer-content {
  position: relative;
  z-index: 1;
}
.pp-answer-content .section-title {
  text-align: left;
}
.pp-answer-content .answer-block {
  background: rgba(var(--color-primary-rgb), 0.03);
  border-left: 4px solid rgba(var(--color-accent-rgb), 0.35);
  padding: var(--space-6);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin: var(--space-6) 0;
}
.pp-answer-content .answer-block p {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-text);
  margin: 0;
}

/* ── 3. LOCAL CONTENT ────────────────────────────────────────── */
.pp-local-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0 var(--space-20);
  overflow: hidden;
}

/* SIGNATURE SECTION: New vs Old Construction Comparison */
.pp-comparison-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-8);
  margin-top: var(--space-10);
  position: relative;
}
.pp-comparison-grid::before {
  content: '';
  position: absolute;
  top: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 2px;
  height: 100%;
  background: linear-gradient(
    to bottom,
    transparent 0%,
    rgba(var(--color-accent-rgb), 0.25) 15%,
    rgba(var(--color-accent-rgb), 0.25) 85%,
    transparent 100%
  );
  z-index: 1;
}
.pp-comparison-card {
  border-radius: var(--radius-lg);
  padding: var(--space-8);
  position: relative;
  overflow: hidden;
}
.pp-comparison-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: var(--color-accent);
  opacity: 0.5;
}
.pp-comparison-label {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  padding: var(--space-1) var(--space-3);
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.1);
  color: var(--color-accent);
  font-size: var(--font-size-xs);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.06em;
  margin-bottom: var(--space-4);
}
.pp-comparison-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  color: var(--color-primary);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.pp-comparison-card p {
  font-size: var(--font-size-base);
  color: var(--color-text);
  line-height: 1.7;
  margin-bottom: var(--space-4);
  max-width: 65ch;
}
.pp-comparison-card p:last-child {
  margin-bottom: 0;
}
.pp-comparison-features {
  list-style: none;
  padding: 0;
  margin: var(--space-4) 0 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.pp-comparison-features li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: var(--color-text);
  line-height: 1.5;
}
.pp-comparison-features li i,
.pp-comparison-features li svg {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: 2px;
}

/* ── Additional Local Content ──────────────────────────────── */
.pp-local-asym {
  display: grid;
  grid-template-columns: 1.3fr 1fr;
  gap: var(--space-12);
  align-items: center;
  margin-top: var(--space-16);
}
.pp-local-image {
  border-radius: var(--radius-xl);
  overflow: hidden;
  aspect-ratio: 4 / 3;
  position: relative;
}
.pp-local-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.pp-local-image::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: var(--radius-xl);
  box-shadow: inset 0 0 0 2px rgba(var(--color-accent-rgb), 0.10);
  pointer-events: none;
}
.pp-local-text h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  color: var(--color-primary);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.pp-local-text p {
  font-size: var(--font-size-base);
  color: var(--color-text);
  line-height: 1.7;
  margin-bottom: var(--space-4);
  max-width: 65ch;
}
.pp-local-text p:last-child {
  margin-bottom: 0;
}

/* ── 4. SERVICES AVAILABLE ─────────────────────────────────── */
.pp-services-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.pp-services-flex {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  margin-top: var(--space-10);
}
.pp-service-tile {
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  display: flex;
  align-items: center;
  gap: var(--space-4);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.pp-service-tile:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.pp-service-tile__icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-full);
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.1);
  color: var(--color-accent);
  flex-shrink: 0;
}
.pp-service-tile__icon i,
.pp-service-tile__icon svg {
  width: 22px;
  height: 22px;
}
.pp-service-tile__text h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0 0 var(--space-1);
  line-height: 1.3;
}
.pp-service-tile__text a {
  font-size: var(--font-size-sm);
  color: var(--color-accent);
  font-weight: 600;
  transition: color var(--transition-fast);
}
.pp-service-tile__text a:hover {
  color: var(--color-primary);
}

/* ── 5. WHY CHOOSE CRAWFORD FOR PAPILLION ─────────────────── */
.pp-why-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.pp-why-strip {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
  margin-top: var(--space-10);
}
.pp-why-item {
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: var(--space-4);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  position: relative;
}
.pp-why-item::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 0;
  height: 3px;
  background: var(--color-accent);
  border-radius: var(--radius-full);
  transition: width var(--transition-base);
}
.pp-why-item:hover::after {
  width: 60%;
}
.pp-why-item:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.pp-why-item__icon {
  width: 56px;
  height: 56px;
  border-radius: var(--radius-full);
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.1);
  color: var(--color-accent);
}
.pp-why-item__icon i,
.pp-why-item__icon svg {
  width: 24px;
  height: 24px;
}
.pp-why-item h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0;
  line-height: 1.3;
}
.pp-why-item p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  margin: 0;
}

/* ── 6. CTA BANNER ─────────────────────────────────────────── */
.pp-cta-section {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  overflow: hidden;
  text-align: center;
}
.pp-cta-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(155deg, rgba(var(--color-accent-rgb), 0.16) 0%, transparent 50%);
  pointer-events: none;
}
.pp-cta-section::after {
  content: '';
  position: absolute;
  bottom: -50px;
  left: -50px;
  width: 180px;
  height: 180px;
  border-radius: var(--radius-full);
  border: 3px solid rgba(255, 255, 255, 0.04);
  pointer-events: none;
}
.pp-cta-section .container {
  position: relative;
  z-index: 1;
}
.pp-cta-section h2 {
  color: var(--color-white);
  font-size: clamp(1.75rem, 3.5vw, 2.75rem);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.pp-cta-section p {
  color: rgba(255, 255, 255, 0.85);
  font-size: var(--font-size-lg);
  max-width: 52ch;
  margin: 0 auto var(--space-8);
  line-height: 1.7;
}
.pp-cta-section .cta-buttons {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── RESPONSIVE ──────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .pp-comparison-grid {
    grid-template-columns: 1fr;
    gap: var(--space-6);
  }
  .pp-comparison-grid::before {
    display: none;
  }
  .pp-local-asym {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .pp-services-flex {
    grid-template-columns: repeat(2, 1fr);
  }
  .pp-why-strip {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 600px) {
  .pp-hero {
    min-height: 60vh;
    padding: var(--space-12) 0 var(--space-8);
  }
  .pp-services-flex {
    grid-template-columns: 1fr;
  }
  .pp-why-strip {
    grid-template-columns: 1fr;
  }
  .pp-hero .hero-ctas {
    flex-direction: column;
  }
  .pp-hero .hero-trust {
    flex-direction: column;
    gap: var(--space-3);
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══ HERO ═══════════════════════════════════════════════════ -->
<section class="pp-hero" style="background-image:url('<?php echo $heroImg; ?>');">
  <div class="container">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <a href="/areas/">Service Areas</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <span class="breadcrumb-current">Papillion</span>
    </nav>

    <div class="eyebrow-label">
      <span class="eyebrow-dot" aria-hidden="true"></span>
      Papillion, NE
    </div>

    <h1>Roof Repair &amp; Gutter Services in <span class="accent-word">Papillion, NE</span></h1>

    <p class="hero-answer">
      Crawford Roofing &amp; Gutters LLC is a licensed Nebraska contractor delivering roof repair,
      replacement, and gutter services to Papillion homeowners. As one of the fastest-growing suburbs
      in the Omaha metro, Papillion's mix of new construction and established neighborhoods demands
      a roofer with <?php echo $yearsInBusiness; ?>+ years of hands-on experience.
    </p>

    <div class="hero-ctas">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Papillion Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> <?php echo formatPhone($phone); ?>
      </a>
      <?php endif; ?>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="map-pin" aria-hidden="true"></i> Serving Papillion</span>
      <span class="hero-trust-item"><i data-lucide="clock" aria-hidden="true"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      <span class="hero-trust-item"><i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured</span>
    </div>
  </div>
</section>

<!-- ═══ ANSWER BLOCK ═════════════════════════════════════════ -->
<section class="pp-answer-section">
  <div class="pp-divider-angle pp-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-primary)" points="0,0 1200,55 0,55"></polygon>
    </svg>
  </div>
  <div class="pp-floating-blob" aria-hidden="true"></div>

  <div class="container">
    <div class="pp-answer-content">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Papillion Roofing</span>
        <h2>What Roof &amp; Gutter Services Can I Get <span class="text-accent">in Papillion?</span></h2>
      </div>

      <div class="answer-block reveal-up">
        <p>
          Papillion homeowners searching for roofing near me in Papillion have full access to Crawford's
          9 core services: roof repair, roof replacement, new roof installation, roof inspection, gutter
          installation, gutter addition, gutter repair, gutter replacement, and gutter cleaning. We serve
          every Papillion neighborhood from Tara Hills to the newest developments west of 96th Street.
        </p>
      </div>

      <p class="prose reveal-up reveal-delay-1">
        Papillion is the Sarpy County seat and one of the most desirable suburbs south of Omaha. The area
        around Shadow Lake Towne Center and Werner Park — home of the Omaha Storm Chasers — represents the
        commercial heart of Papillion, surrounded by residential developments that range from 1970s split-levels
        to homes built last year. That age diversity means Crawford handles everything from 50-year-old roof
        tear-offs to builder-warranty punch-list items on brand-new Papillion construction.
      </p>

      <p class="prose reveal-up reveal-delay-2">
        The Papillion La Vista School District drives family migration into the area, and new subdivisions
        keep pushing westward. Homes in Tara Hills and Overland Hills were built primarily in the 1980s-1990s
        and are entering their second or third roofing cycle. Established east-side Papillion homes near
        downtown often have original cedar shake or early three-tab shingles that have far exceeded their
        useful life.
      </p>

      <p class="prose reveal-up reveal-delay-3">
        Papillion sits in the core of Nebraska's hail corridor. The 2024 storm season brought multiple hail
        events that damaged roofs across Sarpy County. Crawford's storm damage assessment crews are familiar
        with Papillion's most vulnerable neighborhoods and can have an inspector on-site within 24 hours of
        a major weather event.
      </p>
    </div>
  </div>
</section>

<!-- ═══ SIGNATURE: NEW vs ESTABLISHED COMPARISON ════════════ -->
<section class="pp-local-section">
  <div class="pp-divider-wave pp-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70 C300,20 600,60 900,25 C1050,10 1150,40 1200,30 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label reveal-up">Two Sides of Papillion</span>
      <h2 class="reveal-up">New Construction vs. Established Homes — <span class="text-accent">Different Roofing Needs</span></h2>
      <p class="section-subtitle reveal-up reveal-delay-1">Papillion's rapid growth creates two distinct roofing markets</p>
    </div>

    <div class="pp-comparison-grid">
      <div class="pp-comparison-card card-tint-1 reveal-left">
        <span class="pp-comparison-label"><i data-lucide="hammer" aria-hidden="true"></i> West Papillion</span>
        <h3>Newer Construction (2005-Present)</h3>
        <p>
          West Papillion neighborhoods feature builder-grade architectural shingles installed during
          construction. While these roofs are younger, they face specific Papillion challenges:
          builder-minimum install quality, rapid settlement causing flashing gaps, and HOA requirements
          for color and material matching during repairs.
        </p>
        <ul class="pp-comparison-features">
          <li><i data-lucide="check" aria-hidden="true"></i> Builder warranty coordination</li>
          <li><i data-lucide="check" aria-hidden="true"></i> HOA color and material compliance</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Settlement-related flashing repairs</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Proactive gutter addition on minimal-gutter homes</li>
        </ul>
      </div>

      <div class="pp-comparison-card card-tint-2 reveal-right">
        <span class="pp-comparison-label"><i data-lucide="home" aria-hidden="true"></i> East Papillion</span>
        <h3>Established Neighborhoods (1970s-2000s)</h3>
        <p>
          Tara Hills, Overland Hills, and neighborhoods near downtown Papillion contain homes on their
          second or third roof. These Papillion properties often need full deck inspection during tear-off,
          ventilation upgrades to modern code, and gutter systems sized for today's storm intensity.
        </p>
        <ul class="pp-comparison-features">
          <li><i data-lucide="check" aria-hidden="true"></i> Full decking assessment during replacement</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Ventilation upgrades to current code</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Oversized gutter installation for aging drainage</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Insurance claim support for storm damage</li>
        </ul>
      </div>
    </div>

    <!-- Additional local content -->
    <div class="pp-local-asym" style="margin-top:var(--space-16);">
      <div class="pp-local-text reveal-left">
        <h3>Papillion's Hail Corridor Problem</h3>
        <p>
          Sarpy County sits in the heart of Nebraska's hail corridor. Papillion homeowners file more
          hail-related insurance claims per capita than almost any community in the metro. Crawford
          works directly with insurance adjusters, providing detailed photo documentation and
          manufacturer-specification evidence that supports Papillion homeowners' claims.
        </p>
        <p>
          After a hail event, our Papillion inspection team checks not just shingles but also gutters,
          downspouts, fascia, and soffit. Hail that dents a gutter can compromise its pitch and cause
          standing water — a slow-burn problem many Papillion homeowners discover only when ice dams
          form the following winter.
        </p>
      </div>
      <div class="pp-local-image reveal-right">
        <img src="<?php echo $secondaryImg; ?>" alt="Hail damage inspection on a Papillion, NE roof" width="800" height="600" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ═══ SERVICES AVAILABLE ═══════════════════════════════════ -->
<section class="pp-services-section">
  <div class="pp-divider-angle pp-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-bg-alt)" points="1200,0 0,55 1200,55"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label reveal-up">Complete Service Menu</span>
      <h2 class="reveal-up">All 9 Services Available to <span class="text-accent">Papillion Homeowners</span></h2>
    </div>

    <div class="pp-services-flex">
      <?php
      $serviceIcons = [
          'gutter-addition'       => 'ruler',
          'gutter-cleaning'       => 'sparkles',
          'gutter-installation'   => 'droplets',
          'gutter-repair'         => 'wrench',
          'gutter-replacement'    => 'filter',
          'roof-inspection'       => 'search',
          'roof-repair'           => 'hammer',
          'roof-replacement'      => 'home',
          'new-roof-installation' => 'hard-hat',
      ];
      $tints = ['card-tint-1', 'card-tint-2', 'card-tint-3'];
      $delays = ['reveal-delay-1', 'reveal-delay-2', 'reveal-delay-3'];
      foreach ($services as $i => $service):
          $icon = $serviceIcons[$service['slug']] ?? 'check-circle';
          $tint = $tints[$i % 3];
          $delay = $delays[$i % 3];
      ?>
      <div class="pp-service-tile <?php echo $tint; ?> reveal-up <?php echo $delay; ?>">
        <div class="pp-service-tile__icon"><i data-lucide="<?php echo $icon; ?>" aria-hidden="true"></i></div>
        <div class="pp-service-tile__text">
          <h3><?php echo htmlspecialchars($service['name']); ?></h3>
          <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/">Learn more &rarr;</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ WHY CHOOSE CRAWFORD FOR PAPILLION ═══════════════════ -->
<section class="pp-why-section">
  <div class="pp-divider-wave pp-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,0 L1200,0 L1200,70 C900,30 600,65 300,20 C150,5 50,40 0,30 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label reveal-up">Why Crawford</span>
      <h2 class="reveal-up">Why Papillion Families <span class="text-accent">Choose Crawford</span></h2>
    </div>

    <div class="pp-why-strip">
      <div class="pp-why-item card-tint-1 reveal-up reveal-delay-1">
        <div class="pp-why-item__icon"><i data-lucide="cloud-lightning" aria-hidden="true"></i></div>
        <h3>Storm Damage Experts</h3>
        <p>Sarpy County hail experience means faster claims and proper documentation for Papillion insurance filings.</p>
      </div>
      <div class="pp-why-item card-tint-2 reveal-up reveal-delay-2">
        <div class="pp-why-item__icon"><i data-lucide="ruler" aria-hidden="true"></i></div>
        <h3>New &amp; Old Expertise</h3>
        <p>From Tara Hills tear-offs to west Papillion warranty repairs, we handle every era of construction.</p>
      </div>
      <div class="pp-why-item card-tint-3 reveal-up reveal-delay-3">
        <div class="pp-why-item__icon"><i data-lucide="truck" aria-hidden="true"></i></div>
        <h3>Minutes Away</h3>
        <p>Our Giles Road HQ is less than 10 minutes from Papillion — fast response for estimates and emergencies.</p>
      </div>
      <div class="pp-why-item card-tint-1 reveal-up reveal-delay-4">
        <div class="pp-why-item__icon"><i data-lucide="file-check" aria-hidden="true"></i></div>
        <h3>HOA Compliant</h3>
        <p>We match colors and materials to Papillion HOA specs — no surprises, no violation letters.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CTA BANNER ═══════════════════════════════════════════ -->
<section class="pp-cta-section">
  <div class="container">
    <h2 class="reveal-up">Papillion Roofing &amp; Gutters — Free Estimates</h2>
    <p class="reveal-up reveal-delay-1">
      Whether your Papillion home needs hail damage repair or a full gutter system, Crawford Roofing
      delivers honest assessments backed by <?php echo $yearsInBusiness; ?>+ years of metro experience.
      Schedule your free on-site inspection today.
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
