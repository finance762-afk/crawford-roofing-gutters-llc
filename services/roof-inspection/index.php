<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'Roof Inspection Omaha NE | Professional Roof Assessments | Crawford Roofing & Gutters LLC';
$pageDescription = 'Professional roof inspections in Omaha, NE by Crawford Roofing. Storm damage assessments, insurance documentation, and detailed written reports. Free inspections available.';
$canonicalUrl    = $siteUrl . '/services/roof-inspection/';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg';
$currentPage     = 'services';
$heroImagePreload = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg';
$cssVersion      = '3';

// ── FAQ Data ─────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How much does a roof inspection cost in Omaha?',
        'answer'   => 'Crawford offers free roof inspections for Omaha homeowners concerned about storm damage or considering a roof replacement. Paid certified inspections — which include a formal written report suitable for insurance claims or real estate transactions — typically run $150 to $350 depending on roof size and complexity. Multi-story homes and commercial buildings fall at the higher end.',
    ],
    [
        'question' => 'How often should I have my roof inspected in Nebraska?',
        'answer'   => 'We recommend annual roof inspections for Omaha homes, ideally in late spring after hail season wraps up. Nebraska averages 5 to 7 significant hailstorms per year in the Omaha metro, so scheduling an inspection after each major weather event is also wise. Roofs older than 15 years benefit from twice-yearly checks — once in spring and once before the first freeze in November.',
    ],
    [
        'question' => 'What does a professional roof inspection include?',
        'answer'   => 'Our 12-point roof inspection covers shingle condition, flashing integrity, ridge cap and vent seals, soffit and fascia health, gutter attachment points, attic ventilation, decking condition visible from the attic, chimney and skylight seals, valley flashing, drip edge integrity, downspout routing, and overall structural alignment. You receive a written report with photos documenting every finding.',
    ],
    [
        'question' => 'Will a roof inspection help with my insurance claim in Omaha?',
        'answer'   => 'Yes. Crawford provides insurance-ready inspection reports that include date-stamped photos, damage classification per shingle manufacturer warranty specs, estimated remaining roof life, and a summary formatted for adjusters. Many Omaha homeowners use our reports to file storm damage claims with State Farm, Farmers, and other regional carriers. We also meet with adjusters on-site when needed.',
    ],
    [
        'question' => 'Can you inspect my roof after a hailstorm?',
        'answer'   => 'Absolutely. Post-storm inspections are our most-requested service. After a hailstorm moves through the Omaha metro — especially events producing 1-inch or larger hailstones — we deploy inspection crews within 24 to 48 hours. Early documentation is critical because hail damage can be harder to prove months later once granule displacement weathers over.',
    ],
    [
        'question' => 'Do I need a roof inspection before buying a home in Omaha?',
        'answer'   => 'A pre-purchase roof inspection is one of the smartest investments any Omaha homebuyer can make. General home inspectors check basic roof condition but rarely climb the roof or document manufacturer-specific defects. Our specialized inspection catches issues like improper flashing on Omaha\'s older Tudor-style homes in Dundee and Benson that a general inspector may miss entirely.',
    ],
    [
        'question' => 'How long does a roof inspection take?',
        'answer'   => 'Most residential roof inspections in Omaha take 45 minutes to 90 minutes depending on roof size, pitch, and the number of penetrations like skylights or vents. We spend time in the attic checking for moisture intrusion and ventilation issues that are invisible from ground level. Your written report is typically delivered within 24 hours of the inspection.',
    ],
    [
        'question' => 'What signs mean I need a roof inspection right away?',
        'answer'   => 'Schedule an immediate inspection if you notice granules collecting in gutters or at downspout exits, ceiling stains or bubbling paint on interior walls, daylight visible through the attic decking, curling or missing shingles after wind events, or if your roof is older than 20 years and has never been professionally assessed. Any of these signals active or imminent failure.',
    ],
];

// ── Schema ───────────────────────────────────────────────────
$currentService = null;
foreach ($services as $s) {
    if ($s['slug'] === 'roof-inspection') {
        $currentService = $s;
        break;
    }
}
$serviceSchema    = generateServiceSchema($currentService, $siteUrl, $siteName, $address);
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',            'url' => $siteUrl . '/'],
    ['name' => 'Services',        'url' => $siteUrl . '/services/'],
    ['name' => 'Roof Inspection', 'url' => $siteUrl . '/services/roof-inspection/'],
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
   Roof Inspection — Page-Specific Styles
   Premium Tier — Editorial 8-Section Layout
   Crawford Roofing & Gutters LLC
   ═══════════════════════════════════════════════════════════════ */

/* ── 1. HERO ─────────────────────────────────────────────────── */
.hero--roof-inspection {
  position: relative;
  min-height: 78vh;
  display: flex;
  align-items: center;
  background-size: cover;
  background-position: center 25%;
  background-repeat: no-repeat;
  overflow: hidden;
  padding: var(--space-16) 0 var(--space-12);
}
.hero--roof-inspection::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    155deg,
    rgba(var(--color-primary-rgb), 0.95) 0%,
    rgba(var(--color-primary-rgb), 0.82) 40%,
    rgba(var(--color-secondary-rgb), 0.74) 100%
  );
  z-index: 1;
}
.hero--roof-inspection::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  opacity: 0.14;
  z-index: 1;
  pointer-events: none;
}
.hero--roof-inspection .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.hero--roof-inspection .hero-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
}
.hero--roof-inspection .hero-breadcrumb a {
  color: rgba(255, 255, 255, 0.6);
  transition: color var(--transition-fast);
}
.hero--roof-inspection .hero-breadcrumb a:hover {
  color: rgba(255, 255, 255, 0.9);
}
.hero--roof-inspection .hero-breadcrumb .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.35);
  font-size: var(--font-size-xs);
}
.hero--roof-inspection .hero-breadcrumb .breadcrumb-current {
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(1.8);
  font-weight: 600;
}
.hero--roof-inspection .eyebrow-label {
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
.hero--roof-inspection .eyebrow-label .eyebrow-dot {
  width: 5px;
  height: 5px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.hero--roof-inspection h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 3.75rem);
  line-height: 1.1;
  margin-bottom: var(--space-6);
  text-wrap: balance;
  max-width: 20ch;
}
.hero--roof-inspection h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.7);
}
.hero--roof-inspection .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 620px;
  margin-bottom: var(--space-8);
}
.hero--roof-inspection .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-10);
}
.hero--roof-inspection .hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  align-items: center;
}
.hero--roof-inspection .hero-trust-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.75);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.hero--roof-inspection .hero-trust-item i,
.hero--roof-inspection .hero-trust-item svg {
  width: 16px;
  height: 16px;
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(2);
}

/* ── Section Dividers ────────────────────────────────────────── */
.ri-divider-angle {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.ri-divider-angle--top { top: -1px; }
.ri-divider-angle--bottom { bottom: -1px; }
.ri-divider-angle svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 55px;
}
.ri-divider-wave {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.ri-divider-wave--top { top: -1px; }
.ri-divider-wave--bottom { bottom: -1px; }
.ri-divider-wave svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 70px;
}

/* ── 2. PROBLEM STATEMENT ────────────────────────────────────── */
.ri-problem-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.ri-problem-section .ri-floating-accent {
  position: absolute;
  width: 340px;
  height: 340px;
  border-radius: 35% 65% 55% 45% / 50% 40% 60% 50%;
  background: rgba(var(--color-accent-rgb), 0.035);
  pointer-events: none;
  z-index: 0;
  top: -80px;
  right: -140px;
  animation: ri-float 13s ease-in-out infinite;
}
.ri-pullquote {
  position: relative;
  z-index: 1;
  font-family: var(--font-accent);
  font-size: clamp(1.3rem, 2.4vw, 1.8rem);
  line-height: 1.6;
  color: var(--color-primary);
  font-style: italic;
  max-width: 52ch;
  margin: 0 auto var(--space-12);
  text-align: center;
  padding: var(--space-8) var(--space-6);
  border-left: 4px solid rgba(var(--color-accent-rgb), 0.35);
  border-right: 4px solid rgba(var(--color-accent-rgb), 0.35);
  background: rgba(var(--color-primary-rgb), 0.02);
  border-radius: var(--radius-sm);
}
.ri-pullquote .accent-mark {
  color: rgba(var(--color-accent-rgb), 1);
  font-weight: 700;
  font-style: normal;
}
.ri-bento-grid {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-6);
  max-width: 920px;
  margin: 0 auto;
}
.ri-bento-card {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  position: relative;
  overflow: hidden;
}
.ri-bento-card::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 4px;
  height: 100%;
  background: rgba(var(--color-accent-rgb), 0.2);
  border-radius: var(--radius-sm) 0 0 var(--radius-sm);
}
.ri-bento-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.ri-bento-card__icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.1);
  color: var(--color-accent);
}
.ri-bento-card__icon i,
.ri-bento-card__icon svg {
  width: 22px;
  height: 22px;
}
.ri-bento-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin: 0;
  line-height: 1.3;
}
.ri-bento-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.65;
  margin: 0;
}

/* ── 3. EXPERT POSITIONING ───────────────────────────────────── */
.ri-expert-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.ri-expert-grid {
  display: grid;
  grid-template-columns: 1fr 1.6fr;
  gap: var(--space-12);
  align-items: center;
}
.ri-expert-stat-block {
  text-align: center;
  padding: var(--space-12) var(--space-8);
  background: var(--color-primary);
  border-radius: var(--radius-xl);
  color: var(--color-white);
  position: relative;
  overflow: hidden;
}
.ri-expert-stat-block::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(145deg, rgba(var(--color-accent-rgb), 0.18) 0%, transparent 55%);
  pointer-events: none;
}
.ri-expert-stat-block::after {
  content: '';
  position: absolute;
  bottom: -30px;
  right: -30px;
  width: 120px;
  height: 120px;
  border-radius: var(--radius-full);
  border: 3px solid rgba(255, 255, 255, 0.06);
  pointer-events: none;
}
.ri-expert-stat-number {
  font-family: var(--font-heading);
  font-size: clamp(3.5rem, 8vw, 5.5rem);
  font-weight: 900;
  line-height: 1;
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.8);
  position: relative;
  z-index: 1;
}
.ri-expert-stat-label {
  font-family: var(--font-accent);
  font-size: var(--font-size-lg);
  color: rgba(255, 255, 255, 0.8);
  margin-top: var(--space-2);
  position: relative;
  z-index: 1;
}
.ri-expert-stat-sub {
  font-size: var(--font-size-sm);
  color: rgba(255, 255, 255, 0.5);
  margin-top: var(--space-4);
  position: relative;
  z-index: 1;
}
.ri-expert-content h2 {
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.ri-expert-content .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  margin-bottom: var(--space-8);
  max-width: var(--content-width);
}
.ri-diff-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
}
.ri-diff-item {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.ri-diff-icon {
  flex-shrink: 0;
  width: 42px;
  height: 42px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.ri-diff-icon i,
.ri-diff-icon svg {
  width: 20px;
  height: 20px;
}
.ri-diff-text h4 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0 0 var(--space-1) 0;
}
.ri-diff-text p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  margin: 0;
  line-height: 1.6;
}

/* ── 4. SERVICE BREAKDOWN ────────────────────────────────────── */
.ri-breakdown-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.ri-breakdown-section .ri-floating-accent {
  position: absolute;
  width: 300px;
  height: 300px;
  border-radius: 30% 70% 55% 45% / 55% 35% 65% 45%;
  background: rgba(var(--color-primary-rgb), 0.035);
  pointer-events: none;
  z-index: 0;
  bottom: -70px;
  left: -110px;
  animation: ri-float 16s ease-in-out infinite reverse;
}
.ri-breakdown-asym {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1.15fr 1fr;
  gap: var(--space-12);
  margin-bottom: var(--space-12);
  align-items: start;
}
.ri-breakdown-image {
  border-radius: var(--radius-lg);
  overflow: hidden;
  position: relative;
  aspect-ratio: 4 / 3;
}
.ri-breakdown-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.ri-breakdown-image:hover img {
  transform: scale(1.03);
}
.ri-breakdown-image::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: var(--radius-lg);
  box-shadow: inset 0 0 0 1px rgba(var(--color-primary-rgb), 0.08);
  pointer-events: none;
}
.ri-breakdown-content h2 {
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.ri-breakdown-content .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  margin-bottom: var(--space-8);
}

/* 12-Point Checklist */
.ri-checklist {
  list-style: none;
  padding: 0;
  margin: 0;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3) var(--space-6);
}
.ri-checklist li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: var(--color-text);
  line-height: 1.5;
}
.ri-checklist li i,
.ri-checklist li svg {
  flex-shrink: 0;
  width: 18px;
  height: 18px;
  color: var(--color-success);
  margin-top: 1px;
}

/* Process Timeline */
.ri-timeline-heading {
  text-align: center;
  margin-bottom: var(--space-10);
  position: relative;
  z-index: 1;
}
.ri-timeline-heading h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.ri-timeline-heading .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: var(--content-width);
  margin: 0 auto;
}
.ri-process-timeline {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
}
.ri-process-timeline::before {
  content: '';
  position: absolute;
  top: 40px;
  left: 12.5%;
  right: 12.5%;
  height: 2px;
  background: linear-gradient(90deg, rgba(var(--color-accent-rgb), 0.3), rgba(var(--color-accent-rgb), 0.1));
  z-index: 0;
}
.ri-timeline-step {
  text-align: center;
  position: relative;
  z-index: 1;
}
.ri-timeline-step__number {
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
.ri-timeline-step__number::after {
  content: '';
  position: absolute;
  inset: -4px;
  border-radius: var(--radius-full);
  border: 2px solid rgba(var(--color-accent-rgb), 0.25);
}
.ri-timeline-step h4 {
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  color: var(--color-primary);
  margin: 0 0 var(--space-2);
  text-transform: uppercase;
  letter-spacing: 0.03em;
}
.ri-timeline-step p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  margin: 0;
}

/* ── 5. PROOF / REVIEWS ──────────────────────────────────────── */
.ri-proof-section {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.ri-proof-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(160deg, rgba(var(--color-accent-rgb), 0.14) 0%, transparent 45%);
  pointer-events: none;
}
.ri-proof-section .container {
  position: relative;
  z-index: 1;
}
.ri-proof-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
}
.ri-proof-section .section-title .eyebrow-label {
  color: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.ri-proof-section .section-title h2 {
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.ri-proof-section .section-title .answer-block {
  color: rgba(255, 255, 255, 0.75);
  line-height: 1.7;
  max-width: var(--content-width);
  margin: 0 auto;
}
.ri-testimonial-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.ri-testimonial-card {
  background: rgba(255, 255, 255, 0.06);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
  backdrop-filter: blur(4px);
  transition: transform var(--transition-base), background var(--transition-base);
  position: relative;
}
.ri-testimonial-card::before {
  content: '\201C';
  position: absolute;
  top: var(--space-4);
  right: var(--space-6);
  font-family: var(--font-accent);
  font-size: 4rem;
  line-height: 1;
  color: rgba(var(--color-accent-rgb), 0.15);
  filter: brightness(2);
}
.ri-testimonial-card:hover {
  transform: translateY(-3px);
  background: rgba(255, 255, 255, 0.09);
}
.ri-testimonial-stars {
  display: flex;
  gap: var(--space-1);
  margin-bottom: var(--space-4);
  color: var(--color-star);
}
.ri-testimonial-stars i,
.ri-testimonial-stars svg {
  width: 16px;
  height: 16px;
}
.ri-testimonial-card blockquote {
  font-size: var(--font-size-base);
  color: rgba(255, 255, 255, 0.88);
  line-height: 1.7;
  margin: 0 0 var(--space-6);
  font-style: italic;
}
.ri-testimonial-author {
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: rgba(255, 255, 255, 0.65);
}

/* ── 6. COMPARISON ───────────────────────────────────────────── */
.ri-comparison-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.ri-comparison-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
}
.ri-comparison-section .section-title h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.ri-comparison-section .section-title .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: var(--content-width);
  margin: 0 auto;
}
.ri-comparison-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-6);
  max-width: 920px;
  margin: 0 auto;
}
.ri-comparison-col {
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
}
.ri-comparison-col--free {
  background: var(--color-card-tint-neutral);
  border: 1px solid var(--color-border);
}
.ri-comparison-col--paid {
  background: var(--color-card-tint-3);
  border: 2px solid rgba(var(--color-accent-rgb), 0.2);
  box-shadow: var(--shadow-md);
  position: relative;
}
.ri-comparison-col--paid::before {
  content: 'Best Value';
  position: absolute;
  top: var(--space-4);
  right: var(--space-4);
  background: var(--color-accent);
  color: var(--color-white);
  font-size: var(--font-size-xs);
  font-weight: 700;
  padding: var(--space-1) var(--space-3);
  border-radius: var(--radius-full);
  text-transform: uppercase;
  letter-spacing: 0.05em;
}
.ri-comparison-col h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  margin: 0 0 var(--space-2);
  text-align: center;
}
.ri-comparison-col--free h3 {
  color: var(--color-text-light);
}
.ri-comparison-col--paid h3 {
  color: var(--color-accent);
}
.ri-comparison-price {
  text-align: center;
  font-family: var(--font-heading);
  font-size: var(--font-size-2xl);
  font-weight: 800;
  color: var(--color-primary);
  margin-bottom: var(--space-4);
  padding-bottom: var(--space-4);
  border-bottom: 1px solid var(--color-border);
}
.ri-comparison-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.ri-comparison-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  font-size: var(--font-size-sm);
  line-height: 1.6;
  color: var(--color-text);
}
.ri-comparison-list li i,
.ri-comparison-list li svg {
  flex-shrink: 0;
  width: 18px;
  height: 18px;
  margin-top: 2px;
}
.ri-comparison-col--free .ri-comparison-list li i,
.ri-comparison-col--free .ri-comparison-list li svg {
  color: var(--color-success);
}
.ri-comparison-col--paid .ri-comparison-list li i,
.ri-comparison-col--paid .ri-comparison-list li svg {
  color: var(--color-success);
}
.ri-comparison-note {
  margin-top: var(--space-6);
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  text-align: center;
  font-style: italic;
}

/* ── 7. FAQ ──────────────────────────────────────────────────── */
.ri-faq-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.ri-faq-section .ri-floating-accent {
  position: absolute;
  width: 270px;
  height: 270px;
  border-radius: 50% 50% 35% 65% / 55% 40% 60% 45%;
  background: rgba(var(--color-accent-rgb), 0.035);
  pointer-events: none;
  z-index: 0;
  top: 12%;
  left: -100px;
  animation: ri-float 12s ease-in-out infinite;
}
.ri-faq-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
  position: relative;
  z-index: 1;
}
.ri-faq-section .section-title h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.ri-faq-section .section-title .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: var(--content-width);
  margin: 0 auto;
}
.ri-faq-list {
  position: relative;
  z-index: 1;
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.ri-faq-item {
  border: 1px solid var(--color-border);
  border-radius: var(--radius-md);
  overflow: hidden;
  transition: box-shadow var(--transition-base);
}
.ri-faq-item:hover {
  box-shadow: var(--shadow-sm);
}
.ri-faq-item summary {
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
.ri-faq-item summary::-webkit-details-marker {
  display: none;
}
.ri-faq-item summary::after {
  content: '+';
  font-size: var(--font-size-xl);
  font-weight: 300;
  color: var(--color-accent);
  transition: transform var(--transition-base);
  flex-shrink: 0;
  margin-left: var(--space-4);
}
.ri-faq-item[open] summary::after {
  transform: rotate(45deg);
}
.ri-faq-item summary:hover {
  background: rgba(var(--color-primary-rgb), 0.03);
}
.ri-faq-answer {
  padding: 0 var(--space-6) var(--space-6);
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.75;
}

/* ── 8. FINAL CTA ────────────────────────────────────────────── */
.ri-final-cta {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  text-align: center;
  overflow: hidden;
}
.ri-final-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(var(--color-accent-rgb), 0.2) 0%, transparent 50%);
  pointer-events: none;
}
.ri-final-cta::after {
  content: '';
  position: absolute;
  bottom: -50px;
  left: 50%;
  transform: translateX(-50%);
  width: 600px;
  height: 200px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.06);
  filter: blur(60px);
  pointer-events: none;
}
.ri-final-cta .container {
  position: relative;
  z-index: 1;
}
.ri-final-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.ri-final-cta .answer-block {
  color: rgba(255, 255, 255, 0.82);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  max-width: 600px;
  margin: 0 auto var(--space-8);
}
.ri-final-cta .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: var(--space-4);
}

/* ── Related Services ────────────────────────────────────────── */
.ri-related-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.ri-related-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.ri-related-section .section-title h2 {
  text-wrap: balance;
}

/* ── Last Updated Stamp ──────────────────────────────────────── */
.ri-last-updated {
  text-align: center;
  padding: var(--space-6) 0;
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  border-top: 1px solid var(--color-border);
}

/* ── Float Animation Keyframes ───────────────────────────────── */
@keyframes ri-float {
  0%, 100% { transform: translateY(0) rotate(0deg); }
  50% { transform: translateY(-20px) rotate(3deg); }
}

/* ── Responsive ──────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .ri-expert-grid {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .ri-expert-grid .ri-expert-stat-block {
    order: -1;
    max-width: 320px;
    margin: 0 auto;
  }
  .ri-breakdown-asym {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .ri-process-timeline {
    grid-template-columns: repeat(2, 1fr);
  }
  .ri-process-timeline::before {
    display: none;
  }
  .ri-testimonial-grid {
    grid-template-columns: 1fr;
    max-width: 560px;
    margin: 0 auto;
  }
  .ri-comparison-grid {
    grid-template-columns: 1fr;
    max-width: 480px;
    margin: 0 auto;
  }
}
@media (max-width: 768px) {
  .hero--roof-inspection {
    min-height: 68vh;
    padding: var(--space-12) 0 var(--space-10);
  }
  .ri-bento-grid {
    grid-template-columns: 1fr;
  }
  .ri-checklist {
    grid-template-columns: 1fr;
  }
  .ri-process-timeline {
    grid-template-columns: 1fr;
    max-width: 340px;
    margin: 0 auto;
  }
  .hero--roof-inspection .hero-ctas {
    flex-direction: column;
  }
  .hero--roof-inspection .hero-ctas .btn {
    width: 100%;
    text-align: center;
    justify-content: center;
  }
  .ri-final-cta .hero-ctas {
    flex-direction: column;
    align-items: center;
  }
  .ri-final-cta .hero-ctas .btn {
    width: 100%;
    max-width: 320px;
    text-align: center;
    justify-content: center;
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 1 — HERO
     ═══════════════════════════════════════════════════════════════ -->
<section class="hero--roof-inspection" style="background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg');" aria-label="Roof inspection service in Omaha">
  <div class="container">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <span class="breadcrumb-current">Roof Inspection</span>
    </nav>
    <span class="eyebrow-label">
      Roofing Services <span class="eyebrow-dot" aria-hidden="true"></span> Omaha, NE
    </span>
    <h1>Professional <span class="accent-word">Roof Inspection</span> in Omaha, NE</h1>
    <p class="hero-answer">
      Crawford Roofing &amp; Gutters LLC is a licensed Nebraska roofing contractor based in Omaha, providing thorough roof inspections since 1993. We document storm damage, identify hidden leaks, and deliver insurance-ready reports with photo evidence — giving Omaha homeowners the information they need to protect their investment before small issues turn into major repairs.
    </p>
    <div class="hero-ctas">
      <a href="/contact/" class="btn btn-accent btn-lg">Schedule Free Inspection</a>
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
      <span class="hero-trust-item"><i data-lucide="camera" aria-hidden="true"></i> Photo-Documented Reports</span>
      <span class="hero-trust-item"><i data-lucide="star" aria-hidden="true"></i> 4.9 ★ Rated</span>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 2 — PROBLEM STATEMENT
     ═══════════════════════════════════════════════════════════════ -->
<section class="ri-problem-section" aria-label="Hidden roof damage signs in Omaha">
  <div class="ri-divider-angle ri-divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none">
      <path d="M0,55 L1200,0 L1200,0 L0,0 Z" fill="var(--color-primary)"></path>
    </svg>
  </div>
  <div class="ri-floating-accent" aria-hidden="true"></div>
  <div class="container">

    <p class="ri-pullquote reveal-scale">
      <span class="accent-mark">"</span>Most roof damage in Omaha starts invisible. By the time you see a ceiling stain or notice missing shingles from the driveway, water has already been working its way through your decking for weeks — sometimes months.<span class="accent-mark">"</span>
    </p>

    <div class="ri-bento-grid">
      <div class="ri-bento-card card-tint-1 reveal-up reveal-delay-1">
        <div class="ri-bento-card__icon"><i data-lucide="scan-eye" aria-hidden="true"></i></div>
        <h3>Granule Loss in Gutters</h3>
        <p>After Omaha hailstorms, asphalt granules collect in gutters and at downspout exits. This exposes the fiberglass mat underneath to UV degradation, cutting years off your shingle warranty and accelerating failure.</p>
      </div>
      <div class="ri-bento-card card-tint-2 reveal-up reveal-delay-2">
        <div class="ri-bento-card__icon"><i data-lucide="droplets" aria-hidden="true"></i></div>
        <h3>Ceiling Stains &amp; Paint Bubbles</h3>
        <p>Interior water stains often appear far from the actual roof leak. Water travels along rafters and sheathing before pooling at a low point — making the entry point almost impossible to locate without a professional roof inspection.</p>
      </div>
      <div class="ri-bento-card card-tint-3 reveal-left reveal-delay-1">
        <div class="ri-bento-card__icon"><i data-lucide="sun" aria-hidden="true"></i></div>
        <h3>Daylight Through the Attic</h3>
        <p>Visible light through attic decking boards means your underlayment and shingles have been compromised. In Nebraska winters, these gaps allow driven snow and ice melt to enter the roof system and saturate insulation.</p>
      </div>
      <div class="ri-bento-card card-tint-1 reveal-right reveal-delay-2">
        <div class="ri-bento-card__icon"><i data-lucide="wind" aria-hidden="true"></i></div>
        <h3>Curling &amp; Lifted Shingles</h3>
        <p>Omaha wind events regularly exceed 60 mph during spring and summer storms. Shingles that curl at the edges or lift at the nail line are one gust away from tearing free — exposing the decking to direct water intrusion.</p>
      </div>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 3 — EXPERT POSITIONING
     ═══════════════════════════════════════════════════════════════ -->
<section class="ri-expert-section" aria-label="Why choose Crawford for roof inspections">
  <div class="ri-divider-wave ri-divider-wave--top" aria-hidden="true">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none">
      <path d="M0,70 C200,10 400,60 600,30 C800,0 1000,50 1200,20 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>
  <div class="container">
    <div class="ri-expert-grid">

      <div class="ri-expert-stat-block reveal-scale">
        <span class="ri-expert-stat-number" data-target="<?php echo $yearsInBusiness; ?>"><?php echo $yearsInBusiness; ?>+</span>
        <span class="ri-expert-stat-label">Years Inspecting Omaha Roofs</span>
        <span class="ri-expert-stat-sub">Second-generation roofing expertise since 1993</span>
      </div>

      <div class="ri-expert-content reveal-right">
        <span class="eyebrow-label">Why Crawford</span>
        <h2>What Sets Crawford's <span class="text-accent">Roof Inspections</span> Apart in Omaha?</h2>
        <p class="answer-block">
          Crawford Roofing &amp; Gutters delivers roof inspections backed by <?php echo $yearsInBusiness; ?> years of hands-on Omaha roofing experience. We do not send salespeople to your property — our inspection crews are the same licensed contractors who perform repairs and replacements, so they know exactly what to look for and how to document it for insurance adjusters.
        </p>
        <ul class="ri-diff-list">
          <li class="ri-diff-item reveal-right reveal-delay-1">
            <div class="ri-diff-icon"><i data-lucide="file-text" aria-hidden="true"></i></div>
            <div class="ri-diff-text">
              <h4>Insurance-Ready Documentation</h4>
              <p>Every inspection includes date-stamped photos, damage classification per manufacturer specs, and a summary formatted for insurance adjusters at State Farm, Farmers, and other Omaha-area carriers.</p>
            </div>
          </li>
          <li class="ri-diff-item reveal-right reveal-delay-2">
            <div class="ri-diff-icon"><i data-lucide="camera" aria-hidden="true"></i></div>
            <div class="ri-diff-text">
              <h4>Photo-Documented Findings</h4>
              <p>We photograph every area of concern from multiple angles — close-up damage shots, wide context views, and attic interior images — so nothing is left to interpretation.</p>
            </div>
          </li>
          <li class="ri-diff-item reveal-right reveal-delay-3">
            <div class="ri-diff-icon"><i data-lucide="radio-tower" aria-hidden="true"></i></div>
            <div class="ri-diff-text">
              <h4>Drone-Assisted Assessment</h4>
              <p>For steep or complex rooflines common on Omaha's Aksarben Village and Regency-area homes, we use drone photography to capture damage on surfaces that are unsafe or inaccessible by ladder.</p>
            </div>
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 4 — SERVICE BREAKDOWN
     ═══════════════════════════════════════════════════════════════ -->
<section class="ri-breakdown-section" aria-label="What a roof inspection includes">
  <div class="ri-divider-angle ri-divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none">
      <path d="M0,0 L1200,55 L1200,0 L0,0 Z" fill="var(--color-bg-alt)"></path>
    </svg>
  </div>
  <div class="ri-floating-accent" aria-hidden="true"></div>
  <div class="container">

    <div class="ri-breakdown-asym">
      <div class="ri-breakdown-image reveal-left">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252517-ip8hel-roofing-contractors-milford-1024x778.jpg" alt="Crawford inspector examining roof shingles on an Omaha home after a storm" width="600" height="450" loading="lazy">
      </div>
      <div class="ri-breakdown-content reveal-right">
        <span class="eyebrow-label">12-Point Inspection</span>
        <h2>What Does Crawford's <span class="text-accent">12-Point Roof Inspection</span> Cover?</h2>
        <p class="answer-block">
          Our comprehensive 12-point inspection examines every component of your roofing system — from the shingles you see to the decking and ventilation you cannot. Each checkpoint is documented with photos and condition ratings, giving you a complete picture of your roof's health and remaining service life.
        </p>
        <ul class="ri-checklist">
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Shingle condition and granule retention</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Flashing at walls, chimneys, and vents</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Ridge cap and hip shingle integrity</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Pipe boot and vent seal condition</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Soffit and fascia board health</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Gutter attachment and drainage flow</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Attic ventilation and moisture levels</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Decking condition from interior access</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Skylight and chimney flashing seals</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Valley flashing and water channeling</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Drip edge and eave integrity</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Structural alignment and sagging</li>
        </ul>
      </div>
    </div>

    <!-- Process Timeline -->
    <div class="ri-timeline-heading reveal-up">
      <span class="eyebrow-label">Our Process</span>
      <h2>How Does a Professional <span class="text-accent">Roof Inspection</span> Work?</h2>
      <p class="answer-block">
        From scheduling to report delivery, Crawford's inspection process is built to be thorough without disrupting your day. Most Omaha residential inspections are completed in under 90 minutes, and your written report arrives within 24 hours — ready for insurance filing, home sale negotiation, or your own records.
      </p>
    </div>
    <div class="ri-process-timeline">
      <div class="ri-timeline-step reveal-up reveal-delay-1">
        <div class="ri-timeline-step__number">1</div>
        <h4>Schedule</h4>
        <p>Call or submit a request online. We typically schedule Omaha inspections within 48 hours — or same-day after major storm events.</p>
      </div>
      <div class="ri-timeline-step reveal-up reveal-delay-2">
        <div class="ri-timeline-step__number">2</div>
        <h4>Inspect</h4>
        <p>Our licensed crew walks the roof, checks the attic, photographs every finding, and tests flashings and seals for water penetration.</p>
      </div>
      <div class="ri-timeline-step reveal-up reveal-delay-3">
        <div class="ri-timeline-step__number">3</div>
        <h4>Document</h4>
        <p>We compile date-stamped photos, condition ratings, and damage classifications into a formal written report with repair recommendations.</p>
      </div>
      <div class="ri-timeline-step reveal-up reveal-delay-4">
        <div class="ri-timeline-step__number">4</div>
        <h4>Review</h4>
        <p>We walk you through the findings, answer questions, and — if repairs are needed — provide a transparent estimate the same week.</p>
      </div>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 5 — PROOF / REVIEWS
     ═══════════════════════════════════════════════════════════════ -->
<section class="ri-proof-section" aria-label="Customer testimonials about roof inspections">
  <div class="ri-divider-wave ri-divider-wave--top" aria-hidden="true">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none">
      <path d="M0,70 C300,10 600,50 900,20 C1050,5 1150,40 1200,25 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What Homeowners Say</span>
      <h2>What Do Omaha Homeowners Say About Crawford's <span class="text-accent" style="color:rgba(var(--color-accent-rgb),1);filter:brightness(1.7);">Roof Inspections</span>?</h2>
      <p class="answer-block">
        Homeowners across the Omaha metro rely on Crawford for honest, thorough roof inspections — especially after Nebraska's unpredictable storm seasons. Here is what clients from Elkhorn to Papillion have said about working with our inspection team.
      </p>
    </div>
    <div class="ri-testimonial-grid">
      <div class="ri-testimonial-card reveal-up reveal-delay-1">
        <div class="ri-testimonial-stars">
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
        </div>
        <blockquote>"After the June hailstorm, we had three roofers come out. Crawford was the only one who went into the attic and actually showed us moisture damage we could not see from outside. Their report got our State Farm claim approved in under two weeks."</blockquote>
        <cite class="ri-testimonial-author">— Linda M., Elkhorn</cite>
      </div>
      <div class="ri-testimonial-card reveal-up reveal-delay-2">
        <div class="ri-testimonial-stars">
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
        </div>
        <blockquote>"We were buying a 1978 split-level in La Vista and the general home inspector said the roof looked fine. Crawford found cracked pipe boots, missing kick flashing, and granule loss across the entire south face. Saved us from a $14,000 surprise after closing."</blockquote>
        <cite class="ri-testimonial-author">— Robert J., La Vista</cite>
      </div>
      <div class="ri-testimonial-card reveal-up reveal-delay-3">
        <div class="ri-testimonial-stars">
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
        </div>
        <blockquote>"I have had Crawford inspect my roof every spring for five years now. They are honest — told me last year my roof had another three to four good years left instead of pushing a replacement. That kind of straight talk is rare in this industry."</blockquote>
        <cite class="ri-testimonial-author">— Patricia C., Papillion</cite>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 6 — COMPARISON
     ═══════════════════════════════════════════════════════════════ -->
<section class="ri-comparison-section" aria-label="Free vs paid roof inspection comparison">
  <div class="ri-divider-angle ri-divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none">
      <path d="M0,0 L1200,55 L1200,0 L0,0 Z" fill="var(--color-primary)"></path>
    </svg>
  </div>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Know the Difference</span>
      <h2>What Is the Difference Between a <span class="text-accent">Free and Paid</span> Roof Inspection?</h2>
      <p class="answer-block">
        Crawford offers both free visual inspections and paid certified inspections. The right choice depends on whether you need a quick damage check after a storm or a formal report for an insurance claim, real estate transaction, or warranty dispute. Here is what each option includes.
      </p>
    </div>
    <div class="ri-comparison-grid">
      <div class="ri-comparison-col ri-comparison-col--free reveal-left">
        <h3>Free Storm Inspection</h3>
        <div class="ri-comparison-price">$0</div>
        <ul class="ri-comparison-list">
          <li><i data-lucide="check" aria-hidden="true"></i> Visual assessment of shingles and flashing</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Ground-level and ladder inspection</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Verbal findings with basic photo summary</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Repair or replacement recommendation</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Same-week scheduling after storms</li>
        </ul>
        <p class="ri-comparison-note">Ideal for post-storm damage checks and annual maintenance reviews</p>
      </div>
      <div class="ri-comparison-col ri-comparison-col--paid reveal-right">
        <h3>Certified Inspection Report</h3>
        <div class="ri-comparison-price">$150–$350</div>
        <ul class="ri-comparison-list">
          <li><i data-lucide="check" aria-hidden="true"></i> Full 12-point inspection with attic entry</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Drone photography for steep or complex roofs</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Date-stamped photo report with condition ratings</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Insurance-formatted damage classification</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Estimated remaining roof life assessment</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Manufacturer warranty cross-reference</li>
          <li><i data-lucide="check" aria-hidden="true"></i> On-site adjuster meeting available</li>
        </ul>
        <p class="ri-comparison-note">Required for insurance claims, real estate closings, and warranty disputes</p>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 7 — FAQ
     ═══════════════════════════════════════════════════════════════ -->
<section class="ri-faq-section" aria-label="Frequently asked questions about roof inspections in Omaha">
  <div class="ri-floating-accent" aria-hidden="true"></div>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">FAQ</span>
      <h2>What Do Omaha Homeowners Ask About <span class="text-accent">Roof Inspections</span>?</h2>
      <p class="answer-block">
        If you are searching for a roof inspection near me in Omaha, these are the questions our team hears most from homeowners across Douglas and Sarpy counties. Every answer draws on our <?php echo $yearsInBusiness; ?>+ years of local roofing experience.
      </p>
    </div>
    <div class="ri-faq-list">
      <?php foreach ($faqs as $i => $faq): ?>
      <details class="ri-faq-item reveal-up<?php echo ($i < 4) ? ' reveal-delay-' . ($i + 1) : ''; ?>">
        <summary><?php echo htmlspecialchars($faq['question']); ?></summary>
        <div class="ri-faq-answer">
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
<section class="ri-related-section" aria-label="Related roofing services">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">More Services</span>
      <h2>Other Services You May Need</h2>
    </div>
    <div class="services-grid" style="grid-template-columns: repeat(3, 1fr);">

      <article class="service-card-with-image card-tint-1 reveal-up reveal-delay-1">
        <div class="service-card__image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134251810-z2x055-IMG_95F75D69640F-1.jpeg" alt="Roof repair service by Crawford Roofing in Omaha, NE" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="shield" aria-hidden="true"></i></div>
          <h3>Roof Repair</h3>
          <p class="service-card__desc">Fast, reliable roof repairs for storm damage, leaks, and wind-lifted shingles.</p>
          <ul>
            <li>Emergency leak repair available</li>
            <li>Insurance claim assistance</li>
            <li>Extends your roof's service life</li>
          </ul>
          <a href="/services/roof-repair/" class="service-card__cta">Learn more</a>
        </div>
      </article>

      <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
        <div class="service-card__image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg" alt="Full roof replacement by Crawford in Omaha, NE" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="home" aria-hidden="true"></i></div>
          <h3>Roof Replacement</h3>
          <p class="service-card__desc">Complete tear-off and re-roof with quality materials rated for Nebraska weather.</p>
          <ul>
            <li>25-50 year shingle warranties</li>
            <li>Full decking inspection included</li>
            <li>Insurance-coordinated installs</li>
          </ul>
          <a href="/services/roof-replacement/" class="service-card__cta">Learn more</a>
        </div>
      </article>

      <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
        <div class="service-card__image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252517-ip8hel-roofing-contractors-milford-1024x778.jpg" alt="New roof installation in Omaha by Crawford Roofing" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="hammer" aria-hidden="true"></i></div>
          <h3>New Roof Installation</h3>
          <p class="service-card__desc">Expert installation on new construction and additions across the Omaha metro.</p>
          <ul>
            <li>Builder and homeowner partnerships</li>
            <li>Code-compliant ice and water shield</li>
            <li>Manufacturer-certified installers</li>
          </ul>
          <a href="/services/new-roof-installation/" class="service-card__cta">Learn more</a>
        </div>
      </article>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 8 — FINAL CTA
     ═══════════════════════════════════════════════════════════════ -->
<section class="ri-final-cta" aria-label="Schedule your roof inspection in Omaha">
  <div class="ri-divider-angle ri-divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none">
      <path d="M0,55 L1200,0 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>
  <div class="container">
    <h2 class="reveal-up">Ready to Get Your <span class="text-accent" style="color:rgba(var(--color-accent-rgb),1);filter:brightness(1.7);">Omaha Roof</span> Inspected?</h2>
    <p class="answer-block reveal-up reveal-delay-1">
      Crawford Roofing &amp; Gutters provides free storm damage inspections and certified inspection reports across the Omaha metro — from West Omaha and Aksarben to Bellevue, Papillion, La Vista, and Elkhorn. Schedule yours now and know exactly where your roof stands.
    </p>
    <div class="hero-ctas reveal-up reveal-delay-2">
      <a href="/contact/" class="btn btn-accent btn-lg">Schedule Free Inspection</a>
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
<div class="ri-last-updated">
  Last Updated: <?php echo date('F Y'); ?>
</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
