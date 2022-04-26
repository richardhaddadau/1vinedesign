<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    // STANDARD PAGES
    // Load Welcome Page
    public function welcome() {
        return view('welcome');
    }

    // Load 'Kickstart Your Business' Page
    public function kickstart() {
        return view('kickstart');
    }

    // Load 'Revamp Your Business' Page
    public function revamp() {
        return view('revamp');
    }

    public function empower() {
        return view('empower');
    }

    public function webDevelopment() {
        return view('webDevelopment');
    }

    // Load 'Start Selling Online' Page
    public function selling() {
        return view('selling');
    }

    // Load 'Web SEO' Page
    public function seoStrategy() {
        return view('seoStrategy');
    }

    // Load 'Web Maintenance' Page
    public function webMaintenance() {
        return view('webMaintenance');
    }

    // Load 'Other Deliverables' Page
    public function deliverables() {
        return view('deliverables');
    }

    // Load About Us Page
    public function about() {
        return view('about');
    }

    // Load Terms and Conditions Page
    public function terms() {
        return view('terms');
    }

    // Load Privacy Policy Page
    public function privacy() {
        return view('privacy');
    }

    // Get Quote Page
    public function getQuote($package = null) {
        $array = array (
            1 => "branding-starter",
            2 => "branding-professional",
            3 => "branding-enterprise",
            4 => "website-essential",
            5 => "website-premium",
            6 => "website-enterprise",
            7 => "ecommerce-basic",
            8 => "ecommerce-standard",
            9 => "ecommerce-extensive",
            10 => "ecommerce-enterprise",
            11 => "maintenance-the-bare-necessities",
            12 => "maintenance-the-extra",
            13 => "maintenance-the-lot",
            14 => "seo-one-way",
            15 => "seo-combative",
            16 => "touchpoints-logo-design",
            17 => "touchpoints-stationery-sets",
            18 => "touchpoints-email-marketing",
            19 => "touchpoints-sales-deck",
            20 => "touchpoints-signage",
            21 => "touchpoints-vehicle-wraps",
            22 => "touchpoints-packaging",
            23 => "touchpoints-other"
        );

        $finalArray = array(
            1 => "Branding - Starter",
            2 => "Branding - Professional",
            3 => "Branding - Enterprise",
            4 => "Website - Essential",
            5 => "Website - Premium",
            6 => "Website - Enterprise",
            7 => "eCommerce Basic",
            8 => "eCommerce Standard",
            9 => "eCommerce Extensive",
            10 => "eCommerce Enterprise",
            11 => "Maintenance - The Bare Necessities",
            12 => "Maintenance - The Extra",
            13 => "Maintenance - The Lot",
            14 => "SEO - One-Way",
            15 => "SEO - Combative",
            16 => "TouchPoints - Logo Design",
            17 => "TouchPoints - Stationery Sets",
            18 => "TouchPoints - Email Marketing",
            19 => "TouchPoints - Sales Deck",
            20 => "TouchPoints - Signage",
            21 => "TouchPoints - Vehicle Wraps",
            22 => "TouchPoints - Packaging",
            23 => "TouchPoints - Other"
        );

        if (in_array($package, $array)) {

            $foundKey = array_search($package, $array);
            return view('fullContact', [ 'package' => $package, 'theKey' => $foundKey, 'theArray' => $finalArray ]);

        } else {

            return view('fullContact', [ "package" => $package, 'theArray' => $finalArray ]);

        }
    }

    // Load Portfolio Page
    public function portfolio() {
        return view('portfolio');
    }

    // Load Links Page
    public function links() {
        return view('links');
    }
}
