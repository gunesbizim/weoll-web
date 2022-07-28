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


//Redirect try_now to ucretsiz-dene
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'show');
    Route::get('/sektorler', 'showSectors')->name('sectors');
    Route::get('/entegrasyonlar', 'showEntegrations')->name('entegrations');
    Route::get('/weollu-kesfet', 'showDiscoverWeoll')->name('discover-weoll');
    Route::get('/biz-kimiz', 'showWhoWeAre')->name('who-are-we');
    Route::get('/basari-hikayesi', 'showSuccessStories')->name('success-stories');
    Route::get('/paketler', 'showPackages')->name('packages');
    Route::get('/ucretsiz-dene', 'showTryNow')->name('try-now');
    Route::get('/tesekkurler', 'showThanks')->name('thanks');
});
//done
Route::controller(SolutionsController::class)->prefix('cozum')->group(function () {

    Route::get('/insan-kaynaklari-surecleri', 'showHumanRes')->name('human-resources-processes');
    Route::get('/kurum-ici-iletisim-surecleri', 'showInternalCom')->name('internal-communication-processes');
    Route::get('/bilgi-yonetimi-surecleri', 'showInformationMan')->name('information-management-processes');
    Route::get('/kurumsal-kaynak-yonetimi-surecleri', 'showEnterpriseRes')->name('enterprise-resource-management-processes');
});
//Done
Route::controller(SectorsController::class)->prefix('sektor')->group(function () {
    Route::get('/perakende-sektoru', 'showRetail')->name('retail-sector');
    Route::get('/grup-sirketleri-holdingler', 'showHoldings')->name('holdings');
    Route::get('/uretim-sektoru', 'showProductionSec')->name('production-sector');
    Route::get('/dijitali-odagina-alan-kurumlar', 'showDigital')->name('digital-centralized');
});

//Done
Route::controller(EntegrationsController::class)->prefix('entegrasyon')->group(function () {
    Route::get('/google-workspace', 'showGoogWork')->name('google-workspace');
    Route::get('/office-365', 'showOffice')->name('office-365');
});

//Done
Route::controller(SuccessController::class)->prefix('basari-hikayesi')->group(function () {
    Route::get('/toyzzshop', 'showToyzzShop')->name('toyzz-shop');
    Route::get('/ascelik', 'showAscelik')->name('ascelik');
});

Route::get('/404', function () {
    return view('errors.404');
})->name('404');
