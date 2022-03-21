<!-- Select Main Layout -->
@extends('layouts.footer-only-base')

<!-- Page Title -->
@section('title', 'Get Your Free Inspirational Poster')

<!-- Page Description -->
@section('description', "1VINE Design is a branding consultancy focused on helping Australian businesses make their mark as more than a business but as a brand.")

<!-- Page Keywords -->
@section('keywords', 'about 1vine, who is 1vine design, what is 1vine design, who is Richard Haddad')

<!-- Page URL -->
@section('url', 'https://1vinedesign.com.au/about-1vine')

<!-- Page Description -->
@section('social-media-tags')

<!-- Facebook -->
<meta property="og:site_name" content="1VINE Design">
<meta property="og:title" content="About 1VINE - 1VINE Design">
<meta property="og:description" content="A little about 1VINE Design">
<meta property="og:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta property="og:url" content="https://1vinedesign.com.au/about-1vine">

<!-- Twitter -->
<meta name="twitter:title" content="@1vinedesign">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="A little about 1VINE Design">
<meta name="twitter:image" content="https://1vinedesign.com.au/img/bg.jpg">
<meta name="twitter:image:alt" content="1VINE Design Header.">
@endsection

<!-- Page Description -->
@section('extra-css')
@endsection

<!-- Body Content -->
@section('body-content')

@section('menu-chapter', 'Free Poster')

<!-- Hero Section -->
<header class="section make-dark theme-orange make-small">
    <section class="container">
        <article class="hero-content">
            <h1 class="make-centered">Get Your Free Inspirational Poster</h1>
        </article>
    </section>
</header>

<section class="section make-dark theme-orange make-last">
    <div class="container">
        <img src="{{ asset('img/poster.png') }}" height="200" width="141" alt="" style="margin: 20px auto; border: 2px solid white;">
        <p class="col-10">Thank you for passing by. I hope this A3 poster reminds you to stay motivated, focused on your goal and driven to never ever give up! Fill out the quick form below and I'll email you the poster so you can print it anywhere you like.</p>
        <div class="ml-form-embed freebie-form"
            data-account="1916250:m1v6b6r9d7"
            data-form="5064857:u4z1u0">
        </div>
</section>
@endsection