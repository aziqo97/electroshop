<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForAllController;
use App\Http\Controllers\CardController;
use App\Http\Middleware\VerifyCsrfToken;
use App\Http\Controllers\AdminController;
use Illuminate\Auth\Middleware;

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

Route::get('/', [ForAllController::class, 'index'])->name('index');
Route::get('/products/{id}', [ForAllController::class, 'single'])->name('single');
Route::get('/podcat/{id}', [ForAllController::class, 'podcat'])->name('podcat');
Route::get('/cat/{id}', [ForAllController::class, 'cat'])->name('cat');
Route::get('/search', [ForAllController::class, 'search'])->name('search');
Route::get('/todayselled', [ForAllController::class, 'todayselled'])->name('todayselled');
Route::get('/mostselled', [ForAllController::class, 'mostselled'])->name('mostselled');
Route::get('/load-cart-data', [CardController::class, 'cartloadbyajax'])->name('cartloadbyajax');
Route::get('/cardlistall', [CardController::class, 'cardlistall'])->name('cardlistall');
Route::post('/add-to-cart', [CardController::class, 'addtocart'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::get('/delcart/{id}', [CardController::class, 'delcart']);
Route::get('/admin', [AdminController::class, 'index'])->name('adminindex')->middleware('Admin');
//if (!\Illuminate\Support\Facades\Auth::check()){
//if (!\Illuminate\Support\Facades\Auth::check()){
    Route::get('/admin/adminlist', [AdminController::class, 'adminlist'])->name('adminlist')->middleware('Admin');
    Route::get('/admin/addcategory', [AdminController::class, 'addcategory'])->name('addcategory')->middleware('Admin');
    Route::post('/admin/addcategory', [AdminController::class, 'postaddcategory'])->name('postaddcategory')->middleware('Admin');
    Route::get('/admin/addproduct', [AdminController::class, 'addproduct'])->name('addproduct')->middleware('Admin');
    Route::post('/admin/addproduct', [AdminController::class, 'postaddproduct'])->name('postaddproduct')->middleware('Admin');
    Route::get('/admin/productslist', [AdminController::class, 'productslist'])->name('productslist')->middleware('Admin');
    Route::get('/admin/editslider', [AdminController::class, 'editslider'])->name('editslider')->middleware('Admin');
    Route::get('/admin/edittop3slide', [AdminController::class, 'edittop3slide'])->name('edittop3slide')->middleware('Admin');
    Route::get('/admin/editbottom2', [AdminController::class, 'editbottom2'])->name('editbottom2')->middleware('Admin');
//}
//}
Auth::routes();
