<?php

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
 
// Route Par Défaut
Route::get('/', [App\Http\Controllers\RessourcesController::class, 'index'])
    ->name('homepage');

    
// Route Liste Des Posts
Route::get('/posts', [App\Http\Controllers\RessourcesController::class, 'index'])
    ->name('posts.index'); 



// Route Voyager
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
