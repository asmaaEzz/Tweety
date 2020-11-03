<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function (){
    Route::post('/tweets',[App\Http\Controllers\TweetsController::class, 'store'])->name('tweets');
    Route::get('/tweets', [App\Http\Controllers\TweetsController::class, 'index'])->name('home');
    Route::post('/profiles/{user:username}/follow',[App\Http\Controllers\FollowsController::class, 'store'])->name('follow');

    Route::get('/profiles/{user:username}/edit',[App\Http\Controllers\ProfilesController::class, 'edit'])->middleware('can:edit,user');

    Route::patch('/profiles/{user:username}',[App\Http\Controllers\ProfilesController::class, 'update'])->middleware('can:edit,user');

    Route::get('/explore', [App\Http\Controllers\ExploreController::class, 'index'])->name('explore');


});

Route::get('/profiles/{user:username}',[App\Http\Controllers\ProfilesController::class, 'show'])->name('profile');

