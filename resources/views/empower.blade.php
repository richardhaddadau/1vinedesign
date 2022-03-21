<!-- Select Main Layout -->
@extends('layouts.base')

<!-- Page Title -->
@section('title', 'Empower Your Awesome Brand')

<!-- Page Description -->
@section('description', "As a branding agency, 1VINE provides complete rebranding packages for Australian businesses in all industries.")

<!-- Page Keywords -->
@section('keywords', 'branding australia, rebranding australia, branding brisbane, revamp, branding packages brisbane, branding packages australia')

<!-- Page URL -->
@section('url', 'https://1vinedesign.com.au/empower-your-awesome-brand')

<!-- Page Description -->
@section('social-media-tags')

<!-- Facebook -->
<meta property="og:site_name" content="1VINE Design">
<meta property="og:title" content="Empower Your Awesome Brand - 1VINE Design">
<meta property="og:description" content="Empower Your Awesome Brand with 1VINE Design.">
<meta property="og:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta property="og:url" content="https://1vinedesign.com.au/empower-your-awesome-brand">

<!-- Twitter -->
<meta name="twitter:title" content="@1vinedesign">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="Empower Your Awesome Brand with 1VINE Design.">
<meta name="twitter:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta name="twitter:image:alt" content="1VINE Design Header.">
@endsection

<!-- Page Description -->
@section('extra-css')
@endsection

<!-- Body Content -->
@section('body-content')

@section('menu-chapter', 'Empower Your Awesome Brand')

<!-- Hero Section -->
<div class="section make-dark theme-orange make-medium">
    <div class="container">
        <div class="hero-content">
            <h1 class="make-centered">Empower Your<br>Awesome Brand</h1>
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
        <h2 class="make-centered">"I'm starting a new business and I need a logo, a business card and a website."</h2>
        <p class="col-10">You know your products really well, you spent years mastering and refining the service(s) you want to offer, and now you need a robust branding plan.</p>
        <p class="col-10">Of course, branding goes far beyond a logo and a business card. A branding package without a branding strategy is like being led into a dark room with a handful of darts. You guess that there's a target around but you don't know for sure and, even if there were, you have no idea where it is.</p>
        <p class="col-10">Maybe you already have an established business. Does this sound like you?</p>
        <h2 class="make-centered">"We want to refocus and refresh our brand."</h2>
        <p class="col-10">You've been in business for a few years now. A friend of the family whipped up a quick logo for you when you first started, slapped it on a business card and you've been going on with that since then. The thing is, you're overdue for a refresh.</p>
        <p class="col-10">After trying the industry and testing different areas of expertise, you know what you want your focus to be and you know who your target audience should be. You want to refocus your brand based on what you now know.</p>
        <p class="col-10">You know the <strong>what</strong> very well. You want to refocus and refresh your brand. What you need help with is the <strong>how</strong>. How to do it, how best to achieve top results and how to marry what you need with what your customers won't be able to live without.</p>
        <h2 class="make-centered">That's where <span class="make-one">1VINE</span> comes in</h2>
        <p class="col-10">As a branding consultancy, 1VINE provides complete rebranding packages.</p>
        <p class="col-10">My process begins with the research and assessment of your current position in your industry and with relation to your customers, the target audience. This includes an audit of your biggest competitors. Here's what the rest of the process looks like:</p>

        <div class="the-process">
            <img src="{{ asset('img/branding-process_01.png') }}" alt="Image for Step 1 in the Process, Research and Analysis">
            <img src="{{ asset('img/branding-process_02.png') }}" alt="Image for Step 2 in the Process, Strategy Development">
            <img src="{{ asset('img/branding-process_03.png') }}" alt="Image for Step 3 in the Process, Identity Design">
            <img src="{{ asset('img/branding-process_04.png') }}" alt="Image for Step 4 in the Process, Touchpoint Creation">
            <img src="{{ asset('img/branding-process_05.png') }}" alt="Image for Step 5 in the Process, Asset Management">
        </div>
        
        <p class="col-10"><strong>Step 1: Investigating</strong> I research and analyse your brand’s potential, the industry, your audience and your competitors.</p>
        <p class="col-10"><strong>Step 2: Positioning</strong> then I define your brand with a voice & tone, a look & feel, brand messaging and proposition.</p>
        <p class="col-10"><strong>Step 3: Designing</strong> from your strategy, I design your logo, your colour palettes, your font specifications and style guidelines.</p>
        <p class="col-10"><strong>Step 4: Generating</strong> the foundation is laid and so I move on to touchpoints that help your brand like business cards, a website, and signage.</p>
        <p class="col-10"><strong>Step 5: Implementing</strong> a brand needs a big launch and good asset management helps plan for that.</p>
    </div>
</div>

<div class="section make-light theme-green">
    <div class="container make-centered">
        <h2>My Recommendations</h2>
        <div class="heading-underline"></div>
        <p class="section-desc mt-3 make-centered mb-3">The following items are purchased as a package. If you're looking for separate deliverables instead, please go to the <a href="/other-deliverables">Other Deliverables</a> page. Having said that. though, I highly recommend you read on to understand why these items are grouped together in packages and what purpose they serve. Also, you'll be getting these items at great rates as a package.</p>

        <div class="package-card">
            <div class="package-card-content">
                <div class="package-card-front">
                    <div class="card-cover"></div>
                    <div class="card-left">
                        <div class="package-header">The Starter</div>
                        <div class="package-features">
                            <ul>

                                @include('packages.empower-starter')

                            </ul>
                        </div>
                    </div>
                    <div class="card-right">
                    <!-- <div class="package-price"><span class="package-per-month">From</span>$10k</div> -->
                    <div class="package-price"><span class="package-per-month">Coming Soon</span></div>
                        <span class="package-gst">Not including GST</span>
                        <a href="/get-quote/branding-the-starter"><div class="purchase-link">Purchase<br>Package</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="package-card">
            <div class="package-card-content">
                <div class="package-card-front">
                    <div class="card-cover"></div>
                    <div class="card-left">
                        <div class="package-header">The Professional</div>
                        <div class="package-features">
                            <ul>

                                @include('packages.empower-professional')
                            </ul>
                        </div>
                    </div>
                    <div class="card-right">
                    <!-- <div class="package-price"><span class="package-per-month">From</span>$16k</div> -->
                    <div class="package-price"><span class="package-per-month">Coming Soon</span></div>
                        <span class="package-gst">Not including GST</span>
                        <a href="/get-quote/branding-the-professional"><div class="purchase-link">Purchase<br>Package</div></a>
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
                        <div class="package-features">
                            <ul>

                                @include('packages.empower-premium')

                            </ul>
                        </div>
                    </div>
                    <div class="card-right">
                        <!-- <div class="package-price"><span class="package-per-month">From</span>$24k</div> -->
                        <div class="package-price"><span class="package-per-month">Coming Soon</span></div>
                        <span class="package-gst">Not including GST</span>
                        <a href="/get-quote/branding-the-premium"><div class="purchase-link">Purchase<br>Package</div></a>
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