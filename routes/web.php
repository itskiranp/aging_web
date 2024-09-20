<?php
use App\Http\Controllers\PublicationController;
use App\Livewire\ShowHome;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'Index'])->name('Index');
Route::get('/study', [PageController::class, 'study'])->name('study');
Route::get('/data', [PageController::class, 'data'])->name('data');
Route::get('/publications', [PageController::class, 'publications'])->name('publications');
// Route::get('/people', [PageController::class, 'people'])->name('people');
Route::get('/links', [PageController::class, 'links'])->name('links');
Route::get('/About', [PageController::class, 'About'])->name('About');

Route::get('/feedback', [PageController::class, 'showFeedback'])->name('feedback');


Route::get('/publications', [PublicationController::class, 'index']);

Route::get('/people/researcher', [PageController::class, 'showResearcher'])->name('people.researcher');
Route::get('/people/staff', [PageController::class, 'showStaff'])->name('people.staff');
Route::get('/people/investigators', [PageController::class, 'showInvestigatorMember'])->name('people.investigators');




