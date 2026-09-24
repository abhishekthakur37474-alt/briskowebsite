<?php
$pageMeta = [
    'title' => 'Contact | Brisko Pizza',
    'description' => 'Contact Brisko Pizza by outlet number or WhatsApp. Follow the brand on Instagram and Facebook.',
];
require __DIR__ . '/includes/header.php';
$whatsappHref = whatsapp_url();
?>

<section class="page-hero">
    <div class="page-hero-bg contact" aria-hidden="true"></div>
    <div class="container">
        <p class="eyebrow" data-aos="fade-up">Contact</p>
        <h1 class="display display-lg" data-aos="fade-up" data-aos-delay="80">Visit Brisko Pizza</h1>
        <p class="lead" data-aos="fade-up" data-aos-delay="140">We would love to hear from you — about the brand, a visit, or a franchise conversation.</p>
    </div>
</section>

<section class="section">
    <div class="container" data-aos="fade-up">
        <?php include __DIR__ . '/includes/visit-panel.php'; ?>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
