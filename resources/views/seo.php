<!-- Select Main Layout -->
@extends('layouts.base')

<!-- Page Title -->
@section('title', 'Web SEO')

<!-- Page Description -->
@section('description', 'Every business should take SEO very seriously and work with a team they can trust.')

<!-- Page Keywords -->
@section('keywords', '1VINE SEO, Search Engine Optimisation, SEO Strategy, Social Media Strategy, SEO and Social Media')

<!-- Page URL -->
@section('url', 'https://1vinedesign.com.au/web-seo')

<!-- Page Description -->
@section('social-media-tags')

<!-- Facebook -->
<meta property="og:site_name" content="1VINE Design">
<meta property="og:title" content="Maximise Your Brand's SEO - 1VINE Design">
<meta property="og:description" content="Maximise Your Brand's SEO with 1VINE Design.">
<meta property="og:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta property="og:url" content="https://1vinedesign.com.au/maximise-your-brands-seo">

<!-- Twitter -->
<meta name="twitter:title" content="@1vinedesign">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="Maximise Your Brand's SEO with 1VINE Design.">
<meta name="twitter:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta name="twitter:image:alt" content="1VINE Design Header.">
@endsection

<!-- Page Description -->
@section('extra-css')
@endsection

<!-- Body Content -->
@section('body-content')

@section('menu-chapter', 'Maximise Your Brand\'s SEO')

<!-- Hero Section -->
<div class="section make-dark theme-orange make-medium">
    <div class="container">
        <div class="hero-content">
            <h1 class="make-centered">Maximise Your Brand's SEO</h1>
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

<!-- <div class="section make-light theme-orange">
    <div class="container">
        <h2>Looking to further your reach?</h2>
    </div>
</div> -->

<div class="section make-small make-light theme-green">
    <div class="container">
        <h2 class="make-centered">What is SEO?</h2>
        <p class="col-10"><strong>Search Engine Optimisation</strong>, or <strong>SEO</strong> for short, is the process of enhancing your website to perform and rank best on all the major search engines.</p>
        <p class="col-10">The main goal of search engines is to provide people with search results that suit their queries. For example, someone searching for new comfortable running shoes for men doesn't want to be taken to a website that sells succulent plants. This is why <strong>SEO</strong> work is so critical to any business because it makes sure that your website delivers what it promises and becomes a reputable and reliable source for search engines like Google and Bing to send their customers to.</p>
    </div>
</div>

<div class="section make-small make-light theme-green">
    <div class="container">
        <h2>SEO Strategy and<br>Web Maintenance Packages</h2>
        <div class="heading-underline"></div>
        <p class="section-desc mt-3 make-centered mb-0">These packages are suited for businesses who want a bigger digital footprint and greater online reach. Supersize your traffic with <strong>Search Engine Optimisation (SEO)</strong>.</p>

        <p class="section-desc mt-3 mb-0 make-centered"><strong>All of our SEO packages come with the following Optimisations:</strong></p>

        <div class="package-card">
            <div class="package-card-content">
                <div class="package-card-info">
                    <p class="package-card-info-header">On-Site Optimisation</p>
                    <ul>
                        <li><i class="fas fa-link"></i> URL Optimisation</li>
                        <li><i class="fas fa-chart-line"></i> Web Analytics (Google, Facebook & Premium)</li>
                        <li><i class="fas fa-tools"></i> Webmaster Tools (Google, Bing & Premium)</li>
                        <li><i class="fas fa-code"></i> URL Canonicalisation</li>
                        <li><i class="fas fa-robot"></i> Robots.txt Optimisation</li>
                        <li><i class="fas fa-file-code"></i> XML & HTML Sitemap Generation</li>
                        <li><i class="fas fa-tachometer-alt"></i> Performance Optimisations</li>
                        <li><i class="fab fa-html5"></i> HTML Tag Optimisations</li>
                        <li><i class="fas fa-file-medical"></i> Technical Audit (Website Health Fixes)</li>
                        <li><i class="fas fa-network-wired"></i> Internal Link Structuring and Optimisation</li>
                        <li><i class="fab fa-searchengin"></i> Meta Data Optimisation</li>
                    </ul>

                    <p class="package-card-info-header">Off-Site Optimisation</p>
                    <ul>
                        <li><i class="fas fa-project-diagram"></i> Promotion to 80+ Online Directories</li>
                        <li><i class="fas fa-handshake"></i> Local and National Business Listing</li>
                    </ul>

                    <p class="package-card-info-header">Some of the Tools We Use</p>
                    <ul>
                        <li>AHREFS</li>
                        <li>MOZ SEO</li>
                        <li>SEMRush</li>
                        <li>SEO PowerSuite</li>
                    </ul>
                </div>
            </div>
        </div>

        <h2>Why do you need all of these SEO tools?</h2>
        <p class="section-desc make-centered mb-0">Each of the tools mentioned above excels in different areas. They are very well known across the industry and I would strongly recommend you steer clear of anyone who offers you SEO without mentioning at least one of these tools.</p>
    </div>
</div>

<div class="section make-light theme-green">
    <div class="container make-centered">
        <h2>My Recommendations</h2>
        <div class="heading-underline"></div>
        <p class="section-desc mt-3 make-centered mb-3">The following packages follow my recommendations to maximise your brand's reach through SEO. Feel free to get in touch if you're looking for a more customised solution.</p>

        <div class="package-card">
            <div class="package-card-content">
                <div class="package-card-front">
                    <div class="card-cover"></div>
                    <div class="card-left">
                        <div class="package-header">One-Way SEO</div>
                        <div class="package-subheader">Not to be thought of as a lesser package but not as aggressive as Combative. One-Way SEO deals with less competitive keywords.</div>
                        <div class="package-features">
                            <ul>

                                @include('packages.seo-one-way')

                            </ul>
                        </div>
                    </div>
                    <div class="card-right">
                        <!-- <div class="package-price">$899<span class="package-per-month">per Month</span></div> -->
                        <div class="package-price"><span class="package-per-month">Coming Soon</span></div>
                        <span class="package-gst">Not including GST</span>
                        <a href="/get-quote/seo-one-way"><div class="purchase-link">Purchase<br>Package</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="package-card">
            <div class="package-card-content">
                <div class="package-card-front">
                    <div class="card-cover"></div>
                    <div class="card-left">
                        <div class="package-header">Combative SEO</div>
                        <span class="package-subheader">The Combative package is a more aggressive SEO style which looks more in-depth at your competitors and audience to compete harder.</span>
                        <div class="package-features">
                            <ul>

                                @include('packages.seo-combative')

                            </ul>
                        </div>
                    </div>
                    <div class="card-right">
                        <!-- <div class="package-price">$2799<span class="package-per-month">per Month</span></div> -->
                        <div class="package-price"><span class="package-per-month">Coming Soon</span></div>
                        <span class="package-gst">Not including GST</span>
                        <a href="/get-quote/seo-combative"><div class="purchase-link">Purchase<br>Package</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="btn-collection mt-3 make-centered">
            <a href="https://square.site/book/4JW4JM0AVHYZW/1vine-design" title="Book a free consultation on Square" target="_blank"><button class="btn-special btn-solid btn-black">Book a free consultation <i class="fas fa-calendar-check"></i></button></a>
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
