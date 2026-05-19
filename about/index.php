<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'About Crawford Roofing & Gutters | Second-Generation Roofers | Omaha, NE';
$pageDescription = 'Crawford Roofing & Gutters LLC is a second-generation roofing and gutter contractor in Omaha, NE with 33+ years of experience. Meet the Crawford team and learn our story.';
$canonicalUrl    = $siteUrl . '/about/';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg';
$currentPage     = 'about';
$heroImagePreload = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg';
$cssVersion      = '4';

$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/';
$photos = [
    'hero'    => $imgBase . '1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg',
    'team'    => $imgBase . '1779134252517-ip8hel-roofing-contractors-milford-1024x778.jpg',
    'work1'   => $imgBase . '1779134048805-bkz97m-dff36b_381e49a0e2c841a4a0db9e9691fb2386_mv2.jpg',
    'work2'   => $imgBase . '1779134049337-o7oznv-dff36b_a35b2df95a814ec49799d0169f3a87da_mv2.jpg',
    'work3'   => $imgBase . '1779134049612-5tesv4-dff36b_dd0309b57b904f9696a5470bfb110093_mv2.jpg',
    'work4'   => $imgBase . '1779134251810-z2x055-IMG_95F75D69640F-1.jpeg',
    'work5'   => $imgBase . '1779134252049-ez0nhr-IMG_096815F71F3A-1.jpeg',
    'work6'   => $imgBase . '1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg',
];

// Schema
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',  'url' => $siteUrl . '/'],
    ['name' => 'About', 'url' => $siteUrl . '/about/'],
], $siteUrl);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<!-- Schema: BreadcrumbList -->
<script type="application/ld+json">
<?php echo $breadcrumbSchema; ?>
</script>

<style>
/* ═══════════════════════════════════════════════════════════
   Crawford Roofing & Gutters — About Page Custom Styles
   Premium Tier — Phase 5
   ═══════════════════════════════════════════════════════════ */

/* ── About Hero ──────────────────────────────────────────── */
.about-hero {
  position: relative;
  min-height: 65vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background-image: url('<?php echo $photos['hero']; ?>');
  background-size: cover;
  background-position: center 30%;
  padding: calc(var(--nav-height) + var(--space-12)) var(--space-4) var(--space-12);
}
.about-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    180deg,
    rgba(var(--color-primary-rgb), 0.92) 0%,
    rgba(var(--color-primary-rgb), 0.78) 50%,
    rgba(var(--color-secondary-rgb), 0.85) 100%
  );
  z-index: 1;
}
.about-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.05'/%3E%3C/svg%3E");
  opacity: 0.12;
  z-index: 1;
}
.about-hero .container {
  position: relative;
  z-index: 2;
}
.about-hero .hero-eyebrow {
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
.about-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 4rem);
  font-weight: 900;
  line-height: 1.05;
  letter-spacing: -0.03em;
  margin-bottom: var(--space-6);
  max-width: 700px;
  margin-left: auto;
  margin-right: auto;
}
.about-hero h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.6);
}
.about-hero-subtitle {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  max-width: 600px;
  margin: 0 auto;
}

/* ── SVG Dividers ────────────────────────────────────────── */
.divider-wave {
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 100%;
  line-height: 0;
  z-index: 3;
}
.divider-wave svg {
  display: block;
  width: 100%;
  height: 60px;
}
.divider-angle-top {
  position: absolute;
  top: -1px;
  left: 0;
  width: 100%;
  line-height: 0;
  z-index: 3;
}
.divider-angle-top svg {
  display: block;
  width: 100%;
  height: 50px;
}

/* ── Story Section (Split Asymmetric) ────────────────────── */
.about-story {
  background: var(--color-bg);
  padding: clamp(5rem, 12vh, 9rem) 0;
}
.about-story-grid {
  display: grid;
  grid-template-columns: 1.15fr 0.85fr;
  gap: var(--space-12);
  align-items: center;
}
.about-story-text .section-eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--color-accent);
  margin-bottom: var(--space-4);
}
.about-story-text h2 {
  margin-bottom: var(--space-6);
}
.about-story-text h2 .text-accent {
  font-family: var(--font-accent);
  font-style: italic;
  color: var(--color-accent);
  font-weight: 600;
}
.about-story-text p {
  color: var(--color-text);
  line-height: 1.75;
  max-width: 58ch;
}
.about-story-text p + p {
  margin-top: var(--space-4);
}
.about-story-visual {
  position: relative;
}
.about-story-visual .image-frame {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.about-story-visual .image-frame img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  aspect-ratio: 4 / 5;
}
.about-story-visual .floating-badge {
  position: absolute;
  bottom: -20px;
  left: -20px;
  background: var(--color-accent);
  color: var(--color-white);
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  text-align: center;
  box-shadow: var(--shadow-lg);
  z-index: 2;
}
.about-story-visual .floating-badge .badge-number {
  display: block;
  font-family: var(--font-heading);
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 900;
  line-height: 1;
}
.about-story-visual .floating-badge .badge-label {
  font-size: var(--font-size-sm);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
  opacity: 0.9;
}
.about-story-visual .accent-corner {
  position: absolute;
  top: -12px;
  right: -12px;
  width: 80px;
  height: 80px;
  border: 3px solid rgba(var(--color-accent-rgb), 0.2);
  border-radius: var(--radius-md);
  z-index: 0;
}

/* ── Values Section ──────────────────────────────────────── */
.about-values {
  background: var(--color-bg-alt);
  position: relative;
  padding: clamp(5rem, 12vh, 9rem) 0;
}
.about-values .section-header {
  text-align: center;
  margin-bottom: var(--space-12);
}
.about-values .section-header .section-eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--color-accent);
  margin-bottom: var(--space-4);
}
.about-values .section-header h2 .text-accent {
  font-family: var(--font-accent);
  font-style: italic;
  color: var(--color-accent);
  font-weight: 600;
}
.about-values .section-header .section-subtitle {
  font-family: var(--font-accent);
  font-style: italic;
  color: var(--color-text-light);
  font-size: var(--font-size-lg);
  margin-top: var(--space-2);
}
.values-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-8);
}
.value-card {
  padding: var(--space-8);
  border-radius: var(--radius-lg);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  position: relative;
  overflow: hidden;
}
.value-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.value-card .value-icon {
  width: 56px;
  height: 56px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-5);
  color: var(--color-accent);
}
.value-card .value-icon i,
.value-card .value-icon svg {
  width: 26px;
  height: 26px;
}
.value-card h3 {
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-3);
  color: var(--color-primary);
}
.value-card p {
  color: var(--color-text-light);
  font-size: var(--font-size-base);
  line-height: 1.65;
  margin-bottom: 0;
}

/* ── Timeline Section ────────────────────────────────────── */
.about-timeline {
  background: var(--color-bg);
  position: relative;
  padding: clamp(5rem, 12vh, 9rem) 0;
}
.about-timeline .section-header {
  text-align: center;
  margin-bottom: var(--space-12);
}
.about-timeline .section-header .section-eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--color-accent);
  margin-bottom: var(--space-4);
}
.about-timeline .section-header h2 .text-accent {
  font-family: var(--font-accent);
  font-style: italic;
  color: var(--color-accent);
  font-weight: 600;
}
.timeline-track {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}
.timeline-track::before {
  content: '';
  position: absolute;
  top: 0;
  left: 28px;
  width: 3px;
  height: 100%;
  background: linear-gradient(180deg, var(--color-accent), rgba(var(--color-accent-rgb), 0.15));
  border-radius: 3px;
}
.timeline-item {
  position: relative;
  padding-left: 72px;
  padding-bottom: var(--space-10);
}
.timeline-item:last-child {
  padding-bottom: 0;
}
.timeline-dot {
  position: absolute;
  top: 4px;
  left: 16px;
  width: 27px;
  height: 27px;
  border-radius: 50%;
  background: var(--color-accent);
  border: 4px solid var(--color-bg);
  box-shadow: 0 0 0 3px rgba(var(--color-accent-rgb), 0.25);
  z-index: 1;
}
.timeline-year {
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 800;
  color: var(--color-accent);
  letter-spacing: 1px;
  margin-bottom: var(--space-1);
}
.timeline-item h3 {
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin-bottom: var(--space-2);
}
.timeline-item p {
  color: var(--color-text-light);
  line-height: 1.65;
  max-width: 60ch;
  margin-bottom: 0;
}

/* ── Team Section ──────────────────────────────────────────── */
.about-team {
  background: var(--color-primary);
  color: var(--color-white);
  position: relative;
  padding: clamp(5rem, 12vh, 9rem) 0;
}
.about-team::before {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.05'/%3E%3C/svg%3E");
  opacity: 0.1;
}
.about-team .container {
  position: relative;
  z-index: 1;
}
.team-header {
  text-align: center;
  margin-bottom: var(--space-12);
}
.team-header .section-eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.6);
  margin-bottom: var(--space-4);
}
.team-header h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
}
.team-header h2 .text-accent {
  font-family: var(--font-accent);
  font-style: italic;
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.6);
  font-weight: 600;
}
.team-header p {
  color: rgba(255, 255, 255, 0.85);
  line-height: 1.75;
  max-width: 60ch;
  margin: 0 auto;
}

/* Individual team member profile */
.team-profile {
  display: grid;
  grid-template-columns: 1fr 1.4fr;
  gap: var(--space-10);
  align-items: center;
  padding: var(--space-8) 0;
}
.team-profile--reverse {
  grid-template-columns: 1.4fr 1fr;
}
.team-profile + .team-profile {
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  margin-top: var(--space-4);
}

.team-profile__photo {
  position: relative;
}
.team-profile__photo .image-frame {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);
  aspect-ratio: 4 / 3;
}
.team-profile__photo .image-frame img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center top;
}
.team-profile__photo .team-badge {
  position: absolute;
  bottom: -12px;
  right: -12px;
  width: 56px;
  height: 56px;
  border-radius: 50%;
  background: var(--color-accent);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-white);
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.3);
}
.team-profile__photo .team-badge i,
.team-profile__photo .team-badge svg {
  width: 24px;
  height: 24px;
}

.team-profile__info h3 {
  color: var(--color-white);
  font-size: clamp(1.5rem, 2.5vw, 2rem);
  margin-bottom: var(--space-2);
}
.team-profile__info .role {
  font-family: var(--font-accent);
  font-style: italic;
  font-size: var(--font-size-lg);
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.6);
  margin-bottom: var(--space-5);
  display: block;
}
.team-profile__info p {
  color: rgba(255, 255, 255, 0.85);
  line-height: 1.75;
  max-width: 55ch;
  margin-bottom: var(--space-4);
}
.team-profile__info p:last-child {
  margin-bottom: 0;
}

/* ── Stats Banner ────────────────────────────────────────── */
.about-stats {
  background: var(--color-bg-alt);
  padding: clamp(3rem, 8vh, 5rem) 0;
  position: relative;
}
.stats-row {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-8);
  text-align: center;
}
.stat-item {
  position: relative;
}
.stat-item .stat-number {
  font-family: var(--font-heading);
  font-size: clamp(2.5rem, 5vw, 3.5rem);
  font-weight: 900;
  color: var(--color-primary);
  line-height: 1;
  margin-bottom: var(--space-2);
}
.stat-item .stat-suffix {
  font-family: var(--font-accent);
  font-style: italic;
  color: var(--color-accent);
}
.stat-item .stat-label {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* ── CTA Section ─────────────────────────────────────────── */
.about-cta {
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  text-align: center;
  position: relative;
  padding: clamp(5rem, 12vh, 8rem) 0;
}
.about-cta::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.05'/%3E%3C/svg%3E");
  opacity: 0.1;
}
.about-cta .container {
  position: relative;
  z-index: 1;
}
.about-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
}
.about-cta h2 .text-accent {
  font-family: var(--font-accent);
  font-style: italic;
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.6);
  font-weight: 600;
}
.about-cta p {
  color: rgba(255, 255, 255, 0.85);
  font-size: var(--font-size-lg);
  max-width: 600px;
  margin: 0 auto var(--space-8);
}
.about-cta .cta-actions {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}
.about-cta .btn {
  padding: var(--space-4) var(--space-8);
  font-size: var(--font-size-base);
}

/* ── Gallery Strip ───────────────────────────────────────── */
.about-gallery {
  background: var(--color-bg);
  padding: clamp(4rem, 8vh, 6rem) 0;
}
.about-gallery .section-header {
  text-align: center;
  margin-bottom: var(--space-8);
}
.about-gallery .section-header .section-eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--color-accent);
  margin-bottom: var(--space-4);
}
.about-gallery .section-header h2 .text-accent {
  font-family: var(--font-accent);
  font-style: italic;
  color: var(--color-accent);
  font-weight: 600;
}
.gallery-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-4);
}
.gallery-item {
  border-radius: var(--radius-md);
  overflow: hidden;
  aspect-ratio: 4 / 3;
  position: relative;
}
.gallery-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform var(--transition-slow);
}
.gallery-item:hover img {
  transform: scale(1.05);
}

/* ── Responsive ──────────────────────────────────────────── */
@media (max-width: 1024px) {
  .about-story-grid {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .about-story-visual {
    max-width: 500px;
    margin: 0 auto;
  }
  .team-profile,
  .team-profile--reverse {
    grid-template-columns: 1fr;
    gap: var(--space-6);
  }
  .team-profile__photo {
    max-width: 400px;
    margin: 0 auto;
  }
  .values-grid {
    grid-template-columns: 1fr 1fr;
  }
  .stats-row {
    grid-template-columns: repeat(2, 1fr);
    gap: var(--space-6);
  }
}
@media (max-width: 600px) {
  .values-grid {
    grid-template-columns: 1fr;
  }
  .stats-row {
    grid-template-columns: 1fr 1fr;
  }
  .gallery-grid {
    grid-template-columns: 1fr 1fr;
  }
  .about-story-visual .floating-badge {
    bottom: -10px;
    left: -10px;
    padding: var(--space-4);
  }
  .about-hero {
    min-height: 50vh;
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════ HERO ════════ -->
<section class="about-hero hero">
  <div class="container">
    <span class="hero-eyebrow"><i data-lucide="shield-check" aria-hidden="true"></i> Second-Generation Contractors</span>
    <h1>Built on Family. <span class="accent-word">Proven</span> by Omaha Storms.</h1>
    <p class="about-hero-subtitle">Crawford Roofing &amp; Gutters LLC has protected Omaha homes and businesses for over <?php echo $yearsInBusiness; ?> years — because roofing isn't just our trade, it's our family legacy.</p>
  </div>
  <div class="divider-wave">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,60 L0,20 Q360,0 720,20 Q1080,40 1440,20 L1440,60 Z"/>
    </svg>
  </div>
</section>

<!-- ════════ OUR STORY ════════ -->
<section class="about-story" aria-label="Our story">
  <div class="container">
    <div class="about-story-grid">
      <div class="about-story-text reveal-left">
        <span class="section-eyebrow">Our Story</span>
        <h2>A <span class="text-accent">Family Trade</span> Passed Down Through Generations</h2>
        <p>Crawford Roofing &amp; Gutters LLC is a full-service roofing and gutter contractor led by Raymond Crawford, a second-generation contractor with over 21 years of hands-on construction experience. Raymond grew up watching his father work rooftops across Nebraska — learning how to read weather damage, select the right materials, and treat every home like it belonged to family.</p>
        <p>That foundation turned into a business built on honest assessments, transparent pricing, and craftsmanship that holds up against Omaha's punishing hail seasons and freeze-thaw cycles. Today, the company handles everything from emergency leak repairs and full roof replacements to seamless gutter installations and commercial flat-roof systems.</p>
        <p>Crawford Roofing &amp; Gutters LLC is a licensed <?php echo $entityType; ?> based at <?php echo htmlspecialchars($address['street']); ?> in <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?>, serving residential and commercial clients across the greater Omaha metro area.</p>
      </div>
      <div class="about-story-visual reveal-right">
        <div class="accent-corner" aria-hidden="true"></div>
        <div class="image-frame">
          <img src="<?php echo $photos['work1']; ?>" alt="Crawford Roofing crew completing a residential roof installation in Omaha, Nebraska" width="600" height="750" loading="lazy">
        </div>
        <div class="floating-badge">
          <span class="badge-number" data-counter data-target="<?php echo $yearsInBusiness; ?>">0</span>
          <span class="badge-label">Years</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════ VALUES ════════ -->
<section class="about-values" aria-label="Our values">
  <div class="divider-angle-top">
    <svg viewBox="0 0 1440 50" preserveAspectRatio="none" fill="var(--color-bg)">
      <polygon points="0,50 1440,0 1440,50"/>
    </svg>
  </div>
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-eyebrow">What Drives Us</span>
      <h2>The <span class="text-accent">Principles</span> Behind Every Project</h2>
      <p class="section-subtitle">Craftsmanship you can count on</p>
    </div>
    <div class="values-grid">
      <article class="value-card card-tint-1 reveal-up reveal-delay-1">
        <div class="value-icon"><i data-lucide="shield-check" aria-hidden="true"></i></div>
        <h3>Honest Assessments</h3>
        <p>We never recommend a full replacement when a repair will do the job. Every inspection includes photo documentation and a written report — no pressure, no upselling.</p>
      </article>
      <article class="value-card card-tint-2 reveal-up reveal-delay-2">
        <div class="value-icon"><i data-lucide="hammer" aria-hidden="true"></i></div>
        <h3>Second-Generation Skill</h3>
        <p>Raymond Crawford learned roofing from his father before it became his livelihood. That generational knowledge means we spot problems others miss and build solutions that last.</p>
      </article>
      <article class="value-card card-tint-3 reveal-up reveal-delay-3">
        <div class="value-icon"><i data-lucide="clock" aria-hidden="true"></i></div>
        <h3>Responsive Service</h3>
        <p>24-hour emergency repairs, same-week scheduling, and clear communication from start to finish. When a storm hits Omaha, our crews are already mobilizing.</p>
      </article>
      <article class="value-card card-tint-1 reveal-up reveal-delay-1">
        <div class="value-icon"><i data-lucide="users" aria-hidden="true"></i></div>
        <h3>Residential &amp; Commercial</h3>
        <p>From single-family homes in West Omaha to flat-roof warehouses in Bellevue, our team handles both with the same attention to detail and code compliance.</p>
      </article>
      <article class="value-card card-tint-2 reveal-up reveal-delay-2">
        <div class="value-icon"><i data-lucide="file-text" aria-hidden="true"></i></div>
        <h3>Insurance Expertise</h3>
        <p>We work directly with adjusters from State Farm, Farmers, USAA, and other Nebraska carriers — documenting damage and filing supplements so your claim moves forward.</p>
      </article>
      <article class="value-card card-tint-3 reveal-up reveal-delay-3">
        <div class="value-icon"><i data-lucide="wallet" aria-hidden="true"></i></div>
        <h3>Transparent Pricing</h3>
        <p>Line-item estimates before work begins. No hidden fees, no surprise charges. Financing options available for larger projects like full roof replacements.</p>
      </article>
    </div>
  </div>
</section>

<!-- ════════ TIMELINE ════════ -->
<section class="about-timeline" aria-label="Company milestones">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-eyebrow">Milestones</span>
      <h2><?php echo $yearsInBusiness; ?> Years of <span class="text-accent">Protecting</span> Omaha Properties</h2>
    </div>
    <div class="timeline-track">
      <div class="timeline-item reveal-left">
        <div class="timeline-dot"></div>
        <span class="timeline-year">1993</span>
        <h3>Company Founded</h3>
        <p>Crawford Roofing &amp; Gutters LLC opens in Omaha, NE — built on a family tradition of construction craftsmanship passed down from father to son.</p>
      </div>
      <div class="timeline-item reveal-left reveal-delay-1">
        <div class="timeline-dot"></div>
        <span class="timeline-year">2002</span>
        <h3>Commercial Division Launched</h3>
        <p>Expanded into commercial roofing with TPO, EPDM, and modified bitumen systems, serving retail centers and office buildings across the metro.</p>
      </div>
      <div class="timeline-item reveal-left reveal-delay-2">
        <div class="timeline-dot"></div>
        <span class="timeline-year">2011</span>
        <h3>Full Gutter Service Added</h3>
        <p>Introduced complete gutter services — installation, repair, replacement, and seamless systems — giving clients one contractor for the entire building envelope.</p>
      </div>
      <div class="timeline-item reveal-left reveal-delay-3">
        <div class="timeline-dot"></div>
        <span class="timeline-year">2019</span>
        <h3>24-Hour Emergency Service</h3>
        <p>Launched round-the-clock emergency response for storm damage and active roof leaks, with tarping crews deployable within 2–4 hours of the call.</p>
      </div>
      <div class="timeline-item reveal-left reveal-delay-4">
        <div class="timeline-dot"></div>
        <span class="timeline-year">Today</span>
        <h3><?php echo $yearsInBusiness; ?>+ Years and Growing</h3>
        <p>Serving residential and commercial clients across the greater Omaha area with a full portfolio of roofing and gutter services, competitive pricing, and financing options.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════════ TEAM ════════ -->
<section class="about-team" aria-label="Meet the team">
  <div class="container">

    <div class="team-header reveal-up">
      <span class="section-eyebrow">The Team</span>
      <h2>Meet the People <span class="text-accent">Behind</span> Your Roof</h2>
      <p>Every Crawford project is backed by experienced professionals who take ownership of the work — from the initial inspection through final cleanup.</p>
    </div>

    <!-- Raymond Crawford — Owner -->
    <div class="team-profile reveal-left">
      <div class="team-profile__photo">
        <div class="image-frame">
          <img src="<?php echo $imgBase; ?>1779134049612-5tesv4-dff36b_dd0309b57b904f9696a5470bfb110093_mv2.jpg" alt="Raymond Crawford, CEO and Founder of Crawford Roofing &amp; Gutters LLC" width="700" height="525" loading="lazy">
        </div>
        <div class="team-badge"><i data-lucide="hard-hat" aria-hidden="true"></i></div>
      </div>
      <div class="team-profile__info">
        <h3>Raymond Crawford</h3>
        <span class="role">CEO &amp; Founder</span>
        <p>Raymond is a second-generation contractor with over 21 years of hands-on construction experience in the Omaha metro. He grew up on job sites alongside his father, learning roofing and gutter work from the ground up before founding Crawford Roofing &amp; Gutters LLC.</p>
        <p>Today, Raymond leads every major project personally — from the initial on-site assessment through the final walkthrough. He inspects every roof before sign-off, ensuring Crawford's <?php echo $yearsInBusiness; ?>-year reputation stays on every shingle they install.</p>
      </div>
    </div>

    <!-- Joe — Head of Sales -->
    <div class="team-profile team-profile--reverse reveal-right">
      <div class="team-profile__info">
        <h3>Joe</h3>
        <span class="role">Head of Sales &amp; Project Manager</span>
        <p>With nearly a decade in residential and commercial roofing across the Omaha metro, Joe brings the kind of field-tested expertise that homeowners rely on. He handles everything from the first phone call to the final walkthrough — roof assessments, project estimation, material selection, and insurance coordination.</p>
        <p>Joe is typically the first Crawford team member you'll meet. His straightforward approach means you get an honest evaluation, a clear written estimate, and a timeline you can count on — no pressure, no upselling.</p>
      </div>
      <div class="team-profile__photo">
        <div class="image-frame">
          <img src="<?php echo $imgBase; ?>1779134048805-bkz97m-dff36b_381e49a0e2c841a4a0db9e9691fb2386_mv2.jpg" alt="Joe, Head of Sales and Project Manager at Crawford Roofing &amp; Gutters LLC" width="700" height="525" loading="lazy">
        </div>
        <div class="team-badge"><i data-lucide="clipboard-list" aria-hidden="true"></i></div>
      </div>
    </div>

  </div>
</section>

<!-- ════════ STATS ════════ -->
<section class="about-stats" aria-label="Company statistics">
  <div class="container">
    <div class="stats-row">
      <div class="stat-item reveal-up">
        <div class="stat-number"><span data-counter data-target="<?php echo $yearsInBusiness; ?>">0</span><span class="stat-suffix">+</span></div>
        <div class="stat-label">Years in Business</div>
      </div>
      <div class="stat-item reveal-up reveal-delay-1">
        <div class="stat-number"><span data-counter data-target="24">0</span><span class="stat-suffix">hr</span></div>
        <div class="stat-label">Emergency Response</div>
      </div>
      <div class="stat-item reveal-up reveal-delay-2">
        <div class="stat-number"><span data-counter data-target="9">0</span><span class="stat-suffix">+</span></div>
        <div class="stat-label">Service Offerings</div>
      </div>
      <div class="stat-item reveal-up reveal-delay-3">
        <div class="stat-number"><span data-counter data-target="100">0</span><span class="stat-suffix">%</span></div>
        <div class="stat-label">Free Estimates</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════ GALLERY ════════ -->
<section class="about-gallery" aria-label="Project gallery">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-eyebrow">Our Work</span>
      <h2>Recent <span class="text-accent">Projects</span> Across Omaha</h2>
    </div>
    <div class="gallery-grid">
      <div class="gallery-item reveal-scale reveal-delay-1">
        <img src="<?php echo $photos['work2']; ?>" alt="Completed residential roof replacement by Crawford Roofing in Omaha" width="600" height="450" loading="lazy">
      </div>
      <div class="gallery-item reveal-scale reveal-delay-2">
        <img src="<?php echo $photos['work3']; ?>" alt="Gutter installation project on an Omaha home by Crawford Roofing" width="600" height="450" loading="lazy">
      </div>
      <div class="gallery-item reveal-scale reveal-delay-3">
        <img src="<?php echo $photos['work4']; ?>" alt="Crawford Roofing team performing roof inspection in Omaha, NE" width="600" height="450" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ════════ CTA ════════ -->
<section class="about-cta" aria-label="Get started">
  <div class="container">
    <h2 class="reveal-up">Ready to <span class="text-accent">Protect</span> Your Property?</h2>
    <p class="reveal-up">Get a free, no-obligation estimate from Omaha's second-generation roofing experts. Same-week scheduling available.</p>
    <div class="cta-actions reveal-up reveal-delay-1">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> Call <?php echo formatPhone($phone); ?>
      </a>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
