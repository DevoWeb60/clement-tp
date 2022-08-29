<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

// CLIENT SIDE ROUTES
Route::get("/", [PageController::class, "home"])->name('home');
Route::get("/a-propos", [PageController::class, "about"])->name('about');
Route::get("/services", [PageController::class, "services"])->name('services');
Route::get("/projets", [PageController::class, "projects"])->name('projects');
Route::get("/contact", [PageController::class, "contact"])->name('contact');
Route::get("/recrutement", [PageController::class, "jobOffer"])->name('jobOffer');
Route::get("/recrutement/1", [PageController::class, "offer"])->name('offer');


// ADMIN SIDE ROUTES
Route::prefix('/admin')->group(function () {
    Route::resource('utilisateurs', App\Http\Controllers\UserController::class)->except('edit', 'show', 'destroy');
    Route::resource('coupons', App\Http\Controllers\DeliveryController::class)->except('edit', 'show');
    Route::resource('menus', App\Http\Controllers\PageMenuController::class)->except('edit', 'show');
    Route::resource('pages', App\Http\Controllers\PageContentController::class)->except('edit', 'show');
    Route::resource('general', App\Http\Controllers\SiteInfoController::class)->except('edit', 'show');
    Route::resource('offres', App\Http\Controllers\JobOfferController::class)->except('edit', 'show');
    Route::resource('services', App\Http\Controllers\ServicesController::class)->except('edit', 'show');
    Route::resource('objets', App\Http\Controllers\ContactObjectController::class)->except('edit', 'show');
    Route::resource('candidature', App\Http\Controllers\CandidateController::class)->except('edit');
    Route::resource('messagerie', App\Http\Controllers\ContactController::class)->except('edit');
    Route::resource('candidature-status', App\Http\Controllers\CandidateStateController::class)->except('edit', 'show');
});
