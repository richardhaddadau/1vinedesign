<!-- Select Main Layout -->
@extends('layouts.base')

<!-- Page Title -->
@section('title', 'Web Maintenance')

<!-- Page Description -->
@section('description', 'Protect your website from security risks and keep it running at peak performance.')

<!-- Page Keywords -->
@section('keywords', 'web maintenance, better performance, monthly maintenance, website care, website health audit,
website security, server fixes, server performance, server maintenance, website backup, backup services, maintenance
service')

<!-- Page URL -->
@section('url', 'https://1vinedesign.com.au/web-maintenance')

<!-- Page Description -->
@section('social-media-tags')

    <!-- Facebook -->
    <meta property="og:site_name" content="1VINE Design">
    <meta property="og:title" content="Protect your website - 1VINE Design">
    <meta property="og:description" content="Protect your website from security risks and keep it running at peak performance.">
    <meta property="og:image" content="https://1vinedesign.com.au/img/bg.jpg">
    <meta property="og:url" content="https://1vinedesign.com.au/web-maintenance">

    <!-- Twitter -->
    <meta name="twitter:title" content="@1vinedesign">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="Protect your website from security risks and keep it running at peak performance.">
    <meta name="twitter:image" content="https://1vinedesign.com.au/img/bg.jpg">
    <meta name="twitter:image:alt" content="1VINE Design Header.">
@endsection

<!-- Page Description -->
@section('extra-css')
@endsection

<!-- Body Content -->
@section('body-content')

@section('menu-chapter', 'Web Maintenance')

<div class="section make-small make-dark theme-green banner-header">
    <div class="container" style="padding-bottom: 30px;">

    </div>
</div>

<div class="section make-small make-dark theme-green pb-5">
    <div class="container large-container">

        <div class="pricing-banner">
            <div class="pricing-topic for-cells-3">
                <h1>Protect your website</h1>
                <p>from security risks and keep it running at peak performance</p>
            </div>

            <div class="pricing-group for-cells-3">
                <div class="pricing-cell">
                    <h4 class="pricing-title">Bare Bones</h4>
                    <h3 class="pricing-cost">$99</h3>
                    <p class="pricing-terms">per month</p>
                    <ul class="pricing-list">
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Secure Backups</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> System Updates</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Website Health Check</li>
                    </ul>
                    <a class="pricing-button primary" onclick="goTo(2)">Compare <i class="fas fa-th-list"></i></a>
                </div>

                <div class="pricing-cell">
                    <h4 class="pricing-title">Extras</h4>
                    <h3 class="pricing-cost">$189</h3>
                    <p class="pricing-terms">per month</p>
                    <ul class="pricing-list">
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Regular Updates</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> SEO Analysis</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Performance
                            Optimisation</li>
                    </ul>
                    <a class="pricing-button primary" onclick="goTo(2)">Compare <i class="fas fa-th-list"></i></a>
                </div>

                <div class="pricing-cell">
                    <h4 class="pricing-title">The Lot</h4>
                    <h3 class="pricing-cost">$349</h3>
                    <p class="pricing-terms">per month</p>
                    <ul class="pricing-list">
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Site Protection</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> Performance
                            Optimisation</li>
                        <li class="pricing-list-item"><i class="fa-solid fa-circle-check"></i> On-Site SEO Fixes</li>
                    </ul>
                    <a class="pricing-button secondary" onclick="goTo(2)">See More <i class="fas fa-th-list"></i></a>
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

                <h5 class="pricing-head">Secure Backups</h5>
                <div class="pricing-table-feature-item">Daily Database Backups</div>
                <div class="pricing-table-feature-item">Entire Site Backup</div>
                <div class="pricing-table-feature-item">Off-Server Backup Storage</div>

                <h5 class="pricing-head">System Updates</h5>
                <div class="pricing-table-feature-item">CMS Framework Updates</div>
                <div class="pricing-table-feature-item">Base Theme Updates</div>
                <div class="pricing-table-feature-item">Secure Plugin Updates</div>

                <h5 class="pricing-head">Standard Protection</h5>
                <div class="pricing-table-feature-item">24/7 Security Monitoring</div>
                <div class="pricing-table-feature-item">24/7 Uptime Monitoring</div>
                <div class="pricing-table-feature-item">Disk Usage Monitoring</div>
                <div class="pricing-table-feature-item">Malicious File Check</div>
                <div class="pricing-table-feature-item">Forms and Captcha Check</div>
                <div class="pricing-table-feature-item">Data Tracking Check</div>
                <div class="pricing-table-feature-item">Cookies Check</div>

                <h5 class="pricing-head">Web Health Check</h5>
                <div class="pricing-table-feature-item">Speed and Performance Checks</div>
                <div class="pricing-table-feature-item">Performance Optimisations</div>
                <div class="pricing-table-feature-item">Broken Link Checks and Fixes</div>
                <div class="pricing-table-feature-item">Responsive Design Tests</div>
                <div class="pricing-table-feature-item">General SEO Analysis</div>
                <div class="pricing-table-feature-item">On-Site SEO Fixes</div>

                <h5 class="pricing-head">Premium Protection</h5>
                <p class="pricing-note">Only if website is hosted on 1VINE</p>
                <div class="pricing-table-feature-item">Malware & Hacker Protection</div>
                <div class="pricing-table-feature-item">Google Blacklist Protection</div>
                <div class="pricing-table-feature-item">Daily Vulnerability Scan</div>
                <div class="pricing-table-feature-item">Daily Malware Scans</div>
                <div class="pricing-table-feature-item">Database Protection</div>
                <div class="pricing-table-feature-item">Removal and Cleanup of Risks</div>

                <h5 class="pricing-head">Email Protection</h5>
                <p class="pricing-note">Only if emails are hosted on 1VINE</p>
                <div class="pricing-table-feature-item">Anti-Spam Protection</div>
                <div class="pricing-table-feature-item">Anti-Virus Protection</div>
                <div class="pricing-table-feature-item">Anti-Spoofing Protection</div>
                <div class="pricing-table-feature-item">DoS Attack Protection</div>

                <h5 class="pricing-head">Hosting Management</h5>
                <div class="pricing-table-feature-item">Domain names</div>
                <div class="pricing-table-feature-item">150GB Webhosting</div>
                <div class="pricing-table-feature-item">SSL Certificate</div>

                <h5 class="pricing-head">Extras</h5>
                <div class="pricing-table-feature-item">Monthly Maintenance Report</div>
                <div class="pricing-table-feature-item">Cancel Anytime</div>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">Barebones</h5>
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">Monthly</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <p class="pricing-note-marker">&nbsp;</p>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <p class="pricing-note-marker">&nbsp;</p>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <a class="pricing-foot-button" href="/get-quote/maintenance-barebones">Purchase</a>
                <h5 class="pricing-foot">$99<span>AUD</span></h5>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">Extras</h5>
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">Monthly</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <p class="pricing-note-marker">&nbsp;</p>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <p class="pricing-note-marker">&nbsp;</p>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-minus"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <a class="pricing-foot-button" href="/get-quote/maintenance-extras">Purchase</a>
                <h5 class="pricing-foot">$189<span>AUD</span></h5>
            </div>

            <div class="pricing-plan-col">
                <h5 class="pricing-head">The Lot</h5>
                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker">Fortnightly</div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <p class="pricing-note-marker">&nbsp;</p>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <p class="pricing-note-marker">&nbsp;</p>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <h5 class="pricing-head">&nbsp;</h5>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>
                <div class="pricing-table-feature-marker"><i class="fas fa-check"></i></div>

                <a class="pricing-foot-button" href="/get-quote/maintenance-the-lot">Purchase</a>
                <h5 class="pricing-foot">$349<span>AUD</span></h5>
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
