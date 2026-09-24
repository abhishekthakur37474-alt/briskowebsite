        <div class="visit-panel" data-aos="fade-up">
            <div class="visit-map">
                <?php if (has_real_address()): ?>
                    <iframe class="map-frame" src="<?php echo e(maps_embed_url()); ?>" title="Brisko Pizza location map" width="100%" height="480" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"></iframe>
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
