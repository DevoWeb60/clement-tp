<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\JobOfferController;
use App\Http\Controllers\PageMenuController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SiteInfoController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PageContentController;
use App\Http\Controllers\ContactObjectController;
use App\Http\Controllers\CandidateStateController;

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

require __DIR__ . '/auth.php';

// CLIENT SIDE ROUTES
Route::get("/", [PageController::class, "home"])->name('home');
Route::get("/a-propos", [PageController::class, "about"])->name('about');
Route::get("/services", [PageController::class, "services"])->name('services');
Route::get("/projets", [PageController::class, "projects"])->name('projects');
Route::get("/contact", [PageController::class, "contact"])->name('contact');
Route::post("/contact/", [ContactController::class, "store"])->name('contact.store');
Route::get("/recrutement", [PageController::class, "jobOffer"])->name('jobOffer');
Route::get("/recrutement/{id}", [PageController::class, "offer"])->name('offer');
Route::post('/newsletter', [NewsletterController::class, "store"])->name('newsletter');
Route::post('/postuler', [CandidateController::class, "store"])->name('candidature.store');
Route::get('/politique-de-confidentialite', [PageController::class, "privacy"])->name('privacy');

// ADMIN SIDE ROUTES
Route::middleware(['auth'])->prefix('/dashboard')->group(function () {
    Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');
    Route::resource('utilisateurs', UserController::class)->only('index', 'update');
    Route::resource('coupons', DeliveryController::class)->except('show', 'create');
    Route::resource('menus', PageMenuController::class)->except('show');
    Route::resource('pages', PageContentController::class)->except('show');
    Route::resource('general', SiteInfoController::class)->only('index', 'update');
    Route::resource('offres', JobOfferController::class)->except('show');
    Route::resource('services', ServicesController::class)->except('show', 'create');
    Route::resource('objets', ContactObjectController::class)->except('create', 'show');
    Route::resource('candidature', CandidateController::class)->only('index', 'show', 'update', 'destroy');
    Route::resource('message', ContactController::class)->only('show', 'destroy');
    Route::resource('candidature-status', CandidateStateController::class)->except('edit', 'show');
    Route::resource('newsletters', NewsletterController::class)->only('index', 'destroy');
    Route::get('/newsletters/export', [NewsletterController::class, 'exportToCSV'])->name('newsletters.export');
});
