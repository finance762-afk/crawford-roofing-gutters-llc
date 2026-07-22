<?php
/**
 * Site Configuration — Crawford Roofing & Gutters LLC
 * Generated: Phase 1 Scaffold
 */

// ── Identity ──────────────────────────────────────────────
$slug           = 'crawford-roofing-gutters-llc';
$siteName       = 'Crawford Roofing & Gutters LLC';
$tagline        = 'Weathering the Elements';
$industry       = 'roofing';

// ── Contact ───────────────────────────────────────────────
$phone          = '';
$phoneSecondary = '';
$email          = '';

// ── Address ───────────────────────────────────────────────
$address = [
    'street' => '13514 Giles Rd Suite G',
    'city'   => 'Omaha',
    'state'  => 'NE',
    'zip'    => '68138',
];

// ── Domain & URLs ─────────────────────────────────────────
$domain  = 'crawford-roofing-gutters-llc.pageone.cloud';
$siteUrl = 'https://' . $domain;

// ── SEO ───────────────────────────────────────────────────
$primaryKeyword    = 'roofing contractor omaha';
$secondaryKeywords = [
    'roof repair omaha',
    'roof replacement omaha',
    'gutter cleaning omaha',
    'gutter repair omaha',
    'roofer omaha',
    'gutter contractor omaha',
    'new roof installation omaha',
    'roof inspection omaha',
    'gutter installation omaha',
    'roofing company omaha',
    'residential roof repair omaha',
    'gutter replacement omaha',
];

// ── Services ──────────────────────────────────────────────
$services = [
    [
        'name'        => 'Gutter Addition',
        'slug'        => 'gutter-addition',
        'description' => 'Add new gutters to your home or commercial property in Omaha to improve water drainage and protect your foundation. Our expert team installs quality gutters tailored to your building\'s needs.',
        'keywords'    => ['gutter addition Omaha', 'add gutters Omaha NE', 'new gutters Omaha', 'gutter installation Omaha', 'home gutters Nebraska'],
    ],
    [
        'name'        => 'Gutter Cleaning',
        'slug'        => 'gutter-cleaning',
        'description' => 'Keep your gutters clean and flowing properly with professional gutter cleaning services in Omaha. Regular cleaning prevents water damage and extends the life of your gutter system.',
        'keywords'    => ['gutter cleaning Omaha', 'gutter cleaning services Omaha NE', 'clean gutters Omaha', 'professional gutter cleaning', 'gutter maintenance Omaha'],
    ],
    [
        'name'        => 'Gutter Installation',
        'slug'        => 'gutter-installation',
        'description' => 'Professional gutter installation services for residential and commercial properties in Omaha, Nebraska. We install durable gutters that effectively manage water drainage around your property.',
        'keywords'    => ['gutter installation Omaha', 'install gutters Omaha NE', 'new gutter installation', 'residential gutter installation Omaha', 'commercial gutters Omaha'],
    ],
    [
        'name'        => 'Gutter Repair',
        'slug'        => 'gutter-repair',
        'description' => 'Expert gutter repair services to fix leaks, damage, and other issues affecting your Omaha home or business. We quickly diagnose and repair gutter problems to prevent water damage.',
        'keywords'    => ['gutter repair Omaha', 'gutter repair Omaha NE', 'fix gutters Omaha', 'gutter leak repair', 'damaged gutter repair Omaha'],
    ],
    [
        'name'        => 'Gutter Replacement',
        'slug'        => 'gutter-replacement',
        'description' => 'Replace old, damaged, or outdated gutters with new, high-quality systems in Omaha. Our gutter replacement services ensure optimal water management and protection for your property.',
        'keywords'    => ['gutter replacement Omaha', 'replace gutters Omaha NE', 'new gutters Omaha', 'gutter replacement services', 'old gutter replacement Omaha'],
    ],
    [
        'name'        => 'Roof Inspection',
        'slug'        => 'roof-inspection',
        'description' => 'Comprehensive roof inspections in Omaha to identify damage, leaks, and maintenance needs before they become costly problems. Our inspections help protect your property investment.',
        'keywords'    => ['roof inspection Omaha', 'roof inspection Omaha NE', 'roof inspection services', 'professional roof inspection', 'roof damage inspection Omaha'],
    ],
    [
        'name'        => 'Roof Repair',
        'slug'        => 'roof-repair',
        'description' => 'Fast and reliable roof repair services for residential and commercial properties in Omaha. We fix leaks, damage, and other roof issues to restore the integrity of your property.',
        'keywords'    => ['roof repair Omaha', 'roof repair Omaha NE', 'roof leak repair', 'residential roof repair Omaha', 'commercial roof repair Omaha'],
    ],
    [
        'name'        => 'Roof Replacement',
        'slug'        => 'roof-replacement',
        'description' => 'Professional roof replacement services in Omaha for homes and businesses needing a new roof system. We install quality roofing materials that provide long-lasting protection and durability.',
        'keywords'    => ['roof replacement Omaha', 'roof replacement Omaha NE', 'new roof installation Omaha', 'residential roof replacement Omaha', 'commercial roof replacement Omaha'],
    ],
    [
        'name'        => 'New Roof Installation',
        'slug'        => 'new-roof-installation',
        'description' => 'Expert new roof installation for Omaha properties, including residential and commercial buildings. We deliver quality roofing systems designed for durability and weather protection.',
        'keywords'    => ['new roof installation Omaha', 'roof installation Omaha NE', 'install new roof Omaha', 'professional roof installation', 'roofing contractor Omaha'],
    ],
];

// ── Service Areas ─────────────────────────────────────────
$serviceAreas = [
    [
        'city'    => 'Omaha',
        'state'   => 'NE',
        'zip'     => '68102',
        'slug'    => 'omaha',
        'primary' => true,
    ],
    [
        'city'    => 'Bellevue',
        'state'   => 'NE',
        'zip'     => '68005',
        'slug'    => 'bellevue',
        'primary' => false,
    ],
    [
        'city'    => 'Papillion',
        'state'   => 'NE',
        'zip'     => '68046',
        'slug'    => 'papillion',
        'primary' => false,
    ],
    [
        'city'    => 'La Vista',
        'state'   => 'NE',
        'zip'     => '68128',
        'slug'    => 'la-vista',
        'primary' => false,
    ],
    [
        'city'    => 'Gretna',
        'state'   => 'NE',
        'zip'     => '68028',
        'slug'    => 'gretna',
        'primary' => false,
    ],
    [
        'city'    => 'Elkhorn',
        'state'   => 'NE',
        'zip'     => '68022',
        'slug'    => 'elkhorn',
        'primary' => false,
    ],
    [
        'city'    => 'Council Bluffs',
        'state'   => 'IA',
        'zip'     => '51501',
        'slug'    => 'council-bluffs',
        'primary' => false,
    ],
    [
        'city'    => 'Ralston',
        'state'   => 'NE',
        'zip'     => '68127',
        'slug'    => 'ralston',
        'primary' => false,
    ],
    [
        'city'    => 'Bennington',
        'state'   => 'NE',
        'zip'     => '68007',
        'slug'    => 'bennington',
        'primary' => false,
    ],
    [
        'city'    => 'Fremont',
        'state'   => 'NE',
        'zip'     => '68025',
        'slug'    => 'fremont',
        'primary' => false,
    ],
    [
        'city'    => 'Plattsmouth',
        'state'   => 'NE',
        'zip'     => '68048',
        'slug'    => 'plattsmouth',
        'primary' => false,
    ],
];

// ── Social Links ──────────────────────────────────────────
$socialLinks = [];

// ── Analytics ─────────────────────────────────────────────
$googleAnalyticsId = 'G-XXXXXXXXXX';

// ── Brand Colors ──────────────────────────────────────────
$colors = [
    'primary'   => '#011381',
    'secondary' => '#2A3E91',
    'accent'    => '#C42127',
];

// ── Business Info ─────────────────────────────────────────
$yearEstablished = 1993;
$yearsInBusiness = date('Y') - $yearEstablished;

// ── Form Configuration ────────────────────────────────────
$formAction = 'https://design.pageone.cloud/api/leads/crawford-roofing-gutters-llc';

// ── Legal / Compliance ───────────────────────────────────
$entityType       = 'Limited Liability Company';
$stateOfFormation = 'Nebraska';
$contactEmail     = $email;
$contactPhone     = $phone;
$businessAddress  = $address['street'] . ', ' . $address['city'] . ', ' . $address['state'] . ' ' . $address['zip'];

// ── CSS Version (increment on every styles.css change) ────
$cssVersion = '1';
$leadsFormSecret = 'bac7714a8f41505ab12d75311ccbb11a6374e38b1a010d69111c84a652cfa0f3'; // spam-shield HMAC (matches leads fn LEADS_FORM_SECRET)
