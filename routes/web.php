<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'section'])->defaults('section', 'about')->name('about');
Route::get('/skills', [HomeController::class, 'section'])->defaults('section', 'skills')->name('skills');
Route::get('/projects', [HomeController::class, 'section'])->defaults('section', 'projects')->name('projects');
Route::get('/experience', [HomeController::class, 'section'])->defaults('section', 'experience')->name('experience');
Route::get('/certifications', [HomeController::class, 'section'])->defaults('section', 'certifications')->name('certifications');
Route::get('/contact', [HomeController::class, 'section'])->defaults('section', 'contact')->name('contact');
