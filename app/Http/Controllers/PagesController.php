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
    public function tenderPage(Request $request) {
        return view('pages.tender');
    }
    public function altpPage(Request $request) {
        return view('pages.program.aaltp');
    }
    public function aaspPage(Request $request) {
        return view('pages.program.aasp');
    }
    public function teach_for_changePage(Request $request) {
        return view('pages.program.teach-for-change');
    }
    public function fasPage(Request $request) {
        return view('pages.program.fas');
    }
    public function functionalizationGovtSchoolBuildingPage(Request $request) {
        return view('pages.program.functionalization-govt-school-building');
    }
    public function comprehensiveSchoolPage(Request $request) {
        return view('pages.program.comprehensive-school');
    }
    public function installPage(Request $request) {
        return view('pages.program.install');
    }
}
