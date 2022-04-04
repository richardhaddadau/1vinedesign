<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
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

Route::get(
    '/branding-and-strategy',
    [ViewsController::class, 'branding']
);

Route::get(
    '/business-websites',
    [ViewsController::class, 'websites']
);

Route::get(
    '/ecommerce-solutions',
    [ViewsController::class, 'ecommerce']
);

Route::get(
    '/premium-development',
    [ViewsController::class, 'development']
);

Route::get(
    '/security-and-ethical-hacking',
    [ViewsController::class, 'security']
);

Route::get(
    '/web-maintenance',
    [ViewsController::class, 'maintenance']
);

Route::get(
    '/web-seo',
    [ViewsController::class, 'seo']
);

Route::get(
    '/empower-your-awesome-brand',
    [ViewsController::class, 'empower']
);

Route::get(
    '/establish-your-brand-online',
    [ViewsController::class, 'webDevelopment']
);

Route::get(
    '/other-deliverables',
    [ViewsController::class, 'deliverables']
);

Route::get(
    '/start-selling-online',
    [ViewsController::class, 'selling']
);

Route::get(
    '/maximise-your-brands-seo',
    [ViewsController::class, 'seoStrategy']
);

Route::get(
    '/protect-your-brand-online',
    [ViewsController::class, 'webMaintenance']
);

Route::get(
    '/about-1vine',
    [ViewsController::class, 'about']
);

Route::get(
    '/terms-and-conditions',
    [ViewsController::class, 'terms']
);

Route::get(
    '/privacy-policy',
    [ViewsController::class, 'privacy']
);

Route::get(
    '/work-portfolio',
    [ViewsController::class, 'portfolio']
);

Route::get(
    '/get-quote/{chosenPackage?}',
    [ViewsController::class, 'getQuote']
);

Route::get(
    '/top-links',
    [ViewsController::class, 'links']
);

Route::get('/', function() {
    return 'hi';
});

Route::get(
    '/',
    [ViewsController::class, 'welcome']
);

Route::post('/contacts', [ContactsController::class, 'store'])->name('contacts.store');
Route::post('/quotes', [QuotesController::class, 'store'])->name('quotes.store');
