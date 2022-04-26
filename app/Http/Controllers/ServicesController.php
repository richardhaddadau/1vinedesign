<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    // SERVICES
    // Load Branding and Strategy Page
    public function branding() {
        return view('branding');
    }

    // Load Business Websites Page
    public function websites() {
        return view('websites');
    }

    // Load eCommerce Solutions Page
    public function ecommerce() {
        return view('ecommerce');
    }

    // Load Premium Development Page
    public function development() {
        return view('development');
    }

    // Load Security and Ethical Hacking Page
    public function security() {
        return view('security');
    }

    // Load Web Maintenance Page
    public function maintenance() {
        return view('maintenance');
    }

    // Load Web SEO Page
    public function seo() {
        return view('seo');
    }

    // Load Domain Names Page
    public function domains() {
        return view('domains');
    }

    // Load Web Hosting Page
    public function hosting() {
        return view('webHosting');
    }

    // TOOLS
    // Load JavaScript
    public function javascript() {
        return view('services/javascript');
    }

    // Load Laravel
    public function laravel() {
        return view('services/laravel');
    }

    // Load Wordpress
    public function wordpress() {
        return view('services/wordpress');
    }

    // Load Content Management Systems
    public function cms() {
        return view('services/cms');
    }

    // Load React
    public function react() {
        return view('services/react');
    }

    // Load Python
    public function python() {
        return view('services/python');
    }

    // Load Native
    public function native() {
        return view('services/native');
    }

    // Load Shopify
    public function shopify() {
        return view('services/shopify');
    }

    // Load BigCommerce
    public function bigcommerce() {
        return view('services/bigcommerce');
    }

    // Load WooCommerce
    public function woocommerce() {
        return view('services/woocommerce');
    }

    // Load Vend
    public function vend() {
        return view('services/vend');
    }
}
