<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use App\Models\ScholarshipGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\TenderController;
use App\Models\Tender;
use App\Models\Alumni;
use App\Models\NewsUpdate;
use App\Models\Notification;
use App\Models\ResearchStudy;
use App\Models\Sujaag;
use App\Models\Newsletter;
use DB;
use App\Models\AnnualReport;
use App\Models\Department;
use App\Models\PartnerInstitution;

class PagesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // return view('sef');
    }

    public function home(Request $request)
    {
        $data = NewsUpdate::all();
        return view('pages.home', compact('data'));
    }

    public function contactPage(Request $request)
    {
        return view('pages.contact');
    }

    public function tenderPage(Request $request)
    {
        $data = Tender::all();
        return view('pages.tender', compact('data'));
    }

    // program pages start
    public function altpPage(Request $request)
    {
        return view('pages.program.aaltp');
    }

    public function aaspPage(Request $request)
    {
        return view('pages.program.aasp');
    }

    public function teach_for_changePage(Request $request)
    {
        return view('pages.program.teach-for-change');
    }

    public function fasPage(Request $request)
    {
        return view('pages.program.fas');
    }

    public function functionalizationGovtSchoolBuildingPage(Request $request)
    {
        return view('pages.program.functionalization-govt-school-building');
    }

    public function comprehensiveSchoolPage(Request $request)
    {
        return view('pages.program.comprehensive-school');
    }

    public function installPage(Request $request)
    {
        return view('pages.program.install');
    }
      public function CommunicationAndResearchPage(Request $request)
    {
        $data = Department::all()->where('page_name', 'Communication and Research');
        return view('pages.about.department.communication-and-research', compact('data'));
    }

    public function financeAuditPage(Request $request)
    {
        $data = Department::all()->where('page_name', 'Finance and Audit');
        return view('pages.about.department.finance-and-audit', compact('data'));
    }

    public function generalAdministratorPage(Request $request)
    {
        $data = Department::all()->where('page_name', 'General Administration');
        return view('pages.about.department.general-administrator', compact('data'));
    }

    public function humanResourcePage(Request $request)
    {
        $data = Department::all()->where('page_name', 'Human Resource');
        return view('pages.about.department.human-resource', compact('data'));
    }

    public function informationTechPage(Request $request)
    {
        $data = Department::all()->where('page_name', 'Information Technology');
        return view('pages.about.department.information-tech', compact('data'));
    }

    public function planingPage(Request $request)
    {
        $data = Department::all()->where('page_name', 'Planning And Programs');
        return view('pages.about.department.planing-and-program', compact('data'));
    }

    public function trainingPage(Request $request)
    {
        $data = Department::all()->where('page_name', 'Training and Assessment');
        return view('pages.about.department.training-and-assessment', compact('data'));
    }

    public function monotoringEvaluationPage(Request $request)
    {
        $data = Department::all()->where('page_name', 'Monitoring and Evaluation Cell');
        return view('pages.about.department.monitoring-and-evaluation-cell', compact('data'));
    }
    // department pages end
    // scholarship pages start
    public function scholarshipPage(Request $request)
    {
        $scholorshipGalleries = DB::table('scholarship_galleries')
            ->take(6)
            ->get();
        $scholarship = DB::table('scholarships')
            ->take(1)
            ->get();
        return view('pages.scholarship.scholarship-introduction', compact('scholorshipGalleries', 'scholarship'));
    }

    public function partnerPage(Request $request)
    {
        $partnerInstitutions=PartnerInstitution::all();
        return view('pages.scholarship.partner-institution', compact('partnerInstitutions'));

    }

    public function annoncementsPage(Request $request)
    {
        return view('pages.scholarship.annoncement');
    }

    public function alumniPage(Request $request)
    {
        $data = Alumni::all();
        return view('pages.scholarship.alumni', compact('data'));
    }
    // scholarship pages end
    // e-publication pages start

    public function anunalPage(Request $request)
    {
        $data = AnnualReport::all();
        return view('pages.resource.e-publications.anunal_report', compact('data'));

    }

    public function newsPage(Request $request)
    {
        $data = Newsletter::all();
        return view('pages.resource.e-publications.news_letters', compact('data'));
    }

    public function researchPage(Request $request)
    {
        $data = ResearchStudy::all();
        return view('pages.resource.e-publications.research_studies', compact('data'));
    }

    public function sujaagPage(Request $request)
    {
        $data = Sujaag::all();
        return view('pages.resource.e-publications.sujaag', compact('data'));
    }

    // e-publication pages end
    public function notificationPage(Request $request)
    {
        $data = Notification::all();
        return view('pages.resource.notifications', compact('data'));
    }

    public function carePage(Request $request)
    {
        return view('pages.resource.care-for-life-education');
    }

    public function newsUpdatesPage(Request $request)
    {
        $data = NewsUpdate::all();
        return view('pages.news_and_updates', compact('data'));
    }

    public function schoolDataPage(Request $request)
    {
        return view('pages.school_data');
    }

    // about start
    public function aboutIntroPage(Request $request)
    {
        return view('pages.about.introduction');
    }

    public function educationPage(Request $request)
    {
        return view('pages.about.educational_framework');
    }

    public function organogramPage(Request $request)
    {
        return view('pages.about.organogram');
    }

    public function headOfficePage(Request $request)
    {
        return view('pages.about.management_team.head_office');
    }

    public function regionalOfficePage(Request $request)
    {
        return view('pages.about.management_team.regional_office');
    }

    public function districtOfficePage(Request $request)
    {
        return view('pages.about.management_team.district_office');
    }
    // about end

    // message start
    public function messageMinisterPage(Request $request)
    {
        return view('pages.about.message.message_of_minister');
    }

    public function messageProvincialPage(Request $request)
    {
        return view('pages.about.message.message_of_provincial_minister');
    }

    public function messageDirectorPage(Request $request)
    {
        return view('pages.about.message.message_of_managing_director');
    }


}
