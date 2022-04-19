<!-- Select Main Layout -->
@extends('layouts.base')

<!-- Page Title -->
@section('title', 'Branding Strategy')

<!-- Page Description -->
@section('description', 'xx.')

<!-- Page Keywords -->
@section('keywords', 'xx')

<!-- Page URL -->
@section('url', 'https://1vinedesign.com.au/branding-and-strategy')

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

@section('menu-chapter', 'Branding and Strategy')

<div class="section make-small make-dark theme-green banner-header">
    <div class="container" style="padding-bottom: 30px;">

    </div>
</div>

<div class="section make-medium make-green theme-green">
    <div class="container large-container">

        <div class="pricing-banner">
            <div class="pricing-topic">
                <h2>Build a brand that speaks for itself</h2>
                <p>Establish your business, get customers and beat the competition</p>
            </div>

            <div class="pricing-group">
                <div class="pricing-cell">
                    <h4 class="pricing-title">Title</h4>
                    <h3 class="pricing-cost">$9999</h3>
                    <p class="pricing-terms">per month</p>
                    <ul class="pricing-list">
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Item #1</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Item #2</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Item #3</li>
                    </ul>
                    <a class="pricing-button primary">Compare <i class="fas fa-th-list"></i></a>
                </div>

                <div class="pricing-cell">
                    <h4 class="pricing-title">Title</h4>
                    <h3 class="pricing-cost">$9999</h3>
                    <p class="pricing-terms">per month</p>
                    <ul class="pricing-list">
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Item #1</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Item #2</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Item #3</li>
                    </ul>
                    <a class="pricing-button secondary">See Details <i class="fas fa-th-list"></i></a>
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
                <h5 class="pricing-head">Soemthing</h5>
                <div class="pricing-table-feature-item">1 Hour Consultation</div>
                <div class="pricing-table-feature-item">Analysis and Strategy Report</div>
                <div class="pricing-table-feature-item">Define Brand Positioning</div>
                <div class="pricing-table-feature-item">Brand Logo Design</div>
                <div class="pricing-table-feature-item">Business Card Design</div>
                <div class="pricing-table-feature-item">Business Card Print</div>
                <div class="pricing-table-feature-item">Envelope Design</div>
                <div class="pricing-table-feature-item">Envelope Print</div>
                <div class="pricing-table-feature-item">Letterhead Design</div>
                <div class="pricing-table-feature-item">Feature 1</div>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker" style="margin-top: 3px;"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker" style="margin-top: 3px;"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
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
