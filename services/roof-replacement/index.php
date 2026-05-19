<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'Roof Replacement Omaha NE | Full Re-Roof Services | Crawford Roofing & Gutters LLC';
$pageDescription = 'Professional roof replacement in Omaha, NE. Crawford Roofing installs asphalt shingles, metal, TPO, and EPDM systems for residential and commercial properties. Manufacturer warranties. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/roof-replacement/';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134049337-o7oznv-dff36b_a35b2df95a814ec49799d0169f3a87da_mv2.jpg';
$currentPage     = 'services';
$heroImagePreload = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134049337-o7oznv-dff36b_a35b2df95a814ec49799d0169f3a87da_mv2.jpg';
$cssVersion      = '3';

// ── FAQ Data ─────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How much does a roof replacement cost in Omaha?',
        'answer'   => 'Most residential roof replacements in Omaha run between $8,500 and $22,000 depending on roof size, pitch, material choice, and decking condition. A standard 2,000-square-foot asphalt shingle re-roof typically falls in the $10,000 to $14,000 range. Metal roofs and multi-story homes with complex rooflines push toward the higher end. Crawford provides free on-site estimates with itemized pricing — no hidden fees or change orders.',
    ],
    [
        'question' => 'How long does a full roof replacement take in Omaha?',
        'answer'   => 'Crawford completes most residential roof replacements in 1 to 3 days depending on roof size and weather conditions. A standard single-story home with a straightforward roofline is typically torn off and re-roofed in a single day. Multi-story homes, steep pitches, and roofs requiring extensive decking repair may extend to 2 or 3 days. We schedule around Omaha weather forecasts and will not begin tear-off with rain in the 48-hour outlook.',
    ],
    [
        'question' => 'Will my homeowner insurance cover a roof replacement in Nebraska?',
        'answer'   => 'If your roof was damaged by a covered peril — hail, wind, or fallen trees — your homeowner policy typically covers replacement minus your deductible. Omaha sits in one of the most active hail corridors in the country, so most local carriers including State Farm, Farmers, and American Family have established processes for roof claims. Crawford documents damage with date-stamped photos and manufacturer-spec classifications that adjusters accept, and we meet with your adjuster on-site at no extra charge.',
    ],
    [
        'question' => 'What roofing materials does Crawford install in Omaha?',
        'answer'   => 'We install four primary roofing systems: architectural asphalt shingles (CertainTeed, GAF, Owens Corning), standing seam and corrugated metal roofing, TPO single-ply membrane for flat commercial roofs, and EPDM rubber roofing for low-slope applications. Each material is rated for Nebraska weather extremes — including the freeze-thaw cycles and high-wind events that characterize the Omaha climate from November through April.',
    ],
    [
        'question' => 'Do I need a full replacement or can my Omaha roof be repaired?',
        'answer'   => 'A roof typically needs full replacement when it is 20 or more years old, has sustained damage across more than 30 percent of its surface, shows widespread granule loss, has multiple active leaks, or has failed a professional inspection. If damage is localized to one slope or a small area, a targeted repair may extend its life by 5 to 10 years. Crawford inspects every roof before recommending replacement — we will never push a $12,000 job when a $1,200 repair will hold.',
    ],
    [
        'question' => 'What warranty comes with a Crawford roof replacement?',
        'answer'   => 'Every Crawford roof replacement includes a manufacturer material warranty plus our own workmanship guarantee. Architectural asphalt shingles carry 25 to 50-year limited manufacturer warranties from CertainTeed, GAF, or Owens Corning. Metal roofing systems carry 40 to 50-year warranties. Our workmanship warranty covers installation defects for a minimum of 10 years. As a certified installer for major manufacturers, we can offer extended warranty programs that cover both material and labor.',
    ],
    [
        'question' => 'Does Crawford handle the roofing permit in Omaha?',
        'answer'   => 'Yes. The City of Omaha requires a building permit for all roof replacements. Crawford pulls the permit, schedules the required inspection, and ensures all work meets the current Nebraska residential building code (based on the 2018 IRC). Permit cost is included in your project estimate — we never bill it as a surprise add-on. The city inspector verifies proper underlayment, flashing, fastener patterns, and ventilation before signing off.',
    ],
    [
        'question' => 'Can I stay in my home during a roof replacement?',
        'answer'   => 'Yes. Most Omaha homeowners remain in their homes throughout the replacement. Expect noise from tear-off and nailing starting around 7 AM. We protect landscaping with tarps, use magnetic sweepers to collect nails from your yard and driveway, and perform a thorough debris cleanup at the end of each workday. If you have pets sensitive to loud noise or a newborn, you may want to plan a few hours away during the tear-off phase.',
    ],
];

// ── Schema ───────────────────────────────────────────────────
$currentService = null;
foreach ($services as $s) {
    if ($s['slug'] === 'roof-replacement') {
        $currentService = $s;
        break;
    }
}
$serviceSchema    = generateServiceSchema($currentService, $siteUrl, $siteName, $address);
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',             'url' => $siteUrl . '/'],
    ['name' => 'Services',         'url' => $siteUrl . '/services/'],
    ['name' => 'Roof Replacement', 'url' => $siteUrl . '/services/roof-replacement/'],
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
   Roof Replacement — Page-Specific Styles
   Premium Tier — Editorial 8-Section Layout
   Crawford Roofing & Gutters LLC
   ═══════════════════════════════════════════════════════════════ */

/* ── 1. HERO ─────────────────────────────────────────────────── */
.hero--roof-replacement {
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
.hero--roof-replacement::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    160deg,
    rgba(var(--color-primary-rgb), 0.96) 0%,
    rgba(var(--color-primary-rgb), 0.84) 38%,
    rgba(var(--color-secondary-rgb), 0.72) 100%
  );
  z-index: 1;
}
.hero--roof-replacement::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  opacity: 0.12;
  z-index: 1;
  pointer-events: none;
}
.hero--roof-replacement .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.hero--roof-replacement .hero-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
}
.hero--roof-replacement .hero-breadcrumb a {
  color: rgba(255, 255, 255, 0.6);
  transition: color var(--transition-fast);
}
.hero--roof-replacement .hero-breadcrumb a:hover {
  color: rgba(255, 255, 255, 0.9);
}
.hero--roof-replacement .hero-breadcrumb .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.35);
  font-size: var(--font-size-xs);
}
.hero--roof-replacement .hero-breadcrumb .breadcrumb-current {
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(1.8);
  font-weight: 600;
}
.hero--roof-replacement .eyebrow-label {
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
.hero--roof-replacement .eyebrow-label .eyebrow-dot {
  width: 5px;
  height: 5px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.hero--roof-replacement h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 3.75rem);
  line-height: 1.1;
  margin-bottom: var(--space-6);
  text-wrap: balance;
  max-width: 22ch;
}
.hero--roof-replacement h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.7);
}
.hero--roof-replacement .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 640px;
  margin-bottom: var(--space-8);
}
.hero--roof-replacement .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-10);
}
.hero--roof-replacement .hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  align-items: center;
}
.hero--roof-replacement .hero-trust-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.75);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.hero--roof-replacement .hero-trust-item i,
.hero--roof-replacement .hero-trust-item svg {
  width: 16px;
  height: 16px;
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(2);
}

/* ── Section Dividers ────────────────────────────────────────── */
.rr-divider-angle {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.rr-divider-angle--top { top: -1px; }
.rr-divider-angle--bottom { bottom: -1px; }
.rr-divider-angle svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 55px;
}
.rr-divider-wave {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.rr-divider-wave--top { top: -1px; }
.rr-divider-wave--bottom { bottom: -1px; }
.rr-divider-wave svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 70px;
}

/* ── 2. PROBLEM STATEMENT ────────────────────────────────────── */
.rr-problem-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.rr-problem-section .rr-floating-accent {
  position: absolute;
  width: 360px;
  height: 360px;
  border-radius: 40% 60% 50% 50% / 45% 55% 45% 55%;
  background: rgba(var(--color-accent-rgb), 0.03);
  pointer-events: none;
  z-index: 0;
  top: -100px;
  right: -160px;
  animation: rr-float 14s ease-in-out infinite;
}
.rr-pullquote {
  position: relative;
  z-index: 1;
  font-family: var(--font-accent);
  font-size: clamp(1.3rem, 2.4vw, 1.8rem);
  line-height: 1.6;
  color: var(--color-primary);
  font-style: italic;
  max-width: 54ch;
  margin: 0 auto var(--space-12);
  text-align: center;
  padding: var(--space-8) var(--space-6);
  border-left: 4px solid rgba(var(--color-accent-rgb), 0.35);
  border-right: 4px solid rgba(var(--color-accent-rgb), 0.35);
  background: rgba(var(--color-primary-rgb), 0.02);
  border-radius: var(--radius-sm);
}
.rr-pullquote .accent-mark {
  color: rgba(var(--color-accent-rgb), 1);
  font-weight: 700;
  font-style: normal;
}
.rr-bento-grid {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-6);
  max-width: 940px;
  margin: 0 auto;
}
.rr-bento-card {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  position: relative;
  overflow: hidden;
}
.rr-bento-card::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 4px;
  height: 100%;
  background: rgba(var(--color-accent-rgb), 0.2);
  border-radius: var(--radius-sm) 0 0 var(--radius-sm);
}
.rr-bento-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.rr-bento-card__icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.1);
  color: var(--color-accent);
}
.rr-bento-card__icon i,
.rr-bento-card__icon svg {
  width: 22px;
  height: 22px;
}
.rr-bento-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin: 0;
  line-height: 1.3;
}
.rr-bento-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.65;
  margin: 0;
}

/* ── 3. EXPERT POSITIONING ───────────────────────────────────── */
.rr-expert-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.rr-expert-grid {
  display: grid;
  grid-template-columns: 1fr 1.6fr;
  gap: var(--space-12);
  align-items: center;
}
.rr-expert-stat-block {
  text-align: center;
  padding: var(--space-12) var(--space-8);
  background: var(--color-primary);
  border-radius: var(--radius-xl);
  color: var(--color-white);
  position: relative;
  overflow: hidden;
}
.rr-expert-stat-block::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(145deg, rgba(var(--color-accent-rgb), 0.18) 0%, transparent 55%);
  pointer-events: none;
}
.rr-expert-stat-block::after {
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
.rr-expert-stat-number {
  font-family: var(--font-heading);
  font-size: clamp(3.5rem, 8vw, 5.5rem);
  font-weight: 900;
  line-height: 1;
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.8);
  position: relative;
  z-index: 1;
}
.rr-expert-stat-label {
  font-family: var(--font-accent);
  font-size: var(--font-size-lg);
  color: rgba(255, 255, 255, 0.8);
  margin-top: var(--space-2);
  position: relative;
  z-index: 1;
}
.rr-expert-stat-sub {
  font-size: var(--font-size-sm);
  color: rgba(255, 255, 255, 0.5);
  margin-top: var(--space-4);
  position: relative;
  z-index: 1;
}
.rr-expert-content h2 {
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.rr-expert-content .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  margin-bottom: var(--space-8);
  max-width: var(--content-width);
}
.rr-diff-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
}
.rr-diff-item {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.rr-diff-icon {
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
.rr-diff-icon i,
.rr-diff-icon svg {
  width: 20px;
  height: 20px;
}
.rr-diff-text h4 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0 0 var(--space-1) 0;
}
.rr-diff-text p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  margin: 0;
  line-height: 1.6;
}

/* ── 4. SERVICE BREAKDOWN — Materials + Process ──────────────── */
.rr-breakdown-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.rr-breakdown-section .rr-floating-accent {
  position: absolute;
  width: 300px;
  height: 300px;
  border-radius: 30% 70% 55% 45% / 55% 35% 65% 45%;
  background: rgba(var(--color-primary-rgb), 0.03);
  pointer-events: none;
  z-index: 0;
  bottom: -80px;
  left: -120px;
  animation: rr-float 17s ease-in-out infinite reverse;
}
.rr-breakdown-asym {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1.15fr 1fr;
  gap: var(--space-12);
  margin-bottom: var(--space-14);
  align-items: start;
}
.rr-breakdown-image {
  border-radius: var(--radius-lg);
  overflow: hidden;
  position: relative;
  aspect-ratio: 4 / 3;
}
.rr-breakdown-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.rr-breakdown-image:hover img {
  transform: scale(1.03);
}
.rr-breakdown-image::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: var(--radius-lg);
  box-shadow: inset 0 0 0 1px rgba(var(--color-primary-rgb), 0.08);
  pointer-events: none;
}
.rr-breakdown-content h2 {
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.rr-breakdown-content .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  margin-bottom: var(--space-8);
}

/* Materials Grid */
.rr-materials-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-5);
}
.rr-material-card {
  padding: var(--space-6) var(--space-5);
  border-radius: var(--radius-md);
  display: flex;
  flex-direction: column;
  gap: var(--space-2);
  position: relative;
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.rr-material-card:hover {
  transform: translateY(-2px);
  box-shadow: var(--shadow-md);
}
.rr-material-card__icon {
  width: 40px;
  height: 40px;
  border-radius: var(--radius-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.1);
  color: var(--color-accent);
  margin-bottom: var(--space-2);
}
.rr-material-card__icon i,
.rr-material-card__icon svg {
  width: 20px;
  height: 20px;
}
.rr-material-card h4 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin: 0;
}
.rr-material-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  margin: 0;
  line-height: 1.6;
}
.rr-material-card .rr-material-warranty {
  font-size: var(--font-size-xs);
  font-weight: 600;
  color: var(--color-accent);
  margin-top: auto;
  padding-top: var(--space-2);
}

/* Process Timeline */
.rr-timeline-heading {
  text-align: center;
  margin-bottom: var(--space-10);
  position: relative;
  z-index: 1;
}
.rr-timeline-heading h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.rr-timeline-heading .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: var(--content-width);
  margin: 0 auto;
}
.rr-process-timeline {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: var(--space-5);
}
.rr-process-timeline::before {
  content: '';
  position: absolute;
  top: 40px;
  left: 10%;
  right: 10%;
  height: 2px;
  background: linear-gradient(90deg, rgba(var(--color-accent-rgb), 0.3), rgba(var(--color-accent-rgb), 0.08));
  z-index: 0;
}
.rr-timeline-step {
  text-align: center;
  position: relative;
  z-index: 1;
}
.rr-timeline-step__number {
  width: 52px;
  height: 52px;
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
.rr-timeline-step__number::after {
  content: '';
  position: absolute;
  inset: -4px;
  border-radius: var(--radius-full);
  border: 2px solid rgba(var(--color-accent-rgb), 0.25);
}
.rr-timeline-step h4 {
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  color: var(--color-primary);
  margin: 0 0 var(--space-2);
  text-transform: uppercase;
  letter-spacing: 0.03em;
}
.rr-timeline-step p {
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  line-height: 1.6;
  margin: 0;
}

/* ── 5. PROOF / REVIEWS ──────────────────────────────────────── */
.rr-proof-section {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.rr-proof-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(160deg, rgba(var(--color-accent-rgb), 0.14) 0%, transparent 45%);
  pointer-events: none;
}
.rr-proof-section .container {
  position: relative;
  z-index: 1;
}
.rr-proof-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
}
.rr-proof-section .section-title .eyebrow-label {
  color: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.rr-proof-section .section-title h2 {
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.rr-proof-section .section-title .answer-block {
  color: rgba(255, 255, 255, 0.75);
  line-height: 1.7;
  max-width: var(--content-width);
  margin: 0 auto;
}
.rr-testimonial-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.rr-testimonial-card {
  background: rgba(255, 255, 255, 0.06);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
  backdrop-filter: blur(4px);
  transition: transform var(--transition-base), background var(--transition-base);
  position: relative;
}
.rr-testimonial-card::before {
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
.rr-testimonial-card:hover {
  transform: translateY(-3px);
  background: rgba(255, 255, 255, 0.09);
}
.rr-testimonial-stars {
  display: flex;
  gap: var(--space-1);
  margin-bottom: var(--space-4);
  color: var(--color-star);
}
.rr-testimonial-stars i,
.rr-testimonial-stars svg {
  width: 16px;
  height: 16px;
}
.rr-testimonial-card blockquote {
  font-size: var(--font-size-base);
  color: rgba(255, 255, 255, 0.88);
  line-height: 1.7;
  margin: 0 0 var(--space-6);
  font-style: italic;
}
.rr-testimonial-author {
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: rgba(255, 255, 255, 0.65);
}

/* ── 6. COMPARISON TABLE — Asphalt vs Metal ──────────────────── */
.rr-comparison-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.rr-comparison-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
}
.rr-comparison-section .section-title h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.rr-comparison-section .section-title .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: var(--content-width);
  margin: 0 auto;
}
.rr-comparison-table-wrap {
  max-width: 860px;
  margin: 0 auto;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.rr-comparison-table {
  width: 100%;
  border-collapse: collapse;
  font-size: var(--font-size-sm);
}
.rr-comparison-table thead th {
  background: var(--color-primary);
  color: var(--color-white);
  padding: var(--space-5) var(--space-6);
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 700;
  text-align: left;
  letter-spacing: 0.02em;
}
.rr-comparison-table thead th:first-child {
  width: 30%;
}
.rr-comparison-table tbody td {
  padding: var(--space-4) var(--space-6);
  border-bottom: 1px solid var(--color-border);
  color: var(--color-text);
  line-height: 1.6;
  vertical-align: top;
}
.rr-comparison-table tbody tr:nth-child(even) {
  background: rgba(var(--color-primary-rgb), 0.02);
}
.rr-comparison-table tbody tr:last-child td {
  border-bottom: none;
}
.rr-comparison-table tbody td:first-child {
  font-weight: 600;
  color: var(--color-primary);
  font-family: var(--font-heading);
}
.rr-comparison-table tbody tr:hover {
  background: rgba(var(--color-accent-rgb), 0.04);
}
.rr-comparison-note {
  text-align: center;
  margin-top: var(--space-6);
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  font-style: italic;
}

/* ── 7. FAQ ──────────────────────────────────────────────────── */
.rr-faq-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.rr-faq-section .rr-floating-accent {
  position: absolute;
  width: 280px;
  height: 280px;
  border-radius: 50% 50% 35% 65% / 55% 40% 60% 45%;
  background: rgba(var(--color-accent-rgb), 0.03);
  pointer-events: none;
  z-index: 0;
  top: 10%;
  left: -110px;
  animation: rr-float 13s ease-in-out infinite;
}
.rr-faq-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
  position: relative;
  z-index: 1;
}
.rr-faq-section .section-title h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.rr-faq-section .section-title .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: var(--content-width);
  margin: 0 auto;
}
.rr-faq-list {
  position: relative;
  z-index: 1;
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.rr-faq-item {
  border: 1px solid var(--color-border);
  border-radius: var(--radius-md);
  overflow: hidden;
  transition: box-shadow var(--transition-base);
}
.rr-faq-item:hover {
  box-shadow: var(--shadow-sm);
}
.rr-faq-item summary {
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
.rr-faq-item summary::-webkit-details-marker {
  display: none;
}
.rr-faq-item summary::after {
  content: '+';
  font-size: var(--font-size-xl);
  font-weight: 300;
  color: var(--color-accent);
  transition: transform var(--transition-base);
  flex-shrink: 0;
  margin-left: var(--space-4);
}
.rr-faq-item[open] summary::after {
  transform: rotate(45deg);
}
.rr-faq-item summary:hover {
  background: rgba(var(--color-primary-rgb), 0.03);
}
.rr-faq-answer {
  padding: 0 var(--space-6) var(--space-6);
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.75;
}

/* ── 8. FINAL CTA ────────────────────────────────────────────── */
.rr-final-cta {
  position: relative;
  background: var(--color-primary);
  padding: var(--space-16) 0;
  text-align: center;
  overflow: hidden;
}
.rr-final-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(var(--color-accent-rgb), 0.2) 0%, transparent 50%);
  pointer-events: none;
}
.rr-final-cta::after {
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
.rr-final-cta .container {
  position: relative;
  z-index: 1;
}
.rr-final-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.rr-final-cta .answer-block {
  color: rgba(255, 255, 255, 0.82);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  max-width: 620px;
  margin: 0 auto var(--space-8);
}
.rr-final-cta .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: var(--space-4);
}

/* ── Related Services ────────────────────────────────────────── */
.rr-related-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.rr-related-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.rr-related-section .section-title h2 {
  text-wrap: balance;
}

/* ── Last Updated Stamp ──────────────────────────────────────── */
.rr-last-updated {
  text-align: center;
  padding: var(--space-6) 0;
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  border-top: 1px solid var(--color-border);
}

/* ── Float Animation Keyframes ───────────────────────────────── */
@keyframes rr-float {
  0%, 100% { transform: translateY(0) rotate(0deg); }
  50% { transform: translateY(-22px) rotate(4deg); }
}

/* ── Responsive ──────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .rr-expert-grid {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .rr-expert-grid .rr-expert-stat-block {
    order: -1;
    max-width: 320px;
    margin: 0 auto;
  }
  .rr-breakdown-asym {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .rr-process-timeline {
    grid-template-columns: repeat(3, 1fr);
  }
  .rr-process-timeline::before {
    display: none;
  }
  .rr-testimonial-grid {
    grid-template-columns: 1fr;
    max-width: 560px;
    margin: 0 auto;
  }
  .rr-comparison-table-wrap {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 768px) {
  .hero--roof-replacement {
    min-height: 70vh;
    padding: var(--space-12) 0 var(--space-10);
  }
  .rr-bento-grid {
    grid-template-columns: 1fr;
  }
  .rr-materials-grid {
    grid-template-columns: 1fr;
  }
  .rr-process-timeline {
    grid-template-columns: 1fr;
    max-width: 340px;
    margin: 0 auto;
  }
  .hero--roof-replacement .hero-ctas {
    flex-direction: column;
  }
  .hero--roof-replacement .hero-ctas .btn {
    width: 100%;
    text-align: center;
    justify-content: center;
  }
  .rr-final-cta .hero-ctas {
    flex-direction: column;
    align-items: center;
  }
  .rr-final-cta .hero-ctas .btn {
    width: 100%;
    max-width: 320px;
    text-align: center;
    justify-content: center;
  }
  .rr-comparison-table {
    font-size: var(--font-size-xs);
  }
  .rr-comparison-table thead th,
  .rr-comparison-table tbody td {
    padding: var(--space-3) var(--space-4);
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 1 — HERO
     ═══════════════════════════════════════════════════════════════ -->
<section class="hero--roof-replacement" style="background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134049337-o7oznv-dff36b_a35b2df95a814ec49799d0169f3a87da_mv2.jpg');" aria-label="Roof replacement service in Omaha">
  <div class="container">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <span class="breadcrumb-current">Roof Replacement</span>
    </nav>
    <span class="eyebrow-label">
      Roofing Services <span class="eyebrow-dot" aria-hidden="true"></span> Omaha, NE
    </span>
    <h1><span class="accent-word">Roof Replacement</span> in Omaha, NE</h1>
    <p class="hero-answer">
      Crawford Roofing &amp; Gutters LLC is a licensed Nebraska roofing contractor based in Omaha, delivering full roof replacements since 1993. We handle complete tear-off, decking inspection, underlayment installation, and final roofing — using asphalt shingles, metal, TPO, or EPDM systems backed by manufacturer warranties that protect your investment for decades.
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
      <span class="hero-trust-item"><i data-lucide="award" aria-hidden="true"></i> Manufacturer Warranties</span>
      <span class="hero-trust-item"><i data-lucide="star" aria-hidden="true"></i> 4.9 ★ Rated</span>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 2 — PROBLEM STATEMENT
     ═══════════════════════════════════════════════════════════════ -->
<section class="rr-problem-section" aria-label="Signs you need a roof replacement in Omaha">
  <div class="rr-divider-angle rr-divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none">
      <path d="M0,55 L1200,0 L1200,0 L0,0 Z" fill="var(--color-primary)"></path>
    </svg>
  </div>
  <div class="rr-floating-accent" aria-hidden="true"></div>
  <div class="container">

    <p class="rr-pullquote reveal-scale">
      <span class="accent-mark">"</span>An Omaha roof that survived twenty Nebraska winters has earned its retirement. Patching over accumulated hail damage, freeze-thaw cracking, and granule loss only delays the inevitable — and every month you wait, water finds a new path into your decking.<span class="accent-mark">"</span>
    </p>

    <div class="rr-bento-grid">
      <div class="rr-bento-card card-tint-1 reveal-up reveal-delay-1">
        <div class="rr-bento-card__icon"><i data-lucide="calendar" aria-hidden="true"></i></div>
        <h3>Roof Age Exceeds 20 Years</h3>
        <p>Most asphalt shingle roofs in the Omaha metro reach the end of their rated service life between 20 and 25 years. Roofs installed before 2005 used organic-mat shingles that degrade faster than modern fiberglass-mat products — and Nebraska's temperature swings from -10°F to 100°F accelerate that timeline.</p>
      </div>
      <div class="rr-bento-card card-tint-2 reveal-up reveal-delay-2">
        <div class="rr-bento-card__icon"><i data-lucide="wrench" aria-hidden="true"></i></div>
        <h3>Repeated Repairs Add Up</h3>
        <p>If you have paid for three or more roof repairs in the last five years, the cumulative cost often exceeds half the price of a full replacement. Omaha's annual hail season compounds this — each patched area creates a seam where water can eventually penetrate the underlayment beneath.</p>
      </div>
      <div class="rr-bento-card card-tint-3 reveal-left reveal-delay-1">
        <div class="rr-bento-card__icon"><i data-lucide="cloud-rain" aria-hidden="true"></i></div>
        <h3>Widespread Storm Damage</h3>
        <p>Omaha averages 5 to 7 significant hailstorms per year. When hail damage covers more than 30 percent of the roof surface, insurance adjusters and manufacturer warranty guidelines both indicate full replacement rather than spot repairs. Crawford documents damage to support your insurance claim.</p>
      </div>
      <div class="rr-bento-card card-tint-1 reveal-right reveal-delay-2">
        <div class="rr-bento-card__icon"><i data-lucide="thermometer" aria-hidden="true"></i></div>
        <h3>Energy Bills Keep Rising</h3>
        <p>A failing roof lets conditioned air escape through gaps in the decking and degraded underlayment. Omaha homeowners with roofs past their rated life often see heating and cooling costs climb 15 to 25 percent year over year — a new roof with modern ventilation and radiant barrier underlayment reverses that trend.</p>
      </div>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 3 — EXPERT POSITIONING
     ═══════════════════════════════════════════════════════════════ -->
<section class="rr-expert-section" aria-label="Why choose Crawford for roof replacement">
  <div class="rr-divider-wave rr-divider-wave--top" aria-hidden="true">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none">
      <path d="M0,70 C200,10 400,60 600,30 C800,0 1000,50 1200,20 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>
  <div class="container">
    <div class="rr-expert-grid">

      <div class="rr-expert-stat-block reveal-scale">
        <span class="rr-expert-stat-number">2,500+</span>
        <span class="rr-expert-stat-label">Roofs Replaced in the Omaha Metro</span>
        <span class="rr-expert-stat-sub">Second-generation roofing expertise since 1993</span>
      </div>

      <div class="rr-expert-content reveal-right">
        <span class="eyebrow-label">Why Crawford</span>
        <h2>What Makes Crawford the Right Choice for <span class="text-accent">Roof Replacement</span> in Omaha?</h2>
        <p class="answer-block">
          Crawford Roofing &amp; Gutters has replaced over 2,500 roofs across the Omaha metro since 1993. We are certified installers for CertainTeed, GAF, and Owens Corning — which means every replacement qualifies for extended manufacturer warranties that cover both materials and labor, not just the shingles sitting on your roof.
        </p>
        <ul class="rr-diff-list">
          <li class="rr-diff-item reveal-right reveal-delay-1">
            <div class="rr-diff-icon"><i data-lucide="layers" aria-hidden="true"></i></div>
            <div class="rr-diff-text">
              <h4>Full-System Material Expertise</h4>
              <p>We install asphalt shingles, standing seam metal, TPO membrane, and EPDM rubber — matching the right material to your roof pitch, budget, and building use rather than defaulting to a single product line.</p>
            </div>
          </li>
          <li class="rr-diff-item reveal-right reveal-delay-2">
            <div class="rr-diff-icon"><i data-lucide="file-check" aria-hidden="true"></i></div>
            <div class="rr-diff-text">
              <h4>Manufacturer-Backed Warranties</h4>
              <p>As a certified installer for three major shingle manufacturers, Crawford can register extended warranty programs that cover material defects and workmanship — giving Omaha homeowners coverage for 25 to 50 years.</p>
            </div>
          </li>
          <li class="rr-diff-item reveal-right reveal-delay-3">
            <div class="rr-diff-icon"><i data-lucide="shield" aria-hidden="true"></i></div>
            <div class="rr-diff-text">
              <h4>Insurance Claim Coordination</h4>
              <p>Crawford documents hail and wind damage to meet adjuster requirements, provides itemized Xactimate-compatible estimates, and meets with your insurance adjuster on-site — streamlining the claim process from filing to final payment.</p>
            </div>
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 4 — SERVICE BREAKDOWN (Materials + Process)
     ═══════════════════════════════════════════════════════════════ -->
<section class="rr-breakdown-section" aria-label="Roof replacement materials and process">
  <div class="rr-divider-angle rr-divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none">
      <path d="M0,0 L1200,55 L1200,0 L0,0 Z" fill="var(--color-bg-alt)"></path>
    </svg>
  </div>
  <div class="rr-floating-accent" aria-hidden="true"></div>
  <div class="container">

    <!-- Materials — Asymmetric Layout -->
    <div class="rr-breakdown-asym">
      <div class="rr-breakdown-image reveal-left">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg" alt="Crawford crew installing new asphalt shingles on an Omaha residential roof" width="600" height="450" loading="lazy">
      </div>
      <div class="rr-breakdown-content reveal-right">
        <span class="eyebrow-label">Roofing Materials</span>
        <h2>What Roofing Materials Does Crawford Install for <span class="text-accent">Omaha Replacements</span>?</h2>
        <p class="answer-block">
          Crawford installs four roofing systems engineered for Nebraska's extreme climate — from architectural asphalt shingles rated for 130 mph winds to TPO membrane designed for flat commercial applications. Every material we stock is rated for the freeze-thaw cycles, hail impact, and UV exposure that define the Omaha roofing environment.
        </p>
        <div class="rr-materials-grid">
          <div class="rr-material-card card-tint-1 reveal-up reveal-delay-1">
            <div class="rr-material-card__icon"><i data-lucide="home" aria-hidden="true"></i></div>
            <h4>Architectural Asphalt Shingles</h4>
            <p>Multi-layered dimensional shingles from CertainTeed, GAF, and Owens Corning. Class 4 impact-rated options available for Omaha hail zones.</p>
            <span class="rr-material-warranty">25–50 year manufacturer warranty</span>
          </div>
          <div class="rr-material-card card-tint-2 reveal-up reveal-delay-2">
            <div class="rr-material-card__icon"><i data-lucide="shield" aria-hidden="true"></i></div>
            <h4>Standing Seam Metal</h4>
            <p>26-gauge steel or aluminum panels with concealed fasteners. Resists hail denting at 2-inch stone diameter and sheds snow load faster than shingle roofs.</p>
            <span class="rr-material-warranty">40–50 year manufacturer warranty</span>
          </div>
          <div class="rr-material-card card-tint-3 reveal-up reveal-delay-3">
            <div class="rr-material-card__icon"><i data-lucide="building-2" aria-hidden="true"></i></div>
            <h4>TPO Single-Ply Membrane</h4>
            <p>Thermoplastic polyolefin membrane for flat and low-slope commercial roofs. Heat-welded seams create a monolithic barrier that eliminates leak points.</p>
            <span class="rr-material-warranty">20–30 year commercial warranty</span>
          </div>
          <div class="rr-material-card card-tint-1 reveal-up reveal-delay-4">
            <div class="rr-material-card__icon"><i data-lucide="droplets" aria-hidden="true"></i></div>
            <h4>EPDM Rubber Roofing</h4>
            <p>Synthetic rubber membrane for low-slope residential and commercial applications. Flexible down to -40°F — critical for Nebraska's harshest winter months.</p>
            <span class="rr-material-warranty">20–30 year manufacturer warranty</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Process Timeline -->
    <div class="rr-timeline-heading reveal-up">
      <span class="eyebrow-label">Our Process</span>
      <h2>What Does Crawford's <span class="text-accent">Roof Replacement Process</span> Look Like?</h2>
      <p class="answer-block">
        Every Crawford roof replacement follows a five-step process designed to protect your home, comply with Omaha building codes, and deliver a finished roof that stands up to decades of Nebraska weather. Most residential replacements are completed in 1 to 3 days depending on roof size and complexity.
      </p>
    </div>
    <div class="rr-process-timeline">
      <div class="rr-timeline-step reveal-up reveal-delay-1">
        <div class="rr-timeline-step__number">1</div>
        <h4>Inspect</h4>
        <p>Full roof and attic assessment with photo documentation. We identify decking damage, ventilation issues, and code deficiencies before quoting.</p>
      </div>
      <div class="rr-timeline-step reveal-up reveal-delay-2">
        <div class="rr-timeline-step__number">2</div>
        <h4>Tear Off</h4>
        <p>Complete removal of old shingles, underlayment, and damaged flashing down to bare decking. We never roof over existing layers.</p>
      </div>
      <div class="rr-timeline-step reveal-up reveal-delay-3">
        <div class="rr-timeline-step__number">3</div>
        <h4>Repair Decking</h4>
        <p>Rotted or water-damaged OSB and plywood sheathing is replaced. We reinforce weak spots and verify proper nail-pull resistance across every panel.</p>
      </div>
      <div class="rr-timeline-step reveal-up reveal-delay-4">
        <div class="rr-timeline-step__number">4</div>
        <h4>Install</h4>
        <p>Ice and water shield in valleys and eaves, synthetic underlayment across the field, drip edge, new flashing, and your chosen roofing material — all per manufacturer specs.</p>
      </div>
      <div class="rr-timeline-step reveal-up">
        <div class="rr-timeline-step__number">5</div>
        <h4>Final Walk</h4>
        <p>City permit inspection, magnetic nail sweep of yard and driveway, complete debris haul-off, and a final walkthrough with you to verify every detail.</p>
      </div>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 5 — PROOF / REVIEWS
     ═══════════════════════════════════════════════════════════════ -->
<section class="rr-proof-section" aria-label="Customer testimonials about roof replacement">
  <div class="rr-divider-wave rr-divider-wave--top" aria-hidden="true">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none">
      <path d="M0,70 C300,10 600,50 900,20 C1050,5 1150,40 1200,25 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Homeowner Results</span>
      <h2>What Do Omaha Homeowners Say After a <span class="text-accent" style="color:rgba(var(--color-accent-rgb),1);filter:brightness(1.7);">Crawford Roof Replacement</span>?</h2>
      <p class="answer-block">
        Over 2,500 homes and businesses across the Omaha metro trust Crawford for roof replacement. From insurance-coordinated tear-offs in West Omaha to full metal roof upgrades in Gretna, here is what clients say about the experience.
      </p>
    </div>
    <div class="rr-testimonial-grid">
      <div class="rr-testimonial-card reveal-up reveal-delay-1">
        <div class="rr-testimonial-stars">
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
        </div>
        <blockquote>"After the July hailstorm tore up our shingles near 168th and Center, Crawford had the adjuster meeting scheduled within a week. They handled the full tear-off and re-roof in a single day — came back the next morning to do the cleanup and nail sweep. Insurance covered everything minus our deductible."</blockquote>
        <cite class="rr-testimonial-author">— Mike T., West Omaha</cite>
      </div>
      <div class="rr-testimonial-card reveal-up reveal-delay-2">
        <div class="rr-testimonial-stars">
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
        </div>
        <blockquote>"We replaced a 24-year-old roof on our farmhouse outside Gretna. Crawford found soft spots in the decking that two other contractors missed during their quotes. They replaced eight sheets of OSB at no surprise charge — it was already in the estimate. That kind of thoroughness is hard to find."</blockquote>
        <cite class="rr-testimonial-author">— Carol A., Gretna</cite>
      </div>
      <div class="rr-testimonial-card reveal-up reveal-delay-3">
        <div class="rr-testimonial-stars">
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
        </div>
        <blockquote>"We went with standing seam metal on our commercial shop in Springfield. Crawford finished in three days, pulled the permit, and handled the city inspection. Our heating costs dropped noticeably that first winter — the insulation and ventilation upgrades they recommended made a real difference."</blockquote>
        <cite class="rr-testimonial-author">— Dave L., Springfield</cite>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 6 — COMPARISON: Asphalt vs Metal
     ═══════════════════════════════════════════════════════════════ -->
<section class="rr-comparison-section" aria-label="Asphalt versus metal roofing comparison for Omaha homes">
  <div class="rr-divider-angle rr-divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none">
      <path d="M0,0 L1200,55 L1200,0 L0,0 Z" fill="var(--color-primary)"></path>
    </svg>
  </div>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Material Comparison</span>
      <h2>Asphalt vs Metal Roofing: Which Is Right for Your <span class="text-accent">Omaha Home</span>?</h2>
      <p class="answer-block">
        Asphalt shingles and standing seam metal are the two most popular roof replacement materials in the Omaha market. Each performs differently against Nebraska hail, wind, and freeze-thaw cycling. This comparison breaks down the factors that matter most for Omaha homeowners making a long-term investment.
      </p>
    </div>
    <div class="rr-comparison-table-wrap reveal-up">
      <table class="rr-comparison-table">
        <thead>
          <tr>
            <th>Factor</th>
            <th>Architectural Asphalt Shingles</th>
            <th>Standing Seam Metal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Cost (2,000 sq ft)</td>
            <td>$10,000–$16,000</td>
            <td>$18,000–$30,000</td>
          </tr>
          <tr>
            <td>Lifespan</td>
            <td>25–30 years in Omaha climate</td>
            <td>40–60 years with minimal maintenance</td>
          </tr>
          <tr>
            <td>Hail Resistance</td>
            <td>Class 4 impact-rated options available; may still dent or lose granules</td>
            <td>26-gauge steel resists 2-inch hail; dent risk at 3-inch+</td>
          </tr>
          <tr>
            <td>Wind Rating</td>
            <td>110–130 mph (architectural class)</td>
            <td>140–180 mph (concealed fastener systems)</td>
          </tr>
          <tr>
            <td>Energy Efficiency</td>
            <td>Standard; reflective options add cost</td>
            <td>Reflects solar heat; reduces cooling costs 10–25%</td>
          </tr>
          <tr>
            <td>Insurance Impact</td>
            <td>Standard premium; Class 4 may qualify for discount</td>
            <td>Many Nebraska insurers offer 10–25% premium reduction</td>
          </tr>
          <tr>
            <td>Warranty</td>
            <td>25–50 year limited manufacturer warranty</td>
            <td>40–50 year paint and substrate warranty</td>
          </tr>
          <tr>
            <td>Best For</td>
            <td>Budget-conscious homeowners; insurance-funded replacements</td>
            <td>Long-term investment; commercial buildings; rural properties</td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="rr-comparison-note reveal-up">Pricing reflects Omaha metro averages as of <?php echo date('F Y'); ?>. Actual cost depends on roof pitch, access, decking condition, and material grade selected.</p>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 7 — FAQ
     ═══════════════════════════════════════════════════════════════ -->
<section class="rr-faq-section" aria-label="Frequently asked questions about roof replacement in Omaha">
  <div class="rr-floating-accent" aria-hidden="true"></div>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">FAQ</span>
      <h2>What Do Omaha Homeowners Ask About <span class="text-accent">Roof Replacement</span>?</h2>
      <p class="answer-block">
        If you are searching for roof replacement near me in Omaha, these are the questions our team answers most often. Every response draws on <?php echo $yearsInBusiness; ?>+ years replacing roofs across Douglas, Sarpy, and Washington counties.
      </p>
    </div>
    <div class="rr-faq-list">
      <?php foreach ($faqs as $i => $faq): ?>
      <details class="rr-faq-item reveal-up<?php echo ($i < 4) ? ' reveal-delay-' . ($i + 1) : ''; ?>">
        <summary><?php echo htmlspecialchars($faq['question']); ?></summary>
        <div class="rr-faq-answer">
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
<section class="rr-related-section" aria-label="Related roofing services">
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
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg" alt="New roof installation by Crawford Roofing in Omaha" width="600" height="360" loading="lazy">
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

      <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
        <div class="service-card__image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg" alt="Professional roof inspection in Omaha by Crawford Roofing" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="search" aria-hidden="true"></i></div>
          <h3>Roof Inspection</h3>
          <p class="service-card__desc">Thorough 12-point inspections with insurance-ready photo documentation.</p>
          <ul>
            <li>Free post-storm assessments</li>
            <li>Insurance-formatted reports</li>
            <li>Pre-purchase buyer inspections</li>
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
<section class="rr-final-cta" aria-label="Get a free roof replacement estimate in Omaha">
  <div class="rr-divider-angle rr-divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none">
      <path d="M0,55 L1200,0 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>
  <div class="container">
    <h2 class="reveal-up">Ready for a New <span class="text-accent" style="color:rgba(var(--color-accent-rgb),1);filter:brightness(1.7);">Roof</span> on Your Omaha Home?</h2>
    <p class="answer-block reveal-up reveal-delay-1">
      Crawford Roofing &amp; Gutters provides free on-site estimates for residential and commercial roof replacement across the Omaha metro — from Dundee and Aksarben to Bellevue, Papillion, La Vista, Gretna, and Springfield. Schedule yours now and get a clear price with no hidden fees.
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
<div class="rr-last-updated">
  Last Updated: <?php echo date('F Y'); ?>
</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
