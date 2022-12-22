<?php

use App\Http\Controllers\ContactUsController;
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
Route::get('view-level-1', [LessonController::class, 'viewLevelOne'])->name('view-level-1');
Route::get('view-level-2', [LessonController::class, 'viewLevelTwo'])->name('view-level-2');
Route::get('view-level-3', [LessonController::class, 'viewLevelThree'])->name('view-level-3');
Route::get('view-level-4', [LessonController::class, 'viewLevelFour'])->name('view-level-4');
Route::get('view-level-5', [LessonController::class, 'viewLevelFive'])->name('view-level-5');


//Past-Papers
Route::get('past-papers', [PastPaperController::class, 'index'])->name('past-papers');
Route::get('add-papers', [PastPaperController::class, 'addPapers'])->name('add-papers');
Route::post('create-papers', [PastPaperController::class, 'createPapers'])->name('create-papers');
Route::get('edit-papers/{id}', [PastPaperController::class, 'editPaper'])->name('edit-papers');
Route::post('update-paper', [PastPaperController::class, 'updatePaper'])->name('update-paper');
Route::get('delete-paper/{id}', [PastPaperController::class, 'deletePaper'])->name('delete-paper');

//Contact Us
Route::post('add-contact', [ContactUsController::class, 'addContact'])->name('add-contact');
Route::get('view-contact', [ContactUsController::class, 'viewContact'])->name('view-contact');
Route::get('delete-contact/{id}', [ContactUsController::class, 'deleteContact'])->name('delete-contact');
Route::get('edit-contact/{id}', [ContactUsController::class, 'editContact'])->name('edit-contact');
