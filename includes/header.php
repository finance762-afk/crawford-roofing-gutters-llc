<?php
/**
 * Header Include — Crawford Roofing & Gutters LLC
 * Phase 2: Skip link, glassmorphism nav, dropdown, mobile overlay
 */
if (!isset($siteName)) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
}
if (!function_exists('isActivePage')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
}
?>

<!-- Skip to Content (Accessibility) -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<header class="site-header" data-header>
  <div class="container">
    <div class="header-inner">

      <!-- Logo -->
      <a href="/" class="navbar-logo" aria-label="<?php echo htmlspecialchars($siteName); ?> — Home">
        <img src="/assets/images/logo.png" alt="<?php echo htmlspecialchars($siteName); ?>" class="logo-img" width="200" height="80">
      </a>

      <!-- Desktop Navigation -->
      <nav aria-label="Main navigation">
        <ul class="nav-links">
          <li><a href="/"<?php echo isActivePage('home') ? ' aria-current="page"' : ''; ?>>Home</a></li>
          <li class="has-dropdown">
            <a href="/services/"<?php echo isActivePage('services') ? ' aria-current="page"' : ''; ?>>Services</a>
            <ul class="dropdown" role="menu" style="display:none">
              <?php foreach ($services as $service): ?>
              <li role="menuitem"><a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/"><?php echo htmlspecialchars($service['name']); ?></a></li>
              <?php endforeach; ?>
            </ul>
          </li>
          <li><a href="/areas/"<?php echo isActivePage('areas') ? ' aria-current="page"' : ''; ?>>Service Areas</a></li>
          <li><a href="/about/"<?php echo isActivePage('about') ? ' aria-current="page"' : ''; ?>>About</a></li>
          <li><a href="/faq/"<?php echo isActivePage('faq') ? ' aria-current="page"' : ''; ?>>FAQ</a></li>
          <li><a href="/contact/"<?php echo isActivePage('contact') ? ' aria-current="page"' : ''; ?>>Contact</a></li>
        </ul>
      </nav>

      <!-- Desktop CTA -->
      <div class="navbar-cta">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo phoneHref($phone); ?>" class="nav-phone">
          <i data-lucide="phone" aria-hidden="true"></i>
          <?php echo formatPhone($phone); ?>
        </a>
        <?php endif; ?>
        <a href="/contact/" class="btn btn-accent btn-sm">Free Estimate</a>
      </div>

      <!-- Hamburger (Mobile) -->
      <button class="hamburger" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="mobile-menu">
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
      </button>

    </div>
  </div>
</header>

<!-- Mobile Full-Screen Overlay Menu -->
<div class="mobile-menu" id="mobile-menu" aria-hidden="true">
  <a href="/"<?php echo isActivePage('home') ? ' aria-current="page"' : ''; ?>>Home</a>
  <a href="/services/"<?php echo isActivePage('services') ? ' aria-current="page"' : ''; ?>>Services</a>
  <div class="mobile-service-links">
    <?php foreach ($services as $service): ?>
    <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/"><?php echo htmlspecialchars($service['name']); ?></a>
    <?php endforeach; ?>
  </div>
  <a href="/areas/"<?php echo isActivePage('areas') ? ' aria-current="page"' : ''; ?>>Service Areas</a>
  <a href="/about/"<?php echo isActivePage('about') ? ' aria-current="page"' : ''; ?>>About</a>
  <a href="/faq/"<?php echo isActivePage('faq') ? ' aria-current="page"' : ''; ?>>FAQ</a>
  <a href="/contact/"<?php echo isActivePage('contact') ? ' aria-current="page"' : ''; ?>>Contact</a>
  <div class="mobile-cta-group">
    <?php if (!empty($phone)): ?>
    <a href="tel:<?php echo phoneHref($phone); ?>" class="btn btn-outline-white btn-lg">
      <i data-lucide="phone" aria-hidden="true"></i> Call Now
    </a>
    <?php endif; ?>
    <a href="/contact/" class="btn btn-accent btn-lg">Free Estimate</a>
  </div>
</div>

<main id="main-content">
