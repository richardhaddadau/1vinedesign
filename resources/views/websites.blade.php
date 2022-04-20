<!-- Select Main Layout -->
@extends('layouts.base')

<!-- Page Title -->
@section('title', 'Business Websites')

<!-- Page Description -->
@section('description', 'Establish your brand\'s digital footprint with a premium, professionally-built website.')

<!-- Page Keywords -->
@section('keywords', '')

<!-- Page URL -->
@section('url', 'https://1vinedesign.com.au/business-websites')

<!-- Page Description -->
@section('social-media-tags')

<!-- Facebook -->
<meta property="og:site_name" content="1VINE Design">
<meta property="og:title" content="Establish your brand's digital footprint - 1VINE Design">
<meta property="og:description" content="Establish you brand online with a premium, professionally-built website.">
<meta property="og:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta property="og:url" content="https://1vinedesign.com.au/maximise-your-brands-seo">

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

@section('menu-chapter', 'Branding & Strategy')

<div class="section make-small make-dark theme-green banner-header">
    <div class="container" style="padding-bottom: 30px;">

    </div>
</div>

<div class="section make-medium make-green theme-green">
    <div class="container large-container">

        <div class="pricing-banner">
            <div class="pricing-topic">
                <h2>Establish your brand's digital footprint</h2>
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
                    <a class="pricing-button primary" onclick="goTo(2)">Compare <i class="fas fa-th-list"></i></a>
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
                    <a class="pricing-button secondary" onclick="goTo(2)">See Details <i class="fas fa-th-list"></i></a>
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

                <h5 class="pricing-head">Professional Website</h5>
                <div class="pricing-table-feature-item">CMS Based</div>
                <div class="pricing-table-feature-item">UI / UX Design</div>
                <div class="pricing-table-feature-item">Image Search & Stock</div>
                <div class="pricing-table-feature-item">Initial SEO Setup</div>
                <div class="pricing-table-feature-item rows-3">Domain Names<br>&nbsp;<br>&nbsp;</div>
                <div class="pricing-table-feature-item">Web Hosting</div>
                <div class="pricing-table-feature-item">SSL Certificate</div>
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

                <a class="pricing-foot-button">Purchase</a>
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

                <a class="pricing-foot-button">Purchase</a>
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

                <a class="pricing-foot-button">Contact</a>
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
