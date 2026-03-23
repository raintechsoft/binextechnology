<footer class="cover-background pb-0 overflow-visible" style="background-image: url('images/binolex/footer.jpg')">
            <img src="images/binolex/circle.png" alt="" class="position-absolute right-150px md-right-50px top-minus-60px animation-rotation d-none d-sm-block">
            <div class="container overflow-hidden">
                <div class="row position-relative z-index-9">
                    <div class="col-12 col-xl-3 col-md-6 d-flex flex-column lg-mb-30px sm-mb-20px order-1">
                        <a href="index" class="footer-logo mb-25px xs-mb-20px d-inline-block">
                            <img src="images/logo.png" data-at2x="images/logo.png" alt="">
                        </a>
                        <div class="elements-social social-text-style-01 mt-auto">
                            <ul class="small-icon light">
                                @php $settings = \App\Models\SiteSetting::first() @endphp
                                @if($settings?->facebook_url)<li><a class="facebook" href="{{ $settings->facebook_url }}" target="_blank">Fb.</a></li>@endif
                                @if($settings?->instagram_url)<li><a class="instagram" href="{{ $settings->instagram_url }}" target="_blank">Ig.</a></li>@endif
                                @if($settings?->twitter_url)<li><a class="twitter" href="{{ $settings->twitter_url }}" target="_blank">Tw.</a></li>@endif
                                @if($settings?->behance_url)<li><a class="behance" href="{{ $settings->behance_url }}" target="_blank">Be.</a></li>@endif
                                @if($settings?->linkedin_url)<li><a class="linkedin" href="{{ $settings->linkedin_url }}" target="_blank">In.</a></li>@endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-xl-3 col-md-6 last-paragraph-no-margin order-xl-2 order-3 sm-mb-20px">
                        @php $settings = \App\Models\SiteSetting::first() @endphp
                        <p class="w-80 mb-20px md-w-100"><span class="text-white d-block">{{ $settings->company_name ?? 'Binex Technology Solutions' }}</span>{{ $settings->address ?? 'Dublin, Ireland' }}</p>
                        <p class="w-80 md-w-100"><span class="text-white d-block">Binex Support Center</span>{{ $settings->support_text ?? '24/7 Remote & On-Site IT Support' }}</p>
                    </div>
                    <div class="col-12 col-xl-3 col-md-6 last-paragraph-no-margin order-xl-3 order-4 sm-mb-30px">
                        <p class="mb-0">Interested in working with us? </p>
                        <a href="mailto:{{ $settings->email ?? 'info@binex.ie' }}" class="text-white text-decoration-line-bottom mb-25px d-inline-block">{{ $settings->email ?? 'info@binex.ie' }}</a>
                        <p class="mb-0">Looking for a job opportunity?</p>
                        <a href="mailto:{{ $settings->careers_email ?? 'careers@binex.ie' }}" class="text-white text-decoration-line-bottom d-inline-block">{{ $settings->careers_email ?? 'careers@binex.ie' }}</a>
                    </div>
                    <div class="col-12 col-xl-3 col-md-6 d-flex flex-column order-xl-4 order-2 lg-mb-30px sm-mb-20px">
                        <span class="d-block text-white mb-15px">Sign up for the newsletter</span> 
                        <div class="d-inline-block w-100 newsletter-style-02 position-relative mb-10px">
                            <form action="email-templates/subscribe-newsletter.php" method="post" class="position-relative w-100">
                                <input class="bg-transparent border-color-transparent-white-light w-100 form-control required" type="email" name="email" placeholder="Enter your email...">
                                <input type="hidden" name="redirect" value="">
                                <button type="submit" class="btn submit" aria-label="submit"><i class="icon bi bi-envelope icon-small text-white"></i></button>
                                <div class="form-results border-radius-4px pt-5px pb-5px ps-15px pe-15px fs-14 lh-22 mt-10px w-100 text-center position-absolute d-none"></div>
                            </form>
                        </div>
                        <p class="mt-auto mb-0">� 2025 Crafto. Powered by <a href="https://www.themezaa.com/" target="_blank" class="fw-500 text-decoration-line-bottom text-medium-gray text-white-hover">Binex</a></p>
                    </div>
                </div>
                <div class="row mb-minus-70px md-mb-minus-50px md-mb-minus-20px">
                    <div class="col-12 text-center">
                        <span class="text-base-color fs-300 xl-fs-250 lg-fs-200 sm-fs-150 xs-fs-100 fw-600 ls-minus-8px lg-ls-minus-4px w-100 opacity-6">binex</span>
                    </div>
                </div>
            </div>
        </footer>