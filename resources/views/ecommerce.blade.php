<!-- Select Main Layout -->
@extends('layouts.base')

<!-- Page Title -->
@section('title', 'eCommerce Solutions')

<!-- Page Description -->
@section('description', 'Have an eCommerce strategy and premium-built store for your business')

<!-- Page Keywords -->
@section('keywords', 'ecommerce solutions, shopify store, bigcommerce store, ecommerce site, woocommerce package,
pos integration, premium ecommerce package')

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

<div class="section make-small make-dark theme-green pb-5">
    <div class="container large-container">

        <div class="pricing-banner">
            <div class="pricing-topic for-cells-3">
                <h1>Start Selling Online</h1>
                <p>Have an eCommerce strategy and premium-built store for your business</p>
            </div>

            <div class="pricing-group for-cells-3">
                <div class="pricing-cell">
                    <h4 class="pricing-title">Basic</h4>
                    <h3 class="pricing-cost">$4580</h3>
                    <p class="pricing-terms">one-off</p>
                    <ul class="pricing-list">
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Modern eStore</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Responsive Design</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Product Import</li>
                    </ul>
                    <div class="pricing-button primary" onclick="goTo(2)">Compare <i class="fas fa-th-list"></i></div>
                </div>

                <div class="pricing-cell">
                    <h4 class="pricing-title">Standard</h4>
                    <h3 class="pricing-cost">$9890</h3>
                    <p class="pricing-terms">one-off</p>
                    <ul class="pricing-list">
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Responsive Design</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Product Builds</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> SEO Setup</li>
                    </ul>
                    <div class="pricing-button primary" onclick="goTo(2)">Compare <i class="fas fa-th-list"></i></div>
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
                    <div class="pricing-button secondary" onclick="goTo(2)">See More <i class="fas fa-th-list"></i></div>
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
                <div class="pricing-table-feature-item">Shopify/BigCommerce Base*</div>
                <div class="pricing-table-feature-item">Domain Name**</div>
                <div class="pricing-table-feature-item">SSL Certificate**</div>
                <div class="pricing-table-feature-item">Branded Theme</div>
                <div class="pricing-table-feature-item">Project Plan Delivery</div>
                <div class="pricing-table-feature-item">Custom Header/Footer</div>
                <div class="pricing-table-feature-item">Custom Store Navigation</div>
                <div class="pricing-table-feature-item">Single-Page Checkout</div>
                <div class="pricing-table-feature-item">Products Population&dagger;</div>
                <div class="pricing-table-feature-item">Categories Setup</div>
                <div class="pricing-table-feature-item">Blog Setup</div>
                <div class="pricing-table-feature-item">Full SEO Setup</div>
                <div class="pricing-table-feature-item">Analytics Integration</div>
                <div class="pricing-table-feature-item">POS Integration</div>
                <div class="pricing-table-feature-item">eCommerce Plugin Installation&ddagger;</div>
                <div class="pricing-table-feature-item">Custom Plugin Development</div>

                <h5 class="pricing-head">Strategic Content/Copywriting</h5>
                <div class="pricing-table-feature-item">Image Search/Stock</div>
                <div class="pricing-table-feature-item">Product Descriptions</div>
                <div class="pricing-table-feature-item">Category Descriptions</div>
                <div class="pricing-table-feature-item">Original Photography</div>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">Basic</h5>
                <div class="pricing-table-feature-marker" style="margin-top: 5px;"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                <a class="pricing-foot-button" href="/get-quote/ecommerce-basic">Purchase</a>
                <h5 class="pricing-foot">$4580<span>AUD</span></h5>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">Standard</h5>
                <div class="pricing-table-feature-marker" style="margin-top: 5px;"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">Up to 250</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                <a class="pricing-foot-button" href="/get-quote/ecommerce-standard">Purchase</a>
                <h5 class="pricing-foot">$9890<span>AUD</span></h5>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">Extensive</h5>
                <div class="pricing-table-feature-marker" style="margin-top: 5px;"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">Up to 500</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                <a class="pricing-foot-button" href="/get-quote/ecommerce-extensive">Purchase</a>
                <h5 class="pricing-foot">$19k<span>AUD</span></h5>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">Enterprise</h5>
                <div class="pricing-table-feature-marker" style="margin-top: 5px;"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <a class="pricing-foot-button" href="/get-quote/ecommerce-enterprise">Contact</a>
                <h5 class="pricing-foot call-for-quote">Call for Quote</h5>
            </div>
        </div>

        <p class="pricing-footnotes">* 12 Month Subscription on Shopify/BigCommerce included (Basic/Standard Level).<br>
            ** 12 Month Subscription.<br>
            &dagger; Extra product population that exceed package offerings can be added on as extra features.<br>
            &ddagger; Installation only. Subscriptions costs not included</p>
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
