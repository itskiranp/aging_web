<?php
use App\Http\Controllers\PublicationController;
use App\Livewire\ShowHome;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/products',[ProductController::class,'index'])->name('products.index');
Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::post('/products',[ProductController::class,'store'])->name('products.store');


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/Research', [PageController::class, 'Research'])->name('Research');
Route::get('/publications', [PageController::class, 'publications'])->name('publications');
Route::get('/links', [PageController::class, 'links'])->name('links');
Route::get('/About', [PageController::class, 'About'])->name('About');

Route::get('/publications', [PublicationController::class, 'index']);

