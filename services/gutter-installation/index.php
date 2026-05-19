<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ───────────────────────────────────────────────
$pageTitle       = 'Gutter Installation Omaha NE | New Gutter Systems | Crawford Roofing & Gutters LLC';
$pageDescription = 'Professional gutter installation in Omaha, NE by Crawford Roofing & Gutters LLC. Seamless aluminum, copper, and steel gutter systems for residential and commercial properties. ' . $yearsInBusiness . '+ years experience. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/gutter-installation/';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg';
$currentPage     = 'services';
$heroImagePreload = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg';
$cssVersion      = '3';

// ── Image Library ────────────────────────────────────────────
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/';
$heroImg  = $imgBase . '1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg';
$bodyImg1 = $imgBase . '1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg';
$bodyImg2 = $imgBase . '1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg';

// ── Current Service ──────────────────────────────────────────
$currentService = null;
foreach ($services as $s) { if ($s['slug'] === 'gutter-installation') { $currentService = $s; break; } }

// ── FAQ Data ─────────────────────────────────────────────────
$faqs = [
    ['question' => 'How much does gutter installation cost in Omaha?', 'answer' => 'Residential gutter installation in Omaha typically ranges from $1,200 to $4,500 depending on home size, material choice, and number of downspouts required. Seamless aluminum runs $6 to $12 per linear foot installed, while copper systems start at $25 per foot. Crawford Roofing provides detailed line-item estimates during your free on-site consultation.'],
    ['question' => 'What is the difference between seamless and sectional gutters?', 'answer' => 'Seamless gutters are custom-fabricated on-site from a single continuous piece of metal, which eliminates joints where leaks typically develop. Sectional gutters come in pre-cut 10-foot segments joined with connectors. Seamless systems cost 15-20% more but last significantly longer and require less maintenance — especially important in Omaha where freeze-thaw cycles stress gutter joints.'],
    ['question' => 'How long does gutter installation take?', 'answer' => 'Most residential gutter installations in Omaha are completed in a single day. A typical 1,500-square-foot home with standard aluminum seamless gutters takes 4 to 6 hours. Larger properties, copper installations, or homes requiring fascia board replacement may extend into a second day. Crawford schedules installations to avoid disrupting your routine.'],
    ['question' => 'What gutter materials work best for Nebraska weather?', 'answer' => 'Heavy-gauge (.032") aluminum is the most popular choice in Omaha because it resists corrosion, handles thermal expansion across Nebraska\'s 130-degree temperature swing, and comes in 30+ color options. Galvanized steel gutters offer added rigidity for ice load resistance. Copper gutters are the premium option, developing a natural patina and lasting 50+ years with zero maintenance.'],
    ['question' => 'Do I need to replace my gutters when getting a new roof?', 'answer' => 'Not always, but it depends on condition. If your existing gutters are over 20 years old, show visible sagging, or have multiple patched joints, bundling replacement with your roofing project saves on labor costs since scaffolding and crew are already on-site. Crawford inspects your gutter system during every roof estimate and gives you an honest assessment.'],
    ['question' => 'What size gutters does Crawford install?', 'answer' => 'We install 5-inch and 6-inch K-style gutters along with 6-inch half-round profiles. Most Omaha homes use 5-inch K-style with 2x3-inch downspouts, but homes with steep roof pitches or large catchment areas benefit from 6-inch systems. We calculate the correct size based on your roof square footage, pitch, and local rainfall intensity data for Douglas County.'],
    ['question' => 'Does Crawford Roofing install gutter guards?', 'answer' => 'Yes. We install micro-mesh gutter guards, reverse-curve systems, and brush-style inserts depending on your canopy situation and budget. Homes near mature cottonwoods or silver maples in West Omaha neighborhoods benefit most from micro-mesh guards that block fine debris while allowing full water flow. Guard installation can be added to any new gutter project.'],
    ['question' => 'How does proper gutter slope affect drainage?', 'answer' => 'Gutters must slope toward downspouts at a rate of roughly 1/4 inch per 10 feet of run. Too little slope causes standing water that breeds mosquitoes and accelerates corrosion. Too much slope creates visible sag from street level. Crawford\'s installers use laser-level tools to calibrate slope precisely, ensuring consistent drainage across every section of your roofline.'],
];

// ── Related Services ─────────────────────────────────────────
$relatedSlugs = ['gutter-addition', 'gutter-replacement', 'roof-replacement'];
$relatedServices = [];
foreach ($services as $s) {
    if (in_array($s['slug'], $relatedSlugs)) {
        $relatedServices[] = $s;
    }
}

// ── Schema Markup ────────────────────────────────────────────
$serviceSchema = generateServiceSchema($currentService, $siteUrl, $siteName, $address);
$faqSchema     = generateFAQSchema($faqs);
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => $siteUrl . '/'],
    ['name' => 'Services', 'url' => $siteUrl . '/services/'],
    ['name' => 'Gutter Installation', 'url' => $canonicalUrl],
], $siteUrl);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<!-- JSON-LD: Service Schema -->
<script type="application/ld+json">
<?php echo $serviceSchema; ?>
</script>

<!-- JSON-LD: FAQPage Schema -->
<script type="application/ld+json">
<?php echo $faqSchema; ?>
</script>

<!-- JSON-LD: BreadcrumbList Schema -->
<script type="application/ld+json">
<?php echo $breadcrumbSchema; ?>
</script>

<style>
/* ═══════════════════════════════════════════════════════════
   Gutter Installation — Service Page Custom Styles
   Crawford Roofing & Gutters LLC | Premium Tier
   ═══════════════════════════════════════════════════════════ */

/* ── 1. HERO — Layered Full-Width ────────────────────────── */
.gi-hero {
  position: relative;
  min-height: 85vh;
  display: flex;
  align-items: center;
  padding: calc(var(--nav-height) + var(--space-16)) 0 var(--space-16);
  background-size: cover;
  background-position: center 30%;
  background-repeat: no-repeat;
  overflow: hidden;
}
.gi-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    160deg,
    rgba(var(--color-primary-rgb), 0.94) 0%,
    rgba(var(--color-primary-rgb), 0.82) 35%,
    rgba(var(--color-secondary-rgb), 0.72) 70%,
    rgba(var(--color-primary-rgb), 0.88) 100%
  );
  z-index: 1;
}
.gi-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 512 512' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  opacity: 0.12;
  z-index: 1;
  pointer-events: none;
}
.gi-hero .container {
  position: relative;
  z-index: 2;
  max-width: 840px;
}
.gi-hero .breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
}
.gi-hero .breadcrumb a {
  color: rgba(255,255,255,0.65);
  transition: color var(--transition-fast);
}
.gi-hero .breadcrumb a:hover {
  color: rgba(255,255,255,1);
}
.gi-hero .breadcrumb-sep {
  color: rgba(255,255,255,0.35);
  font-size: var(--font-size-xs);
}
.gi-hero .breadcrumb-current {
  color: rgba(var(--color-accent-rgb),1);
  filter: brightness(1.6);
  font-weight: 600;
}
.gi-hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--color-white);
  margin-bottom: var(--space-4);
  padding: var(--space-2) var(--space-4);
  border: 1px solid rgba(255,255,255,0.18);
  border-radius: var(--radius-full);
  background: rgba(255,255,255,0.07);
  backdrop-filter: blur(4px);
}
.gi-hero-eyebrow i,
.gi-hero-eyebrow svg {
  width: 16px;
  height: 16px;
  color: rgba(var(--color-accent-rgb),1);
  filter: brightness(2);
}
.gi-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 3.75rem);
  font-weight: 900;
  line-height: 1.08;
  letter-spacing: -0.03em;
  margin-bottom: var(--space-6);
}
.gi-hero h1 .accent-word {
  color: rgba(var(--color-accent-rgb),1);
  filter: brightness(1.6);
}
.gi-hero .hero-answer {
  color: rgba(255,255,255,0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 680px;
  margin-bottom: var(--space-8);
}
.gi-hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.gi-hero-actions .btn {
  padding: var(--space-4) var(--space-8);
  font-size: var(--font-size-base);
}
.gi-hero-trust {
  display: flex;
  gap: var(--space-6);
  flex-wrap: wrap;
}
.gi-hero-trust-badge {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255,255,255,0.75);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.gi-hero-trust-badge i,
.gi-hero-trust-badge svg {
  width: 18px;
  height: 18px;
  color: rgba(var(--color-accent-rgb),1);
  filter: brightness(1.6);
}

/* Floating accents in hero */
.gi-hero-float-1 {
  position: absolute;
  top: 12%;
  right: 6%;
  width: 180px;
  height: 180px;
  border: 3px solid rgba(255,255,255,0.06);
  border-radius: 35% 65% 60% 40% / 40% 30% 70% 60%;
  z-index: 1;
  pointer-events: none;
  animation: gi-float 9s ease-in-out infinite;
}
.gi-hero-float-2 {
  position: absolute;
  bottom: 15%;
  right: 18%;
  width: 100px;
  height: 100px;
  border: 2px solid rgba(255,255,255,0.04);
  border-radius: var(--radius-full);
  z-index: 1;
  pointer-events: none;
  animation: gi-float 13s ease-in-out infinite reverse;
}
@keyframes gi-float {
  0%, 100% { transform: translateY(0) rotate(0deg); }
  50% { transform: translateY(-18px) rotate(5deg); }
}

/* ── 2. DIVIDERS ─────────────────────────────────────────── */
.gi-divider-wave {
  position: absolute;
  top: -1px;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.gi-divider-wave svg {
  display: block;
  width: calc(100% + 1.3px);
  height: 65px;
}
.gi-divider-chevron {
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.gi-divider-chevron svg {
  display: block;
  width: calc(100% + 1.3px);
  height: 50px;
}
.gi-divider-curve-bottom {
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.gi-divider-curve-bottom svg {
  display: block;
  width: calc(100% + 1.3px);
  height: 55px;
}

/* ── 3. PROBLEM STATEMENT — Split ────────────────────────── */
.gi-problem {
  background: var(--color-bg);
  position: relative;
}
.gi-problem-grid {
  display: grid;
  grid-template-columns: 1fr 1.15fr;
  gap: var(--space-12);
  align-items: center;
}
.gi-problem-img {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
}
.gi-problem-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  aspect-ratio: 4 / 5;
  border-radius: var(--radius-lg);
}
.gi-problem-img-accent {
  position: absolute;
  bottom: -16px;
  left: -16px;
  width: 140px;
  height: 140px;
  border: 3px solid rgba(var(--color-accent-rgb), 0.12);
  border-radius: var(--radius-lg);
  z-index: 0;
  pointer-events: none;
}
.gi-problem-content {
  max-width: 580px;
}
.gi-problem-content h2 {
  margin-bottom: var(--space-4);
}
.gi-problem-content .answer-block {
  background: rgba(var(--color-accent-rgb), 0.06);
  border-left: 4px solid var(--color-accent);
  padding: var(--space-4) var(--space-6);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin-bottom: var(--space-6);
  font-size: var(--font-size-base);
  line-height: 1.75;
  color: var(--color-text);
}
.gi-problem-content p {
  color: var(--color-text-light);
  line-height: 1.8;
}
.gi-problem-content .identity-sentence {
  font-weight: 600;
  color: var(--color-text);
}
.gi-problem-stats {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-4);
  margin-top: var(--space-8);
}
.gi-problem-stat {
  text-align: center;
  padding: var(--space-4);
  background: var(--color-bg-alt);
  border-radius: var(--radius-md);
  transition: transform var(--transition-base);
}
.gi-problem-stat:hover {
  transform: translateY(-3px);
}
.gi-problem-stat-num {
  font-family: var(--font-heading);
  font-size: var(--font-size-3xl);
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
  display: block;
}
.gi-problem-stat-label {
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-top: var(--space-1);
  display: block;
}

/* ── 4. EXPERT POSITIONING — Asymmetric Grid ─────────────── */
.gi-expert {
  background: var(--color-bg-alt);
  position: relative;
}
.gi-expert-layout {
  display: grid;
  grid-template-columns: 1.2fr 0.8fr;
  gap: var(--space-10);
  align-items: start;
}
.gi-expert-content h2 {
  margin-bottom: var(--space-4);
}
.gi-expert-content .answer-block {
  background: rgba(var(--color-accent-rgb), 0.06);
  border-left: 4px solid var(--color-accent);
  padding: var(--space-4) var(--space-6);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin-bottom: var(--space-6);
  font-size: var(--font-size-base);
  line-height: 1.75;
  color: var(--color-text);
}
.gi-expert-content p {
  color: var(--color-text-light);
  line-height: 1.8;
}

/* Pull Quote */
.gi-pull-quote {
  position: relative;
  padding: var(--space-8) var(--space-6);
  margin: var(--space-8) 0;
  border-radius: var(--radius-lg);
  background: var(--color-primary);
  color: var(--color-white);
  overflow: hidden;
}
.gi-pull-quote::before {
  content: '\201C';
  position: absolute;
  top: var(--space-2);
  left: var(--space-4);
  font-family: var(--font-accent);
  font-size: 8rem;
  line-height: 1;
  color: rgba(255,255,255,0.06);
  pointer-events: none;
}
.gi-pull-quote blockquote {
  position: relative;
  z-index: 1;
  font-family: var(--font-accent);
  font-style: italic;
  font-size: var(--font-size-xl);
  line-height: 1.65;
  margin-bottom: var(--space-3);
}
.gi-pull-quote cite {
  position: relative;
  z-index: 1;
  font-style: normal;
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.65);
  display: block;
}

/* Bento Cards (sidebar) */
.gi-bento-stack {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.gi-bento-card {
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.gi-bento-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-lg);
}
.gi-bento-card h4 {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-base);
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-2);
}
.gi-bento-card h4 i,
.gi-bento-card h4 svg {
  width: 22px;
  height: 22px;
  color: var(--color-accent);
  flex-shrink: 0;
}
.gi-bento-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  margin: 0;
}

/* ── 5. SERVICE BREAKDOWN — Timeline ─────────────────────── */
.gi-breakdown {
  background: var(--color-bg);
  position: relative;
}
.gi-breakdown-header {
  text-align: center;
  margin-bottom: var(--space-12);
}
.gi-breakdown-header h2 {
  margin-bottom: var(--space-4);
}
.gi-breakdown-header .answer-block {
  background: rgba(var(--color-accent-rgb), 0.06);
  border-left: 4px solid var(--color-accent);
  padding: var(--space-4) var(--space-6);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  max-width: 680px;
  margin: 0 auto var(--space-4);
  font-size: var(--font-size-base);
  line-height: 1.75;
  color: var(--color-text);
  text-align: left;
}
.gi-timeline {
  position: relative;
  max-width: 820px;
  margin: 0 auto;
}
.gi-timeline::before {
  content: '';
  position: absolute;
  top: 0;
  left: 32px;
  width: 3px;
  height: 100%;
  background: linear-gradient(to bottom, var(--color-accent), rgba(var(--color-accent-rgb), 0.15));
  border-radius: var(--radius-full);
}
.gi-timeline-item {
  position: relative;
  padding-left: 80px;
  padding-bottom: var(--space-10);
}
.gi-timeline-item:last-child {
  padding-bottom: 0;
}
.gi-timeline-dot {
  position: absolute;
  left: 18px;
  top: 4px;
  width: 32px;
  height: 32px;
  border-radius: var(--radius-full);
  background: var(--color-accent);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-weight: 900;
  font-size: var(--font-size-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 0 0 4px var(--color-bg), 0 0 0 6px rgba(var(--color-accent-rgb), 0.2);
}
.gi-timeline-item h4 {
  font-size: var(--font-size-lg);
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-2);
}
.gi-timeline-item p {
  color: var(--color-text-light);
  line-height: 1.75;
  margin: 0;
  max-width: 600px;
}

/* ── 6. PROOF / REVIEWS ──────────────────────────────────── */
.gi-reviews {
  background: var(--color-primary);
  position: relative;
  overflow: hidden;
}
.gi-reviews::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(var(--color-accent-rgb), 0.12) 0%, transparent 60%);
  pointer-events: none;
}
.gi-reviews .container {
  position: relative;
  z-index: 2;
}
.gi-reviews-header {
  text-align: center;
  margin-bottom: var(--space-10);
}
.gi-reviews-header .eyebrow-label {
  color: rgba(var(--color-accent-rgb),1);
  filter: brightness(1.8);
}
.gi-reviews-header h2 {
  color: var(--color-white);
  margin-bottom: var(--space-3);
}
.gi-reviews-header p {
  color: rgba(255,255,255,0.7);
  max-width: 560px;
  margin: 0 auto;
}
.gi-reviews-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.gi-review-card {
  background: rgba(255,255,255,0.06);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(255,255,255,0.1);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  position: relative;
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.gi-review-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 12px 40px rgba(0,0,0,0.3);
}
.gi-review-card::before {
  content: '\201C';
  position: absolute;
  top: var(--space-2);
  right: var(--space-4);
  font-family: var(--font-accent);
  font-size: 5rem;
  line-height: 1;
  color: rgba(255,255,255,0.05);
  pointer-events: none;
}
.gi-review-stars {
  color: var(--color-star);
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-3);
  letter-spacing: 2px;
}
.gi-review-card p {
  color: rgba(255,255,255,0.85);
  font-size: var(--font-size-sm);
  line-height: 1.7;
  margin-bottom: var(--space-4);
  font-style: italic;
}
.gi-review-author {
  display: flex;
  align-items: center;
  gap: var(--space-3);
}
.gi-review-avatar {
  width: 42px;
  height: 42px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.3);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: var(--font-size-sm);
  display: flex;
  align-items: center;
  justify-content: center;
}
.gi-review-name {
  color: var(--color-white);
  font-weight: 600;
  font-size: var(--font-size-sm);
}
.gi-review-location {
  color: rgba(255,255,255,0.5);
  font-size: var(--font-size-xs);
}

/* ── 7. COMPARISON TABLE ─────────────────────────────────── */
.gi-compare {
  background: var(--color-bg-alt);
  position: relative;
}
.gi-compare-header {
  text-align: center;
  margin-bottom: var(--space-10);
}
.gi-compare-header h2 {
  margin-bottom: var(--space-4);
}
.gi-compare-header .answer-block {
  background: rgba(var(--color-accent-rgb), 0.06);
  border-left: 4px solid var(--color-accent);
  padding: var(--space-4) var(--space-6);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  max-width: 680px;
  margin: 0 auto var(--space-4);
  font-size: var(--font-size-base);
  line-height: 1.75;
  color: var(--color-text);
  text-align: left;
}
.gi-compare-table-wrap {
  max-width: 880px;
  margin: 0 auto;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}
.gi-compare-table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.gi-compare-table thead th {
  background: var(--color-primary);
  color: var(--color-white);
  padding: var(--space-4) var(--space-6);
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  text-align: left;
  border: none;
}
.gi-compare-table thead th:first-child {
  border-radius: var(--radius-lg) 0 0 0;
}
.gi-compare-table thead th:last-child {
  border-radius: 0 var(--radius-lg) 0 0;
  background: var(--color-accent);
}
.gi-compare-table tbody td {
  padding: var(--space-4) var(--space-6);
  background: var(--color-white);
  border-bottom: 1px solid var(--color-border);
  font-size: var(--font-size-sm);
  color: var(--color-text);
  vertical-align: top;
}
.gi-compare-table tbody td:first-child {
  font-weight: 600;
  color: var(--color-primary);
  background: var(--color-bg-alt);
  width: 200px;
}
.gi-compare-table tbody td:last-child {
  background: rgba(var(--color-accent-rgb), 0.04);
}
.gi-compare-table tbody tr:last-child td:first-child {
  border-radius: 0 0 0 var(--radius-lg);
}
.gi-compare-table tbody tr:last-child td:last-child {
  border-radius: 0 0 var(--radius-lg) 0;
}
.gi-compare-table .check-icon {
  color: var(--color-success);
  font-weight: 700;
}
.gi-compare-table .x-icon {
  color: var(--color-danger);
  font-weight: 700;
}

/* ── 8. FAQ SECTION ──────────────────────────────────────── */
.gi-faq {
  background: var(--color-bg);
  position: relative;
}
.gi-faq-header {
  text-align: center;
  margin-bottom: var(--space-10);
}
.gi-faq-header h2 {
  margin-bottom: var(--space-3);
}
.gi-faq-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-6);
  max-width: 960px;
  margin: 0 auto;
}
.gi-faq-item {
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  border-left: 4px solid transparent;
  transition: border-color var(--transition-base), transform var(--transition-base), box-shadow var(--transition-base);
}
.gi-faq-item:hover {
  border-left-color: var(--color-accent);
  transform: translateY(-2px);
  box-shadow: var(--shadow-md);
}
.gi-faq-item h3 {
  font-size: var(--font-size-base);
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-3);
  line-height: 1.35;
}
.gi-faq-item p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.7;
  margin: 0;
}

/* ── 9. FINAL CTA ────────────────────────────────────────── */
.gi-cta {
  background: var(--color-primary);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.gi-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(var(--color-accent-rgb), 0.18) 0%, transparent 55%);
  pointer-events: none;
}
.gi-cta .container {
  position: relative;
  z-index: 1;
}
.gi-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
}
.gi-cta p {
  color: rgba(255,255,255,0.85);
  max-width: 620px;
  margin: 0 auto var(--space-8);
  font-size: var(--font-size-lg);
}
.gi-cta .btn {
  padding: var(--space-4) var(--space-10);
  font-size: var(--font-size-base);
}
.gi-cta-secondary {
  display: block;
  margin-top: var(--space-4);
  color: rgba(255,255,255,0.6);
  font-size: var(--font-size-sm);
}
.gi-cta-secondary a {
  color: rgba(255,255,255,0.8);
  text-decoration: underline;
  text-underline-offset: 2px;
}
.gi-cta-secondary a:hover {
  color: var(--color-white);
}

/* ── 10. RELATED SERVICES ────────────────────────────────── */
.gi-related {
  background: var(--color-bg-alt);
  position: relative;
}
.gi-related-header {
  text-align: center;
  margin-bottom: var(--space-10);
}
.gi-related-header h2 {
  margin-bottom: var(--space-3);
}
.gi-related-header p {
  color: var(--color-text-light);
  max-width: 540px;
  margin: 0 auto;
}

/* ── 11. LAST UPDATED ────────────────────────────────────── */
.gi-last-updated {
  text-align: center;
  padding: var(--space-4) 0;
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  background: var(--color-bg-alt);
  border-top: 1px solid var(--color-border);
}

/* ── 12. FLOATING ACCENT (Section-level) ─────────────────── */
.gi-section-float {
  position: absolute;
  width: 200px;
  height: 200px;
  border-radius: var(--radius-full);
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.08) 0%, transparent 70%);
  pointer-events: none;
  z-index: 0;
}

/* ── RESPONSIVE ──────────────────────────────────────────── */
@media (max-width: 1024px) {
  .gi-problem-grid {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .gi-problem-img {
    max-width: 480px;
    margin: 0 auto;
  }
  .gi-expert-layout {
    grid-template-columns: 1fr;
  }
  .gi-bento-stack {
    flex-direction: row;
    flex-wrap: wrap;
  }
  .gi-bento-card {
    flex: 1 1 calc(50% - var(--space-2));
    min-width: 240px;
  }
}
@media (max-width: 768px) {
  .gi-hero {
    min-height: 70vh;
    padding-top: calc(var(--nav-height) + var(--space-10));
  }
  .gi-hero h1 {
    font-size: clamp(1.875rem, 6vw, 2.75rem);
  }
  .gi-hero-trust {
    flex-direction: column;
    gap: var(--space-2);
  }
  .gi-problem-stats {
    grid-template-columns: 1fr;
    gap: var(--space-3);
  }
  .gi-reviews-grid {
    grid-template-columns: 1fr;
  }
  .gi-faq-grid {
    grid-template-columns: 1fr;
  }
  .gi-timeline::before {
    left: 20px;
  }
  .gi-timeline-dot {
    left: 6px;
    width: 28px;
    height: 28px;
    font-size: var(--font-size-xs);
  }
  .gi-timeline-item {
    padding-left: 56px;
  }
  .gi-bento-card {
    flex: 1 1 100%;
  }
  .gi-compare-table thead th,
  .gi-compare-table tbody td {
    padding: var(--space-3) var(--space-4);
    font-size: var(--font-size-xs);
  }
  .gi-compare-table tbody td:first-child {
    width: 120px;
  }
}
@media (max-width: 480px) {
  .gi-hero-actions {
    flex-direction: column;
  }
  .gi-hero-actions .btn {
    width: 100%;
    justify-content: center;
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>


<!-- ═══════════════════════════════════════════════════════════
     SECTION 1 — HERO
     ═══════════════════════════════════════════════════════════ -->
<section class="gi-hero" style="background-image: url('<?php echo htmlspecialchars($heroImg); ?>');" aria-label="Gutter installation in Omaha">

  <!-- Floating decorative accents -->
  <div class="gi-hero-float-1" aria-hidden="true"></div>
  <div class="gi-hero-float-2" aria-hidden="true"></div>

  <div class="container">
    <!-- Breadcrumb -->
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <span class="breadcrumb-current">Gutter Installation</span>
    </nav>

    <span class="gi-hero-eyebrow">
      <i data-lucide="filter" aria-hidden="true"></i>
      Gutter Installation Omaha
    </span>

    <h1>Professional <span class="accent-word">Gutter Installation</span> for Omaha Homes &amp; Businesses</h1>

    <p class="hero-answer">Crawford Roofing &amp; Gutters LLC installs seamless aluminum, steel, and copper gutter systems for residential and commercial properties across the Omaha metro. Every installation is custom-measured, precision-sloped for drainage, and engineered to handle Nebraska's heavy rain and freeze-thaw cycles.</p>

    <div class="gi-hero-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Gutter Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> Call <?php echo formatPhone($phone); ?>
      </a>
      <?php else: ?>
      <a href="/contact/" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> Contact Us
      </a>
      <?php endif; ?>
    </div>

    <div class="gi-hero-trust">
      <span class="gi-hero-trust-badge"><i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured</span>
      <span class="gi-hero-trust-badge"><i data-lucide="clock" aria-hidden="true"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      <span class="gi-hero-trust-badge"><i data-lucide="ruler" aria-hidden="true"></i> Custom-Fabricated On-Site</span>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     SECTION 2 — PROBLEM STATEMENT (Split Layout)
     ═══════════════════════════════════════════════════════════ -->
<section class="gi-problem" aria-label="Why gutters matter in Omaha">
  <div class="container">
    <div class="gi-problem-grid">
      <div class="gi-problem-img reveal-left">
        <div class="gi-problem-img-accent" aria-hidden="true"></div>
        <img src="<?php echo htmlspecialchars($bodyImg1); ?>" alt="Crawford crew installing seamless gutters on an Omaha home" width="600" height="750" loading="lazy">
      </div>

      <div class="gi-problem-content reveal-right">
        <span class="eyebrow-label">Why It Matters</span>
        <h2>What Happens When Omaha Homes <span class="text-accent">Lack Proper Gutters?</span></h2>
        <p class="answer-block">Without a functioning gutter system, rainwater cascades directly off the roofline and pools against your foundation, saturating soil and creating hydrostatic pressure that cracks basement walls. Omaha averages 31 inches of annual rainfall and 26 inches of snow — every inch of that water needs controlled routing away from your property.</p>
        <p class="identity-sentence">Crawford Roofing &amp; Gutters LLC is a licensed Nebraska contractor based in Omaha, serving Douglas, Sarpy, and Washington counties with gutter installation near me in Omaha for over <?php echo $yearsInBusiness; ?> years.</p>
        <p>Properties in neighborhoods like Dundee, Aksarben, and Benson — where mature tree canopies dump leaves into open gutters every fall — face accelerated clogging that compounds the problem. In Millard and Elkhorn, newer subdivisions with clay-heavy soil see foundation settling when water isn't diverted at least 4 feet from the perimeter. The fix starts on the roofline: properly installed, correctly sloped gutters capture every drop and channel it where it belongs.</p>

        <div class="gi-problem-stats">
          <div class="gi-problem-stat reveal-up reveal-delay-1">
            <span class="gi-problem-stat-num">31"</span>
            <span class="gi-problem-stat-label">Avg. Rainfall</span>
          </div>
          <div class="gi-problem-stat reveal-up reveal-delay-2">
            <span class="gi-problem-stat-num">130&deg;</span>
            <span class="gi-problem-stat-label">Temp Swing</span>
          </div>
          <div class="gi-problem-stat reveal-up reveal-delay-3">
            <span class="gi-problem-stat-num">26"</span>
            <span class="gi-problem-stat-label">Avg. Snowfall</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     SECTION 3 — EXPERT POSITIONING (Asymmetric + Bento Cards)
     ═══════════════════════════════════════════════════════════ -->
<section class="gi-expert" aria-label="Crawford's gutter installation expertise">
  <!-- Wave divider top -->
  <div class="gi-divider-wave" aria-hidden="true">
    <svg viewBox="0 0 1200 65" preserveAspectRatio="none">
      <path d="M0,65 C300,0 500,0 600,32 C700,65 900,65 1200,0 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <!-- Floating accent -->
  <div class="gi-section-float" style="top: 15%; right: -60px;" aria-hidden="true"></div>

  <div class="container">
    <div class="gi-expert-layout">
      <div class="gi-expert-content reveal-left">
        <span class="eyebrow-label">Why Crawford</span>
        <h2>Why Do Omaha Property Owners Choose Crawford for <span class="text-accent">Gutter Installation?</span></h2>
        <p class="answer-block">Crawford Roofing &amp; Gutters brings <?php echo $yearsInBusiness; ?>+ years of hands-on Omaha experience to every gutter project. We custom-fabricate seamless gutters on-site using a truck-mounted roll-forming machine, which means your system is cut to the exact dimensions of your roofline with zero mid-run seams where leaks develop.</p>
        <p>Our install crews calibrate gutter slope with laser levels — not the visual guesswork that causes standing water in cheaper installs. Every downspout is routed to discharge at least 4 feet from the foundation, and we anchor hangers at 24-inch intervals to resist the ice loading that sags undersupported systems during Nebraska winters.</p>
        <p>Raymond Crawford, our lead contractor, personally reviews every gutter installation plan before material fabrication. With two decades of field experience across Omaha neighborhoods from Florence to Papillion, he understands how roof geometry, lot grading, and tree proximity affect gutter performance. That knowledge translates into a system designed specifically for your property — not a one-size-fits-all template.</p>

        <!-- Pull Quote -->
        <div class="gi-pull-quote reveal-scale">
          <blockquote>The difference between a gutter system that lasts 5 years and one that lasts 25 is slope calibration, hanger spacing, and material gauge. We don't cut corners on any of them.</blockquote>
          <cite>— Raymond Crawford, Owner</cite>
        </div>
      </div>

      <!-- Bento Card Sidebar -->
      <div class="gi-bento-stack">
        <div class="gi-bento-card card-tint-1 reveal-right reveal-delay-1">
          <h4><i data-lucide="ruler" aria-hidden="true"></i> On-Site Fabrication</h4>
          <p>Seamless gutters rolled to your exact measurements from a truck-mounted forming machine. No warehouse cuts, no splices.</p>
        </div>
        <div class="gi-bento-card card-tint-2 reveal-right reveal-delay-2">
          <h4><i data-lucide="target" aria-hidden="true"></i> Laser-Level Slope</h4>
          <p>Precise 1/4" per 10' calibration ensures consistent drainage with zero standing water or visible sag.</p>
        </div>
        <div class="gi-bento-card card-tint-3 reveal-right reveal-delay-3">
          <h4><i data-lucide="shield" aria-hidden="true"></i> Heavy-Gauge Metal</h4>
          <p>.032" aluminum standard — thicker than big-box competitors — resists Nebraska hail dents and thermal stress.</p>
        </div>
        <div class="gi-bento-card card-tint-1 reveal-right reveal-delay-4">
          <h4><i data-lucide="snowflake" aria-hidden="true"></i> Ice-Load Engineering</h4>
          <p>Hangers every 24 inches with reinforced brackets rated for Omaha's freeze-thaw cycle and heavy snow loads.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     SECTION 4 — SERVICE BREAKDOWN (Timeline)
     ═══════════════════════════════════════════════════════════ -->
<section class="gi-breakdown" aria-label="Gutter installation process">
  <div class="container">
    <div class="gi-breakdown-header reveal-up">
      <span class="eyebrow-label">The Process</span>
      <h2>What Does Crawford's <span class="text-accent">Gutter Installation Process</span> Look Like?</h2>
      <p class="answer-block">Every Crawford gutter installation follows a five-step process from initial measurement through final quality check. We handle material selection, on-site fabrication, precision mounting, downspout routing, and post-install testing — typically completing residential projects in a single day.</p>
    </div>

    <div class="gi-timeline">
      <div class="gi-timeline-item reveal-left">
        <span class="gi-timeline-dot">1</span>
        <h4>Property Assessment &amp; Measurement</h4>
        <p>We measure every fascia run, note roof pitch angles, and map downspout discharge points relative to your lot grading. Properties in areas like South Omaha with older fascia boards get a structural check before we commit to a mounting plan.</p>
      </div>
      <div class="gi-timeline-item reveal-left reveal-delay-1">
        <span class="gi-timeline-dot">2</span>
        <h4>Material Selection &amp; Sizing</h4>
        <p>Based on your roof's square footage and pitch, we recommend 5-inch or 6-inch K-style profiles (or half-round for period homes in the Gold Coast and Blackstone districts). You choose from 30+ colors in aluminum, or opt for steel or copper.</p>
      </div>
      <div class="gi-timeline-item reveal-left reveal-delay-2">
        <span class="gi-timeline-dot">3</span>
        <h4>On-Site Roll Forming</h4>
        <p>Our truck-mounted gutter machine extrudes seamless gutters to the exact length of each fascia run. No mid-run joints means no future leak points — just one continuous channel per section.</p>
      </div>
      <div class="gi-timeline-item reveal-left reveal-delay-3">
        <span class="gi-timeline-dot">4</span>
        <h4>Precision Mounting &amp; Slope Calibration</h4>
        <p>Gutters are mounted with hidden hangers every 24 inches and laser-leveled at 1/4-inch per 10 feet of slope. Downspouts are routed to discharge at least 4 feet from your foundation wall, with splash blocks or underground extensions where lot grading requires it.</p>
      </div>
      <div class="gi-timeline-item reveal-left reveal-delay-4">
        <span class="gi-timeline-dot">5</span>
        <h4>Water Test &amp; Final Walkthrough</h4>
        <p>Before we pack up, we run water through the entire system to confirm flow rate, check for any drip points at end caps or outlets, and walk you through the finished installation. You see exactly what you're getting before we leave your property.</p>
      </div>
    </div>
  </div>

  <!-- Chevron divider bottom -->
  <div class="gi-divider-chevron" aria-hidden="true">
    <svg viewBox="0 0 1200 50" preserveAspectRatio="none">
      <path d="M0,0 L600,50 L1200,0 L1200,50 L0,50 Z" fill="var(--color-primary)"></path>
    </svg>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     SECTION 5 — PROOF / REVIEWS
     ═══════════════════════════════════════════════════════════ -->
<section class="gi-reviews" aria-label="Customer reviews for gutter installation">
  <div class="container">
    <div class="gi-reviews-header reveal-up">
      <span class="eyebrow-label">Client Feedback</span>
      <h2>What Are Omaha Homeowners Saying About Our <span class="text-accent" style="color:rgba(var(--color-accent-rgb),1);filter:brightness(1.8);">Gutter Work?</span></h2>
      <p>Real feedback from property owners across the metro who chose Crawford for their gutter installation.</p>
    </div>

    <div class="gi-reviews-grid">
      <div class="gi-review-card reveal-up reveal-delay-1">
        <div class="gi-review-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p>&ldquo;Had seamless aluminum gutters installed on our split-level in La Vista. The crew showed up at 8 AM and was done by early afternoon. Water flows perfectly — no more pooling near the garage foundation. Very clean jobsite when they left.&rdquo;</p>
        <div class="gi-review-author">
          <div class="gi-review-avatar">S</div>
          <div>
            <div class="gi-review-name">Steve H.</div>
            <div class="gi-review-location">La Vista</div>
          </div>
        </div>
      </div>

      <div class="gi-review-card reveal-up reveal-delay-2">
        <div class="gi-review-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p>&ldquo;We needed 6-inch gutters to handle the runoff from our steep-pitched roof in West Omaha. Crawford recommended the right size and color-matched everything to our trim. Three years later, zero leaks and zero sagging — even after last winter's ice storms.&rdquo;</p>
        <div class="gi-review-author">
          <div class="gi-review-avatar">J</div>
          <div>
            <div class="gi-review-name">Jennifer M.</div>
            <div class="gi-review-location">West Omaha</div>
          </div>
        </div>
      </div>

      <div class="gi-review-card reveal-up reveal-delay-3">
        <div class="gi-review-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p>&ldquo;Got gutters added to our commercial building on Cornhusker Road after years of water damage to the exterior. Crawford handled the permits, installed a full commercial system in two days, and the price came in under the other two bids I received. Solid work.&rdquo;</p>
        <div class="gi-review-author">
          <div class="gi-review-avatar">B</div>
          <div>
            <div class="gi-review-name">Brian D.</div>
            <div class="gi-review-location">Bellevue</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     SECTION 6 — COMPARISON (Seamless vs Sectional)
     ═══════════════════════════════════════════════════════════ -->
<section class="gi-compare" aria-label="Seamless vs sectional gutter comparison">
  <!-- Curve divider bottom -->
  <div class="gi-divider-curve-bottom" style="top:-1px;bottom:auto;" aria-hidden="true">
    <svg viewBox="0 0 1200 55" preserveAspectRatio="none">
      <path d="M0,55 Q600,0 1200,55 L1200,0 L0,0 Z" fill="var(--color-primary)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="gi-compare-header reveal-up">
      <span class="eyebrow-label">Side-by-Side</span>
      <h2>How Do <span class="text-accent">Seamless Gutters</span> Compare to Sectional Systems?</h2>
      <p class="answer-block">Seamless gutters outperform sectional systems in longevity, leak resistance, and long-term value for Omaha homeowners. While sectional gutters cost less up front, the joints where 10-foot sections connect are the number-one failure point — especially under Nebraska freeze-thaw stress.</p>
    </div>

    <div class="gi-compare-table-wrap reveal-up">
      <table class="gi-compare-table">
        <thead>
          <tr>
            <th>Feature</th>
            <th>Sectional Gutters</th>
            <th>Seamless (Crawford)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Seams / Joints</td>
            <td>Every 10 feet — leak risk at each joint</td>
            <td><span class="check-icon">&#10003;</span> Zero mid-run seams</td>
          </tr>
          <tr>
            <td>Material Gauge</td>
            <td>Typically .025" aluminum</td>
            <td><span class="check-icon">&#10003;</span> .032" heavy-gauge standard</td>
          </tr>
          <tr>
            <td>Custom Fit</td>
            <td>Pre-cut lengths, joined on site</td>
            <td><span class="check-icon">&#10003;</span> Roll-formed to exact fascia length</td>
          </tr>
          <tr>
            <td>Lifespan</td>
            <td>10–15 years average</td>
            <td><span class="check-icon">&#10003;</span> 20–30 years with maintenance</td>
          </tr>
          <tr>
            <td>Freeze-Thaw Resistance</td>
            <td><span class="x-icon">&#10007;</span> Joints expand and separate</td>
            <td><span class="check-icon">&#10003;</span> Continuous metal expands uniformly</td>
          </tr>
          <tr>
            <td>Color Options</td>
            <td>Limited retail colors</td>
            <td><span class="check-icon">&#10003;</span> 30+ factory-baked finishes</td>
          </tr>
          <tr>
            <td>Maintenance</td>
            <td>Frequent re-sealing of joints</td>
            <td><span class="check-icon">&#10003;</span> Minimal — no joints to maintain</td>
          </tr>
          <tr>
            <td>Installation</td>
            <td>DIY possible (not recommended)</td>
            <td><span class="check-icon">&#10003;</span> Professional crew, same-day</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     SECTION 7 — FAQ
     ═══════════════════════════════════════════════════════════ -->
<section class="gi-faq" aria-label="Gutter installation frequently asked questions">
  <!-- Wave divider top -->
  <div class="gi-divider-wave" aria-hidden="true">
    <svg viewBox="0 0 1200 65" preserveAspectRatio="none">
      <path d="M0,65 C250,10 450,10 600,35 C750,60 950,60 1200,5 L1200,0 L0,0 Z" fill="var(--color-bg-alt)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="gi-faq-header reveal-up">
      <span class="eyebrow-label">Common Questions</span>
      <h2>What Should You Know Before <span class="text-accent">Installing Gutters</span> in Omaha?</h2>
      <p style="color:var(--color-text-light);max-width:560px;margin:0 auto;">Answers to the questions Omaha homeowners ask most about gutter installation, materials, and cost.</p>
    </div>

    <div class="gi-faq-grid">
      <?php foreach ($faqs as $i => $faq): ?>
      <div class="gi-faq-item reveal-up reveal-delay-<?php echo ($i % 4) + 1; ?>">
        <h3><?php echo htmlspecialchars($faq['question']); ?></h3>
        <p><?php echo htmlspecialchars($faq['answer']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     SECTION 8 — FINAL CTA
     ═══════════════════════════════════════════════════════════ -->
<section class="gi-cta" aria-label="Request a gutter installation estimate">
  <div class="container">
    <h2 class="reveal-up">Ready to Protect Your Omaha Property with <span class="text-accent" style="color:rgba(var(--color-accent-rgb),1);filter:brightness(1.8);">New Gutters?</span></h2>
    <p class="reveal-up reveal-delay-1">
      Crawford Roofing &amp; Gutters fabricates and installs seamless gutter systems built for Nebraska weather.
      <?php echo $yearsInBusiness; ?>+ years of Omaha experience. Free on-site estimates. One call gets it started.
    </p>
    <a href="/contact/" class="btn btn-accent btn-lg reveal-up reveal-delay-2">Get Your Free Gutter Estimate</a>
    <?php if (!empty($phone)): ?>
    <span class="gi-cta-secondary reveal-up reveal-delay-3">
      Prefer to talk? Call <a href="tel:<?php echo phoneHref($phone); ?>"><?php echo formatPhone($phone); ?></a> — we answer 7 days a week.
    </span>
    <?php endif; ?>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     RELATED SERVICES (3 Cards)
     ═══════════════════════════════════════════════════════════ -->
<section class="gi-related" aria-label="Related gutter services">
  <div class="container">
    <div class="gi-related-header reveal-up">
      <span class="eyebrow-label">More Services</span>
      <h2>Other Services <span class="text-accent">You May Need</span></h2>
      <p>Complementary gutter and roofing services from Crawford Roofing &amp; Gutters.</p>
    </div>

    <div class="services-grid" style="grid-template-columns: repeat(3, 1fr);">
      <?php
      $relatedIcons = ['gutter-addition' => 'ruler', 'gutter-replacement' => 'sparkles', 'roof-replacement' => 'home'];
      $relatedTints = [1, 2, 3];
      $relatedPhotos = [
          'gutter-addition'    => $imgBase . '1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg',
          'gutter-replacement' => $imgBase . '1779134252049-ez0nhr-IMG_096815F71F3A-1.jpeg',
          'roof-replacement'   => $imgBase . '1779134049337-o7oznv-dff36b_a35b2df95a814ec49799d0169f3a87da_mv2.jpg',
      ];
      $relatedBullets = [
          'gutter-addition'    => ['Protects foundation from erosion', 'Custom-fit to your roofline', 'Multiple material options'],
          'gutter-replacement' => ['Full system upgrade available', 'Upgraded downspout routing', 'Color-matched to your home'],
          'roof-replacement'   => ['Asphalt, metal, and TPO systems', 'Full tear-off and re-deck', 'Manufacturer warranty included'],
      ];
      foreach ($relatedServices as $i => $rs):
        $tint = $relatedTints[$i % 3];
        $icon = $relatedIcons[$rs['slug']] ?? 'check-circle';
        $photo = $relatedPhotos[$rs['slug']] ?? $bodyImg2;
        $bullets = $relatedBullets[$rs['slug']] ?? ['Professional service', 'Quality materials', 'Free estimates'];
      ?>
      <article class="service-card-with-image card-tint-<?php echo $tint; ?> reveal-up reveal-delay-<?php echo $i + 1; ?>">
        <div class="service-card__image">
          <img src="<?php echo htmlspecialchars($photo); ?>" alt="<?php echo htmlspecialchars($rs['name']); ?> service in Omaha, NE" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="<?php echo $icon; ?>"></i></div>
          <h3><?php echo htmlspecialchars($rs['name']); ?></h3>
          <p class="service-card__desc"><?php echo htmlspecialchars(strtok($rs['description'], '.')); ?>.</p>
          <ul>
            <?php foreach ($bullets as $bullet): ?>
            <li><?php echo htmlspecialchars($bullet); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/services/<?php echo htmlspecialchars($rs['slug']); ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- Last Updated -->
<div class="gi-last-updated">
  <p>Last Updated: <?php echo date('F Y'); ?></p>
</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
