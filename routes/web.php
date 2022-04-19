<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\QuotesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Service Tools Pages
Route::group(['prefix' => 'services'], function() {
    Route::get('adobe-design-services', [ServicesController::class,'adobe']);

    Route::get('javascript-development-services', [ServicesController::class,'laravel']);
    Route::get('laravel-development-services', [ServicesController::class,'laravel']);
    Route::get('wordpress-development-services', [ServicesController::class,'wordpress']);
    Route::get('content-management-systems', [ServicesController::class,'cms']);

    Route::get('react-development-services', [ServicesController::class,'react']);
    Route::get('python-development-services', [ServicesController::class,'python']);
    Route::get('native-development-services', [ServicesController::class,'native']);

    Route::get('shopify-ecommerce-services', [ServicesController::class,'shopify']);
    Route::get('bigcommerce-ecommerce-services', [ServicesController::class,'bigcommerce']);
    Route::get('woocommerce-ecommerce-services', [ServicesController::class,'woocommerce']);
    Route::get('vend-commerce-services', [ServicesController::class,'vend']);
});

// Service Pages
Route::get('/branding-and-strategy', [ServicesController::class, 'branding']);
Route::get('/business-websites', [ServicesController::class, 'websites']);
Route::get('/ecommerce-solutions', [ServicesController::class, 'ecommerce']);
Route::get('/premium-development', [ServicesController::class, 'development']);
Route::get('/security-and-ethical-hacking', [ServicesController::class, 'security']);
Route::get('/web-maintenance', [ServicesController::class, 'maintenance']);
Route::get('/web-seo', [ServicesController::class, 'seo']);

Route::get('/other-deliverables', [ViewsController::class, 'deliverables']);

// Main Pages
Route::get('/empower-your-awesome-brand', [ViewsController::class, 'empower']);
Route::get('/establish-your-brand-online', [ViewsController::class, 'webDevelopment']);
Route::get('/start-selling-online', [ViewsController::class, 'selling']);
Route::get('/maximise-your-brands-seo', [ViewsController::class, 'seoStrategy']);
Route::get('/protect-your-brand-online', [ViewsController::class, 'webMaintenance']);
Route::get('/work-portfolio', [ViewsController::class, 'portfolio']);
Route::get('/about-1vine', [ViewsController::class, 'about']);
Route::get('/get-quote/{chosenPackage?}', [ViewsController::class, 'getQuote']);

// Legal Pages
Route::get('/terms-and-conditions', [ViewsController::class, 'terms']);
Route::get('/privacy-policy', [ViewsController::class, 'privacy']);

// Important Links
Route::get('/top-links', [ViewsController::class, 'links']);

// Home
Route::get('/', [ViewsController::class, 'welcome']);

Route::post('/contacts', [ContactsController::class, 'store'])->name('contacts.store');
Route::post('/quotes', [QuotesController::class, 'store'])->name('quotes.store');
