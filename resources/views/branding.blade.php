<!-- Select Main Layout -->
@extends('layouts.base')

<!-- Page Title -->
@section('title', 'Branding & Strategy')

<!-- Page Description -->
@section('description', 'Establish your business, get customers and beat the competition.')

<!-- Page Keywords -->
@section('keywords', 'branding, brand strategy, branding consultant, brand logo design, colour palette, brand
typography, business strategy')

<!-- Page URL -->
@section('url', 'https://1vinedesign.com.au/branding-and-strategy')

<!-- Page Description -->
@section('social-media-tags')

<!-- Facebook -->
<meta property="og:site_name" content="1VINE Design">
<meta property="og:title" content="Build a Brand that Speaks for Itself - 1VINE Design">
<meta property="og:description" content="Establish your business, get customers and beat the competition.">
<meta property="og:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta property="og:url" content="https://1vinedesign.com.au/branding-and-strategy">

<!-- Twitter -->
<meta name="twitter:title" content="@1vinedesign">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="Establish your business, get customers and beat the competition.">
<meta name="twitter:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta name="twitter:image:alt" content="1VINE Design Header.">
@endsection

<!-- Page Description -->
@section('extra-css')
@endsection

<!-- Body Content -->
@section('body-content')

@section('menu-chapter', 'Branding & Strategy')

<div class="section make-small make-dark theme-green banner-header">
    <div class="container" style="padding-bottom: 30px;">

    </div>
</div>

<div class="section make-small make-dark theme-green pb-5">
    <div class="container large-container">

        <div class="pricing-banner">
            <div class="pricing-topic">
                <h1>Build a brand that speaks for itself</h1>
                <p>Establish your business, get customers and beat the competition</p>
            </div>

            <div class="pricing-group">
                <div class="pricing-cell">
                    <h4 class="pricing-title">Starter</h4>
                    <h3 class="pricing-cost">$4980</h3>
                    <p class="pricing-terms">one-off</p>
                    <ul class="pricing-list">
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Branding</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Webhosting</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Security</li>
                    </ul>
                    <div class="pricing-button primary" onclick="goTo(2)">Compare <i class="fas fa-th-list"></i></div>
                </div>

                <div class="pricing-cell">
                    <h4 class="pricing-title">Professional</h4>
                    <h3 class="pricing-cost">$9850</h3>
                    <p class="pricing-terms">one-off</p>
                    <ul class="pricing-list">
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Strategy</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Stationery Set</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Web Package</li>
                    </ul>
                    <div class="pricing-button secondary" onclick="goTo(2)">See Details <i class="fas
                    fa-th-list"></i></div>
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

                <h5 class="pricing-head">Visual Identity</h5>
                <div class="pricing-table-feature-item">Brand Logo Design</div>
                <div class="pricing-table-feature-item">Brand Colour Palette</div>
                <div class="pricing-table-feature-item">Brand Typography</div>
                <div class="pricing-table-feature-item">Identity Mockups</div>
                <div class="pricing-table-feature-item">Business Card Design</div>
                <div class="pricing-table-feature-item">Business Card Print</div>
                <div class="pricing-table-feature-item">Envelope Design</div>
                <div class="pricing-table-feature-item">Envelope Print</div>
                <div class="pricing-table-feature-item">Letterhead Design</div>

                <h5 class="pricing-head">Website (Non-eCommerce)</h5>
                <div class="pricing-table-feature-item">CMS-Based</div>
                <div class="pricing-table-feature-item">Total Pages</div>
                <div class="pricing-table-feature-item">Professional UI / UX Design</div>
                <div class="pricing-table-feature-item">Image Search and Stock</div>
                <div class="pricing-table-feature-item">Content Copywriting</div>
                <div class="pricing-table-feature-item">Initial SEO Setup</div>
                <div class="pricing-table-feature-item">Legal Pages</div>
                <div class="pricing-table-feature-item">Domain Names*</div>
                <div class="pricing-table-feature-item">Web Hosting*</div>
                <div class="pricing-table-feature-item">SSL Certificate*</div>
                <div class="pricing-table-feature-item">Email Address Capacity</div>
                <div class="pricing-table-feature-item">Email Addresses</div>
                <div class="pricing-table-feature-item">Extra Custom Development</div>

                <h5 class="pricing-head">Brand Strategy</h5>
                <div class="pricing-table-feature-item">Business Analysis</div>
                <div class="pricing-table-feature-item">Customer Profiles</div>
                <div class="pricing-table-feature-item">Audit of Competition</div>
                <div class="pricing-table-feature-item">Brand Messaging</div>
                <div class="pricing-table-feature-item">Brand Voice & Tone</div>
                <div class="pricing-table-feature-item">Brand Name Analysis</div>
                <div class="pricing-table-feature-item">Value Proposition</div>
                <div class="pricing-table-feature-item">Brand Pillars</div>
                <div class="pricing-table-feature-item">Brand Tagline</div>

                <h5 class="pricing-head">Email Marketing</h5>
                <div class="pricing-table-feature-item">Account Setup</div>
                <div class="pricing-table-feature-item">Newsletter Template</div>
                <div class="pricing-table-feature-item">Complete Newsletters</div>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">Starter</h5>
                <div class="pricing-table-feature-marker" style="margin-top: 5px;"><i class="fas fa-check"></i></div>

                {{-- Visual Identity --}}
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                {{-- Website Design and Development --}}
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">3</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">1</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">100</div>
                <div class="pricing-table-feature-marker">1 Email</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                {{-- Brand Strategy --}}
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                {{-- Email Marketing --}}
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                <a class="pricing-foot-button" href="/get-quote/branding-starter">Purchase</a>
                <h5 class="pricing-foot">$4980<span>AUD</span></h5>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">Pro</h5>
                <div class="pricing-table-feature-marker" style="margin-top: 5px;"><i class="fas fa-check"></i></div>

                {{-- Visual Identity --}}
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                {{-- Website Design and Development --}}
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">6</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">2</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">500</div>
                <div class="pricing-table-feature-marker">5 Emails</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                {{-- Brand Strategy --}}
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                {{-- Email Marketing --}}
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                <a class="pricing-foot-button" href="/get-quote/branding-professional">Purchase</a>
                <h5 class="pricing-foot">$9850<span>AUD</span></h5>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">Enterprise</h5>
                <div class="pricing-table-feature-marker" style="margin-top: 5px;"><i class="fas fa-check"></i></div>

                {{-- Visual Identity --}}
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                {{-- Website Design and Development --}}
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">Any</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                {{-- Brand Strategy --}}
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                {{-- Email Marketing --}}
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">12 Issues</div>

                <a class="pricing-foot-button" href="/get-quote/branding-enterprise">Contact</a>
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
