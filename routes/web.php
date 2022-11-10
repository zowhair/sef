<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TenderController;
use App\Http\Controllers\AlumniController;
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
//alumni
Route::resource('/alumnis', AlumniController::class);

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
// department pages start
Route::get('/communication-and-research', [PagesController::class, 'CommunicationAndResearchPage']);
Route::get('/finance-and-audit', [PagesController::class, 'financeAuditPage']);
Route::get('/general-administrator', [PagesController::class, 'generalAdministratorPage']);
Route::get('/human-resource', [PagesController::class, 'humanResourcePage']);
Route::get('/information-tech', [PagesController::class, 'informationTechPage']);
Route::get('/planing-and-program', [PagesController::class, 'planingPage']);
Route::get('/training-and-assessment', [PagesController::class, 'trainingPage']);
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
Route::get('/sujaag', [PagesController::class, 'sujaagPage']);

// e-publications end
Route::get('/notification', [PagesController::class, 'notificationPage']);
Route::get('/news_and_updates', [PagesController::class, 'newsUpdatesPage']);
Route::get('/care-for-life', [PagesController::class, 'carePage']);

Route::get('/school-data', [PagesController::class, 'schoolDataPage']);

// about
Route::get('/introduction', [PagesController::class, 'aboutIntroPage']);
Route::get('/educational_framework', [PagesController::class, 'educationPage']);
Route::get('/organogram', [PagesController::class, 'organogramPage']);


