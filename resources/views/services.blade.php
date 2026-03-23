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
                            <h1 class="alt-font d-inline-block fw-700 ls-0px text-dark-gray mb-15px">Services</h1>
                            <p class="mx-auto w-50 xl-w-70 md-w-100 mb-0">We deliver smart solutions that help your business grow successfully.</p>
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
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>

                        <!-- start dynamic service loop -->
                        @foreach($services as $service)
                        <div class="col transition-inner-all mb-30px">
                            <div class="box-shadow-extra-large h-100 border-radius-10px bg-white pt-40px pb-40px ps-40px pe-40px xxl-p-30px justify-content-start text-start d-flex flex-column">
                                <a href="{{ url('services-details/' . $service->slug) }}" class="text-center d-block mb-30px">
                                    <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" style="height: 250px; width: auto; object-fit: contain;">
                                </a>
                                <div class="last-paragraph-no-margin text-center text-md-start mt-auto">
                                    <a href="{{ url('services-details/' . $service->slug) }}" class="d-inline-block alt-font text-dark-gray fw-600 fs-18 mb-5px ls-minus-05px" style="min-height: 54px;">{{ $service->title }}</a>
                                    <p>{!! $service->short_description !!}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- end dynamic service loop -->
                    </div>
                </div>
            </section>
            <!-- end section -->
            <!-- start section -->
            <section>
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
                                            <p>We offer comprehensive IT solutions, including Hardware & Software Support, Microsoft 365 services, Cloud Infrastructure, and advanced Network Management tailored to your needs.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion item -->
                                <!-- start accordion item -->
                                <div class="accordion-item">
                                    <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                            <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                <i class="feather icon-feather-plus"></i><span class="fs-18 fw-500">Do you provide Cybersecurity services?</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="accordion-style-02-02" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                            <p>Yes, we provide advanced cybersecurity protection to secure your sensitive data, IT assets, and network from external and internal threats.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion item -->
                                <!-- start accordion item -->
                                <div class="accordion-item">
                                    <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-03" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                            <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                <i class="feather icon-feather-plus"></i><span class="fs-18 fw-500">Do you charge by the project or have monthly plans?</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="accordion-style-02-03" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                            <p>We offer flexible pricing options including hourly rates for ad-hoc support, project-based invoicing, and comprehensive monthly managed IT packages to perfectly fit your business scale.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion item -->
                                <!-- start accordion item -->
                                <div class="accordion-item">
                                    <div class="accordion-header border-bottom border-color-transparent">
                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-04" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                            <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                <i class="feather icon-feather-plus"></i><span class="fs-18 fw-500">Can you help migrate our business to the cloud?</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="accordion-style-02-04" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent">
                                            <p>Absolutely! Our experts specialize in seamless cloud migrations, ensuring zero downtime, secure data transfer, and a highly scalable infrastructure designed for future growth.</p>
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

