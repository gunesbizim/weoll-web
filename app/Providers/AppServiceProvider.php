<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

        foreach (glob(app_path('Helpers') . '/*.php') as &$file) {
            require_once($file);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $data = config('content.header');
        $menu = $data['menu'];
        $cta = $data['cta'];

        $socialMedias = arrayToObject(config('content.social-medias'));
        $contactIcons = arrayToObject(config('content.contact-icons'));
        View::share('menu', $menu);
        View::share('cta', $cta);
        View::share('socialMedias', $socialMedias);
        View::share('contactIcons', $contactIcons);
    }
}
