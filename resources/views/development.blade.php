<!-- Select Main Layout -->
@extends('layouts.base')

<!-- Page Title -->
@section('title', 'Premium Development')

<!-- Page Description -->
@section('description', 'Whether your project is for web, mobile or even desktop apps, I can help.')

<!-- Page Keywords -->
@section('keywords', '')

<!-- Page URL -->
@section('url', 'https://1vinedesign.com.au/web-maintenance')

<!-- Page Description -->
@section('social-media-tags')

    <!-- Facebook -->
    <meta property="og:site_name" content="1VINE Design">
    <meta property="og:title" content="Premium Development - 1VINE Design">
    <meta property="og:description" content="Whether your project is for web, mobile or even desktop apps, I can help.">
    <meta property="og:image" content="https://1vinedesign.com.au/img/bg.jpg">
    <meta property="og:url" content="https://1vinedesign.com.au/web-maintenance">

    <!-- Twitter -->
    <meta name="twitter:title" content="@1vinedesign">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="Whether your project is for web, mobile or even desktop apps, I can help.">
    <meta name="twitter:image" content="https://1vinedesign.com.au/img/bg.jpg">
    <meta name="twitter:image:alt" content="1VINE Design Header.">
@endsection

<!-- Page Description -->
@section('extra-css')
@endsection

<!-- Body Content -->
@section('body-content')

@section('menu-chapter', 'Premium Development')

<div class="section make-small make-dark theme-green banner-header">
    <div class="container" style="padding-bottom: 30px;">

    </div>
</div>

<div class="section make-medium make-green theme-green">
    <div class="container large-container">

        <div class="pricing-banner">
            <div class="pricing-topic">
                <h2>Premium Development</h2>
                <p>Whether your project is for web, mobile or even desktop apps, I can help.</p>
            </div>

            <div class="pricing-group for-cells-3">
                <div class="pricing-cell">
                    <h4 class="pricing-title">Web Apps</h4>
{{--                    <h3 class="pricing-cost">$60</h3>--}}
{{--                    <p class="pricing-terms">per hour</p>--}}
                    <ul class="pricing-list">
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Modern Technologies</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Scalable Development</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Responsive Design</li>
                    </ul>
                    <a class="pricing-button primary" onclick="goTo(2)">Learn More <i class="fas fa-th-list"></i></a>
                </div>

                <div class="pricing-cell">
                    <h4 class="pricing-title">Mobile Apps</h4>
{{--                    <h3 class="pricing-cost">$75</h3>--}}
{{--                    <p class="pricing-terms">per hour</p>--}}
                    <ul class="pricing-list">
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Cross-Platform & Native</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Professional UI
                            Design</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Deployment to Stores</li>
                    </ul>
                    <a class="pricing-button secondary" onclick="goTo(3)">Details <i class="fas fa-th-list"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section make-dark make-small theme-green autoScroll">
    <div class="container make-centered large-container mb-5">
        <h2>Web App Development</h2>
        <p class="col-10">
            More coming soon
        </p>
    </div>
</div>

<div class="section make-light make-small theme-green autoScroll">
    <div class="container make-centered large-container mb-5">
        <h2>Mobile App Development</h2>
        <p class="col-10">
            More coming soon
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
