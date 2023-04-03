<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <!-- Character Set -->
    <meta charset="utf-8">

    <!-- Mobile Meta Data -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Page Title -->
    <title>@yield('title') - {{ config('app.name', '1VINE Design') }}</title>

    <!-- Page Description -->
    <meta name="description" content="@yield('description')">

    <!-- Page Keywords -->
    <meta name="keywords" content="@yield('keywords')">

    <!-- Page URL -->
    <meta name="url" content="@yield('url')">

    <!-- Page Canonical Tag -->
    <link rel="canonical" href="@yield('url')">

    <!-- Social Media Meta Tags -->
    @yield('social-media-tags')

    <!-- Links Image -->
    <link rel="image_src" type="image/jpeg" href="{{ asset('img/logo.jpg') }}">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>

    <!-- FONTS -->
    <link rel="preload" href="{{ asset('fonts/Montserrat-Bold.otf') }}" as="font" crossorigin>
    <link rel="preload" href="{{ asset('fonts/Montserrat-Light.otf') }}" as="font" crossorigin>
    <link rel="preload" href="{{ asset('fonts/Montserrat-Regular.otf') }}" as="font" crossorigin>
    <link rel="preload" href="{{ asset('fonts/Montserrat-SemiBold.otf') }}" as="font" crossorigin>

    <!-- 1VINEDesign CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    @yield('extra-css')

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

    <!-- Burger Button -->
    <link href="{{ asset('css/hamburgers.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('img/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#7EB200">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120458834-1"></script>

    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-120458834-1');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '1424106624614407');
      fbq('track', 'PageView');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T3TC9X8');</script>
    <!-- End Google Tag Manager -->

    <noscript>
      <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1424106624614407&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

      <!-- MailerLite Universal -->
      <script>
          (function(w,d,e,u,f,l,n){w[f]=w[f]||function(){(w[f].q=w[f].q||[])
              .push(arguments);},l=d.createElement(e),l.async=1,l.src=u,
              n=d.getElementsByTagName(e)[0],n.parentNode.insertBefore(l,n);})
          (window,document,'script','https://assets.mailerlite.com/js/universal.js','ml');
          ml('account', '116338');
      </script>
      <!-- End MailerLite Universal -->

    <!-- Clarity tracking code for https://1vinedesign.com.au/ -->
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "6bckdzde7e");
    </script>

    {{-- hCaptcha --}}
    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>

    @yield('extra-head')
  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3TC9X8"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <a href="/">
      <div class="brand">
        <div class="logo make-light">
          <!-- Generator: Adobe Illustrator 25.2.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 120 40" style="enable-background:new 0 0 120 40;" xml:space="preserve">
          <style type="text/css">
            .st0{fill:#FFFFFF;}
          </style>
          <g>
            <g>
              <path class="st0" d="M13.8,36.1c0,2.2-1.7,3.8-4,3.8H6.6v-7.7h3.2C12.1,32.3,13.8,33.9,13.8,36.1z M12.3,36.1
                c0-1.5-1.1-2.5-2.5-2.5H8.1v5.1h1.7C11.2,38.7,12.3,37.6,12.3,36.1z"/>
            </g>
            <g>
              <path class="st0" d="M35.2,32.3v1.3h-4.1v1.9h3.7v1.3h-3.7v1.9h4.3V40h-5.7v-7.7H35.2z"/>
            </g>
            <g>
              <path class="st0" d="M54.3,33.6c-0.7,0-1.1,0.2-1.1,0.7c0,1.5,4,0.7,4,3.4c0,1.4-1.2,2.2-2.9,2.2c-1.2,0-2.4-0.5-3.2-1.2l0.6-1.2
                c0.8,0.7,1.8,1.1,2.6,1.1c0.8,0,1.3-0.3,1.3-0.8c0-1.6-4-0.7-4-3.4c0-1.3,1.1-2.2,2.8-2.2c1,0,2,0.3,2.7,0.8l-0.6,1.2
                C55.8,33.9,54.9,33.6,54.3,33.6z"/>
            </g>
            <g>
              <path class="st0" d="M74.6,32.3V40h-1.5v-7.7H74.6z"/>
            </g>
            <g>
              <path class="st0" d="M96.1,36.1h1.3V39c-0.8,0.6-1.9,1-3,1c-2.3,0-4-1.7-4-3.8c0-2.2,1.8-3.8,4.1-3.8c1.1,0,2.2,0.4,3,1.1
                l-0.8,1.1c-0.6-0.5-1.4-0.9-2.1-0.9c-1.5,0-2.6,1.1-2.6,2.5c0,1.4,1.2,2.5,2.6,2.5c0.5,0,1.1-0.2,1.6-0.5V36.1z"/>
            </g>
            <g>
              <path class="st0" d="M114.6,32.3l3.9,5.2v-5.2h1.4V40h-1.4l-3.9-5.2V40h-1.4v-7.7H114.6z"/>
            </g>
            <g>
              <g>
                <polygon class="st0" points="120,8.6 120,0.8 109.2,0.8 100.3,0.8 100.3,28.4 109.2,28.4 120,28.4 120,20.5 109.2,20.5 109.2,18
                  119.6,18 119.6,11.1 109.2,11.1 109.2,8.6 			"/>
              </g>
              <g>
                <polygon class="st0" points="85.5,0.8 85.5,13.1 76.6,0.8 67.7,0.8 67.7,28.4 76.6,28.4 76.6,16 85.5,28.3 85.5,28.4 94.4,28.4
                  94.4,0.8 			"/>
              </g>
              <g>
                <rect x="52.9" y="0.8" class="st0" width="8.9" height="27.6"/>
              </g>
              <g>
                <polygon class="st0" points="39.6,1 34.3,15.6 34.3,15.6 29,1 19.6,1 29.6,28.5 29.6,28.5 29.6,28.5 39,28.5 39,28.5 49,1 			"/>
              </g>
              <g>
                <g>
                  <path class="st0" d="M16.7,29.5H5.9V10.8H0V5L6.5,0h10.1V29.5z M7.3,28.1h8V1.5H7L1.4,5.7v3.8h5.9V28.1z"/>
                </g>
              </g>
              <g>
                <g>
                  <rect x="0.7" y="3" transform="matrix(0.9578 -0.2873 0.2873 0.9578 -0.5805 2.5322)" class="st0" width="15.3" height="0.6"/>
                  <path class="st0" d="M0.9,6L0.6,5l15.1-4.5l0.3,1L0.9,6z M1.2,5.3l0,0.1l14.3-4.3l0-0.1L1.2,5.3z"/>
                </g>
              </g>
              <g>
                <g>
                  <rect x="11" y="8.9" transform="matrix(0.9037 -0.4281 0.4281 0.9037 -7.1193 6.6731)" class="st0" width="0.6" height="20.6"/>
                  <path class="st0" d="M15.3,28.9l-9-19l0.9-0.4l9,19L15.3,28.9z M6.9,10.1l8.6,18.2l0.1-0.1L7,10L6.9,10.1z"/>
                </g>
              </g>
              <g>
                <g>

                    <rect x="-0.2" y="5.2" transform="matrix(0.8575 -0.5145 0.5145 0.8575 -1.6151 5.067)" class="st0" width="17.1" height="0.6"/>
                  <path class="st0" d="M1.1,10.4L0.6,9.5l15.1-9l0.5,0.9L1.1,10.4z M1.1,9.7l0.1,0.1l14.3-8.6l-0.1-0.1L1.1,9.7z"/>
                </g>
              </g>
              <g>
                <g>
                  <rect x="-3.1" y="14.5" transform="matrix(0.306 -0.952 0.952 0.306 -6.2225 20.9787)" class="st0" width="28.8" height="0.6"/>
                  <path class="st0" d="M7.3,28.8l-0.9-0.3l8.9-27.8L16.2,1L7.3,28.8z M6.9,28.3l0.1,0l8.7-27l-0.1,0L6.9,28.3z"/>
                </g>
              </g>
              <g>
                <g>
                  <rect x="5" y="5.2" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -0.5496 9.5708)" class="st0" width="12.5" height="0.6"/>
                  <path class="st0" d="M7.1,10.4L6.4,9.7l9.1-9.1l0.7,0.7L7.1,10.4z M7,9.7l0.1,0.1l8.5-8.5l-0.1-0.1L7,9.7z"/>
                </g>
              </g>
            </g>
          </g>
          </svg>
        </div>
      </div>
    </a>

    <div class="backToTop hide" onclick="flyToTop()"></div>
    @yield('body-content')
    @include('inc/mainNav')

    <div class="section make-dark make-fullscreen theme-orange make-shadow make-last">
        <div class="container">

          <div class="mcol-11 front-form">
            <h2>Start a New Project</h2>
            <div class="heading-underline"></div>
            <p class="section-desc mt-1">Hire me for your next awesome project.</p>

            <form action="{{ route('contacts.store') }}" method="POST" class="col-8 mcol-11 make-contact mt-1">
              <input type="hidden" name="_token" value="{{ csrf_token() }}" />

              <div class="input-field">
                  <input id="contact_name" name="contact_name" type="text" class="validate" required>
                  <label for="contact_name">Name*</label>
              </div>

              <div class="input-field mt-2">
                  <input id="contact_email" name="contact_email" type="email" class="validate" required>
                  <label for="contact_email">Email Address*</label>
              </div>

              <div class="input-field mt-2">
                  <textarea id="contact_message" name="contact_message" class="materialize-textarea validate" required></textarea>
                  <label for="contact_message">Project Details (min. 10 words)*</label>
              </div>

                <div class="h-captcha" data-sitekey={{ env('HCAPTCHA_SITEKEY') }}></div>

              <button class="btn-submit btn-solid btn-orange mt-3" name="contact_submit" title="Subscribe to our newsletter"><span class="default">Send Me Your awesome idea! <i class="fas fa-rocket"></i></span><span class="loading"><i class="fas fa-spinner"></i></span></button>
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

    <footer class="footer make-dark">
      <div class="footer-collection">
        <div class="footer-two">
          <h3 class="mb-1">Services</h3>
          <p class="mt-0">
{{--            <a href="/branding-and-strategy">Branding and Strategy</a><br>--}}
            <a href="/business-websites">Business Websites</a><br>
            <a href="/ecommerce-solutions">eCommerce Solutions</a><br>
            <a href="/premium-development">Premium Development</a><br>
            <a href="/web-maintenance">Web Maintenance</a><br>
            <a href="/webhosting-solutions">Webhosting Solutions</a><br>
            <a href="/other-deliverables">Other Deliverables</a>
          </p>
          <!-- <a href="/frequently-asked-questions">FAQ</a><p class="mt-0"> -->
        </div>

        <div class="footer-two">
            <h3 class="mb-1">Explore More</h3>
            <p class="mt-0">
                <a href="/">Home</a><br>
                <a href="/about-1vine">About</a><br>
                <a href="/work-portfolio">My Work</a>
            </p>
        </div>

        <div class="footer-three">
          <h3 class="mb-1">Contact Us</h3>
          <p class="mt-0">
            <a href="mailto:contact@1vinedesign.com.au">contact@1vinedesign.com.au</a><br>
            <a href="tel:+61730960059">(07) 3096 0059</a><br>
            <a href="tel:+61426238272">+61 426 238 272</a>
          </p>

          <p class="mt-2" style="color: #fff;">
            Brisbane, Australia
          </p>
        </div>

      </div>

      <p class="make-left">
        <span id="footer-copyright"></span><br>
        <a href='/terms-and-conditions'>Terms and Conditions</a> | <a href='/privacy-policy'>Privacy Policy</a>
      </p>
    </footer>

    <!--JavaScript at end of body for optimized loading-->
    <!-- Materialize JS -->
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>

    <!-- 1VINE JS -->
    <script type="text/javascript" src="{{ asset('js/app.min.js') }}"></script>

    <!-- Detect JS -->
    <script type="text/javascript" src="{{ asset('js/Detect.min.js') }}"></script>

    @if(Session::has('success'))
      <script>
        document.querySelector('.front-form').style.display = "none";
        document.querySelector('.back-success').style.display = "block";
        goTo('x');
      </script>
      @php
          Session::forget('success');
      @endphp
    @endif
  </body>

</html>
