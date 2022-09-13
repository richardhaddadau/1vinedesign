<!-- Select Main Layout -->
@extends('layouts.base')

<!-- Page Title -->
@section('title', 'Business Websites')

<!-- Page Description -->
@section('description', 'Establish your brand\'s digital footprint with a premium, professionally-built website.')

<!-- Page Keywords -->
@section('keywords', 'business websites, cms website, wordpress website, affordable website packages, website
packages, website development')

<!-- Page URL -->
@section('url', 'https://1vinedesign.com.au/business-websites')

<!-- Page Description -->
@section('social-media-tags')

<!-- Facebook -->
<meta property="og:site_name" content="1VINE Design">
<meta property="og:title" content="Establish your brand's digital footprint - 1VINE Design">
<meta property="og:description" content="Establish you brand online with a premium, professionally-built website.">
<meta property="og:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta property="og:url" content="https://1vinedesign.com.au/business-websites">

<!-- Twitter -->
<meta name="twitter:title" content="@1vinedesign">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="Establish your brand's digital footprint with a premium, professionally-built website.">
<meta name="twitter:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta name="twitter:image:alt" content="1VINE Design Header.">
@endsection

<!-- Page Description -->
@section('extra-css')
@endsection

<!-- Body Content -->
@section('body-content')

@section('menu-chapter', 'Business Websites')

<div class="section make-small make-dark theme-green banner-header">
    <div class="container" style="padding-bottom: 30px;">

    </div>
</div>

<div class="section make-small make-dark theme-green">
    <div class="container large-container">

        <div class="pricing-banner">
            <div class="pricing-topic">
                <h1>Establish your brand's digital footprint</h1>
                <p>with a premium, professionally-built website</p>
            </div>

            <div class="pricing-group">
                <div class="pricing-cell">
                    <h4 class="pricing-title">Essential</h4>
                    <h3 class="pricing-cost">$2890</h3>
                    <p class="pricing-terms">one-off</p>
                    <ul class="pricing-list">
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Responsive Design</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Initial SEO</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Webhosting</li>
                    </ul>
                    <div class="pricing-button primary" onclick="goTo(3)">Compare <i class="fas fa-th-list"></i></div>
                </div>

                <div class="pricing-cell">
                    <h4 class="pricing-title">Premium</h4>
                    <h3 class="pricing-cost">$5890</h3>
                    <p class="pricing-terms">one-off</p>
                    <ul class="pricing-list">
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Responsive Design</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> UI / UX Design</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Email Setup</li>
                    </ul>
                    <div class="pricing-button secondary" onclick="goTo(3)">See Details <i class="fas fa-th-list"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section make-small make-dark theme-green banner-header">
    <div class="container make-centered large-container mb-4">
        <h2>Looking for easy, affordable and reliable web hosting?</h2>

        <article class="btn-collection">
            <a href="/webhosting-solutions/" title="Link to WebHosting solutions page">
                <button class="btn-special btn-solid btn-black">Visit Hosting Options</button>
            </a>
        </article>
    </div>
</div>

<div class="section make-light make-small theme-green autoScroll">
    <div class="container make-centered large-container mb-5">
        <h2>Compare plans</h2>
        <div class="pricing-table">
            <div class="pricing-table-features">
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-item">1 Hour Consultation</div>

                <h5 class="pricing-head">Professional Website</h5>
                <div class="pricing-table-feature-item">CMS Based</div>
                <div class="pricing-table-feature-item">UI / UX Design</div>
                <div class="pricing-table-feature-item">Image Search & Stock</div>
                <div class="pricing-table-feature-item">Initial SEO Setup</div>
                <div class="pricing-table-feature-item">Domain Names*</div>
                <div class="pricing-table-feature-item">Web Hosting*</div>
                <div class="pricing-table-feature-item">SSL Certificate*</div>
                <div class="pricing-table-feature-item">Email Address Capacity</div>
                <div class="pricing-table-feature-item">Emails Setup</div>
                <div class="pricing-table-feature-item">Multi-Page</div>
                <div class="pricing-table-feature-item">Landing Page</div>
                <div class="pricing-table-feature-item">About Page</div>
                <div class="pricing-table-feature-item">Services Page</div>
                <div class="pricing-table-feature-item">Legal Pages</div>
                <div class="pricing-table-feature-item">Contact Page</div>
                <div class="pricing-table-feature-item">Extra Pages</div>
                <div class="pricing-table-feature-item">Blog Setup</div>
                <div class="pricing-table-feature-item">Content Copywriting</div>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">Essential</h5>
                <div class="pricing-table-feature-marker" style="margin-top: 5px;"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">1</div>
                <div class="pricing-table-feature-marker">150GB</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">100</div>
                <div class="pricing-table-feature-marker">1 Email</div>
                <div class="pricing-table-feature-marker">3+</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                <a class="pricing-foot-button" href="/get-quote/website-essential">Purchase</a>
                <h5 class="pricing-foot">$2850<span>AUD</span></h5>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">Premium</h5>
                <div class="pricing-table-feature-marker" style="margin-top: 5px;"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">2</div>
                <div class="pricing-table-feature-marker">Standard</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">500</div>
                <div class="pricing-table-feature-marker">5 Emails</div>
                <div class="pricing-table-feature-marker">6+</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <a class="pricing-foot-button" href="/get-quote/website-premium">Purchase</a>
                <h5 class="pricing-foot">$5890<span>AUD</span></h5>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">Enterprise</h5>
                <div class="pricing-table-feature-marker" style="margin-top: 5px;"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">Any</div>
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

                <a class="pricing-foot-button" href="/get-quote/website-enterprise">Contact</a>
                <h5 class="pricing-foot call-for-quote">Call for Quote</h5>
            </div>
        </div>

        <p class="pricing-footnotes">
            * 12 Month Subscription included.<br>
        </p>
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
