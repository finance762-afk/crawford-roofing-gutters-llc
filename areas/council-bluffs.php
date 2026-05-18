<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ───────────────────────────────────────────────
$pageTitle       = 'Roofing & Gutter Services in Council Bluffs, Iowa | ' . $siteName;
$pageDescription = 'Crawford Roofing & Gutters LLC serves Council Bluffs, IA with roof repair, replacement, and gutter services. Licensed in Nebraska and Iowa. ' . $yearsInBusiness . '+ years experience.';
$canonicalUrl    = $siteUrl . '/areas/council-bluffs/';
$currentPage     = 'areas';
$cssVersion      = '3';

$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/';
$heroImg = $imgBase . '1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg';
$heroImagePreload = $heroImg;
$splitImg = $imgBase . '1779134251810-z2x055-IMG_95F75D69640F-1.jpeg';
$ctaImg   = $imgBase . '1779134252517-ip8hel-roofing-contractors-milford-1024x778.jpg';

// ── Schema ───────────────────────────────────────────────────
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',           'url' => $siteUrl . '/'],
    ['name' => 'Service Areas',  'url' => $siteUrl . '/areas/'],
    ['name' => 'Council Bluffs', 'url' => $siteUrl . '/areas/council-bluffs/'],
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
        'name' => 'Council Bluffs',
        'addressRegion' => 'IA',
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
   Council Bluffs Area Page — Page-Specific Styles
   Prefix: .cb-
   Crawford Roofing & Gutters LLC
   ═══════════════════════════════════════════════════════════════ */

/* ── 1. HERO ─────────────────────────────────────────────────── */
.cb-hero {
  position: relative;
  min-height: 74vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroImg; ?>');
  background-size: cover;
  background-position: center 35%;
  background-repeat: no-repeat;
  overflow: hidden;
  padding: var(--space-16) 0 var(--space-12);
}
.cb-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    150deg,
    rgba(var(--color-primary-rgb), 0.95) 0%,
    rgba(var(--color-primary-rgb), 0.82) 40%,
    rgba(var(--color-secondary-rgb), 0.65) 100%
  );
  z-index: 1;
}
.cb-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  opacity: 0.13;
  z-index: 1;
  pointer-events: none;
}
.cb-hero .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.cb-hero .hero-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
}
.cb-hero .hero-breadcrumb a {
  color: rgba(255, 255, 255, 0.6);
  transition: color var(--transition-fast);
}
.cb-hero .hero-breadcrumb a:hover {
  color: rgba(255, 255, 255, 0.9);
}
.cb-hero .hero-breadcrumb .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.35);
  font-size: var(--font-size-xs);
}
.cb-hero .hero-breadcrumb .breadcrumb-current {
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(1.8);
  font-weight: 600;
}
.cb-hero .eyebrow-label {
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
.cb-hero .eyebrow-label .eyebrow-dot {
  width: 5px;
  height: 5px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.cb-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.1rem, 4.5vw, 3.5rem);
  line-height: 1.1;
  margin-bottom: var(--space-6);
  text-wrap: balance;
  max-width: 26ch;
}
.cb-hero h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.7);
}
.cb-hero .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 660px;
  margin-bottom: var(--space-8);
}
.cb-hero .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-10);
}
.cb-hero .hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  align-items: center;
}
.cb-hero .hero-trust-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.75);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.cb-hero .hero-trust-item i,
.cb-hero .hero-trust-item svg {
  width: 16px;
  height: 16px;
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(2);
}
/* ── Two-State Badge (Hero accent) ──────────────────────────── */
.cb-two-state-badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(255, 255, 255, 0.15);
  border-radius: var(--radius-md);
  padding: var(--space-2) var(--space-4);
  margin-bottom: var(--space-4);
  font-size: var(--font-size-sm);
  color: var(--color-white);
  font-weight: 600;
}
.cb-two-state-badge i,
.cb-two-state-badge svg {
  width: 16px;
  height: 16px;
  color: rgba(var(--color-accent-rgb), 0.9);
  filter: brightness(1.8);
}

/* ── Section Dividers ────────────────────────────────────────── */
.cb-divider-angle {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.cb-divider-angle--top { top: -1px; }
.cb-divider-angle--bottom { bottom: -1px; }
.cb-divider-angle svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 55px;
}
.cb-divider-wave {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.cb-divider-wave--top { top: -1px; }
.cb-divider-wave--bottom { bottom: -1px; }
.cb-divider-wave svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 70px;
}

/* ── Floating Accent Blob ────────────────────────────────────── */
.cb-floating-accent {
  position: absolute;
  width: 360px;
  height: 360px;
  border-radius: 42% 58% 50% 50% / 48% 44% 56% 52%;
  background: rgba(var(--color-accent-rgb), 0.025);
  pointer-events: none;
  z-index: 0;
  animation: cb-float 22s ease-in-out infinite;
}
@keyframes cb-float {
  0%, 100% { transform: translate(0, 0) rotate(0deg); }
  33% { transform: translate(-20px, 15px) rotate(2deg); }
  66% { transform: translate(15px, -18px) rotate(-4deg); }
}

/* ── 2. ANSWER BLOCK SECTION ─────────────────────────────────── */
.cb-answer-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.cb-answer-section .cb-floating-accent {
  top: -120px;
  right: -140px;
}
.cb-answer-content {
  position: relative;
  z-index: 1;
  max-width: 820px;
  margin: 0 auto;
}
.cb-answer-content .section-title {
  text-align: center;
}
.cb-answer-content .section-title h2 {
  text-wrap: balance;
}
.cb-answer-content .answer-block {
  background: rgba(var(--color-primary-rgb), 0.03);
  border-left: 4px solid rgba(var(--color-accent-rgb), 0.35);
  padding: var(--space-6);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin: var(--space-6) 0;
}
.cb-answer-content .answer-block p {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-text);
  margin: 0;
}

/* ── 3. SIGNATURE SECTION: TWO-STATE COMPARISON ──────────────── */
/* Council Bluffs unique — side-by-side NE vs IA building code
   comparison showing what differs across the river */
.cb-comparison-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0 var(--space-20);
  overflow: hidden;
}
.cb-comparison-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
}
.cb-comparison-section .section-title h2 {
  text-wrap: balance;
}
.cb-comparison-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-8);
  max-width: 920px;
  margin: 0 auto;
}
.cb-code-card {
  border-radius: var(--radius-lg);
  overflow: hidden;
  display: flex;
  flex-direction: column;
}
.cb-code-card__header {
  padding: var(--space-6);
  text-align: center;
}
.cb-code-card--ne .cb-code-card__header {
  background: rgba(var(--color-primary-rgb), 0.08);
}
.cb-code-card--ia .cb-code-card__header {
  background: rgba(var(--color-accent-rgb), 0.08);
}
.cb-code-card__header h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  color: var(--color-primary);
  margin: 0 0 var(--space-1);
  text-wrap: balance;
}
.cb-code-card__header span {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
}
.cb-code-card__body {
  padding: var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
  flex: 1;
}
.cb-code-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  padding-bottom: var(--space-3);
  border-bottom: 1px solid rgba(0, 0, 0, 0.06);
}
.cb-code-item:last-child {
  border-bottom: none;
  padding-bottom: 0;
}
.cb-code-item i,
.cb-code-item svg {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: var(--space-1);
}
.cb-code-item__text {
  font-size: var(--font-size-sm);
  line-height: 1.55;
  color: var(--color-text);
}
.cb-code-item__text strong {
  display: block;
  color: var(--color-primary);
  margin-bottom: var(--space-1);
}
.cb-divider-vs {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: var(--space-2) 0;
}
.cb-vs-badge {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-full);
  background: var(--color-primary);
  color: var(--color-white);
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 800;
  box-shadow: var(--shadow-lg);
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
}
.cb-comparison-wrapper {
  position: relative;
}

/* ── 4. LOCAL CONTENT — SPLIT REVERSE ────────────────────────── */
.cb-local-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.cb-local-split {
  display: grid;
  grid-template-columns: 1.2fr 1fr;
  gap: var(--space-10);
  align-items: center;
  position: relative;
  z-index: 1;
}
.cb-local-content h2 {
  font-size: clamp(1.75rem, 3vw, 2.5rem);
  color: var(--color-primary);
  margin-bottom: var(--space-6);
  text-wrap: balance;
}
.cb-local-content .prose p {
  margin-bottom: var(--space-4);
}
.cb-local-image-wrap {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
}
.cb-local-image-wrap img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: var(--radius-lg);
}
.cb-local-image-wrap::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: var(--radius-lg);
  box-shadow: inset 0 0 0 1px rgba(var(--color-primary-rgb), 0.08);
  pointer-events: none;
}
.cb-local-tag {
  position: absolute;
  bottom: var(--space-4);
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

/* ── 5. SERVICES SECTION ─────────────────────────────────────── */
.cb-services-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0 var(--space-20);
  overflow: hidden;
}
.cb-services-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.cb-services-section .section-title h2 {
  text-wrap: balance;
}
.cb-services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.cb-service-link {
  display: flex;
  align-items: center;
  gap: var(--space-4);
  padding: var(--space-5) var(--space-6);
  border-radius: var(--radius-lg);
  text-decoration: none;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.cb-service-link:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.cb-service-link__icon {
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
.cb-service-link__icon i,
.cb-service-link__icon svg {
  width: 22px;
  height: 22px;
}
.cb-service-link__text h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0 0 var(--space-1);
  line-height: 1.3;
}
.cb-service-link__text span {
  font-size: var(--font-size-xs);
  color: var(--color-accent);
  font-weight: 600;
}

/* ── 6. WHY CHOOSE SECTION ───────────────────────────────────── */
.cb-why-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.cb-why-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.cb-why-section .section-title h2 {
  text-wrap: balance;
}
.cb-why-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.cb-why-card {
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
.cb-why-card::after {
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
.cb-why-card:hover::after {
  width: 55%;
}
.cb-why-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.cb-why-card__icon {
  width: 56px;
  height: 56px;
  border-radius: var(--radius-full);
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.1);
  color: var(--color-accent);
}
.cb-why-card__icon i,
.cb-why-card__icon svg {
  width: 24px;
  height: 24px;
}
.cb-why-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0;
  line-height: 1.3;
}
.cb-why-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  margin: 0;
}

/* ── 7. CTA BANNER ───────────────────────────────────────────── */
.cb-cta-section {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  overflow: hidden;
  text-align: center;
}
.cb-cta-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(var(--color-accent-rgb), 0.14) 0%, transparent 50%);
  pointer-events: none;
}
.cb-cta-section::after {
  content: '';
  position: absolute;
  bottom: -60px;
  left: -60px;
  width: 200px;
  height: 200px;
  border-radius: var(--radius-full);
  border: 3px solid rgba(255, 255, 255, 0.05);
  pointer-events: none;
}
.cb-cta-section .container {
  position: relative;
  z-index: 1;
}
.cb-cta-section h2 {
  color: var(--color-white);
  font-size: clamp(1.75rem, 3.5vw, 2.75rem);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.cb-cta-section p {
  color: rgba(255, 255, 255, 0.85);
  font-size: var(--font-size-lg);
  max-width: 52ch;
  margin: 0 auto var(--space-8);
  line-height: 1.7;
}
.cb-cta-buttons {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── RESPONSIVE ──────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .cb-comparison-grid {
    grid-template-columns: 1fr;
    gap: var(--space-6);
  }
  .cb-vs-badge {
    display: none;
  }
  .cb-local-split {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .cb-services-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .cb-why-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 600px) {
  .cb-hero {
    min-height: 60vh;
    padding: var(--space-12) 0 var(--space-8);
  }
  .cb-services-grid {
    grid-template-columns: 1fr;
  }
  .cb-why-grid {
    grid-template-columns: 1fr;
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══ HERO ═══════════════════════════════════════════════════ -->
<section class="cb-hero">
  <div class="container">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <a href="/areas/">Service Areas</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <span class="breadcrumb-current">Council Bluffs</span>
    </nav>

    <div class="cb-two-state-badge">
      <i data-lucide="shield-check" aria-hidden="true"></i>
      Licensed in Nebraska &amp; Iowa
    </div>

    <div class="eyebrow-label">
      <span class="eyebrow-dot" aria-hidden="true"></span>
      Council Bluffs, Iowa
    </div>

    <h1>Roofing &amp; Gutter Services in <span class="accent-word">Council Bluffs, Iowa</span></h1>

    <p class="hero-answer">
      <?php echo htmlspecialchars($siteName); ?> is a licensed roofing contractor serving Council Bluffs, IA
      from our base in Omaha, NE — just across the Missouri River. We carry both Nebraska and Iowa contractor
      licenses, so Council Bluffs homeowners get Omaha-trained craftsmanship with full Iowa code compliance.
      <?php echo $yearsInBusiness; ?>+ years of experience, free estimates, same-day emergency response.
    </p>

    <div class="hero-ctas">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Council Bluffs Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> <?php echo formatPhone($phone); ?>
      </a>
      <?php endif; ?>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check" aria-hidden="true"></i> NE &amp; IA Licensed</span>
      <span class="hero-trust-item"><i data-lucide="clock" aria-hidden="true"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      <span class="hero-trust-item"><i data-lucide="star" aria-hidden="true"></i> 4.9 Rating</span>
    </div>
  </div>
</section>

<!-- ═══ ANSWER BLOCK ═══════════════════════════════════════════ -->
<section class="cb-answer-section">
  <div class="cb-divider-angle cb-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-primary)" points="1200,0 0,55 1200,55"></polygon>
    </svg>
  </div>
  <div class="cb-floating-accent" aria-hidden="true"></div>

  <div class="container">
    <div class="cb-answer-content">
      <div class="section-title">
        <span class="eyebrow-label reveal-up">Council Bluffs Roofing</span>
        <h2 class="reveal-up">What Roofing and Gutter Services Does Crawford Provide <span class="text-accent">in Council Bluffs?</span></h2>
      </div>

      <div class="answer-block reveal-up reveal-delay-1">
        <p>
          Crawford Roofing &amp; Gutters provides all 9 roofing and gutter services to Council Bluffs
          homeowners and businesses: roof repair, roof replacement, new roof installation, roof inspection,
          gutter addition, gutter installation, gutter repair, gutter replacement, and gutter cleaning.
          Council Bluffs residents looking for roofing near me in Council Bluffs benefit from an Omaha-based
          crew that holds Iowa contractor licensing and understands Pottawattamie County building code requirements.
        </p>
      </div>

      <div class="prose reveal-up reveal-delay-2" style="margin-top:var(--space-6);">
        <p>
          Council Bluffs sits across the Missouri River from Omaha, making it a natural extension of our
          service area. Our office on Giles Road is a 20-minute drive to most Council Bluffs neighborhoods,
          and our crews cross the river daily for jobs ranging from residential roof inspections to commercial
          gutter installations along the Broadway corridor.
        </p>
        <p>
          What sets Council Bluffs apart from our Nebraska service areas is the regulatory environment.
          Iowa building codes differ from Nebraska in several important ways — permit requirements, wind
          uplift specifications, and ice dam prevention standards all have Iowa-specific provisions. Crawford
          holds active contractor licenses in both states, so Council Bluffs homeowners never need to worry
          about code compliance gaps.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SIGNATURE: TWO-STATE CODE COMPARISON ═════════════════ -->
<section class="cb-comparison-section">
  <div class="cb-divider-wave cb-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70 C300,20 600,55 900,30 C1050,15 1150,40 1200,25 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">Two-State Expertise</span>
      <h2 class="reveal-up">Nebraska vs. Iowa: <span class="text-accent">Building Code Differences</span> That Affect Your Roof</h2>
      <p class="section-subtitle reveal-up">Council Bluffs properties must meet Iowa standards — Crawford is licensed for both</p>
    </div>

    <div class="cb-comparison-wrapper">
      <span class="cb-vs-badge" aria-hidden="true">VS</span>
      <div class="cb-comparison-grid">
        <div class="cb-code-card card-tint-1 reveal-left">
          <div class="cb-code-card__header cb-code-card--ne">
            <h3>Nebraska</h3>
            <span>Omaha &amp; Douglas County Codes</span>
          </div>
          <div class="cb-code-card__body">
            <div class="cb-code-item">
              <i data-lucide="file-text" aria-hidden="true"></i>
              <div class="cb-code-item__text">
                <strong>Permit Process</strong>
                City of Omaha permits with standard residential exemptions for like-for-like roof replacement.
              </div>
            </div>
            <div class="cb-code-item">
              <i data-lucide="wind" aria-hidden="true"></i>
              <div class="cb-code-item__text">
                <strong>Wind Rating</strong>
                110 mph basic wind speed requirement per IBC adoption.
              </div>
            </div>
            <div class="cb-code-item">
              <i data-lucide="snowflake" aria-hidden="true"></i>
              <div class="cb-code-item__text">
                <strong>Ice Barrier</strong>
                Ice and water shield required in valleys and at eaves per IRC R905.
              </div>
            </div>
            <div class="cb-code-item">
              <i data-lucide="ruler" aria-hidden="true"></i>
              <div class="cb-code-item__text">
                <strong>Drip Edge</strong>
                Metal drip edge required at eaves and rakes on new construction.
              </div>
            </div>
          </div>
        </div>

        <div class="cb-code-card card-tint-3 reveal-right">
          <div class="cb-code-card__header cb-code-card--ia">
            <h3>Iowa</h3>
            <span>Council Bluffs &amp; Pottawattamie County Codes</span>
          </div>
          <div class="cb-code-card__body">
            <div class="cb-code-item">
              <i data-lucide="file-text" aria-hidden="true"></i>
              <div class="cb-code-item__text">
                <strong>Permit Process</strong>
                Council Bluffs requires permits for all roofing work exceeding $1,000, including re-roofing.
              </div>
            </div>
            <div class="cb-code-item">
              <i data-lucide="wind" aria-hidden="true"></i>
              <div class="cb-code-item__text">
                <strong>Wind Rating</strong>
                115 mph basic wind speed — slightly higher than NE due to Iowa's amended IBC adoption.
              </div>
            </div>
            <div class="cb-code-item">
              <i data-lucide="snowflake" aria-hidden="true"></i>
              <div class="cb-code-item__text">
                <strong>Ice Barrier</strong>
                Extended ice barrier coverage required — minimum 24" past interior wall line at eaves.
              </div>
            </div>
            <div class="cb-code-item">
              <i data-lucide="ruler" aria-hidden="true"></i>
              <div class="cb-code-item__text">
                <strong>Drip Edge</strong>
                Required on all new and re-roofing projects — stricter enforcement than Nebraska equivalents.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ LOCAL CONTENT ═════════════════════════════════════════ -->
<section class="cb-local-section">
  <div class="cb-divider-angle cb-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-bg-alt)" points="0,0 1200,55 0,55"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="cb-local-split">
      <div class="cb-local-content reveal-left">
        <h2>Council Bluffs Has Older Housing Stock <span class="text-accent">That Demands</span> More Maintenance</h2>
        <div class="prose">
          <p>
            Council Bluffs features some of the oldest residential construction in the metro area. Homes
            in the historic 100 Block downtown area and along the Broadway corridor date back to the
            late 1800s and early 1900s. These properties need specialized roof work: careful tear-off to
            avoid damaging historic trim, material matching to maintain architectural character, and flashing
            details that accommodate settling foundations.
          </p>
          <p>
            The Loess Hills terrain that defines eastern Council Bluffs creates drainage challenges that
            affect gutter system performance. Steep lot grading on hillside properties means gutters carry
            higher water volumes during rainstorms. Undersized or poorly pitched gutters on Council Bluffs
            hillside homes lead to foundation erosion and basement water intrusion. Crawford sizes and
            installs gutter systems based on actual roof area and terrain grade, not one-size-fits-all specs.
          </p>
          <p>
            Near Lake Manawa State Park and the I-80/I-29 interchange area, Council Bluffs has seen newer
            commercial development that requires flat-roof maintenance and TPO or EPDM systems. Our commercial
            division handles these Council Bluffs projects with dedicated crews trained in low-slope roofing.
          </p>
          <p>
            The Pottawattamie County seat has a mix of government buildings, schools, and community facilities
            that also require routine roof maintenance. Crawford works with property managers and municipal
            facilities departments across Council Bluffs to keep institutional roofs in compliance with
            Iowa building standards.
          </p>
        </div>
      </div>
      <div class="cb-local-image-wrap reveal-right">
        <img src="<?php echo $splitImg; ?>" alt="Roofing work on a Council Bluffs, Iowa residential property" width="600" height="400" loading="lazy">
        <span class="cb-local-tag">Council Bluffs, IA</span>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SERVICES AVAILABLE ═══════════════════════════════════ -->
<section class="cb-services-section">
  <div class="cb-divider-wave cb-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70 C200,25 450,60 700,30 C950,0 1100,45 1200,20 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">What We Do</span>
      <h2 class="reveal-up">All 9 Services Available <span class="text-accent">in Council Bluffs</span></h2>
      <p class="section-subtitle reveal-up">Iowa-code-compliant roofing and gutter services for Council Bluffs homes and businesses</p>
    </div>

    <div class="cb-services-grid">
      <?php
      $cbIcons = [
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
          $icon = $cbIcons[$service['slug']] ?? 'check-circle';
          $tint = $tints[$i % 3];
          $delay = $delays[$i % 3];
      ?>
      <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/" class="cb-service-link <?php echo $tint; ?> reveal-up <?php echo $delay; ?>">
        <div class="cb-service-link__icon"><i data-lucide="<?php echo $icon; ?>" aria-hidden="true"></i></div>
        <div class="cb-service-link__text">
          <h3><?php echo htmlspecialchars($service['name']); ?></h3>
          <span>Learn more &rarr;</span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ WHY CHOOSE CRAWFORD FOR COUNCIL BLUFFS ═══════════════ -->
<section class="cb-why-section">
  <div class="cb-divider-angle cb-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-bg-alt)" points="1200,0 0,55 1200,55"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">Why Crawford</span>
      <h2 class="reveal-up">Why Council Bluffs Homeowners Call <span class="text-accent">an Omaha Roofer</span></h2>
    </div>

    <div class="cb-why-grid">
      <div class="cb-why-card card-tint-1 reveal-up reveal-delay-1">
        <div class="cb-why-card__icon"><i data-lucide="shield-check" aria-hidden="true"></i></div>
        <h3>Dual-State Licensed</h3>
        <p>Crawford holds active contractor licenses in both Nebraska and Iowa. Council Bluffs jobs meet Iowa code without exception.</p>
      </div>
      <div class="cb-why-card card-tint-2 reveal-up reveal-delay-2">
        <div class="cb-why-card__icon"><i data-lucide="droplets" aria-hidden="true"></i></div>
        <h3>Loess Hills Drainage</h3>
        <p>Council Bluffs' hilly terrain requires custom-sized gutter systems. We calculate flow rates based on actual roof pitch and lot grade.</p>
      </div>
      <div class="cb-why-card card-tint-3 reveal-up reveal-delay-3">
        <div class="cb-why-card__icon"><i data-lucide="clock" aria-hidden="true"></i></div>
        <h3>20 Minutes Away</h3>
        <p>Our Giles Rd office is a quick drive across the Missouri River. Council Bluffs gets the same response time as south Omaha neighborhoods.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CTA BANNER ═══════════════════════════════════════════ -->
<section class="cb-cta-section">
  <div class="container">
    <h2 class="reveal-up">Need a Roofer in Council Bluffs?</h2>
    <p class="reveal-up reveal-delay-1">
      From the historic 100 Block to Lake Manawa, Crawford Roofing &amp; Gutters provides free on-site
      estimates for every Council Bluffs roofing and gutter project. Iowa licensed, Omaha based,
      <?php echo $yearsInBusiness; ?>+ years of experience.
    </p>
    <div class="cb-cta-buttons reveal-up reveal-delay-2">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Council Bluffs Estimate</a>
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
