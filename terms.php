<?php
$pageMeta = [
    'title' => 'Terms & Conditions | Brisko Pizza',
    'description' => 'Terms and conditions for using the Brisko Pizza website and submitting franchise enquiries.',
];
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <div class="page-hero-bg legal" aria-hidden="true"></div>
    <div class="container">
        <h1 class="display display-lg">Terms &amp; Conditions</h1>
        <p class="lead">Please read these terms before using this website.</p>
    </div>
</section>

<section class="section">
    <div class="container legal-content">
        <p>This page is a professional placeholder until final legal terms are supplied by the business.</p>
        <h2>Website use</h2>
        <p>Content on this website is provided for general information about the Brisko Pizza brand and franchise conversations. It is not a franchise offer, financial projection or guarantee of business results.</p>
        <h2>Enquiries</h2>
        <p>Submitting an enquiry does not create a franchise agreement. Franchise investment and requirements are discussed during the enquiry process.</p>
        <h2>Contact</h2>
        <p>For questions, call <?php echo e(BUSINESS_PHONE_DISPLAY); ?> or chat with us on WhatsApp.</p>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
