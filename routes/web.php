<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::redirect('/anasayfa','/home');

Route::get('/', function () {
    return view('home.index',['name'=>'Simge Senem SARILMAZ']);
    //
});
Route::get('/home', [HomeController::class, 'index']);
Route::get('/test/{id}', [HomeController::class, 'test']
)->where('id', '[0-9]+');

//Admin
    Route::get('/admin',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
//******************ADMIN CATEGORY ROUTES**************************
    Route::get('/admin/category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('/admin/category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::post('/admin/category/store',[\App\Http\Controllers\Admin\CategoryController::class,'store'])->name('admin_category_store');
    Route::get('/admin/category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::post('/admin/category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('/admin/category/destroy/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_destroy');
    Route::get('/admin/category/show/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');

Route::get('/admin/login',[HomeController::class, 'login']);
Route::post('/admin/logincheck',[HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout',[HomeController::class, 'logout']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
