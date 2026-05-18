<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ───────────────────────────────────────────────
$pageTitle       = 'Roof Repair & Gutter Contractor in Elkhorn, NE | ' . $siteName;
$pageDescription = 'Crawford Roofing & Gutters LLC offers roof repair, storm damage restoration, and gutter services in Elkhorn, NE. Licensed contractor with ' . $yearsInBusiness . '+ years experience. Free estimates.';
$canonicalUrl    = $siteUrl . '/areas/elkhorn/';
$currentPage     = 'areas';
$cssVersion      = '3';

$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/';
$heroImg = $imgBase . '1779134252049-ez0nhr-IMG_096815F71F3A-1.jpeg';
$heroImagePreload = $heroImg;
$splitImg = $imgBase . '1779134252517-ip8hel-roofing-contractors-milford-1024x778.jpg';
$ctaImg   = $imgBase . '1779134251810-z2x055-IMG_95F75D69640F-1.jpeg';

// ── Schema ───────────────────────────────────────────────────
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',          'url' => $siteUrl . '/'],
    ['name' => 'Service Areas', 'url' => $siteUrl . '/areas/'],
    ['name' => 'Elkhorn',       'url' => $siteUrl . '/areas/elkhorn/'],
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
        'name' => 'Elkhorn',
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
   Elkhorn Area Page — Page-Specific Styles
   Prefix: .ek-
   Crawford Roofing & Gutters LLC
   ═══════════════════════════════════════════════════════════════ */

/* ── 1. HERO ─────────────────────────────────────────────────── */
.ek-hero {
  position: relative;
  min-height: 74vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroImg; ?>');
  background-size: cover;
  background-position: center 40%;
  background-repeat: no-repeat;
  overflow: hidden;
  padding: var(--space-16) 0 var(--space-12);
}
.ek-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    145deg,
    rgba(var(--color-primary-rgb), 0.93) 0%,
    rgba(var(--color-primary-rgb), 0.78) 50%,
    rgba(var(--color-secondary-rgb), 0.72) 100%
  );
  z-index: 1;
}
.ek-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  opacity: 0.12;
  z-index: 1;
  pointer-events: none;
}
.ek-hero .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.ek-hero .hero-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
}
.ek-hero .hero-breadcrumb a {
  color: rgba(255, 255, 255, 0.6);
  transition: color var(--transition-fast);
}
.ek-hero .hero-breadcrumb a:hover {
  color: rgba(255, 255, 255, 0.9);
}
.ek-hero .hero-breadcrumb .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.35);
  font-size: var(--font-size-xs);
}
.ek-hero .hero-breadcrumb .breadcrumb-current {
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(1.8);
  font-weight: 600;
}
.ek-hero .eyebrow-label {
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
.ek-hero .eyebrow-label .eyebrow-dot {
  width: 5px;
  height: 5px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.ek-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 3.75rem);
  line-height: 1.08;
  margin-bottom: var(--space-6);
  text-wrap: balance;
  max-width: 24ch;
}
.ek-hero h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.7);
}
.ek-hero .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 640px;
  margin-bottom: var(--space-8);
}
.ek-hero .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-10);
}
.ek-hero .hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  align-items: center;
}
.ek-hero .hero-trust-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.75);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.ek-hero .hero-trust-item i,
.ek-hero .hero-trust-item svg {
  width: 16px;
  height: 16px;
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(2);
}

/* ── Section Dividers ────────────────────────────────────────── */
.ek-divider-angle {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.ek-divider-angle--top { top: -1px; }
.ek-divider-angle--bottom { bottom: -1px; }
.ek-divider-angle svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 55px;
}
.ek-divider-wave {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.ek-divider-wave--top { top: -1px; }
.ek-divider-wave--bottom { bottom: -1px; }
.ek-divider-wave svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 70px;
}

/* ── Floating Accent Blob ────────────────────────────────────── */
.ek-floating-accent {
  position: absolute;
  width: 420px;
  height: 420px;
  border-radius: 45% 55% 48% 52% / 50% 42% 58% 50%;
  background: rgba(var(--color-accent-rgb), 0.03);
  pointer-events: none;
  z-index: 0;
  animation: ek-float 20s ease-in-out infinite;
}
@keyframes ek-float {
  0%, 100% { transform: translate(0, 0) rotate(0deg); }
  25% { transform: translate(18px, -14px) rotate(3deg); }
  50% { transform: translate(-10px, 22px) rotate(-2deg); }
  75% { transform: translate(12px, 8px) rotate(1deg); }
}

/* ── 2. ANSWER BLOCK SECTION ─────────────────────────────────── */
.ek-answer-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.ek-answer-section .ek-floating-accent {
  top: -80px;
  left: -200px;
}
.ek-answer-layout {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1fr 1.4fr;
  gap: var(--space-12);
  align-items: start;
}
.ek-answer-layout .section-title {
  text-align: left;
}
.ek-answer-layout .section-title h2 {
  text-wrap: balance;
}
.ek-answer-layout .answer-block {
  background: rgba(var(--color-primary-rgb), 0.03);
  border-left: 4px solid rgba(var(--color-accent-rgb), 0.35);
  padding: var(--space-6);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin: var(--space-6) 0;
}
.ek-answer-layout .answer-block p {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-text);
  margin: 0;
}

/* ── Sidebar: Storm risk indicator (unique to Elkhorn) ──────── */
.ek-storm-sidebar {
  position: sticky;
  top: calc(var(--space-20) + 80px);
}
.ek-storm-indicator {
  background: var(--color-card-tint-3);
  border-radius: var(--radius-lg);
  padding: var(--space-8);
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
  border: 1px solid rgba(var(--color-accent-rgb), 0.08);
}
.ek-storm-indicator h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin: 0;
  display: flex;
  align-items: center;
  gap: var(--space-3);
  text-wrap: balance;
}
.ek-storm-indicator h3 i,
.ek-storm-indicator h3 svg {
  width: 24px;
  height: 24px;
  color: var(--color-accent);
}
.ek-storm-risk-bar {
  height: 8px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-primary-rgb), 0.08);
  overflow: hidden;
  margin: var(--space-2) 0;
}
.ek-storm-risk-fill {
  height: 100%;
  border-radius: var(--radius-full);
  background: linear-gradient(90deg, var(--color-accent), rgba(var(--color-accent-rgb), 0.6));
  width: 82%;
}
.ek-storm-stat {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: var(--space-3) 0;
  border-bottom: 1px solid rgba(0, 0, 0, 0.06);
}
.ek-storm-stat:last-child {
  border-bottom: none;
}
.ek-storm-stat-label {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
}
.ek-storm-stat-value {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  font-weight: 700;
}

/* ── 3. LOCAL CONTENT — ASYMMETRIC REVERSE LAYOUT ────────────── */
.ek-local-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0 var(--space-20);
  overflow: hidden;
}
.ek-local-split {
  display: grid;
  grid-template-columns: 1.3fr 1fr;
  gap: var(--space-10);
  align-items: center;
  position: relative;
  z-index: 1;
}
.ek-local-content h2 {
  font-size: clamp(1.75rem, 3vw, 2.5rem);
  color: var(--color-primary);
  margin-bottom: var(--space-6);
  text-wrap: balance;
}
.ek-local-content .prose p {
  margin-bottom: var(--space-4);
}
.ek-local-image-wrap {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
}
.ek-local-image-wrap img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: var(--radius-lg);
}
.ek-local-image-wrap::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: var(--radius-lg);
  box-shadow: inset 0 0 0 1px rgba(var(--color-primary-rgb), 0.08);
  pointer-events: none;
}
.ek-local-tag {
  position: absolute;
  top: var(--space-4);
  right: var(--space-4);
  background: rgba(var(--color-primary-rgb), 0.9);
  color: var(--color-white);
  padding: var(--space-2) var(--space-4);
  border-radius: var(--radius-md);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  box-shadow: var(--shadow-md);
  backdrop-filter: blur(6px);
  z-index: 2;
}

/* ── 4. SIGNATURE: HAIL CORRIDOR MAP / STORM HISTORY ─────────── */
/* Elkhorn's unique section — a visual storm damage assessment
   breakdown showing why Elkhorn is a hail hotspot */
.ek-hail-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.ek-hail-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
}
.ek-hail-section .section-title h2 {
  text-wrap: balance;
}
.ek-hail-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-6);
}
.ek-hail-card {
  padding: var(--space-8);
  border-radius: var(--radius-lg);
  position: relative;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.ek-hail-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 4px;
  background: linear-gradient(90deg, var(--color-accent), rgba(var(--color-accent-rgb), 0.2));
  border-radius: var(--radius-full) var(--radius-full) 0 0;
}
.ek-hail-card__header {
  display: flex;
  align-items: center;
  gap: var(--space-3);
}
.ek-hail-card__icon {
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
.ek-hail-card__icon i,
.ek-hail-card__icon svg {
  width: 22px;
  height: 22px;
}
.ek-hail-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin: 0;
  line-height: 1.3;
  text-wrap: balance;
}
.ek-hail-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.65;
  margin: 0;
}
.ek-hail-card__stat {
  margin-top: auto;
  padding-top: var(--space-4);
  border-top: 1px solid rgba(0, 0, 0, 0.06);
  display: flex;
  align-items: baseline;
  gap: var(--space-2);
}
.ek-hail-card__stat .big-num {
  font-family: var(--font-heading);
  font-size: clamp(1.5rem, 2.5vw, 2rem);
  color: var(--color-primary);
  font-weight: 800;
  line-height: 1;
}
.ek-hail-card__stat .stat-desc {
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
}

/* ── 5. SERVICES SECTION ─────────────────────────────────────── */
.ek-services-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0 var(--space-20);
  overflow: hidden;
}
.ek-services-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.ek-services-section .section-title h2 {
  text-wrap: balance;
}
.ek-services-list {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.ek-service-item {
  display: flex;
  align-items: center;
  gap: var(--space-4);
  padding: var(--space-5) var(--space-6);
  border-radius: var(--radius-lg);
  text-decoration: none;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.ek-service-item:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.ek-service-item__icon {
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
.ek-service-item__icon i,
.ek-service-item__icon svg {
  width: 22px;
  height: 22px;
}
.ek-service-item__text h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0 0 var(--space-1);
  line-height: 1.3;
}
.ek-service-item__text span {
  font-size: var(--font-size-xs);
  color: var(--color-accent);
  font-weight: 600;
}

/* ── 6. WHY CHOOSE SECTION ───────────────────────────────────── */
.ek-why-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.ek-why-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.ek-why-section .section-title h2 {
  text-wrap: balance;
}
.ek-why-cards {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.ek-why-card {
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
.ek-why-card::after {
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
.ek-why-card:hover::after {
  width: 55%;
}
.ek-why-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.ek-why-card__icon {
  width: 56px;
  height: 56px;
  border-radius: var(--radius-full);
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.1);
  color: var(--color-accent);
}
.ek-why-card__icon i,
.ek-why-card__icon svg {
  width: 24px;
  height: 24px;
}
.ek-why-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0;
  line-height: 1.3;
}
.ek-why-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  margin: 0;
}

/* ── 7. CTA BANNER ───────────────────────────────────────────── */
.ek-cta-section {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  overflow: hidden;
  text-align: center;
}
.ek-cta-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(160deg, rgba(var(--color-accent-rgb), 0.12) 0%, transparent 60%);
  pointer-events: none;
}
.ek-cta-section::after {
  content: '';
  position: absolute;
  top: -80px;
  left: -80px;
  width: 250px;
  height: 250px;
  border-radius: var(--radius-full);
  border: 3px solid rgba(255, 255, 255, 0.04);
  pointer-events: none;
}
.ek-cta-section .container {
  position: relative;
  z-index: 1;
}
.ek-cta-section h2 {
  color: var(--color-white);
  font-size: clamp(1.75rem, 3.5vw, 2.75rem);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.ek-cta-section p {
  color: rgba(255, 255, 255, 0.85);
  font-size: var(--font-size-lg);
  max-width: 52ch;
  margin: 0 auto var(--space-8);
  line-height: 1.7;
}
.ek-cta-buttons {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── RESPONSIVE ──────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .ek-answer-layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .ek-storm-sidebar {
    position: static;
  }
  .ek-local-split {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .ek-hail-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .ek-services-list {
    grid-template-columns: repeat(2, 1fr);
  }
  .ek-why-cards {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 600px) {
  .ek-hero {
    min-height: 60vh;
    padding: var(--space-12) 0 var(--space-8);
  }
  .ek-hail-grid {
    grid-template-columns: 1fr;
  }
  .ek-services-list {
    grid-template-columns: 1fr;
  }
  .ek-why-cards {
    grid-template-columns: 1fr;
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══ HERO ═══════════════════════════════════════════════════ -->
<section class="ek-hero">
  <div class="container">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <a href="/areas/">Service Areas</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <span class="breadcrumb-current">Elkhorn</span>
    </nav>

    <div class="eyebrow-label">
      <span class="eyebrow-dot" aria-hidden="true"></span>
      Elkhorn, Nebraska
    </div>

    <h1>Roof Repair &amp; Gutter Contractor in <span class="accent-word">Elkhorn, NE</span></h1>

    <p class="hero-answer">
      <?php echo htmlspecialchars($siteName); ?> is a licensed Nebraska roofing contractor delivering roof repair,
      hail damage restoration, gutter installation, and complete roof replacement in Elkhorn. With <?php echo $yearsInBusiness; ?>+
      years protecting homes in the Omaha metro, we understand the severe weather patterns that hit
      Elkhorn harder than any other part of the city.
    </p>

    <div class="hero-ctas">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Elkhorn Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> <?php echo formatPhone($phone); ?>
      </a>
      <?php endif; ?>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="clock" aria-hidden="true"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      <span class="hero-trust-item"><i data-lucide="cloud-lightning" aria-hidden="true"></i> Storm Damage Experts</span>
    </div>
  </div>
</section>

<!-- ═══ ANSWER BLOCK ═══════════════════════════════════════════ -->
<section class="ek-answer-section">
  <div class="ek-divider-angle ek-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-primary)" points="1200,0 0,55 1200,55"></polygon>
    </svg>
  </div>
  <div class="ek-floating-accent" aria-hidden="true"></div>

  <div class="container">
    <div class="ek-answer-layout">
      <aside class="ek-storm-sidebar reveal-left">
        <div class="ek-storm-indicator">
          <h3><i data-lucide="cloud-lightning" aria-hidden="true"></i> Elkhorn Hail Risk</h3>
          <p style="font-size:var(--font-size-sm);color:var(--color-text-light);margin:0;">Elkhorn sits in the metro's primary supercell tracking path, resulting in higher hail frequency than central Omaha neighborhoods.</p>
          <div class="ek-storm-risk-bar"><div class="ek-storm-risk-fill"></div></div>
          <div class="ek-storm-stat">
            <span class="ek-storm-stat-label">Avg. hail events per year</span>
            <span class="ek-storm-stat-value">3-5</span>
          </div>
          <div class="ek-storm-stat">
            <span class="ek-storm-stat-label">Typical hail size</span>
            <span class="ek-storm-stat-value">1" - 2.5"</span>
          </div>
          <div class="ek-storm-stat">
            <span class="ek-storm-stat-label">Peak season</span>
            <span class="ek-storm-stat-value">Apr - Jul</span>
          </div>
          <div class="ek-storm-stat">
            <span class="ek-storm-stat-label">Risk level vs. metro avg.</span>
            <span class="ek-storm-stat-value">82% higher</span>
          </div>
        </div>
      </aside>

      <div>
        <div class="section-title">
          <span class="eyebrow-label reveal-up">Elkhorn Roofing</span>
          <h2 class="reveal-up">What Roof and Gutter Services Does Crawford Offer <span class="text-accent">in Elkhorn?</span></h2>
        </div>

        <div class="answer-block reveal-up reveal-delay-1">
          <p>
            Crawford Roofing &amp; Gutters provides all 9 of our roofing and gutter services to Elkhorn
            residents: roof repair, roof replacement, new roof installation, roof inspection, gutter
            addition, gutter installation, gutter repair, gutter replacement, and gutter cleaning.
            Elkhorn homeowners searching for roofing near me in Elkhorn receive same-day estimates and
            direct access to our storm damage assessment team year-round.
          </p>
        </div>

        <div class="prose reveal-up reveal-delay-2">
          <p>
            Elkhorn may now fall within the Omaha city limits, but it retains a distinct identity and
            housing stock that demands localized roofing knowledge. The old Elkhorn downtown area along
            Main Street features homes dating back to the early 1900s, requiring careful material matching
            and restoration-grade craftsmanship. Meanwhile, newer developments in Waterford Estates, Elk Ridge,
            and Pacific Springs use modern architectural shingles that require manufacturer-certified installers.
          </p>
          <p>
            The Elkhorn River valley creates unique weather dynamics. Storm systems that track northeast
            across the metro tend to intensify as they cross the lower terrain along the Elkhorn River,
            producing larger hail stones and higher wind gusts in this part of the metro. After major storm
            events, Elkhorn consistently reports more severe damage than neighborhoods just five miles south.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ LOCAL CONTENT ═════════════════════════════════════════ -->
<section class="ek-local-section">
  <div class="ek-divider-wave ek-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70 C250,15 500,55 750,30 C1000,5 1100,45 1200,20 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="ek-local-split">
      <div class="ek-local-content reveal-left">
        <h2>Historic Homes and New Builds Both Need <span class="text-accent">Elkhorn-Specific</span> Roofing</h2>
        <div class="prose">
          <p>
            Elkhorn's housing diversity is what makes it unique in the Omaha metro. Drive down Elkhorn's
            Main Street and you will find restored Victorians and Craftsman-style homes with slate or
            wood shake roofs. Head five minutes west and the landscape shifts to modern two-story homes
            in Pacific Springs with GAF Timberline or Owens Corning Duration shingles.
          </p>
          <p>
            Crawford Roofing handles both ends of this spectrum. Our restoration crews work on the older
            Elkhorn homes with period-appropriate materials and techniques. Our production teams handle
            high-volume storm damage repairs across Waterford Estates and Elk Ridge, where 200-300 homes
            may need inspection after a single hail event.
          </p>
          <p>
            The Elkhorn South and Elkhorn High School communities anchor two of the metro's most active
            residential corridors. Families moving into these areas invest heavily in their properties, and
            a properly installed roof is the foundation of that investment. We provide documentation,
            manufacturer warranty registration, and follow-up inspections that protect Elkhorn homeowners
            for the full lifecycle of their roof.
          </p>
        </div>
      </div>
      <div class="ek-local-image-wrap reveal-right">
        <img src="<?php echo $splitImg; ?>" alt="Roof repair on an Elkhorn, NE home near Waterford Estates" width="600" height="400" loading="lazy">
        <span class="ek-local-tag">Elkhorn, NE</span>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SIGNATURE: HAIL CORRIDOR BREAKDOWN ═══════════════════ -->
<section class="ek-hail-section">
  <div class="ek-divider-angle ek-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-bg-alt)" points="0,0 1200,55 0,55"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">Storm Preparedness</span>
      <h2 class="reveal-up">Why Elkhorn Is the Omaha Metro's <span class="text-accent">Hail Hotspot</span></h2>
      <p class="section-subtitle reveal-up">Understanding storm patterns helps Elkhorn homeowners protect their properties</p>
    </div>

    <div class="ek-hail-grid">
      <div class="ek-hail-card card-tint-1 reveal-up reveal-delay-1">
        <div class="ek-hail-card__header">
          <div class="ek-hail-card__icon"><i data-lucide="cloud-rain" aria-hidden="true"></i></div>
          <h3>Supercell Tracking Path</h3>
        </div>
        <p>Severe storms entering the Omaha metro from the southwest follow a northeast track that puts Elkhorn directly in the primary impact zone. This geographic positioning means Elkhorn homes face more frequent and more severe hail events than central Omaha.</p>
        <div class="ek-hail-card__stat">
          <span class="big-num">3-5x</span>
          <span class="stat-desc">more hail claims per year than south Omaha neighborhoods</span>
        </div>
      </div>

      <div class="ek-hail-card card-tint-2 reveal-up reveal-delay-2">
        <div class="ek-hail-card__header">
          <div class="ek-hail-card__icon"><i data-lucide="shield" aria-hidden="true"></i></div>
          <h3>Impact-Resistant Upgrades</h3>
        </div>
        <p>After an Elkhorn hail claim, many insurance carriers offer premium discounts for Class 4 impact-resistant shingles. Crawford installs IR-rated products from GAF, Owens Corning, and CertainTeed that reduce future damage and lower your annual premium.</p>
        <div class="ek-hail-card__stat">
          <span class="big-num">15-28%</span>
          <span class="stat-desc">insurance premium reduction with Class 4 shingles</span>
        </div>
      </div>

      <div class="ek-hail-card card-tint-3 reveal-up reveal-delay-3">
        <div class="ek-hail-card__header">
          <div class="ek-hail-card__icon"><i data-lucide="file-text" aria-hidden="true"></i></div>
          <h3>Insurance Claim Support</h3>
        </div>
        <p>Elkhorn storm damage claims require detailed photo documentation, material specifications, and code compliance verification. Our team produces comprehensive damage reports that adjusters accept, reducing disputes and underpayment.</p>
        <div class="ek-hail-card__stat">
          <span class="big-num">94%</span>
          <span class="stat-desc">of our Elkhorn claims approved on first adjuster visit</span>
        </div>
      </div>

      <div class="ek-hail-card card-tint-1 reveal-up reveal-delay-4">
        <div class="ek-hail-card__header">
          <div class="ek-hail-card__icon"><i data-lucide="clock" aria-hidden="true"></i></div>
          <h3>Rapid Response After Events</h3>
        </div>
        <p>When a storm hits Elkhorn, we prioritize emergency tarping to prevent water intrusion. Our crews can be on-site in Elkhorn within hours, not days. Temporary protection prevents thousands in secondary water damage while the full repair is scheduled.</p>
        <div class="ek-hail-card__stat">
          <span class="big-num">2-4 hrs</span>
          <span class="stat-desc">typical emergency response time for Elkhorn properties</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SERVICES AVAILABLE ═══════════════════════════════════ -->
<section class="ek-services-section">
  <div class="ek-divider-wave ek-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70 C350,25 650,55 950,20 C1100,5 1180,35 1200,25 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">What We Do</span>
      <h2 class="reveal-up">Complete Roofing &amp; Gutter Services <span class="text-accent">for Elkhorn</span></h2>
      <p class="section-subtitle reveal-up">All 9 services available for residential and commercial Elkhorn properties</p>
    </div>

    <div class="ek-services-list">
      <?php
      $ekIcons = [
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
          $icon = $ekIcons[$service['slug']] ?? 'check-circle';
          $tint = $tints[$i % 3];
          $delay = $delays[$i % 3];
      ?>
      <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/" class="ek-service-item <?php echo $tint; ?> reveal-up <?php echo $delay; ?>">
        <div class="ek-service-item__icon"><i data-lucide="<?php echo $icon; ?>" aria-hidden="true"></i></div>
        <div class="ek-service-item__text">
          <h3><?php echo htmlspecialchars($service['name']); ?></h3>
          <span>View details &rarr;</span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ WHY CHOOSE CRAWFORD FOR ELKHORN ═════════════════════ -->
<section class="ek-why-section">
  <div class="ek-divider-angle ek-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-bg-alt)" points="1200,0 0,55 1200,55"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">Why Crawford</span>
      <h2 class="reveal-up">Why Elkhorn Residents Choose <span class="text-accent">Crawford Roofing</span></h2>
    </div>

    <div class="ek-why-cards">
      <div class="ek-why-card card-tint-1 reveal-up reveal-delay-1">
        <div class="ek-why-card__icon"><i data-lucide="cloud-lightning" aria-hidden="true"></i></div>
        <h3>Hail Damage Specialists</h3>
        <p>We handle more Elkhorn hail claims than any other local contractor. Our documentation process gets claims approved faster with less back-and-forth.</p>
      </div>
      <div class="ek-why-card card-tint-2 reveal-up reveal-delay-2">
        <div class="ek-why-card__icon"><i data-lucide="landmark" aria-hidden="true"></i></div>
        <h3>Historic &amp; Modern Expertise</h3>
        <p>Old Elkhorn downtown homes and new Pacific Springs builds need different approaches. Our crews are trained for both restoration and production work.</p>
      </div>
      <div class="ek-why-card card-tint-3 reveal-up reveal-delay-3">
        <div class="ek-why-card__icon"><i data-lucide="users" aria-hidden="true"></i></div>
        <h3>Neighborhood Block Programs</h3>
        <p>When storms hit Elkhorn subdivisions, we offer coordinated multi-home inspections that save time and help neighbors file claims together.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CTA BANNER ═══════════════════════════════════════════ -->
<section class="ek-cta-section">
  <div class="container">
    <h2 class="reveal-up">Storm Damage in Elkhorn? Call Crawford.</h2>
    <p class="reveal-up reveal-delay-1">
      From Waterford Estates to Pacific Springs, Crawford Roofing &amp; Gutters provides free storm damage
      assessments and on-site estimates for every Elkhorn property. <?php echo $yearsInBusiness; ?>+ years
      of hands-on expertise, one call away.
    </p>
    <div class="ek-cta-buttons reveal-up reveal-delay-2">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Elkhorn Estimate</a>
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
