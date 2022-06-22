<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolutionsController extends Controller
{
    public function show()
    {

        // return view('pages.home', compact('menu', 'cta'));
    }

    public function showHumanRes()
    {
        $heroData = arrayToObject(config('content.solutions.humanRes.hero'));
        $sections = arrayToObject(config('content.solutions.humanRes.sections'));
        $solutionsTab = arrayToObject(config('content.solutions.humanRes.tabs'));
        $otherSolutions = arrayToObject(config('content.solutions.other-solutions'));

        return view('pages.solutions.humanres', compact(
            'heroData',
            'sections',
            'solutionsTab',
            'otherSolutions'
        ));
    }

    public function showInternalCom()
    {

        $heroData = arrayToObject(config('content.solutions.internalCom.hero'));
        $sections = arrayToObject(config('content.solutions.internalCom.sections'));
        $solutionsTab = arrayToObject(config('content.solutions.internalCom.tabs'));

        $otherSolutions = arrayToObject(config('content.solutions.other-solutions'));

        return view('pages.solutions.internalCom', compact(
            'heroData',
            'sections',
            'otherSolutions',
            'solutionsTab'
        ));
    }
    public function showInformationMan()
    {
        $heroData = arrayToObject(config('content.solutions.informationMan.hero'));

        $sections = arrayToObject(config('content.solutions.informationMan.sections'));
        $solutionsTab = arrayToObject(config('content.solutions.informationMan.tabs'));

        $otherSolutions = arrayToObject(config('content.solutions.other-solutions'));

        return view('pages.solutions.informationMan', compact(
            'heroData',
            'sections',
            'otherSolutions'
        ));
    }

    public function showEnterpriseRes()
    {

        $heroData = arrayToObject(config('content.solutions.enterpriseRes.hero'));

        $sections = arrayToObject(config('content.solutions.enterpriseRes.sections'));
        $otherSolutions = arrayToObject(config('content.solutions.other-solutions'));

        return view('pages.solutions.enterpriseRes', compact(
            'heroData',
            'sections',
            'otherSolutions'
        ));
    }
}
