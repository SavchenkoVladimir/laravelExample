<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SiteController extends BaseController
{
    public function showHome(){
        $pageParameters['page_name'] = 'Home';
        return view('site.home', ['pageParameters' => $pageParameters]);
    }
}
