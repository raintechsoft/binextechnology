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
                            <h1 class="alt-font d-inline-block fw-700 ls-0px text-dark-gray mb-15px">Contact Us</h1>
                            <p class="mx-auto w-50 xl-w-70 md-w-100 mb-0">Partner with Binex Technology Solutions for robust and secure IT infrastructure.</p>
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
            <section> 
                <div class="container"> 
                    <div class="row mb-60px md-mb-30px">
                        <div class="col-lg-5 md-mb-30px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <span class="ps-20px pe-20px pt-5px pb-5px mb-20px text-uppercase alt-font text-base-color fs-12 lh-26 fw-600 alt-font border-radius-100px bg-gradient-very-light-gray-transparent d-inline-flex"><i class="bi bi-globe2 fs-16 me-5px"></i>Get in touch with us</span>
                            <h2 class="alt-font text-dark-gray fw-700 mb-20px">Ready to scale your business with expert IT support?</h2>
                        </div>
                        <div class="col-xl-6 col-lg-7 offset-xl-1 col-md-12 mt-40px  md-mt-0 position-relative">
                            <!-- start contact form -->
                            <form action="email-templates/contact-form.php" method="post" class="contact-form-style-07" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <div class="position-relative form-group mb-30px d-flex flex-md-row flex-column">
                                    <label for="exampleInputEmail1" class="form-label alt-font fs-24 ls-minus-05px text-dark-gray fw-600 mb-0 me-30px md-me-0px align-self-start align-self-md-center">Name</label>
                                    <div class="position-relative col">
                                        <span class="form-icon"><i class="bi bi-person icon-small"></i></span>
                                        <input class="ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required" id="exampleInputEmail1" type="text" name="name" placeholder="Enter your full name*" />
                                    </div>
                                </div>
                                <div class="position-relative form-group mb-30px d-flex flex-md-row flex-column">
                                    <label for="exampleInputEmail2" class="form-label alt-font fs-24 ls-minus-05px text-dark-gray fw-600 mb-0 me-30px align-self-start align-self-md-center">Email</label>
                                    <div class="position-relative col">
                                        <span class="form-icon"><i class="bi bi-envelope icon-small"></i></span>
                                        <input class="ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required" id="exampleInputEmail2" type="email" name="email" placeholder="Enter your business email*" />
                                    </div>
                                </div>
                                <div class="position-relative form-group form-textarea d-flex flex-md-row flex-column"> 
                                    <label for="exampleInputComment" class="form-label alt-font fs-24 ls-minus-1px lh-50 text-dark-gray fw-600 mb-0 me-30px">Inquiry</label>
                                    <div class="position-relative col">
                                        <textarea class="ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control" id="exampleInputComment" name="comment" placeholder="Tell us about your IT needs" rows="3"></textarea>
                                        <span class="form-icon"><i class="bi bi-chat-square-dots icon-small"></i></span>
                                    </div>
                                </div>
                                <div class="row mt-40px align-items-center">
                                    <div class="col-xl-8 col-sm-7 lg-mb-30px md-mb-0">
                                        <p class="mb-0 fs-14 lh-22 text-center text-sm-start">We are committed to protecting your privacy. We will never collect information about you without your explicit consent.</p>
                                    </div>
                                    <div class="col-xl-4 col-sm-5 text-center text-sm-end xs-mt-25px">
                                        <input id="exampleInputEmail3" type="hidden" name="redirect" value="">
                                        <button class="btn btn-medium btn-base-color btn-box-shadow text-transform-none btn-rounded submit border-0" type="submit">Send message</button>
                                    </div>
                                    <div class="col-12 mt-20px mb-0 text-center text-md-start">
                                        <div class="form-results d-none"></div>
                                    </div>
                                </div>
                            </form>
                            <!-- end contact form -->
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="col-md-auto text-center text-md-end sm-mb-20px">
                            <h6 class="text-dark-gray fw-600 mb-0 alt-font">Connect with social media </h6>
                        </div>
                        <div class="col-2 d-none d-lg-inline-block">
                            <span class="w-100 h-1px bg-dark-gray opacity-2 d-flex mx-auto"></span>
                        </div>
                        <!-- start social icon -->
                        <div class="col-md-auto elements-social social-icon-style-04 text-center text-md-start ps-lg-0">
                            <ul class="large-icon dark">
                                <li class="m-0"><a class="linkedin" href="http://www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i><span></span></a></li>
                                <li class="m-0"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i><span></span></a></li>
                                <li class="m-0"><a class="twitter" href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i><span></span></a></li>      
                                <li class="m-0"><a class="instagram" href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i><span></span></a></li>
                            </ul>                  
                        </div>
                        <!-- end social icon -->
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
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=<YOUR_API_KEY>&callback=initMap"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>

