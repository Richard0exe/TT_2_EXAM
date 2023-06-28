<?php

use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MusicianController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TaskController;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

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
})->name('home');

Route::group(['middleware'=>'auth'],function(){
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

Route::view('profile', 'profile')->name('profile');
Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

});


Route::middleware('auth')->group(function () {
    Route::get('/musicians', [MusicianController::class, 'index'])->name('musicians.index');
    Route::get('/musicians/create', [MusicianController::class, 'create'])->name('musicians.create');
    Route::post('/store', [MusicianController::class, 'store'])->name('musicians.store');
    Route::delete('/musicians/{id}', [MusicianController::class, 'destroy'])->name('musicians.destroy');
    Route::get('/musicians/{id}/edit', [MusicianController::class, 'edit'])->name('musicians.edit');
    Route::put('/musicians/{id}', [MusicianController::class, 'update'])->name('musicians.update');
});




  

Route::middleware(['auth'])->group(function () {
    Route::resource('songs', SongController::class);
});

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');



Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

require __DIR__.'/auth.php';

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});





