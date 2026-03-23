<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Binex Technology</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="Binex">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 56+ ready demos.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" href="css/vendors.min.css"/>
        <link rel="stylesheet" href="css/icon.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/responsive.css"/>
        <link rel="stylesheet" href="demos/modern-business/modern-business.css" />
    </head>
    <body data-mobile-nav-style="classic" class="custom-cursor background-position-center-top" style="background-image: url('images/vertical-line-bg.svg')">
        <div class="box-layout">
            <!-- start header --> 
            @include('components.header')
            <!-- end header --> 
            <!-- start section -->
            <section class="p-0 top-space-margin position-relative cover-background border-radius-10px lg-no-border-radius overflow-visible" style="background-image: url('images/binolex/demo-modern-business-hero-bg.jpg')">
                <div class="absolute-middle-left left-minus-25px">
                    <img src="images/binolex/save.png" class="animation-zoom d-none d-md-block" data-bottom-top="transform:translateY(-50px)" data-top-bottom="transform: translateY(50px)" alt="">
                </div>
                <div class="container-fluid">
                    <div class="row align-items-xxl-center align-items-xl-start">
                        <div class="col-xxl-5 col-lg-6 col-md-12 ps-8 pe-5 sm-p-15px xxl-ps-6 xxl-pe-3 xl-p-4 order-lg-1 order-2" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <div class="ps-15px pe-20px mb-25px text-dark-gray fw-600 fs-13 lh-34 ls-minus-05px border-radius-100px bg-base-transparent-light d-inline-flex align-items-center border border-color-base-transparent"><i class="bi bi-google text-base-color icon-very-small me-5px"></i><span class="flex-shrink-0">Top Rated IT Solutions Provider</span></div>
                            <h1 class="text-dark-gray alt-font fw-700 mb-15px md-w-80 sm-w-100">Empowering Your Business with Premier IT Solutions.</h1>
                            <p class="lh-28 mb-30px md-w-80 sm-w-100">Binex Technology Solutions offers a wide range of IT Services along with many options of License and Product procurements.</p>
                            <div class="d-inline-block w-100 newsletter-style-06 position-relative box-shadow mb-15px">
                                <form action="email-templates/subscribe-newsletter.php" method="post">
                                    <input class="input-large bg-white border-color-white border-radius-10px form-control required" type="email" name="email" placeholder="What�s your work email?">
                                    <input type="hidden" name="redirect" value="">
                                    <button type="submit" class="btn btn-extra-large fw-500 btn-base-color text-transform-none submit" aria-label="submit">Subscribe</button>
                                    <div class="form-results border-radius-4px mt-15px pt-10px pb-10px ps-15px pe-15px fs-15 w-100 text-center position-absolute d-none"></div>
                                </form>
                            </div>
                            <div class="fs-14 lh-24 sm-mb-15px">No credit card needed, Try it free for 30 days.</div>
                        </div>
                        <div class="col-xxl-7 col-lg-6 col-md-12 ms-auto p-0 text-end position-relative order-lg-2 order-1 md-mb-50px">
                            <div class="blur-box bg-white-transparent position-absolute border-radius-10px bottom-100px lg-bottom-150px sm-bottom-0px left-50px sm-left-15px pt-25px pb-25px ps-30px pe-30px sm-p-15px text-center animation-float" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <div class="h-65px w-65px d-flex align-items-center justify-content-center rounded-circle bg-white box-shadow-double-large mx-auto"> 
                                    <i class="bi bi-reception-4 text-base-color fs-30"></i> 
                                </div>
                                <h5 class="alt-font text-dark-gray fw-700 lh-22 mb-0 mt-20px sm-mt-10px">99.9%</h5>
                                <span class="fs-14 text-dark-gray opacity-7">Uptime Guaranteed</span>
                            </div>
                            <img src="images/binolex/hero.png" class="mb-minus-30px" alt=""> 
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
            <!-- start section -->
            <section class="border-bottom border-color-extra-medium-gray half-section" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center mt-10px mb-30px">
                            <div class="alt-font fs-20 fw-500 text-dark-gray ls-minus-05px">Partnering with industry leaders for robust IT solutions.</div>
                        </div>
                    </div>
                    <div class="row position-relative clients-style-08">
                        <div class="col swiper text-center feather-shadow" data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 4000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1400": { "slidesPerView": 6 }, "1200": { "slidesPerView": 5 }, "768": { "slidesPerView": 3 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper marquee-slide">
                                <!-- start client item -->
                                <div class="swiper-slide">
                                    <a href="#"><img src="images/demo-branding-studio-client-02.svg" class="h-25px" alt="" /></a>
                                </div>
                                <!-- end client item -->
                                <!-- start client item -->
                                <div class="swiper-slide">
                                    <a href="#"><img src="images/demo-branding-studio-client-03.svg" class="h-25px" alt="" /></a>
                                </div>
                                <!-- end client item -->
                                <!-- start client item -->
                                <div class="swiper-slide">
                                    <a href="#"><img src="images/demo-branding-studio-client-04.svg" class="h-25px" alt="" /></a>
                                </div>
                                <!-- end client item -->
                                <!-- start client item -->
                                <div class="swiper-slide">
                                    <a href="#"><img src="images/demo-branding-studio-client-05.svg" class="h-25px" alt="" /></a>
                                </div>
                                <!-- end client item -->
                                <!-- start client item -->
                                <div class="swiper-slide">
                                    <a href="#"><img src="images/demo-branding-studio-client-06.svg" class="h-25px" alt="" /></a>
                                </div>
                                <!-- end client item -->
                                <!-- start client item -->
                                <div class="swiper-slide">
                                    <a href="#"><img src="images/demo-branding-studio-client-07.svg" class="h-25px" alt="" /></a>
                                </div>
                                <!-- end client item -->
                                <!-- start client item -->
                                <div class="swiper-slide">
                                    <a href="#"><img src="images/demo-branding-studio-client-02.svg" class="h-25px" alt="" /></a>
                                </div>
                                <!-- end client item -->
                                <!-- start client item -->
                                <div class="swiper-slide">
                                    <a href="#"><img src="images/demo-branding-studio-client-03.svg" class="h-25px" alt="" /></a>
                                </div>
                                <!-- end client item -->
                                <!-- start client item -->
                                <div class="swiper-slide">
                                    <a href="#"><img src="images/demo-branding-studio-client-04.svg" class="h-25px" alt="" /></a>
                                </div>
                                <!-- end client item -->
                                <!-- start client item -->
                                <div class="swiper-slide">
                                    <a href="#"><img src="images/demo-branding-studio-client-05.svg" class="h-25px" alt="" /></a>
                                </div>
                                <!-- end client item -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
            <!-- start section -->
            <section class="position-relative overflow-hidden">
                <img src="images/binolex/circle.png" alt="" class="position-absolute right-10px top-70px lg-top-40px animation-rotation d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center justify-content-center mb-5 sm-mb-0">
                        <div class="col-lg-6 position-relative md-mb-15 sm-mb-25">
                            <div class="w-70 xs-w-80" data-animation-delay="50" data-shadow-animation="true">
                                <img src="images/binolex/it_growth.png" alt="" class="border-radius-10px w-100">
                                <img src="images/binolex/circle.png" alt="" class="position-absolute left-60px bottom-minus-60px animation-rotation d-none d-md-block">
                            </div>
                            <div class="w-50 overflow-hidden position-absolute right-20px xs-right-15px xs-w-60 bottom-minus-50px" data-shadow-animation="true" data-animation-delay="250" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                                <img src="images/binolex/about_sub.png" alt="" class="border-radius-10px w-100 box-shadow-quadruple-large" />
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 ps-6 md-ps-15px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <span class="ps-20px pe-20px pt-5px pb-5px mb-20px text-uppercase alt-font text-base-color fs-12 lh-26 fw-600 alt-font border-radius-100px bg-gradient-very-light-gray-transparent d-inline-flex"><i class="bi bi-award fs-16 me-5px"></i>Your Trusted IT Partner</span>
                            <h2 class="alt-font text-dark-gray fw-700 mb-20px md-w-90">Comprehensive IT solutions for modern enterprises.</h2>
                            <p class="mb-35px sm-mb-25px w-85 md-w-90">Binex Technology Solutions is dedicated to delivering robust IT infrastructure, cybersecurity, and cloud services. We ensure your business operates securely and efficiently with bespoke IT strategies.</p>
                            <div class="progress-bar-style-02 w-90">
                                <!-- start progress bar item -->
                                <div class="progress mb-15px border-radius-50px fw-600 fs-12 lh-12 alt-font text-white bg-white">
                                    <div class="progress-bar bg-gradient-flamingo-red-transparent m-0" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" aria-label="business">
                                        <span class="progress-bar-percent text-flamingo">95%</span>
                                    </div>
                                    <div class="progress-bar-title text-uppercase">IT Reliability</div>
                                </div>
                                <!-- end progress bar item -->
                                <!-- start progress bar item -->
                                <div class="progress border-radius-50px fw-600 fs-12 lh-12 alt-font text-white bg-white">
                                    <div class="progress-bar bg-gradient-base-color-transparent m-0" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" aria-label="technology">
                                        <span class="progress-bar-percent text-base-color">80%</span>
                                    </div>
                                    <div class="progress-bar-title text-uppercase">Cloud Integration</div>
                                </div>
                                <!-- end progress bar item -->
                                <div class="fs-14 lh-24 mt-15px text-dark-gray">Reliable insights powered by the latest data.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
            <!-- start section -->
            <section class="cover-background border-radius-10px overflow-visible" style="background-image: url('images/binolex/service1.jpg')">
                <img src="images/binolex/circle.png" alt="" class="position-absolute left-minus-30px md-left-0px top-minus-80px animation-rotation d-none d-md-block">
                <div class="container-fluid overflow-hidden">
                    <div class="row" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="col-12 text-center">
                            <span class="ps-20px pe-20px pt-5px pb-5px mb-15px text-uppercase alt-font text-base-color fs-12 lh-26 fw-600 alt-font border-radius-100px bg-gradient-very-light-gray-transparent d-inline-flex"><i class="bi bi-box-seam fs-16 me-5px"></i>Services and solutions</span>
                            <h2 class="alt-font text-dark-gray fw-700 ls-minus-05px mb-30px sm-mb-0">Experienced services</h2>
                        </div>
                    </div>
                    <div class="row mb-25px sm-mb-0" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="col-md-12">
                            <div class="outside-box-right-15 outside-box-left-15 sm-outside-box-right-0 sm-outside-box-left-0">
                                <div class="swiper magic-cursor" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "autoplay": { "delay": 250000, "disableOnInteraction": false },  "pagination": { "el": ".slider-four-slide-pagination-1", "clickable": true }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1600": { "slidesPerView": 6 }, "1400": { "slidesPerView": 5 }, "1200": { "slidesPerView": 4 }, "991": { "slidesPerView": 3 }, "768": { "slidesPerView": 3 } }, "effect": "slide" }'>
                                    <div class="swiper-wrapper pt-30px pb-30px">
                                        <!-- start slider item --> 
                                        <div class="swiper-slide box-shadow-extra-large h-auto">
                                            <div class="border-radius-10px bg-white pt-40px pb-40px ps-40px pe-40px xxl-p-30px justify-content-start text-start h-100 d-flex flex-column">
                                                <a href="services-details" class="text-center d-block mb-30px"><img src="images/binolex/sv_hardware.png" alt="Hardware Support" style="height: 250px; width: auto; object-fit: contain;"></a>
                                                <div class="last-paragraph-no-margin text-center text-md-start mt-auto">
                                                    <a href="services-details" class="d-inline-block alt-font text-dark-gray fw-600 fs-18 mb-5px ls-minus-05px" style="min-height: 54px;">Hardware Support & Maintenance</a>
                                                    <p>Reliable support and maintenance to keep your hardware running optimally.</p>
                                                </div>
                                            </div> 
                                        </div>
                                        <!-- end slider item -->
                                        <!-- start slider item -->
                                        <div class="swiper-slide box-shadow-extra-large h-auto"> 
                                            <div class="border-radius-10px bg-white pt-40px pb-40px ps-40px pe-40px xxl-p-30px justify-content-start text-start h-100 d-flex flex-column">
                                                <a href="services-details" class="text-center d-block mb-30px"><img src="images/binolex/sv_software.png" alt="Software Support" style="height: 250px; width: auto; object-fit: contain;"></a>
                                                <div class="last-paragraph-no-margin text-center text-md-start mt-auto">
                                                    <a href="services-details" class="d-inline-block alt-font text-dark-gray fw-600 fs-18 mb-5px ls-minus-05px" style="min-height: 54px;">Software Support</a>
                                                    <p>Expert assistance to resolve your software issues and improve efficiency.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end slider item -->
                                        <!-- start slider item -->
                                        <div class="swiper-slide box-shadow-extra-large h-auto"> 
                                            <div class="border-radius-10px bg-white pt-40px pb-40px ps-40px pe-40px xxl-p-30px justify-content-start text-start h-100 d-flex flex-column">
                                                <a href="services-details" class="text-center d-block mb-30px"><img src="images/binolex/sv_m365.png" alt="Microsoft 365" style="height: 250px; width: auto; object-fit: contain;"></a>
                                                <div class="last-paragraph-no-margin text-center text-md-start mt-auto">
                                                    <a href="services-details" class="d-inline-block alt-font text-dark-gray fw-600 fs-18 mb-5px ls-minus-05px" style="min-height: 54px;">Professional Microsoft 365 Services</a>
                                                    <p>Seamless integration and management for your Microsoft 365 environment.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end slider item --> 
                                        <!-- start slider item -->
                                        <div class="swiper-slide box-shadow-extra-large h-auto"> 
                                            <div class="border-radius-10px bg-white pt-40px pb-40px ps-40px pe-40px xxl-p-30px justify-content-start text-start h-100 d-flex flex-column">
                                                <a href="services-details" class="text-center d-block mb-30px"><img src="images/binolex/sv_cloud.png" alt="Cloud Services" style="height: 250px; width: auto; object-fit: contain;"></a>
                                                <div class="last-paragraph-no-margin text-center text-md-start mt-auto">
                                                    <a href="services-details" class="d-inline-block alt-font text-dark-gray fw-600 fs-18 mb-5px ls-minus-05px" style="min-height: 54px;">Cloud Infrastructure Services</a>
                                                    <p>Scalable and secure cloud solutions tailored to your business needs.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end slider item -->
                                        <!-- start slider item -->
                                        <div class="swiper-slide box-shadow-extra-large h-auto"> 
                                            <div class="border-radius-10px bg-white pt-40px pb-40px ps-40px pe-40px xxl-p-30px justify-content-start text-start h-100 d-flex flex-column">
                                                <a href="services-details" class="text-center d-block mb-30px"><img src="images/binolex/sv_network.png" alt="Network Management" style="height: 250px; width: auto; object-fit: contain;"></a>
                                                <div class="last-paragraph-no-margin text-center text-md-start mt-auto">
                                                    <a href="services-details" class="d-inline-block alt-font text-dark-gray fw-600 fs-18 mb-5px ls-minus-05px" style="min-height: 54px;">Network Management Services</a>
                                                    <p>Comprehensive monitoring and management for robust network performance.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end slider item -->
                                        <!-- start slider item --> 
                                        <div class="swiper-slide box-shadow-extra-large h-auto">
                                            <div class="border-radius-10px bg-white pt-40px pb-40px ps-40px pe-40px xxl-p-30px justify-content-start text-start h-100 d-flex flex-column">
                                                <a href="services-details" class="text-center d-block mb-30px"><img src="images/binolex/sv_security.png" alt="Cybersecurity" style="height: 250px; width: auto; object-fit: contain;"></a>
                                                <div class="last-paragraph-no-margin text-center text-md-start mt-auto">
                                                    <a href="services-details" class="d-inline-block alt-font text-dark-gray fw-600 fs-18 mb-5px ls-minus-05px" style="min-height: 54px;">Cybersecurity Services</a>
                                                    <p>Advanced protection to secure your sensitive data and IT assets.</p>
                                                </div>
                                            </div> 
                                        </div>
                                        <!-- end slider item -->
                                        <!-- start slider item -->
                                        <div class="swiper-slide box-shadow-extra-large h-auto"> 
                                            <div class="border-radius-10px bg-white pt-40px pb-40px ps-40px pe-40px xxl-p-30px justify-content-start text-start h-100 d-flex flex-column">
                                                <a href="services-details" class="text-center d-block mb-30px"><img src="images/binolex/sv_support.png" alt="IT Support" style="height: 250px; width: auto; object-fit: contain;"></a>
                                                <div class="last-paragraph-no-margin text-center text-md-start mt-auto">
                                                    <a href="services-details" class="d-inline-block alt-font text-dark-gray fw-600 fs-18 mb-5px ls-minus-05px" style="min-height: 54px;">Empower your IT Support/Project & Helpdesk Services</a>
                                                    <p>Responsive helpdesk support and efficient IT project implementation.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end slider item -->
                                        <!-- start slider item -->
                                        <div class="swiper-slide box-shadow-extra-large h-auto"> 
                                            <div class="border-radius-10px bg-white pt-40px pb-40px ps-40px pe-40px xxl-p-30px justify-content-start text-start h-100 d-flex flex-column">
                                                <a href="services-details" class="text-center d-block mb-30px"><img src="images/binolex/sv_backup.png" alt="Backup Recovery" style="height: 250px; width: auto; object-fit: contain;"></a>
                                                <div class="last-paragraph-no-margin text-center text-md-start mt-auto">
                                                    <a href="services-details" class="d-inline-block alt-font text-dark-gray fw-600 fs-18 mb-5px ls-minus-05px" style="min-height: 54px;">Backup and Disaster Recovery</a>
                                                    <p>Ensure business continuity with reliable backup and recovery plans.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end slider item --> 
                                        <!-- start slider item -->
                                        <div class="swiper-slide box-shadow-extra-large h-auto"> 
                                            <div class="border-radius-10px bg-white pt-40px pb-40px ps-40px pe-40px xxl-p-30px justify-content-start text-start h-100 d-flex flex-column">
                                                <a href="services-details" class="text-center d-block mb-30px"><img src="images/binolex/sv_hosting.png" alt="Web Hosting" style="height: 250px; width: auto; object-fit: contain;"></a>
                                                <div class="last-paragraph-no-margin text-center text-md-start mt-auto">
                                                    <a href="services-details" class="d-inline-block alt-font text-dark-gray fw-600 fs-18 mb-5px ls-minus-05px" style="min-height: 54px;">Domain Registrar, Web & Email Hosting and Support</a>
                                                    <p>Reliable hosting solutions and support for your online presence.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end slider item -->
                                        <!-- start slider item -->
                                        <div class="swiper-slide box-shadow-extra-large h-auto"> 
                                            <div class="border-radius-10px bg-white pt-40px pb-40px ps-40px pe-40px xxl-p-30px justify-content-start text-start h-100 d-flex flex-column">
                                                <a href="services-details" class="text-center d-block mb-30px"><img src="images/binolex/sv_consulting.png" alt="IT Consulting" style="height: 250px; width: auto; object-fit: contain;"></a>
                                                <div class="last-paragraph-no-margin text-center text-md-start mt-auto">
                                                    <a href="services-details" class="d-inline-block alt-font text-dark-gray fw-600 fs-18 mb-5px ls-minus-05px" style="min-height: 54px;">IT Consulting and Project Services</a>
                                                    <p>Strategic consulting to align your IT with business objectives.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end slider item -->
                                    </div>
                                </div>
                            </div>
                            <!-- start slider pagination -->
                            <!--<div class="swiper-pagination slider-four-slide-pagination-1 swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div>-->
                            <!-- end slider pagination -->
                        </div>
                    </div>
                    <div class="row" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="col-12 text-center">
                            <i class="bi bi-window-fullscreen text-dark-gray d-inline-block align-middle icon-extra-medium me-5px md-m-5px"></i>
                            <div class="fs-20 alt-font text-dark-gray d-inline-block align-middle fw-500 ls-minus-05px">Create your own website in one time without any coding knowledge.</div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
            <!-- start section -->
            <section class="position-relative pb-0">
                <img src="images/binolex/circle.png" alt="" class="position-absolute left-minus-100px top-150px animation-rotation d-none d-xl-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-6 md-mb-50px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <span class="ps-20px pe-20px pt-5px pb-5px mb-15px text-uppercase alt-font text-base-color fs-12 lh-26 fw-600 alt-font border-radius-100px bg-gradient-very-light-gray-transparent d-inline-flex"><i class="bi bi-globe fs-16 me-5px"></i>Trusted by clients worldwide</span>
                            <h2 class="alt-font text-dark-gray fw-700 mb-20px md-w-85">IT solutions that drive your success.</h2>
                            <p class="w-90 sm-w-100">We are passionate about protecting and empowering your business. With years of experience, we constantly provide excellent IT solutions.</p>
                            <div class="icon-with-text-style-08 mb-10px">
                                <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                    <div class="feature-box-icon feature-box-icon-rounded w-35px h-35px border border-1 border-color-extra-medium-gray rounded-circle me-15px">
                                        <i class="bi bi-check fs-22 text-base-color"></i>
                                    </div>
                                    <div class="feature-box-content"> 
                                        <span class="text-dark-gray fw-500">We deliver exactly what your business needs.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-with-text-style-08 mb-10px">
                                <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                    <div class="feature-box-icon feature-box-icon-rounded w-35px h-35px border border-1 border-color-extra-medium-gray rounded-circle me-15px">
                                        <i class="bi bi-check fs-22 text-base-color"></i>
                                    </div>
                                    <div class="feature-box-content"> 
                                        <span class="text-dark-gray fw-500">Reliable project execution with a deadlines.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-with-text-style-08 mb-10px">
                                <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                    <div class="feature-box-icon feature-box-icon-rounded w-35px h-35px border border-1 border-color-extra-medium-gray rounded-circle me-15px">
                                        <i class="bi bi-check fs-22 text-base-color"></i>
                                    </div>
                                    <div class="feature-box-content"> 
                                        <span class="text-dark-gray fw-500">Advanced technologies that are practical and secure.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-35px sm-mt-15px">
                                <a href="about-us" class="btn btn-large btn-base-color btn-switch-text btn-rounded text-transform-none left-icon me-10px sm-mb-15px sm-mt-15px">
                                    <span>
                                        <span><i class="feather icon-feather-edit"></i></span>
                                        <span class="btn-double-text" data-text="Explore details">Explore details</span> 
                                    </span>
                                </a>
                                <a href="services" class="btn btn-large btn-transparent-light-gray btn-switch-text border-0 btn-rounded text-transform-none left-icon me-10px sm-mb-15px sm-mt-15px">
                                    <span> 
                                        <span><i class="feather icon-feather-mail"></i></span>
                                        <span class="btn-double-text" data-text="Start project">Start project</span> 
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-xl-1 position-relative" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <img src="images/binolex/it_growth.png" class="md-w-100" alt="" />
                            <img src="images/binolex/circle.png" alt="" class="position-absolute right-50px lg-right-30px bottom-50px lg-bottom-30px animation-rotation d-none d-md-block">
                            <div class="blur-box bg-white-transparent position-absolute border-radius-10px bottom-100px sm-bottom-0px left-minus-10px sm-left-15px pt-25px pb-25px ps-30px pe-30px text-center box-shadow-extra-large">
                                <div class="h-65px w-65px d-flex align-items-center justify-content-center rounded-circle bg-base-color mx-auto"> 
                                    <i class="bi bi-fire align-middle text-white fs-30"></i> 
                                </div>
                                <h5 class="alt-font text-dark-gray fw-700 lh-22 mb-0 mt-20px">148%</h5>
                                <span class="fs-14 text-dark-gray opacity-7">Uptime & Reliability</span>
                            </div>
                        </div>
                    </div> 
                </div>
            </section>
            <!-- end section -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- start stack card -->
                            <div class="stack-card cards" data-scale="true" data-top-space="35">
                                <div class="stack-item mb-50px" data-index="0">
                                    <img src="images/binolex/ss.jpg" class="position-absolute left-minus-100px bottom-minus-80px sm-bottom-minus-30px" alt="">
                                    <div class="stack-card-item p-70px xl-p-50px sm-p-30px cover-background">
                                        <img src="images/binolex/bg2.png" alt="" class="position-absolute z-index-1 left-0px top-0px h-100 d-none d-lg-block" style="opacity: 0.8; transform: scale(1.1);" data-bottom-top="transform:rotate(0deg) scale(1.1); filter: blur(25px)" data-top-bottom="transform:rotate(-10deg) scale(1.1); filter: blur(90px)">
                                        <div class="row z-index-9 position-relative align-items-center">
                                            <div class="col-xl-8 col-lg-6 md-mb-30px">
                                                <img src="images/binolex/stack_card_1.png">
                                            </div>
                                            <div class="col-xl-4 col-lg-6 pt-6 pb-6 xl-py-0">
                                                <div class="icon-with-text-style-08 mb-20px">
                                                    <div class="feature-box feature-box-left-icon-middle">
                                                        <div class="feature-box-icon feature-box-icon-rounded w-50px h-50px bg-base-transparent-light border-radius-100px me-10px">
                                                            <i class="bi bi-megaphone fs-22 text-base-color"></i>
                                                        </div>
                                                        <div class="feature-box-content">
                                                            <span class="d-inline-block fs-16 fw-500 text-dark-gray">Outstanding speed</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2 class="alt-font text-dark-gray fw-700 mb-20px">Robust Infrastructure.</h2>
                                                <p class="text-medium-gray">We build and maintain a resilient and robust infrastructure tailored perfectly to your operational needs.</p>
                                                <a href="services" class="btn btn-large btn-dark-gray btn-switch-text btn-box-shadow btn-rounded text-transform-none left-icon">
                                                    <span>
                                                        <span><i class="feather icon-feather-edit"></i></span>
                                                        <span class="btn-double-text" data-text="Start exploring">Start exploring</span> 
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="stack-item mb-50px" data-index="1">
                                    <img src="images/binolex/ss.jpg" class="position-absolute left-minus-100px bottom-minus-80px sm-bottom-minus-30px" alt="">
                                    <div class="stack-card-item p-70px xl-p-50px sm-p-30px cover-background">
                                        <img src="images/binolex/bg2.png" alt="" class="position-absolute z-index-1 left-0px top-0px h-100 d-none d-lg-block" style="opacity: 0.8; transform: scale(1.1);" data-bottom-top="transform:rotate(0deg) scale(1.1); filter: blur(25px)" data-top-bottom="transform:rotate(-10deg) scale(1.1); filter: blur(90px)">
                                        <div class="row z-index-9 position-relative align-items-center">
                                            <div class="col-xl-8 col-lg-6 md-mb-30px">
                                                <img src="images/binolex/stack_card_2.png">
                                            </div>
                                            <div class="col-xl-4 col-lg-6 pt-6 pb-6 xl-py-0">
                                                <div class="icon-with-text-style-08 mb-20px">
                                                    <div class="feature-box feature-box-left-icon-middle">
                                                        <div class="feature-box-icon feature-box-icon-rounded w-50px h-50px bg-base-transparent-light border-radius-100px me-10px">
                                                            <i class="bi bi-speedometer2 fs-22 text-base-color"></i>
                                                        </div>
                                                        <div class="feature-box-content">
                                                            <span class="d-inline-block fs-16 fw-500 text-dark-gray">Security Playbook</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2 class="alt-font text-dark-gray fw-700 mb-20px">Advanced Security.</h2>
                                                <p class="text-medium-gray">We build and maintain a resilient and robust infrastructure tailored perfectly to your operational needs.</p>
                                                <a href="services" class="btn btn-large btn-dark-gray btn-switch-text btn-box-shadow btn-rounded text-transform-none left-icon">
                                                    <span>
                                                        <span><i class="feather icon-feather-edit"></i></span>
                                                        <span class="btn-double-text" data-text="Start exploring">Start exploring</span> 
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="stack-item" data-index="2">
                                    <img src="images/binolex/ss.jpg" class="position-absolute left-minus-100px bottom-minus-80px sm-bottom-minus-30px" alt="">
                                    <div class="stack-card-item p-70px xl-p-50px sm-p-30px cover-background">
                                        <img src="images/binolex/bg2.png" alt="" class="position-absolute z-index-1 left-0px top-0px h-100 d-none d-lg-block" style="opacity: 0.8; transform: scale(1.1);" data-bottom-top="transform:rotate(0deg) scale(1.1); filter: blur(25px)" data-top-bottom="transform:rotate(-10deg) scale(1.1); filter: blur(90px)">
                                        <div class="row z-index-9 position-relative align-items-center">
                                            <div class="col-xl-8 col-lg-6 md-mb-30px">
                                                <img src="images/binolex/stack_card_3.png">
                                            </div>
                                            <div class="col-xl-4 col-lg-6 pt-6 pb-6 xl-py-0">
                                                <div class="icon-with-text-style-08 mb-20px">
                                                    <div class="feature-box feature-box-left-icon-middle">
                                                        <div class="feature-box-icon feature-box-icon-rounded w-50px h-50px bg-base-transparent-light border-radius-100px me-10px">
                                                            <i class="bi bi-vector-pen fs-22 text-base-color"></i>
                                                        </div>
                                                        <div class="feature-box-content">
                                                            <span class="d-inline-block fs-16 fw-500 text-dark-gray">Cloud Power</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2 class="alt-font text-dark-gray fw-700 mb-20px">Cloud Scalability.</h2>
                                                <p class="text-medium-gray">We build and maintain a resilient and robust infrastructure tailored perfectly to your operational needs.</p>
                                                <a href="services" class="btn btn-large btn-dark-gray btn-switch-text btn-box-shadow btn-rounded text-transform-none left-icon">
                                                    <span>
                                                        <span><i class="feather icon-feather-edit"></i></span>
                                                        <span class="btn-double-text" data-text="Start exploring">Start exploring</span> 
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end stack card -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- start section -->
            <section class="pt-0">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5">
                            <span class="ps-20px pe-20px pt-5px pb-5px mb-20px text-uppercase alt-font text-base-color fs-12 lh-26 fw-600 alt-font border-radius-100px bg-gradient-very-light-gray-transparent d-inline-flex"><i class="bi bi-headphones fs-16 me-5px"></i>Customer support</span>
                            <h2 class="alt-font text-dark-gray fw-700 mb-15px">Got questions?</h2>
                            <p class="mb-0">If you have any other questions?</p>
                            <p>Please get in touch at <a href="mailto:info@binex.ie" class="text-dark-gray border-bottom border-color-dark-gray fw-500">info@binex.ie</a></p>
                            <div class="border-top border-color-extra-medium-gray mt-30px pt-10px w-100 sm-mt-5px d-flex align-items-center">
                                <span class="fs-18 position-relative text-start">Support executive <span class="fw-600 text-dark-gray d-block">1000+ satisfied.</span></span>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 offset-xl-1">
                            <div class="accordion accordion-style-02" id="accordion-style-02" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                <!-- start accordion item -->
                                <div class="accordion-item active-accordion">
                                    <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01" aria-expanded="true" data-bs-parent="#accordion-style-02">
                                            <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                <i class="feather icon-feather-minus"></i><span class="fs-18 fw-500">What IT services do you offer?</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="accordion-style-02-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                            <p>Our dedicated team of professionals provides comprehensive solutions tailored specifically for your organization's unique requirements.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion item -->
                                <!-- start accordion item -->
                                <div class="accordion-item">
                                    <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                            <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                <i class="feather icon-feather-plus"></i><span class="fs-18 fw-500">Do you provide hardware support?</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="accordion-style-02-02" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                            <p>Our dedicated team of professionals provides comprehensive solutions tailored specifically for your organization's unique requirements.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion item -->
                                <!-- start accordion item -->
                                <div class="accordion-item">
                                    <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-03" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                            <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                <i class="feather icon-feather-plus"></i><span class="fs-18 fw-500">Do you offer Microsoft 365 services?</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="accordion-style-02-03" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                            <p>Our dedicated team of professionals provides comprehensive solutions tailored specifically for your organization's unique requirements.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion item -->
                                <!-- start accordion item -->
                                <div class="accordion-item">
                                    <div class="accordion-header border-bottom border-color-transparent">
                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-04" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                            <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                <i class="feather icon-feather-plus"></i><span class="fs-18 fw-500">Do you handle cybersecurity threats?</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="accordion-style-02-04" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent">
                                            <p>Our dedicated team of professionals provides comprehensive solutions tailored specifically for your organization's unique requirements.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion item -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
            <!-- start section -->
            <section class="cover-background border-radius-10px mb-25px overflow-visible" style="background-image: url('images/binolex/bgpage.jpg')">
                <img src="images/binolex/circle.png" alt="" class="position-absolute left-70px top-minus-50px animation-rotation d-none md-block">
                <div class="container-fluid overflow-hidden">
                    <div class="row" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="col-12 text-center">
                            <span class="ps-20px pe-20px pt-5px pb-5px mb-20px text-uppercase alt-font text-base-color fs-12 lh-26 fw-600 alt-font border-radius-100px bg-gradient-very-light-gray-transparent d-inline-flex"><i class="bi bi-heart-fill fs-16 me-5px"></i>Customer testimonials</span>
                            <h2 class="alt-font text-dark-gray fw-700 mb-15px sm-mb-0">Trusted by clients worldwide</h2>
                        </div>
                    </div>
                    <div class="row mb-20px md-mb-0" data-anime='{"opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="col-md-12">
                            <div class="swiper feather-shadow sm-feather-shadow-none magic-cursor d-flex" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "centeredSlides": true, "autoplay": { "delay": 2500, "disableOnInteraction": false },  "pagination": { "el": ".slider-four-slide-pagination-1", "clickable": true }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1900": { "slidesPerView": 3.8 }, "1600": { "slidesPerView": 3.2 }, "1400": { "slidesPerView": 2.5 }, "1200": { "slidesPerView": 2.3 }, "991": { "slidesPerView": 2 }, "768": { "slidesPerView": 2 }, "480": { "slidesPerView": 1.4 } }, "effect": "slide" }'>
                                <div class="swiper-wrapper pt-45px pb-40px">
                                    <!-- start review item -->
                                    <div class="swiper-slide review-style-06 h-auto">
                                        <div class="d-flex justify-content-center h-100 flex-column bg-white box-shadow-medium p-45px md-p-35px border-radius-6px last-paragraph-no-margin">
                                            <div class="mb-20px d-flex align-items-center">
                                                <div class="d-inline-block align-middle last-paragraph-no-margin">
                                                    <div class="fs-18 fw-600 text-dark-gray">Herman Miller</div>
                                                    <p class="lh-22 d-block">IT Director</p>
                                                </div>
                                                <div class="border-radius-30px bg-base-color ps-15px pe-15px fs-14 fw-600 text-white d-inline-block align-middle ms-auto md-position-absolute md-right-15px md-top-15px"><i class="fa-solid fa-star me-5px"></i>5.0</div>
                                            </div>
                                            <p>Team of Binex has worked closely with us and never failed to follow our perfect business requirements.</p>
                                        </div>
                                    </div>
                                    <!-- end review item -->
                                    <!-- start review item -->
                                    <div class="swiper-slide review-style-06 h-auto">
                                        <div class="d-flex justify-content-center h-100 flex-column bg-white box-shadow-medium p-45px md-p-35px border-radius-6px last-paragraph-no-margin">
                                            <div class="mb-20px d-flex align-items-center">
                                                <div class="d-inline-block align-middle last-paragraph-no-margin">
                                                    <div class="fs-18 fw-600 text-dark-gray">Alexander Harad</div>
                                                    <p class="lh-22 d-block">IT Director</p>
                                                </div>
                                                <div class="border-radius-30px bg-base-color ps-15px pe-15px fs-14 fw-600 text-white d-inline-block align-middle ms-auto md-position-absolute md-right-15px md-top-15px"><i class="fa-solid fa-star me-5px"></i>5.0</div>
                                            </div>
                                            <p>They have provided superior quality of IT support and management services. Very satisfied by choosing them. Thank you!</p>
                                        </div>
                                    </div> 
                                    <!-- end review item -->
                                    <!-- start review item -->
                                    <div class="swiper-slide review-style-06 h-auto">
                                        <div class="d-flex justify-content-center h-100 flex-column bg-white box-shadow-medium p-45px md-p-35px border-radius-6px last-paragraph-no-margin">
                                            <div class="mb-20px d-flex align-items-center">
                                                <div class="d-inline-block align-middle last-paragraph-no-margin">
                                                    <div class="fs-18 fw-600 text-dark-gray">Shoko Mugikura</div>
                                                    <p class="lh-22 d-block">IT Director</p>
                                                </div>
                                                <div class="border-radius-30px bg-base-color ps-15px pe-15px fs-14 fw-600 text-white d-inline-block align-middle ms-auto md-position-absolute md-right-15px md-top-15px"><i class="fa-solid fa-star me-5px"></i>5.0</div>
                                            </div>
                                            <p>We help our clients succeed by creating brand identities, digital experiences, and print materials that communicate.</p>
                                        </div>
                                    </div>
                                    <!-- end review item -->
                                    <!-- start review item -->
                                    <div class="swiper-slide review-style-06 h-auto">
                                        <div class="d-flex justify-content-center h-100 flex-column bg-white box-shadow-medium p-45px md-p-35px border-radius-6px last-paragraph-no-margin">
                                            <div class="mb-20px d-flex align-items-center">
                                                <div class="d-inline-block align-middle last-paragraph-no-margin">
                                                    <div class="fs-18 fw-600 text-dark-gray">Jacob Kalling</div>
                                                    <p class="lh-22 d-block">IT Director</p>
                                                </div>
                                                <div class="border-radius-30px bg-base-color ps-15px pe-15px fs-14 fw-600 text-white d-inline-block align-middle ms-auto md-position-absolute md-right-15px md-top-15px"><i class="fa-solid fa-star me-5px"></i>5.0</div>
                                            </div>
                                            <p>I personally enjoyed the energy and the professional support the whole team gave to us into creating website.</p>
                                        </div>
                                    </div> 
                                    <!-- end review item --> 
                                    <!-- start review item -->
                                    <div class="swiper-slide review-style-06 h-auto">
                                        <div class="d-flex justify-content-center h-100 flex-column bg-white box-shadow-medium p-45px md-p-35px border-radius-6px last-paragraph-no-margin">
                                            <div class="mb-20px d-flex align-items-center">
                                                <div class="d-inline-block align-middle last-paragraph-no-margin">
                                                    <div class="fs-18 fw-600 text-dark-gray">Herman Miller</div>
                                                    <p class="lh-22 d-block">IT Director</p>
                                                </div>
                                                <div class="border-radius-30px bg-base-color ps-15px pe-15px fs-14 fw-600 text-white d-inline-block align-middle ms-auto md-position-absolute md-right-15px md-top-15px"><i class="fa-solid fa-star me-5px"></i>5.0</div>
                                            </div>
                                            <p>They have provided superior quality of IT support and management services. Very satisfied by choosing them. Thank you so much!</p>
                                        </div>
                                    </div>
                                    <!-- end review item -->
                                    <!-- start review item -->
                                    <div class="swiper-slide review-style-06 h-auto">
                                        <div class="d-flex justify-content-center h-100 flex-column bg-white box-shadow-medium p-45px md-p-35px border-radius-6px last-paragraph-no-margin">
                                            <div class="mb-20px d-flex align-items-center">
                                                <div class="d-inline-block align-middle last-paragraph-no-margin">
                                                    <div class="fs-18 fw-600 text-dark-gray">Alexander Harad</div>
                                                    <p class="lh-22 d-block">IT Director</p>
                                                </div>
                                                <div class="border-radius-30px bg-base-color ps-15px pe-15px fs-14 fw-600 text-white d-inline-block align-middle ms-auto md-position-absolute md-right-15px md-top-15px"><i class="fa-solid fa-star me-5px"></i>5.0</div>
                                            </div>
                                            <p>Trust us we looked for a very long time and wasted thousands of dollars testing other teams and outsource companies.</p>
                                        </div>
                                    </div> 
                                    <!-- end review item -->
                                    <!-- start review item -->
                                    <div class="swiper-slide review-style-06 h-auto">
                                        <div class="d-flex justify-content-center h-100 flex-column bg-white box-shadow-medium p-45px md-p-35px border-radius-6px last-paragraph-no-margin">
                                            <div class="mb-20px d-flex align-items-center">
                                                <div class="d-inline-block align-middle last-paragraph-no-margin">
                                                    <div class="fs-18 fw-600 text-dark-gray">Shoko Mugikura</div>
                                                    <p class="lh-22 d-block">IT Director</p>
                                                </div>
                                                <div class="border-radius-30px bg-base-color ps-15px pe-15px fs-14 fw-600 text-white d-inline-block align-middle ms-auto md-position-absolute md-right-15px md-top-15px"><i class="fa-solid fa-star me-5px"></i>5.0</div>
                                            </div>
                                            <p>Team of Binex has worked closely with us and never failed to follow our perfect business requirements.</p>
                                        </div>
                                    </div>
                                    <!-- end review item -->
                                    <!-- start review item -->
                                    <div class="swiper-slide review-style-06 h-auto">
                                        <div class="d-flex justify-content-center h-100 flex-column bg-white box-shadow-medium p-45px md-p-35px border-radius-6px last-paragraph-no-margin">
                                            <div class="mb-20px d-flex align-items-center">
                                                <div class="d-inline-block align-middle last-paragraph-no-margin">
                                                    <div class="fs-18 fw-600 text-dark-gray">Jacob Kalling</div>
                                                    <p class="lh-22 d-block">IT Director</p>
                                                </div>
                                                <div class="border-radius-30px bg-base-color ps-15px pe-15px fs-14 fw-600 text-white d-inline-block align-middle ms-auto md-position-absolute md-right-15px md-top-15px"><i class="fa-solid fa-star me-5px"></i>5.0</div>
                                            </div>
                                            <p>They have provided superior quality of IT support and management services. Very satisfied by choosing them. Thank you so much!</p>
                                        </div>
                                    </div> 
                                    <!-- end review item --> 
                                </div> 
                            </div> 
                            <!-- start slider pagination -->
                            <!--<div class="swiper-pagination slider-four-slide-pagination-1 swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div>-->
                            <!-- end slider pagination -->
                        </div>
                    </div>
                    <div class="row" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="col text-center"> 
                            <div class="fs-20 fw-500 text-dark-gray d-inline-block align-middle ls-minus-05px me-10px">What do people say about our services?</div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
        </div>
        <!-- srat footer -->
        @include('components.footer')
        <!-- end footer -->
        <!-- start crafto progressive blur -->
        <div class="crafto-progressive-blur crafto-progressive-blur-bottom" blur-bottom="yes" style="--progressive-blur-height:15vh"></div>
        <!-- end crafto progressive blur -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/vendors.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>

