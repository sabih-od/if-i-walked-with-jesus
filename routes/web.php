<?php

use App\Http\Controllers\Front\FrontController;
use Illuminate\Support\Facades\Route;

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

//front routes
Route::get('/', [FrontController::class, 'home'])->name('front.home');
Route::get('/about', [FrontController::class, 'about'])->name('front.about');
Route::get('/daily-bible-study-questions', [FrontController::class, 'dailyBibleStudyQuestions'])->name('front.dailyBibleStudyQuestions');
Route::get('/lessons-learnned-on-daddys-lap', [FrontController::class, 'lessonsLearnnedOnDaddysLap'])->name('front.lessonsLearnnedOnDaddysLap');
Route::get('/outside-resources', [FrontController::class, 'outsideResources'])->name('front.outsideResources');
