<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'Thank You | Crawford Roofing & Gutters LLC | Omaha, NE';
$pageDescription = 'Thank you for contacting Crawford Roofing & Gutters LLC. We will respond to your inquiry within one business day.';
$canonicalUrl    = $siteUrl . '/thank-you/';
$currentPage     = 'thank-you';
$noindex         = true;
$cssVersion      = '4';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════════
   Crawford Roofing & Gutters — Thank You Page Custom Styles
   ═══════════════════════════════════════════════════════════ */
.thankyou-page {
  min-height: 80vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background: var(--color-bg);
  padding: calc(var(--nav-height) + var(--space-8)) var(--space-4) var(--space-8);
}
.thankyou-content {
  max-width: 580px;
}
.thankyou-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background: rgba(16, 185, 129, 0.12);
  color: var(--color-success);
  margin-bottom: var(--space-6);
}
.thankyou-icon i,
.thankyou-icon svg {
  width: 40px;
  height: 40px;
}
.thankyou-content h1 {
  font-size: var(--fs-h2);
  color: var(--color-primary);
  margin-bottom: var(--space-4);
}
.thankyou-content p {
  color: var(--color-text-light);
  font-size: var(--font-size-lg);
  line-height: 1.65;
}
.thankyou-steps {
  text-align: left;
  margin: var(--space-8) 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.thankyou-step {
  display: flex;
  align-items: flex-start;
  gap: var(--space-4);
  padding: var(--space-4);
  background: var(--color-bg-alt);
  border-radius: var(--radius-md);
  border: 1px solid var(--color-border);
}
.thankyou-step-number {
  flex-shrink: 0;
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: var(--color-accent);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 800;
  display: flex;
  align-items: center;
  justify-content: center;
}
.thankyou-step-text h3 {
  font-size: var(--font-size-base);
  color: var(--color-primary);
  margin-bottom: var(--space-1);
}
.thankyou-step-text p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  margin-bottom: 0;
}
.thankyou-actions {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<section class="thankyou-page" aria-label="Thank you">
  <div class="thankyou-content">
    <div class="thankyou-icon"><i data-lucide="check-circle" aria-hidden="true"></i></div>
    <h1>Thank You!</h1>
    <p>Your message has been received. A member of our team will reach out within one business day to discuss your project.</p>

    <div class="thankyou-steps">
      <div class="thankyou-step">
        <div class="thankyou-step-number">1</div>
        <div class="thankyou-step-text">
          <h3>We Review Your Request</h3>
          <p>Our team reviews your project details and assigns a project manager.</p>
        </div>
      </div>
      <div class="thankyou-step">
        <div class="thankyou-step-number">2</div>
        <div class="thankyou-step-text">
          <h3>We Contact You</h3>
          <p>Expect a call or email within 1 business day to schedule your free on-site inspection.</p>
        </div>
      </div>
      <div class="thankyou-step">
        <div class="thankyou-step-number">3</div>
        <div class="thankyou-step-text">
          <h3>Free On-Site Estimate</h3>
          <p>A project manager visits your property, assesses the work, and provides a detailed written estimate.</p>
        </div>
      </div>
    </div>

    <p>Need immediate help? Call us directly:</p>

    <div class="thankyou-actions">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-accent btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> Call <?php echo formatPhone($phone); ?>
      </a>
      <?php endif; ?>
      <a href="/" class="btn btn-outline btn-lg">Back to Home</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
