<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site;

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

Route::get('/', Site\HomeController::class)->name('site.home');

Route::get('produtos', [Site\CategoryController::class, 'index'])->name('site.products');
Route::get('produtos/{category}', [Site\CategoryController::class, 'show'])->name('site.products.category');

Route::get('blog', Site\BlogController::class)->name('site.blog');

Route::view('sobre', 'site.about.index')->name('site.about');

Route::get('contato', [Site\ContactController::class, 'index'])->name('site.contact');
Route::post('contato', [Site\ContactController::class, 'form'])->name('site.contact.form');
