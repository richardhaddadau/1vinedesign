<!-- Select Main Layout -->
@extends('layouts.base')

<!-- Page Title -->
@section('title', 'About 1VINE')

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

@section('menu-chapter', 'About 1VINE')

<!-- Hero Section -->
<div class="section make-dark theme-green make-medium">
    <div class="container">
        <div class="hero-content">
            <h1 class="make-centered">About 1VINE</h1>
        </div>
    </div>
</div>

<div class="section make-light theme-orange">
    <div class="container">
        <p class="col-10">I have been intrigued by design since I was 12 years old. Regardless of the industry, I always enjoyed marrying the analytical and creative. This is what got me into programming and development early on. I loved designing the UI for websites and software, and then write the code behind it all.</p>
        <p class="col-10">The more I delved into it the more I wanted to refine my skills and add more under my belt. I got into art, graphic design, UI/UX design and full stack development. Moving into branding was just a natural progression. </p>
        <p class="col-10">I started <span class="make-one">1VINE</span> to focus on what I am most passionate about: helping other Australians build life-changing brands and equip them with strategies and deliverables that push them to their full potential.</p>

        <h2>How do you categorise 1VINE?</h2>
        <p class="col-10"><span class="make-one">1VINE Design</span>, or 1VINE for short, is a <span class="make-strong">Branding Consultancy</span> focused on helping Australian businesses make their mark as more than a business but as a brand.</p>
        
        <p class="col-10">It's important to establish your brand and determine how you want to be perceived by your customers. Everything else from your logo to your website, even a car wrap design, can then sprout from that well-established brand.</p>
    </div>
</div>

<div class="section theme-orange make-orange">
    <div class="container">
        <h2 class="make-centered">Meet Me</h2>

        <div class="team-collection">
            <div class="team-item">
                <div class="team-photo"><img src="{{ asset('img/team/sm_Richard-Haddad.jpg') }}" alt="Photo of Richard Haddad, Director of 1VINE Design"></div>

                <div class="team-name">Richard Haddad</div>
                <div class="team-role">Director</div>

                <div class="team-description">
                I enjoy providing solutions and I love what I do. If I'm not working on client work, you'll catch me listening to music while cooking up a new project. Speaking of music, I listen to the lyrics.<br>Yeah, I'm that guy.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection