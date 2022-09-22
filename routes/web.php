<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenderController;
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

Route::get('/', function () {
    return view('frontend.layouts.home');
});
Route::get('/alumni',function(){
    return view('frontend.pages.scholarship.alumni');
});
Route::get('/notification',function(){
    return view('frontend.pages.notification');
});

Route::get('/tender_test', [TenderController::class, 'tender_test'])->name('tender_test');
Route::get('/test_page', [TenderController::class, 'test_page'])->name('test_page');

Route::get('/tender', [TenderController::class, 'tender_home'])->name('tender');