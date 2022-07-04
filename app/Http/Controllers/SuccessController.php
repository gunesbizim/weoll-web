<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessController extends Controller
{
    public function show()
    {
    }
    public function showToyzzShop()
    {
        $successHero = arrayToObject(config('content.successStories.toyzzshop.hero'));
        $successSections = arrayToObject(config('content.successStories.toyzzshop.success-sections'));
        return view('pages.success-stories.toyzzshop', compact(
            'successHero',
            'successSections'
        ));
    }
    public function showAscelik()
    {
        $successHero = arrayToObject(config('content.successStories.ascelik.hero'));
        $successSections = arrayToObject(config('content.successStories.ascelik.success-sections'));
        return view('pages.success-stories.ascelik', compact(
            'successHero',
            'successSections'
        ));
    }
}
