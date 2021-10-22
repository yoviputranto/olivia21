<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticleCategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\DaftarEventController;
use App\Http\Controllers\Admin\EventCategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\EventJenisController;
use App\Http\Controllers\Admin\JawabanController;
use App\Http\Controllers\user\JawabKomentarController;
use App\Http\Controllers\Admin\PertanyaanController;
use App\Http\Controllers\Admin\KomentarController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\EventController as UserEventController;
use App\Http\Controllers\user\JawabanSayaController;
use App\Http\Controllers\User\TimelineController;
use App\Http\Controllers\User\UserPertanyaanController;
use App\Http\Controllers\User\UserPertanyaanSayaController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', [AdminController::class,'index'])
            ->name('admin.dashboard');
        //article
        Route::resource('articles', ArticleController::class);
        Route::resource('category-articles', ArticleCategoryController::class);
        //event
        Route::resource('events', EventController::class);
        Route::resource('category-events', EventCategoryController::class);
        Route::resource('jenis-events',EventJenisController::class);
        //daftar event
        Route::resource('daftar-events',DaftarEventController::class);
        //pertanyaan
        Route::resource('diskusi', PertanyaanController::class);
        //Jawaban
        Route::resource('jawaban', JawabanController::class);
        //Komentar
        Route::resource('komentar', KomentarController::class);
        //Jawab Komentar
        Route::resource('jawab-komentar', JawabKomentarController::class);
    });

// Users
Route::resource('pertanyaan', UserPertanyaanController::class);
Route::resource('pertanyaan-saya', UserPertanyaanSayaController::class);
Route::resource('timeline', TimelineController::class);
Route::resource('jawaban-saya', JawabanSayaController::class);
Route::resource('jawab-komentar', JawabKomentarController::class);

    Route::get('auth/google/redirect', [LoginController::class,'redirectToGoogle'])->name('login.google');
    Route::get('auth/google/callback', [LoginController::class,'handleGoogleCallback']);
    Route::get('login/facebook/auth/redirect', [LoginController::class,'redirectToFacebook'])->name('login.facebook');
    Route::get('login/facebook/auth/callback', [LoginController::class,'handleFacebookCallback']);

//Frontend
Route::get('/',[FrontendController::class,'index'])->name('beranda');
Route::get('/artikel',[FrontendController::class,'article'])->name('article');
Route::get('/artikel/{slug}',[FrontendController::class,'detailarticle'])->name('detailarticle');
Route::get('/profil/sejarah',[FrontendController::class,'sejarah'])->name('sejarah');
Route::view('/profil/tugas-dan-fungsi','frontend.profil.tugas-fungsi')->name('tugas');
Route::view('/profil/infografis','frontend.profil.infografis')->name('infografis');
Route::view('/profil/struktur','frontend.profil.struktur')->name('struktur');
Route::view('/profil/kontak','frontend.profil.contact')->name('kontak');
Route::get('/event',[FrontendController::class,'event'])->name('event');
Route::get('/event/{id}',[FrontendController::class,'detailevent'])->name('detailevent');
Route::get('/program/webinar',[FrontendController::class,'webinar'])->name('webinar');
Route::get('/diskusi',[FrontendController::class,'diskusi'])->name('timeline');
Route::get('/search',[FrontendController::class,'search'])->name('search');

//dashboard
Route::get('/user/dashboard',[DashboardController::class,'index'])->name('user.index');
Route::get('/user/upload-event',[UserEventController::class,'index'])->name('user.upload');
