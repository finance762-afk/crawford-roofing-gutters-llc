<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle = 'New Roof Installation Omaha NE | Residential & Commercial | Crawford Roofing & Gutters LLC';
$pageDescription = 'Expert new roof installation in Omaha, NE for homes and commercial buildings. Crawford Roofing installs asphalt, metal, TPO, and flat roofing systems. Financing available. Free estimates.';
$canonicalUrl = $siteUrl . '/services/new-roof-installation/';
$ogImage = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252517-ip8hel-roofing-contractors-milford-1024x778.jpg';
$currentPage = 'services';
$heroImagePreload = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252517-ip8hel-roofing-contractors-milford-1024x778.jpg';
$cssVersion = '3';

// ── FAQ Data ─────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How much does a new roof installation cost in Omaha?',
        'answer'   => 'New roof installation in Omaha typically ranges from $8,500 to $18,000 for a standard residential home, depending on roof size, pitch complexity, and material selection. Architectural asphalt shingles fall at the lower end while standing-seam metal roofing runs $15,000 to $28,000. Commercial TPO and EPDM flat-roof systems are priced per square foot — usually $4.50 to $9.00 installed. Crawford provides detailed written estimates within 48 hours of your consultation.',
    ],
    [
        'question' => 'How long does it take to install a new roof on a house in Omaha?',
        'answer'   => 'Most residential new roof installations in Omaha take 2 to 4 days from the first course of underlayment to final ridge cap. New construction homes where the decking is already in place typically finish in 1 to 2 days. Larger homes with complex rooflines — common in west Omaha developments near 192nd and Pacific — may require 4 to 5 days. Weather delays during Nebraska storm season can add 1 to 2 days, but we monitor forecasts closely and schedule around incoming fronts.',
    ],
    [
        'question' => 'What roofing materials work best for new construction in Nebraska?',
        'answer'   => 'For Omaha new construction, we most often recommend Class 4 impact-resistant architectural shingles rated for 130+ mph wind uplift — they handle Nebraska hail and wind while qualifying for insurance premium discounts of 10 to 28 percent. Standing-seam metal is increasingly popular on new builds in Bennington and Elkhorn for its 40 to 70 year lifespan. Commercial structures typically use TPO or modified bitumen for flat-roof sections. Crawford helps builders and homeowners match the material to the structure, climate exposure, and budget.',
    ],
    [
        'question' => 'Does Crawford coordinate with builders on new construction roofing?',
        'answer'   => 'Yes. We work directly with general contractors, custom home builders, and commercial developers across the Omaha metro. Our project managers attend pre-construction meetings, provide material takeoffs from blueprints, and schedule installation within the builder timeline so framing and interior work stay on track. We currently partner with builders on developments in west Omaha, Elkhorn, Bennington, and Gretna.',
    ],
    [
        'question' => 'What warranty comes with a new roof installation from Crawford?',
        'answer'   => 'Every new roof installation from Crawford includes a 10-year workmanship warranty covering installation defects, plus the manufacturer material warranty which ranges from 25 years on standard architectural shingles to 50 years on premium lines and lifetime on certain metal systems. As certified installers for major manufacturers, we can register enhanced warranty coverage that includes labor costs on defective materials — something most Omaha roofing contractors cannot offer.',
    ],
    [
        'question' => 'Do I need a permit for new roof installation in Omaha?',
        'answer'   => 'New construction roofing in the City of Omaha requires a building permit issued through the city Planning Department. The permit ensures your roof meets current International Building Code standards adopted by Nebraska, including wind uplift resistance, fire rating, and ventilation requirements. Crawford handles all permit applications and coordinates the required city inspection before your certificate of occupancy is issued.',
    ],
    [
        'question' => 'Can Crawford install a roof on an addition or expansion?',
        'answer'   => 'Absolutely. Additions and home expansions are one of our specialties. The challenge with addition roofing is tying the new roof system into the existing structure so the transition is watertight and visually seamless. We install step flashing, cricket diverters, and matching materials to integrate new sections with the original roof — critical on Omaha homes where 20-year-old shingles must meet new production runs without a visible color break.',
    ],
    [
        'question' => 'Does Crawford offer financing for new roof installation?',
        'answer'   => 'Yes. We offer flexible financing options through third-party lenders with terms from 12 to 84 months and rates starting at 6.99 percent APR for qualified borrowers. Many Omaha homeowners building additions or finishing basements bundle the roofing cost into their existing construction loan. For standalone new installations, we can typically get pre-approval within one business day so your project stays on schedule.',
    ],
];

// ── Schema ───────────────────────────────────────────────────
$currentService = null;
foreach ($services as $s) {
    if ($s['slug'] === 'new-roof-installation') {
        $currentService = $s;
        break;
    }
}
$serviceSchema    = generateServiceSchema($currentService, $siteUrl, $siteName, $address);
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',                   'url' => $siteUrl . '/'],
    ['name' => 'Services',               'url' => $siteUrl . '/services/'],
    ['name' => 'New Roof Installation',  'url' => $siteUrl . '/services/new-roof-installation/'],
], $siteUrl);
$faqSchema = generateFAQSchema($faqs);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<!-- Schema: Service -->
<script type="application/ld+json">
<?php echo $serviceSchema; ?>
</script>

<!-- Schema: BreadcrumbList -->
<script type="application/ld+json">
<?php echo $breadcrumbSchema; ?>
</script>

<!-- Schema: FAQPage -->
<script type="application/ld+json">
<?php echo $faqSchema; ?>
</script>

<style>
/* ═══════════════════════════════════════════════════════════════
   New Roof Installation — Page-Specific Styles
   Premium Tier — Editorial 8-Section Layout
   Crawford Roofing & Gutters LLC
   ═══════════════════════════════════════════════════════════════ */

/* ── 1. HERO ─────────────────────────────────────────────────── */
.hero--new-install {
  position: relative;
  min-height: 80vh;
  display: flex;
  align-items: center;
  background-size: cover;
  background-position: center 30%;
  background-repeat: no-repeat;
  overflow: hidden;
  padding: var(--space-16) 0 var(--space-12);
}
.hero--new-install::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    160deg,
    rgba(var(--color-primary-rgb), 0.96) 0%,
    rgba(var(--color-primary-rgb), 0.84) 35%,
    rgba(var(--color-secondary-rgb), 0.72) 100%
  );
  z-index: 1;
}
.hero--new-install::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  opacity: 0.12;
  z-index: 1;
  pointer-events: none;
}
.hero--new-install .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.hero--new-install .hero-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
}
.hero--new-install .hero-breadcrumb a {
  color: rgba(255, 255, 255, 0.6);
  transition: color var(--transition-fast);
}
.hero--new-install .hero-breadcrumb a:hover {
  color: rgba(255, 255, 255, 0.9);
}
.hero--new-install .hero-breadcrumb .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.35);
  font-size: var(--font-size-xs);
}
.hero--new-install .hero-breadcrumb .breadcrumb-current {
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(1.8);
  font-weight: 600;
}
.hero--new-install .eyebrow-label {
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
.hero--new-install .eyebrow-label .eyebrow-dot {
  width: 5px;
  height: 5px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.hero--new-install h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 3.75rem);
  line-height: 1.1;
  margin-bottom: var(--space-6);
  text-wrap: balance;
  max-width: 22ch;
}
.hero--new-install h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.7);
}
.hero--new-install .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 640px;
  margin-bottom: var(--space-8);
}
.hero--new-install .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-10);
}
.hero--new-install .hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  align-items: center;
}
.hero--new-install .hero-trust-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.75);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.hero--new-install .hero-trust-item i,
.hero--new-install .hero-trust-item svg {
  width: 16px;
  height: 16px;
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(2);
}

/* ── Section Dividers ────────────────────────────────────────── */
.ni-divider-angle {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.ni-divider-angle--top { top: -1px; }
.ni-divider-angle--bottom { bottom: -1px; }
.ni-divider-angle svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 55px;
}
.ni-divider-wave {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.ni-divider-wave--top { top: -1px; }
.ni-divider-wave--bottom { bottom: -1px; }
.ni-divider-wave svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 70px;
}
.ni-divider-chevron {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.ni-divider-chevron--top { top: -1px; }
.ni-divider-chevron svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 60px;
}

/* ── 2. PROBLEM STATEMENT ────────────────────────────────────── */
.ni-problem-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.ni-problem-section .ni-floating-accent {
  position: absolute;
  width: 380px;
  height: 380px;
  border-radius: 40% 60% 50% 50% / 45% 55% 45% 55%;
  background: rgba(var(--color-accent-rgb), 0.03);
  pointer-events: none;
  z-index: 0;
  top: -100px;
  right: -160px;
  animation: ni-float 14s ease-in-out infinite;
}
.ni-pullquote {
  position: relative;
  z-index: 1;
  font-family: var(--font-accent);
  font-size: clamp(1.3rem, 2.4vw, 1.75rem);
  line-height: 1.6;
  color: var(--color-primary);
  font-style: italic;
  max-width: 54ch;
  margin: 0 auto var(--space-12);
  text-align: center;
  padding: var(--space-8) var(--space-6);
  border-left: 4px solid rgba(var(--color-accent-rgb), 0.3);
  border-right: 4px solid rgba(var(--color-accent-rgb), 0.3);
  background: rgba(var(--color-primary-rgb), 0.02);
  border-radius: var(--radius-sm);
}
.ni-pullquote .accent-mark {
  color: rgba(var(--color-accent-rgb), 1);
  font-weight: 700;
  font-style: normal;
}
.ni-bento-grid {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  max-width: 1020px;
  margin: 0 auto;
}
.ni-bento-card {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  position: relative;
  overflow: hidden;
}
.ni-bento-card::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 4px;
  background: linear-gradient(90deg, rgba(var(--color-accent-rgb), 0.3), rgba(var(--color-accent-rgb), 0.05));
  border-radius: var(--radius-lg) var(--radius-lg) 0 0;
}
.ni-bento-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-md);
}
.ni-bento-card__icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.1);
  color: var(--color-accent);
}
.ni-bento-card__icon i,
.ni-bento-card__icon svg {
  width: 22px;
  height: 22px;
}
.ni-bento-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin: 0;
  line-height: 1.3;
}
.ni-bento-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.65;
  margin: 0;
}

/* ── 3. EXPERT POSITIONING ───────────────────────────────────── */
.ni-expert-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.ni-expert-grid {
  display: grid;
  grid-template-columns: 1.6fr 1fr;
  gap: var(--space-12);
  align-items: center;
}
.ni-expert-content h2 {
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.ni-expert-content .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  margin-bottom: var(--space-8);
  max-width: var(--content-width);
}
.ni-diff-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
}
.ni-diff-item {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.ni-diff-icon {
  flex-shrink: 0;
  width: 44px;
  height: 44px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.ni-diff-icon i,
.ni-diff-icon svg {
  width: 20px;
  height: 20px;
}
.ni-diff-text h4 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0 0 var(--space-1) 0;
}
.ni-diff-text p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  margin: 0;
  line-height: 1.6;
}
.ni-stat-tower {
  text-align: center;
  padding: var(--space-12) var(--space-8);
  background: var(--color-primary);
  border-radius: var(--radius-xl);
  color: var(--color-white);
  position: relative;
  overflow: hidden;
}
.ni-stat-tower::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(155deg, rgba(var(--color-accent-rgb), 0.2) 0%, transparent 50%);
  pointer-events: none;
}
.ni-stat-tower::after {
  content: '';
  position: absolute;
  top: -30px;
  left: -30px;
  width: 140px;
  height: 140px;
  border-radius: var(--radius-full);
  border: 3px solid rgba(255, 255, 255, 0.05);
  pointer-events: none;
}
.ni-stat-number {
  font-family: var(--font-heading);
  font-size: clamp(3.5rem, 8vw, 5.5rem);
  font-weight: 900;
  line-height: 1;
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.8);
  position: relative;
  z-index: 1;
}
.ni-stat-label {
  font-family: var(--font-accent);
  font-size: var(--font-size-lg);
  color: rgba(255, 255, 255, 0.8);
  margin-top: var(--space-2);
  position: relative;
  z-index: 1;
}
.ni-stat-sub {
  font-size: var(--font-size-sm);
  color: rgba(255, 255, 255, 0.5);
  margin-top: var(--space-4);
  position: relative;
  z-index: 1;
}
.ni-stat-badges {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: var(--space-3);
  margin-top: var(--space-6);
  position: relative;
  z-index: 1;
}
.ni-stat-badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  padding: var(--space-2) var(--space-4);
  background: rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-full);
  font-size: var(--font-size-xs);
  color: rgba(255, 255, 255, 0.7);
  font-weight: 500;
}
.ni-stat-badge i,
.ni-stat-badge svg {
  width: 14px;
  height: 14px;
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(2);
}

/* ── 4. SERVICE BREAKDOWN ────────────────────────────────────── */
.ni-breakdown-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.ni-breakdown-section .ni-floating-accent {
  position: absolute;
  width: 320px;
  height: 320px;
  border-radius: 35% 65% 50% 50% / 50% 40% 60% 50%;
  background: rgba(var(--color-primary-rgb), 0.03);
  pointer-events: none;
  z-index: 0;
  bottom: -80px;
  left: -120px;
  animation: ni-float 15s ease-in-out infinite reverse;
}
.ni-breakdown-asym {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: var(--space-12);
  margin-bottom: var(--space-16);
  align-items: start;
}
.ni-breakdown-image {
  border-radius: var(--radius-lg);
  overflow: hidden;
  position: relative;
  aspect-ratio: 4 / 3;
}
.ni-breakdown-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.ni-breakdown-image:hover img {
  transform: scale(1.03);
}
.ni-breakdown-image::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: var(--radius-lg);
  box-shadow: inset 0 0 0 1px rgba(var(--color-primary-rgb), 0.08);
  pointer-events: none;
}
.ni-breakdown-content h2 {
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.ni-breakdown-content .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  margin-bottom: var(--space-8);
}

/* Material Types Grid */
.ni-material-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-4);
}
.ni-material-card {
  padding: var(--space-5) var(--space-4);
  border-radius: var(--radius-md);
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  transition: transform var(--transition-base);
}
.ni-material-card:hover {
  transform: translateX(4px);
}
.ni-material-icon {
  flex-shrink: 0;
  width: 40px;
  height: 40px;
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.12);
  color: var(--color-accent);
}
.ni-material-icon i,
.ni-material-icon svg {
  width: 18px;
  height: 18px;
}
.ni-material-info h4 {
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  color: var(--color-primary);
  margin: 0 0 var(--space-1);
}
.ni-material-info p {
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  margin: 0;
  line-height: 1.5;
}

/* Process Timeline */
.ni-timeline-heading {
  text-align: center;
  margin-bottom: var(--space-10);
  position: relative;
  z-index: 1;
}
.ni-timeline-heading h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.ni-timeline-heading .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: var(--content-width);
  margin: 0 auto;
}
.ni-process-timeline {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  gap: var(--space-5);
}
.ni-process-timeline::before {
  content: '';
  position: absolute;
  top: 36px;
  left: 8%;
  right: 8%;
  height: 2px;
  background: linear-gradient(90deg,
    rgba(var(--color-accent-rgb), 0.35),
    rgba(var(--color-accent-rgb), 0.15),
    rgba(var(--color-accent-rgb), 0.35)
  );
  z-index: 0;
}
.ni-timeline-step {
  text-align: center;
  position: relative;
  z-index: 1;
}
.ni-timeline-step__number {
  width: 50px;
  height: 50px;
  margin: 0 auto var(--space-4);
  border-radius: var(--radius-full);
  background: var(--color-primary);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 800;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: var(--shadow-md);
  position: relative;
}
.ni-timeline-step__number::after {
  content: '';
  position: absolute;
  inset: -4px;
  border-radius: var(--radius-full);
  border: 2px solid rgba(var(--color-accent-rgb), 0.2);
}
.ni-timeline-step h4 {
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  color: var(--color-primary);
  margin: 0 0 var(--space-2);
  text-transform: uppercase;
  letter-spacing: 0.04em;
}
.ni-timeline-step p {
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  line-height: 1.55;
  margin: 0;
}

/* ── 5. PROOF / REVIEWS ──────────────────────────────────────── */
.ni-proof-section {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.ni-proof-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(165deg, rgba(var(--color-accent-rgb), 0.12) 0%, transparent 40%);
  pointer-events: none;
}
.ni-proof-section .container {
  position: relative;
  z-index: 1;
}
.ni-proof-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
}
.ni-proof-section .section-title .eyebrow-label {
  color: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.ni-proof-section .section-title h2 {
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.ni-proof-section .section-title .answer-block {
  color: rgba(255, 255, 255, 0.75);
  line-height: 1.7;
  max-width: var(--content-width);
  margin: 0 auto;
}
.ni-testimonial-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.ni-testimonial-card {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
  backdrop-filter: blur(4px);
  transition: transform var(--transition-base), background var(--transition-base);
  position: relative;
}
.ni-testimonial-card::before {
  content: '\201C';
  position: absolute;
  top: var(--space-4);
  right: var(--space-6);
  font-family: var(--font-accent);
  font-size: 4rem;
  line-height: 1;
  color: rgba(var(--color-accent-rgb), 0.12);
  filter: brightness(2);
}
.ni-testimonial-card:hover {
  transform: translateY(-3px);
  background: rgba(255, 255, 255, 0.08);
}
.ni-testimonial-stars {
  display: flex;
  gap: var(--space-1);
  margin-bottom: var(--space-4);
  color: var(--color-star);
}
.ni-testimonial-stars i,
.ni-testimonial-stars svg {
  width: 16px;
  height: 16px;
}
.ni-testimonial-card blockquote {
  font-size: var(--font-size-base);
  color: rgba(255, 255, 255, 0.88);
  line-height: 1.7;
  margin: 0 0 var(--space-6);
  font-style: italic;
}
.ni-testimonial-author {
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: rgba(255, 255, 255, 0.65);
}

/* ── 6. COMPARISON ───────────────────────────────────────────── */
.ni-comparison-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.ni-comparison-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
}
.ni-comparison-section .section-title h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.ni-comparison-section .section-title .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: var(--content-width);
  margin: 0 auto;
}
.ni-comparison-table {
  max-width: 960px;
  margin: 0 auto;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-md);
}
.ni-comparison-header {
  display: grid;
  grid-template-columns: 1.8fr 1fr 1fr;
  background: var(--color-primary);
}
.ni-comparison-header span {
  padding: var(--space-5) var(--space-6);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.04em;
}
.ni-comparison-header span:last-child {
  background: rgba(var(--color-accent-rgb), 0.2);
}
.ni-comparison-row {
  display: grid;
  grid-template-columns: 1.8fr 1fr 1fr;
  border-bottom: 1px solid var(--color-border);
  transition: background var(--transition-fast);
}
.ni-comparison-row:last-child {
  border-bottom: none;
}
.ni-comparison-row:hover {
  background: rgba(var(--color-accent-rgb), 0.03);
}
.ni-comparison-row span {
  padding: var(--space-4) var(--space-6);
  font-size: var(--font-size-sm);
  color: var(--color-text);
  display: flex;
  align-items: center;
  gap: var(--space-2);
}
.ni-comparison-row span:first-child {
  font-weight: 600;
  color: var(--color-primary);
  background: var(--color-bg);
}
.ni-comparison-row span:nth-child(2) {
  background: var(--color-bg);
}
.ni-comparison-row span:last-child {
  background: rgba(var(--color-accent-rgb), 0.04);
}
.ni-comparison-row i,
.ni-comparison-row svg {
  width: 16px;
  height: 16px;
  flex-shrink: 0;
}
.ni-check-yes {
  color: var(--color-success);
}
.ni-check-no {
  color: var(--color-text-light);
  opacity: 0.5;
}
.ni-comparison-footer {
  text-align: center;
  margin-top: var(--space-6);
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  font-style: italic;
}

/* ── 7. FAQ ──────────────────────────────────────────────────── */
.ni-faq-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.ni-faq-section .ni-floating-accent {
  position: absolute;
  width: 290px;
  height: 290px;
  border-radius: 50% 50% 40% 60% / 55% 45% 55% 45%;
  background: rgba(var(--color-accent-rgb), 0.03);
  pointer-events: none;
  z-index: 0;
  top: 10%;
  right: -110px;
  animation: ni-float 13s ease-in-out infinite;
}
.ni-faq-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
  position: relative;
  z-index: 1;
}
.ni-faq-section .section-title h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.ni-faq-section .section-title .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: var(--content-width);
  margin: 0 auto;
}
.ni-faq-list {
  position: relative;
  z-index: 1;
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.ni-faq-item {
  border: 1px solid var(--color-border);
  border-radius: var(--radius-md);
  overflow: hidden;
  transition: box-shadow var(--transition-base);
}
.ni-faq-item:hover {
  box-shadow: var(--shadow-sm);
}
.ni-faq-item summary {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: var(--space-5) var(--space-6);
  cursor: pointer;
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 600;
  color: var(--color-primary);
  list-style: none;
  transition: background var(--transition-fast);
}
.ni-faq-item summary::-webkit-details-marker {
  display: none;
}
.ni-faq-item summary::after {
  content: '+';
  font-size: var(--font-size-xl);
  font-weight: 300;
  color: var(--color-accent);
  transition: transform var(--transition-base);
  flex-shrink: 0;
  margin-left: var(--space-4);
}
.ni-faq-item[open] summary::after {
  transform: rotate(45deg);
}
.ni-faq-item summary:hover {
  background: rgba(var(--color-primary-rgb), 0.03);
}
.ni-faq-answer {
  padding: 0 var(--space-6) var(--space-6);
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.75;
}

/* ── 8. FINAL CTA ────────────────────────────────────────────── */
.ni-final-cta {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  text-align: center;
  overflow: hidden;
}
.ni-final-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(140deg, rgba(var(--color-accent-rgb), 0.18) 0%, transparent 45%);
  pointer-events: none;
}
.ni-final-cta::after {
  content: '';
  position: absolute;
  top: -60px;
  right: 10%;
  width: 400px;
  height: 400px;
  border-radius: var(--radius-full);
  border: 2px solid rgba(255, 255, 255, 0.03);
  pointer-events: none;
}
.ni-final-cta .container {
  position: relative;
  z-index: 1;
}
.ni-final-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.ni-final-cta .answer-block {
  color: rgba(255, 255, 255, 0.82);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  max-width: 620px;
  margin: 0 auto var(--space-8);
}
.ni-final-cta .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: var(--space-4);
}

/* ── Related Services ────────────────────────────────────────── */
.ni-related-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.ni-related-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.ni-related-section .section-title h2 {
  text-wrap: balance;
}

/* ── Last Updated Stamp ──────────────────────────────────────── */
.ni-last-updated {
  text-align: center;
  padding: var(--space-6) 0;
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  border-top: 1px solid var(--color-border);
}

/* ── Float Animation Keyframes ───────────────────────────────── */
@keyframes ni-float {
  0%, 100% { transform: translateY(0) rotate(0deg); }
  50% { transform: translateY(-18px) rotate(2deg); }
}

/* ── Responsive ──────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .ni-expert-grid {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .ni-expert-grid .ni-stat-tower {
    order: -1;
    max-width: 340px;
    margin: 0 auto;
  }
  .ni-breakdown-asym {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .ni-process-timeline {
    grid-template-columns: repeat(3, 1fr);
  }
  .ni-process-timeline::before {
    display: none;
  }
  .ni-testimonial-grid {
    grid-template-columns: 1fr;
    max-width: 560px;
    margin: 0 auto;
  }
  .ni-comparison-header,
  .ni-comparison-row {
    grid-template-columns: 1.5fr 1fr 1fr;
  }
  .ni-comparison-header span,
  .ni-comparison-row span {
    padding: var(--space-3) var(--space-4);
    font-size: var(--font-size-xs);
  }
}
@media (max-width: 768px) {
  .hero--new-install {
    min-height: 70vh;
    padding: var(--space-12) 0 var(--space-10);
  }
  .ni-bento-grid {
    grid-template-columns: 1fr;
  }
  .ni-material-grid {
    grid-template-columns: 1fr;
  }
  .ni-process-timeline {
    grid-template-columns: repeat(2, 1fr);
    max-width: 400px;
    margin: 0 auto;
  }
  .ni-comparison-header,
  .ni-comparison-row {
    grid-template-columns: 1fr;
  }
  .ni-comparison-header span:first-child {
    display: none;
  }
  .ni-comparison-row span:first-child {
    font-size: var(--font-size-sm);
    background: rgba(var(--color-primary-rgb), 0.04);
    border-bottom: none;
    padding-bottom: 0;
  }
  .ni-comparison-row span:nth-child(2),
  .ni-comparison-row span:last-child {
    padding-top: var(--space-2);
    padding-left: var(--space-8);
  }
  .hero--new-install .hero-ctas {
    flex-direction: column;
  }
  .hero--new-install .hero-ctas .btn {
    width: 100%;
    text-align: center;
    justify-content: center;
  }
  .ni-final-cta .hero-ctas {
    flex-direction: column;
    align-items: center;
  }
  .ni-final-cta .hero-ctas .btn {
    width: 100%;
    max-width: 320px;
    text-align: center;
    justify-content: center;
  }
}
@media (max-width: 480px) {
  .ni-process-timeline {
    grid-template-columns: 1fr;
    max-width: 280px;
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 1 — HERO
     ═══════════════════════════════════════════════════════════════ -->
<section class="hero--new-install" style="background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252517-ip8hel-roofing-contractors-milford-1024x778.jpg');" aria-label="New roof installation service in Omaha">
  <div class="container">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <span class="breadcrumb-current">New Roof Installation</span>
    </nav>
    <span class="eyebrow-label">
      Roofing Services <span class="eyebrow-dot" aria-hidden="true"></span> Omaha, NE
    </span>
    <h1>New <span class="accent-word">Roof Installation</span> in Omaha, NE</h1>
    <p class="hero-answer">
      Crawford Roofing &amp; Gutters LLC is a licensed Nebraska roofing contractor based in Omaha, installing new roofing systems on residential and commercial properties since 1993. We engineer every new roof for Nebraska wind uplift codes, hail resistance, and energy efficiency — delivering manufacturer-backed warranties and code-compliant installations across the greater Omaha metro area.
    </p>
    <div class="hero-ctas">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> <?php echo formatPhone($phone); ?>
      </a>
      <?php else: ?>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <i data-lucide="message-square" aria-hidden="true"></i> Request a Call Back
      </a>
      <?php endif; ?>
    </div>
    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="clock" aria-hidden="true"></i> <?php echo $yearsInBusiness; ?>+ Years Experience</span>
      <span class="hero-trust-item"><i data-lucide="hammer" aria-hidden="true"></i> New Construction Specialists</span>
      <span class="hero-trust-item"><i data-lucide="star" aria-hidden="true"></i> 4.9 ★ Rated</span>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 2 — PROBLEM STATEMENT
     ═══════════════════════════════════════════════════════════════ -->
<section class="ni-problem-section" aria-label="Why new construction roofing requires expert installation">
  <div class="ni-divider-angle ni-divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none">
      <path d="M0,55 L1200,0 L1200,0 L0,0 Z" fill="var(--color-primary)"></path>
    </svg>
  </div>
  <div class="ni-floating-accent" aria-hidden="true"></div>
  <div class="container">

    <p class="ni-pullquote reveal-scale">
      <span class="accent-mark">"</span>A new roof is the single most expensive exterior system on any building. Get the installation wrong on day one — poor flashing, insufficient ventilation, misaligned decking — and you inherit a lifetime of callbacks, warranty denials, and water damage that no repair can truly fix.<span class="accent-mark">"</span>
    </p>

    <div class="ni-bento-grid">
      <div class="ni-bento-card card-tint-1 reveal-up reveal-delay-1">
        <div class="ni-bento-card__icon"><i data-lucide="layers" aria-hidden="true"></i></div>
        <h3>Structural Integration</h3>
        <p>New construction roofing must tie into framing, sheathing, and load-bearing walls as a unified system. Improper attachment to trusses or misaligned decking creates stress points that fail during Nebraska's 70+ mph wind events.</p>
      </div>
      <div class="ni-bento-card card-tint-2 reveal-up reveal-delay-2">
        <div class="ni-bento-card__icon"><i data-lucide="file-check" aria-hidden="true"></i></div>
        <h3>Code Compliance</h3>
        <p>Omaha enforces the International Building Code with Nebraska-specific wind uplift amendments. Every new roof installation requires proper ice-and-water shield placement, ventilation ratios, and fastener patterns — all inspected before occupancy.</p>
      </div>
      <div class="ni-bento-card card-tint-3 reveal-left reveal-delay-3">
        <div class="ni-bento-card__icon"><i data-lucide="shield" aria-hidden="true"></i></div>
        <h3>Warranty from Day One</h3>
        <p>Manufacturer warranties on new installations require certified installers following exact specification sheets. One skipped step — wrong nail placement, missing starter strip, incorrect overlap — and the warranty is void before the homeowner moves in.</p>
      </div>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 3 — EXPERT POSITIONING
     ═══════════════════════════════════════════════════════════════ -->
<section class="ni-expert-section" aria-label="Why choose Crawford for new roof installation">
  <div class="ni-divider-wave ni-divider-wave--top" aria-hidden="true">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none">
      <path d="M0,70 C200,15 400,55 600,28 C800,0 1000,45 1200,18 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>
  <div class="container">
    <div class="ni-expert-grid">

      <div class="ni-expert-content reveal-left">
        <span class="eyebrow-label">Why Crawford</span>
        <h2>What Makes Crawford the Right Choice for <span class="text-accent">New Roof Installation</span> in Omaha?</h2>
        <p class="answer-block">
          Crawford Roofing &amp; Gutters brings <?php echo $yearsInBusiness; ?> years of Omaha roofing experience to every new installation — residential, commercial, and mixed-use. We partner directly with builders across west Omaha, Elkhorn, and Bennington, and our crews hold manufacturer certifications that unlock enhanced warranty coverage unavailable from standard contractors.
        </p>
        <ul class="ni-diff-list">
          <li class="ni-diff-item reveal-left reveal-delay-1">
            <div class="ni-diff-icon"><i data-lucide="hard-hat" aria-hidden="true"></i></div>
            <div class="ni-diff-text">
              <h4>Builder Partnerships Across the Metro</h4>
              <p>We coordinate directly with general contractors on new construction timelines — from framing completion through final inspection — so interior trades are never waiting on roofing delays.</p>
            </div>
          </li>
          <li class="ni-diff-item reveal-left reveal-delay-2">
            <div class="ni-diff-icon"><i data-lucide="badge-check" aria-hidden="true"></i></div>
            <div class="ni-diff-text">
              <h4>Manufacturer-Certified Installers</h4>
              <p>Our crews hold certifications from major shingle and metal roofing manufacturers, allowing us to register enhanced warranty packages that cover both materials and labor for up to 50 years.</p>
            </div>
          </li>
          <li class="ni-diff-item reveal-left reveal-delay-3">
            <div class="ni-diff-icon"><i data-lucide="building-2" aria-hidden="true"></i></div>
            <div class="ni-diff-text">
              <h4>Residential and Commercial Capability</h4>
              <p>From single-family homes in Gretna subdivisions to multi-unit commercial buildings along the I-80 corridor, Crawford installs steep-slope and flat-roof systems with equal precision.</p>
            </div>
          </li>
        </ul>
      </div>

      <div class="ni-stat-tower reveal-scale">
        <span class="ni-stat-number" data-target="<?php echo $yearsInBusiness; ?>"><?php echo $yearsInBusiness; ?>+</span>
        <span class="ni-stat-label">Years Installing Roofs in Omaha</span>
        <span class="ni-stat-sub">Second-generation roofing expertise since 1993</span>
        <div class="ni-stat-badges">
          <span class="ni-stat-badge"><i data-lucide="home" aria-hidden="true"></i> Residential</span>
          <span class="ni-stat-badge"><i data-lucide="building-2" aria-hidden="true"></i> Commercial</span>
          <span class="ni-stat-badge"><i data-lucide="hammer" aria-hidden="true"></i> New Construction</span>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 4 — SERVICE BREAKDOWN
     ═══════════════════════════════════════════════════════════════ -->
<section class="ni-breakdown-section" aria-label="New roof installation materials and process">
  <div class="ni-divider-chevron ni-divider-chevron--top" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none">
      <path d="M0,0 L600,60 L1200,0 L1200,0 L0,0 Z" fill="var(--color-bg-alt)"></path>
    </svg>
  </div>
  <div class="ni-floating-accent" aria-hidden="true"></div>
  <div class="container">

    <div class="ni-breakdown-asym">
      <div class="ni-breakdown-content reveal-right">
        <span class="eyebrow-label">Roofing Systems</span>
        <h2>What Types of <span class="text-accent">New Roofing Systems</span> Does Crawford Install?</h2>
        <p class="answer-block">
          Crawford installs every major roofing system used in the Omaha metro — from impact-resistant architectural shingles on single-family homes to TPO membrane on commercial flat roofs. We match each material to the structure, local wind and hail exposure, energy goals, and budget so your new roof delivers decades of performance.
        </p>
        <div class="ni-material-grid">
          <div class="ni-material-card card-tint-1 reveal-right reveal-delay-1">
            <div class="ni-material-icon"><i data-lucide="home" aria-hidden="true"></i></div>
            <div class="ni-material-info">
              <h4>Architectural Asphalt Shingles</h4>
              <p>Class 4 impact-rated, 130+ mph wind warranty. Most popular for Omaha residential new builds. 25–50 year manufacturer coverage.</p>
            </div>
          </div>
          <div class="ni-material-card card-tint-2 reveal-right reveal-delay-2">
            <div class="ni-material-icon"><i data-lucide="zap" aria-hidden="true"></i></div>
            <div class="ni-material-info">
              <h4>Standing-Seam Metal</h4>
              <p>40–70 year lifespan, fire-resistant, energy-efficient. Growing demand on Elkhorn and Bennington custom builds.</p>
            </div>
          </div>
          <div class="ni-material-card card-tint-3 reveal-left reveal-delay-1">
            <div class="ni-material-icon"><i data-lucide="building-2" aria-hidden="true"></i></div>
            <div class="ni-material-info">
              <h4>TPO &amp; EPDM Flat Roofing</h4>
              <p>Commercial-grade single-ply membranes. Heat-welded seams, 20–30 year warranties, ideal for flat and low-slope structures.</p>
            </div>
          </div>
          <div class="ni-material-card card-tint-1 reveal-left reveal-delay-2">
            <div class="ni-material-icon"><i data-lucide="flame" aria-hidden="true"></i></div>
            <div class="ni-material-info">
              <h4>Modified Bitumen</h4>
              <p>Torch-applied or cold-adhered multi-layer system for commercial flat roofs requiring maximum puncture resistance and foot traffic durability.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="ni-breakdown-image reveal-left">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg" alt="Crawford Roofing crew installing a new roof on a residential home in Omaha" width="600" height="450" loading="lazy">
      </div>
    </div>

    <!-- Process Timeline -->
    <div class="ni-timeline-heading reveal-up">
      <span class="eyebrow-label">Installation Process</span>
      <h2>How Does Crawford's <span class="text-accent">6-Step Installation Process</span> Work?</h2>
      <p class="answer-block">
        Every new roof installation follows our proven 6-step process — from initial blueprint review through final city inspection. This sequence keeps your project on schedule, prevents costly rework, and ensures every component meets Nebraska building codes and manufacturer specifications.
      </p>
    </div>
    <div class="ni-process-timeline">
      <div class="ni-timeline-step reveal-up reveal-delay-1">
        <div class="ni-timeline-step__number">1</div>
        <h4>Consultation</h4>
        <p>Review blueprints, assess structure, and recommend materials matched to Nebraska climate and your budget.</p>
      </div>
      <div class="ni-timeline-step reveal-up reveal-delay-2">
        <div class="ni-timeline-step__number">2</div>
        <h4>Permitting</h4>
        <p>Submit permit application to Omaha Planning Department and coordinate inspection scheduling with the city.</p>
      </div>
      <div class="ni-timeline-step reveal-up reveal-delay-3">
        <div class="ni-timeline-step__number">3</div>
        <h4>Deck Prep</h4>
        <p>Inspect sheathing alignment, install ice-and-water shield at eaves and valleys, and apply synthetic underlayment.</p>
      </div>
      <div class="ni-timeline-step reveal-up reveal-delay-4">
        <div class="ni-timeline-step__number">4</div>
        <h4>Installation</h4>
        <p>Set starter strips, install field shingles or metal panels with code-compliant fastener patterns, and flash all penetrations.</p>
      </div>
      <div class="ni-timeline-step reveal-up reveal-delay-1">
        <div class="ni-timeline-step__number">5</div>
        <h4>Ridge &amp; Vent</h4>
        <p>Cap ridges, install ridge vents for attic airflow, and seal every penetration point against wind-driven rain.</p>
      </div>
      <div class="ni-timeline-step reveal-up reveal-delay-2">
        <div class="ni-timeline-step__number">6</div>
        <h4>Inspection</h4>
        <p>Conduct final walk-through, clean the jobsite, register manufacturer warranty, and pass city building inspection.</p>
      </div>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 5 — PROOF / REVIEWS
     ═══════════════════════════════════════════════════════════════ -->
<section class="ni-proof-section" aria-label="Customer testimonials about new roof installation">
  <div class="ni-divider-wave ni-divider-wave--top" aria-hidden="true">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none">
      <path d="M0,70 C300,8 600,48 900,18 C1050,3 1150,38 1200,22 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What Clients Say</span>
      <h2>What Do Omaha Homeowners Say About Crawford's <span class="text-accent" style="color:rgba(var(--color-accent-rgb),1);filter:brightness(1.7);">New Roof Installations</span>?</h2>
      <p class="answer-block">
        From new construction in Bennington to home additions in Elkhorn, Crawford clients consistently highlight our crew coordination, clean jobsites, and the peace of mind that comes with a properly installed roof backed by full manufacturer warranties.
      </p>
    </div>
    <div class="ni-testimonial-grid">
      <div class="ni-testimonial-card reveal-up reveal-delay-1">
        <div class="ni-testimonial-stars">
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
        </div>
        <blockquote>"We built a new home west of 204th and Pacific and Crawford handled the entire roof. They coordinated with our builder so framing and interior drywall never had to wait. The standing-seam metal on the front elevation looks incredible, and the install took just three days."</blockquote>
        <cite class="ni-testimonial-author">— Jason W., Bennington</cite>
      </div>
      <div class="ni-testimonial-card reveal-up reveal-delay-2">
        <div class="ni-testimonial-stars">
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
        </div>
        <blockquote>"Crawford installed the roof on our two-story addition in Elkhorn. Tying the new roofline into our existing 18-year-old shingles was the part I was most nervous about. You cannot tell where the old roof ends and the new one begins — the color match is seamless."</blockquote>
        <cite class="ni-testimonial-author">— Stephanie R., Elkhorn</cite>
      </div>
      <div class="ni-testimonial-card reveal-up reveal-delay-3">
        <div class="ni-testimonial-stars">
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
        </div>
        <blockquote>"Our commercial warehouse near I-80 and L Street needed a full TPO flat-roof system. Crawford's crew finished the 12,000-square-foot install in under a week with zero disruption to our warehouse operations. The 20-year NDL warranty sealed the deal."</blockquote>
        <cite class="ni-testimonial-author">— Mark T., La Vista</cite>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 6 — COMPARISON
     ═══════════════════════════════════════════════════════════════ -->
<section class="ni-comparison-section" aria-label="New installation vs replacement comparison">
  <div class="ni-divider-angle ni-divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none">
      <path d="M0,0 L1200,55 L1200,0 L0,0 Z" fill="var(--color-primary)"></path>
    </svg>
  </div>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Know the Difference</span>
      <h2>What Are the Key Differences Between <span class="text-accent">New Installation and Replacement</span>?</h2>
      <p class="answer-block">
        New roof installation on fresh construction and roof replacement on an existing home are fundamentally different projects. Understanding these differences helps Omaha homeowners set accurate budgets, timelines, and expectations before the first nail is driven.
      </p>
    </div>
    <div class="ni-comparison-table reveal-up reveal-delay-1">
      <div class="ni-comparison-header">
        <span>Factor</span>
        <span>Roof Replacement</span>
        <span>New Installation</span>
      </div>
      <div class="ni-comparison-row">
        <span>Tear-Off Required</span>
        <span><i data-lucide="check" class="ni-check-yes" aria-hidden="true"></i> Yes — old layers removed</span>
        <span><i data-lucide="x" class="ni-check-no" aria-hidden="true"></i> No — clean decking</span>
      </div>
      <div class="ni-comparison-row">
        <span>Decking Inspection</span>
        <span>Assessed during tear-off</span>
        <span>Verified before install begins</span>
      </div>
      <div class="ni-comparison-row">
        <span>Permit Type</span>
        <span>Re-roofing permit</span>
        <span>Full building permit</span>
      </div>
      <div class="ni-comparison-row">
        <span>Timeline</span>
        <span>1–3 days for most homes</span>
        <span>2–5 days, coordinated with builder</span>
      </div>
      <div class="ni-comparison-row">
        <span>Cost Range (Residential)</span>
        <span>$7,000 – $15,000</span>
        <span>$8,500 – $18,000+</span>
      </div>
      <div class="ni-comparison-row">
        <span>Builder Coordination</span>
        <span><i data-lucide="x" class="ni-check-no" aria-hidden="true"></i> Not typically needed</span>
        <span><i data-lucide="check" class="ni-check-yes" aria-hidden="true"></i> Required for scheduling</span>
      </div>
      <div class="ni-comparison-row">
        <span>Warranty Coverage</span>
        <span>Material + workmanship</span>
        <span>Enhanced manufacturer + workmanship</span>
      </div>
      <div class="ni-comparison-row">
        <span>City Inspection</span>
        <span>Sometimes required</span>
        <span>Always required for CO</span>
      </div>
    </div>
    <p class="ni-comparison-footer">Crawford handles both new installations and replacements — <a href="/services/roof-replacement/" style="color:var(--color-accent);font-weight:600;">learn about our roof replacement service</a>.</p>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 7 — FAQ
     ═══════════════════════════════════════════════════════════════ -->
<section class="ni-faq-section" aria-label="Frequently asked questions about new roof installation in Omaha">
  <div class="ni-floating-accent" aria-hidden="true"></div>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">FAQ</span>
      <h2>What Do Omaha Homeowners Ask About <span class="text-accent">New Roof Installation</span>?</h2>
      <p class="answer-block">
        Whether you are building a new home in west Omaha or adding square footage to your Elkhorn property, these are the questions our team answers most often. If you are looking for new roof installation near me in Omaha, this section covers cost, timeline, materials, and builder coordination.
      </p>
    </div>
    <div class="ni-faq-list">
      <?php foreach ($faqs as $i => $faq): ?>
      <details class="ni-faq-item reveal-up<?php echo ($i < 4) ? ' reveal-delay-' . ($i + 1) : ''; ?>">
        <summary><?php echo htmlspecialchars($faq['question']); ?></summary>
        <div class="ni-faq-answer">
          <p><?php echo htmlspecialchars($faq['answer']); ?></p>
        </div>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     RELATED SERVICES
     ═══════════════════════════════════════════════════════════════ -->
<section class="ni-related-section" aria-label="Related roofing services">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">More Services</span>
      <h2>Other Services You May Need</h2>
    </div>
    <div class="services-grid" style="grid-template-columns: repeat(3, 1fr);">

      <article class="service-card-with-image card-tint-1 reveal-up reveal-delay-1">
        <div class="service-card__image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg" alt="Complete roof replacement by Crawford Roofing in Omaha, NE" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="home" aria-hidden="true"></i></div>
          <h3>Roof Replacement</h3>
          <p class="service-card__desc">Full tear-off and re-roof with materials rated for Nebraska hail and wind.</p>
          <ul>
            <li>25–50 year shingle warranties</li>
            <li>Complete decking inspection</li>
            <li>Insurance-coordinated installs</li>
          </ul>
          <a href="/services/roof-replacement/" class="service-card__cta">Learn more</a>
        </div>
      </article>

      <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
        <div class="service-card__image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg" alt="Professional roof inspection by Crawford Roofing in Omaha" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="search" aria-hidden="true"></i></div>
          <h3>Roof Inspection</h3>
          <p class="service-card__desc">Thorough 12-point inspections with photo-documented reports for insurance or peace of mind.</p>
          <ul>
            <li>Free post-storm assessments</li>
            <li>Insurance-ready documentation</li>
            <li>Drone-assisted for steep roofs</li>
          </ul>
          <a href="/services/roof-inspection/" class="service-card__cta">Learn more</a>
        </div>
      </article>

      <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
        <div class="service-card__image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg" alt="Gutter installation by Crawford Roofing in Omaha, NE" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="filter" aria-hidden="true"></i></div>
          <h3>Gutter Installation</h3>
          <p class="service-card__desc">New seamless gutter systems sized and pitched for Omaha rainfall volumes.</p>
          <ul>
            <li>5-inch and 6-inch seamless</li>
            <li>Matched to roof drainage plan</li>
            <li>Leaf guard options available</li>
          </ul>
          <a href="/services/gutter-installation/" class="service-card__cta">Learn more</a>
        </div>
      </article>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 8 — FINAL CTA
     ═══════════════════════════════════════════════════════════════ -->
<section class="ni-final-cta" aria-label="Get a free estimate for new roof installation in Omaha">
  <div class="ni-divider-angle ni-divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none">
      <path d="M0,55 L1200,0 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>
  <div class="container">
    <h2 class="reveal-up">Ready to Start Your <span class="text-accent" style="color:rgba(var(--color-accent-rgb),1);filter:brightness(1.7);">New Roof Installation</span> in Omaha?</h2>
    <p class="answer-block reveal-up reveal-delay-1">
      Crawford Roofing &amp; Gutters installs new roofing systems on homes and commercial buildings across the Omaha metro — from west Omaha and Aksarben to Elkhorn, Bennington, Gretna, La Vista, and Papillion. Get a free estimate with material recommendations tailored to your project.
    </p>
    <div class="hero-ctas reveal-up reveal-delay-2">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> <?php echo formatPhone($phone); ?>
      </a>
      <?php else: ?>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <i data-lucide="message-square" aria-hidden="true"></i> Request a Call Back
      </a>
      <?php endif; ?>
    </div>
  </div>
</section>


<!-- Last Updated -->
<div class="ni-last-updated">
  Last Updated: <?php echo date('F Y'); ?>
</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
