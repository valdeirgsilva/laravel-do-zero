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

Route::get('/', Site\HomeController::class);

Route::get('produtos', [Site\CategoryController::class, 'index']);
Route::get('produtos/{slug}', [Site\CategoryController::class, 'show']);

Route::get('blog', Site\BlogController::class);

Route::view('sobre', 'site.about.index');

Route::get('contato', [Site\ContactController::class, 'index']);
Route::post('contato', [Site\ContactController::class, 'form']);
