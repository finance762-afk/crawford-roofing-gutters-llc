<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'Page Not Found | Crawford Roofing & Gutters LLC | Omaha, NE';
$pageDescription = 'The page you are looking for could not be found. Browse our roofing and gutter services or contact Crawford Roofing & Gutters LLC in Omaha, NE.';
$canonicalUrl    = $siteUrl . '/404';
$currentPage     = '404';
$noindex         = true;
$cssVersion      = '4';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════════
   Crawford Roofing & Gutters — 404 Page Custom Styles
   ═══════════════════════════════════════════════════════════ */
.error-page {
  min-height: 80vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background: var(--color-bg);
  padding: calc(var(--nav-height) + var(--space-8)) var(--space-4) var(--space-8);
}
.error-content {
  max-width: 560px;
}
.error-code {
  font-family: var(--font-heading);
  font-size: clamp(6rem, 15vw, 10rem);
  font-weight: 900;
  line-height: 1;
  color: rgba(var(--color-primary-rgb), 0.08);
  letter-spacing: -0.05em;
  margin-bottom: var(--space-2);
  position: relative;
}
.error-code::after {
  content: '404';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: clamp(3rem, 8vw, 5rem);
  color: var(--color-primary);
  letter-spacing: -0.03em;
}
.error-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 64px;
  height: 64px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.1);
  color: var(--color-accent);
  margin-bottom: var(--space-6);
}
.error-icon i,
.error-icon svg {
  width: 30px;
  height: 30px;
}
.error-content h1 {
  font-size: var(--fs-h2);
  color: var(--color-primary);
  margin-bottom: var(--space-4);
}
.error-content p {
  color: var(--color-text-light);
  font-size: var(--font-size-lg);
  line-height: 1.65;
  margin-bottom: var(--space-8);
}
.error-links {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  margin-bottom: var(--space-8);
  text-align: left;
  max-width: 320px;
  margin-left: auto;
  margin-right: auto;
}
.error-links a {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  padding: var(--space-3) var(--space-4);
  border-radius: var(--radius-md);
  background: var(--color-bg-alt);
  color: var(--color-text);
  font-weight: 500;
  transition: background var(--transition-fast), color var(--transition-fast);
}
.error-links a:hover {
  background: rgba(var(--color-accent-rgb), 0.08);
  color: var(--color-accent);
}
.error-links a i,
.error-links a svg {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
  flex-shrink: 0;
}
.error-actions {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<section class="error-page" aria-label="Page not found">
  <div class="error-content">
    <div class="error-code" aria-hidden="true">404</div>
    <div class="error-icon"><i data-lucide="search-x" aria-hidden="true"></i></div>
    <h1>Page Not Found</h1>
    <p>The page you're looking for may have been moved or no longer exists. Try one of these popular pages instead:</p>

    <div class="error-links">
      <a href="/"><i data-lucide="home" aria-hidden="true"></i> Back to Homepage</a>
      <a href="/services/"><i data-lucide="wrench" aria-hidden="true"></i> View All Services</a>
      <a href="/services/roof-repair/"><i data-lucide="shield" aria-hidden="true"></i> Roof Repair</a>
      <a href="/services/gutter-installation/"><i data-lucide="filter" aria-hidden="true"></i> Gutter Installation</a>
      <a href="/contact/"><i data-lucide="mail" aria-hidden="true"></i> Contact Us</a>
    </div>

    <div class="error-actions">
      <a href="/contact/" class="btn btn-accent">Get a Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline">
        <i data-lucide="phone" aria-hidden="true"></i> Call Us
      </a>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
