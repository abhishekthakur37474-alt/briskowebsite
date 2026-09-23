<?php
$pageMeta = [
    'title' => 'Privacy Policy | Brisko Pizza',
    'description' => 'Privacy policy for the Brisko Pizza website and franchise enquiry form.',
];
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <div class="page-hero-bg legal" aria-hidden="true"></div>
    <div class="container">
        <h1 class="display display-lg">Privacy Policy</h1>
        <p class="lead">How Brisko Pizza handles information submitted through this website.</p>
    </div>
</section>

<section class="section">
    <div class="container legal-content">
        <p>This page is a professional placeholder until a final legal policy is supplied. It describes the intended use of information collected on this website.</p>
        <h2>Information we collect</h2>
        <p>When you submit a franchise enquiry, we may collect your name, mobile number, email address, city, state, preferred location, investment range, property information and any message you choose to share.</p>
        <h2>How we use it</h2>
        <p>Enquiry details are used only to contact you about Brisko Pizza franchise opportunities and related brand conversations. We do not sell personal information.</p>
        <h2>Contact</h2>
        <p>For privacy questions, please call <?php echo e(BUSINESS_PHONE_DISPLAY); ?> or message us on WhatsApp.</p>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
