<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'WillPerfect Studio' ?></title>

    <!-- Onova CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/onova/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/onova/css/animate.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/onova/css/default.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/onova/css/jquery-ui.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/onova/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/onova/css/nice-select.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/onova/css/responsive.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/onova/css/slick.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/onova/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/onova/css/custom.css') ?>">

    <!-- Fonts -->
    <link rel="stylesheet" href="<?= base_url('assets/onova/fonts/gilory/giloryfont.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/onova/fonts/flaticon/flaticon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/onova/fonts/fontawesome/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/onova/fonts/pe7stroke/css/pe-icon-7-stroke.css') ?>">
    
    <style>
        :root {
            --primary: #2a5ee8;
            --primary-dark: #1a4bc8;
            --secondary: #f86f03;
            --light: #f8f9fa;
            --dark: #212529;
        }
        
        body {
            font-family: 'Gilroy', sans-serif;
            overflow-x: hidden;
        }
        
        /* Navbar Enhanced */
        .navbar {
            padding: 15px 0;
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            padding: 10px 0;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            font-weight: 800;
            font-size: 24px;
        }
        
        .nav-link {
            font-weight: 500;
            margin: 0 8px;
            position: relative;
            padding: 8px 0 !important;
        }
        
        .nav-link:before {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: white;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover:before,
        .nav-link.active:before {
            width: 100%;
        }
        
        /* Hero Section */
        #home {
            padding-top: 100px;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8ed 100%);
        }
        
        /* Section Padding */
        section {
            padding: 100px 0;
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            padding: 30px 0;
        }
        
        /* Buttons */
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        /* Animations */
        .wow {
            visibility: hidden;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 991.98px) {
            section {
                padding: 60px 0;
            }
            
            .navbar-collapse {
                background-color: var(--primary);
                padding: 20px;
                margin-top: 15px;
                border-radius: 5px;
            }
        }
    </style>
</head>
<body>

<!-- Navbar Enhanced -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand wow fadeInLeft" href="#home">WillPerfect Studio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item wow fadeInRight" data-wow-delay="0.1s"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item wow fadeInRight" data-wow-delay="0.2s"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item wow fadeInRight" data-wow-delay="0.3s"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item wow fadeInRight" data-wow-delay="0.4s"><a class="nav-link" href="#products">Products</a></li>
                <li class="nav-item wow fadeInRight" data-wow-delay="0.5s"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                <li class="nav-item wow fadeInRight" data-wow-delay="0.6s"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                <li class="nav-item wow fadeInRight" data-wow-delay="0.7s"><a class="nav-link" href="#contact">Contact</a></li>
                <li class="nav-item wow fadeInRight" data-wow-delay="0.8s"><a class="nav-link" href="<?= base_url('admin/login') ?>">Admin</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main>
    <?= $this->renderSection('content') ?>
</main>

<!-- Footer Enhanced -->
<footer class="text-white py-5">
    <div class="container">
        <div class="row wow fadeInUp">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h3 class="mb-3" style="color: white;">WillPerfect Studio</h3>
                <p>Transforming ideas into exceptional digital experiences through innovative web and software solutions.</p>
                <div class="social-icons mt-3">
                    <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <h5 class="mb-3">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#home" class="text-white">Home</a></li>
                    <li class="mb-2"><a href="#about" class="text-white">About</a></li>
                    <li class="mb-2"><a href="#services" class="text-white">Services</a></li>
                    <li class="mb-2"><a href="#portfolio" class="text-white">Portfolio</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="mb-3">Contact Us</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Jl. Sudirman Kav. 52-53
Jakarta 12190, Indonesia</li>
                    <li class="mb-2"><i class="fas fa-phone me-2"></i> +62 21 1234 5678</li>
                    <li class="mb-2"><i class="fas fa-envelope me-2"></i> hello@willperfectstudio.com</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="mb-3">Newsletter</h5>
                <p>Subscribe to our newsletter for the latest updates.</p>
                <form class="mt-3">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Your Email">
                        <button class="btn btn-primary" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
        <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.1);">
        <div class="row wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0">&copy; <?= date('Y') ?> WillPerfect Studio. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <small><a href="<?= base_url('admin/login') ?>" class="text-white">Admin Login</a></small>
            </div>
        </div>
    </div>
</footer>

<!-- JS Vendor -->
<script src="<?= base_url('assets/onova/js/vendor/jquery-3.6.0.min.js') ?>"></script>
<script src="<?= base_url('assets/onova/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/onova/js/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/onova/js/imagesloaded.min.js') ?>"></script>
<script src="<?= base_url('assets/onova/js/isotope.min.js') ?>"></script>
<script src="<?= base_url('assets/onova/js/jquery.counterup.min.js') ?>"></script>
<script src="<?= base_url('assets/onova/js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?= base_url('assets/onova/js/jquery.nice-number.min.js') ?>"></script>
<script src="<?= base_url('assets/onova/js/jquery.nice-select.min.js') ?>"></script>
<script src="<?= base_url('assets/onova/js/jquery.waypoints.js') ?>"></script>
<script src="<?= base_url('assets/onova/js/jquery-ui.min.js') ?>"></script>
<script src="<?= base_url('assets/onova/js/slick.min.js') ?>"></script>
<script src="<?= base_url('assets/onova/js/wow.min.js') ?>"></script>
<script src="<?= base_url('assets/onova/js/main.js') ?>"></script>

<script>
    // Initialize Wow.js
    new WOW().init();
    
    // Navbar scroll effect
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('.navbar').addClass('scrolled');
        } else {
            $('.navbar').removeClass('scrolled');
        }
    });
    
    // Smooth scroll for nav links
    $('a[href*="#"]').on('click', function(e) {
        e.preventDefault();
        
        $('html, body').animate(
            {
                scrollTop: $($(this).attr('href')).offset().top - 70,
            },
            500,
            'linear'
        );
    });
    
    // Active nav highlight on scroll
    $(window).scroll(function() {
        var scrollDistance = $(window).scrollTop() + 80;
        
        $('section').each(function(i) {
            if ($(this).position().top <= scrollDistance) {
                $('.nav-link.active').removeClass('active');
                $('.nav-link').eq(i).addClass('active');
            }
        });
    }).scroll();
    
    // Initialize other plugins
    $(document).ready(function() {
        // Nice Select
        $('select').niceSelect();
        
        // Magnific Popup
        $('.popup-image').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
        
        // Counter Up
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>

<script src="<?= base_url('assets/onova/js/slick.min.js') ?>"></script>
<script>
    $(document).ready(function(){
        $('.testimonial-slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            dots: false,
            responsive: [
                { breakpoint: 992, settings: { slidesToShow: 2 }},
                { breakpoint: 768, settings: { slidesToShow: 1 }}
            ]
        });
    });
</script>

</body>
</html>