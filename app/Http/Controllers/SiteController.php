<?php

namespace App\Http\Controllers;

use App\models\WorkExamples;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SiteController extends BaseController {

    public function showHome() {
        $pageParameters['page_name'] = 'home';
        $pageParameters['link'][0]['route'] = 'workExamples';
        $pageParameters['link'][0]['html'] = 'Work examples';
        $pageParameters['link'][1]['route'] = '/summury';
        $pageParameters['link'][1]['html'] = 'Summury';         
        return view('site.home', ['pageParameters' => $pageParameters]);
    }

    public function showWorkExamples() {
        $pageParameters['page_name'] = 'Work examples';
        $pageParameters['link'][0]['route'] = 'home';
        $pageParameters['link'][0]['html'] = 'Home';
        $pageParameters['link'][1]['route'] = '/summury';
        $pageParameters['link'][1]['html'] = 'Summury';          
        $workExamples = WorkExamples::all();

        return view('site.workExamples', [
            'pageParameters' => $pageParameters,
            'workExamples' => $workExamples
        ]);
    }

    public function showSummary() {
        $pageParameters['page_name'] = 'Home';
        $pageParameters['link'][0]['route'] = 'home';
        $pageParameters['link'][0]['html'] = 'Home';      
        $pageParameters['link'][1]['route'] = 'workExamples';
        $pageParameters['link'][1]['html'] = 'Work examples';        
        return view('site.summury', ['pageParameters' => $pageParameters]);
    }

    public function getHomeLinkParameters() {
        $pageParameters['page_name'] = 'home';
        $pageParameters['link'][0]['route'] = 'workExamples';
        $pageParameters['link'][0]['html'] = 'Work examples';
        return $pageParameters;
    }

}
