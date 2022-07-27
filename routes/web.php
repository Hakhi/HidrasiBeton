<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MeasurementController;
use App\Http\Controllers\userdashboardController;
use App\Http\Controllers\PrediksiController;
use Illuminate\Support\Facades\Auth;
use App\Models\Measurement;
use App\Models\User;

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

Route::middleware('auth')->group(function () {
    // controling Route 
    Route::get('prediksi', [PrediksiController::class, 'tampilanForm']);
    Route::post('prediksi', [PrediksiController::class, 'prediksi'])->name('inputprediksi');
    Route::get('hasilprediksi', [PrediksiController::class, 'hasilPrediksi']);

    Route::get('dashboard', [MeasurementController::class, 'dashboard']);
    Route::get('measurement', [MeasurementController::class, 'measurement']);
    Route::get('measurement/excel', [MeasurementController::class, 'exportMeasurement']);

    Route::get('layout', function () {
        return view('dashboard.layout');
    });
});


//User Registration
Route::group(['middleware' => ['auth', 'checkrole:admin']], function () {
    Route::get('admindashboard', [userviewController::class, 'index']);
    Route::get('registration', [RegistrationController::class, 'create'])->name('register');
    Route::post('registration', [RegistrationController::class, 'store'])->name('register');
});

Route::group(['middleware' => ['auth', 'checkrole:user']], function () {
    Route::get('profiledashboard', [userdashboardController::class, 'index']);
});

Route::middleware('guest')->group(function () {
    //Login Page
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login');
});

//Logout Route
Route::post('logout', LogoutController::class)->name('logout')->middleware('auth');

// Landing Page Web
Route::get('/', function () {
    return view('landingPage.login');
});
Route::get('home', function () {
    return view('landingPage.login');
});
