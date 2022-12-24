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

//Levels
Route::get('view-level-1', [LessonController::class, 'viewLevelOne'])->name('view-level-1');
Route::get('view-level-1-details/{id}', [LessonController::class, 'viewLevelOneDetails'])->name('view-level-1-details');
Route::get('view-level-2', [LessonController::class, 'viewLevelTwo'])->name('view-level-2');
Route::get('view-level-2-details/{id}', [LessonController::class, 'viewLevelTwoDetails'])->name('view-level-2-details');
Route::get('view-level-3', [LessonController::class, 'viewLevelThree'])->name('view-level-3');
Route::get('view-level-3-details/{id}', [LessonController::class, 'viewLevelThreeDetails'])->name('view-level-3-details');
Route::get('view-level-4', [LessonController::class, 'viewLevelFour'])->name('view-level-4');
Route::get('view-level-4-details/{id}', [LessonController::class, 'viewLevelFourDetails'])->name('view-level-4-details');
Route::get('view-level-5', [LessonController::class, 'viewLevelFive'])->name('view-level-5');
Route::get('view-level-5-details/{id}', [LessonController::class, 'viewLevelFiveDetails'])->name('view-level-5-details');

//Download Level PDF
Route::get('pdf-download/{id}', [LessonController::class, 'pdfDownload'])->name('pdf-download');
Route::get('pdf-download/{id}', [LessonController::class, 'pdfDownloadTwo'])->name('pdf-download');
Route::get('pdf-download/{id}', [LessonController::class, 'pdfDownloadThree'])->name('pdf-download');
Route::get('pdf-download/{id}', [LessonController::class, 'pdfDownloadFour'])->name('pdf-download');
Route::get('pdf-download/{id}', [LessonController::class, 'pdfDownloadFive'])->name('pdf-download');

//Past-papers
Route::get('past-papers', [PastPaperController::class, 'index'])->name('past-papers');
Route::get('add-papers', [PastPaperController::class, 'addPapers'])->name('add-papers');
Route::post('create-papers', [PastPaperController::class, 'createPapers'])->name('create-papers');
Route::get('edit-papers/{id}', [PastPaperController::class, 'editPaper'])->name('edit-papers');
Route::post('update-paper', [PastPaperController::class, 'updatePaper'])->name('update-paper');
Route::get('delete-paper/{id}', [PastPaperController::class, 'deletePaper'])->name('delete-paper');

//papers
Route::get('view-paper-1', [PastPaperController::class, 'viewPaperOne'])->name('view-paper-1');
Route::get('view-paper-1-details/{id}', [PastPaperController::class, 'viewPaperOneDetails'])->name('view-paper-1-details');
Route::get('view-paper-2', [PastPaperController::class, 'viewPaperTwo'])->name('view-paper-2');
Route::get('view-paper-2-details/{id}', [PastPaperController::class, 'viewPaperTwoDetails'])->name('view-paper-2-details');
Route::get('view-paper-3', [PastPaperController::class, 'viewPaperThree'])->name('view-paper-3');
Route::get('view-paper-3-details/{id}', [PastPaperController::class, 'viewPaperThreeDetails'])->name('view-paper-3-details');
Route::get('view-paper-4', [PastPaperController::class, 'viewPaperFour'])->name('view-paper-4');
Route::get('view-paper-4-details/{id}', [PastPaperController::class, 'viewPaperFourDetails'])->name('view-paper-4-details');
Route::get('view-paper-5', [PastPaperController::class, 'viewPaperFive'])->name('view-paper-5');
Route::get('view-paper-5-details/{id}', [PastPaperController::class, 'viewPaperFiveDetails'])->name('view-paper-5-details');

//Download Papers
Route::get('/pdf-download-paper-1/{id}', [PastPaperController::class, 'pdfDownloadPaperOne'])->name('/pdf-download-paper-1');
Route::get('/pdf-download-paper-2/{id}', [PastPaperController::class, 'pdfDownloadPaperTwo'])->name('/pdf-download-paper-2');
Route::get('/pdf-download-paper-3/{id}', [PastPaperController::class, 'pdfDownloadPaperThree'])->name('/pdf-download-paper-3');
Route::get('/pdf-download-paper-4/{id}', [PastPaperController::class, 'pdfDownloadPaperFour'])->name('/pdf-download-paper-4');
Route::get('/pdf-download-paper-5/{id}', [PastPaperController::class, 'pdfDownloadPaperFive'])->name('/pdf-download-paper-5');





//Contact Us
Route::post('add-contact', [ContactUsController::class, 'addContact'])->name('add-contact');
Route::get('view-contact', [ContactUsController::class, 'viewContact'])->name('view-contact');
Route::get('delete-contact/{id}', [ContactUsController::class, 'deleteContact'])->name('delete-contact');
Route::get('edit-contact/{id}', [ContactUsController::class, 'editContact'])->name('edit-contact');
