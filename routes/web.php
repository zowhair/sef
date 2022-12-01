<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TenderController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\NewsUpdatesController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ResearchStudyController;
use App\Http\Controllers\SujaagController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\ScholarshipGalleryController;
use App\Http\Controllers\AnnualReportController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\PartnerInstitutionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//sef website admin panel

Route::get('/dashboard', function () {
    return view('/dashboard');
})->middleware(['auth'])->name('dashboard');


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('login');
Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard');
Route::post("/logout", [App\Http\Controllers\Admin\AdminController::class, 'logout'])->name("logout");
//tender
Route::resource('/tenders', TenderController::class);
Route::get('/files/{id}', [App\Http\Controllers\TenderController::class, 'download'])->name('files');
Route::get('/tenders/edit/{id}', [TenderController::class, 'edit']);
Route::get('/tenders/delete/{id}', [TenderController::class, 'destroy']);
Route::post('/tenders/update', [TenderController::class, 'update']);

//alumni
Route::resource('/alumnis', AlumniController::class);
Route::get('/alumnis/delete/{id}', [AlumniController::class, 'destroy']);
Route::get('/alumnis/edit/{id}', [AlumniController::class, 'edit']);
Route::post('/alumnis/update', [AlumniController::class, 'update']);

// news and updates
Route::resource('/news-update', NewsUpdatesController::class);
Route::get('/news-update/delete/{id}', [NewsUpdatesController::class, 'destroy']);
Route::get('/news-update/edit/{id}', [NewsUpdatesController::class, 'edit']);
Route::post('/news-update/update', [NewsUpdatesController::class, 'update']);

// notification
Route::resource('/notifications', NotificationController::class);
Route::get('/notifications/delete/{id}', [NotificationController::class, 'destroy']);
Route::get('/notifications/edit/{id}', [NotificationController::class, 'edit']);
Route::post('/notifications/update', [NotificationController::class, 'update']);

// Research Studies
Route::resource('/research-studies', ResearchStudyController::class);
Route::get('/research-studies/delete/{id}', [ResearchStudyController::class, 'destroy']);
Route::get('/research-studies/edit/{id}', [ResearchStudyController::class, 'edit']);
Route::post('/research-studies/update', [ResearchStudyController::class, 'update']);

// sujaag
Route::resource('/sujaag', SujaagController::class);
Route::get('/sujaag/delete/{id}', [SujaagController::class, 'destroy']);
Route::get('/sujaag/edit/{id}', [SujaagController::class, 'edit']);
Route::post('/sujaag/update', [SujaagController::class, 'update']);

// newsletter
Route::resource('/newsletters', NewsletterController::class);
Route::get('/newsletters/delete/{id}', [NewsletterController::class, 'destroy']);
Route::get('/newsletters/edit/{id}', [NewsletterController::class, 'edit']);
Route::post('/newsletters/update', [NewsletterController::class, 'update']);

// annual Report
Route::resource('/annual-report', AnnualReportController::class);
Route::get('/annual-report/delete/{id}', [AnnualReportController::class, 'destroy']);
Route::get('/annual-report/edit/{id}', [AnnualReportController::class, 'edit']);
Route::post('/annual-report/update', [AnnualReportController::class, 'update']);

//department
Route::resource('/department', DepartmentController::class);
Route::get('/department/delete/{id}', [DepartmentController::class, 'destroy']);
Route::get('/department/edit/{id}', [DepartmentController::class, 'edit']);
Route::post('/department/update', [DepartmentController::class, 'update']);

//department category
Route::get('/department-category', [DepartmentController::class, 'category']);
Route::get('/department-category/delete/{id}', [DepartmentController::class, 'delete']);
Route::post('/department-category/add', [DepartmentController::class, 'add']);

//Publication
Route::resource('/publication', PublicationController::class);
Route::get('/publication/delete/{id}', [PublicationController::class, 'destroy']);
Route::get('/publication/edit/{id}', [PublicationController::class, 'edit']);
Route::post('/publication/update', [PublicationController::class, 'update']);

//publication category
Route::get('/publication-category', [PublicationController::class, 'category']);
Route::get('/publication-category/delete/{id}', [PublicationController::class, 'delete']);
Route::post('/publication-category/add', [PublicationController::class, 'add']);

//sef website front end site

Route::get('/', [PagesController::class, 'home']);
Route::get('/contact', [PagesController::class, 'contactPage']);
Route::get('/tender', [PagesController::class, 'tenderPage']);
// program pages start
Route::get('/altp', [PagesController::class, 'altpPage']);
Route::get('/aasp', [PagesController::class, 'aaspPage']);
Route::get('/teach-for-change', [PagesController::class, 'teach_for_changePage']);
Route::get('/fas', [PagesController::class, 'fasPage']);
Route::get('/functionalization-govt-school-building', [PagesController::class, 'functionalizationGovtSchoolBuildingPage']);
Route::get('/comprehensive-school', [PagesController::class, 'comprehensiveSchoolPage']);
Route::get('/initiative-install', [PagesController::class, 'installPage']);
// program pages end

Route::get('/monitoring-and-evaluation-cell', [PagesController::class, 'monotoringEvaluationPage']);
// department pages end
// scholarship pages start
Route::get('/scholarship', [PagesController::class, 'scholarshipPage']);
Route::get('/partner-institution', [PagesController::class, 'partnerPage']);
Route::get('/annoncements', [PagesController::class, 'annoncementsPage']);
Route::get('/alumni', [PagesController::class, 'alumniPage']);
// scholarship pages end
// e-publications start

Route::get('/anunal_report', [PagesController::class, 'anunalPage']);
Route::get('/news_letters', [PagesController::class, 'newsPage']);
Route::get('/research_studies', [PagesController::class, 'researchPage']);
Route::get('/sujaags', [PagesController::class, 'sujaagPage']);

// e-publications end
Route::get('/notification', [PagesController::class, 'notificationPage']);
Route::get('/news_and_updates', [PagesController::class, 'newsUpdatesPage']);
Route::get('/care-for-life', [PagesController::class, 'carePage']);

Route::get('/school-data', [PagesController::class, 'schoolDataPage']);

// about
Route::get('/introduction', [PagesController::class, 'aboutIntroPage']);
Route::get('/educational_framework', [PagesController::class, 'educationPage']);
Route::get('/organogram', [PagesController::class, 'organogramPage']);
Route::get('/head-office', [PagesController::class, 'headOfficePage']);
Route::get('/regional-office', [PagesController::class, 'regionalOfficePage']);
Route::get('/district-office', [PagesController::class, 'districtOfficePage']);


Route::resource('/scholarships', ScholarshipController::class);
Route::get('/scholarships/delete/{id}', [ScholarshipController::class, 'destroy']);
Route::get('/scholarships/edit/{id}', [ScholarshipController::class, 'edit']);
Route::post('/scholarships/update', [ScholarshipController::class, 'update']);


Route::resource('/galleries',ScholarshipGalleryController::class);
Route::get('/galleries/delete/{id}', [ScholarshipGalleryController::class, 'destroy']);
Route::get('/galleries/edit/{id}', [ScholarshipGalleryController::class, 'edit']);
Route::post('/galleries/update', [ScholarshipGalleryController::class, 'update']);

// message
Route::get('/message-of-minister', [PagesController::class, 'messageMinisterPage']);    
Route::get('/message-of-provincial-minister', [PagesController::class, 'messageProvincialPage']);    
Route::get('/message-of-managing-director', [PagesController::class, 'messageDirectorPage']);    

//partner institution
Route::resource('/partner-institutions',PartnerInstitutionController::class);
Route::get('/partner-institutions/delete/{id}', [PartnerInstitutionController::class, 'destroy']);
Route::get('/partner-institutions/edit/{id}', [PartnerInstitutionController::class, 'edit']);
Route::post('/partner-institutions/update', [PartnerInstitutionController::class, 'update']);

//contact us page

Route::get('contact-us',function () {
    return view('/pages.contact_us.contact_us');
});