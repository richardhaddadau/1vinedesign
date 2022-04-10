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
            1 => "branding-the-starter",
            2 => "branding-the-professional",
            3 => "branding-the-premium",
            4 => "website-essentials",
            5 => "website-the-premium",
            6 => "website-the-enterprise",
            7 => "ecommerce-the-standard",
            8 => "ecommerce-the-extensive",
            9 => "maintenance-the-bare-necessities",
            10 => "maintenance-the-extra",
            11 => "maintenance-the-lot",
            12 => "seo-one-way",
            13 => "seo-combative",
            14 => "touchpoints-logo-design",
            15 => "touchpoints-stationery-sets",
            16 => "touchpoints-email-marketing",
            17 => "touchpoints-sales-deck",
            18 => "touchpoints-signage",
            19 => "touchpoints-vehicle-wraps",
            20 => "touchpoints-packaging",
            21 => "touchpoints-other"
        );

        $finalArray = array(
            1 => "Branding - The Starter",
            2 => "Branding - The Professional",
            3 => "Branding - The Premium",
            4 => "Website - Essentials",
            5 => "Website - The Premium",
            6 => "Website - The Enterprise",
            7 => "eCommerce - The Standard",
            8 => "eCommerce - The Extensive",
            9 => "Maintenance - The Bare Necessities",
            10 => "Maintenance - The Extra",
            11 => "Maintenance - The Lot",
            12 => "SEO - One-Way",
            13 => "SEO - Combative",
            14 => "TouchPoints - Logo Design",
            15 => "TouchPoints - Stationery Sets",
            16 => "TouchPoints - Email Marketing",
            17 => "TouchPoints - Sales Deck",
            18 => "TouchPoints - Signage",
            19 => "TouchPoints - Vehicle Wraps",
            20 => "TouchPoints - Packaging",
            21 => "TouchPoints - Other"
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
