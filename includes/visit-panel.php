        <div class="visit-panel" data-aos="fade-up">
            <div class="row g-0">
                <div class="col-lg-5">
                    <div class="visit-info">
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
                <div class="col-lg-7">
                    <div class="visit-map">
                        <?php if (has_real_address()): ?>
                            <iframe class="map-frame" src="<?php echo e(maps_embed_url()); ?>" title="Brisko Pizza location map" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <?php else: ?>
                            <div class="map-placeholder">
                                <div>
                                    <p><strong>Location coming soon.</strong></p>
                                    <p>The store address will appear here once it is confirmed.</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
