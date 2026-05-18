<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'Frequently Asked Questions | Roofing & Gutters | Crawford Roofing | Omaha, NE';
$pageDescription = 'Answers to common questions about roof repair, replacement, gutter installation, pricing, insurance, and emergency service in Omaha, NE from Crawford Roofing & Gutters LLC.';
$canonicalUrl    = $siteUrl . '/faq/';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/logo/1779133831658-1madaq-dff36b_7f824423317d4c34af5fcee38837267c_mv2.png';
$currentPage     = 'faq';
$cssVersion      = '4';

// FAQ Data — organized by category
$faqCategories = [
    'General' => [
        ['question' => 'What services does Crawford Roofing & Gutters provide in Omaha?', 'answer' => 'Crawford Roofing & Gutters LLC provides a full range of roofing and gutter services for residential and commercial properties across the greater Omaha metro area. Our services include roof repair, roof replacement, new roof installation, roof inspection, gutter addition, gutter installation, gutter repair, gutter replacement, and gutter cleaning. We work with asphalt shingles, metal roofing, TPO, EPDM, and flat roofing systems.'],
        ['question' => 'How long has Crawford Roofing been in business?', 'answer' => 'Crawford Roofing & Gutters LLC has served the Omaha area for over ' . $yearsInBusiness . ' years, established in ' . $yearEstablished . '. Raymond Crawford, a second-generation contractor with 21+ years of construction experience, leads the company. Our longevity in the market reflects consistent quality, fair pricing, and the kind of repeat-customer trust that only comes from doing the job right the first time.'],
        ['question' => 'What areas do you serve in Nebraska?', 'answer' => 'We serve the greater Omaha metropolitan area, including Omaha, Bellevue, Papillion, La Vista, Elkhorn, Gretna, Ralston, and surrounding Douglas and Sarpy County communities. Our crews work both residential neighborhoods — from Dundee and Benson to West Omaha — and commercial corridors. For projects outside this core area, contact us directly to discuss availability.'],
        ['question' => 'Do you offer free estimates?', 'answer' => 'Yes. Every roofing and gutter estimate is free, with no obligation. We send a project manager to your property for an on-site inspection, provide a written estimate with line-item pricing, and walk you through your options. There is no pressure to commit on the spot — we want you to make the right decision for your property and budget.'],
    ],
    'Roofing Services' => [
        ['question' => 'How much does a new roof cost in Omaha, NE?', 'answer' => 'A typical residential roof replacement in Omaha ranges from $8,000 to $25,000 depending on the size of your home, the roofing material selected, roof pitch, and complexity. Standard asphalt shingles fall at the lower end, while architectural shingles, metal roofing, and multi-layer tear-offs cost more. Crawford provides detailed written estimates so you know exactly what you are paying for before work begins.'],
        ['question' => 'How long does a roof replacement take?', 'answer' => 'Most residential roof replacements in Omaha are completed in 1 to 3 days. This includes full tear-off of the existing material, decking inspection and repair, underlayment installation, and new shingle or metal panel installation. Larger homes or commercial buildings may take longer. Weather delays can add time — we monitor forecasts closely and communicate schedule changes promptly.'],
        ['question' => 'What types of roofing materials do you install?', 'answer' => 'We install asphalt shingles (3-tab and architectural), standing seam metal roofing, TPO single-ply membrane, EPDM rubber roofing, and modified bitumen systems for commercial flat roofs. Each material has different lifespans, price points, and performance characteristics — we help you choose based on your building type, budget, and long-term goals.'],
        ['question' => 'How do I know if my roof needs repair or full replacement?', 'answer' => 'If damage is isolated to a specific area — a few missing shingles, a leaking pipe boot, or localized flashing failure — a targeted repair is usually sufficient and far more cost-effective. If more than 30% of your shingle field is compromised, the decking shows widespread rot, or your roof is approaching end-of-life (20-25 years for standard asphalt), replacement becomes the better investment. Our inspectors will show you the damage and explain both options.'],
        ['question' => 'Do you offer emergency roof repair service?', 'answer' => 'Yes. Crawford provides 24-hour emergency roof repair throughout the Omaha metro. We deploy tarping and leak containment crews within 2 to 4 hours during business hours, and 4 to 8 hours evenings and weekends. After major storm events, we prioritize calls with active interior water intrusion. Permanent repair is typically scheduled within the same week once materials are sourced and weather permits.'],
    ],
    'Gutter Services' => [
        ['question' => 'How often should gutters be cleaned in Omaha?', 'answer' => 'We recommend gutter cleaning at least twice per year — once in late spring after cottonwood season and again in late fall after leaves drop. Properties near mature trees may need quarterly cleaning. Neglected gutters lead to ice dams in winter, foundation erosion, fascia rot, and basement moisture problems. Regular cleaning is one of the least expensive ways to protect a major property investment.'],
        ['question' => 'What is the difference between sectional and seamless gutters?', 'answer' => 'Sectional gutters are assembled from pre-cut pieces joined by connectors and sealant. Seamless gutters are custom-formed on-site from a continuous piece of aluminum, with seams only at corners and downspouts. Seamless systems have fewer leak points, require less maintenance, and look cleaner. They cost slightly more upfront but reduce long-term repair frequency. Crawford installs both types.'],
        ['question' => 'How much does gutter installation cost?', 'answer' => 'Gutter installation in the Omaha area typically runs $7 to $15 per linear foot for standard aluminum seamless gutters, including downspouts and hangers. A mid-size home with 150 to 200 linear feet of gutters usually falls between $1,100 and $3,000 installed. Material upgrades (copper, steel, half-round profiles) cost more. We provide free on-site estimates with exact pricing.'],
    ],
    'Pricing & Insurance' => [
        ['question' => 'Does homeowners insurance cover roof damage in Nebraska?', 'answer' => 'Most Nebraska homeowner policies cover roof damage from sudden events like hail, wind, or fallen tree limbs. Gradual wear and deferred maintenance are typically excluded. Crawford works directly with insurance adjusters across Omaha — we document damage with date-stamped photos and provide repair estimates formatted for carriers like State Farm, Farmers, USAA, and others. We also file supplements when initial adjuster assessments miss damage.'],
        ['question' => 'Do you offer financing for roofing projects?', 'answer' => 'Yes. Crawford Roofing offers financing options for larger projects such as full roof replacements and complete gutter system installations. Financing allows you to protect your property now without waiting for savings to accumulate — particularly important after storm damage when delays cause further deterioration. Ask about current financing terms during your free estimate appointment.'],
        ['question' => 'What warranties do you provide?', 'answer' => 'All Crawford projects include a workmanship warranty covering our labor and installation. Roofing materials carry their own manufacturer warranties — typically 25 to 50 years for architectural shingles and 30+ years for metal roofing systems. We provide documentation for both warranties at project completion so you have full coverage records for your files and any future insurance claims.'],
    ],
    'Process & Scheduling' => [
        ['question' => 'What happens after I request an estimate?', 'answer' => 'After you submit a request, our team contacts you within one business day to schedule a free on-site inspection. A project manager visits your property, assesses the work needed, takes measurements and photos, and provides a written estimate with line-item pricing. You review the estimate at your own pace — no same-day pressure. Once you approve, we schedule the work, typically within the same week for standard projects.'],
        ['question' => 'How do I prepare my property for a roofing project?', 'answer' => 'Move vehicles away from the house and garage doors. Remove fragile items from attic spaces — vibration from tear-off can shift unsecured items. Clear a 6-foot perimeter around the house so our crew can access all sides. We handle debris containment with tarps and magnetic nail sweeps. If you have pets that stay outdoors, plan to keep them inside during the work day.'],
        ['question' => 'Do you clean up after the job is done?', 'answer' => 'Yes. Every Crawford project includes full cleanup as part of the scope. We run magnetic nail sweeps across your yard and driveway, remove all debris, and haul away old materials. Our goal is to leave your property cleaner than we found it. We do a final walkthrough with you to confirm you are satisfied with the work and the site condition before we close the project.'],
    ],
];

// Flatten for schema
$allFaqs = [];
foreach ($faqCategories as $category => $items) {
    foreach ($items as $item) {
        $allFaqs[] = $item;
    }
}
$faqSchema = generateFAQSchema($allFaqs);
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => $siteUrl . '/'],
    ['name' => 'FAQ',  'url' => $siteUrl . '/faq/'],
], $siteUrl);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<!-- Schema: FAQPage -->
<script type="application/ld+json">
<?php echo $faqSchema; ?>
</script>

<!-- Schema: BreadcrumbList -->
<script type="application/ld+json">
<?php echo $breadcrumbSchema; ?>
</script>

<style>
/* ═══════════════════════════════════════════════════════════
   Crawford Roofing & Gutters — FAQ Page Custom Styles
   Premium Tier — Phase 5
   ═══════════════════════════════════════════════════════════ */

/* ── FAQ Hero ────────────────────────────────────────────── */
.faq-hero {
  position: relative;
  min-height: 45vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  padding: calc(var(--nav-height) + var(--space-12)) var(--space-4) var(--space-12);
}
.faq-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.05'/%3E%3C/svg%3E");
  opacity: 0.12;
  z-index: 1;
}
.faq-hero .container {
  position: relative;
  z-index: 2;
}
.faq-hero .hero-eyebrow {
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
.faq-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.25rem, 5vw, 3.75rem);
  font-weight: 900;
  line-height: 1.05;
  letter-spacing: -0.03em;
  margin-bottom: var(--space-4);
}
.faq-hero h1 .accent-word {
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.6);
}
.faq-hero-sub {
  color: rgba(255, 255, 255, 0.85);
  font-size: var(--font-size-lg);
  max-width: 560px;
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

/* ── FAQ Content ─────────────────────────────────────────── */
.faq-content {
  background: var(--color-bg);
  padding: clamp(5rem, 12vh, 9rem) 0;
}
.faq-layout {
  max-width: 820px;
  margin: 0 auto;
}

/* Category Headings */
.faq-category {
  margin-bottom: var(--space-10);
}
.faq-category:last-child {
  margin-bottom: 0;
}
.faq-category-header {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  margin-bottom: var(--space-6);
  padding-bottom: var(--space-3);
  border-bottom: 2px solid rgba(var(--color-accent-rgb), 0.15);
}
.faq-category-icon {
  width: 40px;
  height: 40px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  flex-shrink: 0;
}
.faq-category-icon i,
.faq-category-icon svg {
  width: 20px;
  height: 20px;
}
.faq-category-header h2 {
  font-size: var(--font-size-2xl);
  color: var(--color-primary);
}

/* Accordion Items */
.faq-item {
  border: 1px solid var(--color-border);
  border-radius: var(--radius-md);
  margin-bottom: var(--space-3);
  overflow: hidden;
  transition: box-shadow var(--transition-fast);
}
.faq-item:hover {
  box-shadow: var(--shadow-sm);
}
.faq-item.active {
  border-color: rgba(var(--color-accent-rgb), 0.3);
  box-shadow: 0 2px 12px rgba(var(--color-accent-rgb), 0.08);
}
.faq-question {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-4);
  width: 100%;
  padding: var(--space-5) var(--space-5);
  background: none;
  border: none;
  cursor: pointer;
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  font-weight: 600;
  color: var(--color-text);
  text-align: left;
  line-height: 1.4;
  transition: color var(--transition-fast);
}
.faq-question:hover {
  color: var(--color-accent);
}
.faq-item.active .faq-question {
  color: var(--color-accent);
}
.faq-chevron {
  flex-shrink: 0;
  width: 20px;
  height: 20px;
  transition: transform var(--transition-base);
  color: var(--color-text-light);
}
.faq-item.active .faq-chevron {
  transform: rotate(180deg);
  color: var(--color-accent);
}
.faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height var(--transition-base), padding var(--transition-base);
}
.faq-item.active .faq-answer {
  max-height: 500px;
}
.faq-answer-inner {
  padding: 0 var(--space-5) var(--space-5);
  color: var(--color-text-light);
  line-height: 1.7;
  font-size: var(--font-size-base);
  border-top: 1px solid var(--color-border);
  padding-top: var(--space-4);
}

/* ── CTA Banner ──────────────────────────────────────────── */
.faq-cta {
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  text-align: center;
  position: relative;
  padding: clamp(5rem, 12vh, 8rem) 0;
}
.faq-cta::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.05'/%3E%3C/svg%3E");
  opacity: 0.1;
}
.faq-cta .container {
  position: relative;
  z-index: 1;
}
.faq-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
}
.faq-cta h2 .text-accent {
  font-family: var(--font-accent);
  font-style: italic;
  color: rgba(var(--color-accent-rgb), 1);
  filter: brightness(1.6);
  font-weight: 600;
}
.faq-cta p {
  color: rgba(255, 255, 255, 0.85);
  font-size: var(--font-size-lg);
  max-width: 550px;
  margin: 0 auto var(--space-8);
}
.faq-cta .cta-actions {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── Responsive ──────────────────────────────────────────── */
@media (max-width: 600px) {
  .faq-question {
    padding: var(--space-4);
    font-size: var(--font-size-sm);
  }
  .faq-answer-inner {
    padding: 0 var(--space-4) var(--space-4);
    padding-top: var(--space-3);
    font-size: var(--font-size-sm);
  }
  .faq-category-header h2 {
    font-size: var(--font-size-xl);
  }
  .faq-hero {
    min-height: 35vh;
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════ HERO ════════ -->
<section class="faq-hero hero">
  <div class="container">
    <span class="hero-eyebrow"><i data-lucide="help-circle" aria-hidden="true"></i> Common Questions</span>
    <h1>Frequently Asked <span class="accent-word">Questions</span></h1>
    <p class="faq-hero-sub">Answers to the most common questions about roofing, gutters, pricing, insurance, and our process in Omaha, NE.</p>
  </div>
  <div class="divider-wave">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,60 L0,25 Q360,0 720,25 Q1080,50 1440,25 L1440,60 Z"/>
    </svg>
  </div>
</section>

<!-- ════════ FAQ CONTENT ════════ -->
<section class="faq-content" aria-label="Frequently asked questions">
  <div class="container">
    <div class="faq-layout">

      <?php
      $categoryIcons = [
          'General' => 'info',
          'Roofing Services' => 'home',
          'Gutter Services' => 'droplets',
          'Pricing & Insurance' => 'wallet',
          'Process & Scheduling' => 'clipboard-list',
      ];
      $catIndex = 0;
      foreach ($faqCategories as $categoryName => $questions):
          $catIndex++;
          $icon = $categoryIcons[$categoryName] ?? 'help-circle';
      ?>
      <div class="faq-category reveal-up<?php echo $catIndex > 1 ? ' reveal-delay-1' : ''; ?>">
        <div class="faq-category-header">
          <div class="faq-category-icon"><i data-lucide="<?php echo $icon; ?>" aria-hidden="true"></i></div>
          <h2><?php echo htmlspecialchars($categoryName); ?></h2>
        </div>
        <?php foreach ($questions as $i => $faq): ?>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" type="button">
            <span><?php echo htmlspecialchars($faq['question']); ?></span>
            <svg class="faq-chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer" aria-hidden="true">
            <div class="faq-answer-inner">
              <p><?php echo htmlspecialchars($faq['answer']); ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<!-- ════════ CTA ════════ -->
<section class="faq-cta" aria-label="Get started">
  <div class="container">
    <h2 class="reveal-up">Still Have <span class="text-accent">Questions?</span></h2>
    <p class="reveal-up">Our team is happy to answer any questions about your roofing or gutter project. Reach out for a free, no-obligation consultation.</p>
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

<!-- FAQ Accordion Script -->
<script>
(function() {
  document.querySelectorAll('.faq-question').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var item = this.closest('.faq-item');
      var wasActive = item.classList.contains('active');
      // Close all
      document.querySelectorAll('.faq-item.active').forEach(function(open) {
        open.classList.remove('active');
        open.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
        open.querySelector('.faq-answer').setAttribute('aria-hidden', 'true');
      });
      // Toggle current
      if (!wasActive) {
        item.classList.add('active');
        this.setAttribute('aria-expanded', 'true');
        item.querySelector('.faq-answer').setAttribute('aria-hidden', 'false');
      }
    });
  });
})();
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
