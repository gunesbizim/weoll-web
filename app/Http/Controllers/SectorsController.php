<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectorsController extends Controller
{
    public function show()
    {
        // return view('pages.home', compact('menu', 'cta'));
    }
    public function showRetail()
    {
        $heroData = arrayToObject(config('content.sectors.retail.hero'));
        $sectionText = arrayToObject(config('content.sectors.retail.text'));
        $sections = arrayToObject(config('content.sectors.retail.sections'));
        $otherSolutions = arrayToObject(config('content.sectors.other-solutions'));

        //dd($sectionText);
        //dd($sectionText->sectionTitle, $sections);
        return view('pages.sectors.retail', compact(
            'heroData',
            'sectionText',
            'sections',
            'otherSolutions'
        ));
    }
    public function showHoldings()
    {
        $heroData = arrayToObject(config('content.sectors.holdings.hero'));
        $sectionText = arrayToObject(config('content.sectors.holdings.text'));
        $sections = arrayToObject(config('content.sectors.holdings.sections'));
        $otherSolutions = arrayToObject(config('content.sectors.other-solutions'));

        //dd($sectionText);
        //dd($sectionText->sectionTitle, $sections);
        return view('pages.sectors.holdings', compact(
            'heroData',
            'sectionText',
            'sections',
            'otherSolutions'
        ));
    }
    public function showProductionSec()
    {
        $heroData = arrayToObject(config('content.sectors.production.hero'));
        $sectionText = arrayToObject(config('content.sectors.production.text'));
        $sections = arrayToObject(config('content.sectors.production.sections'));
        $otherSolutions = arrayToObject(config('content.sectors.other-solutions'));

        //dd($sectionText);
        //dd($sectionText->sectionTitle, $sections);
        return view('pages.sectors.production', compact(
            'heroData',
            'sectionText',
            'sections',
            'otherSolutions'
        ));
    }
    public function showDigital()
    {
        $heroData = arrayToObject(config('content.sectors.digital.hero'));
        $sectionText = arrayToObject(config('content.sectors.digital.text'));
        $sections = arrayToObject(config('content.sectors.digital.sections'));
        $otherSolutions = arrayToObject(config('content.sectors.other-solutions'));

        //dd($sectionText);
        //dd($sectionText->sectionTitle, $sections);
        return view('pages.sectors.digital', compact(
            'heroData',
            'sectionText',
            'sections',
            'otherSolutions'
        ));
    }
}
