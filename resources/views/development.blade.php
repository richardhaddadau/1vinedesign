<!-- Select Main Layout -->
@extends('layouts.base')

<!-- Page Title -->
@section('title', 'Premium Development')

<!-- Page Description -->
@section('description', 'Whether your project is for web, mobile or even desktop apps, I can help.')

<!-- Page Keywords -->
@section('keywords', 'premium development, laravel development, backend development, frontend development, full stack
 development, backend developer, frontend developer, full stack developer')

<!-- Page URL -->
@section('url', 'https://1vinedesign.com.au/premium-development')

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

<div class="section make-small make-dark theme-green pb-5">
    <div class="container large-container">

        <div class="pricing-banner">
            <div class="pricing-topic">
                <h1>Premium Development</h1>
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
                    <div class="pricing-button primary" onclick="goTo(3)">Learn More <i class="fas
                    fa-th-list"></i></div>
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
                    <div class="pricing-button primary" onclick="goTo(2)">Details <i class="fas fa-th-list"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section make-light make-small theme-green autoScroll">
    <div class="container make-centered large-container mb-5">
        <h2>Mobile App Development</h2>
        <p class="col-10">
            Native and Hybrid
        </p>
        <p class="col-10 make-left">
            But you know all of this. That's why you're here. You want to know why you should trust 1VINE with your
            next big web app project. Here are a few reasons:
        </p>
        <p class="col-10 make-left">
            <span class="make-strong make-special">1. I have the experience</span><br />
            I build apps that scale with customer demand as well as a business' growing goals and dreams.
        </p>

        <p class="col-10 make-left">
            <span class="make-strong make-special">2. I know many technologies</span><br />
            Projects should be built with the right tools, not limited to suit what's available.
        </p>

        <p class="col-10 make-left">
            <span class="make-strong make-special">3. I am trusted</span><br />
            I have a reputation of delivering on my promises.
        </p>

        <p class="col-10 make-left">
            <span class="make-strong make-special">4. I use my own work</span><br />
            From project managing to automating tasks, I have built tools that I needed.
        </p>

        <p class="col-10 make-left">
            Leave your name and email <a href='javascript:void(0)' onclick="goTo(3)">above</a> to receive my
            "Choosing a Good Developer" resource for free!
        </p>

        <p class="col-10 make-left">
            <span class="make-strong">So, how does this work?</span><br />
            There are two ways we can go about a new project depending on the scope and goals. Based on that, pricing
            can be either hourly/monthly or by project. If you're unsure which method suits your project best,
            consider leaving your email <a href='javascript:void(0)' onclick="goTo(5)">below</a> to get my
            "Planning Your Project" guide.
        </p>

        <div class="pricing-group for-cells-3 mt-3">
            <div class="pricing-cell">
                <h4 class="pricing-title">Hourly or Monthly</h4>
                <h3 class="pricing-cost">$120</h3>
                <p class="pricing-terms">per hour</p>
                <ul class="pricing-list">
                    <p>Perfect for projects with:</p>
                    <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Ongoing work</li>
                    <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Variable scope</li>
                </ul>
            </div>

            <div class="pricing-cell">
                <h4 class="pricing-title">By Project</h4>
                <h3 class="pricing-cost">Variable</h3>
                <p class="pricing-terms">based on requirement</p>
                <p>Perfect for projects with:</p>
                <ul class="pricing-list">
                    <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Set goals</li>
                    <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Fixed scope</li>
                </ul>
            </div>
        </div>
    </div>
</div>

{{--<div class="section make-green theme-green autoScroll">--}}
{{--    <div class="container">--}}
{{--        <h2>What to look for in a developer</h2>--}}
{{--        <p class="section-desc mt-0">Get my free "Choosing a Good Developer" resource by email.</p>--}}
{{--        <div class="ml-embedded" data-form="17Ni6h"></div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="section make-dark make-small theme-orange autoScroll">
    <div class="container make-centered large-container mb-5">
        <h2>Web App Development</h2>
        <p class="col-10 make-left">
            Not all websites are made the same. A typical business website provides information and points customers to
            resources and products. Sometimes, though, you need something bigger! Website in the 2020s are providing
            a lot more than just information which is why a big bunch of them are being referred to as web apps.
        </p>

        <p class="col-10 make-right">
            Think of websites like Canva, Facebook, Twitter, Netflix, WhatsApp Web and many others. Technically
            speaking, these are still websites. You load up your browser and "browse" to them as you would any other
            website. However, you're not there for information on a service or to find the number to call for a
            service.
        </p>

        <p class="col-9 quote-post">
            <i class="fas fa-quote-left"></i> The website is the service! <i class="fas fa-quote-right"></i>
        </p>

        <p class="col-10">
            You can interact with friends on Facebook, watch movies on Netflix, design business cards on Canva or
            judge someone on Twitter...just for the fun of it. You can do that because technology has changed a lot
            and websites, rather than just tell you about a service, have become channels through which you can provide
            these services to your customers right from their browsers.
        </p>

        <p class="col-10 make-left">
            But you know all of this. That's why you're here. You want to know why you should trust 1VINE with your
            next big web app project. Here are a few reasons:
        </p>
        <p class="col-10 make-left">
            <span class="make-strong make-special">1. I have the experience</span><br />
            I build apps that scale with customer demand as well as a business' growing goals and dreams.
        </p>

        <p class="col-10 make-left">
            <span class="make-strong make-special">2. I know many technologies</span><br />
            Projects should be built with the right tools, not limited to suit what's available.
        </p>

        <p class="col-10 make-left">
            <span class="make-strong make-special">3. I am trusted</span><br />
            I have a reputation of delivering on my promises.
        </p>

        <p class="col-10 make-left">
            <span class="make-strong make-special">4. I use my own work</span><br />
            From project managing to automating tasks, I have built tools that I needed.
        </p>

        <p class="col-10 make-left">
            Leave your name and email <a href='javascript:void(0)' onclick="goTo(3)">above</a> to receive my
            "Choosing a Good Developer" resource for free!
        </p>

        <p class="col-10 make-left">
            <span class="make-strong">So, how does this work?</span><br />
            There are two ways we can go about a new project depending on the scope and goals. Based on that, pricing
            can be either hourly/monthly or by project. If you're unsure which method suits your project best,
            consider leaving your email <a href='javascript:void(0)' onclick="goTo(5)">below</a> to get my
            "Planning Your Project" guide.
        </p>

        <div class="pricing-group for-cells-3 mt-3">
            <div class="pricing-cell">
                <h4 class="pricing-title">Hourly or Monthly</h4>
                <h3 class="pricing-cost">$85</h3>
                <p class="pricing-terms">per hour</p>
                <ul class="pricing-list">
                    <p>Perfect for projects with:</p>
                    <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Ongoing work</li>
                    <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Variable scope</li>
                </ul>
            </div>

            <div class="pricing-cell">
                <h4 class="pricing-title">By Project</h4>
                <h3 class="pricing-cost">Variable</h3>
                <p class="pricing-terms">based on requirement</p>
                <p>Perfect for projects with:</p>
                <ul class="pricing-list">
                    <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Set goals</li>
                    <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Fixed scope</li>
                </ul>
            </div>
        </div>
    </div>
</div>

{{--<div class="section make-orange theme-orange autoScroll">--}}
{{--    <div class="container">--}}
{{--        <h2>Want to know how to approach your project?</h2>--}}
{{--        <p class="section-desc mt-0">Get my free "Planning Your Project" resource by email.</p>--}}
{{--        <div class="ml-embedded" data-form="ysi5sz"></div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="section make-light make-small theme-green autoScroll">
    <div class="container make-centered large-container mb-5">
        <h2>Desktop Development</h2>
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
