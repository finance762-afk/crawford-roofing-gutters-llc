<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ───────────────────────────────────────────────
$pageTitle       = 'Roofing & Gutter Services in Omaha, NE | ' . $siteName;
$pageDescription = 'Crawford Roofing & Gutters LLC offers 9 professional roofing and gutter services in Omaha, NE — roof repair, replacement, new installation, gutter cleaning, repair, and more. ' . $yearsInBusiness . '+ years experience. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252517-ip8hel-roofing-contractors-milford-1024x778.jpg';
$currentPage     = 'services';
$heroImagePreload = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg';
$cssVersion      = '3';

// ── Image Library ────────────────────────────────────────────
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/photos/';
$heroImg = $imgBase . '1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg';

$servicePhotos = [
    'gutter-addition'       => $imgBase . '1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg',
    'gutter-cleaning'       => $imgBase . '1779134049337-o7oznv-dff36b_a35b2df95a814ec49799d0169f3a87da_mv2.jpg',
    'gutter-installation'   => $imgBase . '1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg',
    'gutter-repair'         => $imgBase . '1779134251810-z2x055-IMG_95F75D69640F-1.jpeg',
    'gutter-replacement'    => $imgBase . '1779134252049-ez0nhr-IMG_096815F71F3A-1.jpeg',
    'roof-inspection'       => $imgBase . '1779134252281-l5wz54-IMG_F8851A661ED4-1.jpeg',
    'roof-repair'           => $imgBase . '1779134251473-n6gy0x-IMG_81CEF274C56D-1.jpeg',
    'roof-replacement'      => $imgBase . '1779134049337-o7oznv-dff36b_a35b2df95a814ec49799d0169f3a87da_mv2.jpg',
    'new-roof-installation' => $imgBase . '1779134252517-ip8hel-roofing-contractors-milford-1024x778.jpg',
];

$serviceIcons = [
    'gutter-addition'       => 'ruler',
    'gutter-cleaning'       => 'droplets',
    'gutter-installation'   => 'filter',
    'gutter-repair'         => 'wrench',
    'gutter-replacement'    => 'sparkles',
    'roof-inspection'       => 'search',
    'roof-repair'           => 'shield',
    'roof-replacement'      => 'home',
    'new-roof-installation' => 'hammer',
];

$serviceBullets = [
    'gutter-addition'       => ['Protects foundation from erosion', 'Custom-fit to your roofline', 'Multiple material options'],
    'gutter-cleaning'       => ['Prevents ice dams in winter', 'Removes debris and blockages', 'Extends gutter lifespan'],
    'gutter-installation'   => ['Seamless and sectional options', 'Handles heavy Omaha rainfall', 'Professional slope calibration'],
    'gutter-repair'         => ['Fixes leaks and sagging fast', 'Storm damage restoration', 'Prevents interior water damage'],
    'gutter-replacement'    => ['Full system upgrade available', 'Upgraded downspout routing', 'Color-matched to your home'],
    'roof-inspection'       => ['Detailed written report included', 'Storm and hail assessment', 'Insurance documentation ready'],
    'roof-repair'           => ['24-hour emergency response', 'Leak detection and patching', 'Shingle and flashing repair'],
    'roof-replacement'      => ['Asphalt, metal, and TPO systems', 'Full tear-off and re-deck', 'Manufacturer warranty included'],
    'new-roof-installation' => ['Engineered for Nebraska weather', 'Residential and commercial', 'Financing options available'],
];

// ── Schema ───────────────────────────────────────────────────
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => $siteUrl . '/'],
    ['name' => 'Services', 'url' => $siteUrl . '/services/'],
], $siteUrl);
$schemaMarkup = $breadcrumbSchema;
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<?php if (!empty($schemaMarkup)): ?>
<script type="application/ld+json">
<?php echo $schemaMarkup; ?>
</script>
<?php endif; ?>

<style>
/* ═══════════════════════════════════════════════════════════
   Services Listing — Page-Specific Styles
   Premium Tier — Phase 4
   ═══════════════════════════════════════════════════════════ */

/* ── Hero — Compact Services Hub ─────────────────────────── */
.hero--services {
  position: relative;
  min-height: 50vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  overflow: hidden;
}
.hero--services::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    160deg,
    rgba(var(--color-primary-rgb), 0.93) 0%,
    rgba(var(--color-primary-rgb), 0.82) 50%,
    rgba(var(--color-secondary-rgb), 0.75) 100%
  );
  z-index: 1;
}
.hero--services::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.05'/%3E%3C/svg%3E");
  opacity: 0.12;
  z-index: 1;
}
.hero--services .container {
  position: relative;
  z-index: 2;
}
.hero--services h1 {
  color: var(--color-white);
  font-size: clamp(2rem, 4vw, 3.5rem);
  margin-bottom: var(--space-4);
}
.hero--services h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.6);
}
.hero--services .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  max-width: 700px;
  margin: 0 auto var(--space-6);
}
.hero--services .breadcrumb {
  display: flex;
  justify-content: center;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
}
.hero--services .breadcrumb a {
  color: rgba(255, 255, 255, 0.7);
  transition: color var(--transition-fast);
}
.hero--services .breadcrumb a:hover { color: var(--color-white); }
.hero--services .breadcrumb-sep { color: rgba(255, 255, 255, 0.4); }
.hero--services .breadcrumb-current { color: rgba(255, 255, 255, 0.95); font-weight: 600; }

/* ── Services Grid Section ───────────────────────────────── */
.services-listing-section {
  background: var(--color-bg-alt);
  position: relative;
}
.services-listing-section .divider-wave-top {
  position: absolute;
  top: -1px;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.services-listing-section .divider-wave-top svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 60px;
}

/* ── Roofing vs Gutter Split Headers ─────────────────────── */
.service-group-header {
  margin-bottom: var(--space-8);
  padding-bottom: var(--space-4);
  border-bottom: 2px solid rgba(var(--color-accent-rgb), 0.15);
}
.service-group-header h2 {
  margin-bottom: var(--space-3);
}
.service-group-header .answer-block {
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: var(--content-width);
}

/* ── CTA Banner ──────────────────────────────────────────── */
.services-cta-banner {
  background: var(--color-primary);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.services-cta-banner::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(var(--color-accent-rgb), 0.2) 0%, transparent 60%);
  pointer-events: none;
}
.services-cta-banner .container {
  position: relative;
  z-index: 1;
}
.services-cta-banner h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
}
.services-cta-banner .answer-block {
  color: rgba(255, 255, 255, 0.85);
  max-width: 600px;
  margin: 0 auto var(--space-8);
  font-size: var(--font-size-lg);
}
.services-cta-banner .btn {
  padding: var(--space-4) var(--space-10);
}

/* ── Floating Decorative ─────────────────────────────────── */
.services-listing-section .floating-accent {
  position: absolute;
  width: 250px;
  height: 250px;
  border-radius: 40% 60% 70% 30% / 40% 30% 70% 60%;
  background: rgba(var(--color-accent-rgb), 0.04);
  pointer-events: none;
  z-index: 0;
}
.services-listing-section .floating-accent--1 {
  top: 5%;
  right: -80px;
  animation: float-bob 10s ease-in-out infinite;
}
.services-listing-section .floating-accent--2 {
  bottom: 10%;
  left: -100px;
  animation: float-bob 14s ease-in-out infinite reverse;
}

@keyframes float-bob {
  0%, 100% { transform: translateY(0) rotate(0deg); }
  50% { transform: translateY(-20px) rotate(3deg); }
}

/* ── Responsive ──────────────────────────────────────────── */
@media (max-width: 768px) {
  .hero--services { min-height: 40vh; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══════════════════════════════════════════════════════════
     HERO — Services Hub
     ═══════════════════════════════════════════════════════════ -->
<section class="hero--services" style="background-image: url('<?php echo htmlspecialchars($heroImg); ?>');" aria-label="Services overview">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <span class="breadcrumb-current">Services</span>
    </nav>
    <h1>Omaha <span class="accent-word">Roofing &amp; Gutter</span> Services</h1>
    <p class="hero-answer">
      Crawford Roofing &amp; Gutters LLC is a licensed Nebraska roofing contractor serving the greater Omaha metro area.
      We offer 9 specialized roofing and gutter services for residential and commercial properties — from emergency
      roof repairs to complete gutter system installations — backed by <?php echo $yearsInBusiness; ?>+ years of
      second-generation expertise.
    </p>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     ROOFING SERVICES
     ═══════════════════════════════════════════════════════════ -->
<section class="services-listing-section" aria-label="Roofing and gutter services listing">
  <div class="divider-wave-top" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none">
      <path d="M0,60 C200,0 400,0 600,30 C800,60 1000,60 1200,0 L1200,0 L0,0 Z" fill="var(--color-bg)"></path>
    </svg>
  </div>

  <div class="floating-accent floating-accent--1" aria-hidden="true"></div>
  <div class="floating-accent floating-accent--2" aria-hidden="true"></div>

  <div class="container">

    <!-- Roofing Group -->
    <div class="service-group-header reveal-up">
      <span class="eyebrow-label">Roofing</span>
      <h2>What <span class="text-accent">Roofing Services</span> Does Crawford Offer in Omaha?</h2>
      <p class="answer-block">
        Crawford Roofing provides complete roof repair, replacement, new installation, and inspection services
        for residential and commercial properties in Omaha, NE. Whether you need emergency storm damage repair
        or a full re-roof with manufacturer-backed warranties, our second-generation team delivers lasting results.
      </p>
    </div>

    <div class="services-grid" style="margin-bottom: var(--space-16);">
      <?php
      $roofingServices = array_filter($services, fn($s) => strpos(strtolower($s['name']), 'roof') !== false);
      $idx = 0;
      foreach ($roofingServices as $service):
        $tint = ($idx % 3) + 1;
        $delay = ($idx % 3) + 1;
        $photo = $servicePhotos[$service['slug']] ?? '';
        $icon = $serviceIcons[$service['slug']] ?? 'check-circle';
        $bullets = $serviceBullets[$service['slug']] ?? ['Professional service', 'Quality materials', 'Free estimates'];
        $idx++;
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

    <!-- Gutter Group -->
    <div class="service-group-header reveal-up">
      <span class="eyebrow-label">Gutters</span>
      <h2>What <span class="text-accent">Gutter Services</span> Are Available in Omaha?</h2>
      <p class="answer-block">
        Crawford Roofing &amp; Gutters handles every aspect of gutter work — from adding new gutter systems
        to cleaning, repair, and full replacement. We install seamless and sectional gutters in aluminum, copper,
        and steel, custom-fit to your roofline for maximum water management and foundation protection.
      </p>
    </div>

    <div class="services-grid">
      <?php
      $gutterServices = array_filter($services, fn($s) => strpos(strtolower($s['name']), 'gutter') !== false);
      $idx = 0;
      foreach ($gutterServices as $service):
        $tint = ($idx % 3) + 1;
        $delay = ($idx % 3) + 1;
        $photo = $servicePhotos[$service['slug']] ?? '';
        $icon = $serviceIcons[$service['slug']] ?? 'check-circle';
        $bullets = $serviceBullets[$service['slug']] ?? ['Professional service', 'Quality materials', 'Free estimates'];
        $idx++;
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

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     CTA BANNER
     ═══════════════════════════════════════════════════════════ -->
<section class="services-cta-banner" aria-label="Get a free estimate">
  <div class="container">
    <h2 class="reveal-up">Need a Roofing or Gutter Estimate in Omaha?</h2>
    <p class="answer-block reveal-up reveal-delay-1">
      Crawford Roofing &amp; Gutters provides free, no-obligation estimates for every service we offer.
      Our team inspects your property, explains the scope of work, and delivers transparent line-item
      pricing — typically within the same visit. Call or fill out the form to get started.
    </p>
    <a href="/contact/" class="btn btn-accent btn-lg reveal-up reveal-delay-2">Get Your Free Estimate</a>
  </div>
</section>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
