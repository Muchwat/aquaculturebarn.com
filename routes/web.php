<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WorkRecordController;
use App\Models\Team;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\LanguageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/login', fn() => redirect(route('filament.auth.login')))->name('login');
Route::get('lang/{locale}', [LanguageController::class, 'switch'])->name('lang.switch');

Route::get('/', [HomeController::class, 'show'])->name('home');

Route::get('/about', function () {
    // Fetch all team members from the database
    $teamMembers = Team::all();

    // Return the view and pass the team members data to it
    return view('about', [
        'teamMembers' => $teamMembers,
    ]);
});

Route::get('/faqs', fn() => view('faqs'));
Route::get('/services', fn() => view('services'))->name('services');
Route::get('/career', [CareerController::class, 'show'])->name('career');
Route::get('/articles', [BlogController::class, 'show'])->name('articles');
Route::get('/articles/{slug}', [BlogController::class, 'detail'])->name('articles-detail');
Route::get('/news', [NewsController::class, 'show'])->name('news');
Route::get('/news/{slug}', [NewsController::class, 'detail'])->name('news-detail');
Route::get('/work-records', [WorkRecordController::class, 'show'])->name('work.records');
//Route::get('/products', [ProductController::class, 'show'])->name('products');
// Route for the products listing page
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route for a single product detail page (using slug)
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::get('/save/quatation', [QuotationController::class, 'save'])->name('save-quatation');