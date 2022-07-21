<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntegrationsController extends Controller
{
    public function show()
    {

        // return view('pages.home', compact('menu', 'cta'));
    }
    public function showGoogWork()
    {
        $heroData = arrayToObject(config('content.entegrations.google.hero'));

        return view('pages.entegrations.google', compact(
            'heroData'
        ));
    }

    public function showOffice()
    {
        $heroData = arrayToObject(config('content.entegrations.office.hero'));
        return view('pages.entegrations.office', compact(
            'heroData'
        ));
    }
}
