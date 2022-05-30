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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
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

    //******************ADMIN SERVICE ROUTES**************************
    Route::prefix('/service')->name('service.')->controller(\App\Http\Controllers\Admin\AdminServiceController::class)->group(function() {

        Route::get('/','index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store',  'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });
    //******************ADMIN SERVICE IMAGE GALLERY ROUTES**************************
    Route::prefix('/image')->name('image.')->controller(\App\Http\Controllers\Admin\ImageController::class)->group(function() {

        Route::get('/{sid}','index')->name('index');
        Route::post('/create/{sid}', 'create')->name('create');
        Route::post('/store/{sid}',  'store')->name('store');
        Route::get('/destroy/{sid}/{id}', 'destroy')->name('destroy');

    });
});

Route::get('/service/{id}',[HomeController::class,'Service'])->name('service');

Route::get('/admin/login',[HomeController::class, 'login']);
Route::post('/admin/logincheck',[HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout',[HomeController::class, 'logout']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
