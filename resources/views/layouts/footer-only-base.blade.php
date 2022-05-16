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

    <noscript>
      <img height="1" width="1" style="display:none" src="https://www.facebook
      .com/tr?id=1424106624614407&ev=PageView&noscript=1" alt="Facebook pixel setup" />
    </noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T3TC9X8');</script>
    <!-- End Google Tag Manager -->

    <!-- MailerLite Universal - Subscribe Popup -->
    <script>
    (function(m,a,i,l,e,r){ m['MailerLiteObject']=e;function f(){
    var c={ a:arguments,q:[]};var r=this.push(c);return "number"!=typeof r?r:f.bind(c.q);}
    f.q=f.q||[];m[e]=m[e]||f.bind(f.q);m[e].q=m[e].q||f.q;r=a.createElement(i);
    var _=a.getElementsByTagName(i)[0];r.async=1;r.src=l+'?v'+(~~(new Date().getTime()/1000000));
    _.parentNode.insertBefore(r,_);})(window, document, 'script', 'https://static.mailerlite.com/js/universal.js', 'ml');

    var ml_account = ml('accounts', '1916250', 'm1v6b6r9d7', 'load');
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

          <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          viewBox="0 0 120 40" style="enable-background:new 0 0 120 40;" xml:space="preserve">

            <style type="text/css">
            .st0{fill:#DB3E00;}
            </style>

            <g id="Group_14">
              <path id="Path_6" class="st0" d="M14.7,36.2c0,2.1-1.6,3.8-3.7,3.8c-0.1,0-0.2,0-0.3,0H7.6v-7.6h3.2c2-0.1,3.8,1.4,4,3.5
              C14.7,36,14.7,36.1,14.7,36.2z M13.3,36.2c0.1-1.3-1-2.5-2.3-2.5c-0.1,0-0.1,0-0.2,0H9.1v5h1.7c1.3,0,2.4-1,2.4-2.4
              C13.3,36.3,13.3,36.3,13.3,36.2z"/>

              <path id="Path_7" class="st0" d="M36,32.4v1.3h-4.1v1.9h3.7v1.3h-3.7v1.9h4.2V40h-5.7v-7.6H36L36,32.4z"/>

              <path id="Path_8" class="st0" d="M54.9,33.7c-0.7,0-1.1,0.2-1.1,0.7c0,1.5,4,0.7,4,3.4c0,1.4-1.2,2.2-2.9,2.2
              c-1.2,0-2.3-0.4-3.2-1.2l0.6-1.2c0.7,0.6,1.6,1,2.6,1.1c0.8,0,1.3-0.3,1.3-0.8c0-1.6-4-0.7-4-3.3c0-1.3,1.1-2.1,2.8-2.1
              c1,0,1.9,0.3,2.7,0.8l-0.6,1.2C56.5,34,55.7,33.7,54.9,33.7z"/>

              <path id="Path_9" class="st0" d="M75,32.4V40h-1.5v-7.6H75z"/>

              <path id="Path_10" class="st0" d="M96.3,36.2h1.3V39c-0.9,0.6-1.9,1-3,1c-2.1,0.1-3.9-1.6-3.9-3.7c-0.1-2.1,1.6-3.9,3.7-3.9
              c0.1,0,0.3,0,0.4,0c1.1,0,2.1,0.4,2.9,1.1l-0.8,1c-0.6-0.5-1.3-0.8-2.1-0.8c-1.4,0-2.6,1-2.6,2.4c0,1.4,1,2.6,2.4,2.6
              c0.1,0,0.1,0,0.2,0c0.6,0,1.1-0.2,1.6-0.5L96.3,36.2L96.3,36.2z"/>

              <path id="Path_11" class="st0" d="M114.7,32.4l3.9,5.2v-5.2h1.4V40h-1.4l-3.9-5.2V40h-1.4v-7.6H114.7z"/>

              <path id="Path_12" class="st0" d="M120,9.6V1.8h-19.5v27.3H120v-7.8h-10.7v-2.4h10.3V12h-10.3V9.6H120z"/>

              <path id="Path_13" class="st0" d="M85.8,1.8V14L77,1.8h-8.8v27.3H77V16.8l8.8,12.3h8.8V1.8H85.8z"/>

              <path id="Path_14" class="st0" d="M40.3,1.8L35,16.3L29.7,1.8h-9.4l10,27.3h9.4l10-27.3H40.3z"/>

              <rect id="Rectangle_3" x="53.5" y="1.8" class="st0" width="8.8" height="27.3"/>

              <g id="Group_13">
                <path id="Path_15" class="st0" d="M16.4,1.8v27.3H7.6V10.6H1.8V6.2l5.9-4.4H16.4 M18.2,0H7L6.6,0.4L0.7,4.8L0,5.3v7h5.9v18.6h12.3
                V0z"/>
              </g>

            </g>

          </svg>

        </div>
      </div>
    </a>

    <div class="backToTop hide" onclick="flyToTop()"></div>

    @yield('body-content')
    @include('inc/mainNav')

    <footer class="footer make-dark">
      <div class="footer-collection">
          <div class="footer-two">
              <h3 class="mb-1">Services</h3>
              <p class="mt-0">
                  <a href="/branding-and-strategy">Branding and Strategy</a><br>
                  <a href="/business-websites">Business Websites</a><br>
                  <a href="/ecommerce-solutions">eCommerce Solutions</a><br>
                  <a href="/premium-development">Premium Development</a><br>
                  <a href="/web-maintenance">Web Maintenance</a><br>
                  <a href="/other-deliverables">Other Deliverables</a><br>
                  <a href="/webhosting-solutions">Webhosting Solutions</a>
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
    <!-- MailerLite Universal -->
    <script>
      (function(m,a,i,l,e,r){ m['MailerLiteObject']=e;function f(){
      var c={ a:arguments,q:[]};var r=this.push(c);return "number"!=typeof r?r:f.bind(c.q);}
      f.q=f.q||[];m[e]=m[e]||f.bind(f.q);m[e].q=m[e].q||f.q;r=a.createElement(i);
      var _=a.getElementsByTagName(i)[0];r.async=1;r.src=l+'?v'+(~~(new Date().getTime()/1000000));
      _.parentNode.insertBefore(r,_);})(window, document, 'script', 'https://static.mailerlite.com/js/universal.js', 'ml');

      var ml_account = ml('accounts', '1916250', 'm1v6b6r9d7', 'load');
    </script>
    <!-- End MailerLite Universal -->

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
