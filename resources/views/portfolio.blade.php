<!-- Select Main Layout -->
@extends('layouts.base')

<!-- Page Title -->
@section('title', 'Work Portfolio')

<!-- Page Description -->
@section('description', '1VINE Design has worked with many businesses in Brisbane, Sydney, Melbourne and all over Australia.')

<!-- Page Keywords -->
@section('keywords', 'work portfolio, 1vine design work, 1vine design portfolio, 1vine folio')

<!-- Page URL -->
@section('url', 'https://1vinedesign.com.au/work-portfolio')

<!-- Page Description -->
@section('social-media-tags')

<!-- Facebook -->
<meta property="og:site_name" content="1VINE Design">
<meta property="og:title" content="Work Portfolio - 1VINE Design">
<meta property="og:description" content="1VINE Design work portfolio.">
<meta property="og:image" content="https://1vinedesign.com.au/img/work/auburn-friends-website.jpg">
<meta property="og:url" content="https://1vinedesign.com.au/work-portfolio">

<!-- Twitter -->
<meta name="twitter:title" content="@1vinedesign">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="1VINE Design work portfolio.">
<meta name="twitter:image" content="https://1vinedesign.com.au/img/work/auburn-friends-website.jpg">
<meta name="twitter:image:alt" content="Auburn Friends website designed and built by 1VINE Design.">
@endsection

<!-- Page Description -->
@section('extra-css')
@endsection

<!-- Body Content -->
@section('body-content')

@section('menu-chapter', 'Work Portfolio')

<!-- Hero Section -->
<div class="section make-dark theme-orange make-medium">
    <div class="container">
        <div class="hero-content">
            <h1 class="make-centered">Work Portfolio</h1>
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

<div class="section make-light theme-orange">
    <div class="container make-left">
        <h2>Some of My clients.</h2>
        <div class="heading-underline"></div>
        <div class="client-gallery">

            <a href="https://facebook.com/Astara-Beauty-757681284307460" target="_blank">
                <img src="{{ asset('/img/clients/astara-beauty-logo.svg') }}" alt="Logo of Astara Beauty">
            </a>

            <a href="https://beautyretreatbribieisland.com.au/" target="_blank">
                <img src="{{ asset('img/clients/beauty-retreat-bribie-island-logo.svg') }}" alt="Logo of Beauty Retreat Bribie Island">
            </a>
            
            <a href="" target="_blank">
                    <img src="{{ asset('img/clients/bohemian-creations-logo.svg') }}" alt="Logo of Bohemian Creations">
            </a>
            
            <a href="https://bonnibuns.com.au/" target="_blank">
                <img src="{{ asset('img/clients/bonnibuns-logo.svg') }}" alt="Logo of Bonnibuns">
            </a>
            
            <a href="https://www.brighterday.today/" target="_blank">
                <img src="{{ asset('img/clients/brighter-day-logo.svg') }}" alt="Logo of Brighter Day">
            </a>
            
            <a href="https://shop.cadeaurable.com.au/" target="_blank">
                <img src="{{ asset('img/clients/cadeaurable-logo.svg') }}" alt="Logo of Cadeaurable">
            </a>
            
            <a href="https://facebook.com/ecogemau/" target="_blank">
                <img src="{{ asset('img/clients/eco-gem-logo.svg') }}" alt="Logo of Eco Gem">
            </a>
            
            <a href="https://facebook.com/familycovenantchurch.org/" target="_blank">
                <img src="{{ asset('img/clients/family-covenant-church-logo.svg') }}" alt="Logo of Family Covenant Church">
            </a>
            
            <a href="https://facebook.com/GoldStandardTherapy" target="_blank">
                <img src="{{ asset('img/clients/gold-standard-therapy-logo.svg') }}" alt="Logo of Gold Standard Therapy">
            </a>
            
            <a href="https://intercorpdevelopments.com.au/" target="_blank">
                <img src="{{ asset('img/clients/intercorp-logo.svg') }}" alt="Logo of Intercorp Developments">
            </a>
            
            <a href="https://platinumhemp.com.au/" target="_blank">
                <img src="{{ asset('img/clients/platinum-hemp-logo.svg') }}" alt="Logo of Platinum Hemp"></a>
            
            <a href="https://smarterbydesign.com.au/" target="_blank">
                <img src="{{ asset('img/clients/smarter-by-design-logo.svg') }}" alt="Logo of Smarter By Design">
            </a>
            
            <a href="https://sovereigntrades.com.au/" target="_blank">
                <img src="{{ asset('img/clients/sovereign-trades-logo.svg') }}" alt="Logo of Sovereign Trades">
            </a>

            <a href="https://thefourletterwordco.com/" target="_blank">
                <img src="{{ asset('img/clients/the-four-letter-word-co-logo.svg') }}" alt="Logo of The Four Letter Word Co.">
            </a>

            <a href="https://vipertac.com.au/" target="_blank">
                <img src="{{ asset('img/clients/vipertac-logo.svg') }}" alt="Logo of Vipertac">
            </a>
            
            <a href="https://weq.com.au/" target="_blank">
                <img src="{{ asset('img/clients/willis-electrical-qld-logo.svg') }}" alt="Logo of WEQ">
            </a>

        </div>
    </div>
</div>

<div class="section make-light theme-orange">
    <div class="container make-left make-full-width">
        <div style="max-width: 900px; margin: 0 auto;">
            <h2>Some of My Previous Work.</h2>
            <div class="heading-underline"></div>
        </div>

        <div class="work-gallery">
            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/auburn-friends-website.jpg') }}" alt="Mockup of Auburn Friends Website">
                <div class="work-item-title">Auburn Friends<span>Website</span></div>
            </div>
            
            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/boz-concrete-scanning-and-cutting-logo.jpg') }}" alt="Mockup of BOZ Concrete Scanning & Cutting">
                <div class="work-item-title">BOZ Concrete Scanning & Cutting<span>Logo</span></div>
            </div>

            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/astara-beauty-flyers.jpg') }}" alt="Mockup of Astara Beauty">
                <div class="work-item-title">Astara Beauty<span>Flyers</span></div>
            </div>
            
            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/beauty-retreat-website.jpg') }}" alt="Mockup of Beauty Retreat Website">
                <div class="work-item-title">Beauty Retreat<span>Website</span></div>
            </div>
            
            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/brighter-day-logo.jpg') }}" alt="Mockup of Brighter Day Logo">
                <div class="work-item-title">Brighter Day<span>Logo</span></div>
            </div>

            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/cadeaurable-website.jpg') }}" alt="Mockup of Cadeaurable eCommerce Store">
                <div class="work-item-title">Cadeaurable<span>eCommerce Store</span></div>
            </div>
            
            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/bohemian-creations-logo.jpg') }}" alt="Mockup of Bohemian Creations Logo">
                <div class="work-item-title">Bohemian Creations<span>Logo</span></div>
            </div>
            
            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/cadeaurable-logo.jpg') }}" alt="Mockup of Cadeaurable Logo">
                <div class="work-item-title">Cadeaurable<span>Logo</span></div>
            </div>

            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/vipertac-ecommerce.jpg') }}" alt="Mockup of ViperTac eCommerce Store">
                <div class="work-item-title">ViperTac<span>eCommerce Store</span></div>
            </div>

            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/gold-standard-therapy-banner.jpg') }}" alt="Mockup of Gold Standard Therapy">
                <div class="work-item-title">Gold Standard Therapy<span>Banner</span></div>
            </div>
            
            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/eco-gem-logo.jpg') }}" alt="Mockup of Eco Gem Logo">
                <div class="work-item-title">Eco Gem<span>Logo</span></div>
            </div>

            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/sovereign-trades-business-card.jpg') }}" alt="Mockup of Sovereign Trades Business Cards">
                <div class="work-item-title">Sovereign Trades<span>Business Cards</span></div>
            </div>
            
            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/platinum-hemp-logo.jpg') }}" alt="Mockup of Platinum Hemp Logo">
                <div class="work-item-title">Platinum Hemp<span>Logo</span></div>
            </div>

            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/willis-electrical-qld-banner.jpg') }}" alt="Mockup of WEQ Banner">
                <div class="work-item-title">WEQ<span>Banner</span></div>
            </div>

            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/willis-electrical-qld-business-card.jpg') }}" alt="Mockup of WEQ Business Cards">
                <div class="work-item-title">WEQ<span>Business Cards</span></div>
            </div>

            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/willis-electrical-qld-website.jpg') }}" alt="Mockup of WEQ Website">
                <div class="work-item-title">WEQ<span>Website</span></div>
            </div>
            
            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/smarter-by-design-website-01.jpg') }}" alt="Mockup of Smarter By Design Website">
                <div class="work-item-title">Smarter By Design<span>Website</span></div>
            </div>

            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/family-covenant-church-flyers.jpg') }}" alt="Mockup of Family Covenant Church Flyers">
                <div class="work-item-title">Family Covenant Church<span>Flyers</span></div>
            </div>
            
            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/sovereign-trades-website.jpg') }}" alt="Mockup of Sovereign Trades Website">
                <div class="work-item-title">Sovereign Trades<span>Website</span></div>
            </div>
            
            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/willis-electrical-qld-logo.jpg') }}" alt="Mockup of WEQ Logo">
                <div class="work-item-title">WEQ<span>Logo</span></div>
            </div>

            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/platinum-hemp-branding.jpg') }}" alt="Mockup of Platinum Hemp Branding Strategy">
                <div class="work-item-title">Platinum Hemp<span>Branding Strategy</span></div>
            </div>

            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/willis-electrical-qld-van.jpg') }}" alt="Mockup of WEQ Vehicle Wrap">
                <div class="work-item-title">WEQ<span>Vehicle Wrap</span></div>
            </div>

            <div  class="work-item autoScroll">
                <img src="{{ asset('img/work/smarter-by-design-booklet.jpg') }}" alt="Mockup of Smarter By Design Booklet">
                <div class="work-item-title">Smarter By Design<span>Booklet</span></div>
            </div>
            
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

<div class="section make-light make-medium theme-green autoScroll">
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

<!-- <div class="section portfolio-summary">
    <ul class="portfolio-list">
        <li class="portfolio-item"><img src="{{ asset('img/bg.jpg') }}" alt=""></li>
        <li class="portfolio-item"><img src="{{ asset('img/bg.jpg') }}" alt=""></li>
        <li class="portfolio-item"><img src="{{ asset('img/bg.jpg') }}" alt=""></li>
    </ul>
</div> -->
@endsection