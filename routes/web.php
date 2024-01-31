<?php

use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\GejaladashboardController;
use App\Http\Controllers\LandingpagePenyakitController;
use App\Http\Controllers\PenyakitDashboardController;
use App\Http\Controllers\PenyakitLpController;
use App\Http\Controllers\RuleDashboardController;
use App\Models\gejaladashboard;
use App\Models\landingpagePenyakit;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('LandingPage.index');
// });
Route::get('/login', function () {
    return view('login');
});
// Route::get('/penyakit', function () {
//     return view('LandingPage.penyakit');
// });
// Route::get('/detail-penyakit', function () {
//     return view('LandingPage.detailPenyakit');
// });
Route::get('/dashboard', function () {
    return view('Admin.index');
});
Route::get('/konsultasi', function () {
    return view('LandingPage.Rule.index');
});
// Route::get('/diagnosis1', function () {
//     return view('LandingPage.Rule.index_test');
// });
// Route::get('/admin-gejala', function () {
//     return view('Admin.Gejala.index');
// });
// Route::get('/admin-penyakit', function () {
//     return view('Admin.Penyakit.index');
// });
// Route::get('/detail-penyakit', function () {
//     return view('Admin.Penyakit.detail');
// });
// Route::get('/admin-rule', function () {
//     return view('Admin.Rule.index');
// });

Route::resource('admin-gejala', GejaladashboardController::class)->parameter('admin-gejala', 'gejaladashboard');
Route::resource('admin-penyakit', PenyakitDashboardController::class)->parameter('admin-penyakit', 'penyakitDashboard');
Route::resource('admin-rule', RuleDashboardController::class)->parameter('admin-rule','ruleDashboard');

Route::resource('home', PenyakitLpController::class)->parameter('home','landingpagePenyakit');
Route::resource('penyakit', LandingpagePenyakitController::class)->parameter('penyakit','LpPenyakit');

Route::get('/diagnosis', [DiagnosisController::class, 'index'])->name('diagnosis');
Route::post('/diagnosis', [DiagnosisController::class, 'diagnose'])->name('diagnose');
// Route::post('diagnose', [DiagnosisController::class, 'gejalaList']);
        // Route::resource('diagnosis', DiagnosisController::class)->parameter('diagnosis','gejalaList');
