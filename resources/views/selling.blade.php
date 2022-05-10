<!-- Select Main Layout -->
@extends('layouts.base')

<!-- Page Title -->
@section('title', 'Start Selling Online')

<!-- Page Description -->
@section('description', "I've worked on many online stores for Australian businesses and have extensive experience with various platforms like BigCommerce, Shopify and WooCommerce.")

<!-- Page Keywords -->
@section('keywords', 'australia ecommerce, estore, online selling, online store, e-commerce store, ecommerce maintenance')

<!-- Page URL -->
@section('url', 'https://1vinedesign.com.au/start-selling-online')

<!-- Page Description -->
@section('social-media-tags')

<!-- Facebook -->
<meta property="og:site_name" content="1VINE Design">
<meta property="og:title" content="Start Selling Online - 1VINE Design">
<meta property="og:description" content="Start Selling Online with 1VINE Design.">
<meta property="og:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta property="og:url" content="https://1vinedesign.com.au/start-selling-online">

<!-- Twitter -->
<meta name="twitter:title" content="@1vinedesign">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="Start Selling Online with 1VINE Design.">
<meta name="twitter:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta name="twitter:image:alt" content="1VINE Design Header.">
@endsection

<!-- Page Description -->
@section('extra-css')
@endsection

<!-- Body Content -->
@section('body-content')

@section('menu-chapter', 'Start Selling Online')

<!-- Hero Section -->
<div class="section make-dark theme-green make-medium">
    <div class="container">
        <div class="hero-content">
            <h1 class="make-centered">Start Selling Online</h1>
        </div>
    </div>
</div>

<!-- <div class="section portfolio-summary">
    <ul class="portfolio-list">
        <li class="portfolio-item"><img src="{{ asset('img/bg.jpg') }}" alt=""></li>
        <li class="portfolio-item"><img src="{{ asset('img/bg.jpg') }}" alt=""></li>
        <li class="portfolio-item"><img src="{{ asset('img/bg.jpg') }}" alt=""></li>
    </ul>
</div> -->

<div class="section make-light theme-orange">
    <div class="container">
        <h2>"We have a good range of products that we'd like to start selling online"</h2>
        <p class="col-10">From statistics and data collected over the past three years, it is clear that eCommerce is in no way slowing down. More people are preferring online shopping whether because of the convenience of the process or simply the freedom to compare prices with ease.</p>
        <p class="col-10">According to <a href="https://firstsiteguide.com/ecommerce-stats/">firstsiteguide.com</a>, "<span class="make-strong">by the year 2040, it’s estimated that 95% of all purchases will be through eCommerce.</span>" In other words, now is the perfect time to hop aboard this fast-growing industry, add an online sales channel to your business and grow your brand's reach.</p>

        <h2 class="make-centered">"But why <span class="make-one">1VINE</span> exactly?"</h2>

        <p class="col-10">The reason why you should trust me with your new eCommerce Store is because I've worked on many online stores and have extensive experience with various platforms like BigCommerce, Shopify and WooCommerce. Every platform brings something different to the table and there's no one solution that fits all.</p>
        <p class="col-10">I spend the majority of the initial 1-hour free consultation learning about your business, what you want to sell, what your goals are, if you've sold products online before, and so on. This helps in fleshing out your eCommerce Strategy.</p>
    </div>
</div>

<div class="section make-light theme-green">
    <div class="container make-centered">
        <h2>My Recommendations</h2>
        <div class="heading-underline"></div>
        <p class="section-desc mt-3 make-centered mb-3"></p>

        <div class="package-card">
            <div class="package-card-content">
                <div class="package-card-front">
                    <div class="card-cover"></div>
                    <div class="card-left">
                        <div class="package-header">The Standard</div>
                        <div class="package-features">
                            <ul>

                                @include('packages.ecommerce-standard')

                            </ul>
                        </div>
                    </div>
                    <div class="card-right">
                    <!-- <div class="package-price"><span class="package-per-month">From</span>$8k</div> -->
                    <div class="package-price"><span class="package-per-month">Coming Soon</span></div>
                        <span class="package-gst">Not including GST</span>
                        <a href="/get-quote/ecommerce-the-standard"><div class="purchase-link">Purchase<br>Package</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="package-card">
            <div class="package-card-content">
                <div class="package-card-front">
                    <div class="card-cover"></div>
                    <div class="card-left">
                        <div class="package-header">The Extensive</div>
                        <div class="package-features">
                            <ul>

                                @include('packages.ecommerce-extensive')
                            </ul>
                        </div>
                    </div>
                    <div class="card-right">
                    <!-- <div class="package-price"><span class="package-per-month">From</span>$15k</div> -->
                    <div class="package-price"><span class="package-per-month">Coming Soon</span></div>
                        <span class="package-gst">Not including GST</span>
                        <a href="/get-quote/ecommerce-the-extensive"><div class="purchase-link">Purchase<br>Package</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="btn-collection mt-3 make-centered">
            <a href="https://calendly.com/1vinedesign" title="Book a free consultation on Calendly"
               target="_blank"><button class="btn-special btn-solid btn-black">Book a free consultation <i class="fas fa-calendar-check"></i></button></a>
        </div>
    </div>
</div>

<div class="section make-orange theme-orange autoScroll">
    <div class="container">
        <div id="mlb2-1895856" class="ml-form-embedContainer ml-subscribe-form ml-subscribe-form-1895856">
            <div class="ml-form-align-center">
                <div class="ml-form-embedWrapper embedForm">
                    <div class="ml-form-embedBody ml-form-embedBodyDefault row-form">
                        <div class="ml-form-embedContent" style="">
                            <h2>Do you like free advice? Free gifts?</h2>
                            <p class="section-desc mt-0">Find out how you can establish your brand,<br>get more customers and beat the competition.</p>
                        </div>

                        <form class="col-6 mt-2 make-subscribe ml-block-form" action="https://static.mailerlite.com/webforms/submit/n2d2v8" data-code="n2d2v8" method="post" target="_blank">
                            <div class="ml-form-formContent">
                                <div class="ml-form-fieldRow ml-last-item">
                                    <div class="input-field ml-field-group ml-field-email ml-validate-email ml-validate-required">
                                        <input id="sub_email" aria-label="email" aria-required="true" type="email" class="form-control" data-inputmask="" name="fields[email]" autocomplete="email" required>
                                        <label for="sub_email">Email Address</label>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="ml-form-recaptcha ml-validate-required" style="float:left">
                                <style type="text/css">
                                .ml-form-recaptcha{margin-bottom:20px}.ml-form-recaptcha.ml-error iframe{border:solid 1px red}@media screen and (max-width:480px){.ml-form-recaptcha{width:220px!important}.g-recaptcha{transform:scale(.78);-webkit-transform:scale(.78);transform-origin:0 0;-webkit-transform-origin:0 0}}
                                </style>
                                <script src="https://www.google.com/recaptcha/api.js"></script>
                                <div class="g-recaptcha" data-sitekey="6Lf1KHQUAAAAAFNKEX1hdSWCS3mRMv4FlFaNslaD"></div>
                            </div> -->

                            <input type="hidden" name="ml-submit" value="1">

                            <div class="ml-form-embedSubmit">
                                <button type="submit" class="btn-subscribe btn-solid btn-black mt-3">Sign me up! <i class="fas fa-file-signature"></i></button>
                                <button disabled="disabled" style="display:none" type="button" class="loading"> <div class="ml-form-embedSubmitLoad"></div> <span class="sr-only">Loading...</span> </button>
                            </div>

                            <input type="hidden" name="anticsrf" value="true">

                        </form>
                    </div>

                    <div class="ml-form-successBody row-success" style="display:none">
                        <div class="ml-form-successContent">
                            <h4>Thank you!</h4>
                            <p>You have successfully joined our subscriber list.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script>
            // function ml_webform_success_1895856(){try{window.top.location.href="http:///thank-you"}catch(t){window.location.href="http:///thank-you"}}
            function ml_webform_success_1895856(){var r=ml_jQuery||jQuery;r(".ml-subscribe-form-1895856 .row-success").show(),r(".ml-subscribe-form-1895856 .row-form").hide()}
        </script>

        <img src="https://track.mailerlite.com/webforms/o/1895856/n2d2v8?v1615042620" width="1" height="1" style="max-width:1px;max-height:1px;visibility:hidden;padding:0;margin:0;display:block" alt="." border="0">
        <script src="https://static.mailerlite.com/js/w/webforms.min.js?v42b571e293fbe042bc115150134382c9" type="text/javascript"></script>
    </div>
</div>

<div class="section make-light make-medium theme-orange autoScroll">
    <div class="container make-centered">
        <h2>Don't take my word for it</h2>
        <div class="heading-underline"></div>
        <p class="section-desc mt-1">Here's what my customers are saying about me.</p>
        <ul class="testimonials">
            <li class="testimonials-item">I highly recommend Richard from 1VINE Design to any business looking for a highly-skilled and experienced developer.<span>Dannielle Green - <a href="https://blackcactuscreative.com.au" target="_blank">blackcactuscreative.com.au<div class="link-underline"></div></a></span></li>
            <li class="testimonials-item">Very good ideas while being easy to deal with. Richard has looked after all our needs for logo, business cards and design concepts.<span>Thomas Willis - <a href="https://weq.com.au" target="_blank">weq.com.au<div class="link-underline"></div></a></span></li>
            <li class="testimonials-item">...professional in every way. I'm glad that I trusted them with this job.<span>Rachelle Gerges Melhem</span></li>
            <li class="testimonials-item">I could not recommend Richard From 1VINE Design more highly. His knowledge is remarkable, his professionalism exceptional, and the way he completely sorted my issues, quickly, effortlessly was simply brilliant. Champion bloke, brilliant at what he does.<span>Geoff Beisler</span></li>
            <li class="testimonials-item">Richard is amazing! He really cares about his work, his customers and people in general. The work that he has done for me goes above and beyond. Definitely recommend Richard to anyone!<span>Viv Luhrs - <a href="https://www.thefourletterwordco.com" target="_blank">thefourletterwordco.com<div class="link-underline"></div></a></span></li>
        </ul>

    </div>
</div>

<!-- <div class="section portfolio-summary">
    <ul class="portfolio-list">
        <li class="portfolio-item"><img src="{{ asset('img/bg.jpg') }}" alt=""></li>
        <li class="portfolio-item"><img src="{{ asset('img/bg.jpg') }}" alt=""></li>
        <li class="portfolio-item"><img src="{{ asset('img/bg.jpg') }}" alt=""></li>
    </ul>
</div> -->
@endsection
