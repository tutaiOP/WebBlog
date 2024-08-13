<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\RegisterController;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\Staff\StaffController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Tag\TagController;
use App\Http\Controllers\Admin\Author\AuthorController;
use App\Http\Controllers\Admin\Post\PostController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\MainAdminController;

use App\Http\Middleware\StaffMiddleware;

use App\Http\Controllers\MainController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BlogPostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/users/login',[LoginController::class,'index'])->name('login');
Route::post('/admin/users/login/store',[LoginController::class,'store']);

Route::get('/admin/users/register',[RegisterController::class,'index']);
Route::get('/admin/users/register/store',[RegisterController::class,'store']);
Route::post('/admin/users/register/store',[RegisterController::class,'store']);


 Route::middleware([StaffMiddleware::class])->group(function () {
    Route::prefix('admin')->group(function () {

        Route::get('/',[MainAdminController::class,'index'])->name('admin');
        Route::get('/main',[MainAdminController::class,'index']);

            // Staff
             Route::prefix('staff')->group(function () {
            
             Route::get('list',[StaffController::class,'index']);
             Route::get('add',[StaffController::class,'create']);
             Route::post('add',[StaffController::class,'store']);

             Route::get('edit/{staff}',[StaffController::class,'show']);
             Route::post('edit/{staff}',[StaffController::class,'update']);
             Route::DELETE('destroy',[StaffController::class,'destroy']); 
            });

                   // Category
          Route::prefix('category')->group(function () {
            
            Route::get('list',[CategoryController::class,'index']);
            Route::get('add',[CategoryController::class,'create']);
            Route::post('add',[CategoryController::class,'store']);

            Route::get('edit/{category}',[CategoryController::class,'show']);
            Route::post('edit/{category}',[CategoryController::class,'update']);
            Route::DELETE('destroy',[CategoryController::class,'destroy']);
       });
            //  TAG
         Route::prefix('tag')->group(function () {

            Route::get('list',[TagController::class,'index']);
            Route::get('add',[TagController::class,'create']);
            Route::post('add',[TagController::class,'store']);

            Route::get('edit/{tag}',[TagController::class,'show']);
            Route::post('edit/{tag}',[TagController::class,'update']);

            Route::DELETE('destroy',[TagController::class,'destroy']);
         });

            //Author
            Route::prefix('author')->group(function () {

                Route::get('list',[AuthorController::class,'index']);
                Route::get('add',[AuthorController::class,'create']);
                Route::post('add',[AuthorController::class,'store']);
    
                Route::get('edit/{author}',[AuthorController::class,'show']);
                Route::post('edit/{author}',[AuthorController::class,'update']);
    
                Route::DELETE('destroy',[AuthorController::class,'destroy']);
             });

             //Post
            Route::prefix('post')->group(function () {

                Route::get('list',[PostController::class,'index']);
                Route::get('add',[PostController::class,'create']);
                Route::post('add',[PostController::class,'store']);
    
                Route::get('edit/{post}',[PostController::class,'show']);
                Route::post('edit/{post}',[PostController::class,'update']);
    
                Route::DELETE('destroy',[PostController::class,'destroy']);
             });

            //  UPLOAD
            Route::post('upload/services',[UploadController::class,'store']);

    });
 });

Route::get('/',[MainController::class,'index']);

Route::get('danh-muc/{id}-{name}.html',[MenuController::class,'index']);
Route::get('blog-post/{id}-{name}',[BlogPostController::class,'index']);
