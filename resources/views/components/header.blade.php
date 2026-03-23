<header class="header-with-topbar">
                <!-- start header top bar -->
                <div class="header-top-bar top-bar-dark bg-white disable-fixed border-bottom border-color-extra-medium-gray">
                    <div class="container-fluid">
                        <div class="row h-50px xs-h-auto align-items-center m-0 xs-pt-5px xs-pb-5px">
                            <div class="col-lg-6 col-md-7 text-center text-md-start xs-px-0">
                                <div class="fs-14 text-dark-gray fw-500">&#128075; Welcome to Binex Technology Solutions Limited.</div>
                            </div>
                            <div class="col-lg-6 col-md-5 text-end d-none d-md-flex">
                                @php
                                    $settings = \App\Models\SiteSetting::first();
                                @endphp
                                @if($settings && $settings->email)
                                <div class="widget me-20px lg-me-25px md-me-0"><a href="mailto:{{ $settings->email }}" class="fs-14 fw-500 text-dark-gray"><i class="feather icon-feather-mail fs-16 text-base-color"></i>{{ $settings->email }}</a></div>
                                @endif
                                @if($settings && $settings->address)
                                <div class="widget fs-14 fw-500 text-dark-gray d-none d-lg-inline-block"><i class="feather icon-feather-map-pin fs-16 text-base-color"></i>{{ $settings->address }}</div> 
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end header top bar -->
                <!-- start navigation -->
                <nav class="navbar navbar-expand-lg header-light bg-transparent disable-fixed">
                    <div class="container-fluid">
                        <div class="col-auto col-lg-3 me-lg-0 me-auto">
                            <a class="navbar-brand" href="index">
                                <img src="images/logo.png" data-at2x="images/logo.png" alt="" class="default-logo">
                                <img src="images/logo.png" data-at2x="images/logo.png" alt="" class="alt-logo">
                                <img src="images/logo.png" data-at2x="images/logo.png" alt="" class="mobile-logo"> 
                            </a>
                        </div>
                        <div class="col-auto ms-auto md-ms-0 menu-order position-static">
                            <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                                <span class="navbar-toggler-line"></span>
                                <span class="navbar-toggler-line"></span>
                                <span class="navbar-toggler-line"></span>
                                <span class="navbar-toggler-line"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav"> 
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a href="index" class="nav-link">Home</a></li> 
                                    <li class="nav-item"><a href="about-us" class="nav-link">About Us</a></li>
                                    <li class="nav-item dropdown dropdown-with-icon">
                                        <a href="services" class="nav-link">Services</a>
                                        <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <!-- dynamic dropdown start -->
                                            @php
                                                $headerServices = \App\Models\Service::where('is_active', true)->get();
                                            @endphp
                                            @foreach($headerServices as $service)
                                            <li>
                                                <a href="{{ url('services-details/' . $service->slug) }}"><i class="{{ $service->icon ?? 'bi bi-dash' }}"></i>
                                                    <div class="submenu-icon-content">
                                                        <span>{{ $service->title }}</span>
                                                        <p>{{ \Illuminate\Support\Str::words(strip_tags($service->short_description), 5) }}</p>
                                                    </div>
                                                </a>
                                            </li>
                                            @endforeach
                                            <!-- dynamic dropdown end -->
                                        </ul>
                                    </li>
                                    @php
                                        $showClients = \App\Models\SiteSetting::first()->show_clients_page ?? true;
                                        $hasClients = \App\Models\Client::where('is_active', true)->exists();
                                    @endphp
                                    @if($showClients && $hasClients)
                                    <li class="nav-item"><a href="clients" class="nav-link">Clients</a></li>
                                    @endif
                                    <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto text-end d-none d-sm-flex">
                            <div class="header-icon"> 
                                <div class="header-button ms-10px d-none d-xl-inline-block">
                                    <a href="mailto:{{ \App\Models\SiteSetting::first()->email ?? 'info@binex.ie' }}" class="btn btn-rounded btn-transparent-light-gray btn-small btn-switch-text text-transform-none">
                                        <span>
                                            <span class="btn-double-text" data-text="Get started">Get started</span>
                                            <span><i class="feather icon-feather-mail"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>  
                        </div>
                    </div>
                </nav>
                <!-- end navigation -->
            </header>