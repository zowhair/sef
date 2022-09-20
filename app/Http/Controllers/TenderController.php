<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenderController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('pages/tender');
    }
    public function tender_home(Request $request) {
        $tender = 'tender';
        return view('frontend.pages.tender');
    }
}
