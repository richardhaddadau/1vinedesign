<!-- Select Main Layout -->
@extends('layouts.base')

<!-- Page Title -->
@section('title', 'Establish Your Brand Online')

<!-- Page Description -->
@section('description', "1VINE Design provides full stack development. I've worked with many companies in Australia and built them stable and scalable websites.")

<!-- Page Keywords -->
@section('keywords', 'web development australia, web developer brisbane, full stack developer brisbane, full stack developer australia, website design, website development')

<!-- Page URL -->
@section('url', 'https://1vinedesign.com.au/establish-your-brand-online')

<!-- Page Description -->
@section('social-media-tags')

<!-- Facebook -->
<meta property="og:site_name" content="1VINE Design">
<meta property="og:title" content="Establish Your Brand Online - 1VINE Design">
<meta property="og:description" content="Establish Your Brand Online with 1VINE Design.">
<meta property="og:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta property="og:url" content="https://1vinedesign.com.au/establish-your-brand-online">

<!-- Twitter -->
<meta name="twitter:title" content="@1vinedesign">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="Establish Your Brand Online with 1VINE Design.">
<meta name="twitter:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta name="twitter:image:alt" content="1VINE Design Header.">
@endsection

<!-- Page Description -->
@section('extra-css')
@endsection

<!-- Body Content -->
@section('body-content')

@section('menu-chapter', 'Establish Your Brand Online')

<!-- Hero Section -->
<div class="section make-dark theme-orange make-medium">
    <div class="container">
        <div class="hero-content">
            <h1 class="make-centered">Establish Your Brand Online</h1>
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
        <h2 class="make-centered">"My brand needs a creative online presence that really stands out!"</h2>
        <p class="col-10">In 2021, a website is as necessary for your brand identity as your logo is. Your customers visit your website to learn more about you, your products, your services and your portfolio. As far as touchpoints go, and for almost all industries, your website trumps any other deliverable that you can invest in.</p>
        <p class="col-10">Your website is also your digital real estate. When someone searches online for a specific product or a particular service that you offer and provide, it is your website that will be your best agent.</p>
        <p class="col-10">Sometimes, your website goes even beyond just a digital information portfolio. Perhaps you want your visitors to interact with your website to make a purchase, subscribe to a membership, fill out details, or use your digital services. You want a professional developer to build a website that is innovative, secure and dependable.</p>
        
        <h2 class="make-centered">Choose <span class="make-one">1VINE</span> for Serious Web Development</h2>
        <p class="col-10">For over 20 years, I've worked in programming within the web development and software development spaces. I've built everything from custom membership portals, CMS (Content Management System) sites and private social media platforms to software used by engineering firms and organisations.</p>
        <p class="col-10">In development circles, I am what is referred to as a full stack programmer. I work with client-side (frontend) and server-side (backend) technologies and processes.</p>
        <p class="col-10">I have extensive experience with <strong>WordPress</strong> in <strong>Website Design and Development</strong> using various builders like <strong>Divi, Elementor, Avada, WPBakery and Thrive</strong>. My expertise in WordPress also covers <strong>Plugin Development</strong> and <strong>Theme Creation</strong>.</p>
        <p class="col-10">My programming proficiency includes the following languages, frameworks and technologies:<br>
        <strong>HTML, CSS, JavaScript, PHP, MySQL, JQuery, Laravel, BootStrap, React, Liquid, Visual Basic, C++, C#, Java</strong>
        <p class="col-10">I'm currently adding to my belt:<br>
        <strong>Python, NodeJS, MondoDB, Vue, Django, Express, Next, Nuxt, Redux, Vuex, ASP.NET, Angular</strong>
    </div>
</div>

<div class="section make-light theme-green">
    <div class="container make-centered">
        <h2>My Recommendations</h2>
        <div class="heading-underline"></div>
        <p class="section-desc mt-3 make-centered mb-3">If you're unsure which package suits you best, pick the one you feel has what you're after and I'll help you out further during the included initial consultation.</p>

        <div class="package-card">
            <div class="package-card-content">
                <div class="package-card-front">
                    <div class="card-cover"></div>
                    <div class="card-left">
                        <div class="package-header">Essentials</div>
                        <span class="package-subheader">This is great if you can't currently afford a big site but want something that people can link to and learn more about you and how to find you.</span>
                        <div class="package-features">
                            <ul>

                                @include('packages.development-essentials')

                            </ul>
                        </div>
                    </div>
                    <div class="card-right">
                    <!-- <div class="package-price"><span class="package-per-month">From</span>$2700</div> -->
                    <div class="package-price"><span class="package-per-month">Coming Soon</span></div>
                        <span class="package-gst">Not including GST</span>
                        <a href="/get-quote/website-essentials"><div class="purchase-link">I Only Need<br>This Package</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="package-card">
            <div class="package-card-content">
                <div class="package-card-front">
                    <div class="card-cover"></div>
                    <div class="card-left">
                        <div class="package-header">The Premium</div>
                        <span class="package-subheader">A larger digital footprint, like what this package provides, is better for SEO and works perfect for many brands.</span>
                        <div class="package-features">
                            <ul>

                                @include('packages.development-premium')

                            </ul>
                        </div>
                    </div>
                    <div class="card-right">
                    <!-- <div class="package-price"><span class="package-per-month">From</span>$6800</div> -->
                    <div class="package-price"><span class="package-per-month">Coming Soon</span></div>
                        <span class="package-gst">Not including GST</span>
                        <a href="/get-quote/website-the-premium"><div class="purchase-link">This Package<br>Is Just Right</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="package-card">
            <div class="package-card-content">
                <div class="package-card-front">
                    <div class="card-cover"></div>
                    <div class="card-left">
                        <div class="package-header">The Enterprise</div>
                        <span class="package-subheader">Choose this package if your website will be heavily dependent on user interaction, also referred to as web applications.</span>
                        <div class="package-features">
                            <ul>

                                @include('packages.development-enterprise')

                            </ul>
                        </div>
                    </div>
                    <div class="card-right">
                        <!-- <div class="package-price"><span class="package-per-month">From</span>$12k</div> -->
                        <div class="package-price"><span class="package-per-month">Coming Soon</span></div>
                        <span class="package-gst">Not including GST</span>
                        <a href="/get-quote/website-the-enterprise"><div class="purchase-link">This Is Right<br>For My Brand</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="btn-collection mt-3 make-centered">
            <a href="https://square.site/book/4JW4JM0AVHYZW/1vine-design" title="Book a free consultation on Square" target="_blank"><button class="btn-special btn-solid btn-black">Book a free consultation <i class="fas fa-calendar-check"></i></button></a>
        </div>
    </div>
</div>

<div class="section make-dark theme-green">
    <div class="container make-centered">
        <h2 class="mt-2">Looking for Premiumn Domain Names or Australian-Based Trusted Webhosting?</h2>
        <p class="col-9">If you're looking for premium domain names and Australian-based web hosting for an affordable price, visit <a href="https://1vinedesign.secureapi.com.au/" target="_blank">1vinedesign.secureapi.com.au</a></p>
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