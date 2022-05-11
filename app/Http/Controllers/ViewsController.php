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
            11 => "maintenance-barebones",
            12 => "maintenance-extras",
            13 => "maintenance-the-lot",
            14 => "premium-development",
            15 => "deliverables-logo-design",
            16 => "deliverables-stationery-sets",
            17 => "deliverables-email-marketing",
            18 => "deliverables-sales-deck",
            19 => "deliverables-signage",
            20 => "deliverables-vehicle-wraps",
            21 => "deliverables-packaging",
            22 => "deliverables-other",
            23 => "development-web-apps",
            24 => "development-mobile-apps",
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
            14 => "Premium Development",
            15 => "Deliverables - Logo Design",
            16 => "Deliverables - Stationery Sets",
            17 => "Deliverables - Email Marketing",
            18 => "Deliverables - Sales Deck",
            19 => "Deliverables - Signage",
            20 => "Deliverables - Vehicle Wraps",
            21 => "Deliverables - Packaging",
            22 => "Deliverables - Other",
//            23 => "Development - Web Apps",
//            24 => "Development - Mobile Apps",
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
