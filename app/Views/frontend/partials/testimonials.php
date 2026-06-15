<section id="testimonials" class="testimonials-section section-padding">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-title text-center wow fadeInUp">
                    <span>Client Success Stories</span>
                    <h2>Trusted by Industry Leaders</h2>
                    <p class="mt-3">Hear what our clients say about working with WillPerfect Studio</p>
                </div>
            </div>
        </div>

        <!-- Testimonials Slider -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="testimonial-slider slick-slider wow fadeInUp">
                    <?php if (!empty($testimonials)): ?>
                        <?php foreach ($testimonials as $testimonial): ?>
                            <div class="single-testimonial text-center p-4 shadow-sm">
                                <div class="testimonial-img mb-3">
                                    <?php if (!empty($testimonial['image'])): ?>
                                        <img src="<?= base_url('uploads/testimonials/' . $testimonial['image']) ?>" 
                                             alt="<?= esc($testimonial['name']) ?>" 
                                             class="rounded-circle img-fluid" style="width: 80px; height: 80px; object-fit: cover;">
                                    <?php else: ?>
                                        <i class="fas fa-user-circle fa-4x text-secondary"></i>
                                    <?php endif; ?>
                                </div>
                                <p class="testimonial-text text-muted">"<?= esc($testimonial['message']) ?>"</p>
                                <h5 class="mt-3"><?= esc($testimonial['name']) ?></h5>
                                <small class="text-primary"><?= esc($testimonial['position'] ?? 'Client') ?></small>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-center">No testimonials available at the moment.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
