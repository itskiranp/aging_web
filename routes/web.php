<?php
use App\Http\Controllers\PublicationController;
use App\Livewire\ShowHome;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'Index'])->name('Index');
Route::get('/Research', [PageController::class, 'Research'])->name('Research');
Route::get('/publications', [PageController::class, 'publications'])->name('publications');
Route::get('/links', [PageController::class, 'links'])->name('links');
Route::get('/About', [PageController::class, 'About'])->name('About');

Route::get('/publications', [PublicationController::class, 'index']);

Route::get('/cvfs', [PageController::class, 'cvfs'])->name('cvfs');


// Route::get('/cvfs', function () {
//     return view('cvfs');
// })->name('cvfs');


