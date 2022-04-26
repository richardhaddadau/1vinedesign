<!-- Select Main Layout -->
@extends('layouts.base')

<!-- Page Title -->
@section('title', 'WebHosting Solutions')

<!-- Page Description -->
@section('description', 'Affordable and reliable Web-Hosting customised for business or personal use.')

<!-- Page Keywords -->
@section('keywords', '')

<!-- Page URL -->
@section('url', 'https://1vinedesign.com.au/webhosting-solutions')

<!-- Page Description -->
@section('social-media-tags')

    <!-- Facebook -->
    <meta property="og:site_name" content="1VINE Design">
    <meta property="og:title" content="Easy Web Hosting - 1VINE Design">
    <meta property="og:description" content="Affordable and reliable Web-Hosting customised for business or personal
    use.">
    <meta property="og:image" content="https://1vinedesign.com.au/img/bg.jpg">
    <meta property="og:url" content="https://1vinedesign.com.au/maximise-your-brands-seo">

    <!-- Twitter -->
    <meta name="twitter:title" content="@1vinedesign">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="Affordable and reliable Web-Hosting customised for business or personal
    use.">
    <meta name="twitter:image" content="https://1vinedesign.com.au/img/bg.jpg">
    <meta name="twitter:image:alt" content="1VINE Design Header.">
@endsection

<!-- Page Description -->
@section('extra-css')
@endsection

<!-- Body Content -->
@section('body-content')

@section('menu-chapter', 'Web Hosting')

<div class="section make-small make-dark theme-green banner-header">
    <div class="container" style="padding-bottom: 30px;">

    </div>
</div>

<div class="section make-medium make-green theme-green">
    <div class="container large-container">

        <div class="pricing-banner">
            <div class="pricing-topic for-cells-3">
                <h2>Easy Web Hosting</h2>
                <p>Affordable and reliable Web-Hosting customised for business or personal use</p>
            </div>

            <div class="pricing-group for-cells-3">
                <div class="pricing-cell">
                    <h4 class="pricing-title">Basic</h4>
                    <h3 class="pricing-cost">$90</h3>
                    <p class="pricing-terms">per year</p>
                    <ul class="pricing-list">
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> 150GB Space</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> 100 Emails</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Cloud Network</li>
                    </ul>
                    <a class="pricing-button primary" onclick="goTo(2)">Compare <i class="fas fa-th-list"></i></a>
                </div>

                <div class="pricing-cell">
                    <h4 class="pricing-title">Standard</h4>
                    <h3 class="pricing-cost">$168</h3>
                    <p class="pricing-terms">per year</p>
                    <ul class="pricing-list">
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> 500GB Space</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> 500 Emails</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Unlimited Websites</li>
                    </ul>
                    <a class="pricing-button primary" onclick="goTo(2)">Compare <i class="fas fa-th-list"></i></a>
                </div>

                <div class="pricing-cell">
                    <h4 class="pricing-title">Business</h4>
                    <h3 class="pricing-cost">$252</h3>
                    <p class="pricing-terms">per year</p>
                    <ul class="pricing-list">
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Unlimited Space</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Unlimited Emails</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Unlimited Websites</li>
                    </ul>
                    <a class="pricing-button secondary" onclick="goTo(2)">See Details <i class="fas fa-th-list"></i></a>
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
                <h5 class="pricing-head">&nbsp;</h5>

                <div class="pricing-table-feature-item">Disc Storage</div>
                <div class="pricing-table-feature-item">Bandwidth</div>
                <div class="pricing-table-feature-item">Hosted Websites</div>
                <div class="pricing-table-feature-item">Email Accounts</div>
                <div class="pricing-table-feature-item">Databases</div>
                <h5 class="pricing-head">File Management</h5>
                <div class="pricing-table-feature-item">Hosting Management</div>
                <div class="pricing-table-feature-item">FTP Accounts</div>
                <div class="pricing-table-feature-item">FTP Management</div>
                <div class="pricing-table-feature-item">FTP Manager</div>
                <div class="pricing-table-feature-item">SSH Access</div>
                <div class="pricing-table-feature-item">FTP over SSL</div>
                <div class="pricing-table-feature-item">Password Protected Directories</div>
                <h5 class="pricing-head">Programming & Databases</h5>
                <div class="pricing-table-feature-item">PHP Support</div>
                <div class="pricing-table-feature-item">MySQL Databases</div>
                <div class="pricing-table-feature-item">Perl, Python, Ruby</div>
                <div class="pricing-table-feature-item">Perl Syntax Checker</div>
                <div class="pricing-table-feature-item">Server Side Includes</div>
                <div class="pricing-table-feature-item">Cron/Scheduled Jobs</div>
                <div class="pricing-table-feature-item">phpMyAdmin</div>
                <div class="pricing-table-feature-item">Error Logs</div>
                <h5 class="pricing-head">Email Features</h5>
                <div class="pricing-table-feature-item">Email Accounts</div>
                <div class="pricing-table-feature-item">Webmail Access</div>
                <div class="pricing-table-feature-item">Email Forwarding</div>
                <div class="pricing-table-feature-item">Anti-Spam</div>
                <div class="pricing-table-feature-item">Anti-Virus</div>
                <div class="pricing-table-feature-item">Catch-all Email</div>
                <div class="pricing-table-feature-item">Email Auto-Responder</div>
                <div class="pricing-table-feature-item">POP3 / IMAP / SMTP</div>
                <h5 class="pricing-head">Web Address Features</h5>
                <div class="pricing-table-feature-item">Subdomains</div>
                <div class="pricing-table-feature-item">URL Masking</div>
                <div class="pricing-table-feature-item">DNS Management</div>
                <div class="pricing-table-feature-item">External Domains</div>
                <div class="pricing-table-feature-item">Alias Domains</div>
                <h5 class="pricing-head">Technology & Speed</h5>
                <div class="pricing-table-feature-item">Memory</div>
                <div class="pricing-table-feature-item">CloudLinux</div>
                <div class="pricing-table-feature-item">CageFS</div>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">Basic</h5>

                <div class="pricing-table-feature-marker">150 GB</div>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker">1</div>
                <div class="pricing-table-feature-marker">100</div>
                <div class="pricing-table-feature-marker">10</div>
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker">cPanel</div>
                <div class="pricing-table-feature-marker">1</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">10</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker">100</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker">100</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker">Up to 1.5 GB</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <a class="pricing-foot-button" href="https://www.1vinehosting.com.au/web-hosting/">Purchase</a>
                <h5 class="pricing-foot">$90/yr<span>AUD</span></h5>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">Standard</h5>

                <div class="pricing-table-feature-marker">500 GB</div>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker">5</div>
                <div class="pricing-table-feature-marker">500</div>
                <div class="pricing-table-feature-marker">50</div>
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker">cPanel</div>
                <div class="pricing-table-feature-marker">5</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">50</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker">500</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker">Up to 2.0 GB</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <a class="pricing-foot-button" href="https://www.1vinehosting.com.au/web-hosting/">Purchase</a>
                <h5 class="pricing-foot">$168/yr<span>AUD</span></h5>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">Extensive</h5>

                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker">cPanel</div>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">Unlimited</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker">Up to 2.5 GB</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <a class="pricing-foot-button" href="https://www.1vinehosting.com.au/web-hosting/">Purchase</a>
                <h5 class="pricing-foot">$252/yr<span>AUD</span></h5>
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
