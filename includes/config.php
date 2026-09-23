<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

define('SITE_NAME', 'Brisko Pizza');
define('SITE_TAGLINE', 'Pure vegetarian pizza with no onion and no garlic.');
define('SITE_URL', '');

define('ADMIN_EMAIL', 'franchise@example.com');
define('FROM_EMAIL', 'noreply@example.com');
define('FROM_NAME', 'Brisko Pizza Website');

define('BUSINESS_PHONE', '9410000428');
define('BUSINESS_PHONE_DISPLAY', '9410000428');
define('WHATSAPP_NUMBER', '919410000428');
define('WHATSAPP_DISPLAY', '9410000428');
define('WHATSAPP_MESSAGE', 'Hello Brisko Pizza, I am interested in your franchise opportunity.');

define('INSTAGRAM_URL', 'https://www.instagram.com/briskopizza?stkn=ZXZ6a2YxY2syYzlv');
define('FACEBOOK_URL', 'https://www.facebook.com/share/1CCptywkKV/');

$businessAddress = 'Brisko Pizza, Delhi - Haridwar Rd, near RMP (PG) College, Roorkee, Gurukul Narsan, Uttarakhand 247670';
define('MAPS_SHARE_URL', 'https://maps.app.goo.gl/S12ay4rZQwqjTr9W9?g_st=iw');
define('MAPS_EMBED_QUERY', 'Brisko pizza, Delhi - Haridwar Rd, near RMP (PG) Collage, Roorkee, Gurukul Narsan, Uttarakhand 247670');

define('INDIAN_STATES', json_encode([
    'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh',
    'Goa', 'Gujarat', 'Haryana', 'Himachal Pradesh', 'Jharkhand', 'Karnataka',
    'Kerala', 'Madhya Pradesh', 'Maharashtra', 'Manipur', 'Meghalaya', 'Mizoram',
    'Nagaland', 'Odisha', 'Punjab', 'Rajasthan', 'Sikkim', 'Tamil Nadu',
    'Telangana', 'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal',
    'Andaman and Nicobar Islands', 'Chandigarh', 'Dadra and Nagar Haveli and Daman and Diu',
    'Delhi', 'Jammu and Kashmir', 'Ladakh', 'Lakshadweep', 'Puducherry'
]));

define('INVESTMENT_RANGES', json_encode([
    'To be discussed',
    'Below 10 Lakhs',
    '10 – 20 Lakhs',
    '20 – 35 Lakhs',
    '35 – 50 Lakhs',
    '50 Lakhs and above'
]));

define('DATA_DIR', dirname(__DIR__) . '/data');
define('ENQUIRY_LOG', DATA_DIR . '/enquiries.json');
define('RATE_LIMIT_FILE', DATA_DIR . '/rate_limit.json');
define('RATE_LIMIT_MAX', 5);
define('RATE_LIMIT_WINDOW', 3600);

function site_url($path = '')
{
    $base = rtrim(SITE_URL, '/');
    $path = ltrim($path, '/');
    if ($base === '') {
        return $path === '' ? '/' : '/' . $path;
    }
    return $path === '' ? $base . '/' : $base . '/' . $path;
}

function asset_url($path)
{
    return site_url('assets/' . ltrim($path, '/'));
}

function whatsapp_url($message = WHATSAPP_MESSAGE)
{
    return 'https://wa.me/' . WHATSAPP_NUMBER . '?text=' . rawurlencode($message);
}

function phone_tel()
{
    return 'tel:+91' . preg_replace('/\D+/', '', BUSINESS_PHONE);
}

function maps_query_url()
{
    return MAPS_SHARE_URL;
}

function maps_embed_url()
{
    return 'https://maps.google.com/maps?q=' . rawurlencode(MAPS_EMBED_QUERY) . '&output=embed';
}

function has_real_address()
{
    return true;
}

function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function csrf_token()
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function csrf_field()
{
    return '<input type="hidden" name="csrf_token" value="' . e(csrf_token()) . '">';
}

function current_page()
{
    $script = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
    return pathinfo($script, PATHINFO_FILENAME);
}

function nav_active($page)
{
    return current_page() === $page ? ' is-active' : '';
}

function page_meta($overrides = [])
{
    $defaults = [
        'title' => 'Brisko Pizza | Pure Vegetarian Pizza & Franchise',
        'description' => 'Brisko Pizza is a pure vegetarian pizza brand serving delicious food with no onion and no garlic. Explore Brisko Pizza and franchise opportunities.',
        'canonical' => '',
        'og_image' => asset_url('images/og-cover.jpg'),
        'page' => current_page(),
    ];
    return array_merge($defaults, $overrides);
}
