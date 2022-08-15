<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\CarrerAdviceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\MdMessageController;
use App\Http\Controllers\OverseasJobsController;
use App\Http\Controllers\RecruitmentServicesController;
use App\Http\Controllers\StatementController;
use App\Http\Controllers\StudentApplicationFormController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TrainingController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('contact', ContactController::class);
Route::resource('activities', ActivitiesController::class);
Route::resource('employer', EmployerController::class);
Route::resource('cv', CvController::class);
Route::resource('training', TrainingController::class);
Route::resource('student_application_form', StudentApplicationFormController::class);
Route::resource('carrer_advice', CarrerAdviceController::class);
Route::resource('recruitment_services', RecruitmentServicesController::class);
Route::resource('country', CountryController::class);
Route::resource('overseas_jobs', OverseasJobsController::class);
Route::resource('about', AboutController::class);
Route::resource('md', MdMessageController::class);
Route::resource('statement', StatementController::class);
Route::resource('team', TeamController::class);



Route::get('/set_eng', [LangController::class, 'index'])->name('set_eng');
Route::get('/set_jp', [LangController::class, 'lang_jp'])->name('set_jp');
