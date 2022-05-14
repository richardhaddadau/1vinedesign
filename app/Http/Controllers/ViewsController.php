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
            16 => "deliverables-business-cards-basic",
            17 => "deliverables-business-cards-plus",
            18 => "deliverables-business-cards-super",
            19 => "deliverables-stationery-set-pro",
            20 => "deliverables-stationery-set-extensive",
            21 => "deliverables-vehicle-wrap-semi",
            22 => "deliverables-vehicle-wrap-full",
            23 => "deliverables-social-media-package-selective",
            24 => "deliverables-social-media-package-extensive",
            25 => "other",
            26 => "development-web-apps",
            27 => "development-mobile-apps",
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
            11 => "Maintenance - BareBones",
            12 => "Maintenance - Extras",
            13 => "Maintenance - The Lot",
            14 => "Premium Development",
            15 => "Deliverables - Logo Design",
            16 => "Deliverables - Business Cards - Basic",
            17 => "Deliverables - Business Cards - Plus",
            18 => "Deliverables - Business Cards - Super",
            19 => "Deliverables - Stationery Sets - Pro",
            20 => "Deliverables - Stationery Sets - Extensive",
            21 => "Deliverables - Vehicle Wraps - Semi",
            22 => "Deliverables - Vehicle Wraps - Full",
            23 => "Deliverables - Social Media Package - Selective",
            24 => "Deliverables - Social Media Package - Extensive",
            25 => "Other",
//            26 => "Development - Web Apps",
//            27 => "Development - Mobile Apps",
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
