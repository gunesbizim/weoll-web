<?php

//use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Spatie\Browsershot\Browsershot;
use Spatie\Crawler\Crawler;
use Spatie\Sitemap\Tags\Url;
use Spatie\Sitemap\SitemapGenerator;

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
    Route::get('/ucretsiz-dene', 'showTryNow')->name('ucretsiz-dene');
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

// Route::get('generate-sitemap', function () {


//     $path = public_path() . "/sitemap.xml";
//     $dom = request()->root();

//     $browsershot = (new Browsershot())->noSandbox()->ignoreHttpsErrors();

//     $sitemap = SitemapGenerator::create("http://nginx/")
//         ->configureCrawler(function (Crawler $crawler) use ($browsershot) {
//             // dd($crawler, $browsershot);
//             // $crawler->setBrowsershot($browsershot);
//         })
//         ->hasCrawled(function (Url $url) use ($dom) {
//             // dd($url);
//             // overwriting the base nginx url in our sitemap. Without this the url display in the xml will look something like this: https://nginx/uri
//             $uri = implode('/', $url->segments());
//             $url->setUrl($dom . '/' . $uri);
//             return $url;
//         })
//         ->getSitemap()
//         // adding the base slug routes
//         // ->add(Url::create('/courses')->setPriority(0.9))
//     ;

//     // Contributor::toSitemap()->each(function(Contributor $model) use (&$sitemap){
//     //     $sitemap->add(Url::create("/contributor/{$model->getSlug()}"));
//     // });

//     // for some reasons laravel sitemap can only detect static pages. This is a workaround to add slug routes
//     // $courses = Course::all();
//     // $courses->each(function ($course) use (&$sitemap){
//     //     $sitemap->add('/courses/' . $course->slug );
//     // });
//     $sitemap->writeToFile($path);

//     $xml = file_get_contents($path);
//     // $xmlObject = simplexml_load_string($xmlString);
//     return response($xml, 200)->header('Content-Type', 'application/xml');
// });

Route::get('/404', function () {
    // dd(find_function('response'));
    return response()->view('errors.404', [], 404);
})->name('404');
