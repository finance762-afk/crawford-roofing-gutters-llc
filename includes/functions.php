<?php
/**
 * Helper Functions — Crawford Roofing & Gutters LLC
 * Phase 2: Utility functions for navigation, SEO, and schema
 */

/**
 * Check if current page matches the given page identifier
 */
function isActivePage($page) {
    global $currentPage;
    return isset($currentPage) && $currentPage === $page;
}

/**
 * Format phone number for display: (402) 555-1234
 */
function formatPhone($phone) {
    $digits = preg_replace('/[^0-9]/', '', $phone);
    if (strlen($digits) === 10) {
        return '(' . substr($digits, 0, 3) . ') ' . substr($digits, 3, 3) . '-' . substr($digits, 6);
    }
    if (strlen($digits) === 11 && $digits[0] === '1') {
        return '(' . substr($digits, 1, 3) . ') ' . substr($digits, 4, 3) . '-' . substr($digits, 7);
    }
    return $phone;
}

/**
 * Format phone number for tel: links: +14025551234
 */
function phoneHref($phone) {
    $digits = preg_replace('/[^0-9]/', '', $phone);
    if (strlen($digits) === 10) {
        return '+1' . $digits;
    }
    if (strlen($digits) === 11) {
        return '+' . $digits;
    }
    return 'tel:' . $digits;
}

/**
 * Generate a URL-safe slug from a service name
 */
function getServiceSlug($name) {
    $slug = strtolower(trim($name));
    $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
    $slug = preg_replace('/[\s-]+/', '-', $slug);
    return $slug;
}

/**
 * Generate a URL-safe slug from a city name
 */
function getAreaSlug($city) {
    $slug = strtolower(trim($city));
    $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
    $slug = preg_replace('/[\s-]+/', '-', $slug);
    return $slug;
}

/**
 * Generate Service schema JSON-LD
 */
function generateServiceSchema($service, $siteUrl, $siteName, $address) {
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => $service['name'],
        'description' => $service['description'],
        'url' => $siteUrl . '/services/' . $service['slug'] . '/',
        'provider' => [
            '@type' => 'RoofingContractor',
            'name' => $siteName,
            '@id' => $siteUrl . '/#organization',
        ],
        'areaServed' => [
            '@type' => 'City',
            'name' => $address['city'],
            'addressRegion' => $address['state'],
        ],
    ];
    return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}

/**
 * Generate FAQPage schema JSON-LD from an array of Q&A pairs
 */
function generateFAQSchema($faqs) {
    $items = [];
    foreach ($faqs as $faq) {
        $items[] = [
            '@type' => 'Question',
            'name' => $faq['question'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['answer'],
            ],
        ];
    }
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $items,
    ];
    return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}

/**
 * Generate BreadcrumbList schema JSON-LD
 */
function generateBreadcrumbSchema($items, $siteUrl) {
    $list = [];
    foreach ($items as $i => $item) {
        $list[] = [
            '@type' => 'ListItem',
            'position' => $i + 1,
            'name' => $item['name'],
            'item' => $item['url'],
        ];
    }
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $list,
    ];
    return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}

/**
 * Generate meta tags for a page (used by head.php via page variables)
 */
function generateMetaTags($title, $description, $canonical) {
    $html = '';
    $html .= '<title>' . htmlspecialchars($title) . '</title>' . "\n";
    $html .= '    <meta name="description" content="' . htmlspecialchars($description) . '">' . "\n";
    $html .= '    <link rel="canonical" href="' . htmlspecialchars($canonical) . '">' . "\n";
    return $html;
}
