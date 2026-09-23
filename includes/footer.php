    </main>
    <footer class="site-footer">
        <div class="container">
            <div class="row g-4 footer-grid">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <a class="footer-brand brand-logo" href="<?php echo e(site_url('index.php')); ?>" aria-label="Brisko Pizza home">
                        <img class="logo-mark" src="<?php echo e(asset_url('icons/logo.png')); ?>?v=2" alt="Brisko Pizza" width="52" height="52">
                        <span class="brand-lockup">
                            <span class="brand-name">BRISKO</span>
                            <span class="brand-sub">PIZZA</span>
                        </span>
                    </a>
                    <p class="footer-tagline">Pure vegetarian pizza, with a no onion and no garlic category.</p>
                    <p class="footer-copy-short">A clean, family-friendly pizza brand built on taste, hygiene and values that Indian families trust.</p>
                </div>
                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <h2 class="footer-heading">Quick Links</h2>
                    <ul class="footer-links">
                        <li><a href="<?php echo e(site_url('index.php')); ?>">Home</a></li>
                        <li><a href="<?php echo e(site_url('index.php#about')); ?>">About Us</a></li>
                        <li><a href="<?php echo e(site_url('order.php')); ?>">Order on App</a></li>
                        <li><a href="<?php echo e(site_url('franchise.php')); ?>">Franchise</a></li>
                        <li><a href="<?php echo e(site_url('enquiry.php')); ?>">Enquiry</a></li>
                        <li><a href="<?php echo e(site_url('contact.php')); ?>">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <h2 class="footer-heading">Connect</h2>
                    <ul class="footer-links">
                        <li><a href="<?php echo e(INSTAGRAM_URL); ?>" target="_blank" rel="noopener noreferrer">Instagram</a></li>
                        <li><a href="<?php echo e(FACEBOOK_URL); ?>" target="_blank" rel="noopener noreferrer">Facebook</a></li>
                        <li><a href="<?php echo e($whatsappHref); ?>" target="_blank" rel="noopener noreferrer">WhatsApp</a></li>
                    </ul>
                    <div class="footer-social">
                        <a href="<?php echo e(INSTAGRAM_URL); ?>" target="_blank" rel="noopener noreferrer" aria-label="Brisko Pizza on Instagram"><i class="bi bi-instagram" aria-hidden="true"></i></a>
                        <a href="<?php echo e(FACEBOOK_URL); ?>" target="_blank" rel="noopener noreferrer" aria-label="Brisko Pizza on Facebook"><i class="bi bi-facebook" aria-hidden="true"></i></a>
                        <a href="<?php echo e($whatsappHref); ?>" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp"><i class="bi bi-whatsapp" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                    <h2 class="footer-heading">Contact</h2>
                    <ul class="footer-links">
                        <li><?php echo e($businessAddress); ?></li>
                        <li><a href="<?php echo e(phone_tel()); ?>"><?php echo e(BUSINESS_PHONE_DISPLAY); ?></a></li>
                        <li><a href="<?php echo e($whatsappHref); ?>" target="_blank" rel="noopener noreferrer">WhatsApp <?php echo e(WHATSAPP_DISPLAY); ?></a></li>
                    </ul>
                    <a class="btn btn-primary btn-cta mt-3" href="<?php echo e(site_url('enquiry.php')); ?>">Get Franchise <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 Brisko Pizza. All Rights Reserved.</p>
                <div class="footer-legal">
                    <a href="<?php echo e(site_url('privacy.php')); ?>">Privacy Policy</a>
                    <a href="<?php echo e(site_url('terms.php')); ?>">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>

    <a class="whatsapp-float" href="<?php echo e($whatsappHref); ?>" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
        <i class="bi bi-whatsapp" aria-hidden="true"></i>
        <span class="whatsapp-float-label">Chat on WhatsApp</span>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js" defer></script>
    <script src="<?php echo e(asset_url('js/script.js')); ?>?v=5" defer></script>
</body>
</html>
