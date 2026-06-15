<section id="portfolio" class="portfolio-section section-padding bg-light">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-title text-center wow fadeInUp">
                    <span>Our Masterpieces</span>
                    <h2>Innovative Digital Solutions</h2>
                    <p class="mt-3">Discover how we've helped businesses transform through technology</p>
                </div>
            </div>
        </div>

        <!-- Portfolio Filter -->
        <?php if (!empty($categories)): ?>
        <div class="row mt-5">
            <div class="col-12 mb-5">
                <div class="portfolio-filter wow fadeInUp">
                    <button class="active" data-filter="*">All</button>
                    <?php foreach ($categories as $category): ?>
                        <button data-filter=".<?= esc($category['slug']) ?>">
                            <?= esc($category['name']) ?>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <!-- Portfolio Items -->
        <div class="row portfolio-items">
            <?php if (!empty($portfolio)): ?>
                <?php foreach ($portfolio as $index => $item): ?>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item <?= esc($item['category_slug'] ?? '') ?> wow fadeInUp" 
                         data-wow-delay="<?= (0.1 * $index) ?>s">
                        <div class="single-portfolio">
                            <div class="portfolio-img">
                                <img src="<?= base_url('uploads/portfolio/' . esc($item['image'])) ?>" 
                                     class="img-fluid" 
                                     alt="<?= esc($item['title']) ?>">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-content">
                                        <h5><?= esc($item['title']) ?></h5>
                                        <p><?= esc($item['description'] ?? 'Uncategorized') ?></p>
                                        <a href="<?= base_url('uploads/portfolio/' . esc($item['image'])) ?>" 
                                           class="portfolio-popup">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                        <?php if (!empty($item['project_url'])): ?>
                                            <a href="<?= esc($item['project_url']) ?>" class="portfolio-link" target="_blank">
                                                <i class="fas fa-link"></i>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center mt-4">No portfolio items available at the moment.</p>
            <?php endif; ?>
        </div>

        <!-- Pagination (Optional) -->
        <?php if (isset($pager) && $pager->getPageCount() > 1): ?>
        <div class="row mt-5">
            <div class="col-12 text-center wow fadeInUp">
                <?= $pager->links() ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
