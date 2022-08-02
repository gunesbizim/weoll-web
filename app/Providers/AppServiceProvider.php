<?php

namespace App\Providers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
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
        if (!Collection::hasMacro('paginate')) {

            Collection::macro(
                'paginate',
                function ($perPage = 15, $page = null, $options = []) {
                    $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
                    return (new LengthAwarePaginator(
                        $this->forPage($page, $perPage),
                        $this->count(),
                        $perPage,
                        $page,
                        $options
                    ))
                        ->withPath('');
                }
            );
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        $data = config('content.header');
        $footer = arrayToObject(config('content.footer'));
        $menu = $data['menu'];
        $cta = $data['cta'];

        $socialMedias = arrayToObject(config('content.social-medias'));
        $contactIcons = arrayToObject(config('content.contact-icons'));
        View::share('menu', $menu);
        View::share('cta', $cta);
        View::share('socialMedias', $socialMedias);
        View::share('contactIcons', $contactIcons);
        View::share('footer', $footer);
    }
}
