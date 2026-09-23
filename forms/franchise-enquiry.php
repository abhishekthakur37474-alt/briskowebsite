<?php
require_once dirname(__DIR__) . '/includes/config.php';

header('Content-Type: application/json; charset=utf-8');

function json_response($ok, $message, $errors = [], $code = 200)
{
    http_response_code($code);
    echo json_encode([
        'ok' => $ok,
        'message' => $message,
        'errors' => $errors,
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

function client_ip()
{
    $ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
    return filter_var($ip, FILTER_VALIDATE_IP) ? $ip : '0.0.0.0';
}

function load_json_file($path)
{
    if (!is_file($path)) {
        return [];
    }
    $raw = file_get_contents($path);
    $data = json_decode($raw, true);
    return is_array($data) ? $data : [];
}

function save_json_file($path, $data)
{
    if (!is_dir(dirname($path))) {
        mkdir(dirname($path), 0750, true);
    }
    $fp = fopen($path, 'c+');
    if (!$fp) {
        return false;
    }
    flock($fp, LOCK_EX);
    ftruncate($fp, 0);
    rewind($fp);
    fwrite($fp, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    fflush($fp);
    flock($fp, LOCK_UN);
    fclose($fp);
    return true;
}

function check_rate_limit($ip)
{
    $now = time();
    $store = load_json_file(RATE_LIMIT_FILE);
    $hits = isset($store[$ip]) && is_array($store[$ip]) ? $store[$ip] : [];
    $hits = array_values(array_filter($hits, function ($t) use ($now) {
        return is_int($t) && ($now - $t) < RATE_LIMIT_WINDOW;
    }));
    if (count($hits) >= RATE_LIMIT_MAX) {
        $store[$ip] = $hits;
        save_json_file(RATE_LIMIT_FILE, $store);
        return false;
    }
    $hits[] = $now;
    $store[$ip] = $hits;
    save_json_file(RATE_LIMIT_FILE, $store);
    return true;
}

function clip_text($value, $max)
{
    if (function_exists('mb_substr')) {
        return mb_substr($value, 0, $max);
    }
    return substr($value, 0, $max);
}

function clean_text($value, $max = 200)
{
    $value = trim(str_replace(["\r", "\n", "\0"], ' ', (string) $value));
    $value = preg_replace('/\s+/', ' ', $value);
    return clip_text($value, $max);
}

function clean_multiline($value, $max = 2000)
{
    $value = str_replace("\0", '', (string) $value);
    $value = trim($value);
    return clip_text($value, $max);
}

function header_safe($value)
{
    return str_replace(["\r", "\n", "%0a", "%0d"], '', $value);
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    json_response(false, 'Invalid request method.', [], 405);
}

if (!empty($_POST['website'])) {
    json_response(true, 'Thank you for your interest in Brisko Pizza. Our team will get in touch with you shortly.');
}

$token = $_POST['csrf_token'] ?? '';
$sessionToken = $_SESSION['csrf_token'] ?? '';
if ($token === '' || $sessionToken === '' || !hash_equals($sessionToken, $token)) {
    json_response(false, 'Your session expired. Please refresh the page and try again.', [], 403);
}

if (!check_rate_limit(client_ip())) {
    json_response(false, 'Too many submissions. Please try again later.', [], 429);
}

$states = json_decode(INDIAN_STATES, true);
$ranges = json_decode(INVESTMENT_RANGES, true);

$name = clean_text($_POST['full_name'] ?? '', 80);
$mobile = preg_replace('/\D+/', '', clean_text($_POST['mobile'] ?? '', 20));
$email = clean_text($_POST['email'] ?? '', 120);
$city = clean_text($_POST['city'] ?? '', 80);
$state = clean_text($_POST['state'] ?? '', 80);
$location = clean_text($_POST['preferred_location'] ?? '', 120);
$investment = clean_text($_POST['investment'] ?? '', 80);
$property = clean_text($_POST['property'] ?? '', 20);
$message = clean_multiline($_POST['message'] ?? '', 1500);
$consent = isset($_POST['consent']) && $_POST['consent'] === '1';

$errors = [];

$nameLen = function_exists('mb_strlen') ? mb_strlen($name) : strlen($name);
if ($name === '' || $nameLen < 2) {
    $errors['full_name'] = 'Please enter your full name.';
} elseif (!preg_match('/^[\p{L}\s.\'-]{2,80}$/u', $name)) {
    $errors['full_name'] = 'Name contains invalid characters.';
}

if (!preg_match('/^[6-9]\d{9}$/', $mobile)) {
    $errors['mobile'] = 'Enter a valid 10-digit Indian mobile number.';
}

if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Enter a valid email address.';
}

if ($city === '') {
    $errors['city'] = 'Please enter your city.';
}

if ($state === '' || !in_array($state, $states, true)) {
    $errors['state'] = 'Please select a valid state.';
}

if ($investment !== '' && !in_array($investment, $ranges, true)) {
    $errors['investment'] = 'Please select a valid investment range.';
}

if ($property !== '' && !in_array($property, ['Yes', 'No', 'Not sure'], true)) {
    $errors['property'] = 'Please select a valid option.';
}

if (!$consent) {
    $errors['consent'] = 'Please agree to be contacted regarding franchise opportunities.';
}

if ($errors) {
    json_response(false, 'Please correct the highlighted fields.', $errors, 422);
}

$enquiry = [
    'id' => bin2hex(random_bytes(8)),
    'created_at' => date('c'),
    'ip' => client_ip(),
    'full_name' => $name,
    'mobile' => $mobile,
    'email' => $email,
    'city' => $city,
    'state' => $state,
    'preferred_location' => $location,
    'investment' => $investment,
    'property' => $property,
    'message' => $message,
];

$log = load_json_file(ENQUIRY_LOG);
$log[] = $enquiry;
save_json_file(ENQUIRY_LOG, $log);

$subject = header_safe('New Brisko Pizza franchise enquiry from ' . $name);
$bodyLines = [
    'A new franchise enquiry was submitted on the Brisko Pizza website.',
    '',
    'Name: ' . $name,
    'Mobile: ' . $mobile,
    'Email: ' . ($email !== '' ? $email : 'Not provided'),
    'City: ' . $city,
    'State: ' . $state,
    'Preferred location: ' . ($location !== '' ? $location : 'Not provided'),
    'Investment range: ' . ($investment !== '' ? $investment : 'Not provided'),
    'Owns commercial property: ' . ($property !== '' ? $property : 'Not provided'),
    '',
    'Message:',
    $message !== '' ? $message : 'Not provided',
    '',
    'Submitted at: ' . $enquiry['created_at'],
];
$body = implode("\n", $bodyLines);

$from = header_safe(FROM_EMAIL);
$fromName = header_safe(FROM_NAME);
$headers = [
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'From: ' . $fromName . ' <' . $from . '>',
    'Reply-To: ' . ($email !== '' ? header_safe($email) : $from),
    'X-Mailer: BriskoPizzaWebsite',
];

@mail(ADMIN_EMAIL, $subject, $body, implode("\r\n", $headers));

json_response(true, 'Thank you for your interest in Brisko Pizza. Our team will get in touch with you shortly.');
