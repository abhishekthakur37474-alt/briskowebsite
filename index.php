<?php
$pageMeta = [
    'title' => 'Brisko Pizza | Pure Vegetarian Pizza & Franchise',
    'description' => 'Brisko Pizza is a pure vegetarian pizza brand. Enjoy classic veg pizzas and a dedicated no onion, no garlic category. Explore Brisko Pizza and franchise opportunities.',
];
require __DIR__ . '/includes/header.php';
$whatsappHref = whatsapp_url();
?>

<section class="hero" id="home">
    <div class="hero-bg" aria-hidden="true"></div>
    <div class="container">
        <div class="hero-content">
            <p class="eyebrow reveal-hero" style="--d: 0ms">100% Pure Vegetarian</p>
            <h1 class="display display-xl reveal-hero" style="--d: 90ms">Pure Veg.<br>Pure Taste.<br>Pure Brisko.</h1>
            <p class="lead reveal-hero" style="--d: 180ms">Experience a pizza brand crafted for families who believe great taste can be completely vegetarian.</p>
            <div class="hero-actions reveal-hero" style="--d: 280ms">
                <a class="btn btn-primary btn-cta" href="<?php echo e(site_url('order.php')); ?>">Order on App <i class="bi bi-phone" aria-hidden="true"></i></a>
                <a class="btn btn-outline-light btn-cta" href="<?php echo e(site_url('franchise.php')); ?>">Get Franchise <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                <a class="btn btn-ghost" href="<?php echo e($whatsappHref); ?>" target="_blank" rel="noopener noreferrer">Enquire on WhatsApp <i class="bi bi-whatsapp" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="section" id="intro">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="media-frame intro-media">
                    <img src="<?php echo e(asset_url('images/intro-pizza.webp')); ?>?v=2" alt="Fresh vegetarian pizza prepared with care at Brisko Pizza" width="1536" height="1024" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <p class="eyebrow">The Brand</p>
                <h2 class="display display-lg">More Than Pizza.<br>It's Brisko.</h2>
                <p class="lead">Brisko Pizza is a pure vegetarian pizza brand focused on taste, quality and a family-friendly experience. Choose from classic veg pizzas, plus a dedicated no onion and no garlic category for families who prefer it that way.</p>
                <ul class="feature-list">
                    <li data-aos="fade-up" data-aos-delay="80"><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>100% Vegetarian</span></li>
                    <li data-aos="fade-up" data-aos-delay="160"><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>No Onion &amp; No Garlic category</span></li>
                    <li data-aos="fade-up" data-aos-delay="240"><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>Family Friendly</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section values" id="why">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-7" data-aos="fade-up">
                <p class="eyebrow">Why Brisko?</p>
                <h2 class="display display-lg">A pizza brand built on taste, values and trust.</h2>
                <p class="lead">Clean ingredients. Honest cooking. A family-first experience designed for Indian homes that prefer vegetarian food without compromise.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-xl-3" data-aos="zoom-in-up" data-aos-delay="0">
                <article class="value-card">
                    <div class="value-num">01</div>
                    <i class="hgi-stroke hgi-leaf-01" aria-hidden="true"></i>
                    <h3>100% Pure Veg</h3>
                    <p>A completely vegetarian pizza brand, prepared with care for families who want food they can enjoy with confidence.</p>
                </article>
            </div>
            <div class="col-md-6 col-xl-3" data-aos="zoom-in-up" data-aos-delay="80">
                <article class="value-card">
                    <div class="value-num">02</div>
                    <i class="bi bi-shield-check" aria-hidden="true"></i>
                    <h3>No Onion. No Garlic.</h3>
                    <p>A dedicated category for families who prefer pizza without onion and garlic — same Brisko taste, prepared the way they like it.</p>
                </article>
            </div>
            <div class="col-md-6 col-xl-3" data-aos="zoom-in-up" data-aos-delay="160">
                <article class="value-card">
                    <div class="value-num">03</div>
                    <i class="bi bi-stars" aria-hidden="true"></i>
                    <h3>Quality Ingredients</h3>
                    <p>Fresh produce, thoughtful preparation and hygiene-led kitchens so every pizza tastes clean, generous and satisfying.</p>
                </article>
            </div>
            <div class="col-md-6 col-xl-3" data-aos="zoom-in-up" data-aos-delay="240">
                <article class="value-card">
                    <div class="value-num">04</div>
                    <i class="bi bi-people" aria-hidden="true"></i>
                    <h3>Made for Every Family</h3>
                    <p>Warm, welcoming and easy to love — Brisko is built for shared tables, weekend gatherings and everyday comfort.</p>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="section" id="about">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                <div class="media-frame about-media">
                    <img src="<?php echo e(asset_url('images/about-pizza.webp')); ?>" alt="Artisan vegetarian pizza with fresh toppings" width="1400" height="930" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <p class="eyebrow">About Us</p>
                <h2 class="display display-lg">About Brisko Pizza</h2>
                <p>Brisko Pizza is a pure vegetarian pizza brand created for families who want great taste they can trust. The idea is simple: pizza should feel generous, hygienic and completely at home on an Indian family table — including a no onion and no garlic category for those who prefer it.</p>
                <p>We focus on quality ingredients, careful preparation and a clean cooking philosophy. No shortcuts. No mixed kitchens. Just vegetarian pizza made with passion, served in a warm, family-friendly setting.</p>
                <p>Brisko is also a growing brand with a franchise opportunity for partners who believe in the same values — taste, trust and a vegetarian-first experience.</p>
                <div class="stats" aria-label="Brand values">
                    <div class="stat" data-aos="fade-up" data-aos-delay="80">
                        <b>100%</b>
                        <span>Veg</span>
                    </div>
                    <div class="stat" data-aos="fade-up" data-aos-delay="160">
                        <b>Jain</b>
                        <span>Friendly Options</span>
                    </div>
                    <div class="stat" data-aos="fade-up" data-aos-delay="240">
                        <b>100%</b>
                        <span>Passion</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section app-band" id="order">
    <div class="container">
        <div class="app-panel" data-aos="fade-up">
            <div class="row align-items-center g-4">
                <div class="col-lg-7" data-aos="fade-right">
                    <p class="eyebrow">Official App</p>
                    <h2 class="display display-lg">Order Brisko from the App</h2>
                    <p class="lead">Brisko Pizza has its own application. Browse the menu, checkout and order fresh vegetarian pizza — including a no onion and no garlic category.</p>
                    <ul class="feature-list app-feature-list">
                        <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>View the full menu in the app</span></li>
                        <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>Checkout and pay in a few taps</span></li>
                        <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>Track your order to the door</span></li>
                    </ul>
                    <div class="hero-actions">
                        <a class="btn btn-primary btn-cta" href="<?php echo e(APP_PLAY_STORE_URL); ?>" target="_blank" rel="noopener noreferrer">
                            <i class="bi bi-google-play" aria-hidden="true"></i>
                            Get it on Google Play
                        </a>
                        <a class="btn btn-outline-dark" href="<?php echo e(site_url('order.php')); ?>">How ordering works <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="app-badge-card" data-aos="zoom-in" data-aos-delay="180">
                        <img class="logo-mark" src="<?php echo e(asset_url('icons/logo.png')); ?>?v=2" alt="Brisko Pizza" width="64" height="64">
                        <h3>Brisko Pizza App</h3>
                        <p>Menu, checkout and delivery — built for Brisko families.</p>
                        <a class="play-badge" href="<?php echo e(APP_PLAY_STORE_URL); ?>" target="_blank" rel="noopener noreferrer" aria-label="Get Brisko Pizza on Google Play">
                            <i class="bi bi-google-play" aria-hidden="true"></i>
                            <span>
                                <small>GET IT ON</small>
                                Google Play
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section franchise-block" id="franchise">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8" data-aos="fade-up">
                <p class="eyebrow">Own a Brisko</p>
                <h2 class="display display-lg">Own a Brisko Pizza Franchise</h2>
                <p class="lead">Bring a trusted vegetarian pizza experience to your city. Brisko is built for partners who want a clean brand, a focused concept and a family-first food business.</p>
                <p>Franchise investment and requirements are discussed during the enquiry process.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6" data-aos="zoom-in-up">
                <article class="value-card">
                    <div class="value-num">01</div>
                    <h3>Growing Brand</h3>
                    <p>A distinctive vegetarian pizza identity with room to grow in cities looking for a trusted, family-friendly concept.</p>
                </article>
            </div>
            <div class="col-md-6" data-aos="zoom-in-up" data-aos-delay="80">
                <article class="value-card">
                    <div class="value-num">02</div>
                    <h3>Pure Vegetarian Concept</h3>
                    <p>A clear culinary position — 100% veg, with a no onion and no garlic category — that stands apart in a crowded pizza market.</p>
                </article>
            </div>
            <div class="col-md-6" data-aos="zoom-in-up" data-aos-delay="160">
                <article class="value-card">
                    <div class="value-num">03</div>
                    <h3>Brand Support</h3>
                    <p>Guidance across branding, setup discussion and operating standards so the Brisko experience stays consistent.</p>
                </article>
            </div>
            <div class="col-md-6" data-aos="zoom-in-up" data-aos-delay="240">
                <article class="value-card">
                    <div class="value-num">04</div>
                    <h3>Business Opportunity</h3>
                    <p>A focused food brand for entrepreneurs who want to build something meaningful in their city. Details are shared after enquiry.</p>
                </article>
            </div>
        </div>
        <div class="mt-5">
            <a class="btn btn-primary btn-cta" href="<?php echo e(site_url('enquiry.php')); ?>">Start Franchise Enquiry <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
        </div>
    </div>
</section>

<section class="section process" id="process">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-up">
                <p class="eyebrow">How it works</p>
                <h2 class="display display-lg">From enquiry to opening day.</h2>
                <p class="lead">A simple, professional process designed to help the right partners bring Brisko Pizza to their city.</p>
            </div>
        </div>
        <div class="timeline">
            <article class="step" data-aos="flip-up">
                <div class="step-num">01</div>
                <h3>Submit Enquiry</h3>
            </article>
            <article class="step" data-aos="flip-up" data-aos-delay="70">
                <div class="step-num">02</div>
                <h3>Our Team Connects</h3>
            </article>
            <article class="step" data-aos="flip-up" data-aos-delay="140">
                <div class="step-num">03</div>
                <h3>Location Discussion</h3>
            </article>
            <article class="step" data-aos="flip-up" data-aos-delay="210">
                <div class="step-num">04</div>
                <h3>Franchise Discussion</h3>
            </article>
            <article class="step" data-aos="flip-up" data-aos-delay="280">
                <div class="step-num">05</div>
                <h3>Store Setup</h3>
            </article>
            <article class="step" data-aos="flip-up" data-aos-delay="350">
                <div class="step-num">06</div>
                <h3>Launch Brisko Pizza</h3>
            </article>
        </div>
    </div>
</section>

<section class="section" id="enquiry">
    <div class="container">
        <div class="enquiry-panel enquiry-wrap" data-aos="fade-up">
            <div class="row g-4 mb-4">
                <div class="col-lg-8">
                    <p class="eyebrow">Franchise Enquiry</p>
                    <h2 class="display display-lg">Interested in a Brisko Pizza Franchise?</h2>
                    <p class="lead">Share a few details and our team will get in touch. Franchise investment and requirements are discussed during the enquiry process.</p>
                </div>
            </div>
            <?php $formId = 'homeFranchiseForm'; include __DIR__ . '/includes/enquiry-form.php'; ?>
        </div>
    </div>
</section>

<section class="section" id="contact">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-7" data-aos="fade-up">
                <p class="eyebrow">Visit &amp; Connect</p>
                <h2 class="display display-lg">Visit Brisko Pizza</h2>
                <p class="lead">Speak with us about the brand, a visit, or a franchise conversation. We are happy to connect on call or WhatsApp.</p>
            </div>
        </div>
        <?php include __DIR__ . '/includes/visit-panel.php'; ?>
    </div>
</section>

<section class="final-cta">
    <div class="final-cta-bg" aria-hidden="true"></div>
    <div class="container">
        <div class="final-inner" data-aos="zoom-in">
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
