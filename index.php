<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = $siteName . ' | Roofing Contractor ' . $address['city'] . ', ' . $address['state'];
$pageDescription = $siteName . ' provides expert roof repair, replacement, and gutter services in ' . $address['city'] . ', ' . $address['state'] . '. ' . $yearsInBusiness . '+ years experience. Free estimates — call today.';
$canonicalUrl    = $siteUrl . '/';
$currentPage     = 'home';
$cssVersion      = '2';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- Phase 2 Test: Minimal homepage placeholder -->
<section class="hero" style="background:var(--color-primary);">
  <div class="hero-content">
    <span class="hero-eyebrow">Licensed Roofing Contractor</span>
    <h1>Roofing &amp; Gutter Experts in <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?></h1>
    <p class="hero-subtitle">Over <?php echo $yearsInBusiness; ?> years of proven craftsmanship protecting Omaha homes and businesses.</p>
    <div class="hero-buttons">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> Call Now
      </a>
      <?php endif; ?>
    </div>
    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="star" aria-hidden="true"></i> 4.9 ★ (87 Reviews)</span>
      <span class="hero-trust-item"><i data-lucide="clock" aria-hidden="true"></i> <?php echo $yearsInBusiness; ?>+ Years Experience</span>
    </div>
  </div>
</section>

<section style="background:var(--color-bg-alt);">
  <div class="container" style="text-align:center;">
    <h2>Phase 2 Complete — Header, Footer &amp; Head Verified</h2>
    <p class="prose-centered">This is a placeholder page to verify the Phase 2 includes (head.php, header.php, footer.php, functions.php) are rendering correctly. Full homepage content will be built in Phase 3.</p>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
