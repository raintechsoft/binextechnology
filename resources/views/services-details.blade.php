<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Binex Technology</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
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
            <!-- start page title -->
            <section class="page-title-center-alignment top-space-margin position-relative cover-background border-radius-10px lg-no-border-radius p-0 overflow-visible" style="background-image: url(images/binolex/bgpage.jpg)">
                <div class="container position-relative">
                    <div class="absolute-middle-left left-150px md-left-0px d-none d-md-block">
                        <img src="images/binolex/arc.png" data-bottom-top="transform:translateY(50px)" data-top-bottom="transform: translateY(-50px)" alt="">
                    </div>
                    <div class="absolute-bottom-right right-150px md-right-0px bottom-minus-50px d-none d-md-block">
                        <img src="images/binolex/shape.png" data-bottom-top="transform:translateY(50px)" data-top-bottom="transform: translateY(-50px)" alt="">
                    </div>
                    <div class="row align-items-center justify-content-center position-relative z-index-1 h-350px sm-h-250px">
                        <div class="col-md-6 text-center position-relative page-title-extra-large" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <h1 class="alt-font d-inline-block fw-700 ls-0px text-dark-gray mb-15px">IT Support Services</h1>
                            <p class="mx-auto w-50 xl-w-70 md-w-100 mb-0">We deliver smart, highly secured, and robust IT solutions to empower your business operations.</p>
                        </div>
                        <div class="down-section text-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <a href="#down-section" class="section-link">
                                <div class="text-dark-gray">
                                    <i class="bi bi-arrow-down-short icon-very-medium animation-float"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end page title -->
            <!-- start section -->  
            <section id="down-section" class="position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 pe-6 order-2 order-lg-1 lg-pe-4 md-pe-15px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <div class="position-sticky top-80px lg-top-40px">
                                <div class="mb-30px">
                                    <ul class="p-0 m-0 list-style-02 fs-18 fw-600">
                                        <li class="pb-15px mb-15px border-bottom border-color-extra-medium-gray"><a href="services-details" class="text-base-color text-base-color-hover">IT Support Services</a><i class="bi bi-headset fs-22 ms-auto text-dark-gray"></i></li>
                                        <li class="pb-15px mb-15px border-bottom border-color-extra-medium-gray"><a href="services-details" class="text-dark-gray text-base-color-hover">Cloud Infrastructure</a><i class="bi bi-cloud fs-22 ms-auto text-dark-gray"></i></li>
                                        <li class="pb-15px mb-15px border-bottom border-color-extra-medium-gray"><a href="services-details" class="text-dark-gray text-base-color-hover">Cybersecurity</a><i class="bi bi-shield-check fs-22 ms-auto text-dark-gray"></i></li>
                                        <li class="pb-15px mb-15px border-bottom border-color-extra-medium-gray"><a href="services-details" class="text-dark-gray text-base-color-hover">Network Management</a><i class="bi bi-hdd-network fs-22 ms-auto text-dark-gray"></i></li>
                                        <li class="pb-15px"><a href="services-details" class="text-dark-gray text-base-color-hover">Disaster Recovery</a><i class="bi bi-database-check fs-22 ms-auto text-dark-gray"></i></li>
                                    </ul>
                                </div>
                                <div class="ps-14 pe-14 xl-ps-10 xl-pe-10 pt-10 pb-10 lg-p-25px bg-dark-gray border-radius-6px text-center text-lg-start">
                                    <span class="fs-20 fw-500 text-white mb-10px d-inline-block">Have questions?</span>
                                    <p class="text-white opacity-5">We unleash your business potential by maximizing innovation and security.</p>
                                    <a href="mailto:info@binex.ie" class="btn btn-large btn-white btn-switch-text btn-box-shadow w-100 border-0 btn-rounded text-transform-none left-icon me-10px sm-mb-15px sm-mt-15px">
                                        <span> 
                                            <span><i class="feather icon-feather-mail"></i></span>
                                            <span class="btn-double-text" data-text="info@binex.ie">info@binex.ie</span> 
                                        </span>
                                    </a> 
                                    <div class="d-inline-block text-white mt-15px text-center w-100"><i class="bi bi-telephone-outbound me-10px align-middle"></i><a href="contact">+353 123 4567</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 order-1 order-lg-2 md-mb-50px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <h4 class="fw-700 text-dark-gray mb-20px alt-font">Comprehensive IT Support & Management</h4>
                            <p>Managing an entire enterprise infrastructure is a complex task, but our proven process makes it straightforward. Securing your network is just as important as <span class="text-dark-gray text-decoration-line-bottom fw-500">designing scalable systems,</span> such as robust servers and rapid cloud deployments, so take the time to rely on our integrated approach.</p>
                            <div class="bg-very-light-gray p-6 mt-6 mb-9 border-radius-6px">
                                <div class="row align-items-center">
                                    <div class="col-md-6 pe-5 lg-pe-15px md-mb-20px">
                                        <span class="fs-18 fw-600 text-dark-gray mb-20px d-block">Core IT Strategies</span>
                                        <ul class="p-0 m-0 list-style-02 text-dark-gray">
                                            <li class="pb-10px mb-10px border-bottom border-color-transparent-dark-very-light"><i class="fa-solid fa-check fs-15 me-10px"></i>24/7 Managed IT Services</li>
                                            <li class="pb-10px mb-10px border-bottom border-color-transparent-dark-very-light"><i class="fa-solid fa-check fs-15 me-10px"></i>On-Site and Remote Assistance</li>
                                            <li class="pb-10px mb-10px border-bottom border-color-transparent-dark-very-light"><i class="fa-solid fa-check fs-15 me-10px"></i>Hardware Procurement & Setup</li>
                                            <li class="pb-10px"><i class="fa-solid fa-check fs-15 me-10px"></i>Disaster Recovery & Daily Backups</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="images/binolex/sv_support.png" alt="IT Support"/>
                                    </div>
                                </div>
                            </div>
                            <h4 class="fw-700 text-dark-gray mb-20px alt-font">Strategies for Sustainable Growth</h4>
                            <p><span class="fw-600 text-dark-gray text-decoration-line-bottom">Cloud Integrations</span> - Unlock true scalability and enable hybrid work environments with structured Microsoft 365 and Azure migrations tailored to your exact workflows.</p>
                            <div class="divider-style-03 divider-style-03-01 border-color-extra-medium-gray mb-25px mt-25px"></div>
                            <p><span class="fw-600 text-dark-gray text-decoration-line-bottom">Cybersecurity Implementation</span> - Protect highly sensitive company and client data with multi-layer firewall monitoring, endpoint detection, and proactive threat intelligence.</p>
                            <div class="divider-style-03 divider-style-03-01 border-color-extra-medium-gray mb-25px mt-25px"></div>
                            <p><span class="fw-600 text-dark-gray text-decoration-line-bottom">Continuous Maintenance</span> - Avoid costly downtimes with proactive asset management and routine patching mapped across your entire organization architecture.</p>
                            <div class="bg-base-color p-35px border-radius-6px mt-9">
                                <div class="row align-items-center justify-content-center justify-content-lg-start">
                                    <div class="col-5 col-sm-3 sm-mb-20px text-center"><img src="images/binolex/sv_software.png" alt="Software Support"/></div>
                                    <div class="col-md-9 text-center text-md-start ps-3">
                                        <div class="fs-18 lh-26 mb-15px w-90 sm-w-100 mx-auto mx-md-0 text-white">Trusting Binex to handle our IT operations allowed us to finally focus 100% on scaling our business fearlessly.</div>
                                        <span class="text-white fs-18"><span class="fw-600">Sarah Connor,</span> CTO</span>
                                    </div>
                                </div>
                            </div>
                            <h4 class="fw-700 text-dark-gray mt-9 alt-font">Get in touch with us</h4>
                            <div class="row row-cols-md-1 justify-content-center">
                                <div class="col-12">
                                    <form action="email-templates/contact-form.php" method="post" class="row contact-form-style-02">
                                        <div class="col-md-6 mb-30px">
                                            <input class="input-name border-radius-4px form-control required" type="text" name="name" placeholder="Your name*" />
                                        </div>
                                        <div class="col-md-6 mb-30px">
                                            <input class="border-radius-4px form-control required" type="email" name="email" placeholder="Your email address*" />
                                        </div>
                                        <div class="col-md-6 mb-30px">
                                            <input class="border-radius-4px form-control" type="tel" name="phone" placeholder="Your phone" />
                                        </div>
                                        <div class="col-md-6 mb-30px">
                                            <div class="select">
                                                <select class="form-control" name="select">
                                                    <option value="">Select services</option>
                                                    <option value="IT Support">IT Support</option>
                                                    <option value="Cybersecurity">Cybersecurity</option>
                                                    <option value="Cloud Migration">Cloud Migration</option>
                                                    <option value="General Inquiry">General Inquiry</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-30px">
                                            <textarea class="border-radius-4px form-control" cols="40" rows="4" name="comment" placeholder="Your message"></textarea>
                                        </div>
                                        <div class="col-xl-6 col-md-8">
                                            <p class="mb-0 fs-13 lh-24 text-center text-md-start">We are committed to protecting your privacy. We will never collect information about you without your explicit consent.</p>
                                        </div>
                                        <div class="col-xl-6 col-md-4 text-center text-md-end sm-mt-20px">
                                            <input type="hidden" name="redirect" value="">
                                            <button class="btn btn-dark-gray text-transform-none btn-medium btn-round-edge btn-box-shadow submit" type="submit">Send message</button>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-results mt-20px d-none"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
