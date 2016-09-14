<?php

namespace App\Http\Controllers;

use App\models\WorkExamples;
use Illuminate\Routing\Controller as BaseController;
use App\models\Contacts;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SiteController extends BaseController {

    public $pageParameters = [];

    public function showHome() {
        $this->pageParameters['page_name'] = 'home';
        $this->setWorkExamplesLinkParameters(0);
        $this->setSummuryLinkParameters(1);
        return view('site.home', ['pageParameters' => $this->pageParameters]);
    }

    public function showWorkExamples() {
        $this->pageParameters['page_name'] = 'Work examples';
        $this->setHomeLinkParameters(0);
        $this->setSummuryLinkParameters(1);
        $workExamples = WorkExamples::all();
        return view('site.workExamples', [
            'pageParameters' => $this->pageParameters,
            'workExamples' => $workExamples->toArray()
        ]);
    }

    public function showSummary() {
        $this->pageParameters['page_name'] = 'Home';
        $this->setHomeLinkParameters(0);
        $this->setWorkExamplesLinkParameters(1);
        return view('site.summury', ['pageParameters' => $this->pageParameters]);
    }

    public function contacts() {
        $contactsForm = new Contacts;
        return view('site.contacts', [
            'pageParameters' => $this->pageParameters,
            'contactsForm' => $contactsForm
                ]
        );
    }

    public function setHomeLinkParameters($linkPosition) {
        $this->pageParameters['link'][$linkPosition]['route'] = 'home';
        $this->pageParameters['link'][$linkPosition]['html'] = 'Home';
    }

    public function setWorkExamplesLinkParameters($linkPosition) {
        $this->pageParameters['link'][$linkPosition]['route'] = 'workExamples';
        $this->pageParameters['link'][$linkPosition]['html'] = 'Work examples';
    }

    public function setSummuryLinkParameters($linkPosition) {
        $this->pageParameters['link'][$linkPosition]['route'] = '/summury';
        $this->pageParameters['link'][$linkPosition]['html'] = 'Summury';
    }

}
