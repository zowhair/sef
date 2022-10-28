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
    // program pages start
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
    // program pages end
    // department pages start
    public function CommunicationAndResearchPage(Request $request) {
        return view('pages.about.department.communication-and-research');
    }
    public function financeAuditPage(Request $request) {
        return view('pages.about.department.finance-and-audit');
    }
    public function generalAdministratorPage(Request $request) {
        return view('pages.about.department.general-administrator');
    }
    public function humanResourcePage(Request $request) {
        return view('pages.about.department.human-resource');
    }
    public function informationTechPage(Request $request) {
        return view('pages.about.department.information-tech');
    }
    public function planingPage(Request $request) {
        return view('pages.about.department.planing-and-program');
    }
    public function trainingPage(Request $request) {
        return view('pages.about.department.training-and-assessment');
    }
    public function monotoringEvaluationPage(Request $request) {
        return view('pages.about.department.monitoring-and-evaluation-cell');
    }
    // department pages end
    // scholarship pages start
    public function scholarshipPage(Request $request) {
        return view('pages.scholarship.scholarship-introduction');
    }
    public function partnerPage(Request $request) {
        return view('pages.scholarship.partner-institution');
    }
    public function annoncementsPage(Request $request) {
        return view('pages.scholarship.annoncement');
    }
    public function alumniPage(Request $request) {
        return view('pages.scholarship.alumni');
    }
    // scholarship pages end
}
