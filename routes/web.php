<?php

use App\Http\Controllers\LessonController;
use App\Http\Controllers\PastPaperController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

//Lessons
Route::get('lesson', [LessonController::class, 'index'])->name('lesson');
Route::get('add-lesson', [LessonController::class, 'addLesson'])->name('add-lesson');
Route::post('create-lesson', [LessonController::class, 'createLesson'])->name('create-lesson');
Route::get('edit-lesson/{id}', [LessonController::class, 'editLesson'])->name('edit-lesson');
Route::post('update-lesson', [LessonController::class, 'updateLesson'])->name('update-lesson');
Route::get('delete-lesson/{id}', [LessonController::class, 'deleteLesson'])->name('delete-lesson');

//Past-Papers
Route::get('past-papers', [PastPaperController::class, 'index'])->name('past-papers');
Route::get('add-papers', [PastPaperController::class, 'addPapers'])->name('add-papers');
Route::post('create-papers', [PastPaperController::class, 'createPapers'])->name('create-papers');
Route::get('edit-papers/{id}', [PastPaperController::class, 'editPaper'])->name('edit-papers');
Route::post('update-paper', [PastPaperController::class, 'updatePaper'])->name('update-paper');
Route::get('delete-paper/{id}', [PastPaperController::class, 'deletePaper'])->name('delete-paper');
