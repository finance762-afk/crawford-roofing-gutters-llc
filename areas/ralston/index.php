<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ───────────────────────────────────────────────
$pageTitle       = 'Roofing & Gutter Repair in Ralston, NE | ' . $siteName;
$pageDescription = 'Crawford Roofing & Gutters LLC provides roof replacement, gutter repair, and storm damage restoration in Ralston, NE. Licensed contractor since 1993. Free estimates for Ralston homes.';
$canonicalUrl    = $siteUrl . '/areas/ralston/';
$currentPage     = 'areas';
$cssVersion      = '3';

$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/';
$heroImg = $imgBase . '1779134252517-ip8hel-roofing-contractors-milford-1024x778.jpg';
$heroImagePreload = $heroImg;
$splitImg = $imgBase . '1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg';
$ctaImg   = $imgBase . '1779134252049-ez0nhr-IMG_096815F71F3A-1.jpeg';

// ── Schema ───────────────────────────────────────────────────
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',          'url' => $siteUrl . '/'],
    ['name' => 'Service Areas', 'url' => $siteUrl . '/areas/'],
    ['name' => 'Ralston',       'url' => $siteUrl . '/areas/ralston/'],
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
        'name' => 'Ralston',
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
   Ralston Area Page — Page-Specific Styles
   Prefix: .ra-
   Crawford Roofing & Gutters LLC
   ═══════════════════════════════════════════════════════════════ */

/* ── 1. HERO ─────────────────────────────────────────────────── */
.ra-hero {
  position: relative;
  min-height: 74vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroImg; ?>');
  background-size: cover;
  background-position: center 30%;
  background-repeat: no-repeat;
  overflow: hidden;
  padding: var(--space-16) 0 var(--space-12);
}
.ra-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    155deg,
    rgba(var(--color-primary-rgb), 0.96) 0%,
    rgba(var(--color-primary-rgb), 0.83) 42%,
    rgba(var(--color-secondary-rgb), 0.70) 100%
  );
  z-index: 1;
}
.ra-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  opacity: 0.15;
  z-index: 1;
  pointer-events: none;
}
.ra-hero .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.ra-hero .hero-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
}
.ra-hero .hero-breadcrumb a {
  color: rgba(255, 255, 255, 0.6);
  transition: color var(--transition-fast);
}
.ra-hero .hero-breadcrumb a:hover {
  color: rgba(255, 255, 255, 0.9);
}
.ra-hero .hero-breadcrumb .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.35);
  font-size: var(--font-size-xs);
}
.ra-hero .hero-breadcrumb .breadcrumb-current {
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(1.8);
  font-weight: 600;
}
.ra-hero .eyebrow-label {
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
.ra-hero .eyebrow-label .eyebrow-dot {
  width: 5px;
  height: 5px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.ra-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 3.75rem);
  line-height: 1.08;
  margin-bottom: var(--space-6);
  text-wrap: balance;
  max-width: 24ch;
}
.ra-hero h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.7);
}
.ra-hero .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 640px;
  margin-bottom: var(--space-8);
}
.ra-hero .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-10);
}
.ra-hero .hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  align-items: center;
}
.ra-hero .hero-trust-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.75);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.ra-hero .hero-trust-item i,
.ra-hero .hero-trust-item svg {
  width: 16px;
  height: 16px;
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(2);
}

/* ── Section Dividers ────────────────────────────────────────── */
.ra-divider-angle {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.ra-divider-angle--top { top: -1px; }
.ra-divider-angle--bottom { bottom: -1px; }
.ra-divider-angle svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 55px;
}
.ra-divider-wave {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.ra-divider-wave--top { top: -1px; }
.ra-divider-wave--bottom { bottom: -1px; }
.ra-divider-wave svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 70px;
}

/* ── Floating Accent Blob ────────────────────────────────────── */
.ra-floating-accent {
  position: absolute;
  width: 340px;
  height: 340px;
  border-radius: 50% 40% 55% 45% / 45% 55% 40% 60%;
  background: rgba(var(--color-accent-rgb), 0.025);
  pointer-events: none;
  z-index: 0;
  animation: ra-float 19s ease-in-out infinite;
}
@keyframes ra-float {
  0%, 100% { transform: translate(0, 0) rotate(0deg); }
  33% { transform: translate(16px, -12px) rotate(-3deg); }
  66% { transform: translate(-14px, 16px) rotate(2deg); }
}

/* ── 2. ANSWER BLOCK SECTION ─────────────────────────────────── */
.ra-answer-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.ra-answer-section .ra-floating-accent {
  bottom: -100px;
  left: -160px;
}
.ra-answer-layout {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1.5fr 1fr;
  gap: var(--space-12);
  align-items: start;
}
.ra-answer-layout .section-title {
  text-align: left;
}
.ra-answer-layout .section-title h2 {
  text-wrap: balance;
}
.ra-answer-layout .answer-block {
  background: rgba(var(--color-primary-rgb), 0.03);
  border-left: 4px solid rgba(var(--color-accent-rgb), 0.35);
  padding: var(--space-6);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin: var(--space-6) 0;
}
.ra-answer-layout .answer-block p {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-text);
  margin: 0;
}

/* ── Sidebar: Community Stats ────────────────────────────────── */
.ra-community-sidebar {
  position: sticky;
  top: calc(var(--space-20) + 80px);
}
.ra-community-card {
  background: var(--color-card-tint-2);
  border-radius: var(--radius-lg);
  padding: var(--space-8);
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.ra-community-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin: 0 0 var(--space-2);
  text-wrap: balance;
}
.ra-community-stat {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  padding: var(--space-3) 0;
  border-bottom: 1px solid rgba(0, 0, 0, 0.06);
}
.ra-community-stat:last-child {
  border-bottom: none;
}
.ra-community-stat__icon {
  width: 40px;
  height: 40px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.08);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  color: var(--color-accent);
}
.ra-community-stat__icon i,
.ra-community-stat__icon svg {
  width: 18px;
  height: 18px;
}
.ra-community-stat__text {
  font-size: var(--font-size-sm);
  line-height: 1.5;
  color: var(--color-text);
}
.ra-community-stat__text strong {
  display: block;
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
}

/* ── 3. LOCAL CONTENT — SPLIT SECTION ────────────────────────── */
.ra-local-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0 var(--space-20);
  overflow: hidden;
}
.ra-local-split {
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: var(--space-10);
  align-items: center;
  position: relative;
  z-index: 1;
}
.ra-local-image-wrap {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
}
.ra-local-image-wrap img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: var(--radius-lg);
}
.ra-local-image-wrap::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: var(--radius-lg);
  box-shadow: inset 0 0 0 1px rgba(var(--color-primary-rgb), 0.08);
  pointer-events: none;
}
.ra-local-badge {
  position: absolute;
  bottom: var(--space-4);
  left: var(--space-4);
  background: var(--color-primary);
  color: var(--color-white);
  padding: var(--space-2) var(--space-4);
  border-radius: var(--radius-md);
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 700;
  box-shadow: var(--shadow-md);
  z-index: 2;
}
.ra-local-content h2 {
  font-size: clamp(1.75rem, 3vw, 2.5rem);
  color: var(--color-primary);
  margin-bottom: var(--space-6);
  text-wrap: balance;
}
.ra-local-content .prose p {
  margin-bottom: var(--space-4);
}

/* ── 4. SIGNATURE: ROOF AGE ASSESSMENT SECTION ───────────────── */
/* Ralston's unique section — a visual roof age/condition guide
   specific to Ralston's 1950s-1970s housing stock */
.ra-age-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.ra-age-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
}
.ra-age-section .section-title h2 {
  text-wrap: balance;
}
.ra-age-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.ra-age-card {
  border-radius: var(--radius-lg);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.ra-age-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.ra-age-card__era {
  padding: var(--space-5) var(--space-6);
  display: flex;
  align-items: center;
  gap: var(--space-3);
}
.ra-age-card:nth-child(1) .ra-age-card__era {
  background: rgba(var(--color-primary-rgb), 0.1);
}
.ra-age-card:nth-child(2) .ra-age-card__era {
  background: rgba(var(--color-accent-rgb), 0.08);
}
.ra-age-card:nth-child(3) .ra-age-card__era {
  background: rgba(var(--color-secondary-rgb), 0.1);
}
.ra-age-card__era-icon {
  width: 44px;
  height: 44px;
  border-radius: var(--radius-full);
  background: var(--color-white);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  box-shadow: var(--shadow-sm);
  color: var(--color-primary);
}
.ra-age-card__era-icon i,
.ra-age-card__era-icon svg {
  width: 20px;
  height: 20px;
}
.ra-age-card__era-text h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0;
  line-height: 1.2;
}
.ra-age-card__era-text span {
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
}
.ra-age-card__body {
  padding: var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  flex: 1;
}
.ra-age-card__body p {
  font-size: var(--font-size-sm);
  color: var(--color-text);
  line-height: 1.6;
  margin: 0;
}
.ra-age-card__action {
  margin-top: auto;
  padding-top: var(--space-4);
  border-top: 1px solid rgba(0, 0, 0, 0.06);
  font-size: var(--font-size-sm);
  font-weight: 700;
  color: var(--color-accent);
  display: flex;
  align-items: center;
  gap: var(--space-2);
}
.ra-age-card__action i,
.ra-age-card__action svg {
  width: 16px;
  height: 16px;
}

/* ── 5. SERVICES SECTION ─────────────────────────────────────── */
.ra-services-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0 var(--space-20);
  overflow: hidden;
}
.ra-services-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.ra-services-section .section-title h2 {
  text-wrap: balance;
}
.ra-services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.ra-service-link {
  display: flex;
  align-items: center;
  gap: var(--space-4);
  padding: var(--space-5) var(--space-6);
  border-radius: var(--radius-lg);
  text-decoration: none;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.ra-service-link:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.ra-service-link__icon {
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
.ra-service-link__icon i,
.ra-service-link__icon svg {
  width: 22px;
  height: 22px;
}
.ra-service-link__text h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0 0 var(--space-1);
  line-height: 1.3;
}
.ra-service-link__text span {
  font-size: var(--font-size-xs);
  color: var(--color-accent);
  font-weight: 600;
}

/* ── 6. WHY CHOOSE SECTION ───────────────────────────────────── */
.ra-why-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.ra-why-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.ra-why-section .section-title h2 {
  text-wrap: balance;
}
.ra-why-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.ra-why-card {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: var(--space-4);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  position: relative;
}
.ra-why-card::after {
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
.ra-why-card:hover::after {
  width: 60%;
}
.ra-why-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.ra-why-card__icon {
  width: 56px;
  height: 56px;
  border-radius: var(--radius-full);
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.1);
  color: var(--color-accent);
}
.ra-why-card__icon i,
.ra-why-card__icon svg {
  width: 24px;
  height: 24px;
}
.ra-why-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0;
  line-height: 1.3;
}
.ra-why-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  margin: 0;
}

/* ── 7. CTA BANNER ───────────────────────────────────────────── */
.ra-cta-section {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  overflow: hidden;
  text-align: center;
}
.ra-cta-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(140deg, rgba(var(--color-accent-rgb), 0.16) 0%, transparent 50%);
  pointer-events: none;
}
.ra-cta-section::after {
  content: '';
  position: absolute;
  top: -60px;
  right: -60px;
  width: 180px;
  height: 180px;
  border-radius: var(--radius-full);
  border: 3px solid rgba(255, 255, 255, 0.05);
  pointer-events: none;
}
.ra-cta-section .container {
  position: relative;
  z-index: 1;
}
.ra-cta-section h2 {
  color: var(--color-white);
  font-size: clamp(1.75rem, 3.5vw, 2.75rem);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.ra-cta-section p {
  color: rgba(255, 255, 255, 0.85);
  font-size: var(--font-size-lg);
  max-width: 52ch;
  margin: 0 auto var(--space-8);
  line-height: 1.7;
}
.ra-cta-buttons {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── RESPONSIVE ──────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .ra-answer-layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .ra-community-sidebar {
    position: static;
  }
  .ra-local-split {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .ra-age-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .ra-services-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .ra-why-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 600px) {
  .ra-hero {
    min-height: 60vh;
    padding: var(--space-12) 0 var(--space-8);
  }
  .ra-age-grid {
    grid-template-columns: 1fr;
  }
  .ra-services-grid {
    grid-template-columns: 1fr;
  }
  .ra-why-grid {
    grid-template-columns: 1fr;
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══ HERO ═══════════════════════════════════════════════════ -->
<section class="ra-hero">
  <div class="container">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <a href="/areas/">Service Areas</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <span class="breadcrumb-current">Ralston</span>
    </nav>

    <div class="eyebrow-label">
      <span class="eyebrow-dot" aria-hidden="true"></span>
      Ralston, Nebraska
    </div>

    <h1>Roofing &amp; Gutter Repair in <span class="accent-word">Ralston, NE</span></h1>

    <p class="hero-answer">
      <?php echo htmlspecialchars($siteName); ?> is a licensed Nebraska roofing contractor providing roof
      replacement, gutter repair, and full roofing services in Ralston, NE. Our office is located just
      minutes from Ralston on Giles Road, and we have served this tight-knit community for over
      <?php echo $yearsInBusiness; ?> years. Free estimates for every Ralston property.
    </p>

    <div class="hero-ctas">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Ralston Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> <?php echo formatPhone($phone); ?>
      </a>
      <?php endif; ?>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="clock" aria-hidden="true"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      <span class="hero-trust-item"><i data-lucide="home" aria-hidden="true"></i> Ralston Neighbor</span>
    </div>
  </div>
</section>

<!-- ═══ ANSWER BLOCK ═══════════════════════════════════════════ -->
<section class="ra-answer-section">
  <div class="ra-divider-angle ra-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-primary)" points="0,0 1200,55 0,55"></polygon>
    </svg>
  </div>
  <div class="ra-floating-accent" aria-hidden="true"></div>

  <div class="container">
    <div class="ra-answer-layout">
      <div>
        <div class="section-title">
          <span class="eyebrow-label reveal-up">Ralston Roofing</span>
          <h2 class="reveal-up">What Roofing and Gutter Services Are Available <span class="text-accent">in Ralston?</span></h2>
        </div>

        <div class="answer-block reveal-up reveal-delay-1">
          <p>
            Crawford Roofing &amp; Gutters provides all 9 roofing and gutter services to Ralston
            homeowners: roof repair, roof replacement, new roof installation, roof inspection, gutter
            addition, gutter installation, gutter repair, gutter replacement, and gutter cleaning.
            Ralston residents searching for roofing near me in Ralston can schedule a same-day estimate
            and have our crew on-site within minutes from our Giles Road office.
          </p>
        </div>

        <div class="prose reveal-up reveal-delay-2">
          <p>
            Ralston is a small independent city completely surrounded by Omaha, home to about 7,500
            residents who take pride in their community's distinct identity. Despite its compact size,
            Ralston has a vibrant commercial corridor along L Street and a residential core that spans
            several decades of construction — from post-war bungalows to 1970s ranch homes.
          </p>
          <p>
            Most Ralston homes were built between the 1950s and 1970s. That means the original roofing
            is long gone, and many properties are now on their second or third roof system. At this stage,
            roof replacement is often more cost-effective than continued patching. Crawford Roofing evaluates
            each Ralston property individually, providing honest assessments about whether repair or full
            replacement makes more financial sense.
          </p>
        </div>
      </div>

      <aside class="ra-community-sidebar reveal-right reveal-delay-2">
        <div class="ra-community-card">
          <h3>Ralston at a Glance</h3>
          <div class="ra-community-stat">
            <div class="ra-community-stat__icon"><i data-lucide="users" aria-hidden="true"></i></div>
            <div class="ra-community-stat__text">
              <strong>~7,500</strong> Residents
            </div>
          </div>
          <div class="ra-community-stat">
            <div class="ra-community-stat__icon"><i data-lucide="home" aria-hidden="true"></i></div>
            <div class="ra-community-stat__text">
              <strong>1950s-1970s</strong> Peak construction era
            </div>
          </div>
          <div class="ra-community-stat">
            <div class="ra-community-stat__icon"><i data-lucide="building-2" aria-hidden="true"></i></div>
            <div class="ra-community-stat__text">
              <strong>Liberty First CU Arena</strong> Community landmark
            </div>
          </div>
          <div class="ra-community-stat">
            <div class="ra-community-stat__icon"><i data-lucide="map-pin" aria-hidden="true"></i></div>
            <div class="ra-community-stat__text">
              <strong>8 Minutes</strong> From our Giles Rd office
            </div>
          </div>
          <div class="ra-community-stat">
            <div class="ra-community-stat__icon"><i data-lucide="school" aria-hidden="true"></i></div>
            <div class="ra-community-stat__text">
              <strong>Ralston Public Schools</strong> Independent district
            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>

<!-- ═══ LOCAL CONTENT ═════════════════════════════════════════ -->
<section class="ra-local-section">
  <div class="ra-divider-wave ra-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70 C200,20 450,55 700,30 C950,5 1100,45 1200,20 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="ra-local-split">
      <div class="ra-local-image-wrap reveal-left">
        <img src="<?php echo $splitImg; ?>" alt="Roof replacement work on a 1960s-era Ralston, NE home" width="600" height="400" loading="lazy">
        <span class="ra-local-badge">Ralston, NE</span>
      </div>
      <div class="ra-local-content reveal-right">
        <h2>Why Ralston's Aging Homes Need <span class="text-accent">Roof Replacement</span> More Than Repair</h2>
        <div class="prose">
          <p>
            Ralston's residential character is defined by mid-century construction. Rows of well-maintained
            ranch-style homes with mature trees and established yards give the city its welcoming feel. But
            underneath those mature landscapes, the roofing infrastructure tells a different story. Homes
            built in the 1950s through 1970s have cycled through two or three roof systems, and the underlying
            decking and flashing often need attention that a simple shingle overlay cannot address.
          </p>
          <p>
            Crawford Roofing sees a consistent pattern in Ralston: homeowners call for a leak repair and we
            discover compromised decking, outdated flashing around plumbing vents, and insufficient attic
            ventilation that was standard decades ago but fails modern performance expectations. In these
            cases, targeted repair is a short-term fix at best. A full tear-off and replacement with modern
            underlayment, proper ice barrier at the eaves, and upgraded ventilation solves the root cause.
          </p>
          <p>
            Near the Liberty First Credit Union Arena (formerly Ralston Arena) and along the I-80 corridor,
            Ralston also has commercial properties with flat-roof systems that need periodic maintenance.
            The L Street commercial strip includes restaurants, retail, and service businesses that rely on
            leak-free roofing to protect their interiors and inventory.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SIGNATURE: ROOF AGE ASSESSMENT ═══════════════════════ -->
<section class="ra-age-section">
  <div class="ra-divider-angle ra-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-bg-alt)" points="1200,0 0,55 1200,55"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">Roof Age Guide</span>
      <h2 class="reveal-up">When Was Your Ralston Home <span class="text-accent">Built?</span></h2>
      <p class="section-subtitle reveal-up">Your home's construction era tells us what your roof likely needs today</p>
    </div>

    <div class="ra-age-grid">
      <div class="ra-age-card card-tint-1 reveal-up reveal-delay-1">
        <div class="ra-age-card__era">
          <div class="ra-age-card__era-icon"><i data-lucide="landmark" aria-hidden="true"></i></div>
          <div class="ra-age-card__era-text">
            <h3>1950s Ralston Homes</h3>
            <span>70+ years old</span>
          </div>
        </div>
        <div class="ra-age-card__body">
          <p>Post-war construction with original asphalt or wood shake roofing long since replaced. These Ralston homes are typically on their third roof. Key concerns include: original plywood decking deterioration, inadequate roof ventilation, outdated plumbing boot flashing, and narrow soffits that restrict airflow.</p>
          <div class="ra-age-card__action">
            <i data-lucide="arrow-right" aria-hidden="true"></i>
            Full replacement with decking inspection recommended
          </div>
        </div>
      </div>

      <div class="ra-age-card card-tint-2 reveal-up reveal-delay-2">
        <div class="ra-age-card__era">
          <div class="ra-age-card__era-icon"><i data-lucide="home" aria-hidden="true"></i></div>
          <div class="ra-age-card__era-text">
            <h3>1960s-1970s Ranches</h3>
            <span>50-65 years old</span>
          </div>
        </div>
        <div class="ra-age-card__body">
          <p>Ralston's most common housing type. Low-slope ranch roofs with wide overhangs are characteristic of this era. Many have had one re-roof over the original. Issues include: low-slope sections prone to ponding, T-lock shingle remnants that no longer meet code, and undersized gutters that overflow during heavy Nebraska rains.</p>
          <div class="ra-age-card__action">
            <i data-lucide="arrow-right" aria-hidden="true"></i>
            Tear-off recommended — overlay not advised at this age
          </div>
        </div>
      </div>

      <div class="ra-age-card card-tint-3 reveal-up reveal-delay-3">
        <div class="ra-age-card__era">
          <div class="ra-age-card__era-icon"><i data-lucide="building-2" aria-hidden="true"></i></div>
          <div class="ra-age-card__era-text">
            <h3>1980s-1990s Builds</h3>
            <span>30-45 years old</span>
          </div>
        </div>
        <div class="ra-age-card__body">
          <p>Fewer Ralston homes from this era, but those that exist used three-tab shingles with 20-year rated life. Most are past warranty and approaching or exceeding useful service life. Granule loss, curling, and cracked shingles are typical. Gutter systems from this era are often galvanized steel showing corrosion.</p>
          <div class="ra-age-card__action">
            <i data-lucide="arrow-right" aria-hidden="true"></i>
            Inspection determines repair vs. replacement timeline
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SERVICES AVAILABLE ═══════════════════════════════════ -->
<section class="ra-services-section">
  <div class="ra-divider-wave ra-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70 C300,25 500,55 750,30 C1000,5 1100,40 1200,25 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">What We Do</span>
      <h2 class="reveal-up">Every Roofing &amp; Gutter Service <span class="text-accent">for Ralston</span></h2>
      <p class="section-subtitle reveal-up">9 services available for Ralston residential and commercial properties</p>
    </div>

    <div class="ra-services-grid">
      <?php
      $raIcons = [
          'gutter-addition' => 'plus-circle',
          'gutter-cleaning' => 'sparkles',
          'gutter-installation' => 'ruler',
          'gutter-repair' => 'wrench',
          'gutter-replacement' => 'refresh-cw',
          'roof-inspection' => 'search',
          'roof-repair' => 'hammer',
          'roof-replacement' => 'home',
          'new-roof-installation' => 'hard-hat',
      ];
      $tints = ['card-tint-1', 'card-tint-2', 'card-tint-3'];
      $delays = ['reveal-delay-1', 'reveal-delay-2', 'reveal-delay-3'];
      foreach ($services as $i => $service):
          $icon = $raIcons[$service['slug']] ?? 'check-circle';
          $tint = $tints[$i % 3];
          $delay = $delays[$i % 3];
      ?>
      <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/" class="ra-service-link <?php echo $tint; ?> reveal-up <?php echo $delay; ?>">
        <div class="ra-service-link__icon"><i data-lucide="<?php echo $icon; ?>" aria-hidden="true"></i></div>
        <div class="ra-service-link__text">
          <h3><?php echo htmlspecialchars($service['name']); ?></h3>
          <span>Learn more &rarr;</span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ WHY CHOOSE CRAWFORD FOR RALSTON ═════════════════════ -->
<section class="ra-why-section">
  <div class="ra-divider-angle ra-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-bg-alt)" points="0,0 1200,55 0,55"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">Why Crawford</span>
      <h2 class="reveal-up">Why Ralston Homeowners <span class="text-accent">Trust Crawford</span></h2>
    </div>

    <div class="ra-why-grid">
      <div class="ra-why-card card-tint-1 reveal-up reveal-delay-1">
        <div class="ra-why-card__icon"><i data-lucide="map-pin" aria-hidden="true"></i></div>
        <h3>8 Minutes from Your Door</h3>
        <p>Our Giles Road office is practically in Ralston's backyard. No travel charges, no delays. When Ralston needs a roofer, we are already close.</p>
      </div>
      <div class="ra-why-card card-tint-2 reveal-up reveal-delay-2">
        <div class="ra-why-card__icon"><i data-lucide="search" aria-hidden="true"></i></div>
        <h3>Aging Roof Specialists</h3>
        <p>Ralston's 1950s-1970s housing stock needs contractors who understand older construction. We assess underlying decking, not just surface shingles.</p>
      </div>
      <div class="ra-why-card card-tint-3 reveal-up reveal-delay-3">
        <div class="ra-why-card__icon"><i data-lucide="heart" aria-hidden="true"></i></div>
        <h3>Small-Town Service</h3>
        <p>Ralston's tight-knit community deserves a contractor who treats every project like a neighbor's home. No upselling, no pressure — honest assessments only.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CTA BANNER ═══════════════════════════════════════════ -->
<section class="ra-cta-section">
  <div class="container">
    <h2 class="reveal-up">Ralston Roof Showing Its Age?</h2>
    <p class="reveal-up reveal-delay-1">
      Crawford Roofing &amp; Gutters provides free roof assessments for Ralston homeowners — no obligation,
      no pressure. Whether your 1960s ranch needs a full tear-off or your gutters need replacement, we
      give you an honest evaluation backed by <?php echo $yearsInBusiness; ?>+ years of experience.
    </p>
    <div class="ra-cta-buttons reveal-up reveal-delay-2">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Ralston Estimate</a>
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
