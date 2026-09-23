<?php
$pageMeta = [
    'title' => 'Franchise Enquiry | Brisko Pizza',
    'description' => 'Submit a Brisko Pizza franchise enquiry. Our team will connect with you to discuss the vegetarian pizza brand opportunity.',
];
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <div class="page-hero-bg enquiry" aria-hidden="true"></div>
    <div class="container">
        <p class="eyebrow">Enquiry</p>
        <h1 class="display display-lg">Interested in a Brisko Pizza Franchise?</h1>
        <p class="lead">Share your details. Franchise investment and requirements are discussed during the enquiry process.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="enquiry-panel enquiry-wrap">
            <?php $formId = 'pageFranchiseForm'; include __DIR__ . '/includes/enquiry-form.php'; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
