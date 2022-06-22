<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {

        $heroData = arrayToObject(config('content.hero'));
        $homeBlogData = arrayToObject(config('content.home-blog'));
        $tabsTwo = arrayToObject(config('content.home-tabs-2'));
        $tabsTwoRev = arrayToObject(config('content.home-tabs-2-rev'));
        $icons = arrayToObject(config('content.icons-explanations'));
        $testimonials = arrayToObject(config('content.testimonials-home'));
        $customerLogos = arrayToObject(config('content.home-logos'));

        return view('pages.home', compact(
            'heroData',
            'homeBlogData',
            'tabsTwo',
            'tabsTwoRev',
            'icons',
            'testimonials',
            'customerLogos',
        ));
    }
}
