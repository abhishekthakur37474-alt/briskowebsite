<?php
require_once __DIR__ . '/config.php';
$meta = page_meta($pageMeta ?? []);
$page = $meta['page'];
$isHome = ($page === 'index');
$canonical = $meta['canonical'] !== '' ? $meta['canonical'] : '';
$ogUrl = $canonical !== '' ? $canonical : '';
$whatsappHref = whatsapp_url();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($meta['title']); ?></title>
    <meta name="description" content="<?php echo e($meta['description']); ?>">
    <meta name="theme-color" content="#111111">
    <meta name="robots" content="index, follow">
    <?php if ($canonical !== ''): ?>
    <link rel="canonical" href="<?php echo e($canonical); ?>">
    <?php endif; ?>
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo e(SITE_NAME); ?>">
    <meta property="og:title" content="<?php echo e($meta['title']); ?>">
    <meta property="og:description" content="<?php echo e($meta['description']); ?>">
    <meta property="og:image" content="<?php echo e($meta['og_image']); ?>">
    <?php if ($ogUrl !== ''): ?>
    <meta property="og:url" content="<?php echo e($ogUrl); ?>">
    <?php endif; ?>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo e($meta['title']); ?>">
    <meta name="twitter:description" content="<?php echo e($meta['description']); ?>">
    <meta name="twitter:image" content="<?php echo e($meta['og_image']); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset_url('icons/favicon.png')); ?>?v=2">
    <link rel="apple-touch-icon" href="<?php echo e(asset_url('icons/apple-touch-icon.png')); ?>?v=2">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset_url('css/style.css')); ?>?v=14">
    <?php if ($isHome): ?>
    <link rel="preload" as="image" href="<?php echo e(asset_url('images/pizza/farmhouse.webp')); ?>?v=2">
    <?php endif; ?>
    <script type="application/ld+json">
    <?php
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'FoodEstablishment',
        'name' => SITE_NAME,
        'description' => $meta['description'],
        'servesCuisine' => 'Pizza',
        'telephone' => '+91' . preg_replace('/\D+/', '', BUSINESS_PHONE),
        'url' => SITE_URL !== '' ? SITE_URL : '',
        'sameAs' => [INSTAGRAM_URL, FACEBOOK_URL, APP_PLAY_STORE_URL],
        'priceRange' => '',
        'menu' => '',
        'vegetarian' => true,
        'additionalProperty' => [
            ['@type' => 'PropertyValue', 'name' => 'Vegetarian', 'value' => '100% Pure Vegetarian'],
            ['@type' => 'PropertyValue', 'name' => 'No Onion No Garlic', 'value' => 'Dedicated category available'],
        ],
    ];
    if (has_real_address()) {
        global $businessAddress;
        $schema['address'] = [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Delhi - Haridwar Rd, near RMP (PG) College',
            'addressLocality' => 'Roorkee',
            'addressRegion' => 'Uttarakhand',
            'postalCode' => '247670',
            'addressCountry' => 'IN',
        ];
    }
    echo json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    ?>
    </script>
</head>
<body class="page-<?php echo e($page); ?>">
    <a class="skip-link" href="#main">Skip to main content</a>

    <header class="site-header<?php echo $isHome ? ' is-transparent' : ' is-solid'; ?>" id="siteHeader">
        <nav class="navbar navbar-expand-lg site-nav" aria-label="Primary">
            <div class="container nav-inner">
                <a class="navbar-brand brand-logo" href="<?php echo e(site_url('index.php')); ?>" aria-label="Brisko Pizza home">
                    <img class="logo-mark" src="<?php echo e(asset_url('icons/logo.png')); ?>?v=2" alt="Brisko Pizza" width="52" height="52">
                    <span class="brand-lockup">
                        <span class="brand-name">BRISKO</span>
                        <span class="brand-sub">PIZZA</span>
                    </span>
                </a>
                <button class="navbar-toggler nav-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNav" aria-controls="primaryNav" aria-expanded="false" aria-label="Open menu">
                    <span class="nav-toggle-bar"></span>
                    <span class="nav-toggle-bar"></span>
                    <span class="nav-toggle-bar"></span>
                </button>
                <div class="collapse navbar-collapse" id="primaryNav">
                    <ul class="navbar-nav mx-lg-auto nav-links">
                        <li class="nav-item"><a class="nav-link<?php echo nav_active('index'); ?>" href="<?php echo e(site_url('index.php')); ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(site_url('index.php#about')); ?>">About Us</a></li>
                        <li class="nav-item"><a class="nav-link<?php echo nav_active('order'); ?>" href="<?php echo e(site_url('order.php')); ?>">Order</a></li>
                        <li class="nav-item"><a class="nav-link<?php echo nav_active('franchise'); ?>" href="<?php echo e(site_url('franchise.php')); ?>">Franchise</a></li>
                        <li class="nav-item"><a class="nav-link<?php echo nav_active('enquiry'); ?>" href="<?php echo e(site_url('enquiry.php')); ?>">Enquiry</a></li>
                        <li class="nav-item"><a class="nav-link<?php echo nav_active('contact'); ?>" href="<?php echo e(site_url('contact.php')); ?>">Contact</a></li>
                    </ul>
                    <div class="nav-cta">
                        <a class="btn btn-primary btn-cta" href="<?php echo e(site_url('franchise.php')); ?>">Get Franchise <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main id="main">
