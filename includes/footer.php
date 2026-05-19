<?php
/**
 * Footer Include — Crawford Roofing & Gutters LLC
 * Phase 2: Entity block, legal row, cookie banner, mobile CTA, scripts
 */
if (!isset($siteName)) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
}
if (!function_exists('formatPhone')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
}
?>

</main>

<footer class="site-footer">
  <div class="container">

    <!-- Footer Grid: 4 columns -->
    <div class="footer-grid">

      <!-- Col 1: Company Info -->
      <div class="footer-col">
        <a href="/" class="navbar-logo" aria-label="<?php echo htmlspecialchars($siteName); ?>" style="margin-bottom:var(--space-4);display:inline-flex;">
          <img src="/assets/images/logo.png" alt="<?php echo htmlspecialchars($siteName); ?>" class="logo-img" width="180" height="72">
        </a>
        <p class="footer-description">
          Crawford Roofing &amp; Gutters LLC has protected Omaha homes and businesses for over <?php echo $yearsInBusiness; ?> years.
          From roof repairs to complete gutter systems, we deliver reliable craftsmanship backed by second-generation expertise.
        </p>
        <div class="footer-trust">
          <span class="trust-badge"><i data-lucide="shield-check" aria-hidden="true"></i> Licensed</span>
          <span class="trust-badge"><i data-lucide="clock" aria-hidden="true"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
          <span class="trust-badge"><i data-lucide="badge-check" aria-hidden="true"></i> Free Estimates</span>
        </div>
      </div>

      <!-- Col 2: Roofing Services -->
      <div class="footer-col">
        <h4>Roofing Services</h4>
        <ul>
          <?php foreach ($services as $service): ?>
          <?php if (strpos(strtolower($service['name']), 'roof') !== false): ?>
          <li><a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/"><?php echo htmlspecialchars($service['name']); ?></a></li>
          <?php endif; ?>
          <?php endforeach; ?>
          <li><a href="/services/">View All Services</a></li>
        </ul>
      </div>

      <!-- Col 3: Gutter Services & Areas -->
      <div class="footer-col">
        <h4>Gutter Services</h4>
        <ul>
          <?php foreach ($services as $service): ?>
          <?php if (strpos(strtolower($service['name']), 'gutter') !== false): ?>
          <li><a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/"><?php echo htmlspecialchars($service['name']); ?></a></li>
          <?php endif; ?>
          <?php endforeach; ?>
        </ul>
        <h4 style="margin-top:var(--space-6);">Service Areas</h4>
        <ul>
          <?php $footerAreaCount = 0; foreach ($serviceAreas as $area): ?>
          <?php if ($footerAreaCount < 6): ?>
          <li><a href="/areas/<?php echo htmlspecialchars($area['slug'] ?? getAreaSlug($area['city'] ?: $address['city'])); ?>/"><?php echo htmlspecialchars($area['city'] ?: $address['city']); ?>, <?php echo htmlspecialchars($area['state']); ?></a></li>
          <?php endif; $footerAreaCount++; endforeach; ?>
          <li><a href="/areas/">View All <?php echo count($serviceAreas); ?> Areas</a></li>
        </ul>
      </div>

      <!-- Col 4: Contact -->
      <div class="footer-col">
        <h4>Contact Us</h4>
        <?php if (!empty($phone)): ?>
        <div class="contact-item">
          <i data-lucide="phone" aria-hidden="true"></i>
          <a href="tel:<?php echo phoneHref($phone); ?>" style="color:rgba(255,255,255,0.7);"><?php echo formatPhone($phone); ?></a>
        </div>
        <?php endif; ?>
        <?php if (!empty($email)): ?>
        <div class="contact-item">
          <i data-lucide="mail" aria-hidden="true"></i>
          <a href="mailto:<?php echo htmlspecialchars($email); ?>" style="color:rgba(255,255,255,0.7);"><?php echo htmlspecialchars($email); ?></a>
        </div>
        <?php endif; ?>
        <div class="contact-item">
          <i data-lucide="map-pin" aria-hidden="true"></i>
          <span><?php echo htmlspecialchars($address['street']); ?><br><?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?></span>
        </div>
        <div class="contact-item">
          <i data-lucide="clock" aria-hidden="true"></i>
          <span>Mon–Fri: 7AM–6PM<br>Sat: 8AM–2PM</span>
        </div>
        <a href="/contact/" class="btn btn-accent btn-sm" style="margin-top:var(--space-4);">Get Free Estimate</a>
      </div>
    </div>

    <!-- AEO Entity Block -->
    <div class="footer-entity" itemscope itemtype="https://schema.org/RoofingContractor">
      <meta itemprop="name" content="<?php echo htmlspecialchars($siteName); ?>">
      <meta itemprop="url" content="<?php echo $siteUrl; ?>/">
      <?php if (!empty($phone)): ?>
      <meta itemprop="telephone" content="<?php echo htmlspecialchars($phone); ?>">
      <?php endif; ?>
      <h4>About <?php echo htmlspecialchars($siteName); ?></h4>
      <p>
        <?php echo htmlspecialchars($siteName); ?> is a licensed roofing and gutter contractor based in
        <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?>.
        With over <?php echo $yearsInBusiness; ?> years of experience, we provide roof repair, roof replacement, new roof installation,
        gutter installation, gutter repair, gutter cleaning, and gutter replacement services to residential and
        commercial clients across the greater Omaha metro area. Our second-generation team combines proven craftsmanship
        with responsive service — including 24-hour emergency repairs. Call us for a free estimate on any roofing or gutter project.
      </p>
    </div>

    <!-- Footer Legal Row (MANDATORY) -->
    <div class="footer-legal-row">
      <a href="/privacy-policy/">Privacy Policy</a>
      <span class="divider">|</span>
      <a href="/terms/">Terms of Service</a>
      <span class="divider">|</span>
      <a href="/cookie-policy/">Cookie Policy</a>
      <span class="divider">|</span>
      <a href="/accessibility/">Accessibility</a>
      <span class="divider">|</span>
      <a href="/privacy-policy/#ccpa-rights">Do Not Sell or Share My Personal Information</a>
      <span class="divider">|</span>
      <a href="/sitemap.xml">Sitemap</a>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($siteName); ?>. All rights reserved.</p>
      <p class="footer-credit">
        <a href="https://pageoneinsights.com" rel="dofollow" target="_blank">Web Design &amp; Hosting by Page One Insights, LLC</a>
      </p>
    </div>

  </div>
</footer>

<!-- Back to Top -->
<button class="back-to-top" aria-label="Back to top">
  <i data-lucide="chevron-up" aria-hidden="true"></i>
</button>

<!-- Mobile Floating CTA Bar -->
<div class="mobile-cta-bar" aria-label="Quick contact">
  <div class="container">
    <div class="mobile-cta-bar-inner">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-accent">
        <i data-lucide="phone" aria-hidden="true"></i> Call Now
      </a>
      <?php endif; ?>
      <a href="/contact/" class="btn btn-outline-white">
        <i data-lucide="file-text" aria-hidden="true"></i> Free Estimate
      </a>
    </div>
  </div>
</div>

<!-- Cookie Banner -->
<div class="cookie-banner" id="cookie-banner" role="alert" aria-live="polite">
  <p>
    We use cookies to improve your experience. By continuing to browse, you agree to our
    <a href="/cookie-policy/">Cookie Policy</a>.
  </p>
  <button class="cookie-banner__dismiss" id="cookie-dismiss" type="button">Got it</button>
</div>

<!-- Scripts -->
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
<script>lucide.createIcons();</script>
<script src="/assets/js/main.js?v=<?php echo $cssVer ?? '2'; ?>" defer></script>
<script src="/assets/js/animations.js?v=<?php echo $cssVer ?? '2'; ?>" defer></script>
<script src="/assets/js/effects.js?v=<?php echo $cssVer ?? '2'; ?>" defer></script>

<!-- Cookie Banner Dismissal + Mobile Menu Toggle -->
<script>
(function() {
  // Cookie banner
  var banner = document.getElementById('cookie-banner');
  var dismiss = document.getElementById('cookie-dismiss');
  if (banner && dismiss) {
    if (localStorage.getItem('cookie_consent') === 'dismissed') {
      banner.hidden = true;
    }
    dismiss.addEventListener('click', function() {
      banner.hidden = true;
      localStorage.setItem('cookie_consent', 'dismissed');
    });
  }

  // Mobile menu toggle
  var hamburger = document.querySelector('.hamburger');
  var mobileMenu = document.getElementById('mobile-menu');
  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', function() {
      var isOpen = mobileMenu.classList.toggle('active');
      hamburger.classList.toggle('active');
      hamburger.setAttribute('aria-expanded', isOpen.toString());
      mobileMenu.setAttribute('aria-hidden', (!isOpen).toString());
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });
    // Close on link click
    mobileMenu.querySelectorAll('a:not(.mobile-service-links a)').forEach(function(link) {
      link.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
        hamburger.classList.remove('active');
        hamburger.setAttribute('aria-expanded', 'false');
        mobileMenu.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
      });
    });
  }

  // Reveal system (IntersectionObserver)
  var reveals = document.querySelectorAll('.reveal-up, .reveal-down, .reveal-left, .reveal-right, .reveal-scale');
  if (reveals.length > 0 && 'IntersectionObserver' in window) {
    var revealObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
    reveals.forEach(function(el) { revealObserver.observe(el); });
  }

  // Counter animation (inline for Hostinger cache reliability)
  var counters = document.querySelectorAll('[data-counter]');
  if (counters.length > 0 && 'IntersectionObserver' in window) {
    var counterObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var el = entry.target;
          if (el.dataset.counterDone) { counterObserver.unobserve(el); return; }
          var targetVal = el.getAttribute('data-target');
          var target = parseInt(targetVal, 10);
          if (isNaN(target) || !targetVal) {
            el.textContent = targetVal || el.textContent;
            counterObserver.unobserve(el);
            return;
          }
          el.dataset.counterDone = '1';
          var duration = 2000;
          var startTime = null;
          function animate(timestamp) {
            if (!startTime) startTime = timestamp;
            var progress = Math.min((timestamp - startTime) / duration, 1);
            var eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.floor(eased * target).toLocaleString();
            if (progress < 1) requestAnimationFrame(animate);
            else el.textContent = target.toLocaleString();
          }
          requestAnimationFrame(animate);
          counterObserver.unobserve(el);
        }
      });
    }, { threshold: 0.3 });
    counters.forEach(function(el) { counterObserver.observe(el); });
  }
})();
</script>
</body>
</html>
