<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle = 'Roof Repair Omaha NE | Emergency & Storm Damage Repair | Crawford Roofing & Gutters LLC';
$pageDescription = 'Fast roof repair in Omaha, NE by Crawford Roofing. Emergency leak repair, storm damage, shingle replacement, and flashing repair. 24-hour response. Free estimates.';
$canonicalUrl = $siteUrl . '/services/roof-repair/';
$ogImage = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134048805-bkz97m-dff36b_381e49a0e2c841a4a0db9e9691fb2386_mv2.jpg';
$currentPage = 'services';
$heroImagePreload = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134048805-bkz97m-dff36b_381e49a0e2c841a4a0db9e9691fb2386_mv2.jpg';
$cssVersion = '3';

// ── FAQ Data ─────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How much does roof repair cost in Omaha, NE?',
        'answer'   => 'Most residential roof repairs in Omaha run between $350 and $1,500 depending on the damage type, roof pitch, and material. A simple shingle replacement or pipe boot seal typically falls at the low end, while flashing repairs around chimneys or multi-area leak fixes reach the higher range. Crawford provides free on-site estimates so you know the exact cost before we start any work.',
    ],
    [
        'question' => 'Does homeowners insurance cover roof repair in Nebraska?',
        'answer'   => 'Yes, most Nebraska homeowner policies cover roof repair when the damage results from a sudden event like hail, wind, or a fallen tree limb. Gradual wear and lack of maintenance are typically excluded. Crawford works directly with insurance adjusters across Omaha — we document damage with date-stamped photos and provide repair estimates formatted for State Farm, Farmers, USAA, and other carriers to help move your claim forward.',
    ],
    [
        'question' => 'How fast can Crawford respond to an emergency roof leak in Omaha?',
        'answer'   => 'Crawford deploys emergency tarping and leak containment crews within 2 to 4 hours of your call during business hours, and within 4 to 8 hours after-hours or on weekends. After major Omaha storm events, we prioritize calls with active interior water intrusion. Permanent repair typically follows within 3 to 7 business days once materials are sourced and weather permits.',
    ],
    [
        'question' => 'What are the most common roof repairs in Omaha?',
        'answer'   => 'Shingle replacement after hail damage is the single most common repair we perform in Omaha, followed by flashing repair around chimneys and dormers, vent boot replacement, and valley re-sealing. Nebraska freeze-thaw cycles also cause ice dam damage along eaves — a repair we see frequently in Dundee, Benson, and other neighborhoods with older homes and lower roof pitches.',
    ],
    [
        'question' => 'Can you repair my roof instead of replacing it?',
        'answer'   => 'In many cases, yes. If damage is isolated to a section of your roof and the underlying decking is sound, a targeted repair extends your roof life by 5 to 10 years at a fraction of replacement cost. Crawford never recommends a full replacement when a repair will do the job. We show you the damage, explain both options, and let you decide. If more than 30 percent of your shingle field is compromised, replacement becomes the more cost-effective path.',
    ],
    [
        'question' => 'How long does a typical roof repair take in Omaha?',
        'answer'   => 'Most residential roof repairs in Omaha — shingle replacement, flashing fixes, pipe boot seals — are completed in a single day, often within 2 to 4 hours on-site. Larger repairs involving decking replacement or multi-area flashing work may extend to 2 days. Emergency tarping is completed same-visit. Crawford schedules permanent repairs within the same week whenever weather and material availability allow.',
    ],
    [
        'question' => 'Do you repair commercial roofs in the Omaha metro?',
        'answer'   => 'Yes. Crawford repairs flat roofs, low-slope membrane systems, and commercial shingle roofs across the Omaha metro area. We service retail centers, warehouses, office buildings, and multi-family properties in locations from downtown Omaha to Papillion and La Vista. Commercial clients receive the same photo-documented inspection and transparent estimate process as residential homeowners.',
    ],
    [
        'question' => 'What should I do if I find a roof leak during a storm?',
        'answer'   => 'First, place a bucket or container under the active drip to prevent floor and ceiling damage. If you can safely access your attic, lay a tarp over the affected area from inside. Do not climb onto a wet roof. Call Crawford immediately — our emergency line is staffed during major Omaha weather events, and we dispatch tarping crews even during active storms when conditions allow safe roof access.',
    ],
];

// ── Schema ───────────────────────────────────────────────────
$currentService = null;
foreach ($services as $s) {
    if ($s['slug'] === 'roof-repair') {
        $currentService = $s;
        break;
    }
}
$serviceSchema    = generateServiceSchema($currentService, $siteUrl, $siteName, $address);
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',         'url' => $siteUrl . '/'],
    ['name' => 'Services',     'url' => $siteUrl . '/services/'],
    ['name' => 'Roof Repair',  'url' => $siteUrl . '/services/roof-repair/'],
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
   Roof Repair — Page-Specific Styles
   Premium Tier — Editorial 8-Section Layout
   Crawford Roofing & Gutters LLC
   ═══════════════════════════════════════════════════════════════ */

/* ── 1. HERO ─────────────────────────────────────────────────── */
.hero--roof-repair {
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
.hero--roof-repair::before {
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
.hero--roof-repair::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  opacity: 0.14;
  z-index: 1;
  pointer-events: none;
}
.hero--roof-repair .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.hero--roof-repair .hero-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
}
.hero--roof-repair .hero-breadcrumb a {
  color: rgba(255, 255, 255, 0.6);
  transition: color var(--transition-fast);
}
.hero--roof-repair .hero-breadcrumb a:hover {
  color: rgba(255, 255, 255, 0.9);
}
.hero--roof-repair .hero-breadcrumb .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.35);
  font-size: var(--font-size-xs);
}
.hero--roof-repair .hero-breadcrumb .breadcrumb-current {
  color: rgba(var(--color-accent-rgb), 0.8);
  filter: brightness(1.8);
  font-weight: 600;
}
.hero--roof-repair .eyebrow-label {
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
.hero--roof-repair .eyebrow-label .eyebrow-dot {
  width: 5px;
  height: 5px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.7);
  filter: brightness(2);
}
.hero--roof-repair h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 3.75rem);
  line-height: 1.08;
  margin-bottom: var(--space-6);
  text-wrap: balance;
  max-width: 20ch;
}
.hero--roof-repair h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.7);
}
.hero--roof-repair .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 620px;
  margin-bottom: var(--space-8);
}
.hero--roof-repair .hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-10);
}
.hero--roof-repair .hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  align-items: center;
}
.hero--roof-repair .hero-trust-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.75);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.hero--roof-repair .hero-trust-item i,
.hero--roof-repair .hero-trust-item svg {
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
.rr-divider-curve {
  position: absolute;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.rr-divider-curve--top { top: -1px; }
.rr-divider-curve--bottom { bottom: -1px; }
.rr-divider-curve svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 60px;
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
  width: 380px;
  height: 380px;
  border-radius: 40% 60% 55% 45% / 50% 38% 62% 50%;
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
  max-width: 960px;
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

/* ── 4. SERVICE BREAKDOWN ────────────────────────────────────── */
.rr-breakdown-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.rr-breakdown-section .rr-floating-accent {
  position: absolute;
  width: 310px;
  height: 310px;
  border-radius: 30% 70% 50% 50% / 55% 35% 65% 45%;
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
  margin-bottom: var(--space-12);
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

/* Repair Type Grid */
.rr-repair-types {
  list-style: none;
  padding: 0;
  margin: 0;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3) var(--space-6);
}
.rr-repair-types li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: var(--color-text);
  line-height: 1.5;
}
.rr-repair-types li i,
.rr-repair-types li svg {
  flex-shrink: 0;
  width: 18px;
  height: 18px;
  color: var(--color-success);
  margin-top: 1px;
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
  font-size: var(--font-size-xl);
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
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.55;
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
  background: linear-gradient(155deg, rgba(var(--color-accent-rgb), 0.14) 0%, transparent 48%);
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

/* ── 6. COMPARISON ───────────────────────────────────────────── */
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
.rr-comparison-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-6);
  max-width: 960px;
  margin: 0 auto;
}
.rr-comparison-col {
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
}
.rr-comparison-col--emergency {
  background: var(--color-card-tint-3);
  border: 2px solid rgba(var(--color-accent-rgb), 0.2);
  box-shadow: var(--shadow-md);
  position: relative;
}
.rr-comparison-col--emergency::before {
  content: 'Urgent';
  position: absolute;
  top: var(--space-4);
  right: var(--space-4);
  background: var(--color-danger);
  color: var(--color-white);
  font-size: var(--font-size-xs);
  font-weight: 700;
  padding: var(--space-1) var(--space-3);
  border-radius: var(--radius-full);
  text-transform: uppercase;
  letter-spacing: 0.05em;
}
.rr-comparison-col--scheduled {
  background: var(--color-card-tint-neutral);
  border: 1px solid var(--color-border);
}
.rr-comparison-col h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  margin: 0 0 var(--space-2);
  text-align: center;
}
.rr-comparison-col--emergency h3 {
  color: var(--color-accent);
}
.rr-comparison-col--scheduled h3 {
  color: var(--color-primary);
}
.rr-comparison-response {
  text-align: center;
  font-family: var(--font-heading);
  font-size: var(--font-size-2xl);
  font-weight: 800;
  color: var(--color-primary);
  margin-bottom: var(--space-4);
  padding-bottom: var(--space-4);
  border-bottom: 1px solid var(--color-border);
}
.rr-comparison-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.rr-comparison-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  font-size: var(--font-size-sm);
  line-height: 1.6;
  color: var(--color-text);
}
.rr-comparison-list li i,
.rr-comparison-list li svg {
  flex-shrink: 0;
  width: 18px;
  height: 18px;
  margin-top: 2px;
  color: var(--color-success);
}
.rr-comparison-note {
  margin-top: var(--space-6);
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  text-align: center;
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
  max-width: 600px;
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
  .rr-comparison-grid {
    grid-template-columns: 1fr;
    max-width: 480px;
    margin: 0 auto;
  }
}
@media (max-width: 768px) {
  .hero--roof-repair {
    min-height: 70vh;
    padding: var(--space-12) 0 var(--space-10);
  }
  .rr-bento-grid {
    grid-template-columns: 1fr;
  }
  .rr-repair-types {
    grid-template-columns: 1fr;
  }
  .rr-process-timeline {
    grid-template-columns: 1fr;
    max-width: 340px;
    margin: 0 auto;
  }
  .hero--roof-repair .hero-ctas {
    flex-direction: column;
  }
  .hero--roof-repair .hero-ctas .btn {
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
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 1 — HERO
     ═══════════════════════════════════════════════════════════════ -->
<section class="hero--roof-repair" style="background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134048805-bkz97m-dff36b_381e49a0e2c841a4a0db9e9691fb2386_mv2.jpg');" aria-label="Roof repair service in Omaha">
  <div class="container">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <span class="breadcrumb-current">Roof Repair</span>
    </nav>
    <span class="eyebrow-label">
      Roofing Services <span class="eyebrow-dot" aria-hidden="true"></span> Omaha, NE
    </span>
    <h1><span class="accent-word">Roof Repair</span> in Omaha, NE</h1>
    <p class="hero-answer">
      Crawford Roofing &amp; Gutters LLC is a licensed Nebraska roofing contractor based in Omaha, delivering emergency and scheduled roof repairs since 1993. We fix storm damage, seal active leaks, replace blown shingles, and restore flashing integrity — responding within hours when Omaha weather tears into your roof and water starts coming through.
    </p>
    <div class="hero-ctas">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Free Repair Estimate</a>
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
      <span class="hero-trust-item"><i data-lucide="clock" aria-hidden="true"></i> 24-Hour Emergency Response</span>
      <span class="hero-trust-item"><i data-lucide="cloud-rain" aria-hidden="true"></i> Storm Damage Experts</span>
      <span class="hero-trust-item"><i data-lucide="star" aria-hidden="true"></i> 4.9 ★ Rated</span>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 2 — PROBLEM STATEMENT
     ═══════════════════════════════════════════════════════════════ -->
<section class="rr-problem-section" aria-label="Signs your Omaha roof needs repair">
  <div class="rr-divider-angle rr-divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none">
      <path d="M0,55 L1200,0 L1200,0 L0,0 Z" fill="var(--color-primary)"></path>
    </svg>
  </div>
  <div class="rr-floating-accent" aria-hidden="true"></div>
  <div class="container">

    <p class="rr-pullquote reveal-scale">
      <span class="accent-mark">"</span>A small roof leak in Omaha does not stay small. Nebraska freeze-thaw cycles wedge moisture into cracks, and what starts as a single drip in March becomes saturated decking and a mold problem by June — turning a $500 repair into a $5,000 emergency.<span class="accent-mark">"</span>
    </p>

    <div class="rr-bento-grid">
      <div class="rr-bento-card card-tint-1 reveal-up reveal-delay-1">
        <div class="rr-bento-card__icon"><i data-lucide="droplets" aria-hidden="true"></i></div>
        <h3>Active Leaks &amp; Ceiling Stains</h3>
        <p>Water spots on ceilings or walls signal an active breach in your roofing system. The leak entry point is often several feet from where the stain appears — water travels along rafters before pooling. Delaying repair invites mold growth and structural rot in as little as 48 hours during humid Omaha summers.</p>
      </div>
      <div class="rr-bento-card card-tint-2 reveal-up reveal-delay-2">
        <div class="rr-bento-card__icon"><i data-lucide="wind" aria-hidden="true"></i></div>
        <h3>Missing or Lifted Shingles</h3>
        <p>Omaha thunderstorms regularly produce 60-70 mph straight-line winds that rip shingles from nail lines and expose the felt underlayment below. Every missing shingle is a direct pathway for rain. After wind events, check from the curb — bare patches of underlayment stand out as dark rectangles against your shingle field.</p>
      </div>
      <div class="rr-bento-card card-tint-3 reveal-left reveal-delay-1">
        <div class="rr-bento-card__icon"><i data-lucide="cloud-hail" aria-hidden="true"></i></div>
        <h3>Granule Loss After Hail</h3>
        <p>Omaha sits in the central plains hail corridor — we average 5 to 7 significant hailstorms per year. Impact strips granules from asphalt shingles, leaving exposed fiberglass mats that degrade rapidly under UV. If your gutters are packed with sandy granule material after a storm, your shingles are losing their protective surface.</p>
      </div>
      <div class="rr-bento-card card-tint-1 reveal-right reveal-delay-2">
        <div class="rr-bento-card__icon"><i data-lucide="trending-down" aria-hidden="true"></i></div>
        <h3>Sagging Decking &amp; Soft Spots</h3>
        <p>A visible sag in your roofline or soft spots when you walk the attic indicate moisture has compromised the plywood decking. This is structural damage. Omaha homes with inadequate attic ventilation are especially vulnerable — trapped heat accelerates moisture accumulation during winter freeze-thaw cycles from November through March.</p>
      </div>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 3 — EXPERT POSITIONING
     ═══════════════════════════════════════════════════════════════ -->
<section class="rr-expert-section" aria-label="Why choose Crawford for roof repair in Omaha">
  <div class="rr-divider-wave rr-divider-wave--top" aria-hidden="true">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none">
      <path d="M0,70 C200,10 400,60 600,30 C800,0 1000,50 1200,20 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>
  <div class="container">
    <div class="rr-expert-grid">

      <div class="rr-expert-stat-block reveal-scale">
        <span class="rr-expert-stat-number" data-target="24">24hr</span>
        <span class="rr-expert-stat-label">Emergency Repair Response</span>
        <span class="rr-expert-stat-sub">Tarping and leak containment crews deployed same-day</span>
      </div>

      <div class="rr-expert-content reveal-right">
        <span class="eyebrow-label">Why Crawford</span>
        <h2>Why Do Omaha Homeowners Choose Crawford for <span class="text-accent">Roof Repair</span>?</h2>
        <p class="answer-block">
          Crawford Roofing &amp; Gutters has repaired roofs across the Omaha metro for over <?php echo $yearsInBusiness; ?> years — through tornado seasons, ice storms, and every hail event in between. Our second-generation team does not subcontract repair work. The same licensed crew that inspects your damage is the crew that fixes it, and we handle insurance paperwork so you can focus on your family instead of claim forms.
        </p>
        <ul class="rr-diff-list">
          <li class="rr-diff-item reveal-right reveal-delay-1">
            <div class="rr-diff-icon"><i data-lucide="zap" aria-hidden="true"></i></div>
            <div class="rr-diff-text">
              <h4>Same-Day Emergency Dispatch</h4>
              <p>Active leaks cannot wait. Crawford deploys tarping crews within 2 to 4 hours during business hours, containing water intrusion before it spreads to insulation, drywall, and electrical systems in your Omaha home.</p>
            </div>
          </li>
          <li class="rr-diff-item reveal-right reveal-delay-2">
            <div class="rr-diff-icon"><i data-lucide="file-check" aria-hidden="true"></i></div>
            <div class="rr-diff-text">
              <h4>Insurance Claim Support</h4>
              <p>We photograph damage, prepare adjuster-ready documentation, and meet with your insurance representative on-site. Our reports are formatted for State Farm, Farmers, USAA, and all major Nebraska carriers — so claims move faster with fewer denials.</p>
            </div>
          </li>
          <li class="rr-diff-item reveal-right reveal-delay-3">
            <div class="rr-diff-icon"><i data-lucide="shield" aria-hidden="true"></i></div>
            <div class="rr-diff-text">
              <h4>Manufacturer-Backed Materials</h4>
              <p>Every repair uses shingles, flashing, and sealants from GAF, CertainTeed, and Owens Corning — the same manufacturer-warranted materials we install on full replacements. No off-brand patches that fail after one Nebraska winter.</p>
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
<section class="rr-breakdown-section" aria-label="Types of roof repair Crawford performs in Omaha">
  <div class="rr-divider-angle rr-divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none">
      <path d="M0,0 L1200,55 L1200,0 L0,0 Z" fill="var(--color-bg-alt)"></path>
    </svg>
  </div>
  <div class="rr-floating-accent" aria-hidden="true"></div>
  <div class="container">

    <div class="rr-breakdown-asym">
      <div class="rr-breakdown-image reveal-left">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252517-ip8hel-roofing-contractors-milford-1024x778.jpg" alt="Crawford crew performing shingle repair on an Omaha residential roof" width="600" height="450" loading="lazy">
      </div>
      <div class="rr-breakdown-content reveal-right">
        <span class="eyebrow-label">Repair Types</span>
        <h2>What Types of <span class="text-accent">Roof Repair</span> Does Crawford Handle in Omaha?</h2>
        <p class="answer-block">
          Crawford repairs every component of residential and commercial roofing systems — from single-shingle replacements after a wind event to full flashing overhauls around chimneys, dormers, and skylights. Each repair is scoped during a free on-site inspection and backed by our workmanship warranty, so you know exactly what you are paying for before we drive the first nail.
        </p>
        <ul class="rr-repair-types">
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Emergency leak sealing and tarping</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Hail-damaged shingle replacement</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Wind-blown shingle re-nailing</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Chimney and wall flashing repair</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Pipe boot and vent seal replacement</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Valley flashing re-sealing</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Ridge cap shingle replacement</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Ice dam damage restoration</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Soffit and fascia board repair</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Decking replacement (localized)</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Skylight re-flashing and sealing</li>
          <li><i data-lucide="check-circle" aria-hidden="true"></i> Flat roof membrane patching</li>
        </ul>
      </div>
    </div>

    <!-- Process Timeline -->
    <div class="rr-timeline-heading reveal-up">
      <span class="eyebrow-label">Our Process</span>
      <h2>How Does Crawford's <span class="text-accent">Roof Repair Process</span> Work?</h2>
      <p class="answer-block">
        From the first phone call to the final walkthrough, Crawford keeps you informed at every step. Most Omaha residential repairs are completed within a single day, and your property is left clean — no debris, no leftover nails, no exposed materials. Here is the timeline you can expect when you call for roof repair near me in Omaha.
      </p>
    </div>
    <div class="rr-process-timeline">
      <div class="rr-timeline-step reveal-up reveal-delay-1">
        <div class="rr-timeline-step__number">1</div>
        <h4>Call</h4>
        <p>Reach us by phone or online form. Emergency calls are triaged immediately; routine repairs are scheduled within 48 hours.</p>
      </div>
      <div class="rr-timeline-step reveal-up reveal-delay-2">
        <div class="rr-timeline-step__number">2</div>
        <h4>Inspect</h4>
        <p>A licensed Crawford crew examines the damage from roof level and attic side, photographing every finding for your records and insurance.</p>
      </div>
      <div class="rr-timeline-step reveal-up reveal-delay-3">
        <div class="rr-timeline-step__number">3</div>
        <h4>Estimate</h4>
        <p>You receive a transparent, line-item estimate covering materials, labor, and timeline — no hidden fees and no pressure to decide on the spot.</p>
      </div>
      <div class="rr-timeline-step reveal-up reveal-delay-4">
        <div class="rr-timeline-step__number">4</div>
        <h4>Repair</h4>
        <p>Our crew completes the repair using manufacturer-warranted materials, cleaning the job site and running a final water test on the repaired area.</p>
      </div>
      <div class="rr-timeline-step reveal-up">
        <div class="rr-timeline-step__number">5</div>
        <h4>Warranty</h4>
        <p>Every repair includes a written workmanship warranty. We follow up within 30 days to confirm the repair is holding through Omaha weather.</p>
      </div>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 5 — PROOF / REVIEWS
     ═══════════════════════════════════════════════════════════════ -->
<section class="rr-proof-section" aria-label="Customer testimonials about roof repairs in Omaha">
  <div class="rr-divider-wave rr-divider-wave--top" aria-hidden="true">
    <svg viewBox="0 0 1200 70" preserveAspectRatio="none">
      <path d="M0,70 C300,10 600,50 900,20 C1050,5 1150,40 1200,25 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What Homeowners Say</span>
      <h2>What Do Omaha Homeowners Say About Crawford's <span class="text-accent" style="color:rgba(var(--color-accent-rgb),1);filter:brightness(1.7);">Roof Repairs</span>?</h2>
      <p class="answer-block">
        Omaha homeowners count on Crawford for honest assessments and lasting repairs — especially after Nebraska storm seasons pummel roofs across Douglas and Sarpy counties. Here is what clients from Bellevue to West Omaha have experienced working with our repair crews.
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
        <blockquote>"After the July hailstorm, I had water dripping into my kitchen by midnight. Crawford had a tarp on my roof by 7 AM the next morning and completed the full shingle replacement three days later. They handled the entire Farmers Insurance claim — I barely had to make a phone call."</blockquote>
        <cite class="rr-testimonial-author">— James R., Bellevue</cite>
      </div>
      <div class="rr-testimonial-card reveal-up reveal-delay-2">
        <div class="rr-testimonial-stars">
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
        </div>
        <blockquote>"Two other contractors told me I needed a full roof replacement. Crawford came out, showed me the damage was limited to the chimney flashing and three vent boots, and fixed everything for under $900. Honest company — I have recommended them to my entire block in West Omaha."</blockquote>
        <cite class="rr-testimonial-author">— Maria S., West Omaha</cite>
      </div>
      <div class="rr-testimonial-card reveal-up reveal-delay-3">
        <div class="rr-testimonial-stars">
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
          <i data-lucide="star" aria-hidden="true"></i>
        </div>
        <blockquote>"A tree limb came down on our garage roof during a May windstorm. Crawford was out the same afternoon, removed the limb, replaced the damaged decking section and shingles, and cleaned up every scrap of debris. The repair has held perfectly through two more storm seasons."</blockquote>
        <cite class="rr-testimonial-author">— Kevin D., Papillion</cite>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 6 — COMPARISON
     ═══════════════════════════════════════════════════════════════ -->
<section class="rr-comparison-section" aria-label="Emergency repair vs scheduled repair comparison">
  <div class="rr-divider-angle rr-divider-angle--top" aria-hidden="true">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none">
      <path d="M0,0 L1200,55 L1200,0 L0,0 Z" fill="var(--color-primary)"></path>
    </svg>
  </div>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Know the Difference</span>
      <h2>What Is the Difference Between <span class="text-accent">Emergency Repair</span> and Scheduled Repair?</h2>
      <p class="answer-block">
        Not every roof problem is an emergency — but some absolutely are. Understanding which category your damage falls into determines response time, cost, and the repair approach. Crawford handles both, and we never upsell an emergency when a scheduled repair will protect your home just as effectively.
      </p>
    </div>
    <div class="rr-comparison-grid">
      <div class="rr-comparison-col rr-comparison-col--emergency reveal-left">
        <h3>Emergency Repair</h3>
        <div class="rr-comparison-response">2–4 Hours</div>
        <ul class="rr-comparison-list">
          <li><i data-lucide="check" aria-hidden="true"></i> Active water intrusion into living space</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Large sections of missing shingles after storm</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Fallen tree limb or debris on roof</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Immediate tarping and containment</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Permanent fix within 3–7 business days</li>
          <li><i data-lucide="check" aria-hidden="true"></i> After-hours and weekend dispatch available</li>
        </ul>
        <p class="rr-comparison-note">Call immediately if water is entering your home or structural damage is visible</p>
      </div>
      <div class="rr-comparison-col rr-comparison-col--scheduled reveal-right">
        <h3>Scheduled Repair</h3>
        <div class="rr-comparison-response">1–5 Days</div>
        <ul class="rr-comparison-list">
          <li><i data-lucide="check" aria-hidden="true"></i> Minor shingle damage without active leak</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Worn flashing, vent boots, or pipe seals</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Granule loss detected during inspection</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Ridge cap or hip shingle wear</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Pre-sale or insurance-requested repairs</li>
          <li><i data-lucide="check" aria-hidden="true"></i> Flexible scheduling around weather windows</li>
        </ul>
        <p class="rr-comparison-note">Ideal for damage caught during routine inspection or pre-purchase assessment</p>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 7 — FAQ
     ═══════════════════════════════════════════════════════════════ -->
<section class="rr-faq-section" aria-label="Frequently asked questions about roof repair in Omaha">
  <div class="rr-floating-accent" aria-hidden="true"></div>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">FAQ</span>
      <h2>What Do Omaha Homeowners Ask About <span class="text-accent">Roof Repair</span>?</h2>
      <p class="answer-block">
        If you are searching for roof repair near me in Omaha, these are the questions our team hears most from homeowners across Douglas and Sarpy counties. Every answer draws on Crawford's <?php echo $yearsInBusiness; ?>+ years repairing roofs through Nebraska's toughest weather.
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
<section class="rr-related-section" aria-label="Related roofing and gutter services">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">More Services</span>
      <h2>Other Services You May Need</h2>
    </div>
    <div class="services-grid" style="grid-template-columns: repeat(3, 1fr);">

      <article class="service-card-with-image card-tint-1 reveal-up reveal-delay-1">
        <div class="service-card__image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg" alt="Professional roof inspection by Crawford Roofing in Omaha, NE" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="search" aria-hidden="true"></i></div>
          <h3>Roof Inspection</h3>
          <p class="service-card__desc">Thorough 12-point roof assessments with photo-documented reports for insurance and peace of mind.</p>
          <ul>
            <li>Free post-storm damage checks</li>
            <li>Insurance-ready documentation</li>
            <li>Attic and exterior assessment</li>
          </ul>
          <a href="/services/roof-inspection/" class="service-card__cta">Learn more</a>
        </div>
      </article>

      <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
        <div class="service-card__image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg" alt="Full roof replacement by Crawford in Omaha, NE" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="home" aria-hidden="true"></i></div>
          <h3>Roof Replacement</h3>
          <p class="service-card__desc">Complete tear-off and re-roof using manufacturer-warranted materials rated for Nebraska weather.</p>
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
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134048805-bkz97m-dff36b_381e49a0e2c841a4a0db9e9691fb2386_mv2.jpg" alt="Gutter repair service by Crawford Roofing in Omaha, NE" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="wrench" aria-hidden="true"></i></div>
          <h3>Gutter Repair</h3>
          <p class="service-card__desc">Fix leaking joints, reattach sagging sections, and restore proper drainage around your property.</p>
          <ul>
            <li>Seamless joint re-sealing</li>
            <li>Bracket and hanger replacement</li>
            <li>Downspout rerouting available</li>
          </ul>
          <a href="/services/gutter-repair/" class="service-card__cta">Learn more</a>
        </div>
      </article>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 8 — FINAL CTA
     ═══════════════════════════════════════════════════════════════ -->
<section class="rr-final-cta" aria-label="Schedule your roof repair in Omaha">
  <div class="rr-divider-curve rr-divider-curve--top" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none">
      <path d="M0,60 Q600,0 1200,60 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>
  <div class="container">
    <h2 class="reveal-up">Need <span class="text-accent" style="color:rgba(var(--color-accent-rgb),1);filter:brightness(1.7);">Roof Repair</span> in Omaha?</h2>
    <p class="answer-block reveal-up reveal-delay-1">
      Crawford Roofing &amp; Gutters provides emergency and scheduled roof repairs across the Omaha metro — from West Omaha and Aksarben to Bellevue, Papillion, La Vista, and Elkhorn. Whether hail punched through your shingles last night or you spotted a slow leak during spring cleaning, we respond fast and fix it right the first time.
    </p>
    <div class="hero-ctas reveal-up reveal-delay-2">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Free Repair Estimate</a>
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
