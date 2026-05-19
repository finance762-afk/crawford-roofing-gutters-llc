<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ───────────────────────────────────────────────
$pageTitle       = 'Gutter Addition Omaha NE | Add Gutters to Your Home | Crawford Roofing & Gutters LLC';
$pageDescription = 'Add gutters to your Omaha home with Crawford Roofing & Gutters LLC. Licensed NE contractor since 1993 — custom gutter addition, seamless aluminum, and steel systems. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/gutter-addition/';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg';
$currentPage     = 'services';
$heroImagePreload = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg';
$cssVersion      = '3';

// ── FAQ Data ─────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How much does gutter addition cost in Omaha?',
        'answer'   => 'Most Omaha gutter addition projects cost between $1,200 and $4,500 depending on linear footage, material selection, and the number of downspouts required. Aluminum seamless gutters fall on the lower end while copper and steel systems run higher. We provide free on-site estimates with transparent line-item pricing.',
    ],
    [
        'question' => 'How long does it take to add gutters to a house?',
        'answer'   => 'A standard single-story Omaha home typically takes one day for gutter addition. Two-story or complex rooflines with multiple valleys and dormers may extend to two days. Weather permitting, we schedule installations within one to two weeks of signed agreement.',
    ],
    [
        'question' => 'What gutter materials work best for Nebraska weather?',
        'answer'   => 'Seamless aluminum gutters handle Nebraska\'s freeze-thaw cycles, hailstorms, and heavy spring runoff extremely well. They resist rust and expand without cracking in sub-zero temperatures. For premium longevity, steel and copper systems withstand even the harshest Omaha winters.',
    ],
    [
        'question' => 'Can you add gutters to a home that never had them?',
        'answer'   => 'Absolutely. Many older Omaha homes — especially those built before the 1970s in neighborhoods like Dundee and Benson — were constructed without gutters. We install fascia brackets and custom-fabricated gutter runs on homes that have never had a gutter system before.',
    ],
    [
        'question' => 'Do new gutters help prevent basement flooding in Omaha?',
        'answer'   => 'Yes. Omaha sits in the Missouri River basin where clay-heavy soils hold water against foundations. Gutters channel roof runoff away from the foundation through downspouts extended at least four feet from the house, significantly reducing hydrostatic pressure and basement water intrusion.',
    ],
    [
        'question' => 'What size gutters should I choose for my Omaha home?',
        'answer'   => 'Most residential gutter additions in Omaha use 5-inch K-style gutters with 2x3-inch downspouts. Homes with steep roof pitches or large roof surface area benefit from 6-inch gutters and 3x4-inch downspouts to handle the volume from Nebraska thunderstorms.',
    ],
    [
        'question' => 'Will gutter addition damage my existing roof or fascia?',
        'answer'   => 'No. Our installation process uses hidden hangers screwed directly into the fascia board every 24 inches. We inspect the fascia condition before mounting and replace any rotted sections. The gutter system protects the fascia from further moisture damage going forward.',
    ],
    [
        'question' => 'Does Crawford offer gutter guards with new gutter addition?',
        'answer'   => 'Yes. We offer micro-mesh and reverse-curve gutter guard options installed alongside new gutters. This is especially popular in Omaha neighborhoods with heavy cottonwood and elm canopy where debris clogs gutters within weeks during spring and fall.',
    ],
];

// ── Schema ───────────────────────────────────────────────────
$currentService = null;
foreach ($services as $s) {
    if ($s['slug'] === 'gutter-addition') {
        $currentService = $s;
        break;
    }
}
$serviceSchema    = generateServiceSchema($currentService, $siteUrl, $siteName, $address);
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',            'url' => $siteUrl . '/'],
    ['name' => 'Services',        'url' => $siteUrl . '/services/'],
    ['name' => 'Gutter Addition', 'url' => $siteUrl . '/services/gutter-addition/'],
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
   Gutter Addition — Page-Specific Styles
   Premium Tier — Editorial 8-Section Layout
   Crawford Roofing & Gutters LLC
   ═══════════════════════════════════════════════════════════════ */

/* ── 1. HERO ─────────────────────────────────────────────────── */
.hero--gutter-addition {
  position: relative;
  min-height: 75vh;
  display: flex;
  align-items: center;
  background-size: cover;
  background-position: center 30%;
  background-repeat: no-repeat;
  overflow: hidden;
  padding: var(--space-16) 0 var(--space-12);
}
.hero--gutter-addition::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    170deg,
    rgba(var(--color-primary-rgb), 0.94) 0%,
    rgba(var(--color-primary-rgb), 0.80) 45%,
    rgba(var(--color-secondary-rgb), 0.72) 100%
  );
  z-index: 1;
}
.hero--gutter-addition::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  opacity: 0.14;
  z-index: 1;
  pointer-events: none;
}
.hero--gutter-addition .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.hero--gutter-addition .eyebrow-label {
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
.hero--gutter-addition .eyebrow-label .eyebrow-dot {
  width: 5px;
  height: 5px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.hero--gutter-addition h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 3.75rem);
  line-height: 1.1;
  margin-bottom: var(--space-6);
  text-wrap: balance;
  max-width: 18ch;
}
.hero--gutter-addition h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.7);
}
.hero--gutter-addition .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 620px;
  margin-bottom: var(--space-8);
}
.hero--gutter-addition .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-10);
}
.hero--gutter-addition .hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  align-items: center;
}
.hero--gutter-addition .hero-trust-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.75);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.hero--gutter-addition .hero-trust-item i,
.hero--gutter-addition .hero-trust-item svg {
  width: 16px;
  height: 16px;
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(2);
}

/* ── Section Dividers ────────────────────────────────────────── */
.divider-angle {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.divider-angle--top {
  top: -1px;
}
.divider-angle--bottom {
  bottom: -1px;
}
.divider-angle svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 55px;
}
.divider-curve {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.divider-curve--top {
  top: -1px;
}
.divider-curve--bottom {
  bottom: -1px;
}
.divider-curve svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 65px;
}

/* ── 2. PROBLEM STATEMENT ────────────────────────────────────── */
.problem-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.problem-section .floating-accent {
  position: absolute;
  width: 320px;
  height: 320px;
  border-radius: 40% 60% 70% 30% / 40% 30% 70% 60%;
  background: rgba(var(--color-accent-rgb), 0.04);
  pointer-events: none;
  z-index: 0;
  top: -60px;
  right: -120px;
  animation: ga-float 12s ease-in-out infinite;
}
.problem-pullquote {
  position: relative;
  z-index: 1;
  font-family: var(--font-accent);
  font-size: clamp(1.35rem, 2.5vw, 1.85rem);
  line-height: 1.55;
  color: var(--color-primary);
  font-style: italic;
  max-width: 50ch;
  margin: 0 auto var(--space-12);
  text-align: center;
  padding: var(--space-8) var(--space-4);
  border-left: 4px solid rgba(var(--color-accent-rgb), 0.4);
  border-right: 4px solid rgba(var(--color-accent-rgb), 0.4);
}
.problem-pullquote .accent-mark {
  color: rgba(var(--color-accent-rgb), 1);
  font-weight: 700;
  font-style: normal;
}
.bento-grid {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-6);
  max-width: 900px;
  margin: 0 auto;
}
.bento-card {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.bento-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.bento-card__icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.1);
  color: var(--color-accent);
}
.bento-card__icon i,
.bento-card__icon svg {
  width: 22px;
  height: 22px;
}
.bento-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin: 0;
  line-height: 1.3;
}
.bento-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.65;
  margin: 0;
}

/* ── 3. EXPERT POSITIONING ───────────────────────────────────── */
.expert-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.expert-grid {
  display: grid;
  grid-template-columns: 1.5fr 1fr;
  gap: var(--space-12);
  align-items: center;
}
.expert-stat-block {
  text-align: center;
  padding: var(--space-10) var(--space-6);
  background: var(--color-primary);
  border-radius: var(--radius-xl);
  color: var(--color-white);
  position: relative;
  overflow: hidden;
}
.expert-stat-block::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(var(--color-accent-rgb), 0.15) 0%, transparent 60%);
  pointer-events: none;
}
.expert-stat-number {
  font-family: var(--font-heading);
  font-size: clamp(3.5rem, 8vw, 5.5rem);
  font-weight: 900;
  line-height: 1;
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.8);
  position: relative;
  z-index: 1;
}
.expert-stat-label {
  font-family: var(--font-accent);
  font-size: var(--font-size-lg);
  color: rgba(255, 255, 255, 0.8);
  margin-top: var(--space-2);
  position: relative;
  z-index: 1;
}
.expert-content h2 {
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.expert-content .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  margin-bottom: var(--space-8);
  max-width: var(--content-width);
}
.differentiator-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
}
.differentiator-item {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.differentiator-icon {
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
.differentiator-icon i,
.differentiator-icon svg {
  width: 20px;
  height: 20px;
}
.differentiator-text h4 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0 0 var(--space-1) 0;
}
.differentiator-text p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  margin: 0;
  line-height: 1.6;
}

/* ── 4. SERVICE BREAKDOWN ────────────────────────────────────── */
.breakdown-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.breakdown-section .floating-accent {
  position: absolute;
  width: 280px;
  height: 280px;
  border-radius: 30% 70% 50% 50% / 60% 40% 60% 40%;
  background: rgba(var(--color-primary-rgb), 0.04);
  pointer-events: none;
  z-index: 0;
  bottom: -80px;
  left: -100px;
  animation: ga-float 15s ease-in-out infinite reverse;
}
.breakdown-split {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-12);
  margin-bottom: var(--space-12);
}
.breakdown-image {
  border-radius: var(--radius-lg);
  overflow: hidden;
  position: relative;
}
.breakdown-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.breakdown-image:hover img {
  transform: scale(1.03);
}
.breakdown-image::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: var(--radius-lg);
  box-shadow: inset 0 0 0 1px rgba(var(--color-primary-rgb), 0.08);
  pointer-events: none;
}
.breakdown-content h2 {
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.breakdown-content .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  margin-bottom: var(--space-8);
}
.included-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.included-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  font-size: var(--font-size-base);
  color: var(--color-text);
  line-height: 1.55;
}
.included-list li i,
.included-list li svg {
  flex-shrink: 0;
  width: 20px;
  height: 20px;
  color: var(--color-success);
  margin-top: 2px;
}

/* Process Timeline */
.timeline-heading {
  text-align: center;
  margin-bottom: var(--space-10);
  position: relative;
  z-index: 1;
}
.timeline-heading h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.timeline-heading .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: var(--content-width);
  margin: 0 auto;
}
.process-timeline {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
}
.process-timeline::before {
  content: '';
  position: absolute;
  top: 40px;
  left: 12.5%;
  right: 12.5%;
  height: 2px;
  background: linear-gradient(90deg, rgba(var(--color-accent-rgb), 0.3), rgba(var(--color-accent-rgb), 0.15));
  z-index: 0;
}
.timeline-step {
  text-align: center;
  position: relative;
  z-index: 1;
}
.timeline-step__number {
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
.timeline-step__number::after {
  content: '';
  position: absolute;
  inset: -4px;
  border-radius: var(--radius-full);
  border: 2px solid rgba(var(--color-accent-rgb), 0.25);
}
.timeline-step h4 {
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  color: var(--color-primary);
  margin: 0 0 var(--space-2);
  text-transform: uppercase;
  letter-spacing: 0.03em;
}
.timeline-step p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  margin: 0;
}

/* ── 5. PROOF / REVIEWS ──────────────────────────────────────── */
.proof-section {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.proof-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(145deg, rgba(var(--color-accent-rgb), 0.12) 0%, transparent 50%);
  pointer-events: none;
}
.proof-section .container {
  position: relative;
  z-index: 1;
}
.proof-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
}
.proof-section .section-title .eyebrow-label {
  color: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.proof-section .section-title h2 {
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.proof-section .section-title .answer-block {
  color: rgba(255, 255, 255, 0.75);
  line-height: 1.7;
  max-width: var(--content-width);
  margin: 0 auto;
}
.testimonial-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.testimonial-card {
  background: rgba(255, 255, 255, 0.06);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
  backdrop-filter: blur(4px);
  transition: transform var(--transition-base), background var(--transition-base);
}
.testimonial-card:hover {
  transform: translateY(-3px);
  background: rgba(255, 255, 255, 0.09);
}
.testimonial-stars {
  display: flex;
  gap: var(--space-1);
  margin-bottom: var(--space-4);
  color: var(--color-star);
}
.testimonial-stars i,
.testimonial-stars svg {
  width: 16px;
  height: 16px;
}
.testimonial-card blockquote {
  font-size: var(--font-size-base);
  color: rgba(255, 255, 255, 0.88);
  line-height: 1.7;
  margin: 0 0 var(--space-6);
  font-style: italic;
}
.testimonial-author {
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: rgba(255, 255, 255, 0.65);
}

/* ── 6. COMPARISON ───────────────────────────────────────────── */
.comparison-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.comparison-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
}
.comparison-section .section-title h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.comparison-section .section-title .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: var(--content-width);
  margin: 0 auto;
}
.comparison-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-6);
  max-width: 900px;
  margin: 0 auto;
}
.comparison-col {
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
}
.comparison-col--other {
  background: var(--color-card-tint-neutral);
  border: 1px solid var(--color-border);
}
.comparison-col--crawford {
  background: var(--color-card-tint-3);
  border: 2px solid rgba(var(--color-accent-rgb), 0.2);
  box-shadow: var(--shadow-md);
}
.comparison-col h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  margin: 0 0 var(--space-6);
  text-align: center;
  padding-bottom: var(--space-4);
  border-bottom: 1px solid var(--color-border);
}
.comparison-col--other h3 {
  color: var(--color-text-light);
}
.comparison-col--crawford h3 {
  color: var(--color-accent);
}
.comparison-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.comparison-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  font-size: var(--font-size-sm);
  line-height: 1.6;
  color: var(--color-text);
}
.comparison-list li i,
.comparison-list li svg {
  flex-shrink: 0;
  width: 18px;
  height: 18px;
  margin-top: 2px;
}
.comparison-col--other .comparison-list li i,
.comparison-col--other .comparison-list li svg {
  color: var(--color-danger);
}
.comparison-col--crawford .comparison-list li i,
.comparison-col--crawford .comparison-list li svg {
  color: var(--color-success);
}

/* ── 7. FAQ ──────────────────────────────────────────────────── */
.faq-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.faq-section .floating-accent {
  position: absolute;
  width: 260px;
  height: 260px;
  border-radius: 50% 50% 30% 70% / 60% 40% 60% 40%;
  background: rgba(var(--color-accent-rgb), 0.04);
  pointer-events: none;
  z-index: 0;
  top: 10%;
  left: -90px;
  animation: ga-float 11s ease-in-out infinite;
}
.faq-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
  position: relative;
  z-index: 1;
}
.faq-section .section-title h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.faq-section .section-title .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: var(--content-width);
  margin: 0 auto;
}
.faq-list {
  position: relative;
  z-index: 1;
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.faq-item {
  border: 1px solid var(--color-border);
  border-radius: var(--radius-md);
  overflow: hidden;
  transition: box-shadow var(--transition-base);
}
.faq-item:hover {
  box-shadow: var(--shadow-sm);
}
.faq-item summary {
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
.faq-item summary::-webkit-details-marker {
  display: none;
}
.faq-item summary::after {
  content: '+';
  font-size: var(--font-size-xl);
  font-weight: 300;
  color: var(--color-accent);
  transition: transform var(--transition-base);
  flex-shrink: 0;
  margin-left: var(--space-4);
}
.faq-item[open] summary::after {
  transform: rotate(45deg);
}
.faq-item summary:hover {
  background: rgba(var(--color-primary-rgb), 0.03);
}
.faq-answer {
  padding: 0 var(--space-6) var(--space-6);
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.75;
}

/* ── 8. FINAL CTA ────────────────────────────────────────────── */
.final-cta-section {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  text-align: center;
  overflow: hidden;
}
.final-cta-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(var(--color-accent-rgb), 0.18) 0%, transparent 55%);
  pointer-events: none;
}
.final-cta-section .container {
  position: relative;
  z-index: 1;
}
.final-cta-section h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.final-cta-section .answer-block {
  color: rgba(255, 255, 255, 0.82);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  max-width: 600px;
  margin: 0 auto var(--space-8);
}
.final-cta-section .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: var(--space-4);
}

/* ── Related Services ────────────────────────────────────────── */
.related-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.related-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.related-section .section-title h2 {
  text-wrap: balance;
}

/* ── Last Updated Stamp ──────────────────────────────────────── */
.last-updated {
  text-align: center;
  padding: var(--space-6) 0;
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  border-top: 1px solid var(--color-border);
}

/* ── Float Animation Keyframes ───────────────────────────────── */
@keyframes ga-float {
  0%, 100% { transform: translateY(0) rotate(0deg); }
  50% { transform: translateY(-18px) rotate(2deg); }
}

/* ── Responsive ──────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .expert-grid {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .expert-stat-block {
    max-width: 320px;
    margin: 0 auto;
  }
  .breakdown-split {
    grid-template-columns: 1fr;
  }
  .process-timeline {
    grid-template-columns: repeat(2, 1fr);
  }
  .process-timeline::before {
    display: none;
  }
  .testimonial-grid {
    grid-template-columns: 1fr;
    max-width: 560px;
    margin: 0 auto;
  }
  .comparison-grid {
    grid-template-columns: 1fr;
  }
}
@media (max-width: 768px) {
  .hero--gutter-addition {
    min-height: 65vh;
    padding: var(--space-12) 0 var(--space-10);
  }
  .bento-grid {
    grid-template-columns: 1fr;
  }
  .process-timeline {
    grid-template-columns: 1fr;
    max-width: 340px;
    margin: 0 auto;
  }
  .hero--gutter-addition .hero-ctas {
    flex-direction: column;
  }
  .hero--gutter-addition .hero-ctas .btn {
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
<section class="hero--gutter-addition" style="background-image: url('<?php echo htmlspecialchars($heroImagePreload); ?>');" aria-label="Gutter addition service in Omaha">
  <div class="container">
    <span class="eyebrow-label">
      Gutter Services <span class="eyebrow-dot" aria-hidden="true"></span> Omaha, NE
    </span>
    <h1>Professional <span class="accent-word">Gutter Addition</span> for Omaha Homes</h1>
    <p class="hero-answer">
      Crawford Roofing &amp; Gutters LLC is a licensed Nebraska contractor that has served the Omaha metro since 1993. We add complete gutter systems to homes and commercial buildings that currently lack proper water drainage — protecting your foundation, fascia, and landscaping from Nebraska's intense seasonal rainfall.
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
     SECTION 2 — PROBLEM STATEMENT
     ═══════════════════════════════════════════════════════════════ -->
<section class="problem-section" aria-label="Why gutters matter in Omaha">
  <div class="divider-angle divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none">
      <path d="M0,55 L1200,0 L1200,0 L0,0 Z" fill="var(--color-primary)"></path>
    </svg>
  </div>
  <div class="floating-accent" aria-hidden="true"></div>
  <div class="container">

    <p class="problem-pullquote reveal-scale">
      <span class="accent-mark">"</span>A home without gutters in Omaha is a foundation problem waiting to happen. Every major rainstorm dumps hundreds of gallons directly against your house — and Nebraska's clay soils hold that water like a sponge.<span class="accent-mark">"</span>
    </p>

    <div class="bento-grid">
      <div class="bento-card card-tint-1 reveal-up reveal-delay-1">
        <div class="bento-card__icon"><i data-lucide="droplets" aria-hidden="true"></i></div>
        <h3>Foundation Erosion</h3>
        <p>Without gutters, concentrated roof runoff carves channels along your foundation walls. In Omaha's clay-heavy Missouri River basin soil, this leads to settling, cracks, and costly structural repair.</p>
      </div>
      <div class="bento-card card-tint-2 reveal-up reveal-delay-2">
        <div class="bento-card__icon"><i data-lucide="snowflake" aria-hidden="true"></i></div>
        <h3>Ice Dam Buildup</h3>
        <p>Nebraska winters push temperatures well below zero. Meltwater pooling at your roof edge refreezes into ice dams that pry shingles loose, penetrate decking, and cause interior ceiling leaks.</p>
      </div>
      <div class="bento-card card-tint-3 reveal-left reveal-delay-1">
        <div class="bento-card__icon"><i data-lucide="paintbrush" aria-hidden="true"></i></div>
        <h3>Fascia &amp; Siding Rot</h3>
        <p>Water cascading off an unprotected roofline saturates fascia boards and splashes mud onto siding. Over two to three Omaha storm seasons, wood rot and mold set in permanently.</p>
      </div>
      <div class="bento-card card-tint-1 reveal-right reveal-delay-2">
        <div class="bento-card__icon"><i data-lucide="flower-2" aria-hidden="true"></i></div>
        <h3>Landscape Washout</h3>
        <p>Heavy spring storms and late-summer downpours erode mulch beds, drown plantings, and create muddy trenches along the drip line — destroying curb appeal one storm at a time.</p>
      </div>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 3 — EXPERT POSITIONING
     ═══════════════════════════════════════════════════════════════ -->
<section class="expert-section" aria-label="Why choose Crawford for gutter addition">
  <div class="divider-curve divider-curve--top" aria-hidden="true">
    <svg viewBox="0 0 1200 65" preserveAspectRatio="none">
      <path d="M0,65 C300,0 900,0 1200,65 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>
  <div class="container">
    <div class="expert-grid">

      <div class="expert-content reveal-left">
        <span class="eyebrow-label">Why Crawford</span>
        <h2>What Makes Crawford the Right Choice for <span class="text-accent">Gutter Addition</span> in Omaha?</h2>
        <p class="answer-block">
          Crawford Roofing &amp; Gutters brings <?php echo $yearsInBusiness; ?> years of second-generation expertise to every gutter addition project in the Omaha metro. We custom-fabricate seamless aluminum gutters on-site to fit your roofline precisely, ensuring zero leaks at seams and maximum water flow capacity during Nebraska thunderstorms.
        </p>
        <ul class="differentiator-list">
          <li class="differentiator-item reveal-left reveal-delay-1">
            <div class="differentiator-icon"><i data-lucide="ruler" aria-hidden="true"></i></div>
            <div class="differentiator-text">
              <h4>On-Site Fabrication</h4>
              <p>We roll seamless gutters at your property with a portable forming machine — no factory pre-cuts that rely on imprecise measurements.</p>
            </div>
          </li>
          <li class="differentiator-item reveal-left reveal-delay-2">
            <div class="differentiator-icon"><i data-lucide="map-pin" aria-hidden="true"></i></div>
            <div class="differentiator-text">
              <h4>Built for Missouri River Basin Drainage</h4>
              <p>We size downspouts and gutter runs for the volume Nebraska storms deliver — not generic national averages that underperform locally.</p>
            </div>
          </li>
          <li class="differentiator-item reveal-left reveal-delay-3">
            <div class="differentiator-icon"><i data-lucide="hard-hat" aria-hidden="true"></i></div>
            <div class="differentiator-text">
              <h4>Fascia Inspection Included</h4>
              <p>Before mounting, we inspect and replace any rotted or water-damaged fascia boards — because mounting gutters on compromised wood causes early failure.</p>
            </div>
          </li>
        </ul>
      </div>

      <div class="expert-stat-block reveal-scale">
        <span class="expert-stat-number" data-target="<?php echo $yearsInBusiness; ?>"><?php echo $yearsInBusiness; ?>+</span>
        <span class="expert-stat-label">Years Protecting Omaha Homes</span>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 4 — SERVICE BREAKDOWN
     ═══════════════════════════════════════════════════════════════ -->
<section class="breakdown-section" aria-label="What gutter addition includes">
  <div class="divider-angle divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none">
      <path d="M0,0 L1200,55 L1200,0 L0,0 Z" fill="var(--color-bg-alt)"></path>
    </svg>
  </div>
  <div class="floating-accent" aria-hidden="true"></div>
  <div class="container">

    <div class="breakdown-split">
      <div class="breakdown-image reveal-left">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134049337-o7oznv-dff36b_a35b2df95a814ec49799d0169f3a87da_mv2.jpg" alt="Crawford crew installing seamless gutters on an Omaha residence" width="600" height="400" loading="lazy">
      </div>
      <div class="breakdown-content reveal-right">
        <span class="eyebrow-label">What's Included</span>
        <h2>What Does a Complete <span class="text-accent">Gutter Addition</span> Include?</h2>
        <p class="answer-block">
          Every gutter addition from Crawford includes a full property assessment, fascia board inspection and repair, custom on-site gutter fabrication, professional mounting with hidden brackets, downspout installation routed away from your foundation, and a post-install flow test to confirm proper drainage.
        </p>
        <ul class="included-list">
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Roof edge and fascia board condition assessment</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Rotted fascia replacement before gutter mounting</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> On-site seamless aluminum gutter fabrication</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Hidden hanger brackets every 24 inches</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Downspouts extended 4+ feet from foundation</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Water flow test and final walk-through</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Full job-site cleanup and debris removal</li>
        </ul>
      </div>
    </div>

    <!-- Process Timeline -->
    <div class="timeline-heading reveal-up">
      <span class="eyebrow-label">Our Process</span>
      <h2>How Does Crawford's <span class="text-accent">Gutter Addition Process</span> Work?</h2>
      <p class="answer-block">
        From your first call to the final flow test, our four-step process keeps your gutter addition on schedule and transparent. Most single-story Omaha homes are completed in a single day — with zero hidden charges added after the estimate.
      </p>
    </div>
    <div class="process-timeline">
      <div class="timeline-step reveal-up reveal-delay-1">
        <div class="timeline-step__number">1</div>
        <h4>Free Inspection</h4>
        <p>We measure your roofline, check fascia condition, and assess drainage needs specific to your lot's grade and soil type.</p>
      </div>
      <div class="timeline-step reveal-up reveal-delay-2">
        <div class="timeline-step__number">2</div>
        <h4>Custom Estimate</h4>
        <p>You receive a transparent line-item quote covering materials, labor, and any fascia repair — typically same-day or within 24 hours.</p>
      </div>
      <div class="timeline-step reveal-up reveal-delay-3">
        <div class="timeline-step__number">3</div>
        <h4>On-Site Install</h4>
        <p>Our crew arrives on schedule, fabricates seamless gutters on your property, mounts them with hidden brackets, and routes downspouts away from the foundation.</p>
      </div>
      <div class="timeline-step reveal-up reveal-delay-4">
        <div class="timeline-step__number">4</div>
        <h4>Flow Test &amp; Cleanup</h4>
        <p>We run water through the full system to confirm drainage, clean up all debris, and walk you through the completed work before leaving.</p>
      </div>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 5 — PROOF / REVIEWS
     ═══════════════════════════════════════════════════════════════ -->
<section class="proof-section" aria-label="Customer testimonials">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What Homeowners Say</span>
      <h2>What Do Omaha Customers Say About Crawford's <span class="text-accent" style="color:rgba(var(--color-accent-rgb),1);filter:brightness(1.7);">Gutter Work</span>?</h2>
      <p class="answer-block">
        Omaha homeowners trust Crawford for gutter addition because we show up on time, install clean seamless systems, and leave properties spotless. Here is what recent clients have shared about their experience working with our crew.
      </p>
    </div>
    <div class="testimonial-grid">
      <div class="testimonial-card reveal-up reveal-delay-1">
        <div class="testimonial-stars">
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
        </div>
        <blockquote>"Our 1960s ranch in Dundee never had gutters — every storm left standing water against the basement wall. Crawford measured everything, fabricated the gutters right in our driveway, and had it all installed before lunch. First big rain since then and zero water in the basement."</blockquote>
        <cite class="testimonial-author">— Mike T., West Omaha</cite>
      </div>
      <div class="testimonial-card reveal-up reveal-delay-2">
        <div class="testimonial-stars">
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
        </div>
        <blockquote>"We called three gutter companies. Crawford was the only one who checked the fascia boards before quoting. They found rot on the north side, replaced it, and still came in under the other two bids. Really thorough crew."</blockquote>
        <cite class="testimonial-author">— Sarah K., Papillion</cite>
      </div>
      <div class="testimonial-card reveal-up reveal-delay-3">
        <div class="testimonial-stars">
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
        </div>
        <blockquote>"After the cottonwood seeds clogged our old sectional gutters for the last time, we had Crawford tear them off and install seamless aluminum with gutter guards. Best home improvement decision we have made in 15 years."</blockquote>
        <cite class="testimonial-author">— Dan R., Elkhorn</cite>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 6 — COMPARISON
     ═══════════════════════════════════════════════════════════════ -->
<section class="comparison-section" aria-label="Crawford vs other gutter contractors">
  <div class="divider-curve divider-curve--top" aria-hidden="true">
    <svg viewBox="0 0 1200 65" preserveAspectRatio="none">
      <path d="M0,65 C300,0 900,0 1200,65 L1200,0 L0,0 Z" fill="var(--color-primary)"></path>
    </svg>
  </div>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">The Difference</span>
      <h2>How Does Crawford Compare to Other <span class="text-accent">Gutter Contractors</span> in Omaha?</h2>
      <p class="answer-block">
        Not every gutter company in the Omaha metro approaches installation the same way. Here is how Crawford's process stacks up against what we commonly see from competitors across Douglas and Sarpy counties.
      </p>
    </div>
    <div class="comparison-grid">
      <div class="comparison-col comparison-col--other reveal-left">
        <h3>Other Contractors</h3>
        <ul class="comparison-list">
          <li><i data-lucide="x" aria-hidden="true"></i> Pre-cut sectional gutters with leak-prone seams</li>
          <li><i data-lucide="x" aria-hidden="true"></i> Mount gutters over rotted fascia without inspection</li>
          <li><i data-lucide="x" aria-hidden="true"></i> Generic downspout placement — water pools near foundation</li>
          <li><i data-lucide="x" aria-hidden="true"></i> No post-install flow test — problems found during first storm</li>
          <li><i data-lucide="x" aria-hidden="true"></i> Vague verbal estimates with hidden add-ons</li>
        </ul>
      </div>
      <div class="comparison-col comparison-col--crawford reveal-right">
        <h3>Crawford Roofing &amp; Gutters</h3>
        <ul class="comparison-list">
          <li><i data-lucide="check" aria-hidden="true"></i> On-site seamless fabrication — zero mid-run seams</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Full fascia inspection and repair before mounting</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Downspouts routed 4+ feet from foundation per slope</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Water flow test before crew leaves the property</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Transparent line-item written estimate — no surprises</li>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 7 — FAQ
     ═══════════════════════════════════════════════════════════════ -->
<section class="faq-section" aria-label="Frequently asked questions about gutter addition">
  <div class="floating-accent" aria-hidden="true"></div>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">FAQ</span>
      <h2>What Do Omaha Homeowners Ask About <span class="text-accent">Gutter Addition</span>?</h2>
      <p class="answer-block">
        If you are searching for gutter addition near me in Omaha, these are the questions we hear most often from homeowners across the metro area. Each answer reflects our <?php echo $yearsInBusiness; ?>+ years of local installation experience.
      </p>
    </div>
    <div class="faq-list">
      <?php foreach ($faqs as $i => $faq): ?>
      <details class="faq-item reveal-up<?php echo ($i < 4) ? ' reveal-delay-' . ($i + 1) : ''; ?>">
        <summary><?php echo htmlspecialchars($faq['question']); ?></summary>
        <div class="faq-answer">
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
<section class="related-section" aria-label="Related services">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">More Services</span>
      <h2>Other Services You May Need</h2>
    </div>
    <div class="services-grid" style="grid-template-columns: repeat(3, 1fr);">

      <article class="service-card-with-image card-tint-1 reveal-up reveal-delay-1">
        <div class="service-card__image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg" alt="Professional gutter installation service in Omaha, NE" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="filter" aria-hidden="true"></i></div>
          <h3>Gutter Installation</h3>
          <p class="service-card__desc">Professional gutter installation for Omaha residential and commercial properties.</p>
          <ul>
            <li>Seamless and sectional options</li>
            <li>Handles heavy Omaha rainfall</li>
            <li>Professional slope calibration</li>
          </ul>
          <a href="/services/gutter-installation/" class="service-card__cta">Learn more</a>
        </div>
      </article>

      <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
        <div class="service-card__image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134251810-z2x055-IMG_95F75D69640F-1.jpeg" alt="Gutter repair service by Crawford in Omaha" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="wrench" aria-hidden="true"></i></div>
          <h3>Gutter Repair</h3>
          <p class="service-card__desc">Expert gutter repair to fix leaks, sagging, and storm damage fast.</p>
          <ul>
            <li>Fixes leaks and sagging fast</li>
            <li>Storm damage restoration</li>
            <li>Prevents interior water damage</li>
          </ul>
          <a href="/services/gutter-repair/" class="service-card__cta">Learn more</a>
        </div>
      </article>

      <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
        <div class="service-card__image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg" alt="Roof inspection service in Omaha by Crawford" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="search" aria-hidden="true"></i></div>
          <h3>Roof Inspection</h3>
          <p class="service-card__desc">Comprehensive roof inspections to catch damage before it becomes costly.</p>
          <ul>
            <li>Detailed written report included</li>
            <li>Storm and hail assessment</li>
            <li>Insurance documentation ready</li>
          </ul>
          <a href="/services/roof-inspection/" class="service-card__cta">Learn more</a>
        </div>
      </article>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 8 — FINAL CTA
     ═══════════════════════════════════════════════════════════════ -->
<section class="final-cta-section" aria-label="Get a free gutter addition estimate">
  <div class="divider-angle divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none">
      <path d="M0,55 L1200,0 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>
  <div class="container">
    <h2 class="reveal-up">Ready to Add Gutters to Your <span class="text-accent" style="color:rgba(var(--color-accent-rgb),1);filter:brightness(1.7);">Omaha Home</span>?</h2>
    <p class="answer-block reveal-up reveal-delay-1">
      Crawford Roofing &amp; Gutters provides free, no-obligation gutter addition estimates across the Omaha metro — from West Omaha to Bellevue, Papillion to Elkhorn. Call now or fill out the form and our team will respond within one business day.
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
<div class="last-updated">
  Last Updated: <?php echo date('F Y'); ?>
</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
