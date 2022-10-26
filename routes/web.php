<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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




