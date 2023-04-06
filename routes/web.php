<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CaseStudy\Home;
use App\Http\Livewire\CaseStudy\VertexPay;
use App\Http\Livewire\CaseStudy\Qxp;
use App\Http\Livewire\CaseStudy\NollaBank;
use App\Http\Livewire\CaseStudy\PlanYourMeds;
use App\Http\Livewire\AboutMe;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->name('case-study.home');
Route::get('/case-study-vertexpay', VertexPay::class)->name('case-study.vertex-pay');
Route::get('/case-study-qxp', Qxp::class)->name('case-study.qxp');
Route::get('/case-study-nolla-bank', NollaBank::class)->name('case-study.nolla-bank');
Route::get('/case-study-plan-your-meds', PlanYourMeds::class)->name('case-study.plan-your-meds');
Route::get('/about-me', AboutMe::class)->name('about-me');

// Route::get('/case-study-qxp', function () {
//     return view('case-study.qxp');
// });
// Route::get('/case-study-vertexpay', function () {
//     return view('case-study.vertexpay');
// });