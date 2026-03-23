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
                            <h1 class="alt-font d-inline-block fw-700 ls-0px text-dark-gray mb-15px">Clients</h1>
                            <p class="mx-auto w-50 xl-w-70 md-w-100 mb-0">Delivering tailored IT solutions to clients from local startups to global enterprises.</p>
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
                <div class="container" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 gap-y-4 justify-content-center">
                        <!-- start client dynamic items -->
                        @foreach($clients as $client)
                        <div class="col transition-inner-all mb-30px">
                            <div class="box-shadow-extra-large border-radius-10px bg-white pt-40px pb-40px ps-40px pe-40px text-center d-flex align-items-center justify-content-center h-100" style="background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(10px); min-height: 180px;">
                                <a href="#">
                                    <img src="{{ asset('storage/' . $client->logo) }}" class="h-160px sm-h-100px" alt="{{ $client->name }}" style="object-fit: contain;">
                                </a>
                            </div>
                        </div>
                        @endforeach
                        <!-- end client dynamic items -->
                    </div>
                </div>
            </section>
            
           
        </div>
        <!-- start footer -->
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
