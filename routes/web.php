<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\DiagnosticController;
use App\Http\Controllers\Admin\DiseaseController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\GoalController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\NurseController;
use App\Http\Controllers\Admin\OptionsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Front\ContactsController;
use App\Http\Controllers\Front\DiagnosticsController;
use App\Http\Controllers\Front\DucumentsController;
use App\Http\Controllers\Front\FaqsController;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\InformationController;
use App\Http\Controllers\Front\MedicalController;
use App\Http\Controllers\Front\NursesController;
use App\Http\Controllers\Front\OfferController;
use App\Http\Controllers\Front\OurTeamController;
use App\Http\Controllers\Front\PartnersController;
use App\Http\Controllers\Front\TreatmentController;
use UniSharp\Laravel\LaravelFilemanager\Lfm;



Auth::routes();

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['role:admin'])->prefix('dashboard')->group(static function () {
    Route::get('/', [HomeController::class, 'index'])->name('homeAdmin');
    Route::resources([
        'slider' => SliderController::class,
        'page' => PageController::class,
        'disease' => DiseaseController::class,
        'diagnostic' => DiagnosticController::class,
        'patient' => PatientController::class,
        'doctor' => DoctorController::class,
        'nurse' => NurseController::class,
        'partner' => PartnerController::class,
        'goal' => GoalController::class,
        'team' => TeamController::class,
        'faq' => FaqController::class,
        'content' => ContentController::class,
        'category' => CategoryController::class,
        'document' => DocumentController::class,
        'options' => OptionsController::class
    ]);
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('/', [IndexController::class, 'homepage'])->name('/');
        Route::get('treatment', [TreatmentController::class, 'treatment'])->name('treatment');
        Route::get('diagnostics', [DiagnosticsController::class, 'diagnostics'])->name('diagnostics');
        Route::get('information', [InformationController::class, 'information'])->name('information');
        Route::get('doctor', [MedicalController::class, 'doctor'])->name('doctor');
        Route::get('nurse', [NursesController::class, 'nurse'])->name('nurse');
        Route::get('partners', [PartnersController::class, 'partners'])->name('partners');
        Route::get('ourTeam', [OurTeamController::class, 'ourTeam'])->name('ourTeam');
        Route::get('offer', [OfferController::class, 'offer'])->name('offer');
        Route::get('documents/{id?}', [DucumentsController::class, 'documents'])->name('documents');
        Route::get('faq', [FaqsController::class, 'faq'])->name('faq');
        Route::get('contacts', [ContactsController::class, 'contacts'])->name('contacts');

        
 });



Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    UniSharp\LaravelFilemanager\Lfm::routes();
});


