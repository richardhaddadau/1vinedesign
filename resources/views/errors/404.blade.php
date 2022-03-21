<!-- Select Main Layout -->
@extends('layouts.base')

<!-- Page Title -->
@section('title', 'About 1VINE')

<!-- Page Description -->
@section('description', "1VINE Design is a branding consultancy focused on helping Australian businesses make their mark as more than a business but as a brand.")

<!-- Page Keywords -->
@section('keywords', 'about 1vine, who is 1vine design, what is 1vine design, who is Richard Haddad')

<!-- Page URL -->
@section('url', 'https://1vinedesign.com.au/404')

<!-- Body Content -->
@section('body-content')

@section('menu-chapter', 'Oops!')

<!-- Hero Section -->
<div class="section make-dark theme-green make-medium">
    <div class="container">
        <div class="hero-content">
            <h1 class="make-centered">Uh-Oh!</h1>
        </div>
    </div>

    <div class="one-btn" title="Start a new project" onclick="goTo('x')"></div>
</div>

<div class="section make-light theme-green">
    <div class="container make-centered">
        <p class="col-10">It looks like this page doesn't exist anymore. Maybe one of my links is broken. Sorry! I'll look into it ASAP, I promise. In the mean time, maybe try something else?</p>
        <p class="col-10"><a href="/work-portfolio">Want to see some client work?</a> | <a href="/about-1vine">Maybe learn more about 1VINE?</a></p>
    </div>
</div>
@endsection