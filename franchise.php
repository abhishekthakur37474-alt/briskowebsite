<?php
$pageMeta = [
    'title' => 'Franchise | Brisko Pizza',
    'description' => 'Own a Brisko Pizza franchise. Bring a trusted 100% vegetarian, no onion no garlic pizza brand to your city.',
];
require __DIR__ . '/includes/header.php';
$whatsappHref = whatsapp_url();
?>

<section class="page-hero">
    <div class="page-hero-bg franchise" aria-hidden="true"></div>
    <div class="container">
        <p class="eyebrow">Franchise</p>
        <h1 class="display display-lg">Own a Brisko Pizza Franchise</h1>
        <p class="lead">Bring a trusted vegetarian pizza experience to your city.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="media-frame">
                    <img src="<?php echo e(asset_url('images/fresh-veg.webp')); ?>" alt="Fresh vegetarian pizza ingredients" width="1400" height="930" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up">
                <p class="eyebrow">The Opportunity</p>
                <h2 class="display display-lg">A focused vegetarian pizza brand.</h2>
                <p>Brisko Pizza is built around a clear idea: premium vegetarian pizza with no onion and no garlic, served in a family-friendly setting. For franchise partners, that clarity is the advantage — a distinctive concept, a trustworthy kitchen standard and a brand that feels at home with Indian families.</p>
                <p>We look for partners who care about quality, hospitality and long-term brand building. Franchise investment and requirements are discussed during the enquiry process.</p>
                <div class="hero-actions">
                    <a class="btn btn-primary btn-cta" href="<?php echo e(site_url('enquiry.php')); ?>">Start Franchise Enquiry <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                    <a class="btn btn-outline-dark" href="<?php echo e($whatsappHref); ?>" target="_blank" rel="noopener noreferrer">Chat on WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section values">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8" data-aos="fade-up">
                <h2 class="display display-lg">Why partners choose Brisko</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6" data-aos="fade-up">
                <article class="value-card">
                    <div class="value-num">01</div>
                    <h3>Growing Brand</h3>
                    <p>A distinctive identity with space to grow in cities looking for a trusted vegetarian pizza concept.</p>
                </article>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="80">
                <article class="value-card">
                    <div class="value-num">02</div>
                    <h3>Pure Vegetarian Concept</h3>
                    <p>100% veg, no onion, no garlic — a culinary position that is easy to understand and hard to copy casually.</p>
                </article>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="160">
                <article class="value-card">
                    <div class="value-num">03</div>
                    <h3>Brand Support</h3>
                    <p>Conversation and guidance around branding, location and operating standards to keep the Brisko experience consistent.</p>
                </article>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="240">
                <article class="value-card">
                    <div class="value-num">04</div>
                    <h3>Business Opportunity</h3>
                    <p>A focused food brand for entrepreneurs ready to build something meaningful. Specifics are shared after enquiry.</p>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="section process">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-8" data-aos="fade-up">
                <p class="eyebrow">Process</p>
                <h2 class="display display-lg">Six steps to launch</h2>
            </div>
        </div>
        <div class="timeline">
            <article class="step" data-aos="fade-up"><div class="step-num">01</div><h3>Submit Enquiry</h3></article>
            <article class="step" data-aos="fade-up" data-aos-delay="60"><div class="step-num">02</div><h3>Our Team Connects</h3></article>
            <article class="step" data-aos="fade-up" data-aos-delay="120"><div class="step-num">03</div><h3>Location Discussion</h3></article>
            <article class="step" data-aos="fade-up" data-aos-delay="180"><div class="step-num">04</div><h3>Franchise Discussion</h3></article>
            <article class="step" data-aos="fade-up" data-aos-delay="240"><div class="step-num">05</div><h3>Store Setup</h3></article>
            <article class="step" data-aos="fade-up" data-aos-delay="300"><div class="step-num">06</div><h3>Launch Brisko Pizza</h3></article>
        </div>
    </div>
</section>

<section class="final-cta">
    <div class="final-cta-bg" aria-hidden="true"></div>
    <div class="container">
        <div class="final-inner" data-aos="fade-up">
            <h2 class="display display-lg">Ready to Bring Brisko Pizza to Your City?</h2>
            <p class="lead">Take the first step towards becoming a Brisko Pizza franchise partner.</p>
            <div class="hero-actions justify-content-center">
                <a class="btn btn-primary btn-cta" href="<?php echo e(site_url('enquiry.php')); ?>">Start Franchise Enquiry <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                <a class="btn btn-outline-light btn-cta" href="<?php echo e($whatsappHref); ?>" target="_blank" rel="noopener noreferrer">Chat on WhatsApp <i class="bi bi-whatsapp" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
