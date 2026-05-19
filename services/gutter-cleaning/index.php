<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ───────────────────────────────────────────────
$pageTitle       = 'Gutter Cleaning Omaha NE | Professional Gutter Cleaning Services | Crawford Roofing & Gutters LLC';
$pageDescription = 'Professional gutter cleaning in Omaha, NE by Crawford Roofing & Gutters LLC. Prevent ice dams, water damage, and foundation erosion with seasonal gutter maintenance. ' . $yearsInBusiness . '+ years experience.';
$canonicalUrl    = $siteUrl . '/services/gutter-cleaning/';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134049337-o7oznv-dff36b_a35b2df95a814ec49799d0169f3a87da_mv2.jpg';
$currentPage     = 'services';
$heroImagePreload = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134049337-o7oznv-dff36b_a35b2df95a814ec49799d0169f3a87da_mv2.jpg';
$cssVersion      = '3';

// ── FAQ Data ────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How often should gutters be cleaned in Omaha?',
        'answer'   => 'Most Omaha homes need gutter cleaning at least twice per year — once in late spring after cottonwood season ends and again in late November after the last oak and elm leaves have fallen. Homes near mature cottonwoods or silver maples may need a third mid-summer cleaning to clear seed pods and helicopter debris.'
    ],
    [
        'question' => 'What does professional gutter cleaning cost in Omaha, NE?',
        'answer'   => 'Professional gutter cleaning in Omaha typically costs between $125 and $275 for a standard single-story home. Two-story homes, steep roof pitches, and heavy debris loads can push the price to $175–$375. Crawford Roofing & Gutters provides free on-site estimates so you know the exact cost before any work begins.'
    ],
    [
        'question' => 'When is the best time of year to schedule gutter cleaning?',
        'answer'   => 'In the Omaha metro area, the ideal windows are late May through early June (after cottonwood fluff and spring storms) and mid-November through early December (after fall leaf drop). Scheduling in these windows prevents the two biggest clog sources — spring debris and autumn leaves — from causing winter ice dams or foundation saturation.'
    ],
    [
        'question' => 'Can clogged gutters really damage my foundation?',
        'answer'   => 'Yes. When gutters overflow, water pools around your foundation instead of flowing to downspout discharge points. In Omaha\'s clay-heavy soil, that pooled water causes hydrostatic pressure against basement walls, leading to cracks, seepage, and in severe cases structural shifting. A single season of neglected gutters can cause thousands of dollars in foundation repair costs.'
    ],
    [
        'question' => 'Do you clean gutters on two-story and three-story homes?',
        'answer'   => 'Crawford Roofing & Gutters cleans gutters at any height. Our crews carry extension ladders rated for three-story residential work and use safety harness systems on steep-pitch roofs. We service single-story ranch homes in Papillion, split-levels in Millard, and multi-story Victorian-era homes in Dundee and Benson — no roof is too high or too steep.'
    ],
    [
        'question' => 'What happens during a professional gutter cleaning visit?',
        'answer'   => 'Our technician inspects every linear foot of your gutter system, removes all debris by hand and with specialized scoops, flushes the full system with pressurized water to verify downspout flow, checks for loose hangers or joint leaks, and provides a written condition report. The entire process takes 45 minutes to 2 hours depending on home size and debris volume.'
    ],
    [
        'question' => 'Will gutter cleaning prevent ice dams on my Omaha home?',
        'answer'   => 'Clean gutters are the single most effective way to prevent ice dams. When gutters are clogged, snowmelt backs up behind the debris, refreezes at the eave, and forces water under shingles. By clearing all debris before Omaha\'s first freeze — usually late November — you allow proper drainage and eliminate the standing water that triggers ice dam formation.'
    ],
    [
        'question' => 'Do you offer gutter cleaning as part of a maintenance plan?',
        'answer'   => 'Yes. Crawford Roofing & Gutters offers a seasonal maintenance program that includes two annual cleanings — spring and fall — plus a 10-point gutter system inspection at each visit. Maintenance plan clients receive priority scheduling, which matters most in late November when demand peaks and Omaha\'s first freeze is approaching.'
    ],
];

// ── Schema Generation ────────────────────────────────────────
$currentService = null;
foreach ($services as $s) {
    if ($s['slug'] === 'gutter-cleaning') {
        $currentService = $s;
        break;
    }
}
$serviceSchema    = generateServiceSchema($currentService, $siteUrl, $siteName, $address);
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',           'url' => $siteUrl . '/'],
    ['name' => 'Services',       'url' => $siteUrl . '/services/'],
    ['name' => 'Gutter Cleaning','url' => $siteUrl . '/services/gutter-cleaning/'],
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
   Gutter Cleaning — Page-Specific Styles
   Premium Tier — Editorial 8-Section Structure
   Crawford Roofing & Gutters LLC | Omaha, NE
   ═══════════════════════════════════════════════════════════ */

/* ── 1. HERO ─────────────────────────────────────────────── */
.hero--gc {
  position: relative;
  min-height: 75vh;
  display: flex;
  align-items: center;
  background-size: cover;
  background-position: center 30%;
  background-repeat: no-repeat;
  overflow: hidden;
}
.hero--gc::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    155deg,
    rgba(var(--color-primary-rgb), 0.94) 0%,
    rgba(var(--color-primary-rgb), 0.80) 45%,
    rgba(var(--color-secondary-rgb), 0.72) 100%
  );
  z-index: 1;
}
.hero--gc::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.05'/%3E%3C/svg%3E");
  opacity: 0.10;
  z-index: 1;
  pointer-events: none;
}
.hero--gc .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.hero--gc .eyebrow-label {
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
.hero--gc h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 4rem);
  margin-bottom: var(--space-6);
  max-width: 14ch;
  line-height: 1.05;
}
.hero--gc h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.6);
}
.hero--gc .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 600px;
  margin-bottom: var(--space-8);
}
.hero--gc .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-10);
}
.hero--gc .trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  padding-top: var(--space-6);
  border-top: 1px solid rgba(255, 255, 255, 0.12);
}
.hero--gc .trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.78);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.hero--gc .trust-item i,
.hero--gc .trust-item svg {
  width: 18px;
  height: 18px;
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.8);
}
.hero--gc .breadcrumb {
  display: flex;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
}
.hero--gc .breadcrumb a {
  color: rgba(255, 255, 255, 0.65);
  transition: color var(--transition-fast);
}
.hero--gc .breadcrumb a:hover { color: var(--color-white); }
.hero--gc .breadcrumb-sep { color: rgba(255, 255, 255, 0.35); }
.hero--gc .breadcrumb-current { color: rgba(255, 255, 255, 0.9); font-weight: 600; }

/* Geometric accent behind hero */
.hero--gc .hero-geo {
  position: absolute;
  right: -5%;
  top: 10%;
  width: 420px;
  height: 420px;
  border: 2px solid rgba(255, 255, 255, 0.06);
  border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
  z-index: 1;
  animation: hero-geo-drift 18s ease-in-out infinite;
}
@keyframes hero-geo-drift {
  0%, 100% { transform: rotate(0deg) scale(1); }
  50% { transform: rotate(12deg) scale(1.06); }
}

/* ── Divider: Wave ──────────────────────────────────────── */
.divider-wave {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
  pointer-events: none;
}
.divider-wave--top { top: -1px; }
.divider-wave--bottom { bottom: -1px; }
.divider-wave svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 60px;
}

/* ── Divider: Angle ─────────────────────────────────────── */
.divider-angle {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
  pointer-events: none;
}
.divider-angle--top { top: -1px; }
.divider-angle--bottom { bottom: -1px; }
.divider-angle svg {
  display: block;
  width: calc(100% + 1.3px);
  height: 48px;
}

/* ── 2. PROBLEM STATEMENT ────────────────────────────────── */
.gc-problem {
  background: var(--color-bg-alt);
  position: relative;
}
.gc-problem .pull-quote {
  font-family: var(--font-accent);
  font-size: clamp(1.25rem, 2.5vw, 1.75rem);
  font-style: italic;
  font-weight: 500;
  color: var(--color-primary);
  line-height: 1.65;
  max-width: 50ch;
  margin: 0 auto var(--space-12);
  text-align: center;
  position: relative;
  padding: var(--space-8) var(--space-6);
}
.gc-problem .pull-quote::before {
  content: '\201C';
  position: absolute;
  top: -0.2em;
  left: 50%;
  transform: translateX(-50%);
  font-size: 6rem;
  font-family: var(--font-heading);
  color: rgba(var(--color-accent-rgb), 0.12);
  line-height: 1;
  pointer-events: none;
}
.gc-problem .pull-quote::after {
  content: '';
  display: block;
  width: 60px;
  height: 3px;
  background: rgba(var(--color-accent-rgb), 0.3);
  border-radius: var(--radius-full);
  margin: var(--space-6) auto 0;
}
.gc-problem .bento-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.gc-problem .bento-card {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  position: relative;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.gc-problem .bento-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 4px;
  height: 100%;
  border-radius: var(--radius-full) 0 0 var(--radius-full);
}
.gc-problem .bento-card.card-tint-1::before {
  background: var(--color-primary);
}
.gc-problem .bento-card.card-tint-2::before {
  background: var(--color-secondary);
}
.gc-problem .bento-card.card-tint-3::before {
  background: rgba(var(--color-accent-rgb), 1);
}
.gc-problem .bento-card .bento-icon {
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
.gc-problem .bento-card .bento-icon i,
.gc-problem .bento-card .bento-icon svg {
  width: 22px;
  height: 22px;
}
.gc-problem .bento-card h3 {
  font-size: var(--font-size-lg);
  color: var(--color-primary);
}
.gc-problem .bento-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.65;
  margin: 0;
}

/* ── 3. EXPERT POSITIONING ───────────────────────────────── */
.gc-expert {
  background: var(--color-bg);
  position: relative;
}
.gc-expert .grid-asymmetric {
  display: grid;
  grid-template-columns: 1fr 2fr;
  gap: var(--space-12);
  align-items: start;
}
.gc-expert .stat-pillar {
  background: var(--color-primary);
  border-radius: var(--radius-lg);
  padding: var(--space-10) var(--space-8);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.gc-expert .stat-pillar::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(160deg, rgba(var(--color-accent-rgb), 0.15) 0%, transparent 60%);
  pointer-events: none;
}
.gc-expert .stat-pillar .stat-number {
  font-family: var(--font-heading);
  font-size: clamp(3rem, 6vw, 5rem);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1;
  display: block;
  position: relative;
  z-index: 1;
}
.gc-expert .stat-pillar .stat-label {
  font-family: var(--font-accent);
  font-size: var(--font-size-lg);
  color: rgba(255, 255, 255, 0.75);
  display: block;
  margin-top: var(--space-3);
  position: relative;
  z-index: 1;
}
.gc-expert .stat-pillar .stat-watermark {
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
.gc-expert .expert-content h2 {
  margin-bottom: var(--space-4);
}
.gc-expert .expert-content .answer-block {
  color: var(--color-text-light);
  line-height: 1.75;
  max-width: var(--content-width);
  margin-bottom: var(--space-8);
}
.gc-expert .diff-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-6);
}
.gc-expert .diff-item {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.gc-expert .diff-icon {
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
.gc-expert .diff-icon i,
.gc-expert .diff-icon svg {
  width: 22px;
  height: 22px;
}
.gc-expert .diff-item h3 {
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin-bottom: var(--space-1);
}
.gc-expert .diff-item p {
  color: var(--color-text-light);
  line-height: 1.65;
  font-size: var(--font-size-sm);
  margin: 0;
}

/* ── 4. SERVICE BREAKDOWN ────────────────────────────────── */
.gc-breakdown {
  background: var(--color-bg-alt);
  position: relative;
}
.gc-breakdown .breakdown-split {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-12);
  align-items: start;
}
.gc-breakdown .included-list {
  list-style: none;
  padding: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.gc-breakdown .included-list li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  font-size: var(--font-size-base);
  color: var(--color-text);
  line-height: 1.6;
}
.gc-breakdown .included-list li .check-icon {
  flex-shrink: 0;
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  margin-top: 2px;
}
.gc-breakdown .included-list li .check-icon i,
.gc-breakdown .included-list li .check-icon svg {
  width: 14px;
  height: 14px;
}
.gc-breakdown .timeline {
  position: relative;
  padding-left: var(--space-10);
}
.gc-breakdown .timeline::before {
  content: '';
  position: absolute;
  left: 14px;
  top: 0;
  bottom: 0;
  width: 2px;
  background: linear-gradient(to bottom, rgba(var(--color-accent-rgb), 0.3), rgba(var(--color-accent-rgb), 0.06));
  border-radius: var(--radius-full);
}
.gc-breakdown .timeline-step {
  position: relative;
  padding-bottom: var(--space-8);
}
.gc-breakdown .timeline-step:last-child {
  padding-bottom: 0;
}
.gc-breakdown .timeline-step::before {
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
.gc-breakdown .timeline-step h3 {
  font-size: var(--font-size-base);
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-2);
}
.gc-breakdown .timeline-step .step-time {
  font-family: var(--font-accent);
  font-size: var(--font-size-sm);
  color: var(--color-accent);
  display: inline-block;
  margin-bottom: var(--space-2);
}
.gc-breakdown .timeline-step p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.65;
  margin: 0;
}

/* Image with accent frame */
.gc-breakdown .breakdown-image {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
}
.gc-breakdown .breakdown-image img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: var(--radius-lg);
}
.gc-breakdown .breakdown-image::after {
  content: '';
  position: absolute;
  inset: 0;
  border: 3px solid rgba(var(--color-accent-rgb), 0.12);
  border-radius: var(--radius-lg);
  pointer-events: none;
}

/* ── 5. PROOF / REVIEWS ──────────────────────────────────── */
.gc-proof {
  background: var(--color-primary);
  position: relative;
  overflow: hidden;
}
.gc-proof::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(var(--color-accent-rgb), 0.12) 0%, transparent 50%);
  pointer-events: none;
}
.gc-proof .section-title h2,
.gc-proof .section-title .section-subtitle {
  color: var(--color-white);
}
.gc-proof .section-title .answer-block {
  color: rgba(255, 255, 255, 0.78);
  max-width: var(--content-width);
}
.gc-proof .reviews-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  position: relative;
  z-index: 1;
}
.gc-proof .review-card {
  background: rgba(255, 255, 255, 0.06);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.gc-proof .review-stars {
  display: flex;
  gap: var(--space-1);
  color: var(--color-star);
}
.gc-proof .review-stars i,
.gc-proof .review-stars svg {
  width: 18px;
  height: 18px;
}
.gc-proof .review-text {
  font-style: italic;
  color: rgba(255, 255, 255, 0.88);
  line-height: 1.7;
  font-size: var(--font-size-base);
  flex: 1;
}
.gc-proof .review-author {
  font-weight: 600;
  color: var(--color-white);
  font-size: var(--font-size-sm);
}
.gc-proof .review-location {
  color: rgba(255, 255, 255, 0.55);
  font-size: var(--font-size-xs);
}
.gc-proof .floating-accent {
  position: absolute;
  width: 300px;
  height: 300px;
  border-radius: 40% 60% 70% 30% / 40% 30% 70% 60%;
  background: rgba(255, 255, 255, 0.03);
  pointer-events: none;
  z-index: 0;
}
.gc-proof .floating-accent--1 {
  top: -80px;
  right: -100px;
  animation: gc-float 14s ease-in-out infinite;
}
.gc-proof .floating-accent--2 {
  bottom: -60px;
  left: -80px;
  animation: gc-float 18s ease-in-out infinite reverse;
}
@keyframes gc-float {
  0%, 100% { transform: translateY(0) rotate(0deg); }
  50% { transform: translateY(-18px) rotate(5deg); }
}

/* ── 6. COMPARISON ───────────────────────────────────────── */
.gc-compare {
  background: var(--color-bg);
  position: relative;
}
.gc-compare .compare-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-8);
  max-width: 900px;
  margin: 0 auto;
}
.gc-compare .compare-col {
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
  position: relative;
}
.gc-compare .compare-col--diy {
  background: var(--color-bg-alt);
  border: 1px solid var(--color-border);
}
.gc-compare .compare-col--pro {
  background: var(--color-card-tint-3);
  border: 2px solid rgba(var(--color-accent-rgb), 0.2);
}
.gc-compare .compare-col--pro .compare-badge {
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
.gc-compare .compare-col h3 {
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-6);
  color: var(--color-primary);
}
.gc-compare .compare-list {
  list-style: none;
  padding: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.gc-compare .compare-list li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  font-size: var(--font-size-sm);
  color: var(--color-text);
  line-height: 1.6;
}
.gc-compare .compare-list li .compare-icon {
  flex-shrink: 0;
  margin-top: 2px;
}
.gc-compare .compare-list li .compare-icon i,
.gc-compare .compare-list li .compare-icon svg {
  width: 18px;
  height: 18px;
}
.gc-compare .compare-col--diy .compare-icon {
  color: var(--color-warning);
}
.gc-compare .compare-col--pro .compare-icon {
  color: var(--color-success);
}

/* ── 7. FAQ ──────────────────────────────────────────────── */
.gc-faq {
  background: var(--color-bg-alt);
  position: relative;
}
.gc-faq .faq-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-6);
  max-width: 1000px;
  margin: 0 auto;
}
.gc-faq .faq-item {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  border: 1px solid var(--color-border);
  cursor: pointer;
  transition: box-shadow var(--transition-base), border-color var(--transition-base);
}
.gc-faq .faq-item:hover {
  box-shadow: var(--shadow-md);
  border-color: rgba(var(--color-accent-rgb), 0.2);
}
.gc-faq .faq-item summary {
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
.gc-faq .faq-item summary::-webkit-details-marker { display: none; }
.gc-faq .faq-item summary::after {
  content: '+';
  flex-shrink: 0;
  font-size: var(--font-size-xl);
  font-weight: 300;
  color: var(--color-accent);
  transition: transform var(--transition-base);
}
.gc-faq .faq-item[open] summary::after {
  content: '\2212';
  transform: rotate(180deg);
}
.gc-faq .faq-answer {
  padding-top: var(--space-4);
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: var(--content-width);
}

/* ── 8. FINAL CTA ────────────────────────────────────────── */
.gc-cta-final {
  background: var(--color-primary);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.gc-cta-final::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(var(--color-accent-rgb), 0.18) 0%, transparent 55%);
  pointer-events: none;
}
.gc-cta-final .container {
  position: relative;
  z-index: 1;
}
.gc-cta-final h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
}
.gc-cta-final .answer-block {
  color: rgba(255, 255, 255, 0.82);
  max-width: 580px;
  margin: 0 auto var(--space-8);
  font-size: var(--font-size-lg);
  line-height: 1.7;
}
.gc-cta-final .cta-buttons {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── RELATED SERVICES ────────────────────────────────────── */
.gc-related {
  background: var(--color-bg);
  position: relative;
}
.gc-related .section-title {
  margin-bottom: var(--space-10);
}

/* ── SHARED: Section Titles ──────────────────────────────── */
.gc-section-title {
  text-align: center;
  margin-bottom: var(--space-12);
}
.gc-section-title .eyebrow-label {
  display: inline-block;
  font-family: var(--font-accent);
  font-size: var(--font-size-sm);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  color: var(--color-accent);
  margin-bottom: var(--space-3);
}
.gc-section-title h2 {
  margin-bottom: var(--space-4);
}
.gc-section-title .section-subtitle {
  font-family: var(--font-accent);
  font-size: var(--font-size-lg);
  font-style: italic;
  color: var(--color-text-light);
}
.gc-section-title .answer-block {
  color: var(--color-text-light);
  line-height: 1.75;
  max-width: var(--content-width);
  margin: var(--space-4) auto 0;
}

/* ── UTILITY: Text accent ────────────────────────────────── */
.gc-page .text-accent {
  font-family: var(--font-accent);
  font-style: italic;
  color: var(--color-accent);
}

/* ── UTILITY: Last-updated stamp ─────────────────────────── */
.gc-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  padding: var(--space-4) 0;
  border-top: 1px solid var(--color-border);
  margin-top: var(--space-8);
}

/* ── IMAGE: Diagonal clip composition ────────────────────── */
.img-diagonal-frame {
  clip-path: polygon(0 4%, 100% 0, 100% 96%, 0 100%);
  border-radius: var(--radius-md);
  overflow: hidden;
}

/* ── RESPONSIVE ──────────────────────────────────────────── */
@media (max-width: 1024px) {
  .gc-expert .grid-asymmetric {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .gc-expert .stat-pillar {
    max-width: 280px;
  }
  .gc-breakdown .breakdown-split {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
}
@media (max-width: 768px) {
  .hero--gc { min-height: 65vh; }
  .hero--gc .hero-geo { display: none; }
  .gc-problem .bento-grid {
    grid-template-columns: 1fr;
  }
  .gc-proof .reviews-grid {
    grid-template-columns: 1fr;
  }
  .gc-compare .compare-grid {
    grid-template-columns: 1fr;
  }
  .gc-faq .faq-grid {
    grid-template-columns: 1fr;
  }
  .hero--gc .trust-row {
    flex-direction: column;
    gap: var(--space-3);
  }
}
@media (max-width: 480px) {
  .hero--gc .hero-ctas {
    flex-direction: column;
  }
  .hero--gc .hero-ctas .btn {
    width: 100%;
    text-align: center;
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<div class="gc-page">

<!-- ═══════════════════════════════════════════════════════════
     1. HERO
     ═══════════════════════════════════════════════════════════ -->
<section class="hero--gc" style="background-image: url('<?php echo htmlspecialchars($heroImagePreload); ?>');" aria-label="Gutter cleaning services in Omaha">
  <div class="hero-geo" aria-hidden="true"></div>
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <span class="breadcrumb-current">Gutter Cleaning</span>
    </nav>
    <span class="eyebrow-label">Gutter Services &middot; Omaha, NE</span>
    <h1><span class="accent-word">Gutter Cleaning</span> in Omaha, NE</h1>
    <p class="hero-answer">
      Crawford Roofing &amp; Gutters LLC is a licensed Nebraska contractor with over <?php echo $yearsInBusiness; ?> years of
      experience delivering professional gutter cleaning services across the greater Omaha metro area. We clear cottonwood fluff,
      leaf debris, and storm residue from every linear foot of your gutter system — preventing ice dams, foundation erosion,
      and costly water damage before they start.
    </p>
    <div class="hero-ctas">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Cleaning Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> Call Now
      </a>
      <?php endif; ?>
    </div>
    <div class="trust-row">
      <span class="trust-item"><i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured</span>
      <span class="trust-item"><i data-lucide="clock" aria-hidden="true"></i> <?php echo $yearsInBusiness; ?>+ Years in Omaha</span>
      <span class="trust-item"><i data-lucide="badge-check" aria-hidden="true"></i> Free Estimates</span>
      <span class="trust-item"><i data-lucide="star" aria-hidden="true"></i> 4.9-Star Rated</span>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     2. PROBLEM STATEMENT
     ═══════════════════════════════════════════════════════════ -->
<section class="gc-problem" aria-label="Why gutter cleaning matters">
  <div class="divider-wave divider-wave--top" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none">
      <path d="M0,60 C200,0 400,0 600,30 C800,60 1000,60 1200,0 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="pull-quote reveal-up">
      A single season of clogged gutters can funnel hundreds of gallons of uncontrolled water against
      your foundation — turning a $200 cleaning into a $12,000 basement repair.
    </div>

    <div class="gc-section-title reveal-up">
      <span class="eyebrow-label">Warning Signs</span>
      <h2>What Happens When <span class="text-accent">Omaha Gutters</span> Go Uncleaned?</h2>
      <p class="answer-block">
        Clogged gutters cause water to spill over fascia boards, pool around foundations, and back up under
        shingles during freeze-thaw cycles. In Omaha's climate — with heavy cottonwood seasons, intense
        spring rains, and sub-zero winters — neglected gutters accelerate damage faster than in most U.S. cities.
      </p>
    </div>

    <div class="bento-grid">
      <div class="bento-card card-tint-1 reveal-left reveal-delay-1">
        <div class="bento-icon"><i data-lucide="droplets" aria-hidden="true"></i></div>
        <h3>Foundation Saturation</h3>
        <p>Overflowing gutters dump water directly against your foundation walls. Omaha's clay-heavy soil holds that moisture, creating hydrostatic pressure that cracks basement walls from Papillion to Elkhorn.</p>
      </div>
      <div class="bento-card card-tint-2 reveal-up reveal-delay-2">
        <div class="bento-icon"><i data-lucide="snowflake" aria-hidden="true"></i></div>
        <h3>Ice Dam Formation</h3>
        <p>Debris-packed gutters trap snowmelt at the eave line. When temperatures drop below freezing — a nightly occurrence from December through February in Omaha — that standing water refreezes into ice dams that force water under your shingles.</p>
      </div>
      <div class="bento-card card-tint-3 reveal-right reveal-delay-3">
        <div class="bento-icon"><i data-lucide="bug" aria-hidden="true"></i></div>
        <h3>Pest Breeding Grounds</h3>
        <p>Standing water and decomposing leaves in gutters attract mosquitoes, carpenter ants, and wasps. Millard and Bellevue homeowners near wooded lots see infestations spike when gutters stay clogged past May.</p>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     3. EXPERT POSITIONING
     ═══════════════════════════════════════════════════════════ -->
<section class="gc-expert" aria-label="Why choose Crawford for gutter cleaning">
  <div class="divider-angle divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 48" preserveAspectRatio="none">
      <polygon points="0,48 1200,0 1200,48" fill="var(--color-bg-alt)"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="grid-asymmetric">
      <div class="stat-pillar reveal-left">
        <span class="stat-number" data-target="<?php echo $yearsInBusiness; ?>"><?php echo $yearsInBusiness; ?>+</span>
        <span class="stat-label">Years Cleaning Omaha Gutters</span>
        <span class="stat-watermark" aria-hidden="true"><?php echo $yearsInBusiness; ?></span>
      </div>
      <div class="expert-content reveal-right">
        <span class="eyebrow-label">Our Approach</span>
        <h2>Why Do Omaha Homeowners Choose <span class="text-accent">Crawford</span> for Gutter Cleaning?</h2>
        <p class="answer-block">
          Crawford Roofing &amp; Gutters combines second-generation roofing knowledge with gutter-specific
          expertise built over three decades in the Omaha metro. We do not sub-contract gutter cleaning to
          window-washing crews. Our technicians are trained roofers who inspect your entire drainage system
          — gutters, downspouts, fascia, and soffit — during every cleaning visit.
        </p>
        <div class="diff-list">
          <div class="diff-item">
            <div class="diff-icon"><i data-lucide="scan-eye" aria-hidden="true"></i></div>
            <div>
              <h3>Full-System Inspection Included</h3>
              <p>Every cleaning includes a 10-point gutter and roof-edge inspection. We catch loose hangers, cracked end caps, and early shingle damage while we're already on the ladder — saving you a separate service call.</p>
            </div>
          </div>
          <div class="diff-item">
            <div class="diff-icon"><i data-lucide="trees" aria-hidden="true"></i></div>
            <div>
              <h3>Built for Omaha's Tree Canopy</h3>
              <p>Cottonwood fluff clogs standard gutter guards within weeks. Silver maple helicopter seeds wedge into joints. We know the seasonal debris cycle from Elkhorn to Bellevue and time our cleanings to match each neighborhood's canopy.</p>
            </div>
          </div>
          <div class="diff-item">
            <div class="diff-icon"><i data-lucide="calendar-check" aria-hidden="true"></i></div>
            <div>
              <h3>Seasonal Maintenance Programs</h3>
              <p>Our twice-yearly plans cover spring post-cottonwood cleaning and late-fall leaf removal with priority scheduling — so your gutters are clear before Omaha's first hard freeze in late November.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     4. SERVICE BREAKDOWN
     ═══════════════════════════════════════════════════════════ -->
<section class="gc-breakdown" aria-label="What is included in a gutter cleaning visit">
  <div class="divider-wave divider-wave--top" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none">
      <path d="M0,0 C300,60 600,60 900,30 C1050,15 1150,0 1200,0 L1200,60 L0,60 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="gc-section-title reveal-up">
      <span class="eyebrow-label">The Process</span>
      <h2>What's Included in a Crawford <span class="text-accent">Gutter Cleaning</span> Visit?</h2>
      <p class="answer-block">
        Every gutter cleaning visit includes hand debris removal from all gutter runs, pressurized downspout
        flushing, hanger and bracket inspection, and a written condition report — typically completed in 60 to
        120 minutes depending on your home's size and tree exposure. No hidden fees, no upsell pressure.
      </p>
    </div>

    <div class="breakdown-split">
      <div class="reveal-left">
        <h3 style="margin-bottom: var(--space-6); color: var(--color-primary);">Every Visit Covers</h3>
        <ul class="included-list">
          <li>
            <span class="check-icon"><i data-lucide="check" aria-hidden="true"></i></span>
            Hand removal of all leaves, twigs, cottonwood fluff, shingle grit, and standing sludge
          </li>
          <li>
            <span class="check-icon"><i data-lucide="check" aria-hidden="true"></i></span>
            Pressurized water flush of every downspout to verify full flow to discharge point
          </li>
          <li>
            <span class="check-icon"><i data-lucide="check" aria-hidden="true"></i></span>
            Gutter slope verification — we check for low spots that cause standing water
          </li>
          <li>
            <span class="check-icon"><i data-lucide="check" aria-hidden="true"></i></span>
            Hanger, bracket, and joint inspection along the full gutter run
          </li>
          <li>
            <span class="check-icon"><i data-lucide="check" aria-hidden="true"></i></span>
            Fascia board visual check for water staining or rot
          </li>
          <li>
            <span class="check-icon"><i data-lucide="check" aria-hidden="true"></i></span>
            Written post-cleaning condition report with photos
          </li>
        </ul>
      </div>

      <div class="reveal-right">
        <h3 style="margin-bottom: var(--space-6); color: var(--color-primary);">How the Visit Unfolds</h3>
        <div class="timeline">
          <div class="timeline-step">
            <span class="step-time">Arrival (5 min)</span>
            <h3>Walk-Around Assessment</h3>
            <p>Technician surveys your roofline, identifies heavy debris zones, and confirms ladder placement safety. We note any visible damage before starting.</p>
          </div>
          <div class="timeline-step">
            <span class="step-time">Phase 1 (20-40 min)</span>
            <h3>Debris Removal</h3>
            <p>Hand scooping of all accumulated material from every gutter section — roof to ground, front to back. Debris is bagged and removed from your property.</p>
          </div>
          <div class="timeline-step">
            <span class="step-time">Phase 2 (15-25 min)</span>
            <h3>Downspout Flush &amp; Flow Test</h3>
            <p>Each downspout is flushed with pressurized water until flow runs clear at the discharge point. Clogs are auger-cleared on site at no extra charge.</p>
          </div>
          <div class="timeline-step">
            <span class="step-time">Phase 3 (10-15 min)</span>
            <h3>Inspection &amp; Report</h3>
            <p>Visual check of every hanger, joint, end cap, and fascia section. You receive a written report with photos documenting condition and any recommended repairs.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="breakdown-image reveal-scale" style="margin-top: var(--space-12); max-width: 800px; margin-left: auto; margin-right: auto;">
      <div class="img-diagonal-frame">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134251810-z2x055-IMG_95F75D69640F-1.jpeg"
             alt="Crawford Roofing technician performing gutter cleaning on an Omaha home"
             width="800" height="500" loading="lazy">
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     5. PROOF / REVIEWS
     ═══════════════════════════════════════════════════════════ -->
<section class="gc-proof" aria-label="Customer reviews for gutter cleaning">
  <div class="floating-accent floating-accent--1" aria-hidden="true"></div>
  <div class="floating-accent floating-accent--2" aria-hidden="true"></div>

  <div class="container">
    <div class="gc-section-title reveal-up">
      <span class="eyebrow-label" style="color: rgba(255,255,255,0.6);">Reviews</span>
      <h2 style="color: var(--color-white);">What Do Omaha Homeowners Say About <span class="text-accent" style="filter: brightness(2);">Our Gutter Cleaning</span>?</h2>
      <p class="answer-block" style="color: rgba(255,255,255,0.78);">
        Omaha families across Papillion, Millard, Elkhorn, and Bellevue rely on Crawford Roofing &amp; Gutters
        for consistent, thorough gutter maintenance. Here is what recent gutter cleaning clients have shared
        about their experience with our crew.
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
        <p class="review-text">"We had three cottonwoods dropping fluff into our gutters every June. Crawford cleaned everything out in under an hour, flushed the downspouts, and showed me a cracked end cap I never would have noticed. They fixed it on the spot. No upsell, just honest work."</p>
        <div>
          <span class="review-author">Karen L.</span><br>
          <span class="review-location">Papillion, NE</span>
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
        <p class="review-text">"Last winter we had ice dams on two corners of the roof. After Crawford did a fall cleaning and checked our gutter slope, this winter was completely clear — zero ice buildup. Wish I'd called them years ago instead of renting a ladder every November."</p>
        <div>
          <span class="review-author">Tom B.</span><br>
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
        <p class="review-text">"Our two-story colonial in Elkhorn has gutters that are almost impossible to reach safely. Crawford's crew had the right ladders, moved fast, and left no mess in the yard. They even sent me a condition report with photos the same day. That's the kind of detail I care about."</p>
        <div>
          <span class="review-author">Rachel S.</span><br>
          <span class="review-location">Elkhorn, NE</span>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     6. COMPARISON — DIY vs Professional
     ═══════════════════════════════════════════════════════════ -->
<section class="gc-compare" aria-label="DIY versus professional gutter cleaning comparison">
  <div class="divider-angle divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 48" preserveAspectRatio="none">
      <polygon points="0,0 1200,48 1200,0 0,0" fill="var(--color-primary)"></polygon>
    </svg>
  </div>

  <div class="container">
    <div class="gc-section-title reveal-up">
      <span class="eyebrow-label">Compare Your Options</span>
      <h2>Should You <span class="text-accent">DIY or Hire a Pro</span> for Gutter Cleaning in Omaha?</h2>
      <p class="answer-block">
        DIY gutter cleaning works for single-story homes with minimal tree cover. But for two-story houses,
        steep pitches, or heavy seasonal debris — common across Millard, Papillion, and Bellevue — professional
        cleaning is safer, faster, and catches problems a homeowner on a ladder cannot see.
      </p>
    </div>

    <div class="compare-grid">
      <div class="compare-col compare-col--diy reveal-left">
        <h3>DIY Gutter Cleaning</h3>
        <ul class="compare-list">
          <li>
            <span class="compare-icon"><i data-lucide="alert-triangle" aria-hidden="true"></i></span>
            Ladder falls are the #1 cause of home-injury ER visits in the U.S.
          </li>
          <li>
            <span class="compare-icon"><i data-lucide="alert-triangle" aria-hidden="true"></i></span>
            No flow test — you cannot verify downspout drainage from the top
          </li>
          <li>
            <span class="compare-icon"><i data-lucide="alert-triangle" aria-hidden="true"></i></span>
            Missed damage: cracked joints, rusted hangers, early fascia rot hidden behind debris
          </li>
          <li>
            <span class="compare-icon"><i data-lucide="alert-triangle" aria-hidden="true"></i></span>
            Takes 2-4 hours with frequent ladder repositioning
          </li>
          <li>
            <span class="compare-icon"><i data-lucide="alert-triangle" aria-hidden="true"></i></span>
            No condition report or warranty on the work
          </li>
        </ul>
      </div>

      <div class="compare-col compare-col--pro reveal-right">
        <span class="compare-badge">Recommended</span>
        <h3>Professional Cleaning (Crawford)</h3>
        <ul class="compare-list">
          <li>
            <span class="compare-icon"><i data-lucide="check-circle" aria-hidden="true"></i></span>
            Safety-harnessed crew with commercial ladders rated for 3-story residential
          </li>
          <li>
            <span class="compare-icon"><i data-lucide="check-circle" aria-hidden="true"></i></span>
            Pressurized downspout flush verifies flow to every discharge point
          </li>
          <li>
            <span class="compare-icon"><i data-lucide="check-circle" aria-hidden="true"></i></span>
            10-point inspection catches repairs early — before water damage spreads
          </li>
          <li>
            <span class="compare-icon"><i data-lucide="check-circle" aria-hidden="true"></i></span>
            Typically completed in 45-90 minutes on most Omaha homes
          </li>
          <li>
            <span class="compare-icon"><i data-lucide="check-circle" aria-hidden="true"></i></span>
            Written condition report with photos and repair recommendations
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     7. FAQ
     ═══════════════════════════════════════════════════════════ -->
<section class="gc-faq" aria-label="Frequently asked questions about gutter cleaning">
  <div class="divider-wave divider-wave--top" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none">
      <path d="M0,60 C400,0 800,0 1200,60 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="gc-section-title reveal-up">
      <span class="eyebrow-label">FAQ</span>
      <h2>What Should Omaha Homeowners Know About <span class="text-accent">Gutter Cleaning</span>?</h2>
      <p class="answer-block">
        Gutter cleaning frequency, seasonal timing, and cost vary by home size, roof pitch, and tree
        exposure. Below are the questions Omaha homeowners ask most when scheduling gutter cleaning near me
        in Omaha with Crawford Roofing &amp; Gutters.
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
<section class="gc-related" aria-label="Related gutter and roofing services">
  <div class="container">
    <div class="gc-section-title reveal-up">
      <span class="eyebrow-label">Related Services</span>
      <h2>Other Services <span class="text-accent">You May Need</span></h2>
    </div>

    <div class="services-grid" style="max-width: 960px; margin: 0 auto; grid-template-columns: repeat(3, 1fr);">
      <!-- Gutter Repair -->
      <article class="service-card-with-image card-tint-1 reveal-up reveal-delay-1">
        <div class="service-card__image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134251810-z2x055-IMG_95F75D69640F-1.jpeg"
               alt="Gutter repair service in Omaha, NE" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="wrench" aria-hidden="true"></i></div>
          <h3>Gutter Repair</h3>
          <p class="service-card__desc">Fix leaks, sagging sections, and storm damage fast.</p>
          <ul>
            <li>Fixes leaks and sagging fast</li>
            <li>Storm damage restoration</li>
            <li>Prevents interior water damage</li>
          </ul>
          <a href="/services/gutter-repair/" class="service-card__cta">Learn more</a>
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
          <p class="service-card__desc">Upgrade old, damaged gutters with a new system.</p>
          <ul>
            <li>Full system upgrade available</li>
            <li>Upgraded downspout routing</li>
            <li>Color-matched to your home</li>
          </ul>
          <a href="/services/gutter-replacement/" class="service-card__cta">Learn more</a>
        </div>
      </article>

      <!-- Roof Inspection -->
      <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
        <div class="service-card__image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg"
               alt="Roof inspection service in Omaha, NE" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="search" aria-hidden="true"></i></div>
          <h3>Roof Inspection</h3>
          <p class="service-card__desc">Detailed roof assessment before damage escalates.</p>
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


<!-- ═══════════════════════════════════════════════════════════
     8. FINAL CTA
     ═══════════════════════════════════════════════════════════ -->
<section class="gc-cta-final" aria-label="Schedule your gutter cleaning">
  <div class="container">
    <h2 class="reveal-up">Ready to Schedule Gutter Cleaning in Omaha?</h2>
    <p class="answer-block reveal-up reveal-delay-1">
      Whether you need a one-time cleaning or a seasonal maintenance plan, Crawford Roofing &amp; Gutters
      provides free on-site estimates with transparent pricing — no hidden fees, no contracts.
      Call now or fill out the form and we will be in touch within one business day.
    </p>
    <div class="cta-buttons reveal-up reveal-delay-2">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> <?php echo formatPhone($phone); ?>
      </a>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Last Updated -->
<div class="gc-updated">
  Last Updated: <?php echo date('F Y'); ?>
</div>

</div><!-- /.gc-page -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
