<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ───────────────────────────────────────────────
$pageTitle       = 'Roofing & Gutter Services in Bennington, NE | ' . $siteName;
$pageDescription = 'Crawford Roofing & Gutters serves Bennington, NE with roof repair, replacement, gutter installation, and storm damage repair. ' . $yearsInBusiness . '+ years experience. Free estimates for Bennington homeowners.';
$canonicalUrl    = $siteUrl . '/areas/bennington/';
$currentPage     = 'areas';
$heroImagePreload = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg';
$cssVersion      = '3';

// ── Image Library ────────────────────────────────────────────
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/';
$heroImg = $imgBase . '1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg';
$secondaryImg = $imgBase . '1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg';
$tertiaryImg = $imgBase . '1779134049337-o7oznv-dff36b_a35b2df95a814ec49799d0169f3a87da_mv2.jpg';

// ── Schema ───────────────────────────────────────────────────
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',          'url' => $siteUrl . '/'],
    ['name' => 'Service Areas', 'url' => $siteUrl . '/areas/'],
    ['name' => 'Bennington',    'url' => $siteUrl . '/areas/bennington/'],
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
        'name' => 'Bennington',
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
   Bennington, NE — Individual Area Page
   Premium Tier — Crawford Roofing & Gutters LLC
   Prefix: .bn-
   ═══════════════════════════════════════════════════════════════ */

/* ── 1. HERO: LAYERED WITH GRADIENT + NOISE ─────────────────── */
.bn-hero {
  position: relative;
  min-height: 72vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroImg; ?>');
  background-size: cover;
  background-position: center 30%;
  background-repeat: no-repeat;
  overflow: hidden;
  padding: var(--space-16) 0 var(--space-12);
}
.bn-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    160deg,
    rgba(var(--color-primary-rgb), 0.94) 0%,
    rgba(var(--color-primary-rgb), 0.80) 45%,
    rgba(var(--color-secondary-rgb), 0.68) 100%
  );
  z-index: 1;
}
.bn-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  opacity: 0.14;
  z-index: 1;
  pointer-events: none;
}
.bn-hero .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.bn-hero .hero-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
}
.bn-hero .hero-breadcrumb a {
  color: rgba(255, 255, 255, 0.6);
  transition: color var(--transition-fast);
}
.bn-hero .hero-breadcrumb a:hover {
  color: rgba(255, 255, 255, 0.9);
}
.bn-hero .hero-breadcrumb .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.35);
  font-size: var(--font-size-xs);
}
.bn-hero .hero-breadcrumb .breadcrumb-current {
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(1.8);
  font-weight: 600;
}
.bn-hero .eyebrow-label {
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
.bn-hero .eyebrow-label .eyebrow-dot {
  width: 5px;
  height: 5px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.bn-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 3.75rem);
  line-height: 1.08;
  margin-bottom: var(--space-6);
  text-wrap: balance;
  max-width: 24ch;
}
.bn-hero h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.7);
}
.bn-hero .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 640px;
  margin-bottom: var(--space-8);
}
.bn-hero .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-10);
}
.bn-hero .hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  align-items: center;
}
.bn-hero .hero-trust-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.75);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.bn-hero .hero-trust-item i,
.bn-hero .hero-trust-item svg {
  width: 16px;
  height: 16px;
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(2);
}

/* ── SECTION DIVIDERS ────────────────────────────────────────── */
.bn-divider-angle {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.bn-divider-angle--top { top: -1px; }
.bn-divider-angle--bottom { bottom: -1px; }
.bn-divider-angle svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 55px;
}
.bn-divider-wave {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.bn-divider-wave--top { top: -1px; }
.bn-divider-wave--bottom { bottom: -1px; }
.bn-divider-wave svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 70px;
}

/* ── 2. ANSWER BLOCK + LOCAL CONTEXT ─────────────────────────── */
.bn-answer-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.bn-answer-section .bn-floating-blob {
  position: absolute;
  width: 420px;
  height: 420px;
  border-radius: 42% 58% 55% 45% / 48% 40% 60% 52%;
  background: rgba(var(--color-accent-rgb), 0.03);
  pointer-events: none;
  z-index: 0;
  top: -140px;
  right: -200px;
  animation: bn-blob-float 18s ease-in-out infinite;
}
@keyframes bn-blob-float {
  0%, 100% { transform: translate(0, 0) rotate(0deg); }
  33% { transform: translate(-18px, 22px) rotate(4deg); }
  66% { transform: translate(12px, -15px) rotate(-3deg); }
}
.bn-answer-layout {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1.5fr 1fr;
  gap: var(--space-12);
  align-items: start;
}
.bn-answer-layout .answer-block {
  background: rgba(var(--color-primary-rgb), 0.03);
  border-left: 4px solid rgba(var(--color-accent-rgb), 0.35);
  padding: var(--space-6);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin-bottom: var(--space-6);
}
.bn-answer-layout .answer-block h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  color: var(--color-primary);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.bn-answer-layout .answer-block p {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-text);
  margin: 0;
}
.bn-answer-sidebar {
  position: sticky;
  top: calc(var(--space-20) + 70px);
}
.bn-area-facts {
  background: var(--color-card-tint-1);
  border-radius: var(--radius-lg);
  padding: var(--space-8);
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.bn-area-facts h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin: 0;
  text-wrap: balance;
}
.bn-area-facts .bn-fact-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  font-size: var(--font-size-sm);
  color: var(--color-text);
  line-height: 1.6;
}
.bn-area-facts .bn-fact-item i,
.bn-area-facts .bn-fact-item svg {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: 2px;
}

/* ── 3. LOCAL CONTENT — SPLIT LAYOUT ─────────────────────────── */
.bn-local-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0 var(--space-20);
  overflow: hidden;
}
.bn-local-split {
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: var(--space-10);
  align-items: center;
}
.bn-local-image {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.bn-local-image img {
  width: 100%;
  height: auto;
  display: block;
  aspect-ratio: 4 / 3;
  object-fit: cover;
}
.bn-local-image::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 30%;
  background: linear-gradient(to top, rgba(var(--color-primary-rgb), 0.3), transparent);
  pointer-events: none;
}
.bn-local-content h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.75rem, 3vw, 2.5rem);
  color: var(--color-primary);
  margin-bottom: var(--space-6);
  text-wrap: balance;
}
.bn-local-content .prose p {
  margin-bottom: var(--space-4);
}

/* ── 4. SIGNATURE SECTION: BENNINGTON GROWTH TRACKER ─────────── */
/* Unique to Bennington — New Construction Priority Callout */
.bn-growth-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.bn-growth-grid {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  gap: var(--space-6);
  margin-top: var(--space-10);
}
.bn-growth-card {
  border-radius: var(--radius-lg);
  padding: var(--space-8);
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
  position: relative;
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.bn-growth-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 4px;
  background: linear-gradient(90deg, var(--color-accent), rgba(var(--color-accent-rgb), 0.3));
  border-radius: var(--radius-lg) var(--radius-lg) 0 0;
}
.bn-growth-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.bn-growth-card__icon {
  width: 52px;
  height: 52px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.bn-growth-card__icon i,
.bn-growth-card__icon svg {
  width: 24px;
  height: 24px;
}
.bn-growth-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin: 0;
  text-wrap: balance;
  line-height: 1.3;
}
.bn-growth-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.65;
  margin: 0;
}

/* ── 5. SERVICES AVAILABLE ───────────────────────────────────── */
.bn-services-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0 var(--space-20);
  overflow: hidden;
}
.bn-services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  margin-top: var(--space-10);
}
.bn-service-item {
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  display: flex;
  align-items: flex-start;
  gap: var(--space-4);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.bn-service-item:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.bn-service-item__icon {
  width: 44px;
  height: 44px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  color: var(--color-accent);
}
.bn-service-item__icon i,
.bn-service-item__icon svg {
  width: 20px;
  height: 20px;
}
.bn-service-item__text h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0 0 var(--space-1);
  line-height: 1.3;
}
.bn-service-item__text p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.55;
  margin: 0 0 var(--space-2);
}
.bn-service-item__text a {
  color: var(--color-accent);
  font-size: var(--font-size-sm);
  font-weight: 600;
  transition: color var(--transition-fast);
}
.bn-service-item__text a:hover {
  color: var(--color-primary);
}

/* ── 6. WHY CRAWFORD FOR BENNINGTON ──────────────────────────── */
.bn-why-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.bn-why-asym {
  display: grid;
  grid-template-columns: 2fr 1.2fr;
  gap: var(--space-10);
  align-items: center;
  margin-top: var(--space-10);
}
.bn-why-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-6);
}
.bn-why-item {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.bn-why-item__marker {
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
.bn-why-item__content h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0 0 var(--space-1);
  text-wrap: balance;
}
.bn-why-item__content p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  margin: 0;
}
.bn-why-image {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.bn-why-image img {
  width: 100%;
  height: auto;
  display: block;
  aspect-ratio: 3 / 4;
  object-fit: cover;
}

/* ── 7. CTA BANNER ───────────────────────────────────────────── */
.bn-cta-section {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  overflow: hidden;
  text-align: center;
}
.bn-cta-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(145deg, rgba(var(--color-accent-rgb), 0.15) 0%, transparent 55%);
  pointer-events: none;
}
.bn-cta-section::after {
  content: '';
  position: absolute;
  top: -80px;
  left: -80px;
  width: 240px;
  height: 240px;
  border-radius: var(--radius-full);
  border: 3px solid rgba(255, 255, 255, 0.04);
  pointer-events: none;
}
.bn-cta-section .container {
  position: relative;
  z-index: 1;
}
.bn-cta-section h2 {
  color: var(--color-white);
  font-size: clamp(1.75rem, 3.5vw, 2.75rem);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.bn-cta-section p {
  color: rgba(255, 255, 255, 0.85);
  font-size: var(--font-size-lg);
  max-width: 52ch;
  margin: 0 auto var(--space-8);
  line-height: 1.7;
}
.bn-cta-section .cta-buttons {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── RESPONSIVE ──────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .bn-answer-layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .bn-answer-sidebar {
    position: static;
  }
  .bn-local-split {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .bn-growth-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .bn-services-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .bn-why-asym {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .bn-why-image {
    order: -1;
  }
}
@media (max-width: 600px) {
  .bn-hero {
    min-height: 60vh;
    padding: var(--space-12) 0 var(--space-8);
  }
  .bn-growth-grid {
    grid-template-columns: 1fr;
  }
  .bn-services-grid {
    grid-template-columns: 1fr;
  }
  .bn-why-image img {
    aspect-ratio: 4 / 3;
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══ HERO ═══════════════════════════════════════════════════ -->
<section class="bn-hero" style="background-image:url('<?php echo $heroImg; ?>');">
  <div class="container">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <a href="/areas/">Service Areas</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <span class="breadcrumb-current">Bennington</span>
    </nav>

    <div class="eyebrow-label">
      <span class="eyebrow-dot" aria-hidden="true"></span>
      Bennington, NE
    </div>

    <h1>Roofing &amp; Gutter Services in <span class="accent-word">Bennington, NE</span></h1>

    <p class="hero-answer">
      Looking for roofing near me in Bennington? <?php echo htmlspecialchars($siteName); ?> is a licensed Nebraska
      roofing contractor based in Omaha, serving Bennington homeowners with roof repair, replacement, gutter
      installation, and storm damage restoration. With <?php echo $yearsInBusiness; ?>+ years of hands-on experience
      and crews just 15 miles from Bennington, we respond fast and build to last.
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
      <span class="hero-trust-item"><i data-lucide="map-pin" aria-hidden="true"></i> 15 Mi from Bennington</span>
      <span class="hero-trust-item"><i data-lucide="clock" aria-hidden="true"></i> <?php echo $yearsInBusiness; ?>+ Years Experience</span>
      <span class="hero-trust-item"><i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured</span>
    </div>
  </div>
</section>

<!-- ═══ ANSWER BLOCK + LOCAL CONTEXT ═════════════════════════ -->
<section class="bn-answer-section">
  <div class="bn-divider-angle bn-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-primary)" points="0,0 1200,55 0,55"></polygon>
    </svg>
  </div>
  <div class="bn-floating-blob" aria-hidden="true"></div>

  <div class="container">
    <div class="bn-answer-layout">
      <div class="bn-answer-content">
        <div class="section-title" style="text-align:left;">
          <span class="eyebrow-label reveal-up">Bennington Roofing</span>
          <h2 class="reveal-up">What Roofing Services Does Crawford Offer in <span class="text-accent">Bennington?</span></h2>
        </div>

        <div class="answer-block reveal-up">
          <h3>How Much Does Roof Repair Cost in Bennington, NE?</h3>
          <p>
            Roof repair in Bennington typically ranges from $350 for minor shingle patching to $5,000+ for
            significant storm damage restoration. Bennington sits on the western edge of the Omaha metro where
            open prairie creates higher wind exposure. Our estimators provide exact pricing during a free on-site
            inspection — no guesswork, no pressure.
          </p>
        </div>

        <div class="prose reveal-up reveal-delay-1">
          <p>
            Bennington is one of the fastest-expanding communities in the northwest Omaha metro. What was
            once a quiet rural town has transformed into a thriving suburban hub, driven by the highly rated
            Bennington Public Schools and proximity to both downtown Omaha and Elkhorn. Developments like
            Prairie Lakes, Standing Bear, and Big Elk Creek have brought thousands of new homes to the area
            since 2010 — many still under original builder warranties.
          </p>
          <p>
            Crawford Roofing &amp; Gutters handles warranty-compliant repairs and upgrades for Bennington's
            newer housing stock. When builder-grade roofing materials underperform or hail hits a subdivision
            still within its warranty window, we document damage, coordinate with warranty providers, and install
            replacements that meet or exceed original specifications.
          </p>
          <p>
            Bennington's rural-to-suburban transition also means mixed housing stock across the community.
            Established homes along the original town grid need different attention than the newer developments
            west of Highway 133. Our crews understand how to match shingle profiles on homes from the 1960s
            and 1970s while installing modern ice-and-water barriers on the newer builds.
          </p>
          <p>
            High wind exposure is a persistent concern for Bennington roofs. Positioned on the western prairie
            edge of the metro, Bennington properties face unobstructed wind from the west and northwest. This
            means shingle lift-off, gutter displacement, and flashing damage occur more frequently here than in
            sheltered neighborhoods closer to downtown Omaha. Crawford specifies wind-rated underlayment and
            enhanced nailing patterns for every Bennington roofing project.
          </p>
        </div>
      </div>

      <aside class="bn-answer-sidebar reveal-right reveal-delay-2">
        <div class="bn-area-facts">
          <h3>Bennington at a Glance</h3>
          <div class="bn-fact-item">
            <i data-lucide="map-pin" aria-hidden="true"></i>
            <span>~15 miles northwest of downtown Omaha</span>
          </div>
          <div class="bn-fact-item">
            <i data-lucide="school" aria-hidden="true"></i>
            <span>Bennington Public Schools — top-rated district attracting young families</span>
          </div>
          <div class="bn-fact-item">
            <i data-lucide="home" aria-hidden="true"></i>
            <span>Prairie Lakes, Standing Bear, Big Elk Creek developments</span>
          </div>
          <div class="bn-fact-item">
            <i data-lucide="wind" aria-hidden="true"></i>
            <span>High wind exposure on the western prairie edge</span>
          </div>
          <div class="bn-fact-item">
            <i data-lucide="calendar" aria-hidden="true"></i>
            <span>Many homes built post-2010 with active builder warranties</span>
          </div>
          <div class="bn-fact-item">
            <i data-lucide="trending-up" aria-hidden="true"></i>
            <span>Rapidly growing — one of NE's fastest-expanding communities</span>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>

<!-- ═══ LOCAL CONTENT — SPLIT ════════════════════════════════ -->
<section class="bn-local-section">
  <div class="bn-divider-wave bn-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70 C300,20 600,60 900,25 C1050,10 1150,40 1200,30 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="bn-local-split">
      <div class="bn-local-image reveal-left">
        <img src="<?php echo $secondaryImg; ?>"
             alt="Roofing crew working on a Bennington home near Big Elk Creek"
             width="600" height="450" loading="lazy">
      </div>
      <div class="bn-local-content reveal-right reveal-delay-1">
        <h2>Bennington's Growing Neighborhoods <span class="text-accent">Need Reliable Roofs</span></h2>
        <div class="prose">
          <p>
            The explosion of new development in Bennington means roofing contractors are in constant demand.
            From the townhome clusters near the Bennington school campus to the single-family homes spreading
            west along Military Road, every new subdivision needs gutter systems, roof inspections on occupied
            units, and periodic maintenance as homes settle during their first decade.
          </p>
          <p>
            Crawford's familiarity with Bennington builders and their preferred material specifications allows us
            to match existing roof systems precisely. When your neighbor three doors down needs a repair after a
            hailstorm, and their roof was installed by the same builder as yours, we already know the shingle
            brand, color, and profile — saving time and ensuring a seamless repair.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SIGNATURE: BENNINGTON GROWTH TRACKER ═════════════════ -->
<section class="bn-growth-section">
  <div class="bn-divider-angle bn-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-bg-alt)" points="1200,0 0,55 1200,55"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label reveal-up">New Construction Priority</span>
      <h2 class="reveal-up">Why New Bennington Homes Need <span class="text-accent">Proactive Roof Care</span></h2>
      <p class="prose-centered reveal-up reveal-delay-1">
        Builder-grade materials and rapid construction timelines create predictable maintenance windows.
        Crawford helps Bennington homeowners stay ahead of problems.
      </p>
    </div>

    <div class="bn-growth-grid">
      <div class="bn-growth-card card-tint-1 reveal-up reveal-delay-1">
        <div class="bn-growth-card__icon"><i data-lucide="file-check" aria-hidden="true"></i></div>
        <h3>Warranty-Compliant Repairs</h3>
        <p>
          Many Bennington homes built after 2010 carry 10-year builder warranties. We document every repair
          with photos and manufacturer specs to keep your warranty intact and your claim defensible.
        </p>
      </div>
      <div class="bn-growth-card card-tint-2 reveal-up reveal-delay-2">
        <div class="bn-growth-card__icon"><i data-lucide="scan-eye" aria-hidden="true"></i></div>
        <h3>5-Year Inspection Cycle</h3>
        <p>
          New roofs in Bennington should be inspected at year 5 and again at year 10. We identify early
          settling, flashing gaps, and drainage problems before they escalate into interior damage.
        </p>
      </div>
      <div class="bn-growth-card card-tint-3 reveal-up reveal-delay-3">
        <div class="bn-growth-card__icon"><i data-lucide="wind" aria-hidden="true"></i></div>
        <h3>Prairie Wind Upgrades</h3>
        <p>
          Bennington's open western exposure subjects roofs to sustained 40+ mph gusts. We retrofit standard
          installations with wind-rated underlayment and 6-nail patterns that exceed code minimums.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SERVICES AVAILABLE IN BENNINGTON ═════════════════════ -->
<section class="bn-services-section">
  <div class="bn-divider-wave bn-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70 C400,15 700,55 1000,20 C1100,12 1170,35 1200,28 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label reveal-up">What We Do</span>
      <h2 class="reveal-up">Roofing &amp; Gutter Services Available in <span class="text-accent">Bennington</span></h2>
      <p class="prose-centered reveal-up reveal-delay-1">
        Every service Crawford offers in the Omaha metro is available to Bennington homeowners — with the same
        crew quality, material standards, and warranty coverage.
      </p>
    </div>

    <div class="bn-services-grid">
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
      <div class="bn-service-item <?php echo $tint; ?> reveal-up <?php echo $delay; ?>">
        <div class="bn-service-item__icon"><i data-lucide="<?php echo $icon; ?>" aria-hidden="true"></i></div>
        <div class="bn-service-item__text">
          <h3><?php echo htmlspecialchars($service['name']); ?></h3>
          <p>Available for Bennington residential and commercial properties.</p>
          <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/">Learn more &rarr;</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ WHY CRAWFORD FOR BENNINGTON ═════════════════════════ -->
<section class="bn-why-section">
  <div class="bn-divider-angle bn-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-bg-alt)" points="0,0 1200,55 0,55"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label reveal-up">Why Crawford</span>
      <h2 class="reveal-up">Why Bennington Homeowners Choose <span class="text-accent">Crawford Roofing</span></h2>
    </div>

    <div class="bn-why-asym">
      <div class="bn-why-list">
        <div class="bn-why-item reveal-left reveal-delay-1">
          <div class="bn-why-item__marker">01</div>
          <div class="bn-why-item__content">
            <h3>15-Minute Dispatch to Bennington</h3>
            <p>Our Omaha office sits just 15 miles from Bennington. Emergency tarping, storm inspections, and scheduled appointments all benefit from this proximity — no travel surcharges, no scheduling delays.</p>
          </div>
        </div>
        <div class="bn-why-item reveal-left reveal-delay-2">
          <div class="bn-why-item__marker">02</div>
          <div class="bn-why-item__content">
            <h3>Builder Warranty Expertise</h3>
            <p>We know Bennington's builders, their material specs, and their warranty processes. When you need a repair that won't void your builder coverage, Crawford handles documentation and compliance.</p>
          </div>
        </div>
        <div class="bn-why-item reveal-left reveal-delay-3">
          <div class="bn-why-item__marker">03</div>
          <div class="bn-why-item__content">
            <h3>Wind-Rated Installation Standards</h3>
            <p>Bennington's prairie exposure demands more than code-minimum installations. We specify 130+ mph wind-rated shingles and enhanced nailing patterns as standard on every Bennington project.</p>
          </div>
        </div>
        <div class="bn-why-item reveal-left reveal-delay-4">
          <div class="bn-why-item__marker">04</div>
          <div class="bn-why-item__content">
            <h3><?php echo $yearsInBusiness; ?>+ Years of Second-Generation Craft</h3>
            <p>Crawford is a family roofing operation that has served the Omaha metro since 1993. Your Bennington project benefits from decades of accumulated knowledge and a reputation we protect on every job.</p>
          </div>
        </div>
      </div>

      <div class="bn-why-image reveal-scale reveal-delay-2">
        <img src="<?php echo $tertiaryImg; ?>"
             alt="Crawford roofing team completing a gutter installation in Bennington, NE"
             width="500" height="667" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ═══ CTA BANNER ═══════════════════════════════════════════ -->
<section class="bn-cta-section">
  <div class="container">
    <h2 class="reveal-up">Need a Roofer in Bennington?</h2>
    <p class="reveal-up reveal-delay-1">
      Crawford Roofing &amp; Gutters provides free on-site estimates for every Bennington project — from
      minor gutter repairs to full roof replacements. Call today or request your estimate online.
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
