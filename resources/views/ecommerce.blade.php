<!-- Select Main Layout -->
@extends('layouts.base')

<!-- Page Title -->
@section('title', 'eCommerce Solutions')

<!-- Page Description -->
@section('description', 'Have an eCommerce strategy and premium-built store for your business')

<!-- Page Keywords -->
@section('keywords', '')

<!-- Page URL -->
@section('url', 'https://1vinedesign.com.au/ecommerce-solutions')

<!-- Page Description -->
@section('social-media-tags')

<!-- Facebook -->
<meta property="og:site_name" content="1VINE Design">
<meta property="og:title" content="Start Selling Online - 1VINE Design">
<meta property="og:description" content="Have an eCommerce strategy and premium-built store for your business.">
<meta property="og:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta property="og:url" content="https://1vinedesign.com.au/maximise-your-brands-seo">

<!-- Twitter -->
<meta name="twitter:title" content="@1vinedesign">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="Have an eCommerce strategy and premium-built store for your business.">
<meta name="twitter:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta name="twitter:image:alt" content="1VINE Design Header.">
@endsection

<!-- Page Description -->
@section('extra-css')
@endsection

<!-- Body Content -->
@section('body-content')

@section('menu-chapter', 'eCommerce Solutions')

<div class="section make-small make-dark theme-green banner-header">
    <div class="container" style="padding-bottom: 30px;">

    </div>
</div>

<div class="section make-medium make-green theme-green">
    <div class="container large-container">

        <div class="pricing-banner">
            <div class="pricing-topic for-cells-3">
                <h2>Start Selling Online</h2>
                <p>Have an eCommerce strategy and premium-built store for your business</p>
            </div>

            <div class="pricing-group for-cells-3">
                <div class="pricing-cell">
                    <h4 class="pricing-title">Basic</h4>
                    <h3 class="pricing-cost">$7k</h3>
                    <p class="pricing-terms">one-off</p>
                    <ul class="pricing-list">
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Modern eStore</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Responsive Design</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Product Import</li>
                    </ul>
                    <a class="pricing-button primary" onclick="goTo(2)">Compare <i class="fas fa-th-list"></i></a>
                </div>

                <div class="pricing-cell">
                    <h4 class="pricing-title">Standard</h4>
                    <h3 class="pricing-cost">$15k</h3>
                    <p class="pricing-terms">one-off</p>
                    <ul class="pricing-list">
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Responsive Design</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Product Builds</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> SEO Setup</li>
                    </ul>
                    <a class="pricing-button primary" onclick="goTo(2)">Compare <i class="fas fa-th-list"></i></a>
                </div>

                <div class="pricing-cell">
                    <h4 class="pricing-title">Extensive</h4>
                    <h3 class="pricing-cost">$19k</h3>
                    <p class="pricing-terms">one-off</p>
                    <ul class="pricing-list">
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> eCommerce Strategy</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> App Builds</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> POS Integration</li>
                    </ul>
                    <a class="pricing-button secondary" onclick="goTo(2)">See More <i class="fas fa-th-list"></i></a>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="section make-light make-small theme-green autoScroll">
    <div class="container make-centered large-container mb-5">
        <h2>Compare plans</h2>
        <div class="pricing-table">
            <div class="pricing-table-features">
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-item">1 Hour Consultation</div>

                <h5 class="pricing-head">eCommerce Store</h5>
                <div class="pricing-table-feature-item">WooCommerce Base</div>
                <div class="pricing-table-feature-item">Premium Commerce Base</div>
                <div class="pricing-table-feature-item">Branded Theme</div>
                <div class="pricing-table-feature-item">Project Plan Delivery</div>
                <div class="pricing-table-feature-item">Store Navigation</div>
                <div class="pricing-table-feature-item">Single-Page Checkout</div>
                <div class="pricing-table-feature-item">Product Population</div>
                <div class="pricing-table-feature-item">Product Description</div>
                <div class="pricing-table-feature-item">Product Images</div>
                <div class="pricing-table-feature-item">Initial SEO</div>
                <div class="pricing-table-feature-item rows-3">Domain Names<br>&nbsp;<br>&nbsp;</div>
                <div class="pricing-table-feature-item">Web Hosting</div>
                <div class="pricing-table-feature-item">SSL Certificate</div>
                <div class="pricing-table-feature-item">Email Address Capacity</div>
                <div class="pricing-table-feature-item">Emails Setup</div>
                <div class="pricing-table-feature-item">Blog Setup</div>
                <div class="pricing-table-feature-item">Extra Pages</div>
                <div class="pricing-table-feature-item">Content Copywriting</div>
                <div class="pricing-table-feature-item">POS Integration</div>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">Basic</h5>
                <div class="pricing-table-feature-marker" style="margin-top: 5px;"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker rows-3">.com.au<br>&nbsp;<br>&nbsp;</div>
                <div class="pricing-table-feature-marker">150GB</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">100</div>
                <div class="pricing-table-feature-marker">1 Email</div>
                <div class="pricing-table-feature-marker">3</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                <a class="pricing-foot-button" href="/get-quote/ecommerce-basic">Purchase</a>
                <h5 class="pricing-foot">$2850<span>AUD</span></h5>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">Standard</h5>
                <div class="pricing-table-feature-marker" style="margin-top: 5px;"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker rows-3">.com.au<br>.com<br>&nbsp;</div>
                <div class="pricing-table-feature-marker">Standard</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">500</div>
                <div class="pricing-table-feature-marker">5 Emails</div>
                <div class="pricing-table-feature-marker">6</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <a class="pricing-foot-button" href="/get-quote/ecommerce-standard">Purchase</a>
                <h5 class="pricing-foot">$5890<span>AUD</span></h5>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">Extensive</h5>
                <div class="pricing-table-feature-marker" style="margin-top: 5px;"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker rows-3">.com.au<br>.com<br>&nbsp;</div>
                <div class="pricing-table-feature-marker">Standard</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">500</div>
                <div class="pricing-table-feature-marker">5 Emails</div>
                <div class="pricing-table-feature-marker">6</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <a class="pricing-foot-button" href="/get-quote/ecommerce-extensive">Purchase</a>
                <h5 class="pricing-foot">$5890<span>AUD</span></h5>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">Enterprise</h5>
                <div class="pricing-table-feature-marker" style="margin-top: 5px;"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker rows-3">Any<br>&nbsp;<br>&nbsp;</div>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <a class="pricing-foot-button" href="/get-quote/ecommerce-enterprise">Contact</a>
                <h5 class="pricing-foot call-for-quote">Call for Quote</h5>
            </div>
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

@endsection
