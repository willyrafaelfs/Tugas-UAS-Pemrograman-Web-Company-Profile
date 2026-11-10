<section id="about" class="about-section section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="about-content">
                    <span class="section-subtitle">Who We Are</span>
                    <h2 class="section-title mb-4">Crafting Digital Excellence Since 2012</h2>
                    <p class="mb-4">
                        WillPerfect Studio is a premier software house specializing in custom web and mobile solutions. 
                        We transform business challenges into innovative digital experiences through cutting-edge 
                        technologies and user-centric design.
                    </p>
                    
                    <div class="about-features">
                        <div class="single-feature wow fadeInUp" data-wow-delay="0.1s">
                            <div class="feature-icon">
                                <i class="flaticon-team"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Elite Development Team</h5>
                                <p>50 certified experts with 100+ years combined experience in Laravel, React, and Flutter</p>
                            </div>
                        </div>
                        
                        <div class="single-feature wow fadeInUp" data-wow-delay="0.3s">
                            <div class="feature-icon">
                                <i class="flaticon-innovation"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Proven Methodologies</h5>
                                <p>Agile development with 98% project success rate and on-time delivery</p>
                            </div>
                        </div>
                        
                        <div class="single-feature wow fadeInUp" data-wow-delay="0.5s">
                            <div class="feature-icon">
                                <i class="flaticon-customer-service"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Dedicated Support</h5>
                                <p>24/7 maintenance and 1-hour response time for critical issues</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="about-img">
                    <img src="<?= base_url('assets/onova/images/about-team.jpg') ?>" alt="WillPerfect Studio Team" class="img-fluid rounded">
                    <div class="about-experience">
                        <h3>2<span class="counter">12</span>+</h3>
                        <p>Years in Digital Innovation</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Company Stats -->
        <div class="row mt-5 pt-4">
            <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="single-counter text-center">
                    <h3>120<span class="counter">237</span>+</h3>
                    <p>Projects Delivered</p>
                </div>
            </div>
            <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="single-counter text-center">
                    <h3>70<span class="counter">153</span>+</h3>
                    <p>Satisfied Clients</p>
                </div>
            </div>
            <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="single-counter text-center">
                    <h3>15<span class="counter">18</span>+</h3>
                    <p>Tech Experts</p>
                </div>
            </div>
            <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="single-counter text-center">
                    <h3>3<span class="counter">27</span>+</h3>
                    <p>Industry Awards</p>
                </div>
            </div>
        </div>

        <!-- Technology Stack -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="section-title text-center wow fadeInUp">
                    <span>Our Tech Stack</span>
                    <h2>Technologies We Master</h2>
                </div>
                <div class="tech-stack-container wow fadeInUp" data-wow-delay="0.2s">
                    <div class="tech-item">
                        <img src="https://github.com/laravel/art/blob/master/laravel-logo.png?raw=true" alt="Laravel" title="Laravel">
                        <span>Laravel</span>
                    </div>
                    <div class="tech-item">
                        <img src="https://cdn4.iconfinder.com/data/icons/logos-3/600/React.js_logo-1024.png" alt="React" title="React">
                        <span>React</span>
                    </div>
                    <div class="tech-item">
                        <img src="https://github.com/vuejs/art/blob/master/logo.png?raw=true" alt="Vue.js" title="Vue.js">
                        <span>Vue.js</span>
                    </div>
                    <div class="tech-item">
                        <img src="https://img.icons8.com/?size=96&id=7I3BjCqe9rjG&format=png" alt="Flutter" title="Flutter">
                        <span>Flutter</span>
                    </div>
                    <div class="tech-item">
                        <img src="https://nodejs.org/static/logos/jsIconGreen.svg" alt="Node.js" title="Node.js">
                        <span>Node.js</span>
                    </div>
                    <div class="tech-item">
                        <img src="https://img.icons8.com/?size=96&id=33039&format=png" alt="AWS" title="AWS">
                        <span>AWS</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Tech Stack Styles */
    .tech-stack-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        margin-top: 40px;
    }
    
    .tech-item {
        text-align: center;
        transition: all 0.3s ease;
    }
    
    .tech-item img {
        width: 60px;
        height: 60px;
        object-fit: contain;
        margin-bottom: 10px;
        filter: grayscale(100%);
        opacity: 0.7;
        transition: all 0.3s ease;
    }
    
    .tech-item span {
        display: block;
        font-size: 14px;
        color: var(--dark);
        font-weight: 500;
    }
    
    .tech-item:hover img {
        filter: grayscale(0);
        opacity: 1;
        transform: translateY(-5px);
    }
</style>