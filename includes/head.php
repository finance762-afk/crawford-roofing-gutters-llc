<?php
/**
 * Head Include — Crawford Roofing & Gutters LLC
 * Phase 2: DOCTYPE, <head>, meta, OG, schema, CSS, fonts
 *
 * Page-level variables (set before including):
 *   $pageTitle       — full <title> tag content
 *   $pageDescription — meta description (140-160 chars)
 *   $canonicalUrl    — self-referencing canonical URL
 *   $currentPage     — slug for active nav state
 *   $heroImagePreload — (optional) URL to preload hero image
 *   $noindex         — (optional) if true, adds noindex/nofollow
 *   $cssVersion      — (optional) override global $cssVersion
 */

// Load config if not already loaded
if (!isset($siteName)) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
}
if (!function_exists('formatPhone')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
}

// Defaults
$pageTitle       = $pageTitle       ?? $siteName . ' | ' . ucwords($primaryKeyword) . ' | ' . $address['city'] . ', ' . $address['state'];
$pageDescription = $pageDescription ?? $siteName . ' is a licensed roofing contractor in ' . $address['city'] . ', ' . $address['state'] . ' offering roof repair, replacement, gutter installation, and emergency services. ' . $yearsInBusiness . '+ years of experience. Free estimates.';
$canonicalUrl    = $canonicalUrl    ?? $siteUrl . '/';
$ogImage         = $ogImage         ?? 'https://db.pageone.cloud/storage/v1/object/public/client-assets/crawford-roofing-gutters-llc/logo/1779133831658-1madaq-dff36b_7f824423317d4c34af5fcee38837267c_mv2.png';
$cssVer          = $cssVersion      ?? '1';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary SEO -->
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">
    <?php if (!empty($noindex)): ?>
    <meta name="robots" content="noindex,nofollow">
    <?php endif; ?>

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($siteName); ?>">
    <meta property="og:locale" content="en_US">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/images/favicon.png">
    <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">

    <!-- Preconnect: Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- DNS Prefetch: Image CDN -->
    <link rel="dns-prefetch" href="https://db.pageone.cloud">

    <!-- Google Fonts: Unbounded (display heading) + Fraunces (subheading/accent) + Inter (body) -->
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@400..900&family=Fraunces:ital,opsz,wght@0,9..144,400..900;1,9..144,400..900&family=Inter:wght@400..700&display=swap" rel="stylesheet">

    <!-- Preload heading font for faster render -->
    <?php if (!empty($heroImagePreload)): ?>
    <link rel="preload" as="image" href="<?php echo htmlspecialchars($heroImagePreload); ?>">
    <?php endif; ?>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/assets/css/framework.css?v=<?php echo $cssVer; ?>">

    <!-- Google Analytics (replace G-XXXXXXXXXX with real ID post-launch) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($googleAnalyticsId); ?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', '<?php echo htmlspecialchars($googleAnalyticsId); ?>');
    </script> -->

    <!-- JSON-LD: LocalBusiness / RoofingContractor (Homepage schema) -->
    <?php if (!isset($currentPage) || $currentPage === 'home'): ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "RoofingContractor",
      "@id": "<?php echo $siteUrl; ?>/#organization",
      "name": "<?php echo htmlspecialchars($siteName); ?>",
      "url": "<?php echo $siteUrl; ?>/",
      "telephone": "<?php echo htmlspecialchars($phone); ?>",
      "email": "<?php echo htmlspecialchars($email); ?>",
      "description": "<?php echo htmlspecialchars(substr($siteName . ' is a full-service roofing and gutter contractor in ' . $address['city'] . ', ' . $address['state'] . ' offering roof repair, roof replacement, new roof installation, gutter installation, gutter repair, and gutter cleaning. ' . $yearsInBusiness . '+ years of experience serving residential and commercial clients.', 0, 500)); ?>",
      "image": "<?php echo htmlspecialchars($ogImage); ?>",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "<?php echo htmlspecialchars($address['street']); ?>",
        "addressLocality": "<?php echo htmlspecialchars($address['city']); ?>",
        "addressRegion": "<?php echo htmlspecialchars($address['state']); ?>",
        "postalCode": "<?php echo htmlspecialchars($address['zip']); ?>",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 41.1887,
        "longitude": -96.1047
      },
      "foundingDate": "<?php echo $yearEstablished; ?>",
      "openingHours": [
        "Mo-Fr 07:00-18:00",
        "Sa 08:00-14:00"
      ],
      "areaServed": [
        {
          "@type": "City",
          "name": "Omaha",
          "addressRegion": "NE"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Roofing & Gutter Services",
        "itemListElement": [
          <?php
          $schemaServices = [];
          foreach ($services as $s) {
              $schemaServices[] = '{
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "' . htmlspecialchars($s['name']) . '",
              "description": "' . htmlspecialchars(substr($s['description'], 0, 200)) . '",
              "url": "' . $siteUrl . '/services/' . $s['slug'] . '/"
            }
          }';
          }
          echo implode(",\n          ", $schemaServices);
          ?>

        ]
      },
      "sameAs": [
        <?php
        $sameAs = [];
        foreach ($socialLinks as $link) {
            $sameAs[] = '"' . htmlspecialchars($link) . '"';
        }
        echo implode(",\n        ", $sameAs);
        ?>
      ]
    }
    </script>
    <?php endif; ?>
<?php require_once __DIR__ . '/edit-mode.php'; ?>
</head>
<body>
