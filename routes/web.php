<?php

//use App\Http\Controllers\HomeController;
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
// use App\Http\Controllers\HomeController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'show');
    Route::get('/sectors', 'showSectors')->name('sectors');
    Route::get('/entegrations', 'showEntegrations')->name('entegrations');
    Route::get('/discover-weoll', 'showDiscoverWeoll')->name('discover-weoll');
    Route::get('/who-are-we', 'showWhoWeAre')->name('who-are-we');
    Route::get('/success-stories', 'showSuccessStories')->name('success-stories');
    Route::get('/packages', 'showPackages')->name('packages');
});

Route::controller(SolutionsController::class)->prefix('solutions')->group(function () {

    Route::get('/human-resources-processes', 'showHumanRes')->name('human-resources-processes');
    Route::get('/internal-communication-processes', 'showInternalCom')->name('internal-communication-processes');
    Route::get('/information-management-processes', 'showInformationMan')->name('information-management-processes');
    Route::get('/enterprise-resource-management-processes', 'showEnterpriseRes')->name('enterprise-resource-management-processes');
});

Route::controller(SectorsController::class)->prefix('sectors')->group(function () {
    Route::get('/retail-sector', 'showRetail')->name('retail-sector');
    Route::get('/holdings', 'showHoldings')->name('holdings');
    Route::get('/production-sector', 'showProductionSec')->name('production-sector');
    Route::get('/digital-centralized', 'showDigital')->name('digital-centralized');
});
Route::controller(EntegrationsController::class)->prefix('entegrations')->group(function () {
    Route::get('/google-workspace', 'showGoogWork')->name('google-workspace');
    Route::get('/office-365', 'showOffice')->name('office-365');
});

Route::controller(EntegrationsController::class)->prefix('entegrations')->group(function () {
    Route::get('/google-workspace', 'showGoogWork')->name('google-workspace');
    Route::get('/office-365', 'showOffice')->name('office-365');
});

Route::controller(SuccessController::class)->prefix('success-stories')->group(function () {
    Route::get('/toyzz-shop', 'showToyzzShop')->name('toyzz-shop');
    Route::get('/ascelik', 'showAscelik')->name('ascelik');
});
