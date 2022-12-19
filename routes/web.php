<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RealToolController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonalToolController;
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

Route::get('/', [RealToolController::class, 'Home']);
Route::get('/home', [RealToolController::class, 'index']);
Route::get('/error', [RealToolController::class, 'error']);

Route::get('/addPersonalTool', [UserController::class, 'addPersonalTool']);
Route::post('/addPersonalTool', [UserController::class, 'insertPersonalTool']);

Route::get('/users', [UserController::class, 'index']);
Route::get('/delete-user/{id}', [UserController::class, 'deleteUser']);
Route::get('/personalTools', [PersonalToolController::class, 'index']);

Route::get('/profile', [UserController::class, 'showProfile']);
Route::get('/edit-profile', [UserController::class, 'editProfile']);
Route::post('/edit-profile', [UserController::class, 'updateProfile']);
Route::get('/register', [UserController::class, 'create']);
Route::post('/register', [UserController::class, 'doRegistration']);

Route::get('/login', [UserController::class, 'showLogin']);
Route::post('/login', [UserController::class, 'DoLogin']);

Route::get('/admin-login', [UserController::class, 'showAdminLogin']);
Route::post('/admin-login', [UserController::class, 'AdminLogin']);
Route::get('/admin-profile', [UserController::class, 'showAdminProfile']);
Route::get('/edit-admin-profile', [UserController::class, 'editAdminProfile']);
Route::post('/edit-admin-profile', [UserController::class, 'updateAdminProfile']);
//////Route::post('/edit-user', [UserController::class, 'updateAdminProfile']);

Route::get('/questions-form', [UserController::class, 'showQuestionFormData']);
Route::post('/questions-form', [UserController::class, 'insertQuestionFormData']);

Route::get('/calculator', [UserController::class, 'showCalculator']);
Route::get('/compare', [UserController::class, 'showCompare']);

Route::get('/logout', [UserController::class, 'logOut']);

Route::get('/store', [RealToolController::class, 'showStore']);
Route::get('/tools', [RealToolController::class, 'index']);
Route::get('/buyTool/{id}', [RealToolController::class, 'buyTool']);
Route::get('/store-details/{id}', [RealToolController::class, 'storeDetails']);
Route::get('/tool-details/{id}', [RealToolController::class, 'toolDetails']);
Route::post('/tool-details/{id}', [RealToolController::class, 'insertRating']);
Route::get('/createTool', [RealToolController::class, 'create']);
Route::post('/createTool', [RealToolController::class, 'store']);

Route::get('/forum', [PostController::class, 'index']);
Route::get('/createPost', [PostController::class, 'create']);
Route::post('/createPost', [PostController::class, 'store']);


Route::get('/last-cal', [PostController::class, 'teste']);


Route::get('/welcome', function () {
    return view('welcome');
});

/*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';

/*/