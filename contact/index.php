<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'Contact Crawford Roofing & Gutters | Free Estimates | Omaha, NE';
$pageDescription = 'Contact Crawford Roofing & Gutters LLC for a free roofing or gutter estimate in Omaha, NE. Call us or fill out our online form. Same-week scheduling. 24-hour emergency service.';
$canonicalUrl    = $siteUrl . '/contact/';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/logo/1779133831658-1madaq-dff36b_7f824423317d4c34af5fcee38837267c_mv2.png';
$currentPage     = 'contact';
$cssVersion      = '4';

// Schema
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',    'url' => $siteUrl . '/'],
    ['name' => 'Contact', 'url' => $siteUrl . '/contact/'],
], $siteUrl);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<!-- Schema: BreadcrumbList -->
<script type="application/ld+json">
<?php echo $breadcrumbSchema; ?>
</script>

<style>
/* ═══════════════════════════════════════════════════════════
   Crawford Roofing & Gutters — Contact Page Custom Styles
   Premium Tier — Phase 5
   ═══════════════════════════════════════════════════════════ */

/* ── Contact Hero ────────────────────────────────────────── */
.contact-hero {
  position: relative;
  min-height: 45vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  padding: calc(var(--nav-height) + var(--space-12)) var(--space-4) var(--space-12);
}
.contact-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.05'/%3E%3C/svg%3E");
  opacity: 0.12;
  z-index: 1;
}
.contact-hero .container {
  position: relative;
  z-index: 2;
}
.contact-hero .hero-eyebrow {
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
.contact-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 3.75rem);
  font-weight: 900;
  line-height: 1.05;
  letter-spacing: -0.03em;
  margin-bottom: var(--space-4);
}
.contact-hero h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.6);
}
.contact-hero-sub {
  color: rgba(255, 255, 255, 0.85);
  font-size: var(--font-size-lg);
  max-width: 550px;
  margin: 0 auto;
}

/* ── Divider ─────────────────────────────────────────────── */
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

/* ── Contact Grid ────────────────────────────────────────── */
.contact-main {
  background: var(--color-bg);
  padding: clamp(5rem, 12vh, 9rem) 0;
}
.contact-grid {
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  gap: var(--space-12);
  align-items: flex-start;
}

/* ── Form Card ───────────────────────────────────────────── */
.contact-form-card {
  background: var(--color-bg);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-lg);
  padding: var(--space-8);
  box-shadow: var(--shadow-card);
  position: relative;
  overflow: hidden;
}
.contact-form-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(90deg, var(--color-accent), var(--color-primary));
}
.contact-form-card h2 {
  font-size: var(--fs-h3);
  color: var(--color-primary);
  margin-bottom: var(--space-2);
}
.contact-form-card .form-subtitle {
  color: var(--color-text-light);
  font-size: var(--font-size-base);
  margin-bottom: var(--space-6);
}

/* ── Form Fields (Floating Label) ────────────────────────── */
.form-group {
  position: relative;
  margin-bottom: var(--space-5);
}
.form-group input,
.form-group textarea,
.form-group select {
  width: 100%;
  padding: var(--space-4) var(--space-4) var(--space-2);
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  border: 1.5px solid var(--color-border);
  border-radius: var(--radius-md);
  background: var(--color-bg);
  color: var(--color-text);
  transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
  outline: none;
}
.form-group input:focus,
.form-group textarea:focus,
.form-group select:focus {
  border-color: var(--color-accent);
  box-shadow: 0 0 0 3px rgba(var(--color-accent-rgb), 0.12);
}
.form-group label {
  position: absolute;
  top: 50%;
  left: var(--space-4);
  transform: translateY(-50%);
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  pointer-events: none;
  transition: all var(--transition-fast);
  background: var(--color-bg);
  padding: 0 var(--space-1);
}
.form-group textarea ~ label {
  top: var(--space-4);
  transform: none;
}
.form-group input:focus ~ label,
.form-group input:not(:placeholder-shown) ~ label,
.form-group textarea:focus ~ label,
.form-group textarea:not(:placeholder-shown) ~ label,
.form-group select:focus ~ label,
.form-group select:not([value=""]) ~ label {
  top: -8px;
  font-size: var(--font-size-xs);
  color: var(--color-accent);
  font-weight: 600;
}
/* Select always shows label up */
.form-group select ~ label {
  top: -8px;
  font-size: var(--font-size-xs);
  color: var(--color-accent);
  font-weight: 600;
}
.form-group textarea {
  resize: vertical;
  min-height: 120px;
}
.form-group select {
  cursor: pointer;
  appearance: none;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%236b7280' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right var(--space-4) center;
  padding-right: var(--space-10);
}

/* ── Consent Fieldset ────────────────────────────────────── */
.form-consent-fieldset {
  border: 1px solid var(--color-border);
  border-radius: var(--radius-md);
  padding: var(--space-4) var(--space-5);
  margin: var(--space-6) 0 var(--space-4);
  background: rgba(var(--color-primary-rgb), 0.02);
}
.form-consent-legend {
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  padding: 0 var(--space-2);
  color: var(--color-text-light);
}
.form-consent-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  padding: var(--space-3) 0;
  cursor: pointer;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}
.form-consent-item:last-child {
  border-bottom: none;
}
.consent-checkbox {
  flex-shrink: 0;
  margin-top: 0.2rem;
  width: 18px;
  height: 18px;
  cursor: pointer;
  accent-color: var(--color-accent);
}
.consent-label {
  font-size: var(--font-size-sm);
  line-height: 1.5;
  color: var(--color-text);
}
.consent-label strong {
  font-weight: 600;
}
.consent-label a {
  color: var(--color-accent);
  text-decoration: underline;
}
.required-star {
  color: var(--color-danger);
}
.form-consent-required .consent-label {
  font-weight: 500;
}

/* ── Submit Button ───────────────────────────────────────── */
.contact-form-card .btn-submit {
  width: 100%;
  padding: var(--space-4) var(--space-8);
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 700;
  letter-spacing: 0.5px;
  color: var(--color-white);
  background: var(--color-accent);
  border: none;
  border-radius: var(--radius-md);
  cursor: pointer;
  transition: background var(--transition-fast), transform var(--transition-fast), box-shadow var(--transition-fast);
  box-shadow: 0 4px 12px rgba(var(--color-accent-rgb), 0.3);
}
.contact-form-card .btn-submit:hover {
  background: var(--color-primary);
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(var(--color-primary-rgb), 0.35);
}
.contact-form-card .btn-submit:active {
  transform: translateY(0);
}

/* ── Info Column ─────────────────────────────────────────── */
.contact-info {
  display: flex;
  flex-direction: column;
  gap: var(--space-6);
}
.info-card {
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  background: var(--color-bg-alt);
  border: 1px solid var(--color-border);
}
.info-card h3 {
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin-bottom: var(--space-4);
  display: flex;
  align-items: center;
  gap: var(--space-3);
}
.info-card h3 i,
.info-card h3 svg {
  width: 22px;
  height: 22px;
  color: var(--color-accent);
}
.info-detail {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  margin-bottom: var(--space-4);
}
.info-detail:last-child {
  margin-bottom: 0;
}
.info-detail i,
.info-detail svg {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: 3px;
}
.info-detail span,
.info-detail a {
  font-size: var(--font-size-base);
  color: var(--color-text);
  line-height: 1.5;
}
.info-detail a:hover {
  color: var(--color-accent);
}

/* ── Map Container ───────────────────────────────────────── */
.map-card {
  border-radius: var(--radius-lg);
  overflow: hidden;
  border: 1px solid var(--color-border);
  box-shadow: var(--shadow-card);
}
.map-card iframe {
  width: 100%;
  height: 280px;
  border: 0;
  display: block;
}

/* ── CTA Section ─────────────────────────────────────────── */
.contact-cta {
  background: var(--color-bg-alt);
  text-align: center;
  padding: clamp(4rem, 10vh, 7rem) 0;
  position: relative;
}
.contact-cta h2 {
  margin-bottom: var(--space-4);
}
.contact-cta h2 .text-accent {
  font-family: var(--font-accent);
  font-style: italic;
  color: var(--color-accent);
  font-weight: 600;
}
.contact-cta p {
  color: var(--color-text-light);
  font-size: var(--font-size-lg);
  max-width: 550px;
  margin: 0 auto var(--space-6);
}
.contact-cta .cta-actions {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── Responsive ──────────────────────────────────────────── */
@media (max-width: 1024px) {
  .contact-grid {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
}
@media (max-width: 600px) {
  .contact-form-card {
    padding: var(--space-5);
  }
  .form-consent-fieldset {
    padding: var(--space-3) var(--space-4);
  }
  .consent-label {
    font-size: var(--font-size-xs);
  }
  .contact-hero {
    min-height: 35vh;
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════ HERO ════════ -->
<section class="contact-hero hero">
  <div class="container">
    <span class="hero-eyebrow"><i data-lucide="mail" aria-hidden="true"></i> Get In Touch</span>
    <h1>Request Your <span class="accent-word">Free Estimate</span></h1>
    <p class="contact-hero-sub">Fill out the form below or call us directly. Same-week scheduling available for Omaha-area roofing and gutter projects.</p>
  </div>
  <div class="divider-wave">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,60 L0,30 Q360,0 720,30 Q1080,60 1440,30 L1440,60 Z"/>
    </svg>
  </div>
</section>

<!-- ════════ CONTACT FORM + INFO ════════ -->
<section class="contact-main" aria-label="Contact form and business information">
  <div class="container">
    <div class="contact-grid">

      <!-- Form Card -->
      <div class="contact-form-card reveal-up">
        <h2>Send Us a Message</h2>
        <p class="form-subtitle">We respond to most inquiries within one business day.</p>

        <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST">

          <!-- Honeypot -->
          <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">

          <!-- Thank-you redirect -->
          <input type="hidden" name="_next" value="/thank-you">

          <!-- Consent tracking -->
          <input type="hidden" name="_consent_version" value="v2.1">
          <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

          <div class="form-group">
            <input type="text" name="name" id="contact-name" placeholder=" " required>
            <label for="contact-name">Your Name</label>
          </div>

          <div class="form-group">
            <input type="email" name="email" id="contact-email" placeholder=" " required>
            <label for="contact-email">Email Address</label>
          </div>

          <div class="form-group">
            <input type="tel" name="phone" id="contact-phone" placeholder=" " required>
            <label for="contact-phone">Phone Number</label>
          </div>

          <div class="form-group">
            <select name="service" id="contact-service">
              <option value="">Select a service</option>
              <?php foreach ($services as $s): ?>
              <option value="<?php echo htmlspecialchars($s['name']); ?>"><?php echo htmlspecialchars($s['name']); ?></option>
              <?php endforeach; ?>
            </select>
            <label for="contact-service">Service Needed</label>
          </div>

          <div class="form-group">
            <textarea name="message" id="contact-message" rows="4" placeholder=" "></textarea>
            <label for="contact-message">Tell Us About Your Project</label>
          </div>

          <!-- ═══ SEPARATE CONSENT CHECKBOXES (TCPA 2025/2026 + Texas TCPA) ═══ -->
          <fieldset class="form-consent-fieldset">
            <legend class="form-consent-legend">Communication Consent</legend>

            <label class="form-consent-item">
              <input type="checkbox" name="email_opt_in" value="yes" class="consent-checkbox">
              <span class="consent-label">
                <strong>Email updates (optional):</strong> I agree to receive emails from
                <?php echo htmlspecialchars($siteName); ?> about my inquiry, services, promotions, and news. I understand I can unsubscribe anytime via the link in any email<?php if (!empty($email)): ?>
                or by emailing <?php echo htmlspecialchars($email); ?><?php endif; ?>. Message frequency varies.
              </span>
            </label>

            <label class="form-consent-item">
              <input type="checkbox" name="sms_opt_in" value="yes" class="consent-checkbox">
              <span class="consent-label">
                <strong>SMS/Text messages (optional):</strong> I agree to receive text messages from
                <?php echo htmlspecialchars($siteName); ?> at the phone number I provided. Message types may include appointment reminders, service updates, and promotional
                offers. Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help.
                <strong>Consent is not a condition of purchase.</strong>
              </span>
            </label>

            <label class="form-consent-item form-consent-required">
              <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required>
              <span class="consent-label">
                I have read and agree to the
                <a href="/privacy-policy/">Privacy Policy</a>
                and
                <a href="/terms/">Terms of Service</a>. <span class="required-star">*</span>
              </span>
            </label>
          </fieldset>

          <button type="submit" class="btn-submit">Send Message <i data-lucide="send" aria-hidden="true"></i></button>
        </form>
      </div>

      <!-- Info Column -->
      <div class="contact-info">

        <div class="info-card reveal-right">
          <h3><i data-lucide="map-pin" aria-hidden="true"></i> Office Location</h3>
          <div class="info-detail">
            <i data-lucide="building-2" aria-hidden="true"></i>
            <span><?php echo htmlspecialchars($siteName); ?><br><?php echo htmlspecialchars($address['street']); ?><br><?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?></span>
          </div>
          <?php if (!empty($phone)): ?>
          <div class="info-detail">
            <i data-lucide="phone" aria-hidden="true"></i>
            <a href="tel:<?php echo phoneHref($phone); ?>"><?php echo formatPhone($phone); ?></a>
          </div>
          <?php endif; ?>
          <?php if (!empty($email)): ?>
          <div class="info-detail">
            <i data-lucide="mail" aria-hidden="true"></i>
            <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>
          </div>
          <?php endif; ?>
        </div>

        <div class="info-card reveal-right reveal-delay-1">
          <h3><i data-lucide="clock" aria-hidden="true"></i> Business Hours</h3>
          <div class="info-detail">
            <i data-lucide="calendar" aria-hidden="true"></i>
            <span>Monday – Friday: 7:00 AM – 6:00 PM</span>
          </div>
          <div class="info-detail">
            <i data-lucide="calendar" aria-hidden="true"></i>
            <span>Saturday: 8:00 AM – 2:00 PM</span>
          </div>
          <div class="info-detail">
            <i data-lucide="calendar" aria-hidden="true"></i>
            <span>Sunday: Closed</span>
          </div>
          <div class="info-detail">
            <i data-lucide="alert-circle" aria-hidden="true"></i>
            <span><strong>24-hour emergency service</strong> available for active leaks and storm damage.</span>
          </div>
        </div>

        <div class="info-card reveal-right reveal-delay-2">
          <h3><i data-lucide="wrench" aria-hidden="true"></i> What to Expect</h3>
          <div class="info-detail">
            <i data-lucide="check-circle" aria-hidden="true"></i>
            <span>We respond to most inquiries within 1 business day</span>
          </div>
          <div class="info-detail">
            <i data-lucide="check-circle" aria-hidden="true"></i>
            <span>Free on-site inspection and written estimate</span>
          </div>
          <div class="info-detail">
            <i data-lucide="check-circle" aria-hidden="true"></i>
            <span>Same-week scheduling for most services</span>
          </div>
          <div class="info-detail">
            <i data-lucide="check-circle" aria-hidden="true"></i>
            <span>Insurance claim assistance and documentation</span>
          </div>
        </div>

        <!-- Map -->
        <div class="map-card reveal-right reveal-delay-3">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3003.5!2d-96.1047!3d41.1887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2s13514+Giles+Rd+Suite+G%2C+Omaha%2C+NE+68138!5e0!3m2!1sen!2sus!4v1"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Crawford Roofing & Gutters LLC office location in Omaha, NE"
          ></iframe>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ════════ CTA ════════ -->
<section class="contact-cta" aria-label="Call to action">
  <div class="container">
    <h2 class="reveal-up">Prefer to <span class="text-accent">Talk?</span></h2>
    <p class="reveal-up">Our team is ready to answer your roofing and gutter questions. Call us directly for immediate assistance.</p>
    <div class="cta-actions reveal-up reveal-delay-1">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-accent btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i> Call <?php echo formatPhone($phone); ?>
      </a>
      <?php endif; ?>
      <a href="/services/" class="btn btn-outline btn-lg">View Our Services</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
