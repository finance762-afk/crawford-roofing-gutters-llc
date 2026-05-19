<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ───────────────────────────────────────────────
$pageTitle       = 'Roofing & Gutter Services in Omaha, Nebraska | ' . $siteName;
$pageDescription = 'Crawford Roofing & Gutters LLC provides roof repair, replacement, and gutter services across Omaha, NE. ' . $yearsInBusiness . '+ years serving Dundee, Benson, Aksarben, West Omaha, and beyond. Free estimates.';
$canonicalUrl    = $siteUrl . '/areas/omaha/';
$currentPage     = 'areas';
$cssVersion      = '3';

$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/';
$heroImg = $imgBase . '1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg';
$heroImagePreload = $heroImg;
$secondaryImg = $imgBase . '1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg';
$tertiaryImg  = $imgBase . '1779134049337-o7oznv-dff36b_a35b2df95a814ec49799d0169f3a87da_mv2.jpg';

// ── Schema ───────────────────────────────────────────────────
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',          'url' => $siteUrl . '/'],
    ['name' => 'Service Areas', 'url' => $siteUrl . '/areas/'],
    ['name' => 'Omaha',         'url' => $siteUrl . '/areas/omaha/'],
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
        'name' => 'Omaha',
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
   Omaha Area Page — Page-Specific Styles
   Premium Tier — Unique prefix: .om-
   Crawford Roofing & Gutters LLC
   ═══════════════════════════════════════════════════════════════ */

/* ── 1. HERO ─────────────────────────────────────────────────── */
.om-hero {
  position: relative;
  min-height: 75vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroImg; ?>');
  background-size: cover;
  background-position: center 30%;
  background-repeat: no-repeat;
  overflow: hidden;
  padding: var(--space-16) 0 var(--space-12);
}
.om-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    160deg,
    rgba(var(--color-primary-rgb), 0.96) 0%,
    rgba(var(--color-primary-rgb), 0.80) 45%,
    rgba(var(--color-secondary-rgb), 0.65) 100%
  );
  z-index: 1;
}
.om-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  opacity: 0.12;
  z-index: 1;
  pointer-events: none;
}
.om-hero .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.om-hero .hero-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
}
.om-hero .hero-breadcrumb a {
  color: rgba(255, 255, 255, 0.6);
  transition: color var(--transition-fast);
}
.om-hero .hero-breadcrumb a:hover {
  color: rgba(255, 255, 255, 0.9);
}
.om-hero .hero-breadcrumb .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.35);
  font-size: var(--font-size-xs);
}
.om-hero .hero-breadcrumb .breadcrumb-current {
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(1.8);
  font-weight: 600;
}
.om-hero .eyebrow-label {
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
.om-hero .eyebrow-label .eyebrow-dot {
  width: 5px;
  height: 5px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.om-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 3.75rem);
  line-height: 1.08;
  margin-bottom: var(--space-6);
  text-wrap: balance;
  max-width: 24ch;
}
.om-hero h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.7);
}
.om-hero .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 640px;
  margin-bottom: var(--space-8);
}
.om-hero .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-10);
}
.om-hero .hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  align-items: center;
}
.om-hero .hero-trust-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.75);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.om-hero .hero-trust-item i,
.om-hero .hero-trust-item svg {
  width: 16px;
  height: 16px;
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(2);
}

/* ── Section Dividers ────────────────────────────────────────── */
.om-divider-angle {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.om-divider-angle--top { top: -1px; }
.om-divider-angle--bottom { bottom: -1px; }
.om-divider-angle svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 55px;
}
.om-divider-wave {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.om-divider-wave--top { top: -1px; }
.om-divider-wave--bottom { bottom: -1px; }
.om-divider-wave svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 70px;
}

/* ── 2. ANSWER BLOCK ─────────────────────────────────────────── */
.om-answer-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.om-answer-section .om-floating-blob {
  position: absolute;
  width: 450px;
  height: 450px;
  border-radius: 42% 58% 53% 47% / 48% 40% 60% 52%;
  background: rgba(var(--color-accent-rgb), 0.03);
  pointer-events: none;
  z-index: 0;
  top: -150px;
  right: -200px;
  animation: om-blob-float 18s ease-in-out infinite;
}
@keyframes om-blob-float {
  0%, 100% { transform: translate(0, 0) rotate(0deg); }
  33% { transform: translate(-20px, 22px) rotate(4deg); }
  66% { transform: translate(14px, -16px) rotate(-3deg); }
}
.om-answer-grid {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1.3fr 1fr;
  gap: var(--space-12);
  align-items: start;
}
.om-answer-grid .section-title {
  text-align: left;
}
.om-answer-grid .answer-block {
  background: rgba(var(--color-primary-rgb), 0.03);
  border-left: 4px solid rgba(var(--color-accent-rgb), 0.35);
  padding: var(--space-6);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin: var(--space-6) 0;
}
.om-answer-grid .answer-block p {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-text);
  margin: 0;
}
.om-answer-sidebar {
  position: sticky;
  top: calc(var(--space-20) + 80px);
}
.om-answer-sidebar .om-quick-facts {
  border-radius: var(--radius-lg);
  padding: var(--space-8);
  background: var(--color-card-tint-1);
}
.om-quick-facts h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin-bottom: var(--space-6);
  text-wrap: balance;
}
.om-quick-facts ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.om-quick-facts li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  font-size: var(--font-size-sm);
  color: var(--color-text);
  line-height: 1.5;
}
.om-quick-facts li i,
.om-quick-facts li svg {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: 2px;
}

/* ── 3. LOCAL CONTENT ────────────────────────────────────────── */
.om-local-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0 var(--space-20);
  overflow: hidden;
}

/* SIGNATURE SECTION: Omaha Neighborhood Mosaic Grid */
.om-neighborhood-mosaic {
  display: grid;
  grid-template-columns: repeat(12, 1fr);
  grid-template-rows: auto auto;
  gap: var(--space-6);
  margin-top: var(--space-10);
}
.om-mosaic-card {
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
  position: relative;
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.om-mosaic-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.om-mosaic-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 4px;
  height: 100%;
  background: var(--color-accent);
  opacity: 0;
  transition: opacity var(--transition-base);
}
.om-mosaic-card:hover::before {
  opacity: 1;
}
.om-mosaic-card--wide {
  grid-column: span 7;
}
.om-mosaic-card--narrow {
  grid-column: span 5;
}
.om-mosaic-card--medium {
  grid-column: span 4;
}
.om-mosaic-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.om-mosaic-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text);
  line-height: 1.65;
  margin: 0;
  max-width: 65ch;
}
.om-mosaic-card .om-neighborhood-icon {
  width: 40px;
  height: 40px;
  border-radius: var(--radius-full);
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.1);
  color: var(--color-accent);
  margin-bottom: var(--space-4);
}
.om-mosaic-card .om-neighborhood-icon i,
.om-mosaic-card .om-neighborhood-icon svg {
  width: 20px;
  height: 20px;
}

/* ── 4. SERVICES AVAILABLE ─────────────────────────────────── */
.om-services-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.om-services-list {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  margin-top: var(--space-10);
}
.om-service-item {
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  display: flex;
  align-items: center;
  gap: var(--space-4);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.om-service-item:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.om-service-item__icon {
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
.om-service-item__icon i,
.om-service-item__icon svg {
  width: 22px;
  height: 22px;
}
.om-service-item__text h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0 0 var(--space-1);
  line-height: 1.3;
}
.om-service-item__text a {
  font-size: var(--font-size-sm);
  color: var(--color-accent);
  font-weight: 600;
  transition: color var(--transition-fast);
}
.om-service-item__text a:hover {
  color: var(--color-primary);
}

/* ── 5. WHY OMAHA NEEDS PROS ───────────────────────────────── */
.om-why-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.om-why-grid {
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: var(--space-12);
  align-items: center;
  margin-top: var(--space-10);
}
.om-why-image {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  aspect-ratio: 4 / 3;
}
.om-why-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.om-why-image::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: var(--radius-xl);
  box-shadow: inset 0 0 0 2px rgba(var(--color-accent-rgb), 0.12);
  pointer-events: none;
}
.om-why-content h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  color: var(--color-primary);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.om-why-content p {
  font-size: var(--font-size-base);
  color: var(--color-text);
  line-height: 1.7;
  margin-bottom: var(--space-4);
  max-width: 65ch;
}
.om-why-content p:last-child {
  margin-bottom: 0;
}
.om-weather-badges {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-3);
  margin-top: var(--space-6);
}
.om-weather-badge {
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
.om-weather-badge i,
.om-weather-badge svg {
  width: 14px;
  height: 14px;
  color: var(--color-accent);
}

/* ── 6. CTA BANNER ─────────────────────────────────────────── */
.om-cta-section {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  overflow: hidden;
  text-align: center;
}
.om-cta-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(145deg, rgba(var(--color-accent-rgb), 0.15) 0%, transparent 55%);
  pointer-events: none;
}
.om-cta-section::after {
  content: '';
  position: absolute;
  bottom: -80px;
  right: -80px;
  width: 240px;
  height: 240px;
  border-radius: var(--radius-full);
  border: 3px solid rgba(255, 255, 255, 0.05);
  pointer-events: none;
}
.om-cta-section .container {
  position: relative;
  z-index: 1;
}
.om-cta-section h2 {
  color: var(--color-white);
  font-size: clamp(1.75rem, 3.5vw, 2.75rem);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.om-cta-section p {
  color: rgba(255, 255, 255, 0.85);
  font-size: var(--font-size-lg);
  max-width: 52ch;
  margin: 0 auto var(--space-8);
  line-height: 1.7;
}
.om-cta-section .cta-buttons {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── RESPONSIVE ──────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .om-answer-grid {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .om-answer-sidebar {
    position: static;
  }
  .om-neighborhood-mosaic {
    grid-template-columns: repeat(2, 1fr);
  }
  .om-mosaic-card--wide,
  .om-mosaic-card--narrow,
  .om-mosaic-card--medium {
    grid-column: span 1;
  }
  .om-services-list {
    grid-template-columns: repeat(2, 1fr);
  }
  .om-why-grid {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
}
@media (max-width: 600px) {
  .om-hero {
    min-height: 60vh;
    padding: var(--space-12) 0 var(--space-8);
  }
  .om-neighborhood-mosaic {
    grid-template-columns: 1fr;
  }
  .om-services-list {
    grid-template-columns: 1fr;
  }
  .om-hero .hero-ctas {
    flex-direction: column;
  }
  .om-hero .hero-trust {
    flex-direction: column;
    gap: var(--space-3);
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══ HERO ═══════════════════════════════════════════════════ -->
<section class="om-hero" style="background-image:url('<?php echo $heroImg; ?>');">
  <div class="container">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <a href="/areas/">Service Areas</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <span class="breadcrumb-current">Omaha</span>
    </nav>

    <div class="eyebrow-label">
      <span class="eyebrow-dot" aria-hidden="true"></span>
      Our Home Market
    </div>

    <h1>Roofing &amp; Gutter Services in <span class="accent-word">Omaha, Nebraska</span></h1>

    <p class="hero-answer">
      Crawford Roofing &amp; Gutters LLC is a licensed Nebraska roofing contractor headquartered at
      <?php echo htmlspecialchars($address['street']); ?> in Omaha, providing roof repair, replacement,
      inspection, and full gutter services to the city's 500,000+ residents. From Dundee to West Omaha,
      our <?php echo $yearsInBusiness; ?>-year track record means every Omaha neighborhood gets second-generation expertise.
    </p>

    <div class="hero-ctas">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Omaha Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> <?php echo formatPhone($phone); ?>
      </a>
      <?php endif; ?>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="map-pin" aria-hidden="true"></i> Based in Omaha</span>
      <span class="hero-trust-item"><i data-lucide="clock" aria-hidden="true"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      <span class="hero-trust-item"><i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured</span>
    </div>
  </div>
</section>

<!-- ═══ ANSWER BLOCK ═════════════════════════════════════════ -->
<section class="om-answer-section">
  <div class="om-divider-angle om-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-primary)" points="0,0 1200,55 0,55"></polygon>
    </svg>
  </div>
  <div class="om-floating-blob" aria-hidden="true"></div>

  <div class="container">
    <div class="om-answer-grid">
      <div>
        <div class="section-title reveal-up">
          <span class="eyebrow-label">Omaha Roofing</span>
          <h2>What Roofing Services Are Available <span class="text-accent">Near Me in Omaha?</span></h2>
        </div>

        <div class="answer-block reveal-up">
          <p>
            Homeowners searching for roofing near me in Omaha have access to all 9 of Crawford Roofing &amp; Gutters'
            core services: roof repair, roof replacement, new roof installation, roof inspection, gutter installation,
            gutter addition, gutter repair, gutter replacement, and gutter cleaning. Every service is available for
            residential and commercial properties across all Omaha zip codes.
          </p>
        </div>

        <p class="prose reveal-up reveal-delay-1">
          Omaha is the largest city in Nebraska, and its diverse housing stock presents unique roofing challenges.
          Historic bungalows in the Dundee and Benson neighborhoods require careful material matching and pitch-specific
          repair techniques. The Aksarben area and Midtown corridor feature mid-century homes with original roofing systems
          approaching 40-50 years old. West Omaha developments built in the 1990s and 2000s are now entering their first
          replacement cycle.
        </p>

        <p class="prose reveal-up reveal-delay-2">
          Omaha sits at the crossroads of I-80 and I-680, near the Missouri River. That proximity to water means elevated
          humidity levels that accelerate shingle wear. The Blackstone District, the Old Market, and neighborhoods near
          Henry Doorly Zoo all sit at lower elevations where drainage problems compound roof leaks if gutters fail. Our crews
          understand that an Omaha roof handles freeze-thaw cycles from November through March, summer hail from May through
          August, and wind gusts that regularly exceed 60 mph along the river bluffs.
        </p>

        <p class="prose reveal-up reveal-delay-3">
          Omaha's mature tree canopy — especially in the established neighborhoods along Dodge Street, Happy Hollow, and
          Rockbrook — drops thousands of pounds of leaves, seeds, and debris into gutters each fall. Without regular gutter
          cleaning, that organic buildup causes ice dams in winter and overflow damage in spring. Crawford's gutter maintenance
          programs are designed specifically for Omaha's seasonal debris load.
        </p>
      </div>

      <div class="om-answer-sidebar reveal-right reveal-delay-2">
        <div class="om-quick-facts">
          <h3>Omaha Quick Facts</h3>
          <ul>
            <li><i data-lucide="users" aria-hidden="true"></i> 500,000+ residents — Nebraska's largest city</li>
            <li><i data-lucide="cloud-rain" aria-hidden="true"></i> Average 28 inches of rain plus severe hail season May–August</li>
            <li><i data-lucide="thermometer" aria-hidden="true"></i> 140+ freeze-thaw cycles per winter</li>
            <li><i data-lucide="tree-pine" aria-hidden="true"></i> Dense tree canopy clogs gutters in established neighborhoods</li>
            <li><i data-lucide="wind" aria-hidden="true"></i> Missouri River proximity elevates humidity and storm exposure</li>
            <li><i data-lucide="map-pin" aria-hidden="true"></i> Crawford HQ: <?php echo htmlspecialchars($address['street']); ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SIGNATURE: NEIGHBORHOOD MOSAIC ═══════════════════════ -->
<section class="om-local-section">
  <div class="om-divider-wave om-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70 C300,20 600,60 900,25 C1050,10 1150,40 1200,30 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label reveal-up">Neighborhoods We Serve</span>
      <h2 class="reveal-up">Omaha's Roofing Needs, <span class="text-accent">Block by Block</span></h2>
      <p class="section-subtitle reveal-up reveal-delay-1">Every Omaha neighborhood has different roofing demands</p>
    </div>

    <div class="om-neighborhood-mosaic">
      <div class="om-mosaic-card om-mosaic-card--wide card-tint-1 reveal-up reveal-delay-1">
        <div class="om-neighborhood-icon"><i data-lucide="landmark" aria-hidden="true"></i></div>
        <h3>Dundee &amp; Benson</h3>
        <p>
          These historic Omaha neighborhoods feature Craftsman bungalows and Tudor-style homes built between
          1910 and 1940. Roof repairs here demand period-appropriate materials and steep-pitch expertise.
          Many homes have original slate or wood shake that require specialized replacement techniques.
        </p>
      </div>
      <div class="om-mosaic-card om-mosaic-card--narrow card-tint-2 reveal-up reveal-delay-2">
        <div class="om-neighborhood-icon"><i data-lucide="building-2" aria-hidden="true"></i></div>
        <h3>Aksarben &amp; Midtown</h3>
        <p>
          Mid-century ranches and split-levels with low-slope roof sections. Many Aksarben homes are
          now due for their second full replacement — we match current codes while preserving the
          neighborhood character.
        </p>
      </div>
      <div class="om-mosaic-card om-mosaic-card--medium card-tint-3 reveal-up reveal-delay-1">
        <div class="om-neighborhood-icon"><i data-lucide="home" aria-hidden="true"></i></div>
        <h3>West Omaha</h3>
        <p>
          Subdivisions from the 1990s–2010s now entering their first roof replacement window.
          Architectural shingles are the standard here, and HOA color-matching matters.
        </p>
      </div>
      <div class="om-mosaic-card om-mosaic-card--medium card-tint-1 reveal-up reveal-delay-2">
        <div class="om-neighborhood-icon"><i data-lucide="map" aria-hidden="true"></i></div>
        <h3>Blackstone &amp; Old Market</h3>
        <p>
          Mixed commercial and residential buildings in Omaha's entertainment districts.
          Flat commercial roofs alongside pitched residential — we handle both types.
        </p>
      </div>
      <div class="om-mosaic-card om-mosaic-card--medium card-tint-2 reveal-up reveal-delay-3">
        <div class="om-neighborhood-icon"><i data-lucide="trees" aria-hidden="true"></i></div>
        <h3>I-80 &amp; I-680 Corridors</h3>
        <p>
          Properties along Omaha's interstate corridors face elevated wind exposure.
          Commercial buildings here need impact-rated roofing and reinforced gutter systems.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SERVICES AVAILABLE ═══════════════════════════════════ -->
<section class="om-services-section">
  <div class="om-divider-angle om-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-bg-alt)" points="1200,0 0,55 1200,55"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label reveal-up">Full-Service Coverage</span>
      <h2 class="reveal-up">9 Roofing &amp; Gutter Services for <span class="text-accent">Omaha Homes</span></h2>
    </div>

    <div class="om-services-list">
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
      <div class="om-service-item <?php echo $tint; ?> reveal-up <?php echo $delay; ?>">
        <div class="om-service-item__icon"><i data-lucide="<?php echo $icon; ?>" aria-hidden="true"></i></div>
        <div class="om-service-item__text">
          <h3><?php echo htmlspecialchars($service['name']); ?></h3>
          <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/">Learn more &rarr;</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ WHY OMAHA NEEDS ROOFING PROS ═════════════════════════ -->
<section class="om-why-section">
  <div class="om-divider-wave om-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,0 L1200,0 L1200,70 C900,30 600,65 300,20 C150,5 50,40 0,30 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label reveal-up">Weather &amp; Climate</span>
      <h2 class="reveal-up">Why Omaha Roofs Take a <span class="text-accent">Beating</span></h2>
    </div>

    <div class="om-why-grid">
      <div class="om-why-image reveal-left">
        <img src="<?php echo $secondaryImg; ?>" alt="Storm damage roof repair in Omaha, Nebraska" width="800" height="600" loading="lazy">
      </div>
      <div class="om-why-content">
        <h3 class="reveal-up">Hail, Wind, and Humidity — Omaha's Triple Threat</h3>
        <p class="reveal-up reveal-delay-1">
          Omaha averages 5-7 significant hail events each storm season. The 2023 season alone produced
          baseball-sized hail in West Omaha that triggered thousands of insurance claims. Crawford's
          inspection team identifies hail damage patterns that untrained eyes miss — and we work directly
          with insurance adjusters to document claims properly.
        </p>
        <p class="reveal-up reveal-delay-2">
          The Missouri River keeps Omaha's humidity above 70% for much of the summer. That persistent
          moisture accelerates granule loss on asphalt shingles and promotes moss growth on north-facing
          slopes. Combined with Omaha's 140+ annual freeze-thaw cycles, roofing materials fatigue faster
          here than in drier climates.
        </p>
        <p class="reveal-up reveal-delay-3">
          Wind is the other constant. Omaha sits in the Great Plains wind corridor, where straight-line
          winds regularly hit 60-70 mph during thunderstorms. Homes near the river bluffs and along the
          I-680 corridor face especially high wind uplift risk, making proper nail patterns and drip-edge
          installation critical.
        </p>
        <div class="om-weather-badges reveal-up reveal-delay-4">
          <span class="om-weather-badge"><i data-lucide="cloud-hail" aria-hidden="true"></i> 5-7 hail events/year</span>
          <span class="om-weather-badge"><i data-lucide="droplets" aria-hidden="true"></i> 70%+ summer humidity</span>
          <span class="om-weather-badge"><i data-lucide="wind" aria-hidden="true"></i> 60+ mph gusts</span>
          <span class="om-weather-badge"><i data-lucide="thermometer-snowflake" aria-hidden="true"></i> 140+ freeze-thaw cycles</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CTA BANNER ═══════════════════════════════════════════ -->
<section class="om-cta-section">
  <div class="container">
    <h2 class="reveal-up">Protect Your Omaha Home Today</h2>
    <p class="reveal-up reveal-delay-1">
      Whether you need a roof inspection after the last storm or a full gutter system for your West Omaha home,
      Crawford Roofing delivers free on-site estimates backed by <?php echo $yearsInBusiness; ?>+ years of Omaha experience.
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
