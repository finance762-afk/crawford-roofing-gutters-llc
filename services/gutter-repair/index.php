<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ───────────────────────────────────────────────
$pageTitle       = 'Gutter Repair Omaha NE | Fix Leaking & Damaged Gutters | Crawford Roofing & Gutters LLC';
$pageDescription = 'Expert gutter repair in Omaha, NE. Crawford Roofing fixes leaks, sagging, overflow, and storm damage on residential and commercial gutters. Fast response. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/gutter-repair/';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134251810-z2x055-IMG_95F75D69640F-1.jpeg';
$currentPage     = 'services';
$heroImagePreload = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134251810-z2x055-IMG_95F75D69640F-1.jpeg';
$cssVersion      = '3';

// ── FAQ Data ────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How much does gutter repair cost in Omaha, NE?',
        'answer'   => 'Most gutter repairs in Omaha cost between $150 and $550 depending on the damage type and linear footage involved. Sealing a leaking joint or reattaching a pulled section runs $150–$250, while replacing a full run of damaged gutter on a two-story home can reach $400–$550. Crawford Roofing & Gutters provides free on-site estimates so you see the exact cost before work begins.'
    ],
    [
        'question' => 'What are the most common signs that gutters need repair?',
        'answer'   => 'The clearest warning signs are water spilling over the gutter edge during rain, visible sagging or pulling away from the fascia, peeling paint or staining on exterior walls beneath the gutter line, pooling water near your foundation, and granule buildup from shingles collecting in the trough. Any of these signals mean your gutter system is no longer managing water correctly.'
    ],
    [
        'question' => 'Can storm-damaged gutters in Omaha be repaired or do they need full replacement?',
        'answer'   => 'It depends on the extent of the damage. Hail dents that do not breach the metal, isolated cracks at joints, and single sagging sections are all repairable. If more than 30-40 percent of the system is compromised — common after severe Omaha hailstorms — full replacement is usually more cost-effective. Crawford\'s technicians assess every foot before recommending either option.'
    ],
    [
        'question' => 'How quickly can Crawford respond to emergency gutter damage?',
        'answer'   => 'After a major storm event, Crawford Roofing & Gutters prioritizes emergency gutter repairs that pose active water intrusion risk to the structure. During peak storm season — April through August in the Omaha metro — we typically schedule emergency assessments within 24 to 48 hours of contact. Temporary stabilization can be performed same-day when water is actively entering the home.'
    ],
    [
        'question' => 'Does homeowner insurance cover gutter repair in Nebraska?',
        'answer'   => 'Most Nebraska homeowner policies cover gutter damage caused by sudden events like hail, wind, falling branches, and ice storms under dwelling coverage. They generally do not cover damage from gradual wear, neglected maintenance, or rust. Crawford Roofing documents all storm-related damage with photos and measurements formatted for insurance claims, which streamlines the adjuster review process.'
    ],
    [
        'question' => 'How does freeze-thaw cycling damage Omaha gutters?',
        'answer'   => 'Omaha sees roughly 100 to 130 freeze-thaw cycles per winter. Water trapped in gutter joints and seams expands when it freezes, cracking sealant and widening gaps. Ice weight — sometimes 8 to 12 pounds per linear foot — pulls hangers from fascia boards and bends aluminum sections out of slope. These micro-failures accumulate over two to three winters until the system visibly sags or leaks.'
    ],
    [
        'question' => 'Will gutter repair prevent basement water problems?',
        'answer'   => 'Properly functioning gutters are the first line of defense against basement moisture in Omaha. When gutters leak or overflow, water saturates the clay soil around your foundation, creating hydrostatic pressure that forces moisture through basement walls. Repairing leaking joints, reattaching sagging sections, and restoring correct slope can eliminate the root cause of many basement seepage issues.'
    ],
    [
        'question' => 'What types of gutters can Crawford repair?',
        'answer'   => 'Crawford Roofing & Gutters repairs all residential and commercial gutter types common in the Omaha metro including 5-inch and 6-inch K-style aluminum, half-round copper and aluminum, steel box gutters on older Dundee and Benson homes, and vinyl systems. We carry matching materials on our service trucks for most standard profiles so repairs are completed in a single visit.'
    ],
];

// ── Schema Generation ────────────────────────────────────────
$currentService = null;
foreach ($services as $s) {
    if ($s['slug'] === 'gutter-repair') {
        $currentService = $s;
        break;
    }
}
$serviceSchema    = generateServiceSchema($currentService, $siteUrl, $siteName, $address);
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',          'url' => $siteUrl . '/'],
    ['name' => 'Services',      'url' => $siteUrl . '/services/'],
    ['name' => 'Gutter Repair', 'url' => $siteUrl . '/services/gutter-repair/'],
], $siteUrl);
$faqSchema = generateFAQSchema($faqs);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<!-- Schema: Service -->
<script type="application/ld+json">
<?php echo $serviceSchema; ?>
</script>

<!-- Schema: Breadcrumb -->
<script type="application/ld+json">
<?php echo $breadcrumbSchema; ?>
</script>

<!-- Schema: FAQ -->
<script type="application/ld+json">
<?php echo $faqSchema; ?>
</script>

<style>
/* ═══════════════════════════════════════════════════════════
   Gutter Repair — Page-Specific Styles
   Premium Tier — Editorial 8-Section Structure
   Crawford Roofing & Gutters LLC | Omaha, NE
   ═══════════════════════════════════════════════════════════ */

/* ── 1. HERO ─────────────────────────────────────────────── */
.hero--gr {
  position: relative;
  min-height: 75vh;
  display: flex;
  align-items: center;
  background-size: cover;
  background-position: center 35%;
  background-repeat: no-repeat;
  overflow: hidden;
}
.hero--gr::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    160deg,
    rgba(var(--color-primary-rgb), 0.95) 0%,
    rgba(var(--color-primary-rgb), 0.82) 40%,
    rgba(var(--color-secondary-rgb), 0.70) 100%
  );
  z-index: 1;
}
.hero--gr::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.05'/%3E%3C/svg%3E");
  opacity: 0.10;
  z-index: 1;
  pointer-events: none;
}
.hero--gr .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.hero--gr .eyebrow-label {
  display: inline-block;
  font-family: var(--font-accent);
  font-size: var(--font-size-sm);
  font-weight: 600;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: rgba(var(--color-accent-rgb), 0.85);
  filter: brightness(2.2);
  margin-bottom: var(--space-4);
  padding: var(--space-2) var(--space-4);
  border: 1px solid rgba(255, 255, 255, 0.15);
  border-radius: var(--radius-full);
  backdrop-filter: blur(4px);
  background: rgba(255, 255, 255, 0.06);
}
.hero--gr h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 4rem);
  margin-bottom: var(--space-6);
  max-width: 16ch;
  line-height: 1.05;
  text-wrap: balance;
}
.hero--gr h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.6);
}
.hero--gr .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 600px;
  margin-bottom: var(--space-8);
}
.hero--gr .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-10);
}
.hero--gr .trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  padding-top: var(--space-6);
  border-top: 1px solid rgba(255, 255, 255, 0.12);
}
.hero--gr .trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.78);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.hero--gr .trust-item i,
.hero--gr .trust-item svg {
  width: 18px;
  height: 18px;
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.8);
}
.hero--gr .breadcrumb {
  display: flex;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
}
.hero--gr .breadcrumb a {
  color: rgba(255, 255, 255, 0.65);
  transition: color var(--transition-fast);
}
.hero--gr .breadcrumb a:hover { color: var(--color-white); }
.hero--gr .breadcrumb-sep { color: rgba(255, 255, 255, 0.35); }
.hero--gr .breadcrumb-current { color: rgba(255, 255, 255, 0.9); font-weight: 600; }

/* Geometric accent — hexagonal morph */
.hero--gr .hero-geo {
  position: absolute;
  right: -4%;
  top: 12%;
  width: 380px;
  height: 380px;
  border: 2px solid rgba(255, 255, 255, 0.05);
  border-radius: 50% 30% 50% 30% / 30% 50% 30% 50%;
  z-index: 1;
  animation: gr-geo-drift 20s ease-in-out infinite;
}
.hero--gr .hero-geo::after {
  content: '';
  position: absolute;
  inset: 40px;
  border: 1px solid rgba(255, 255, 255, 0.04);
  border-radius: 30% 50% 30% 50% / 50% 30% 50% 30%;
  animation: gr-geo-drift 20s ease-in-out infinite reverse;
}
@keyframes gr-geo-drift {
  0%, 100% { transform: rotate(0deg) scale(1); }
  50% { transform: rotate(15deg) scale(1.05); }
}

/* ── Divider: Curve ──────────────────────────────────────── */
.divider-curve {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
  pointer-events: none;
}
.divider-curve--top { top: -1px; }
.divider-curve--bottom { bottom: -1px; }
.divider-curve svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 56px;
}

/* ── Divider: Slant ──────────────────────────────────────── */
.divider-slant {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
  pointer-events: none;
}
.divider-slant--top { top: -1px; }
.divider-slant--bottom { bottom: -1px; }
.divider-slant svg {
  display: block;
  width: calc(100% + 1.3px);
  height: 52px;
}

/* ── 2. PROBLEM STATEMENT ────────────────────────────────── */
.gr-problem {
  background: var(--color-bg-alt);
  position: relative;
}
.gr-problem .pull-quote {
  font-family: var(--font-accent);
  font-size: clamp(1.2rem, 2.4vw, 1.7rem);
  font-style: italic;
  font-weight: 500;
  color: var(--color-primary);
  line-height: 1.65;
  max-width: 52ch;
  margin: 0 auto var(--space-12);
  text-align: center;
  position: relative;
  padding: var(--space-8) var(--space-6);
}
.gr-problem .pull-quote::before {
  content: '\201C';
  position: absolute;
  top: -0.2em;
  left: 50%;
  transform: translateX(-50%);
  font-size: 6rem;
  font-family: var(--font-heading);
  color: rgba(var(--color-accent-rgb), 0.10);
  line-height: 1;
  pointer-events: none;
}
.gr-problem .pull-quote::after {
  content: '';
  display: block;
  width: 60px;
  height: 3px;
  background: rgba(var(--color-accent-rgb), 0.3);
  border-radius: var(--radius-full);
  margin: var(--space-6) auto 0;
}
.gr-problem .bento-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr) 1.2fr;
  gap: var(--space-6);
}
.gr-problem .bento-card {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  position: relative;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.gr-problem .bento-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 4px;
  height: 100%;
  border-radius: var(--radius-full) 0 0 var(--radius-full);
}
.gr-problem .bento-card.card-tint-1::before { background: var(--color-primary); }
.gr-problem .bento-card.card-tint-2::before { background: var(--color-secondary); }
.gr-problem .bento-card.card-tint-3::before { background: rgba(var(--color-accent-rgb), 1); }
.gr-problem .bento-card.card-tint-neutral::before { background: var(--color-border); }
.gr-problem .bento-card .bento-icon {
  width: 44px;
  height: 44px;
  border-radius: var(--radius-md);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.gr-problem .bento-card .bento-icon i,
.gr-problem .bento-card .bento-icon svg {
  width: 22px;
  height: 22px;
}
.gr-problem .bento-card h3 {
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  text-wrap: balance;
}
.gr-problem .bento-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.65;
  margin: 0;
}
/* Span the last card across full width on 4-card layout */
.gr-problem .bento-card--wide {
  grid-column: 1 / -1;
  display: grid;
  grid-template-columns: auto 1fr;
  gap: var(--space-4);
  align-items: start;
}
.gr-problem .bento-card--wide .bento-text {
  display: flex;
  flex-direction: column;
  gap: var(--space-2);
}

/* ── 3. EXPERT POSITIONING ───────────────────────────────── */
.gr-expert {
  background: var(--color-bg);
  position: relative;
}
.gr-expert .grid-asymmetric {
  display: grid;
  grid-template-columns: 1.1fr 2fr;
  gap: var(--space-12);
  align-items: start;
}
.gr-expert .stat-pillar {
  background: var(--color-primary);
  border-radius: var(--radius-lg);
  padding: var(--space-10) var(--space-8);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.gr-expert .stat-pillar::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(160deg, rgba(var(--color-accent-rgb), 0.15) 0%, transparent 60%);
  pointer-events: none;
}
.gr-expert .stat-pillar .stat-number {
  font-family: var(--font-heading);
  font-size: clamp(3rem, 6vw, 5rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1;
  display: block;
  position: relative;
  z-index: 1;
}
.gr-expert .stat-pillar .stat-label {
  font-family: var(--font-accent);
  font-size: var(--font-size-lg);
  color: rgba(255, 255, 255, 0.75);
  display: block;
  margin-top: var(--space-3);
  position: relative;
  z-index: 1;
}
.gr-expert .stat-pillar .stat-watermark {
  position: absolute;
  bottom: -10px;
  right: -10px;
  font-size: 7rem;
  font-weight: 900;
  font-family: var(--font-heading);
  color: rgba(255, 255, 255, 0.04);
  line-height: 1;
  pointer-events: none;
}
.gr-expert .expert-content h2 {
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.gr-expert .expert-content .answer-block {
  color: var(--color-text-light);
  line-height: 1.75;
  max-width: var(--content-width);
  margin-bottom: var(--space-8);
}
.gr-expert .diff-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-6);
}
.gr-expert .diff-item {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.gr-expert .diff-icon {
  flex-shrink: 0;
  width: 48px;
  height: 48px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.08);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.gr-expert .diff-icon i,
.gr-expert .diff-icon svg {
  width: 22px;
  height: 22px;
}
.gr-expert .diff-item h3 {
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin-bottom: var(--space-1);
}
.gr-expert .diff-item p {
  color: var(--color-text-light);
  line-height: 1.65;
  font-size: var(--font-size-sm);
  margin: 0;
}

/* Image composition — accent frame with offset border */
.gr-expert .expert-image-wrap {
  position: relative;
  margin-top: var(--space-10);
}
.gr-expert .expert-image-wrap img {
  border-radius: var(--radius-lg);
  width: 100%;
  height: auto;
  display: block;
  position: relative;
  z-index: 1;
}
.gr-expert .expert-image-wrap::after {
  content: '';
  position: absolute;
  inset: var(--space-4);
  border: 2px solid rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-lg);
  z-index: 0;
  transform: translate(var(--space-3), var(--space-3));
}

/* ── 4. SERVICE BREAKDOWN ────────────────────────────────── */
.gr-breakdown {
  background: var(--color-bg-alt);
  position: relative;
}
.gr-breakdown .breakdown-split {
  display: grid;
  grid-template-columns: 1.15fr 1fr;
  gap: var(--space-12);
  align-items: start;
}
.gr-breakdown .repair-types {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4);
}
.gr-breakdown .repair-type-card {
  padding: var(--space-6) var(--space-5);
  border-radius: var(--radius-lg);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.gr-breakdown .repair-type-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.gr-breakdown .repair-type-card .rt-icon {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.gr-breakdown .repair-type-card .rt-icon i,
.gr-breakdown .repair-type-card .rt-icon svg {
  width: 20px;
  height: 20px;
}
.gr-breakdown .repair-type-card h3 {
  font-size: var(--font-size-base);
  font-weight: 700;
  color: var(--color-primary);
  margin: 0;
}
.gr-breakdown .repair-type-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  margin: 0;
}

/* Timeline — process steps */
.gr-breakdown .timeline {
  position: relative;
  padding-left: var(--space-10);
}
.gr-breakdown .timeline::before {
  content: '';
  position: absolute;
  left: 14px;
  top: 0;
  bottom: 0;
  width: 2px;
  background: linear-gradient(to bottom, rgba(var(--color-accent-rgb), 0.35), rgba(var(--color-accent-rgb), 0.06));
  border-radius: var(--radius-full);
}
.gr-breakdown .timeline-step {
  position: relative;
  padding-bottom: var(--space-8);
}
.gr-breakdown .timeline-step:last-child { padding-bottom: 0; }
.gr-breakdown .timeline-step::before {
  content: '';
  position: absolute;
  left: calc(-1 * var(--space-10) + 8px);
  top: 4px;
  width: 14px;
  height: 14px;
  border-radius: 50%;
  background: var(--color-accent);
  box-shadow: 0 0 0 4px rgba(var(--color-accent-rgb), 0.15);
}
.gr-breakdown .timeline-step h3 {
  font-size: var(--font-size-base);
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-2);
}
.gr-breakdown .timeline-step .step-time {
  font-family: var(--font-accent);
  font-size: var(--font-size-sm);
  color: var(--color-accent);
  display: inline-block;
  margin-bottom: var(--space-2);
}
.gr-breakdown .timeline-step p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.65;
  margin: 0;
}

/* ── 5. PROOF / REVIEWS ──────────────────────────────────── */
.gr-proof {
  background: var(--color-primary);
  position: relative;
  overflow: hidden;
}
.gr-proof::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(140deg, rgba(var(--color-accent-rgb), 0.14) 0%, transparent 55%);
  pointer-events: none;
}
.gr-proof .section-title h2,
.gr-proof .section-title .section-subtitle {
  color: var(--color-white);
}
.gr-proof .reviews-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  position: relative;
  z-index: 1;
}
.gr-proof .review-card {
  background: rgba(255, 255, 255, 0.06);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.gr-proof .review-stars {
  display: flex;
  gap: var(--space-1);
  color: var(--color-star);
}
.gr-proof .review-stars i,
.gr-proof .review-stars svg {
  width: 18px;
  height: 18px;
}
.gr-proof .review-text {
  font-style: italic;
  color: rgba(255, 255, 255, 0.88);
  line-height: 1.7;
  font-size: var(--font-size-base);
  flex: 1;
}
.gr-proof .review-author {
  font-weight: 600;
  color: var(--color-white);
  font-size: var(--font-size-sm);
}
.gr-proof .review-location {
  color: rgba(255, 255, 255, 0.55);
  font-size: var(--font-size-xs);
}
.gr-proof .floating-accent {
  position: absolute;
  width: 280px;
  height: 280px;
  border-radius: 40% 60% 70% 30% / 40% 30% 70% 60%;
  background: rgba(255, 255, 255, 0.03);
  pointer-events: none;
  z-index: 0;
}
.gr-proof .floating-accent--1 {
  top: -70px;
  right: -90px;
  animation: gr-float 16s ease-in-out infinite;
}
.gr-proof .floating-accent--2 {
  bottom: -50px;
  left: -70px;
  animation: gr-float 20s ease-in-out infinite reverse;
}
@keyframes gr-float {
  0%, 100% { transform: translateY(0) rotate(0deg); }
  50% { transform: translateY(-16px) rotate(6deg); }
}

/* ── 6. COMPARISON ───────────────────────────────────────── */
.gr-compare {
  background: var(--color-bg);
  position: relative;
}
.gr-compare .compare-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-8);
  max-width: 920px;
  margin: 0 auto;
}
.gr-compare .compare-col {
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
  position: relative;
}
.gr-compare .compare-col--repair {
  background: var(--color-card-tint-1);
  border: 2px solid rgba(var(--color-accent-rgb), 0.2);
}
.gr-compare .compare-col--replace {
  background: var(--color-bg-alt);
  border: 1px solid var(--color-border);
}
.gr-compare .compare-col--repair .compare-badge {
  position: absolute;
  top: calc(-1 * var(--space-3));
  right: var(--space-6);
  background: var(--color-accent);
  color: var(--color-white);
  font-size: var(--font-size-xs);
  font-weight: 700;
  padding: var(--space-1) var(--space-4);
  border-radius: var(--radius-full);
  text-transform: uppercase;
  letter-spacing: 0.06em;
}
.gr-compare .compare-col h3 {
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-6);
  color: var(--color-primary);
  text-wrap: balance;
}
.gr-compare .compare-list {
  list-style: none;
  padding: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.gr-compare .compare-list li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  font-size: var(--font-size-sm);
  color: var(--color-text);
  line-height: 1.6;
}
.gr-compare .compare-list li .compare-icon {
  flex-shrink: 0;
  margin-top: 2px;
}
.gr-compare .compare-list li .compare-icon i,
.gr-compare .compare-list li .compare-icon svg {
  width: 18px;
  height: 18px;
}
.gr-compare .compare-col--repair .compare-icon { color: var(--color-success); }
.gr-compare .compare-col--replace .compare-icon { color: var(--color-secondary); }
.gr-compare .compare-note {
  margin-top: var(--space-8);
  padding: var(--space-6);
  background: var(--color-card-tint-3);
  border-radius: var(--radius-md);
  text-align: center;
  max-width: 920px;
  margin-left: auto;
  margin-right: auto;
}
.gr-compare .compare-note p {
  color: var(--color-text);
  font-size: var(--font-size-sm);
  line-height: 1.65;
  margin: 0;
}
.gr-compare .compare-note strong {
  color: var(--color-primary);
}

/* ── 7. FAQ ──────────────────────────────────────────────── */
.gr-faq {
  background: var(--color-bg-alt);
  position: relative;
}
.gr-faq .faq-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-6);
  max-width: 1000px;
  margin: 0 auto;
}
.gr-faq .faq-item {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  border: 1px solid var(--color-border);
  cursor: pointer;
  transition: box-shadow var(--transition-base), border-color var(--transition-base);
}
.gr-faq .faq-item:hover {
  box-shadow: var(--shadow-md);
  border-color: rgba(var(--color-accent-rgb), 0.2);
}
.gr-faq .faq-item summary {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: var(--space-4);
  font-weight: 700;
  font-size: var(--font-size-base);
  color: var(--color-primary);
  line-height: 1.4;
  list-style: none;
  cursor: pointer;
}
.gr-faq .faq-item summary::-webkit-details-marker { display: none; }
.gr-faq .faq-item summary::after {
  content: '+';
  flex-shrink: 0;
  font-size: var(--font-size-xl);
  font-weight: 300;
  color: var(--color-accent);
  transition: transform var(--transition-base);
}
.gr-faq .faq-item[open] summary::after {
  content: '\2212';
  transform: rotate(180deg);
}
.gr-faq .faq-answer {
  padding-top: var(--space-4);
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: var(--content-width);
}

/* ── 8. FINAL CTA ────────────────────────────────────────── */
.gr-cta-final {
  background: var(--color-primary);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.gr-cta-final::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(140deg, rgba(var(--color-accent-rgb), 0.16) 0%, transparent 55%);
  pointer-events: none;
}
.gr-cta-final .container {
  position: relative;
  z-index: 1;
}
.gr-cta-final h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.gr-cta-final .answer-block {
  color: rgba(255, 255, 255, 0.82);
  max-width: 580px;
  margin: 0 auto var(--space-8);
  font-size: var(--font-size-lg);
  line-height: 1.7;
}
.gr-cta-final .cta-buttons {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── RELATED SERVICES ────────────────────────────────────── */
.gr-related {
  background: var(--color-bg);
  position: relative;
}
.gr-related .section-title {
  margin-bottom: var(--space-10);
}

/* ── SHARED: Section Titles ──────────────────────────────── */
.gr-section-title {
  text-align: center;
  margin-bottom: var(--space-12);
}
.gr-section-title .eyebrow-label {
  display: inline-block;
  font-family: var(--font-accent);
  font-size: var(--font-size-sm);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  color: var(--color-accent);
  margin-bottom: var(--space-3);
}
.gr-section-title h2 {
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.gr-section-title .section-subtitle {
  font-family: var(--font-accent);
  font-size: var(--font-size-lg);
  font-style: italic;
  color: var(--color-text-light);
}
.gr-section-title .answer-block {
  color: var(--color-text-light);
  line-height: 1.75;
  max-width: var(--content-width);
  margin: var(--space-4) auto 0;
}

/* ── UTILITY: Text accent ────────────────────────────────── */
.gr-page .text-accent {
  font-family: var(--font-accent);
  font-style: italic;
  color: var(--color-accent);
}

/* ── UTILITY: Last-updated stamp ─────────────────────────── */
.gr-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  padding: var(--space-4) 0;
  border-top: 1px solid var(--color-border);
  margin-top: var(--space-8);
}

/* ── IMAGE: Arch clip composition ────────────────────────── */
.img-arch-frame {
  clip-path: ellipse(100% 94% at 50% 6%);
  border-radius: var(--radius-md);
  overflow: hidden;
}

/* ── RESPONSIVE ──────────────────────────────────────────── */
@media (max-width: 1024px) {
  .gr-expert .grid-asymmetric {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .gr-expert .stat-pillar {
    max-width: 280px;
  }
  .gr-breakdown .breakdown-split {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .gr-breakdown .repair-types {
    grid-template-columns: 1fr 1fr;
  }
}
@media (max-width: 768px) {
  .hero--gr { min-height: 65vh; }
  .hero--gr .hero-geo { display: none; }
  .gr-problem .bento-grid {
    grid-template-columns: 1fr;
  }
  .gr-problem .bento-card--wide {
    grid-template-columns: 1fr;
  }
  .gr-proof .reviews-grid {
    grid-template-columns: 1fr;
  }
  .gr-compare .compare-grid {
    grid-template-columns: 1fr;
  }
  .gr-faq .faq-grid {
    grid-template-columns: 1fr;
  }
  .gr-breakdown .repair-types {
    grid-template-columns: 1fr;
  }
  .hero--gr .trust-row {
    flex-direction: column;
    gap: var(--space-3);
  }
}
@media (max-width: 480px) {
  .hero--gr .hero-ctas {
    flex-direction: column;
  }
  .hero--gr .hero-ctas .btn {
    width: 100%;
    text-align: center;
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<div class="gr-page">

<!-- ═══════════════════════════════════════════════════════════
     1. HERO
     ═══════════════════════════════════════════════════════════ -->
<section class="hero--gr" style="background-image: url('<?php echo htmlspecialchars($heroImagePreload); ?>');" aria-label="Gutter repair services in Omaha">
  <div class="hero-geo" aria-hidden="true"></div>
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <span class="breadcrumb-current">Gutter Repair</span>
    </nav>
    <span class="eyebrow-label">Gutter Services &middot; Omaha, NE</span>
    <h1><span class="accent-word">Gutter Repair</span> in Omaha, NE</h1>
    <p class="hero-answer">
      Crawford Roofing &amp; Gutters LLC is a licensed Nebraska contractor based in Omaha with over
      <?php echo $yearsInBusiness; ?> years of experience repairing residential and commercial gutter systems
      across the metro area. From leaking joints and sagging runs to hail-dented downspouts, we diagnose
      the failure, fix the root cause, and restore proper drainage — typically in a single visit.
    </p>
    <div class="hero-ctas">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Repair Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> Call Now
      </a>
      <?php endif; ?>
    </div>
    <div class="trust-row">
      <span class="trust-item"><i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured</span>
      <span class="trust-item"><i data-lucide="clock" aria-hidden="true"></i> <?php echo $yearsInBusiness; ?>+ Years in Omaha</span>
      <span class="trust-item"><i data-lucide="zap" aria-hidden="true"></i> Fast Storm Response</span>
      <span class="trust-item"><i data-lucide="star" aria-hidden="true"></i> 4.9-Star Rated</span>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     2. PROBLEM STATEMENT
     ═══════════════════════════════════════════════════════════ -->
<section class="gr-problem" aria-label="Warning signs of gutter failure">
  <div class="divider-curve divider-curve--top" aria-hidden="true">
    <svg viewBox="0 0 1200 56" preserveAspectRatio="none">
      <path d="M0,56 C300,0 500,0 600,24 C700,48 900,56 1200,0 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="pull-quote reveal-up">
      A cracked gutter joint loses two gallons per minute during a moderate rainstorm — enough to
      saturate your foundation soil and create basement seepage within a single spring season.
    </div>

    <div class="gr-section-title reveal-up">
      <span class="eyebrow-label">Warning Signs</span>
      <h2>What Are the Signs Your <span class="text-accent">Omaha Gutters</span> Need Repair?</h2>
      <p class="answer-block">
        Damaged gutters rarely fail all at once. They deteriorate in stages — a cracked sealant joint here,
        a loose hanger there — until water flows everywhere except where it should. Omaha's combination of
        severe hailstorms, 100-plus annual freeze-thaw cycles, and clay-heavy soil makes even minor gutter
        damage escalate faster than in milder climates.
      </p>
    </div>

    <div class="bento-grid">
      <div class="bento-card card-tint-1 reveal-left reveal-delay-1">
        <div class="bento-icon"><i data-lucide="arrow-down-to-line" aria-hidden="true"></i></div>
        <h3>Sagging Gutter Runs</h3>
        <p>When hangers pull free from fascia — common after ice loading in Omaha winters — gutters slope backward, trapping water instead of directing it to downspouts. Standing water adds more weight, accelerating the sag until the run separates from the house entirely.</p>
      </div>
      <div class="bento-card card-tint-2 reveal-right reveal-delay-2">
        <div class="bento-icon"><i data-lucide="droplets" aria-hidden="true"></i></div>
        <h3>Overflow During Rain</h3>
        <p>Water pouring over the gutter edge during moderate rain means blockage, slope failure, or undersized downspouts. In Papillion and Bellevue neighborhoods with mature tree canopy, overflow from clogged or crushed sections is the most common complaint we see.</p>
      </div>
      <div class="bento-card card-tint-3 reveal-up reveal-delay-3">
        <div class="bento-icon"><i data-lucide="paint-bucket" aria-hidden="true"></i></div>
        <h3>Wall Staining and Fascia Rot</h3>
        <p>Vertical staining below gutter seams signals a persistent leak. Left unchecked, moisture migrates into fascia boards and soffit panels. Homes near Aksarben and Dundee built before the 1980s are especially vulnerable because original fascia is often unprotected pine.</p>
      </div>
      <div class="bento-card card-tint-neutral bento-card--wide reveal-up reveal-delay-4">
        <div class="bento-icon"><i data-lucide="move-horizontal" aria-hidden="true"></i></div>
        <div class="bento-text">
          <h3>Gutters Pulling Away from the Roofline</h3>
          <p>A visible gap between the gutter back edge and your fascia means the spike-and-ferrule system or hidden hanger brackets have failed. Ice expansion during Omaha's December-through-March freeze cycles is the usual cause. This gap allows water to run behind the gutter and directly into your wall cavity.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     3. EXPERT POSITIONING
     ═══════════════════════════════════════════════════════════ -->
<section class="gr-expert" aria-label="Why choose Crawford for gutter repair">
  <div class="divider-slant divider-slant--top" aria-hidden="true">
    <svg viewBox="0 0 1200 52" preserveAspectRatio="none">
      <polygon points="0,52 1200,0 1200,52" fill="var(--color-bg-alt)"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="grid-asymmetric">
      <div class="stat-pillar reveal-left">
        <span class="stat-number" data-target="<?php echo $yearsInBusiness; ?>"><?php echo $yearsInBusiness; ?>+</span>
        <span class="stat-label">Years Repairing Omaha Gutters</span>
        <span class="stat-watermark" aria-hidden="true"><?php echo $yearsInBusiness; ?></span>
      </div>
      <div class="expert-content reveal-right">
        <span class="eyebrow-label">Our Approach</span>
        <h2>Why Do Omaha Homeowners Choose <span class="text-accent">Crawford</span> for Gutter Repair?</h2>
        <p class="answer-block">
          Crawford Roofing &amp; Gutters has repaired thousands of gutter systems across the Omaha metro since
          <?php echo $yearEstablished; ?>. Our crews are trained roofers — not handymen — which means every repair
          addresses the full drainage chain from shingle drip edge to downspout discharge. We carry matching
          materials on every truck so most repairs are completed in a single visit without a return trip.
        </p>
        <div class="diff-list">
          <div class="diff-item">
            <div class="diff-icon"><i data-lucide="zap" aria-hidden="true"></i></div>
            <div>
              <h3>24-48 Hour Storm Response</h3>
              <p>When hail hits Millard or straight-line winds tear through Ralston, gutter damage cannot wait weeks. Crawford prioritizes storm-damaged systems that pose active water intrusion risk, scheduling emergency assessments within one to two business days.</p>
            </div>
          </div>
          <div class="diff-item">
            <div class="diff-icon"><i data-lucide="file-check-2" aria-hidden="true"></i></div>
            <div>
              <h3>Insurance Documentation Ready</h3>
              <p>We photograph and measure every damaged section with descriptions formatted for Nebraska homeowner insurance claims. Our documentation has supported successful claims across State Farm, Farmers, and Mutual of Omaha policies for over two decades.</p>
            </div>
          </div>
          <div class="diff-item">
            <div class="diff-icon"><i data-lucide="scan-eye" aria-hidden="true"></i></div>
            <div>
              <h3>Root-Cause Diagnosis First</h3>
              <p>We never patch a symptom and leave. If a gutter leaks because the fascia behind it has rotted, we address both the fascia and the gutter — preventing the same repair from recurring within a year. That diagnostic approach separates a roofing contractor from a handyman.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="expert-image-wrap reveal-scale" style="max-width: 850px; margin-left: auto; margin-right: auto;">
      <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg"
           alt="Crawford Roofing crew repairing damaged gutters on an Omaha home"
           width="850" height="500" loading="lazy">
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     4. SERVICE BREAKDOWN
     ═══════════════════════════════════════════════════════════ -->
<section class="gr-breakdown" aria-label="Types of gutter repair and process">
  <div class="divider-curve divider-curve--top" aria-hidden="true">
    <svg viewBox="0 0 1200 56" preserveAspectRatio="none">
      <path d="M0,0 C300,56 600,56 900,28 C1050,14 1150,0 1200,0 L1200,56 L0,56 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="gr-section-title reveal-up">
      <span class="eyebrow-label">Service Details</span>
      <h2>What Types of <span class="text-accent">Gutter Repair</span> Does Crawford Perform?</h2>
      <p class="answer-block">
        Crawford Roofing &amp; Gutters handles every category of gutter repair seen in the Omaha metro — from
        sealing a single leaking joint to re-hanging an entire run pulled loose by ice. Each repair follows
        a four-step process: inspect, diagnose, repair, and verify drainage flow before we leave your property.
      </p>
    </div>

    <div class="breakdown-split">
      <div class="reveal-left">
        <h3 style="margin-bottom: var(--space-6); color: var(--color-primary);">Repair Types We Handle</h3>
        <div class="repair-types">
          <div class="repair-type-card card-tint-1">
            <div class="rt-icon"><i data-lucide="droplets" aria-hidden="true"></i></div>
            <h3>Leak Sealing</h3>
            <p>Cracked joints, failed sealant, and pin-hole corrosion spots sealed with commercial-grade gutter caulk rated for Nebraska temperature extremes.</p>
          </div>
          <div class="repair-type-card card-tint-2">
            <div class="rt-icon"><i data-lucide="move-vertical" aria-hidden="true"></i></div>
            <h3>Re-Hanging &amp; Re-Sloping</h3>
            <p>Sagging sections pulled back to correct pitch with new hidden hanger brackets spaced at 24-inch intervals for Omaha ice loads.</p>
          </div>
          <div class="repair-type-card card-tint-3">
            <div class="rt-icon"><i data-lucide="cloud-hail" aria-hidden="true"></i></div>
            <h3>Hail &amp; Storm Damage</h3>
            <p>Dented, crushed, and separated sections replaced with color-matched aluminum. Insurance-formatted damage documentation included.</p>
          </div>
          <div class="repair-type-card card-tint-neutral">
            <div class="rt-icon"><i data-lucide="arrow-down-right" aria-hidden="true"></i></div>
            <h3>Downspout Repair</h3>
            <p>Detached, crushed, or incorrectly routed downspouts reconnected and extended to discharge water at least four feet from the foundation wall.</p>
          </div>
        </div>
      </div>

      <div class="reveal-right">
        <h3 style="margin-bottom: var(--space-6); color: var(--color-primary);">How the Repair Visit Works</h3>
        <div class="timeline">
          <div class="timeline-step">
            <span class="step-time">Step 1 (10 min)</span>
            <h3>Walk-Around Inspection</h3>
            <p>Our technician walks the full perimeter of your home, documenting every area of visible gutter damage. We check fascia condition, downspout routing, and ground-level drainage points before touching a ladder.</p>
          </div>
          <div class="timeline-step">
            <span class="step-time">Step 2 (10-15 min)</span>
            <h3>Ladder-Level Diagnosis</h3>
            <p>Hands-on examination of each damaged section from ladder height. We test slope with a level, probe sealant integrity at every joint, and check hanger fastening depth into the fascia board.</p>
          </div>
          <div class="timeline-step">
            <span class="step-time">Step 3 (30-90 min)</span>
            <h3>Repair Execution</h3>
            <p>Damaged sections are repaired, replaced, re-sealed, or re-hung using materials from our on-truck inventory. Matching aluminum color and profile eliminates wait time for special-order parts.</p>
          </div>
          <div class="timeline-step">
            <span class="step-time">Step 4 (10 min)</span>
            <h3>Flow Verification</h3>
            <p>We flush the repaired section with pressurized water and verify drainage from gutter to downspout to discharge point. You see the water flowing correctly before we pack up.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     5. PROOF / REVIEWS
     ═══════════════════════════════════════════════════════════ -->
<section class="gr-proof" aria-label="Customer reviews for gutter repair">
  <div class="floating-accent floating-accent--1" aria-hidden="true"></div>
  <div class="floating-accent floating-accent--2" aria-hidden="true"></div>

  <div class="container">
    <div class="gr-section-title reveal-up">
      <span class="eyebrow-label" style="color: rgba(255,255,255,0.6);">Reviews</span>
      <h2 style="color: var(--color-white);">What Do Omaha Homeowners Say About Crawford's <span class="text-accent" style="filter: brightness(2);">Gutter Repair</span>?</h2>
      <p class="answer-block" style="color: rgba(255,255,255,0.78);">
        Homeowners across Bellevue, Millard, Ralston, and greater Omaha trust Crawford Roofing &amp; Gutters
        to restore their drainage systems after storms, freeze damage, and general wear. Here is what
        recent gutter repair clients have shared about their experience.
      </p>
    </div>

    <div class="reviews-grid">
      <div class="review-card reveal-up reveal-delay-1">
        <div class="review-stars">
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
        </div>
        <p class="review-text">"After the June hailstorm our gutters were dented and pulling off the fascia on two sides of the house. Crawford came out the next day, documented everything for our insurance claim, and had the repairs done by Thursday. The adjuster approved the claim with zero pushback because of how thorough the photos were."</p>
        <div>
          <span class="review-author">Chris W.</span><br>
          <span class="review-location">Bellevue, NE</span>
        </div>
      </div>

      <div class="review-card reveal-up reveal-delay-2">
        <div class="review-stars">
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
        </div>
        <p class="review-text">"We had a persistent leak at a corner joint that two other companies tried to seal with caulk. Crawford's guy found the real problem — the fascia behind the joint had rotted and the gutter was sitting at the wrong angle. They replaced the fascia section and re-hung the gutter. No leak since October."</p>
        <div>
          <span class="review-author">Amanda F.</span><br>
          <span class="review-location">Millard, NE</span>
        </div>
      </div>

      <div class="review-card reveal-up reveal-delay-3">
        <div class="review-stars">
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
        </div>
        <p class="review-text">"Our downspout was dumping water right against the basement wall. Crawford rerouted it with an extension that now discharges four feet from the foundation. That simple fix eliminated the moisture in our basement that we had been fighting for two years. Should have called them sooner."</p>
        <div>
          <span class="review-author">Greg H.</span><br>
          <span class="review-location">Ralston, NE</span>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     6. COMPARISON — Repair vs Replacement
     ═══════════════════════════════════════════════════════════ -->
<section class="gr-compare" aria-label="Gutter repair versus replacement comparison">
  <div class="divider-slant divider-slant--top" aria-hidden="true">
    <svg viewBox="0 0 1200 52" preserveAspectRatio="none">
      <polygon points="0,0 1200,52 1200,0 0,0" fill="var(--color-primary)"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="gr-section-title reveal-up">
      <span class="eyebrow-label">Compare Options</span>
      <h2>Should You <span class="text-accent">Repair or Replace</span> Your Omaha Gutters?</h2>
      <p class="answer-block">
        Not every gutter problem requires full replacement. Isolated leaks, single sagging sections, and
        minor hail dents are typically repairable at a fraction of the replacement cost. Crawford assesses
        every linear foot before recommending either option — and we never push replacement when a
        targeted repair will restore full function for years to come.
      </p>
    </div>

    <div class="compare-grid">
      <div class="compare-col compare-col--repair reveal-left">
        <span class="compare-badge">Most Common</span>
        <h3>Gutter Repair</h3>
        <ul class="compare-list">
          <li>
            <span class="compare-icon"><i data-lucide="check-circle" aria-hidden="true"></i></span>
            Costs $150-$550 depending on damage scope
          </li>
          <li>
            <span class="compare-icon"><i data-lucide="check-circle" aria-hidden="true"></i></span>
            Completed in a single visit, typically 1-2 hours
          </li>
          <li>
            <span class="compare-icon"><i data-lucide="check-circle" aria-hidden="true"></i></span>
            Ideal when less than 30% of the system is damaged
          </li>
          <li>
            <span class="compare-icon"><i data-lucide="check-circle" aria-hidden="true"></i></span>
            Preserves the existing system and color match
          </li>
          <li>
            <span class="compare-icon"><i data-lucide="check-circle" aria-hidden="true"></i></span>
            Best for isolated leaks, sagging, and storm damage
          </li>
        </ul>
      </div>

      <div class="compare-col compare-col--replace reveal-right">
        <h3>Full Replacement</h3>
        <ul class="compare-list">
          <li>
            <span class="compare-icon"><i data-lucide="info" aria-hidden="true"></i></span>
            Costs $1,200-$3,500+ for a full home system
          </li>
          <li>
            <span class="compare-icon"><i data-lucide="info" aria-hidden="true"></i></span>
            Requires 4-8 hours of installation time
          </li>
          <li>
            <span class="compare-icon"><i data-lucide="info" aria-hidden="true"></i></span>
            Necessary when 40%+ of the system has failed
          </li>
          <li>
            <span class="compare-icon"><i data-lucide="info" aria-hidden="true"></i></span>
            Opportunity to upgrade gauge, size, and profile
          </li>
          <li>
            <span class="compare-icon"><i data-lucide="info" aria-hidden="true"></i></span>
            Recommended for gutters older than 20-25 years
          </li>
        </ul>
      </div>
    </div>

    <div class="compare-note reveal-up">
      <p><strong>Not sure which you need?</strong> Crawford provides free on-site assessments. Our technician inspects every section, shows you what we find, and gives you a written estimate for both options so you can decide with full information — no pressure.</p>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     7. FAQ
     ═══════════════════════════════════════════════════════════ -->
<section class="gr-faq" aria-label="Frequently asked questions about gutter repair">
  <div class="divider-curve divider-curve--top" aria-hidden="true">
    <svg viewBox="0 0 1200 56" preserveAspectRatio="none">
      <path d="M0,56 C400,0 800,0 1200,56 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="gr-section-title reveal-up">
      <span class="eyebrow-label">FAQ</span>
      <h2>What Should Omaha Homeowners Know About <span class="text-accent">Gutter Repair</span>?</h2>
      <p class="answer-block">
        Cost, timing, insurance coverage, and freeze-thaw durability are the questions we hear most from
        homeowners searching for gutter repair near me in Omaha. Below are direct answers from our crew
        based on over <?php echo $yearsInBusiness; ?> years of repairing gutter systems across the metro.
      </p>
    </div>

    <div class="faq-grid">
      <?php foreach ($faqs as $i => $faq): ?>
      <details class="faq-item reveal-up reveal-delay-<?php echo ($i % 3) + 1; ?>">
        <summary><?php echo htmlspecialchars($faq['question']); ?></summary>
        <div class="faq-answer">
          <p><?php echo htmlspecialchars($faq['answer']); ?></p>
        </div>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     RELATED SERVICES
     ═══════════════════════════════════════════════════════════ -->
<section class="gr-related" aria-label="Related gutter and roofing services">
  <div class="container">
    <div class="gr-section-title reveal-up">
      <span class="eyebrow-label">Related Services</span>
      <h2>Other Services <span class="text-accent">You May Need</span></h2>
    </div>

    <div class="services-grid" style="max-width: 960px; margin: 0 auto; grid-template-columns: repeat(3, 1fr);">
      <!-- Gutter Cleaning -->
      <article class="service-card-with-image card-tint-1 reveal-up reveal-delay-1">
        <div class="service-card__image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134049337-o7oznv-dff36b_a35b2df95a814ec49799d0169f3a87da_mv2.jpg"
               alt="Professional gutter cleaning service in Omaha, NE" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="droplets" aria-hidden="true"></i></div>
          <h3>Gutter Cleaning</h3>
          <p class="service-card__desc">Clear debris and restore proper flow before damage starts.</p>
          <ul>
            <li>Prevents ice dams and overflow</li>
            <li>Seasonal maintenance plans</li>
            <li>Full system flush included</li>
          </ul>
          <a href="/services/gutter-cleaning/" class="service-card__cta">Learn more</a>
        </div>
      </article>

      <!-- Gutter Replacement -->
      <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
        <div class="service-card__image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252049-ez0nhr-IMG_096815F71F3A-1.jpeg"
               alt="Gutter replacement service in Omaha, NE" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="sparkles" aria-hidden="true"></i></div>
          <h3>Gutter Replacement</h3>
          <p class="service-card__desc">Upgrade to a new gutter system when repair is not enough.</p>
          <ul>
            <li>Full system upgrade available</li>
            <li>Upgraded downspout routing</li>
            <li>Color-matched to your home</li>
          </ul>
          <a href="/services/gutter-replacement/" class="service-card__cta">Learn more</a>
        </div>
      </article>

      <!-- Roof Repair -->
      <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
        <div class="service-card__image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg"
               alt="Roof repair service in Omaha, NE" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="shield" aria-hidden="true"></i></div>
          <h3>Roof Repair</h3>
          <p class="service-card__desc">Fix leaks, shingle damage, and storm impact fast.</p>
          <ul>
            <li>Leak detection and patching</li>
            <li>Hail and wind damage repair</li>
            <li>Insurance claim support</li>
          </ul>
          <a href="/services/roof-repair/" class="service-card__cta">Learn more</a>
        </div>
      </article>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     8. FINAL CTA
     ═══════════════════════════════════════════════════════════ -->
<section class="gr-cta-final" aria-label="Schedule your gutter repair">
  <div class="container">
    <h2 class="reveal-up">Ready to Fix Your Damaged Gutters in Omaha?</h2>
    <p class="answer-block reveal-up reveal-delay-1">
      Whether you have a single leaking joint or an entire run pulled loose by ice, Crawford Roofing &amp;
      Gutters provides free on-site estimates with transparent pricing. No hidden fees, no pressure to
      replace when repair will do. Call now or submit the form and we will respond within one business day.
    </p>
    <div class="cta-buttons reveal-up reveal-delay-2">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Repair Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> <?php echo formatPhone($phone); ?>
      </a>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Last Updated -->
<div class="gr-updated">
  Last Updated: <?php echo date('F Y'); ?>
</div>

</div><!-- /.gr-page -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
