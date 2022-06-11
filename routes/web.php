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

Route::get('/welcome', function () {
    return view('welcome');
});
//******************HOME PAGE ROUTES**************************

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/references',[HomeController::class,'references'])->name('references');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/storemessage',[HomeController::class,'storemessage'])->name('storemessage');
Route::get('/faq',[HomeController::class,'faq'])->name('faq');
Route::post('/storecomment',[HomeController::class,'storecomment'])->name('storecomment');


Route::get('/test/{id}', [HomeController::class, 'test']
)->where('id', '[0-9]+');

Route::post('/save',[HomeController::class,'save'])->name('save');
//Admin
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('index');
//******************GENERAL ROUTES**************************
    Route::get('/settings',[\App\Http\Controllers\Admin\HomeController::class,'settings'])->name('settings');
    Route::post('/settings',[\App\Http\Controllers\Admin\HomeController::class,'settingsUpdate'])->name('settings.update');
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
    //******************ADMIN MESSAGE ROUTES**************************
    Route::prefix('/message')->name('message.')->controller(\App\Http\Controllers\Admin\MessageController::class)->group(function() {

        Route::get('/','index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}',  'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');

    });
    //******************ADMIN FAQ ROUTES**************************
    Route::prefix('/faq')->name('faq.')->controller(\App\Http\Controllers\Admin\FaqController::class)->group(function() {

        Route::get('/','index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store',  'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');

    });
    //******************ADMIN COMMENT ROUTES**************************
    Route::prefix('/comment')->name('comment.')->controller(\App\Http\Controllers\Admin\CommentController::class)->group(function() {

        Route::get('/','index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}',  'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');

    });
});

Route::get('/service/{id}',[HomeController::class,'Service'])->name('service');
Route::get('/categoryservices/{id}/{slug}',[HomeController::class,'categoryservices'])->name('categoryservices');


Route::get('/admin/login',[HomeController::class, 'login']);
Route::post('/admin/logincheck',[HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout',[HomeController::class, 'logout']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
