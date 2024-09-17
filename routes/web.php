<?php
use App\Http\Controllers\PublicationController;
use App\Livewire\ShowHome;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'Index'])->name('Index');
Route::get('/Research', [PageController::class, 'Research'])->name('Research');
Route::get('/publications', [PageController::class, 'publications'])->name('publications');
// Route::get('/people', [PageController::class, 'people'])->name('people');
Route::get('/links', [PageController::class, 'links'])->name('links');
Route::get('/About', [PageController::class, 'About'])->name('About');

Route::get('/publications', [PublicationController::class, 'index']);

Route::get('/people/researcher', [PageController::class, 'showResearcher'])->name('people.researcher');
Route::get('/people/staff', [PageController::class, 'showStaff'])->name('people.staff');
Route::get('/people/board', [PageController::class, 'showBoardMember'])->name('people.board');




