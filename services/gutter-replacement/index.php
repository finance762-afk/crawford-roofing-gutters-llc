<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ───────────────────────────────────────────────
$pageTitle       = 'Gutter Replacement Omaha NE | New Gutter Systems | Crawford Roofing & Gutters LLC';
$pageDescription = 'Replace old or damaged gutters in Omaha, NE. Crawford Roofing installs seamless aluminum, copper, and steel gutter systems for homes and businesses. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/gutter-replacement/';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252049-ez0nhr-IMG_096815F71F3A-1.jpeg';
$currentPage     = 'services';
$heroImagePreload = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252049-ez0nhr-IMG_096815F71F3A-1.jpeg';
$cssVersion      = '3';

// ── FAQ Data ─────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How much does gutter replacement cost in Omaha?',
        'answer'   => 'Gutter replacement in Omaha typically costs between $1,800 and $6,000 for a standard residential home. The final price depends on linear footage, material choice, number of downspouts, and whether fascia board repair is needed. Aluminum seamless runs $8 to $15 per linear foot installed, while copper ranges from $25 to $40. We provide free on-site estimates with detailed line-item breakdowns.',
    ],
    [
        'question' => 'How long do new gutters last in Nebraska weather?',
        'answer'   => 'Seamless aluminum gutters typically last 20 to 30 years in the Omaha area when properly maintained. Steel gutters can reach 25 to 35 years, and copper systems often exceed 50 years. Nebraska\'s freeze-thaw cycles, hail, and intense spring storms are the primary factors that affect lifespan — which is why material thickness and installation quality matter more here than in milder climates.',
    ],
    [
        'question' => 'When is it time to replace gutters instead of repairing them?',
        'answer'   => 'Replace rather than repair when your gutters show rust holes, multiple seam separations, persistent sagging that returns after rehanging, or visible warping along more than 25 percent of the total run. If your gutters are over 20 years old and you are calling for repairs more than once a year, replacement delivers better long-term value than patching a failing system.',
    ],
    [
        'question' => 'How long does a full gutter replacement take?',
        'answer'   => 'Most residential gutter replacements in Omaha take one day. Our crew removes the old system in the morning, inspects and repairs fascia boards, then fabricates and installs the new seamless gutters the same afternoon. Two-story homes or properties with complex rooflines and multiple valleys may extend to a day and a half.',
    ],
    [
        'question' => 'What gutter material is best for homes in Omaha?',
        'answer'   => 'Seamless aluminum is the most popular choice for Omaha homes because it handles freeze-thaw cycles without cracking, resists rust, and costs less than steel or copper. Steel gutters work well for commercial buildings or homes under heavy tree canopy where impact resistance matters. Copper is reserved for historic homes in neighborhoods like Dundee or Gold Coast where aesthetics and maximum longevity justify the higher investment.',
    ],
    [
        'question' => 'Does Crawford Roofing match gutter color to my house?',
        'answer'   => 'Yes. We carry over 30 factory-baked enamel colors for aluminum gutters, and we bring color samples to every estimate appointment so you can hold them against your fascia, soffit, and siding. The factory finish resists peeling and fading for 15 to 20 years — far longer than field-painted gutter systems.',
    ],
    [
        'question' => 'Will new gutters help with basement moisture in Omaha?',
        'answer'   => 'Absolutely. Omaha sits on clay-heavy Missouri River basin soil that holds water against foundations. Failing gutters dump concentrated roof runoff directly at the foundation wall, increasing hydrostatic pressure and causing seepage. New properly sloped gutters with downspouts extended four or more feet from the house redirect that water away — often eliminating basement moisture issues entirely.',
    ],
    [
        'question' => 'Can you replace gutters without replacing the roof?',
        'answer'   => 'Yes. Gutter replacement is an independent project from roofing. We remove the old gutter system, inspect the fascia and drip edge, make any needed repairs, and install new gutters without disturbing shingles or roofing materials. If we do notice roof damage during the gutter replacement, we document it and let you know — but the gutter project proceeds on its own.',
    ],
];

// ── Schema ───────────────────────────────────────────────────
$currentService = null;
foreach ($services as $s) {
    if ($s['slug'] === 'gutter-replacement') {
        $currentService = $s;
        break;
    }
}
$serviceSchema    = generateServiceSchema($currentService, $siteUrl, $siteName, $address);
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',               'url' => $siteUrl . '/'],
    ['name' => 'Services',           'url' => $siteUrl . '/services/'],
    ['name' => 'Gutter Replacement', 'url' => $siteUrl . '/services/gutter-replacement/'],
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
   Gutter Replacement — Page-Specific Styles
   Premium Tier — Editorial 8-Section Layout
   Crawford Roofing & Gutters LLC
   ═══════════════════════════════════════════════════════════════ */

/* ── 1. HERO ─────────────────────────────────────────────────── */
.hero--gutter-replacement {
  position: relative;
  min-height: 78vh;
  display: flex;
  align-items: center;
  background-size: cover;
  background-position: center 35%;
  background-repeat: no-repeat;
  overflow: hidden;
  padding: var(--space-16) 0 var(--space-12);
}
.hero--gutter-replacement::before {
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
.hero--gutter-replacement::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  opacity: 0.14;
  z-index: 1;
  pointer-events: none;
}
.hero--gutter-replacement .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.hero--gutter-replacement .breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
  color: rgba(255, 255, 255, 0.6);
}
.hero--gutter-replacement .breadcrumb a {
  color: rgba(255, 255, 255, 0.6);
  transition: color var(--transition-fast);
}
.hero--gutter-replacement .breadcrumb a:hover {
  color: rgba(255, 255, 255, 0.9);
}
.hero--gutter-replacement .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.35);
  font-size: var(--font-size-xs);
}
.hero--gutter-replacement .eyebrow-label {
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
.hero--gutter-replacement .eyebrow-label .eyebrow-dot {
  width: 5px;
  height: 5px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.hero--gutter-replacement h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 3.75rem);
  line-height: 1.1;
  margin-bottom: var(--space-6);
  text-wrap: balance;
  max-width: 20ch;
}
.hero--gutter-replacement h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.7);
}
.hero--gutter-replacement .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 620px;
  margin-bottom: var(--space-8);
}
.hero--gutter-replacement .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-10);
}
.hero--gutter-replacement .hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  align-items: center;
}
.hero--gutter-replacement .hero-trust-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.75);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.hero--gutter-replacement .hero-trust-item i,
.hero--gutter-replacement .hero-trust-item svg {
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

/* ── 2. PROBLEM STATEMENT ────────────────────────────────────── */
.gr-problem-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.gr-problem-section .floating-accent {
  position: absolute;
  width: 300px;
  height: 300px;
  border-radius: 35% 65% 55% 45% / 50% 35% 65% 50%;
  background: rgba(var(--color-accent-rgb), 0.04);
  pointer-events: none;
  z-index: 0;
  top: -50px;
  right: -100px;
  animation: gr-float 13s ease-in-out infinite;
}
.gr-pullquote {
  position: relative;
  z-index: 1;
  font-family: var(--font-accent);
  font-size: clamp(1.3rem, 2.4vw, 1.8rem);
  line-height: 1.55;
  color: var(--color-primary);
  font-style: italic;
  max-width: 52ch;
  margin: 0 auto var(--space-12);
  text-align: center;
  padding: var(--space-8) var(--space-6);
  border-left: 4px solid rgba(var(--color-accent-rgb), 0.35);
  border-right: 4px solid rgba(var(--color-accent-rgb), 0.35);
}
.gr-pullquote .accent-mark {
  color: rgba(var(--color-accent-rgb), 1);
  font-weight: 700;
  font-style: normal;
}
.gr-signs-grid {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-6);
  max-width: 920px;
  margin: 0 auto;
}
.gr-sign-card {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.gr-sign-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.gr-sign-card__icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.1);
  color: var(--color-accent);
}
.gr-sign-card__icon i,
.gr-sign-card__icon svg {
  width: 22px;
  height: 22px;
}
.gr-sign-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin: 0;
  line-height: 1.3;
}
.gr-sign-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.65;
  margin: 0;
}

/* ── 3. EXPERT POSITIONING ───────────────────────────────────── */
.gr-expert-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.gr-expert-grid {
  display: grid;
  grid-template-columns: 1fr 1.6fr;
  gap: var(--space-12);
  align-items: center;
}
.gr-stat-block {
  text-align: center;
  padding: var(--space-10) var(--space-6);
  background: var(--color-primary);
  border-radius: var(--radius-xl);
  color: var(--color-white);
  position: relative;
  overflow: hidden;
}
.gr-stat-block::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(145deg, rgba(var(--color-accent-rgb), 0.18) 0%, transparent 55%);
  pointer-events: none;
}
.gr-stat-number {
  font-family: var(--font-heading);
  font-size: clamp(3.5rem, 8vw, 5.5rem);
  font-weight: 900;
  line-height: 1;
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.8);
  position: relative;
  z-index: 1;
}
.gr-stat-label {
  font-family: var(--font-accent);
  font-size: var(--font-size-lg);
  color: rgba(255, 255, 255, 0.8);
  margin-top: var(--space-2);
  position: relative;
  z-index: 1;
}
.gr-expert-content h2 {
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.gr-expert-content .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  margin-bottom: var(--space-8);
  max-width: var(--content-width);
}
.gr-diff-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
}
.gr-diff-item {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.gr-diff-icon {
  flex-shrink: 0;
  width: 40px;
  height: 40px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.gr-diff-icon i,
.gr-diff-icon svg {
  width: 20px;
  height: 20px;
}
.gr-diff-text h4 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0 0 var(--space-1) 0;
}
.gr-diff-text p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  margin: 0;
  line-height: 1.6;
}

/* ── 4. SERVICE BREAKDOWN — Materials + Timeline ─────────────── */
.gr-breakdown-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.gr-breakdown-section .floating-accent {
  position: absolute;
  width: 260px;
  height: 260px;
  border-radius: 30% 70% 50% 50% / 55% 45% 55% 45%;
  background: rgba(var(--color-primary-rgb), 0.04);
  pointer-events: none;
  z-index: 0;
  bottom: -70px;
  left: -90px;
  animation: gr-float 16s ease-in-out infinite reverse;
}
.gr-breakdown-asym {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1.15fr 1fr;
  gap: var(--space-12);
  align-items: start;
  margin-bottom: var(--space-12);
}
.gr-breakdown-image {
  border-radius: var(--radius-lg);
  overflow: hidden;
  position: relative;
}
.gr-breakdown-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.gr-breakdown-image:hover img {
  transform: scale(1.03);
}
.gr-breakdown-image::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: var(--radius-lg);
  box-shadow: inset 0 0 0 1px rgba(var(--color-primary-rgb), 0.08);
  pointer-events: none;
}
.gr-breakdown-content h2 {
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.gr-breakdown-content .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  margin-bottom: var(--space-8);
}

/* Materials Comparison Table */
.gr-materials-table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  border-radius: var(--radius-md);
  overflow: hidden;
  font-size: var(--font-size-sm);
  margin-bottom: var(--space-4);
}
.gr-materials-table thead th {
  background: var(--color-primary);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-weight: 700;
  padding: var(--space-4) var(--space-4);
  text-align: left;
  font-size: var(--font-size-xs);
  text-transform: uppercase;
  letter-spacing: 0.06em;
}
.gr-materials-table tbody td {
  padding: var(--space-3) var(--space-4);
  border-bottom: 1px solid var(--color-border);
  color: var(--color-text);
  line-height: 1.5;
}
.gr-materials-table tbody tr:nth-child(even) {
  background: rgba(var(--color-primary-rgb), 0.03);
}
.gr-materials-table tbody tr:last-child td {
  border-bottom: none;
}
.gr-materials-table tbody tr {
  transition: background var(--transition-fast);
}
.gr-materials-table tbody tr:hover {
  background: rgba(var(--color-accent-rgb), 0.05);
}

/* Process Timeline */
.gr-timeline-heading {
  text-align: center;
  margin-bottom: var(--space-10);
  position: relative;
  z-index: 1;
}
.gr-timeline-heading h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.gr-timeline-heading .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: var(--content-width);
  margin: 0 auto;
}
.gr-process-timeline {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
}
.gr-process-timeline::before {
  content: '';
  position: absolute;
  top: 40px;
  left: 12.5%;
  right: 12.5%;
  height: 2px;
  background: linear-gradient(90deg, rgba(var(--color-accent-rgb), 0.35), rgba(var(--color-accent-rgb), 0.1));
  z-index: 0;
}
.gr-timeline-step {
  text-align: center;
  position: relative;
  z-index: 1;
}
.gr-timeline-step__number {
  width: 56px;
  height: 56px;
  margin: 0 auto var(--space-4);
  border-radius: var(--radius-full);
  background: var(--color-primary);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 800;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: var(--shadow-md);
  position: relative;
}
.gr-timeline-step__number::after {
  content: '';
  position: absolute;
  inset: -4px;
  border-radius: var(--radius-full);
  border: 2px solid rgba(var(--color-accent-rgb), 0.25);
}
.gr-timeline-step h4 {
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  color: var(--color-primary);
  margin: 0 0 var(--space-2);
  text-transform: uppercase;
  letter-spacing: 0.03em;
}
.gr-timeline-step p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  margin: 0;
}

/* ── 5. PROOF / REVIEWS ──────────────────────────────────────── */
.gr-proof-section {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.gr-proof-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(160deg, rgba(var(--color-accent-rgb), 0.14) 0%, transparent 50%);
  pointer-events: none;
}
.gr-proof-section .container {
  position: relative;
  z-index: 1;
}
.gr-proof-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
}
.gr-proof-section .section-title .eyebrow-label {
  color: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.gr-proof-section .section-title h2 {
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.gr-proof-section .section-title .answer-block {
  color: rgba(255, 255, 255, 0.75);
  line-height: 1.7;
  max-width: var(--content-width);
  margin: 0 auto;
}
.gr-testimonial-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.gr-testimonial-card {
  background: rgba(255, 255, 255, 0.06);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
  backdrop-filter: blur(4px);
  transition: transform var(--transition-base), background var(--transition-base);
}
.gr-testimonial-card:hover {
  transform: translateY(-3px);
  background: rgba(255, 255, 255, 0.09);
}
.gr-testimonial-stars {
  display: flex;
  gap: var(--space-1);
  margin-bottom: var(--space-4);
  color: var(--color-star);
}
.gr-testimonial-stars i,
.gr-testimonial-stars svg {
  width: 16px;
  height: 16px;
}
.gr-testimonial-card blockquote {
  font-size: var(--font-size-base);
  color: rgba(255, 255, 255, 0.88);
  line-height: 1.7;
  margin: 0 0 var(--space-6);
  font-style: italic;
}
.gr-testimonial-author {
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: rgba(255, 255, 255, 0.65);
}

/* ── 6. COMPARISON — Repair vs Replacement ───────────────────── */
.gr-comparison-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.gr-comparison-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
}
.gr-comparison-section .section-title h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.gr-comparison-section .section-title .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: var(--content-width);
  margin: 0 auto;
}
.gr-comparison-split {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-6);
  max-width: 920px;
  margin: 0 auto var(--space-10);
}
.gr-comparison-col {
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
}
.gr-comparison-col--repair {
  background: var(--color-card-tint-neutral);
  border: 1px solid var(--color-border);
}
.gr-comparison-col--replace {
  background: var(--color-card-tint-3);
  border: 2px solid rgba(var(--color-accent-rgb), 0.2);
  box-shadow: var(--shadow-md);
}
.gr-comparison-col h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  margin: 0 0 var(--space-6);
  text-align: center;
  padding-bottom: var(--space-4);
  border-bottom: 1px solid var(--color-border);
}
.gr-comparison-col--repair h3 {
  color: var(--color-text-light);
}
.gr-comparison-col--replace h3 {
  color: var(--color-accent);
}
.gr-comparison-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.gr-comparison-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  font-size: var(--font-size-sm);
  line-height: 1.6;
  color: var(--color-text);
}
.gr-comparison-list li i,
.gr-comparison-list li svg {
  flex-shrink: 0;
  width: 18px;
  height: 18px;
  margin-top: 2px;
}
.gr-comparison-col--repair .gr-comparison-list li i,
.gr-comparison-col--repair .gr-comparison-list li svg {
  color: var(--color-warning);
}
.gr-comparison-col--replace .gr-comparison-list li i,
.gr-comparison-col--replace .gr-comparison-list li svg {
  color: var(--color-success);
}
.gr-cost-callout {
  text-align: center;
  max-width: 700px;
  margin: 0 auto;
  padding: var(--space-6) var(--space-8);
  background: var(--color-card-tint-1);
  border-radius: var(--radius-md);
  border-left: 4px solid rgba(var(--color-accent-rgb), 0.4);
}
.gr-cost-callout p {
  font-size: var(--font-size-base);
  color: var(--color-text);
  line-height: 1.65;
  margin: 0;
}
.gr-cost-callout strong {
  color: var(--color-primary);
}

/* ── 7. FAQ ──────────────────────────────────────────────────── */
.gr-faq-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.gr-faq-section .floating-accent {
  position: absolute;
  width: 240px;
  height: 240px;
  border-radius: 55% 45% 40% 60% / 50% 60% 40% 50%;
  background: rgba(var(--color-accent-rgb), 0.04);
  pointer-events: none;
  z-index: 0;
  top: 8%;
  right: -80px;
  animation: gr-float 10s ease-in-out infinite;
}
.gr-faq-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
  position: relative;
  z-index: 1;
}
.gr-faq-section .section-title h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.gr-faq-section .section-title .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: var(--content-width);
  margin: 0 auto;
}
.gr-faq-list {
  position: relative;
  z-index: 1;
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.gr-faq-item {
  border: 1px solid var(--color-border);
  border-radius: var(--radius-md);
  overflow: hidden;
  transition: box-shadow var(--transition-base);
}
.gr-faq-item:hover {
  box-shadow: var(--shadow-sm);
}
.gr-faq-item summary {
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
.gr-faq-item summary::-webkit-details-marker { display: none; }
.gr-faq-item summary::after {
  content: '+';
  font-size: var(--font-size-xl);
  font-weight: 300;
  color: var(--color-accent);
  transition: transform var(--transition-base);
  flex-shrink: 0;
  margin-left: var(--space-4);
}
.gr-faq-item[open] summary::after {
  transform: rotate(45deg);
}
.gr-faq-item summary:hover {
  background: rgba(var(--color-primary-rgb), 0.03);
}
.gr-faq-answer {
  padding: 0 var(--space-6) var(--space-6);
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.75;
}

/* ── 8. FINAL CTA ────────────────────────────────────────────── */
.gr-final-cta {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  text-align: center;
  overflow: hidden;
}
.gr-final-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(var(--color-accent-rgb), 0.2) 0%, transparent 60%);
  pointer-events: none;
}
.gr-final-cta .container {
  position: relative;
  z-index: 1;
}
.gr-final-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.gr-final-cta .answer-block {
  color: rgba(255, 255, 255, 0.82);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  max-width: 600px;
  margin: 0 auto var(--space-8);
}
.gr-final-cta .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: var(--space-4);
}

/* ── Related Services ────────────────────────────────────────── */
.gr-related-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.gr-related-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.gr-related-section .section-title h2 {
  text-wrap: balance;
}

/* ── Last Updated Stamp ──────────────────────────────────────── */
.gr-last-updated {
  text-align: center;
  padding: var(--space-6) 0;
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  border-top: 1px solid var(--color-border);
}

/* ── Float Animation Keyframes ───────────────────────────────── */
@keyframes gr-float {
  0%, 100% { transform: translateY(0) rotate(0deg); }
  50% { transform: translateY(-20px) rotate(3deg); }
}

/* ── Responsive ──────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .gr-expert-grid {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .gr-stat-block {
    max-width: 320px;
    margin: 0 auto;
    order: -1;
  }
  .gr-breakdown-asym {
    grid-template-columns: 1fr;
  }
  .gr-process-timeline {
    grid-template-columns: repeat(2, 1fr);
  }
  .gr-process-timeline::before {
    display: none;
  }
  .gr-testimonial-grid {
    grid-template-columns: 1fr;
    max-width: 560px;
    margin: 0 auto;
  }
  .gr-comparison-split {
    grid-template-columns: 1fr;
  }
}
@media (max-width: 768px) {
  .hero--gutter-replacement {
    min-height: 65vh;
    padding: var(--space-12) 0 var(--space-10);
  }
  .gr-signs-grid {
    grid-template-columns: 1fr;
  }
  .gr-process-timeline {
    grid-template-columns: 1fr;
    max-width: 340px;
    margin: 0 auto;
  }
  .gr-materials-table {
    font-size: var(--font-size-xs);
  }
  .gr-materials-table thead th,
  .gr-materials-table tbody td {
    padding: var(--space-2) var(--space-3);
  }
  .hero--gutter-replacement .hero-ctas {
    flex-direction: column;
  }
  .hero--gutter-replacement .hero-ctas .btn {
    width: 100%;
    text-align: center;
    justify-content: center;
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 1 — HERO
     ═══════════════════════════════════════════════════════════════ -->
<section class="hero--gutter-replacement" style="background-image: url('<?php echo htmlspecialchars($heroImagePreload); ?>');" aria-label="Gutter replacement service in Omaha">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">Gutter Replacement</span>
    </nav>
    <span class="eyebrow-label">
      Gutter Services <span class="eyebrow-dot" aria-hidden="true"></span> Omaha, NE
    </span>
    <h1><span class="accent-word">Gutter Replacement</span> in Omaha, NE</h1>
    <p class="hero-answer">
      Crawford Roofing &amp; Gutters LLC is a licensed Nebraska contractor based in Omaha, serving the metro area since 1993. We replace failing, rusted, and storm-damaged gutter systems with seamless aluminum, steel, and copper gutters custom-fabricated on-site to fit your roofline and handle Nebraska's heaviest downpours.
    </p>
    <div class="hero-ctas">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> <?php echo formatPhone($phone); ?>
      </a>
      <?php else: ?>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <i data-lucide="message-square" aria-hidden="true"></i> Contact Us
      </a>
      <?php endif; ?>
    </div>
    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="clock" aria-hidden="true"></i> <?php echo $yearsInBusiness; ?>+ Years Experience</span>
      <span class="hero-trust-item"><i data-lucide="badge-check" aria-hidden="true"></i> Free On-Site Estimates</span>
      <span class="hero-trust-item"><i data-lucide="star" aria-hidden="true"></i> 4.9 ★ Rated</span>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 2 — PROBLEM STATEMENT: Signs You Need Replacement
     ═══════════════════════════════════════════════════════════════ -->
<section class="gr-problem-section" aria-label="Signs you need gutter replacement">
  <div class="gr-divider-angle gr-divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none">
      <path d="M0,55 L1200,0 L1200,0 L0,0 Z" fill="var(--color-primary)"></path>
    </svg>
  </div>
  <div class="floating-accent" aria-hidden="true"></div>
  <div class="container">

    <p class="gr-pullquote reveal-scale">
      <span class="accent-mark">"</span>Patching gutters that are past their lifespan costs more per year than replacing them once. When rust holes outnumber solid sections, the math stops making sense.<span class="accent-mark">"</span>
    </p>

    <div class="gr-signs-grid">
      <div class="gr-sign-card card-tint-1 reveal-up reveal-delay-1">
        <div class="gr-sign-card__icon"><i data-lucide="alert-triangle" aria-hidden="true"></i></div>
        <h3>Visible Rust &amp; Holes</h3>
        <p>Orange streaks running down your fascia or pinholes in the gutter trough mean the metal has corroded through. In Omaha's humidity and salt-treated winter air, rust spreads fast once it starts. Spot repairs only delay the inevitable by one or two seasons.</p>
      </div>
      <div class="gr-sign-card card-tint-2 reveal-up reveal-delay-2">
        <div class="gr-sign-card__icon"><i data-lucide="repeat" aria-hidden="true"></i></div>
        <h3>Repeated Repair Calls</h3>
        <p>If you have called a gutter contractor more than once in the same year for leaks or sagging, the system has aged beyond economical repair. Each fix addresses a symptom while the underlying deterioration continues unchecked.</p>
      </div>
      <div class="gr-sign-card card-tint-3 reveal-left reveal-delay-1">
        <div class="gr-sign-card__icon"><i data-lucide="calendar" aria-hidden="true"></i></div>
        <h3>Age Beyond 20 Years</h3>
        <p>Standard sectional gutters installed on Omaha homes during the 1990s and early 2000s have reached or exceeded their expected service life. Seams loosen, hangers pull free from aging fascia, and the metal thins from decades of Nebraska freeze-thaw cycling.</p>
      </div>
      <div class="gr-sign-card card-tint-1 reveal-right reveal-delay-2">
        <div class="gr-sign-card__icon"><i data-lucide="move-diagonal" aria-hidden="true"></i></div>
        <h3>Sagging &amp; Separation</h3>
        <p>Gutters pulling away from the fascia board or sagging visibly between hangers cannot maintain proper slope. Water pools in the low spots, accelerating corrosion and overflowing during heavy rain directly onto your foundation walls.</p>
      </div>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 3 — EXPERT POSITIONING
     ═══════════════════════════════════════════════════════════════ -->
<section class="gr-expert-section" aria-label="Why choose Crawford for gutter replacement">
  <div class="gr-divider-wave gr-divider-wave--top" aria-hidden="true">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none">
      <path d="M0,70 C200,10 400,60 600,25 C800,-10 1000,50 1200,20 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>
  <div class="container">
    <div class="gr-expert-grid">

      <div class="gr-stat-block reveal-scale">
        <span class="gr-stat-number" data-target="<?php echo $yearsInBusiness; ?>"><?php echo $yearsInBusiness; ?>+</span>
        <span class="gr-stat-label">Years Replacing Omaha Gutters</span>
      </div>

      <div class="gr-expert-content reveal-right">
        <span class="eyebrow-label">Why Crawford</span>
        <h2>Why Do Omaha Homeowners Trust Crawford for <span class="text-accent">Gutter Replacement</span>?</h2>
        <p class="answer-block">
          Crawford Roofing &amp; Gutters has replaced thousands of gutter systems across Douglas, Sarpy, and Pottawattamie counties since 1993. Our second-generation crew custom-fabricates seamless aluminum gutters on your property using a portable forming machine, matches your home's color from over 30 factory-baked enamel options, and routes every downspout to pull water away from your foundation.
        </p>
        <ul class="gr-diff-list">
          <li class="gr-diff-item reveal-right reveal-delay-1">
            <div class="gr-diff-icon"><i data-lucide="wrench" aria-hidden="true"></i></div>
            <div class="gr-diff-text">
              <h4>On-Site Seamless Fabrication</h4>
              <p>No pre-cut sections with leak-prone joints. We roll continuous runs at your property — measured to the inch for your specific roofline.</p>
            </div>
          </li>
          <li class="gr-diff-item reveal-right reveal-delay-2">
            <div class="gr-diff-icon"><i data-lucide="palette" aria-hidden="true"></i></div>
            <div class="gr-diff-text">
              <h4>Color Matching Expertise</h4>
              <p>We bring factory color samples on-site so you can hold them against your fascia, trim, and siding. The baked enamel finish resists fading for 15 to 20 years.</p>
            </div>
          </li>
          <li class="gr-diff-item reveal-right reveal-delay-3">
            <div class="gr-diff-icon"><i data-lucide="shield" aria-hidden="true"></i></div>
            <div class="gr-diff-text">
              <h4>Warranty-Backed Installation</h4>
              <p>Every gutter replacement includes a workmanship warranty on top of the manufacturer material warranty — covering both labor and product for your peace of mind.</p>
            </div>
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 4 — SERVICE BREAKDOWN: Materials + Process
     ═══════════════════════════════════════════════════════════════ -->
<section class="gr-breakdown-section" aria-label="Gutter replacement materials and process">
  <div class="gr-divider-angle gr-divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none">
      <path d="M0,0 L1200,55 L1200,0 L0,0 Z" fill="var(--color-bg-alt)"></path>
    </svg>
  </div>
  <div class="floating-accent" aria-hidden="true"></div>
  <div class="container">

    <div class="gr-breakdown-asym">
      <div class="gr-breakdown-content reveal-left">
        <span class="eyebrow-label">Material Options</span>
        <h2>Which Gutter Material Is Right for Your <span class="text-accent">Omaha Home</span>?</h2>
        <p class="answer-block">
          The best gutter material depends on your budget, your home's architectural style, and how long you plan to stay. Crawford installs four material types across the Omaha metro — from affordable aluminum to heirloom-grade copper. Each option handles Nebraska's freeze-thaw cycles, hail, and spring storm volumes differently.
        </p>
        <table class="gr-materials-table reveal-up">
          <thead>
            <tr>
              <th>Material</th>
              <th>Cost / LF</th>
              <th>Lifespan</th>
              <th>Best For</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Aluminum</strong></td>
              <td>$8 – $15</td>
              <td>20 – 30 yrs</td>
              <td>Most Omaha homes; rust-free, lightweight</td>
            </tr>
            <tr>
              <td><strong>Steel</strong></td>
              <td>$12 – $22</td>
              <td>25 – 35 yrs</td>
              <td>Heavy tree canopy, commercial buildings</td>
            </tr>
            <tr>
              <td><strong>Copper</strong></td>
              <td>$25 – $40</td>
              <td>50+ yrs</td>
              <td>Historic homes — Dundee, Gold Coast, Benson</td>
            </tr>
            <tr>
              <td><strong>Vinyl</strong></td>
              <td>$4 – $8</td>
              <td>10 – 15 yrs</td>
              <td>Budget rentals; cracks in NE cold (not recommended)</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="gr-breakdown-image reveal-right">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg" alt="Close-up of new seamless aluminum gutters installed on an Omaha home" width="600" height="450" loading="lazy">
      </div>
    </div>

    <!-- Process Timeline -->
    <div class="gr-timeline-heading reveal-up">
      <span class="eyebrow-label">Our Process</span>
      <h2>How Does Crawford Handle a Full <span class="text-accent">Gutter Replacement</span>?</h2>
      <p class="answer-block">
        From the initial inspection through final cleanup, our four-step process keeps your gutter replacement on schedule and transparent. Most single-story Omaha homes are completed in a single day with no hidden fees added after the signed estimate.
      </p>
    </div>
    <div class="gr-process-timeline">
      <div class="gr-timeline-step reveal-up reveal-delay-1">
        <div class="gr-timeline-step__number">1</div>
        <h4>Inspect &amp; Measure</h4>
        <p>We examine your existing gutters, measure the full roofline, assess fascia condition, and note downspout routing needs for your lot grade.</p>
      </div>
      <div class="gr-timeline-step reveal-up reveal-delay-2">
        <div class="gr-timeline-step__number">2</div>
        <h4>Detailed Estimate</h4>
        <p>You receive a line-item written quote covering removal, materials, fascia repair if needed, and installation — same day or within 24 hours.</p>
      </div>
      <div class="gr-timeline-step reveal-up reveal-delay-3">
        <div class="gr-timeline-step__number">3</div>
        <h4>Remove &amp; Install</h4>
        <p>Our crew strips the old system, repairs damaged fascia, fabricates seamless gutters on-site, and mounts everything with hidden brackets spaced every 24 inches.</p>
      </div>
      <div class="gr-timeline-step reveal-up reveal-delay-4">
        <div class="gr-timeline-step__number">4</div>
        <h4>Flow Test &amp; Cleanup</h4>
        <p>We run water through every section to verify slope and drainage, clean up all debris, and walk you through the finished work before leaving your property.</p>
      </div>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 5 — PROOF / REVIEWS
     ═══════════════════════════════════════════════════════════════ -->
<section class="gr-proof-section" aria-label="Customer testimonials for gutter replacement">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What Homeowners Say</span>
      <h2>What Do Omaha Residents Say About Crawford's <span class="text-accent" style="color:rgba(var(--color-accent-rgb),1);filter:brightness(1.7);">Gutter Replacement</span>?</h2>
      <p class="answer-block">
        Homeowners across the Omaha metro choose Crawford for gutter replacement because we show up when scheduled, complete most projects in one day, and leave properties cleaner than we found them. Here is what recent clients have shared about their experience.
      </p>
    </div>
    <div class="gr-testimonial-grid">
      <div class="gr-testimonial-card reveal-up reveal-delay-1">
        <div class="gr-testimonial-stars">
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
        </div>
        <blockquote>"Our gutters in Dundee were original to the 1948 house — rusted through in at least a dozen spots. Crawford replaced the entire system in six hours. The new seamless aluminum matches the trim perfectly, and we have had zero overflow through two heavy spring rains since."</blockquote>
        <cite class="gr-testimonial-author">— Larry G., Dundee</cite>
      </div>
      <div class="gr-testimonial-card reveal-up reveal-delay-2">
        <div class="gr-testimonial-stars">
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
        </div>
        <blockquote>"I had been paying for gutter repairs every fall and spring for three years. Crawford came out, showed me where the old sectional seams were failing, and quoted a full replacement that cost less than two more years of patching. Should have called them first."</blockquote>
        <cite class="gr-testimonial-author">— Deborah K., Aksarben</cite>
      </div>
      <div class="gr-testimonial-card reveal-up reveal-delay-3">
        <div class="gr-testimonial-stars">
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
        </div>
        <blockquote>"We needed gutters replaced on our Council Bluffs duplex before listing it. Crawford handled both units in a day and a half, replaced some rotted fascia we did not even know about, and the property looked noticeably sharper for the listing photos."</blockquote>
        <cite class="gr-testimonial-author">— Nathan P., Council Bluffs</cite>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 6 — COMPARISON: Repair vs Full Replacement
     ═══════════════════════════════════════════════════════════════ -->
<section class="gr-comparison-section" aria-label="Gutter repair versus replacement cost comparison">
  <div class="gr-divider-wave gr-divider-wave--top" aria-hidden="true">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none">
      <path d="M0,70 C200,10 400,60 600,25 C800,-10 1000,50 1200,20 L1200,0 L0,0 Z" fill="var(--color-primary)"></path>
    </svg>
  </div>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Cost Analysis</span>
      <h2>When Does Repair Make Sense and When Should You Choose <span class="text-accent">Full Replacement</span>?</h2>
      <p class="answer-block">
        Repair works when the damage is isolated to one section and the rest of the system is structurally sound. Once rust, sagging, or seam failure affects more than a quarter of the total run, full replacement delivers a lower five-year cost and eliminates recurring service calls.
      </p>
    </div>
    <div class="gr-comparison-split">
      <div class="gr-comparison-col gr-comparison-col--repair reveal-left">
        <h3>Spot Repair</h3>
        <ul class="gr-comparison-list">
          <li><i data-lucide="minus" aria-hidden="true"></i> $150 – $450 per visit — adds up fast</li>
          <li><i data-lucide="minus" aria-hidden="true"></i> Addresses one section; other areas still aging</li>
          <li><i data-lucide="minus" aria-hidden="true"></i> Seam sealant and patches last 2 – 4 years</li>
          <li><i data-lucide="minus" aria-hidden="true"></i> No warranty on patched sections in most cases</li>
          <li><i data-lucide="minus" aria-hidden="true"></i> Mismatched materials and color over time</li>
        </ul>
      </div>
      <div class="gr-comparison-col gr-comparison-col--replace reveal-right">
        <h3>Full Replacement</h3>
        <ul class="gr-comparison-list">
          <li><i data-lucide="check" aria-hidden="true"></i> $1,800 – $6,000 once — zero mid-run seams</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Entire system new — consistent slope and drainage</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Seamless aluminum lasts 20 – 30 years</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Full workmanship + manufacturer warranty</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Color-matched from 30+ factory enamel options</li>
        </ul>
      </div>
    </div>
    <div class="gr-cost-callout reveal-up">
      <p><strong>The break-even point:</strong> if you have spent more than $600 on gutter repairs in the past two years and your system is over 15 years old, replacement almost always costs less over the next decade than continued patching. We show you the math during every free estimate.</p>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 7 — FAQ
     ═══════════════════════════════════════════════════════════════ -->
<section class="gr-faq-section" aria-label="Frequently asked questions about gutter replacement in Omaha">
  <div class="floating-accent" aria-hidden="true"></div>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">FAQ</span>
      <h2>What Do Omaha Homeowners Ask About <span class="text-accent">Gutter Replacement</span>?</h2>
      <p class="answer-block">
        If you are searching for gutter replacement near me in Omaha, these are the questions we hear most from homeowners across the metro. Each answer draws on our <?php echo $yearsInBusiness; ?>+ years of local installation and replacement experience.
      </p>
    </div>
    <div class="gr-faq-list">
      <?php foreach ($faqs as $i => $faq): ?>
      <details class="gr-faq-item reveal-up<?php echo ($i < 4) ? ' reveal-delay-' . ($i + 1) : ''; ?>">
        <summary><?php echo htmlspecialchars($faq['question']); ?></summary>
        <div class="gr-faq-answer">
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
<section class="gr-related-section" aria-label="Related gutter and roofing services">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">More Services</span>
      <h2>Other Services You May Need</h2>
    </div>
    <div class="services-grid" style="grid-template-columns: repeat(3, 1fr);">

      <article class="service-card-with-image card-tint-1 reveal-up reveal-delay-1">
        <div class="service-card__image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg" alt="Gutter addition service for Omaha homes" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="ruler" aria-hidden="true"></i></div>
          <h3>Gutter Addition</h3>
          <p class="service-card__desc">Add a complete gutter system to homes that currently lack proper drainage.</p>
          <ul>
            <li>New system for unprotected homes</li>
            <li>On-site seamless fabrication</li>
            <li>Foundation protection guaranteed</li>
          </ul>
          <a href="/services/gutter-addition/" class="service-card__cta">Learn more</a>
        </div>
      </article>

      <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
        <div class="service-card__image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg" alt="Professional gutter installation in Omaha, NE" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="filter" aria-hidden="true"></i></div>
          <h3>Gutter Installation</h3>
          <p class="service-card__desc">Professional gutter installation for residential and commercial Omaha properties.</p>
          <ul>
            <li>Seamless and sectional options</li>
            <li>Handles heavy Omaha rainfall</li>
            <li>Professional slope calibration</li>
          </ul>
          <a href="/services/gutter-installation/" class="service-card__cta">Learn more</a>
        </div>
      </article>

      <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
        <div class="service-card__image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg" alt="Roof replacement service by Crawford Roofing in Omaha" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="home" aria-hidden="true"></i></div>
          <h3>Roof Replacement</h3>
          <p class="service-card__desc">Full roof replacement for Omaha homes needing a complete new roofing system.</p>
          <ul>
            <li>Architectural shingle systems</li>
            <li>Insurance claim assistance</li>
            <li>20 – 50 year material warranties</li>
          </ul>
          <a href="/services/roof-replacement/" class="service-card__cta">Learn more</a>
        </div>
      </article>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 8 — FINAL CTA
     ═══════════════════════════════════════════════════════════════ -->
<section class="gr-final-cta" aria-label="Get a free gutter replacement estimate">
  <div class="gr-divider-angle gr-divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none">
      <path d="M0,55 L1200,0 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>
  <div class="container">
    <h2 class="reveal-up">Ready to Replace Your <span class="text-accent" style="color:rgba(var(--color-accent-rgb),1);filter:brightness(1.7);">Omaha Gutters</span>?</h2>
    <p class="answer-block reveal-up reveal-delay-1">
      Crawford Roofing &amp; Gutters provides free, no-obligation gutter replacement estimates across the Omaha metro — from Dundee to Millard, Aksarben to Bellevue, Papillion to Council Bluffs. Call now or fill out the form and our team will respond within one business day.
    </p>
    <div class="hero-ctas reveal-up reveal-delay-2">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> <?php echo formatPhone($phone); ?>
      </a>
      <?php else: ?>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <i data-lucide="message-square" aria-hidden="true"></i> Contact Us
      </a>
      <?php endif; ?>
    </div>
  </div>
</section>


<!-- Last Updated -->
<div class="gr-last-updated">
  Last Updated: <?php echo date('F Y'); ?>
</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
