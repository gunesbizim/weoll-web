<?php

namespace App\Http\Controllers;


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
    public function showDiscoverWeoll()
    {
        $discoverHero = arrayToObject(config('content.discoverWeoll.discover-hero'));
        $discoverWeollBoxes = arrayToObject(config('content.discoverWeoll.cont-boxes'));
        $sections = arrayToObject(config('content.discoverWeoll.sections'));
        $possibleTabs = arrayToObject(config('content.discoverWeoll.possibleTabs'));
        return view('pages.discover-weoll', compact(
            'discoverHero',
            'discoverWeollBoxes',
            'sections',
            'possibleTabs'
        ));
    }

    public function showWhoWeAre()
    {
        $heroData = arrayToObject(config('content.whoWeAre.hero'));
        $sections = arrayToObject(config('content.whoWeAre.sections-1'));
        $sectionsAfter = arrayToObject(config('content.whoWeAre.sections-2'));
        $video = arrayToObject(config('content.whoWeAre.video'));
        return view('pages.who-we-are', compact(
            'heroData',
            'sections',
            'sectionsAfter',
            'video'
        ));
    }

    public function showPackages()
    {
        $packages = arrayToObject(config('content.packages'));
        //dd($packages);
        return view('pages.packages', compact(
            'packages'
        ));
    }

    public function showTryNow()
    {
        $footerform = false;
        return view('pages.try-now', compact('footerform'));
    }
}
