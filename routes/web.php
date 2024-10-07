<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Public Pages
Route::get('/', function () {
    return view('welcome');
});

Route::get('/page1', function () {
    return view('pages.page1');
})->name('page1');

Route::get('/page2', function () {
    return view('pages.page2');
})->name('page2');

Route::get('/page3', function () {
    return view('pages.page3');
})->name('page3');

Route::get('/page4', function () {
    return view('pages.page4');
})->name('page4');

Route::get('/page5', function () {
    return view('pages.page5');
})->name('page5');


// Authenticated Routes
Route::middleware("roleAuth:admin")->group(function () {
    Route::get("/admin", [UserController::class, "index"])->name("admin");
    Route::get("/admin/create", [UserController::class, 'create'])->name('admin.create');
    Route::get("/admin/{id}", [UserController::class, 'show'])->name('admin.show');
    Route::get("/admin/edit/{id}", [UserController::class, 'edit'])->name('admin.edit');
    Route::get('/dashboard', function () {
        return view('dashboard'); // Ensure this view exists
    })->name('dashboard');

    Route::get('/page6', [PageController::class, 'page6'])->name('page6');
    Route::get('/page7', [PageController::class, 'page7'])->name('page7');

    
    });    
    
Route::middleware(['roleAuth:user'])->group(function () {
    Route::get('/user', [PostController::class, "blog"])->name('user');
    Route::get('/user/create', [PostController::class, 'create'])->name('user.create');
    Route::get('/user/show/{id}', [PostController::class, 'show'])->name('user.show');
    Route::get('/user/edit/{id}', [PostController::class, 'edit'])->name('user.edit');
    Route::post('/user', [PostController::class, 'store'])->name('posts.store');
});  