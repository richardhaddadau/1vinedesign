<!-- Select Main Layout -->
@extends('layouts.base')

<!-- Page Title -->
@section('title', 'Branding, Design & Development | Brisbane, Australia')

<!-- Page Description -->
@section('description', 'Innovative branding, top-of-the-line design, quality web design and development, complete eCommerce services and proven SEO solutions - all at 1VINE Design.')

<!-- Page Keywords -->
@section('keywords', 'business branding, business rebranding, branding design, web development brisbane, ecommerce developer, web developer brisbane, ecommerce service brisbane, 1VINE, 1VINE Design, graphic designer brisbane, north brisbane graphic designer, north brisbane web developer, brisbane brand strategist, north brisbane business branding, brisbane rebranding, SEO brisbane, north brisbane SEO service, SEO team brisbane, logo design brisbane')

<!-- Page URL -->
@section('url', 'https://1vinedesign.com.au/')

<!-- Page Description -->
@section('social-media-tags')

<!-- Facebook -->
<meta property="og:site_name" content="1VINE Design">
<meta property="og:title" content="Branding. Design & Development Consultancy - 1VINE Design">
<meta property="og:description" content="Official website of 1VINE Design">
<meta property="og:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta property="og:url" content="https://1vinedesign.com.au/">

<!-- Twitter -->
<meta name="twitter:title" content="@1vinedesign">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="Official website of 1VINE Design">
<meta name="twitter:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta name="twitter:image:alt" content="1VINE Design Header.">
@endsection

<!-- Page Description -->
@section('extra-css')
@endsection

<!-- Body Content -->
@section('body-content')

@section('menu-chapter', 'Welcome')

<!-- Hero Section -->
<header class="section hero theme-green autoScroll">
    <div class="container-shadow">
        <section class="container">
            <article class="hero-content">
                <h1 class="make-white">Build a brand that<br>speaks for itself.</h1>
                <h3 class="make-white subtitle">Establish your business, get customers<br>and beat the competition</h3>

                <button class="hero-btn btn-solid btn-orange mt-2" onclick="goTo(1)">Start Your Journey <i class="fas fa-hiking"></i></button>
            </article>
        </section>
    </div>
</header>

<section class="section make-dark theme-green">
    <section class="container make-centered">
        <h2>How can 1VINE help?</h2>
        <div class="heading-underline"></div>
        <p class="section-desc mt-3">My number <span class="make-one">one</span> goal is to help you establish your brand. Building a strong, future-proof brand means confidence, trust and longevity — three things that will drive your competitors crazy and bring customers to you. Here's how you can have that.</p>

        <div class="service-block mt-3">
            <div class="service-list">
                <div class="service-list-item" data-service="Branding">Branding <i class="fa-solid fa-arrow-right-to-line"></i></div>
                <div class="service-list-item" data-service="Websites">Business Websites</div>
                <div class="service-list-item" data-service="Development">Premium Web/App Development</div>
                <div class="service-list-item" data-service="eCommerce">eCommerce Solutions</div>
            </div>
            <div class="service-single">
                <div class="service-block" data-service-single="Branding">
                    <h2 class="service-head"></h2>
                    <p class="service-body"></p>
                    <button class="service-button"></button>
                </div>
                <div class="service-block" data-service-single="Websites">
                    <h2 class="service-head"></h2>
                    <p class="service-body"></p>
                    <ul class="service-footer">
                        <li class="service-footer-item"><i class="fa-brands fa-js"></i> Javascript</li>
                        <li class="service-footer-item"><i class="fa-brands fa-laravel"></i> Laravel</li>
                        <li class="service-footer-item"><i class="fa-brands fa-wordpress"></i> Wordpress</li>
                    </ul>
                    <button class="service-button"></button>
                </div>
                <div class="service-block" data-service-single="Development">
                    <h2 class="service-head"></h2>
                    <p class="service-body"></p>
                    <ul class="service-footer">
                        <li class="service-footer-item"><i class="fa-brands fa-laravel"></i> Laravel</li>
                        <li class="service-footer-item"><i class="fa-brands fa-react"></i> React</li>
                        <li class="service-footer-item"><i class="fa-brands fa-python"></i> Python</li>
                        <li class="service-footer-item"><i class="fa-brands fa-react"></i> React Native</li>
                    </ul>
                    <button class="service-button"></button>
                </div>
                <div class="service-block" data-service-single="eCommerce">
                    <h2 class="service-head"></h2>
                    <p class="service-body"></p>
                    <ul class="service-footer">
                        <li class="service-footer-item"><i class="fa-brands fa-shopify"></i> Shopify</li>
                        <li class="service-footer-item">BigCommerce</li>
                        <li class="service-footer-item">WooCommerce</li>
                    </ul>
                    <button class="service-button"></button>
                </div>
            </div>
        </div>

        <article class="card-collection mt-4">
            <section class="card">
                <div class="card-cover"></div>
                <div class="card-icon"><img src="{{ asset('img/revamp.svg') }}" alt="Icon for Branding Card"></div>
                <div class="card-body">
                    <div class="card-header mt-1">Empower Your Awesome Brand</div>
                    <div class="card-main">Complete branding packages with strategy & design.</div>
                    <div class="card-link mt-3">
                        <a href="/empower-your-awesome-brand">Let's do it <i class="fas fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </section>

            <section class="card">
                <div class="card-cover"></div>
                <div class="card-icon"><img src="{{ asset('img/web-development.svg') }}" alt="Icon for Web Development Card"></div>
                <div class="card-body">
                    <div class="card-header mt-1">Establish Your Brand Online</div>
                    <div class="card-main">Show off your brand with an awesome website.</div>
                    <div class="card-link mt-3"><a href="/establish-your-brand-online">Go Live <i class="fas fa-chevron-circle-right"></i></a></div>
                </div>
            </section>

            <section class="card">
                <div class="card-cover"></div>
                <div class="card-icon"><img src="{{ asset('img/sell.svg') }}" alt="Icon for eCommerce Card"></div>
                <div class="card-body">
                    <div class="card-header mt-1">Start Selling Online</div>
                    <div class="card-main">Get awesome solutions for your online store.</div>
                    <div class="card-link mt-3"><a href="/start-selling-online">Start selling <i class="fas fa-chevron-circle-right"></i></a></div>
                </div>
            </section>
        </article>

        <article class="btn-collection mt-3">
            <a href="https://square.site/book/4JW4JM0AVHYZW/1vine-design" title="Book a free consultation on Square" target="_blank"><button class="btn-special btn-solid btn-black">Book a free consultation <i class="fas fa-calendar-check"></i></button></a>
        </article>
    </section>
</section>

<section class="section make-light theme-green">
    <section class="container make-centered">
        <h2>Looking for Little Extras?</h2>
        <div class="heading-underline"></div>
        <p class="section-desc mt-3">If you're looking for side extras to support your current awesome brand, I also provide web maintenance and web security, Customised SEO and individual deliverables like logos, business cards, flyers, posters, vehicle wraps and the like. </p>

        <article class="card-collection mt-4">

            <section class="card">
                <div class="card-cover"></div>
                <div class="card-icon"><img src="{{ asset('img/maintenance.svg') }}" alt="Icon for Web Maintenance Card"></div>
                <div class="card-body">
                    <div class="card-header mt-1">Protect Your Brand Online</div>
                    <div class="card-main">Keep your online activities managed, safe and secure.</div>
                    <div class="card-link mt-3"><a href="/protect-your-brand-online">Get Secure <i class="fas fa-chevron-circle-right"></i></a></div>
                </div>
            </section>

            <section class="card">
                <div class="card-cover"></div>
                <div class="card-icon"><img src="{{ asset('img/seo.svg') }}" alt="Icon for SEO"></div>
                <div class="card-body">
                    <div class="card-header mt-1">Maximise Your Brand's SEO</div>
                    <div class="card-main">Increase your brand's traffic and online exposure.</div>
                    <div class="card-link mt-3"><a href="/maximise-your-brands-seo">Boost Traffic <i class="fas fa-chevron-circle-right"></i></a></div>
                </div>
            </section>

            <section class="card">
                <div class="card-cover"></div>
                <div class="card-icon"><img src="{{ asset('img/deliverables.svg') }}" alt="Icon for Other Deliverables Card"></div>
                <div class="card-body">
                    <div class="card-header mt-1">Other <br>Deliverables</div>
                    <div class="card-main">Pick and choose the deliverables that you need.</div>
                    <div class="card-link mt-3"><a href="/other-deliverables">Browse More <i class="fas fa-chevron-circle-right"></i></a></div>
                </div>
            </section>

        </article>

        <etails class="btn-collection mt-3">
            <a href="https://square.site/book/4JW4JM0AVHYZW/1vine-design" title="Book a free consultation on Square" target="_blank"><button class="btn-special btn-solid btn-black">Book a free consultation <i class="fas fa-calendar-check"></i></button></a>
        </etails>
    </section>
</section>

<section class="section make-light theme-orange autoScroll">
    <section class="container make-centered">
        <h2>Who is 1VINE?</h2>
        <div class="heading-underline"></div>
        <p class="col-10"><span class="make-one">1VINE Design</span>, or 1VINE for short, is a <span class="make-strong">Branding and Web Development Consultancy</span> focused on helping Australian businesses make their mark as more than a business but as a brand.</p>

        <p class="col-10">
        I build branding strategies to help you define your brand with clear and consistent messaging and professional, innovative branding design Along with that, I design and develop your touchpoints like your <span class="make-strong">logo, stationery sets: business cards, letterheads, envelopes, email marketing, signage design (posters, banners, advertisements), vehicle wrap design, packaging design and optimised, premium quality websites.</span>
        </p>

        <p class="col-9 quote-post">
            <i class="fas fa-quote-left"></i> When people think of the service you offer, let them think of your brand. Only! <i class="fas fa-quote-right"></i></p>

        <p class="col-10">Have a chat with me to find out how you can stand out from the competition and get more customers who will value what your service and your product.</p>

        <article class="btn-collection mt-3">
            <a href="https://square.site/book/4JW4JM0AVHYZW/1vine-design" title="Book a free consultation on Square" target="_blank"><button class="btn-special btn-solid btn-black">Book a free consultation <i class="fas fa-calendar-check"></i></button></a>
        </article>
    </section>
</section>

<div class="section make-orange theme-orange autoScroll">
    <div class="container">
        <div id="mlb2-1895856" class="ml-f orm-embedContainer ml-subscribe-form ml-subscribe-form-1895856">
            <div class="ml-form-align-center">
                <div class="ml-form-embedWrapper embedForm">
                    <div class="ml-form-embedBody ml-form-embedBodyDefault row-form">
                        <div class="ml-form-embedContent" style="">
                            <h2>Do you like free advice?</h2>
                            <p class="section-desc mt-0">Get the greatest help and tips to push your brand further.<br>
                            Stop struggling to get customers, make competitors an afterthought.</p>
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

@endsection