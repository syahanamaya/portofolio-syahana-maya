<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::redirect('/about', '/#about')->name('about');
Route::redirect('/skills', '/#skills')->name('skills');
Route::redirect('/projects', '/#projects')->name('projects');
Route::redirect('/experience', '/#experience')->name('experience');
Route::redirect('/certifications', '/#certifications')->name('certifications');
Route::redirect('/contact', '/#contact')->name('contact');
