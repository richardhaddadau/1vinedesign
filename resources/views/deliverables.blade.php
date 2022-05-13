<!-- Select Main Layout -->
@extends('layouts.base')

<!-- Page Title -->
@section('title', 'Other Deliverables')

<!-- Page Description -->
@section('description', 'Your touchpoints are the points of contact between your brand and your customers.')

<!-- Page Keywords -->
@section('keywords', 'other deliverables, logo design, vehicle wrap design, business card design, business card printing, stationery sets, letterhead design, envelope design, envelope print, sales deck design, email marketing setup, email marketing design, packaging design')

<!-- Page URL -->
@section('url', 'https://1vinedesign.com.au/other-deliverables')

<!-- Page Description -->
@section('social-media-tags')

<!-- Facebook -->
<meta property="og:site_name" content="1VINE Design">
<meta property="og:title" content="Other Deliverables - 1VINE Design">
<meta property="og:description" content="1VINE Design provides all sorts of touchpoints and deliverables.">
<meta property="og:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta property="og:url" content="https://1vinedesign.com.au/other-deliverables">

<!-- Twitter -->
<meta name="twitter:title" content="@1vinedesign">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="1VINE Design provides all sorts of touchpoints and deliverables.">
<meta name="twitter:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta name="twitter:image:alt" content="1VINE Design Header.">
@endsection

<!-- Page Description -->
@section('extra-css')
@endsection

<!-- Body Content -->
@section('body-content')

@section('menu-chapter', 'Other Deliverables')

<div class="section make-small make-dark theme-green banner-header">
    <div class="container" style="padding-bottom: 30px;">

    </div>
</div>

<div class="section make-small make-dark theme-green pb-5">
    <div class="container large-container">

        <div class="pricing-banner">
            <div class="pricing-topic">
                <h1>Branded Deliverables</h1>
                <p>Pick and choose the deliverables you need.</p>
            </div>

            <div class="pricing-group">
                <div class="pricing-cell">
                    <h4 class="pricing-title">Premium Logo</h4>
                    <h3 class="pricing-cost">$850</h3>
                    <p class="pricing-terms">one-off</p>
                    <ul class="pricing-list">
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Unique Design</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Future-proof</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Style Guide</li>
                    </ul>
                    <a class="pricing-button primary" onclick="goTo(2)">See More <i class="fas fa-th-list"></i></a>
                </div>

                <div class="pricing-cell">
                    <h4 class="pricing-title">Vehicle Wrap Design</h4>
                    <h3 class="pricing-cost">$650*</h3>
                    <p class="pricing-terms">one-off</p>
                    <ul class="pricing-list">
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Branded Design</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Full vehicle wrap</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Premium Service</li>
                    </ul>
                    <a class="pricing-button secondary" onclick="goTo(2)">See More <i class="fas fa-th-list"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="section theme-orange deliverables-collection make-light">
    <div class="deliverables-item" onclick="deliver(0)"><i class="fas fa-draw-polygon"></i> <span>Logo</span></div>
    <div class="deliverables-item" onclick="deliver(1)"><i class="fas fa-address-card"></i> <span>Business Cards</span></div>
    <div class="deliverables-item" onclick="deliver(2)"><i class="fas fa-mail-bulk"></i> <span>Stationery Sets</span></div>
    <div class="deliverables-item" onclick="deliver(3)"><i class="far fa-sticky-note"></i> <span>Other Stationery</span></div>
    <div class="deliverables-item" onclick="deliver(4)"><i class="fas fa-envelope-open-text"></i> <span>Email Newsletter</span></div>
    <div class="deliverables-item" onclick="deliver(5)"><i class="fas fa-tshirt"></i> <span>Apparel Design</span></div>
    <div class="deliverables-item" onclick="deliver(6)"><i class="fas fa-sign"></i> <span>Signage</span></div>
    <div class="deliverables-item" onclick="deliver(7)"><i class="fas fa-car"></i> <span>Car Wraps</span></div>
    <div class="deliverables-item" onclick="deliver(8)"><i class="fas fa-box-open"></i> <span>Packaging</span></div>
</div> -->

<div class="section make-light theme-green">
    <div class="container make-centered">
        <h2 class="make-left">Branded Touchpoints</h2>
        <p class="col-10">Your touchpoints are the points of contact between your brand and your customers. Designed and planned well, these touchpoints can help increase your brand's awareness and better position you in the minds of your audience.</p>
        <p class="col-10"><span class="make-one">1VINE</span> offers all sorts of touchpoints like:
            <ul class="col-9 mt-1">
                <li>- Logo</li>
                <li>- Stationery Sets (Business Card, Letterhead and Envelope)</li>
                <li>- Email Marketing</li>
                <li>- Sales Deck</li>
                <li>- Signage</li>
                <li>- Vehicle Wraps</li>
                <li>- Packaging</li>
            </ul>
        </p>
        <p class="section-desc mb-3">I highly recommend that you have a branding strategy in place prior to considering the following touchpoints. If you would like to find out why, visit <a href="/empower-your-awesome-brand">Branding</a> for more information. Ask about package prices and discounts when multiple touchpoints are purchased together.</p>

        <div class="package-card">
            <div class="package-card-content">
                <div class="package-card-front">
                    <div class="card-cover"></div>
                    <div class="card-left">
                        <div class="package-header"> Logo Design</div>
                        <div class="package-features">
                            <ul>
                                <li><i class="fas fa-pen-square"></i> 3 Major Revisions</li>
                                <li><i class="fas fa-bezier-curve"></i> Source Vector Files</li>
                                <li><i class="fas fa-desktop"></i> Web-ready Files</li>
                                <li><i class="fas fa-print"></i> Print-Ready Files</li>
                                <li><i class="fas fa-book"></i> 12+ Page Digital Style Guide</li>
                                <li><i class="fas fa-boxes"></i> 3D Mockups</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-right">
                        <!-- <div class="package-price"><span class="package-per-month">From</span>$1800</div> -->
                        <div class="package-price"><span class="package-per-month">Coming Soon</span></div>
                        <span class="package-gst">Not including GST</span>
                        <a href="/get-quote/touchpoints-logo-design"><div class="purchase-link">Request<br>Quote</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="package-card">
            <div class="package-card-content">
                <div class="package-card-front">
                    <div class="card-cover"></div>
                    <div class="card-left">
                        <div class="package-header"> Stationery Sets</div>
                        <span class="package-subheader">Business Cards, Letterheads, Envelopes</span>
                        <div class="package-features">
                            <ul>
                                <li><i class="fas fa-hand-sparkles"></i> 2 Initial Polished Concepts</li>
                                <li><i class="fas fa-pen-square"></i> 3 Major Revisions</li>
                                <li><i class="fas fa-id-badge"></i>5 Variations (names) Included</li>
                                <li><i class="fas fa-bezier-curve"></i> Source Vector Files</li>
                                <li><i class="fas fa-file-medical-alt"></i> Print-Ready Files</li>
                                <!-- <li><i class="fas fa-print"></i> Printing Included</li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="card-right">
                        <!-- <div class="package-price"><span class="package-per-month">From</span>$2000</div> -->
                        <div class="package-price"><span class="package-per-month">Coming Soon</span></div>
                        <span class="package-gst">Not including GST</span>
                        <a href="/get-quote/touchpoints-stationery-sets"><div class="purchase-link">Request<br>Quote</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="package-card">
            <div class="package-card-content">
                <div class="package-card-front">
                    <div class="card-cover"></div>
                    <div class="card-left">
                        <div class="package-header"> Email Marketing</div>
                        <div class="package-features">
                            <ul>
                                <li><i class="fas fa-file-invoice"></i> Email Newsletter Template <span>on marketing platform</span></li>
                                <li><i class="fab fa-mailchimp"></i> Marketing Platform Setup <span>Mailchimp or Mailerlite</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-right">
                        <!-- <div class="package-price"><span class="package-per-month">From</span>$1200</div> -->
                        <div class="package-price"><span class="package-per-month">Coming Soon</span></div>
                        <span class="package-gst">Not including GST</span>
                        <a href="/get-quote/touchpoints-email-marketing"><div class="purchase-link">Request<br>Quote</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="package-card">
            <div class="package-card-content">
                <div class="package-card-front">
                    <div class="card-cover"></div>
                    <div class="card-left">
                        <div class="package-header"> Sales Deck</div>
                        <div class="package-features">
                            <ul>
                                <li><i class="fas fa-pen-nib"></i> Design and build custom Keynote/Powerpoint sales deck<span> for investing purposes and raising capital</span></li>
                                <li><i class="fas fa-newspaper"></i> 10-20 Slides <span>with custom master page designs and colour palette</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-right">
                        <!-- <div class="package-price"><span class="package-per-month">From</span>$3200</div> -->
                        <div class="package-price"><span class="package-per-month">Coming Soon</span></div>
                        <span class="package-gst">Not including GST</span>
                        <a href="/get-quote/touchpoints-sales-deck"><div class="purchase-link">Request<br>Quote</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="package-card">
            <div class="package-card-content">
                <div class="package-card-front">
                    <div class="card-cover"></div>
                    <div class="card-left">
                        <div class="package-header">Signage</div>
                        <div class="package-subheader">Posters, Advertisements, Interior Signage, Flag Banners, Pull Up Banners, Promotion Stand Signage, Media Wall Signage</div>
                        <div class="package-features">
                            <ul>
                                <li><i class="fas fa-bezier-curve"></i> Source Vector Files</li>
                                <li><i class="fas fa-pen-nib"></i> Design Only. Printing Not Included</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-right">
                        <!-- <div class="package-price">Varies</div> -->
                        <div class="package-price"><span class="package-per-month">Coming Soon</span></div>
                        <a href="/get-quote/touchpoints-signage"><div class="purchase-link">Request<br>Quote</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="package-card">
            <div class="package-card-content">
                <div class="package-card-front">
                    <div class="card-cover"></div>
                    <div class="card-left">
                        <div class="package-header"> Vehicle Wraps</div>
                        <div class="package-subheader">Any Vehicle Type (Cars, SUVs, Utes, Vans, Trucks)</div>
                        <div class="package-features">
                            <ul>
                                <li><i class="fas fa-sun"></i> High Resolution</li>
                                <li><i class="fas fa-bezier-curve"></i> Source Vector Files</li>
                                <li><i class="fas fa-pen-nib"></i> Design Only. Printing Not Included</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-right">
                        <!-- <div class="package-price">Varies</div> -->
                        <div class="package-price"><span class="package-per-month">Coming Soon</span></div>
                        <a href="/get-quote/touchpoints-vehicle-wraps"><div class="purchase-link">Request<br>Quote</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="package-card">
            <div class="package-card-content">
                <div class="package-card-front">
                    <div class="card-cover"></div>
                    <div class="card-left">
                        <div class="package-header"> Packaging</div>
                        <div class="package-subheader">Branded Product Packaging (Box, Pouch, Carton, Bottle), Branded Packaging Accessories (Stickers, Tape, Wrapping)</div>
                        <div class="package-features">
                            <ul>
                                <li><i class="fas fa-pen-square"></i> 3 Major Revisions</li>
                                <li><i class="fas fa-sun"></i> High Resolution</li>
                                <li><i class="fas fa-bezier-curve"></i> Source Vector Files</li>
                                <li><i class="fas fa-pen-nib"></i> Design Only. Printing Not Included</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-right">
                        <!-- <div class="package-price">Varies</div> -->
                        <div class="package-price"><span class="package-per-month">Coming Soon</span></div>
                        <a href="/get-quote/touchpoints-packaging"><div class="purchase-link">Request<br>Quote</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="btn-collection mt-3 make-centered">
            <a href="https://calendly.com/1vinedesign" title="Book a free consultation on Calendly" target="_blank"><button class="btn-special btn-solid btn-black">Book a free consultation <i class="fas fa-calendar-check"></i></button></a>
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

@endsection
