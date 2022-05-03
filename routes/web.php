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
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('index');
//******************ADMIN CATEGORY ROUTES**************************
    Route::prefix('/category')->name('category.')->controller(\App\Http\Controllers\Admin\CategoryController::class)->group(function() {

        Route::get('/','index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store',  'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });
});

Route::get('/admin/login',[HomeController::class, 'login']);
Route::post('/admin/logincheck',[HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout',[HomeController::class, 'logout']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
