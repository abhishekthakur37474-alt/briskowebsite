<?php
$pageMeta = [
    'title' => 'Order Pizza | Brisko Pizza App',
    'description' => 'Order Brisko Pizza from the official app. Browse the menu, checkout and track your vegetarian pizza order — including a no onion and no garlic category.',
];
require __DIR__ . '/includes/header.php';
$playStoreUrl = APP_PLAY_STORE_URL;
?>

<section class="page-hero">
    <div class="page-hero-bg order" aria-hidden="true"></div>
    <div class="container">
        <p class="eyebrow reveal-hero" style="--d: 0ms">Official App</p>
        <h1 class="display display-lg reveal-hero" style="--d: 90ms">Order Brisko Pizza from the App</h1>
        <p class="lead reveal-hero" style="--d: 180ms">Browse the menu, checkout and get fresh vegetarian pizza delivered — all from the Brisko Pizza app.</p>
    </div>
</section>

<section class="section" id="order-app">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <p class="eyebrow">Download</p>
                <h2 class="display display-lg">Your pizza, a few taps away.</h2>
                <p class="lead">Brisko Pizza has its own ordering app. Open the menu, customise your pizza, checkout securely and track your order — without leaving the Brisko experience.</p>
                <ul class="feature-list">
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>Full menu inside the app</span></li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>Easy checkout &amp; secure payments</span></li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>100% veg, plus no onion &amp; no garlic options</span></li>
                </ul>
                <div class="hero-actions mt-4">
                    <a class="btn btn-primary btn-cta store-btn" href="<?php echo e($playStoreUrl); ?>" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-google-play" aria-hidden="true"></i>
                        Get it on Google Play
                    </a>
                </div>
                <p class="store-note">Menu, prices and checkout live in the app — not on this website.</p>
            </div>
            <div class="col-lg-6">
                <div class="app-mockup" data-aos="zoom-in" data-aos-delay="160">
                    <div class="phone-shell" aria-hidden="true">
                        <div class="phone-notch"></div>
                        <div class="phone-screen">
                            <div class="app-screen-head">
                                <img src="<?php echo e(asset_url('icons/logo.png')); ?>?v=2" alt="" width="36" height="36">
                                <div>
                                    <strong>BRISKO</strong>
                                    <span>Pure Veg Pizza</span>
                                </div>
                            </div>
                            <div class="app-screen-hero">
                                <img src="<?php echo e(asset_url('images/intro-pizza.webp')); ?>" alt="" width="280" height="160">
                            </div>
                            <p class="app-screen-label">Order in the app</p>
                            <div class="app-screen-tiles">
                                <span>Menu</span>
                                <span>Checkout</span>
                                <span>Track</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section values" id="app-features">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8" data-aos="fade-up">
                <p class="eyebrow">In the App</p>
                <h2 class="display display-lg">Menu, checkout and delivery — in one place.</h2>
                <p class="lead">Everything you need to order Brisko Pizza is inside the official application.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-xl-3" data-aos="fade-up">
                <article class="value-card">
                    <div class="value-num">01</div>
                    <i class="bi bi-journal-richtext" aria-hidden="true"></i>
                    <h3>Browse the Menu</h3>
                    <p>Explore vegetarian pizzas and sides in the Brisko app — including a dedicated no onion and no garlic category.</p>
                </article>
            </div>
            <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="80">
                <article class="value-card">
                    <div class="value-num">02</div>
                    <i class="bi bi-bag-check" aria-hidden="true"></i>
                    <h3>Checkout Easily</h3>
                    <p>Add to cart, confirm your details and pay inside the app — a smooth checkout built for the Brisko kitchen.</p>
                </article>
            </div>
            <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="160">
                <article class="value-card">
                    <div class="value-num">03</div>
                    <i class="bi bi-geo-alt" aria-hidden="true"></i>
                    <h3>Track Your Order</h3>
                    <p>Follow your order from the kitchen to your door so you know when your pizza is on the way.</p>
                </article>
            </div>
            <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="240">
                <article class="value-card">
                    <div class="value-num">04</div>
                    <i class="bi bi-shield-check" aria-hidden="true"></i>
                    <h3>Family Trusted</h3>
                    <p>The same Brisko promise in every order: clean vegetarian food, prepared with care for Indian families.</p>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="section process" id="how-to-order">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-up">
                <p class="eyebrow">How to order</p>
                <h2 class="display display-lg">Four steps to Brisko at home.</h2>
            </div>
        </div>
        <div class="timeline order-steps">
            <article class="step" data-aos="fade-up">
                <div class="step-num">01</div>
                <h3>Download the App</h3>
                <p>Install Brisko Pizza from Google Play.</p>
            </article>
            <article class="step" data-aos="fade-up" data-aos-delay="60">
                <div class="step-num">02</div>
                <h3>Open the Menu</h3>
                <p>Browse pizzas and sides inside the app.</p>
            </article>
            <article class="step" data-aos="fade-up" data-aos-delay="120">
                <div class="step-num">03</div>
                <h3>Checkout</h3>
                <p>Confirm your cart, address and payment.</p>
            </article>
            <article class="step" data-aos="fade-up" data-aos-delay="180">
                <div class="step-num">04</div>
                <h3>Enjoy Brisko</h3>
                <p>Track delivery and enjoy pure veg pizza.</p>
            </article>
        </div>
        <div class="mt-5 text-lg-start text-center">
            <a class="btn btn-primary btn-cta" href="<?php echo e($playStoreUrl); ?>" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-google-play" aria-hidden="true"></i>
                Download Brisko Pizza App
            </a>
        </div>
    </div>
</section>

<section class="final-cta">
    <div class="final-cta-bg" aria-hidden="true"></div>
    <div class="container">
        <div class="final-inner" data-aos="zoom-in">
            <h2 class="display display-lg">Hungry for Brisko?</h2>
            <p class="lead">Download the official app to view the menu, checkout and order vegetarian pizza.</p>
            <div class="hero-actions justify-content-center">
                <a class="btn btn-primary btn-cta" href="<?php echo e($playStoreUrl); ?>" target="_blank" rel="noopener noreferrer">Get it on Google Play <i class="bi bi-google-play" aria-hidden="true"></i></a>
                <a class="btn btn-outline-light btn-cta" href="<?php echo e(whatsapp_url('Hello Brisko Pizza, I would like to order.')); ?>" target="_blank" rel="noopener noreferrer">Order on WhatsApp <i class="bi bi-whatsapp" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
