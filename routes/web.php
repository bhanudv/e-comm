<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\SpecController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceReviewController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\SiteDataController;

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

//pages
Route::get('/', [HomeController::class, 'index'])->name('home.index');
// items
Route::get('/items', [ItemController::class, 'index'])->name('items.index');
Route::post('/items', [ItemController::class, 'store'])->name('items.store');
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
Route::get('/items/{id}', [ItemController::class, 'show'])->name('items.show');
Route::delete('/items/destroy', [ItemController::class, 'destroy'])->name('items.destroy');

//category
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');

//sub category
Route::get('/sub-category', [SubCategoryController::class, 'index'])->name('subcategory.index');

//brands
Route::get('/brands', [BrandController::class, 'index'])->name('brands.index');

//feature
Route::get('/feature', [FeatureController::class, 'index'])->name('feature.index');

//spec
Route::get('/spec', [SpecController::class, 'index'])->name('spec.index');

//question
Route::get('/question', [QuestionController::class, 'index'])->name('questions.index');

//review
Route::get('/review', [ReviewController::class, 'index'])->name('review.index');

//customer
Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/customer/show', [CustomerController::class, 'show'])->name('customer.show');

//service review
Route::get('/service-review', [ServiceReviewController::class, 'index'])->name('service-review.index');

//invoice
Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice.index');

//site data
Route::get('/site-data', [SiteDataController::class, 'index'])->name('site-data.index');
