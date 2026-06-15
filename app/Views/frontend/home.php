<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section Enhanced -->
<section id="home" class="hero-area d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="wow fadeInUp" data-wow-delay="0.3s">Crafting Digital Excellence with WillPerfect Studio</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.5s">Your trusted partner for innovative web development and software solutions that drive business growth</p>
                    <div class="hero-btn wow fadeInUp" data-wow-delay="0.7s">
                        <a href="#services" class="btn btn-primary me-3">Explore Services</a>
                        <a href="#contact" class="btn btn-outline-primary">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.5s">
                <div class="hero-img">
                    <img src="https://i.pinimg.com/736x/e5/60/a1/e560a10150384bb607881dc0620324d6.jpg" alt="Hero Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Each partial below is a self-contained <section>; do not wrap them again -->
<?= $this->include('frontend/partials/about') ?>
<?= $this->include('frontend/partials/services') ?>
<?= $this->include('frontend/partials/products') ?>
<?= $this->include('frontend/partials/portfolio') ?>
<?= $this->include('frontend/partials/testimonials') ?>
<?= $this->include('frontend/partials/contact') ?>

<?= $this->endSection() ?>
