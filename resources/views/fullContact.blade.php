<!-- Select Main Layout -->
@extends('layouts.footer-only-base')

<!-- Page Title -->
@section('title', 'Get a Quote')

<!-- Page Description -->
@section('description', "Looking for a quick quote for your project? Send me a request with as much details as possible.")

<!-- Page Keywords -->
@section('keywords', 'get a quote 1vine, quote work, design quote')

<!-- Page URL -->
@section('url', 'https://1vinedesign.com.au/get-quote')

<!-- Page Description -->
@section('social-media-tags')

<!-- Facebook -->
<meta property="og:site_name" content="1VINE Design">
<meta property="og:title" content="Get a Quote - 1VINE Design">
<meta property="og:description" content="Request a Quote">
<meta property="og:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta property="og:url" content="https://1vinedesign.com.au/get-quote">

<!-- Twitter -->
<meta name="twitter:title" content="@1vinedesign">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="Request a Quote">
<meta name="twitter:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta name="twitter:image:alt" content="1VINE Design Header.">
@endsection

<!-- Page Description -->
@section('extra-css')
@endsection

<!-- Body Content -->
@section('body-content')

@section('menu-chapter', 'About 1VINE')

<div class="section make-dark make-fullscreen make-shadow make-last">
    <div class="container mt-3">

    <div class="front-form">
        <h1>Request a Quote</h1>
        <div class="heading-underline"></div>
        <p class="section-desc mt-1">Let's kick off your awesome project!</p>

        {!! RecaptchaV3::initJs() !!}

        <form action="{{ route('quotes.store') }}" method="post" class="col-8 mcol-11 make-contact mt-3">            
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            
            @if (isset($theKey))
                <div class="input-field mb-2 quote-select-wrapper make-chosen">
            @else
                <div class="input-field mb-2 quote-select-wrapper make-default">
            @endif
                <span class="quote-select">Chosen Package*</span>
                <select id="quote_select" name="quote_select" class="browser-default mt-1" required>

                    @if (isset($theKey))
                        <option value="" disabled>Choose your option</option>
                    @else
                        <option value="" disabled selected>Choose your option</option>
                    @endif

                    @for ($x = 1; $x < 22; $x++)
                        @if (isset($theKey) && ($theKey === $x))
                            <option value="{{ $x }}" selected>
                        @else
                            <option value="{{ $x }}">
                        @endif
                        {{ $theArray[$x] }}</option>
                    @endfor
                    
                </select>
            </div>            

            <div class="input-field">
                <input id="quote_name" name="quote_name" type="text" class="validate" required>
                <label for="quote_name">Name*</label>
            </div>

            <div class="input-field mt-2">
                <input id="quote_business" name="quote_business" type="text" class="validate" required>
                <label for="quote_business">Company / Organisation*</label>
            </div>

            <div class="input-field mt-2">
                <input id="quote_email" name="quote_email" type="email" class="validate" required>
                <label for="quote_email">Email Address*</label>
            </div>

            <div class="input-field mt-2">
                <input id="quote_tel" name="quote_tel" type="tel" pattern="[0-9]{2} [0-9]{4} [0-9]{4}" class="validate">
                <label for="quote_tel">Phone (eg. 07 1234 5678)</label>
            </div>

            <div class="input-field mt-2">
                <input id="quote_mobile" name="quote_mobile" type="tel" pattern="[0-9]{4} [0-9]{3} [0-9]{3}" class="validate" required>
                <label for="quote_mobile">Mobile (eg. 0412 345 678)*</label>
            </div>

            <div class="input-field mt-2">
                <textarea id="quote_message" name="quote_message" class="materialize-textarea validate" required></textarea>
                <label for="quote_message">Project Details (min. 10 Words)*</label>
            </div>
            
            {!! RecaptchaV3::field('quote') !!}

            <div class="recaptcha-notice">This site is protected by reCAPTCHA & the Google
            <a href="https://policies.google.com/privacy">Privacy Policy</a> &
            <a href="https://policies.google.com/terms">Terms of Service</a> apply.</div>

            <button class="btn-submit btn-solid btn-orange mt-3" name="quote_submit" title="Subscribe to our newsletter"><span class="default">Send Me Your awesome idea! <i class="fas fa-rocket"></i></span><span class="loading"><i class="fas fa-spinner"></i></span></button>
            <!-- <input type="text" class="btn-submit btn-solid btn-orange mt-3" title="Subscribe to our newsletter" onclick="actionIt()">Send Me Your awesome idea! <i class="fas fa-rocket"></i></button> -->
        </form>
    </div>

    <div class="back-success">
        <h2>You're Awesome!</h2>
        <div class="heading-underline"></div>
        <p class="section-desc mt-1">Thank you for getting in touch!</p>
    </div>

    </div>
</div>
@endsection