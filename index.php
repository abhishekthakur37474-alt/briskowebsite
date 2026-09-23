<?php
$pageMeta = [
    'title' => 'Brisko Pizza | Pure Vegetarian Pizza & Franchise',
    'description' => 'Brisko Pizza is a pure vegetarian pizza brand serving delicious food with no onion and no garlic. Explore Brisko Pizza and franchise opportunities.',
];
require __DIR__ . '/includes/header.php';
$whatsappHref = whatsapp_url();
?>

<section class="hero" id="home">
    <div class="hero-bg" aria-hidden="true"></div>
    <div class="container">
        <div class="hero-content" data-aos="fade-up">
            <p class="eyebrow">100% Pure Vegetarian</p>
            <h1 class="display display-xl">Pure Veg.<br>Pure Taste.<br>Pure Brisko.</h1>
            <p class="lead">Experience a pizza brand crafted for families who believe great taste can be completely vegetarian.</p>
            <div class="hero-actions">
                <a class="btn btn-primary btn-cta" href="#intro">Explore Brisko <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                <a class="btn btn-outline-light btn-cta" href="<?php echo e(site_url('franchise.php')); ?>">Get Franchise <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                <a class="btn btn-ghost" href="<?php echo e($whatsappHref); ?>" target="_blank" rel="noopener noreferrer">Enquire on WhatsApp <i class="bi bi-whatsapp" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="section" id="intro">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <div class="media-frame intro-media">
                    <img src="<?php echo e(asset_url('images/intro-pizza.webp')); ?>?v=2" alt="Fresh vegetarian pizza prepared with care at Brisko Pizza" width="1536" height="1024" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up">
                <p class="eyebrow">The Brand</p>
                <h2 class="display display-lg">More Than Pizza.<br>It's Brisko.</h2>
                <p class="lead">Brisko Pizza is a pure vegetarian pizza brand focused on taste, quality and a family-friendly experience. Every pizza is made without onion and garlic, so families can enjoy a clean, comforting meal they can trust.</p>
                <ul class="feature-list">
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>100% Vegetarian</span></li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>No Onion &amp; No Garlic</span></li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>Family Friendly</span></li>
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
            <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="0">
                <article class="value-card">
                    <div class="value-num">01</div>
                    <i class="hgi-stroke hgi-leaf-01" aria-hidden="true"></i>
                    <h3>100% Pure Veg</h3>
                    <p>A completely vegetarian pizza brand, prepared with care for families who want food they can enjoy with confidence.</p>
                </article>
            </div>
            <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="80">
                <article class="value-card">
                    <div class="value-num">02</div>
                    <i class="bi bi-shield-check" aria-hidden="true"></i>
                    <h3>No Onion. No Garlic.</h3>
                    <p>Every recipe is crafted without onion and garlic, keeping flavour rich while staying true to the Brisko standard.</p>
                </article>
            </div>
            <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="160">
                <article class="value-card">
                    <div class="value-num">03</div>
                    <i class="bi bi-stars" aria-hidden="true"></i>
                    <h3>Quality Ingredients</h3>
                    <p>Fresh produce, thoughtful preparation and hygiene-led kitchens so every pizza tastes clean, generous and satisfying.</p>
                </article>
            </div>
            <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="240">
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
            <div class="col-lg-6 order-lg-2">
                <div class="media-frame about-media">
                    <img src="<?php echo e(asset_url('images/about-pizza.webp')); ?>" alt="Artisan vegetarian pizza with fresh toppings" width="1400" height="930" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-up">
                <p class="eyebrow">About Us</p>
                <h2 class="display display-lg">About Brisko Pizza</h2>
                <p>Brisko Pizza is a pure vegetarian pizza brand created for families who want great taste without onion or garlic. The idea is simple: pizza should feel generous, hygienic and completely at home on an Indian family table.</p>
                <p>We focus on quality ingredients, careful preparation and a clean cooking philosophy. No shortcuts. No mixed kitchens. Just vegetarian pizza made with passion, served in a warm, family-friendly setting.</p>
                <p>Brisko is also a growing brand with a franchise opportunity for partners who believe in the same values — taste, trust and a vegetarian-first experience.</p>
                <div class="stats" aria-label="Brand values">
                    <div class="stat">
                        <b>100%</b>
                        <span>Veg</span>
                    </div>
                    <div class="stat">
                        <b>0%</b>
                        <span>Onion &amp; Garlic</span>
                    </div>
                    <div class="stat">
                        <b>100%</b>
                        <span>Passion</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cinematic" id="opportunity">
    <div class="cinematic-bg" aria-hidden="true"></div>
    <div class="container">
        <div class="cinematic-inner" data-aos="zoom-in">
            <p class="eyebrow">Franchise</p>
            <h2 class="display display-lg">Good Food.<br>Good Values.<br>Good Business.</h2>
            <p class="lead">Bring Brisko Pizza to your city.</p>
            <a class="btn btn-primary btn-cta" href="<?php echo e(site_url('franchise.php')); ?>">Explore Franchise Opportunity <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
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
            <div class="col-md-6" data-aos="fade-up">
                <article class="value-card">
                    <div class="value-num">01</div>
                    <h3>Growing Brand</h3>
                    <p>A distinctive vegetarian pizza identity with room to grow in cities looking for a trusted, family-friendly concept.</p>
                </article>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="80">
                <article class="value-card">
                    <div class="value-num">02</div>
                    <h3>Pure Vegetarian Concept</h3>
                    <p>A clear culinary position — 100% veg, no onion, no garlic — that stands apart in a crowded pizza market.</p>
                </article>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="160">
                <article class="value-card">
                    <div class="value-num">03</div>
                    <h3>Brand Support</h3>
                    <p>Guidance across branding, setup discussion and operating standards so the Brisko experience stays consistent.</p>
                </article>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="240">
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
            <article class="step" data-aos="fade-up">
                <div class="step-num">01</div>
                <h3>Submit Enquiry</h3>
            </article>
            <article class="step" data-aos="fade-up" data-aos-delay="60">
                <div class="step-num">02</div>
                <h3>Our Team Connects</h3>
            </article>
            <article class="step" data-aos="fade-up" data-aos-delay="120">
                <div class="step-num">03</div>
                <h3>Location Discussion</h3>
            </article>
            <article class="step" data-aos="fade-up" data-aos-delay="180">
                <div class="step-num">04</div>
                <h3>Franchise Discussion</h3>
            </article>
            <article class="step" data-aos="fade-up" data-aos-delay="240">
                <div class="step-num">05</div>
                <h3>Store Setup</h3>
            </article>
            <article class="step" data-aos="fade-up" data-aos-delay="300">
                <div class="step-num">06</div>
                <h3>Launch Brisko Pizza</h3>
            </article>
        </div>
    </div>
</section>

<section class="section" id="enquiry">
    <div class="container">
        <div class="enquiry-panel enquiry-wrap">
            <div class="row g-4 mb-4">
                <div class="col-lg-8" data-aos="fade-up">
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
        <div class="row g-4">
            <div class="col-lg-5" data-aos="fade-up">
                <div class="contact-card">
                    <ul class="contact-list">
                        <li>
                            <i class="bi bi-geo-alt" aria-hidden="true"></i>
                            <div>
                                <strong>Address</strong><br>
                                <?php echo e($businessAddress); ?>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-telephone" aria-hidden="true"></i>
                            <div>
                                <strong>Phone</strong><br>
                                <a href="<?php echo e(phone_tel()); ?>"><?php echo e(BUSINESS_PHONE_DISPLAY); ?></a>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-whatsapp" aria-hidden="true"></i>
                            <div>
                                <strong>WhatsApp</strong><br>
                                <a href="<?php echo e($whatsappHref); ?>" target="_blank" rel="noopener noreferrer"><?php echo e(WHATSAPP_DISPLAY); ?></a>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-instagram" aria-hidden="true"></i>
                            <div>
                                <strong>Instagram</strong><br>
                                <a href="<?php echo e(INSTAGRAM_URL); ?>" target="_blank" rel="noopener noreferrer">@briskopizza</a>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-facebook" aria-hidden="true"></i>
                            <div>
                                <strong>Facebook</strong><br>
                                <a href="<?php echo e(FACEBOOK_URL); ?>" target="_blank" rel="noopener noreferrer">Brisko Pizza</a>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-4 d-flex flex-wrap gap-2">
                        <a class="btn btn-primary btn-cta" href="<?php echo e($whatsappHref); ?>" target="_blank" rel="noopener noreferrer">Chat on WhatsApp <i class="bi bi-whatsapp" aria-hidden="true"></i></a>
                        <a class="btn btn-outline-dark" href="<?php echo e(maps_query_url()); ?>" target="_blank" rel="noopener noreferrer">Get Directions <i class="bi bi-geo-alt" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-up">
                <div class="map-card">
                    <?php if (has_real_address()): ?>
                        <iframe class="map-frame" src="<?php echo e(maps_embed_url()); ?>" title="Brisko Pizza location map" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php else: ?>
                        <div class="map-placeholder">
                            <div>
                                <p><strong>Location coming soon.</strong></p>
                                <p>The store address will appear here once it is confirmed. Use Get Directions after the address is updated in configuration.</p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
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
