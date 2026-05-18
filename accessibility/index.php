<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$companyName       = $siteName;
$companyEntityType = $entityType;
$companyState      = $stateOfFormation;
$companyEmail      = $contactEmail;
$companyPhone      = $contactPhone;
$companyAddress    = $businessAddress;
$lastUpdated       = 'May 18, 2026';

$pageTitle       = 'Accessibility | ' . $siteName;
$pageDescription = 'Accessibility statement for ' . $siteName . ' — our commitment to WCAG 2.1 AA compliance and digital accessibility.';
$canonicalUrl    = $siteUrl . '/accessibility/';
$currentPage     = 'legal';
$cssVersion      = '4';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Accessibility Statement",
  "url": "<?php echo $siteUrl; ?>/accessibility/",
  "description": "<?php echo htmlspecialchars($pageDescription); ?>",
  "publisher": {
    "@type": "Organization",
    "name": "<?php echo htmlspecialchars($companyName); ?>"
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "Home", "item": "<?php echo $siteUrl; ?>/" },
      { "@type": "ListItem", "position": 2, "name": "Accessibility", "item": "<?php echo $siteUrl; ?>/accessibility/" }
    ]
  }
}
</script>

<style>
.legal-hero {
  position: relative;
  min-height: 40vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  padding: calc(var(--nav-height) + var(--space-8)) var(--space-4) var(--space-8);
}
.legal-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.05'/%3E%3C/svg%3E");
  opacity: 0.1;
}
.legal-hero .container { position: relative; z-index: 1; }
.legal-hero h1 { color: var(--color-white); font-size: clamp(2rem, 4vw, 3rem); font-weight: 900; }
.legal-content { background: var(--color-bg); padding: clamp(3rem, 8vh, 6rem) 0; }
.content-narrow { max-width: 65ch; margin: 0 auto; padding: 0 clamp(1rem, 4vw, 2rem); }
.legal-updated { color: var(--color-text-light); font-size: var(--font-size-sm); margin-bottom: var(--space-8); padding-bottom: var(--space-4); border-bottom: 1px solid var(--color-border); }
.legal-content h2 { font-size: var(--font-size-2xl); color: var(--color-primary); margin-top: var(--space-10); margin-bottom: var(--space-4); }
.legal-content h3 { font-size: var(--font-size-lg); color: var(--color-primary); margin-top: var(--space-6); margin-bottom: var(--space-3); }
.legal-content p { color: var(--color-text); line-height: 1.75; }
.legal-content ul { padding-left: var(--space-6); margin-bottom: var(--space-4); }
.legal-content ul li { color: var(--color-text); line-height: 1.65; margin-bottom: var(--space-2); }
.legal-content a { color: var(--color-accent); text-decoration: underline; }
.legal-content a:hover { color: var(--color-primary); }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<section class="legal-hero hero">
  <div class="container">
    <h1>Accessibility Statement</h1>
  </div>
</section>

<section class="legal-content">
  <div class="content-narrow">
    <p class="legal-updated"><strong>Last Updated:</strong> <?php echo $lastUpdated; ?></p>

    <h2>Our Commitment</h2>
    <p><?php echo htmlspecialchars($companyName); ?> is committed to ensuring digital accessibility for people with disabilities. We continually work to improve the user experience of our website and aim to conform to the Web Content Accessibility Guidelines (WCAG) 2.1 Level AA standards.</p>

    <h2>Accessibility Features</h2>
    <p>We have implemented the following accessibility features on our website:</p>
    <ul>
      <li><strong>Semantic HTML5 structure</strong> — proper use of headings, landmarks, lists, and structural elements for screen reader compatibility</li>
      <li><strong>Skip-to-content link</strong> — allows keyboard users to bypass navigation and jump directly to main content</li>
      <li><strong>ARIA labels and landmarks</strong> — descriptive labels on interactive elements and ARIA landmarks for navigation regions</li>
      <li><strong>Full keyboard navigation</strong> — all interactive elements are operable via keyboard</li>
      <li><strong>Visible focus indicators</strong> — clear visual focus outlines on all interactive elements when navigating with a keyboard</li>
      <li><strong>WCAG AA color contrast</strong> — minimum 4.5:1 contrast ratio for body text and 3:1 for large text</li>
      <li><strong>Descriptive alt text</strong> — all informational images include descriptive alternative text</li>
      <li><strong>Responsive zoom up to 200%</strong> — content remains usable and readable when zoomed to 200%</li>
      <li><strong><code>prefers-reduced-motion</code> media query</strong> — animations are disabled or reduced for users who prefer reduced motion</li>
      <li><strong>Form labels associated with inputs</strong> — all form fields have programmatically associated labels</li>
      <li><strong>Error messages programmatically linked to fields</strong> — form validation errors are announced to assistive technology</li>
    </ul>

    <h2>Known Limitations</h2>
    <p>Despite our best efforts, some areas of the website may not be fully accessible:</p>
    <ul>
      <li><strong>Third-party content:</strong> Embedded content such as Google Maps may not fully conform to WCAG 2.1 AA standards. We are working with third-party providers to address these limitations.</li>
    </ul>

    <h2>Feedback</h2>
    <p>We welcome your feedback on the accessibility of our website. If you encounter accessibility barriers or have suggestions for improvement, please contact us:</p>
    <ul>
      <?php if (!empty($companyEmail)): ?><li>Email: <a href="mailto:<?php echo htmlspecialchars($companyEmail); ?>"><?php echo htmlspecialchars($companyEmail); ?></a></li><?php endif; ?>
      <?php if (!empty($companyPhone)): ?><li>Phone: <a href="tel:<?php echo htmlspecialchars($companyPhone); ?>"><?php echo htmlspecialchars($companyPhone); ?></a></li><?php endif; ?>
      <li>Address: <?php echo htmlspecialchars($companyAddress); ?></li>
    </ul>
    <p>We aim to respond to accessibility feedback within 5 business days.</p>

    <h2>Enforcement</h2>
    <p>We recognize your rights under the Americans with Disabilities Act (ADA), Section 508 of the Rehabilitation Act, and applicable state accessibility laws. If you believe that your rights have been violated, you may file a complaint with the appropriate enforcement agency or contact us directly so we can address your concerns.</p>

    <p style="margin-top:var(--space-10);color:var(--color-text-light);font-size:var(--font-size-sm);font-style:italic;">This Accessibility Statement is provided as a general template. We recommend reviewing this document with a licensed <?php echo htmlspecialchars($companyState); ?> attorney before publication.</p>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
