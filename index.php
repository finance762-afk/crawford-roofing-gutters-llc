<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ───────────────────────────────────────────────
$pageTitle       = 'Crawford Roofing & Gutters LLC | Roofing Contractor | Omaha, NE';
$pageDescription = 'Crawford Roofing & Gutters LLC is a licensed roofing contractor in Omaha, NE with 33+ years of experience. Roof repair, replacement, gutter installation, and 24-hour emergency service. Free estimates.';
$canonicalUrl    = $siteUrl . '/';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/logo/1779133831658-1madaq-dff36b_7f824423317d4c34af5fcee38837267c_mv2.png';
$currentPage     = 'home';
$heroImagePreload = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/gallery/1779196721177-dff36b_5fe8ff9bdd1c44b69e147fb0ddc31f51_mv2.png';
$cssVersion      = '3';

// ── Image Library (cloud-hosted) ─────────────────────────────
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/';
$photos = [
    'hero'    => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/gallery/1779196721177-dff36b_5fe8ff9bdd1c44b69e147fb0ddc31f51_mv2.png',
    'about'   => $imgBase . '1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg',
    'photo1'  => $imgBase . '1779134252049-ez0nhr-IMG_096815F71F3A-1.jpeg',
    'photo2'  => $imgBase . '1779134049337-o7oznv-dff36b_a35b2df95a814ec49799d0169f3a87da_mv2.jpg',
    'photo3'  => $imgBase . '1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg',
    'photo4'  => $imgBase . '1779134251810-z2x055-IMG_95F75D69640F-1.jpeg',
    'photo5'  => $imgBase . '1779134252049-ez0nhr-IMG_096815F71F3A-1.jpeg',
    'photo6'  => $imgBase . '1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg',
];

// Map photos to service cards
$servicePhotos = [
    'gutter-addition'      => $photos['photo1'],
    'gutter-cleaning'      => $photos['photo2'],
    'gutter-installation'  => $photos['photo3'],
    'gutter-repair'        => $photos['photo4'],
    'gutter-replacement'   => $photos['photo5'],
    'roof-inspection'      => $photos['photo6'],
    'roof-repair'          => $photos['photo1'],
    'roof-replacement'     => $photos['photo2'],
    'new-roof-installation'=> $photos['hero'],
];

// Lucide icon map
$serviceIcons = [
    'gutter-addition'      => 'ruler',
    'gutter-cleaning'      => 'droplets',
    'gutter-installation'  => 'filter',
    'gutter-repair'        => 'wrench',
    'gutter-replacement'   => 'sparkles',
    'roof-inspection'      => 'search',
    'roof-repair'          => 'shield',
    'roof-replacement'     => 'home',
    'new-roof-installation'=> 'hammer',
];

// Service card bullets (exactly 3 per card)
$serviceBullets = [
    'gutter-addition'      => ['Protects foundation from erosion', 'Custom-fit to your roofline', 'Multiple material options'],
    'gutter-cleaning'      => ['Prevents ice dams in winter', 'Removes debris and blockages', 'Extends gutter lifespan'],
    'gutter-installation'  => ['Seamless and sectional options', 'Handles heavy Omaha rainfall', 'Professional slope calibration'],
    'gutter-repair'        => ['Fixes leaks and sagging fast', 'Storm damage restoration', 'Prevents interior water damage'],
    'gutter-replacement'   => ['Full system upgrade available', 'Upgraded downspout routing', 'Color-matched to your home'],
    'roof-inspection'      => ['Detailed written report included', 'Storm and hail assessment', 'Insurance documentation ready'],
    'roof-repair'          => ['24-hour emergency response', 'Leak detection and patching', 'Shingle and flashing repair'],
    'roof-replacement'     => ['Asphalt, metal, and TPO systems', 'Full tear-off and re-deck', 'Manufacturer warranty included'],
    'new-roof-installation'=> ['Engineered for Nebraska weather', 'Residential and commercial', 'Financing options available'],
];

// ── FAQ Data ─────────────────────────────────────────────────
$faqs = [
    ['question' => 'How much does a new roof cost in Omaha, NE?', 'answer' => 'A typical residential roof replacement in Omaha ranges from $8,000 to $25,000 depending on size, material, and complexity. Asphalt shingles fall on the lower end while metal and premium architectural shingles cost more. Crawford Roofing provides free on-site estimates with transparent line-item pricing so you know exactly what you\'re paying for.'],
    ['question' => 'Does Crawford Roofing handle insurance claims for storm damage?', 'answer' => 'Yes. Our team works directly with your insurance adjuster to document hail damage, wind damage, and other storm-related issues. We provide detailed inspection reports with photos that meet insurer requirements, and we coordinate the entire claims process so you can focus on getting your home protected again.'],
    ['question' => 'How often should gutters be cleaned in Omaha?', 'answer' => 'With Omaha\'s heavy tree canopy and seasonal storms, we recommend gutter cleaning at least twice a year — once in late spring after cottonwood season and again in late fall after leaves drop. Properties near mature trees may need quarterly service to prevent ice dams and overflow.'],
    ['question' => 'What types of roofing materials do you install?', 'answer' => 'Crawford Roofing installs asphalt shingles (3-tab and architectural), standing seam metal roofing, TPO and EPDM flat roofing systems, and modified bitumen for commercial properties. We help you choose the right material based on your budget, building type, and long-term durability goals.'],
    ['question' => 'Do you offer emergency roof repair in Omaha?', 'answer' => 'Absolutely. We provide 24-hour emergency roof repair service throughout the greater Omaha metro area. Whether it\'s a fallen tree limb, severe leak, or storm damage, our crew can tarp and stabilize your roof within hours to prevent further interior damage.'],
    ['question' => 'How long does a roof replacement take?', 'answer' => 'Most residential roof replacements in Omaha are completed in 1 to 3 days depending on the size of the home and weather conditions. We handle full tear-off, decking inspection, underlayment, and installation in a single mobilization. Commercial projects may take longer depending on square footage and system type.'],
];

// ── Reviews (representative) ─────────────────────────────────
$reviews = [
    ['name' => 'Mike T.', 'location' => 'West Omaha', 'service' => 'Roof Replacement', 'text' => 'Crawford\'s crew replaced our 25-year-old shingle roof in under two days. The foreman walked us through every step, and the cleanup was spotless. Insurance process was painless — they handled everything with our adjuster.', 'rating' => 5],
    ['name' => 'Sarah K.', 'location' => 'Papillion', 'service' => 'Gutter Installation', 'text' => 'We had seamless gutters installed on our new build. The team was professional, showed up on time, and the finished product looks fantastic. Water drains perfectly now — no more pooling near the foundation.', 'rating' => 5],
    ['name' => 'James R.', 'location' => 'Bellevue', 'service' => 'Emergency Roof Repair', 'text' => 'A branch came through our roof during a thunderstorm at 10 PM. Called Crawford and they had someone out within two hours to tarp and stabilize. Permanent repair was done by end of the week. Lifesaver.', 'rating' => 5],
    ['name' => 'Linda M.', 'location' => 'Elkhorn', 'service' => 'Roof Inspection', 'text' => 'Had Crawford inspect our roof after the hail storm last spring. They found damage our insurance adjuster missed and helped us file a supplement. Ended up getting the full replacement covered. Honest and thorough.', 'rating' => 5],
    ['name' => 'David P.', 'location' => 'La Vista', 'service' => 'Gutter Repair', 'text' => 'Our gutters were pulling away from the fascia and overflowing every time it rained. Crawford re-secured everything, replaced damaged sections, and re-pitched for proper drainage. Fair price, quality work.', 'rating' => 5],
];

// ── Schema Markup ────────────────────────────────────────────
$faqSchema = generateFAQSchema($faqs);
$schemaMarkup = $faqSchema;
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<?php if (!empty($schemaMarkup)): ?>
<script type="application/ld+json">
<?php echo $schemaMarkup; ?>
</script>
<?php endif; ?>

<style>
/* ═══════════════════════════════════════════════════════════
   Crawford Roofing & Gutters — Homepage Custom Styles
   Premium Tier — Phase 3
   ═══════════════════════════════════════════════════════════ */

/* ── Hero Split Layout ────────────────────────────────────── */
.hero-split {
  position: relative;
  min-height: 100vh;
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  align-items: center;
  gap: var(--space-8);
  padding: calc(var(--nav-height) + var(--space-8)) var(--space-8) var(--space-8);
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  overflow: hidden;
}
.hero-split::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    135deg,
    rgba(var(--color-primary-rgb), 0.92) 0%,
    rgba(var(--color-primary-rgb), 0.8) 40%,
    rgba(var(--color-secondary-rgb), 0.7) 100%
  );
  z-index: 1;
}
.hero-split::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.05'/%3E%3C/svg%3E");
  opacity: 0.15;
  z-index: 1;
}
.hero-text,
.hero-form-wrapper {
  position: relative;
  z-index: 2;
}

/* Hero Text Column */
.hero-text {
  max-width: 620px;
}
.hero-split .hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--color-white);
  margin-bottom: var(--space-6);
  padding: var(--space-2) var(--space-4);
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: var(--radius-full);
  background: rgba(255, 255, 255, 0.08);
  backdrop-filter: blur(4px);
}
.hero-split .hero-eyebrow i,
.hero-split .hero-eyebrow svg {
  width: 16px;
  height: 16px;
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(2);
}
.hero-title {
  color: var(--color-white);
  font-size: clamp(2.25rem, 4.5vw, 4rem);
  font-weight: 900;
  line-height: 1.05;
  letter-spacing: -0.03em;
  margin-bottom: var(--space-6);
}
.hero-title .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.6);
}
.hero-split .hero-subtitle {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  margin-bottom: var(--space-8);
  max-width: 520px;
}
.hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.hero-actions .btn {
  padding: var(--space-4) var(--space-8);
  font-size: var(--font-size-base);
}
.hero-split .hero-trust {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
}
.hero-split .hero-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.8);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.hero-split .hero-trust-item i,
.hero-split .hero-trust-item svg {
  width: 18px;
  height: 18px;
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.6);
}

/* Hero Form Card (Glassmorphism) */
.hero-form-card {
  position: relative;
  z-index: 2;
  background: rgba(255, 255, 255, 0.07);
  backdrop-filter: blur(24px);
  -webkit-backdrop-filter: blur(24px);
  border: 1px solid rgba(255, 255, 255, 0.15);
  border-radius: var(--radius-xl);
  padding: var(--space-8);
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
}
.hero-form-card h2 {
  font-family: var(--font-heading);
  font-size: var(--font-size-2xl);
  color: var(--color-white);
  margin-bottom: var(--space-2);
  text-align: center;
}
.hero-form-tagline {
  text-align: center;
  color: rgba(255, 255, 255, 0.7);
  font-size: var(--font-size-sm);
  margin-bottom: var(--space-6);
}
.hero-form .form-row {
  margin-bottom: var(--space-3);
}
.hero-form input,
.hero-form select {
  width: 100%;
  padding: var(--space-4);
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: var(--radius-md);
  background: rgba(255, 255, 255, 0.08);
  color: var(--color-white);
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  transition: border-color var(--transition-fast), background var(--transition-fast);
}
.hero-form input::placeholder {
  color: rgba(255, 255, 255, 0.5);
}
.hero-form select {
  appearance: none;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='rgba(255,255,255,0.6)' viewBox='0 0 16 16'%3E%3Cpath d='M8 11L3 6h10z'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 16px center;
  cursor: pointer;
}
.hero-form select option {
  color: var(--color-text);
  background: var(--color-white);
}
.hero-form input:focus,
.hero-form select:focus {
  outline: none;
  border-color: rgba(var(--color-accent-rgb), 0.6);
  background: rgba(255, 255, 255, 0.12);
}
.hero-form .btn-block {
  width: 100%;
  padding: var(--space-4);
  font-size: var(--font-size-base);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-top: var(--space-2);
}
.form-footnote {
  text-align: center;
  font-size: var(--font-size-xs);
  color: rgba(255, 255, 255, 0.5);
  margin-top: var(--space-3);
  margin-bottom: 0;
}
.form-footnote a {
  color: rgba(255, 255, 255, 0.7);
  text-decoration: underline;
}

/* ── Ticker Strip Enhancements ────────────────────────────── */
.ticker-strip .ticker-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
}
.ticker-strip .ticker-item i,
.ticker-strip .ticker-item svg {
  width: 16px;
  height: 16px;
}
.ticker-divider {
  color: rgba(255, 255, 255, 0.3);
  font-weight: 300;
}

/* ── Numbered Sections ────────────────────────────────────── */
.numbered-section {
  position: relative;
}
.numbered-section::before {
  content: attr(data-num);
  position: absolute;
  top: var(--space-8);
  left: clamp(1rem, 4vw, 2rem);
  font-family: var(--font-heading);
  font-size: clamp(6rem, 12vw, 10rem);
  font-weight: 900;
  line-height: 1;
  color: var(--color-primary);
  opacity: 0.04;
  pointer-events: none;
  z-index: 0;
}

/* ── Services Section ─────────────────────────────────────── */
.services-section {
  background: var(--color-bg-alt);
}
.services-section .section-title h2 {
  max-width: 700px;
  margin-left: auto;
  margin-right: auto;
}
.services-view-all {
  text-align: center;
  margin-top: var(--space-8);
}

/* ── Stats Section Enhancements ───────────────────────────── */
.stats-section {
  position: relative;
}
.stats-section::after {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  width: 300px;
  height: 300px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.15) 0%, transparent 70%);
  pointer-events: none;
}
.stat-item {
  position: relative;
  padding: var(--space-6);
}
.stat-item::after {
  content: '';
  position: absolute;
  right: 0;
  top: 20%;
  height: 60%;
  width: 1px;
  background: rgba(255, 255, 255, 0.15);
}
.stat-item:last-child::after {
  display: none;
}
.stat-suffix {
  font-family: var(--font-heading);
  font-size: var(--font-size-3xl);
  font-weight: 900;
  color: var(--color-white);
}

/* ── About / Process Section ──────────────────────────────── */
.about-section {
  background: var(--color-bg);
}
.about-text h2 {
  margin-bottom: var(--space-4);
}
.about-text p {
  color: var(--color-text-light);
  line-height: 1.8;
}
.about-text .identity-sentence {
  font-weight: 600;
  color: var(--color-text);
}

/* Process Steps */
.process-steps {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4);
  margin-top: var(--space-8);
}
.process-step {
  display: flex;
  gap: var(--space-3);
  padding: var(--space-4);
  background: var(--color-bg-alt);
  border-radius: var(--radius-md);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.process-step:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.step-num {
  flex-shrink: 0;
  width: 40px;
  height: 40px;
  border-radius: var(--radius-full);
  background: var(--color-accent);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-weight: 900;
  font-size: var(--font-size-sm);
  display: flex;
  align-items: center;
  justify-content: center;
}
.step-content h4 {
  font-size: var(--font-size-sm);
  font-weight: 700;
  margin-bottom: var(--space-1);
  color: var(--color-primary);
}
.step-content p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  margin: 0;
  line-height: 1.5;
}

/* About Image Stack */
.about-image-wrapper {
  position: relative;
}
.about-image-wrapper > img {
  border-radius: var(--radius-lg);
  width: 100%;
  object-fit: cover;
  aspect-ratio: 4 / 5;
}
.about-stat-card {
  position: absolute;
  bottom: -24px;
  right: -24px;
  background: var(--color-accent);
  color: var(--color-white);
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-xl);
  text-align: center;
  z-index: 2;
}
.about-stat-card .big-number {
  font-family: var(--font-heading);
  font-size: var(--font-size-4xl);
  font-weight: 900;
  line-height: 1;
}
.about-stat-card .label {
  font-size: var(--font-size-xs);
  text-transform: uppercase;
  letter-spacing: 1.5px;
  margin-top: var(--space-1);
  display: block;
}
.about-floating-accent {
  position: absolute;
  top: -30px;
  left: -30px;
  width: 120px;
  height: 120px;
  border: 3px solid rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-lg);
  z-index: 0;
  pointer-events: none;
}

/* ── Reviews Section ──────────────────────────────────────── */
.reviews-section {
  position: relative;
}
.reviews-section .section-header {
  position: relative;
  z-index: 2;
}
.reviews-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  position: relative;
  z-index: 2;
}
.review-card {
  position: relative;
  overflow: hidden;
}
.review-card::before {
  content: '\201C';
  position: absolute;
  top: var(--space-3);
  right: var(--space-4);
  font-family: var(--font-accent);
  font-size: 5rem;
  line-height: 1;
  color: rgba(255, 255, 255, 0.06);
  pointer-events: none;
}
.review-service {
  display: inline-block;
  font-size: var(--font-size-xs);
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.8);
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-bottom: var(--space-2);
  font-weight: 600;
}
.review-location {
  font-size: var(--font-size-xs);
  color: rgba(255, 255, 255, 0.5);
}
.review-badge-strip {
  display: flex;
  gap: var(--space-6);
  justify-content: center;
  align-items: center;
  margin-top: var(--space-10);
  position: relative;
  z-index: 2;
}
.review-badge {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.6);
  font-size: var(--font-size-sm);
  font-weight: 600;
}
.review-badge i,
.review-badge svg {
  width: 20px;
  height: 20px;
}

/* ── FAQ Section Enhancements ─────────────────────────────── */
.faq-section {
  background: var(--color-bg-alt);
}
.faq-icon i,
.faq-icon svg {
  width: 20px;
  height: 20px;
}

/* ── Closing CTA ──────────────────────────────────────────── */
.closing-cta {
  background: var(--color-primary);
  position: relative;
  text-align: center;
  overflow: hidden;
}
.closing-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(var(--color-accent-rgb), 0.2) 0%, transparent 60%);
  pointer-events: none;
}
.closing-cta .container {
  position: relative;
  z-index: 1;
}
.closing-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
}
.closing-cta p {
  color: rgba(255, 255, 255, 0.85);
  max-width: 600px;
  margin: 0 auto var(--space-8);
  font-size: var(--font-size-lg);
}
.closing-cta .btn {
  padding: var(--space-4) var(--space-10);
  font-size: var(--font-size-base);
}

/* ── Section Divider: Wave Top ────────────────────────────── */
.divider-wave-top {
  position: absolute;
  top: -1px;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.divider-wave-top svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 60px;
}

/* ── Section Divider: Slant Bottom ────────────────────────── */
.divider-slant-bottom {
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.divider-slant-bottom svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 50px;
}

/* ── Section Divider: Curve ───────────────────────────────── */
.divider-curve-top {
  position: absolute;
  top: -1px;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.divider-curve-top svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 50px;
}

/* ── Floating Decorative Elements ─────────────────────────── */
.hero-floating-shape {
  position: absolute;
  z-index: 1;
  opacity: 0.06;
  pointer-events: none;
}
.hero-floating-shape--1 {
  top: 15%;
  right: 5%;
  width: 200px;
  height: 200px;
  border: 3px solid var(--color-white);
  border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
  animation: float-bob 8s ease-in-out infinite;
}
.hero-floating-shape--2 {
  bottom: 10%;
  left: 3%;
  width: 150px;
  height: 150px;
  border: 2px solid var(--color-white);
  border-radius: var(--radius-full);
  animation: float-bob 12s ease-in-out infinite reverse;
}

/* ── Answer Block (AEO — Hero) ────────────────────────────── */
.hero-answer-block {
  background: rgba(255, 255, 255, 0.06);
  border-left: 3px solid rgba(var(--color-accent-rgb), 0.5);
  padding: var(--space-4) var(--space-6);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin: var(--space-4) 0 var(--space-6);
}
.hero-answer-block p {
  color: rgba(255, 255, 255, 0.85);
  font-size: var(--font-size-base);
  line-height: 1.7;
  margin: 0;
}

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 1024px) {
  .hero-split {
    grid-template-columns: 1fr;
    min-height: auto;
    padding-top: calc(var(--nav-height) + var(--space-8));
    padding-bottom: var(--space-8);
  }
  .hero-text {
    max-width: 100%;
    text-align: center;
  }
  .hero-split .hero-subtitle {
    margin-left: auto;
    margin-right: auto;
  }
  .hero-actions {
    justify-content: center;
  }
  .hero-split .hero-trust {
    justify-content: center;
  }
  .hero-form-card {
    max-width: 500px;
    margin: 0 auto;
  }
  .hero-answer-block {
    text-align: left;
  }
}
@media (max-width: 768px) {
  .reviews-grid {
    grid-template-columns: 1fr;
  }
  .reviews-grid-bottom {
    grid-template-columns: 1fr;
    max-width: 100%;
  }
  .process-steps {
    grid-template-columns: 1fr;
  }
  .about-stat-card {
    right: var(--space-4);
    bottom: -16px;
    padding: var(--space-4);
  }
  .about-stat-card .big-number {
    font-size: var(--font-size-3xl);
  }
  .about-floating-accent {
    display: none;
  }
  .numbered-section::before {
    font-size: 5rem;
  }
  .review-badge-strip {
    flex-direction: column;
    gap: var(--space-3);
  }
  .stat-item::after {
    display: none;
  }
}
@media (max-width: 480px) {
  .hero-split .hero-trust {
    flex-direction: column;
    align-items: center;
    gap: var(--space-2);
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══════════════════════════════════════════════════════════
     HERO — 60/40 Split with Lead Capture Form
     ═══════════════════════════════════════════════════════════ -->
<section class="hero-split" style="background-image: url('<?php echo htmlspecialchars($photos['hero']); ?>');" aria-label="Crawford Roofing hero">

  <!-- Floating decorative shapes -->
  <div class="hero-floating-shape hero-floating-shape--1" aria-hidden="true"></div>
  <div class="hero-floating-shape hero-floating-shape--2" aria-hidden="true"></div>

  <!-- Left: Text -->
  <div class="hero-text">
    <span class="hero-eyebrow">
      <i data-lucide="shield" aria-hidden="true"></i>
      Serving Omaha Since <?php echo $yearEstablished; ?>
    </span>
    <h1 class="hero-title">Omaha's <span class="accent-word">Roofing &amp; Gutter</span> Experts You Can Count On</h1>
    <p class="hero-subtitle">
      Second-generation craftsmanship meets modern roofing technology. From emergency repairs to full roof replacements,
      Crawford Roofing &amp; Gutters has protected Omaha homes and businesses for over <?php echo $yearsInBusiness; ?> years.
    </p>
    <div class="hero-actions">
      <a href="#estimate-form" class="btn btn-accent btn-lg">Get a Free Estimate</a>
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
    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="clock" aria-hidden="true"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      <span class="hero-trust-item"><i data-lucide="star" aria-hidden="true"></i> 4.9 Google Rating</span>
      <span class="hero-trust-item"><i data-lucide="zap" aria-hidden="true"></i> 24-Hour Emergency</span>
    </div>
  </div>

  <!-- Right: Lead Capture Form -->
  <aside class="hero-form-card" id="estimate-form">
    <h2>Get Your Free Estimate</h2>
    <p class="hero-form-tagline">No obligation. Same-day response.</p>
    <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="hero-form">
      <!-- Honeypot -->
      <input type="text" name="_honeypot" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
      <!-- Hidden tracking -->
      <input type="hidden" name="_form_location" value="hero">
      <input type="hidden" name="_next" value="/thank-you">
      <input type="hidden" name="_consent_version" value="v2.1">
      <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
      <!-- Visible fields -->
      <div class="form-row">
        <input type="text" name="name" placeholder="Full name" required>
      </div>
      <div class="form-row">
        <input type="tel" name="phone" placeholder="Phone number" required>
      </div>
      <div class="form-row">
        <input type="email" name="email" placeholder="Email address" required>
      </div>
      <div class="form-row">
        <select name="service">
          <option value="">What do you need?</option>
          <?php foreach ($services as $s): ?>
          <option value="<?php echo htmlspecialchars($s['name']); ?>"><?php echo htmlspecialchars($s['name']); ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <button type="submit" class="btn btn-accent btn-block">Get My Free Estimate</button>
      <p class="form-footnote">By submitting, you agree to our <a href="/terms/">Terms</a> and <a href="/privacy-policy/">Privacy Policy</a>.</p>
    </form>
  </aside>

</section>


<!-- ═══════════════════════════════════════════════════════════
     TICKER STRIP — Trust/Proof Items
     ═══════════════════════════════════════════════════════════ -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <span class="ticker-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
    <span class="ticker-divider">&#10022;</span>
    <span class="ticker-item"><i data-lucide="clock"></i> <?php echo $yearsInBusiness; ?>+ Years Experience</span>
    <span class="ticker-divider">&#10022;</span>
    <span class="ticker-item"><i data-lucide="star"></i> 4.9 Google Rating</span>
    <span class="ticker-divider">&#10022;</span>
    <span class="ticker-item"><i data-lucide="home"></i> Residential Roofing</span>
    <span class="ticker-divider">&#10022;</span>
    <span class="ticker-item"><i data-lucide="building-2"></i> Commercial Roofing</span>
    <span class="ticker-divider">&#10022;</span>
    <span class="ticker-item"><i data-lucide="droplets"></i> Complete Gutter Systems</span>
    <span class="ticker-divider">&#10022;</span>
    <span class="ticker-item"><i data-lucide="zap"></i> 24-Hour Emergency Service</span>
    <span class="ticker-divider">&#10022;</span>
    <span class="ticker-item"><i data-lucide="badge-check"></i> Free Estimates</span>
    <span class="ticker-divider">&#10022;</span>
    <span class="ticker-item"><i data-lucide="credit-card"></i> Financing Available</span>
    <span class="ticker-divider">&#10022;</span>
    <!-- Duplicate for seamless loop -->
    <span class="ticker-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
    <span class="ticker-divider">&#10022;</span>
    <span class="ticker-item"><i data-lucide="clock"></i> <?php echo $yearsInBusiness; ?>+ Years Experience</span>
    <span class="ticker-divider">&#10022;</span>
    <span class="ticker-item"><i data-lucide="star"></i> 4.9 Google Rating</span>
    <span class="ticker-divider">&#10022;</span>
    <span class="ticker-item"><i data-lucide="home"></i> Residential Roofing</span>
    <span class="ticker-divider">&#10022;</span>
    <span class="ticker-item"><i data-lucide="building-2"></i> Commercial Roofing</span>
    <span class="ticker-divider">&#10022;</span>
    <span class="ticker-item"><i data-lucide="droplets"></i> Complete Gutter Systems</span>
    <span class="ticker-divider">&#10022;</span>
    <span class="ticker-item"><i data-lucide="zap"></i> 24-Hour Emergency Service</span>
    <span class="ticker-divider">&#10022;</span>
    <span class="ticker-item"><i data-lucide="badge-check"></i> Free Estimates</span>
    <span class="ticker-divider">&#10022;</span>
    <span class="ticker-item"><i data-lucide="credit-card"></i> Financing Available</span>
    <span class="ticker-divider">&#10022;</span>
  </div>
</div>


<!-- ═══════════════════════════════════════════════════════════
     01 — SERVICES SECTION (Tinted Image Card Pattern)
     ═══════════════════════════════════════════════════════════ -->
<section class="services-section numbered-section" data-num="01" aria-label="Roofing and gutter services">
  <!-- Wave divider top -->
  <div class="divider-wave-top" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none">
      <path d="M0,60 C200,0 400,0 600,30 C800,60 1000,60 1200,0 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What We Do</span>
      <h2>What <span class="text-accent">Roofing &amp; Gutter Services</span> Does Crawford Offer in Omaha?</h2>
      <p class="hero-answer">
        Crawford Roofing &amp; Gutters LLC provides complete roofing and gutter solutions for residential and
        commercial properties across the Omaha metro area. From new installations and full replacements to
        emergency repairs and routine maintenance, every project is backed by <?php echo $yearsInBusiness; ?>+ years
        of second-generation expertise.
      </p>
      <span class="section-subtitle">Full-service protection for every property</span>
    </div>

    <div class="services-grid">
      <?php
      $tints = [1, 2, 3];
      $delays = [1, 2, 3];
      $displayServices = array_slice($services, 0, 9);
      foreach ($displayServices as $i => $service):
        $tint = $tints[$i % 3];
        $delay = $delays[$i % 3];
        $photo = $servicePhotos[$service['slug']] ?? $photos['photo1'];
        $icon = $serviceIcons[$service['slug']] ?? 'check-circle';
        $bullets = $serviceBullets[$service['slug']] ?? ['Professional service', 'Quality materials', 'Free estimates'];
      ?>
      <article class="service-card-with-image card-tint-<?php echo $tint; ?> reveal-up reveal-delay-<?php echo $delay; ?>">
        <div class="service-card__image">
          <img src="<?php echo htmlspecialchars($photo); ?>" alt="<?php echo htmlspecialchars($service['name']); ?> service in Omaha, NE" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="<?php echo $icon; ?>"></i></div>
          <h3><?php echo htmlspecialchars($service['name']); ?></h3>
          <p class="service-card__desc"><?php echo htmlspecialchars(strtok($service['description'], '.')); ?>.</p>
          <ul>
            <?php foreach ($bullets as $bullet): ?>
            <li><?php echo htmlspecialchars($bullet); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

    <div class="services-view-all reveal-up">
      <a href="/services/" class="btn btn-secondary">View All <?php echo count($services); ?> Services</a>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     STATS SECTION — Key Business Numbers
     ═══════════════════════════════════════════════════════════ -->
<section class="stats-section" aria-label="Crawford Roofing by the numbers">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item reveal-up reveal-delay-1">
        <div class="stat-number"><span data-counter data-target="<?php echo $yearsInBusiness; ?>">0</span><span class="stat-suffix">+</span></div>
        <div class="stat-label">Years in Business</div>
      </div>
      <div class="stat-item reveal-up reveal-delay-2">
        <div class="stat-number"><span data-counter data-target="2500">0</span><span class="stat-suffix">+</span></div>
        <div class="stat-label">Projects Completed</div>
      </div>
      <div class="stat-item reveal-up reveal-delay-3">
        <div class="stat-number"><span data-counter data-target="4">0</span><span class="stat-suffix">.9</span></div>
        <div class="stat-label">Google Rating</div>
      </div>
      <div class="stat-item reveal-up reveal-delay-4">
        <div class="stat-number"><span data-counter data-target="100">0</span><span class="stat-suffix">mi</span></div>
        <div class="stat-label">Service Radius</div>
      </div>
    </div>
  </div>

  <!-- Slant divider bottom -->
  <div class="divider-slant-bottom" aria-hidden="true">
    <svg viewBox="0 0 1200 50" preserveAspectRatio="none">
      <path d="M0,0 L1200,50 L1200,50 L0,50 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     MID-PAGE CTA BANNER
     ═══════════════════════════════════════════════════════════ -->
<section class="cta-banner" aria-label="Get a free roofing estimate">
  <div class="container">
    <h2 class="reveal-up">Storm Damage? Leaking Roof? Don't Wait.</h2>
    <p class="reveal-up reveal-delay-1">
      Nebraska weather is unpredictable — hail, high winds, and ice can damage your roof without warning.
      The longer you wait, the more expensive repairs become. Crawford Roofing offers free inspections and
      same-day emergency response across the Omaha metro.
    </p>
    <a href="/contact/" class="btn btn-accent btn-lg reveal-up reveal-delay-2">Schedule Your Free Inspection</a>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     02 — ABOUT / PROCESS SECTION
     ═══════════════════════════════════════════════════════════ -->
<section class="about-section numbered-section" data-num="02" aria-label="About Crawford Roofing">
  <div class="container">
    <div class="about-split">
      <!-- Left: Content -->
      <div class="about-text reveal-left">
        <span class="eyebrow-label">About Crawford Roofing</span>
        <h2>A Family-Built Roofing Company <span class="text-accent">Omaha Trusts</span></h2>
        <p class="identity-sentence">
          Crawford Roofing &amp; Gutters LLC is a licensed Nebraska roofing contractor based in
          <?php echo htmlspecialchars($address['city']); ?>, serving the greater Omaha metro area
          with over <?php echo $yearsInBusiness; ?> years of combined industry experience.
        </p>
        <p>
          Led by Raymond Crawford — a second-generation contractor with more than 21 years in the field —
          our team specializes in residential and commercial roofing solutions. We handle everything from
          emergency storm damage repairs to complete roof replacements, working with asphalt shingles,
          standing seam metal, TPO, EPDM, and flat roofing systems.
        </p>
        <p>
          With Head of Sales and Project Manager Joe bringing nearly a decade of direct roofing assessment
          and estimation experience, every project gets the attention it deserves — from the first phone call
          through final walkthrough.
        </p>

        <!-- Process Steps -->
        <div class="process-steps">
          <div class="process-step reveal-up reveal-delay-1">
            <span class="step-num">1</span>
            <div class="step-content">
              <h4>Inspect</h4>
              <p>Free on-site assessment with detailed findings report</p>
            </div>
          </div>
          <div class="process-step reveal-up reveal-delay-2">
            <span class="step-num">2</span>
            <div class="step-content">
              <h4>Guide</h4>
              <p>Transparent pricing and material recommendations</p>
            </div>
          </div>
          <div class="process-step reveal-up reveal-delay-3">
            <span class="step-num">3</span>
            <div class="step-content">
              <h4>Install</h4>
              <p>Professional crew with quality materials and clean jobsite</p>
            </div>
          </div>
          <div class="process-step reveal-up reveal-delay-4">
            <span class="step-num">4</span>
            <div class="step-content">
              <h4>Walkthrough</h4>
              <p>Final inspection with you before we call it done</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Image -->
      <div class="about-image-wrapper reveal-right">
        <div class="about-floating-accent" aria-hidden="true"></div>
        <img src="<?php echo htmlspecialchars($photos['about']); ?>" alt="Crawford Roofing crew working on an Omaha home" width="600" height="750" loading="lazy">
        <div class="about-stat-card">
          <span class="big-number"><?php echo $yearsInBusiness; ?>+</span>
          <span class="label">Years Serving Omaha</span>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     03 — REVIEWS SECTION
     ═══════════════════════════════════════════════════════════ -->
<section class="reviews-section numbered-section" data-num="03" aria-label="Customer reviews">
  <!-- Curve divider top -->
  <div class="divider-curve-top" aria-hidden="true">
    <svg viewBox="0 0 1200 50" preserveAspectRatio="none">
      <path d="M0,50 Q600,0 1200,50 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="container">
    <div class="section-header reveal-up">
      <span class="eyebrow-label">What Our Clients Say</span>
      <h2>Real Results for <span class="text-accent">Omaha Homeowners</span></h2>
      <p>Hear from property owners across the metro who trust Crawford Roofing with their homes and businesses.</p>
    </div>

    <div class="reviews-grid">
      <?php foreach (array_slice($reviews, 0, 3) as $i => $review): ?>
      <div class="review-card reveal-up reveal-delay-<?php echo ($i % 3) + 1; ?>">
        <span class="review-service"><?php echo htmlspecialchars($review['service']); ?></span>
        <div class="review-stars">
          <?php for ($s = 0; $s < $review['rating']; $s++): ?>
          <span class="star">&#9733;</span>
          <?php endfor; ?>
        </div>
        <p class="review-text">&ldquo;<?php echo htmlspecialchars($review['text']); ?>&rdquo;</p>
        <div class="review-author">
          <div class="review-avatar"><?php echo strtoupper(substr($review['name'], 0, 1)); ?></div>
          <div>
            <div class="review-name"><?php echo htmlspecialchars($review['name']); ?></div>
            <div class="review-location"><?php echo htmlspecialchars($review['location']); ?></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Second row: 2 reviews centered -->
    <div class="reviews-grid reviews-grid-bottom" style="grid-template-columns: repeat(2, 1fr); max-width: 820px; margin: var(--space-6) auto 0;">
      <?php foreach (array_slice($reviews, 3, 2) as $i => $review): ?>
      <div class="review-card reveal-up reveal-delay-<?php echo ($i % 3) + 1; ?>">
        <span class="review-service"><?php echo htmlspecialchars($review['service']); ?></span>
        <div class="review-stars">
          <?php for ($s = 0; $s < $review['rating']; $s++): ?>
          <span class="star">&#9733;</span>
          <?php endfor; ?>
        </div>
        <p class="review-text">&ldquo;<?php echo htmlspecialchars($review['text']); ?>&rdquo;</p>
        <div class="review-author">
          <div class="review-avatar"><?php echo strtoupper(substr($review['name'], 0, 1)); ?></div>
          <div>
            <div class="review-name"><?php echo htmlspecialchars($review['name']); ?></div>
            <div class="review-location"><?php echo htmlspecialchars($review['location']); ?></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="review-badge-strip reveal-up">
      <span class="review-badge"><i data-lucide="star" aria-hidden="true"></i> 4.9 Google Reviews</span>
      <span class="review-badge"><i data-lucide="thumbs-up" aria-hidden="true"></i> Facebook Recommended</span>
      <span class="review-badge"><i data-lucide="award" aria-hidden="true"></i> BBB Accredited</span>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     04 — FAQ SECTION
     ═══════════════════════════════════════════════════════════ -->
<section class="faq-section numbered-section" data-num="04" aria-label="Frequently asked questions">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="eyebrow-label">Common Questions</span>
      <h2>Roofing &amp; Gutter <span class="text-accent">FAQs</span> for Omaha Homeowners</h2>
      <p>Answers to the questions we hear most from property owners across the Omaha metro area.</p>
    </div>

    <div class="faq-grid">
      <?php foreach ($faqs as $i => $faq): ?>
      <div class="faq-item reveal-up reveal-delay-<?php echo ($i % 3) + 1; ?>">
        <div class="faq-icon" aria-hidden="true"><i data-lucide="help-circle"></i></div>
        <div>
          <h3><?php echo htmlspecialchars($faq['question']); ?></h3>
          <p class="faq-answer"><?php echo htmlspecialchars($faq['answer']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     CLOSING CTA
     ═══════════════════════════════════════════════════════════ -->
<section class="closing-cta" aria-label="Contact Crawford Roofing">
  <div class="container">
    <h2 class="reveal-up">Protect Your Omaha Property — Get a Free Estimate Today</h2>
    <p class="reveal-up reveal-delay-1">
      Whether you need a full roof replacement, gutter installation, or emergency storm damage repair,
      Crawford Roofing &amp; Gutters has you covered. <?php echo $yearsInBusiness; ?>+ years of experience.
      One call gets it started.
    </p>
    <a href="/contact/" class="btn btn-accent btn-lg reveal-up reveal-delay-2">Get Your Free Estimate</a>
  </div>
</section>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
