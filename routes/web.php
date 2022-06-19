<?php
use App\Http\Livewire\Posts;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CollectionPostController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\PesananController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/post', Posts::class);

Route::resource('/projects', ProjectController::class);
Route::get('users/{id}', function ($id) {});

Route::resource('collection', CollectionPostController::class);
Route::resource('blog', BlogPostController::class);
Route::resource('/pesanans', PesananController::class);
    