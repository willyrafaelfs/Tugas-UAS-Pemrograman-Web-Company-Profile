<section id="contact" class="contact-section section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-title text-center wow fadeInUp">
                    <span>Let's Collaborate</span>
                    <h2>Get in Touch</h2>
                    <p class="mt-3">Ready to start your project? Contact us today for a free consultation.</p>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-5 wow fadeInLeft">
                <div class="contact-info bg-white p-4 rounded shadow-sm">
                    <h4 class="mb-4">Our Contact Details</h4>
                    
                    <div class="single-contact-info mb-4">
                        <div class="contact-icon bg-primary-light">
                            <i class="fas fa-map-marker-alt text-primary"></i>
                        </div>
                        <div class="contact-content">
                            <h5>Headquarters</h5>
                            <p>Level 12, Tower A, TechPark<br>Jl. Sudirman Kav. 52-53<br>Jakarta 12190, Indonesia</p>
                        </div>
                    </div>

                    <div class="single-contact-info mb-4">
                        <div class="contact-icon bg-primary-light">
                            <i class="fas fa-phone-alt text-primary"></i>
                        </div>
                        <div class="contact-content">
                            <h5>Phone</h5>
                            <p>+62 21 1234 5678 (Office)<br>+62 812 3456 7890 (WhatsApp)</p>
                        </div>
                    </div>

                    <div class="single-contact-info mb-4">
                        <div class="contact-icon bg-primary-light">
                            <i class="fas fa-envelope text-primary"></i>
                        </div>
                        <div class="contact-content">
                            <h5>Email</h5>
                            <p>hello@willperfectstudio.com<br>support@willperfectstudio.com</p>
                        </div>
                    </div>

                    <div class="single-contact-info">
                        <div class="contact-icon bg-primary-light">
                            <i class="fas fa-clock text-primary"></i>
                        </div>
                        <div class="contact-content">
                            <h5>Working Hours</h5>
                            <p>Monday - Friday: 9:00 - 18:00<br>Saturday: 10:00 - 15:00</p>
                        </div>
                    </div>

                    <div class="social-links mt-4 pt-3">
                        <h5 class="mb-3">Follow Us</h5>
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-dribbble"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.2s">
                <div class="contact-form-wrapper bg-white p-4 rounded shadow-sm">
                    <h4 class="mb-4">Send Us a Message</h4>
                    
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i>
                            <?= session()->getFlashdata('success') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            <?= session()->getFlashdata('error') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('contact/send') ?>" method="post" class="contact-form">
                        <?= csrf_field() ?>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="John Doe" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="john@example.com" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-group">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Project Inquiry">
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-group">
                                <label for="message" class="form-label">Your Message</label>
                                <textarea name="message" id="message" class="form-control" rows="5" placeholder="Tell us about your project..." required></textarea>
                            </div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="consent" required>
                            <label class="form-check-label" for="consent">I agree to the <a href="#" class="text-primary">privacy policy</a> and <a href="#" class="text-primary">terms of service</a></label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100">
                            <span>Send Message</span>
                            <i class="fas fa-paper-plane ms-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Google Map -->
        <div class="row mt-5 wow fadeInUp">
            <div class="col-12">
                <div class="map-container rounded shadow-sm overflow-hidden">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.81956135068636!3d-6.194741395493371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5390917b759%3A0x6b462cb53016c758!2sTechPark%20Tower%20A!5e0!3m2!1sen!2sid!4v1621234567890!5m2!1sen!2sid" 
                            width="100%" 
                            height="450" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .contact-info {
        height: 100%;
    }
    
    .single-contact-info {
        display: flex;
        margin-bottom: 25px;
    }
    
    .contact-icon {
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        border-radius: 50%;
        margin-right: 15px;
        flex-shrink: 0;
    }
    
    .bg-primary-light {
        background-color: rgba(42, 94, 232, 0.1);
    }
    
    .contact-content h5 {
        font-size: 18px;
        margin-bottom: 5px;
        color: var(--dark);
    }
    
    .contact-content p {
        margin-bottom: 0;
        color: var(--dark);
        opacity: 0.8;
    }
    
    .social-links {
        border-top: 1px solid rgba(0,0,0,0.05);
    }
    
    .social-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        background: rgba(0,0,0,0.05);
        color: var(--dark);
        border-radius: 50%;
        margin-right: 10px;
        transition: all 0.3s ease;
    }
    
    .social-icon:hover {
        background: var(--primary);
        color: white;
        transform: translateY(-3px);
    }
    
    .contact-form label {
        font-weight: 500;
        margin-bottom: 8px;
        display: block;
    }
    
    .contact-form .form-control {
        height: 50px;
        border: 1px solid rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }
    
    .contact-form .form-control:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 0.25rem rgba(42, 94, 232, 0.25);
    }
    
    .contact-form textarea.form-control {
        height: auto;
        resize: none;
    }
    
    .map-container {
        position: relative;
        overflow: hidden;
        padding-top: 56.25%;
    }
    
    .map-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }
</style>