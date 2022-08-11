<?php

use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\StudentApplicationFormController;
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


Route::get('/set_eng', [LangController::class, 'index'])->name('set_eng');
Route::get('/set_jp', [LangController::class, 'lang_jp'])->name('set_jp');
