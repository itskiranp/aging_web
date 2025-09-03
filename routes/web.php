<?php

use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ContactController;
use App\Livewire\ShowHome;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\GoogleTranslateController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Models\Event;

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/', [PageController::class, 'index'])->name('Index');
Route::get('/biomarkers', [PageController::class, 'biomarkers'])->name('biomarkers');
Route::get('/data', [PageController::class, 'data'])->name('data');
Route::get('/publications', [PageController::class, 'publications'])->name('publications');
// Route::get('/people', [PageController::class, 'people'])->name('people');
Route::get('/links', [PageController::class, 'links'])->name('links');
// Route::get('/events', [PageController::class, 'events'])->name('events');

Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');


Route::get('/About', [PageController::class, 'About'])->name('About');

Route::get('/feedback', [PageController::class, 'showFeedback'])->name('feedback');
Route::get('/connect', [PageController::class, 'showConnect'])->name('connect');
// web.php
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Route for displaying publications on the frontend
Route::get('/publications', [PublicationController::class, 'index']);

Route::get('/people/staff', [PageController::class, 'showStaff'])->name('people.staff');
Route::get('/people/investigators', [PageController::class, 'showInvestigatorMember'])->name('people.investigators');


Route::get('/capacitybuilding/interviewing', [PageController::class, 'showinterviewingMember'])->name('capacitybuilding.interviewing');
Route::get('/capacitybuilding/specifictraining', [PageController::class, 'showspecificMember'])->name('capacitybuilding.specifictraining');
Route::get('/capacitybuilding/datatraining', [PageController::class, 'showdataMember'])->name('capacitybuilding.datatraining');
Route::get('/capacitybuilding/ci', [PageController::class, 'showciMember'])->name('capacitybuilding.ci');



Route::get('/investigators', [PageController::class, 'investigators'])->name('investigators');
Route::get('/people/staff', [PageController::class, 'showStaff'])->name('staff.show');

// Route::get('/events', [EventController::class, 'index']);
Route::get('/events', [EventController::class, 'showEvents'])->name('events');
// Route::get('/news/{id}', [EventController::class, 'showNews'])->name('news.show');
Route::get('/news/{slug}', [EventController::class, 'showNews'])->name('news.show');







// routes/web.php
Route::get('/publication', [PublicationController::class, 'index'])->name('publication.index');
Route::get('/publication/journal', [PublicationController::class, 'journal'])->name('publication.journal');

Route::get('/publication/presentations', [PublicationController::class, 'presentations'])->name('publication.presentations');

Route::get('/publication/working', [PublicationController::class, 'workingPaper'])->name('publication.working');
