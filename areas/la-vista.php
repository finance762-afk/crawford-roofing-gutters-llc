<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ───────────────────────────────────────────────
$pageTitle       = 'Roofing & Gutter Installation in La Vista, NE | ' . $siteName;
$pageDescription = 'La Vista, NE roofing and gutter contractor — Crawford Roofing & Gutters offers roof repair, installation, gutter services, and storm damage repair. ' . $yearsInBusiness . '+ years of experience. Free estimates.';
$canonicalUrl    = $siteUrl . '/areas/la-vista/';
$currentPage     = 'areas';
$cssVersion      = '3';

$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/';
$heroImg = $imgBase . '1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg';
$heroImagePreload = $heroImg;
$secondaryImg = $imgBase . '1779134049337-o7oznv-dff36b_a35b2df95a814ec49799d0169f3a87da_mv2.jpg';
$tertiaryImg  = $imgBase . '1779134048805-bkz97m-dff36b_381e49a0e2c841a4a0db9e9691fb2386_mv2.jpg';

// ── Schema ───────────────────────────────────────────────────
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',          'url' => $siteUrl . '/'],
    ['name' => 'Service Areas', 'url' => $siteUrl . '/areas/'],
    ['name' => 'La Vista',      'url' => $siteUrl . '/areas/la-vista/'],
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
        'name' => 'La Vista',
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
   La Vista Area Page — Page-Specific Styles
   Premium Tier — Unique prefix: .lv-
   Crawford Roofing & Gutters LLC
   ═══════════════════════════════════════════════════════════════ */

/* ── 1. HERO ─────────────────────────────────────────────────── */
.lv-hero {
  position: relative;
  min-height: 75vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroImg; ?>');
  background-size: cover;
  background-position: center 35%;
  background-repeat: no-repeat;
  overflow: hidden;
  padding: var(--space-16) 0 var(--space-12);
}
.lv-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    155deg,
    rgba(var(--color-primary-rgb), 0.93) 0%,
    rgba(var(--color-primary-rgb), 0.80) 38%,
    rgba(var(--color-secondary-rgb), 0.64) 100%
  );
  z-index: 1;
}
.lv-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  opacity: 0.10;
  z-index: 1;
  pointer-events: none;
}
.lv-hero .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.lv-hero .hero-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
}
.lv-hero .hero-breadcrumb a {
  color: rgba(255, 255, 255, 0.6);
  transition: color var(--transition-fast);
}
.lv-hero .hero-breadcrumb a:hover {
  color: rgba(255, 255, 255, 0.9);
}
.lv-hero .hero-breadcrumb .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.35);
  font-size: var(--font-size-xs);
}
.lv-hero .hero-breadcrumb .breadcrumb-current {
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(1.8);
  font-weight: 600;
}
.lv-hero .eyebrow-label {
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
.lv-hero .eyebrow-label .eyebrow-dot {
  width: 5px;
  height: 5px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.lv-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 3.75rem);
  line-height: 1.08;
  margin-bottom: var(--space-6);
  text-wrap: balance;
  max-width: 24ch;
}
.lv-hero h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.7);
}
.lv-hero .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 640px;
  margin-bottom: var(--space-8);
}
.lv-hero .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-10);
}
.lv-hero .hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  align-items: center;
}
.lv-hero .hero-trust-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.75);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.lv-hero .hero-trust-item i,
.lv-hero .hero-trust-item svg {
  width: 16px;
  height: 16px;
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(2);
}

/* ── Section Dividers ────────────────────────────────────────── */
.lv-divider-angle {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.lv-divider-angle--top { top: -1px; }
.lv-divider-angle--bottom { bottom: -1px; }
.lv-divider-angle svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 55px;
}
.lv-divider-wave {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.lv-divider-wave--top { top: -1px; }
.lv-divider-wave--bottom { bottom: -1px; }
.lv-divider-wave svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 70px;
}

/* ── 2. ANSWER BLOCK ─────────────────────────────────────────── */
.lv-answer-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.lv-answer-section .lv-floating-blob {
  position: absolute;
  width: 360px;
  height: 360px;
  border-radius: 50% 50% 45% 55% / 55% 42% 58% 45%;
  background: rgba(var(--color-accent-rgb), 0.03);
  pointer-events: none;
  z-index: 0;
  top: -100px;
  right: -140px;
  animation: lv-blob-float 19s ease-in-out infinite;
}
@keyframes lv-blob-float {
  0%, 100% { transform: translate(0, 0) rotate(0deg); }
  33% { transform: translate(-16px, 20px) rotate(3deg); }
  66% { transform: translate(12px, -14px) rotate(-4deg); }
}
.lv-answer-content {
  position: relative;
  z-index: 1;
}
.lv-answer-content .section-title {
  text-align: left;
}
.lv-answer-content .answer-block {
  background: rgba(var(--color-primary-rgb), 0.03);
  border-left: 4px solid rgba(var(--color-accent-rgb), 0.35);
  padding: var(--space-6);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin: var(--space-6) 0;
}
.lv-answer-content .answer-block p {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-text);
  margin: 0;
}

/* ── 3. LOCAL CONTENT ────────────────────────────────────────── */
.lv-local-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0 var(--space-20);
  overflow: hidden;
}

/* SIGNATURE SECTION: La Vista Central Hub Layout — Radial Service Map */
.lv-hub-layout {
  display: grid;
  grid-template-columns: 1fr 2fr;
  gap: var(--space-10);
  margin-top: var(--space-10);
  align-items: start;
}
.lv-hub-center {
  border-radius: var(--radius-xl);
  padding: var(--space-8);
  background: var(--color-primary);
  color: var(--color-white);
  position: sticky;
  top: calc(var(--space-20) + 80px);
  text-align: center;
}
.lv-hub-center::before {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: var(--radius-xl);
  background: linear-gradient(135deg, rgba(var(--color-accent-rgb), 0.15), transparent 60%);
  pointer-events: none;
}
.lv-hub-center .lv-hub-icon {
  width: 64px;
  height: 64px;
  border-radius: var(--radius-full);
  background: rgba(255, 255, 255, 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-4);
  position: relative;
  z-index: 1;
}
.lv-hub-center .lv-hub-icon i,
.lv-hub-center .lv-hub-icon svg {
  width: 28px;
  height: 28px;
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.8);
}
.lv-hub-center h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-4);
  position: relative;
  z-index: 1;
  text-wrap: balance;
}
.lv-hub-center p {
  font-size: var(--font-size-sm);
  line-height: 1.65;
  color: rgba(255, 255, 255, 0.8);
  position: relative;
  z-index: 1;
  margin: 0;
}
.lv-hub-center .lv-hub-stat {
  display: flex;
  justify-content: center;
  gap: var(--space-6);
  margin-top: var(--space-6);
  padding-top: var(--space-6);
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  position: relative;
  z-index: 1;
}
.lv-hub-center .lv-hub-stat-item {
  text-align: center;
}
.lv-hub-center .lv-hub-stat-number {
  font-family: var(--font-heading);
  font-size: var(--font-size-2xl);
  display: block;
}
.lv-hub-center .lv-hub-stat-label {
  font-size: var(--font-size-xs);
  color: rgba(255, 255, 255, 0.6);
  display: block;
}
.lv-hub-areas {
  display: flex;
  flex-direction: column;
  gap: var(--space-6);
}
.lv-hub-card {
  border-radius: var(--radius-lg);
  padding: var(--space-6) var(--space-8);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  position: relative;
}
.lv-hub-card:hover {
  transform: translateX(6px);
  box-shadow: var(--shadow-md);
}
.lv-hub-card::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  width: 4px;
  height: 0;
  background: var(--color-accent);
  border-radius: var(--radius-full);
  transition: height var(--transition-base);
}
.lv-hub-card:hover::before {
  height: 60%;
}
.lv-hub-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.lv-hub-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text);
  line-height: 1.65;
  margin: 0;
  max-width: 65ch;
}

/* ── 4. SERVICES AVAILABLE ─────────────────────────────────── */
.lv-services-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.lv-services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  margin-top: var(--space-10);
}
.lv-service-card {
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  display: flex;
  align-items: center;
  gap: var(--space-4);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.lv-service-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.lv-service-card__icon {
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
.lv-service-card__icon i,
.lv-service-card__icon svg {
  width: 22px;
  height: 22px;
}
.lv-service-card__text h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0 0 var(--space-1);
  line-height: 1.3;
}
.lv-service-card__text a {
  font-size: var(--font-size-sm);
  color: var(--color-accent);
  font-weight: 600;
  transition: color var(--transition-fast);
}
.lv-service-card__text a:hover {
  color: var(--color-primary);
}

/* ── 5. WHY CHOOSE CRAWFORD FOR LA VISTA ─────────────────── */
.lv-why-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.lv-why-grid {
  display: grid;
  grid-template-columns: 1.2fr 1fr;
  gap: var(--space-12);
  align-items: center;
  margin-top: var(--space-10);
}
.lv-why-content h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  color: var(--color-primary);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.lv-why-content p {
  font-size: var(--font-size-base);
  color: var(--color-text);
  line-height: 1.7;
  margin-bottom: var(--space-4);
  max-width: 65ch;
}
.lv-why-content p:last-child {
  margin-bottom: 0;
}
.lv-why-image {
  border-radius: var(--radius-xl);
  overflow: hidden;
  aspect-ratio: 4 / 3;
  position: relative;
}
.lv-why-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.lv-why-image::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: var(--radius-xl);
  box-shadow: inset 0 0 0 2px rgba(var(--color-accent-rgb), 0.10);
  pointer-events: none;
}
.lv-why-badges {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-3);
  margin-top: var(--space-6);
}
.lv-why-badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  padding: var(--space-2) var(--space-4);
  border-radius: var(--radius-full);
  background: rgba(var(--color-primary-rgb), 0.06);
  color: var(--color-primary);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.lv-why-badge i,
.lv-why-badge svg {
  width: 14px;
  height: 14px;
  color: var(--color-accent);
}

/* ── 6. CTA BANNER ─────────────────────────────────────────── */
.lv-cta-section {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  overflow: hidden;
  text-align: center;
}
.lv-cta-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(140deg, rgba(var(--color-accent-rgb), 0.12) 0%, transparent 55%);
  pointer-events: none;
}
.lv-cta-section::after {
  content: '';
  position: absolute;
  top: -60px;
  right: -60px;
  width: 200px;
  height: 200px;
  border-radius: var(--radius-full);
  border: 3px solid rgba(255, 255, 255, 0.05);
  pointer-events: none;
}
.lv-cta-section .container {
  position: relative;
  z-index: 1;
}
.lv-cta-section h2 {
  color: var(--color-white);
  font-size: clamp(1.75rem, 3.5vw, 2.75rem);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.lv-cta-section p {
  color: rgba(255, 255, 255, 0.85);
  font-size: var(--font-size-lg);
  max-width: 52ch;
  margin: 0 auto var(--space-8);
  line-height: 1.7;
}
.lv-cta-section .cta-buttons {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── RESPONSIVE ──────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .lv-hub-layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .lv-hub-center {
    position: static;
  }
  .lv-services-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .lv-why-grid {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
}
@media (max-width: 600px) {
  .lv-hero {
    min-height: 60vh;
    padding: var(--space-12) 0 var(--space-8);
  }
  .lv-services-grid {
    grid-template-columns: 1fr;
  }
  .lv-hero .hero-ctas {
    flex-direction: column;
  }
  .lv-hero .hero-trust {
    flex-direction: column;
    gap: var(--space-3);
  }
  .lv-hub-center .lv-hub-stat {
    flex-direction: column;
    gap: var(--space-3);
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══ HERO ═══════════════════════════════════════════════════ -->
<section class="lv-hero" style="background-image:url('<?php echo $heroImg; ?>');">
  <div class="container">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <a href="/areas/">Service Areas</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <span class="breadcrumb-current">La Vista</span>
    </nav>

    <div class="eyebrow-label">
      <span class="eyebrow-dot" aria-hidden="true"></span>
      La Vista, NE
    </div>

    <h1>Roofing &amp; Gutter Installation in <span class="accent-word">La Vista, NE</span></h1>

    <p class="hero-answer">
      Crawford Roofing &amp; Gutters LLC is a licensed Nebraska contractor serving La Vista with
      full-scope roofing and gutter services. Located in central Sarpy County with direct I-80 access,
      La Vista homeowners get same-day response from our crews based just minutes away on Giles Road.
      Our <?php echo $yearsInBusiness; ?>+ years of experience cover every La Vista neighborhood.
    </p>

    <div class="hero-ctas">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free La Vista Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> <?php echo formatPhone($phone); ?>
      </a>
      <?php endif; ?>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="map-pin" aria-hidden="true"></i> Serving La Vista</span>
      <span class="hero-trust-item"><i data-lucide="clock" aria-hidden="true"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      <span class="hero-trust-item"><i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured</span>
    </div>
  </div>
</section>

<!-- ═══ ANSWER BLOCK ═════════════════════════════════════════ -->
<section class="lv-answer-section">
  <div class="lv-divider-angle lv-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-primary)" points="1200,0 0,55 1200,55"></polygon>
    </svg>
  </div>
  <div class="lv-floating-blob" aria-hidden="true"></div>

  <div class="container">
    <div class="lv-answer-content">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">La Vista Roofing</span>
        <h2>What Roofing &amp; Gutter Services Can I Find <span class="text-accent">in La Vista?</span></h2>
      </div>

      <div class="answer-block reveal-up">
        <p>
          La Vista residents searching for roofing near me in La Vista can access all 9 Crawford services:
          roof repair, roof replacement, new roof installation, roof inspection, gutter installation,
          gutter addition, gutter repair, gutter replacement, and gutter cleaning. We cover every La Vista
          zip code for both residential and commercial properties.
        </p>
      </div>

      <p class="prose reveal-up reveal-delay-1">
        La Vista occupies a central position in Sarpy County, bordered by Papillion to the south and
        Omaha to the north. The La Vista City Centre development has transformed the city's commercial
        core, bringing new mixed-use construction alongside the established residential neighborhoods
        that have defined La Vista for decades. This blend of old and new means Crawford handles everything
        from aging three-tab shingle replacements on 1970s ranch homes to warranty-covered repairs on
        construction completed last year.
      </p>

      <p class="prose reveal-up reveal-delay-2">
        The Harrison Street corridor is La Vista's main commercial artery, home to businesses ranging from
        the Embassy Suites Conference Center to independent shops and restaurants. Commercial roofing along
        Harrison requires flat-roof expertise, proper drainage engineering, and scheduling that minimizes
        business disruption. Crawford's commercial division handles La Vista's Harrison corridor buildings
        with after-hours work options and phased installation plans.
      </p>

      <p class="prose reveal-up reveal-delay-3">
        West of 96th Street, La Vista's newer residential neighborhoods feature homes built from 2005 onward.
        The La Vista Falls neighborhood and adjacent developments are entering the window where original
        builder-grade roofing begins to show wear. Meanwhile, established east La Vista neighborhoods have
        mature landscaping that drops heavy debris loads into gutters each autumn. Crawford's maintenance
        programs address both populations — warranty-period inspections for newer La Vista homes and seasonal
        gutter cleaning for older ones.
      </p>
    </div>
  </div>
</section>

<!-- ═══ SIGNATURE: CENTRAL HUB LAYOUT ═══════════════════════ -->
<section class="lv-local-section">
  <div class="lv-divider-wave lv-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70 C200,30 500,55 800,20 C950,8 1100,35 1200,25 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label reveal-up">La Vista Neighborhoods</span>
      <h2 class="reveal-up">Central Sarpy County — La Vista's <span class="text-accent">Strategic Location</span></h2>
      <p class="section-subtitle reveal-up reveal-delay-1">La Vista connects Omaha, Papillion, and Bellevue at the metro's center</p>
    </div>

    <div class="lv-hub-layout">
      <div class="lv-hub-center reveal-scale">
        <div class="lv-hub-icon">
          <i data-lucide="compass" aria-hidden="true"></i>
        </div>
        <h3>La Vista's Central Advantage</h3>
        <p>
          La Vista sits at the geographic center of Sarpy County, connected by I-80 to the entire metro.
          Crawford's Giles Road headquarters is just 5 minutes from La Vista — the closest service area
          to our home base.
        </p>
        <div class="lv-hub-stat">
          <div class="lv-hub-stat-item">
            <span class="lv-hub-stat-number">5</span>
            <span class="lv-hub-stat-label">Min to La Vista</span>
          </div>
          <div class="lv-hub-stat-item">
            <span class="lv-hub-stat-number"><?php echo $yearsInBusiness; ?></span>
            <span class="lv-hub-stat-label">Years Serving Area</span>
          </div>
        </div>
      </div>

      <div class="lv-hub-areas">
        <div class="lv-hub-card card-tint-1 reveal-right reveal-delay-1">
          <h3>La Vista Falls &amp; West Neighborhoods</h3>
          <p>
            Newer residential developments west of 96th Street feature architectural shingles from 2005-2015
            now entering their first inspection window. La Vista homeowners here benefit from proactive
            15-year checkups that catch ventilation issues and flashing wear before leaks start.
          </p>
        </div>

        <div class="lv-hub-card card-tint-2 reveal-right reveal-delay-2">
          <h3>Harrison Street Commercial Corridor</h3>
          <p>
            La Vista's business district along Harrison Street requires commercial roofing expertise.
            Flat roofs, membrane systems, and commercial gutter sizing are all standard for Crawford's
            La Vista commercial division. We schedule work to minimize disruption to La Vista businesses.
          </p>
        </div>

        <div class="lv-hub-card card-tint-3 reveal-right reveal-delay-3">
          <h3>Established East La Vista</h3>
          <p>
            Homes east of 84th Street date to the 1970s-1990s. These La Vista properties are on their
            second or third roof, and many need upgraded gutter systems to handle today's storm intensity.
            Mature trees along these La Vista streets create heavy autumn debris that demands regular gutter service.
          </p>
        </div>

        <div class="lv-hub-card card-tint-1 reveal-right reveal-delay-4">
          <h3>La Vista City Centre Area</h3>
          <p>
            The City Centre mixed-use development represents La Vista's future — modern construction with
            commercial ground floors and residential above. Crawford handles both components, ensuring
            roofing systems protect La Vista's newest investment from day one.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SERVICES AVAILABLE ═══════════════════════════════════ -->
<section class="lv-services-section">
  <div class="lv-divider-angle lv-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-bg-alt)" points="0,0 1200,55 0,55"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label reveal-up">Complete Coverage</span>
      <h2 class="reveal-up">All 9 Services for <span class="text-accent">La Vista Properties</span></h2>
    </div>

    <div class="lv-services-grid">
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
      <div class="lv-service-card <?php echo $tint; ?> reveal-up <?php echo $delay; ?>">
        <div class="lv-service-card__icon"><i data-lucide="<?php echo $icon; ?>" aria-hidden="true"></i></div>
        <div class="lv-service-card__text">
          <h3><?php echo htmlspecialchars($service['name']); ?></h3>
          <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/">Learn more &rarr;</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ WHY CHOOSE CRAWFORD FOR LA VISTA ════════════════════ -->
<section class="lv-why-section">
  <div class="lv-divider-wave lv-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,0 L1200,0 L1200,70 C900,30 600,65 300,20 C150,5 50,40 0,30 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label reveal-up">Why Crawford</span>
      <h2 class="reveal-up">Why La Vista Homeowners <span class="text-accent">Choose Crawford</span></h2>
    </div>

    <div class="lv-why-grid">
      <div class="lv-why-content">
        <h3 class="reveal-up">Your Closest Roofer in the Metro</h3>
        <p class="reveal-up reveal-delay-1">
          Crawford's headquarters on Giles Road sits closer to La Vista than to any other community we
          serve. That proximity means faster emergency response, shorter drive times for material runs,
          and crews who are genuinely familiar with La Vista's streets, neighborhoods, and building
          patterns.
        </p>
        <p class="reveal-up reveal-delay-2">
          La Vista's position along I-80 also makes it a commercial roofing hub. Warehouse facilities,
          retail centers, and office parks along the interstate corridor need roofing contractors who carry
          commercial insurance and understand flat-roof systems. Crawford handles both residential and
          commercial La Vista properties with dedicated crews for each.
        </p>
        <p class="reveal-up reveal-delay-3">
          We have been roofing La Vista homes since 1993, watching the city grow from a small Sarpy County
          community into the vibrant city it is today. That long history means we know which La Vista
          subdivisions used which builders, which builders cut corners on roofing, and which neighborhoods
          are most vulnerable to storm damage.
        </p>
        <div class="lv-why-badges reveal-up reveal-delay-4">
          <span class="lv-why-badge"><i data-lucide="navigation" aria-hidden="true"></i> 5 min from HQ</span>
          <span class="lv-why-badge"><i data-lucide="building-2" aria-hidden="true"></i> Commercial + residential</span>
          <span class="lv-why-badge"><i data-lucide="clock" aria-hidden="true"></i> Same-day emergency</span>
        </div>
      </div>
      <div class="lv-why-image reveal-right">
        <img src="<?php echo $secondaryImg; ?>" alt="Crawford Roofing crew working on a La Vista, NE home" width="800" height="600" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ═══ CTA BANNER ═══════════════════════════════════════════ -->
<section class="lv-cta-section">
  <div class="container">
    <h2 class="reveal-up">La Vista Roofing — Just Minutes Away</h2>
    <p class="reveal-up reveal-delay-1">
      Crawford Roofing &amp; Gutters is La Vista's closest roofing contractor. Whether you need a
      quick repair or a full replacement, call for a free on-site estimate backed by
      <?php echo $yearsInBusiness; ?>+ years of Sarpy County experience.
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
