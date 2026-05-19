<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ───────────────────────────────────────────────
$pageTitle       = 'Roofing & Gutter Services in Gretna, NE | ' . $siteName;
$pageDescription = 'Crawford Roofing & Gutters LLC provides roof repair, replacement, and gutter services in Gretna, NE. Licensed contractor serving Gretna since 1993. Free estimates available.';
$canonicalUrl    = $siteUrl . '/areas/gretna/';
$currentPage     = 'areas';
$cssVersion      = '3';

$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/';
$heroImg = $imgBase . '1779134251810-z2x055-IMG_95F75D69640F-1.jpeg';
$heroImagePreload = $heroImg;
$splitImg = $imgBase . '1779134252049-ez0nhr-IMG_096815F71F3A-1.jpeg';
$ctaImg   = $imgBase . '1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg';

// ── Schema ───────────────────────────────────────────────────
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',          'url' => $siteUrl . '/'],
    ['name' => 'Service Areas', 'url' => $siteUrl . '/areas/'],
    ['name' => 'Gretna',        'url' => $siteUrl . '/areas/gretna/'],
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
        'name' => 'Gretna',
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
   Gretna Area Page — Page-Specific Styles
   Prefix: .gr-
   Crawford Roofing & Gutters LLC
   ═══════════════════════════════════════════════════════════════ */

/* ── 1. HERO ─────────────────────────────────────────────────── */
.gr-hero {
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
.gr-hero::before {
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
.gr-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  opacity: 0.14;
  z-index: 1;
  pointer-events: none;
}
.gr-hero .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.gr-hero .hero-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
}
.gr-hero .hero-breadcrumb a {
  color: rgba(255, 255, 255, 0.6);
  transition: color var(--transition-fast);
}
.gr-hero .hero-breadcrumb a:hover {
  color: rgba(255, 255, 255, 0.9);
}
.gr-hero .hero-breadcrumb .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.35);
  font-size: var(--font-size-xs);
}
.gr-hero .hero-breadcrumb .breadcrumb-current {
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(1.8);
  font-weight: 600;
}
.gr-hero .eyebrow-label {
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
.gr-hero .eyebrow-label .eyebrow-dot {
  width: 5px;
  height: 5px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.gr-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 3.75rem);
  line-height: 1.08;
  margin-bottom: var(--space-6);
  text-wrap: balance;
  max-width: 24ch;
}
.gr-hero h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.7);
}
.gr-hero .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 640px;
  margin-bottom: var(--space-8);
}
.gr-hero .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-10);
}
.gr-hero .hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  align-items: center;
}
.gr-hero .hero-trust-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.75);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.gr-hero .hero-trust-item i,
.gr-hero .hero-trust-item svg {
  width: 16px;
  height: 16px;
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(2);
}

/* ── Section Dividers ────────────────────────────────────────── */
.gr-divider-angle {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.gr-divider-angle--top { top: -1px; }
.gr-divider-angle--bottom { bottom: -1px; }
.gr-divider-angle svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 55px;
}
.gr-divider-wave {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.gr-divider-wave--top { top: -1px; }
.gr-divider-wave--bottom { bottom: -1px; }
.gr-divider-wave svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 70px;
}

/* ── Floating Accent Blob ────────────────────────────────────── */
.gr-floating-accent {
  position: absolute;
  width: 380px;
  height: 380px;
  border-radius: 38% 62% 52% 48% / 55% 40% 60% 45%;
  background: rgba(var(--color-accent-rgb), 0.03);
  pointer-events: none;
  z-index: 0;
  animation: gr-float 18s ease-in-out infinite;
}
@keyframes gr-float {
  0%, 100% { transform: translate(0, 0) rotate(0deg); }
  33% { transform: translate(-12px, 20px) rotate(4deg); }
  66% { transform: translate(14px, -10px) rotate(-3deg); }
}

/* ── 2. ANSWER BLOCK SECTION ─────────────────────────────────── */
.gr-answer-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.gr-answer-section .gr-floating-accent {
  top: -100px;
  right: -160px;
}
.gr-answer-layout {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1.5fr 1fr;
  gap: var(--space-12);
  align-items: start;
}
.gr-answer-layout .section-title {
  text-align: left;
}
.gr-answer-layout .section-title h2 {
  text-wrap: balance;
}
.gr-answer-layout .answer-block {
  background: rgba(var(--color-primary-rgb), 0.03);
  border-left: 4px solid rgba(var(--color-accent-rgb), 0.35);
  padding: var(--space-6);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin: var(--space-6) 0;
}
.gr-answer-layout .answer-block p {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-text);
  margin: 0;
}
.gr-answer-sidebar {
  position: sticky;
  top: calc(var(--space-20) + 80px);
}
.gr-quick-facts {
  background: var(--color-card-tint-1);
  border-radius: var(--radius-lg);
  padding: var(--space-8);
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.gr-quick-facts h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin: 0 0 var(--space-2);
  text-wrap: balance;
}
.gr-quick-fact {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  padding: var(--space-3) 0;
  border-bottom: 1px solid rgba(0, 0, 0, 0.06);
}
.gr-quick-fact:last-child {
  border-bottom: none;
}
.gr-quick-fact i,
.gr-quick-fact svg {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: var(--space-1);
}
.gr-quick-fact span {
  font-size: var(--font-size-sm);
  color: var(--color-text);
  line-height: 1.5;
}

/* ── 3. LOCAL CONTENT SECTION ────────────────────────────────── */
.gr-local-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0 var(--space-20);
  overflow: hidden;
}
.gr-local-split {
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: var(--space-10);
  align-items: center;
  position: relative;
  z-index: 1;
}
.gr-local-image-wrap {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
}
.gr-local-image-wrap img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: var(--radius-lg);
}
.gr-local-image-wrap::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: var(--radius-lg);
  box-shadow: inset 0 0 0 1px rgba(var(--color-primary-rgb), 0.08);
  pointer-events: none;
}
.gr-local-badge {
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
.gr-local-content h2 {
  font-size: clamp(1.75rem, 3vw, 2.5rem);
  color: var(--color-primary);
  margin-bottom: var(--space-6);
  text-wrap: balance;
}
.gr-local-content .prose p {
  margin-bottom: var(--space-4);
}

/* ── 4. SIGNATURE SECTION: GROWTH TIMELINE ───────────────────── */
/* Gretna's unique section — a vertical growth timeline showing
   the city's rapid expansion and what it means for roofing */
.gr-growth-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.gr-growth-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
}
.gr-growth-section .section-title h2 {
  text-wrap: balance;
}
.gr-timeline {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
  padding-left: var(--space-10);
}
.gr-timeline::before {
  content: '';
  position: absolute;
  left: 20px;
  top: 0;
  bottom: 0;
  width: 3px;
  background: linear-gradient(
    to bottom,
    rgba(var(--color-accent-rgb), 0.1),
    rgba(var(--color-accent-rgb), 0.4),
    rgba(var(--color-accent-rgb), 0.1)
  );
  border-radius: var(--radius-full);
}
.gr-timeline-item {
  position: relative;
  padding: 0 0 var(--space-10) var(--space-8);
}
.gr-timeline-item:last-child {
  padding-bottom: 0;
}
.gr-timeline-item::before {
  content: '';
  position: absolute;
  left: calc(-1 * var(--space-10) + 14px);
  top: var(--space-2);
  width: 14px;
  height: 14px;
  border-radius: var(--radius-full);
  background: var(--color-accent);
  box-shadow: 0 0 0 4px rgba(var(--color-accent-rgb), 0.15);
  z-index: 1;
}
.gr-timeline-item .gr-tl-year {
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  color: var(--color-accent);
  font-weight: 700;
  letter-spacing: 0.05em;
  margin-bottom: var(--space-2);
}
.gr-timeline-item h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin: 0 0 var(--space-2);
  text-wrap: balance;
}
.gr-timeline-item p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.65;
  margin: 0;
}
.gr-timeline-card {
  background: var(--color-card-tint-1);
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  margin-top: var(--space-3);
}
.gr-timeline-card p {
  color: var(--color-text);
  font-size: var(--font-size-sm);
  line-height: 1.6;
  margin: 0;
}

/* ── 5. SERVICES SECTION ─────────────────────────────────────── */
.gr-services-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0 var(--space-20);
  overflow: hidden;
}
.gr-services-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.gr-services-section .section-title h2 {
  text-wrap: balance;
}
.gr-services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.gr-service-link {
  display: flex;
  align-items: center;
  gap: var(--space-4);
  padding: var(--space-5) var(--space-6);
  border-radius: var(--radius-lg);
  text-decoration: none;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.gr-service-link:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.gr-service-link__icon {
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
.gr-service-link__icon i,
.gr-service-link__icon svg {
  width: 22px;
  height: 22px;
}
.gr-service-link__text h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0 0 var(--space-1);
  line-height: 1.3;
}
.gr-service-link__text span {
  font-size: var(--font-size-xs);
  color: var(--color-accent);
  font-weight: 600;
}

/* ── 6. WHY CHOOSE SECTION ───────────────────────────────────── */
.gr-why-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.gr-why-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.gr-why-section .section-title h2 {
  text-wrap: balance;
}
.gr-why-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.gr-why-card {
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
.gr-why-card::after {
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
.gr-why-card:hover::after {
  width: 60%;
}
.gr-why-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.gr-why-card__icon {
  width: 56px;
  height: 56px;
  border-radius: var(--radius-full);
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.1);
  color: var(--color-accent);
}
.gr-why-card__icon i,
.gr-why-card__icon svg {
  width: 24px;
  height: 24px;
}
.gr-why-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0;
  line-height: 1.3;
}
.gr-why-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  margin: 0;
}

/* ── 7. CTA BANNER ───────────────────────────────────────────── */
.gr-cta-section {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  overflow: hidden;
  text-align: center;
}
.gr-cta-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(145deg, rgba(var(--color-accent-rgb), 0.15) 0%, transparent 55%);
  pointer-events: none;
}
.gr-cta-section::after {
  content: '';
  position: absolute;
  bottom: -70px;
  right: -70px;
  width: 220px;
  height: 220px;
  border-radius: var(--radius-full);
  border: 3px solid rgba(255, 255, 255, 0.05);
  pointer-events: none;
}
.gr-cta-section .container {
  position: relative;
  z-index: 1;
}
.gr-cta-section h2 {
  color: var(--color-white);
  font-size: clamp(1.75rem, 3.5vw, 2.75rem);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.gr-cta-section p {
  color: rgba(255, 255, 255, 0.85);
  font-size: var(--font-size-lg);
  max-width: 52ch;
  margin: 0 auto var(--space-8);
  line-height: 1.7;
}
.gr-cta-buttons {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── RESPONSIVE ──────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .gr-answer-layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .gr-answer-sidebar {
    position: static;
  }
  .gr-local-split {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .gr-services-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .gr-why-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 600px) {
  .gr-hero {
    min-height: 60vh;
    padding: var(--space-12) 0 var(--space-8);
  }
  .gr-services-grid {
    grid-template-columns: 1fr;
  }
  .gr-why-grid {
    grid-template-columns: 1fr;
  }
  .gr-timeline {
    padding-left: var(--space-8);
  }
  .gr-timeline-item {
    padding-left: var(--space-6);
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══ HERO ═══════════════════════════════════════════════════ -->
<section class="gr-hero">
  <div class="container">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <a href="/areas/">Service Areas</a>
      <span class="breadcrumb-sep" aria-hidden="true">&#8250;</span>
      <span class="breadcrumb-current">Gretna</span>
    </nav>

    <div class="eyebrow-label">
      <span class="eyebrow-dot" aria-hidden="true"></span>
      Gretna, Nebraska
    </div>

    <h1>Roofing &amp; Gutter Services in <span class="accent-word">Gretna, NE</span></h1>

    <p class="hero-answer">
      <?php echo htmlspecialchars($siteName); ?> is a licensed Nebraska roofing contractor providing roof repair,
      roof replacement, gutter installation, and storm damage restoration in Gretna. With <?php echo $yearsInBusiness; ?>+ years
      of experience and crews based just minutes away in Omaha, we deliver fast response times for Gretna
      homeowners and commercial properties.
    </p>

    <div class="hero-ctas">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Gretna Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> <?php echo formatPhone($phone); ?>
      </a>
      <?php endif; ?>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="clock" aria-hidden="true"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      <span class="hero-trust-item"><i data-lucide="star" aria-hidden="true"></i> 4.9 Rating</span>
    </div>
  </div>
</section>

<!-- ═══ ANSWER BLOCK ═══════════════════════════════════════════ -->
<section class="gr-answer-section">
  <div class="gr-divider-angle gr-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-primary)" points="0,0 1200,55 0,55"></polygon>
    </svg>
  </div>
  <div class="gr-floating-accent" aria-hidden="true"></div>

  <div class="container">
    <div class="gr-answer-layout">
      <div>
        <div class="section-title">
          <span class="eyebrow-label reveal-up">Gretna Roofing</span>
          <h2 class="reveal-up">What Roofing Services Are Available <span class="text-accent">in Gretna?</span></h2>
        </div>

        <div class="answer-block reveal-up reveal-delay-1">
          <p>
            Crawford Roofing &amp; Gutters provides comprehensive roofing and gutter services throughout
            Gretna, NE, including roof repair, full roof replacement, new construction roof installation,
            gutter addition, gutter cleaning, and emergency storm damage response. Gretna residents searching
            for roofing near me in Gretna can count on same-day estimates and warranty-compliant installations
            designed for Nebraska's severe weather cycles.
          </p>
        </div>

        <div class="prose reveal-up reveal-delay-2">
          <p>
            Gretna has earned its reputation as the fastest-growing city in the Omaha metro. Neighborhoods
            like Aspen Creek, Tiburon Golf Course Estates, and Whitetail Ridge have added hundreds of homes
            in the last decade. Many of these newer homes are approaching the 10-15 year mark where
            manufacturer warranties require documented inspections to stay valid. Crawford Roofing provides
            those inspections along with warranty-compliant repair and replacement work.
          </p>
          <p>
            The Highway 370 corridor running through Gretna continues to attract commercial development,
            anchored by Nebraska Crossing Outlets. This growth brings mixed-use roofing needs that Crawford
            handles across residential shingle, commercial flat-roof, and multi-family gutter systems.
          </p>
          <p>
            Prairie wind exposure is a defining characteristic of Gretna properties. Sitting on the western
            edge of the metro with minimal wind breaks from surrounding development, Gretna homes take more
            direct wind load during spring and summer storm systems. We see more lifted shingles, cracked
            ridge caps, and displaced flashing in Gretna than in neighborhoods sheltered by Omaha's urban
            tree canopy.
          </p>
        </div>
      </div>

      <aside class="gr-answer-sidebar reveal-right reveal-delay-2">
        <div class="gr-quick-facts">
          <h3>Gretna Quick Facts</h3>
          <div class="gr-quick-fact">
            <i data-lucide="trending-up" aria-hidden="true"></i>
            <span>Fastest-growing city in the Omaha metro area</span>
          </div>
          <div class="gr-quick-fact">
            <i data-lucide="home" aria-hidden="true"></i>
            <span>Many homes under 15 years old requiring warranty inspections</span>
          </div>
          <div class="gr-quick-fact">
            <i data-lucide="wind" aria-hidden="true"></i>
            <span>High prairie wind exposure increases shingle damage risk</span>
          </div>
          <div class="gr-quick-fact">
            <i data-lucide="school" aria-hidden="true"></i>
            <span>Gretna Public Schools district expanding rapidly</span>
          </div>
          <div class="gr-quick-fact">
            <i data-lucide="map-pin" aria-hidden="true"></i>
            <span>15 minutes from our Giles Rd office in south Omaha</span>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>

<!-- ═══ LOCAL CONTENT ═════════════════════════════════════════ -->
<section class="gr-local-section">
  <div class="gr-divider-wave gr-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70 C300,20 600,60 900,25 C1050,10 1150,40 1200,30 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="gr-local-split">
      <div class="gr-local-image-wrap reveal-left">
        <img src="<?php echo $splitImg; ?>" alt="Roof installation on a Gretna, NE home near Aspen Creek subdivision" width="600" height="400" loading="lazy">
        <span class="gr-local-badge">Serving Gretna Since 1993</span>
      </div>
      <div class="gr-local-content reveal-right">
        <h2>Why Gretna Homes Need <span class="text-accent">Specialized</span> Roofing Attention</h2>
        <div class="prose">
          <p>
            Gretna sits in one of the most active storm corridors in the Omaha metro. Supercell systems
            tracking northeast from southwestern Nebraska frequently produce hail events that strike Gretna
            before reaching the denser Omaha core. After the spring 2024 hail season, our Gretna inspection
            volume tripled within 72 hours.
          </p>
          <p>
            The rapid subdivision growth around Tiburon and south of Highway 370 means many Gretna properties
            share similar roof ages and material specs. When a hail event damages one home in these
            neighborhoods, adjacent properties almost always need evaluation. Crawford Roofing offers block
            inspection programs where we assess multiple Gretna homes in a single visit, saving time and
            coordinating with insurance adjusters efficiently.
          </p>
          <p>
            Gretna Public Schools' continued expansion has made the city a magnet for young families. These
            homeowners often navigate their first insurance roof claim. Our team walks Gretna residents
            through the entire process, from initial damage documentation through adjuster meetings and
            final installation sign-off, so nothing gets missed or underpaid.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SIGNATURE: GROWTH TIMELINE ═══════════════════════════ -->
<section class="gr-growth-section">
  <div class="gr-divider-angle gr-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-bg-alt)" points="1200,0 0,55 1200,55"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">Gretna's Growth</span>
      <h2 class="reveal-up">How Gretna's Boom Affects <span class="text-accent">Your Roof</span></h2>
      <p class="section-subtitle reveal-up">Understanding Gretna's rapid development helps homeowners make smarter roofing decisions</p>
    </div>

    <div class="gr-timeline">
      <div class="gr-timeline-item reveal-up">
        <div class="gr-tl-year">2005 - 2012</div>
        <h3>First Wave of Subdivision Growth</h3>
        <p>Aspen Creek and early Tiburon phases brought hundreds of new homes with 25-30 year architectural shingles. These roofs are now approaching their first major maintenance window.</p>
        <div class="gr-timeline-card">
          <p><strong>What this means for you:</strong> If your Gretna home was built during this period, schedule a roof inspection to catch wear before it becomes a leak. Many manufacturer warranties require documented inspections to remain valid.</p>
        </div>
      </div>

      <div class="gr-timeline-item reveal-up reveal-delay-1">
        <div class="gr-tl-year">2013 - 2019</div>
        <h3>Highway 370 Commercial Expansion</h3>
        <p>Nebraska Crossing Outlets and surrounding retail development added flat-roof and mixed-use roofing needs. Residential growth continued into Whitetail Ridge and west Gretna subdivisions.</p>
        <div class="gr-timeline-card">
          <p><strong>What this means for you:</strong> Homes in this era often used builder-grade materials that perform below premium options. Upgrading to impact-resistant shingles during your next replacement saves on insurance premiums.</p>
        </div>
      </div>

      <div class="gr-timeline-item reveal-up reveal-delay-2">
        <div class="gr-tl-year">2020 - Present</div>
        <h3>Population Surge and New Construction</h3>
        <p>Gretna's population has doubled in the last 15 years. New school buildings, community facilities, and continued residential expansion make it the metro's most active building market.</p>
        <div class="gr-timeline-card">
          <p><strong>What this means for you:</strong> New construction roofing requires manufacturer-certified installers to activate full warranties. Crawford Roofing provides documentation that protects your investment from day one.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SERVICES AVAILABLE ═══════════════════════════════════ -->
<section class="gr-services-section">
  <div class="gr-divider-wave gr-divider-wave--top">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,70 C200,30 400,65 600,35 C800,5 1000,50 1200,25 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">What We Do</span>
      <h2 class="reveal-up">All 9 Services Available <span class="text-accent">in Gretna</span></h2>
      <p class="section-subtitle reveal-up">Every roofing and gutter service, delivered locally</p>
    </div>

    <div class="gr-services-grid">
      <?php
      $grIcons = [
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
          $icon = $grIcons[$service['slug']] ?? 'check-circle';
          $tint = $tints[$i % 3];
          $delay = $delays[$i % 3];
      ?>
      <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/" class="gr-service-link <?php echo $tint; ?> reveal-up <?php echo $delay; ?>">
        <div class="gr-service-link__icon"><i data-lucide="<?php echo $icon; ?>" aria-hidden="true"></i></div>
        <div class="gr-service-link__text">
          <h3><?php echo htmlspecialchars($service['name']); ?></h3>
          <span>Learn more &rarr;</span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ WHY CHOOSE CRAWFORD FOR GRETNA ═══════════════════════ -->
<section class="gr-why-section">
  <div class="gr-divider-angle gr-divider-angle--top">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none" aria-hidden="true">
      <polygon fill="var(--color-bg-alt)" points="0,0 1200,55 0,55"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">Why Crawford</span>
      <h2 class="reveal-up">Why Gretna Homeowners Call <span class="text-accent">Crawford First</span></h2>
    </div>

    <div class="gr-why-grid">
      <div class="gr-why-card card-tint-1 reveal-up reveal-delay-1">
        <div class="gr-why-card__icon"><i data-lucide="map-pin" aria-hidden="true"></i></div>
        <h3>15-Minute Response</h3>
        <p>Our Giles Rd office is a straight shot down Highway 370 to Gretna. Emergency tarping crews arrive faster than metro-wide competitors.</p>
      </div>
      <div class="gr-why-card card-tint-2 reveal-up reveal-delay-2">
        <div class="gr-why-card__icon"><i data-lucide="file-check" aria-hidden="true"></i></div>
        <h3>Warranty-Compliant Work</h3>
        <p>New Gretna homes need certified installations to maintain builder warranties. Crawford carries all major manufacturer certifications.</p>
      </div>
      <div class="gr-why-card card-tint-3 reveal-up reveal-delay-3">
        <div class="gr-why-card__icon"><i data-lucide="cloud-rain" aria-hidden="true"></i></div>
        <h3>Storm Damage Experts</h3>
        <p>Gretna's prairie exposure creates hail and wind patterns we understand. We document damage thoroughly for accurate insurance claims.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CTA BANNER ═══════════════════════════════════════════ -->
<section class="gr-cta-section">
  <div class="container">
    <h2 class="reveal-up">Need a Roofer in Gretna?</h2>
    <p class="reveal-up reveal-delay-1">
      From Aspen Creek to Whitetail Ridge, Crawford Roofing &amp; Gutters delivers free on-site estimates
      for every roofing and gutter project in Gretna. <?php echo $yearsInBusiness; ?>+ years of experience,
      one phone call away.
    </p>
    <div class="gr-cta-buttons reveal-up reveal-delay-2">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Gretna Estimate</a>
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
