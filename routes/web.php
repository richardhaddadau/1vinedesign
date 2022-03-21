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
    '/download-freebies-a3-inspirational-poster',
    [ViewsController::class, 'downloadPoster']
);

Route::get(
    '/free-inspirational-poster',
    [ViewsController::class, 'freePoster']
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
    [ViewsController::class, 'ecommerce']
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
