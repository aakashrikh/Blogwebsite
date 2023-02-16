<?php
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MagzineController;
use App\Http\Controllers\MagzineSubController;
use App\Http\Controllers\UploadController;
Route::get('/', function(){
    return view('login');
});

    //Route For Password
    Route::post('/auth', [AdminController::class, 'auth']);
    Route::get('/password', [AdminController::class, 'index']);
    Route::post('/change_password', [AdminController::class, 'change_password']);

    Route::get('signout',function(){
        Session::flush();
        return redirect('/');
    });
Route::group(['middleware' => 'admin_auth'],function(){
        // Route For index
        Route::get('/dashboard', [IndexController::class, 'index']);
        // Route For Category
        Route::get('/category', [CategoryController::class, 'index']);
        Route::post('/categoryPost', [CategoryController::class, 'store']);
        Route::get('/getDetails', [CategoryController::class, 'getDetails']);
        Route::post('/update', [CategoryController::class, 'update']);
        Route::get('/delete_category/{id}', [CategoryController::class, 'destroy']);
        // Route For category-content


        Route::get('/category-content', [BlogController::class, 'index']);
        Route::get('/new-content', [BlogController::class, 'new_content']);
        Route::get('/getCategoryDetails', [BlogController::class, 'getCategoryDetails']);
        Route::post('/add_content', [BlogController::class, 'store']);
        Route::post('/updateContent', [BlogController::class, 'update']);
        Route::get('/getContent', [BlogController::class, 'getContent']);
        Route::get('/deletecontent/{id}', [BlogController::class, 'destroy']);
        Route::post('/search_content', [BlogController::class, 'search_content']);


        //Add View Routes
        Route::get('add-view',function(){
            return view('/add-view');
        });
        Route::get('page-content',function(){
            return view('/page-content');
        });

        //Magzine Route
        Route::get('/magazine', [MagzineController::class, 'index']);
        Route::post('/addMagzine', [MagzineController::class, 'store']);
        Route::get('/getMagzineDetails', [MagzineController::class, 'getMagzineDetails']);
        Route::post('/updateMagzine', [MagzineController::class, 'update']);
        Route::get('/deletemagzine/{id}', [MagzineController::class, 'destroy']);

        //Magzine Subscription Routes
        Route::get('/magazine-sub', [MagzineSubController::class, 'index']);

        //Uploads Routes

        Route::get('/uploads', [UploadController::class, 'index']);
        Route::post('/uploadImages', [UploadController::class, 'store']);
        Route::get('/deleteUpload/{id}', [UploadController::class, 'destroy']);


    
    });













