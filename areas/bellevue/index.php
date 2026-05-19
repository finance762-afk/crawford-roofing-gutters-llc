<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ───────────────────────────────────────────────
$pageTitle       = 'Roofing & Gutter Contractor in Bellevue, NE | ' . $siteName;
$pageDescription = 'Licensed roofing contractor serving Bellevue, NE — roof repair, replacement, and gutter services near Offutt AFB. Crawford Roofing & Gutters has ' . $yearsInBusiness . '+ years of experience. Free estimates.';
$canonicalUrl    = $siteUrl . '/areas/bellevue/';
$currentPage     = 'areas';
$cssVersion      = '3';

$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/';
$heroImg = $imgBase . '1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg';
$heroImagePreload = $heroImg;
$secondaryImg = $imgBase . '1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg';
$tertiaryImg  = $imgBase . '1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg';

// ── Schema ───────────────────────────────────────────────────
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',          'url' => $siteUrl . '/'],
    ['name' => 'Service Areas', 'url' => $siteUrl . '/areas/'],
    ['name' => 'Bellevue',      'url' => $siteUrl . '/areas/bellevue/'],
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
        'name' => 'Bellevue',
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
   Bellevue Area Page — Page-Specific Styles
   Premium Tier — Unique prefix: .bv-
   Crawford Roofing & Gutters LLC
   ═══════════════════════════════════════════════════════════════ */

/* ── 1. HERO ─────────────────────────────────────────────────── */
.bv-hero {
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
.bv-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    150deg,
    rgba(var(--color-primary-rgb), 0.94) 0%,
    rgba(var(--color-primary-rgb), 0.78) 42%,
    rgba(var(--color-secondary-rgb), 0.62) 100%
  );
  z-index: 1;
}
.bv-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  opacity: 0.13;
  z-index: 1;
  pointer-events: none;
}
.bv-hero .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.bv-hero .hero-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
}
.bv-hero .hero-breadcrumb a {
  color: rgba(255, 255, 255, 0.6);
  transition: color var(--transition-fast);
}
.bv-hero .hero-breadcrumb a:hover {
  color: rgba(255, 255, 255, 0.9);
}
.bv-hero .hero-breadcrumb .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.35);
  font-size: var(--font-size-xs);
}
.bv-hero .hero-breadcrumb .breadcrumb-current {
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(1.8);
  font-weight: 600;
}
.bv-hero .eyebrow-label {
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
.bv-hero .eyebrow-label .eyebrow-dot {
  width: 5px;
  height: 5px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.bv-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 3.75rem);
  line-height: 1.08;
  margin-bottom: var(--space-6);
  text-wrap: balance;
  max-width: 24ch;
}
.bv-hero h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.7);
}
.bv-hero .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 640px;
  margin-bottom: var(--space-8);
}
.bv-hero .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-10);
}
.bv-hero .hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  align-items: center;
}
.bv-hero .hero-trust-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.75);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.bv-hero .hero-trust-item i,
.bv-hero .hero-trust-item svg {
  width: 16px;
  height: 16px;
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(2);
}

/* ── Section Dividers ────────────────────────────────────────── */
.bv-divider-angle {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.bv-divider-angle--top { top: -1px; }
.bv-divider-angle--bottom { bottom: -1px; }
.bv-divider-angle svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 55px;
}
.bv-divider-wave {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.bv-divider-wave--top { top: -1px; }
.bv-divider-wave--bottom { bottom: -1px; }
.bv-divider-wave svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 70px;
}

/* ── 2. ANSWER BLOCK ─────────────────────────────────────────── */
.bv-answer-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.bv-answer-section .bv-floating-blob {
  position: absolute;
  width: 380px;
  height: 380px;
  border-radius: 55% 45% 48% 52% / 42% 58% 42% 58%;
  background: rgba(var(--color-accent-rgb), 0.03);
  pointer-events: none;
  z-index: 0;
  bottom: -120px;
  left: -160px;
  animation: bv-blob-float 20s ease-in-out infinite;
}
@keyframes bv-blob-float {
  0%, 100% { transform: translate(0, 0) rotate(0deg); }
  33% { transform: translate(18px, -15px) rotate(5deg); }
  66% { transform: translate(-12px, 20px) rotate(-4deg); }
}
.bv-answer-content {
  position: relative;
  z-index: 1;
  max-width: var(--max-width);
}
.bv-answer-content .section-title {
  text-align: left;
}
.bv-answer-content .answer-block {
  background: rgba(var(--color-primary-rgb), 0.03);
  border-left: 4px solid rgba(var(--color-accent-rgb), 0.35);
  padding: var(--space-6);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin: var(--space-6) 0;
}
.bv-answer-content .answer-block p {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-text);
  margin: 0;
}

/* ── 3. LOCAL CONTENT — SPLIT LAYOUT ────────────────────────── */
.bv-local-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0 var(--space-20);
  overflow: hidden;
}
.bv-local-split {
  display: grid;
  grid-template-columns: 1fr 1.1fr;
  gap: var(--space-12);
  align-items: center;
  margin-top: var(--space-10);
}
.bv-local-split--reverse {
  grid-template-columns: 1.1fr 1fr;
}
.bv-local-image {
  border-radius: var(--radius-xl);
  overflow: hidden;
  aspect-ratio: 4 / 3;
  position: relative;
}
.bv-local-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.bv-local-image::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: var(--radius-xl);
  box-shadow: inset 0 0 0 2px rgba(var(--color-accent-rgb), 0.10);
  pointer-events: none;
}
.bv-local-text h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  color: var(--color-primary);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.bv-local-text p {
  font-size: var(--font-size-base);
  color: var(--color-text);
  line-height: 1.7;
  margin-bottom: var(--space-4);
  max-width: 65ch;
}
.bv-local-text p:last-child {
  margin-bottom: 0;
}

/* SIGNATURE SECTION: Military Housing Callout Ribbon */
.bv-military-ribbon {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-12) 0;
  overflow: hidden;
  margin-top: var(--space-16);
}
.bv-military-ribbon::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    120deg,
    rgba(var(--color-accent-rgb), 0.12) 0%,
    transparent 50%,
    rgba(var(--color-accent-rgb), 0.08) 100%
  );
  pointer-events: none;
}
.bv-military-ribbon::after {
  content: '';
  position: absolute;
  top: -40px;
  left: 10%;
  width: 120px;
  height: 120px;
  border-radius: var(--radius-full);
  border: 2px solid rgba(255, 255, 255, 0.04);
  pointer-events: none;
}
.bv-military-ribbon .container {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: auto 1fr;
  gap: var(--space-8);
  align-items: center;
}
.bv-military-icon {
  width: 72px;
  height: 72px;
  border-radius: var(--radius-full);
  background: rgba(255, 255, 255, 0.08);
  display: flex;
  align-items: center;
  justify-content: center;
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.8);
  flex-shrink: 0;
}
.bv-military-icon i,
.bv-military-icon svg {
  width: 32px;
  height: 32px;
}
.bv-military-text h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  color: var(--color-white);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.bv-military-text p {
  color: rgba(255, 255, 255, 0.8);
  font-size: var(--font-size-base);
  line-height: 1.65;
  max-width: 65ch;
  margin: 0;
}

/* ── 4. SERVICES AVAILABLE ─────────────────────────────────── */
.bv-services-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.bv-services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  margin-top: var(--space-10);
}
.bv-service-card {
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  display: flex;
  align-items: flex-start;
  gap: var(--space-4);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.bv-service-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.bv-service-card__icon {
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
.bv-service-card__icon i,
.bv-service-card__icon svg {
  width: 22px;
  height: 22px;
}
.bv-service-card__text h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0 0 var(--space-1);
  line-height: 1.3;
}
.bv-service-card__text a {
  font-size: var(--font-size-sm);
  color: var(--color-accent);
  font-weight: 600;
  transition: color var(--transition-fast);
}
.bv-service-card__text a:hover {
  color: var(--color-primary);
}

/* ── 5. WHY CHOOSE CRAWFORD FOR BELLEVUE ──────────────────── */
.bv-why-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.bv-why-cards {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  margin-top: var(--space-10);
}
.bv-why-card {
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
.bv-why-card::after {
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
.bv-why-card:hover::after {
  width: 60%;
}
.bv-why-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.bv-why-card__icon {
  width: 56px;
  height: 56px;
  border-radius: var(--radius-full);
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.1);
  color: var(--color-accent);
}
.bv-why-card__icon i,
.bv-why-card__icon svg {
  width: 24px;
  height: 24px;
}
.bv-why-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0;
  line-height: 1.3;
}
.bv-why-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  margin: 0;
}

/* ── 6. CTA BANNER ─────────────────────────────────────────── */
.bv-cta-section {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  overflow: hidden;
  text-align: center;
}
.bv-cta-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(var(--color-accent-rgb), 0.14) 0%, transparent 60%);
  pointer-events: none;
}
.bv-cta-section::after {
  content: '';
  position: absolute;
  top: -70px;
  left: -70px;
  width: 220px;
  height: 220px;
  border-radius: var(--radius-full);
  border: 3px solid rgba(255, 255, 255, 0.04);
  pointer-events: none;
}
.bv-cta-section .container {
  position: relative;
  z-index: 1;
}
.bv-cta-section h2 {
  color: var(--color-white);
  font-size: clamp(1.75rem, 3.5vw, 2.75rem);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.bv-cta-section p {
  color: rgba(255, 255, 255, 0.85);
  font-size: var(--font-size-lg);
  max-width: 52ch;
  margin: 0 auto var(--space-8);
  line-height: 1.7;
}
.bv-cta-section .cta-buttons {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── RESPONSIVE ──────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .bv-local-split,
  .bv-local-split--reverse {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .bv-services-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .bv-why-cards {
    grid-template-columns: repeat(2, 1fr);
  }
  .bv-military-ribbon .container {
    grid-template-columns: 1fr;
    text-align: center;
    justify-items: center;
  }
}
@media (max-width: 600px) {
  .bv-hero {
    min-height: 60vh;
    padding: var(--space-12) 0 var(--space-8);
  }
  .bv-services-grid {
    grid-template-columns: 1fr;
  }
  .bv-why-cards {
    grid-template-columns: 1fr;
  }
  .bv-hero .hero-ctas {
    flex-direction: column;
  }
  .bv-hero .hero-trust {
    flex-direction: column;
    gap: var(--space-3);
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══ HERO ═══════════════════════════════════════════════════ -->
<section class="bv-hero" style="background-image:url('<?php echo $heroImg; ?>');">
  <div class="container">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <a href="/areas/">Service Areas</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <span class="breadcrumb-current">Bellevue</span>
    </nav>

    <div class="eyebrow-label">
      <span class="eyebrow-dot" aria-hidden="true"></span>
      Bellevue, NE
    </div>

    <h1>Roofing &amp; Gutter Contractor in <span class="accent-word">Bellevue, NE</span></h1>

    <p class="hero-answer">
      Crawford Roofing &amp; Gutters LLC is a licensed Nebraska roofing contractor providing complete
      roof and gutter services to Bellevue homeowners. As the state's oldest city and home to Offutt Air
      Force Base, Bellevue demands contractors who understand both historic properties and military housing.
      Our <?php echo $yearsInBusiness; ?>-year record speaks for itself.
    </p>

    <div class="hero-ctas">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Bellevue Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> <?php echo formatPhone($phone); ?>
      </a>
      <?php endif; ?>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="map-pin" aria-hidden="true"></i> Serving Bellevue</span>
      <span class="hero-trust-item"><i data-lucide="clock" aria-hidden="true"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      <span class="hero-trust-item"><i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured</span>
    </div>
  </div>
</section>

<!-- ═══ ANSWER BLOCK ═════════════════════════════════════════ -->
<section class="bv-answer-section">
  <div class="bv-divider-angle bv-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-primary)" points="1200,0 0,55 1200,55"></polygon>
    </svg>
  </div>
  <div class="bv-floating-blob" aria-hidden="true"></div>

  <div class="container">
    <div class="bv-answer-content">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Bellevue Roofing</span>
        <h2>What Roofing &amp; Gutter Services Are Available <span class="text-accent">in Bellevue?</span></h2>
      </div>

      <div class="answer-block reveal-up">
        <p>
          Bellevue residents searching for roofing near me in Bellevue can count on Crawford for all 9 of our
          core services: roof repair, roof replacement, new roof installation, roof inspection, gutter installation,
          gutter addition, gutter repair, gutter replacement, and gutter cleaning. We serve every Bellevue
          neighborhood from Olde Towne to Twin Creek, including Offutt Air Force Base housing.
        </p>
      </div>

      <p class="prose reveal-up reveal-delay-1">
        Bellevue holds the distinction of being Nebraska's oldest city, chartered in 1855. That history is visible
        in the architecture — Olde Towne Bellevue features Victorian-era homes and early 20th-century storefronts
        that demand period-sensitive roofing work. Crawford's crews have experience matching materials on these
        historic Bellevue structures while meeting current building codes.
      </p>

      <p class="prose reveal-up reveal-delay-2">
        The Kennedy Freeway corridor splits Bellevue's residential landscape into distinct neighborhoods. East of
        the freeway, established communities like Twin Creek and the areas near Bellevue East High School have
        homes from the 1960s-1980s — many approaching or past their second roof lifecycle. West Bellevue is newer,
        with developments near Bellevue West High School and Bellevue University featuring homes built in the 2000s
        and 2010s. These properties face their first major roofing decisions as original shingles reach the 15-20
        year mark.
      </p>

      <p class="prose reveal-up reveal-delay-3">
        Fontenelle Forest borders Bellevue's southern edge, and the dense tree canopy along Bellevue Boulevard
        contributes heavy seasonal debris to gutters and roof valleys. Our gutter cleaning crews know which Bellevue
        neighborhoods see the worst fall leaf accumulation and schedule service accordingly — before ice-dam season
        arrives in December.
      </p>
    </div>
  </div>
</section>

<!-- ═══ LOCAL CONTENT — SPLITS ═══════════════════════════════ -->
<section class="bv-local-section">
  <div class="bv-divider-wave bv-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70 C400,15 800,55 1200,25 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label reveal-up">Local Expertise</span>
      <h2 class="reveal-up">Why Bellevue Homes Face <span class="text-accent">Unique Challenges</span></h2>
    </div>

    <div class="bv-local-split">
      <div class="bv-local-image reveal-left">
        <img src="<?php echo $secondaryImg; ?>" alt="Roof inspection on a Bellevue, Nebraska home" width="800" height="600" loading="lazy">
      </div>
      <div class="bv-local-text reveal-right">
        <h3>Offutt AFB &amp; Military Housing in Bellevue</h3>
        <p>
          Offutt Air Force Base anchors Bellevue's economy and housing market. The Capehart and BelAir
          military housing areas feature standardized construction from the 1960s-1970s. These homes share
          common roof designs — low-slope hip roofs with minimal overhang — that require specific flashing
          and ventilation strategies to prevent moisture buildup.
        </p>
        <p>
          Military families on PCS orders often need fast-turnaround roof certifications for home sales.
          Crawford provides priority inspection scheduling for Bellevue military homeowners — typically
          within 48 hours — with documentation formatted for VA loan requirements.
        </p>
      </div>
    </div>

    <div class="bv-local-split bv-local-split--reverse" style="margin-top:var(--space-12);">
      <div class="bv-local-text reveal-left">
        <h3>Olde Towne Bellevue &amp; Historic Roofing</h3>
        <p>
          The Olde Towne district contains some of the oldest structures in Nebraska. Roofing these
          Bellevue landmarks means navigating steep pitches, decorative trim, and materials that match
          the neighborhood's character. We work with homeowners and the city's historic preservation
          guidelines to select shingle profiles and colors that complement the period architecture.
        </p>
        <p>
          Beyond aesthetics, these older Bellevue homes often have original decking that needs assessment
          before new shingles go on. Crawford inspects every square foot of decking during Bellevue tear-offs
          and replaces rotted boards before installation — no shortcuts.
        </p>
      </div>
      <div class="bv-local-image reveal-right">
        <img src="<?php echo $tertiaryImg; ?>" alt="Historic home roofing project in Olde Towne Bellevue" width="800" height="600" loading="lazy">
      </div>
    </div>
  </div>

  <!-- SIGNATURE: Military Housing Ribbon -->
  <div class="bv-military-ribbon reveal-up">
    <div class="container">
      <div class="bv-military-icon">
        <i data-lucide="shield" aria-hidden="true"></i>
      </div>
      <div class="bv-military-text">
        <h3>Serving Those Who Serve — Bellevue Military Families</h3>
        <p>
          Crawford Roofing has worked with Bellevue military families since 1993. We understand VA loan
          inspection requirements, PCS timeline pressure, and the specific roofing needs of Offutt-area housing.
          Active duty, veterans, and military families in Bellevue receive priority scheduling.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SERVICES AVAILABLE ═══════════════════════════════════ -->
<section class="bv-services-section">
  <div class="bv-divider-angle bv-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-bg-alt)" points="0,0 1200,55 0,55"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label reveal-up">Full-Service Coverage</span>
      <h2 class="reveal-up">Every Roofing &amp; Gutter Service for <span class="text-accent">Bellevue Homes</span></h2>
    </div>

    <div class="bv-services-grid">
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
      <div class="bv-service-card <?php echo $tint; ?> reveal-up <?php echo $delay; ?>">
        <div class="bv-service-card__icon"><i data-lucide="<?php echo $icon; ?>" aria-hidden="true"></i></div>
        <div class="bv-service-card__text">
          <h3><?php echo htmlspecialchars($service['name']); ?></h3>
          <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/">Learn more &rarr;</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ WHY CHOOSE CRAWFORD FOR BELLEVUE ════════════════════ -->
<section class="bv-why-section">
  <div class="bv-divider-wave bv-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,0 L1200,0 L1200,70 C800,25 400,60 0,20 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label reveal-up">Why Crawford</span>
      <h2 class="reveal-up">Why Bellevue Homeowners <span class="text-accent">Choose Crawford</span></h2>
    </div>

    <div class="bv-why-cards">
      <div class="bv-why-card card-tint-1 reveal-up reveal-delay-1">
        <div class="bv-why-card__icon"><i data-lucide="truck" aria-hidden="true"></i></div>
        <h3>15-Minute Response</h3>
        <p>Our Omaha HQ is just 12 miles from Bellevue — crews arrive fast for emergencies and estimates.</p>
      </div>
      <div class="bv-why-card card-tint-2 reveal-up reveal-delay-2">
        <div class="bv-why-card__icon"><i data-lucide="file-check" aria-hidden="true"></i></div>
        <h3>VA Loan Ready</h3>
        <p>Roof inspections formatted for VA loan requirements — essential for Bellevue's military home sales.</p>
      </div>
      <div class="bv-why-card card-tint-3 reveal-up reveal-delay-3">
        <div class="bv-why-card__icon"><i data-lucide="history" aria-hidden="true"></i></div>
        <h3>Historic Expertise</h3>
        <p>Experience with Olde Towne Bellevue's period homes — correct materials, proper techniques.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CTA BANNER ═══════════════════════════════════════════ -->
<section class="bv-cta-section">
  <div class="container">
    <h2 class="reveal-up">Bellevue Roofing Estimates — Always Free</h2>
    <p class="reveal-up reveal-delay-1">
      From Olde Towne to Offutt, Crawford Roofing &amp; Gutters has protected Bellevue homes for
      <?php echo $yearsInBusiness; ?>+ years. Schedule your free on-site estimate and see why Bellevue
      families keep coming back.
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
