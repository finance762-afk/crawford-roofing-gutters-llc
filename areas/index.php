<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ───────────────────────────────────────────────
$pageTitle       = 'Roofing & Gutter Service Areas | Omaha Metro | ' . $siteName;
$pageDescription = 'Crawford Roofing & Gutters LLC serves Omaha, Bellevue, Papillion, La Vista, Gretna, Elkhorn, Council Bluffs, and surrounding communities. ' . $yearsInBusiness . '+ years of roofing and gutter expertise. Free estimates.';
$canonicalUrl    = $siteUrl . '/areas/';
$currentPage     = 'areas';
$heroImagePreload = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252517-ip8hel-roofing-contractors-milford-1024x778.jpg';
$cssVersion      = '3';

// ── Image Library ────────────────────────────────────────────
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/';
$heroImg = $imgBase . '1779134252517-ip8hel-roofing-contractors-milford-1024x778.jpg';

$areaPhotos = [
    'omaha'          => $imgBase . '1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg',
    'bellevue'       => $imgBase . '1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg',
    'papillion'      => $imgBase . '1779134049337-o7oznv-dff36b_a35b2df95a814ec49799d0169f3a87da_mv2.jpg',
    'la-vista'       => $imgBase . '1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg',
    'gretna'         => $imgBase . '1779134251810-z2x055-IMG_95F75D69640F-1.jpeg',
    'elkhorn'        => $imgBase . '1779134252049-ez0nhr-IMG_096815F71F3A-1.jpeg',
    'council-bluffs' => $imgBase . '1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg',
    'ralston'        => $imgBase . '1779134252517-ip8hel-roofing-contractors-milford-1024x778.jpg',
    'bennington'     => $imgBase . '1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg',
    'fremont'        => $imgBase . '1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg',
    'plattsmouth'    => $imgBase . '1779134049337-o7oznv-dff36b_a35b2df95a814ec49799d0169f3a87da_mv2.jpg',
];

// ── Schema ───────────────────────────────────────────────────
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',          'url' => $siteUrl . '/'],
    ['name' => 'Service Areas', 'url' => $siteUrl . '/areas/'],
], $siteUrl);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<!-- Schema: BreadcrumbList -->
<script type="application/ld+json">
<?php echo $breadcrumbSchema; ?>
</script>

<style>
/* ═══════════════════════════════════════════════════════════════
   Service Areas Overview — Page-Specific Styles
   Premium Tier — Grid Showcase + Coverage Map
   Crawford Roofing & Gutters LLC
   ═══════════════════════════════════════════════════════════════ */

/* ── 1. HERO ─────────────────────────────────────────────────── */
.hero--areas {
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
.hero--areas::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    155deg,
    rgba(var(--color-primary-rgb), 0.95) 0%,
    rgba(var(--color-primary-rgb), 0.82) 40%,
    rgba(var(--color-secondary-rgb), 0.70) 100%
  );
  z-index: 1;
}
.hero--areas::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  opacity: 0.14;
  z-index: 1;
  pointer-events: none;
}
.hero--areas .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.hero--areas .hero-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
}
.hero--areas .hero-breadcrumb a {
  color: rgba(255, 255, 255, 0.6);
  transition: color var(--transition-fast);
}
.hero--areas .hero-breadcrumb a:hover {
  color: rgba(255, 255, 255, 0.9);
}
.hero--areas .hero-breadcrumb .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.35);
  font-size: var(--font-size-xs);
}
.hero--areas .hero-breadcrumb .breadcrumb-current {
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(1.8);
  font-weight: 600;
}
.hero--areas .eyebrow-label {
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
.hero--areas .eyebrow-label .eyebrow-dot {
  width: 5px;
  height: 5px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.hero--areas h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 3.75rem);
  line-height: 1.08;
  margin-bottom: var(--space-6);
  text-wrap: balance;
  max-width: 22ch;
}
.hero--areas h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.7);
}
.hero--areas .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 640px;
  margin-bottom: var(--space-8);
}
.hero--areas .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-10);
}
.hero--areas .hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  align-items: center;
}
.hero--areas .hero-trust-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.75);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.hero--areas .hero-trust-item i,
.hero--areas .hero-trust-item svg {
  width: 16px;
  height: 16px;
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(2);
}

/* ── Section Dividers ────────────────────────────────────────── */
.sa-divider-angle {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.sa-divider-angle--top { top: -1px; }
.sa-divider-angle--bottom { bottom: -1px; }
.sa-divider-angle svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 55px;
}
.sa-divider-wave {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.sa-divider-wave--top { top: -1px; }
.sa-divider-wave--bottom { bottom: -1px; }
.sa-divider-wave svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 70px;
}

/* ── 2. COVERAGE INTRO ──────────────────────────────────────── */
.sa-coverage-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.sa-coverage-section .sa-floating-accent {
  position: absolute;
  width: 400px;
  height: 400px;
  border-radius: 40% 60% 55% 45% / 50% 38% 62% 50%;
  background: rgba(var(--color-accent-rgb), 0.03);
  pointer-events: none;
  z-index: 0;
  top: -120px;
  right: -180px;
  animation: sa-float 16s ease-in-out infinite;
}
@keyframes sa-float {
  0%, 100% { transform: translate(0, 0) rotate(0deg); }
  33% { transform: translate(-15px, 18px) rotate(3deg); }
  66% { transform: translate(10px, -12px) rotate(-2deg); }
}
.sa-coverage-intro {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1.4fr 1fr;
  gap: var(--space-12);
  align-items: center;
}
.sa-coverage-intro__text .section-title {
  text-align: left;
}
.sa-coverage-intro__text .answer-block {
  background: rgba(var(--color-primary-rgb), 0.03);
  border-left: 4px solid rgba(var(--color-accent-rgb), 0.35);
  padding: var(--space-6);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin: var(--space-6) 0;
}
.sa-coverage-intro__text .answer-block p {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-text);
  margin: 0;
}
.sa-coverage-stats {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-4);
}
.sa-stat-card {
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  text-align: center;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  position: relative;
  overflow: hidden;
}
.sa-stat-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 40px;
  height: 3px;
  background: rgba(var(--color-accent-rgb), 0.4);
  border-radius: var(--radius-full);
}
.sa-stat-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.sa-stat-card .stat-number {
  font-family: var(--font-heading);
  font-size: clamp(2rem, 3.5vw, 2.75rem);
  color: var(--color-primary);
  line-height: 1;
  margin-bottom: var(--space-2);
}
.sa-stat-card .stat-label {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.4;
}

/* ── 3. AREA GRID ───────────────────────────────────────────── */
.sa-grid-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0 var(--space-20);
  overflow: hidden;
}
.sa-grid-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
}
.sa-areas-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.sa-area-card {
  border-radius: var(--radius-lg);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  position: relative;
}
.sa-area-card:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-lg);
}
.sa-area-card__image {
  position: relative;
  aspect-ratio: 16 / 10;
  overflow: hidden;
}
.sa-area-card__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.sa-area-card:hover .sa-area-card__image img {
  transform: scale(1.05);
}
.sa-area-card__image::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 50%;
  background: linear-gradient(to top, rgba(var(--color-primary-rgb), 0.6), transparent);
  pointer-events: none;
}
.sa-area-card__body {
  padding: var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  flex: 1;
}
.sa-area-card__body h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  color: var(--color-primary);
  margin: 0;
  line-height: 1.2;
}
.sa-area-card__body h3 .state-abbr {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  font-weight: 400;
  margin-left: var(--space-1);
}
.sa-area-card__excerpt {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  margin: 0;
}
.sa-area-card__cta {
  margin-top: auto;
  padding-top: var(--space-4);
  color: var(--color-accent);
  font-weight: 600;
  text-decoration: none;
  font-size: var(--font-size-sm);
  border-top: 1px solid rgba(0, 0, 0, 0.06);
  display: flex;
  align-items: center;
  gap: var(--space-2);
  transition: color var(--transition-base), gap var(--transition-base);
}
.sa-area-card__cta:hover {
  color: var(--color-primary);
  gap: var(--space-3);
}
.sa-area-card__cta i,
.sa-area-card__cta svg {
  width: 16px;
  height: 16px;
}
.sa-area-card--primary {
  grid-column: span 2;
}
.sa-area-card--primary .sa-area-card__image {
  aspect-ratio: 21 / 9;
}
.sa-area-card--primary .sa-area-card__body {
  flex-direction: row;
  align-items: center;
  gap: var(--space-6);
}
.sa-area-card--primary .sa-area-card__body h3 {
  font-size: var(--font-size-2xl);
  white-space: nowrap;
}
.sa-area-card--primary .sa-area-card__excerpt {
  flex: 1;
}

/* ── 4. WHY CHOOSE US + CTA ─────────────────────────────────── */
.sa-why-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.sa-why-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
  margin-top: var(--space-10);
}
.sa-why-card {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: var(--space-4);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  position: relative;
}
.sa-why-card::after {
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
.sa-why-card:hover::after {
  width: 60%;
}
.sa-why-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.sa-why-card__icon {
  width: 56px;
  height: 56px;
  border-radius: var(--radius-full);
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.1);
  color: var(--color-accent);
}
.sa-why-card__icon i,
.sa-why-card__icon svg {
  width: 24px;
  height: 24px;
}
.sa-why-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0;
  line-height: 1.3;
}
.sa-why-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  margin: 0;
}

/* ── 5. CTA BANNER ──────────────────────────────────────────── */
.sa-cta-section {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  overflow: hidden;
  text-align: center;
}
.sa-cta-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(145deg, rgba(var(--color-accent-rgb), 0.15) 0%, transparent 55%);
  pointer-events: none;
}
.sa-cta-section::after {
  content: '';
  position: absolute;
  bottom: -60px;
  right: -60px;
  width: 200px;
  height: 200px;
  border-radius: var(--radius-full);
  border: 3px solid rgba(255, 255, 255, 0.05);
  pointer-events: none;
}
.sa-cta-section .container {
  position: relative;
  z-index: 1;
}
.sa-cta-section h2 {
  color: var(--color-white);
  font-size: clamp(1.75rem, 3.5vw, 2.75rem);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.sa-cta-section p {
  color: rgba(255, 255, 255, 0.85);
  font-size: var(--font-size-lg);
  max-width: 52ch;
  margin: 0 auto var(--space-8);
  line-height: 1.7;
}
.sa-cta-section .cta-buttons {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── RESPONSIVE ──────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .sa-coverage-intro {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .sa-areas-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .sa-area-card--primary {
    grid-column: span 2;
  }
  .sa-why-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 600px) {
  .hero--areas {
    min-height: 60vh;
    padding: var(--space-12) 0 var(--space-8);
  }
  .sa-areas-grid {
    grid-template-columns: 1fr;
  }
  .sa-area-card--primary {
    grid-column: span 1;
  }
  .sa-area-card--primary .sa-area-card__body {
    flex-direction: column;
  }
  .sa-area-card--primary .sa-area-card__image {
    aspect-ratio: 16 / 10;
  }
  .sa-coverage-stats {
    grid-template-columns: repeat(2, 1fr);
    gap: var(--space-3);
  }
  .sa-why-grid {
    grid-template-columns: 1fr;
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══ HERO ═══════════════════════════════════════════════════ -->
<section class="hero--areas" style="background-image:url('<?php echo $heroImg; ?>');">
  <div class="container">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <span class="breadcrumb-current">Service Areas</span>
    </nav>

    <div class="eyebrow-label">
      <span class="eyebrow-dot" aria-hidden="true"></span>
      Where We Work
    </div>

    <h1>Roofing &amp; Gutters Across the <span class="accent-word">Omaha Metro</span></h1>

    <p class="hero-answer">
      Crawford Roofing &amp; Gutters LLC is a licensed Nebraska roofing contractor based in Omaha, serving
      11 communities across the metro area. From Bellevue to Bennington, Fremont to Council Bluffs, our
      crews deliver the same <?php echo $yearsInBusiness; ?>+ years of hands-on expertise to every job site.
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
      <span class="hero-trust-item"><i data-lucide="map-pin" aria-hidden="true"></i> 11 Communities Served</span>
      <span class="hero-trust-item"><i data-lucide="clock" aria-hidden="true"></i> <?php echo $yearsInBusiness; ?>+ Years Experience</span>
      <span class="hero-trust-item"><i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured</span>
    </div>
  </div>
</section>

<!-- ═══ COVERAGE INTRO ════════════════════════════════════════ -->
<section class="sa-coverage-section">
  <div class="sa-divider-angle sa-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-primary)" points="0,0 1200,55 0,55"></polygon>
    </svg>
  </div>
  <div class="sa-floating-accent" aria-hidden="true"></div>

  <div class="container">
    <div class="sa-coverage-intro">
      <div class="sa-coverage-intro__text">
        <div class="section-title">
          <span class="eyebrow-label">Our Coverage Area</span>
          <h2>Where Does Crawford Roofing <span class="text-accent">Serve?</span></h2>
        </div>

        <div class="answer-block reveal-up">
          <p>
            Crawford Roofing &amp; Gutters LLC serves the entire Omaha metropolitan area and surrounding
            communities within a 50-mile radius of our office at <?php echo htmlspecialchars($address['street']); ?>.
            Whether you need a roof inspection in Papillion, gutter installation in Bellevue, or storm damage
            repair in Elkhorn, our crews are dispatched from Omaha and typically arrive same-day for emergencies.
          </p>
        </div>

        <p class="prose reveal-up reveal-delay-1">
          Each community in the metro has unique roofing challenges. Older neighborhoods in Dundee and Benson
          require careful material matching for historical homes. Newer developments in Gretna and Bennington
          need builders-warranty-compliant installation. Across the Missouri River, Council Bluffs homeowners
          benefit from a contractor who understands both Nebraska and Iowa building codes.
        </p>
      </div>

      <div class="sa-coverage-stats reveal-up reveal-delay-2">
        <div class="sa-stat-card card-tint-1">
          <div class="stat-number" data-counter data-target="11">0</div>
          <div class="stat-label">Communities Served</div>
        </div>
        <div class="sa-stat-card card-tint-2">
          <div class="stat-number" data-counter data-target="<?php echo $yearsInBusiness; ?>">0</div>
          <div class="stat-label">Years in Business</div>
        </div>
        <div class="sa-stat-card card-tint-3">
          <div class="stat-number" data-counter data-target="9">0</div>
          <div class="stat-label">Services Offered</div>
        </div>
        <div class="sa-stat-card card-tint-1">
          <div class="stat-number">24<span style="font-size:0.6em;">/7</span></div>
          <div class="stat-label">Emergency Response</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SERVICE AREAS GRID ════════════════════════════════════ -->
<section class="sa-grid-section">
  <div class="sa-divider-wave sa-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70 C300,20 600,60 900,25 C1050,10 1150,40 1200,30 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Service Areas</span>
      <h2>Find a Roofer <span class="text-accent">Near You</span></h2>
      <p class="section-subtitle">Select your city to see local roofing and gutter information</p>
    </div>

    <div class="sa-areas-grid">
      <?php
      $tints = ['card-tint-1', 'card-tint-2', 'card-tint-3'];
      $delays = ['reveal-delay-1', 'reveal-delay-2', 'reveal-delay-3'];
      $areaExcerpts = [
          'omaha'          => 'Our home base — serving every neighborhood from Dundee to West Omaha, Benson to Aksarben.',
          'bellevue'       => 'Roofing and gutter services for Nebraska\'s oldest city, including Offutt AFB housing.',
          'papillion'      => 'Protecting homes in one of the metro\'s fastest-growing suburbs south of Omaha.',
          'la-vista'       => 'Full-service roofing for La Vista families near Shadow Lake and Harrison corridor.',
          'gretna'         => 'New construction and existing home roofing in Gretna\'s expanding neighborhoods.',
          'elkhorn'        => 'Storm damage repair and gutter systems for northwest Omaha metro residents.',
          'council-bluffs' => 'Cross-river roofing expertise — Iowa building code compliant, Omaha-based crews.',
          'ralston'        => 'Neighborhood-scale service for Ralston\'s tight-knit residential community.',
          'bennington'     => 'New development roofing and hail repair in the rapidly growing Bennington area.',
          'fremont'        => 'Extended metro service reaching Fremont\'s residential and commercial properties.',
          'plattsmouth'    => 'Dependable roofing and gutters for Plattsmouth homeowners along the Platte River.',
      ];

      foreach ($serviceAreas as $i => $area):
          $slug  = $area['slug'];
          $city  = $area['city'];
          $state = $area['state'];
          $tint  = $tints[$i % 3];
          $delay = $delays[$i % 3];
          $photo = $areaPhotos[$slug] ?? $heroImg;
          $excerpt = $areaExcerpts[$slug] ?? 'Professional roofing and gutter services for ' . $city . ' residents.';
          $isPrimary = $area['primary'];
      ?>
      <article class="sa-area-card <?php echo $tint; ?> <?php echo $isPrimary ? 'sa-area-card--primary' : ''; ?> reveal-up <?php echo $delay; ?>">
        <div class="sa-area-card__image">
          <img src="<?php echo htmlspecialchars($photo); ?>"
               alt="Roofing services in <?php echo htmlspecialchars($city); ?>, <?php echo htmlspecialchars($state); ?>"
               width="600" height="375" loading="lazy">
        </div>
        <div class="sa-area-card__body">
          <h3><?php echo htmlspecialchars($city); ?><span class="state-abbr">, <?php echo htmlspecialchars($state); ?></span></h3>
          <p class="sa-area-card__excerpt"><?php echo htmlspecialchars($excerpt); ?></p>
          <a href="/areas/<?php echo htmlspecialchars($slug); ?>/" class="sa-area-card__cta">
            View <?php echo htmlspecialchars($city); ?> services <i data-lucide="arrow-right" aria-hidden="true"></i>
          </a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ WHY CHOOSE CRAWFORD ══════════════════════════════════ -->
<section class="sa-why-section">
  <div class="sa-divider-angle sa-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-bg-alt)" points="1200,0 0,55 1200,55"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label reveal-up">Why Crawford</span>
      <h2 class="reveal-up">Why Omaha Metro Homeowners <span class="text-accent">Choose Us</span></h2>
    </div>

    <div class="sa-why-grid">
      <div class="sa-why-card card-tint-1 reveal-up reveal-delay-1">
        <div class="sa-why-card__icon"><i data-lucide="map-pin" aria-hidden="true"></i></div>
        <h3>Locally Based</h3>
        <p>Our crews dispatch from Omaha — no long travel charges or delayed response times for metro-area jobs.</p>
      </div>
      <div class="sa-why-card card-tint-2 reveal-up reveal-delay-2">
        <div class="sa-why-card__icon"><i data-lucide="clock" aria-hidden="true"></i></div>
        <h3>Same-Day Emergency</h3>
        <p>Active leak? Storm damage? We deploy tarping crews within hours across all 11 service communities.</p>
      </div>
      <div class="sa-why-card card-tint-3 reveal-up reveal-delay-3">
        <div class="sa-why-card__icon"><i data-lucide="shield-check" aria-hidden="true"></i></div>
        <h3>NE &amp; IA Licensed</h3>
        <p>Fully licensed in both Nebraska and Iowa — Council Bluffs clients get the same insured protection.</p>
      </div>
      <div class="sa-why-card card-tint-1 reveal-up reveal-delay-4">
        <div class="sa-why-card__icon"><i data-lucide="users" aria-hidden="true"></i></div>
        <h3>Second-Generation</h3>
        <p><?php echo $yearsInBusiness; ?>+ years of family roofing knowledge built into every estimate and installation.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CTA BANNER ═══════════════════════════════════════════ -->
<section class="sa-cta-section">
  <div class="container">
    <h2 class="reveal-up">Ready to Protect Your Home?</h2>
    <p class="reveal-up reveal-delay-1">
      No matter where you are in the Omaha metro, Crawford Roofing &amp; Gutters delivers free on-site
      estimates, honest assessments, and craftsmanship backed by <?php echo $yearsInBusiness; ?>+ years of experience.
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
