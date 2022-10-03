<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // return view('sef');
    }
    public function home(Request $request) {
        return view('pages.home');
    }
    public function contactPage(Request $request) {
        return view('pages.contact');
    }   
}
